<?php
/**
 * Creator World Theme Customizer
 *
 * @package Creator World
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function creator_world_customize_register( $wp_customize ) {
	
	//Add a class for titles
    class creator_world_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	

	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';	
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#E19105',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','creator-world'),			
			 'description'	=> __('More color options in PRO Version','creator-world'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => __('Slider Settings', 'creator-world'),
            'priority' => null,
            'description'	=> __('Recommended Featured Image Size ( 1375x560 ).','creator-world'),		
        )
    );
	
	
	$wp_customize->add_setting('page-setting7',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','creator-world'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','creator-world'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','creator-world'),
			'section'	=> 'slider_section'
	));	// Slider Section
	
	$wp_customize->add_setting('disabled_slides',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_slides', array(
			   'settings' => 'disabled_slides',
			   'section'   => 'slider_section',
			   'label'     => __('Uncheck To Enable This Section','creator-world'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section
	
	
	// Home Welcome Section 	
	$wp_customize->add_section('section_first',array(
		'title'	=> __('Homepage Welcome Section','creator-world'),
		'description'	=> __('Select Page from the dropdown for welcome section','creator-world'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('page-setting1',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-setting1',array('type' => 'dropdown-pages',			
			'section' => 'section_first',
	));
	
	$wp_customize->add_setting('disabled_welcome',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_welcome', array(
			   'settings' => 'disabled_welcome',
			   'section'   => 'section_first',
			   'label'     => __('Uncheck To Enable This Section','creator-world'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section	
	
	// Home Three Boxes Section 	
	$wp_customize->add_section('section_second', array(
		'title'	=> __('Homepage Four Boxes Section','creator-world'),
		'description'	=> __('Select Pages from the dropdown for homepage four boxes section','creator-world'),
		'priority'	=> null
	));	
	
	
	$wp_customize->add_setting('page-column1',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-column1',array('type' => 'dropdown-pages',			
			'section' => 'section_second',
	));		
	
	$wp_customize->add_setting('page-column2',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-column2',array('type' => 'dropdown-pages',			
			'section' => 'section_second',
	));
	
	$wp_customize->add_setting('page-column3',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-column3',array('type' => 'dropdown-pages',			
			'section' => 'section_second',
	));
	
	$wp_customize->add_setting('page-column4',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-column4',array('type' => 'dropdown-pages',			
			'section' => 'section_second',
	));	//end fourth column part	
	
	$wp_customize->add_setting('disabled_pageboxes',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_pageboxes', array(
			   'settings' => 'disabled_pageboxes',
			   'section'   => 'section_second',
			   'label'     => __('Uncheck To Enable This Section','creator-world'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section		
	
}
add_action( 'customize_register', 'creator_world_customize_register' );

function creator_world_custom_css(){
		?>
        	<style type="text/css"> 
					
					a, .blog_lists h2 a:hover,
					#sidebar ul li a:hover,								
					.cols-4 ul li a:hover, .cols-4 ul li.current_page_item a,									
					.sitenav ul li a:hover, .sitenav ul li.current_page_item a,					
					.fourbox:hover h3,					
					.contactdetail a:hover,	
					.fourbox:hover h3 a,
					.cols-4 h5 span,
					.cols-4 .social-icons a:hover
					{ color:<?php echo esc_html( get_theme_mod('color_scheme','#E19105')); ?>;}
					 
					
					.pagination .nav-links span.current, .pagination .nav-links a:hover,
					#commentform input#submit:hover,
					h2.headingtitle:after,	
					.fourbox:hover .pagemore,
					.slidemore,				
					.nivo-controlNav a.active,				
					h3.widget-title,				
					.wpcf7 input[type='submit']	,
					.headertop,
					.copyright-wrapper,
					#sidebar .search-form input.search-submit
					{ background-color:<?php echo esc_html( get_theme_mod('color_scheme','#E19105')); ?>;}
					
						
					.fourbox:hover .pagemore,
					.nivo-caption,
					.cols-4 .social-icons a:hover
					{ border-color:<?php echo esc_html( get_theme_mod('color_scheme','#E19105')); ?>;}
					
			</style> 
<?php                  
}
         
add_action('wp_head','creator_world_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function creator_world_customize_preview_js() {
	wp_enqueue_script( 'creator_world_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20160210', true );
}
add_action( 'customize_preview_init', 'creator_world_customize_preview_js' );