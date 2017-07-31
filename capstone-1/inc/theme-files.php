<?php
function ubortho_theme_files() {
	global $wp_styles;

	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


	/* Registering Styles */
	/* FontAwesome */
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'font-awesome', get_stylesheet_uri(), array(), '1', 'all' );

	/* owl css */
	wp_register_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1', 'all' );
	wp_enqueue_style( 'owl', get_stylesheet_uri(), array(), '1', 'all' );
	wp_register_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1', 'all' );
	wp_enqueue_style( 'owl-theme', get_stylesheet_uri(), array(), '1', 'all' );
	/* Bootstrap css */
	wp_register_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'bootstrap-min', get_stylesheet_uri(), array(), '1', 'all' );

	/* Custom CSS */
	wp_register_style( 'custom-style', get_template_directory_uri() . '/css/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'custom-style', get_stylesheet_uri(), array(), '1', 'all' );

	/* Responsive CSS */
	wp_register_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1', 'all' );
	wp_enqueue_style( 'responsive', get_stylesheet_uri(), array(), '1', 'all' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'smart-border-main-style', get_stylesheet_uri() );


 	// Loads all javascript files
	// comment out the next two lines to load the local copy of jQuery
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.8.1');
			wp_enqueue_script('jquery');

	//Bootstrap js
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'',true);
	//Wow js
	wp_enqueue_script('carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js',array('jquery'),'',true);
	//Custom JS
	wp_enqueue_script('plugins', get_template_directory_uri() . '/js/custom.js',array('jquery'),'',true);



}
add_action('wp_enqueue_scripts', 'ubortho_theme_files');




?>
