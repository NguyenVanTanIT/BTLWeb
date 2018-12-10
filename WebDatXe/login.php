<?php
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "datxedulich";
	$con = mysqli_connect($host,$user,$pass,$db);

	$username = isset($_POST["username"])?$_POST["username"]:"";
	$password = isset($_POST["password"])?$_POST["password"]:"";
	//thực hiện câu truy vấn
	$ketqua=mysqli_query($con,"select * from users where username='$username' and password='$password'");
	$level=mysqli_query($con,"select level from users where username='$username' and password='$password'");
	if(mysqli_num_rows($ketqua)==1)
	{
// 		$tr="2";
// 		if(strpos($level,$tr) !== false)
// 		{
// 			 $_SESSION["username"] = $username;
// 		header('location:admin/index.php');

// 		}
// else{

		$_SESSION["username"] = $username;
		header('location:DatXeDuLich.php?user='.$username);
	// }
}
	else {
		header('location:DatXeDuLich.php?page=dangnhap&act=false');
	}


?>	