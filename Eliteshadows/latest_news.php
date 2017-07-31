<?php
/**
Template name:latest-news
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
    <section class="mid-warper news-page">
     
        <div class="container">
          <div class="inner-container-bg">
		  <?php $args = array('posts_per_page' => -1,'post_type' => array('news'),'post_status'=>'publish','paged' => $paged,'order'=>'desc');$query = new WP_Query ($args);while ( $query->have_posts() ) { $query->the_post();
$post_thumbnail_id_news = get_post_thumbnail_id(get_the_id());
$image_attributes_news = wp_get_attachment_image_src($post_thumbnail_id_news,array(626,552),true);

?>
 <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php the_title();?>" />
  
    <meta property="og:image"         content="<?php echo $image_attributes_news[0]; ?>" />
		  <!-- News Post --->
		  <div class="post-list-bx table table-striped">
		    <div class="row">
			  <div class="col-md-3 col-sm-6 col-xs-12">
			  			   		 <?php if($post_thumbnail_id_news){ ?>
				 <div class="event-img"><a href="<?php echo get_permalink();?>"><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo $image_attributes_news[0];?>"></a></div>	

<?php }else{ ?><div class="event-img"><a href="<?php echo get_permalink();?>"><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo get_template_directory_uri(); ?>/img/imagenotfound.png"></a></div>		
						<?php } ?>
			  
			   		 
			   </div>
			   <div class="col-md-9 col-sm-6 col-xs-12">
			<h4><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h4>
<p><?php  $content= do_shortcode(get_the_content()); $trimmed = wp_trim_words( $content, $num_words = 70, $more = '.......' ); print_r($trimmed);?></p>
			 	
				 <span class="view-mor-btn"> <a href="<?php echo get_permalink();?>" class="common-btn">View More</a> </span>
			 <div class="footer-social">
                  <span class='st_facebook_large' st_image="<?php echo $image_attributes_news[0];?>" st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'  st_via="" ></span>
						<span class='st_twitter_large' st_image="<?php echo $image_attributes_news[0];?>"  st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' st_via=""></span>
						<span class='st_linkedin_large' st_image="<?php echo $image_attributes_news[0];?>"  st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' st_via=""></span>
			</div>
			</div></div></div>
		 <!-- News Post --->
		  <?php } ?>
          </div>
        </div>

    </section>
  </article>
<?php get_footer(); ?>
