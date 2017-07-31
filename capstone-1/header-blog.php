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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans|Raleway|Roboto" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div class="banner_con_blog">
   <div class="container-fluid header_con">
      <div class="row">
          <div class="col-md-3">
                  <div class="custom"  >
	<p>
	<a href="<?php bloginfo('home');?>">&nbsp; <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo_other.png" /></a></p>
</div>
          </div>
          <div class="col-md-9">
              <div class="apply_and_login pull-right">
                  <a href="#" class="apply_button">Apply Now</a>
                  <a href="#" class="login_button"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </div>
              <div class="clear"></div>
              <div class="menu_phone_num  pull-right">
               <?php
														wp_nav_menu( array(
															'menu'              => 'primary',
															'theme_location'    => 'primary',
															'depth'             => 3,
															'container'         => 'div',
															'container_class'   => 'nav-collapse',
															'container_id'      => 'bs-example-navbar-collapse-1',
															'menu_class'        => 'nav menu',
															'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
															'walker'            => new wp_bootstrap_navwalker())
														);
													?>

													</div>
          </div>
      </div>
   </div>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
           <div class="blog_heading_con">
               <h2 class="blog_heading">Latest News</h2>
            <p class="blog_heading_para">All the latest news and information from Capstone.</p>
           </div>
           </div>
        </div>
    </div>
</div>
