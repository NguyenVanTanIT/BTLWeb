<?php

//multiple_update.php

include('connect.php');

if(isset($_POST['hidden_id']))
{
 $name = $_POST['carname'];
 $describe = $_POST['describe'];
 $image = $_POST['image'];
 $seats = $_POST['seats'];
 $licenseplate = $_POST['licenseplate'];
 $license = $_POST['license'];
 $id_car = $_POST['hidden_id'];
 for($count = 0; $count < count($id_car); $count++)
 {
  $data = array(
   ':carname'   => $name[$count],
   ':describe'  => $describe[$count],
   ':image'  => $image[$count],
   ':seats' => $seats[$count],
   ':licenseplate'   => $licenseplate[$count],
   ':id_car'   => $id_car[$count]
  );
  $query = "
  UPDATE `car` 
  SET carname = :carname, describe = :describe, image = :image, seats = :seats, licenseplate = :licenseplate , license = :license
  WHERE `id_car` = :id_car
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
