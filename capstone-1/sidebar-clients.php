<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package capstone
 */

?>
<aside id="secondary" class="widget-area" role="complementary">
	<!--h3>Blog Archive</h3-->
	<?php // wp_get_archives('cat=15'); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
<div class="custom">
	<div class="jf_link">
	<ul>
		<li>
			<a href="/advice-areas/wealth-protection" title="Wealth Protection">Wealth Protection</a></li>
		<li>
			<a href="/advice-areas/wealth-creation" title="Wealth Creation">Wealth Creation</a></li>
	</ul>
</div>
</div>
<div class="jf_contact">
	<div class="jf_content_contact">
		<h3>
			<a href="/find-an-adviser/search" title="Find an Adviser">Find an Adviser</a></h3>
		<div class="jf_info">
			<p>
				<a href="/find-an-adviser/search" title="Australia Wide">Australia Wide</a></p>
		</div>
	</div>
</div>
<div class="jf_contact">
<div class="jf_content_contact">
		<h3>
			<a href="/about-us-investors" title="About Us">About Us</a></h3>
		<div class="jf_info">
			<p>
				<a href="/about-us-investors" title="Seek Advice and discover the benefits">Seek Advice and discover the benefits</a></p>
		</div>
	</div>
</div>
</aside><!-- #secondary -->
