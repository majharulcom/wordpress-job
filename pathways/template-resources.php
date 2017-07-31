<?php 
/*
Template Name: Resources & Articles
*/
get_header(); ?>

<?php get_template_part( 'resources', 'banner' ); ?>

<div id="main-content">
	<div class="container">
		<div style="width: 100%;clear: both;"><?php 

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

		$args = array('post_type' => 'post','category_name'=>'Reflections Blog','paged' => $paged);

		query_posts($args); 
		
            if ( have_posts() ) :
			
wp_dropdown_categories(
array(
	'exclude' => '20,228', //hide resources categories
	'order' => 'ASC'
	 )
); ?>
		</div>


        <div class="resource_post_warp">
 
				<?php		
                while ( have_posts() ) : the_post(); ?>

				<div class="single-post-wrapper">
					<div class="single-post">
						<div class="post-thumbnail">
						
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail( 'latest-post-thumb' ); ?>
								</a>
							<?php endif; ?>

						   <div class="entry-meta">
								<p><strong><?php the_category(', '); ?></strong> <span class="date"><?php the_time('M d, Y') ?></span></p>
						   </div>
						   
						</div>	

						<div class="entry-content-warp">
							<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="entry-content">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>"  class="readmore-btn fright"><?php esc_html_e('Read More', ''); ?></a>
						</div>
					</div>
				</div>

			<?php
				endwhile;
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
		    ?>
	    </div>
		<div class="pagination-area"> 
			<?php 
				if ( function_exists( 'wp_pagenavi' ) )
					wp_pagenavi();
				else
					get_template_part( 'includes/navigation', 'index' ); 
			?>
		</div>
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_template_part( 'blog', 'footer' ); ?>

<?php get_footer(); ?>