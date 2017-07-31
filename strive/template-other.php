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
/*
Template Name: Other Page
*/
get_header('other'); ?>
<?php global $theme_options ?>
<?php $image = get_field('header_image'); ?>
<?php if($image) : ?><div class="register_head_con register_bg" style="background: url(<?php echo $image['url']; ?>) no-repeat !important; background-size: cover !important; background-position: top center !important;"><?php else : ?> <div class="register_head_con register_bg">	<?php endif; ?>
    <div class="container">
        <div class="banner_text_other">
          <?php $banner_text = get_field('header_large_text'); ?>
          <?php if($banner_text) : ?><h2 class="title_header_register text-center green_text"><?php echo $banner_text; ?></h2><?php else : ?><h2 class="title_header_register text-center green_text">Register</h2><?php endif; ?>
          <?php $banner_secont_text = get_field('header_small_text'); ?>
            <?php if($banner_secont_text) : ?><p class="text-center gray_text register_para"><?php echo $banner_secont_text; ?></span></p><?php else : ?><p class="text-center gray_text register_para">Eos virtute lucilius in, vis cu erant conceptam. Quo ne velit commune verterem, te commodo concludaturque</p><?php endif; ?>
        </div>
    </div></div>

	<div class="bread_cram_con">
		<div class="bread_cram">
			<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
		</div>
	</div>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-contact', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>

<?php
//get_sidebar();
get_footer();
