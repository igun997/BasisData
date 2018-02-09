<!DOCTYPE html>
<html>
  <head>
    <title>PORMULIR</title>
  </head>
  <body>
    <form action="gitphp2_post.php" method="post">
      Nama   : <input type="text" name="nama"><br>
      Alamat : <input type="text" name="alamat"><br>
      Jenis Kelamin : <select name="jk">
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>
      <br>
      Sekolah : <input type="text" name="sekolah"><br>
      <input type="submit" value="Pencet">
    </form>
    <?php
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $sekolah=$_POST['sekolah'];
    echo "Nama Yang Dimasukkan :".$nama;
    echo "<br>Alamat Yang Dimasukkan :".$alamat;
    echo "<br>Jenis Kelamin Yang Dimasukkan :".$jk;
    echo "<br>Nama Sekolah :".$sekolah;
     ?>
  </body>
</html>
