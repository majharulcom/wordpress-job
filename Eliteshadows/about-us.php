<?php
/**
Template name:about-us
 */

get_header(); ?>
  <article>
    <section class="inner-slider">
     <div class="overlap-lcr-sec"><div class="container"> <h1 class="cmn-heading"><?php the_title();?></h1>
      </div></div>
    </section>
    <section class="mid-warper about-us">
      <div class="abt-us-warper">
      <div class="container">
     <div class="top-abt-content"><div class="row"> <div class="col-md-12 col-sm-12 col-xs-12"><div class="ab-content"> <?php  $post_id=get_the_id();
$content_post = get_post($post_id);
$content = $content_post->post_content;
 $content = apply_filters('the_content', $content);
//$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?> </div></div>
           <div class="col-md-12 col-sm-12 col-xs-12">
           <?php 
$multiple_images=explode(",",str_replace(array('"', "[", "]"),  array("", "", ""),get_post_meta(get_the_id(),'multiple_images',true)));	

?>
           <div class="abut-images">
         <div id="about_us" class="owl-carousel about_us">
		 <?php foreach($multiple_images as $key=>$val){

$image_attributes_testimonial = wp_get_attachment_image_src($val,'full',true);
echo '<div class="item">
                      <figure><img src="'.$image_attributes_testimonial[0].'" alt=""/> </figure>
                    </div>';
}?>
                    
                    
                  </div>
           </div>
           
           </div></div></div>
        
        
      </div></div>
    </section>
    
    
  </article>
<?php get_footer(); ?>
