<?php
/**
 * Twenty Thirteen functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see https://codex.wordpress.org/Theme_Development
 * and https://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link https://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * Set up the content width value based on the theme's design.
 *
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 604;

/**
 * Add support for a custom header image.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Twenty Thirteen only works in WordPress 3.6 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '3.6-alpha', '<' ) )
	require get_template_directory() . '/inc/back-compat.php';

/**
 * Twenty Thirteen setup.
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Thirteen supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add Visual Editor stylesheets.
 * @uses add_theme_support() To add support for automatic feed links, post
 * formats, and post thumbnails.
 * @uses register_nav_menu() To add support for a navigation menu.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_setup() {

	/*
	 * Makes Twenty Thirteen available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'twentythirteen', get_template_directory() . '/languages' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	//add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentythirteen_fonts_url() ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * This theme supports all available post formats by default.
	 * See https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Navigation Menu', 'twentythirteen' ) );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );

}
add_action( 'after_setup_theme', 'twentythirteen_setup' );

/**
 * Return the Google font stylesheet URL, if available.
 *
 * The use of Source Sans Pro and Bitter by default is localized. For languages
 * that use characters not supported by the font, the font can be disabled.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string Font stylesheet or empty string if disabled.
 */
function twentythirteen_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	 * supported by Source Sans Pro, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$source_sans_pro = _x( 'on', 'Source Sans Pro font: on or off', 'twentythirteen' );

	/* Translators: If there are characters in your language that are not
	 * supported by Bitter, translate this to 'off'. Do not translate into your
	 * own language.
	 */
	$bitter = _x( 'on', 'Bitter font: on or off', 'twentythirteen' );

	if ( 'off' !== $source_sans_pro || 'off' !== $bitter ) {
		$font_families = array();

		if ( 'off' !== $source_sans_pro )
			$font_families[] = 'Source Sans Pro:300,400,700,300italic,400italic,700italic';

		if ( 'off' !== $bitter )
			$font_families[] = 'Bitter:400,700';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds Masonry to handle vertical alignment of footer widgets.
	if ( is_active_sidebar( 'sidebar-1' ) )
		wp_enqueue_script( 'jquery-masonry' );

	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	//wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );

	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentythirteen-fonts', twentythirteen_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	//wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.03' );

	// Loads our main stylesheet.
	wp_enqueue_style( 'twentythirteen-style', get_stylesheet_uri(), array(), '2013-07-18' );

	// Loads the Internet Explorer specific stylesheet.
//	wp_enqueue_style( 'twentythirteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentythirteen-style' ), '2013-07-18' );
	wp_style_add_data( 'twentythirteen-ie', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'twentythirteen_scripts_styles' );

/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function twentythirteen_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentythirteen' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'twentythirteen_wp_title', 10, 2 );

/**
 * Register two widget areas.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the footer section of the site.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Secondary Widget Area', 'twentythirteen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'twentythirteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentythirteen_widgets_init' );

if ( ! function_exists( 'twentythirteen_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentythirteen' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'twentythirteen_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_post_nav() {
	global $post;

	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous )
		return;
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'twentythirteen' ) ); ?>
			<?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'twentythirteen' ) ); ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'twentythirteen_entry_meta' ) ) :
/**
 * Print HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentythirteen_entry_meta() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'twentythirteen' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		twentythirteen_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentythirteen' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'twentythirteen' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;

if ( ! function_exists( 'twentythirteen_entry_date' ) ) :
/**
 * Print HTML with date information for current post.
 *
 * Create your own twentythirteen_entry_date() to override in a child theme.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param boolean $echo (optional) Whether to echo the date. Default true.
 * @return string The HTML-formatted post date.
 */
function twentythirteen_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'twentythirteen' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'twentythirteen' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;

if ( ! function_exists( 'twentythirteen_the_attached_image' ) ) :
/**
 * Print the attached image with a link to the next attached image.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_the_attached_image() {
	/**
	 * Filter the image attachment size to use.
	 *
	 * @since Twenty thirteen 1.0
	 *
	 * @param array $size {
	 *     @type int The attachment height in pixels.
	 *     @type int The attachment width in pixels.
	 * }
	 */
	$attachment_size     = apply_filters( 'twentythirteen_attachment_size', array( 724, 724 ) );
	$next_attachment_url = wp_get_attachment_url();
	$post                = get_post();

	/*
	 * Grab the IDs of all the image attachments in a gallery so we can get the URL
	 * of the next adjacent image in a gallery, or the first image (if we're
	 * looking at the last image in a gallery), or, in a gallery of one, just the
	 * link to that image file.
	 */
	$attachment_ids = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    => -1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID',
	) );

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( reset( $attachment_ids ) );
	}

	printf( '<a href="%1$s" title="%2$s" rel="attachment">%3$s</a>',
		esc_url( $next_attachment_url ),
		the_title_attribute( array( 'echo' => false ) ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return string The Link format URL.
 */
function twentythirteen_get_link_url() {
	$content = get_the_content();
	$has_url = get_url_in_content( $content );

	return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}

if ( ! function_exists( 'twentythirteen_excerpt_more' ) && ! is_admin() ) :
/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ...
 * and a Continue reading link.
 *
 * @since Twenty Thirteen 1.4
 *
 * @param string $more Default Read More excerpt link.
 * @return string Filtered Read More excerpt link.
 */
function twentythirteen_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
			/* translators: %s: Name of current post */
			sprintf( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
		);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'twentythirteen_excerpt_more' );
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Active widgets in the sidebar to change the layout and spacing.
 * 3. When avatars are disabled in discussion settings.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentythirteen_body_class( $classes ) {
	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_active_sidebar( 'sidebar-2' ) && ! is_attachment() && ! is_404() )
		$classes[] = 'sidebar';

	if ( ! get_option( 'show_avatars' ) )
		$classes[] = 'no-avatars';

	return $classes;
}
add_filter( 'body_class', 'twentythirteen_body_class' );

/**
 * Adjust content_width value for video post formats and attachment templates.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_content_width() {
	global $content_width;

	if ( is_attachment() )
		$content_width = 724;
	elseif ( has_post_format( 'audio' ) )
		$content_width = 484;
}
add_action( 'template_redirect', 'twentythirteen_content_width' );

/**
 * Add postMessage support for site title and description for the Customizer.
 *
 * @since Twenty Thirteen 1.0
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function twentythirteen_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector' => '.site-title',
			'container_inclusive' => false,
			'render_callback' => 'twentythirteen_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector' => '.site-description',
			'container_inclusive' => false,
			'render_callback' => 'twentythirteen_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'twentythirteen_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Twenty Thirteen 1.9
 * @see twentythirteen_customize_register()
 *
 * @return void
 */
function twentythirteen_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Twenty Thirteen 1.9
 * @see twentythirteen_customize_register()
 *
 * @return void
 */
function twentythirteen_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Enqueue Javascript postMessage handlers for the Customizer.
 *
 * Binds JavaScript handlers to make the Customizer preview
 * reload changes asynchronously.
 *
 * @since Twenty Thirteen 1.0
 */
function twentythirteen_customize_preview_js() {
	//wp_enqueue_script( 'twentythirteen-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20141120', true );
}
add_action( 'customize_preview_init', 'twentythirteen_customize_preview_js' );
 add_action('wp_ajax_filter', 'filter');
add_action('wp_ajax_nopriv_filter', 'filter');
 function filter(){
	  $cat_id=$_REQUEST['id'];
	  if($cat_id=='all'){
		   $args = array(
							'posts_per_page' => -1,
							'post_type' => array('our_events'),
							'post_status'=>'publish',
							'paged' => $paged,

						);
	  } else{
		   $args = array(
							'posts_per_page' => -1,
							'post_type' => array('our_events'),
							'post_status'=>'publish',
							'paged' => $paged,

							'tax_query' => array(

								array('taxonomy' => 'event-year-category',
								'field' => 'id',
								'terms' => array($cat_id)),

							)

						);
	  }

$query = new WP_Query ($args);
						//print_r($query );
						while ( $query->have_posts() ) {
								$query->the_post();
								$post_thumbnail_id_events = get_post_thumbnail_id(get_the_id());
$image_attributes_events = wp_get_attachment_image_src($post_thumbnail_id_events,'thumbnail',true);
$event_last_date=strtotime(get_post_meta(get_the_id(),'event_last_date',true));
 $current_date=strtotime(date('m/d/Y'));
 if($event_last_date>=$current_date){
?>
<div class="col-md-6 col-md-6 col-xs-12">
              <div class="event">
                <div class="row">
                   <div class="col-md-7 col-sm-6 col-xs-6">
                    <div class="event-img"><a href="<?php echo get_permalink();?>" ><img title="<?php echo get_the_title();?>" alt="<?php echo get_the_title();?>" src="<?php echo $image_attributes_events[0]; ?>"></a></div>
                  </div>
                   <div class="col-md-5 col-sm-6 col-xs-6">
                   <div class="event-detail"> <div class="event-title">
                      <h4><a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a></h4>
                      <ul>

                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $event_start_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_start_date',true)));?>-<?php echo $event_last_date=date('d F Y',strtotime(get_post_meta(get_the_id(),'event_last_date',true)));?></li>
                        <?php $venue= get_post_meta(get_the_id(),'venue',true);
						if($venue){
							//echo' <li><i class="fa fa-map-marker" aria-hidden="true"></i>'.$venue.'</li>';
						}?>
                      <!--
                       <li><i class="fa fa-shopping-bag" aria-hidden="true"></i>$354</li>-->
                      </ul>
                    </div>
                    <div class="event-info">
                      <p><?php echo get_the_excerpt();?></p>
					   <span class="view-mor-btn" > <a class="common-btn" href="<?php echo get_permalink();?>">View More</a> </span>
                    </div>
                    <div class="buy-ticket"> <a  title="" href="<?php echo get_permalink();?>/#payment_url" >BUY TICKET</a> </div></div>
                  </div>
                </div>
              </div>
                      </div>

						<?php }}
 die; }
 //add_filter('show_admin_bar', '__return_false');
 /********General Setting CopyRight******/
 add_filter('admin_init', 'CopyRight');
function CopyRight()
{
    register_setting('general', 'CopyRight', 'esc_attr');
    add_settings_field('CopyRight', '<label for="CopyRight">'.__('CopyRight' , 'CopyRight' ).'</label>' , 'CopyRight_1', 'general');
}
function CopyRight_1()
{
    $value = get_option( 'CopyRight', '' );
    echo '<input type="text" id="CopyRight" name="CopyRight" value="' . $value . '" />';
}

/********General Setting Company_Address******/
 add_filter('admin_init', 'Company_Address');
function Company_Address()
{
    register_setting('general', 'Company_Address', 'esc_attr');
    add_settings_field('Company_Address', '<label for="Company_Address">'.__('Company Address').'</label>' , 'Company_Address_1', 'general');
}
function Company_Address_1()
{
    $value = get_option( 'Company_Address', '' );
    echo '<input type="text" id="Company_Address" name="Company_Address" value="' . $value . '" />';
}
/********General Setting Company_Contact******/
 add_filter('admin_init', 'Company_Contact');
function Company_Contact()
{
    register_setting('general', 'Company_Contact', 'esc_attr');
    add_settings_field('Company_Contact', '<label for="Company_Contact">'.__('Company Contact Number').'</label>' , 'Company_Contact_1', 'general');
}
function Company_Contact_1()
{
    $value = get_option( 'Company_Contact', '' );
    echo '<input type="text" id="Company_Contact" name="Company_Contact" value="' . $value . '" />';
}
/********General Setting Facebook******/
 add_filter('admin_init', 'Facebook');
function Facebook()
{
    register_setting('general', 'Facebook', 'esc_attr');
    add_settings_field('Facebook', '<label for="Facebook">'.__('Facebook Url' , 'Facebook Url' ).'</label>' , 'Facebook_1', 'general');
}
function Facebook_1()
{
    $value = get_option( 'Facebook', '' );
    echo '<input type="text" id="Facebook" name="Facebook" value="' . $value . '" />';
}

/********General Setting Twitter******/
 add_filter('admin_init', 'Twitter');
function Twitter()
{
    register_setting('general', 'Twitter', 'esc_attr');
    add_settings_field('Twitter', '<label for="Twitter">'.__('Twitter Url' , 'Twitter Url' ).'</label>' , 'Twitter_1', 'general');
}
function Twitter_1()
{
    $value = get_option( 'Twitter', '' );
    echo '<input type="text" id="Twitter" name="Twitter" value="' . $value . '" />';
}
/********General Setting Linkedin******/
 add_filter('admin_init', 'Linkedin');
function Linkedin()
{
    register_setting('general', 'Linkedin', 'esc_attr');
    add_settings_field('Linkedin', '<label for="Linkedin">'.__('Linkedin Url' , 'Linkedin Url' ).'</label>' , 'Linkedin_1', 'general');
}
function Linkedin_1()
{
    $value = get_option( 'Linkedin', '' );
    echo '<input type="text" id="Linkedin" name="Linkedin" value="' . $value . '" />';
}

/********General Setting GPlus******/
 add_filter('admin_init', 'GPlus');
function GPlus()
{
    register_setting('general', 'GPlus', 'esc_attr');
    add_settings_field('GPlus', '<label for="GPlus">'.__('Google+ Url' , 'Google+ Url' ).'</label>' , 'GPlus_1', 'general');
}
function GPlus_1()
{
    $value = get_option( 'GPlus', '' );
    echo '<input type="text" id="GPlus" name="GPlus" value="' . $value . '" />';
}
/********General Setting Pinterest ******/
 add_filter('admin_init', 'Pinterest');
function Pinterest()
{
    register_setting('general', 'Pinterest', 'esc_attr');
    add_settings_field('Pinterest', '<label for="Pinterest">'.__('Pinterest Url' , 'Pinterest Url' ).'</label>' , 'Pinterest_1', 'general');
}
function Pinterest_1()
{
    $value = get_option( 'Pinterest', '' );
    echo '<input type="text" id="Pinterest" name="Pinterest" value="' . $value . '" />';
}

/********General Setting Pinterest ******/
/********General Setting Instagram ******/
 add_filter('admin_init', 'Instagram');
function Instagram()
{
    register_setting('general', 'Instagram', 'esc_attr');
    add_settings_field('Instagram', '<label for="Instagram">'.__('Instagram Url' , 'Instagram Url' ).'</label>' , 'Instagram_1', 'general');
}
function Instagram_1()
{
    $value = get_option( 'Instagram', '' );
    echo '<input type="text" id="Instagram" name="Instagram" value="' . $value . '" />';
}
 add_filter('admin_init', 'Contact_us_map');
function Contact_us_map()
{
    register_setting('general', 'Contact_us_map', 'esc_attr');
    add_settings_field('Contact_us_map', '<label for="Contact_us_map">'.__('Contact Us Map' , 'Contact_us_map' ).'</label>' , 'Contact_us_map_1', 'general');
}
function Contact_us_map_1()
{
    $value = get_option( 'Contact_us_map', '' );
    //echo '<input type="text" id="Contact_us_map" name="Contact_us_map" value="' . $value . '" />';
	echo '<textarea id="Contact_us_map" name="Contact_us_map" style="height:200px;width:700px" >' . $value . '</textarea>';
}
function searchfilter($query) {
	    if ($query->is_search && !is_admin() ) {
	        $query->set('post_type', array('our_events','news','interview'));
	    }
	return $query;
	}
	add_filter('pre_get_posts','searchfilter');
		/********Logout Redirection******/
// add_action('wp_logout','go_home');
// function go_home(){
//   wp_redirect( home_url() );
//   exit();
// }
// function wpse_11244_restrict_admin() {
//     if ( ! current_user_can( 'manage_options' )  && $_SERVER['PHP_SELF'] != '/wp-admin/admin-ajax.php' ) {
//         wp_redirect( home_url() );
//     }
// }
// add_action( 'admin_init', 'wpse_11244_restrict_admin', 1 );

add_image_size( 'news-thumbnail', 626, 552, true );
add_image_size( 'interview-thumbnail', 626, 552, true );
add_action('wp_ajax_agnecy_form', 'agnecy_form');
add_action('wp_ajax_nopriv_agnecy_form', 'agnecy_form');
 function agnecy_form(){
 $my_post = array(
                        'post_title'=>date('d F Y').'_request of_'.$_REQUEST['fullname'],
						'post_status'   => 'publish',
                        'post_type' => 'agency_request'
                    );
                         $value=wp_insert_post( $my_post );
						add_post_meta($value,'email', $_REQUEST['email']);
                        add_post_meta($value,'postcode', $_REQUEST['postcode']);
						add_post_meta($value,'companyorcurrentemployer', $_REQUEST['company_or_current_employer']);
						add_post_meta($value,'current_position_held',$_REQUEST['current_position_held']);
						add_post_meta($value,'your_ideal_position',$_REQUEST['ideal_position']);
						add_post_meta($value,'your_message', $_REQUEST['message']);
				add_post_meta($value,'phone_number', $_REQUEST['phone_number']);

					  if($value){
						  if(get_option( 'agency_mail_address')!=''){
							  $to = get_option( 'agency_mail_address');
						  }else{
							$to = get_option('admin_email');
						  }

    $Reply=$_REQUEST['email'];
    $subject = 'Request Quote';
    $headers = "From:".$Reply . "\r\n";
    $headers .= "Reply-To: ". $Reply . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $message = '<html><body>';
    $message .= '<table>';
    $message .= "<tr><td><strong>Fullname:</strong> </td><td>" .$_REQUEST['fullname']. "</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>" .$_REQUEST['email']. "</td></tr>";
    $message .= "<tr><td><strong>Postcode:</strong> </td><td>" .$_REQUEST['postcode']. "</td></tr>";
	$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" .$_REQUEST['phone_number']. "</td></tr>";
    $message .= "<tr><td><strong>Company or current employer:</strong> </td><td>" .$_REQUEST['company_or_current_employer']. "</td></tr>";
    $message .= "<tr><td><strong>Current position held:</strong> </td><td>" .$_REQUEST['current_position_held']. "</td></tr>";
    $message .= "<tr><td><strong>Ideal position:</strong> </td><td>" .$_REQUEST['ideal_position']. "</td></tr>";
    $message .= "<tr><td><strong>Message:</strong> </td><td>" .$_REQUEST['message']. "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";
    $mail=wp_mail($to, $subject, $message, $headers);
	remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
	function set_html_content_type() {return 'text/html';}
	}
 die; }
  /********General Setting Agency Mail Address******/
 add_filter('admin_init', 'agency_mail_address');
function agency_mail_address()
{
    register_setting('general', 'agency_mail_address', 'esc_attr');
    add_settings_field('Agency Mail Address', '<label for="Agency Mail Address">'.__('Agency Mail Address' , 'Agency Mail Address' ).'</label>' , 'agency_mail_address_1', 'general');
}
function agency_mail_address_1()
{
    $value = get_option( 'agency_mail_address', '' );
    echo '<input type="text" id="agency_mail_address" name="agency_mail_address" value="' . $value . '" />';
}


include_once('widget-RecentPostsModified.php');
add_action( 'widgets_init', function(){
	register_widget( 'ES_Widget_Recent_Posts' );
});

add_filter('widget_archives_args', 'es_theme_filter_archive');
function es_theme_filter_archive($args) {
    $queried_object = get_queried_object();
    if ($queried_object instanceof WP_Post)
        $args['post_type'] = $queried_object->post_type;
    else
        $args['post_type'] = 'news';

    return $args;
}
add_action( 'after_setup_theme', 'my_website_remove_admin_bar' );
function my_website_remove_admin_bar() {

   // if the user cannot "read", then they cannot access the admin/dashboard
   if ( ! current_user_can( 'read' ) )
      show_admin_bar( false );

}
