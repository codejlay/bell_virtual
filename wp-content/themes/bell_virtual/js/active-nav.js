jQuery(function($) {
	// homepage active highlight
	$('#menu-item-4 a').addClass('active');
	// blog page active highlight
	$('#menu-item-105 a').addClass('active');

	$('.menu .menu-item a').click(function(){
		$('.menu .menu-item a').removeClass('active');
	    $(this).addClass('active');    	    
	});
});
