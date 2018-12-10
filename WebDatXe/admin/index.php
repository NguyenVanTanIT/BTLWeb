<?php session_start(); ?>
<?php include('../include/ketnoi.php'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>
		<?php 
		if($_REQUEST['trangchuyen']=="")
			echo "Admin CP";
		else
			echo $_REQUEST['trangchuyen']; 
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="admstyle.css">
</head>
<Script language="JavaScript" type="text/javascript" src="../js/openwysiwyg/wysiwyg.js"> </script>

<body>
		<form action="" method="post" name="hung">
			<input type="hidden" name="thoat" value="" />
		</form>    
		<table border="0" cellpadding="0" cellspacing="0" width="960" align="center" style="margin-top:20px; margin-bottom:20px; background:#FFFFFF;">
			<tr>
				<td height="40" style="color:#FFFFCC; background:#66A111;" colspan="2" align="center">
					ADMIN CONTROL PANEL - ĐẶT XE ONLINE 
				</td>
			</tr>
			<tr>
				<td height="25" style="color:#FF6600; background:url(../image/trang.jpg) repeat-x;" colspan="2" align="right">

				</td>
			</td>
		</tr>
		<tr>
			<td width="200" valign="top" style="border-right: 1px #66A111 solid; border-left: 1px #66A111 solid;">
				<div class="menuleft">
					<a href="#" onclick="adm_chuyentrang('quanlyloaihoa')">Quản Lý Loại xe</a>
					<a href="#" onclick="adm_chuyentrang('quanlyhoa')">Quản Lý xe</a>
					<a href="#" onclick="adm_chuyentrang('quanlydondathang')">Quản Lý Đơn Đặt Hàng</a>
					<a href="#" onclick="adm_chuyentrang('quanlykhachhang')">Quản Lý Khách Hàng</a>
					<a href="#" onclick="adm_chuyentrang('quanlyadmin')">Quản Lý Admin</a>
					<a href="#" onclick="adm_chuyentrang('quanlylienhe')">Quản Lý Liên Hệ</a>
				</div>
				<div style="width:200px; margin-top:10px; margin-bottom:10px; background:#FFFFFF; color:#009933; line-height:30px; 
				border:#66A111 solid 1px; border-right:none; border-left:none;">
				<p class="pp">
					<img src="../image/admin_pinguim.gif" border="0" width="112" height="32"/>
					<br />
					Chào: <?php echo $_SESSION['hovatenad'] ;?>
					<br />
					Quyền Hạn:<font color="#666666"><?php if($_SESSION['phanquyen']=='admin') echo "Admin"; else echo "Quản Trị Viên"; ?></font>
					<br />
					<a href="#" onclick="thoattaikhoan('thoat')">Thoát Tài Khoản</a>
				</p>
			</div>
			<?php include('../include/thongke.php'); ?>
			
			<div style="margin-top:4px;padding:10px; background:#66A111; color:#FFFFCC; border:1px #66A111 solid; 
			background:#FFFFFF; color:#999999; text-align:left; border-right:none; border-left:none;">
			<span class="demuc"> Tổng Số Loại Hoa:</span> <?php echo $soloaihoa; ?>
			<br />
			<span class="demuc">Tổng Số Hoa:</span> <?php echo $sohoa; ?>	
			<br />
			<span class="demuc">Số Khách Hàng:</span> <?php echo $khachhang; ?>
			<br />
			<span class="demuc">Số Tin Tức:</span> <?php echo $tintuc; ?> 
			<br />
			<span class="demuc">Số Góp Ý:</span> <?php echo $lienhe; ?>
			<br />
			<span class="demuc">Số Đơn Đặt Hàng:</span> <?php echo $dondathang; ?>  
		</div>
	</td>
	<td width="760" valign="top">
		<!-- <?php
		if(isset($_POST['trangchuyen']))
		{
			$hienthi=$_POST['trangchuyen'];
			if($hienthi=='quanlyloaihoa')
				include_once('loaihoa/loaihoa.php');
			else if($hienthi=='quanlyhoa')
				include_once('hoa/hoa.php');
			else if($hienthi=='quanlylienhe')
				include_once('lienhe/inlienhe.php');
			else if($hienthi=='quanlytintuc')
				include_once('tintuc/tintuc.php');
			else if($hienthi=='quanlykhachhang')
				include_once('khachhang/khachang.php');
			else if($hienthi=='quanlyadmin')
				include_once('admin/admin.php');
			else if($hienthi=='quanlydondathang')
				include_once('dondathang/dondathang.php');
							/////////////////////////////////////////////////////////	
			else if($hienthi=='xlloaihoa')
				include_once('loaihoa/xl_loaihoa.php');
			else if($hienthi=='xlhoa')
				include_once('hoa/xl_hoa.php');
			else if($hienthi=='xllienhe')
				include_once('lienhe/xl_lienhe.php');
			else if($hienthi=='chitietlienhe')
				include_once('lienhe/chitiet.php');
			else if($hienthi=='xlkhachhang')
				include_once('khachhang/xl_khachang.php');
			else if($hienthi=='chitietkh')
				include_once('khachhang/chitietkhachhang.php');
			else if($hienthi=='xltintuc')
				include_once('tintuc/xl_tintuc.php');
			else if($hienthi=='themtintuc')
				include_once('tintuc/themtintuc.php');
			else if($hienthi=='suatintuc')
				include_once('tintuc/suatintuc.php');
			else if($hienthi=='xladmin')
				include_once('admin/xl_admin.php');	
			else if($hienthi=='xl_dondathang')
				include_once('dondathang/xl_dathang.php');	
			else if($hienthi=='chitiet_dh')
				include_once('dondathang/chitietdonhang.php');					
		}
		else
			include_once('loaihoa/loaihoa.php');
		?> -->
	</td>
</tr>
<tr>
	<td colspan="2" height="30" style="color:#FFFFCC; background:#66A111;" align="center" valign="middle">
		Copyright © Team1 T1007i. Đề Tài Siêu Thị Bán Hoa Trực Tuyến. Tháng 6 - 2011. 
	</td>
</tr>
</table>

<form action="" method="post" name="chuyentrang">
	<input name="trangchuyen" type="hidden" value="" />
</form>

<script>
	function adm_chuyentrang(trang)
	{
		chuyentrang.trangchuyen.value=trang
		chuyentrang.submit()
	}
	
	function thoattaikhoan(Lenh)
	{
		hung.thoat.value=Lenh;
		if(confirm('bạn chắc chắn muốn thoát tài khoản..!!'))
			hung.submit()
	}
</script>

</body>
</html>