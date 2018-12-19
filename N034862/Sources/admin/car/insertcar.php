
<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="car/ajaxinsert.js" type="text/javascript" ></script>
  
</head>
<body>
  <br /><br />
  <div class="container">
   <br />
   <h2 align="center">Nhập thông tin xe vào form sau</h2>
   <br />
   <div class="table-responsive">
    <table class="table table-bordered" id="crud_table">
     <tr>
      <th width="10%">carname</th>
      <th width="50%">describe</th>
      <th width="20%">image</th>
      <th width="10%">seats</th>
      <th width="5%">licenseplate</th>
      <th width="5%">license</th>
    </tr>
    <tr>
      <td><input type="text" id="carname" name="carname" value="" size="5" class="form-control"></td>
      <td><input type="text" id="describe" name="describe" value="" class="form-control"></td>
      <td><input type="text" id="image" name="image" value=""class="form-control"></td>
      <td><input type="text" id="seats" name="seats" value=""class="form-control"></td>
      <td><input type="text" id="licenseplate" name="licenseplate" value=""size="5"class="form-control"></td>
      <td><input type="text" name="license" id="license" value=""size="5"class="form-control"></td>
    </tr>
  </table>
  <div align="center">
   <button type="button" name="save" id="save"onclick="foo()" class="btn btn-info">Save</button>

 </div>
 <br />
 <div id="inserted_item_data"></div>
</div>

</div>
</body>
</html>
<!--  -->
<script>
  $(document).ready(function(){
   function fetch_item_data()
   {
    $.ajax({
     url:"car/fetch.php",
     method:"POST",
     success:function(data)
     {
      $('#inserted_item_data').html(data);
    }
  })
  }
  fetch_item_data();
});
</script>