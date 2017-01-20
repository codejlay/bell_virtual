(function($) {
	$('.read-more-content').addClass('hide')

	// Set up a link to expand the hidden content:
	.before('<a class="read-more-show" href="#"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></i>read more</a>')
	  
	// Set up a link to hide the expanded content.
	.append('<a class="read-more-hide" href="#"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i>read less</a>');

	// Set up the toggle effect:
	$('.read-more-show').on('click', function(e) {
	  $(this).siblings(".ellipse").hide();	
	  $(this).next('.read-more-content').removeClass('hide');
	  $(this).addClass('hide');
	  e.preventDefault();
	});

	$('.read-more-hide').on('click', function(e) {
	  $(this).parent('.read-more-content').addClass('hide').parent().children('.read-more-show').removeClass('hide');
	  $('.ellipse').show();
	  e.preventDefault();
	});
})(jQuery);