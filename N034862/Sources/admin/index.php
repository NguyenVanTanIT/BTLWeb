<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
  
 <script src="js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>
<body >
  <?php 
  session_start();
  ?>
  <!-- logo -->
  <header >
    <img src="../image/banner.jpg" class=" mx-auto d-block col-md-12 " alt="slogan" style="
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

          <ul class="nav nav-pills mr-auto fixed">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Quản Lý Xe</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?page=insertcar"> Thêm Xe </a>
                <a class="dropdown-item" href="index.php?page=updatecar"> Sửa Xe</a> 
                <a class="dropdown-item" href="index.php?page=deletecar">Xóa </a>  
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Quản Lý Hóa Đơn</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe4cho"> Thêm Hóa Đơn </a>
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe8cho"> Sửa Hóa Đơn</a> 
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe16cho">Xóa Hóa Đơn</a>  
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Quản Lý Khách Hàng</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe4cho"> Thêm khách Hàng </a>
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe8cho"> Sửa Khách Hàng</a> 
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe16cho">Xóa Khách Hàng</a>  
              </div>
            </li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle rounded" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"> Quản Lý Nhân Viên</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe4cho"> Thêm khách Hàng </a>
                <a class="dropdown-item" href="DatXeDuLich.php?page=tongxe8cho"> Sửa Khách Hàng</a> 
                <a class="dropdown-item" href="DatXeDuLich.php?page=insertcar">Xóa Khách Hàng</a>  
              </div>
            </li >
            <li class="nav-item">
               <a class="nav-link rounded" href="DatXeDuLich.php?page=gioithieu">Giới Thiệu </a>

            </li>


            </li>
          </ul>

        </div>
      </div>
      
    </nav>
        <div class="row">
          <div class="col-md-12">
            <div>
              <?php 
            $page=isset($_GET["page"])?$_GET["page"]:"";
            if($page =='')
              include('car/insertcar.php');
            if($page =='insertcar')
              include "car/insertcar.php";
            if($page =='updatecar')
              include "car/updatecar.php";
            if($page =='deletecar')
              include "car/deletecar.php";
            if($page =='donhang')
              include "donhang.php";
            if($page =='admin')
          ?>
          
    </div>

  </body>
</html>
