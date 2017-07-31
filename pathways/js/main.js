/*
    Template  Name: TemplateName;
	Description: This is a multipurpose Business template;
	Version:  1.0
    Authot:   Md.Masud Rana
    Website:  www.dyrectionstudios.com
	
	[Note: This file contains all jquery plugins activation codes.]
*/

(function ($) {
 "use strict";
 
	// Owl Carousel
	var owl = $('.post-carosel.owl-carousel');
	owl.owlCarousel({
		autoplay: true,
		autoplayHoverPause: false,
		autoplayTimeout: 8000,
		dots:false,
		nav: true,
		loop: false,
        navText: ["<img src='http://pathways3.wpengine.com/wp-content/uploads/2017/06/arrow-left-big.png'>","<img src='http://pathways3.wpengine.com/wp-content/uploads/2017/06/arrow-right-big.png'>"],
		margin:35,
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			980: {
				items: 2
			},
			1199: {
				items: 3
			}
		}
	})


	
$('.blog-post-wrap').isotope({
  itemSelector: '.single-post-wrapper',
  percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer'
  }
});


 
})(jQuery); 