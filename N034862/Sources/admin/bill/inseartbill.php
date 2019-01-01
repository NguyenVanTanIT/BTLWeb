<script src="ajaxinsert.js" type="text/javascript" ></script> 
  <div class="container ">
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
      <!-- <td><input type="text" id="carname" name="carname" value="" size="5" class="form-control"></td>
      <td><input type="text" id="describe" name="describe" value="" class="form-control"></td>
      <td><input type="text" id="image" name="image" value=""class="form-control"></td>
      <td><input type="text" id="seats" name="seats" value=""class="form-control"></td>
      <td><input type="text" id="licenseplate" name="licenseplate" value=""size="5"class="form-control"></td>
      <td><input type="text" name="license" id="license" value=""size="5"class="form-control"></td>
   -->
   <td><input type="text" id="carname" name="carname" value=""></td>
        
        <td><input type="text" id="describe" name="describe" value=""></td>
              <td><input type="" id="image" name="image" value=""></td>
          
              <td><input type="text" id="seats" name="seats" value=""></td>
         
         <td><input type="text" id="licenseplate" name="licenseplate" value=""></td>
              <td><input type="text" name="license" id="license" value=""></td>
    </tr>
  </table>
  <div align="center">
  <button type="submit" onclick="foo()">Gửi</button>
   <!-- <button type="button" name="save" id="save"onclick="foo()" class="btn btn-info">Save</button> -->

 </div>
 <br />
 <div id="inserted_item_data"></div>
</div>

</div>
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