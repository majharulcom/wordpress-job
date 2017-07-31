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

<?php wp_head(); ?>
</head>
<div class="off_white_background">
			<div class="container">
				<div class="row">
				<div class="col-md-2">
					<a class="logo" href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo" /></a>
				</div>
				<div class="col-md-10 menu">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
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
								'menu_class'        => 'nav navbar-nav header_menu pull-right',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
								);
								?>
								</nav>
				</div>
		</div>

<body <?php body_class(); ?>>
