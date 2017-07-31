<?php
/**
Template name:contact-us
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
              <div class="col-md-8 col-sm-9 col-xs-12 col-xs-offset-2">
                <div class="contact-form dib100">
                  <div class="contat-top-heading">
                    <?php $post_id=get_the_id();
$content_post = get_post($post_id);
$content = $content_post->post_content;
 $content = apply_filters('the_content', $content);
//$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?> 
                  </div>
				  <?php echo do_shortcode('[contact-form-7 id="91" title="Contact us Form"]');?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
     
           <?php $Contact_us_map = get_option( 'Contact_us_map', '' );
if($Contact_us_map){
	echo '<div class="get-directions"><div class="location-map"> 
	'.html_entity_decode($Contact_us_map).'</div></div>';
}		   ?>

    </section>
  </article>
<?php get_footer(); ?>
