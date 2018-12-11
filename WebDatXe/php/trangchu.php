<div class="container-fluid">
<div class="row">
		<div class="col-md-12">
			<h1> Xe 4 chỗ</h1>
		</div>
	</div>
<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM thongtinxe WHERE so_cho =4";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
	<div class="row ">
		<div class="col-md-4>
			<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
				<img src="image/<?php echo $row['hinhanh'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
					<h5>
						<?php echo $row['ten_xe']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
	</div>
	<?php } ?>
</div>


