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
	        <div class="col-md-6 contact_left">
						<h2 class="con_h">Drop us a line</h2>
						<p class="con_p">
							Please complete all fields * to before send email
						</p>
						<?php echo do_shortcode( '[contact-form-7 id="24" title="Contact form 1"]' ); ?>
						<hr class="grayw_hr" />
						<ul class="head_social pull-left">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
					</div> <!-- End of blog -->
					<div class="col-md-6 contact_right">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12607.348914596441!2d144.9642903144641!3d-37.81728142143243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne+VIC%2C+Australia!5e0!3m2!1sen!2sbd!4v1466053183640" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div> <!-- End of blog -->
	      </div>
	    </div>
	  </div>
		<?php wpbeginner_numeric_posts_nav(); ?>
	</div>
	<div class="gray-area part con_loc_part">
		  <div class="container part_container">
		    <div class="projects_con">
		      <div class="row row_with_out_padding">
		        <div class="col-md-4">
							<div class="contact_loc">
								<h3>Call Us Today</h3>
								<p>
									<span>TEL: 03 5222 8886</span>
									<span>FAX: 03 9614 2728</span>
								</p>
							</div>
						</div> <!-- End of blog -->
						<div class="col-md-4">
							<div class="contact_loc">
								<h3>Send An Email</h3>
								<p>
									<span class="email_text">tm@diligencegroup.com.au</span>
									<span class="email_text">tm@diligencegroup.com.au</span>
								</p>
							</div>
						</div> <!-- End of blog -->
						<div class="col-md-4">
							<div class="contact_loc">
								<h3>Location</h3>
								<p>
									<span>2/128 Yarra St</span>
									<span>GEELONG VIC 3220</span>
								</p>
							</div>
						</div> <!-- End of blog -->
		      </div>
		    </div>
		  </div>
			<?php wpbeginner_numeric_posts_nav(); ?>
		</div>
