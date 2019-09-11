(function ($) {
	"use strict";
    
    /*
    Gallery Masonry
    =========================== */
    var masonryGrid = function(){
        var self = $("#gallery");
        self.masonry({
            isAnimated: true,
            columnWidth:".grid-sizer",
            itemSelector: ".grid-item"
        });

        $(".filter-items li a").on("click",function(e){
            e.preventDefault();

            var filter = $(this).attr("data-filter");

            $(".filter-items  li a").removeClass('active');
            $(this).addClass('active');

            self.masonryFilter({
                filter: function () {
                    if (!filter) return true;
                    return $(this).attr("data-filter") == filter;
                }
            });
        });
    }
    
	var $window = $( window ),
		$document = $( document );
    masonryGrid();
    $window.on("load", function(){
        setTimeout(masonryGrid, 1000);
    });
})(jQuery);