

$(document).ready(function(){
	
	
	$('#update-select').change(function(){
		var id = $(this).val()
		var action = 'data';


		$.ajax({
			url:'./action/update-js.php',
			method: 'post',
			data:{action:action, id:id},
			success:function(response){
				$("#rezultat").html(response);
			}
		});
	});

});

