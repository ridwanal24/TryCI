<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_NAME.' | Tambah Data'; ?></title>
</head>
<body>
	<h1>Tambah Data</h1>
	<form action="<?php echo site_url('orang/tambah'); ?>" method="get">
		<p>Nama</p>
		<p><input type="text" name="nama" value="<?php echo $nama; ?>" required></p>
		<p>No Telp</p>
		<p><input type="number" name="no_telp" value="<?php echo $no_telp; ?>" required></p>
		<p>Kota</p>
		<p><input type="text" name="kota" value="<?php echo $kota; ?>" required></p>
		<p>Provinsi</p>
		<p><input type="text" name="provinsi" value="<?php echo $provinsi; ?>" required></p>
		<p><input type="submit" name="submit" value="Tambah"></p>
	</form>
</body>
</html>