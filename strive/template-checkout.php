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
Template Name: Checkout Page
*/
get_header('other'); ?>
  <div class="container">
    <div class="medium_con" id="chk_reg">
      <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

        the_content();

        endwhile;

      endif; ?>

    </div>

  </div>
<?php //get_sidebar();
get_footer();
?>
