<?php
/*
Template Name: extrol com sizing
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

 <table width="80%" border="0" cellpadding="0" cellspacing="4">
 <tbody><tr><td colspan="3" align="left">
 <input type="radio" name="prodseries" value="residential" onclick="Javascript: location.href = '/resources-rewards/selection-tools/hydronic-expansion-tank-sizing/';"> <b>Residential</b> <input type="radio" name="prodseries" value="commercial" checked=""> <b>Commercial</b></td></tr>
<?php if(!empty($err)){ ?> <p class="err"> <?php echo $err; ?> </p> <?php }?>
 <tr>
 	<td align="left">Total System Volume</td>
 	<td><input type="text" name="totsysvol" value="<?php echo $_POST['totsysvol'] ?>" size="5">Gallons <i>(Range: 10 - 20,000)</i></td>
 </tr>

 <tr>
 	<td align="left">Min Operating Temp</td>
 	<td><select name="min_temp" class="min_temp">
 		<option value="">Select</option>
 		<option value="40">40</option>
 		<option value="50">50</option>
 		<option value="60">60</option>
 		<option value="70">70</option>
 		<option value="80">80</option>
 		<option value="90">90</option>
 		<option value="100">100</option>
 		<option value="110">110</option>
 		<option value="120">120</option>
 		<option value="130">130</option>
 		<option value="140">140</option>
 		<option value="150">150</option>
 		<option value="160">160</option>
 		</select> °F
 	</td>
 </tr>
 <tr>
 	<td align="left">Max Operating Temp</td>
 	<td><select name="max_temp" class="max_temp">
 		<option value="">Select</option>
 		<option value="60">60</option>
 		<option value="70">70</option>
 		<option value="80">80</option>
 		<option value="90">90</option>
 		<option value="100">100</option>
 		<option value="110">110</option>
 		<option value="120">120</option>
 		<option value="130">130</option>
 		<option value="140">140</option>
 		<option value="150">150</option>
 		<option value="160">160</option>
 		<option value="170">170</option>
 		<option value="180">180</option>
 		<option value="190">190</option>
 		<option value="200">200</option>
 		<option value="210">210</option>
 		<option value="220">220</option>
 		<option value="230">230</option>
 		<option value="240">240</option>

 		</select> °F
 	</td>
 </tr>
 <tr>
 	<td align="left">Antifreeze (Glycol)</td>
 	<td><select name="antifreez" class="antifreez">
 		<option value="">Select</option>
 		<option value="0">0% (Water Only)</option>
 		<option value="25">25%</option>
 		<option value="50">50%</option>
 		</select> % Concentration
 	</td>
 </tr>
 <tr>
 	<td align="left">Min Operating Pressure</td>
 	<td><input type="text" name="min_press" value="<?php echo $_POST['min_press'] ?>" size="5">PSI <i>(Range: 5 - 200)</i></td>

 </tr>
 <tr>
 	<td align="left">Max Operating Pressure</td>
 	<td><input type="text" name="max_press" value="<?php echo $_POST['max_press'] ?>" size="5">PSI <i>(Range: 10 - 300)</i></td>

 </tr>




 </tbody></table>
 <br>
 <input type="submit" name="submit_btn" value="Search">


 </form>

 <script language="Javascript">
     jQuery('.min_temp option[value="<?php echo $_POST['min_temp'] ?>"]').attr('selected','selected');
     jQuery('.max_temp option[value="<?php echo $_POST['max_temp'] ?>"]').attr('selected','selected');
     jQuery('.antifreez option[value="<?php echo $_POST['antifreez'] ?>"]').attr('selected','selected');
 </script>

 <div class="result_con">
<p class="recommend_model"><strong>Recommended Models:</strong></p>
<?php if(isset($fmodel)){ ?>
<table width="100%" border="0" cellpadding="0" cellspacing="4" style="font-size: 12px;">
<tbody>
<?php foreach ($fmodel as $smodel) { ?>
<tr><td align="left"><?php echo $smodel->series; ?> Series:</td><td><?php echo $smodel->model; ?></td></tr>
 <?php } ?>
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
