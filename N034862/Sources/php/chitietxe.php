
<?php 
	// include('include/ketnoi.php'); 
	// $carname=$_POST['carname'];
	
// 	 $sql="SELECT * FROM car WHERE carname ='$carname'";
//   $result=mysqli_query($ung, $sql);
//   $sqlImg= "SELECT * FROM image WHERE isActive=1 AND subjectID='$id'";
//   $result1=mysqli_query($con, $sqlImg);

 //while ($row= mysqli_fetch_array($result)) {
	 ?>
<?php
   		$car=$_POST['name'];
	  $carname=$_POST['email'];
?>
<div class="container-fluid">
	<?php print_r($car )?>
	<?= $carname ?>
		
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-7">
					<strong>CHO THUÊ XE CƯỚI BENTLEY</strong>
					<p></p>
					<p><strong>Tên xe :aaa </strong><br>
						<strong>Dòng: Bentley</strong><br>
						<strong>Đời xe</strong>: &nbsp;2015 – 2017<br>
						<strong>Kiểu xe:</strong> 5 chỗ<br>
						<strong>Màu xe:</strong>&nbsp;Bạc – Đen – Trắng<br>
						<strong>Giá thuê tháng: Liên hệ</strong></p>
						<p><strong>Chi tiết</strong></p>
					</div>
					<div class="col-md-5">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="image/slide_2a.jpg">
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
						<tr>
							<td colspan="2" width="638">Liên quan<p></p>
								<ul>
									<li><a href="http://thuexegiaphat.com/thue-xe-fortuner-7-cho/" target="_blank">Cho thuê xe 7 chỗ&nbsp;Fortuner</a></li>
									<li><a href="http://thuexegiaphat.com/cho-thue-xe-4-cho-civic-new/" target="_blank">Cho thuê xe 4 chỗ&nbsp;Civicnew</a></li>
									<li><a href="http://CHO THUÊ XE HYUNDAI UNIVER 45 CHỖ" target="_blank">Cho thuê xe Hyundai Hi-Class 45 chỗ</a></li>
									<li><a href="http://CHO THUÊ XE 29 CHỖ HUYNDAI COUNTY" target="_blank">Cho thuê xe 29 chỗ Huyndai County</a></li>
									<li><a href="http://thuexegiaphat.com/cho-thue-xe-7-cho-innova-new/" target="_blank">Cho thuê xe 7 chỗ Innova</a></li>
									
								</ul>
							</td>
						</tr>
					</div>
				</div>
			</div>
		</div>
	</div>

