<?php
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Daftar Piket Lurrr....v888</title>
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

<style>
    label {
 border:2px solid #ccc;
 padding:12px;
 margin:0 0 15px;
 display:block; 
}

label:hover {
 background:#eee;
 cursor:pointer;
}    
/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
    </style>
<style>
table {
  table-layout: fixed;
  border-spacing: 0px;
    border: 1px solid black;
  border-collapse: collapse;
}
td, th {
  padding-left: 5px;
  padding-right: 5px;
      border: 1px solid black;
  border-collapse: collapse;
}

.tr_shaded:nth-child(even) {
  background: #e0e0e0;
}

.tr_shaded:nth-child(odd) {
  background: #ffffff;
}

.scrolly_table {
  white-space: nowrap;
  overflow: auto;
}

/* The frozen cells will each get two class names,
   making it easier for me to select all of them or
   only a subset.  All frozen cells will be "fixed",
   the corner will also be in class "freeze", and the
   row and column headers will be "horizontal" and
   "vertical" respectively. */
.fixed.freeze {
  z-index: 10;
  position: relative;
}

.fixed.freeze_vertical {
  z-index: 5;
  position: relative;
}

.fixed.freeze_horizontal {
  z-index: 1;
  position: relative;
}
</style>
</head>

<?php
// function untuk menampilkan nama hari ini dalam bahasa indonesia
// di buat oleh malasngoding.com
include 'koneksi.php';
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
    echo "07.00 sd 14.00";
	$dinas = "P";
} elseif ($t < "12 ") {
    echo "07.00 sd 14.00";
	$dinas = "P";
}
elseif ($t < "19 ") {
    echo "14.00 sd 21.00";
	$dinas = "S";
} else {
    echo "21.00 sd 07.00";
	$dinas = "M";
} ?>  :
<br><br>
Service Desk :
</br>
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $sift=(string)$dinas ; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwlsd JOIN servicedesk ON jdwlsd.id=servicedesk.id_sd WHERE `".$tglnow."` = '".$sift."'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['personil']; ?></td>
			<td>(<?php echo $pecah['nohp']; ?>)</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>

<br>
Teknisi :<br>
<?php $t = date("H");
$deshari = date("D");
if ( $t < "11" && $deshari == "Sat" ) { ?>
	<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` LIKE 'P%' ORDER BY nama ASC"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php } elseif ( $t < "11" && $deshari == "Sun" ) { ?>
	<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` LIKE 'P%' ORDER BY nama ASC"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php }

elseif( $t < "4") {?>
P1 :<br> 
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P1'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
</br>P2 :<br> 
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P2'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>

</br>P3 : <br>
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P3'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php } elseif ($t < "12 ") {;?>
P1 :<br> 
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P1'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
</br>P2 :<br> 
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P2'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>

</br>P3 : <br>
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'P3'"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php }
elseif ($t < "19 ") { ?>
	<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'S' ORDER BY nama ASC"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php } else { ?>
	<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id WHERE `".$tglnow."` = 'M' ORDER BY nama ASC"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['nama']; ?></td>
			<td>( <?php echo $pecah['nohp']; ?> )</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
<?php } ?> 


<input type="checkbox" id="myCheck" onclick="myFunction()">

<text id="text" style="display:none">
On-Call :
</br>
<?php $nomor=1; ?>
			<?php $tglnow=(string)idate("d"); ?>
			<?php $sift=(string)$dinas ; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM jdwlimplem JOIN implementator ON jdwlimplem.id=implementator.id WHERE `".$tglnow."` = 'O' "); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo "-" ?></td>
			<td><?php echo $pecah['personil']; ?></td>
			<td>(<?php echo $pecah['nohp']; ?>)</td>
		</tr>
		
		<?php $nomor++; ?><br/>
	<?php } ;?>
</text>

<br>Terima kasih🙏

</div><button onclick="copyClipboard()">Copy text</button>
<br>
<B>Klik Kotak Kecil Agar Kamu Tahu Siapa Implementator Yang Sedang On-Call Hari Ini</B>
<hr>
			Update Jadwal Teknisi :<?php $ambil=$koneksi->query("SELECT * FROM log_tukar_teknisi ORDER BY idtkr DESC LIMIT 1"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			
			<td><?php echo $pecah['aksi']; ?></td><br>
			
		</tr>
	<?php } ;?><td><a href= uploadjadwalteknisi.php target="_blank"> [ Lihat Jadwal Teknisi ]</a><td>
	<br>
			Update Jadwal Service Desk :<?php $ambil=$koneksi->query("SELECT * FROM log_tukar_sd ORDER BY idtkr DESC LIMIT 1"); ?>
			<?php while($pecah=$ambil->fetch_assoc()) { ?>
		<tr>
			
			<td><?php echo $pecah['aksi']; ?></td><br>
			
		</tr>
	<?php } ;?><td><a href= uploadjadwalservicedesk.php target="_blank"> [ Lihat Jadwal Service Desk ]</a></td>
	
	<br><br><a href= uploadjadwalimplementator.php target="_blank"> [ Lihat Jadwal Implementator ]</a><td>
	<br>
<button onclick="window.location.href='next.php'">Lihat Piket Selanjutnya</button>
	
</div>
</div>
</div>

 <div class="footer">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
				
					
					<br><h5> Klik Tombol untuk menyesuaikan personil yang berangkat </h5>
					    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
           <a class="site-logo">|</a></a><a href="manual.php" class="site-logo">
              Tombol MANUAL
            </a><a class="site-logo">|</a><BR><a class="site-logo">|</a></a><a href="tukarjadwal2.php" class="site-logo">
              Tombol TUKAR
            </a><a class="site-logo">|</a>
			
          </div>
        </div>
      </div>
    </div>
                   </br>😘
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
	
</br>
<script>
function freeze_pane_listener(what_is_this, table_class) {
  // Wrapping a function so that the listener can be defined
  // in a loop over a set of scrolling table id's.
  // Cf. http://stackoverflow.com/questions/750486/javascript-closure-inside-loops-simple-practical-example
  
  return function() {
    var i;
    var translate_y = "translate(0," + what_is_this.scrollTop + "px)";
    var translate_x = "translate(" + what_is_this.scrollLeft + "px,0px)";
    var translate_xy = "translate(" + what_is_this.scrollLeft + "px," + what_is_this.scrollTop + "px)";
    
    var fixed_vertical_elts = document.getElementsByClassName(table_class + " freeze_vertical");
    var fixed_horizontal_elts = document.getElementsByClassName(table_class + " freeze_horizontal");
    var fixed_both_elts = document.getElementsByClassName(table_class + " freeze");
    
    // The webkitTransforms are for a set of ancient smartphones/browsers,
    // one of which I have, so I code it for myself:
    for (i = 0; i < fixed_horizontal_elts.length; i++) {
      fixed_horizontal_elts[i].style.webkitTransform = translate_x;
      fixed_horizontal_elts[i].style.transform = translate_x;
    }

    for (i = 0; i < fixed_vertical_elts.length; i++) {
       fixed_vertical_elts[i].style.webkitTransform = translate_y;
       fixed_vertical_elts[i].style.transform = translate_y;
    }

    for (i = 0; i < fixed_both_elts.length; i++) {
       fixed_both_elts[i].style.webkitTransform = translate_xy;
       fixed_both_elts[i].style.transform = translate_xy;
    }
  }
}

function even_odd_color(i) {
  if (i % 2 == 0) {
    return "#e0e0e0";
  } else {
    return "#ffffff";
  }
}

function parent_id(wanted_node_name, elt) {
  // Function to work up the DOM until it reaches
  // an element of type wanted_node_name, and return
  // that element's id.
  
  var wanted_parent = parent_elt(wanted_node_name, elt);
  
  if ((wanted_parent == undefined) || (wanted_parent.nodeName == null)) {
    // Sad trombone noise.
    return "";
  } else {
    return wanted_parent.id;
  }
}

function parent_elt(wanted_node_name, elt) {
  // Function to work up the DOM until it reaches 
  // an element of type wanted_node_name, and return
  // that element.
  
  var this_parent = elt.parentElement;
  if ((this_parent == undefined) || (this_parent.nodeName == null)) {
    // Sad trombone noise.
    return null;
  } else if (this_parent.nodeName == wanted_node_name) {
    // Found it:
    return this_parent;
  } else {
    // Recurse:
    return parent_elt(wanted_node_name, this_parent);
  }
}

var i, parent_div_id, parent_tr, table_i, scroll_div;
var scrolling_table_div_ids = ["scrolling_table_1", "scrolling_table_2"];

// This array will let us keep track of even/odd rows:
var scrolling_table_tr_counters = [];
for (i = 0; i < scrolling_table_div_ids.length; i++) {
  scrolling_table_tr_counters.push(0);
}

// Append the parent div id to the class of each frozen element:
var fixed_elements = document.getElementsByClassName("fixed");
for (i = 0; i < fixed_elements.length; i++) {
  fixed_elements[i].className += " " + parent_id("DIV", fixed_elements[i]);
}

// Set background colours of row headers, alternating according to 
// even_odd_color(), which should have the same values as those
// defined in the CSS for the tr_shaded class.
var fixed_horizontal_elements = document.getElementsByClassName("freeze_horizontal");
for (i = 0; i < fixed_horizontal_elements.length; i++) {
  parent_div_id = parent_id("DIV", fixed_horizontal_elements[i]);
  table_i = scrolling_table_div_ids.indexOf(parent_div_id);
  
  if (table_i >= 0) {
    parent_tr = parent_elt("TR", fixed_horizontal_elements[i]);
    
    if (parent_tr.className.match("tr_shaded")) {
      fixed_horizontal_elements[i].style.backgroundColor = even_odd_color(scrolling_table_tr_counters[table_i]);
      scrolling_table_tr_counters[table_i]++;
    }
  }
}

// Add event listeners.
for (i = 0; i < scrolling_table_div_ids.length; i++) {
  scroll_div = document.getElementById(scrolling_table_div_ids[i]);
  scroll_div.addEventListener("scroll", freeze_pane_listener(scroll_div, scrolling_table_div_ids[i]));
}
</script>
</body>
</html>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



    <div class="footer">
      <div class="container">
        

        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                   <i class="icon-heart text-danger" aria-hidden="true"></i> <a href="#" target="_blank" >Teknisi</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">
$(function() {
    startRefresh();
});

function startRefresh() {
    setTimeout(startRefresh,1000);
    $.get('pagelink.php', function(data) {
        $('#content_div_id').html(data);    
    });
}
function myFunction() {
  // Get the checkbox
  var checkBox = document.getElementById("myCheck");
  // Get the output text
  var text = document.getElementById("text");

  // If the checkbox is checked, display the output text

  if (checkBox.checked == true){
    text.style.display = "block";
  }  
  
  else {
    text.style.display = "none";
  }
  
}
</script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

</html>