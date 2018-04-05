<?php
include "koneksi.php";
$id = $_GET["id_berita"];
mysqli_query($koneksi,"DELETE FROM user where id_berita=$id");
header("location:halaman_utama.php");
 ?>
