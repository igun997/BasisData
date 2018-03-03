<!DOCTYPE html>
<html>
<head>
	<title>Form Validasi - CRUD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
		<form action="login.php" method="post" onSubmit="return validasi()">
      <table>
        <tr>
				    <td><label>Username:</label></td>
            <td><input type="text" name="username" id="username" /></td>
        </tr>
			  <tr>
				    <td><label>Password:</label></td>
				    <td><input type="password" name="password" id="password" /></td>
				</tr>
        <tr>
				      <td><input type="submit" value="Login" class="tombol"></td>
        </tr>
		</form>
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
