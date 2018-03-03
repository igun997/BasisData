<!DOCTYPE html>
<html>
<head>
	<title> Input </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<br/>

	<a href="halaman_utama.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>Matkul</td>
				<td><input type="text" name="nama_matkul"></td>
			</tr>
			<tr>
				<td>Nama Guru</td>
				<td><input type="text" name="nama_guru"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
