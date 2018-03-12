<html>
<head>
<title>Toko Buku | Beranda</title>
</head>
<body>
<a href="beranda.php">Beranda</a></br>
<a href="tambah_buku.php">Daftar Buku</a></br>
<a href="beli_buku.php">Beli Buku</a>
<center><h1>TOKO BUKU</h1></center>
<center><strong>Buku Yang Tersedia </strong>
<?php
  include 'db.php';
	$data = new DB();
	$con = $data->get();
	if(isset($_POST["id_buku"])){
		$id_buku = $_POST["id_buku"];
		$nama_buku = $_POST["nama_buku"];
		$harga = $_POST["harga"];
	}
	$tampil = $con->query("SELECT * FROM toko");
?>
<table border="1">
	<tr>
		<td>No.</td>
		<td>Kode Buku</td>
		<td>Nama Buku</td>
		<td>Harga</td>
		<td>Opsi</td>
	</tr>
	<?php $i=1; while($t = $tampil->fetch_array()){ ?>
	<tr>
		<td><?php echo $i++ ?> </td>
		<td><?php echo $t["id_buku"]; ?> </td>
		<td><?php echo $t["nama_buku"]; ?> </td>
		<td><p>Rp. <?php echo $t["harga"]; ?> </p></td>
		<td><a href="edit_buku.php?'id_buku' = $t['id_buku']">Edit Buku</a></br></td>

	</tr>
	<?php
	 }
	?>
</table>
</center>
</body>
</html>
