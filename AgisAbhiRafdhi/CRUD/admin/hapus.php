<?php
include "koneksi.php";
$id = $_GET["id"];
mysqli_query($koneksi,"DELETE FROM user where id=$id");
header("location:halaman_utama.php?pesan=hapus");
 ?>
