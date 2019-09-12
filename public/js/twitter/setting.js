(function($) {
	'use strict';	
        $('.tweet').twittie({
            dateFormat: '%b. %d, %Y',
            template: '{{tweet}} <div class="date">{{date}}</div>',
            count: 3,
            loadingText: 'Loading!'
        },function () {
			$('.tweet ul').list_ticker({
				speed:5000,
				effect:'fade'
			});
		});
})(jQuery);