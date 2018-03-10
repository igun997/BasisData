<?php
include 'koneksi.php';
if(isset($_POST['simpan'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $status   = $_POST['status'];
  $query =mysqli_query($koneksi,"INSERT INTO `user` (`username`,`password`,`status`) VALUES ('$username','$password',$status)");
}else{

  
  echo "<script>alert('gagal ditambah');</script>";
}
header("location:halaman_utama.php?pesan=input");
?>
