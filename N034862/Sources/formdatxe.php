


<?php 

include("xuly/head.php");
include("xuly/menu.php");

?>
    <?php
    //   include('include/ketnoi.php'); 
    $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "datxedulich";
	$con = mysqli_connect($host,$user,$pass,$db);
	mysqli_set_charset($con,'UTF8');
    $name = $_SESSION["user"];
	$data = mysqli_query($con,"select * from users where username = '$name' "); 

    $roww=mysqli_fetch_array($data); 
    
  ?>
<?php
	$id_car=$_GET['id_car'];
	
	 $sql="SELECT * FROM car WHERE id_car ='$id_car'";
    $result=mysqli_query($con, $sql);
    $row= mysqli_fetch_array($result);
	//$seats = "echo $row['seats']" ;
	
	 ?>

  		<main class="rounded container">

<div class="row">
    <div class="col-md-9" style="padding-top: 30px;" >
        <div class="row">


<div class="content_midle">
    <div class="clear"></div>

    <form method="post" name="form_contact" id="form_contact" class="form_contact">
        <div class="row_car_hot_group" style="padding-left:  100px;" >
            <h2 class="none_tag title_car_hot title_b_car">ĐẶT THUÊ XE</h2>
            <div class="">
              <div class="b_contact_us">
                <div class="row " style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12"><strong>Tên xe:</strong></div>
                    <div class="col-md-7 col-sm-6 col-xs-12"><input type="text" class="name_car" name="car_name" id="car_name" value="<?php echo $row['carname']; ?>"></div>
                </div style="padding-top: 12px;">

                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12"><strong>Loại xe:</strong></div>
                    <div class="col-md-7 col-sm-3 col-xs-12"><input type="text" class="number_car" name="hangxe" id="hangxe" value="<?php echo $row['seats']; ?>"></div>
                </div>

                <div class="row " style="padding-top: 12px;">
                <div class="col-md-5 col-sm-3 col-xs-12">Số lượng xe<font color="Red">(*)</font></div>
                    <div class="col-md-7 col-sm-3 col-xs-12"><input type="text" name="soluong" class="number_car" id="soluong"></div>
                </div>

                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Từ ngày<font color="Red">(*)</font></div>
                    <div class="col-md-7 col-sm-3 col-xs-12"><input type="date" id="start_date" name="start_date" class="input_date hasDatepicker"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Đến ngày<font color="Red">(*)</font></div>
                    <div class="col-md-7 col-sm-3 col-xs-12"><input type="date" id="departdate_4" name="stop_date" class="input_date hasDatepicker"></div>
                </div style="padding-top: 12px;">
               
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 ">Điểm đón khách:<font color="Red">(*)</font></div>
                    <div class="col-md-7 "><input type="text" name="diemdon" class="input_contact_2" id="diemdon"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Lịch trình yêu cầu: <font color="Red">(*)</font></div>
                    <div class="col-md-7 col-sm-6 col-xs-12"><textarea name="ct_content" class="text_content_contact" id="ct_content"></textarea></div>
                </div>
                <div class="row row_book">
                    <div class="col-md-5 col-sm-3 col-xs-12">Các yêu cầu đặc biệt</div>
                    <div class="col-md-7 col-sm-6 col-xs-12"><textarea name="ct_yeucaudacbiet" class="text_content_contact" id="ct_yeucaudacbiet"></textarea></div>
                </div>
                <div class="row_book" style="padding-top: 12px;">
                    <strong>Thông tin khách hàng</strong>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Tên(<font style="color:red;">*</font>)</div>
                    <div class="col-md-7 col-sm-6 col-xs-12"> <input type="text" name="ct_name" class="input_contact_2" id="name" value="<?=$_SESSION["user"]?>"> </div>
                </div>      
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Email (<font style="color:red;">*</font>)</div>
                    <div class="col-md-7 col-sm-6 col-xs-12"> <input type="text" name="ct_email" class="input_contact_2" id="email"  value="<?php  echo $roww['email'] ?>"> </div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Số điện thoại </div>
                    <div class="col-md-7 col-sm-6 col-xs-12"> <input type="text" name="ct_phone" class="input_contact_2" value="<?php  echo $roww['phone'] ?>"></div>
                </div>
                <div class="row row_book" style="padding-top: 12px;">
                    <div class="col-md-5 col-sm-3 col-xs-12">Địa chỉ</div>
                    <div class="col-md-7 col-sm-6 col-xs-12"><input type="text" name="ct_add" class="input_contact_2"  value="<?php  echo $roww['address'] ?> "></div>
                </div>
                
                <div class="row row_book" style="padding-top: 12px;" >
                    <div class="col-md-5 col-sm-3 col-xs-12">&nbsp;</div>
                    <div class="col-md-7 col-sm-6 col-xs-12">
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
		</div>	
					<?php 
						include("xuly/mainleft.php");
					?>
	</main>

	<?php 

		include("xuly/footer.php");
		
     ?>
     
	<?php
 
	$bill=array();
	$bill["soluong"] = $bill["start_date"] = $bill["stop_date"] =  $bill["diemdon"] = $bill["ct_content"] =  $bill["ct_yeucaudacbiet"] =  NULL;
    $soluong = $start_date = $stop_date = $diemdon = $ct_content = $ct_yeucaudacbiet = NUll;
    
	if (isset($_POST["Submit"])) {

            $id_car = $_GET['id_car'];
            $soluong = $_POST['soluong'];
            $start_date=$_POST["start_date"];
            $stop_date=$_POST["stop_date"];
            $diemdon = $_POST['diemdon'];
            $ct_content = $_POST['ct_content'];
            $ct_yeucaudacbiet = $_POST['ct_yeucaudacbiet'];

            mysqli_query($con,"INSERT INTO `bookcar` (`id_car`, `starttime`, `endtime`, `sum_car`, `car_station`, `route`, `special_requirement`, `bookcar_status`) VALUES ( '$id_car', '$start_date', '$stop_date','$soluong', '$diemdon', '$ct_content', '$ct_yeucaudacbiet', 1)");
          
        }
       	
?>
