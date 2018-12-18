<?php
//fetch.php
include('connect.php');
$output = '';
$query = "SELECT * FROM car ORDER BY id_car DESC";
$result = mysqli_query($connect, $query);
$output = '
<br />
<h3 align="center">Danh sach xe</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">carname</th>
  <th width="55%">describe</th>
  <th width="20%">image</th>
  <th width="10%">seats</th>
  <th width="2%">licenseplate</th>
  <th width="3%">license</th>
 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["carname"].'</td>
  <td>'.$row["describe"].'</td>
  <td>'.$row["image"].'</td>
  <td>'.$row["seats"].'</td>
  <td>'.$row["licenseplate"].'</td>
  <td>'.$row["license"].'</td>
 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>
