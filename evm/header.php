<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package evm
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
	<div class="header_container">
		 <div class="container">
				<div class="col-md-3">
					<div class="logo_size">
							<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo-3.png"></a>
					</div>
				</div>

				<div class="col-md-9 menu_structure">
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
								<ul class="nav navbar-nav pull-right">
									<li><a href="#">About EVM</a></li>
									<li><a href="#">Products & Services</a></li>
									<li><a href="#">Experience</a></li>
									<li><a href="#">Capacity</a></li>
									<li><a href="#">Contact</a></li>
									<li><a class="number_link" href="#"><span><i class="fa fa-phone" aria-hidden="true"></i></span>0419364699</a></li>
							 </ul>
					</nav>
				</div>

		 </div>
	</div>
