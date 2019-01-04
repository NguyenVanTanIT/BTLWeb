
        <div class="container">  
            <br />
   <div class="table-responsive">  
    <h3 align="center">Update Xe</h3><br />
    <form method="post" id="update_form">
                    <div align="left">
                        <input type="submit" name="multiple_update" id="multiple_update" class="btn btn-info" value=" Update xe" />
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
                    html += '<td><input type="checkbox" id_car="'+data[count].id_car+'" carname="'+data[count].carname+'" describe="'+data[count].describe+'" image="'+data[count].image+'" seats ="'+data[count].seats+'" licenseplate="'+data[count].licenseplate+'" license ='+data[count].license+'" class="check_box"  /></td>';
                    html += '<td>'+data[count].carname+'</td>';
                    html += '<td>'+data[count].describe+'</td>';
                    html += '<td>'+data[count].image+'</td>';
                    html += '<td>'+data[count].seats+'</td>';
                    html += '<td>'+data[count].licenseplate+'</td></tr>';
                    html += '<td>'+data[count].license+'</td></tr>';
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
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-name="'+$(this).data('name')+'" data-address="'+$(this).data('address')+'" data-gender="'+$(this).data('gender')+'" data-designation="'+$(this).data('designation')+'" data-age="'+$(this).data('age')+'" class="check_box" checked /></td>';
            html += '<td><input type="text" name="name[]" class="form-control" value="'+$(this).data("name")+'" /></td>';
            html += '<td><input type="text" name="address[]" class="form-control" value="'+$(this).data("address")+'" /></td>';
            html += '<td><select name="gender[]" id="gender_'+$(this).attr('id')+'" class="form-control"><option value="Male">Male</option><option value="Female">Female</option></select></td>';
            html += '<td><input type="text" name="designation[]" class="form-control" value="'+$(this).data("designation")+'" /></td>';
            html += '<td><input type="text" name="age[]" class="form-control" value="'+$(this).data("age")+'" /><input type="hidden" name="hidden_id[]" value="'+$(this).attr('id')+'" /></td>';
        }
        else
        {
            html = '<td><input type="checkbox" id="'+$(this).attr('id')+'" data-name="'+$(this).data('name')+'" data-address="'+$(this).data('address')+'" data-gender="'+$(this).data('gender')+'" data-designation="'+$(this).data('designation')+'" data-age="'+$(this).data('age')+'" class="check_box" /></td>';
            html += '<td>'+$(this).data('name')+'</td>';
            html += '<td>'+$(this).data('address')+'</td>';
            html += '<td>'+$(this).data('gender')+'</td>';
            html += '<td>'+$(this).data('designation')+'</td>';
            html += '<td>'+$(this).data('age')+'</td>';            
        }
        $(this).closest('tr').html(html);
        $('#gender_'+$(this).attr('id')+'').val($(this).data('gender'));
    });

    $('#update_form').on('submit', function(event){
        event.preventDefault();
        if($('.check_box:checked').length > 0)
        {
            $.ajax({
                url:"car/multiple_update.php",
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
