<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<?php  
		$teks="Login User";
			for($a=1;$a<=5;$a++){
				echo "<center>";
				echo "<h".$a.">".$teks."</h".$a.">";
				echo "</center>";
			}
		?>
	<form method="post" action="proses.php">
		Nama Anda <br>
		<input type="text" name="nama"><br>
		Password <br>
		<input type="Password" name="pass"><br>
		Jenis Kelamin &ensp; <input type="checkbox" name="kel" value="L"> Laki-laki &ensp; <input type="checkbox" name="kel" value="P"> Perempuan <br>
		Tgl/Bln/Thn Lahir &ensp; 
		<?php 
		echo "<select name='tgl'>";
			for($tgl=1;$tgl<=31;$tgl++){
			echo "<option value=".$tgl.">".$tgl."</option>";
		}
		echo "</select>";
		echo "&ensp;";

		echo "<select name='bln'>";
			for($bln=1;$bln<=12;$bln++){
			echo "<option value=".$bln.">".$bln."</option>";
		}
		echo "</select>";
		echo "&ensp;";

		echo "<select name='thn'>";
			for($thn=1945;$thn<=2020;$thn++){
			echo "<option value=".$thn.">".$thn."</option>";
		}
		echo "</select>";
		 ?>
		 <br><br>
		<input type="submit" name="submit" value="Submit">

	</form>
</body>
</html>