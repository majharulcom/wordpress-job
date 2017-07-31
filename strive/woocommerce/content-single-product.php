<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="col-md-7 produtc_single_left">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );



	?>
<div class="event_part">
	<?php
foreach( get_uf_repeater('add_events_left_section_contents') as $document_files ): extract( $document_files )
?>
	<div class="testing">
		<?php echo $event_description ?>
	</div>
<?php
endforeach;
?>
</div>

</div>
<div class="col-md-5 produtc_single_right">
	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>

	</div><!-- .summary -->
	<div class="event_part ev_right_location">
		<h2 class="event_details_h">DETAILS</h2>
		<ul>
		<?php
	foreach( get_uf_repeater('event_right_section_content') as $document_files ): extract( $document_files )
	?>

			<li><?php echo $input_your_details_here; ?></li>

	<?php
	endforeach;
	?>
	</ul>
</div>
<div class="event_part ev_right_schedule">
	<h2 class="event_details_h">SCHEDULE</h2>
		<ul>
	<?php
foreach( get_uf_repeater('event_schedule') as $document_files ): extract( $document_files )
?>

		<li><?php echo $schedule_description; ?>

<?php
endforeach;
?>
	</ul>
</div>
<div class="event_part ev_right_last">
		<?php $evening = get_uf('during_the_evening_part'); echo $evening; ?>
</div>
	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		//do_action( 'woocommerce_after_single_product_summary' );
	?>

	<meta itemprop="url" content="<?php the_permalink(); ?>" />

</div><!-- #product-<?php the_ID(); ?> -->
<?php //do_action( 'woocommerce_after_single_product' ); ?>
