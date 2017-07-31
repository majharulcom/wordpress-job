<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package capstone
 */

get_header('other'); ?>

	<div id="primary" class="content-area">
	
	<div class="jf_content_main">
                <div class="parallax pr1" data-velocity="-.1" style="background-position: 0% -0.7px;"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100" style="background-position: 0% 96.5px;"></div>
                							
                 <div class="container">
                    <div class="row-fluid jfx_showcase">
                        			<div class="moduletable">
						<div class="autotitle">
<div class="jf_top_about">
<div class="jf_content_about">
<h1 style="line-height:60px">Blog</h1>
   <div class="jf_about">
	<p>
		<strong>Insights</strong></p>
	<p>
		Welcome to our Blog. We hope you find these posts relevant and informative.</p>
	<img alt="" src="<?php echo get_template_directory_uri ();?>/images/header-blog.png"></div>
</div>
</div>
</div> 
		</div>
				
                    </div>
                </div>      
								   <!--Main Content-->
	<div class="container">
		<div class="jfx_main_content">
			<div class="row-fluid">	                
		<div id="content" role="main" class="jf_inner_page span8">
								<!-- Begin Content -->
								
								<div id="system-message-container">
		</div>
							
								&#65279;



	<div class="blog">
				<div class="category-desc clearfix"></div>
					<div class="items-leading clearfix">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'capstone' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'capstone' ); ?></p>

					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );

						// Only show the widget if site has multiple categories.
						if ( capstone_categorized_blog() ) :
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'capstone' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php
						endif;

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'capstone' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
					</div><!-- #primary -->
				</div><!-- end items-leading -->
	</div>
<!-- End Content -->
<div id="aside" class="span4">
						<?php get_sidebar('blog'); ?>
								</div> 
        				</div>
        				        			<!--<div class="container">	
                                        	<div class="row-fluid">						
                   	        	
                        </div>
                                        </div>	-->	
                    </div>
                </div>
    		  </div>          
              <!--End main Content-->
               	
               <div class="jf_content_bottom">
                    <div class="container">
                    <div class="row-fluid">						
                        			<div class="moduletable jf_products span4">
						

<div class="custom jf_products span4">
	<div class="jf_product">
	<div class="jf_header">
		<h3>
			<a href="http://s55.com.au/capstone/about-us" title="About us">About Us</a></h3>
		<div class="jf_date jf_new">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="http://s55.com.au/capstone/about-us" title="About us"><img alt="" src="http://s55.com.au/capstone/wp-content/uploads/2016/04/img_product.png"></a></div>
		<div class="jf_text">
			<p>
				Our Story</p>
		</div>
	</div>
</div>
</div>
		</div>
			<div class="moduletable jf_products span4">
						

<div class="custom jf_products span4">
	<div class="jf_product">
	<div class="jf_header">
		<h3>
			<a href="http://s55.com.au/capstone/advice-solutions/financial-advisers/tier-4" title="Tier 4">Full Advice</a></h3>
		<div class="jf_date jf_new">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="http://s55.com.au/capstone/advice-solutions/financial-advisers/tier-4" title="Tier 4"><img alt="" src="http://s55.com.au/capstone/wp-content/uploads/2016/04/img_product.png"></a></div>
		<div class="jf_text">
			<p>
				Do you require full Authorisation?</p>
		</div>
	</div>
</div>
</div>
		</div>
			<div class="moduletable jf_Process span4">
						

<div class="custom jf_Process span4">
	<div class="jf_capstone">
	<div class="jf_header">
		<h3>
			<a href="http://s55.com.au/capstone/contact-us" title="Contact Us">Contact Us</a></h3>
		<div class="jf_date">
			<p>
				NEW</p>
		</div>
	</div>
	<div class="jf_intext">
		<div class="jf_image">
			<a href="http://s55.com.au/capstone/contact-us" title="Contact Us"><img alt="" class="cke-resize" src="http://s55.com.au/capstone/wp-content/uploads/2016/04/img_capstone.png"></a></div>
		<div class="jf_text">
			<p>
				Discover more about Capstone today</p>
		</div>
	</div>
</div>
<div id="ckimgrsz" style="left: 0px; top: 30px;">
	<div class="preview">
		&nbsp;</div>
</div>
</div>
		</div>
			
                    </div>
                 </div>
                </div>
                        </div>

<?php get_footer('other'); ?>