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
 * @package capstone
 */

get_header('blog'); ?>

<div class="blog_loop_con">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if (have_posts()) : ?>

                	<?php while (have_posts()) : the_post(); ?>
                        <div class="content_con_blogs">
                		<div class="col-md-4 th_img_con">
                           <!--img src="<?php //echo get_the_post_thumbnail_url() ?>" alt="image"-->
                		    <img src="<?php echo get_template_directory_uri(); ?>/images/thumb_blog.jpg" alt="image">
                		</div>
                		<div class="col-md-8">
                		    <a href="<?php the_permalink(); ?>" class="blog_loop_title"><?php the_title(); ?></a>
                       <p class="meta_fate_blog"><?php the_date(); ?></p>
                       <p class="loop_blog_content"><?php echo get_the_excerpt(); ?></p>
                       <div class="p_solution_read_more">
                                   <a href="<?php the_permalink(); ?>">Read more</a>
                               </div>
                		</div>

                        </div>
                	<?php endwhile; ?>

                		<?php // Navigation ?>

                	<?php else : ?>

                		<?php // No Posts Found ?>

                <?php endif; ?>

            </div>
            <div class="col-md-4 sidebar_con">
               <h3 class="sidebar_head">Contact Us</h3>
                <?php echo do_shortcode( '[contact-form-7 id="2876" title="Sidebar"]' ); ?>
            </div>
        </div>

    </div>
</div>
<div class="blog_loop_con_pagi">
    <?php wpbeginner_numeric_posts_nav(); ?>
</div>
<?php get_footer(); ?>
