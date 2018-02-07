<!DOCTYPE html>
<html>
<head>
	<title>contoh selection IF php</title>
</head>
<body>
	<?php 
	$d = date("H");
	if ($d < "20") {
		echo "Selamat Siang Baraya!";
	} elseif ($d > "10") {
		echo "Selamat Pagi barudak!";
	} else {
		echo "selamat Malam lah";
	}
	?>

</body>
</html>