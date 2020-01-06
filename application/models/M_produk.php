<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class M_produk extends CI_Model {
	public function tampil()
	{
		return $this->db->get('produk');
	}
	public function simpan($data)
	{
		return $this->db->insert('produk',$data);
	}
}