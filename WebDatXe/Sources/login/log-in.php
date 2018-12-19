<?php 
	$conn = mysqli_connect('localhost','root','','datxedulich');
	session_start();
	$username = isset($_POST["username"]) ? $_POST["username"] : "";
	$password = isset($_POST["password"]) ? $_POST["password"] : "";

	$data = mysqli_query($conn,"select * from users where username = $username and password = $password");
	if(mysqli_num_rows($data) == 1)
	{
		$level = mysqli_query($conn,"select level from users where username = $username and level = 2");
		if (mysqli_num_rows($level) == 1)
		{	
			header("location: index.php?user=".$username);
		}
		else
		{
			header("location: login.php?err=false2");
		}
	}
	else
		{
			header("location: login.php?err=false1");
		}
		
 ?>
	<?php 
		if(!isset($_GET["user"]))
			header("location: login.php");
	 ?>
