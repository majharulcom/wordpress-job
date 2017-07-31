<?php
/*
Template Name: Amtrol Warranty Information
*/

 get_header(); $is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

 <div id="main-content">



 <?php if ( ! $is_page_builder_used ) : ?>

 	<div class="container">
 		<div id="content-area" class="clearfix">
 			<div id="left-area">


   <?php
    $searched_term = htmlspecialchars($_SERVER["QUERY_STRING"]);
    $sqlw = $wpdb->get_row("SELECT * FROM warranty WHERE SERIALNUM = '$searched_term'");
    //var_dump($sqlw);
   ?>
        <?php
        if (count($sqlw)> 0) { ?>
          <h2 style="color: green;">Model Information Found</h2>
        </br>
                <div style="border: 1px solid black; padding: 15px; width: 500px;">
                                    <b>Serial Number:</b> <?php echo $sqlw->SERIALNUM; ?><br>
                                    <b>Model Number:</b> <?php echo $sqlw->MODEL; ?><br>
                                    <b>Date:</b>  <?php $originalDate = $sqlw->PRODDATE; $newDate = date("M d, Y", strtotime($originalDate));  echo $newDate; ?>
                                    <br><b>To apply for warranty, contact your Amtrol Distributor<br>
                                    Original ownership required: <?php if($sqlw->CLAIMED == 'Y'){echo "Yes";}else{echo "No";}; ?></b>
                </div>
        <?php }else{ ?>
          <h2 style="color: #ee3e42;">No records were found for: <?php echo $searched_term; ?></h2>
        <?php }  ?>


 <?php endif; ?>

 			<?php while ( have_posts() ) : the_post(); ?>

 				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 				<?php if ( ! $is_page_builder_used ) : ?>

 					<h1 class="entry-title main_title"><?php //the_title(); ?></h1>
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

    <strong>Warranty applies only to the original purchaser or first user of the product and is subject to verification by AMTROL.</strong>

    This is a service to determine manufacture date and is not proof of warranty eligibility. Standard warranty procedures must be followed. All AMTROL warranty terms and conditions apply. AMTROL reserves the right to review all claims.

    Refer to original product warranty provided with the unit to determine the warranty period and limitations.

<div class="clear"></div>

 	</div> <!-- .container -->
<div class="clear"></div>
</br>
 <?php endif;

    //$_SERVER["QUERY_STRING"]



  ?>





</div>

 </div> <!-- #main-content -->

<?php get_footer(); ?>
