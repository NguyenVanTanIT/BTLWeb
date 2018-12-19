<?php
include('connect.php');

$a= $_POST('data');
$sql = "select * from car user where user like '%$a%'";
$query = mysqli_query($connect,$sql);
$num = mysqli_num_rows($query);
if ($num >0) {
	while ($row = mysqli_fetch_array($query)) {
		# code...


 						echo '
                            <tr class="danhsach">
                                <td >
                                    <input type="checkbox" class="delete_checkbox" value="'.$row["id_car"].'" />
                                </td>
                                <td>'.$row["carname"].'</td>
                                <td>'.$row["describe"].'</td>
                                <td>'.$row["image"].'</td>
                                <td>'.$row["seats"].'</td>
                                <td>'.$row["licenseplate"].'</td>
                                <td>'.$row["license"].'</td>
                            </tr>
                            ';
 }
}
?>
$(document).ready(function(){ 
    $('.search').keyup(function() {
      var txt = ($('.search').val());
      $.POST('.search.php',{data: txt} function(data){
        $.('.danhsach').html.(data);
      })
    });

})