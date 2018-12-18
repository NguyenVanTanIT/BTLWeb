
<!DOCTYPE html>
<html>
 <head>
  <title>Webslesson Tutorial | Multiple Inline Insert into Mysql using Ajax JQuery in PHP</title>
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
      <th width="2%">licenseplate</th>
      <th width="3%">license</th>
      <th width="5%"></th>
     </tr>
     <tr>
      <td contenteditable="true" class="carname"></td>
      <td contenteditable="true" class="describe"></td>
      <td contenteditable="true" class="image"></td>
      <td contenteditable="true" class="seats"></td>
      <td contenteditable="true" class="licenseplate"></td>
      <td contenteditable="true" class="license"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
     <button type="button" onclick="foo()" id="save" class="btn btn-info">Save</button>
    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>

<script>


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
 
</script>