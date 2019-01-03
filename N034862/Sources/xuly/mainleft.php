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
							<form method="post" action="search.php">
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
		<div id="map" style="width:500px;height:500px;">
		</div>

