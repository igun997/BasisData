<html>
<head>
	<title>Toko Buku | Beli Buku</title>
</head>
<body>
	<a href="beranda.php">Beranda</a></br>
	<a href="tambah_buku.php">Daftar Buku</a></br>
	<a href="beli_buku.php">Beli Buku</a>
	<center>
	<h1>TOKO BUKU</h1>
	<form action="" method="post">
    <table>
        <tr>
          <th><strong>Beli Buku</strong></th>
        </tr>
        <tr>
          <td>Kode Buku :</td>
          <td><input type="text" name="id_buku"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Beli">
          </td>
        </tr>
    </table>
	</center>
	<?php
	include 'db.php';
	$data = new DB();
	$con = $data->get();
	if(isset($_POST["id_buku"])){
		$id_buku = $_POST["id_buku"];
		$hapus = $con->query("DELETE FROM toko WHERE id_buku=$id_buku");
	}
	?>
</body>
</html>
