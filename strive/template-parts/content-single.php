<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strive_Community
 */

?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
        $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>
        <img src="<?php echo $post_thumbnail_url;?>" alt="image" class="responsive_image"/>
        <div class="single_post_con_text">
        <div class="meta_info">
         <span class="wc-shortcodes-author"><span class="wc-shortcodes-by"><i class="fa fa-user author_meta_a" aria-hidden="true"></i>By </span><?php the_author();?></span>
         <span class="wc-shortcodes-date"><i class="fa fa-calendar date_meta_a" aria-hidden="true"></i><?php the_date(); ?></span>
         <span class="wc-shortcodes-author"><i class="fa fa-folder-open-o cate_meta_a" aria-hidden="true"></i><?php the_category($post_id); ?></span>
  	     </div>


        <h2 class="single_title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
        </div>
			</article><!-- #post-## -->
