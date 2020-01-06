<?php
defined('BASEPATH') OR exit ('No direct script acces allowed');
class Produk extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');

	}
	public function index()
	{
		$data['judul']="Data Produk";
		$data['produk']=$this->M_produk->tampil()->result();
		$this->load->view('produk/tampil',$data,FALSE);
	}
	public function input() 
	{
		$data['judul']="Input Data Produk";
		$this->load->view('produk/input',$data);
	}
	public function simpan() 
	{
	$data=array(
		'id'=>$this->input->post('id'),
		'kode_produk'=>$this->input->post('kode_produk'),
		'nama_produk'=>$this->input->post('nama_produk'),
		'harga'=>$this->input->post('harga'),
		'stok'=>$this->input->post('stok'),
	);
	$this->M_produk->simpan($data);
	redirect('produk','refresh');
	}
	public function hapus()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
		$this->db->delete('produk');
		redirect('produk','refresh');
	}
		
}