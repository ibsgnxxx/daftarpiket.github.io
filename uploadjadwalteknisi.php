<?php
//index.php
$connect = mysqli_connect("localhost", "id20983314_root", "Sepatu.123", "id20983314_daftarpiket");
$message = '';
if(isset($_POST["upload"]))
{
 if($_FILES['product_file']['name'])
 {
  $filename = explode(".", $_FILES['product_file']['name']);
  if(end($filename) == "csv")
  {
   $handle = fopen($_FILES['product_file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
    $id = mysqli_real_escape_string($connect, $data[0]);
    $satu = mysqli_real_escape_string($connect, $data[1]);  
                $dua = mysqli_real_escape_string($connect, $data[2]);
    $tiga = mysqli_real_escape_string($connect, $data[3]);
	$empat = mysqli_real_escape_string($connect, $data[4]);  
    $lima = mysqli_real_escape_string($connect, $data[5]);
    $enam = mysqli_real_escape_string($connect, $data[6]);
    $tujuh = mysqli_real_escape_string($connect, $data[7]);  
    $delapan = mysqli_real_escape_string($connect, $data[8]);
    $sembilan = mysqli_real_escape_string($connect, $data[9]);
    $sepuluh = mysqli_real_escape_string($connect, $data[10]);  
    $satu1 = mysqli_real_escape_string($connect, $data[11]);
    $satu2 = mysqli_real_escape_string($connect, $data[12]);
    $satu3 = mysqli_real_escape_string($connect, $data[13]);  
    $satu4 = mysqli_real_escape_string($connect, $data[14]);
    $satu5 = mysqli_real_escape_string($connect, $data[15]);
    $satu6 = mysqli_real_escape_string($connect, $data[16]);  
    $satu7 = mysqli_real_escape_string($connect, $data[17]);
    $satu8 = mysqli_real_escape_string($connect, $data[18]);
    $satu9 = mysqli_real_escape_string($connect, $data[19]);  
    $duapuluh = mysqli_real_escape_string($connect, $data[20]);
    $dua1 = mysqli_real_escape_string($connect, $data[21]);
    $dua2 = mysqli_real_escape_string($connect, $data[22]);  
    $dua3 = mysqli_real_escape_string($connect, $data[23]);
    $dua4 = mysqli_real_escape_string($connect, $data[24]);
    $dua5 = mysqli_real_escape_string($connect, $data[25]);  
    $dua6 = mysqli_real_escape_string($connect, $data[26]);
    $dua7 = mysqli_real_escape_string($connect, $data[27]);
    $dua8 = mysqli_real_escape_string($connect, $data[28]);  
    $dua9 = mysqli_real_escape_string($connect, $data[29]);
    $tigapuluh = mysqli_real_escape_string($connect, $data[30]);
    $tiga1 = mysqli_real_escape_string($connect, $data[31]);
    $query = "
     UPDATE `jdwltek` 
     SET `1` = '$satu', 
     `2` = '$dua', 
     `3` = '$tiga', 
	 `4` = '$empat', 
     `5` = '$lima', 
     `6` = '$enam', 
     `7` = '$tujuh', 
     `8` = '$delapan', 
     `9` = '$sembilan', 
     `10` = '$sepuluh', 
     `11` = '$satu1', 
     `12` = '$satu2', 
     `13` = '$satu3', 
     `14` = '$satu4', 
     `15` = '$satu5', 
     `16` = '$satu6', 
     `17` = '$satu7', 
     `18` = '$satu8', 
     `19` = '$satu9', 
     `20` = '$duapuluh', 
     `21` = '$dua1', 
     `22` = '$dua2', 
     `23` = '$dua3', 
     `24` = '$dua4', 
     `25` = '$dua5', 
     `26` = '$dua6', 
     `27` = '$dua7', 
     `28` = '$dua8', 
     `29` = '$dua9',
     `30` = '$tigapuluh',
     `31` = '$tiga1'
     WHERE id = '$id'
    ";
    mysqli_query($connect, $query);
	$query1 = "
     UPDATE `jdwltekasli` 
     SET `1` = '$satu', 
     `2` = '$dua', 
     `3` = '$tiga', 
	 `4` = '$empat', 
     `5` = '$lima', 
     `6` = '$enam', 
     `7` = '$tujuh', 
     `8` = '$delapan', 
     `9` = '$sembilan', 
     `10` = '$sepuluh', 
     `11` = '$satu1', 
     `12` = '$satu2', 
     `13` = '$satu3', 
     `14` = '$satu4', 
     `15` = '$satu5', 
     `16` = '$satu6', 
     `17` = '$satu7', 
     `18` = '$satu8', 
     `19` = '$satu9', 
     `20` = '$duapuluh', 
     `21` = '$dua1', 
     `22` = '$dua2', 
     `23` = '$dua3', 
     `24` = '$dua4', 
     `25` = '$dua5', 
     `26` = '$dua6', 
     `27` = '$dua7', 
     `28` = '$dua8', 
     `29` = '$dua9',
     `30` = '$tigapuluh',
     `31` = '$tiga1'
     WHERE id = '$id'
    ";
	mysqli_query($connect, $query1);
   }
   fclose($handle);
   header("location: uploadjadwalteknisi.php?updation=1");
  }
  else
  {
   $message = '<label class="text-danger">Please Select CSV File only</label>';
  }
 }
 else
 {
  $message = '<label class="text-danger">Please Select File</label>';
 }
}

if(isset($_GET["updation"]))
{
 $message = '<label class="text-success">Product Updation Done</label>';
}

$query = "SELECT * FROM jdwltek JOIN teknisi ON jdwltek.id=teknisi.id";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Update Mysql Database through Upload CSV nya HARUS PAKAI KOMA File using PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Update Mysql Database through Upload CSV nya HARUS PAKAI KOMA  File using PHP</a></h2>
   <br />
   <form method="post" enctype='multipart/form-data'>
    <p><label>Please Select File(Only CSV Formate)</label>
    <input type="file" name="product_file" /></p>
    <br />
    <input type="submit" name="upload" class="btn btn-info" value="Upload" />
   </form>
   <br />
   <?php echo $message; ?>
   <h3 align="center">Jadwals</h3>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <tr>
      <th>Nama</th>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
      <th>6</th>
      <th>7</th>
      <th>8</th>
      <th>9</th>
      <th>10</th>
      <th>11</th>
      <th>12</th>
      <th>13</th>
      <th>14</th>
      <th>15</th>
      <th>16</th>
      <th>17</th>
      <th>18</th>
      <th>19</th>
      <th>20</th>
      <th>21</th>
      <th>22</th>
      <th>23</th>
      <th>24</th>
      <th>25</th>
      <th>26</th>
      <th>27</th>
      <th>28</th>
      <th>29</th>
      <th>30</th>
      <th>31</th>
     </tr>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["nama"].'</td>
       <td>'.$row["1"].'</td>
       <td>'.$row["2"].'</td>
       <td>'.$row["3"].'</td>
       <td>'.$row["4"].'</td>
       <td>'.$row["5"].'</td>
       <td>'.$row["6"].'</td>
       <td>'.$row["7"].'</td>
       <td>'.$row["8"].'</td>
       <td>'.$row["9"].'</td>
       <td>'.$row["10"].'</td>
       <td>'.$row["11"].'</td>
       <td>'.$row["12"].'</td>
       <td>'.$row["13"].'</td>
       <td>'.$row["14"].'</td>
       <td>'.$row["15"].'</td>
       <td>'.$row["16"].'</td>
       <td>'.$row["17"].'</td>
       <td>'.$row["18"].'</td>
       <td>'.$row["19"].'</td>
       <td>'.$row["20"].'</td>
       <td>'.$row["21"].'</td>
       <td>'.$row["22"].'</td>
       <td>'.$row["23"].'</td>
       <td>'.$row["24"].'</td>
       <td>'.$row["25"].'</td>
       <td>'.$row["26"].'</td>
       <td>'.$row["27"].'</td>
       <td>'.$row["28"].'</td>
       <td>'.$row["29"].'</td>
       <td>'.$row["30"].'</td>
       <td>'.$row["31"].'</td>
      </tr>
      ';
     }
     ?>
    </table>
   </div>
  </div>
 </body>
</html>