<html>
<head>
<title>Request POST</title>
</head>
<body>
  <h2>Request POST</h2>
  <form action="gitphp2_post.php" method="post">
    <table>
        <tr>
          <td>Nama :</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Alamat :</td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin :</td>
          <td><select name="jk">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
          </select></td>
        </tr>
        <tr>
          <td>Sekolah :</td>
          <td><input type="text" name="sekolah"></td>
        </tr>
        <tr>
          <td>
          <input type="submit" value="Masukan">
          </td>
        </tr>
    </table>
  </form>
  <?php
  if(isset($_POST["nama"])){
    $nama      = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $jk        = $_POST['jk'];
    $sekolah   = $_POST['sekolah'];


    echo "Nama    : ".$nama; '".."'
    echo "<br>";
    echo "Alamat  : ".$alamat;
    echo "<br>";
    echo "Jenis Kelamin : ".$jk;
    echo "<br>";
    echo "Sekolah : ".$sekolah;
  }
  ?>
</body>
</html>
