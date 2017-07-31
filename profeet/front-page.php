<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strive_Community
 */

get_header(); ?>
			<div class="slider_text clear">
	<div class="row">
				<div class="col-md-12">
					<div class="slider_left_side">
						<h2 class="slider_heading_left off_white_text">Your community of psychologists in private practice</h2>
						<h3 class="slider_heading_h3 white_text">Join the conversation today</h3>
						<div class="double_white"></div>
						<a href="/event/melbourne/" class="buy_button">Request invitation</a>
					</div>
				</div>
			</div>
					</div>
			</div>
</div>
<a href="/event/melbourne/" class="header_box_text">JOIN US IN MELBOURNE IN 01/09/2016  <i class="fa fa-chevron-right white_text arrow_right" aria-hidden="true"></i></a>
</div>
	<div class="second_area">
			<div class="container">
				<h1 class="title_header text-center gray_text">“Strive empowers you to make the most of your private practice by providing the knowledge and tools to succeed.”</h1>
				<hr class="divider" />
			</div>
			<div class="container-full">
				<div class="row">
					<div class="col-md-6 common_side_con gray_background left_cut">
						<h3 class="numeric_header">01</h3>
						<div class="side_container">
							<h2 class="side_con_head">Learn</h2>
							<p class="side_con_para_first">
								Here you will learn everything you need to know to make your experience as a business owner rewarding.
							</p>
							<p class="side_con_para_second">
								The presentation will be broken down into two parts; business strategies to unlock the latent potential of your practice and how to attract more clients through simple marketing techniques.  We will close off with some time to meet fellow psychologist facing the same challenges as you over drinks and nibbles.
							</p>
							<a href="#" class="side_link">VIEW EVENT GUIDE</a>
						</div>
					</div>
					<div class="col-md-6 common_side_con right_img_con">
							<img src="<?php echo get_template_directory_uri();?>/images/right_photo.jpg" alt="image" />
					</div>
					<div class="col-md-6 common_side_con left_img_con">
							<img src="<?php echo get_template_directory_uri();?>/images/left_photo.jpg" alt="image" />
					</div>
					<div class="col-md-6 common_side_con off_white_background right_cut">
						<h3 class="numeric_header_right">02</h3>
						<div class="side_container_right">
							<h2 class="side_con_head gray_right">Connect</h2>
							<p class="side_con_para_first black_right">
								The next step is to apply the knowledge you have learned. This is a lot easier in an environment that supports and motivates you.
							</p>
							<p class="side_con_para_second black_right">
								The strive online community is a space for psychologists to come together and connect. Here you can collaborate with your peers, get feedback on your efforts, learn from others and access further information. Through deliberate practice and constant feedback you will develop the skills you need to run a great practice.
							</p>
							<!--a href="#" class="side_link">Tell me more</a-->
						</div>
					</div>
				</div>
			</div>
	</div>
	<!--div class="fourth_area gray_background extra_top_margin">
			<div class="container">
				<h1 class="title_header_subs text-center off_white_text">Find out more about Strive on our Blog</h1>
				<a href="/blog/" class="go_blog">take me there</a>
			</div>
	</div-->
	<div class="second_area white_background dash_area_con">
			<div class="container">
				<!--h3 class="part4_headding">Dates & Locations</h3-->
				<div class="dash_area">
				<h2 class="title_header_laptop gray_text">DISCUSS THE TOPICS THAT ARE MOST IMPORTANT TO YOU</h2>
			<p class="side_con_para_second black_right dash_para">Lorem ipsum dolor sit amet, mi nec amet nec, tempor omnis, feugiat vel nec
sem massa a, diam curabitur sapien neque integer nulla. Vehicula felis hendr
justo quam scelerisque, dictum nec donec integer viverra, faucibus ipsum lib
sed cras, eleifend sem. Mauris suscipit lacinia tempus. Sit egestas, eu facilis
is adipiscing sed nascetur, rutrum quam sit sollicitudin rerum pharetra.
Wisi lobortis maecenas a massa orci, sit facilisis lectus erat feugiat. Quam o
non enim aptent et pellentesque, nibh in nunc dolor nulla libero vel, sempe
r et eget turpis libero, at sem mauris donec turpis leo sociosqu. Ut aliquam
vitae, ut donec vel donec taciti. Pulvinar eget morbi amet. Ipsum sceleri.</p>
<p class="side_con_para_second black_right dash_para">Lorem ipsum dolor sit amet, mi nec amet nec, tempor omnis, feugiat vel nec
sem massa a, diam curabitur sapien neque integer nulla. Vehicula felis hendr
justo quam scelerisque, dictum nec donec integer viverra, faucibus ipsum lib
sed cras, eleifend sem. Mauris suscipit lacinia tempus. Sit egestas, </p>
			</div>
			<div class="lap_img">
			<img src="<?php echo get_template_directory_uri();?>/images/laptop.png" alt="image" />
			<div class="clear"></div>
		</div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="fourth_area gray_background">
			<div class="container">
				<h2 class="title_header_subs text-center off_white_text">RECEIVE A NOTIFICATION WHEN WE ADD A NEW EVENT</h2>
				<form class="subs_form" action="index.html" method="post">
					<input type="text" class="subs_input" name="name" value="" placeholder="Enter your email">
					<input type="button" class="subs_button" name="name" value="SUBSCRIBE">
				</form>
				<p class="legal_n text-center off_white_text">
					* We promise, we won’t spam you
				</p>
			</div>
	</div>
	<div class="second_area off_white_background">
			<div class="container">
				<!--h3 class="part4_headding">Dates & Locations</h3-->
				<h2 class="part_h1 text-center margin_top_0">Dates & Locations </h2>
				<p class="part_4_para text-center">Join us at the next event happening near you</p>
				<div class="medium_con">
					<div id="owl">

						<?php
					  $params = array('posts_per_page' => -1, 'post_type' => 'product');
					  $wc_query = new WP_Query($params);
					  ?>
					  <?php if ($wc_query->have_posts()) : ?>
					  <?php while ($wc_query->have_posts()) :
					                  $wc_query->the_post(); ?>

					                  <div class="testimonial">
					                    <h2 class="address_name text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					                    <p class="tes_para_register">
					                      <?php echo excerpt(100); ?>
					                    </p>
					                    <a href="<?php the_permalink(); ?>" class="tes_link">Register!</a>
					                    <!--form class="cart" method="post" enctype="multipart/form-data">
					                         <input type="hidden" name="add-to-cart" value="<?php //echo esc_attr($product->id); ?>">
					                         <button type="submit" class="add_cart_regi_btn"> <?php //echo $product->single_add_to_cart_text(); ?> </button>
					                    </form-->
					                  </div><!-- End of testimonial -->

					  <?php endwhile; ?>
					  <?php wp_reset_postdata(); ?>
					  <?php else:  ?>
					  <p>
					       <?php _e( 'No Products'); ?>
					  </p>
					  <?php endif; ?>

				</div>
				</div>
			</div>
	</div>
	<div class="second_area white_background">
			<div class="container">
				<!--h3 class="part4_headding">Dates & Locations</h3-->
				<h2 class="part_h1 text-center margin_top_0">LATEST BLOGS</h2>
				<div class="gray_divider"></div>
			</div>
			<div class="row dash_area padding_bottom">
				<div class="col-md-4 col-sm-6 front_blog_con">
						<div class="front_blog_img">
							<img src="<?php echo get_template_directory_uri();?>/images/front_blog.jpg" alt="image" />
						</div>
						<div class="front_blog">
						<h2 class="front_blog_title"><a href="#">10 WAYS TO PREVENT HYPOMANIA</a></h2>
						<p class="tes_para_register text-center">
						Lorem ipsum dolor sit amet, hac massa enim malesuada mauris gravida, proin vel idmagnis suscipit amet integer, donec orci eget donec. Vitae phasellus, ac
						</p>
						<a href="#" class="front_blog_link"><i class="fa fa-angle-right white_text arrow_right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 front_blog_con">
						<div class="front_blog_img">
							<img src="<?php echo get_template_directory_uri();?>/images/front_blog.jpg" alt="image" />
						</div>
						<div class="front_blog">
						<h2 class="front_blog_title"><a href="#">10 WAYS TO PREVENT HYPOMANIA</a></h2>
						<p class="tes_para_register text-center">
						Lorem ipsum dolor sit amet, hac massa enim malesuada mauris gravida, proin vel idmagnis suscipit amet integer, donec orci eget donec. Vitae phasellus, ac
						</p>
						<a href="#" class="front_blog_link"><i class="fa fa-angle-right white_text arrow_right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 front_blog_con">
						<div class="front_blog_img">
							<img src="<?php echo get_template_directory_uri();?>/images/front_blog.jpg" alt="image" />
						</div>
						<div class="front_blog">
						<h2 class="front_blog_title"><a href="#">10 WAYS TO PREVENT HYPOMANIA</a></h2>
						<p class="tes_para_register text-center">
						Lorem ipsum dolor sit amet, hac massa enim malesuada mauris gravida, proin vel idmagnis suscipit amet integer, donec orci eget donec. Vitae phasellus, ac
						</p>
						<a href="#" class="front_blog_link"><i class="fa fa-angle-right white_text arrow_right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
	</div>
	<!--div class="fifth_area off_white_background">
			<div class="container">

				<div class="part4_divider"></div>
				<div class="row">
					<div class="col-md-6 events_con_padding">
						<div class="side_container_info">
								  			<h3>	<span>—</span>BEFORE BREAK </h3>
												<div class="clear"></div>
											  <p><span>18:00 - 18:15</span>Arrival & Welcome</p>
											  <p><span>18:15 - 18:30</span>Opening speech</p>
											  <p><span>18:30 - 19:15</span>Business Fundamentals</p>
											  <p><span>19:15 - 19:30</span>Q & A</p>
						</div>
					</div>
					<div class="col-md-6 events_con_padding info_right">
						<div class="side_container_info">
						    			<h3>	<span>—</span>AFTER BREAK</h3>
											<div class="clear"></div>
						    			<p><span>19:30 - 20:00</span>Break with nibbles & drinks</p>
						    			<p><span>20:00 - 20:45</span>Marketing your practice</p>
						    			<p><span>20:45 - 21:00</span>Q & A</p>
											<p><span>21:00 - 21:30</span>Connect over a drink</p>
						</div>
					</div>
				</div>
			</div>
	</div-->
	<!--div class="container-full">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12607.699548798279!2d144.95427245470046!3d-37.81522832010877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sbd!4v1466279897100" width="100%" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div-->
<?php
//get_sidebar();
get_footer();
