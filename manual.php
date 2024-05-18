<?php
include 'koneksi.php';
?>
<?php
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
$tanggal = array(
                '01' => '1',
                '02' => '2',
                '03' => '3',
                '04' => '4',
                '05' => '5',
                '06' => '6',
                '07' => '7',
                '08' => '8',
                '09' => '9',
                '10' => '10',
                '11' => '11',
                '12' => '12',
);
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Daftar Piket Lurrr....v2</title>
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

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
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
	  <div class="container">
        <div class="row">
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
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Daftar Piket Pagi</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Daftar Piket Selain Pagi</button>
</div>

<div id="London" class="tabcontent">
        <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
		  
            <form action="fourth.php" method="get">
			    <br><h4>Service Desk :</h4>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Arifin ( 085640720153 )"> &nbsp;&nbsp;&nbsp;&nbsp;Arifin</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Heru ( 085741056742 )"> &nbsp;&nbsp;&nbsp;&nbsp;Heru</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Iwan ( 085641401981 )"> &nbsp;&nbsp;&nbsp;&nbsp;Iwan</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Hafidz ( 0089508111732 )"> &nbsp;&nbsp;&nbsp;&nbsp;Hafidz</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Dina ( 085742683240 )"> &nbsp;&nbsp;&nbsp;&nbsp;Dina</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Balam ( 082241871367 )"> &nbsp;&nbsp;&nbsp;&nbsp;Balam</label>
	<br><h4>Teknisi :</h4>	P1
	<label><input type="checkbox" name="teknisi1[]" id="teknisi1" value="- Adit ( 089658096672 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adit</label>
	<label><input type="checkbox" name="teknisi1[]" id="teknisi1" value="- Ardian ( 082323549260 )"> &nbsp;&nbsp;&nbsp;&nbsp;Ardian</label>
	<label><input type="checkbox" name="teknisi1[]" id="teknisi1" value="- Danantyo ( 085225277062 )"> &nbsp;&nbsp;&nbsp;&nbsp;Danantyo</label>
	<label><input type="checkbox" name="teknisi1[]" id="teknisi1" value="- Farizky ( 087802506493 )"> &nbsp;&nbsp;&nbsp;&nbsp;Farizky</label>
	<label><input type="checkbox" name="teknisi1[]" id="teknisi1" value="- Lanang ( 089618501098 )"> &nbsp;&nbsp;&nbsp;&nbsp;Lanang</label>
	<label> Teknisi Tukar &nbsp;&nbsp;&nbsp;&nbsp;<select name="teknisi1[]" id="teknisi1" multiple="multiple">
    <option value="">Teknisi P2</option>
    <option value="- Edo ( 08995362001 )">Edo</option>
    <option value="- Nugroho ( 081217881528 )">Nugroho</option>
    <option value="- Edy ( 08128485839 )">Edy</option>
    <option value="- Rama ( 081548255954 )">Rama</option>
	 <option value="- Zuhri ( 083876860011 )">Zuhri</option>
    <option value="">Teknisi P3</option>
    <option value="- Adji ( 085641467727 )">Adji</option>
    <option value="- Adhi ( 08982821826 )">Adhi</option>
    <option value="- Joni ( 082265575905 )">Joni</option>
    <option value="- Ridwan ( 089644333012 )">Ridwan</option>
</select></label>
	<br>
	
	P2
	<label><input type="checkbox" name="teknisi2[]" id="teknisi2" value="- Edo ( 08995362001 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adji</label>
	<label><input type="checkbox" name="teknisi2[]" id="teknisi2" value="- Nugroho ( 081217881528 )"> &nbsp;&nbsp;&nbsp;&nbsp;Nugroho</label>
	<label><input type="checkbox" name="teknisi2[]" id="teknisi2" value="- Rama ( 081548255954 )"> &nbsp;&nbsp;&nbsp;&nbsp;Rama</label>
	<label><input type="checkbox" name="teknisi2[]" id="teknisi2" value="- Zuhri ( 083876860011 )"> &nbsp;&nbsp;&nbsp;&nbsp;Zuhri</label>
		<label> Teknisi Tukar &nbsp;&nbsp;&nbsp;&nbsp;<select name="teknisi2[]" id="teknisi2" multiple="multiple">
    <option value="">Teknisi P1</option>
    <option value="- Adit ( 089658096672 )">Adit</option>
    <option value="- Ardian ( 082323549260 )">Ardian</option>
    <option value="- Danantyo ( 085225277062 )">Danantyo</option>
    <option value="- Farizky ( 087802506493 )">Farizky</option>
    <option value="- Lanang ( 089618501098 )">Lanang</option>
    <option value="">Teknisi P3</option>
   <option value="- Adji ( 085641467727 )">Adji</option>
    <option value="- Adhi ( 08982821826 )">Adhi</option>
    <option value="- Joni ( 082265575905 )">Joni</option>
    <option value="- Ridwan ( 089644333012 )">Ridwan</option>
</select></label>
	<br>
	
	P3
	<label><input type="checkbox" name="teknisi3[]" id="teknisi3" value="- Adji ( 085641467727 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adji</label>
	<label><input type="checkbox" name="teknisi3[]" id="teknisi3" value="- Adhi ( 08982821826 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adhi</label>
    <label><input type="checkbox" name="teknisi3[]" id="teknisi3" value="- Joni ( 082265575905 )"> &nbsp;&nbsp;&nbsp;&nbsp;Joni</label>
	<label><input type="checkbox" name="teknisi3[]" id="teknisi3" value="- Ridwan ( 089644333012 )"> &nbsp;&nbsp;&nbsp;&nbsp;Ridwan</label>
<label> Teknisi Tukar &nbsp;&nbsp;&nbsp;&nbsp;<select name="teknisi3[]" id="teknisi3" multiple="multiple">
    <option value="">Teknisi P1</option>
   <option value="- Adit ( 089658096672 )">Adit</option>
    <option value="- Ardian ( 082323549260 )">Ardian</option>
    <option value="- Danantyo ( 085225277062 )">Danantyo</option>
    <option value="- Farizky ( 087802506493 )">Farizky</option>
    <option value="- Lanang ( 089618501098 )">Lanang</option>
    <option value="">Teknisi P2</option>
     <option value="- Edo ( 08995362001 )">Edo</option>
    <option value="- Nugroho ( 081217881528 )">Nugroho</option>
    <option value="- Edy ( 08128485839 )">Edy</option>
    <option value="- Rama ( 081548255954 )">Rama</option>
	 <option value="- Zuhri ( 083876860011 )">Zuhri</option>
</select></label>

	<center><input type="submit" value="submit"></center>
</form>
            
          </div>
</div>
</div>
</div>

<div id="Paris" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
		  
            <form action="third.php" method="get">
			
			    <br><h4>Service Desk :</h4>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Hafidz ( 0089508111732 )"> &nbsp;&nbsp;&nbsp;&nbsp;Hafidz</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Dina ( 085742683240 )"> &nbsp;&nbsp;&nbsp;&nbsp;Dina</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Arifin ( 085640720153 )"> &nbsp;&nbsp;&nbsp;&nbsp;Arifin</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Heru ( 085741056742 )"> &nbsp;&nbsp;&nbsp;&nbsp;Heru</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Iwan ( 085641401981 )"> &nbsp;&nbsp;&nbsp;&nbsp;Iwan</label>
	<label><input type="checkbox" name="desk[]" id="desk" value="- Balam ( 082241871367 )"> &nbsp;&nbsp;&nbsp;&nbsp;Balam</label>
	
	<br><h4>Teknisi :</h4>
    <label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Adji ( 085641467727 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adji</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Adhi ( 08982821826 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adhi</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Adit ( 089658096672 )"> &nbsp;&nbsp;&nbsp;&nbsp;Adit</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Ardian Adi ( 082323549260 )"> &nbsp;&nbsp;&nbsp;&nbsp;Ardian Adi</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Nugroho ( 081217881528 )"> &nbsp;&nbsp;&nbsp;&nbsp;Nugroho</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Edo ( 08995362001 )"> &nbsp;&nbsp;&nbsp;&nbsp;Edo</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Danantyo ( 085225277062 )"> &nbsp;&nbsp;&nbsp;&nbsp;Danantyo</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Farizky ( 087802506493 )"> &nbsp;&nbsp;&nbsp;&nbsp;Farizky</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Joni ( 082265575905 )"> &nbsp;&nbsp;&nbsp;&nbsp;Joni</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Lanang ( 089618501098 )"> &nbsp;&nbsp;&nbsp;&nbsp;Lanang</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Rama ( 081548255954 )"> &nbsp;&nbsp;&nbsp;&nbsp;Rama</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Ridwan ( 089644333012 )"> &nbsp;&nbsp;&nbsp;&nbsp;Ridwan</label>
	<label><input type="checkbox" name="teknisi[]" id="teknisi" value="- Zuhri ( 083876860011 )"> &nbsp;&nbsp;&nbsp;&nbsp;Zuhri</label>

	<center><input type="submit" value="submit"></center>
</form>
            
          </div>
</div>
</div>
 
</div>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-6 d-flex">
            <a href="index.php" class="site-logo">
              🙏 Daftar Piket 🙏


            </a>
          </div>
        </div>
      </div>
    </div>

    

    
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
		  
            <h1>↑ Pencet Tab Diatas untuk Daftar Piket ↑</h1> 
            
          </div>
</div>
</div>
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-lg-6 d-flex">
            <a href="index.php" class="site-logo">
              Kembali
            </a>
          </div>
        </div>
      </div>
    </div>
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
$(document).ready(function() {
        $('#teknisi1').multiselect();
    });
	$(document).ready(function() {
        $('#teknisi2').multiselect();
    });$(document).ready(function() {
        $('#teknisi3').multiselect();
    });
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