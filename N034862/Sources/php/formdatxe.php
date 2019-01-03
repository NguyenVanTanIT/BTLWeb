
<div class="content_midle">
    <div class="clear"></div>
    <form method="post" name="form_contact" id="form_contact" class="form_contact">
        <div class="row_car_hot_group" style="padding-left:  30px;" >
            <h2 class="none_tag title_car_hot title_b_car">ĐẶT THUÊ XE</h2>
            <div class="">
              <div class="b_contact_us">
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12"><strong>Loại xe:</strong></div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><input type="text" class="name_car" name="car_name" id="car_name" value=""></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12"><strong>Hãng xe:</strong></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" class="number_car" name="hangxe" id="hangxe" value=""></div>
                    <div class="col-md-3 col-sm-3 col-xs-12">Số lượng xe<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" name="quantity" class="number_car" id="quantity"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Từ ngày<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" id="departdate_3" name="start_date" class="input_date hasDatepicker"></div>
                    <div class="col-md-3 col-sm-3 col-xs-12">Đến ngày<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" id="departdate_4" name="stop_date" class="input_date hasDatepicker"></div>
                </div style="padding-top: 12px;">
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Giờ đón khách:<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="date" name="thoigiandon" class="number_car" id="thoigiandon"></div>
                    <div class="col-md-3 col-sm-3 col-xs-12">Giờ trả xe(ngày cuối):<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="date" name="giotraxe" class="number_car" id="giotraxe"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Điểm đón khách:<font color="Red">(*)</font></div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><input type="text" name="diemdon" class="input_contact_2" id="diemdon"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Lịch trình yêu cầu: <font color="Red">(*)</font></div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><textarea name="ct_content" class="text_content_contact" id="ct_content"></textarea></div>
                </div>
                <div class="row row_book">
                    <div class="col-md-3 col-sm-3 col-xs-12">Các yêu cầu đặc biệt</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><textarea name="ct_yeucaudacbiet" class="text_content_contact"></textarea></div>
                </div>
                <div class="row_book" style="padding-top: 12px;">
                    <strong>Thông tin khách hàng</strong>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Tên(<font style="color:red;">*</font>)</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_name" class="input_contact_2" id="name" value="<?=$_SESSION["user"]?>"> </div>
                </div>      
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Email (<font style="color:red;">*</font>)</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_email" class="input_contact_2" id="email"  value="<?=$_SESSION["email"]?>"> </div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Số điện thoại </div>
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_phone" class="input_contact_2" ></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Địa chỉ</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><input type="text" name="ct_add" class="input_contact_2" ></div>
                </div>
                
                <div class="row row_book" style="padding-top: 12px;" >
                    <div class="col-md-3 col-sm-3 col-xs-12">&nbsp;</div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="submit" name="Submit" value="Gửi đi" class="input_b_contact">
                        <input type="reset" name="Submit2" value="Làm lại" class="input_b_contact">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="PDid" value="603">
</form>
</div>

<?php
      include('include/ketnoi.php'); 
      $sql = "select * from user where user=$_SESSION["user"]";

  ?>
 



