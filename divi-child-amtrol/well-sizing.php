<?php
/*
Template Name: well sizing
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

  <div id="restext_gpm" style="display: none">GPM <span style="font-size: 10;"><i>(Range 1-30)</i></span></div>
  <div id="restext_min" style="display: none">Minutes <span style="font-size: 10"><i>(Range 1-4)</i></span></div>
  <div id="restext_psiA" style="display: none">PSI <span style="font-size: 10"><i>(Range 20-120)</i></span></div>
  <div id="restext_psiB" style="display: none">PSI <span style="font-size: 10"><i>(Range 21-125; Must be greater than Cut-In)</i></span></div>

  <div id="commtext_gpm" style="display: none">GPM <span style="font-size: 10;"><i>(Range 1-250)</i></span></div>
  <div id="commtext_min" style="display: none">Minutes <span style="font-size: 10"><i>(Range 1-4)</i></span></div>
  <div id="commtext_psiA" style="display: none">PSI <span style="font-size: 10"><i>(Range 20-245)</i></span></div>
  <div id="commtext_psiB" style="display: none">PSI <span style="font-size: 10"><i>(Range 21-250; Must be greater than Cut-In)</i></span></div>

  <script language="Javascript">

  function changeranges(type) {

  	val_gpm = document.getElementById(type+'text_gpm').innerHTML;
  	val_min = document.getElementById(type+'text_min').innerHTML;
  	val_psiA = document.getElementById(type+'text_psiA').innerHTML;
  	val_PSIB = document.getElementById(type+'text_psiB').innerHTML;

  	document.getElementById('gpm').innerHTML = val_gpm;
  	document.getElementById('min').innerHTML = val_min;
  	document.getElementById('psiA').innerHTML = val_psiA;
  	document.getElementById('psiB').innerHTML = val_PSIB;
  }

  </script>

  <form action="" method="POST">
 <span class="blue_head">Well Tank Sizing</span>
 <table width="100%" border="0" cellpadding="0" cellspacing="4">
 <tbody>
 <tr>
     <td colspan="3" align="left">
       <input type="radio" name="prodseries" class="radio" value="residential" onclick="Javascript: changeranges('res');" checked=""> <b>Residential</b>
       <input type="radio" name="prodseries" class="radio" value="commercial" onclick="Javascript: changeranges('comm');"> <b>Commercial</b>
       <?php if(!empty($err)){ ?> <p class="err"> <?php echo $err; ?> </p> <?php }?>
     </td>

 </tr>
 <tr>
 	<td align="left">Pump Flow Rate</td>
 	<td><input type="text" name="frate" value="<?php echo $_POST['frate']; ?>" size="10"></td>
 	<td id="gpm">GPM <span style="font-size: 10;"><i>(Range 1-30)</i></span></td>
 </tr>
 <tr>
 	<td align="left">Desired Pump Runtime</td>
 	<td><input type="text" name="pruntime" value="<?php echo $_POST['pruntime']; ?>" size="10"></td>
 	<td id="min">Minutes <span style="font-size: 10"><i>(Range 1-4)</i></span></td>
 </tr>
 <tr>
 	<td align="left">Cut-In Pressure</td>
 	<td><input type="text" name="cutin" value="<?php echo $_POST['cutin']; ?>" size="10"></td>
 	<td id="psiA">PSI <span style="font-size: 10"><i>(Range 20-120)</i></span></td>
 </tr>
 <tr>
 	<td align="left">Cut-Out Pressure</td>
 	<td><input type="text" name="cutout" value="<?php echo $_POST['cutout']; ?>" size="10"></td>
 	<td id="psiB">PSI <span style="font-size: 10"><i>(Range 21-125; Must be greater than Cut-In)</i></span></td>
 </tr>
 </tbody>
</table>




 <input type="submit" name="submit_btn" value="Search">

 </form>

 <script language="Javascript">

     changeranges('res');
     jQuery('input:radio[name="prodseries"][value="<?php echo $_POST['prodseries'] ?>"]').attr('checked', true);

 </script>
<div class="result_con">
  <p class="recommend_model"><strong>Recommended Models:</strong></p>
  <?php if(isset($found_array)){ ?>
  <table width="100%" border="0" cellpadding="0" cellspacing="4" style="font-size: 12px;">
  <tbody>
  <?php foreach ($found_array as $smodel) { ?>
  <tr><?php if($smodel->series !== 'residential'){ ?><td align="left"><?php echo $smodel->series; ?> :</td> <?php } ?><td><?php echo $smodel->model; ?></td></tr>
   <?php } ?>
   </tbody></table>
  <?php }

  //var_dump($sql);
  //var_dump($found_array);

  ?>
</div>


 </div>


<div class="container no_padding_margin">
  <a href="/resources-rewards/selection-tools/thermal-expansion-tank-sizing/" class="other_selection_link">Thermal Expansion Tank Sizing <i class="fa fa-caret-right"></i></a>

</div>
<div class="container no_padding_margin">
  <a href="/resources-rewards/selection-tools/hydronic-expansion-tank-sizing/" class="other_selection_link">Hydronic Expansion Tank Sizing <i class="fa fa-caret-right"></i></a>
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
