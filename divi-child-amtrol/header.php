<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>


	<?php

    global $wpdb;
    global $err;
    global $fmodel;
    $err = NULL;

    if (is_page_template('therm-res-sizing.php')) {
    if(!empty($_POST['submit_btn'])) {
    $prow = $_POST;
    if($_POST['wheatsize'] && $_POST['tmpset'] && $_POST['citypress']) {

      $sql = $wpdb->get_row("SELECT * FROM sizing_therm_res WHERE temp = '".addslashes($_POST['tmpset'])."' AND size = '".addslashes($_POST['wheatsize'])."' AND pressure = '".addslashes($_POST['citypress'])."'");


      if($sql) {
        //$row = $sql->fetchRow();
        $fmodel = $sql->model;
      } else {
        $fmodel = "No models available";
      }

    } else {
      $err = "All fields are required";
    }

        }
      }

      elseif(is_page_template('therm-com-sizing.php')) {

  			$err = "";

  		if(!empty($_POST['submit_btn'])) {

  				$prow = $_POST;
  				if($_POST['waterheattmp'] && $_POST['reliefpress'] && $_POST['supplypress'] && $_POST['domhotwater']) {

  					if($_POST['domhotwater'] < 10 || $_POST['domhotwater'] > 10000) { $err .= "Domestic Hot Water Volume must be between 10 - 10,000 gallons<br>"; }

  					if(!$err) {

  						$tablea = array('100' => '0.0062','120' => '0.0100','130' => '0.0124','140' => '0.0150','150' => '0.0179','160' => '0.0209','170' => '0.0242','180' => '0.0276');

  						$wtr_heat = $_POST['waterheattmp'];

  						$exp_factor = $tablea[$wtr_heat];
  						$exp_factor_form = $_POST['domhotwater'] * $exp_factor;

  						$sql = $wpdb->get_row("SELECT dpf FROM sizing_therm_com_tableb WHERE reliefp = '".addslashes($_POST['reliefpress'])."' AND supplyp = '".addslashes($_POST['supplypress'])."'");


  						if($sql) {
  							//$row = $res->fetchRow();
  							$dpf = $sql->dpf;
  						}
  						$size = round($exp_factor_form * $dpf);

  						#find models

  						$sqln = $wpdb->get_results("SELECT * FROM sizing_therm_com WHERE min <= '".$size."' AND max >= '".$size."'");



  						$found_array = array();
  						if($sqln) {
                foreach ($sqln as $row) {
                  $series = $row->series;
  								$found_array[$series] = $row;
                }
  						}


  						if(count($found_array)) {
  							$fmodel = $found_array;
  						}

  					} else {
  						$err = $err;
  					}



  				} else {
  					$err = "All fields are required";
  				}


  			}


  		} elseif(is_page_template('extrol-res-sizing.php')) {
  			$err = "";

  			if(!empty($_POST['submit_btn'])) {
  				$prow = $_POST;
  				if($_POST['boiler'] && $_POST['radtype']) {

  					$sql = $wpdb->get_row("SELECT * FROM sizing_extrol_res WHERE boiler = '".addslashes($_POST['boiler'])."' LIMIT 1");


  					if($sql) {
  						$row = $sql;
  						if($_POST['radtype'] == "baseboard") {
  							$found_model = $row->baseboard;
  						} elseif($_POST['radtype'] == "panels") {
  							$found_model = $row->panels;
  						} elseif($_POST['radtype'] == "unitheater") {
  							$found_model = $row->unitheater;
  						} elseif($_POST['radtype'] == "radiator") {
  							$found_model = $row->radiator;
  						}

  						$sucesss = 1;
  						$fmodel = $found_model;
  					}


  				} else {
  					$err = "All fields are required";
  				}

  			}


  		} elseif(is_page_template('extrol-com-sizing.php')) {

  			$err = "";

  			if(!empty($_POST['submit_btn'])) {

  				$prow = $_POST;
  				if($_POST['totsysvol'] && $_POST['min_temp'] && $_POST['max_temp'] && $_POST['antifreez'] != "" && $_POST['min_press'] && $_POST['max_press']) {

  					if($_POST['totsysvol'] < 10 || $_POST['totsysvol'] > 20000) { $err .= "System Water Volume must be between 10 - 20,000 gallons<br>"; }
  					if($_POST['min_press'] < 5 || $_POST['min_press'] > 200) { $err .= "Minimum Operating Pressure must be between 5 - 200 gallons<br>"; }
  					if($_POST['max_press'] < 10 || $_POST['max_press'] > 300) { $err .= "Maximum Operating Pressure must be between 10 - 300 gallons<br>"; }
  					if($_POST['max_press'] < $_POST['min_press']) { $err .= "Maximum Operating Pressure must be greater than Minimum<br>"; }

  					if(!$err) {
  						$tableb = array('0' => '1.0', '25' => '1.6', '50' => '2.3');

  						$sql = $wpdb->get_row("SELECT * FROM sizing_extrol_tbla WHERE min = '".addslashes($_POST['min_temp'])."' AND max = '".addslashes($_POST['max_temp'])."'");


  						$exp = 0;
  						if($sql) {
  							$row = $sql;
  							$exp = $row->exp;
  						}
  						$tot_exp = $_POST['totsysvol'] * $exp;
  						$antif = $_POST['antifreez'];
  						$gy_multi = $tableb[$antif];
  						$tot_exp_ani = $tot_exp * $gy_multi;
  						$accpt_factor = 1-(($_POST['min_press'] +14.7)/($_POST['max_press'] +14.7));

  						$size = round($tot_exp_ani / round($accpt_factor, 4));

  						#find models

  						$sqln = $wpdb->get_results("SELECT * FROM sizing_extrol_model WHERE min <= '".$size."' AND max >= '".$size."'");

              $found_array = array();
  						if($sqln) {
                foreach ($sqln as $row) {
                  $series = $row->series;
  								$found_array[$series] = $row;
                }
  						}

  						if(count($found_array)) {
  							$fmodel = $found_array;
  						}
  					} else {
  						$err = $err;
  					}

  				} else {
  					$err = "All fields are required";
  				}

  			}



  		} else {

          global $found_array;
          global $found_model;

  			if(!empty($_POST['submit_btn'])) {



  				$prow = $_POST;

  				if($_POST['frate'] && $_POST['pruntime'] && $_POST['cutin'] && $_POST['cutout']) {

  					#verify numbers
  					$err = "";
  					if($_POST['prodseries'] == "residential") {

  						if($_POST['frate'] < 1 || $_POST['frate'] > 30) { $err .= "Flow rate must be between 1 - 30<br>"; }
  						if($_POST['pruntime'] < 1 || $_POST['pruntime'] > 4) { $err .= "Pump runtime must be between 1 - 4<br>"; }
  						if($_POST['cutin'] < 20 || $_POST['cutin'] > 120) { $err .= "Cut in must be between 20 - 120<br>"; }
  						if($_POST['cutout'] < 21 || $_POST['cutout'] > 125) { $err .= "Cut out must be between 21 - 125<br>"; }
  						if($_POST['cutout'] < $_POST['cutin']) { $err .= "Cut-Out pressure must be greater than Cut-In<br>"; }

  					} else {

  						if($_POST['frate'] < 1 || $_POST['frate'] > 250) { $err .= "Flow rate must be between 1 - 250<br>"; }
  						if($_POST['pruntime'] < 1 || $_POST['pruntime'] > 4) { $err .= "Pump runtime must be between 1 - 4<br>"; }
  						if($_POST['cutin'] < 20 || $_POST['cutin'] > 245) { $err .= "Cut in must be between 20 - 245<br>"; }
  						if($_POST['cutout'] < 21 || $_POST['cutout'] > 250) { $err .= "Cut out must be between 21 - 250<br>"; }
  						if($_POST['cutout'] < $_POST['cutin']) { $err .= "Cut-Out pressure must be greater than Cut-In<br>"; }

  					}


  					if(!$err) {

  						$drawdown = $_POST['frate'] * $_POST['pruntime'];
  						$accept_factor = 1 - (($_POST['cutin'] + 14.7)/($_POST['cutout'] + 14.7));
  						$vol = round($drawdown / $accept_factor);

  						if($_POST['prodseries'] == "residential") {

  							if($vol < 130) {

  								$sql = $wpdb->get_results("SELECT * FROM sizing_welltanks WHERE series = 'residential' AND min <= ".$vol." AND max >= ".$vol."");


  								$found_array = array();
  								if($sql) {
  									foreach ($sql as $row) {
  										array_push($found_array, $row);
  									}
  								}
  								$r = "success";

  							} elseif($vol > 130) {
  								$r = "Select multiple tanks with a total volume of at least ".$vol;
  							} else {
  								$r = "error";
  							}


  						} else {

  							if($vol < 581) {

  								$sqln = $wpdb->get_results("SELECT * FROM sizing_welltanks WHERE series <> 'residential' AND min <= '".$vol."' AND max >= '".$vol."'");


  								$found_array = array();
                  if($sqln) {
                    foreach ($sqln as $row) {
                      $series = $row->series;
      								$found_array[$series] = $row;
                    }
      						}

  								$r = "success";
  							} elseif($vol > 581) {
  								$r = "Select multiple tanks with a total volume of at least ".$vol;
  							} else {
  								$r = "error";
  							}



  						}

  						$found_model = $r;
  						if($found_array) {
  							$found_array = $found_array;
  						}



  					} else {
  						$err = $err;
  					}

  				} else {
  					$err = "All fields are required";
  				}


  	}



  }
       ?>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page-container">
<?php
	if ( is_page_template( 'page-template-blank.php' ) ) {
		return;
	}

	$et_secondary_nav_items = et_divi_get_top_nav_items();

	$et_phone_number = $et_secondary_nav_items->phone_number;

	$et_email = $et_secondary_nav_items->email;

	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;

	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;

	$et_slide_header = 'slide' === et_get_option( 'header_style', 'left' ) || 'fullscreen' === et_get_option( 'header_style', 'left' ) ? true : false;
?>

	<?php if ( $et_top_info_defined && ! $et_slide_header || is_customize_preview() ) : ?>

	<?php endif; // true ==== $et_top_info_defined ?>

	<?php if ( $et_slide_header || is_customize_preview() ) : ?>
		<div class="et_slide_in_menu_container">
			<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) || is_customize_preview() ) { ?>
				<span class="mobile_menu_bar et_toggle_fullscreen_menu"></span>
			<?php } ?>

			<?php
				if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
					<div class="et_slide_menu_top">

					<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
						<div class="et_pb_top_menu_inner">
					<?php } ?>
			<?php }

				if ( true === $show_header_social_icons ) {
					get_template_part( 'includes/social_icons', 'header' );
				}

				et_show_cart_total();
			?>
			<?php if ( false !== et_get_option( 'show_search_icon', true ) || is_customize_preview() ) : ?>
				<?php if ( 'fullscreen' !== et_get_option( 'header_style', 'left' ) ) { ?>
					<div class="clear"></div>
				<?php } ?>
				<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);
					?>
					<button type="submit" id="searchsubmit_header"></button>
				</form>
			<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>

			<?php if ( $et_contact_info_defined ) : ?>

				<div id="et-info">
				<?php if ( '' !== ( $et_phone_number = et_get_option( 'phone_number' ) ) ) : ?>
					<span id="et-info-phone"><?php echo et_sanitize_html_input_text( $et_phone_number ); ?></span>
				<?php endif; ?>

				<?php if ( '' !== ( $et_email = et_get_option( 'header_email' ) ) ) : ?>
					<a href="<?php echo esc_attr( 'mailto:' . $et_email ); ?>"><span id="et-info-email"><?php echo esc_html( $et_email ); ?></span></a>
				<?php endif; ?>
				</div> <!-- #et-info -->

			<?php endif; // true === $et_contact_info_defined ?>
			<?php if ( $et_contact_info_defined || true === $show_header_social_icons || false !== et_get_option( 'show_search_icon', true ) || class_exists( 'woocommerce' ) || is_customize_preview() ) { ?>
				<?php if ( 'fullscreen' === et_get_option( 'header_style', 'left' ) ) { ?>
					</div> <!-- .et_pb_top_menu_inner -->
				<?php } ?>

				</div> <!-- .et_slide_menu_top -->
			<?php } ?>

			<div class="et_pb_fullscreen_nav_container">
				<?php
					$slide_nav = '';
					$slide_menu_class = 'et_mobile_menu';

					$slide_nav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
					$slide_nav .= wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'echo' => false, 'items_wrap' => '%3$s' ) );
				?>

				<ul id="mobile_menu_slide" class="<?php echo esc_attr( $slide_menu_class ); ?>">

				<?php
					if ( '' == $slide_nav ) :
				?>
						<?php if ( 'on' == et_get_option( 'divi_home_link' ) ) { ?>
							<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
						<?php }; ?>

						<?php show_page_menu( $slide_menu_class, false, false ); ?>
						<?php show_categories_menu( $slide_menu_class, false ); ?>
				<?php
					else :
						echo( $slide_nav );
					endif;
				?>

				</ul>
			</div>
		</div>
	<?php endif; // true ==== $et_slide_header ?>

		<header id="main-header" data-height-onload="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>">


      <div id="top-headers" class="">
              <div class="container clearfix">


                <div id="et-secondary-menu">
                  <ul class="et-social-icons">
                  	<li class="et-social-icon et-social-facebook">
                  		<a href="https://www.facebook.com/pages/Amtrol/137755706291998" class="icon" target="_blank">
                  			<span>Facebook</span>
                  		</a>
                  	</li>
                  	<li class="et-social-icon et-social-twitter">
                  		<a href="https://twitter.com/amtroltankstour" class="icon" target="_blank">
                  			<span>Twitter</span>
                  		</a>
                  	</li>
                  	<li class="et-social-icon et-social-youtube">
                  		<a href="https://www.youtube.com/user/AmtrolUSA" class="icon" target="_blank">
                  	<span>Youtube</span>
                  		</a>
                  	</li>
                  <li class="et-social-icon et-social-linkedin">
                  		<a href="https://www.linkedin.com/company-beta/79816/" class="icon" target="_blank">
                  	<span>Linkedin</span>
                  		</a>
                  	</li>
										<?php if ( ( false !== et_get_option( 'show_search_icon', true ) && ! $et_slide_header ) || is_customize_preview() ) : ?>
										<div id="et_top_search">
											<span id="et_search_icon"></span>
										</div>
										<?php endif; // true === et_get_option( 'show_search_icon', false ) ?>
                  </ul>
				  
  <ul id="et-secondary-nav" class="menu">
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a href="http://amtrol.wpengine.com/support/">Support</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-127"><a href="http://amtrol.wpengine.com/literature/">Literature</a></li>
  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-126"><a href="http://amtrol.wpengine.com/rep-toolbox/">Sales Login</a></li>
  </ul>


		</div> <!-- #et-secondary-menu -->

              </div> <!-- .container -->
              <!-- <span id="triangle-topright"></span> -->
            </div>



			<div class="container clearfix et_menu_container">
			<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && '' != $user_logo
					? $user_logo
					: $template_directory_uri . '/images/logo.png';
			?>
				<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" data-height-percentage="<?php echo esc_attr( et_get_option( 'logo_height', '54' ) ); ?>" />
					</a>
				</div>
				<div id="et-top-navigation" data-height="<?php echo esc_attr( et_get_option( 'menu_height', '66' ) ); ?>" data-fixed-height="<?php echo esc_attr( et_get_option( 'minimized_menu_height', '40' ) ); ?>">
					<?php if ( ! $et_slide_header || is_customize_preview() ) : ?>
						<nav id="top-menu-nav">
						<?php
							$menuClass = 'nav';
							if ( 'on' == et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
							$primaryNav = '';

							$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );

							if ( '' == $primaryNav ) :
						?>
							<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
								<?php if ( 'on' == et_get_option( 'divi_home_link' ) ) { ?>
									<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
								<?php }; ?>

								<?php show_page_menu( $menuClass, false, false ); ?>
								<?php show_categories_menu( $menuClass, false ); ?>
							</ul>
						<?php
							else :
								echo( $primaryNav );
							endif;
						?>
						</nav>
					<?php endif; ?>

					<?php
					if ( ! $et_top_info_defined && ( ! $et_slide_header || is_customize_preview() ) ) {
						et_show_cart_total( array(
							'no_text' => true,
						) );
					}
					?>

					<?php if ( $et_slide_header || is_customize_preview() ) : ?>
						<span class="mobile_menu_bar et_pb_header_toggle et_toggle_<?php echo esc_attr( et_get_option( 'header_style', 'left' ) ); ?>_menu"></span>
					<?php endif; ?>



					<?php do_action( 'et_header_top' ); ?>
				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php
						printf( '<input type="search" class="et-search-field" placeholder="%1$s" value="%2$s" name="s" title="%3$s" />',
							esc_attr__( 'Search &hellip;', 'Divi' ),
							get_search_query(),
							esc_attr__( 'Search for:', 'Divi' )
						);
					?>
					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->

		<div id="et-main-area">
