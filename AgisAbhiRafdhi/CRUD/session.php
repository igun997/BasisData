<?php
$username = $_POST['username'];
$password = md5($_POST['password']);
include "config.php";

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/halaman_utama.php");
echo "aaaaa";
}else{
	header("location:login.php");

}
 ?>
