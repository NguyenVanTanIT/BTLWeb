<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "datxedulich";
$con = mysqli_connect($host,$user,$pass,$db);
	$username = isset($_POST["username"])?$_POST["username"]:"";
	$password = isset($_POST["password"])?$_POST["password"]:"";
	$email = isset($_POST["email"])?$_POST["email"]:"";
	$phone = isset($_POST["phone"])?$_POST["phone"]:"";

	$address = isset($_POST["address"])?$_POST["address"]:"";
	$cmnd = isset($_POST["cmnd"])?$_POST["cmnd"]:"";
	$sex = isset($_POST["sex"])?$_POST["sex"]:"";
	$license = isset($_POST["license"])?$_POST["license"]:"";


	$sql = mysqli_query($con,"insert into users(username,password,email,phone,level,address, cmmnd,sex, license) values('$username','$password','$email','$phone','1',$address, $cmnd, $sex, $license)");
	header("location:DatXeDuLich.php?page=dangnhap");
?>