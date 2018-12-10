<?php
	if(isset($_POST['maloaihoa']))
		$maloaihoa=$_POST['maloaihoa'];
		
	$strSQL="SELECT * FROM loai_hoa WHERE ma_loai={$maloaihoa}";
	$loaihoa=mysql_query($strSQL,$ung);
	$row=mysql_fetch_array($loaihoa);
?>
<form action="" method="post" name="themloaihoa">
<table cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
		<td align="center" colspan="2" height="35">
		Sửa Tên Loại Sản Phẩm
		</td>
	</tr>
	<tr>
		<td align="right"  height="30">
				<input name="tenloaihoa" type="text" value="<?php echo $row['ten_loai']; ?>" style="width:200px;" maxlength="30">
		</td>
		<td align="left"  height="30">
				<input name="trangchuyen" type="hidden" value="xlloaihoa" />
				<input name="goihamxuly" type="hidden" value="sualoaihoa" />
				<input name="maloaihoa" type="hidden" value="<?php echo $row['ma_loai']; ?>" />
				
		  		<input type="submit" name="Submit" value="Sửa" style="background:#FFFFFF; width:100px;">
		 </td>
	</tr>
</table>
				
</form>
