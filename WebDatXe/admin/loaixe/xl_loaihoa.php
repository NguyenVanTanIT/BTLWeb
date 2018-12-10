<?php
	$thongbao="";
	if(isset($_POST['goihamxuly']))
	{
		$lenhxuly=$_POST['goihamxuly'];
		if($lenhxuly=='xoaloaihang')
			$thongbao=xoa_loai_hoa();
		else if($lenhxuly=='themloaihang')
			$thongbao=them_loai_hoa();
		else if($lenhxuly=='sualoaihoa')
			$thongbao=sua_loai_hoa();
	}
// ham xoa loai hoa
function xoa_loai_hoa()
{
	global $ung;
	if(isset($_POST['maloaihoa']))
		$maloaihoa=$_POST['maloaihoa'];
	//kiem tra xem loai hoa co lien quan den 
	$strSQL="SELECT COUNT(*) FROM hoa WHERE ma_loai={$maloaihoa}";
	$hoa=mysql_query($strSQL,$ung);
	$row=mysql_fetch_array($hoa);
	
	if($row[0]>0)
		return "Không Thể Xóa Loại Hoa Đã Có Sản Phẩm";
	//neu khong co hoa lien quan thi co the xoa
	$strSQL="DELETE FROM loai_hoa WHERE ma_loai={$maloaihoa}";
	mysql_query($strSQL,$ung);
	return "Xóa Thành Công Loại Hoa";
}
// ham them loai hoa
function them_loai_hoa()
{
	global $ung;
	if(isset($_POST['tenloaihoa']))
		$tenloaihoa=$_POST['tenloaihoa'];
	//kiem tra loai hoa co trung ten voi loai hoa da co hay ko
		$strSQL="SELECT COUNT(*) FROM loai_hoa WHERE ten_loai ='{$tenloaihoa}'";
		$loaihoa=mysql_query($strSQL,$ung);
		$row=mysql_fetch_array($loaihoa);
		if($row[0]>0)
			return "Loại Hoa Này Đã Tồn Tại! Bạn Hãy Chon Tên Khác";
	//neu khong trung ten luu vao csdl
		$strSQL="INSERT INTO loai_hoa(ten_loai) VALUES('{$tenloaihoa}')";
		mysql_query($strSQL,$ung);
	return "Thêm Thành Công Loai Hoa: {$tenloaihoa} Vào Cơ Sở Dữ Liệu!";
}
// ham sua loai hoa
function sua_loai_hoa()
{	
	global $ung;
	if(isset($_POST['maloaihoa']))
		$maloaihoa=$_POST['maloaihoa'];
	if(isset($_POST['tenloaihoa']))
		$tenloaihoa=$_POST['tenloaihoa'];
	//kiem tra loai hoa co trung ten voi loai hoa da co hay ko
		$strSQL="SELECT COUNT(*) FROM loai_hoa WHERE ten_loai ='{$tenloaihoa}'";
		$loaihoa=mysql_query($strSQL,$ung);
		$row=mysql_fetch_array($loaihoa);
		if($row[0]>0)
			return "Loại Hoa Này Đã Tồn Tại! Bạn Hãy Chon Tên Khác";
	//neu khong trung ten luu vao csdl
		
		$strSQL="UPDATE loai_hoa SET ten_loai='{$tenloaihoa}' WHERE ma_loai={$maloaihoa}";
		mysql_query($strSQL,$ung);
		
		return "Sửa Thành Công!";
}
//in thong bao

if($thongbao !="")
{
echo "<div style='width:587px; margin-left:3px; margin-right:3px;'>";
echo "<table width='587' cellpadding='0' cellspacing='0' border='0' style='border:#E9E9E9 1px solid; margin-top:3px;'>";
echo "<tr>";
echo "<td>";

echo "<p class='pp'><center><span style='color:#FF9900;'>{$thongbao}</span>"; 
echo "<br />";
echo "<br />";
?>
<center><a href="#" onclick="adm_chuyentrang('quanlyloaihoa')">Bấm Vào Đây Để Về Trang Quản Lý Loại Hoa</a></center>
<?php
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
}

?>
