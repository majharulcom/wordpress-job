<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<!--p class="email_head"><?php //printf( __( "Hi there. Your registration on %s has been completed. Your registration details are shown below for your reference:", 'woocommerce' ), get_option( 'blogname' ) ); ?></p-->


	<p class="print_btn" style="color: #fff; font-weight: bold; text-decoration: none; text-align: center; display: block; background: #000; padding: 10px; font-size: 17px; margin-bottom: 20px;">Print and bring this ticket with you to the event</p>

	<table id="areaToPrint" class="tg" style="undefined; table-layout: fixed; width: 750px; border: 5px dotted;">
	<colgroup>
	<col style="width: 500px">
	<col style="width: 400px">
	</colgroup>
	  <tbody style="border: 4px dotted #ddd;"><tr>
			<th class="tg-031e" style="padding: 12px; border-right: 2px solid; padding-left: 25px; font-size: 20px;">Strive 2 Learn: Private practice seminar</th>
	    <th class="tg-031e" style="padding: 12px; padding-left: 25px;"><img src="https://strivecommunity.com.au/wp-content/themes/strive-community/images/logo_v2.png"  width="60" height="55.55px" style="float:right; display: block;" alt="logo"></th>
	  </tr>
	  <tr>
			<td class="tg-7uzy" style="padding: 12px; border-right: 2px solid; padding-left: 25px;"><strong>Event Date: <?php
				$order = new WC_Order( $order->id );
				$items = $order->get_items();
				foreach ( $items as $item ) {
						$product_id = $item['product_id'];
						//$product_variation_id = $item['variation_id'];

						$params = array('p'=> $product_id, 'posts_per_page' => 1, 'post_type' => 'product');
						$wc_query = new WP_Query($params);
						?>
						<?php if ($wc_query->have_posts()) : ?>
						<?php while ($wc_query->have_posts()) :
														$wc_query->the_post(); ?>
															<?php echo get_post_meta( get_the_ID(), 'event_date', true ); ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php endif;
				} ?> </strong>
		 	</td>
	    <td class="tg-7uzy" style="padding: 12px; padding-left: 25px;"><strong>Ticket Price: $
				<?php
				global $wpdb;
					 $order = new WC_Order($order->id);
					 $items = $order->get_items();
					 foreach ($items as $key => $product ) { ?>
					 <?php print_r($product['line_total']); ?>
				 <?php } ?></strong>
			</td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l" style="padding: 12px;  border-right: 2px solid; padding-left: 25px;"><strong>
				<?php
				$order = wc_get_order( $order->id );
				$items = $order->get_items();
				foreach ($items as $item) {
					$_product     = apply_filters( 'woocommerce_order_item_product', $order->get_product_from_item( $item ), $item );
					$item_meta    = new WC_Order_Item_Meta( $item, $_product );
					// Variation
					if ( ! empty( $item_meta->meta ) ) {
						echo  nl2br( $item_meta->display( true, true, '_', "\n" ) ) ;

					}
				}
				global $wpdb;
					 $order = new WC_Order($order->id);
					 $items = $order->get_items();
					 foreach ($items as $product ) { ?>
					  --- Ticket Quantity: <?php print_r($product['qty']); ?> <br/>
				 <?php }
				 ?>
			</strong></td>
	    <td class="tg-yw4l" style="padding: 12px; padding-left: 25px;"><strong>Name: <?php echo $order->billing_first_name . ' ' . $order->billing_last_name ; ?></strong></td>
	  </tr>
	  <tr>
	    <td class="tg-7uzy" style="padding: 12px; border-right: 2px solid; padding-left: 25px;"><strong>Vanue Title: <?php
			global $wpdb;
				 $order = new WC_Order($order->id);
				 $items = $order->get_items();
				 foreach ($items as $key => $product ) { ?>
				<?php print_r($product['name']); ?> <br/>
			 <?php } ?> </strong>
		 </td>
	    <td class="tg-7uzy" style="padding: 12px; padding-left: 25px;"><strong> Recipient Registration Code: #<?php echo $order->get_order_number(); ?></strong</td>
	  </tr>
	  <tr>
	    <td class="tg-yw4l" style="padding: 12px; border-right: 2px solid; padding-left: 25px;">
					<?php
						$order = new WC_Order( $order->id );
						$items = $order->get_items();
						foreach ( $items as $item ) {
						    $product_id = $item['product_id'];
						    //$product_variation_id = $item['variation_id'];

								$params = array('p'=> $product_id, 'posts_per_page' => 1, 'post_type' => 'product');
								$wc_query = new WP_Query($params);
								?>
								<?php if ($wc_query->have_posts()) : ?>
								<?php while ($wc_query->have_posts()) :
																$wc_query->the_post(); ?>
																	<?php the_post_thumbnail( array(75, 75) ); ?>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
								<?php endif;
						} ?>
				</td>
			 <td class="tg-7uzy" style="padding: 12px; padding-left: 25px;"><strong>Registration Date: </strong><?php echo $order->order_date; ?></td>
	  </tr>
	</tbody></table>

<style>@media print {
   body {
      color: #000;
      background: #fff;
   }
	 .email_head{
	 	display: none;
	 }
	 .print_btn{
	 	display: none;
	 }
}</style>
<?php // do_action( 'woocommerce_email_footer', $email ); ?>
