<!DOCTYPE html>
<html>
<head>
	<title><?php echo SITE_NAME; ?></title>
</head>
<body>
	<h1>Daftar Nama Orang</h1>
	<?php echo anchor('orang/tambah', 'Tambah Data'); ?>
	<table>
		<?php foreach ($data as $item): ?>
			<tr>
				<td><?php echo $item['id'].'. '; ?></td>
				<td><?php echo $item['nama']; ?></td>
				<td><?php echo anchor('view/'.$item['id'], 'Details'); ?> | <?php echo anchor('orang/hapus/'.$item['id'],"Hapus"); ?> | <?php echo anchor('orang/edit/'.$item['id'],'Edit'); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>