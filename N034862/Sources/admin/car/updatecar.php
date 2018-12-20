
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
</html>  
<script>  
$(document).ready(function(){  
    
    function fetch_data()
    {
        $.ajax({
            url:"select.php",
            method:"POST",
            dataType:"json",
            success:function(data)
            {
                var html = '';
                for(var count = 0; count < data.length; count++)
                {
                    html += '<tr>';
                    html += '<td><input type="checkbox" id_car="'+data[count].id_car+'" data-carname="'+data[count].carname+'" data-describe="'+data[count].describe+'" data-image="'+data[count].image+'" data-seats="'+data[count].seats+'" data-licenseplate="'+data[count].licenseplate+'" data-license="'+data[count].license+'" class="check_box"  /></td>';

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
});  
</script>