<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_NAME.' | '.$data['nama']; ?></title>
</head>
<body>
<h1>Lihat Profil</h1>
<p><?php echo $data['nama']; ?></p>
<p><?php echo '+'.$data['no_telp']; ?></p>
<p><?php echo $data['kota']; ?></p>
<p><?php echo $data['provinsi']; ?></p>
</body>
</html>