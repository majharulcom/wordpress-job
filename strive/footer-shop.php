<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Strive_Community
 */

?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer_area gray_background">
				<div class="container">
					<div class="row footer">
						<div class="col-md-12">
						<nav class="navbar navbar-default footer-menu-left">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
									</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<?php
									wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav header_menu footer_menu',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
									);
									?>
									</nav>
							</div>
							<div class="col-md-6">
								<p class="copy">
									© 2013-2016 Strive. All rights reserved.
								</p>
							</div>
							<div class="col-md-6">
								<ul class="head_social pull-right">
		            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
		          </ul>
							</div>
					</div>
				</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
