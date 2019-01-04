<?php

//select.php

include('connect.php');

$query = "SELECT * FROM `car` ORDER BY id_car DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>
