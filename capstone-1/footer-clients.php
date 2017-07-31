<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?>
	<!-- Footer -->
	<div class="footer" role="contentinfo">
		<div class="container">
            <div class="row-fluid">
			    <?php
					wp_nav_menu( array(
						'menu'              => 'footer',
						'theme_location'    => 'footer',
						'depth'             => 2,
						'menu_class'        => 'nav menu jf_footer_about span10',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
					);
				?>
<div class="custom jf_socials span2"  >
	<div class="jf_social span3">
	<ul>
		<li class="jf_in">
			<a href="https://www.linkedin.com/company/480231 4?trk=tyah&amp;trkInfo=tarId%3A141557472607 7%2Ctas%3Acapstone%20financial%20planni ng%2Cidx%3A1-2-2"><img alt="" src="<?php echo get_template_directory_uri(); ?>/images/icon_in.png" /></a></li>
	</ul>
</div>
</div>


<div class="custom span12"  >
	<div class="jf_copy span12">
	<p>
		Level 14, 461 Bourke St, Melbourne VIC, 3000 | Tel 1300 306 900<br />
		&copy; Copyright 2013. Capstone Financial Planning Pty Ltd. All rights reserved. ABN 24 093 733 969. Australian Financial Services / Australian Credit Licence No. 223135.</p>
</div>
</div>

            </div>
			<!--<p class="pull-right"><a href="#top" id="back-top">Back to Top</a></p>
			<p>&copy; Capstone 2016</p>-->
		</div>
	</div>
	
<?php wp_footer(); ?>
</body>
</html>