<html>
<body>
  <form action="GITPHP2_POST.php" method="post">
    NAMA LENGKAP : <input type="text" name="nama"><br>
    ALAMAT : <textarea name="alamat"></textarea><br>
    JENIS KELAMIN :<br>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Laki-Laki") echo "checked";?> value="Laki-Laki">Laki-Laki<br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Perempuan") echo "checked";?> value="Perempuan">Perempuan<br>
    ASAL SEKOLAH : <input type="text" name="sekolah"><br>
    <input type="submit"><br>
  </form>

</form>
</body>
</html>
