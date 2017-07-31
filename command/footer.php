<footer class="s_footer_area">
		<div class="container s_f_con">
				<div class="col-md-5 col-sm-6">
						<div class="col-md-4">
										<h3 class="s_foot_heading">QUICK LINKS</h3>
										<ul class="s_quick_links">
												<li><a href="https://commandcenter.io/">Home</a></li>
												<li><a href="/tour/">Tour</a></li>
												<li><a href="/pricing/">Pricing</a></li>
												<li><a href="/about/">About</a></li>
												<li><a href="http://app.commandcenter.io/">Login</a></li>
												<li><a href="/free-trail/">Free Trial</a></li>
										</ul>
						</div>
						<div class="col-md-8">
										<h3 class="s_foot_heading">Blog Feed</h3>
										<ul class="s_quick_links">
													<?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
														<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
															<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
															<?php
														endwhile;
														wp_reset_postdata();
														?>
										</ul>
						</div>
				</div>
				<div class="col-md-7 col-sm-6">
						<div class="col-md-4 footer_contact_us">
										<h3 class="s_foot_heading">Contact us on</h3>
										<ul class="s_quick_links">
												<li><a href="tel:0111234444"><img src="<?php echo get_template_directory_uri(); ?>/images/Selection_145.png" alt="flag"> (011) 123 4444</a></li>
												<li><a href="tel:01234123467"><img src="<?php echo get_template_directory_uri(); ?>/images/Selection_146.png" alt="flag"> (01234) 123467</a></li>
												<li><a href="tel:19051234678"><img src="<?php echo get_template_directory_uri(); ?>/images/Selection_147.png" alt="flag"> 1 (905) 123 4678</a></li>
												<li><a href="tel:1905123467"><img src="<?php echo get_template_directory_uri(); ?>/images/Selection_148.png" alt="flag"> (1905) 123467</a></li>
										</ul>
						</div>
						<div class="col-md-8">
										<h3 class="s_foot_heading">NEWSLETTER</h3>
										<p class="s_news_para">Sign up for reglar blogs & articles to
help you improve your business and
succeed online</p>
					 <div class="input-group">
<input type="text" class="form-control" placeholder="Your Email">
<input type="submit" class="input-group-addon">
</div>
					 <p class="wr_text">*We promise, we won't spam you</p>
					 <div class="strive">
							        <img src="http://link.s55.com.au/wp-content/themes/strive-community/images/Layer-32.png" alt="">
							    </div>
							    <div class="cards">
							        <img src="http://link.s55.com.au/wp-content/themes/strive-community/images/S56-Home-var1-1.png" alt="">

							    </div>
						</div>
				</div>
				<div class="clear"></div>
				<span class="write_stripe"></span>
				<div class="footer_copy">
						<div class="col-md-6">
								<ul class="s_footer_copy_ul">
										<li><a href="#">Facebook</a></li>
										 <li><a href="#">Twitter</a></li>
											<li><a href="#">Google Plus</a></li>
											 <li><a href="#">Linkedin</a></li>
												<li><a href="#">Youtube</a></li>
								</ul>
						</div>
						 <div class="col-md-6">
									 <p class="pull-right s_f_copy_text"> &copy; 2016. ALL RIGHTS RESERVED.</p>
						</div>
				</div>
		</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
