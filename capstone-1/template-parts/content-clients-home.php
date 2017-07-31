<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package capstone
 */

?>
<div class="jf_content_main">
                <div class="parallax pr1" data-velocity="-.1" style="background-position: 0% -40px;"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100" style="background-position: 0% -100px;"></div>
                                <!--Main Content-->
                <div class="container">
    	            <div class="jfx_main_content adviser_back">
                        <div class="row-fluid">	                
						<?php the_content(); ?>
						<div id="aside" class="span4">
        					<!-- Begin Right Sidebar -->
						<?php get_sidebar('clients_home'); ?>
						<!-- End Right Sidebar -->
					</div>
                    </div>
                </div>
    		  </div>          
              <!--End main Content-->
               	
<?php get_sidebar('clients_home_promo1'); ?> 
                        </div>
<?php get_sidebar('clients_home_promo2'); ?> 
