<?php
 echo "SELEKSI <br>";
 $angka=1;

   if($angka == 1){
     echo "Angka yang diinputkan adalah angka Satu";
   }else if($angka == 2){
     echo "Angka yang diinputkan adalah angka Dua";
   }else if($angka == 3){
     echo "Angka yang diinputkan adalah angka Tigas";
   }else if($angka == 4){
     echo "Angka yang diinputkan adalah angka Empat";
   }else if($angka == 5){
     echo "Angka yang diinputkan adalah angka Lima";
   }else{
     echo "Anda hanya boleh memasukan angka 1-5!";
   }

?>

<?php
 echo "PERULANGAN <br>";
 $angka=4;

 for($i=1;$i<=$angka;$i++){
   echo "angka ke-$i<br>";
 }

?>
