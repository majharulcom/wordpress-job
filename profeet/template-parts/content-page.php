<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strive_Community
 */

?>
<div class="container">
	<div class="row">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content default_page_container">
				<?php
					the_content();
				?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	</div>
</div>
