<?php
	//bien in loai hoa tren tab
	$inloaihoa="";
	//bien dieu kien
	$dieukien="";
	//hien thi loai hoa	
	if(isset($_POST['MaLH']))
	{
	$ma=$_POST['MaLH'];
		$dieukien="WHERE ma_loai ='{$ma}'";
		
		$strSQLH="SELECT * FROM loai_hoa WHERE ma_loai={$ma}";
		$hienthiloai=mysql_query($strSQLH,$ung);
		$rowH=@mysql_fetch_array($hienthiloai);
		$inloaihoa=$rowH['ten_loai'];
	}
	//hien thi theo gia
	if(isset($_POST['gia']))
	{
		$gia=$_POST['gia'];
		
		if($gia=='mot')
		{
			$dieukien="WHERE gia < 100000";
			$inloaihoa="Có Giá Dưới 100.000đ";
		}
		else if($gia=='hai')
		{
			$dieukien="WHERE gia >= 100000 and gia < 200000";
			$inloaihoa="Có Giá Từ 100.000đ Đến Dưới 200.000đ";
		}
		else if($gia=='ba')
		{
			$dieukien="WHERE gia >= 200000 and gia < 300000";
			$inloaihoa="Có Giá Từ 200.000đ Đến Dưới 300.000đ";
		}
		else if($gia=='bon')
		{
			$dieukien="WHERE gia >= 300000 and gia < 400000";
			$inloaihoa="Có Giá Từ 300.000đ Đến Dưới 400.000đ";
		}
		else if($gia=='nam')
		{
			$dieukien="WHERE gia >= 400000 and gia < 500000";
			$inloaihoa="Có Giá Từ 400.000đ Đến Dưới 500.000đ";
			
		}
		else if($gia=='sau')
		{
			$dieukien="WHERE gia >= 500000 and gia < 600000";
			$inloaihoa="Có Giá Từ 500.000đ Đến Dưới 600.000đ";
		}
		else if($gia=='bay')
		{
			$dieukien="WHERE gia >= 600000 and gia < 700000";
			$inloaihoa="Có Giá Từ 600.000đ Đến Dưới 700.000đ";
		}
		else if($gia=='tam')
		{
			$dieukien="WHERE gia >= 700000 and gia < 800000";
			$inloaihoa="Có Giá Từ 700.000đ Đến Dưới 800.000đ";
		}
		else if($gia=='chin')
		{
			$dieukien="WHERE gia >= 800000 and gia < 900000";
			$inloaihoa="Có Giá Từ 800.000đ Đến Dưới 900.000đ";
		}
		else if($gia=='muoi')
		{
			$dieukien="WHERE gia >= 900000";
			$inloaihoa="Có Giá Trên 900.000đ";
		}
	}
	//hien thi san pham dac biet
	if(isset($_POST['trangthai']))
	{
		$trangthai=$_POST['trangthai'];
		$dieukien="WHERE trang_thai ='{$trangthai}'";
		$inloaihoa="Nổi Bật";
	}
	
	//////////////////////////////////////////////////////////
	$strSQL="SELECT count(*) FROM hoa {$dieukien} ;";
	$hoa=mysql_query($strSQL,$ung);
	$row=mysql_fetch_array($hoa);
	$sodong=$row[0];
	
	$kichthuoctrang=6;
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
<form name="hung1" method="post" action="">
	<input type="hidden" name="tranghienhanh" value="" />
	<input type="hidden" name="masanpham" value="" />
	<input type="hidden" name="view" value="sanpham" />
</form>

  <form name="nhanthongtin" method="post" action="">
    <input name="txtmasp" type="hidden" value="" />
	<input name="txttensp" type="hidden" id="txttensp">
	<input name="txtdongia" type="hidden" id="txtdongia" >
	<input type="hidden" name="view" value="dathang" />
	<input type="hidden" name="hanhdong" value="them" />
  </form>
<script>
	function sotrang(trang,masp)
	{
		hung1.tranghienhanh.value=trang
		hung1.submit()
	}
	function chonhang(mahang,tenhang,gia)
	{
		nhanthongtin.txtmasp.value=mahang
		nhanthongtin.txttensp.value=tenhang
		nhanthongtin.txtdongia.value=gia
		nhanthongtin.submit()
		
	}
	function chitiet(masp)
	{
		hung1.masanpham.value=masp
		hung1.view.value="chitiet"
		hung1.submit()
	}
</script>
<div style="width:587px; margin-left:3px; margin-right:3px;">

  <table width="587" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;" align="center" class="ht" colspan="3">
				
				
				Danh Sách Sản Phẩm <?php if($inloaihoa!="") echo $inloaihoa; ?>
				
			</td>
		</tr>
		<tr>
			<td>
				<?php 
							while($row=mysql_fetch_array($hoa))
							{
				?>
				<table width="587" height="120" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
						<td width="150">
							<div style="margin-left:3px; margin-right:3px; margin-top:3px; margin-bottom:3px; border:#E9E9E9 solid 1px; width:120px;
							height:103px;">
							<a href="#" onclick="chitiet('<?php echo $row['ma_hoa']; ?>')">
								<img src="images/sp/<?php echo $row['hinh_anh']; ?>" border="0" height="103" width="120" />
							</a>
							</div>
						</td>
						<td width="437">
						
							<table width="437" cellpadding="0" cellspacing="0" border="0">
								<tr> 
									<td height="20" align="center">
										<span class="demuc">
										Tên Sản Phẩm:</span> 								
										<span class="ten">
										<a href="#" onclick="chitiet('<?php echo $row['ma_hoa']; ?>')"><b><?php echo $row['ten_hoa']; ?></b></a>
										</span>
											
												<?php
												// hien trang thai cua hoa
													if($row['trang_thai']==1)
													echo "<img src='images/hot.gif' border='0'>";
												?>
										<br />
										<span class="demuc">Giá Bán:</span><?php echo number_format($row['gia'],0,'.','.'); ?> đ
									</td>
								</tr>
								<tr>
									<td align="left">
										<?php if(strlen($row['mo_ta']) > 80) { ?>
										<?php echo substr($row['mo_ta'], 0, 80)?>...
										<?php } else { ?><?php echo $row['mo_ta']; } ?>
										
								<br />
											<a href="#" onclick="chitiet('<?php echo $row['ma_hoa']; ?>')">Chi Tiết </a>
											<img src="images/icon.png" border="0" width="14" height="14" align="bottom" />
		<a href="#" onclick="chonhang('<?php echo $row['ma_hoa']; ?>','<?php echo $row['ten_hoa']; ?>','<?php echo $row['gia']; ?>')">Đặt Mua</a>
									</td>
										
								</tr>
							</table>
							
					</tr>
				</table>
				<?php }; ?>
			</td>
		</tr>
		<tr>
			<td align="center">
			<table width="587" height="50" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
						<td>
		<?php if((int)$tongsotrang>1) { ?>
				<?php 
					//xu ly review trang
					if((int)$tranghienhanh!=1)
					{
				?>
					<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh-1 ?>) "> <img src="images/review.jpg" border="0" /></a> 
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
				<a href="#" class="page" onclick="sotrang(<?php echo $tranghienhanh+1 ?>) "> <img src="images/next.jpg" border="0" /></a>		
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
			
			</td>
		</tr>
  </table>
</div>
