
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

//Teknisi

$name = $_GET['teknisi'];
$service = $_GET['desk'];

// optional
// echo "You chose the following teknisi(s): <br>";



?>
<html>
<head>
<script>
function copyClipboard() {
  var elm = document.getElementById("divClipboard");
  // for Internet Explorer

  if(document.body.createTextRange) {
    var range = document.body.createTextRange();
    range.moveToElementText(elm);
    range.select();
    document.execCommand("Copy");
  }
  else if(window.getSelection) {
    // other browsers

    var selection = window.getSelection();
    var range = document.createRange();
    range.selectNodeContents(elm);
    selection.removeAllRanges();
    selection.addRange(range);
    document.execCommand("Copy");
  }
}
</script>
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
<div class="code-bg" id="divClipboard">
Daftar Piket<br>

Menginformasikan piket Instalasi SIMRS (ext 2000)<?php echo " Hari ini : ". hari_ini(); ?>, <?php echo date('d').' '.($bulan[date('m')]).' '.date('Y') ?> Jam <?php $t = date("H");
if ( $t < "4") {
    echo "21.00 sd 07.00";
} elseif ($t < "12 ") {
    echo "07.00 sd 14.00";
}
elseif ($t < "19 ") {
    echo "14.00 sd 21.00";
} else {
    echo "21.00 sd 07.00";
} ?> :
<br><br>
Service Desk :
</br>
<?php
foreach ($service as $desk){ 
    echo $desk."<br />";
}
?>
<br>
Teknisi :
</br>
<?php
foreach ($name as $teknisi){ 
    echo $teknisi."<br />";
}

?>
</br>


Terima kasih🙏

</div><button onclick="copyClipboard()">Copy text</button>
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