<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twentyfifteen_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfifteen
	 * If you're building a theme based on twentyfifteen, use a find and replace
	 * to change 'twentyfifteen' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'twentyfifteen' );

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
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	add_image_size( 'news-thumbnail' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'twentyfifteen' ),
		'social'  => __( 'Social Links Menu', 'twentyfifteen' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	/*
	 * Enable support for custom logo.
	 *
	 * @since Twenty Fifteen 1.5
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	$color_scheme  = twentyfifteen_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'genericons/genericons.css', twentyfifteen_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // twentyfifteen_setup
add_action( 'after_setup_theme', 'twentyfifteen_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function twentyfifteen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twentyfifteen_widgets_init' );

if ( ! function_exists( 'twentyfifteen_fonts_url' ) ) :
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function twentyfifteen_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Sans, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Sans:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Noto Serif, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Noto Serif:400italic,700italic,400,700';
	}

	/*
	 * Translators: If there are characters in your language that are not supported
	 * by Inconsolata, translate this to 'off'. Do not translate into your own language.
	 */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'twentyfifteen' ) ) {
		$fonts[] = 'Inconsolata:400,700';
	}

	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'twentyfifteen' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Fifteen 1.1
 */
function twentyfifteen_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'twentyfifteen_javascript_detection', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentyfifteen-fonts', twentyfifteen_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'twentyfifteen-style', get_stylesheet_uri() );

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010' );
	wp_style_add_data( 'twentyfifteen-ie7', 'conditional', 'lt IE 8' );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	

	
	wp_localize_script( 'twentyfifteen-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfifteen_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'twentyfifteen-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'twentyfifteen_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function twentyfifteen_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
		$prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
			.post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
			.post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	if ( $next && has_post_thumbnail( $next->ID ) ) {
		$nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
		$css .= '
			.post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
			.post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
			.post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
		';
	}

	wp_add_inline_style( 'twentyfifteen-style', $css );
}
add_action( 'wp_enqueue_scripts', 'twentyfifteen_post_nav_background' );

/**
 * Display descriptions in main navigation.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string  $item_output The menu item output.
 * @param WP_Post $item        Menu item object.
 * @param int     $depth       Depth of the menu.
 * @param array   $args        wp_nav_menu() arguments.
 * @return string Menu item with possible description.
 */
function twentyfifteen_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'twentyfifteen_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function twentyfifteen_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'twentyfifteen_search_form_modify' );

/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';


function add_css() {
	// Load bootstrap stylesheet.
	
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	
	
	
	

	wp_enqueue_style( 'jquery-fullPage', get_template_directory_uri() . '/css/jquery.fullpage.min.css' );

	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'media-css', get_template_directory_uri() . '/css/media.css' );
    
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/css/slick.css' );

}
add_action( 'wp_enqueue_scripts', 'add_css');


add_filter( 'ot_show_pages','__return_false' );
add_filter( 'ot_show_new_layout','__return_false' );
add_filter( 'ot_theme_mode','__return_true' );
include_once( 'inc/Theme-control/ot-loader.php' );
include_once( 'inc/Theme-control/assets/theme-mode/theme-options.php' );
include_once( 'inc/custom-post-type-careers.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-careers.php' );
include_once( 'inc/custom-post-type-news.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-news.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-blogs.php' );
include_once( 'inc/custom-post-type-blogs.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-resources.php' );
include_once( 'inc/custom-post-type-resources.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-partners.php' );
include_once( 'inc/custom-post-type-partners.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-team.php' );
include_once( 'inc/custom-post-type-team.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-india.php' );
include_once( 'inc/custom-post-type-india.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-ethopia.php' );
include_once( 'inc/custom-post-type-ethopia.php' );
include_once( 'inc/Theme-control/assets/theme-mode/meta-boxes-us.php' );
include_once( 'inc/custom-post-type-us.php' );


add_action( 'init', 'create_careers_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_careers_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'careers-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_careers', array( 'careers' ) , $args );
}


add_action( 'init', 'create_news_taxonomies2', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_news_taxonomies2() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'news-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_news', array( 'news' ) , $args );
}

add_action( 'init', 'create_blogs_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_blogs_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'blog-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_blogs', array( 'blogs' ) , $args );
}

add_action( 'init', 'create_news_taxonomies1', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_news_taxonomies1() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'partners-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_partners', array( 'partners' ) , $args );
}

add_action( 'init', 'create_team_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_team_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'team-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_team', array( 'team' ) , $args );
}

add_action( 'init', 'create_resources_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_resources_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'digitalgreen' ),
		'singular_name'     => _x( 'Category', 'digitalgreen' ),
		'search_items'      => __( 'Search Category', 'digitalgreen' ),
		'all_items'         => __( 'All Category', 'digitalgreen' ),
		'parent_item'       => __( 'Parent Category', 'digitalgreen' ),
		'parent_item_colon' => __( 'Parent Category:', 'digitalgreen' ),
		'edit_item'         => __( 'Edit Category', 'digitalgreen' ),
		'update_item'       => __( 'Update Category', 'digitalgreen' ),
		'add_new_item'      => __( 'Add New Category', 'digitalgreen' ),
		'new_item_name'     => __( 'New Category Name', 'digitalgreen' ),
		'menu_name'         => __( 'Category', 'digitalgreen' ),
	);
	
	$rewrite = array(
		'slug'                       => 'resources-category',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);

	register_taxonomy( 'list_resources', array( 'resources' ) , $args );
}

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

//function to load more post types
add_action( 'wp_enqueue_scripts', 'load_more_script_and_styles', 1 );

function load_more_script_and_styles() {
	global $wp_query;

	// register our main script but do not enqueue it yet
	wp_register_script( 'loadmore_scripts', get_template_directory_uri() . '/js/loadmore.js', array('jquery'), time() );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'loadmore_scripts', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => serialize( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => $wp_query->query_vars['paged'] ? $wp_query->query_vars['paged'] : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'loadmore_scripts' );
}



function load_posts_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
    
    $terms = get_terms("list_blogs",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);

	$the_query = new WP_Query( array('post_type' => 'blogs','post_status'=>'publish','posts_per_page'=>'4','paged'=> $paged,'tax_query' => array(array ('taxonomy' => 'list_blogs','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          //echo "--".$term->slug;
          $blogs_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $blogs_short_desc = get_post_meta(get_the_ID(),'blogs_short_desc', true);
                    $blogs_attach = get_post_meta(get_the_ID(),'blogs_attach', true);
                    $blogs_blog_image = get_post_meta(get_the_ID(),'blogs_blog_image', true);
                    $blogs_by = get_post_meta(get_the_ID(),'blogs_by', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $blogs_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 10, $more = '… ' );
                    ?>

                <div class="col-lg-3 news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php if($blogs_attach!="") echo $blogs_attach; else the_permalink(); ?>" class="news-hover">
                        <div class="blogs-image">
                            <img src='<?php echo $blogs_blog_image;?>'>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $blogs_date; ?></span>
                        <div class="info">
                           <h3 class="title"><?php echo $shorttitle; ?></h3>
                           <p class="author">By: &nbsp;&nbsp;<?php echo $blogs_by; ?></p>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a>
                </div> 
<?php endwhile; 
$i++;
} 

	wp_die();
}

/*add_action('wp_ajax_load_india_by_ajax', 'load_india_by_ajax_callback');
add_action('wp_ajax_nopriv_load_india_by_ajax', 'load_india_by_ajax_callback');


function load_india_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
    
  
 $the_query = new WP_Query( array('post_type' => 'india','posts_per_page'=>'2','paged'=> $paged));
     
                  while ( $the_query->have_posts() ) : $the_query->the_post();
{ 
                    
                    
                    $india_solutions_place = get_post_meta(get_the_ID(),'india_solutions_place', true);
            
                    $india_solutions_duration = get_post_meta(get_the_ID(),'india_solutions_duration', true);
                    
                    
                    
                    $india_partner_type1 = get_post_meta(get_the_ID(),'india_partner_type1', true);

                    $india_partner_type2 = get_post_meta(get_the_ID(),'india_partner_type2', true);

                    $india_solutions = get_post_meta(get_the_ID(),'india_solutions',array());
                    
                    $india_partners1 = get_post_meta(get_the_ID(),'india_partners1',array());

                    $india_partners2 = get_post_meta(get_the_ID(),'india_partners2',array());

                     ?>
                    <div class="single-project-details">
                        <ul class="project-head-list clearfix present-project">
                            <li><?php echo $india_solutions_place;?></li>
                            <li class="hidden-xs"><?php echo $india_solutions_duration;?></li>
                        </ul>
                        <div class="project-details">
                            <h1 class="dg-header-1"><?php the_title(); ?></h1>
                            <p class="dg-header-5 text-detail hidden-xs"><?php the_content(); ?></p>
                            
                        </div>
                        <div class="project-solution">
                            <h3 class="hidden-xs">Solution used</h3>
                            <div class="box-container hidden-xs">
                                <div class="row">
                                <?php          
                        if (isset($india_solutions)){ 
  $i=1;  
                                     foreach($india_solutions[0] as $key => $value){  
                                             ?>
                                    <div class="partner-boxes">
                                        <div class="box <?php if($i==1) echo 'blue'; elseif($i==2) echo 'pink'; elseif($i==3) echo 'orange'; elseif($i==4) echo 'purple'; else echo 'pink';?>">
                                            <div class="box-content">
                                            
                                            <!-- Not Done,should be done by vivek............-->
                                                <img src="<?php echo $value['india_solutions_type1']; ?>" alt="Loop" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <?php  $i++;
                        
                    }
                } ?>
                                     
                                   
                                </div>
                            </div>
                        </div>
                        <div class="partners-section">
                            <a href="#" class="partner-collepse-button hidden-xs" >View Partners &nbsp;
                                <span class="icon icon-up-arrow"></span>
                                <span class="icon icon-down-arrow"></span>
                            </a>
                            <div class="collapse-project">
                                <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                     <?php       
                        if (isset($india_partners1)){   
                                     foreach($india_partners1[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                    <?php echo $value['india_partners1_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div>
                                 <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                    
                                     <?php       
                        if (isset($india_partners2)){   
                                     foreach($india_partners2[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                     <?php echo $value['india_partners2_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                                      
 <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div> 
                               
                            </div>
                        </div>
                    </div>
                     <?php 
}
endwhile;   
 

	wp_die();
}
?>

<?php add_action('wp_ajax_load_ethiopia_by_ajax', 'load_ethiopia_by_ajax_callback');
add_action('wp_ajax_nopriv_load_ethiopia_by_ajax', 'load_ethiopia_by_ajax_callback');


function load_ethiopia_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
    
  
 $the_query = new WP_Query( array('post_type' => 'ethopia','posts_per_page'=>'2','paged'=> $paged));
     
                  while ( $the_query->have_posts() ) : $the_query->the_post();
{ 
                    
                    
                    $ethopia_solutions_place = get_post_meta(get_the_ID(),'ethopia_solutions_place', true);
            
                    $ethopia_solutions_duration = get_post_meta(get_the_ID(),'ethopia_solutions_duration', true);
                    
                    
                    
                    $ethopia_partner_type1 = get_post_meta(get_the_ID(),'ethopia_partner_type1', true);

                    $ethopia_partner_type2 = get_post_meta(get_the_ID(),'ethopia_partner_type2', true);

                    $ethopia_solutions = get_post_meta(get_the_ID(),'ethopia_solutions',array());
                    
                    $ethopia_partners1 = get_post_meta(get_the_ID(),'ethopia_partners1',array());

                    $ethopia_partners2 = get_post_meta(get_the_ID(),'ethopia_partners2',array());

                     ?>
                    <div class="single-project-details">
                        <ul class="project-head-list clearfix present-project">
                            <li><?php echo $ethopia_solutions_place;?></li>
                            <li class="hidden-xs"><?php echo $ethopia_solutions_duration;?></li>
                        </ul>
                        <div class="project-details">
                            <h1 class="dg-header-1"><?php the_title(); ?></h1>
                            <p class="dg-header-5 text-detail hidden-xs"><?php the_content(); ?></p>
                            <p class="dg-header-5 text-detail hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                        <div class="project-solution">
                            <h3 class="hidden-xs">Solution used</h3>
                            <div class="box-container hidden-xs">
                                <div class="row">
                                <?php          
                        if (isset($ethopia_solutions)){ 
  $i=1;  
                                     foreach($ethopia_solutions[0] as $key => $value){  
                                             ?>
                                    <div class="partner-boxes">
                                        <div class="box <?php if($i==1) echo 'blue'; elseif($i==2) echo 'pink'; elseif($i==3) echo 'orange'; elseif($i==4) echo 'purple'; else echo 'pink';?>">
                                            <div class="box-content">
                                            
                                            <!-- Not Done,should be done by vivek............-->
                                                <img src="<?php echo $value['ethopia_solutions_type1']; ?>" alt="Loop" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <?php  $i++;
                        
                    }
                } ?>
                                     
                                   
                                </div>
                            </div>
                        </div>
                        <div class="partners-section">
                            <a href="#" class="partner-collepse-button hidden-xs" >View Partners &nbsp;
                                <span class="icon icon-up-arrow"></span>
                                <span class="icon icon-down-arrow"></span>
                            </a>
                            <div class="collapse-project">
                                <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                     <?php       
                        if (isset($ethopia_partners1)){   
                                     foreach($ethopia_partners1[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                    <?php echo $value['ethopia_partners1_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div>
                                 <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partner Type</h3>
                                    <div class="row">
                                    
                                     <?php       
                        if (isset($ethopia_partners2)){   
                                     foreach($ethopia_partners2[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                     <?php echo $value['ethopia_partners2_title']; ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                                      
 <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div> 
                               
                            </div>
                        </div>
                    </div>
                     <?php 
}
endwhile;   
 

	wp_die();
} */ ?>

<?php 

add_action('wp_ajax_load_news_by_ajax', 'load_news_by_ajax_callback');
add_action('wp_ajax_nopriv_load_news_by_ajax', 'load_news_by_ajax_callback');


function load_news_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
    
    $terms = get_terms("list_news",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        

 
                $the_query = new WP_Query( array('post_type' => 'news','posts_per_page'=>'8','paged'=> $paged,'orderby' => 'publish_date',
    'order' => 'ASC','tax_query' => array(array ('taxonomy' => 'list_news','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $news_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $news_short_desc = get_post_meta(get_the_ID(),'news_short_desc', true);
                    $news_by = get_post_meta(get_the_ID(), 'news_by', true);
                    $news_attach = get_post_meta(get_the_ID(),'news_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $news_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 10, $more = '… ' );
                 ?>
 
                
                <div class="news-list" data-category="<?php echo $term->description; ?><?php echo $i; ?>">

          
                
                    <a href="<?php if($news_attach!="") echo $news_attach; else the_permalink(); ?>" class="news-hover" target="_blank">
                        <div class="news-image">
                        
                             <!-- <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
 -->                        </div>
                        <span class="date"><?php echo $news_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="news-source"><?php echo $news_by; ?></p>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a> 
                </div>
                <?php endwhile;  
                
$i++;
} 

	wp_die();
}

add_action('wp_ajax_load_resources_by_ajax', 'load_resources_by_ajax_callback');
add_action('wp_ajax_nopriv_load_resources_by_ajax', 'load_resources_by_ajax_callback');


function load_resources_by_ajax_callback() {
	check_ajax_referer('load_more_posts', 'security');
	$paged = $_POST['page'];
    
    $terms = get_terms("list_resources",array( 'parent' => 0 ));
        $i=1;
        foreach ( $terms as $term ) { 
        $termname = strtolower($term->name);
        $termname = str_replace(' ', '-', $termname);
        

 
 $the_query = new WP_Query( array('post_type' => 'resources','posts_per_page'=>'7','paged'=> $paged,'tax_query' => array(array ('taxonomy' => 'list_resources','field' => 'slug','terms' => $term->slug))));
          while ( $the_query->have_posts() ) : $the_query->the_post();

          
          $resources_date = get_the_date( 'F d, Y', get_the_ID() );
                    
                    $resources_short_desc = get_post_meta(get_the_ID(),'resources_short_desc', true);
                    $resources_attach = get_post_meta(get_the_ID(),'resources_attach', true);
                    $trimtitle = get_the_title();
    
            $shorttitle = wp_trim_words( $trimtitle, $num_words = 4, $more = '… ' );
            

            $trimdesc = $resources_short_desc;
    
            $shortdesc = wp_trim_words( $trimdesc, $num_words = 20, $more = '… ' );

                    ?>

                <div class="col-lg-3 news-list" data-category="<?php echo $termname; ?>">
                    <a href="<?php if($resources_attach!="") echo $resources_attach; else the_permalink(); ?>" class="news-hover">
                        <div class="news-image">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'news-thumbnail',array('alt' => 'news image')); ?>
                            <span class="news-cat"><?php echo $term->name; ?></span>
                        </div>
                        <span class="date"><?php echo $resources_date; ?></span>
                        <div class="info">
                            <h3 class="title"><?php echo $shorttitle; ?></h3>
                            <p class="description"><?php echo $shortdesc; ?></p>
                        </div>
                        <div class="green-arrow">Read More<i class="on-hover-arrow-left"></i></div>
                    </a>
                </div> 
<?php endwhile; 
$i++;
}

	wp_die();
}


//Load more India Ajax Handler
add_action('wp_ajax_loadmoreindia', 'loadmoreindia_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmoreindia', 'loadmoreindia_ajax_handler'); // wp_ajax_nopriv_{action}
 
function loadmoreindia_ajax_handler(){
 
	// prepare our arguments for the query
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
	$count = $_POST['counter'];
	$args['post_type'] = 'india';
 
	// it is always better to use WP_Query but not here
	$the_query = new WP_Query($args);
  
		// run the loop
          while ( $the_query->have_posts() ) : $the_query->the_post();
			{	 
                    
                    
                    $india_solutions_place = get_post_meta(get_the_ID(),'india_solutions_place', true);
            
                    $india_solutions_duration = get_post_meta(get_the_ID(),'india_solutions_duration', true);
                    
                    
                    
                    $india_partner_type1 = get_post_meta(get_the_ID(),'india_partner_type1', true);

                    $india_partner_type2 = get_post_meta(get_the_ID(),'india_partner_type2', true);

                    $india_solutions = get_post_meta(get_the_ID(),'india_solutions',array());
                    
                    $india_partners1 = get_post_meta(get_the_ID(),'india_partners1',array());

                    $india_partners2 = get_post_meta(get_the_ID(),'india_partners2',array());

                     ?>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="false">
                                <div>
                                    <ul class="project-head-list clearfix present-project">
                                        <li><?php echo $india_solutions_place;?></li>
                                        <li class="hidden-xs"><?php echo $india_solutions_duration;?></li>
                                    </ul>
                                    <div class="expand-project"></div>
                                </div>
                                    <div class="project-details">
                                        <h5 class="dg-header-5-copy"><?php the_title(); ?></h5>                                       
                                    </div>
                                </a>
                            </h5>
                        </div>

 
                    <div class="single-project-details collapse" id="collapse<?php echo $count; ?>">
                        <!-- <ul class="project-head-list clearfix present-project">
                            <li><?php echo $india_solutions_place;?></li>
                            <li class="hidden-xs"><?php echo $india_solutions_duration;?></li>
                        </ul> -->
                        <div class="project-details">
                            <!-- <h1 class="dg-header-1"><?php the_title(); ?></h1> -->
                            <p class="dg-header-5 text-detail hidden-xs"><?php the_content(); ?></p>
                            
                        </div>
                        <div class="project-solution">
                            <h3 class="hidden-xs">Solution used</h3>
                            <div class="box-container hidden-xs">
                                <div class="row">
                                <?php          
                        if (isset($india_solutions)){ 
  $i=1;  
                                     foreach($india_solutions[0] as $key => $value){  
                                             ?>
                                    <div class="partner-boxes">
                                        <div class="box">
                                            <div class="box-content">
                                            
                                            <!-- Not Done,should be done by vivek............-->
                                                <img src="<?php echo $value['india_solutions_type1']; ?>" alt="Loop" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <?php  $i++;
                        
                    }
                } ?>
                                     
                                   
                                </div>
                            </div>
                        </div>
                        <div class="partners-section">
                            <!-- <a href="#" class="partner-collepse-button hidden-xs" >View Partners &nbsp;
                                <span class="icon icon-up-arrow"></span>
                                <span class="icon icon-down-arrow"></span>
                            </a> -->
                            <div class="collapse-projects">
                                <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partners</h3>
                                    <div class="row">
                                     <?php       
                        if (isset($india_partners1)){   
                                     foreach($india_partners1[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                    <img src="<?php echo $value['india_partners1_title']; ?>" alt="Loop" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>

                     <?php 
		}
	$count++;
	endwhile; ?>
	<?php echo '||'; ?><?php echo $count;?>
 <?php
	die; // here we exit the script and even no wp_reset_query() required!
}


//Load More Ethopia Ajax Handler
add_action('wp_ajax_loadmoreethopia', 'loadmoreethopia_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmoreethopia', 'loadmoreethopia_ajax_handler'); // wp_ajax_nopriv_{action}
 
function loadmoreethopia_ajax_handler(){
 
	// prepare our arguments for the query
	$args1 = unserialize( stripslashes( $_POST['query'] ) );
	$args1['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args1['post_status'] = 'publish';
	$count = $_POST['counter'];
	$args1['post_type'] = 'ethopia';
 
	// it is always better to use WP_Query but not here
	$the_query1 = new WP_Query($args1);

		// run the loop
          while ( $the_query1->have_posts() ) : $the_query1->the_post();
			{	 
                    
                    
                    $ethopia_solutions_place = get_post_meta(get_the_ID(),'ethopia_solutions_place', true);
            
                    $ethopia_solutions_duration = get_post_meta(get_the_ID(),'ethopia_solutions_duration', true);
                    
                    
                    
                    $ethopia_partner_type1 = get_post_meta(get_the_ID(),'ethopia_partner_type1', true);

                    $ethopia_partner_type2 = get_post_meta(get_the_ID(),'ethopia_partner_type2', true);

                    $ethopia_solutions = get_post_meta(get_the_ID(),'ethopia_solutions',array());
                    
                    $ethopia_partners1 = get_post_meta(get_the_ID(),'ethopia_partners1',array());

                    $ethopia_partners2 = get_post_meta(get_the_ID(),'ethopia_partners2',array());

                     ?>
                    <div class="card">
                        <div class="card-header" role="tab">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-target="#collapse<?php echo $count; ?>" aria-expanded="false">
                                <div>
                                    <ul class="project-head-list clearfix present-project">
                                        <li><?php echo $ethopia_solutions_place;?></li>
                                        <li class="hidden-xs"><?php echo $ethopia_solutions_duration;?></li>
                                    </ul>
                                    <div class="expand-project"></div>
                                </div>
                                    <div class="project-details">
                                        <h5 class="dg-header-5-copy"><?php the_title(); ?></h5>                                       
                                    </div>
                                </a>
                            </h5>
                        </div>

 
                    <div class="single-project-details collapse" id="collapse<?php echo $count; ?>">
                        <!-- <ul class="project-head-list clearfix present-project">
                            <li><?php echo $ethopia_solutions_place;?></li>
                            <li class="hidden-xs"><?php echo $ethopia_solutions_duration;?></li>
                        </ul> -->
                        <div class="project-details">
                            <!-- <h1 class="dg-header-1"><?php the_title(); ?></h1> -->
                            <p class="dg-header-5 text-detail hidden-xs"><?php the_content(); ?></p>
                            
                        </div>
                        <div class="project-solution">
                            <h3 class="hidden-xs">Solution used</h3>
                            <div class="box-container hidden-xs">
                                <div class="row">
                                <?php          
                        if (isset($ethopia_solutions)){ 
  $i=1;  
                                     foreach($ethopia_solutions[0] as $key => $value){  
                                             ?>
                                    <div class="partner-boxes">
                                        <div class="box">
                                            <div class="box-content">
                                            
                                            <!-- Not Done,should be done by vivek............-->
                                                <img src="<?php echo $value['ethopia_solutions_type1']; ?>" alt="Loop" />
                                            </div>
                                        </div>
                                    </div>
                                    
                                      <?php  $i++;
                        
                    }
                } ?>
                                     
                                   
                                </div>
                            </div>
                        </div>
                        <div class="partners-section">
                            <!-- <a href="#" class="partner-collepse-button hidden-xs" >View Partners &nbsp;
                                <span class="icon icon-up-arrow"></span>
                                <span class="icon icon-down-arrow"></span>
                            </a> -->
                            <div class="collapse-projects">
                                <div class="partners-box">
                                    <h3 class="dg-header-4 news-header">Partners</h3>
                                    <div class="row">
                                     <?php       
                        if (isset($ethopia_partners1)){   
                                     foreach($ethopia_partners1[0] as $key => $value){  
                                             ?>
                                        <div class="col-sm-3">
                                            <div class="box gray">
                                                <div class="box-content">
                                                    <img src="<?php echo $value['ethopia_partners1_title']; ?>" alt="Loop" />
                                                </div>
                                            </div>
                                        </div>
                                        
                                         <?php 
                        
                    }
                } ?>
                                        
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>

                     <?php 
		}
	$count++;
	endwhile; ?>
	<?php echo '||'; ?><?php echo $count;?>
 <?php
	die; // here we exit the script and even no wp_reset_query() required!
}










