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
 * @package bookkeeping
 */

get_header(); ?>

<div class="heading-area">
  <div class="container heading_container">
    <h1 class="business_heading">Being in business just got a whole lot easier</h1>
    <h4 class="second_business_heading">We help you get your bookwork up to date and show you how easy it is to use the Xero Accounting Software we recommend.  </h4>
    <div class="button_con">
      <a href="#" class="orange_filled_button extra_margin_right">GET A QUOTE</a>
      <a href="#" class="orange_border_button extra_margin_left">LEARN MORE</a>
    </div>
    <div class="accro_con">
      <div class="row row_with_out_padding">
        <div class="col-md-4 accro accro_1">
          <div class="accro_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/clock_icon.png" class="clock_icon" alt="clock_icon" />
        </div>
          <h3 class="accro_title">Cut your bookkeeping time by 80%</h3>
          <p class="accro_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/plus_icon.png" class="plus_icon" alt="plus_icon" />
        </div> <!-- End of accro -->
        <div class="col-md-4 accro accro_2">
          <div class="accro_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/message_icon.png" class="message_icon" alt="message_icon" />
        </div>
          <h3 class="accro_title">Your business will always be compliant</h3>
          <p class="accro_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/plus_icon.png" class="plus_icon" alt="plus_icon" />
        </div> <!-- End of accro -->
        <div class="col-md-4 accro accro_3">
          <div class="accro_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/square_icon.png" class="square_icon" alt="square_icon" />
        </div>
          <h3 class="accro_title">Our flexible services only for your business</h3>
          <p class="accro_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/plus_icon.png" class="plus_icon" alt="plus_icon" />
        </div> <!-- End of accro -->
      </div>
    </div>
  </div>
</div> <!-- End of heading-area -->
<div class="gray-area part part1">
  <div class="container part_container">
    <h1 class="part_heading text-center orange_text">Bookkeeping Solutions That Work</h1>
    <h4 class="part_second_heading text-center gray_text">Vidit Laudem Saperet Hase, Errem Graece Hamid Misal</h4>
    <hr class="orange_hr"/>
    <p class="content_para text-center gray_text">
      saperet has te, errem graece senserit an pro, sed id laudem dicunt. Per in platonem senserit interpretaris. Cu maiorum voluptua
um vix. Duo tamquam nostrud elaboraret te. Vim vidisse ornatus tibique eu, mea ex doctus persecuti. Id tollit fuisset denique nec, postea labores
nominati nec an, sed omnes sadipscing ad. Iudico definitionem et ius, duo ei cibo deserunt eleifend, at duo natum menandri. Cu sea possit
melius eloquentiam, tritani atomorum scribentur est at. Cu vivendo contentiones sed. Ut eum nostrum.
    </p>
      <a href="#" class="orange_filled_button_block margin_50_top">GET A QUOTE</a>
  </div>
</div> <!-- End of first Gray Part -->
<div class="white-area part part2">
  <div class="container part_container">
    <h1 class="part_heading text-center orange_text">We Are Offering The Services Below</h1>
    <h4 class="part_second_heading text-center gray_text">Vidit Laudem Saperet Hase, Errem Graece Hamid Misal</h4>
    <hr class="orange_hr"/>

    <div class="services_con">
      <div class="row row_with_out_padding">
        <div class="col-md-4 service service_1 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/bookkeeping_icon.png" class="clock_icon" alt="clock_icon" />
        </div>
          <h3 class="service_title black_text">Bookkeeping & Bank Reconciliations</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="col-md-4 service service_2 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/bas_icon.png" class="message_icon" alt="message_icon" />
        </div>
          <h3 class="service_title black_text">Preparing your BAS</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="col-md-4 service service_3 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/business_service_icon.png" class="square_icon" alt="square_icon" />
        </div>
          <h3 class="service_title black_text">Business Services</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="clear"></div>
        <div class="col-md-4 service service_1 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/office_icon.png" class="clock_icon" alt="clock_icon" />
        </div>
          <h3 class="service_title black_text">Office Administration Duties</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="col-md-4 service service_2 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/capital_icon.png" class="message_icon" alt="message_icon" />
        </div>
          <h3 class="service_title black_text">Capital Raising Forecasts</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="col-md-4 service service_3 text-center">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/cashflow_icon.png" class="square_icon" alt="square_icon" />
        </div>
          <h3 class="service_title black_text">Cashflow Forecasting</h3>
          <p class="secvice_para">
            Lorem ipsum dolor sit amet, ex iusto ubique per, his cu brute aliquando, in iriure bonorum democritum quo.
          </p>
        </div> <!-- End of secvice -->
        <div class="clear"></div>
      </div>
    </div>

      <a href="#" class="orange_filled_service_button">Explore More Services</a>
  </div>
</div> <!-- End of Third White Part -->


<div class="gray-area part part3">
  <div class="container part_container">
    <div class="projects_con">
      <div id="projects" class="row row_with_out_padding">
        <div class="col-md-3 text-center project">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/projects_icon.png" class="clock_icon" alt="clock_icon" />
        </div>
          <h3 class="project_title">366</h3>
          <h4 class="project_para">Projects Completed</h4>
        </div> <!-- End of secvice -->
        <div class="col-md-3 text-center project">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/completed_icon.png" class="message_icon" alt="message_icon" />
        </div>
          <h3 class="project_title">10</h3>
          <h4 class="project_para">Customer Reviews</h4>
        </div> <!-- End of secvice -->
        <div class="col-md-3 text-center project">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/happy_clients_icon.png" class="square_icon" alt="square_icon" />
        </div>
          <h3 class="project_title">206</h3>
          <h4 class="project_para">Happy Clients</h4>
        </div> <!-- End of secvice -->
        <div class="col-md-3 text-center project">
          <div class="service_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/winning_icon.png" class="clock_icon" alt="clock_icon" />
        </div>
          <h3 class="project_title">34</h3>
          <h4 class="project_para">Award Winning</h4>
        </div> <!-- End of secvice -->
      <div class="clear"></div>
      </div>
    </div>
  </div>
</div>


<div class="white-area part part4">
  <div class="container part_container">
    <h1 class="part_heading text-center orange_text">We Are a <span class="heavy_lato">XERO</span> Partner</h1>
    <h4 class="part_second_heading text-center gray_text">Vidit Laudem Saperet Hase, Errem Graece Hamid Misal</h4>
    <hr class="orange_hr"/>
    <div class="xero_con">
      <div id="xero" class="row row_with_out_padding">
        <div class="col-md-4 text-center">
          <div class="xero_icon_con">
          <img src="<?php echo get_template_directory_uri() ?>/images/xero_pic.png" class="clock_icon" alt="clock_icon" />
        </div>
        </div> <!-- End of secvice -->
        <div class="col-md-8 xero xero-right">
          <h3 class="xero_title orange_text">Work smarter, grow faster, live better!</h3>
          <p class="xero_para">Lorem ipsum dolor sit amet, has ex odio maiorum, vix ex eirmod aperiri ponderum. Ea m
            agna dolorem intellegebat per. Pro eu mollis iracundia. Mentitum lucilius explicari id sea,
            in usu quod propriae.</p>
            <p class="xero_para">Lorem ipsum dolor sit amet, has ex odio maiorum, vix ex eirmod aperiri ponderum. Ea m
            agna dolorem intellegebat per. Pro eu mollis iracundia. Mentitum lucilius explicari id sea,
            in usu quod propriae.</p>
        </div> <!-- End of secvice -->
      <div class="clear"></div>
      </div>
    </div>
  </div>
</div>


<div class="gray-area part part5">
  <div class="container part_container">
    <h1 class="part_heading text-center orange_text">Get In Touch</h1>
    <h4 class="part_second_heading text-center gray_text">Lorem ipsum dolor sit amet, has ex odio maiorum, vix ex eirmod aperiri ponderum. Ea magna dolor</h4>
    <hr class="orange_hr"/>
    <div class="xero_con">
      <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
    </div>
  </div>
</div>

<div class="white-area part part6">
  <div class="container part_container">
    <h1 class="part_heading text-center orange_text">What Our Clients Said</h1>
    <h4 class="part_second_heading text-center gray_text">Vidit Laudem Saperet Hase, Errem Graece Hamid Misal</h4>
    <div class="xero_con">
      <div id="xero" class="row row_with_out_padding">
          <div class="services_con">
            <div class="row row_with_out_padding">
              <div id="owl">
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->

                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->

                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->

                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->
                <div class="testimonial">
                  <div class="tes1 text-center">
                    <div class="tes_thumb">
                    <img src="<?php echo get_template_directory_uri() ?>/images/claire.jpg" class="clock_icon" alt="clock_icon" />
                    <div class="comment_sign">
                      <i class="fa fa-commenting" aria-hidden="true"></i>
                    </div>
                  </div>
                  <div class="tes">
                    <p class="tes_para gray_text">
                      “I run Hansen Constructions Pty Ltd, a building and construction firm. We contract and subcontract and have many concurrent projects.”
                    </p>
                    <h3 class="tes_name gray_text">Mila Kunis</h3>
                    <h3 class="tes_company orange_text">(CEO, Trendycode)</h3>
                  </div>
                  </div> <!-- End of tes -->
                </div><!-- End of testimonial -->

                </div> <!-- End of owl-id -->
              <div class="clear"></div>
            </div>
          </div>


      <div class="clear"></div>
      </div>
    </div>
  </div>
</div>

<div class="gray-area part part6">
  <div class="container part_container">
    <div class="blog_widgets_con">
      <div class="row row_with_out_padding">
        <div class="col-md-3 text-center blog_widget_text">
          <h1 class="blog_widget_heading text-left orange_text">Our Latest Post From The Blog</h1>
          <hr class="orange_hr_left"/>
          <p class="widget_para text-left gray_text">Lorem ipsum dolor sit amet, impedit offendit vim, sed putent mollis vituperata ex, at ullum cinsolens pro.</p>
          <a href="#" class="orange_filled_button_blog_widget margin_50_top">View All News</a>
        </div> <!-- End of blog_widget -->

        <div class="col-md-3 text-center blog_widget">
          <div class="blog_widget_icon_con">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/b_widget.jpg" class="message_icon" alt="message_icon" /></a>
          </div>
          <div class="blog_widget_left_con">
            <div class="date_con">
              <h4>APR</h3>
              <h2>16</h3>
            </div>
            <div class="left_plus_sign">
              <img src="<?php echo get_template_directory_uri() ?>/images/left_plus.png" alt="left_plus" />
            </div>
          </div>
          <div class="blog_widget_right_con">
            <a class="link_blog_widget" href="#"><h3 class="blog_widget_title text-left gray_text">Business Growth</h3></a>
            <p class="widget_para text-left gray_text">Lorem ipsum dolor it amet, impe dit off endit et vim, sed pu tent mah ayla</p>
          </div>
        </div> <!-- End of blog_widget -->
        <div class="col-md-3 text-center blog_widget">
          <div class="blog_widget_icon_con">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/b_widget.jpg" class="message_icon" alt="message_icon" /></a>
          </div>
          <div class="blog_widget_left_con">
            <div class="date_con">
              <h4>APR</h3>
              <h2>16</h3>
            </div>
            <div class="left_plus_sign">
              <img src="<?php echo get_template_directory_uri() ?>/images/left_plus.png" alt="left_plus" />
            </div>
          </div>
          <div class="blog_widget_right_con">
            <a class="link_blog_widget" href="#"><h3 class="blog_widget_title text-left gray_text">Business Growth</h3></a>
            <p class="widget_para text-left gray_text">Lorem ipsum dolor it amet, impe dit off endit et vim, sed pu tent mah ayla</p>
          </div>
        </div> <!-- End of blog_widget -->
        <div class="col-md-3 text-center blog_widget">
          <div class="blog_widget_icon_con">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/b_widget.jpg" class="message_icon" alt="message_icon" /></a>
          </div>
          <div class="blog_widget_left_con">
            <div class="date_con">
              <h4>APR</h3>
              <h2>16</h3>
            </div>
            <div class="left_plus_sign">
              <img src="<?php echo get_template_directory_uri() ?>/images/left_plus.png" alt="left_plus" />
            </div>
          </div>
          <div class="blog_widget_right_con">
            <a class="link_blog_widget" href="#"><h3 class="blog_widget_title text-left gray_text">Business Growth</h3></a>
            <p class="widget_para text-left gray_text">Lorem ipsum dolor it amet, impe dit off endit et vim, sed pu tent mah ayla</p>
          </div>
        </div> <!-- End of blog_widget -->
      <div class="clear"></div>

      </div>
    </div>
  </div>
</div>


<?php
//get_sidebar();
get_footer();
