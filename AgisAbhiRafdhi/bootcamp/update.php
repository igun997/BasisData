<?php
include 'koneksi.php';
if(isset($_POST['edit'])){
  $id        = $_POST['id_berita'];
  $judul     = $_POST['judul'];
  $gambar    = $_POST['gambar'];
  $deskripsi = $_POST['deskripsi'];
  $id_user = $_POST['id_user'];

  $edit = mysqli_query($koneksi,"UPDATE `utama` SET judul=`$judul`, `gambar`=`$gambar`,`deskripsi`=`$deskripsi`,`id_user`=$id_user WHERE `id_berita`=$id")
}
header("location:halaman_utama.php");
 ?>
