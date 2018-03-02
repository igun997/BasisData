<?php
includ "koneksi.php";
$id = $_GET["id_guru"];
mysql_query("DELETE guru.nama_guru, matkul.nama_matkul From guru INNER join matkul on guru.id_guru=matkul.id_matkul");
header("location:halaman_utama.php?pesan=hapus");
 ?>
