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
					<div class="row dash_area footer">
						<div class="col-md-6 col-sm-6">
						<div class="col-md-7 right_border_strive">
							<a class="logo_foot" href="<?php bloginfo('home');?>"><img src="<?php echo get_template_directory_uri();?>/images/new_logo.png" alt="logo" /></a>
							<p class="foot_para">Lorem ipsum dolor sit amet, morbi officiis urna.
Posuere magna, sed magna, in ut arcu, interdum
sodales sollicitudin dolor. Congue at mi tincid
unt ut, nec ut lectus porta vivamus lectus, in id
phasellus, lectus consectetuer commodo a. Non
ultrices, vivamus morb</p>
								<ul class="head_social">
		            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
		          </ul>
							</div>
						<div class="col-md-5 right_border">
							<h3 class="ft_title">Quick Links</h3>
						<nav class="navbar navbar-default footer-menu-left">
							<?php
							wp_nav_menu( array(
									'theme_location' => 'primary',
									'container' => '',
									'menu_class'=> 'nav navbar-nav header_menu footer_menu'
								) );
							?>
									</nav>
							</div>
						</div> <!-- End Left -->
						<div class="col-md-6 col-sm-6">
							<div class="col-md-7 right_border_news">
								<h3 class="ft_title">Newsletter</h3>

									<form class="news_form" action="#" method="post">
											<input type="text" name="name" value="" class="news_input" placeholder="Your Name">
											<input type="text" name="name" value="" class="news_input" placeholder="Email">
											<input type="submit" name="name" class="news_button" value="Subscribe">
									</form>
									<p class="legal_news off_white_text">* We promise, we won’t spam you</p>
							</div>
							<div class="col-md-5 ">
								<!-- Begin eWAY Linking Code -->
									<div id="eWAYBlock">
													<a href="http://www.eway.com.au/secure-site-seal?i=11&s=11&pid=5b123f26-8a79-4b2a-a8f7-f9d9761c1a76&theme=0" title="eWAY Payment Gateway" target="_blank" rel="nofollow">
															<img src="<?php echo get_template_directory_uri();?>/images/ebay_logo.png" alt="image" />
													</a>
									</div>
									<!-- End eWAY Linking Code -->

							</div>
						</div> <!-- End Left -->
					</div>
				</div>
		</div>
		<div class="footer_area light_black_background">
				<div class="container">
					<div class="row dash_area">
						<div class="col-md-6 col-sm-6">
							<p class="copy">© 2013-2016 Strive. All rights reserved.</p>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="footer_bottom_menu text-right">
							<li><a href="/terms-conditions/">Terms & Conditions</a></li>
							<li><a href="#">Privacy policy </a></li>
							<li><a href="#">Site map</a></li>
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
