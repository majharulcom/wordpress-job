<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pss
 */

?>

<div class="blue_area">
		<div class="container">
				<div class="single_areas_con blog_home_con">
						<div class="col-md-3">
								<div class="single_servise_con">
										<h4 class="home_footer_heading">ABOUT US <span class="orange_line"></span></h4>
										<p class="footer_para">Lorem ipsum dolor sit amet, aperiri l quando at vix. Esse vivendo mnesarch qui, tale atomorum scribentur vix eu, usu lorem gubergren. Pri facer tractat mplectitur ei. Phaedrum euripidi te est, ea noluisse percipit ius. Us s dicit eripuit ea.</p>
								</div>
						</div>
						<!--end of blog home -->
						<div class="col-md-3">
								<div class="single_servise_con">
										<h4 class="home_footer_heading">BLOG FEED</h4>
										<div class="blog_feed">
												<a href="#" class="blog_feed_a"># 5 Ways to lead a happy life-
Psychological conflicts</a>
												<p class="feed_date">AUG 16,2016</p>
										</div>
										<div class="blog_feed">
												<a href="#" class="blog_feed_a"># 5 Ways to lead a happy life-
Psychological conflicts</a>
												<p class="feed_date">AUG 16,2016</p>
										</div>
										<div class="blog_feed">
												<a href="#" class="blog_feed_a"># 5 Ways to lead a happy life-
Psychological conflicts</a>
												<p class="feed_date">AUG 16,2016</p>
										</div>

								</div>
						</div>
						<!--end of blog home -->
						<div class="col-md-3">
								<div class="single_servise_con">
										<h4 class="home_footer_heading">SERVICES</h4>
										<ul class="service_ul">
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Talk Therapy</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Anxiety Disorders</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Couple Counseling</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Sex Therapy</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Eating Disorders</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Psychology Coaching</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> EAP</a></li>
												<li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Mediation Service</a></li>
										</ul>
								</div>
						</div>
						<!--end of blog home -->
						<div class="col-md-3">
								<div class="single_servise_con">
										<h4 class="home_footer_phone orange_text">1300-307-188</h4>
										<p class="footer_para_address">211 Connells Point Rd Connells
Point 2221</p>
							 <a class="footer_email">mkilley@optusnet.com.au</a>
										<ul class="footer_social">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										</ul>
								</div>
						</div>
						<!--end of blog home -->

				</div>
		</div>
</div>
<div class="blue_area_footer">
		<div class="container">
				<p class="copy_right">Psychologist Southern Sytdney @ 2016-2018 | All Rights Reserved. Privacy Policy</p>
		</div>
</div>
<?php wp_footer(); ?>
<script>
// Adding code to create an effect on the header/nav on scroll
jQuery(function( $ ){

	if( $( document ).scrollTop() > 0 ){
		$( 'header' ).addClass( 'stick' );			
	}

	// Add opacity class to site header
	$( document ).on('scroll', function(){

		if ( $( document ).scrollTop() > 0 ){
			$( 'header' ).addClass( 'stick' );			

		} else {
			$( 'header' ).removeClass( 'stick' );			
		}

	});


});
</script>
</body>
</html>
