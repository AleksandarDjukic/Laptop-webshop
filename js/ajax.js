$(document).ready(function(){
	$(".product_check").click(function(){
		var action = 'data';
		var brand = get_filtered_text('brand');
		var cpu_brand = get_filtered_text('cpu_brand');
		var ram = get_filtered_text('ram');
		var storage = get_filtered_text('storage');
		var screen_size = get_filtered_text('screen_size');
		$.ajax({
			url:'action/filter.php',
			method: 'post',
			data:{action:action, brand:brand, cpu_brand:cpu_brand, ram:ram, storage:storage, screen_size:screen_size},
			success:function(response){
				$("#result").html(response);
			}
		});
	});
	function get_filtered_text(text_id){
		var filterData = [];
		$('#'+text_id+':checked').each(function(){
			filterData.push($(this).val());
		});
		return filterData;
	}
	$('.sort').change(function(){
		var sort = $(this).val()
		var action = 'data';
		var brand = get_filtered_text('brand');
		var cpu_brand = get_filtered_text('cpu_brand');
		var ram = get_filtered_text('ram');
		var storage = get_filtered_text('storage');
		var screen_size = get_filtered_text('screen_size');
		$.ajax({
			url:'action/filter.php',
			method: 'post',
			data:{action:action, brand:brand, cpu_brand:cpu_brand, ram:ram, storage:storage, screen_size:screen_size, sort:sort},
			success:function(response){
				$("#result").html(response);
			}
		});
	});
});
