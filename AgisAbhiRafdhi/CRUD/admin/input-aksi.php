<?php
include 'koneksi.php';
$nama_matkul = $_POST['nama_matkul'];
$nama_guru = $_POST['nama_guru'];

mysql_query("INSERT INTO guru VALUES('','$nama_matkul','$nama_guru') SELECT matkul.nama_matkul, guru.nama_guru. FROM guru INNER JOIN matkul ON guru.id_guru=matkul.id_matkul");

header("location:halaman_utama.php?pesan=input");
?>
