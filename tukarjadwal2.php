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

<?php
error_reporting(E_ERROR | E_PARSE);
// function untuk menampilkan nama hari ini dalam bahasa indonesia
// di buat oleh malasngoding.com

function hari_ini(){
	$hari = date ("D");

	switch($hari){
		case 'Sun':
			$hari_ini = "Minggu";
		break;

		case 'Mon':			
			$hari_ini = "Senin";
		break;

		case 'Tue':
			$hari_ini = "Selasa";
		break;

		case 'Wed':
			$hari_ini = "Rabu";
		break;

		case 'Thu':
			$hari_ini = "Kamis";
		break;

		case 'Fri':
			$hari_ini = "Jumat";
		break;

		case 'Sat':
			$hari_ini = "Sabtu";
		break;
		
		default:
			$hari_ini = "Tidak di ketahui";		
		break;
	}

	return   $hari_ini ;

}
 $bulan = array(
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember',
        );
date_default_timezone_set("Asia/Bangkok");


// optional
// echo "You chose the following teknisi(s): <br>";



?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
	<meta charset="UTF-8">
	<title>Daftar Piket</title>
</head>
<body>
<div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-6 d-flex">
            <a href="index.php" class="site-logo">
              HOME
            </a>
          </div>
        </div>
      </div>
    </div>
	
	<div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
<form method="post" enctype="multipart/form-data">

<div class="form-group">
		<label>Teknisi Pertama</label><br>
		<select name="teknisi">
    	<option value="">--Teknisi 1--</option>
    	<option value="1">Adit</option>
    	<option value="2">Ardian</option>
    	<option value="3">Danantyo</option>
   		<option value="4">Farizky</option>
    	<option value="5">Lanang</option>
    	<option value="6">Edo</option>
   		<option value="7">Nugroho</option>
    	<option value="8">Rama</option>
   		<option value="9">Zuhri</option>
   		<option value="10">Adji</option>
		<option value="11">Adhi</option>
		<option value="12">Joni</option>
		<option value="13">Ridwan</option>
  </select>
	</div>
	<div class="form-group">
		<label>Jadwal Hari Ini</label><br>
		<select name="sift">
    	<option value="">---Shift Hari Ini---</option>
    	<option value="P1">P1 / Pagi</option>
    	<option value="P2">P2 / Pagi</option>
    	<option value="P3">P3 / Pagi</option>
    	<option value="S">Siang</option>
    	<option value="M">Malam</option>
   		<option value="L">Libur</option>
   		<option value="Izin">Izin</option>
  </select>
	</div >
	<div class="form-group">
		<label>Teknisi Kedua</label><br>
		<select name="teknisi2">
    	<option value="">--Teknisi 2--</option>
    	<option value="1">Adit</option>
    	<option value="2">Ardian</option>
    	<option value="3">Danantyo</option>
   		<option value="4">Farizky</option>
    	<option value="5">Lanang</option>
    	<option value="6">Edo</option>
   		<option value="7">Nugroho</option>
    	<option value="8">Rama</option>
   		<option value="9">Zuhri</option>
   		<option value="10">Adji</option>
		<option value="11">Adhi</option>
		<option value="12">Joni</option>
		<option value="13">Ridwan</option>
  </select>
	</div>
	<div class="form-group">
		<label>Jadwal Hari Ini</label><br>
		<select name="sift2">
    	<option value="Izin">---Shift Hari Ini---</option>
    	<option value="P1">P1 / Pagi</option>
    	<option value="P2">P2 / Pagi</option>
    	<option value="P3">P3 / Pagi</option>
    	<option value="S">Siang</option>
    	<option value="M">Malam</option>
   		<option value="L">Libur</option>
   		<option value="Izin">Izin</option>
  </select>
	</div>
	<div class="form-group">
		<label>Service Desk Pertama</label><br>
		<select name="sd">
    	<option value="">-Service Desk 1-</option>
    	<option value="1">Iwan</option>
    	<option value="2">Heru</option>
   		<option value="3">Arifin</option>
   		<option value="4">Dina</option>
    	<option value="5">Balam</option>
   		<option value="6">Hafidz</option>
  </select>
	</div>
	<div class="form-group">
		<label>Jadwal Hari Ini</label><br>
		<select name="sift3">
    	<option value="">---Shift Hari Ini---</option>
    	<option value="P">Pagi</option>
    	<option value="S">Siang</option>
    	<option value="M">Malam</option>
   		<option value="L">Libur</option>
   		<option value="Izin">Izin</option>
  </select>
	</div>
	<div class="form-group">
		<label>Service Desk Kedua</label><br>
		<select name="sd2">
    	<option value="">-Service Desk 2-</option>
    	<option value="1">Iwan</option>
    	<option value="2">Heru</option>
   		<option value="3">Arifin</option>
   		<option value="4">Dina</option>
    	<option value="5">Balam</option>
   		<option value="6">Hafidz</option>
  </select>
	</div>
	<div class="form-group">
		<label>Jadwal Hari Ini</label><br>
		<select name="sift4">
    	<option value="">---Shift Hari Ini---</option>
    	<option value="P">Pagi</option>
    	<option value="S">Siang</option>
    	<option value="M">Malam</option>
   		<option value="L">Libur</option>
   		<option value="Izin">Izin</option>
  </select>
	</div>
<input type="submit" name="ubah" class="btn btn-info" value="ubah" />

</form>
<?php 

	if(isset($_POST['ubah']))
	{
		$tglnow=(string)idate("d");
		$koneksi->query("UPDATE `jdwltek` SET `".$tglnow."` = '$_POST[sift]' WHERE `jdwltek`.`id_jdwl` = $_POST[teknisi];");
		$koneksi->query("UPDATE `jdwltek` SET `".$tglnow."` = '$_POST[sift2]' WHERE `jdwltek`.`id_jdwl` = $_POST[teknisi2];");
		$koneksi->query("INSERT INTO `log_tukar_teknisi` (id, piket, tgl) value ($_POST[teknisi],'$_POST[sift]',".$tglnow.");");
		$koneksi->query("INSERT INTO `log_tukar_teknisi2` (id, piket, tgl) value ($_POST[teknisi2],'$_POST[sift2]',".$tglnow.");");
		$koneksi->query("UPDATE `jdwlsd` SET `".$tglnow."` = '$_POST[sift3]' WHERE `jdwlsd`.`id_jdwlsd` = $_POST[sd];");
		$koneksi->query("UPDATE `jdwlsd` SET `".$tglnow."` = '$_POST[sift4]' WHERE `jdwlsd`.`id_jdwlsd` = $_POST[sd2];");
		$koneksi->query("INSERT INTO `log_tukar_sd` (id, piket, tgl) value ($_POST[sd],'$_POST[sift3]',".$tglnow.");");
		$koneksi->query("INSERT INTO `log_tukar_sd2` (id, piket, tgl) value ($_POST[sd2],'$_POST[sift4]',".$tglnow.");");
		echo "<script>location='index.php'</script>";
	}
 ?>
</div>
</div>
</div>
 <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                   😘
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
 