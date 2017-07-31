<?php
get_header('other'); ?>
<?php global $theme_options ?>
<?php $image = get_field('header_image'); ?>
<?php if($image) : ?><div class="register_head_con register_bg" style="background: url(<?php echo $image['url']; ?>) no-repeat !important; background-size: cover !important; background-position: top center !important;"><?php else : ?> <div class="register_head_con register_bg">	<?php endif; ?>
    <div class="container">
        <div class="banner_text_other">
          <?php $banner_text = get_field('header_large_text'); ?>
          <?php if($banner_text) : ?><h2 class="title_header_register text-center green_text"><?php echo $banner_text; ?></h2><?php else : ?><h2 class="title_header_register text-center green_text">Our Blog</h2><?php endif; ?>
          <?php $banner_secont_text = get_field('header_small_text'); ?>
            <?php if($banner_secont_text) : ?><p class="text-center gray_text register_para"><?php echo $banner_secont_text; ?></span></p><?php else : ?><p class="text-center gray_text register_para">Eos virtute lucilius in, vis cu erant conceptam. Quo ne velit commune verterem, te commodo concludaturque</p><?php endif; ?>
        </div>
    </div></div>

<button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2"><i class="fa fa-bars" aria-hidden="true"></i></button>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <?php get_sidebar(); ?>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="row">
                    <div class="col-lg-12 single_post_con">
                      <?php
                      while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content-single', get_post_format() );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                          //comments_template();
                        endif;

                      endwhile; // End of the loop.
                      ?>
                    </div>
                </div>
            </div>
						<div class="related_posts_con">
							<h4>RELATED POST</h4>
							<?php
									if ( is_single()) {
									$categories = get_the_category();
									if ($categories) {
									foreach ($categories as $category) {
									$cat = $category->cat_ID;
									$args=array(
									'cat' => $cat,
									'order' =>DESC,
									'orderby' => rand,
									'post__not_in' => array($post->ID),
									'posts_per_page'=>2,
									'caller_get_posts'=>1
									);
									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
									while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<div class="col-md-6 rel_sin_p">
										<div class="col-md-4">
											<?php $post_thumbnail_id = get_post_thumbnail_id($post->ID);
							        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>
											<img src="<?php echo $post_thumbnail_url;?>" class="thum_rela" alt="image" />
										</div>
						        <div class="col-md-8 single_post_rel">
											<h2><a href="<?php the_permalink(); ?>" class="re_a"><?php the_title(); ?></a></h2>
										<p><?php the_excerpt(); ?></p>
									<span class="wc-shortcodes-date"><i class="fa fa-calendar date_meta_a" aria-hidden="true"></i><?php the_date(); ?></span>
						        </div>
									</div>
									 <?php
									endwhile;
									}}} wp_reset_query(); }
									?>
						</div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
</div>
<?php
//get_sidebar();
?>
<div class="clear"></div>
<?php get_footer();
