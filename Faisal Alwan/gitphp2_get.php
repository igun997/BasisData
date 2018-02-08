<!DOCTYPE html>
<html>
  <head>
    <title>HITUNG-HITUNGAN</title>
  </head>
  <body>
    <form action="gitphp2_get.php" method="get">
      Bilangan Pertama :
      <input type="text" name="bil1" ><br>
      Bilangan Kedua :
      <input type="text" name="bil2"><br>
      <input type="submit" value="Kali">
    </form>
    <?php
    $bil1=$_GET['bil1'];
    $bil2=$_GET['bil2'];
    echo "$bil1 x $bil2 = ".$bil1*$bil2;
     ?>
  </body>
</html>
