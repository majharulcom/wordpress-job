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
 * @package capstone
 */
/*
Template Name: Dashboard Template
*/
get_header('dashboard'); ?>

<div class="blog_loop_con">
    <div class="container">
        <div class="row">
          <div class="content_con_blogs">
            <div class="col-md-9 other_page">
               <div class="col-md-5">
                 <div class="dash_img_con">
                     <img src="<?php echo get_template_directory_uri() ?>/images/dash_imss.jpg" alt="">
                     <div class="dash_img_con_text">
                         <i class="fa fa-user-circle u_color" aria-hidden="true"></i>
                         <h2 class="text_he_dash">Effective tips in using
Social Media to build
your profile</h2>
                     </div>
                 </div>
               </div>
               <div class="col-md-7">
                   <div class="company_ann">
                       <h3 class="company_ann_head">Company Announcements </h3>
                       <div style="overflow-y: scroll; height:253px;">
                                   <?php $the_query = new WP_Query( 'posts_per_page=8&category_name=marketing-latest' ); ?>
														<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                         <div class="cm_ann_single">
                                              <div class="col-md-8 no_padding_left">
                                               <h4 class="cm_sn_title"><?php the_title();  ?></h4>
                                               <p class="cm_sin_para"><?php echo excerpt(10); ?></p>
                                               </div>
                                               <div class="col-md-4">
                                                 <div class="p_solution_read_more single_read">
                                                       <a href="<?php the_permalink();  ?>">Read more</a>
                                                   </div>
                                               </div>
                                           </div>
                      <?php endwhile; wp_reset_postdata(); ?>
                   </div>
               </div>
               </div>
               <div class="clear"></div>
                   <div class="dash_sers_con">
                      <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object3.png" alt="">
                           </div>
                           <h3><a href="/adviser-centre/marketing/">Marketing</a></h3>
                           <ul>
                                   <li><a href="/adviser-centre/marketing/">Adviser Support Materials <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/marketing/">Latest Articles <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/marketing/">Marketing Guides <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/marketing/">Digital Supports <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <a href="/adviser-centre/marketing/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                           </div></div>

                       <div class="col-md-4">
                          <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object.png" alt="">
                           </div>
                           <h3><a href="/adviser-centre/Compliance/">Compliance</a></h3>
                               <ul>
                                   <li><a href="/adviser-centre/Compliance/">Forms and Templates <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/Compliance/">Tools and Guidelines <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/Compliance/">Compliance Manual <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/Compliance/">Financial Services Guide <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <a href="/adviser-centre/Compliance/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                               </div>
                       </div>
                        <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/peopl.png" alt="">
                           </div>
                           <h3><a href="/adviser-centre/education-centre/">Education Centre</a></h3>
                           <ul>
                                   <li><a href="/adviser-centre/education-centre/">Training Calendar <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/education-centre/">Webinars <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/education-centre/">Case Studies<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/education-centre/">PD Day Presentations <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <a href="/adviser-centre/education-centre/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                           </div></div>
                            <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object2.png" alt="">
                           </div>
                           <h3>Paraplanning</h3>
                           <ul>
                                   <li><a href="#">Paraplanning Request Form <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="#">Paraplanning Process Map <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <!--a href="/adviser-centre/education-centre/"><img src="<? //php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a-->
                           </div></div>
                       <div class="col-md-4">
                                  <div class="dash_ser_con">
                                       <div class="p_dash_img">
                                           <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object1.png" alt="">
                                       </div>
                                       <h3><a href="/adviser-centre/research/">Research</a></h3>
                                       <ul>
                                   <li><a href="/adviser-centre/research/">Recommended Lists <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/research/">Research Information <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/research/">C-wrap <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/research/">C-smsf <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                                  <a href="/adviser-centre/research/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                                   </div>
                        </div>
                        <div class="col-md-4">
                                  <div class="dash_ser_con">
                                       <div class="p_dash_img">
                                           <img src="<?php echo get_template_directory_uri(); ?>/images/sett.png" alt="">
                                       </div>
                                       <h3>Xplan Support</h3>
                                       <ul>
                                   <li><a href="#">Troubleshooting  Guide <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                                  <!--a href="/adviser-centre/xplan-support/"><img src="<?php // echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a-->
                                   </div>
                        </div>
                        <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img p_support_imgc">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/Vector-Smart-Object6.png" alt="">
                           </div>
                           <h3><a href="/adviser-centre/practice-efficiency-coaching/">Practice Efficiency & Coaching</a></h3>
                           <ul>
                                   <li><a href="/adviser-centre/practice-efficiency-coaching/">Client Engagement Model <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/practice-efficiency-coaching/">Understanding your Business Costs <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/practice-efficiency-coaching/">How to Develop your CVP <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <a href="/adviser-centre/practice-efficiency-coaching/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                               </div>
                       </div>

                       <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/usev.png" alt="">
                           </div>
                           <h3><a href="/adviser-centre/employee-services/">Employee Services</a></h3>
                           <ul>
                                   <li><a href="/adviser-centre/employee-services/">Leave and Expense Forms <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/employee-services/">Capstone Organisation Chart <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/employee-services/">Employee Manual <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="/adviser-centre/employee-services/">Policies <img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                               <a href="/adviser-centre/employee-services/"><img src="<?php echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a>
                           </div></div>

                       <div class="col-md-4">
                           <div class="dash_ser_con">
                           <div class="p_dash_img">
                               <img src="<?php echo get_template_directory_uri(); ?>/images/jjdd.png" alt="">
                           </div>
                           <h3>Practice Support</h3>
                                <ul>
                                   <li><a href="#">Staff Directory<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="#">Support Services<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="#">Certificate of Currency T1 & T2<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="#">Certifcate of Currency T3 & T4<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                                   <li><a href="#">Capstone Tax Invoice<img src="<?php echo get_template_directory_uri(); ?>/images/link_line.png" class="arrow_up" alt=""></a></li>
                               </ul>
                                 <!--a href="/adviser-centre/practice-support/"><img src="<?php // echo get_template_directory_uri(); ?>/images/right_s_arrow.jpg" class="right_a_s" alt=""></a-->
                           </div></div>


                </div></div>
              <div class="col-md-3 dashboard_sidebar_con">
                <div class="dash_si_con">
                 <h3 class="sidebar_head_dashboard">Quick Links</h3>
                 <div class="dashboard_sidebar">
                     <ul>
                         <li><a href="#">Forms and Templates</a></li>
                        <li><a href="#">Approved Product List</a></li>
                        <li><a href="#">Training Calendar</a></li>
                        <li><a href="#">PI Insurance documents</a></li>
                        <li><a href="#">Informed Investor Articles</a></li>
                        <li><a href="#">Staff Directory</a></li>
                         <li><a href="#">Strategic Partners Directory</a></li>
                     </ul>
                 </div>
                 </div>
                 <div class="dash_si_con">
                 <h3 class="sidebar_head_dashboard">Get in touch</h3>
                 <div class="dashboard_sidebar">
                    <p>1300 306 900</p>
                     <ul>
                         <li><a href="/adviser-centre/marketing/"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Marketing</a></li>
                        <li><a href="/adviser-centre/Compliance/"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Compliance</a></li>
                        <li><a href="/adviser-centre/education-centre/"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Education Centre</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Paraplanning</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Xplan</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Training</a></li>
                         <li><a href="#"><i class="fa fa-envelope-o dash_side_icon" aria-hidden="true"></i>Practice Support</a></li>
                     </ul>
                 </div>
                 </div>

                 <div class="dash_si_con_yellow">
                    <img src="<?php echo get_template_directory_uri() ?>/images/celen.png" alt="">
                     <h3 class="sidebar_head_ya">Meeting Rooms</h3>
                     <a href="#" class="sidebar_dash_p">Book a meeing room</a>
                 </div>
                 <div class="dash_si_con_yellow back_green">
                     <img src="<?php echo get_template_directory_uri() ?>/images/keyboard.png" alt="">
                     <h3 class="sidebar_head_ya">Xplan Support</h3>
                     <a href="#" class="sidebar_dash_p">Submit an IT request</a>
                 </div>

                 <a href="/capdocs/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/capdoc.jpg" class="side_img" alt=""> </a>
                 <a href="http://www.beyond.lonsec.com.au/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/lonsec.jpg" class="side_img" alt=""> </a>
                 <a href="https://www.iress.com/au/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/iress.jpg" class="side_img" alt=""> </a>
              </div>
          </div>

        </div>
    </div>
</div>
<?php get_footer('dashboard'); ?>
