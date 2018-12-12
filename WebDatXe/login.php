<?php
	session_start();
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "datxedulich";
	$con = mysqli_connect($host,$user,$pass,$db);

	$username = isset($_POST["username"])?$_POST["username"]:"";
	$password = isset($_POST["password"])?$_POST["password"]:"";
	//thực hiện câu truy vấn
	$data = mysqli_query($con,"select * from users where username = $username and password = $password");
	if(mysqli_num_rows($data) == 1)
	{
		$_SESSION["user"] = $_POST["username"];
		header("location: DatXeDuLich.php?user=".$username);
	}
	else
		{
			header("location: DatXeDuLich.php?page=dangnhap&err=false");
		}
		
 ?>

