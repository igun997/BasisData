<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>tiket Kereta</title>
  </head>
  <body>
    <form action="gitphp3_kereta.php" method="POST">
      Banyak Penumpang <br/>
      Dewasa : <input type="text" name="dewasa"><br/>
      Anak : <input type="text" name="dede"><br>
      Stasiun Awal : <select name="saw">
        <option value="Bandung">Bandung</option>
        <option value ="Banjar">Banjar</option><br/>
      </select>
      Stasiun AKhir : <select name="sak">
        <option value="Bandung">Bandung</option>
        <option value="Banjar">Banjar</option></br>
        </select>
      <input type="submit" value="Pesan"></br>

    </form>
  <?php

@$dewasa = $_POST['dewasa'];
@$anak   = $_POST['dede'];
@$saw    = $_POST['saw'];
@$sak    = $_POST['sak'];
@$harga  = $_POST ['harga'];
@$harga_anak=$_POST['harga_anak'];
@$total = $_POST['total'];
if(($saw=='Bandung'&&$sak=='Bandung') ||($saw=='Banjar' && $sak=='Banjar')){
  echo "pemberangkatan dan Tujuan Tidak Boleh sama";
}else{
  $harga=100000*$dewasa;

  $harga=$harga+$harga_anak;
}

if($anak>=0){
  $harga_anak=0.1*$harga*$anak;
}

$total=$harga+$harga_anak;
echo "Kereta Dari $saw menuju $sak <br>";
echo "<br>Biaya Orang Dewasa Rp ".$harga;
echo "<br>Biaya tiket Anak Rp ".$harga_anak;
echo "<br>Biaya Total Rp ".$total; 
   ?>
  </body>
</html>
