
<table width="220" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td style="height:25px; background:url(images/trang.jpg) repeat-x;" align="left" class="ht" colspan="3">
				&nbsp;&nbsp;<img src="images/no.gif" border="0" width="16" height="16" align="bottom"/>
				&nbsp;&nbsp;Tìm Kiếm Nhanh
			</td>
		</tr>
		<tr>
			<td>
			<form action="" method="post" name="timkiem">
				<input name="view" type="hidden" value="manhinhtimkiem" />
				<table width="220" height="85" cellpadding="0" cellspacing="0" border="0" style="border:#CCCCCC 1px solid; margin-top:3px;">
					<tr>
						<td height="5">
						</td>
					</tr>
					<tr>
						<td height="30" align="center">
							
									<input type="text" name="txttim" value="<?php echo $tukhoa; ?>" style="width:200px;">
						</td>
					</tr>	
					<tr>
						<td height="30" align="center">
						
									<input type="button" name="Button" value="Tìm" style="background:#FFFFFF; color:#FFCC33; width:100px;" onclick="timkiem_onsubmit()">
						</td>
					</tr>
					<tr>
						<td height="35" align="center">
							<a href="#" onclick="dentrang_onsubmit('timnangcao')">Tìm Kiếm Nâng Cao</a>
						</td>
					</tr>
				</table>
			</form>

			</td>
		</tr>
	</table>
	<script>
		function timkiem_onsubmit()
		{
		timkiem.submit()
		}
	</script>
