
<?php
/*
Template Name: extrol res sizing
*/

get_header(); $is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<div id="main-content">

<?php if ( ! $is_page_builder_used ) : ?>

 <div class="container">
   <div id="content-area" class="clearfix">
     <div id="left-area">

<?php endif; ?>

     <?php while ( have_posts() ) : the_post(); ?>

       <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

       <?php if ( ! $is_page_builder_used ) : ?>

         <h1 class="entry-title main_title"><?php the_title(); ?></h1>
       <?php
         $thumb = '';

         $width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

         $height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
         $classtext = 'et_featured_image';
         $titletext = get_the_title();
         $thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
         $thumb = $thumbnail["thumb"];

         if ( 'on' === et_get_option( 'divi_page_thumbnails', 'false' ) && '' !== $thumb )
           print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height );
       ?>

       <?php endif; ?>

         <div class="entry-content">
         <?php
           the_content();

           if ( ! $is_page_builder_used )
             wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
         ?>
         </div> <!-- .entry-content -->

       <?php
         if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );
       ?>

       </article> <!-- .et_pb_post -->

     <?php endwhile; ?>

<?php if ( ! $is_page_builder_used ) : ?>

     </div> <!-- #left-area -->

     <?php get_sidebar(); ?>
   </div> <!-- #content-area -->
 </div> <!-- .container -->

<?php endif; ?>


<div class="container selection_con">

 <form action="" method="POST">
 <span class="blue_head">Hydronic Expansion Tank Sizing</span>

 <table width="70%" border="0" cellpadding="0" cellspacing="4">
 <tbody><tr><td colspan="3" align="left">
 <input type="radio" name="prodseries" value="residential" checked=""> <b>Residential</b>
 <input type="radio" name="prodseries" value="commercial" onclick="Javascript: location.href = '/resources-rewards/selection-tools/extrol-com-sizing/';"> <b>Commercial</b></td></tr>

 	<tr>
 		<td valign="top" align="left">Boiler Net Output:<br><br></td>
 		<td valign="top">
 		<select name="boiler" class="boiler" style="width: 150px">
 			<option value=""></option>
 			<option value="50000">50,000</option>
 			<option value="75000">75,000</option>
 			<option value="100000">100,000</option>
 			<option value="125000">125,000</option>
 			<option value="150000">150,000</option>
 			<option value="175000">175,000</option>
 			<option value="200000">200,000</option>
 			<option value="250000">250,000</option>
 			<option value="300000">300,000</option>
 			<option value="350000">350,000</option>
 			<option value="400000">400,000</option>

 		</select> BTU/hour<br><br>
 		</td>
 	</tr>

 	<tr>
 		<td valign="top" align="left">Type of Raidation:<br><br></td>
 		<td valign="top">
 			<select name="radtype" class="radtype" style="width: 150px">
 				<option value=""></option>
 				<option value="baseboard">Finned Baseboard</option>
 				<option value="panels">Raidiant Panels</option>
 				<option value="unitheater">In-Wall Unit Heaters</option>
 				<option value="radiator">Cast Iron Radiators</option>
 			</select><br><br>
 		</td>

 	</tr>

 </tbody></table>
 <br>
 <input type="submit" name="submit_btn" value="Search">


 </form>
 <script language="Javascript">
     jQuery('.boiler option[value="<?php echo $_POST['boiler'] ?>"]').attr('selected','selected');
     jQuery('.radtype option[value="<?php echo $_POST['radtype'] ?>"]').attr('selected','selected');
 </script>

<div class="result_con">
  <p class="recommend_model">
    <strong>Recommended Model:</strong>
  </p>
<?php if(isset($fmodel)){?>
  <table width="100%" border="0" cellpadding="0" cellspacing="4" style="font-size: 12px;">
  <tbody>
  <tr><td><?php echo $fmodel; ?></td></tr>
  </tbody></table>
<?php } ?>

</div>

</div>


<div class="container no_padding_margin">
 <a href="/resources-rewards/selection-tools/" class="other_selection_link">WELL TANK SIZING <i class="fa fa-caret-right"></i></a>

</div>
<div class="container no_padding_margin">
 <a href="/resources-rewards/selection-tools/thermal-expansion-tank-sizing/" class="other_selection_link">THERMAL EXPANSION TANK SIZING <i class="fa fa-caret-right"></i></a>
</div>

<div class="et_pb_section  et_pb_section_2 et_section_regular find-a-pro-full">

					<div class=" et_pb_row et_pb_row_1">
				<div class="et_pb_column et_pb_column_4_4  et_pb_column_1">
				<div class="et_pb_promo et_pb_module et_pb_bg_layout_dark et_pb_text_align_left  et_pb_cta_0" style="background: url('/wp-content/uploads/2017/04/FindAPro.jpg') no-repeat; background-size: cover;">
				<div class="et_pb_promo_description">


<p><a class="big_link" href="/contact/find-a-sales-rep/"><span style="color: #d5002c;">FIND A PRO<i class="fa fa-caret-right big_right_arrow"></i></span></a></p>
<h3><span style="color: #ffffff;">Sales Reps, Wholesalers, Installers</span></h3>

				</div>

			</div>
			</div> <!-- .et_pb_column -->
			</div> <!-- .et_pb_row -->

			</div>

</div> <!-- #main-content -->

<?php get_footer(); ?>
