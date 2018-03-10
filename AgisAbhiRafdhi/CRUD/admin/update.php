<?php
include 'koneksi.php';
if(isset($_POST['edit'])){
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$status   = $_POST['status'];

$edit = mysqli_query($koneksi,"UPDATE `user` SET `username`='$username', `password`='$password', `status`=$status WHERE `id`='$id'");
}
if(mysqli_affected_rows()>0){

}
header("location:halaman_utama.php?pesan=update");
?>
