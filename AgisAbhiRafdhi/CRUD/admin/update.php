<?php

include 'koneksi.php';
$id = $_POST['id_guru'];
$nama = $_POST['nama_matkul'];
$nama_guru = $_POST['nama_guru'];

mysqli_query("UPDATE guru SET nama_matkul='$nama_matkul', nama_guru='$nama_guru' SELECT guru.id_guru, matkul.nama_matkul, guru.nama_guru from guru INNER JOIN matkul WHERE id_guru='$id'");

header("location:index.php?pesan=update");
?>
