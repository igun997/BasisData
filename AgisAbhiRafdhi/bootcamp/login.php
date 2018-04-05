<?PHP
include 'koneksi.php';
if (!isset($username) || !isset($password)) {
header( “Location: http://domainanda/login.html” );
}
elseif (empty($username) || empty($password)) {
header( “Location: http://domainanda/login.html” );
}
else{
$user = addslashes($_POST[‘username’]);
$pass = md5($_POST[‘password’]);

$result=mysql_query(“select * from users where username=’$user’ AND password=$pass, $db);

$rowCheck = mysql_num_rows($result);

if($rowCheck > 0){
while($row = mysql_fetch_array($result)){

session_start();
session_register(‘username’);

echo ‘login berhasil..!!’;
header( “Location: home.php” );
}
}
else {
echo ‘Invalid username or password, coba lagi deh.. ‘;
}
}
?>
