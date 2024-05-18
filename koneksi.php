<?php 
$db_host = 'localhost';
$db_user = 'id20983314_root';
$db_pass = 'Sepatu.123';
$db_name = 'id20983314_daftarpiket';

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if( !$koneksi ){
	die("gagal terhubung dengan db: " . mysqli_connect_error());
}
?>