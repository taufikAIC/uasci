<!DOCTYPE html>
<html>
<head>
	<title>Data Produk</title>
</head>
<body>
	<?php echo anchor('produk/input','Tambah Produk'); ?>
	<table border="1">
		<tr>
			<td>Id</td>
			<td>Kode Produk</td>
			<td>Nama Produk</td>
			<td>Harga</td>
			<td>Stok</td>
			<td>Aksi</td>
		</tr>
		<?php foreach ($produk as $key => $value){ ?>
		<tr>
			<td><?php echo $value->id ?></td>
			<td><?php echo $value->kode_produk ?></td>
			<td><?php echo $value->nama_produk ?></td>
			<td><?php echo $value->harga ?></td>
			<td><?php echo $value->stok ?></td>
			<td><a href="<?php echo base_url('produk/hapus' .$value->id); ?>">Hapus</a></td>
		</tr>
		<?php }?>
	</table>

</body>
</html>