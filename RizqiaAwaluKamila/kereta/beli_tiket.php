<html>
<head>
<title>Kereta Api</title>
</head>
<body>
  <h2>Stasiun Kereta Api Bandung-Banjar Banjar-Bandung</h2>
  <form action="" method="get">
    <table>
        <tr>
          <td> Dewasa :</td>
          <input type="hidden" name="id_tiket">
          <td><input type="number" name="dewasa"></td>
        </tr>
        <tr>
          <td> Anak :</td>
          <td><input type="number" name="anak"></td>
        </tr>
        <tr>
          <td>Stasiun Awal :</td>
          <td><select name="s_awal">
            <option value="Bandung">Bandung</option>
            <option value="Banjar">Banjar</option>
          </select></td>
        </tr>
        <tr>
          <td>Stasiun Akhir :</td>
          <td><input type="hidden" name="s_akhir"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Pesan">
          </td>
        </tr>
    </table>
  </form>
  <?php
  include 'db.php';
  $data = new DB();
  $con = $data->get();
  if(isset($_POST["dewasa"])){
    $dewasa = $_POST["dewasa"];
    $anak = $_POST["anak"];
    $insert = $con->query("INSERT INTO tiket (dewasa, anak) VALUES ('$dewasa','$anak')");
    header("location:beli_tiket.php");
  }
  ?>

</body>
</html>
