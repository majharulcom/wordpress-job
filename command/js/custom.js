jQuery(window).load(function() {

       // MASSONRY Without jquery
       var container = document.querySelector('#ms-container');
       var msnry = new Masonry( container, {
         itemSelector: '.ms-item',
         columnWidth: '.ms-item',
       });

         });
jQuery(document).ready(function($){
	            jQuery("#owl").owlCarousel({
							 //autoPlay: 5000, //Set AutoPlay to 3 seconds
							 responsive: true,
							dots: true,
							 addClassActive: true,
							 items: 3,
							 itemsDesktop: [1199, 3],
							 itemsDesktopSmall: [979, 3],
							 stopOnHover:true
	            });
});