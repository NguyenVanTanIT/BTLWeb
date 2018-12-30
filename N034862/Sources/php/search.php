<div class="main">
	<?php
	if(isset($REQUEST['submit']))
	{
	  $search =$_GET['ten'];
	  if(empty($search))
	  {
	  	echo "<p> Mời bạn nhập dữ liệu</p>";
	  }
	  else
	  {
	  	$query="SELECT * FROM car WHERE describe like '%search%'";
	  	$results= mysqli_query($ung,$query);
	  	kt_query($results, $query);
	  	//fetch array
	  }
	}?>
</div>