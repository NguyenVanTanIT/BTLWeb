<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Thông Tin Khách Hàng</h3>
            <label for="fname"><i class="fa fa-user"></i> Tên Khách Hàng</label>
            <input type="text" id="fname" name="firstname" placeholder="Họ Và Tên">
            <label for="phonen"><i class="fa fa-envelope"></i> Số Điện Thoại</label>
            <input type="text" id="phonen" name="phonen" placeholder="Số Điện Thoại">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Địa Chỉ">
 
            <input type="text" id="city" name="city" placeholder="Thành Phố">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Thông Tin Đặt Xe</h3>
            <label for="cname">Loại Xe</label>
    <label class="radio-inline">
    <input type="radio" name="optradio" checked>Xe 4 Chỗ
    </label>
    <label class="radio-inline">
    <input type="radio" name="optradio">Xe 7 Chỗ
    </label>
    <label class="radio-inline">
    <input type="radio" name="optradio" checked>Xe 16 Chỗ
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Xe 29 Chỗ
    </label>
    <label class="radio-inline">
    <input type="radio" name="optradio">Xe 35 Chỗ
    </label>
 
            <label for="ccnum">Hãng Xe</label>
       <label class="radio">
      <input type="radio" name="optradio_" checked>Option 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio_">Option 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio_">Option 3
    </label>    
            <label for="date">Ngày Mượn</label>
            <input type="date" id="ngaymuon" name="ngaymuon" placeholder="">
            <div class="row">
              <div class="col-50">
                <label for="date">Ngày Trả</label>
                <input type="date" id="ngaytra" name="ngaytra" placeholder="">
              </div>
              
            </div>
          </div>
          
        </div>

        <input type="submit" value="Đăng Ký" class="btn">
      </form>
    </div>
  </div>

</body>
</html>
