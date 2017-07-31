<?php
/*
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package command
 Template Name: Host Page
 */

get_header(); ?>
<div class="p_banner_bknd">
           <div class="container">
               <div class="p_banner_area p_banner_area_track">
                   <div class="row">
                       <div class="col-md-6 col-sm-6">
                           <div class="p_banner_title">
                               <p>Here at <span class="p_banner_content"> Command Centre</span> we want everyone to feel like they’re  <span class="p_banner_content">in control of their website.</span></p>

                               <!--ul class="banner_button">
                                   <li><a href="#" class="free_button_red">FREE TRIAL</a></li>
                                   <li class="white"><a href="#" class="free_button_tour">TAKE A TOUR</a></li>
                               </ul-->
                           </div>
                       </div>
                       <div class="col-md-6 col-sm-6">
                           <div class="p_banner_img p_banner_img_track">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/host_banner.png" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
	<div class="p_cloud_hosting_bkgnd">
	    <div class="container">
	        <div class="p_cloud_area">
	            <h2>Cloud Hosting Made Easy With Command Centre</h2>
	            <p>Command Centre makes it even easier for everyone when it comes to all their cloud hosting needs. At Command Centre we offer 100% cloud hosting through popular cloud computing platform AWS. To minimize the impact of outages while ensuring the overall system is robust and reliable, AWS is diversified into regions with central hubs right across the world and in Australia. All Command Centre servers ensure reliability all day, every day for our clients right across the world.</p>
	        </div>
	       <div class="p_checkmart">
	              <img src="<?php echo get_template_directory_uri(); ?>/images/Forma-4.png" alt="">

	       </div>

	    </div>

	</div><!-- #end of cloud hosting -->

	<div class="p_offer_area_bckgnd">
	    <div class="container">
	        <div class="p_offer_area">
	            <div class="p_offer_heading">
	            <h2>What We Can Offer You</h2>
	        </div>
	        <div class="p_offer_dash_area">


	        </div>
	        <div class="p_offer_area_single">
	        <div class="row">

	                <div class="col-md-6">
	                <div class="p_offer_area_left">
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/Command-center-Host-page.jpg" alt="">
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="p_offer_area_right">
	                    <h2>Domain Management</h2>
	                    <p>We manage domains and include one domain registration per plan. The major domains that are included in our hosting plans are registered to .com com.au, net.au, .net, plus many more.</p>
	                </div>
	            </div>
	            </div>
	        </div>

	        <div class="p_offer_area_single">
	        <div class="row">

	                <div class="col-md-6">
	                   <div class="p_offer_area_right_m">
	                    <h2>Email Coverage</h2>
	                    <p>Our hosting plans also offer coverage of emails with unlimited hosting and POP email accounts. If you prefer Google apps we can also set this up as well for your convenience. For those who are already with another hosting company, we offer free migration from your old existing host company to Command Centre with ease, saving you both time and money.</p>
	                </div>
	            </div>
	            <div class="col-md-6">


	                <div class="p_offer_area_left">
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/Command-center-Host-page2.jpg" alt="">
	                </div>
	            </div>
	            </div>
	        </div>



	        <div class="p_offer_area_single_last">
	        <div class="row">

	                <div class="col-md-6">
	                <div class="p_offer_area_left">
	                    <img src="<?php echo get_template_directory_uri(); ?>/images/Command-center-Host-page3.jpg" alt="">
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="p_offer_area_right">
	                    <h2>Unlimited Disk Space</h2>
	                    <p>The unlimited disk space provides more flexibility to expand your websiteas needed. With this unlimited disk space you will also receive mor storage capacity, more bandwidth, and overall more computational power when you need it most.</p>
	                </div>
	            </div>
	            </div>
	        </div>


	        </div>





	    </div>
	</div><!-- #end of offer area -->

	  <div class="p_access_bkgnd">
	    <div class="container">
	        <div class="p_access_area">
	            <h2>Full Access To Your <span class="access_heading_color">CMS</span> </h2>
	            <p>Some hosting plans are limited to the content management system that you can use as the core of your website. This can be a problem. With Command Centre you can use any CMS without the stress of having to redesign or change your website. This saves both time and money.</p>
	        </div>


	    </div>

	</div><!-- #end of Access -->
  <div class="p_track_bkgnd p_track_bkgnd_subs_form">
      <div class="container">
          <div class="p_track_area p_track_area_subs_f">
              <div class="row">
                  <h2 class="front_subs_a_title">Try Us Free For 30 Days</h2>
                  <form class="navbar-form navbar-left form_con form_subs_free">
                                   <div class="form-group">
                                       <input type="text" class="form-control input_cn" placeholder="Enter your email">
                                   </div>
                                   <button type="submit" class="btn btn-default input_get">Get Started</button>
                  </form>
                  <ul class="front_warn">
                    <li> Easy setup <i class="fa fa-circle blue_circle" aria-hidden="true"></i></li>
                    <li>Try any product free for 30 days <i class="fa fa-circle blue_circle" aria-hidden="true"></i></li>
                    <li>Cancel at any time</li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
<?php

get_footer();
