		var tpj=jQuery;
			
			var revapi473;
			tpj(document).ready(function() {
				if(tpj("#rev_slider_473_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_473_1");
				}else{
					revapi473 = tpj("#rev_slider_473_1").show().revolution({
						sliderType:"carousel",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"on",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"on",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
						},
						carousel: {
							maxRotation: 5,
							vary_rotation: "off",
							minScale: 15,
							vary_scale: "off",
							horizontal_align: "center",
							vertical_align: "center",
							fadeout: "on",
							vary_fade: "on",
							maxVisibleItems: 3,
							infinity: "off",
							space: -80,
							stretch: "off"
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1024,900,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						shadow:0,
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/