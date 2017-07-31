jQuery(document).ready(function($){
	            jQuery("#owl").owlCarousel({
							 //autoPlay: 5000, //Set AutoPlay to 3 seconds
							 responsive: true,
							 navigation: false,
							 pagination: true,
							 addClassActive: true,
							 items: 4,
							 itemsDesktop: [1199, 3],
							 itemsDesktopSmall: [979, 3],
							 stopOnHover:true
	            });
});
