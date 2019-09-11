(function ($) {
	"use strict";
var $range = $("#range");

$range.ionRangeSlider({
    type: "double",
    min: 0,
    max: 500,
    from: 90,
    to: 410,
    onFinish: function (num) {
         $('.product-wrapper').hide().filter(function() {
            var price = parseInt($(this).data("price"), 10);
            return price >= num.from && price <= num.to;
        }).show();
    }
});
}(jQuery));