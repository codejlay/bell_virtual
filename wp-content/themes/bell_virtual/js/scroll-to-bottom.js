(function($) {
	$(document).on("scroll", function() {
		if($(document).scrollTop()>100) {
			$(".responsive-menu-button").addClass("menu-to-bottom");

		} else {
			$(".responsive-menu-button").removeClass("menu-to-bottom");
			$("#responsive-menu-container").removeClass("open-menu-to-bottom");	
		}		
	});  

	$('*').click(function(){		
		if($('#responsive-menu-container').hasClass('open-menu-to-bottom')){
			$('#responsive-menu-container').removeClass('open-menu-to-bottom').addClass('hide');
		}		
	});

	$("#responsive-menu-button").click(function(){
		if($(document).scrollTop()>100) {
			$("#responsive-menu-container").addClass("open-menu-to-bottom");		
		}		
	});
})(jQuery);