<?php
$host ="localhost";
$username ="root";
$password="";
$database="datxedulich";

    $connect=mysqli_connect($host,$username,$password,$database);
      mysqli_query($connect,"SET NAMES 'utf8'");

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$carname="";
$describe = "";
$image = "";
$seats = "";
$licenseplate = "";
$license = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if(isset($_POST["carname"]))
      { $carname = $_POST['carname']; }
    if(isset($_POST["describe"])) { $describe = $_POST['describe']; }
    if(isset($_POST["image"])) { $image = $_POST['image']; }
    if(isset($_POST["seats"])) { $seats = $_POST['seats']; }
    if(isset($_POST["licenseplate"])) { $licenseplate = $_POST['licenseplate']; }
     if(isset($_POST["license"])) { $license = $_POST['license']; }
}
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO `car`(`carname`,`describe`, `image`, `seats`, `licenseplate`,`license`,`status`)
    VALUES ('$carname','$describe', '$image', $seats, '$licenseplate','$license',1)";
   
    if ($carname!=null && $describe!=null &&$image!=null &&$seats!=null &&$licenseplate!=null &&$license!=null)
      { mysqli_query($connect, $sql);
            echo 1;
    } else {
        echo 0;
    }
   
//Đóng database


?>
