<html>
<head>
<title>Request GET</title>
</head>
<body>
  <h2>Request GET</h2>
  <form action="gitphp2_get.php" method="get">
    <table>
        <tr>
          <td>Bilangan Ke 1 :</td>
          <td><input type="number" name="bil1"></td>
        </tr>
        <tr>
          <td>Bilangan Ke 2:</td>
          <td><input type="number" name="bil2"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Hitung">
          </td>
        </tr>
    </table>
  </form>
  <?php
  @$bil1 = $_GET['bil1'];
  @$bil2 = $_GET['bil2'];

  $hasil=$bil1+$bil2;
  echo "Hasil dari $bil1 + $bil2 = $hasil";
  ?>
</body>
</html>
