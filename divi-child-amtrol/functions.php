<?php

//* Create Portfolio Type custom taxonomy
add_action( 'init', 'divi_type_taxonomy' );
function divi_type_taxonomy() {

	register_taxonomy( 'portfolio-type', 'portfolio',
		array(
			'labels' => array(
				'name'          => _x( 'Types', 'taxonomy general name', 'divi' ),
				'add_new_item'  => __( 'Add New Portfolio Type', 'divi' ),
				'new_item_name' => __( 'New Portfolio Type', 'divi' ),
			),
			'exclude_from_search' => true,
			'has_archive'         => true,
			'hierarchical'        => true,
			'rewrite'             => array( 'slug' => 'portfolio-type', 'with_front' => false ),
			'show_ui'             => true,
			'show_tagcloud'       => false,
		)
	);

}


//* Create portfolio custom post type
add_action( 'init', 'divi_portfolio_post_type' );
function divi_portfolio_post_type() {

	register_post_type( 'portfolio',
		array(
			'labels' => array(
				'name'          => __( 'Portfolio', 'divi' ),
				'singular_name' => __( 'Portfolio', 'divi' ),
			),
			'has_archive'  => true,
			'hierarchical' => true,
			'menu_icon'    => 'dashicons-portfolio',
			'public'       => true,
			'rewrite'      => array( 'slug' => 'portfolio', 'with_front' => false ),
			'supports'     => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),
			'taxonomies'   => array( 'portfolio-type' ),

		)
	);

}

//* Change the number of portfolio items to be displayed (props Brad Dalton)
add_action( 'pre_get_posts', 'divi_portfolio_items' );
function divi_portfolio_items( $query ) {

	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'portfolio' ) ) {
		$query->set( 'posts_per_page', '12' );
	}

}

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );




/**
 * Enqueue scripts and styles.
 */
function amtrol_helper_scripts() {

	// OWL css -->
	wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css' );


	// OWL js -->
	wp_enqueue_script( 'owl-jquery', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );
	// main js -->
	wp_enqueue_script( 'amtrol-main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'amtrol_helper_scripts' );


// Add additional files
require_once get_stylesheet_directory() . '/inc/shortcodes.php';

add_filter('wp_nav_menu_items','add_search_box', 10, 2);
function add_search_box($items, $args) {
    if($args->theme_location == 'primary-menu') {
        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        return $items .= '<li id="searchform-item-mobile" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-128">' . $searchform . '</li>';
    }
    return $items;
}