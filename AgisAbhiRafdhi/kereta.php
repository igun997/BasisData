<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pemesanan tiket kereta Api Online</title>
  </head>
  <body>
    <table border=0>
      <form action="kereta.php" method="post">
<tr>
  <td>Banyak Penumpang </td>
</tr>

<tr>
  <td>Dewasa</td>
  <td>:</td>
  <td><input type="text" name="dewasa"></td>
</tr>

<tr>
  <td>Anak</td>
  <td>:</td>
  <td><input type="text" name="anak"></td>
</tr>

<tr>
  <td>Stasiun Awal</td>
  <td>:</td>
  <td><select name="saw">
  <option value="bandung">Bandung</option>
  <option value="banjar">Banjar</option>
  </select>
  </td>
</tr>

<tr>
  <td>Stasiun Akhir</td>
  <td>:</td>
  <td><select name="sak">
  <option value="bandung">Bandung</option>
  <option value="banjar">Banjar</option>
  </select>
  </td>
</tr>
<tr>
  <td>
<input type="submit" value="Hitung">
</td>
</tr>


      </form>

    </table>
  </body>
</html>
<?php
include 'koneksi.php';
@$dewasa     = $_POST['dewasa'];
@$anak       = $_POST['anak'];
@$saw        = $_POST['saw'];
@$sak        = $_POST['sak'];
@$total      = $_POST['total'];
@$query      = mysqli_query($koneksi,"INSERT INTO 'pesan' ('dewasa','anak','saw','sak','total') VALUES ($dewasa,$anak,$saw,$sak,$total)");
if(($saw=='bandung'&&$sak=='bandung') ||($saw=='banjar'&&$sak=='banjar'))
  {
  echo "tujuan awal dan akhir tidak boleh sama";
}else{
 $total=(100000*$dewasa)+($anak*0.1*(100000*$dewasa));
echo "Total Biaya Rp. $total";
}


 ?>
