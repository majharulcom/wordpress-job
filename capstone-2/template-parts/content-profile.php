<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */

?>
<?php
  $auth = SwpmAuth::get_instance();
  $setting = SwpmSettings::get_instance();
  $password_reset_url = $setting->get_value('reset-page-url');
  $join_url = $setting->get_value('join-us-page-url');
  ?>

  <?php
    $auth = SwpmAuth::get_instance();
    ?>
<div class="jf_content_main">
                <div class="parallax pr1" data-velocity="-.1"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100"></div>

                 <div class="container">
                    <div class="row-fluid jfx_showcase">
                        			<div class="moduletable">
						<div class="autotitle">
</div>
		</div>

                    </div>
                </div>
    	                       <!--Main Content-->
                <div class="container">
    	            <div class="jfx_main_content">
                        <div class="row-fluid">
							<div id="content" role="main" class="jf_inner_page span8">
								<!-- Begin Content -->
							<?php the_content(); ?>
								<!-- End Content -->
							</div>
							<div id="aside" class="span4">
        					<!-- Begin Right Sidebar -->
							<div class="moduletable-profile">
									</div>
										<div class="moduletable">
                      <?php if(SwpmMemberUtils::is_member_logged_in()) { ?>
                        <ul class="pagenav sidebar_login_links"><li class="logout-links"><a href="<?php bloginfo('home');?>/?swpm-logout=true"><?php echo  SwpmUtils::_('Logout') ?></a></li></ul>
                      <?php }else{ ?>
                        <div class="swpm-login-widget-form">
                    <form id="swpm-login-form" class="form-validate form-horizontal well" name="swpm-login-form" method="post" action="">
                      <div class="swpm-login-form-inner">
                        <div class="swpm-username-input">
                          <input type="text" class="swpm-text-field swpm-username-field" id="swpm_user_name" placeholder="Username" value="" size="25" name="swpm_user_name" />
                        </div>
                        <div class="swpm-password-input">
                          <input type="password" class="swpm-text-field swpm-password-field" id="swpm_password" placeholder="Password" value="" size="25" name="swpm_password" />
                        </div>
                        <div class="swpm-remember-me">
                          <span class="swpm-remember-checkbox"><input type="checkbox" name="rememberme" value="checked='checked'"></span>
                          <span class="swpm-rember-label"> <?php echo SwpmUtils::_('Remember Me') ?></span>
                        </div>
                        <br/>
                        <div class="swpm-login-submit">
                          <input type="submit" class="swpm-login-form-submit" name="swpm-login" value="<?php echo SwpmUtils::_('Login') ?>"/>
                        </div>
                        <div class="swpm-forgot-pass-link">
                          <a id="forgot_pass" class="swpm-login-form-pw-reset-link"  href="<?php echo $password_reset_url; ?>"><?php echo SwpmUtils::_('Forgot Password') ?>?</a>
                        </div>
                        <div class="swpm-login-action-msg">
                          <span class="swpm-login-widget-action-msg"><?php echo $auth->get_message(); ?></span>
                        </div>
                      </div>
                    </form>
                  </div>
                        <?php } ?>
									</div>

        					<!-- End Right Sidebar -->
        				</div>
							<?php //get_sidebar(); ?>
        				        			<!--<div class="container">
                                        	<div class="row-fluid">

                        </div>
                                        </div>	-->
                    </div>
                </div>
    		  </div>
              <!--End main Content-->

               <div class="jf_content_bottom">
                    <div class="container">
                    <div class="row-fluid">
                        			<div class="moduletable jf_products span4">


<div class="custom jf_products span4"  >
	<div class="jf_product">
	<div class="jf_header">
		<h3>
			<a href="<?php bloginfo('home');?>/about-us/" title="About us">About Us</a></h3>
		<div class="jf_date jf_new">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="<?php bloginfo('home');?>/about-us/" title="About us"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/img_product.png" /></a></div>
		<div class="jf_text">
			<p>
				Our Story</p>
		</div>
	</div>
</div>
</div>
		</div>
			<div class="moduletable jf_blog span4">


<div class="custom jf_blog span4"  >
	<div class="jf_blog">
	<div class="jf_header">
		<h3>
			<a href="<?php bloginfo('home');?>/blog/" title="Blog">The Blog</a></h3>
		<div class="jf_date">
			<p>NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="<?php bloginfo('home');?>/blog/" title="Blog"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_blog.png" /></a></div>
		<div class="jf_text">
			<span style="font-size:12px;"><span style="color: rgb(255, 255, 255);">Read our latest posts </span></span><!-- <p>Voluptas sit aspernatur aut odit aut fugit, sed quiconsequuntur magni dolores eos qui ration...</p>--></div>
	</div>
</div>
<div id="ckimgrsz" style="left: 0px; top: 30px;">
	<div class="preview">
		&nbsp;</div>
</div>
</div>
		</div>
			<div class="moduletable jf_Process span4">


<div class="custom jf_Process span4"  >
	<div class="jf_capstone">
	<div class="jf_header">
		<h3>
			<a href="<?php bloginfo('home');?>/contact-us/" title="Contact Us">Contact Us</a></h3>
		<div class="jf_date">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="<?php bloginfo('home');?>/contact-us/" title="Contact Us"><img alt="" class="cke-resize" src="<?php echo get_template_directory_uri(); ?>/images/img_capstone.png" /></a></div>
		<div class="jf_text">
			<p>
				Discover more about Capstone today</p>
		</div>
	</div>
</div>
<div id="ckimgrsz" style="left: 0px; top: 30px;">
	<div class="preview">
		&nbsp;</div>
</div>
</div>
		</div>

                    </div>
                 </div>
                </div>
                        </div>
                         	</div>
