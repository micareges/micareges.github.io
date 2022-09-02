<?php
// Remove on production
error_reporting(E_ALL);
ini_set('display_errors', 1);


add_action('init', function () {
    show_admin_bar(false );
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );
	add_theme_support('post-thumbnails');
});
add_action( 'admin_enqueue_scripts', 'admin_assets');

function admin_assets() {
	$template_uri = get_template_directory_uri();
	wp_enqueue_style('admin-ap-style', $template_uri . '/dist/css/admin.min.css');
}

?>