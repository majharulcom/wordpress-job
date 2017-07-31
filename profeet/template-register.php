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
Template Name: Register Page
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


  <div class="container">
    <div class="medium_con">

      <h1 class="regi_h1">What event would you like to attend:</h1>
  <?php
  $params = array('posts_per_page' => -1, 'post_type' => 'product');
  $wc_query = new WP_Query($params);
  ?>
  <?php if ($wc_query->have_posts()) : ?>
  <?php while ($wc_query->have_posts()) :
                  $wc_query->the_post(); ?>

                  <div class="testimonial-register">
                    <h2 class="address_name text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="tes_para_register text-center">
                      <?php echo excerpt(20); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="tes_link">Register!</a>
                    <!--form class="cart" method="post" enctype="multipart/form-data">
                         <input type="hidden" name="add-to-cart" value="<?php //echo esc_attr($product->id); ?>">
                         <button type="submit" class="add_cart_regi_btn"> <?php //echo $product->single_add_to_cart_text(); ?> </button>
                    </form-->
                  </div><!-- End of testimonial -->

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php else:  ?>
  <p>
       <?php _e( 'No Products'); ?>
  </p>
  <?php endif; ?>
    </div>
  </div>



			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-register', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
			?>
      <div class="event_area_invite off_white_background">
      			<div class="container">
      				<h1 class="title_header_subs text-center">Want to access the strive online community?</h1>
      				<a href="/get-access/" class="go_blog" target="_blank">Request an invite</a>
      			</div>
      	</div>
<?php
//get_sidebar();

get_footer();
