<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
	$parent_style = 'estore-style';
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'estore-googlefonts', '//fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' );
    wp_enqueue_style( $parent-style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'estore-reponsive', get_template_directory_uri().'/css/responsive.css', array(), '1.0.0' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));
}
?>