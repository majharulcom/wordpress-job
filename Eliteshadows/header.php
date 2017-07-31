<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0, minimum-scale=1, user-scalable=no"/>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- BOOTSTRAP AND FONT-AWESOME -->
<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<!-- OWL CAROUSEL CSS FOR GALLERRY -->
<link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
<!-- CUSTOM CSS -->
<link href="<?php echo get_template_directory_uri(); ?>/css/es-main.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" type="text/css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/css/font-face.css" type="text/css" rel="stylesheet">
	<!-- LIBRARY AND BOOTSTRAP JS --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script> 
<!-- OWL CAROUSEL JS --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script> 
<!-- CUSTOM JS --> 
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script>
$( document ).ready(function() {
	var id='#<?php echo basename(get_permalink());?>';
	var id_1='<?php echo get_the_id();?>';

if(id_1!=1){
$(id).addClass("active");	
} else{
$('#home').addClass("active");	
}
});
</script>
<script >
$( window ).load(function() {
$("input[name='YMP0']").attr('placeholder','Enter Your Email Address');
});
</script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body>
<main>
  <header>
    <div class="container">
      <div class="top-logo">
        <div class="mobi-logo"><a href="<?php echo home_url();?>"><?php echo do_shortcode('[site_logo]');?></a></div>
      </div>
      <nav>
        <div class="navbar navbar-default" role="navigation">
          <div class="container-fluid paddingnone">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars"></i> </button>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
              <li id="home"><a href="<?php echo home_url();?>"> <i aria-hidden="true" class="fa fa-home"></i> Home</a></li>
				  
				   
				   
				    <li id="<?php echo basename( get_permalink(10) )?>" ><a href="<?php echo get_page_link(10); ?>"> <i aria-hidden="true" class="handshake_icon"> </i>  <?php echo get_the_title(10);?></a></li>
				   <li id="<?php echo basename( get_permalink(12) )?>"><a href="<?php echo get_page_link(12); ?>"> <i aria-hidden="true" class="fa fa-calendar"></i> <?php echo get_the_title(12);?></a></li>
                 
                   <li id="<?php echo basename( get_permalink(154) )?>"><a href="<?php echo get_page_link(154); ?>"> <i aria-hidden="true" class="fa fa-book"></i> <?php echo get_the_title(154);?></a></li>
                  <li class="desk-logo"><a href="<?php echo home_url();?>"><?php echo do_shortcode('[site_logo]');?> </a></li>
				  <li id="<?php echo basename( get_permalink(152) )?>"><a href="<?php echo get_page_link(152); ?>"> <i class="fa fa-newspaper-o" aria-hidden="true"></i><?php echo get_the_title(152);?></a></li>
				
                  <li id="<?php echo basename( get_permalink(8) )?>"><a href="<?php echo get_page_link(8); ?>"> <i aria-hidden="true" class="fa fa-info-circle"></i> <?php echo get_the_title(8);?></a></li>
				  
                  <!--<li id="<?php echo basename( get_permalink(14) )?>"><a href="<?php echo get_page_link(14); ?>"> <i aria-hidden="true" class="fa fa-question-circle"></i><?php echo get_the_title(14);?></a></li>-->
				  
                  <li id="<?php echo basename( get_permalink(6) )?>"><a href="<?php echo get_page_link(6); ?>"> <i aria-hidden="true" class="fa fa-paper-plane-o"></i> <?php echo get_the_title(6);?></a></li>
				 
				  
				  <?php
if ( !is_user_logged_in() ) { ?>
				  <li id="<?php echo basename( get_permalink(156) )?>"><a href="<?php echo get_page_link(156); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>
					Login</a></li>
<?php } else{ ?>
	 <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>
<?php echo get_the_title(147);?></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo get_page_link(147); ?>"><?php echo get_the_title(147);?></a></li>
				 <li class="divider"></li>
                <li><a href="<?php echo wp_logout_url( get_permalink() ); ?>">Log Out</a></li>
                
              </ul>
            </li>
<?php } ?>
                </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>