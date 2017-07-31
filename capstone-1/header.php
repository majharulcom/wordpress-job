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
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Raleway|Roboto" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

<div class="banner_con">
   <div class="container-fluid header_con">
     <div class="container-custom-header">
      <div class="row">
          <div class="col-md-3">
                  <div class="custom"  >
	<p>
	<a href="<?php bloginfo('home');?>">&nbsp; <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/logo_other.png" /></a></p>
</div>
          </div>
          <div class="col-md-9">
              <div class="apply_and_login pull-right">
                  <a href="/apply/apply_now/" class="apply_button">Apply Now</a>
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
   </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <h2 class="banner_heading">AUSTRALIA’S LEADING
INDEPENDENTLY OWNED LICENSEE.</h2>
           <?php echo do_shortcode( '[contact-form-7 id="2875" title="Homepage"]' ); ?>
            </div>
        </div>
    </div>
</div>
