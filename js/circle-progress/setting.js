var $document = $( document );
var $window = $( window );
$document.ready(function ($) {

		var progresswrap = $(".progress-circle-wrapp");
		if( progresswrap.length ){
			$window.on("scroll.myProgresscircle", function(){
					// Get position scroll
					var h_window_1 = $window.height() * 0.70;
					var	p_scroll = $('.progress-circle-wrapp').offset().top;
					var	get_scroll = p_scroll - h_window_1;
				if( $(document).scrollTop() > get_scroll ){	
					$('.progressbar-circle').each(function () {
						var percent = $(this).find('.circle').attr('data-percent');
						var percentage = parseInt(percent, 10) / parseInt(100, 10);
						var animate = $(this).data('animate');
							(function() {
							  var _originalInit = $.circleProgress.defaults.init;
							  $.circleProgress.defaults.init = function(config) {
								if (!config.fill)
								  config.fill = { color: config.el.css('color') };
								_originalInit.call(this, config);
							  };
							})();
							$(this).data('animate', true);
							$(this).find('.circle').circleProgress({
								startAngle: -Math.PI / 2,
								value: percentage,
								thickness: 5,
							}).on('circle-animation-progress', function (event, progress, stepValue) {
								$(this).find('.perogress-percent').text(String(stepValue.toFixed(2)).substr(2) + '%');
							}).stop();

					});
				}
			});	
		}


});