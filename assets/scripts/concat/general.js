(function (document, window, $) {

	'use strict';

	// Load Foundation
	$(document).foundation();

	// Touch events for main menu
	$( '.nav-primary li:has(ul)' ).doubleTapToGo();
    

}(document, window, jQuery));

