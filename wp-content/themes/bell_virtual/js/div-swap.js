(function($) {
  $(".swap").hover(function(e) {  
    $(this).closest(".services-wrapper-item").children('.content').toggle();    
  });
})(jQuery);