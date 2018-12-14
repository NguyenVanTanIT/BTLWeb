<div class="container-fluid " style="padding-bottom: 10px">
	<!-- xe 4 cho -->
	<div class="row" style="padding-top: 10px;">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 4 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
		include('include/ketnoi.php'); 

		$strSQL="SELECT * FROM car WHERE seats =4";
		$car=mysqli_query($ung,$strSQL);
		?>
		<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($car)) {$i+=1; ?>
			<div class="col-md-4">
				<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
					<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
					style="border:#999999 1px solid;" align="left" />
				</a>
				<h2 class="tensanpham_tencot">
					<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
						<h5>
							<?php echo $row['carname']; ?>

						</h5>
					</a>
					<h5>Liên Hệ: 0963 651 555</h5>
					<a class="datxe bg-danger" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>
					
				</h2>
			</div>
		<?php } ?>
	</div>
	<!-- xe 8 cho -->
	<div class="row" style="padding-top: 10px;">
		<div class="col-md-12">
			<h1 style="background-color:Tomato;" class="rounded"> Xe 8 chỗ</h1>
		</div>
	</div>

	<div class="row ">
		<?php
		include('include/ketnoi.php'); 

		$strSQL="SELECT * FROM car WHERE seats =8";
		$car=mysqli_query($ung,$strSQL);
		?>
		<?php $i=0; ?>
		<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
			<div class="col-md-4">
				<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
					<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
					style="border:#999999 1px solid;" align="left" />
				</a>
				<h2 class="tensanpham_tencot">
					<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
						<h5>
							<?php echo $row['carname']; ?>

						</h5>
					</a>
					<h5>Liên Hệ: 0963 651 555</h5>
					
					<div style="padding-bottom: 10px">
						<a class="datxe bg-danger" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>

					</div>


				</div>
			<?php } ?>
		</div>


		<!-- xe 16 cho-->
		<div class="row" style="padding-top: 10px;">
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
					<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
						<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
					</a>
					<h2 class="tensanpham_tencot">
						<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
							<h5>
								<?php echo $row['carname']; ?>

							</h5>
						</a>
						<h5>Liên Hệ: 0963 651 555</h5>
						<div>
							<a class="datxe bg-danger" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>

						</div>
					</h2>
				</div>
			<?php } ?>
		</div>

		<!-- xe 35 cho -->
		<div class="row " style="padding-top: 10px;">

			<div class="col-md-12">
				<h1 style="background-color:Tomato;" class="rounded"> Xe 35 chỗ</h1>
			</div>
		</div>

		<div class="row ">
			<?php
			include('include/ketnoi.php'); 

			$strSQL="SELECT * FROM car WHERE seats =35";
			$car=mysqli_query($ung,$strSQL);
			?>
			<?php $i=0; ?>
			<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
				<div class="col-md-4">
					<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
						<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
					</a>
					<h2 class="tensanpham_tencot">
						<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
							<h5>
								<?php echo $row['carname']; ?>

							</h5>
						</a>
						<h5>Liên Hệ: 0963 651 555</h5>
						<div>
							<a class="datxe bg-danger" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>

						</div>
					</h2>
				</div>
			<?php } ?>
		</div>

		<!-- xe 45 cho -->
		<div class="row" style="padding-top: 10px;">
			<div class="col-md-12">
				<h1 style="background-color:Tomato;" class="rounded"> Xe 45 chỗ</h1>
			</div>
		</div>

		<div class="row ">
			<?php
			include('include/ketnoi.php'); 

			$strSQL="SELECT * FROM car WHERE seats =45";
			$car=mysqli_query($ung,$strSQL);
			?>
			<?php $i=0; ?>
			<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
				<div class="col-md-4">
					<a href="DatXeDuLich.php?page=chitietxe" title="Xe 4 chỗ Mazda CX5">
						<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
						style="border:#999999 1px solid;" align="left" />
					</a>
					<h2 class="tensanpham_tencot">
						<a href="Xe-4-chỗ-Madza-CX5.html" title="Xe 4 chỗ Mazda CX5">
							<h5>
								<?php echo $row['carname']; ?>

							</h5>
						</a>
						<h5>Liên Hệ: 0963 651 555</h5>
						<div style="padding-bottom: 10px">
							<a class="datxe bg-danger" href="DatXeDuLich.php?page=datxe"><h5>Đặt Xe</h5></a>

						</div>
					</h2>
				</div>
			<?php } ?>
		</div>
	</div>