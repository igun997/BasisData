<html>
  <head>
    <meta charset="utf-8">
    <title>Login Session</title>
  </head>
  <body>
    <div class ="login">
    <form action="session.php" method="post" onsubmit="return validasi()">
      <tr>
        <td>Username </td>
        <td><input type="text" name="username" id="username"></td><br/>
      </tr>
      <tr>
        <td>Password </td>
        <td><input type="password" name="password" id="password"><br/>
        <input type="submit" name="submit" value="Login">
      </tr>
    </form>
  </div>
  </body>
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
</html>
