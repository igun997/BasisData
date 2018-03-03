<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SPIDMDC</title>
  </head>
  <body>
    <form action="spidmdc.php" method="post">
      Usia : <input type="number" name="usia"><br/>
      Aktivitas : <input type="radio" name="aktivitas" <?php if(isset($aktivitas) && $aktivitas=="Ringan") echo "check";?> value="Ringan"/>Ringan
      <input type="radio" name="aktivitas" <?php if(isset($aktivitas) && $aktivitas=="Sedang") echo "check";?> value="Sedang"/>Sedang
      <input type="radio" name="aktivitas" <?php if(isset($aktivitas) && $aktivitas=="Berat") echo "check";?> value="Berat"/>Berat <br/>
      Jenis Kelamin : <input type="radio" name="kelamin" <?php   if(isset($kelamin) && $kelamin=="laki-laki") echo "check";?> value="laki laki"/>Laki Laki
      <input type="radio" name="kelamin" <?php if(isset($kelamin) && $kelamin=="perempuan")echo "check";?> value="perempuan"/>perempuan<br/>
      Berat Badan  : <input type="number" name="bb"><br/>
      Tinggi Badan : <input type="number" name="tb"><br/>
      <input type="submi_lt" value="Check"><br/>
    </form>

    <?php
@$usia      = $_POST['usia'];
@$aktivitas = $_POST['aktivitas'];
@$kelamin   = $_POST['kelamin'];
@$bb        = $_POST['bb'];
@$tb        = $_POST['tb'];
@$bmi_l     = $_POST['bmi_l'];
@$bmi_p     = $_POST['bmi_p'];
@$bbi_l     = $_POST['bbi_l'];
@$bbi_p     = $_POST['bbi_p'];
@$kal_basal_l = $_POST['kal_basal_l'];
@$kal_basal_p = $_POST['kal_basal_p'];
@$kal_aktv_l  = $_POST['kal_aktv_l'];
@$kal_aktv_p  = $_POST['kal_aktv_p'];
@$kor_usia_l  = $_POST['kor_usia_l'];
@$kor_usia_p  = $_POST['kor_usia_p'];
@$kebutuhan_j_kalori_l = $_POST['kebutuhan_j_kalori_l'];
@$kebutuhan_j_kalori_p = $_POST['kebutuhan_j_kalori_p'];
@$kjk_pagi_l = $_POST['kjk_pagi_l'];
@$kjk_pagi_p = $_POST['kjk_pagi_p'];
@$kjk_siang_l = $_POST['kjk_siang_l'];
@$kjk_siang_p = $_POST['kjk_siang_p'];
@$kjk_malam_l = $_POST['kjk_malam_l'];
@$kjk_malam_p = $_POST['kjk_malam_p'];
@$kjk_kudapan_pagi_l = $_POST['kjk_kudapan_pagi_l'];
@$kjk_kudapan_pagi_p = $_POST['kjk_kudapan_pagi_p'];
@$kjk_kudapan_sore_l = $_POST['kjk_kudapan_sore_l'];
@$kjk_kudapan_sore_p = $_POST['kjk_kudapan_sore_p'];
@$kebutuhan_j_karbohidrat_l = $_POST['kebutuhan_j_karbohidrat_l'];
@$kebutuhan_j_karbohidrat_p = $_POST['kebutuhan_j_karbohidrat_p'];
@$kebutuhan_j_protein_l = $_POST['kebutuhan_j_protein_l'];
@$kebutuhan_j_protein_p = $_POST['kebutuhan_j_protein_p'];
@$kebutuhan_j_lemak_l   = $_POST['kebutuhan_j_lemak_l'];
@$kebutuhan_j_lemak_p   = $_POST['kebutuhan_j_lemak_p'];


//Body Mess Index
$bmi_l = $bb/(($tb/100)*($tb-100));
$bmi_p = $bb/(($tb/100)*($tb-100));
//Status BMI
if ($bmi_l<17) {
  echo "Index badan : Kurus <br/>";
}elseif ($bmi_l>=18 && $bmi_l<=22) {
  echo "Index badan : Normal <br/>";
}elseif ($bmi_l>=23 && $bmi_l<=26) {
  echo "Index badan : Kegemukan <br/>";
}elseif ($bmi_l>27) {
  echo "Index badan : Obesitas <br/>";
}


if ($bmi_p<17) {
  echo "Index badan : Kurus <br/>";
}elseif ($bmi_p>=18 && $bmi_p<=22) {
  echo "Index badan : Normal <br/>";
}elseif ($bmi_p>=23 && $bmi_p<=26) {
  echo "Index badan : Kegemukan <br/>";
}elseif ($bmi_p>27) {
  echo "Index badan : Obesitas <br/>";
}

//Perhitungan Berat Badan Ideal
$bbi_l= ($tb-100)-(0.1*($tb-100));
$bbi_p= ($tb-100)-(0.1*($tb-100));

//Perhitungan Kalori Basal
$kal_basal_l = $bbi_l*30;
$kal_basal_p = $bbi_p*25;

//perhitungan kalori Aktivitas
if ($aktivitas=='Ringan' && $kelamin=='laki-laki') {
  $kal_aktv_l=0.1*$kal_basal_l;
}else if ($aktivitas=='Ringan' && $kelamin=='perempuan') {
  $kal_aktv_p=0.1*$kal_basal_p;
}else if ($aktivitas=='Sedang' && $kelamin=='laki-laki') {
  $kal_aktv_l=0.2*$kal_basal_l;
}else if ($aktivitas=='Sedang' && $kelamin=='perempuan') {
  $kal_aktv_p=0.2*$kal_basal_p;
}else if ($aktivitas=='Berat' && $kelamin=='laki-laki') {
  $kal_aktv_l=0.3*$kal_basal_l;
}else if ($aktivitas=='Berat' && $kelamin=='laki-laki') {
  $kal_aktv_p=0.3*$kal_basal_p;
}

//perhitungan koreksi Usia
if ($usia>40 && $aktivitas=='Ringan') {
  $kor_usia_l=$kal_basal_l*0.05;
  $kor_usia_p=$kal_basal_p*0.05;
}else if ($usia>40 && $aktivitas=='Sedang') {
  $kor_usia_l=$kal_basal_l*0.05;
  $kor_usia_p=$kal_basal_p*0.05;
}else if ($usia>40 && $aktivitas=='Berat') {
  $kor_usia_l=$kal_basal_l*0.05;
  $kor_usia_p=$kal_basal_p*0.05;
}elseif ($usia<40 && $aktivitas=='Ringan') {
  $kor_usia_l=$kal_basal_l*0;
  $kor_usia_p=$kal_basal_p*0;
}elseif ($usia<40 && $aktivitas=='Sedang') {
  $kor_usia_l=$kal_basal_l*0;
  $kor_usia_p=$kal_basal_p*0;
}elseif ($usia<40 && $aktivitas=='Berat') {
  $kor_usia_l=$kal_basal_l*0;
  $kor_usia_p=$kal_basal_p*0;
}
//perhitungan kebutuhan jumlah kalori
//laki laki
$kebutuhan_j_kalori_l=$kal_basal_l+$kal_aktv_l-$kor_usia_l;
//perempuan
$kebutuhan_j_kalori_p=$kal_basal_p+$kal_aktv_p-$kor_usia_p;

//pembagian jumlah kebutuhan kalori ke komposisi makanan
//

if ($kelamin=='perempuan') {
  $kjk_pagi_p=$kebutuhan_j_kalori_p*0.2;
  $kjk_siang_p=$kebutuhan_j_kalori_p*0.3;
  $kjk_malam_p=$kebutuhan_j_kalori_p*0.25;
  $kjk_kudapan_pagi_p=$kebutuhan_j_kalori_p*0.1;
  $kjk_kudapan_sore_p=$kebutuhan_j_kalori_pp*0.15;
  echo "Makan Pagi (20%) = $kjk_pagi_p <br/>";
  echo "Makan Siang (30%) = $kjk_siang_p <br/>";
  echo "Makan Malam (25%) = $kjk_malam_p <br/>";
  echo "Kudapan Pagi (10%) = $kjk_kudapan_pagi_p <br/>";
  echo "Kudapan Sore (15%) = $kjk_kudapan_sore_p <br/>";
}else {
  $kjk_pagi_l=$kebutuhan_j_kalori_l*0.2;
  $kjk_siang_l=$kebutuhan_j_kalori_l*0.3;
  $kjk_malam_l=$kebutuhan_j_kalori_l*0.25;
  $kjk_kudapan_pagi_l=$kebutuhan_j_kalori_l*0.1;
  $kjk_kudapan_sore_l=$kebutuhan_j_kalori_l*0.15;
  echo "Makan Pagi (20%) = $kjk_pagi_l <br/>";
  echo "Makan Siang (30%) = $kjk_siang_l <br/>";
  echo "Makan Malam (25%) = $kjk_malam_l <br/>";
  echo "Kudapan Pagi (10%) = $kjk_kudapan_pagi_l <br/>";
  echo "Kudapan Sore (15%) = $kjk_kudapan_sore_l <br/>";



}
//Pembagian kebutuhan Kalori ke Gram
if ($kelamin=='perempuan') {
  $kebutuhan_j_karbohidrat_p=($kebutuhan_j_kalori_p*0.6)/4;
  $kebutuhan_j_protein_p=($kebutuhan_j_kalori_p*0.4)/4;
  $kebutuhan_j_lemak_p=($kebutuhan_j_kalori_p*0.2)/9;
  echo "Karbohidrat : $kebutuhan_j_karbohidrat_p <br/>";
  echo "Protein     : $kebutuhan_j_protein_p <br/>";
  echo "Lemak       : $kebutuhan_j_lemak_p <br/>";
}else {
  $kebutuhan_j_karbohidrat_l=($kebutuhan_j_kalori_l*0.6)/4;
  $kebutuhan_j_protein_l=($kebutuhan_j_kalori_l*0.4)/4;
  $kebutuhan_j_lemak_l=($kebutuhan_j_kalori_l*0.2)/9;
  echo "Karbohidrat : $kebutuhan_j_karbohidrat_l <br/>";
  echo "Protein     : $kebutuhan_j_protein_l <br/>";
  echo "Lemak       : $kebutuhan_j_lemak_l <br/>";

}


     ?>
  </body>
</html>
