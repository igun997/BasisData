<?php
echo "SELEKSI IF<br>";
  $t=date("H");
  if ($t<"5")
{
    echo "Sekarang masih fajar";
  } else {
    echo "Sekarang bukan fajar <br>";
  }
 ?>


 <?php
 echo "<br>LOOPING FOR<br>";
 for ($a=1;$a<=10;$a++){
    echo "Nomor".$a."<br>";
}
?>
