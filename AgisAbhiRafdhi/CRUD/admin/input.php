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
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>status</td>
				<td><select name="status">
					<option value="1">1</option>
					<option value="2">2</option>
				</select></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
