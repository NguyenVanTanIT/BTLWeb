
<?php 

include("xuly/head.php");
include("xuly/menu.php");
?>
	<main class="rounded container">

<div class="row">
	<div class="col-md-9" style="padding-top: 30px;" >
		<div class="row">
			
<?php
	include('include/ketnoi.php'); 
	$id_car=$_GET['id_car'];
	
	 $sql="SELECT * FROM car WHERE id_car ='$id_car'";
  $result=mysqli_query($ung, $sql);
 while ($row= mysqli_fetch_array($result)) {
	//$seats = "echo $row['seats']" ;
	
	 ?>
	 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-7">
					<p></p>
					<p><strong>Tên xe : <?php echo $row['carname']; ?> </strong><br>
						<strong>Đời xe</strong>: &nbsp;2017 – 2018<br>
						<strong>Kiểu xe:</strong> <?php echo $row['seats']; ?> chỗ<br>
						<strong>Màu xe:</strong>&nbsp;Bạc – Đen – Trắng<br>
						<strong>Giá thuê tháng: Liên hệ</strong></p>
						<p><strong>Chi tiết: </strong> <?php echo $row['describe']; ?> </strong></p>
						<a class="datxe bg-danger" href="formdatxe.php?id_car=<?php echo $row['id_car'] ?>"><h5>Đặt Xe</h5></a>
					</div>
					<div class="col-md-5">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="image/<?php echo $row['image'] ?>" width="400px" height="200px">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<tr>
							<td colspan="2" width="638">Lưu ý :<br>
								– Giá cước trên đã bao gồm xe, xăng dầu, lương tài xế lái xe .<br>
								– Tài xế được đào tạo các kỹ năng phục vụ khách hàng một cách chuyên nghiệp.<br>
								– Giá trên chưa bao gồm thuế VAT.<br>
								– Giá có thể thay đổi theo tùy thời gian thuê xe của khách hàng.<br>
								Quý khách có thể đặt thuê xe trực tiếp qua website này hoặc bằng các phương thức sau:<br>
								– Ký hợp đồng tại địa chỉ của khách hàng.<br>
								– Ký hợp đồng qua Email :&nbsp;dichvuxetantrang@gmail.com<br>
								– Ký hợp đồng tại địa chỉ Công ty chúng tôi :  175 Tây Sơn-Đống Đa,Hà Nội,Việt Nam <br>
							– Liên hệ đặt xe : 0963.615.555 – 039.8712.777</td>
						</tr>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3>Xe liên quan</h3>
						<div class="row ">
							<?php
							
							$strSQL="SELECT * FROM car WHERE seats = '4'";
							$car=mysqli_query($ung,$strSQL);
							?>
							<?php $i=0; ?>
							<?php while($row=mysqli_fetch_array($car)) { $i+=1; ?>
								<div class="col-md-4">
									<a href="chitietxe.php?id_car=<?php echo $row['id_car'] ?>">
										<img src="image/<?php echo $row['image'] ?>" width="250px" height="150px" 
										style="border:#999999 1px solid;" align="left" />
									</a>
									<h2 class="tensanpham_tencot">
										<a href="chitietxe.php?id_car=<?php echo $row['id_car'] ?>" >
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
										</div>
									</div>
								</div>
							</div>
						</div>

						<?php } ?>
					</div>	
					<?php 
						include("xuly/mainleft.php");
					?>
	</main>

	<?php 

		include("xuly/footer.php");
		
 ?>
