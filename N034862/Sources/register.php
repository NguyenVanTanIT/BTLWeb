

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
$level = isset($_POST["level"])?$_POST["level"]:"";
$address = isset($_POST["address"])?$_POST["address"]:"";
$cmnd = isset($_POST["cmnd"])?$_POST["cmnd"]:"";
$sex = isset($_POST["sex"])?$_POST["sex"]:"";
$license = isset($_POST["license"])?$_POST["license"]:"";



mysql_set_charset('utf8', $con);


        // Mã khóa mật khẩu
$password = md5($password);

    //Kiểm tra tên đăng nhập này đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($con, "SELECT username FROM users WHERE username='$username'")) > 0){
	echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
	exit;
}


    //Kiểm tra email đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($con, "SELECT email FROM users WHERE email='$email'")) > 0)
{
	echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
	exit;
}

    //Lưu thông tin thành viên vào bảng

	$sql = mysqli_query($con,"insert into `users`(`username`,`password`,`email`,`phone`,`level`, `address`, `cmnd`, `sex`, `license`) values('$username','$password','$email','$phone','1' , '$address', '$cmnd' , '$sex' , '$license' )");
	header("location:DatXeDuLich.php?page=dangnhap");
?> 

