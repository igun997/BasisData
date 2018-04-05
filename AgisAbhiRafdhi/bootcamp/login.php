<?PHP
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($username) || empty($password)) {
header( "location:login.html");//domainanda/login.html” );
}
else{

$result=mysqli_query($koneksi,"SELECT * FROM `user` WHERE `username`=`$username` AND `password`=`$password`");
echo " $result";
$rowCheck = mysqli_num_rows($result);

if($rowCheck > 0){
while($row = mysqli_fetch_array($result)){

session_start();
session_register(`username`);

echo "login..berhasil!!";
header( "location: tabel.php" );
}
}
else {
echo 'Invalid username or password, coba lagi deh.. ';
}
}
?>
