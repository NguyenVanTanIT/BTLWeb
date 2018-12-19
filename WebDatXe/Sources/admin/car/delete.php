<?php
$connect = new PDO("mysql:host=localhost;dbname=datxedulich", "root", "");

if(isset($_POST["checkbox_value"]))
{
 for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
 {
  $query = "DELETE FROM `car` WHERE `id_car` = '".$_POST['checkbox_value'][$count]."'";

  $statement = $connect->prepare($query);
  $statement->execute();
 }
}


?>
