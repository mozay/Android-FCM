<?php ob_start(); ?>
 
<meta http-equiv="Content-Type" Content="text/html; charset=utf-8">
 
<?php 
$GLOBALS['db_connection'];
 
$sunucu="localhost";
$kullanici="root";
$sifre="";
$veritabani="fcm";

$mysqli = new mysqli($sunucu, $kullanici, $sifre, $veritabani);

if(mysqli_connect_errno()) {
    echo 'Mysqli bağlantı hatası: ' . mysqli_connect_errno();
    exit;
}


$mysqli->query("SET NAMES UTF8");

$table_users = "users";

 
 
?>
 
<?php ob_end_flush(); ?>
