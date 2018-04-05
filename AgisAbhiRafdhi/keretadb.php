<?php
include 'koneksi.php';
$dewasa     = $_POST['dewasa'];
$anak       = $_POST['anak'];
$saw        = $_POST['saw'];
$sak        = $_POST['sak'];
$total      = $_POST['total'];
$harga      = $_POST['harga'];
$harga_anak = $_POST['harga_anak'];
$query      = mysqli_query($koneksi,"INSERT INTO pesan ('dewasa','anak','saw','sak','total') VALUES ($dewasa,$anak,$saw,$sak,$total)");
if(($saw=='bandung'&&$sak=='bandung') ||($saw=='banjar'&&$sak=='banjar'))
  {
  echo "tujuan awal dan akhir tidak boleh sama";
}else{
 $harga=100000*$dewasa;

}
if($anak>0)
{
  $harga_anak=0.1*$harga*$anak;
}
$total=$harga+$harga_anak;

echo "Total Harga = Rp ".$total;

 ?>
