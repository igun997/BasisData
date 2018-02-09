<?php 
	$nama=$_POST['nama'];
	$anak=$_POST['anak'];
		$int=(is_numeric($_POST['anak'])?(int)$_POST['anak'] : 0);
	$awal=$_POST['awal'];
	$akhir=$_POST['akhir'];
	if (($awal=="Bandung"&& $akhir=="Banjar")||($akhir=="Bandung"&& $awal=="Banjar")){
		$harga=100000;
		$hanak=$anak*(0.1*$harga);
		$tot=$harga+$hanak;
		echo "<pre> 
		Nama          = ".$nama."<br/>
		Total Anak    = ".$anak."<br/>
		Stasiun Awal  = ".$awal."<br/>
		Stasiun Akhir = ".$akhir."<br/>
		Total Biaya   = ".$tot."</pre>";
	}
?>	