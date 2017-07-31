<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strive_Community
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80238692-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>
<div class="slider_area">
		<div class="slider_con">
			<div class="container">
				<div class="row">
				<div class="col-md-12 menu">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
                <a class="logo" href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri();?>/images/new_logo.png" alt="logo" /></a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<?php
								wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav header_menu',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
								);
								?>
								</nav>
                
				</div>
		</div>
<body <?php body_class(); ?>>
