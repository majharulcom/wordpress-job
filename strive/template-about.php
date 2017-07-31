<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Strive_Community
 */
/*
Template Name: About Page
*/
get_header('other'); ?>
<?php global $theme_options ?>
<?php $image = get_field('header_image'); ?>
<?php if($image) : ?><div class="register_head_con register_bg" style="background: url(<?php echo $image['url']; ?>) no-repeat !important; background-size: cover !important; background-position: top center !important;"><?php else : ?> <div class="register_head_con register_bg">	<?php endif; ?>
    <div class="container">
        <div class="banner_text_other">
          <?php $banner_text = get_field('header_large_text'); ?>
          <?php if($banner_text) : ?><h2 class="title_header_register text-center green_text"><?php echo $banner_text; ?></h2><?php else : ?><h2 class="title_header_register text-center green_text">Register</h2><?php endif; ?>
          <?php $banner_secont_text = get_field('header_small_text'); ?>
            <?php if($banner_secont_text) : ?><p class="text-center gray_text register_para"><?php echo $banner_secont_text; ?></span></p><?php else : ?><p class="text-center gray_text register_para">Eos virtute lucilius in, vis cu erant conceptam. Quo ne velit commune verterem, te commodo concludaturque</p><?php endif; ?>
        </div>
    </div>
</div>
	<div class="bread_cram_con">
		<div class="bread_cram">
			<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
		</div>
	</div>

  <div class="addable_area_about_us_con">
    <?php if( have_rows('about_page_about_us_section') ): ?>
    	<?php while( have_rows('about_page_about_us_section') ): the_row();
    		$content = get_sub_field('about_us_content');
    		?>
        <div class="addable_area_about_us">
              <div class="container">
                <div class="addable_area_about_us_container">
                    <?php echo $content; ?>
                </div>
              </div>
          </div>
    	<?php endwhile; ?>
    <?php else : ?>
        <div class="addable_area_about_us">
              <div class="container">
                <div class="addable_area_about_us_container">
                    <div class="col-md-4">
                      <h3>Some words about us</h3>
                      <h4>Working since 2006</h4>
                    </div>
                    <div class="col-md-4">
                      <p>Lorem ipsum dolor sit amet, vestibulum in ultricie
      quam nec class. Mollis porttitor dictum per nunc
      vel facilisis, sit eget elit leo, hac ullamcorper sapie
      n id mauris et. Sodales.</p>
      <p>
      Lorem ipsum dolor sit amet, vestibulum in ultricie
      quam nec class. Mollis porttit</p>
                    </div>
                    <div class="col-md-4">
                      <p>Lorem ipsum dolor sit amet, vestibulum in ultricie
      quam nec class. Mollis porttitor dictum per nunc
      vel facilisis, sit eget elit leo, hac ullamcorper sapie
      n id mauris et. Sodales.</p>
      <p>
      Lorem ipsum dolor sit amet, vestibulum in ultricie
      quam nec class. Mollis porttit</p>
                    </div>
                </div>
              </div>
        <?php endif; ?>
      </div>
</div>




<div class="container-full">
				<div class="row">
          <?php if( have_rows('about_page_image_section') ): ?>
          	<?php while( have_rows('about_page_image_section') ): the_row();
          		$contents = get_sub_field('about_page_image_content');
              $images = get_sub_field('about_page_image_itself');

          		?>
          <div class="addable_area_image_con">
      					<div class="col-md-6 addable_common_side_con">
      						<div class="addable_side_container">
                    <?php echo $contents; ?>
      					</div>
              </div>
      					<div class="col-md-6 addable_common_side_con">
                  <img src="<?php echo $images['url']; ?>" alt="<?php echo $images['alt'] ?>" />
              </div>
          </div>
        <?php endwhile; ?>
        <?php else : ?>
          <div class="addable_area_image_con">
      					<div class="col-md-6 addable_common_side_con">
      						<div class="addable_side_container">
                  <h2><span class="releway_extra_bold">How it all began-</span> Your community of psychologists in private practice</h2>
                  <p>Lorem ipsum dolor sit amet, mus orci litora blandit, nec tortor quam leo, libero dolor id dolo
quisque, praesent suscipit ut vestibulum nec in molestie, montes accumsan pharetra ridicul
ut tristique rutrum porta iaculis vel. Condimentum nonummy ac condimentum, ut id eu ve
venenatis, nullam suspendisse quisque, at elit, a risus</p>
      						</div>
      					</div>
      					<div class="col-md-6 addable_common_side_con">
      							<img src="/wp-content/uploads/2016/08/dafada.jpg" alt="image">
      					</div>
          </div>
          <?php endif; ?>
				</div>
			</div>


      <?php $bottom_content = get_field('about_page_bottom_content'); ?>
      <?php if($bottom_content) : ?>
        <?php echo $bottom_content; ?>
      <?php else : ?>
      <div class="fourth_area gray_background padding_less_top">
      			<div class="container">
      				<h2 class="title_header_subs text-center off_white_text">RECEIVE A NOTIFICATION WHEN WE ADD A NEW EVENT</h2>
      				<form class="subs_form" action="index.html" method="post">
      					<input type="text" class="subs_input" name="name" value="" placeholder="Enter your email">
      					<input type="button" class="subs_button" name="name" value="SUBSCRIBE">
      				</form>
      				<p class="legal_n text-center off_white_text">
      					* We promise, we won’t spam you
      				</p>
      			</div>
      	</div>
      <div class="second_area white_background">
      			<div class="container">
      				<!--h3 class="part4_headding">Dates & Locations</h3-->
      				<h2 class="part_h1_about text-center margin_top_0">Our Achievements</h2>
      				<div class="gray_divider"></div>
      			</div>
      			<div class="row dash_area padding_bottom">
      				<div class="col-md-6 aded_ds">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/IVx6ZlksMJw" frameborder="0" allowfullscreen></iframe>
      					</div>
      				<div class="col-md-6">
                    <p class="tes_para_register">
        						Lorem ipsum dolor sit amet, mus orci litora blandit, nec tortor quam leo, libero dolor
  id dolor mus quisque, praesent suscipit ut vestibulum nec in molestie, montes acc
  umsan pharetra ridiculus. Amet ut tristique rutrum porta iaculis vel. Condimentum no
  ummy ac condimentum, ut id eu vestibulum venenatis, nullam suspendisse qu
  isque, at elit, a risus. Vestibulum lorem etiam sed, proin euru
        						</p>
                    <p class="tes_para_register">
                    Lorem ipsum dolor sit amet, mus orci litora blandit, nec tortor quam leo, libero dolor
  id dolor mus quisque, praesent suscipit ut vestibulum nec in molestie, montes acc
  umsan pharetra ridiculus. Amet .</p>
  <p class="tes_para_register">
  Lorem ipsum dolor sit amet, mus orci litora blandit, nec tortor quam leo, libero dolor
  id dolor mus quisque, praesent suscipit ut vestibulum nec in molestie, mon.</p>
      			</div>
      	</div>
      <div class="about_area_invite off_white_background">
            			<div class="dash_area">
            				<div class="col-md-6"><h1 class="title_header_subs green_text">Our Next Event is in <a href="#" class="bold_link">Melbourne</a></h1></div>
            				<div class="col-md-6"><a href="/get-access/" class="about_go_blog" target="_blank">Book my post</a></div>
            			</div>
      </div>
<?php endif; ?>
			<?php /*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-about', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					//comments_template();
				endif;

			endwhile; // End of the loop.
		*/	?> 
<?php
//get_sidebar();

get_footer();
