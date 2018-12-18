function foo() {
  
  var carname=$("#carname").val();
  var describe=$("#describe").val();
  var image= $("#image").val();
  var seats= $("#seats").val();
  var licenseplate=$("#licenseplate").val();
  var license=$("#license").val();

  $.ajax({
    url: 'car/insert.php',
    type: 'post',
    data: {
      carname: carname,
      describe: describe,
      image: image,
      seats: seats,
      licenseplate: licenseplate,
      license: license
    },
    success: function(result){
      if(result==1){
        alert("111");
      }
      else{
        alert('00');
      }
    },    
  });
};
