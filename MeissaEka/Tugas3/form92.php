<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
	<center><h1>Form Penjualan Tiket Kereta Api</h1></center>
	<form method="post" action="proses92.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Total Anak</td>
				<td>:</td>
				<td><input type="text" name="anak"></td>
			</tr>
			<tr>
				<td>Stasiun Awal</td>
				<td>:</td>
				<td><select name="awal">
					<option value="Bandung">Bandung</option>
					<option value="Banjar">Banjar</option>
				</select></td>
			</tr>
			<tr>
				<td>Stasiun Akhir</td>
				<td>:</td>
				<td>
					<select name="akhir">
					<option value="Bandung">Bandung</option>
					<option value="Banjar">Banjar</option>
				</select>
				</td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Submit">
	</form>
	
</body>
</html>