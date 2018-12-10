
<div style="width:587px; margin-left:3px; margin-right:3px;">

  <table width="587" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;" align="center" class="ht" colspan="3">
				
				Tin Mới Nhất
				
			</td>
		</tr>
		<tr>
			<td>
				
				<?php 
					//hien thi 1 tin tuc moi nhat
					$strSQL="SELECT * FROM tin_tuc ORDER BY ma_tt desc";
					$tintucmoinhat=mysql_query($strSQL,$ung);
					$rowTINMOI=mysql_fetch_array($tintucmoinhat);
				?>
					<table width="587" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
					<td>
					<a href="#" onclick="chitiet_tt('<?php echo $rowTINMOI['ma_tt']; ?>')">
						<img src="images/tintuc/<?php echo $rowTINMOI['hinh_anh'] ?>" width="150" height="90" 
						style="border:#999999 1px solid; margin:10px;" align="left" />
					</a>
					<p class="pp">	
					<a href="#" onclick="chitiet_tt('<?php echo $rowTINMOI['ma_tt']; ?>')"><b><?php echo $rowTINMOI['tieu_de'] ?></b></a>
					<br />
					<?php if(strlen($rowTINMOI['noi_dung']) > 120) { ?>
					<?php echo substr($rowTINMOI['noi_dung'], 0, 110)?>...
					<?php } else { ?><?php echo $rowTINMOI['noi_dung']; } ?>
					<br />
					<a href="#" onclick="chitiet_tt('<?php echo $rowTINMOI['ma_tt']; ?>')">
					<img src="images/next.jpg" border="0" align="bottom" />&nbsp;&nbsp;Xem Chi Tiết...</a>&nbsp;&nbsp;&nbsp;
					</p>
					<form name="chitiettin" method="post" action="">
					<input type="hidden" name="matintuc" value="" />
					<input name="view" type="hidden" value="chitiettintuc" />
					</form>
<script>
	function chitiet_tt(matt)
	{
		chitiettin.matintuc.value=matt
		chitiettin.submit()
	}
	function chonhang(mahang,tenhang,gia)
	{
		nhanthongtin.txtmasp.value=mahang
		nhanthongtin.txttensp.value=tenhang
		nhanthongtin.txtdongia.value=gia
		nhanthongtin.submit()
		
	}
</script>


  <form name="nhanthongtin" method="post" action="">
    <input name="txtmasp" type="hidden" value="" />
	<input name="txttensp" type="hidden" id="txttensp">
	<input name="txtdongia" type="hidden" id="txtdongia" >
	<input type="hidden" name="view" value="dathang" />
	<input type="hidden" name="hanhdong" value="them" />
  </form>
					</td>
			</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td align="right">
				<a href="#" onclick="dentrang_onsubmit('tintuc')"><img src="images/next.jpg" border="0" align="bottom" />
				&nbsp;&nbsp;Xem Thêm Các Tin Khác...</a>
			</td>
		</tr>
  </table>
</div>

<div style="width:587px; margin-left:3px; margin-right:3px;">

  <table width="587" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;" align="center" class="ht" colspan="3">
					Sản Phẩm Mới
			</td>
		</tr>
		<tr>
			<td>
			
				<?php
					$strSQL="SELECT * FROM hoa ORDER BY ma_hoa desc";
					$hoa=mysql_query($strSQL,$ung);
					
							for($i=1;$i<=6;$i++)
							{
							$row=mysql_fetch_array($hoa)
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
			<td align="right">
			<a href="#" onclick="dentrang_onsubmit('sanpham')"><img src="images/next.jpg" border="0" align="bottom" />
			&nbsp;&nbsp;
			Xem Thêm Các Sản Phẩm Khác...</a>&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
  </table>
</div>
