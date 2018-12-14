<div class="container-fluid">
<?php
$host ="localhost";
$username ="root";
$password="";
$database="datxedulich";

    $connect=mysqli_connect($host,$username,$password,$database);
      mysqli_query($connect,"SET NAMES 'utf8'");
//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$ten_xe = "";
$mo_ta_xe = "";
$hinhanh = "";
$so_cho = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten_xe"])) { $ten_xe = $_POST['ten_xe']; }
    if(isset($_POST["mo_ta_xe"])) { $mo_ta_xe = $_POST['mo_ta_xe']; }
    if(isset($_POST["hinhanh"])) { $hinhanh = $_POST['hinhanh']; }
    if(isset($_POST["so_cho"])) { $so_cho = $_POST['so_cho']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO thongtinxe (ten_xe, mo_ta_xe, hinhanh, so_cho)
    VALUES ('$ten_xe', '$mo_ta_xe', '$hinhanh', '$so_cho')";
    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "thêm dữ liệu  không thành công";
    }
}
$connect->close();

//Đóng database
?>
<form action="" method="post">
     <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2">
                    <h4> Tên Xe</h4>
                </div>
                <div class="col-md-6">
                     <h4> Mô Tả</h4>
                </div>
                <div class="col-md-2">
                    <h4> Hình Ảnh</h4>
                </div>
                <div class="col-md-2">
                    <h4> Số Chỗ </h4>
                </div>
            </div>
                
            <div class="row">
   
                <div class="col-md-2">
                     <input class="form-control" rows="5" name="ten_xe"></input>
                </div>
                <div class="col-md-6">
                    <p>
                       
                       <input class="form-control" rows="5"name="mo_ta_xe"></input>
                    </p>
                </div>
                <div class="col-md-2">
                     
                   <input class="form-control" rows="5" name="hinhanh"></input>

                </div>
                <div class="col-md-2">
                      <input class="form-control" rows="5" name="so_cho"></input>
                </div>  

            </div>
        </div>
       
    </div>

    <div class="row">
        <button type="submit" class="btn btn-primary mb-2 " style="margin-left: 100px;" border-left-width:="" 0px;="" margin-left:="" 100px;="" "="">Gửi</button> 
    </div>

     </form>    
</div>
  