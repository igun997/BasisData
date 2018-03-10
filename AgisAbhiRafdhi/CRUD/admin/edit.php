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
	include 'koneksi.php';
  $id    = $_GET['id'];
	$query = mysqli_query($koneksi,"SELECT * FROM user WHERE id='$id'");
	$db= mysqli_fetch_array($query);
		?>
	<form action="update.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $db['id'] ?>">
					<input type="text" name="username" value="<?php echo $db['username'] ?>">
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $db['password'] ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $db ['status']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
