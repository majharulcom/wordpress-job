<?php


//Post Query
// Usages [latest_posts count="" category="" column=""]
function pathways_latest_posts_shortcode($atts){
	
	extract( shortcode_atts( array(
		'count' => '5', 
		'category' => '',
		'column' => '3',
	), $atts) );
	
	$query_post = new WP_Query(
	
		array('posts_per_page' => $count, 'post_type' => 'post', 'category_name'=>$category, 'orderby' => 'menu_order','order' => 'DESC')
		
	);
	if ($column == 2) {
	   $col = 'et_pb_column_1_2';
	} elseif ($column == 4) {
	   $col = 'et_pb_column_1_4';
	} else {
	   $col = 'et_pb_column_1_3';
	}

	$html = '<div class="post-carosel owl-carousel">';
	
		while($query_post->have_posts()) : $query_post->the_post();
		
			$idd = get_the_ID();
			
			$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'latest-post-thumb' );
			
			$html .= '<div class="et_pb_column '.$col.'">';
			
				$html .= '<div class="single-post">';
				
					if($thumbnail_url){
						$html .= '<div class="post-thumbnail"><a href="'.get_the_permalink($idd).'"><img src="'.$thumbnail_url[0].'" alt="" /></a>
						<div class="entry-meta"><p><strong>REFLECTIONS BLOG</strong> <span class="date">April 11, 2017</span></p></div></div>';
					}

					$html .= '<h4 class="entry-title"><a href="'.get_the_permalink($idd).'">'.get_the_title().'</a></h4>';

					$html .= '<div class="entry-content">' . get_the_excerpt() . '</div>';

					$html .= '<a href="'.get_the_permalink($idd).'" class="readmore-btn fright">Read More</a>';
					
				$html .= '</div>';
				
			$html .= '</div>';
		
		endwhile;
		
	$html.= '</div>';
	
	wp_reset_query();
	
	return $html;
}
add_shortcode('latest_posts', 'pathways_latest_posts_shortcode');







//Post Query
// Usages [pathways_post count="" category=""]
function pathways_posts_shortcode($atts){
	
	extract( shortcode_atts( array(
		'count' => '3', 
		'category' => ''
	), $atts) );
	
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array('posts_per_page' => $count,'post_type' => 'post','category_name'=>$category,'paged' => $paged);
	query_posts($args); 
	$html = '<div class="resource_post_warp">';
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();

			$idd = get_the_ID();

			$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-thumb' );

				$html .= '<div class="single-post-wrapper">';

					$html .= '<div class="single-post">';

						if($thumbnail_url){
							$html .= '<div class="post-thumbnail"><a href="'.get_the_permalink($idd).'"><img src="'.$thumbnail_url[0].'" alt="" /></a>
<div class="entry-meta">
<p><strong>REFLECTIONS BLOG</strong> <span class="date">'.get_the_time('M d, Y').'</span></p></div>
</div>';
						}

						$html .= '<div class="entry-content-warp">';

							$html .= '<h4 class="entry-title"><a href="'.get_the_permalink($idd).'">'.get_the_title().'</a></h4>';

							$html .= '<div class="entry-content">' . get_the_excerpt() . '</div>';

							$html .= '<a href="'.get_the_permalink($idd).'" class="readmore-btn fright">Read More</a>';

						$html .= '</div>';

					$html .= '</div>';

				$html .= '</div>';

		endwhile;
		else:
			$html .= '<h4>No content found</h4>';
			
		endif;
		
		$html .= '<div class="post_navigation">';
		
			 previous_posts_link( '<span class="meta-nav">&larr;</span> Older Posts', 0 );
			 
			 next_posts_link( 'Newer Posts <span class="meta-nav">&rarr;</span>', 0 );
			 
		$html .= '</div>';
		
	$html.= '</div>';

	wp_reset_query();

	return $html;
}
add_shortcode('pathways_post', 'pathways_posts_shortcode');


//Post Query
// Usages [pathways_blog_post count="" category=""]
function pathways_blog_posts_shortcode($atts){
	
	extract( shortcode_atts( array(
		'count' => '3', 
		'category' => ''
	), $atts) );

	$query_post = new WP_Query(

		array('posts_per_page' => $count, 'post_type' => 'post', 'category_name'=>$category, 'orderby' => 'menu_order','order' => 'ASC')

	);

	$html = '<div class="blog_post_warp">';

		while ( have_posts() ) : the_post();

			$idd = get_the_ID();

			$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-thumb' );

			$html .= '<div class="et_pb_column et_pb_column_1_3">';

				$html .= '<div class="single-post">';

					if($thumbnail_url){
						$html .= '<div class="post-thumbnail"><a href="'.get_the_permalink($idd).'"><img src="'.$thumbnail_url[0].'" alt="" /></a>
						<div class="entry-meta"><p>REFLECTIONS <strong>BLOG</strong> <span class="date">April 11, 2017</span></p></div></div>';
					}

					$html .= '<div class="entry-content-warp">';

						$html .= '<h4 class="entry-title"><a href="'.get_the_permalink($idd).'">'.get_the_title().'</a></h4>';

						$html .= '<div class="entry-content">' . get_the_excerpt() . '</div>';

						$html .= '<a href="'.get_the_permalink($idd).'" class="readmore-btn fright">Read More</a>';

					$html .= '</div>';

				$html .= '</div>';

			$html .= '</div>';

		endwhile;

		$html .= '<div class="post_navigation">';
		
			 previous_posts_link( 'Older Posts', 0 );
			 
			 next_posts_link( 'Newer Posts', 0 );
			 
		$html .= '</div>';

	$html.= '</div>';

	wp_reset_query();

	return $html;
}
add_shortcode('pathways_blog_post', 'pathways_blog_posts_shortcode');