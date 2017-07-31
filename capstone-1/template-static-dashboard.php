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
/*
Template Name: Adviser Centre Static Inner Page
*/
get_header('dashboard'); ?>

<div class="blog_loop_con">
    <div class="container">
        <div class="row">
           <?php global $theme_options ?>
                    <?php $image_title = get_field('title_image_icon'); ?>
            <div class="col-md-12"><h2 class="page_h_title"><?php if($image_title) : ?><img src="<?php echo $image_title['url']; ?>" alt=""  class="page_h_t_img"><?php else : ?><img src="<?php echo get_template_directory_uri(); ?>/images/market_image.png" alt="" class="page_h_t_img"><?php endif; ?>
                <?php
                            while ( have_posts() ) : the_post();
                                the_title();
                            endwhile;
                        ?>
            </h2></div>
            <div class="clear"></div>
             <div class="col-md-12"><?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?></div>
          <div class="content_con_blogs">
            <div class="col-md-9 other_page_paddingless">
               <div class="col-md-12">
                 <div class="dash_img_con">
                    <?php $des_image = get_field('description_image'); ?>
                    <?php if($des_image) : ?><img src="<?php echo $des_image['url']; ?>" alt="description"><?php else : ?><img src="<?php echo get_template_directory_uri() ?>/images/mar.jpg" alt=""><?php endif; ?>
                 </div>
               </div>
               <div class="col-md-12">
                   <div class="page_right_con">
                      <?php $des_title = get_field('destription_title'); ?>
                      <?php $des_text = get_field('description_text'); ?>
                       <h3 class="page_right_t"><?php echo $des_title; ?></h3>
                           <?php echo $des_text; ?>
               </div>
               </div>
               <div class="clear"></div>
                    <?php
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        ?>
                   </div>
              <div class="col-md-3 dashboard_sidebar_con">
                <div class="dash_si_con">
                 <?php get_sidebar(); ?>

                 </div>

              </div>
          </div>

        </div>
    </div>
</div>
<?php get_footer('dashboard'); ?>
