<?php
/**
Template name:login-signup
 */

get_header(); ?>
   <article>
    <section class="inner-slider">
      <div class="overlap-lcr-sec">
        <div class="container">
          <h1 class="cmn-heading"><?php echo get_the_title();?></h1>
        </div>
      </div>
    </section>
    <section class="mid-warper contact-us">
      <div class="contact-us-warper">
        <div class="container">
          <div class="inner-container-bg">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12 ">
                <div class="contact-form dib100">
                  <div class="contat-top-heading">
                    <h3>Login Form</h3>
                  </div>
				  <?php echo do_shortcode('[pie_register_login]');?>
                  
                </div>
				 
				<div class="contact-form dib100">
                  <div class="contat-top-heading">
                    <h3>Or</h3>
                  </div>

				  <?php echo do_shortcode('[wordpress_social_login]');?>
                  
                </div>
			       
                </div>
			          <div class="col-md-6 col-sm-6 col-xs-12 border-left">
                <div class="contact-form dib100">
                  <div class="contat-top-heading">
                    <h3>Registration  Form</h3>
                  </div>
				  <?php echo do_shortcode('[pie_register_form]');?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

    </section>
  </article>
<?php get_footer(); ?>
