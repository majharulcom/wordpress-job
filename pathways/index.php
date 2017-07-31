<?php get_header(); ?>

<?php get_template_part( 'blog', 'banner' ); ?>

<div id="main-content">
	<div class="container">
        <div class="blog-post-wrap">

		<?php $featured_post = new WP_Query( 'category_name=Featured&posts_per_page=1' ); ?>				
		<?php while ( $featured_post->have_posts() ) : $featured_post->the_post(); ?>
		<div class="single-post-wrapper width-2">
		    <div id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
		
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'featured-thumb'); ?>
							</a>
						   <div class="entry-meta">
								<p><strong><?php the_category(', '); ?></strong> <span class="date"><?php the_time('M d, Y') ?></span></p>
						   </div>
					</div>	
				<?php endif; ?>
			
				<div class="entry-content-warp">
					<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div>
					<a href="<?php the_permalink(); ?>"  class="readmore-btn fright"><?php esc_html_e('Read More', ''); ?></a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>    
		<?php wp_reset_query(); ?> 
		

		<?php $about_post = new WP_Query( 'category_name=About&posts_per_page=1' ); ?>				
		<?php while ( $about_post->have_posts() ) : $about_post->the_post(); ?>
			<div class="single-post-wrapper">
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
			        <div class="about-post">
						<h4 class="entry-title"><?php the_title(); ?></h4>
						<?php if ( has_post_thumbnail() ) : ?>
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'about-thumb'); ?>
							</a>
						</div>	
						<?php endif; ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
					</div>
					
					<div class="posts-socials"> 
						<?php	get_template_part( 'includes/social_icons', 'footer' ); ?>
					</div>
					
				</div>
			</div>
		<?php endwhile; ?>    
		<?php wp_reset_query(); ?> 
		
		
		
		<?php $args = array( 
			'category__not_in' => 10,
			'category__in' => 1 
		);
		$the_query = new WP_Query( $args ); ?>
		<?php 
		if ( $the_query->have_posts()  ) : ?>
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
				<?php $post_format = et_pb_post_format(); ?>
				<div class="grid-sizer"></div>
				<div class="single-post-wrapper">
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
						<div class="post-thumbnail">
							<?php
								$thumb = '';
								$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );
								$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
								$classtext = 'et_pb_post_main_image';
								$titletext = get_the_title();
								$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
								$thumb = $thumbnail["thumb"];

								et_divi_post_format_content();

								if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) {
									if ( 'video' === $post_format && false !== ( $first_video = et_get_first_video() ) ) :
										printf(
											'<div class="et_main_video_container">
												%1$s
											</div>',
											$first_video
										);
									elseif ( ! in_array( $post_format, array( 'gallery' ) ) && 'on' === et_get_option( 'divi_thumbnails_index', 'on' ) && '' !== $thumb ) : ?>
										<a href="<?php the_permalink(); ?>">
											<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
										</a>
								<?php
									elseif ( 'gallery' === $post_format ) :
										et_pb_gallery_images();
									endif;
								} ?>

							   <div class="entry-meta">
									<p><strong><?php the_category(', '); ?></strong> <span class="date"><?php the_time('M d, Y') ?></span></p>
							   </div>
						</div>		
						<div class="entry-content-warp">

							<?php if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) : ?>
							
								<?php if ( ! in_array( $post_format, array( 'link', 'audio' ) ) ) : ?>
									<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php endif; ?>

								<div class="entry-content">
									<?php the_excerpt(); ?>
								</div>
								
								<a href="<?php the_permalink(); ?>"  class="readmore-btn fright"><?php esc_html_e('Read More', ''); ?></a>
								
							<?php endif; ?>

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