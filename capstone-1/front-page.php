<?php get_header(); ?>

	       <div class="p_about_area">
           <div class="container">
               <div class="p_about_title">
                   <h2>ABOUT CAPSTONE</h2>
                   <p>Capstone is considered Australia’s leading, national independently-owned licensee with a complete range of back office support services to help you to grow your business.</p>
               </div>
               <div class="p_about_find">
                   <a href="#">READ MORE</a>
               </div>
           </div>
       </div>

       <div class="p_lorem_impsum_area">
           <div class="container">
               <div class="p_lorem_impsum">
                   <div class="row">
                       <div class="col-md-6 restyling_md">
                           <div class="p_lorem_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Layer-22.png" alt="">
                           </div>
                       </div>
                       <div class="col-md-6 restyling_md">
                           <div class="p_lorem_desc_area">
                               <div class="p_lorem_heading">
                                   <h2>OUR SERVICES</h2>
                               </div>
                               <div class="p_lorem_text">
																 <p>Your success is our focus, and to support your business we offer a range of support services usually only found in large institutionally-owned licensees. Our in-house support services include:</p>
																	<ul>
																		<li>Professional Standards (including compliance, research and paraplanning)</li>
																		<li>Marketing and Communications</li>
																		<li>Practice efficiency and Coaching</li>
																		<li>Ongoing extensive professional development and training</li>
																		<li>Tailored technology support</li>
																	</ul>
																	<p>We offer four levels of authorisation (called “tiers”). This allows you to choose the level of support that’s best suited to your business and advice needs.</p>
																	<p>You may wish to access additional support and services as your business grows. With Capstone this is made easy as you can move between tiers as your business and advice needs change – allowing you the flexibility to scale our services to your needs.</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="p_solution_area">
           <div class="container">
               <div class="p_solution">
                   <div class="row">
                       <div class="col-md-6">
                           <div class="p_solution_left">
                               <div class="p_solution_left_title">
                                   <h2>SOLUTIONS<br/> FOR ACCOUNTANTS</h2>
                                   <p>Accountants who provide SMSF advice must hold an authorisation. At Capstone we are helping accountants right across Australia to make the transition into the new regulatory environment with advice, guidance, business transition support, and ongoing professional development.</p>
                               </div>
                               <div class="p_solution_read_more">
                                   <a href="#">Read more</a>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="p_solution_right">
                               <div class="p_solution_right_title">
                                   <h2>SOLUTIONS</br> FOR FINANCIAL ADVISERS</h2>
                                   <p>When you’re looking for a licensee, it’s important to choose a partner that has the support and resources you need to deliver quality advice, solutions and services to your clients. At Capstone our goal is to provide you with the support you need to deliver quality advice and achieve business growth.</p>
                               </div>
                               <div class="p_solution_read_more">
                                   <a href="#">Read more</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>



       <div class="p_lorem_impsum_area ">
           <div class="container">
               <div class="p_lorem_impsum">
                   <div class="row">

                       <div class="col-md-6 restyling_md">
                           <div class="p_lorem_desc_area p_lorem_last">
                               <div class="p_lorem_heading">
                                   <h2>WHY CHOOSE US?</h2>
                               </div>
                               <div class="p_lorem_text">
                                   <p>We understand the challenges faced by financial advisors and accountants and deliver a highly personalised service, providing tailored support according to your business and advice needs.</p>
																	 <p>We offer four authorisation tiers coupled with a full range of in-house support services to help your business grow.</p>
																	 <p>As an independently-owned licensee, we are privately owned and there is no shareholding. If the ability to offer your clients holistic financial advice is important to you, choosing a licensee who is independently-owned simply makes sense.</p>
																	 <!--p class="p_last_padd">call 1300 306 900 or email info@capstonefp.com.au</p-->
                                   <div class="p_solution_read_more_resize">
                                   <a href="#">Read more</a>
                               </div>

                               </div>
                           </div>
                       </div>
                       <div class="col-md-6 restyling_md">
                           <div class="p_lorem_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_371616181.png" alt="">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>


       <div class="p_latest_news_area">
           <div class="container">
               <div class="p_news_title">
                   <h2>latest news</h2>
               </div>
               <div class="p_news_content_area">
                   <div class="row">
														<?php $the_query = new WP_Query( 'posts_per_page=2&category_name=market-recent' ); ?>

														<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
														<div class="col-md-6 resize_col_left">
																<div class="p_news_left_area">
																		<div class="col-md-6 resize_col_left ">
																				<div class="p_news_left_img">
																				<img src="<?php echo get_template_directory_uri(); ?>/images/shutterstock_459048889.png" alt="">

																		</div>
																	 </div>
																		<div class="col-md-6 resize_col_right">
																					<div class="p_news_content">
																				<h3><?php the_title(); ?></h3>
																				<h4><?php echo get_the_date(); ?></h4>
																				<p><?php echo excerpt(25); ?></p>
																				<div class="p_solution_read_more">
																				<a href="<?php the_permalink(); ?>">Read more</a>
																		</div>
																		</div>
																		</div>
																</div>
														</div>

														<?php
														endwhile;
														wp_reset_postdata();
														?>
                   </div>
               </div>
           </div>
       </div>


       <div class="p_support_solutions_area">
           <div class="container">
               <div class="p_support_solutions_title">
                   <h2>SUPPORT SOLUTIONS</h2>
                   <p>Capstone provides access to a unique national support structure</p>
               </div>
               <div class="p_support_list_one">
                   <div class="row">
                      <div class="p_support_list">
                       <div class="col-md-3 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object.png" alt="">

                           </div>
                           <h3>Compliance</h3>
                           <p>Our compliance team implement and maintain the risk and compliance framework which extends to providing support and guidance to financial advisers</p>
                            <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>

                       <div class="col-md-3 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object1.png" alt="">
                           </div>
                           <h3>Research</h3>
                           <p>Capstone provides quality research from leading provider Lonsec spanning a range of unlisted investments from managed funds through to alternative asset classes.</p>
                          <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>

                       <div class="col-md-3 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object2.png" alt="">


                           </div>
                           <h3>Paraplanning</h3>
                           <p>Our team of in-house paraplanners provide administrative support and assistance including the preparation of Statement of Advice documents.</p>
                          <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>

                       <div class="col-md-3 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object3.png" alt="">
                           </div>
                           <h3>Marketing</h3>
                           <p>Our marketing and communications team provides tailored, strategic and tactical market support to help you to promote and grow your business.</p>
                           <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>
                       </div>
                   </div>
               </div>
                <div class="p_support_list_two">
                   <div class="row">
                      <div class="p_support_list">
                       <div class="col-md-4 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object-copy-3.png" alt="">


                           </div>
                           <h3>Training</h3>
                           <p>We provide a comprehensive induction and ongoing professional development program including technical workshops and webinars.</p>
                            <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>

                       <div class="col-md-4 f_s_con">
                           <div class="p_support_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object5.png" alt="">


                           </div>
                           <h3>Technology</h3>
                           <p>We support the popular Xplan system which includes our own in-house help desk with the team providing technical support and assistance across all elements of Xplan.</p>
                          <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>

                       <div class="col-md-4 f_s_con">
                           <div class="p_support_img p_support_imgc">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object6.png" alt="">
                           </div>
                           <h3>Practice Coaching</h3>
                           <p>We offer a practice efficiency and coaching service to help you to grow your business through the use of technology and systems.</p>
                          <div class="p_support_read_more">
                                   <a href="#">Read more</a>
                               </div>
                       </div>


                       </div>
                   </div>
               </div>
           </div>
       </div>
<?php
get_footer();
