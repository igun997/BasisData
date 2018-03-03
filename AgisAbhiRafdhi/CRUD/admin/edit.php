<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<a href="halaman_utama.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php
	include "koneksi.php";
	$id = $_GET['id_guru'];
	$query_mysql = mysql_query("SELECT guru.id_guru, matkul.nama_matkul, guru.nama_guru FROM guru INNER JOIN matkul where id_guru=$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>Nama Matkul</td>
				<td>
					<input type="hidden" name="id_guru" value="<?php echo $data['id_guru'] ?>">
					<input type="text" name="nama_matkul" value="<?php echo $data['nama_matkul'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input type="text" name="nama_guru" value="<?php echo $data['nama_guru'] ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
