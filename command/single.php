<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package command
 */

get_header(); ?>

<div class="p_comd_blog_bckgnd">
		<div class="container_blog">
				<?php while ( have_posts() ) : the_post(); ?>
			 <div class="p_blog_content_main_area">
				<div class="p_blog_feature_image">
					<?php
					$post_thumbnail_id = get_post_thumbnail_id($post->ID);
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo $post_thumbnail_url;?>" alt="image" class="responsive_image"/></a>
				</div>
				<div class="p_blog_content_area">
						<div class="p_blog_title_area">
								<div class="row">
									 <div class="p_blog_main_area">
										<div class="col-md-12">
												<div class="p_blog_left_title">
												<h2><?php the_title(); ?></h2>
												<h3><?php  echo get_the_date(); ?>/ <?php the_author();?></h3>
										</div>
										</div>
										
										</div>
								</div>
						</div>
						<?php the_content(); ?>
<?php // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
				</div>
				</div>

				<?php endwhile; ?>
		</div>
</div>

<?php
//get_sidebar();
get_footer();
