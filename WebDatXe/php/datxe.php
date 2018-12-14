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
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" name="thoigiandon" class="number_car" id="thoigiandon"></div>
                    <div class="col-md-3 col-sm-3 col-xs-12">Giờ trả xe(ngày cuối):<font color="Red">(*)</font></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><input type="text" name="giotraxe" class="number_car" id="giotraxe"></div>
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
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_name" class="input_contact_2" id="name"> </div>
                </div>      
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Email (<font style="color:red;">*</font>)</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_email" class="input_contact_2" id="email"> </div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Số điện thoại </div>
                    <div class="col-md-6 col-sm-6 col-xs-12"> <input type="text" name="ct_phone" class="input_contact_2">                             </div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-3 col-sm-3 col-xs-12">Địa chỉ</div>
                    <div class="col-md-6 col-sm-6 col-xs-12"><input type="text" name="ct_add" class="input_contact_2"></div>
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
<script type="text/javascript">
    jQuery( "#departdate_3" ).datepicker({
        defaultDate: "+1d",
        changeMonth: true,
        numberOfMonths: 1,
        changeYear:true,
        dateFormat: 'd-m-yy'
    });
    jQuery( "#departdate_4" ).datepicker({
        defaultDate: "+1d",
        changeMonth: true,
        numberOfMonths: 1,
        changeYear:true,
        dateFormat: 'd-m-yy'
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function(){                                                                                                                                                                                                              
        var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
        var f = jQuery("#form_contact");
        f.submit(function(e){
         if(!jQuery('#form_contact #car_name').val()){
            alert(T_CAR_NAME);
            jQuery('#form_contact #car_name').focus();
            return false;
        }   
        if(!jQuery('#form_contact #hangxe').val()){
            alert(T_HANGXE);
            jQuery('#form_contact #hangxe').focus();
            return false;
        }   
        if(!jQuery('#form_contact #quantity').val()){
            alert(T_QUANTITY_TYPE);
            jQuery('#form_contact #quantity').focus();
            return false;
        }   
        if(!jQuery('#departdate_3').val()){
            alert(T_CHECKIN_REQUIRED);
            jQuery('#departdate_3').focus();
            return false;
        }   
        if(!jQuery('#departdate_4').val()){
            alert(T_CHECKOUT_REQUIRED);
            jQuery('#departdate_4').focus();
            return false;
        }  
        if(!jQuery('#thoigiandon').val()){
            alert(T_THOIGIAN_DON);
            jQuery('#thoigiandon').focus();
            return false;
        }  
        if(!jQuery('#giotraxe').val()){
            alert(T_GIOTRA);
            jQuery('#giotraxe').focus();
            return false;
        }  
        if(!jQuery('#diemdon').val()){
            alert(T_DIEMDON_REQUIRED);
            jQuery('#diemdon').focus();
            return false;
        }  
        if(!jQuery('#ct_content').val()){
            alert(T_LICHTRINH_REQUIRED);
            jQuery('#ct_content').focus();
            return false;
        }  
        if(!jQuery('#form_contact #name').val()){
            alert(T_NAME_REQUIRED);
            jQuery('#form_contact #name').focus();
            return false;
        }
        if(!jQuery('#form_contact #email').val()){
            alert(T_EMAIL_REQUIRED);
            jQuery('#form_contact #email').focus();

            return false;
        }
        if(!pattern.test(jQuery('#form_contact #email').val())){
            alert(T_EMAIL_TYPE);
            jQuery('#form_contact #email').focus();

            return false;
        }

        if(!jQuery('#form_contact #captcha').val()){
            alert(T_CODE_TYPE);
            jQuery('#form_contact #captcha').focus();
            return false;
        }

        //sending form
        jQuery.ajax({     
            type: "POST",
            url: '/process.php?act=bookcar',
            data: f.serialize(), 
            success: function(response) { 
                if(response==1){
                    window.top.location.href = 'http://www.thuexedulich.vn/message.php?act=car-book-ok';
                }else {
                    alert(T_CODE_TYPE);
                    refreshCoolCaptcha();
                }
            }
        });
        
        return false;
    });
    });
</script>
</div>