	jQuery(document).ready(function() { 
		jQuery("#rev-slider").revolution({
			sliderType:"standard",
			sliderLayout:"auto",
			delay:9000,
			navigation: {
				keyboardNavigation: "on",
				keyboard_direction: "horizontal",
				mouseScrollNavigation: "off",
				onHoverStop: "off",
				touch: {
					touchenabled: "on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				},
				arrows: {
					style: "hebe",
					enable: true,
					hide_onmobile: true,
					hide_onleave: false,
					tmp: '',
					left: {
						h_align: "left",
						v_align: "center",
						h_offset: 0,
						v_offset: 10
					},
					right: {
						h_align: "right",
						v_align: "center",
						h_offset: 0,
						v_offset: 10
					}
				},
				bullets: {
					enable: true,
					hide_onmobile: true,
					style: "hebe",
					hide_onleave: false,
					direction: "vertical",
					h_align: "right",
					v_align: "bottom",
					h_offset: 0,
					v_offset: 0,
					space: 5,
					tmp: ''
				}
			}, 
			parallax: {
					type:"mouse",
					origo:"slidercenter",
					speed:2000,
					levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
					type:"mouse",
			},
			disableProgressBar:"on",
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[660,546,415,256],
		}); 
	}); 