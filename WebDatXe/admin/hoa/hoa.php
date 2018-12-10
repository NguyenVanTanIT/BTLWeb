
<?php
	//tim kiem nhanh
	$dieukien="";
	
	$strSQL="SELECT * FROM loai_hoa";
	$loaihoa=mysql_query($strSQL,$ung);
	//kiem tra xem ten hoa co duoc nhap vao hay khong
	if(isset($_POST['txttukhoa']))
		{
			$tukhoa=$_POST['txttukhoa'];
			if($tukhoa!="")
			$dieukien="ten_hoa Like '%{$tukhoa}%'";
		}	
	//kiem tra ma loai hoa co duco nhap vao hay khong
		if(isset($_POST['loaihoa']))
		{
			$maloaihoa=$_POST['loaihoa'];
			if($maloaihoa!="0")
				{
					if($dieukien!="")
						$dieukien=$dieukien."AND ma_loai = {$maloaihoa}";
					else
						$dieukien="ma_loai = {$maloaihoa}";	
				}
			
		}
		if($dieukien!="")
		$dieukien="WHERE ".$dieukien;
	//phan hien thi trang them va sua
	if(isset($_POST['chentrang']))
	{
		$chucnang=$_POST['chentrang'];
		if($chucnang=='themhoa')
			include_once('hoa/themhoa.php');
		else if($chucnang=='suahoa')
			include_once('hoa/suahoa.php');
	}

//phan trang
$strSQL="SELECT count(*) FROM hoa {$dieukien}";
	$hoa=mysql_query($strSQL,$ung);
	$row=mysql_fetch_array($hoa);
	$sodong=$row[0];
	
	$kichthuoctrang=10;
		if(($sodong%$kichthuoctrang)==0)
				$tongsotrang=$sodong/$kichthuoctrang;
		else
				$tongsotrang=($sodong/$kichthuoctrang)+1;
			
			
	if(!isset($_POST['tranghienhanh']) || $_POST['tranghienhanh']=="1")
		{
			$dongbatdau=0;
			$tranghienhanh=1;
		}
	else
		{
			$dongbatdau=($_POST['tranghienhanh']-1)*$kichthuoctrang;
			$tranghienhanh=$_POST['tranghienhanh'];
		}
	
	$strSQL="SELECT * FROM hoa {$dieukien} ORDER BY ma_hoa desc Limit {$dongbatdau},{$kichthuoctrang}";
	$hoa=mysql_query($strSQL,$ung);
?>
<form name="timhoa" action="" method="post">
<table width="450" cellpadding="2" cellspacing="0" border="0" align="right" bgcolor="#66A111" style="color:#FFFFCC"> 
<tr><td>
Tìm Kiếm Hoa:&nbsp;&nbsp;
</td><td>
<input type="text" name="txttukhoa" id="txttukhoa" style="width:150px;" value="<?php echo $tukhoa ?>" />
</td><td>
							<select name="loaihoa">
                              <option value="0">----Tên Loại Hoa----</option>
							 <?php while($row=mysql_fetch_array($loaihoa)) { ?>
								<?php if($row['ma_loai']==$maloaihoa) { ?>
							  	<option value="<?php echo $row['ma_loai']; ?>" selected="selected" ><?php echo $row['ten_loai']; ?></option>
								<?php } else { ?>
								<option value="<?php echo $row['ma_loai']; ?>"><?php echo $row['ten_loai']; ?></option>
							  <?php } ?>
							 <?php } ?>
                            </select>					
</td>
<td>
<input name="trangchuyen" type="hidden" value="quanlyhoa" />
<input type="submit" value="Tìm" name="submit" />
</td></tr></table>
</form>

<table width="750" cellpadding="2" cellspacing="0" border="0" class="admintable" style="border-right:#E9E9E9 1px solid; border-top:#E9E9E9 1px solid;" align="right">
	<tr>
		<th width="40" align="center" style="border-left:#66A111 solid 1px;">
			STT
		</th>
		<th width="90" align="center">
			Mã Hoa
		</th>
		<th width="220">
			Tên Hoa
		</th>
		<th width="200">
			Thuộc Loại
		</th>
		<th width="200" colspan="2" style="background:#FFFFFF;" align="center">
			<a href="#" onclick="them_suahoa('themhoa')">Thêm Hoa Mới</a>
		</th>
	</tr>
	<?php $i=$dongbatdau; ?>
		<?php while($row=mysql_fetch_array($hoa)) { $i+=1; ?>
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
			<?php echo $row['ma_hoa']; ?>
		</td>
		<td <?php echo $mausac; ?> >
			<a href="#" onclick="them_suahoa('suahoa',<?php echo $row['ma_hoa']; ?>)">
			<?php echo $row['ten_hoa']; ?></a>
			
			<?php
				// hien trang thai cua hoa
				if($row['trang_thai']==1)
					echo "<img src='../images/hot.gif' border='0'>";
			?>
		</td>
		<td <?php echo $mausac; ?> >
			<?php
				$strSQL="SELECT * FROM loai_hoa WHERE ma_loai=$row[ma_loai]";
				$loaihoa=mysql_query($strSQL,$ung);
				$rowloai=mysql_fetch_array($loaihoa);
				echo $rowloai['ten_loai'];
			?>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="them_suahoa('suahoa',<?php echo $row['ma_hoa']; ?>)">Sửa</a>
		</td>
		<td width="100" align="center" <?php echo $mausac; ?>>
			<a href="#" onclick="xoa_hoa(<?php echo $row['ma_hoa']; ?>)">Xóa</a>
		</td>
	</tr>
		<?php } ?>
	<tr>
		<td colspan="6" height="30" align="center">
			<?php if((int)$tongsotrang>1) { ?>
				<?php 
					//xu ly review trang
					if((int)$tranghienhanh!=1)
					{
				?>
					<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh-1 ?>) "> <img src="../images/review.jpg" border="0" /></a> 
					<?php } ?>
			
			<?php for($i=1; $i<=$tongsotrang; $i++ ) { ?>
				<?php if ((int)$tranghienhanh==$i) { ?>
					<a href="#" class="tranghientai" onclick="sotrang(<?php echo $i; ?>)"> <?php echo $i; ?></a>
					<?php } else  {?>	
					<a href="#" class="phantrang" onclick="sotrang(<?php echo $i; ?>)"> <?php echo $i; ?></a>
				<?php } ?>	
			<?php } ?>
				<?php 
					//xu ly next trang
					if((int)$tranghienhanh!=(int)$tongsotrang)
					{
					?>
				<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh+1 ?>) "> <img src="../images/next.jpg" border="0" /></a>		
					<?php } ?>
		<?php } ?>		
			
		<?php if((int)$tongsotrang>1) { ?>
		  <select name="select" onchange="sotrang(this.value)" >
	   	   	<?php for($i=1; $i<=$tongsotrang; $i++ ) { ?>
					<?php if ($tranghienhanh==$i) { ?>
						<option value="<?php echo $i; ?>" selected="selected">Trang  <?php echo $i; ?></option>
					<?php } else  {?>
						<option value="<?php echo $i; ?>" >Đến Trang  <?php echo $i; ?></option>
					<?php } ?>			
			<?php } ?>			   
	   	</select> 
		<?php } ?>	
		</td>
	</tr>
</table>
<form action="" method="post" name="themvssua">
	<input name="chentrang" type="hidden" value="" />
	<input name="mahoa" type="hidden" value="" />
	<input name="trangchuyen" type="hidden" value="quanlyhoa" />
</form>

<form action="" method="post" name="xoahoa">
	<input name="mahoa" type="hidden" value="" />
	<input name="goihamxuly" type="hidden" value="xoahoa" />
	<input name="trangchuyen" type="hidden" value="xlhoa" />
</form>

<script>

	function them_suahoa(trangthem,mah)
	{
		themvssua.chentrang.value=trangthem
		themvssua.mahoa.value=mah
		themvssua.submit()
	}
	function xoa_hoa(mah)
	{
		xoahoa.mahoa.value=mah
		if(confirm('bạn có thực sự muốn xóa không!'))
		xoahoa.submit()
	}
</script>


<form name="hung1" method="post" action="">
	<input type="hidden" name="tranghienhanh" value="" />
	<input type="hidden" name="trangchuyen" value="quanlyhoa" />
</form>
<script>
	function sotrang(trang,masp)
	{
		hung1.tranghienhanh.value=trang
		hung1.submit()
	}
</script>