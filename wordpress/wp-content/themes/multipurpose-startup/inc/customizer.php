<?php
/**
 * Multipurpose Startup Theme Customizer
 * @package Multipurpose Startup
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function multipurpose_startup_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'multipurpose_startup_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'multipurpose-startup' ),
	    'description' => __( 'Description of what this panel does.', 'multipurpose-startup' ),
	) );

	//layout setting
	$wp_customize->add_section( 'multipurpose_startup_theme_layout', array(
    	'title'      => __( 'Layout Settings', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('multipurpose_startup_layout',array(
        'default' => __( 'Right Sidebar', 'multipurpose-startup' ),
        'sanitize_callback' => 'multipurpose_startup_sanitize_choices'	        
	) );
	$wp_customize->add_control('multipurpose_startup_layout',
	    array(
	        'type' => 'radio',
	        'label' => __( 'Do you want this section', 'multipurpose-startup' ),
	        'section' => 'multipurpose_startup_theme_layout',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','multipurpose-startup'),
	            'Right Sidebar' => __('Right Sidebar','multipurpose-startup'),
	            'One Column' => __('One Column','multipurpose-startup'),
	            'Three Columns' => __('Three Columns','multipurpose-startup'),
	            'Four Columns' => __('Four Columns','multipurpose-startup'),
	            'Grid Layout' => __('Grid Layout','multipurpose-startup')
	        ),
	    )
    );

    //Social Icons(topbar)
	$wp_customize->add_section('multipurpose_startup_top_header',array(
		'title'	=> __('Top Header','multipurpose-startup'),
		'description'	=> __('Add Header Content here','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_time',array(
		'label'	=> __('Add Time','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_facebook',array(
		'label'	=> __('Add Facebook link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_twitter',array(
		'label'	=> __('Add Twitter link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_twitter',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_google',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_google',array(
		'label'	=> __('Add Google Plus link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_google',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_pintrest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_pintrest',array(
		'label'	=> __('Add Pintrest link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_pintrest',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_insta',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_insta',array(
		'label'	=> __('Add Instagram link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_insta',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_linkdin',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_linkdin',array(
		'label'	=> __('Add Linkdin link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_linkdin',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('multipurpose_startup_youtube',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_youtube',array(
		'label'	=> __('Add Youtube link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_top_header',
		'setting'	=> 'multipurpose_startup_youtube',
		'type'	=> 'url'
	));

	//Topbar section
	$wp_customize->add_section('multipurpose_startup_topbar_icon',array(
		'title'	=> __('Contact Details','multipurpose-startup'),
		'description'	=> __('Add Header Content here','multipurpose-startup'),
		'priority'	=> null,
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_address_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_startup_address_text',array(
		'label'	=> __('Add Adrress Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_address_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_address',array(
		'label'	=> __('Add Address','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_email_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_startup_email_text',array(
		'label'	=> __('Add Email Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_email_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_email',array(
		'label'	=> __('Add Email Address','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_call_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_call_text',array(
		'label'	=> __('Add Contact Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_call_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_call_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_call_number',array(
		'label'	=> __('Add Contact Number','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_call_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_button_text',array(
		'label'	=> __('Add Button Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_button_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('multipurpose_startup_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('multipurpose_startup_button_link',array(
		'label'	=> __('Add Button Link','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_topbar_icon',
		'setting'	=> 'multipurpose_startup_button_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'multipurpose_startup_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'multipurpose-startup' ),
		'priority'   => null,
		'panel' => 'multipurpose_startup_panel_id'
	) );

	$wp_customize->add_setting('multipurpose_startup_slider_arrows',array(
      	'default' => 'true',
      	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('multipurpose_startup_slider_arrows',array(
      	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','multipurpose-startup'),
      	'section' => 'multipurpose_startup_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'multipurpose_startup_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'multipurpose_startup_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'multipurpose_startup_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'multipurpose-startup' ),
			'section'  => 'multipurpose_startup_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//Startup Section
	$wp_customize->add_section('multipurpose_startup_startup',array(
		'title'	=> __('Who We Are Section','multipurpose-startup'),
		'description'	=> __('Add Who We Are sections below.','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id',
	));

	$wp_customize->add_setting('multipurpose_startup_startup_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_startup_title',array(
		'label'	=> __('Section Title','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_startup',
		'type'		=> 'text'
	));

	$post_list = get_posts();
	$i = 0;
	$pst[]='Select';	
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('multipurpose_startup_startup_post',array(
		'sanitize_callback' => 'multipurpose_startup_sanitize_choices',
	));
	$wp_customize->add_control('multipurpose_startup_startup_post',array(
		'type'    => 'select',
		'choices' => $pst,
		'label' => __('Select post','multipurpose-startup'),
		'section' => 'multipurpose_startup_startup',
	));

	//footer text
	$wp_customize->add_section('multipurpose_startup_footer_section',array(
		'title'	=> __('Footer Text','multipurpose-startup'),
		'description'	=> __('Add some text for footer like copyright etc.','multipurpose-startup'),
		'panel' => 'multipurpose_startup_panel_id'
	));
	
	$wp_customize->add_setting('multipurpose_startup_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('multipurpose_startup_text',array(
		'label'	=> __('Copyright Text','multipurpose-startup'),
		'section'	=> 'multipurpose_startup_footer_section',
		'type'		=> 'text'
	));	
}
add_action( 'customize_register', 'multipurpose_startup_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Multipurpose_Startup_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Multipurpose_Startup_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Multipurpose_Startup_Customize_Section_Pro(
			$manager,
			'example_1',
				array(
				'priority'   => 9,
				'title'    => esc_html__( 'Startup Pro', 'multipurpose-startup' ),
				'pro_text' => esc_html__( 'Go Pro', 'multipurpose-startup' ),
				'pro_url'  => esc_url('https://www.themesglance.com/themes/multipurpose-startup-wordpress-theme/')					
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'multipurpose-startup-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'multipurpose-startup-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Multipurpose_Startup_Customize::get_instance();