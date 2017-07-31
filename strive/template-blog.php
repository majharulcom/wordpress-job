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
Template Name: Blog Page
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
                    <div class="col-lg-12">
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
                </div>
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
