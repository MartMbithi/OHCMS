$(document).ready(function(){			   

	$(".stylechanger li a").click(function() { 
		$("#skin").attr("href",'skins/'+$(this).attr('data-skin'));
		return false;
	});
		
	$(".openpanel").click(function(){$(".demo-panel").toggle("slow");$(this).toggleClass("active");return false});	
});