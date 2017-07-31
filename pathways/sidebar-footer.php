<div class="container">
	<div id="footer-widgets" class="clearfix">
        <div class="footer-widget footer-logo">
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>
			<div class="fwidget">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="" /></a>
			<?php endif; ?>
			</div>
		</div>
		
		<div class="footer-widget">
		<?php if ( ! dynamic_sidebar( 'sidebar-3' ) ) : ?>
			<div class="fwidget">
				<h4 class="title">About</h4>
				<ul>
					<li><a href="http://pathways3.wpengine.com/about/">About Richard J. Hews</a></li>
					<li><a href="http://pathways3.wpengine.com/success-stories/">Success Stories</a></li>
				</ul>
			</div>
		<?php endif; ?>
		</div>
		
		<div class="footer-widget">
		<?php if ( ! dynamic_sidebar( 'sidebar-4' ) ) : ?>
			<div class="fwidget">
				<h4 class="title">Resources</h4>
				<ul>
					<li><a href="http://pathways3.wpengine.com/resources/">News & Articles</a></li>
					<li><a href="http://pathways3.wpengine.com/resources/">Musings Blog</a></li>
					<li><a href="#">Workshops</a></li>
				</ul>
			</div>	
		<?php endif; ?>
		</div>
		
		<div class="footer-widget contact-widget last">
		<?php if ( ! dynamic_sidebar( 'sidebar-5' ) ) : ?>
		    <div class="fwidget">
				<h4 class="title">Contact</h4>
				<ul>
					<li><a href="#">richard@pathwaysofgrowth.com</a></li>
					<li><a href="#">860-857-3588</a></li>
				</ul>
			</div>
			<?php if ( false !== et_get_option( 'show_footer_social_icons', true ) ) { ?>
			  <div class="footer-socials"> 
				<?php	get_template_part( 'includes/social_icons', 'footer' ); ?>
			   </div>
			<?php }  ?>
			
		<?php endif; ?>
		

		
		</div>
		
	</div> <!-- #footer-widgets -->
</div>	<!-- .container -->