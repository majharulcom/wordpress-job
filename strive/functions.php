<?php
/**
 * Strive Community functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Strive_Community
 */
require_once('wp_bootstrap_navwalker.php');
if ( ! function_exists( 'strive_community_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
 require get_template_directory() . '/inc/theme-files.php';
function strive_community_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Strive Community, use a find and replace
	 * to change 'strive-community' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'strive-community', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'strive-community' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'strive_community_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'strive_community_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function strive_community_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'strive_community_content_width', 640 );
}
add_action( 'after_setup_theme', 'strive_community_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function strive_community_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'strive-community' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'strive-community' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'strive_community_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function strive_community_scripts() {
	wp_enqueue_style( 'strive-community-style', get_stylesheet_uri() );

	wp_enqueue_script( 'strive-community-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'strive-community-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'strive_community_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +

function woo_custom_cart_button_text() {

        return __( 'Book my spot', 'woocommerce' );

}
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    //unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    unset($fields['billing']['billing_phone']);
    unset($fields['order']['order_comments']);
    unset($fields['billing']['billing_address_2']);
    //unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_company']);
    //unset($fields['billing']['billing_last_name']);
    //unset($fields['billing']['billing_email']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_first_name']['label']);
    $fields['billing']['billing_first_name']['placeholder'] = 'First Name *';
    unset($fields['billing']['billing_last_name']['label']);
    $fields['billing']['billing_last_name']['placeholder'] = 'Last Name *';
    unset($fields['billing']['billing_postcode']['label']);
    $fields['billing']['billing_postcode']['placeholder'] = 'Postcode';
    unset($fields['billing']['billing_phone']['label']);
    $fields['billing']['billing_phone']['placeholder'] = 'Mobile *';
    $fields['billing']['billing_phone']['required'] = true;
    unset($fields['billing']['billing_email']['label']);
    $fields['billing']['billing_email']['placeholder'] = 'Email *';
    return $fields;
}
// removes Order Notes Title - Additional Information
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );



//remove Order Notes Field
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );

function remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}
add_filter( ‘woocommerce_product_tabs’, ‘sb_woo_remove_reviews_tab’, 98);

function sb_woo_remove_reviews_tab($tabs) {
unset($tabs[‘reviews’]);
return $tabs;
}


add_filter( 'woocommerce_order_button_text', 'woo_custom_order_button_text' ); // 2.1 +

function woo_custom_order_button_text() {

    return __( 'Complete Registration', 'woocommerce' );
}
add_filter( 'woocommerce_add_cart_item_data', 'woo_custom_add_to_cart' );

function woo_custom_add_to_cart( $cart_item_data ) {

    global $woocommerce;
    $woocommerce->cart->empty_cart();

    // Do nothing with the data and return
    return $cart_item_data;
}

/*
function woocommerce_variable_add_to_cart(){
    global $product, $post;

    $variations = find_valid_variations();

    // Check if the special 'price_grid' meta is set, if it is, load the default template:
    if ( get_post_meta($post->ID, 'price_grid', true) ) {
        // Enqueue variation scripts
        wp_enqueue_script( 'wc-add-to-cart-variation' );

        // Load the template
        wc_get_template( 'single-product/add-to-cart/variable.php', array(
                'available_variations'  => $product->get_available_variations(),
                'attributes'            => $product->get_variation_attributes(),
                'selected_attributes'   => $product->get_variation_default_attributes()
            ) );
        return;
    }

    // Cool, lets do our own template!
    ?>
    <table class="variations variations-grid" cellspacing="0">
        <tbody>
            <?php
            foreach ($variations as $key => $value) {
                if( !$value['variation_is_visible'] ) continue;
            ?>
            <tr>
                <td>
                    <?php foreach($value['attributes'] as $key => $val ) {
                        $val = str_replace(array('-','_'), ' ', $val);
                        printf( '<span class="attr attr-%s">%s</span>', $key, ucwords($val) );
                    } ?>
                </td>
                <td>
                    <?php echo $value['price_html'];?>
                </td>
                <td>
                    <?php if( $value['is_in_stock'] ) { ?>
                    <form class="cart" action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" method="post" enctype='multipart/form-data'>
                        <?php //woocommerce_quantity_input(); ?>
                        <?php
                        if(!empty($value['attributes'])){
                            foreach ($value['attributes'] as $attr_key => $attr_value) {
                            ?>
                            <input type="hidden" name="<?php echo $attr_key?>" value="<?php echo $attr_value?>">
                            <?php
                            }
                        }
                        ?>
                        <button type="submit" class="add_cart_regi_btn">Register!</button>
                        <input type="hidden" name="variation_id" value="<?php echo $value['variation_id']?>" />
                        <input type="hidden" name="product_id" value="<?php echo esc_attr( $post->ID ); ?>" />
                        <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $post->ID ); ?>" />
                    </form>
                    <?php } else { ?>
                        <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
                    <?php } ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}
function find_valid_variations() {
    global $product;

    $variations = $product->get_available_variations();
    $attributes = $product->get_attributes();
    $new_variants = array();

    // Loop through all variations
    foreach( $variations as $variation ) {

        // Peruse the attributes.

        // 1. If both are explicitly set, this is a valid variation
        // 2. If one is not set, that means any, and we must 'create' the rest.

        $valid = true; // so far
        foreach( $attributes as $slug => $args ) {
            if( array_key_exists("attribute_$slug", $variation['attributes']) && !empty($variation['attributes']["attribute_$slug"]) ) {
                // Exists

            } else {
                // Not exists, create
                $valid = false; // it contains 'anys'
                // loop through all options for the 'ANY' attribute, and add each
                foreach( explode( '|', $attributes[$slug]['value']) as $attribute ) {
                    $attribute = trim( $attribute );
                    $new_variant = $variation;
                    $new_variant['attributes']["attribute_$slug"] = $attribute;
                    $new_variants[] = $new_variant;
                }

            }
        }

        // This contains ALL set attributes, and is itself a 'valid' variation.
        if( $valid )
            $new_variants[] = $variation;

    }

    return $new_variants;
}

function wc_remove_all_quantity_fields( $return, $product ) {
    return true;
}
add_filter( 'woocommerce_is_sold_individually', 'wc_remove_all_quantity_fields', 10, 2 );
*/
function sv_remove_product_page_skus( $enabled ) {
    if ( ! is_admin() && is_product() ) {
        return false;
    }

    return $enabled;
}
add_filter( 'wc_product_sku_enabled', 'sv_remove_product_page_skus' );

add_action( 'template_redirect', 'wc_custom_redirect_after_purchase' );
function wc_custom_redirect_after_purchase() {
	global $wp;

	if ( is_checkout() && ! empty( $wp->query_vars['order-received'] ) ) {
		wp_redirect( '/thank-you/' );
		exit;
	}
}

/**
 * Autocomplete Paid Orders (WC 2.2+)
 */

add_filter( 'woocommerce_payment_complete_order_status', 'bryce_wc_autocomplete_paid_orders' );
function bryce_wc_autocomplete_paid_orders( $order_status, $order_id ) {

	$order = wc_get_order( $order_id );

	if ($order_status == 'processing') {
		return 'completed';
	}

	return $order_status;

}


// Add Variation Settings
//add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );
// Save Variation Settings
//add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );
/*
 * Create new fields for variations
 *

function variation_settings_fields( $loop, $variation_data, $variation ) {
  // Text Field
  	woocommerce_wp_text_input(
  		array(
  			'id'          => '_text_field[' . $variation->ID . ']',
  			'label'       => __( 'My Text Field', 'woocommerce' ),
  			'placeholder' => 'http://',
  			'desc_tip'    => 'true',
  			'description' => __( 'Enter the custom value here.', 'woocommerce' ),
  			'value'       => get_post_meta( $variation->ID, '_text_field', true )
  		)
  	);
}

 * Save new fields for variations
 *
function save_variation_settings_fields( $post_id ) {
  // Text Field
	$text_field = $_POST['_text_field'][ $post_id ];
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_text_field', esc_attr( $text_field ) );
	}
}
// Add New Variation Settings
add_filter( 'woocommerce_available_variation', 'load_variation_settings_fields' );
/**
 * Add custom fields for variations
 *

function load_variation_settings_fields( $variations ) {

	// duplicate the line for each field
	$variations['text_field'] = get_post_meta( $variations[ 'variation_id' ], '_text_field', true );

	return $variations;
}
*/
//remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);
add_action('woocommerce_before_single_product_summary','woocommerce_template_single_title',5);
//remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',30);
//add_action('woocommerce_before_single_product_summary','woocommerce_template_single_add_to_cart',30);





// Add Variation Settings
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );

// Save Variation Settings
add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );

/**
 * Create new fields for variations
 *
*/
function variation_settings_fields( $loop, $variation_data, $variation ) {

	// Text Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_text_field[' . $variation->ID . ']',
			'label'       => __( 'Variation Custom Price Field', 'woocommerce' ),
			'placeholder' => '$25',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the custom value here.', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_text_field', true )
		)
	);
  // input_value Field
	woocommerce_wp_text_input(
		array(
			'id'          => '_input_value[' . $variation->ID . ']',
			'label'       => __( 'Variation Starting Cart Value', 'woocommerce' ),
			'placeholder' => '3',
			'desc_tip'    => 'true',
			'description' => __( 'Enter the Variation Starting Cart Value here.', 'woocommerce' ),
			'value'       => get_post_meta( $variation->ID, '_input_value', true )
		)
	);
}

/**
 * Save new fields for variations
 *
*/
function save_variation_settings_fields( $post_id ) {

	// Text Field
	$text_field = $_POST['_text_field'][ $post_id ];
	if( ! empty( $text_field ) ) {
		update_post_meta( $post_id, '_text_field', esc_attr( $text_field ) );
	}
  // Text Field
  $text_field = $_POST['_input_value'][ $post_id ];
  if( ! empty( $text_field ) ) {
    update_post_meta( $post_id, '_input_value', esc_attr( $text_field ) );
  }
}


// Add New Variation Settings
add_filter( 'woocommerce_available_variation', 'load_variation_settings_fields' );
/**
 * Add custom fields for variations
 *
*/
function load_variation_settings_fields( $variations ) {

	// duplicate the line for each field
	$variations['text_field'] = get_post_meta( $variations[ 'variation_id' ], '_text_field', true );
  // duplicate the line for each field
	$variations['input_value'] = get_post_meta( $variations[ 'variation_id' ], '_input_value', true );

	return $variations;
}
// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

/*
// Simple products
add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );

function jk_woocommerce_quantity_input_args( $args, $product ) {
	if ( is_singular( 'product' ) ) {
		$args['input_value'] 	= 5;	// Starting value (we only want to affect product pages, not cart)
	}
	//$args['max_value'] 	= 80; 	// Maximum value
	$args['min_value'] 	= 5;   	// Minimum value
	//$args['step'] 		= 2;    // Quantity steps
	return $args;
}
*/
// Variations
add_filter( 'woocommerce_quantity_input_args', 'jk_woocommerce_quantity_input_args', 10, 2 );
function jk_woocommerce_quantity_input_args($args, $product) {
global $product;
//$product_variable = new WC_Product_Variable($product->id);
//$product_variations = $product_variable->get_available_variations();
//$variation_product_id = $product_variations [2]['variation_id'];

$isd = array();
foreach( $woocommerce->cart->cart_contents as $product_in_cart ) {
	$isd[] =  $product_in_cart['variation_id'];
}

foreach ($isd as $value) {
  if ($value === 248) {
    $args['input_value'] 		= 5;    // Quantity steps
    $args['min_value'] = 5;   	// Minimum value (variations)
    $args['min_qty'] = 5;   	// Minimum value (variation

  }
}






  return $args;

    // Quantity steps;
}
