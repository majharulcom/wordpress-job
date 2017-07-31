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
                <div class="parallax pr1" data-velocity="-.1"></div>
                <div class="parallax pr2" data-velocity="-.5" data-fit="100"></div>
                                <!--Main Content-->
                <div class="container">
    	            <div class="jfx_main_content adviser_back">
                        <div class="row-fluid">	 
							<?php the_content(); ?>
						<!-- End Content -->
						</div>
						<div id="aside" class="span4">
							<!-- Begin Right Sidebar -->						
								<?php get_sidebar('adviser_home'); ?>
							<!-- End Right Sidebar -->
						</div>
							<!--<div class="container">	
							<div class="row-fluid">						
                        </div>
                                        </div>	-->	
                    </div>
                </div>
    		  </div>          
              <!--End main Content-->
<?php get_sidebar('adviser_home_promo1'); ?>
                        </div>
<?php get_sidebar('adviser_home_promo2'); ?> 