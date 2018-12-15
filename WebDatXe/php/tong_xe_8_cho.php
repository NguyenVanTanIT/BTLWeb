<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 8 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 


$loi=array();
$loi["hoten"] = $loi["binhluan"] = NULL;
$hoten=$binhluan=NUll;


if (isset($_POST["gui"])) {
	//kiểm tra có nhập tiêu đề hay chua
	if (empty($_POST["hoten"]))
	{
		$loi["hoten"]="* Xin vui lòng nhập tên";
	}
	else
	{
		$hoten=$_POST["hoten"];
	}
	//kiểm tra đã nhập bình luận chưa

	if (empty($_POST["binhluan"]))
	{
		$loi["binhluan"]="* Xin vui lòng bình luận";
	}
	else
	{
		$binhluan=$_POST["binhluan"];
	}
	if($hoten && $binhluan)
	{
		//mở kết nối
		include('include/ketnoi.php'); 
		//thực hiện câu truy vấn
		mysql_query("insert into comment(comment) values( $binhluan)");
		

	}	
}

	$strSQL="SELECT * FROM car WHERE seats =8";
	$car=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 8 chỗ Mazda CX5">
				<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-8-chỗ-Madza-CX5.html" title="Xe 8 chỗ Mazda CX5">
					<h5>
						<?php echo $row['carname']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>
	
</div>
<div id="comment">
	<fieldset>
		<legend>Bình Luận</legend>
<form action="DatXeDuLich.php?page=tongxe8cho" method="post">
	<table>
		<tr>
			<td>Họ tên</td>
			<td><input type="text" name="hoten" size="25" value="<?php echo $loi['hoten']; ?>"></td>
		</tr>
		<tr>
			<td>Bình luận</td>
			<td><textarea cols="60" rows="5" name="binhluan"><?php echo $loi['binhluan']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Gửi" name="gui"></td>
		</tr>
	</table>
	</fieldset>
</div>