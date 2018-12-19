
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
      <td contenteditable="true"type="text"  id="carname" name="carname"></td>
      <td contenteditable="true"type="text"  id="describe" name="describe"></td>
      <td contenteditable="true"type="text"  id="image" name="image"></td>
      <td contenteditable="true"type="text" id="seats" name="seats"></td>
      <td contenteditable="true"type="text" id="licenseplate" name="licenseplate"></td>
      <td contenteditable="true"type="text" class="license"id="license" name="carname"></td>
      <td></td>
     </tr>
    </table>
    <div align="right">
     <button type="button" name="add" id="add" class="btn btn-success btn-xs">+</button>
    </div>
    <div align="center">
         <button type="button" name="save" id="save" class="btn btn-info">Save</button>

    </div>
    <br />
    <div id="inserted_item_data"></div>
   </div>
   
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 var count = 1;
 $('#add').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";
   html_code += "<td contenteditable='true' class='carname'></td>";
   html_code += "<td contenteditable='true' class='describe'></td>";
   html_code += "<td contenteditable='true' class='image'></td>";
   html_code += "<td contenteditable='true' class='seats' ></td>";
     html_code += "<td contenteditable='true' class='licenseplate' ></td>";
     html_code += "<td contenteditable='true' class='license' ></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger btn-xs remove'>-</button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
 
 $(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();
 });
 
 $('#save').click(function(){
  var carname = [];
  var describe = [];
  var image = [];
  var seats = [];
   var licenseplate = [];
    var license = [];
  $('.carname').each(function(){
   carname.push($(this).text());
  });
  $('.describe').each(function(){
   describe.push($(this).text());
  });
  $('.image').each(function(){
   image.push($(this).text());
  });
  $('.seats').each(function(){
   seats.push($(this).text());
  });
  $('.licenseplate').each(function(){
   licenseplate.push($(this).text());
  });
  $('.license').each(function(){
   license.push($(this).text());
  });
  $.ajax({
   url:"car/ajaxinsert.js",
   method:"POST",
   data:{carname:carname, describe:describe, image:image, seats:seats, licenseplate:licenseplate, license:license},
   success:function(data){
    alert(data);
    $("td[contentEditable='true']").text("");
    for(var i=2; i<= count; i++)
    {
     $('tr#'+i+'').remove();
    }
    fetch_item_data();
   }
  });
 });

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