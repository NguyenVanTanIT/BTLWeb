

<div class="container-fluid">
	<?php

	include ('../include/ketnoi.php');
	$strSQL="SELECT * FROM thongtinxe";
	$thongtinxe=mysqli_query($ung,$strSQL);
?>
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-1 container">
					<h5> STT</h5>
				</div>
				<div class="col-md-2">
					<h5> Tên Xe</h5>
				</div>
				<div class="col-md-6">
					<h5> Mô Tả</h5>
				</div>
				<div class="col-md-1 container">
					<h5> Số Chỗ </h5>
				</div>
				<div class="col-md-2">
					<h5> 
						<a href="index.php?page=themxe">Thêm Xe Mới</a>
					</h5>
				</div>
			</div>

			<?php $i=0; ?>
			<?php while($row1=mysqli_fetch_array($thongtinxe)) { $i+=1; ?>
	

				<?php 
			if($i%2==0) 
				$mausac="style='background:#F8F8F8;'";
			 else 
			 	$mausac="style='background:#FFFFFF;'";?> 
			<div class="row " style="padding-top: 10px; ">
					
				<div class="col-md-1 container" >
					<p>
						<?php echo $i; ?>
						<?php echo $mausac; ?>
					</p>

				</div>
				<div class="col-md-2">
					<p>
						<?php echo $row1['ten_xe']; ?>
					</p>
				</div>
				<div class="col-md-6">
					<?php echo $row1['mo_ta_xe']; ?>
				</div>
				<div class="col-md-1 container">
					<?php echo $row1['so_cho']; ?>
				</div>
				<div class="col-md-2">
					<div class="col-md-1">
						<a href="#" onclick="goithem_sua('sualoaixe',<?php echo $row['ten_xe']; ?>)">Sửa</a>
					</div>
					<div class="col-md-1">
						<a href="#" onclick="xoa_loaixe(<?php echo $row['ten_xe']; ?>)">Xóa</a>
					</div>
				</div>
				
			</div>
			<?php } ?>
		</div>
	</div>
</div>