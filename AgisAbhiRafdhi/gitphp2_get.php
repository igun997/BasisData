<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REQUEST GET</title>
  </head>
  <body>
    <form action="gitphp2_get.php" method="get">
      Penjumlahan<br/>
      Angka Pertama : <input type="text" name="satu"><br/>
      Angka Ke dua  : <input type="text" name="dua"><br/>
      <input type="submit" value="hitung"><br/>
    </form>

    <?php
    $satu = $_GET['satu'];
    $dua = $_GET['dua'];

    echo "$satu + $dua".$satu+$dua;
     ?>
  </body>
</html>
