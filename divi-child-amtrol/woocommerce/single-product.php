<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

	<?php $value = get_field( 'features_area', $post_id );
	echo $value; ?>

<div id="installer-rewards" class="et_pb_section  et_pb_section_2 et_section_regular produtcts-btns-area">

					<div class=" et_pb_row et_pb_row_1 et_pb_equal_columns et_pb_gutters2">

						<div class="et_pb_column et_pb_column_1_2  et_pb_column_3">

						<div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_blurb_0 et_pb_blurb_position_top">
						<div class="et_pb_blurb_content">
							<div class="et_pb_main_blurb_image"><a href="/resources-rewards/selection-tools/"><img src="/wp-content/uploads/2017/04/SelectionTool_Home.jpg" alt="" class="et-waypoint et_pb_animation_off et-animated"></a></div>
							<div class="et_pb_blurb_container">


		<p><a class="big_link" href="/resources-rewards/selection-tools/"><span style="color: #07364a;">SELECTION TOOLS<i class="fa fa-caret-right big_right_arrow"></i></span></a></p>
		<h3><span style="color: #ffffff;">Sizing &amp; Application</span></h3>

							</div>
						</div> <!-- .et_pb_blurb_content -->
					</div> <!-- .et_pb_blurb -->
					</div>


					<div class="et_pb_column et_pb_column_1_2  et_pb_column_3">

						<div id="cus_id_install" class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left content_bottom et_pb_blurb_2 et_pb_blurb_position_top">
						<div class="et_pb_blurb_content">
							<div class="et_pb_main_blurb_image"><a href="/resources-rewards/installer-rewards/"><img src="/wp-content/uploads/2017/04/ima.jpg" alt="" class="et-waypoint et_pb_animation_off et-animated"></a></div>
							<div class="et_pb_blurb_container">


		<h3 class="install"><span style="color: #5f6062;">Installer</span></h3>
		<h2 class="rewards"><span style="color: #d5002c;">REWARDS</span></h2>
		<p><a class="et_pb_promo_button et_pb_button et_pb_custom_button_icon btn_sinple_product_cta" href="/resources-rewards/installer-rewards/" data-icon="E">LOGIN HERE</a></p>

							</div>
						</div> <!-- .et_pb_blurb_content -->
					</div> <!-- .et_pb_blurb --><div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left content_bottom et_pb_blurb_3 et_pb_blurb_position_top">
						<div class="et_pb_blurb_content">
							<div class="et_pb_main_blurb_image"><a href="/contact/contact-us/"><img src="/wp-content/uploads/2017/04/FindaProButton_Short.jpg" alt="" class="et-waypoint et_pb_animation_off et-animated"></a></div>
							<div class="et_pb_blurb_container">


		<p><a class="big_link" href="/contact/contact-us/"><span style="color: #d5002c;">FIND A PRO<i class="fa fa-caret-right big_right_arrow"></i></span></a></p>
		<h3><span style="color: #ffffff;">Sales Reps, Distributors, Installers</span></h3>

							</div>
						</div> <!-- .et_pb_blurb_content -->
					</div> <!-- .et_pb_blurb -->
					</div>

			</div> <!-- .et_pb_row -->

</div>
<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
