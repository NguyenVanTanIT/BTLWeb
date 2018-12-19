<?php
$host ="localhost";
$username ="root";
$password="";
$database="datxedulich";

    $connect=mysqli_connect($host,$username,$password,$database);
      mysqli_query($connect,"SET NAMES 'utf8'");

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if(isset($_POST["carname"]))
{
 $carname = $_POST["carname"];
 $describe = $_POST["describe"];
 $image = $_POST["image"];
 $seats = $_POST["seats"];
  $licenseplate = $_POST["licenseplate"];
 $license = $_POST["license"];
 $query = '';
 for($count = 0; $count<count($carname); $count++)
 {
  $item_name_clean = mysqli_real_escape_string($connect, $carname[$count]);
  $item_code_clean = mysqli_real_escape_string($connect, $describe[$count]);
  $item_desc_clean = mysqli_real_escape_string($connect, $image[$count]);
  $item_price_clean = mysqli_real_escape_string($connect, $seats[$count]);
   $item_licenseplate = mysqli_real_escape_string($connect, $licenseplate[$count]);
  $item_license = mysqli_real_escape_string($connect, $license[$count]);

  if($item_name_clean != '' && $item_code_clean != '' && $item_desc_clean != '' && $item_price_clean != ''&& $item_licenseplate != ''&& $item_license != '')
  {
   $query .= "INSERT INTO `car`(`carname`,`describe`, `image`, `seats`, `licenseplate`,`license`,`status`)
    VALUES ('$carname','$describe', '$image', $seats, '$licenseplate','$license',1)";
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($connect, $query))
  {
   echo 'Item Data Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
   