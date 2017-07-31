<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?>
<aside id="secondary" class="widget-area" role="complementary">
	<!--h3>Blog Archive</h3-->
	<?php // wp_get_archives('cat=13'); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
