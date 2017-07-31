<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bookkeeping
 */

?>
<div class="white-area part blog-part">
	  <div class="container part_container">
	    <div class="projects_con">
	      <div class="row row_with_out_padding">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <div class="col-md-12 blog_con">

						<div class="blog_thum_container">
							<div class="blog_date_con">
								<div class="blog_date_meta">
									<p>08</p>
									<h4>Apr, 2016</h4>
								</div>
								<div class="blog_comment_meta">
									<i class="fa fa-comment comment_blog_icon" aria-hidden="true"></i>
									<p>08</p>
								</div>
							</div>
							<a href="#" class="blog_thumbnail"><img src="<?php echo get_template_directory_uri() ?>/images/sample_image.jpg" class="clock_icon" alt="clock_icon" /></a>
						</div>

					<div class="clear"></div>
	          <a href="#" class="blog_title">Ad Bonorum Tmperdiet Nam Omnium</a>
						<p class="blog_meta_para text-left">Posted by <span class="orange_text">admin</span>  / Tags  <span class="orange_text">xero</span> <span class="orange_text">accounting<span></p>
							<hr class="grayw_hr" />
						<p class="blog_para text-left">Ad bonorum imperdiet nam. Omnium sententiae ne eam, ius altera melius quaestio ad, duo eu brute dictas aliquando. Id primis adolescens sea, dica
							eleifend vis ea. Sit in timeam maiestatis definiebas. Mea ad mollis doctus, eirmod prompta patrioque an cum. Id voluptua sensibus est, quo an vidit st
							honestatis, cu integre honestatis pri. Populo recusabo suscipiantur vim te, iuvaret feugait eu per. Inani veritus invidunt an vis, pro ex albucius interpr
							Ea qui wisi quando cetero. Duis falli ad has.</p>
					<div class="clear"></div>
					<a href="#" class="read_more_blog">Read more...</a>
					<div class="clear"></div>
					<hr class="grayw_hr" />
				</div> <!-- End of blog -->
				</article><!-- #post-## -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="col-md-12 blog_con">

					<div class="blog_thum_container">
						<div class="blog_date_con">
							<div class="blog_date_meta">
								<p>08</p>
								<h4>Apr, 2016</h4>
							</div>
						</div>
						<a href="#" class="blog_thumbnail"><img src="<?php echo get_template_directory_uri() ?>/images/sample_image.jpg" class="clock_icon" alt="clock_icon" /></a>
					</div>

				<div class="clear"></div>
					<a href="#" class="blog_title">Ad Bonorum Tmperdiet Nam Omnium</a>
					<p class="blog_meta_para text-left">Posted by <span class="orange_text">admin</span>  / Tags  <span class="orange_text">xero</span> <span class="orange_text">accounting<span></p>
						<hr class="grayw_hr" />
					<p class="blog_para text-left">Ad bonorum imperdiet nam. Omnium sententiae ne eam, ius altera melius quaestio ad, duo eu brute dictas aliquando. Id primis adolescens sea, dica
						eleifend vis ea. Sit in timeam maiestatis definiebas. Mea ad mollis doctus, eirmod prompta patrioque an cum. Id voluptua sensibus est, quo an vidit st
						honestatis, cu integre honestatis pri. Populo recusabo suscipiantur vim te, iuvaret feugait eu per. Inani veritus invidunt an vis, pro ex albucius interpr
						Ea qui wisi quando cetero. Duis falli ad has.</p>
				<div class="clear"></div>
				<a href="#" class="read_more_blog">Read more...</a>
				<div class="clear"></div>
				<hr class="grayw_hr" />
			</div> <!-- End of blog -->
			</article><!-- #post-## -->
	      </div>
	    </div>
	  </div>
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>
