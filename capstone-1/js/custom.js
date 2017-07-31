jQuery(document).ready(function($){
	            jQuery("#owl").owlCarousel({
							 //autoPlay: 5000, //Set AutoPlay to 3 seconds
							 responsive: true,
							 navigation: true,
							 navigationText: [
					      '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
					      '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
					      ],
							 pagination: false,
							 addClassActive: true,
							 items: 1,
							 autoPlay: true,
							 stopOnHover:true
	            });
    //jQuery('td:empty').parents('tr').css('background-color','#15375d');
     jQuery('thead tr th:empty').css('background','#fff');
   jQuery('tr:has(th)').css('background-color','#15375d');
   
});
