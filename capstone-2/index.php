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
							<?php if ( have_posts() ) : ?>

							<?php query_posts( 'cat=13&order=desc' );?>

							<?php while ( have_posts() ) : the_post();?>

							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php endwhile; ?>
							
							<?php the_posts_navigation(); ?>
							
							<?php else : ?>
							
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
							
							<?php endif; ?>
							
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