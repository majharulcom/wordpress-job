<?php
/**
 * capstone functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package capstone
 */
 require get_template_directory() . '/inc/theme-files.php';
if ( ! function_exists( 'capstone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function capstone_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on capstone, use a find and replace
	 * to change 'capstone' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'capstone', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'capstone' ),
		'footer' => esc_html__( 'Footer', 'capstone' ),
		'clients' => esc_html__( 'Clients', 'capstone' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'capstone_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'capstone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function capstone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'capstone_content_width', 640 );
}
add_action( 'after_setup_theme', 'capstone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function capstone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'capstone' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title hide">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Blog', 'capstone' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Advisers Home Page', 'capstone' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Capsdocs Page', 'capstone' ),
		'id'            => 'sidebar-10',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Clients Home Page', 'capstone' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'First Promo Area Advisers Home Page', 'capstone' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Second Promo Area Adviser Home Page', 'capstone' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'First Promo Area Clients Home Page', 'capstone' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Second Promo Area Clients Home Page', 'capstone' ),
		'id'            => 'sidebar-8',
		'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
register_sidebar( array(
	'name'          => esc_html__( 'Promo Area Capdocs', 'capstone' ),
	'id'            => 'sidebar-9',
	'description'   => esc_html__( 'Add widgets here.', 'capstone' ),
	'before_widget' => '<section id="%1$s" class="widget %2$s">',
	'after_widget'  => '</section>',
	'before_title'  => '<h3 class="widget-title">',
	'after_title'   => '</h3>',
) );
}
add_action( 'widgets_init', 'capstone_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function capstone_scripts() {
	wp_enqueue_style( 'capstone-style', get_stylesheet_uri() );

	wp_enqueue_script( 'capstone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'capstone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'capstone_scripts' );

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
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
function sagor_numeric_posts_nav() {

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
			echo '<li>�</li>';
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
			echo '<li>�</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

function wptp_add_categories_to_attachments() {
    register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'wptp_add_categories_to_attachments' );
/*function dwwp_register_post_type() {

	$singular = __( 'User Type' );
	$plural = __( 'User Types' );
        //Used for the rewrite slug below.
        $plural_slug = str_replace( ' ', '_', $plural );

        //Setup all the labels to accurately reflect this post type.
	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add New User Type',
		'add_new_item' 			=> 'Add New ' . $singular,
		'edit'		        	=> 'Edit',
		'edit_item'	        	=> 'Edit ' . $singular,
		'new_item'	        	=> 'New ' . $singular,
		'view' 					=> 'View ' . $singular,
		'view_item' 			=> 'View ' . $singular,
		'search_term'   		=> 'Search ' . $plural,
		'parent' 				=> 'Parent ' . $singular,
		'not_found' 			=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);

        //Define all the arguments for this post type.
	$args = array(
		'labels' 			  => $labels,
		'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-groups',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'page',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
        	'slug' => strtolower( $plural_slug ),
        	'with_front' => true,
        	'pages' => true,
        	'feeds' => false,

        ),
        'supports'            => array(
        	'title'
        )
	);

        //Create the post type using the above two varaiables.
	register_post_type( 'user_type', $args);
}
add_action( 'init', 'dwwp_register_post_type' );
*/
function sagor_register_post_type() {

	$singular = __( 'Company Name' );
	$plural = __( 'Companies Name' );
        //Used for the rewrite slug below.
        $plural_slug = str_replace( ' ', '_', $plural );

        //Setup all the labels to accurately reflect this post type.
	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add New Company Name',
		'add_new_item' 			=> 'Add New ' . $singular,
		'edit'		        	=> 'Edit',
		'edit_item'	        	=> 'Edit ' . $singular,
		'new_item'	        	=> 'New ' . $singular,
		'view' 					=> 'View ' . $singular,
		'view_item' 			=> 'View ' . $singular,
		'search_term'   		=> 'Search ' . $plural,
		'parent' 				=> 'Parent ' . $singular,
		'not_found' 			=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);

        //Define all the arguments for this post type.
	$args = array(
		'labels' 			  => $labels,
		'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-admin-multisite',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'page',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array(
        	'slug' => strtolower( $plural_slug ),
        	'with_front' => true,
        	'pages' => true,
        	'feeds' => false,

        ),
        'supports'            => array(
        	'title'
        )
	);

        //Create the post type using the above two varaiables.
	register_post_type( 'company_name', $args);
}
add_action( 'init', 'sagor_register_post_type' );
/* function my_filter_plugin_updates( $value ) {
	unset( $value->response['simple-membership/simple-wp-membership.php'] );
	unset( $value->response['simple-membership-after-login-redirection/swpm-after-login-redirection.php'] );
	return $value;
}
add_filter( 'site_transient_update_plugins', 'my_filter_plugin_updates' );
*/
function custom_loginlogo() {
echo '<style type="text/css">
h1 a {background-image: url('.get_bloginfo('template_directory').'/images/logo.png) !important; background-size: 200px !important; height: 130px !important; margin: 0 auto 0px !important; width: 200px !important; }
</style>';
}
add_action('login_head', 'custom_loginlogo');
add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
	return 'www.capstonefp.com.au';
}
function change_title_on_logo() {
	return 'Capstone Financial Planning';
}
add_filter('login_headertitle', 'change_title_on_logo');

/* ---  Mailchimp Integration   --- */

  function sagor_mailchimp_integration(){

		global $wpdb;
		$user = $wpdb->get_row("SELECT * FROM wp_swpm_members_tbl ORDER BY member_id DESC LIMIT 0 , 1" );

      //  Setting up mailchimp API key
      $apikey = 'f0b57d2423e8a48bb79f4df3511ccdda-us10';

      //  Setting up mailchimp subscription list id
      //$listid = '897c9c8cbb';

			if ($user->membership_level == 2) {
				  $listid = '47d8a8e695';
			}elseif ($user->membership_level == 3) {
				$listid = '14eb0a513f';
			}elseif ($user->membership_level == 4) {
				$listid = 'ac08643dfd';
			}else {
				$listid = 'f8017bba23';
			}

      //  Setting up server address to send request for subscription
      $server = substr( $apikey, strrpos( $apikey, '-' )+1 );

      //  Setting up user's data to send in request parameters
      $email = $user->email;
      $fname = $user->first_name;
      $lname = $user->last_name;


      $auth = base64_encode( 'user:'.$apikey );

      $data = array(
                    'apikey'        => $apikey,
                    'email_address' => $email,
                    'status'        => 'subscribed',
                    'merge_fields'  => array(
                                    'FNAME' => $fname,
                                    'LNAME' => $lname
                                    )
                    );
      //  Converting array to json format
      $json_data = json_encode($data);

      //  Initializing cURL
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, 'https://'.$server.'.api.mailchimp.com/3.0/lists/'.$listid.'/members/');
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization: Basic '.$auth));
      curl_setopt($ch, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
      $result = json_decode(curl_exec($ch));
      curl_close($ch);
      if( $result->status == 'subscribed' ){
              //  Subscription done
      }


}

// Attaching function with wordpress action hook.
add_action( 'user_register', 'sagor_mailchimp_integration' );

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




function sagor_show_content_shortcode( $atts, $content = null ) {
// default parameters
	extract(shortcode_atts(array(
		'level' => ''
	), $atts));

$myArray = explode(',', $level);
$member_level = SwpmMemberUtils::get_logged_in_members_level();
    if ( in_array($member_level, $myArray) || current_user_can( 'administrator' )) {
        return $content;
    } else {}
    }
add_shortcode( 'show_content', 'sagor_show_content_shortcode' );
