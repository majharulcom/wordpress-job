jQuery(document).ready(function($){
	            jQuery("#owl").owlCarousel({
								autoPlay: 3000, //Set AutoPlay to 3 seconds
			 responsive: true,
			 addClassActive: true,
			 items: 3,
			 itemsDesktop: [1199, 3],
			 itemsDesktopSmall: [979, 3],
			 stopOnHover:true,
			 afterMove:function(){
					 //reset transform for all item comment_sign
					 $(".owl-item .tes").css('border-top', 'solid 4px #e9e9e9')
					 $(".owl-item .comment_sign").css('background', '#363636')
					 //add transform for 2nd active slide
					 $(".active .tes").eq(1).css('border-top', 'solid 4px #f3703b')
					 $(".active .comment_sign").eq(1).css('background', '#f3703b')
			 },
			 //set init transform
			 afterInit:function(){
					 $(".active .tes").eq(1).css('border-top', 'solid 4px #f3703b')
					 $(".active .comment_sign").eq(1).css('background', '#f3703b')
			 }
	            });
});
