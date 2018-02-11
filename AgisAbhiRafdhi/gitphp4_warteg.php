<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aplikasi Perhitungan Warteg</title>
  </head>
  <body>
    <form action="gitphp4_warteg.php" method="post">
    Nasi : <input type="text" name="nasi"></br>
    Ikan : <input type="text" name="ikan"></br>
    Sayur : <input type="text" name="sayur"></br>
    Telor : <input type="text" name="telor"></br>
    Es teh Manis : <input type="text" name="etm"><br/>
    <input type="submit" value="Hitung"><br/>

    </form>
<?php
@$nasi = $_POST['nasi'];
@$ikan = $_POST['ikan'];
@$sayur = $_POST['sayur'];
@$telor = $_POST['telor'];
@$etm = $_POST['etm'];
@$nas =$_POST['nas'];
@$ik = $_POST['ik'];
@$say = $_POST['say'];
@$tel = $_POST['tel'];
@$et = $_POST['et'];
@$harga = $_POST['harga'];

$nas=4000;
$ik=5000;
$say=2000;
$tel=3000;
$et=3000;

$harga=($nas*$nasi)+($ik*$ikan)+($say*$sayur)+($tel*$telor)+($et*$etm);
echo "Biaya Rp ".$harga;
 ?>
 
  </body>
</html>
