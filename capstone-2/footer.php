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
	</div>
	<!-- Footer -->
	<footer class="jf-footer" role="contentinfo">
		<div class="container">
            <div class="jf-row-fluid">
			    <?php
					wp_nav_menu( array(
						'menu'              => 'footer',
						'theme_location'    => 'footer',
						'depth'             => 2,
						'menu_class'        => 'nav menu',
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
	<p>
	&copy; Copyright 2013 Capstone Financial Planning Pty Ltd .&nbsp; All rights reserved.</p>
</div>

            </div>
			<!--<p class="pull-right"><a href="#top" id="back-top">TPL_PROTOSTAR_BACKTOTOP</a></p>
			<p>&copy; Capstone 2016</p>-->
		</div>
	</footer>
	

<?php wp_footer(); ?>
</body>
</html>