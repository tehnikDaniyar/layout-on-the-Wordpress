<?php 

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'slider', get_template_directory_uri() . '/assets/css/slider.css');




	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
});

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

?>

