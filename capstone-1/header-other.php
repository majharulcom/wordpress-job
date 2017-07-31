<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/other_page.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/other_custom.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/other_bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/other_bootstrap-responsive.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/other_mobile.css" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-noconflict.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/caption.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/template.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/joomfashion.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/grayscale.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrolly.js" type="text/javascript"></script>
  <script type="text/javascript">
jQuery(window).on('load',  function() {
				new JCaption('img.caption');
			});
  </script>
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Roboto|Ubuntu|Ubuntu%20Condensed|Raleway' rel='stylesheet' type='text/css' />

		<style type="text/css">
			h1,h2,h3,h4,h5,h6,.site-title{
				font-family: 'Open Sans', sans-serif;
			}
		</style>
			<style type="text/css">
		body.site
		{
			border-top: 3px solid #08C;
			background-color: #F4F6F7		}
		a
		{
			color: #08C;
		}
		.navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
		.btn-primary
		{
			background: #08C;
		}
		.navbar-inner
		{
			-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
			box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
		}
	</style>
		<!--[if lt IE 9]>
		<script src="/media/jui/js/html5.js"></script>
	<![endif]-->

<script type="text/javascript">
/*jQuery(function() {
    jQuery.scrollingParallax('/para1.png', {
        bgHeight : '3000px',
  bgWidth : '100%',
        staticSpeed : .25,
        staticScrollLimit : false
    });
    jQuery.scrollingParallax('/para2.png', {
        bgHeight : '3000px',
  bgWidth : '100%',
        staticSpeed : .5,
        staticScrollLimit : false
    });
}); */

    jQuery(document).ready(function(){
       jQuery('.parallax').scrolly({bgParallax: true});
    });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46747811-1', 'auto');
  ga('send', 'pageview');

</script>
<?php global $theme_options; global $wp_query;?>
</head>

<body class="site com_content view-article no-layout no-task itemid-167">
	<!-- Body -->
	<div class="body">
            <div class="header">
            <div class="jfx_header">
                <div class="container">
    			<div class="logoform">
                    <div class="row-fluid">
                                                <div class="logo span3">


<div class="custom"  >
	<p>
	<a href="<?php bloginfo('home');?>">&nbsp; <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo_other.png" /></a></p>
</div>

                        </div>
                                                                        <div class="toplinks-box span9">
                                                            <div class="row-fluid">
                                    <div class="span12 jf_topmenu-right">
                                        <div class="pull-right">

<div class="custom jf_top0"  >
	<div class="jf_menu_0">
	<a href="<?php bloginfo('home');?>/capdocs">Capdocs</a></div>
</div>
<div class="custom jf_top1"  >
	<div class="jf_menu_1">
	<a href="<?php bloginfo('home');?>/advisers-home">Advisers / Accountants</a></div>
</div>


<div class="custom jf_top2"  >
	<div class="jf_menu_2">
	<a href="<?php bloginfo('home');?>/capstone/clients-home">Clients / Investors</a></div>
</div>
<ul class="nav menu jf_menu3">
<li class="item-145 active">
<?php
if ( is_user_logged_in() ) { ?>
    <a href="<?php bloginfo('home');?>/adviser-centre">Adviser Centre</a>
<?php } else { ?>
	<a href="<?php bloginfo('home');?>/login/">Login</a>
<?php } ?>
</li>
</ul>

                                        </div>
                                    </div>
                                </div>
                                                                                        <div class="row-fluid">
                                    <div class="span12 jf_mainmenu">
                                        <nav class="navbar navbar-inverse">
                                            <div class="navbar-inner">
                                                <div class="container">
                                                     <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                     </a>
                                                     <a class="brand visible-phone" href="#">Main Menu</a>
													 <?php
														wp_nav_menu( array(
															'menu'              => 'primary',
															'theme_location'    => 'primary',
															'depth'             => 3,
															'container'         => 'div',
															'container_class'   => 'nav-collapse collapse pull-right',
															'container_id'      => 'bs-example-navbar-collapse-1',
															'menu_class'        => 'nav menu',
															'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
															'walker'            => new wp_bootstrap_navwalker())
														);
													?>


                                                </div>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                                                    </div>
                                            </div>
                </div>
                </div>
            </div>
            </div>
