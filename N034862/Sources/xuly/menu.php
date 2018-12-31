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
