<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_NAME.' | Update Data'; ?></title>
</head>
<body>
	<h1>Update Data</h1>
	<form action="<?php echo site_url('orang/edit'); ?>" method="get">
		<p><input type="hidden" name="id" value="<?php echo $data['id']; ?>"></p>
		<p>Nama</p>
		<p><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required></p>
		<p>No Telp</p>
		<p><input type="text" name="no_telp" value="<?php echo $data['no_telp']; ?>" required></p>
		<p>Kota</p>
		<p><input type="text" name="kota" value="<?php echo $data['kota']; ?>" required></p>
		<p>Provinsi</p>
		<p><input type="text" name="provinsi" value="<?php echo $data['provinsi']; ?>" required></p>
		<p><input type="submit" name="submit" value="Tambah"></p>
	</form>
</body>
</html>