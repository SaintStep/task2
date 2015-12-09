$(document).ready(function() {

	//Попап менеджер FancyBox
	$(".fancybox").fancybox();
	
	$("#callback").submit(function() {
		$.fancybox.close();
		setTimeout(function() {
			$('.answer').fadeIn(1500).fadeOut(2000);
		}, 1000);
	});

});