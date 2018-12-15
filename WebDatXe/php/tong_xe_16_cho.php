<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 16 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
include('include/ketnoi.php'); 

	$strSQL="SELECT * FROM car WHERE seats =16";
	$car=mysqli_query($ung,$strSQL);
?>
<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
		<div class="col-md-4">
			<a href="DatXeDuLich.php?page=chitietxe" title="Xe 16 chỗ Mazda CX5">
				<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
			</a>
			<h2 class="tensanpham_tencot">
				<a href="Xe-16-chỗ-Madza-CX5.html" title="Xe 16 chỗ Mazda CX5">
					<h5>
						<?php echo $row['carname']; ?>
						
					</h5>
				</a>
					<h5>Liên Hệ: 016868686868</h5>
					<a class="datxe" href="#"><h5>Đặt Xe</h5></a>
			</h2>
		</div>
<?php } ?>
	</div>
	
</div>