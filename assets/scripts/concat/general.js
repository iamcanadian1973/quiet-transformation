(function (document, window, $) {

	'use strict';

	// Load Foundation
	$(document).foundation();

	// Touch events for main menu
	$( '.nav-primary li:has(ul)' ).doubleTapToGo();
    
    
    
    $(window).load(function() {
    
        var $el = $('.slick-calendar');
        $el.on('init', function() {
            $el.each(function(index) {
                
            });
        });

        $el.slick({
            dots: false,
            slidesToShow: 1,
            arrows: true,
            nextArrow: '<div class="arrow-right"><span>Next</span></div>',
            prevArrow: '<div class="arrow-left"><span>Previous</span></div>',
        });
      
	
    });
    

}(document, window, jQuery));

