<?php
	$thongbao="";
		if(isset($_POST['goihamxuly']))
		{
			$lenhsuly=$_POST['goihamxuly'];		
			if($lenhsuly=='themhoa')
				$thongbao=them_hoa();	
			else if($lenhsuly=='xoahoa')
				$thongbao=xoa_hoa();	
			else if($lenhsuly=='suahoa')
				$thongbao=sua_hoa();				
		}
//ham xoa hoa
function xoa_hoa()
{
	global $ung;
		if(isset($_POST['mahoa']))
		$mahoa=$_POST['mahoa'];
		
		//kiem tra loai hoa co ton tai trong chi tiet don dat hang nao khong
		$strSQL="SELECT COUNT(*) FROM ct_dondathang WHERE ma_hoa ='{$mahoa}'";
		$ctdathang=mysql_query($strSQL,$ung);
		$row=mysql_fetch_array($ctdathang);
		if($row[0]>0)
			return "Bạn Không Thể Xóa Hoa Đã Có Trong Chi Tiết Hóa Đơn!";
		//neu khong co the xoa
		$strSQL="DELETE FROM hoa WHERE ma_hoa={$mahoa}";
		mysql_query($strSQL,$ung);
		
		return "Đã Xóa Thành Công";
}		
//ham them hoa
function them_hoa()
{
	global $ung;
		if(isset($_POST['tenhoa']))
			$tenhoa=$_POST['tenhoa'];
			
		if(isset($_POST['loaihoa']))
			$loaihoa=$_POST['loaihoa'];	
		
		if(isset($_POST['giahoa']))
			$giahoa=$_POST['giahoa'];
			
		if(isset($_POST['mota']))
			$mota=$_POST['mota'];
			
		if(isset($_POST['hinhanh']))
			$hinhanh=$_POST['hinhanh'];
		
		if(isset($_POST['trangthai']))
			$trangthai=$_POST['trangthai'];
			
		//kiem tra xem ten hoa co bi trung hay khong
		$strSQL="SELECT COUNT(*) FROM hoa WHERE ten_hoa='{$tenhoa}'";
		$hoa=mysql_query($strSQL,$ung);
		$row=mysql_fetch_array($hoa);
		
		if($row[0]>0)
			return "Tên Hoa Đã Tồn Tại, Bạn Hãy Chọn Tên Khác";
		//neu khong trung ten luu vao csdl
		
		$strSQL="INSERT INTO hoa(ten_hoa,ma_loai,gia,mo_ta,hinh_anh,trang_thai) 
			VALUES ('{$tenhoa}',{$loaihoa},'{$giahoa}','{$mota}','{$hinhanh}','{$trangthai}')";
		mysql_query($strSQL,$ung);
			
			return "Đã Thêm Thành Công Hoa Váo Cơ Sở Dữ Liệu";
		
}
function sua_hoa()
{
	global $ung;
		if(isset($_POST['mahoa']))
			$mahoa=$_POST['mahoa'];
			
		if(isset($_POST['tenhoa']))
			$tenhoa=$_POST['tenhoa'];
			
		if(isset($_POST['loaihoa']))
			$loaihoa=$_POST['loaihoa'];	
		
		if(isset($_POST['giahoa']))
			$giahoa=$_POST['giahoa'];
			
		if(isset($_POST['mota']))
			$mota=$_POST['mota'];
			
		if(isset($_POST['hinhanh']))
			$hinhanh=$_POST['hinhanh'];
			
		if(isset($_POST['trangthai']))
			$trangthai=$_POST['trangthai'];
			
		//kiem tra xem ten hoa co bi trung hay khong
		//$strSQL="SELECT COUNT(*) FROM hoa WHERE ten_hoa='{$tenhoa}'";
		//$hoa=mysql_query($strSQL,$ung);
		//$row=mysql_fetch_array($hoa);
		//if($row[0]>0)
			//return "Tên Hoa Đã Tồn Tại, Bạn Hãy Chọn Tên Khác";
		
		//neu khong trung ten luu thong tin da thay  vao csdl
		
		$strSQL="UPDATE hoa SET ten_hoa='{$tenhoa}',ma_loai={$loaihoa},gia='{$giahoa}',mo_ta='{$mota}',hinh_anh='{$hinhanh}',trang_thai='{$trangthai}'
			WHERE ma_hoa={$mahoa}";
		mysql_query($strSQL,$ung);
			
			return "Đã Lưu Thành Công Thay Đỗi Của Bạn";
		
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
<center><a href="#" onclick="adm_chuyentrang('quanlyhoa')">Bấm Vào Đây Để Về Trang Quản Lý Hoa</a></center>
<?php
echo "</p>";
echo "</td>";
echo "</tr>";
echo "</table>";
echo "</div>";
}
?>