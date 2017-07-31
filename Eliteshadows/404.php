<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
   <article>
    <section class="inner-slider">
      <div class="overlap-lcr-sec">
        <div class="container">
          <h1 class="cmn-heading"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
        </div>
      </div>
    </section>
	    <section class="mid-warper news-page">
     
        <div class="container">
          <div class="inner-container-bg">
		 
		  <!-- News Post --->
		  <div class="post-list-bx table table-striped">
		    <div class="row">
			 <h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
		</div></div>

          </div>
        </div>

    </section>
  </article>
	

<?php get_footer(); ?>