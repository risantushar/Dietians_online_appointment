/*!
 * Diet & Nutrition Health Center
 * ------------------------------
 * 
 * Copyright 2013 AA-Team
 * 
 * http://themeforest.net/user/AA-Team/portfolio
 *
 */
$(document).ready(function() {
	var wrap_size = $(".header-container").width();
	
	$("#dn-main-menu").ResponsiveNav({
		'wrapAfter': '.header-container',
		'menuClass': 'dn-main-menu-mobile'
	});

	// Main slider
	$("#dn-main-slider").owlCarousel({
		autoPlay: 50000, //Set AutoPlay to 3 seconds
		blurBackground: {
			'elm': $(".dn-slider-background"),
			'radius' : 22,
			'transitionSpeed': 350
		},
		items : 1,
		slideSpeed: 300,
		goToFirst: true,
		goToFirstSpeed: 1000,
		navigation: true,
		pagination: true,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768,1]
	});
	
	// Top slider widget
	$("#dn-top-widget-slider").owlCarousel({
		//autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
		slideSpeed: 300,
		navigation: true,
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsTablet: [768,1],
		itemsMobile : [479,1],
	});
	
	// Parteners carusel
	$("#dn-partners-carusel").owlCarousel({
		//autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 4,
		pagination: false,
		navigation: true,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	});
	
	// Main slider
	$("#recipe-gallery").owlCarousel({
		autoPlay: 4000,
		items : 1,
		slideSpeed: 300,
		navigation: true,
		pagination: true,
		itemsDesktop: [1199,1],
		itemsDesktopSmall: [979,1],
		itemsTablet: [768,1],
		itemsMobile : [479,1],
	});
	
	$("a.btn-dietician[rel^='prettyPhoto']").prettyPhoto({
		theme :'light_square',
		markup: '<div class="pp_pic_holder" id="dietician_container"> \
					<div class="ppt">&nbsp;</div> \
                    <div class="pp_content_container"> \
                        <div class="pp_content"> \
                            <div class="pp_loaderIcon"></div> \
                            <div class="pp_fade"> \
                                <div id="pp_full_res"></div> \
                            </div> \
                        </div> \
                    </div> \
                </div> \
                <div class="pp_overlay"></div>',
        gallery_markup: '',
		social_tools: ''
	});
	
	// Google maps
	$('div.dn-map').gMap({ address: 'London, United Kingdom', zoom:12 }); 
	
	// Go to Top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 1) {
			$('.gotop').css({
				bottom: "25px"
			});
		} else {
			$('.gotop').css({
				bottom: "-100px"
			});
		}
	});
	$('.gotop').click(function () {
		$('html, body')
			.animate({
				scrollTop: '0px'
			}, 800);
		return false;
	});
});