<?php 
/**
 * this is our functions file
 * 
 */

 function wplearning_theme_setup(){

add_theme_support('custom-logo');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

add_image_size('home-featured', 640, 400, array('center', 'center'));

add_theme_support('automatic-feed-links');

$args = array(
    'default-image' => get_template_directory_uri().'/assets/img/hero-banner.png',
    'default-text-color' => '#f00',
    'width' => '1920',
    'height' => '400',
    'flex-width' => true,
    'flex-height' => true,
);
add_theme_support('custom-header', $args);

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'wplearning' )
 
) );

 };
add_action('after_setup_theme', 'wplearning_theme_setup');






function wplearning_theme_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('tailwind-style', get_template_directory_uri().'/tailwind_output.css', array(), '1.0');
	wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/owl-carousel/assets/owl.carousel.min.css');

    wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array(), 1.1, true );
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js',  array(), 1.1, true );
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/owl-carousel/owl.carousel.min.js',  array(), 1.1, true );
	wp_enqueue_script('script-js', get_template_directory_uri().'/assets/js/script.js', array(), 1.1, true );
}
add_action('wp_enqueue_scripts', 'wplearning_theme_scripts');

function wplearning_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'wplearning' ),
		'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'wplearning' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'wplearning' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'wplearning' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'wplearning_widgets_init' );


//include Custom Post Type

require get_template_directory().'/inc/services.php';
require get_template_directory().'/inc/projects.php';

// Include Custom Meta Box
require get_template_directory().'/inc/url-metabox.php';