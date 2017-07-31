$('.carousel').carousel({
    interval: 7000
})	

/*sticky-header js*/
$(window).scroll(function(){
    if ($(window).scrollTop() > 0) {
       $('.sticky-header').addClass('fixed');
    }
    else {
       $('.sticky-header').removeClass('fixed');
    }
	
});
/*sticky-header js*/
$(document).ready(function() {
	
$(".about_us").owlCarousel({
        autoPlay: 10000,
		  items : 1,
        itemsCustom : false,
        itemsDesktop : [1199, 1],
        itemsDesktopSmall : [979, 1],
        itemsTablet : [768, 1],
        itemsTabletSmall : false,
        itemsMobile : [479, 1],
        lazyLoad : true,
        navigation : true
      });
/*Tooltip*/
	$('[data-toggle="tooltip"]').tooltip();
		
	  $("#attandant").owlCarousel({
        autoPlay: 5000,
		items : 2,
		itemsDesktop : [1199, 2],
        itemsDesktopSmall : [991, 2],
        itemsTabletSmall : [767, 1],
        itemsMobile : [639, 1],
        lazyLoad : true,
        navigation : true
      });
	   $("#slider").owlCarousel({
        autoPlay: 7000,
		items : 1,
		itemsDesktop : [1199, 1],
        itemsDesktopSmall : [991, 1],
		itemsTablet : [768, 1],
		itemsTabletSmall : [767, 1],
        itemsMobile : [639, 1],
        lazyLoad : true,
        navigation : true
      });
	  $("#testimonial").owlCarousel({
        autoPlay: 7000,
		items : 1,
		itemsDesktop : [1199, 1],
        itemsDesktopSmall : [991, 1],
		itemsTablet : [768, 1],
		itemsTabletSmall : [767, 1],
        itemsMobile : [639, 1],
        lazyLoad : true,
        navigation : true
      });
	  $("#gallery").owlCarousel({
        autoPlay: 7000,
		items : 1,
		itemsDesktop : [1199, 1],
        itemsDesktopSmall : [991, 1],
		itemsTablet : [768, 1],
		itemsTabletSmall : [767, 1],
        itemsMobile : [639, 1],
        lazyLoad : true,
        navigation : true
      });
    $("#gallery-1").owlCarousel({
        autoPlay: 6000,
		items : 1,
		itemsDesktop : [1199, 1],
        itemsDesktopSmall : [991, 1],
		itemsTablet : [768, 1],
		itemsTabletSmall : [767, 1],
        itemsMobile : [639, 1],
        lazyLoad : true,
        navigation : true
      });	

});


/*SCROLl a div Script*/
	$('.scroll-link').on('click', function(event){
		event.preventDefault();
		var sectionID = $(this).attr("data-id");
		scrollToID('#' + sectionID, 1000);
	});


	function scrollToID(id, speed){
	var offSet = 90;
	var targetOffset = $(id).offset().top - offSet;
	//var mainNav = $('.header-menu');
	$('html,body').animate({scrollTop:targetOffset}, speed);
	}
/*SCROLl a div Script END*/

$(".scroll-link").click(function()
	  {
		 $(".scroll-link").each(function(){
			  $(this).removeClass("active");
			});	  
		 $(this).addClass("active");	
		 
	  });

/*Active class move on page scroll Function*/	
	// Cache selectors
var lastId,
    topMenu = $(".navbar-nav"),
    topMenuHeight = topMenu.outerHeight()+0,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
	
  var href = $(this).attr("href"),
  offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+10;
 
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 1000);
  e.preventDefault();
});

		
	



  
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
        //The animate class gets removed so that it jumps straight back to 0%
        $(".transition-timer-carousel-progress-bar", this)
            .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
        //The slide transition finished, so re-add the animate class so that
        //the timer bar takes time to fill up
        $(".transition-timer-carousel-progress-bar", this)
            .addClass("animate").css("width", "100%");
    });
    
    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
        .css("width", "100%");

	
	


 

      // Custom Navigation Events
      $(".next").click(function(){
        owl.trigger('owl.next');
      })
      $(".prev").click(function(){
        owl.trigger('owl.prev');
      })
      $(".play").click(function(){
        owl.trigger('owl.play',1000);
      })
      $(".stop").click(function(){
        owl.trigger('owl.stop');
      })


  
