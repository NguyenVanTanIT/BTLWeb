
<html>  
    <head>  
        <title>update car</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
          
    </head>  
    <body>  
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Update Multiple Mysql Data using Checkbox with Ajax in PHP</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value="Multiple Update" />
                    </div>
                    <br />
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th width="5%"></th>
                                <th width="10%">carname</th>
                                <th width="50%">describe</th>
                                <th width="20%">image</th>
                                <th width="10%">seats</th>
                                <th width="2%">licenseplate</th>
                                <th width="3%">license</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </form>
   </div>  
  </div>
    </body>  
</html>  
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"car/select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id="'+data[count].id+'" data-carname="'+data[count].carname+'" data-describe="'+data[count].describe+'" data-image="'+data[count].image+'" data-designation="'+data[count].designation+'" data-age="'+data[count].age+'" class="check_box"  /></td>';
                    html += '<td>'+data[count].carname+'</td>';
                    html += '<td>'+data[count].describe+'</td>';
                    html += '<td>'+data[count].image+'</td>';
                    html += '<td>'+data[count].designation+'</td>';
                    html += '<td>'+data[count].age+'</td></tr>';
                }
                $('tbody').html(html);
            }
        });
    }

    fetch_data();

    $(document).on('click', '.check_box', function(){
        var html = '';
        if(this.checked)
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-carname="'+$(this).data('carname')+'" data-describe="'+$(this).data('describe')+'" data-image="'+$(this).data('image')+'" data-designation="'+$(this).data('designation')+'" data-age="'+$(this).data('age')+'" class="check_box" checked /></td>';
            html += '<td><input type="text" carname="carname[]" class="form-control" value="'+$(this).data("carname")+'" /></td>';
            html += '<td><input type="text" carname="describe[]" class="form-control" value="'+$(this).data("describe")+'" /></td>';
            html += '<td><select carname="image[]" id="gender_'+$(this).attr('id')+'" class="form-control"><option value="Male">Male</option><option value="Female">Female</option></select></td>';
            html += '<td><input type="text" carname="designation[]" class="form-control" value="'+$(this).data("designation")+'" /></td>';
            html += '<td><input type="text" carname="age[]" class="form-control" value="'+$(this).data("age")+'" /><input type="hidden" carname="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-carname="'+$(this).data('carname')+'" data-describe="'+$(this).data('describe')+'" data-image="'+$(this).data('image')+'" data-designation="'+$(this).data('designation')+'" data-age="'+$(this).data('age')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('carname')+'</td>';
            html += '<td>'+$(this).data('describe')+'</td>';
            html += '<td>'+$(this).data('image')+'</td>';
            html += '<td>'+$(this).data('designation')+'</td>';
            html += '<td>'+$(this).data('age')+'</td>';            
        }
        $(this).closest('tr').html(html);
        $('#gender_'+$(this).attr('id')+'').val($(this).data('image'));
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"multiple_update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function()
                {
                    alert('Data Updated');
                    fetch_data();
                }
            })
        }
    });

});  
</script>