<?php 
get_header(); ?>
<div id="main-content">
	<div class="container">
 
		<?php 
                while ( have_posts() ) : the_post(); 
				
				?>

				<div class="single-post-wrapper">

	                <div id="post-<?php the_ID(); ?>" <?php post_class('single-post '); ?>>
	
						<div class="post-thumbnail">
						
							<?php if ( has_post_thumbnail() ) : ?>

									<?php the_post_thumbnail( 'blog-full' ); ?>

							<?php endif; ?>

						   <div class="entry-meta">
								<p><strong><?php the_category(', '); ?></strong> <span class="date"><?php the_time('M d, Y') ?></span></p>
						   </div>
						   
						</div>	

						<h4 class="entry-title"><?php the_title(); ?></h4>
						
						<div class="entry-content">
						
							<?php the_content(); ?>
							
						</div>

					</div>

				</div>

			<?php
				endwhile;
		    ?>

	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_template_part( 'blog', 'footer' ); ?>

<?php get_footer(); ?>