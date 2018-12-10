<?php
	//dem so loai hoa
	$strSQL="SELECT COUNT(*) FROM loai_hoa";
	$so_loai_hoa=mysql_query($strSQL,$ung);
	$rowLOAI=mysql_fetch_array($so_loai_hoa);
	$soloaihoa=$rowLOAI[0];
	//dem so hoa
	$strSQL="SELECT COUNT(*) FROM hoa";
	$so_hoa=mysql_query($strSQL,$ung);
	$rowHOA=mysql_fetch_array($so_hoa);
	$sohoa=$rowHOA[0];
	//dem so khach hang
	$strSQL="SELECT COUNT(*) FROM khach_hang";
	$khach_hang=mysql_query($strSQL,$ung);
	$rowKHACH=mysql_fetch_array($khach_hang);
	$khachhang=$rowKHACH[0];
	//dem so tin tuc
	$strSQL="SELECT COUNT(*) FROM tin_tuc";
	$tin_tuc=mysql_query($strSQL,$ung);
	$rowTIN=mysql_fetch_array($tin_tuc);
	$tintuc=$rowTIN[0];
	//dem so lien he
	$strSQL="SELECT COUNT(*) FROM lien_he";
	$lien_he=mysql_query($strSQL,$ung);
	$rowLH=mysql_fetch_array($lien_he);
	$lienhe=$rowLH[0];
	//dem so don dat hang
	$strSQL="SELECT COUNT(*) FROM dondathang";
	$dondathang=mysql_query($strSQL,$ung);
	$rowDDH=mysql_fetch_array($dondathang);
	$dondathang=$rowDDH[0];
?>