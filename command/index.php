<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package command
 */

get_header(); ?>

<div class=".p_website_area">
		<div class="container">
			 <div class="p_online_simple_area_blogs">
				<div id="ms-container" class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6 ms-item">
							<div class="p_comd_blog_bckgnd">
								 <div class="container_blog">
										<div class="p_blog_content_main_area_blog">
										 <div class="p_blog_feature_image">
											 <?php
							         $post_thumbnail_id = get_post_thumbnail_id($post->ID);
							         $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>
							         <a href="<?php the_permalink(); ?>"><img src="<?php echo $post_thumbnail_url;?>" alt="image" class="responsive_image"/></a>
										 </div>
										 <div class="p_blog_content_area_blogs">
												 <div class="p_blog_title_area">
																<div class="p_blog_main_area">
																		 <div class="p_blog_left_title">
																		 <h2 class="p_blog_left_title_h2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
																		 <h3 class="p_blog_left_title_h3"><?php  echo get_the_date(); ?>/ <?php the_author();?></h3>
																 </div>
																 </div>
												 </div>

												 <p><?php echo get_the_excerpt(); ?></p>
										 </div>
										 </div>
								 </div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				</div>
		</div>
</div>

<?php
//get_sidebar();
get_footer();
