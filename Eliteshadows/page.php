<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
  <article>
    <section class="inner-slider">
     <div class="overlap-lcr-sec"><div class="container"> <h1 class="cmn-heading"><?php echo get_the_title();?></h1>
      </div></div>
    </section>
	<?php while ( have_posts() ) : the_post(); ?>
    <section class="mid-warper about-us">
      <div class="abt-us-warper">
      <div class="container">
     <div class="inner-container-bg"><div class="row"> <div class="col-md-12 col-sm-12 col-xs-12">
<?php the_content();?>
	<!-- <div class="ab-content"><p>Under Construction
</p></div>-->

</div>
           </div></div>
        
        
      </div></div>
    </section>
    <?php endwhile; ?>
    
  </article>
	
<?php get_footer(); ?>