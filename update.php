<?php 
// koneksi database
include 'koneksi.php';
 
$tglnow=(string)idate("d");
$nomorid = $_POST['teknisi'];
$shift = $_POST['sift'];

// update data ke database
$sql_update = "UPDATE `jdwltek` SET ".$tglnow."='$shift' WHERE `id_jdwl` = '$nomorid'";
$update = mysqli_query($koneksi, $sql_update);

			

// mengalihkan halaman kembali ke index.php

?>