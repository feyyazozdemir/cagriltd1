<?php
/**
 * @package Creator World
 * Setup the WordPress core custom header feature.
 *
 * @uses creator_world_header_style() 
 */
function creator_world_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'creator_world_custom_header_args', array(		
		'default-text-color'     => 'ffffff',
		'width'                  => 1600,
		'height'                 => 200,
		'wp-head-callback'       => 'creator_world_header_style',		
	) ) );
}
add_action( 'after_setup_theme', 'creator_world_custom_header_setup' );

if ( ! function_exists( 'creator_world_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see creator_world_custom_header_setup().
 */
function creator_world_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo get_header_image(); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // creator_world_header_style

add_action( 'admin_head', 'admin_header_css' );
function admin_header_css(){ ?>
	<style type="text/css">pre{white-space: pre-wrap;}</style><?php
}