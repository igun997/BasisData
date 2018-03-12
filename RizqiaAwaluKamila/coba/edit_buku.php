<html>
<head>
	<title>Toko Buku | Edit Buku</title>
</head>
<body>
	<a href="beranda.php">Beranda</a></br>
	<a href="tambah_buku.php">Daftar Buku</a></br>
	<a href="beli_buku.php">Beli Buku</a>
	<center>
	<h1>TOKO BUKU</h1>
	<form action="" method="post">
		<?php
		  include 'db.php';
			$data = new DB();
			$con = $data->get();
			if(isset($_GET["id_buku"])){
				var_dump("id_buku");
				$id_buku = $_POST["id_buku"];
				$nama_buku = $_POST["nama_buku"];
				$harga = $_POST["harga"];
			}
			$tampil = $con->query("SELECT * FROM toko WHERE id_buku = $id_buk");
		?>
		<?php while($t = $tampil->fetch_array()){ ?>
    <table>
        <tr>
          <th><strong>Edit Buku</strong></th>
        </tr>
        <input type="hidden" name="id_buku" value="">
        <tr>
          <td>Judul Buku :</td>
          <td><input type="" value="<?php echo $t["nama_buku"]; ?>" name="nama_buku"></td>
        </tr>
        <tr>
          <td>Harga Buku :</td>
          <td><input type="text" value="<?php echo $t["harga"]; ?>" name="harga"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Edit">
          </td>
        </tr>
				<?php
				 }
				?>
    </table>
	</center>
	<?php
		if(isset($_POST["id_buku"])){
			$id_buku = $_POST["id_buku"];
			$nama_buku = $_POST["nama_buku"];
			$harga = $_POST["harga"];
		  $tambah = $con->query("UPDATE toko SET id_buku = $id_buku, nama_buku = '$nama_buku', harga = $harga WHERE id_buku = $id_buku");
			header("location:beranda.php");
	 }
	?>
</body>
</html>
