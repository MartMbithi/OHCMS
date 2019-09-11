(function($) {
	'use strict';	
	$('.start').raty({
	start: function() {
		return $(this).attr('data-rating');
		}
	});
})(jQuery);