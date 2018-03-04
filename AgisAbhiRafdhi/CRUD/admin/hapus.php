<?php
includ "koneksi.php";
$id = $_GET["id_guru"];
mysqli_query("DELETE user where id_user=$id");
header("location:halaman_utama.php?pesan=hapus");
 ?>
