<?php
	$strSQL="SELECT * FROM loai_hoa";
	$loaihoa=mysql_query($strSQL,$ung);
	
	$strSQL="SELECT * FROM hoa";
	$hoa=mysql_query($strSQL,$ung);
	
	if(isset($_POST['txttim']))
		$tukhoa=$_POST['txttim'];
		
	if(isset($_POST['txtmota']))
		$mota=$_POST['txtmota'];
		
	if(isset($_POST['loaihoa']))
		$maloaihoa=$_POST['loaihoa'];
	
	
?>
<div style="width:587px; margin-left:3px; margin-right:3px;">
	<table width="587" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;" align="center" class="ht" colspan="3">
				Tìm Kiếm Nâng Cao
			</td>
		</tr>
		<tr>
			<td>
				<form action="" method="post" name="timkiem_nangcao">
					<input name="view" type="hidden" value="timnangcao" />
					<table width="587" height="120" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
					  <td height="30" width="30%" align="center">
					  	Tên Sản Phẩm
						</td>
						 <td height="30" width="70%">
							<input name="txttim" type="text" id="txttim" style="width:300px;" value="<?php echo $tukhoa; ?>">
						</td>
				</tr>
				<tr>
					<td align="center">
						Mô Tả
						</td>
						<td>		
							<input name="txtmota" type="text" id="txtmota" style="width:300px;" value="<?php echo $mota; ?>">
					</td>
				</tr>
				<tr>
					<td align="center">		
						Loại Hoa
					</td>
					<td>
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
				</tr>
				<tr>	
					<td colspan="2" align="center">		
							<input name="Button" type="button" style="background:#FFFFFF; width:100px;" value="Tìm" 
							onClick="timkiemnangcao_onsubmit()">
					</td>

					</tr>
					</table>
				</form>
			</td>
		</tr>
	</table>
</div>
	<script>
		function timkiemnangcao_onsubmit()
		{
		timkiem_nangcao.submit()
		}
	</script>
