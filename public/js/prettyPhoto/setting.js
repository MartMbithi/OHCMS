(function($) {
	'use strict'; 
	
    /*
	prettyPhoto
    =========================== */	
	var prettyPhotoFirst = $(".img-wrapper:first a[data-pretty^='prettyPhoto'], .zoomer:first a[data-pretty^='prettyPhoto']");
	var prettyPhotoGet = $(".img-wrapper:gt(0) a[data-pretty^='prettyPhoto'], .zoomer:gt(0) a[data-pretty^='prettyPhoto']");
    prettyPhotoFirst.prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
	prettyPhotoGet.prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
	
})(jQuery);



