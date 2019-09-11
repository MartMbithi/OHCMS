(function ($) {
	"use strict";
	var $window = $( window ),
		$document = $( document ),
		bacotna = {
			initialize: function() {
				this.event();
				this.imageStyle();
			},
        event : function(){
			// ------------------------------------------------------------------------------ //
			// Change navbar class
			// ------------------------------------------------------------------------------ //
			var brand = $(".brand-center");
			$window.on( 'scroll', function(){
				var scrollTop = $window.scrollTop();
				if(scrollTop != 0){
					brand.addClass("fixsticky");
					return false;
				} else {
					brand.removeClass("fixsticky");
					return false;
				}
			});
			
			// ------------------------------------------------------------------------------ //
			// Accordions
			// ------------------------------------------------------------------------------ //
			var accordions = $(".panel-collapse");
            accordions.each(function(){
                if( $(this).hasClass("in") ){
                    $(this).closest(".panel").addClass("on");
                }
                
                var getId = $(this).attr("id");
                $("#" + getId).on('shown.bs.collapse', function () {
                    $(this).closest(".panel").addClass("on");
                });	
                
                $("#" + getId).on('hidden.bs.collapse', function () {
                    $(this).closest(".panel").removeClass("on");
                });	
            });
            
            // ------------------------------------------------------------------------------ //
			// Modal
			// ------------------------------------------------------------------------------ //
			var modal = $(".modal");
            modal.on('show.bs.modal', function() {
                $(this).show();
                bacotna.setModalMaxHeight(this);
            });

			// ------------------------------------------------------------------------------ //
			//Form
			// ------------------------------------------------------------------------------ //
			jcf.replaceAll();
	
			// ------------------------------------------------------------------------------ //
			// Pretty Print shortcode
			// ------------------------------------------------------------------------------ //
			window.prettyPrint && prettyPrint()

			// ------------------------------------------------------------------------------ //
			//Clients logo
			// ------------------------------------------------------------------------------ //
			var clientLogo = $(".clients-logo");
			var logoHover = $(".logo-hover");
			logoHover.css({'opacity':'0','filter':'alpha(opacity=0)'});
			clientLogo.each(function(){
				$(this).on("mouseenter", function() {
					$(this).find('.logo-hover').stop().fadeTo(300, 1);
					$(this).find('.logo-current').stop().fadeTo(300, 0);
					return false;
				});
				$(this).on("mouseleave", function() {
					$(this).find('.logo-hover').stop().fadeTo(300, 0);
					$(this).find('.logo-current').stop().fadeTo(300, 1);
					return false;
				});
			});

            // ------------------------------------------------------------------------------ //
			// Alert
			// ------------------------------------------------------------------------------ //
			var alert = $(".alert");
            alert.each(function(){
				$(this).prepend("<span class='close-alert'><i class='fa fa-times-circle'></i></span>");
                var getOut = $(this).data("out");

                $(".close-alert", this).on("click", function(){
                    $(this).closest(".alert").addClass("animated");
                    $(this).closest(".alert").addClass(getOut).delay(1000).slideUp("slow");
                });
            });
			
			// ------------------------------------------------------------------------------ //
			// to top
			// ------------------------------------------------------------------------------ //
			var toptop = $(".toTop");
            $window.on( 'scroll', function(){
                var scrollTop2 = $window.scrollTop();
                if(scrollTop2 >= 34){
                    toptop.stop().fadeIn();
                } else {
                    toptop.stop().fadeOut();
                }
            });
            toptop.on("click", function(e){
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 1000);
            });
            
            // ------------------------------------------------------------------------------ //
            // Wrap Team
            // ------------------------------------------------------------------------------ //
			var teamWrapp = $(".team-wrapper");
			teamWrapp.each(function(){
				var getCaption = $(".team-caption", this),
					showIcon = $(".show-caption", this).find(".fa");
				
				getCaption.addClass("animated");
				getCaption.addClass("zoomOut");
				$(".show-caption", this).on("click", function(){
					var state = showIcon.hasClass("fa-minus");
					if( state ){
						getCaption.addClass("zoomOut");
						getCaption.removeClass("zoomIn");
					}else{
						getCaption.addClass("zoomIn");
						getCaption.removeClass("zoomOut");
					}
					showIcon.toggleClass("fa-minus");
					getCaption.toggleClass("on"); // active for IE
				});   
			});
				
			var teamBase = $(".team-base");
			teamBase.each(function(){
				var teamHeight = $("img", this).height();	
				$(".content-caption", this).css("height", teamHeight + "px");
				$(".img-team").css({'left':'0'});
				$(this).on("mouseenter", function() {
					$('.img-team', this).stop().animate({left:'100%'},{queue:false,duration:500});
					return false;
				});
				$(this).on("mouseleave", function() {
					$('.img-team', this).stop().animate({left:'0'},{queue:false,duration:500});
					return false;
				});
			});
			
            // ------------------------------------------------------------------------------ //
			// Counter
			// ------------------------------------------------------------------------------ //
			var counter = $(".count");			
			if ( counter.length ) {
				$window.on("scroll.myCount", function(){	
					var h_window_1 = $window.height() * 0.70,
						p_scroll = $('.count').offset().top,
						get_scroll = p_scroll - h_window_1;

					if( $(document).scrollTop() > get_scroll ){
						$window.off("scroll.myCount");
						$('.count-value').each(function () {
							$(".start-count", this).text('0');
							var data_count = $(this).data("count");
							$(this).prop('Counter1',0).animate({
								Counter1: data_count
							}, {
								duration: 5000,
								easing: 'swing',
								step: function (now1) {
									$(".start-count", this).text(Math.ceil(now1));
								}
							});
						});
					}
				});
			}
            
			$( ".counter-item.text-only").last().addClass( "hidden-counter" );
			

			// ------------------------------------------------------------------------------ //
			//Product
			// ------------------------------------------------------------------------------ //
			$(".product-caption").css({'opacity':'0','filter':'alpha(opacity=0)'});
			$(".addcart").css({'bottom':'-33px'});
			$(".product-wrapper, .product-wrapper .img-wrapper").each(function(){
				$(this).on("mouseenter", function() {
					$(this).find('.product-caption').stop().fadeTo(300, 1);
					$('.addcart', this).stop().animate({bottom:'0'},{queue:false,duration:300});
					return false;
				});
				$(this).on("mouseleave", function() {
					$(this).find('.product-caption').stop().fadeTo(800, 0);
					$('.addcart', this).stop().animate({bottom:'-33px'},{queue:false,duration:500});
					return false;
				});
			});
		
            // ------------------------------------------------------------------------------ //
			// Progress Bar
			// ------------------------------------------------------------------------------ //
			var progressType = $(".progress.type3");	
			var progress = $(".wrap-progress");
			progressType.wrap("<div class='wrap-progress3'></div>");
			progressType.append("<span class='circle'></span>");
            if( progress.length ){
                $window.on("scroll.myProgress", function(){
                    // Get position scroll
                    var p_progress = $( ".wrap-progress" ).offset().top, 
                        h_window = $window.height() * 0.9, 
                        get_scroll_progress = p_progress - h_window;

                    if( $(document).scrollTop() > get_scroll_progress ){
                        $window.off("scroll.myProgress");
                        $("div.progress").each(function(){

                            // Animation progress
                            var progress_bar = $(this).find(".progress-bar");
                            var val_progress = progress_bar.data("value-progress");
                            progress_bar.animate({
                                "width"  : val_progress + '%'
                            });
							
							// Set type2
							if($(this).hasClass("type2")){
								$(".value-progress",this).animate({
									"left"  : val_progress + '%'
								}, {
									duration: 1000
								});
							}
							
							// Set type3
							if($(this).hasClass("type3")){
								$(".circle",this).animate({
									"left"  : val_progress + '%'
								}, {
									duration: 2000
								});
							}

                            // Counter progress					
                            $(this).find(".value-progress").each(function () {
                                $(this).text('0');
                                $(this).prop("Counter",0).animate({
                                    Counter: val_progress
                                }, {
                                    duration: 3000,
                                    step: function (now) {
                                        $(this).text(Math.ceil(now));
                                    }
                                });
                            });

                        });
                    }	
                });
            }	
        },

		// ------------------------------------------------------------------------------ //
		// image hover
		// ------------------------------------------------------------------------------ //

		imageStyle : function(){
			var image = $(".img-wrapper");
			$(".linker").css({'left':'-100%'});
			$(".zoomer").css({'right':'-100%'});
			$(".img-caption.capBlur .caption-content").css({'bottom':'-100%'});
			image.each(function(){
				var getHeight = $("img", this).height(),
					capZoomIn = $(".capZoomIn", this),
					capZoomInDown = $(".capZoomInDown", this),
					capRollIn = $(".capRollIn", this),
					capRotateIn = $(".capRotateIn", this),
					capBounceOut = $(".capBounceOut", this);
					$(".capZoomIn, .capZoomInDown, .capRollIn, .capRotateIn, .capBounceOut", this).css("height", getHeight + "px");
					$(".img-caption").addClass("animated");
					capZoomIn.addClass("zoomOut");
					capZoomInDown.addClass("zoomOutDown");
					capRollIn.addClass("rollOut");
					capRotateIn.addClass("rotateOut");
					capBounceOut.addClass("bounceOut");
				$(this).on("mouseenter", function() {
					$('.linker', this).stop().animate({left:'50%'},{queue:false,duration:1000});
					$('.zoomer', this).stop().animate({right:'50%'},{queue:false,duration:1000});
					$('.img-caption.capBlur .caption-content', this).stop().animate({bottom:'0'},{queue:false,duration:1000});
					capZoomIn.addClass("zoomIn");
					capZoomIn.removeClass("zoomOut");
					capZoomInDown.addClass("zoomInDown");
					capZoomInDown.removeClass("zoomOutDown");
					capRollIn.addClass("rollIn");
					capRollIn.removeClass("rollOut");
					capRotateIn.addClass("rotateIn");
					capRotateIn.removeClass("rotateOut");
					capBounceOut.addClass("bounceIn");
					capBounceOut.removeClass("bounceOut");
					return false;
				});
				$(this).on("mouseleave", function() {
					$('.linker', this).stop().animate({left:'-100%'},{queue:false,duration:1000});
					$('.zoomer', this).stop().animate({right:'-100%'},{queue:false,duration:1000});
					$('.img-caption.capBlur .caption-content', this).stop().animate({bottom:'-100%'},{queue:false,duration:1000});
					capZoomIn.addClass("zoomOut");
					capZoomIn.removeClass("zoomIn");
					capZoomInDown.addClass("zoomOutDown");
					capZoomInDown.removeClass("zoomInDown");
					capRollIn.addClass("rollOut");
					capRollIn.removeClass("rollIn");
					capRotateIn.addClass("rotateOut");
					capRotateIn.removeClass("rotateIn");
					capBounceOut.addClass("bounceOut");
					capBounceOut.removeClass("bounceIn");
					return false;
				});
			});	
		},

			
        // ------------------------------------------------------------------------------ //
        // Modal Bootstrap
        // ------------------------------------------------------------------------------ //
        setModalMaxHeight : function(element){
            this.$element     = $(element);  
            this.$content     = this.$element.find('.modal-content');
            var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
            var dialogMargin  = $window.width() < 768 ? 20 : 60;
            var contentHeight = $window.height() - (dialogMargin + borderWidth);
            var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
            var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
            var maxHeight     = contentHeight - (headerHeight + footerHeight);

            this.$content.css({
                'overflow': 'hidden'
            });

            this.$element.find('.modal-body').css({
                'max-height': maxHeight,
                'overflow-y': 'auto'
            });
        }
    };
    
    $window.on("load", function(){
        bacotna.initialize();
		setTimeout(function(){
			$(".wrap-loading").addClass("slideOutUp").fadeOut();
		},500);
    });

    $window.on("resize", function(){
        bacotna.imageStyle();  
         bacotna.initialize();
        // Modals Bootstrap
        if ($('.modal.in').length != 0) {
            bacotna.setModalMaxHeight($('.modal.in'));
        }
    });

}(jQuery));

