<?php
if(isset($_POST['simpan'])){
  $judul     = $_POST['judul'];
  $gambar    = $_POST['gambar'];
  $deskripsi = $_POST['deskripsi'];
  $id_user   = $_POST['id_user'];
  $query = mysqli_query($koneksi,"INSERT INTO `utama` (`judul`,`gambar`,`deskripsi`,`id_user`) VALUES (`$judul`,`$gambar`,`$deskripsi`,$id_user)" );
}
header("location:halaman_utama.php");
 ?>
