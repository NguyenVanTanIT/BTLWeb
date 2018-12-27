<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="datxedulich.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css"> -->
</head>
<body >
	<?php 
	session_start();
	?>
	<!-- logo -->
	<header >
		<img src="image/banner.jpg" class=" mx-auto d-block col-md-12 " alt="slogan" style="
		padding-right: 0px;
		padding-left: 0px;">
		
	</header>
	<!-- menu -->

	<nav class="navbar navbar-expand-lg  sticky-top" id="menu">
		<div class="container">
			<a class="nav-link text-white" href="DatXeDuLich.php?page=trangchu"><i class="fa fa-lg fa-home"></i></a>
			<button class="navbar-toggler" type="button " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="fa fa-lg fa-bars text-white" ></span></button> 			
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav nav-pills mr-auto fixed col-md-8">
						<li class="nav-item">
							<a class="nav-link rounded" href="DatXeDuLich.php?page=gioithieu">Giới Thiệu </a>

						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Dịch Vụ Xe</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="DatXeDuLich.php?page=tongxe4cho">Xe 4 chỗ</a>
								<a class="dropdown-item" href="DatXeDuLich.php?page=tongxe8cho">Xe 8 chỗ</a> 
								<a class="dropdown-item" href="DatXeDuLich.php?page=tongxe16cho">Xe 16 chỗ</a>
								<a class="dropdown-item" href="DatXeDuLich.php?page=tongxe35cho">Xe 35 chỗ</a> 
								<a class="dropdown-item" href="DatXeDuLich.php?page=tongxe45cho">Xe 45 chỗ</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link  rounded" href="DatXeDuLich.php?page=baogia">Báo Giá</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  rounded" href="DatXeDuLich.php?page=trangchu">Thông Tin Xe</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  rounded" href="DatXeDuLich.php?page=lienhe">Liên Hệ</a>
						</li>
						
					</ul>
					<?php
					if (isset($_SESSION["user"]))
					{
						?>
						<div class="row" style="width: 450px">
							<a class="nav-link  rounded text-white col-xl-6" href="DatXeDuLich.php">Chào mừng bạn: <?php echo $_SESSION["user"] ?></a> 
							<a class="nav-link  rounded text-white col-xl-6" href="DatXeDuLich.php?page=logout">Đăng Xuất</a> 
						</div>
						
					<?php }
					else { ?>
						<div class="row col-md-6">
						<div class="com-md-6">
						<div class="container">
							<!-- Trigger the modal with a button -->
							<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Đăng Nhập</button>

							<!-- Modal -->
							<div class="modal fade" tabindex="-1" id="myModal" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											
												<div class="container-fluid">
													<form action="login.php" method="post">
													<div class="row">
														<div class="col-md-12">
															
															<div class="row">
																<div class="col-md-6">Username
																</div>
																<div class="col-md-6">
																	<input type="text" name="username" required="">
																</div>
															</div>
															<div class="row">
																<div class="col-md-6">Password
																</div>
																<div class="col-md-6"><input type="password" name="password" required="">
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<input type="submit" value="Đăng Nhập">
														</div>
													</div>
													</form>
												</div>
											
										</div>

									</div>
								</div>
							</div>
						</div>
						</div>
						

						<div class="col-md-6">
						<!-- <a class="nav-link  rounded text-white" href="DatXeDuLich.php?page=dangky"></a>  -->
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" ><a href="DatXeDuLich.php?page=dangky" style="color: white;">Đăng Ký</a></button>

						</div>
					</div>
				<?php } ?>
					<?php 
					$page = isset($_GET["page"])?$_GET["page"]:"" ;
					if ($page=='logout')
					{
						unset($_SESSION["user"]);
						header("location:DatXeDuLich.php ");
					}
						//xóa
					
					?>
				</div>

			</div>
			
		</nav>
		<!-- slide -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12" style="padding-right: 0px; padding-left: 0px;">
					<div class="carousel slide" id="carousel-404056">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-404056" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-404056">
							</li>
							<li data-slide-to="2" data-target="#carousel-404056">
							</li>
							<li data-slide-to="3" data-target="#carousel-404056">
							</li>
							<li data-slide-to="4" data-target="#carousel-404056">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="Carousel Bootstrap First" src="image/slide_2a.jpg" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Second" src="image/slide_1a.jpg" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="image/slide_3a.jpg" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="image/slide_4a.jpg" />
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="image/slide_5a.jpg" />
							</div>
						</div> <a class="carousel-control-prev" href="#carousel-404056" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-404056" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>



		</div>
		<main class="rounded container">

			<div class="row">
				<div class="col-md-9" style="padding-top: 30px;" >
					<div class="row">
						
						<?php
						if($page =='')
							include('php/trangchu.php');
						if($page =='trangchu')
							include "php/trangchu.php";
						if($page =='datxe')
							include "php/datxe.html";
						if($page =='lienhe')
							include "php/lienhe.php";
						if($page =='gioithieu')
							include "php/gioithieu.php";
						if($page =='baogia')
							include "php/baogia.php";
						if($page =='DatXeDuLich')
						include  "php/trangchu.php";
	
						
						if($page =='dangky')
						include "register.html";
						
						

						if($page =='chitietxe')
							include('php/chitietxe.php');
						if($page =='tongxe4cho')
							include('php/tong_xe_4_cho.php');
						if($page =='tongxe8cho')
							include('php/tong_xe_8_cho.php');
						if($page =='tongxe16cho')
							include('php/tong_xe_16_cho.php');
						if($page =='tongxe35cho')
							include('php/tong_xe_35_cho.php');
						if($page =='tongxe45cho')
							include('php/tong_xe_45_cho.php');
						
						?>
					</div>
					
					<?php 
					$err = isset($_GET["err"]) ? $_GET["err"] : "";
					if ($err == "false"){
						?>

						<div class="alert alert-danger" style="text-align: center">
							<?php echo "Vui lòng nhập lại tài khoản"; ?>
						</div>
					<?php }	?>
				</div>
				<div class="col-md-3 bg-success rounded-right">
					<!--Tìm kiếm nhanh-->
					<div class="border border-danger rounded bg-primary"  style="margin-top: 25px;">
						<div class="box_search_all clearfix" style="margin-bottom: 15px;">
							<form method="GET" action="search-results.php">
								<div class=" title_box_search">TÌM NHANH</div>
								<div class="b_search_content">
									<div class="b_search_row">
										<div class="b_search_text">Loại xe</div>
										<select class="rounded-right select_b_search form-control" name="seat">
											<option value="">--Chọn loại xe--</option>
											<option value="4">Loại xe 4 chỗ</option>
											<option value="8">Loại xe 8 chỗ</option>
											<option value="16">Loại xe 16 chỗ</option>
											<option value="35">Loại xe 35 chỗ</option>
											<option value="45">Loại xe 45 chỗ</option>
										</select>
										<div class="clear_left"><span></span></div>
									</div>
									<div class="b_search_row">
										<div class="b_search_text">Nhãn hiệu</div>
										<select class="select_b_search form-control" name="label">
											<option value="">-Chọn hãng xe--</option>
										</select>
										<div class="clear_left"><span></span></div>
									</div>
									<div class="b_search_row">
										<div class="b_search_text">Điểm đi</div>
										<select name="from" class="form-control select_b_search">
											<option value="">--Chọn điểm đi--</option>
										</select>
										<div class="clear_left"><span></span></div>
									</div>
									<div class="b_search_row">
										<div class="b_search_text">Điểm đến</div>
										<select name="to" class="form-control select_b_search">
											<option value="">--Chọn điểm đến--</option>
										</select>
										<div class="clear_left"><span></span></div>

										<button type="submit" class="input_b_search btn btn-lint col-md-6 offset-md-3" style="margin-top: 20px;">Tìm xe</button> 
									</div>

								</form>
							</div>
						</div>
					</div>

					<!-- Tìm kiếm theo xe -->

					<div class=" border border-danger rounded bg-light box_search_2_all" style="margin-top: 25px;">
						<div class="title_box_support">THUÊ XE 4 ĐẾN 45 CHỖ</div>
						<div class="b_car_type_content">    
							<ul class="none_tag ul_carcompany" style="list-style: none; text-indent: 10px;">
								
								<li class="car_type">
									<a href="DatXeDuLich.php?page=tongxe4cho">Xe du lịch 4 chỗ</a>
								</li>
								<li class="car_type">
									<a href="DatXeDuLich.php?page=tongxe8cho">Xe du lịch 8 chỗ</a>
								</li>
								<li class="car_type">
									<a href="DatXeDuLich.php?page=tongxe16cho">Xe du lịch 16 chỗ</a>
								</li>
								<li class="car_type">
									<a href="DatXeDuLich.php?page=tongxe35cho">Xe du lịch 35 chỗ</a>
								</li>
								<li class="car_type">
									<a href="DatXeDuLich.php?page=tongxe45cho">Thuê xe 45 chỗ</a>
								</li>
							</ul>       
						</div>
						<div class="clear_left"></div>
					</div>
					
					<!-- hổ trợ -->
					<div class=" border border-danger rounded bg-light" style="margin-top: 25px;margin-bottom: 25px; padding-top: 5px; padding-bottom: 5px;">
						<div class="box_search_2_all">
							<div class="title_box_support">HỖ TRỢ TRỰC TUYẾN</div>
							
							<table width="100%" cellpadding="3">
								<tbody >
									<tr >
										<td colspan="2" class="td_title_support"  style=" padding-left: 20px;">Thuê xe du lịch - 01</td>
									</tr>
									
									<tr>
										<td class="td_phone" colspan="2"  style=" padding-left: 20px;">Hotline - 0963 651 555</td>
									</tr>
									<tr>
										<td colspan="2" class="td_title_support"  style=" padding-left: 20px;">Thuê xe du lịch - 02</td>
									</tr>
									
									<tr>
										<td class="td_phone" colspan="2"  style=" padding-left: 20px;">Hotline - 039 8712 777</td>
									</tr>
								</tbody>
							</table>	<div class="clear_left"></div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!-- footer -->
		<footer class="container rounded">
			<div class="row">
				<div class="col-sm-6 col-md-4 footer-navigation">
					<h3><a href="#">DichVuXe<span>TanTrang </span></a></h3>
					<p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
					<p class="company-name">Dịch Vụ Thuê Xe © 2018 </p>
				</div>
				<div class="col-sm-6 col-md-4 footer-contacts">
					<div><span class="fa fa-map-marker footer-contacts-icon"> </span>
						<p><span class="new-line-span">175 Tây Sơn-Đống Đa</span> Hà Nội,Việt Nam</p>
					</div>
					<div><i class="fa fa-phone footer-contacts-icon"></i>
						<p class="footer-center-info email text-left"> +0963 651 555</p>
					</div>
					<div><i class="fa fa-envelope footer-contacts-icon"></i>
						<p> <a href="#" target="_blank">dichvuxetantrang@gmail.com</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 footer-about">
					<h4>About the company</h4>
					<p>
						<div class="textwidget"><p>Các Dịch Vụ Cho Thuê Xe:</p>
							<ul>
								<li><p href="#">Hợp Đồng Thuê Xe Dài Hạn</p></li>
								<li><p href="#">Thuê Xe 4-7 Chỗ Có Tài Xế</p></li>
								<li><p href="#">Thuê Xe 16 Chỗ Có Tài Xế</p></li>
								<li><p href="#">Cho Thuê Tài Xế Lái Xe</p></li>
								<li><p href="#">Thuê Xe Đi Du Lịch Tự Túc</p></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			
		</script>
	</footer>	

	
	<script>
		(function(s, u, b, i, z){
			u[i]=u[i]||function(){
				u[i].t=+new Date();
				(u[i].q=u[i].q||[]).push(arguments);
			};
			z=s.createElement('script');
			var zz=s.getElementsByTagName('script')[0];
			z.async=1; z.src=b; z.id='subiz-script';
			zz.parentNode.insertBefore(z,zz);
		})(document, window, 'https://widgetv4.subiz.com/static/js/app.js', 'subiz');
		subiz('setAccount', 'acqesyywfdutbqwxxnsw');
	</script>

 
	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
</body>
</html>



      
    </div>
  </div>
  
</div>
