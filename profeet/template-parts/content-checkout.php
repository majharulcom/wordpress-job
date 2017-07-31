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
	<div class="bread_cram_con">
		<div class="bread_cram">
			<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
		</div>
	</div>

  <div class="container">
    <div class="medium_con">
      <?php the_content();?>
    </div>
  </div>
//get_sidebar();
get_footer();
