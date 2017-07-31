<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
<article>
<section class="inner-slider">
	
     <div class="overlap-lcr-sec"><div class="container"> <h1 class="cmn-heading"><?php _e( 'Nothing Found', 'twentythirteen' ); ?></h1>
      </div></div>
    </section>
<section class="mid-warper about-us">
      <div class="abt-us-warper">
      <div class="container">
    <div class="row" >
<section class="inner-full-width-event-footer  inner-container-bg">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="opening-time">
             
                <div class="ot-table">
                 <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentythirteen' ), admin_url( 'post-new.php' ) ); ?></p>

	<?php elseif ( is_search() ) : ?>

	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'twentythirteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentythirteen' ); ?></p>
	<?php get_search_form(); ?>

	<?php endif; ?>
                </div>
              </div>
            </div>

          </div>
        </section>
   </div>
        
        
      </div></div>
    </section>
</article>