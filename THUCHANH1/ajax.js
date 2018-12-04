
$(document).ready(function(){
	$('#login').click(function() {
		$('#loginFrom').css({
			'display':'bloc',
			'border':'bloc',
			'position':'bloc',
			'left':'100px'

		})
		$('#smlogin').click(function(event) {
			$.$.ajax({
				url: 'checklogin.php',
				type: 'POST',
				dataType: 'text',
				data: {userName: 'user'},
				cuccess:function(data(){
				$('#spnNotice').text(data);}
				error(function() {
					alert('CÓ lỗi');
				});		
		})
	})
});