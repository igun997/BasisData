<?php
echo "SELEKSI MENGGUNAKAN IF<br>";
  $x=date("H");
  if ($x<"10")
{
    echo "Data yang anda masukan cukup";
  } else {
    echo "Data melebihi batas <br>";
  }
 ?>


 <?php
 echo "<br>LOOPING FOR<br>";
 for ($y=1;$y<=15;$y++){
    echo "Angka".$y."<br>";
}
?>
