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
</div> 
		</div>
				
                    </div>
                </div>      
								   <!--Main Content-->
	<div class="container">
		<div class="jfx_main_content">
			<div class="row-fluid">	                
		<div id="content" role="main" class="jf_inner_page span12">
								<!-- Begin Content -->
								
								<div id="system-message-container">
		</div>
							
								&#65279;



	<div class="blog">
				<div class="category-desc clearfix"></div>
					<div class="items-leading clearfix">
		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'capstone' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
					</div><!-- #primary -->
				</div><!-- end items-leading -->
	</div>
<!-- End Content -->
        				</div>
        				        			<!--<div class="container">	
                                        	<div class="row-fluid">						
                   	        	
                        </div>
                                        </div>	-->	
                    </div>
                </div>
    		  </div>          
              <!--End main Content-->
                        </div>

<?php get_footer('other'); ?>