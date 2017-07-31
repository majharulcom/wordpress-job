(function ($) {
 "use strict";
 
 	// History Page Slider
	var owl = $('.historyslide.owl-carousel');
	  owl.owlCarousel({
        items: 1,
		autoplay: true,
		autoplayHoverPause: false,
		autoplayTimeout: 10000,
		smartSpeed:4000,
		dots:false,
		nav: true,
		loop: false,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        margin:0
	  })

    //Product Toggole Dropdown
	$('.has_toggle > .title_item').on('click', function(){
		$('.toggle_dropdown').slideToggle();
	})
	  
 })(jQuery); 