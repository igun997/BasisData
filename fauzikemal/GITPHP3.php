<html>
<body>
  <h2>FORM PENJUALAN TIKET KERETA API</h2>
  <form action="GITPHP3.php" method="post">
  <table>
    <tr>
      <th>NAMA</th>
      <td>:</td>
      <td><input type="text" name="nama"></td>
    </tr>
    <tr>
      <th>JUMLAH ANAK</th>
      <td>:</td>
      <td><input type="number" name="jmlanak"></td>
    </tr>
    <tr>
      <th>STASIUN AWAL</th>
      <td>:</td>
      <td><select name="stawal">
          <option value="bdg">Bandung</option>
          <option value="bjr">Banjar</option>
          </select>
      </td>
    </tr>
    <tr>
      <th>STASIUN AKHIR</th>
      <td>:</td>
      <td><select name="stakhir">
          <option value="bdg">Bandung</option>
          <option value="bjr">Banjar</option>
          </select>
      </td>
    </tr>
  </table>
  <input type="submit" value="Submit">
  </form>

<?php
@$nama = $_POST["nama"];
@$jmlanak = $_POST["jmlanak"];
@$stawal = $_POST["stawal"];
@$stakhir = $_POST["stakhir"];

$harga = $stawal + $stakhir;
$harga = 100000;

if ($stawal == $stakhir) {
    echo "Stasiun Tidak Boleh Sama";
} else {
  echo "Total Harga Adalah".$harga + $jmlanak + 0.1;
}
?>
</body>
</html>
