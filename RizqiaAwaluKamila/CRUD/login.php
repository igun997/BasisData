<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysql_query("select * from user where username='$username' and password='$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
  //$_SESSION['password'] = $password;
	$_SESSION['status'] = "login";
	header("BasisData/RizqiaAwaluKamila/CRUD/user.php");
}else{
	header("user.php");
}

?>