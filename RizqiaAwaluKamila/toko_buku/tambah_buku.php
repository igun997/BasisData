<html>
<head>
	<title>Toko Buku | Tambah Buku</title>
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
          <th><strong>Daftar Buku</strong></th>
        </tr>
				<td><input type="hidden" name="id_buku"></td>
        <tr>
          <td>Judul Buku :</td>
          <td><input type="text" name="nama_buku"></td>
        </tr>
        <tr>
          <td>Harga :</td>
          <td><input type="text" name="harga"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Masukan">
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
			$nama_buku = $_POST["nama_buku"];
			$harga = $_POST["harga"];
		$tambah = $con->query("INSERT INTO toko (nama_buku,harga) VALUES ('$nama_buku',$harga)");
		header("location:beranda.php");
		}

	?>
</body>
</html>
