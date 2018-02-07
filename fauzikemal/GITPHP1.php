<!DOCTYPE html>
<html>
<body>
  <?php
    for ($x = 0; $x <= 10 ; $x++) {
      if ($x == 5)
       $var = 'Ini Angka 5<br>';
      else
       $var = "Ini Bukan Angka 5, Melainkan Angka : $x <br>";
       echo $var;
    }

   ?>
</body>
</html>
