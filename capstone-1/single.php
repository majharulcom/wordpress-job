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

get_header('single'); ?>

<div class="blog_loop_con">
    <div class="container">
        <div class="row">
            <div class="col-md-8 sin_con">
                <?php wp_reset_query(); if (have_posts()) : ?>

                	<?php while (have_posts()) : the_post(); ?>
                        <div class="content_con_blogs">

                		<div class="col-md-12">

                       <?php the_content(); ?>
                		</div>

                        </div>
                	<?php endwhile; ?>

                		<?php // Navigation ?>

                	<?php else : ?>

                		<?php // No Posts Found ?>

                <?php endif; wp_reset_query(); ?>

            </div>
            <div class="col-md-4 sidebar_con">
               <h3 class="sidebar_head">Contact Us</h3>
                <?php echo do_shortcode( '[contact-form-7 id="2876" title="Sidebar"]' ); ?>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
