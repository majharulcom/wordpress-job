<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pss
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container_hed_top">
			<div class="container">
					<div class="row">
							<div class="col-md-6 head_left">
									<div class="logo">
											<img src="<?php echo get_template_directory_uri(); ?>/images/Layer-7.png" alt="logo" />
									</div>
							</div>
							<div class="col-md-6 head_right">
									<div class="head_r_con pull-right">
											<p class=""><span class="right_s_text"> We Can Help. Call Us Today!</span><span class="phone_number">1300 307 188</span>
													<span class="right_email"><i class="fa fa-envelope em_icon" aria-hidden="true"></i>mkilley@optusnet.com.au</span></p>
									</div>
							</div>
					</div>
			</div>
	</div>
	<!-- End of container_hed_top -->
	<div class="menu_con">
			<div class="container">
					<nav class="navbar navbar-default menu_list">
							<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<ul class="nav navbar-nav">
									<li><a href="#" class="active">HOME </a></li>
									<li><a href="#">ABOUT US </a></li>
									<li><a href="#"> OUR TEAM</a></li>
									<li><a href="#">WHAT WE DO</a></li>
									<li><a href="#">LOCATIONS</a></li>
									<li><a href="#">BLOG</a></li>
									<li><a href="#">FAQs</a></li>
									<li><a href="#">CONTACT US</a></li>
							</ul>
					</nav>
			</div>
	</div>
	<!-- End of menu -->
