<html>
<head>
<title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="login.php" method="post" onSubmit="return validasi()">
    <table>
        <tr>
          <td>Username :</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Passord :</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>
          <a href="tambah_akun.html">Daftar Akun</a></br>
          </td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Login">
          </td>
        </tr>
    </table>
  </form>
  <script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}

</script>
</body>
</html>
