<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

$args = array(
	'flex-width'    => true,
	'width'         => 1170,
	'flex-height'    => true,
	'height'        => 270,
	'default-image' => get_template_directory_uri() . '/images/header.png',
);
add_theme_support( 'custom-header', $args );

/**
 * Register our sidebars and widgetized areas.
 *
 */

if (function_exists("register_sidebar")) {
  register_sidebar(array(
    'name' => 'sidebar',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
));
}
?>