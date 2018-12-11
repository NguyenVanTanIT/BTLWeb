<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "datxedulich";
$con = mysqli_connect($host,$user,$pass,$db);
mysqli_query($con,"SET NAMES 'utf8'");

	$strSQL="SELECT * FROM thongtinxe";
	$thongtinxe=mysqli_query($con,$strSQL);
	//phan hien thi trang them va sua
	// if(isset($_POST['chentrang']))
	// {
	// 	$chucnang=$_POST['chentrang'];
	// 	if($chucnang=='themloaixe')
	// 		include_once('loaixe/themloaixe.php');
	// 	if($chucnang=='sualoaixe')
	// 		include_once('loaixe/sualoaixe.php');
	// }
?>

<table  cellpadding="3" cellspacing="0" border="0" class="admintable" style="border-right:#E9E9E9 1px solid; border-top:#E9E9E9 1px solid;" align="right">
	<tr>
		<th width="40" align="center" style="border-left:#66A111 solid 1px;">
			STT
		</th>
		<th width="100" align="center">
			Tên Xe
		</th>
		<th width="220" >
			Mô Tả xe
		</th>
		<th width="40" >
			số chỗ
		</th>
		<th width="200" colspan="2" style="background:#FFFFFF;" align="center">
			<a href="#" onclick="goithem_sua('themloaihoa')">Thêm Xe Mới</a>
		</th>
	</tr>
	<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
	<tr>
	<?php 
		//xu ly mau cho dong
			if($i%2==0) 
				$mausac="style='background:#F8F8F8;'";
			 else 
			 	$mausac="style='background:#FFFFFF;'";
	?> 
		<td <?php echo $mausac; ?> >
			<?php echo $i; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php echo $row['ten_xe']; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php echo $row['mo_ta_xe']; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php echo $row['so_cho']; ?>
		</td>
		
		 <!-- <td <?php echo $mausac; ?> >
			<a href="#" onclick="goithem_sua('sualoaixe',<?php echo $row['ten_xe']; ?>)"><?php echo $row['mo_ta_xe']; ?></a>
		</td> -->
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="goithem_sua('sualoaixe',<?php echo $row['ten_xe']; ?>)">Sửa</a>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="xoa_loaixe(<?php echo $row['ten_xe']; ?>)">Xóa</a>
		</td>
	</tr>
		<?php } ?>
	
</table>

<!-- <form action="" method="post" name="loaixe">
	<input name="loaixe" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="xlloaixe" />
	<input name="goihamxuly" type="hidden" value="xoaloaixe" />
</form> 
<form action="" method="post" name="themvssua">
	<input name="chentrang" type="hidden" value="" />
	<input name="maloaixe" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="quanlyloaixe" />
</form>-->
<!-- <script>
	function xoa_loaixe(maloaixe)
	{
		loaixe.maloaixe.value=maloaixe
		if(confirm('bạn có muốn xóa mục này không..!'))
		loai.submit()
	}
	function goithem_sua(trangthem,maloaxe)
	{
		themvssua.chentrang.value=trangthem
		themvssua.maloaixe.value=maloaxe
		themvssua.submit()
	}

</script> -->
