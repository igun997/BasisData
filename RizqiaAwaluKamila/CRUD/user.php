<html>
<head>
<title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <h4>Halo Selamat Datang</h4>
  <a href="index.php">Keluar</a></br>

  <?php
  include 'BasisData/RiqiaAwaluKamila/CRUD/config.php';

  // mengaktifkan session
  session_start();

  // cek apakah user telah login, jika belum login maka di alihkan ke halaman login
  if($_SESSION['status'] !="login"){
  	header("BasisData/RiqiaAwaluKamila/CRUD/index.php");
  }

  // menampilkan pesan selamat datang
  echo "Hai, selamat datang ". $_SESSION['username'];

  ?>
  <br/>
  <br/>
  <!--<a href="logout.php">LOGOUT</a>-->

</body>
</html>
