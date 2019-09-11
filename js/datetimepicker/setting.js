(function($) {
	'use strict';
	$.datetimepicker.setLocale('en');

	$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
	$("#datetimepicker_format_change").on("click", function(e){
		$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
	});
	$("#datetimepicker_format_locale").on("change", function(e){
		$.datetimepicker.setLocale($(e.currentTarget).val());
	});

	$('.default_datetimepicker').datetimepicker({
		format:'d/m/Y',
		formatDate:'Y/m/d',
		timepicker:false,
		timepickerScrollbar:false
	});
	
	$('.timepicker').datetimepicker({
		datepicker:false,
		format:'H:i',
		step:5
	});

	$('.dateMount_format').datetimepicker({
		format:'d M',
		formatDate:'Y/m/d',
		value:'d M',
		timepicker:false,
		timepickerScrollbar:false
	});
	
	$('.dateMount_tomorrow').datetimepicker({
		format:'d M',
		formatDate:'Y/m/d',
		value:'+2017/01/02',
		timepicker:false,
		timepickerScrollbar:false,
	});

})(jQuery);