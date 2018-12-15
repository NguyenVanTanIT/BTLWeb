


<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "datxedulich";
$con = mysqli_connect($host,$user,$pass,$db);
if(isset($_POST['Sumbit'])){
	$seats = $_POST['car_name'];
	$carname = $_POST['hangxe'];
	$starttime = $_POST['start_date'];
	$endtime = $_POST['stop_date'];
	
	$sql = "insert into bookcar(starttime, endtime) values('$starttime','endtime)";
	mysqli_query($con,$sql) or die("them that bai") ;
}
?>