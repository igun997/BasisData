<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php  
	$nama=$_POST['nama'];
	$pass=$_POST['pass'];
	$kel=$_POST['kel'];
	$tgl=$_POST['tgl'];
	$bln=$_POST['bln'];
	$thn=$_POST['thn'];
	switch($bln){
		case 1 : $bln="Januari"; break;
		case 2 : $bln="Februari"; break;
		case 3 : $bln="Maret"; break;
		case 4 : $bln="April"; break;
		case 5 : $bln="Mei"; break;
		case 6 : $bln="Juni"; break;
		case 7 : $bln="Juli"; break;
		case 8 : $bln="Agustus"; break;
		case 9 : $bln="September"; break;
		case 10 : $bln="Oktober"; break;
		case 11 : $bln="November"; break;
		case 12 : $bln="Desember"; break;
	}
	if(($nama=="eka")&&($pass=='ekakusayang')&&($kel=="P")&&($tgl==12)&&($bln==8)&&($thn==1998)){
		echo $nama.", Anda adalah admin <br/> Lahir Pada Tanggal ".$tgl." ".$bln." ".$thn;
	}
	else echo $nama.", Anda Adalah Pengguna Umum <br/> Lahir Pada Tanggal ".$tgl." ".$bln." ".$thn." ";
	?>
		
		<a href='http://localhost/BSD/proses2.php?nama=akunrahasia01&pass=123'><br><input type="submit" name="name" value="submit" ></a>


</body>
</html>