$(document).ready(function(){
	$(".add-notification").fadeIn(1500);
	$(".closebtn").click(function(){
		$(".add-notification").fadeOut();
	});
	var sirinaEkrana = $( window ).width();
	if (sirinaEkrana < 999) {
		$("#f-naslov").show();
		var counter = 2;
		$('#f-naslov').click(function(){
			counter ++;
			console.log(counter);
			if (counter % 2 == 0) {
				$(".filter-nav").show();
				$(".strelica").html('<i class="fas fa-sort-down"></i>');
			}
			else if (counter % 2 == 1) {
				$(".filter-nav").hide();
				$(".strelica").html('<i class="fas fa-sort-up"></i>');
			}
		});
} 
});