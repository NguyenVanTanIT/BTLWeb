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
	$sql = mysqli_query($con,"insert into `users`(`username`,`password`,`email`,`phone`,`level`) values('$username','$password','$email','$phone','1')");
	header("location:DatXeDuLich.php?page=dangnhap");
?>