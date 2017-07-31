<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */

?>
<div class="page-header"><h2 itemprop="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
<dl class="article-info muted">
		<dt class="article-info-term">Details</dt>		
		<dd class="create">
				<span class="icon-calendar"></span>
				<time>Created: <?php the_date(); ?></time>
		</dd>			
</dl>
<p><?php the_excerpt(); ?></p>

