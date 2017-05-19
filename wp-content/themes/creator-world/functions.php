<?php     
/**
 * Creator World functions and definitions
 *
 * @package Creator World
 */

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'creator_world_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function creator_world_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'creator-world', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', array( 
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 150,
		'flex-height' => true,
	) );	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'creator-world' ),
		'footer' => __( 'Footer Menu', 'creator-world' ),
	) );
	add_theme_support( 'custom-background', array(	   
		'default-color' => 'ffffff',
		'default-image' => get_template_directory_uri().'/images/bodybg.jpg',
		'default-attachment'     => 'fixed',
		'default-repeat'         => 'no-repeat',
	) );
	add_editor_style( 'editor-style.css' ); 
} 
endif; // creator_world_setup
add_action( 'after_setup_theme', 'creator_world_setup' );


function creator_world_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'creator-world' ),
		'description'   => __( 'Appears at blog page sidebar', 'creator-world' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',		
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Info', 'creator-world' ),
		'description'   => __( 'Appears on header of site', 'creator-world' ),
		'id'            => 'header-info',
		'before_widget' => '<div class="headerinfo">',	
		'after_widget'  => '</div>',	
		'before_title'  => '<h3 style="display:none">',
		'after_title'   => '</h3>',		
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'creator-world' ),
		'description'   => __( 'Appears on footer', 'creator-world' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'creator-world' ),
		'description'   => __( 'Appears on footer', 'creator-world' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'creator-world' ),
		'description'   => __( 'Appears on footer', 'creator-world' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'creator-world' ),
		'description'   => __( 'Appears on footer', 'creator-world' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );	
	
	
}
add_action( 'widgets_init', 'creator_world_widgets_init' );


function creator_world_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Montserrat, trsnalate this to off, do not
		* translate into your own language.
		*/
		$montserrat = _x('on','montserrat:on or off','creator-world');		
		
		if('off' !== $montserrat ){
			$font_family = array();
			
			if('off' !== $montserrat){
				$font_family[] = 'Montserrat:300,400,600,700,800,900';
			}
					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function creator_world_scripts() {
	wp_enqueue_style('creator-world-font', creator_world_font_url(), array());
	wp_enqueue_style( 'creator-world-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'creator-world-responsive', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'creator-world-default', get_template_directory_uri()."/css/default.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'creator-world-custom', get_template_directory_uri() . '/js/custom.js' );	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri()."/css/font-awesome.css" );
		

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creator_world_scripts' );

function creator_world_ie_stylesheet(){
	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('creator-world-ie', get_template_directory_uri().'/css/ie.css', array( 'creator-world-style' ), '20160928' );
	wp_style_add_data('creator-world-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'creator-world-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'creator-world-style' ), '20160928' );
	wp_style_add_data( 'creator-world-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'creator-world-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'creator-world-style' ), '20160928' );
	wp_style_add_data( 'creator-world-ie7', 'conditional', 'lt IE 8' );	
	
	}
add_action('wp_enqueue_scripts','creator_world_ie_stylesheet');


define('creator_world_pro_theme_url','https://gracethemes.com/themes/construction-wordpress-theme/','creator-world');
define('creator_world_theme_doc','https://gracethemes.com/documentation/creator-world/','creator-world');
define('creator_world_live_demo','https://gracethemes.com/demo/creator-world-pro/','creator-world');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';

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

// get slug by id
function creator_world_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

//custom logo
if ( ! function_exists( 'creator_world_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 */
function creator_world_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;