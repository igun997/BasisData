<html>
<header>
  <title>Belajar POST GET</title>
</header>
<body>
<form action="gitphp2_post.php" method="post">
  Nama          : <input type="text" name="nama"/><br/>
  Alamat        : <input type="text" name="alamat"/><br/>
  Jenis Kelamin : <input type="radio" name="kelamin" <?php if(isset($kelamin) && $kelamin=="laki laki") echo "check";?> value="laki laki"/>Laki Laki
  <input type="radio" name="kelamin" <?php if(isset($kelamin) && $kelamin=="perempuan")echo "check";?> value="perempuan"/>perempuan<br/>
  Sekolah       : <input type="text" name="Sekolah"/><br/>
  <input type="submit" value="Input"/><br/>
</form>

<?php
@$nama      = $_POST['nama'];
@$alamat    = $_POST['alamat'];
@$kelamin   = $_POST['kelamin'];
@$sekolah   = $_POST['sekolah'];

echo "Nama    : ".$nama;
echo "Alamat  : ".$alamat;
echo "Kelamin : ".$kelamin;
echo "Sekolah : ".$sekolah;
?>
</body>
 </html>
