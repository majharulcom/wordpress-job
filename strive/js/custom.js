jQuery(document).ready(function($){
	            jQuery("#owl").owlCarousel({
							 //autoPlay: 5000, //Set AutoPlay to 3 seconds
							 responsive: true,
							 navigation: true,
							 navigationText: [
					      "<i class='icon-chevron-left icon-white'><</i>",
					      "<i class='icon-chevron-right icon-white'>></i>"
					      ],
							 pagination: false,
							 addClassActive: true,
							 items: 4,
							 itemsDesktop: [1199, 3],
							 itemsDesktopSmall: [979, 3],
							 stopOnHover:true
	            });
							$("#menu-toggle").click(function(e) {
							        e.preventDefault();
							        $("#wrapper").toggleClass("toggled");
							    });
							     $("#menu-toggle-2").click(function(e) {
							        e.preventDefault();
							        $("#wrapper").toggleClass("toggled-2");
							        $('#menu ul').hide();
							    });

							     function initMenu() {
							      $('#menu ul').hide();
							      $('#menu ul').children('.current').parent().show();
							      //$('#menu ul:first').show();
							      $('#menu li a').click(
							        function() {
							          var checkElement = $(this).next();
							          if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
							            return false;
							            }
							          if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
							            $('#menu ul:visible').slideUp('normal');
							            checkElement.slideDown('normal');
							            return false;
							            }
							          }
							        );
							      }
							    $(document).ready(function() {initMenu();});
});
