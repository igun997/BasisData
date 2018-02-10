<html>
<head>
<title>Request GET</title>
</head>
<body>
  <h2>Stasiun Kereta Api Bandung-Banjar Banjar-Bandung</h2>
  <form action="gitphp3_ka.php" method="get">
    <table>
        <tr>
          <td>Nama :</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Total Anak :</td>
          <td><input type="number" name="total_anak"></td>
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
          <!-- <?php
            //echo "$s_akhir";
          ?></td> -->
          <!-- <td><select name="s_akhir">
            <option value="Bandung">Bandung</option>
            <option value="Banjar">Banjar</option>
          </select></td> -->
        </tr>
        <tr>
          <td>
          <input type="submit" value="Bayar">
          </td>
        </tr>
    </table>
  </form>
  <?php
  @$nama = $_GET['nama'];
  @$total_anak = $_GET['total_anak'];
  @$s_awal = $_GET['s_awal'];
  @$s_akhir = $_GET['s_akhir'];

  if($s_awal == "Bandung"){
    $s_akhir="Banjar";
  }else if($s_awal == "Banjar"){
    $s_akhir="Bandung";
  }else{
    echo "Anda harus memasukan tujuan awal!";
  }

  if($total_anak>0){
    $harga=100000;
    $harga_anak=100000*($total_anak*0.1);
    $total=$harga+$harga_anak;
  }else{
    $harga=100000;
    $harga_anak=0;
    $total=$harga;
  }

  echo "Nama : $nama <br>";
  echo "Jumlah Anak : $total_anak <br>";
  echo "Pemberangkatan Dari : $s_awal <br>";
  echo "Tujuan : $s_akhir <br>";
  echo "Harga Tiket Anda : Rp.$harga <br>";
  echo "Harga Tiket $total_anak Anak : Rp.$harga_anak <br>";
  echo "Total : Rp.$total <br>";

  ?>
</body>
</html>
