<?php
/**
 * Multipurpose Startup functions and definitions
 * @package Multipurpose Startup
 */

/* Breadcrumb Begin */
function multipurpose_startup_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}


/* Theme Setup */
if ( ! function_exists( 'multipurpose_startup_setup' ) ) :

function multipurpose_startup_setup() {

	$GLOBALS['content_width'] = apply_filters( 'multipurpose_startup_content_width', 640 );
	
	load_theme_textdomain( 'multipurpose-startup', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('multipurpose-startup-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'multipurpose-startup' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', multipurpose_startup_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'multipurpose_startup_setup' );

/* Theme Widgets Setup */
function multipurpose_startup_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'multipurpose-startup' ),
		'description'   => __( 'Appears on blog page sidebar', 'multipurpose-startup' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'multipurpose-startup' ),
		'description'   => __( 'Appears on page sidebar', 'multipurpose-startup' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'multipurpose-startup' ),
		'description'   => __( 'Appears on page sidebar', 'multipurpose-startup' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'multipurpose-startup' ),
		'description'   => __( 'Appears on footer', 'multipurpose-startup' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'multipurpose-startup' ),
		'description'   => __( 'Appears on footer', 'multipurpose-startup' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'multipurpose-startup' ),
		'description'   => __( 'Appears on footer', 'multipurpose-startup' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'multipurpose-startup' ),
		'description'   => __( 'Appears on footer', 'multipurpose-startup' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'multipurpose_startup_widgets_init' );

/* Theme Font URL */
function multipurpose_startup_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Questrial';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/*radio button sanitization*/
 function multipurpose_startup_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Theme enqueue scripts */
function multipurpose_startup_scripts() {
	wp_enqueue_style( 'multipurpose-startup-font', multipurpose_startup_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'multipurpose-startup-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'multipurpose-startup-style', 'rtl', 'replace' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/css/animate.css' );
	wp_enqueue_script( 'multipurpose-startup-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('multipurpose-startup-ie', get_template_directory_uri().'/css/ie.css', array('multipurpose-startup-basic-style'));
	wp_style_add_data( 'multipurpose-startup-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'multipurpose_startup_scripts' );

/* Theme Credit link */
define('MULTIPURPOSE_STARTUP_SITE_URL','https://www.themesglance.com/themes/free-startup-wordpress-theme/','multipurpose-startup');

function multipurpose_startup_credit_link() {
    echo "<a href=".esc_url(MULTIPURPOSE_STARTUP_SITE_URL)." target='_blank'>".esc_html__('Startup WordPress Theme','multipurpose-startup')."</a>";
}

/* Excerpt Limit Begin */
function multipurpose_startup_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function multipurpose_startup_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}


/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';