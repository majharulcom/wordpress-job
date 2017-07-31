<?php

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );
add_image_size( 'latest-post-thumb', 306, 240, true );
add_image_size( 'featured-thumb', 870, 390, true );
add_image_size( 'about-thumb', 350, 320, true );
add_image_size( 'blog-thumb', 610, 370, true );
add_image_size( 'blog-full', 990, 430, true );

/**
 * Enqueue scripts and styles.
 */
function pathways_helper_scripts() {

	// OWL carousel css -->
	wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');

	// OWL carousel js -->
	wp_enqueue_script( 'owl-carousel-jquery', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.2.1', true );

	// isotope js -->
	wp_enqueue_script( 'isotope-jquery', get_stylesheet_directory_uri() . '/js/isotope.pkgd.js', array('jquery'), '3.0.4', true );

	// Wordpress Masonry
	//wp_enqueue_script( 'jquery-masonry',array('jquery') );

	// main js -->
	wp_enqueue_script( 'plugins-active', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'pathways_helper_scripts' );


/**
 * Load Widget register file.
 */
require get_stylesheet_directory() . '/includes/widgets/pathway-contact.php';

// Add additional files
require_once get_stylesheet_directory() . '/includes/shortcodes.php';

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}

add_filter( 'body_class', 'add_slug_body_class' );
function get_score_word($score) {
	switch($score) {
		case 3: case 4:
			return "LOW";
			break;
		case 5: case 6: case 7:
			return "MEDIUM";
		case 8: case 9:
			return "HIGH";
			break;
		default:
			return "N/A";
			break;
	}
}
