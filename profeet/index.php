<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strive_Community
 */
get_header('other'); ?>
<div class="default_con">
	<h1 class="title_header text-center green_text">Welcome to the Strive Blog</h1>
	<p class="part_4_para_blog text-center">Here we will be covering a whole range of topics from tips for practice owners, to methods used to acquire new clients, as well as discussing technology and trends that impact our industry.</p>
<div class="part4_divider"></div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>
</div>
<?php
//get_sidebar();
get_footer();
