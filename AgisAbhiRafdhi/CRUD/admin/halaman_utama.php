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
			<th>Matkul</th>
			<th>Pengajar</th>
			<th>Action</th>
		</tr>
		<?php
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT guru.id_guru, matkul.nama_matkul, guru.nama_guru FROM guru INNER JOIN matkul ")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama_matkul']; ?></td>
			<td><?php echo $data['nama_guru']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id_guru']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id_guru']; ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
