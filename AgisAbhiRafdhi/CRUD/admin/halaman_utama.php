<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a href="input.php">+ Tambah Data Baru</a>

	<h3 align="center">Data user</h3>
	<table border="1" class="table" align="center">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<?php
		include 'koneksi.php';
		$query = mysqli_query($koneksi,"SELECT * FROM user");
		foreach ($query as $key => $db) {
			# code...

$nomor=1;
		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $db['username']; ?></td>
				<td><?php echo $db['password']; ?></td>
				<td><?php echo $db['status']; ?></td>
				<td>
					<a class="edit" href="edit.php?id=<?php echo $db['id']; ?>">Edit</a> |
					<a class="hapus" href="hapus.php?id=<?php echo $db['id']; ?>">Hapus</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
