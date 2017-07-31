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
 * @package pss
 */

get_header(); ?>
			<div class="banner_con">
					<div class="container">
							<div class="row">
									<div class="col-md-6">
											<div class="banner_left">
													<h2>Heal your mind and soul</h2>
													<p>Whatever it is you want to change in your life, it’s good to talk to someone at Psychologist Southern Sydney, your local psychologist.</p>
													<a href="#" class="read_more_banner">READ MORE</a>
											</div>
									</div>
									<div class="col-md-6">
										<h2 class="get_in_touch text-center">Get in Touch</h2>
										<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?></div>
							</div>
					</div>
			</div>
			<!-- End of banner area -->
			<div class="subscribe_con">
					<div class="container">
							<div class="row">
									<div class="col-md-7">
											<h2 class="white_h2"><i class="fa fa-envelope em-white-h2" aria-hidden="true"></i>STAY IN TOUCH WITH UPDATES!</h2></div>
									<div class="col-md-5">
											<form class="form_con" action="#">
													<input type="text" class="email_field" value="" placeholder="Enter Your Email" />
													<input type="button" class="btn_submit" value="SUBMIT" />
											</form>
									</div>
							</div>
					</div>
			</div>
			<!-- End of subscribe area -->
			<div class="white_area">
					<div class="container">
							<div class="row text-center">
									<h1 class="standerd_h2">Welcome to Psychologists Southern Sydney</h1>
									<h4 class="standers_h4">Helping you move your life forward</h4>
									<div class="heading_line"></div>
									<p class="standard_para">For over 10 years our team of experienced counselling psychologists have been helping people overcome issues that are holding their lives or relationships back. We may have changed our name from Life Resolutions Kogarah to Psychologists Southern Sydney (PSS) but our aim is still the same; to help you enjoy a healthier, more productive life. Often this involves overcoming unhealthy thinking or unhelpful behaviours. You are not alone, talk to us and together we can make a positive change that will help you enjoy your life again. Our team of registered psychologists are highly trained and share our PSS practice values and commitment to respect, integrity, confidentiality, excellence in counselling techniques, and client care.</p>
									<h4 class="standers_h4 blue_color">Our journey with you to healthier thinking</h4>
									<p class="standard_para">For over 10 years our team of experienced counselling psychologists have been helping people overcome issues that are holding their lives or relationships back. We may have changed our name from Life Resolutions Kogarah to Psychologists Southern Sydney (PSS) but our aim is still the same; to help you enjoy a healthier, more productive life. Often this involves overcoming unhealthy thinking or unhelpful behaviours. You are not alone, talk to us and together we can make a positive change that will help you enjoy your life again. Our team of registered psychologists are highly trained and share our PSS practice values and commitment to respect, integrity, confidentiality, excellence in counselling techniques, and client care.</p>
									<h4 class="standers_h4 blue_color">Who benefits working with a PSS psychologist?</h4>
									<p class="standard_para">Every day we help adults, couples, people of different backgrounds, teenagers and children overcome an issue that might be upsetting them or holding them back. Your problem could involve personal development, a relationship or family situation, work, depression, anxiety, stress, burnout, substance abuse, maybe it’s a habit or a behaviour you want to change. No matter what the issue is we work confidentially with you one on one to develop positive, lifelong coping strategies and helping you discover healthier thinking</p>
							</div>
					</div>
			</div>

			<div class="white_area without_bottom_padding">
					<div class="back_img">
							<div class="container">
									<div class="row book_con">
											<div class="col-md-10 back_im_left">
													<div class="back_con_left">
															<h2 class="h2_num">01.<br/>Individual Psychotherapy</h2>
															<ul class="back_con_ul">
																	<li>Anxiety Disorders</li>
																	<li>Couple Counseling</li>
																	<li>Sex Therapy</li>
																	<li>Eating Disorders</li>
																	<li>Others</li>
															</ul>
													</div>
													<div class="back_con_right">
															<h2 class="h2_num">02.<br/>Business <br/>Services</h2>
															<ul class="back_con_ul">
																	<li>Psychology Coaching</li>
																	<li>EAP</li>
																	<li>Mediation Service</li>
																	<li>Workshops & Upcoming Events</li>
															</ul>
													</div>
											</div>
											<div class="col-md-2">

											</div>
									</div>
							</div>
					</div>
			</div>
			<!-- End of white Area -->

			<div class="gray_area">
					<div class="container">
							<h2 class="standerd_h2 text-center">Issues We Help With</h2>
							<h4 class="standers_h4 text-center gray_text">OUR PSYCHOLOGICAL SERVICES</h4>
							<div class="heading_line"></div>
							<div class="single_areas_con">
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon"> <img src="<?php echo get_template_directory_uri(); ?>/images/Shape-1.png" alt="couple" /> </span>Couple Counselling</h4>
													<p class="single_service_para">All couples face challenges and rough patches. Things such as frequent disagreements, differences in values, suspicion or evidence of infidelity and financial pressures can all causedifficulties.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon">  <img src="<?php echo get_template_directory_uri(); ?>/images/Forma-1.png" alt="depression" /></span>Depression Counselling</h4>
													<p class="single_service_para">Depression is a common mental health condition that affects one million Australians every year. Depression is not something you need to cope with alone, we can help.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon">  <img src="<?php echo get_template_directory_uri(); ?>/images/relation.png" alt="depression" /></span>Relationship Advice</h4>
													<p class="single_service_para">Positive relationships are a key ingredient to a happy life. Our relationships provide us with support, love,comfort and friendship.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon">   <img src="<?php echo get_template_directory_uri(); ?>/images/Child.png"  alt="child"/></span>Child Counselling</h4>
													<p class="single_service_para">Children can experience confusion and distress and may benefit from counselling when dealing with issues such as divorce, school transition, grief an developmental difficulties.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon">  <img src="<?php echo get_template_directory_uri(); ?>/images/mental.png" alt="mental" /></span>Mental Illness Help</h4>
													<p class="single_service_para">Mental health problems can become more severe if left untreated. Early detection and intervention is vital as research confirms that treatment is more effective the sooner it commences.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
									<div class="col-md-4">
											<div class="single_servise_con">
													<h4 class="single_service_con_heading"><span class="service_icon">  <img src="<?php echo get_template_directory_uri(); ?>/images/eating.png" alt="eating" /></span>Eating Disorders</h4>
													<p class="single_service_para">Eating disorders usually arise as a result of negative self body image. Eating disorders are usually associated with young women, however men and women of any age can be affected.</p>
											</div>
									</div>
									<!-- Enf Service Con -->
							</div>
							<div class="clear"></div>
							<a href="#" class="view_all">VIEW ALL</a>
					</div>
			</div>
			<!-- End of Gray Area -->
			<div class="white_area">
					<div class="container">
							<div class="row text-center">
									<h2 class="standerd_h2">We work closely with St George and Sutherland Shire GPs and Allied Health Professionals</h2>
									<div class="heading_line"></div>
									<p class="standard_para">We are proud of the relationships we have built with local GPs, allied health professionals and thelocal community over the last ten years. Many local Ps refer their patients to us through Mental Health Care Plans. As a private practice in Sydney’s south we regard ourselves as leaders in offering professional, ethical and confidential mental health care services. We work closely with your GP to ensure they are kept updated for your ongoing wellbeing.For children we work closely with parents, paediatrician, local schools, speech pathologistsother child services to make sure the best outcomes are coordinated as required. We also have available a range of assessment tools and report writing services including insurance, court and WorkCover as needed.</p>
							</div>
					</div>
			</div>


			<div class="gray_area">
					<div class="container">
							<div class="row">
									<div class="col-md-6">
											<div class="youtube_video">
													<iframe width="100%" height="100%" src="https://www.youtube.com/embed/IVx6ZlksMJw" frameborder="0" allowfullscreen></iframe>
											</div>
									</div>
									<div class="col-md-6">
											<h2 class="standerd_h2">Our quiet residential location and comfortable rooms</h2>
											<div class="heading_line left_align"></div>
											<p class="standard_para">Being located in a quiet residential area has added benefits for our clients. Connells Point is easy to drive to whether you live in Rockdale, Lugarno, Menai or Cronulla. As we are not located in a major shopping precinct parking there is no busy traffic to contend with and parking is free and available directly outside the practice.</p>
											<p class="standard_para">There is also a bus service that runs from Hurstville station with a bus stop 30 metres from our door. Our three practice rooms are quiet, private and comfortable.
											</p>
									</div>
							</div>
					</div>
			</div>
			<div class="white_area">
					<div class="container">
							<div class="row">
									<div class="col-md-7">
											<h2 class="standerd_h2">Appointment times that suit you</h2>
											<div class="heading_line left_align"></div>
											<p class="standard_para">We understand people lead busy lives and want to book in quickly. That’s why we offer extended hours six days a week. With six psychologists available you can book in Monday to Friday throughout the day until 9pm most nights. Saturdays between 9:00am and 5pm. We offer Medicare and Private Health rebates on the spot.</p>
											<h3>PSS working around your needs</h3>
											<ul class="home_ul">
													<li> We're open for bookings 6 days a week including weeknights and Saturdays. </li>
													<li> comfortable rooms with free parking directly outside practice </li>
													<li> On the spot Medicare and Private Health Rebates </li>
													<li> Easy booking, immediate bookings call 1300 307 096 </li>
													<li> sessions in Greek also offered </li>
											</ul>
									</div>
									<div class="col-md-5">
											<div class="image_con">
													<img src="<?php echo get_template_directory_uri(); ?>/images/Capa-1.png" alt="clock">
											</div>
									</div>
							</div>
					</div>
			</div>
			<div class="gray_area">
					<div class="container">
							<div class="row text-center">
									<h2 class="standerd_h2">PSS Workplace and EAP Services</h2>
									<div class="heading_line"></div>
									<p class="standard_para">In a recent PwC report into Australian workplaces it was revealed that for every $1 businesses spend on mental health initiatives, the business received $2.30 in return. This is due to lower absenteeism and higher productivity among other factors. For small, medium to large businesses and organisations PSS offers a range of psychological, counselling. Coaching and mediation services to help you create a mentally healthier workplace for greater productivity and less conflict.</p>
									<h4 class="standers_h4 blue_color">Our Business Services for groups or individuals include: </h4>
									<ul class="home_ul">
											<li> Executive, Career and Life Coaching </li>
											<li> Mediation </li>
											<li> Workplace trauma Incidents </li>
											<li> Tailored presentations around workplace mental health issues e.g. dealing with stress, bullying, depression, anger, conflict resolution, motivation and goal setting </li>
											<li> Training and coaching programs for executives and staff </li>
											<li> Employment Assistance Programs (EAP) - one on one confidential counselling, and critical incident debriefing. </li>
									</ul>
									<p class="standard_para">As managersand business owner you would be aware that workplace stress, traumatic events, workplace violence and bullying or harassment and work pressure are linked to higher levels of unplanned absences, sick leave, staff turnover and poor performance. By investing in a healthier workplace environment or conflict resolutions services you will prevent and manage risk, reduce using valuable in house time and resources and look after your bottom line. Our conflict resolution services undertaken by Nationally Accredited Mediators could help you manage and minimise the risk of workplace bulling claims.</p>
									<h4 class="book_h4"><strong>To book or to find out more please call Psychologists Southern Sydney now on <span class="blue_text">1300 307 188.</span></strong></h4>
							</div>
					</div>
			</div>

			<div class="white_area">
					<div class="container">
							<h2 class="standerd_h2 text-center">Official Blog Updates</h2>
							<h4 class="standers_h4 text-center gray_text">BLOG FEED</h4>
							<div class="single_areas_con blog_home_con">
									<div class="col-md-4">
											<div class="single_servise_con text-center">
													<div class="blog_img_con"><img src="<?php echo get_template_directory_uri(); ?>/images/blog1.png" alt="blog" /></div>
													<h4 class="home_blog_heading">5 Easy Steps to Move from Fear to Confidence</h4>
													<p class="author_meta"><span class="date blue_text"><strong>APR 12, 2016</strong></span> | by Marting Smith</p>
													<p class="home_blog_para">All couples face challenges and rough patches. Things such as frequent disagreements, differences in values, suspicion or evidence of infidelity and financial pressures can all causedifficulties.</p>
													<div class="socia_feedback">
															<p><span><i class="fa fa-comment-o" aria-hidden="true"></i></span>3</p>
															<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>4</p>
													</div>
											</div>
									</div>
									<!--end of blog home -->
									<div class="col-md-4">
											<div class="single_servise_con text-center">
													<div class="blog_img_con"><img src="<?php echo get_template_directory_uri(); ?>/images/blog1.png" alt="blog" /></div>
													<h4 class="home_blog_heading">5 Easy Steps to Move from Fear to Confidence</h4>
													<p class="author_meta"><span class="date blue_text"><strong>APR 12, 2016</strong></span> | by Marting Smith</p>
													<p class="home_blog_para">All couples face challenges and rough patches. Things such as frequent disagreements, differences in values, suspicion or evidence of infidelity and financial pressures can all causedifficulties.</p>
													<div class="socia_feedback">
															<p><span><i class="fa fa-comment-o" aria-hidden="true"></i></span>3</p>
															<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>4</p>
													</div>
											</div>
									</div>
									<!--end of blog home -->
									<div class="col-md-4">
											<div class="single_servise_con text-center">
													<div class="blog_img_con"><img src="<?php echo get_template_directory_uri(); ?>/images/blog1.png" alt="blog" /></div>
													<h4 class="home_blog_heading">5 Easy Steps to Move from Fear to Confidence</h4>
													<p class="author_meta"><span class="date blue_text"><strong>APR 12, 2016</strong></span> | by Marting Smith</p>
													<p class="home_blog_para">All couples face challenges and rough patches. Things such as frequent disagreements, differences in values, suspicion or evidence of infidelity and financial pressures can all causedifficulties.</p>
													<div class="socia_feedback">
															<p><span><i class="fa fa-comment-o" aria-hidden="true"></i></span>3</p>
															<p><span><i class="fa fa-heart-o" aria-hidden="true"></i></span>4</p>
													</div>
											</div>
									</div>
									<!--end of blog home -->

							</div>
					</div>
			</div>
<?php
//get_sidebar();
get_footer();
