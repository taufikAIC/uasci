<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk Baru</title>
</head>
<body>
	<?php echo form_open('produk/simpan');?>
	<table border="1">
		<tr>
			<td>Id</td><td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>Kode Produk</td><td><input type="text" name="kode_produk"></td>
		</tr>
		<tr>
			<td>Nama Produk</td><td><input type="text" name="nama_produk"></td>
		</tr>
		<tr>
			<td>Harga</td><td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>Stok</td><td><input type="text" name="stok"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Simpan"></td>
			<td><input type="reset" value="Batal"></td>
		</tr>
	</table>
	<?php echo form_close(); ?>

</body>
</html>