var $document = $( document );
$document.ready(function() {
  'use strict'; 
	var pooparallax = $(".parallax");
    pooparallax.each(function(){
        var getBg = $(this).data("background"),
            getSpeed = $(this).data("speed"),
            getPosition = $(this).data("size");
        
        $(this).css("background-image","url(" + getBg +")");
        $(this).parallax(getPosition, getSpeed);
    });
});