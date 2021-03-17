<?php
/**
 * silverlessstudio functions and definitions
 *
 * @package carr-hartley
 */

/****************************************************/
/*                       Hooks                       /
/****************************************************/

/* Enqueue scripts and styles */
add_action('wp_enqueue_scripts', 'silverlessstudio_scripts');

/* Add Menus */
add_action('init', 'silverlessstudio_custom_menu');

/* Dashboard Config */
add_action('wp_dashboard_setup', 'silverlessstudio_dashboard_widget');

/* Dashboard Style */
add_action('admin_head', 'silverlessstudio_custom_fonts');

/* Remove Default Menu Items */
add_action('admin_menu', 'silverlessstudio_remove_menus');

/* Change Posts Columns */
add_filter('manage_posts_columns', 'silverlessstudio_manage_columns');

/* Reorder Admin Menu */
add_filter('custom_menu_order', 'silverlessstudio_reorder_menu');
add_filter('menu_order', 'silverlessstudio_reorder_menu');

/* Remove Comments Link */
add_action('wp_before_admin_bar_render', 'silverlessstudio_manage_admin_bar');

/* Remove Admin Bar */
add_action('after_setup_theme', 'silverlessstudio_remove_admin_bar');


/****************************************************/
/*                     Functions                     /
/****************************************************/

function silverlessstudio_scripts() {
	wp_enqueue_style( 'silverlessstudio-style', get_stylesheet_uri(), NULL, microtime() );
	wp_enqueue_script( 'silverlessstudio-core-js', get_template_directory_uri() . '/inc/js/compiled.js', array('jquery'),  true);
	wp_enqueue_script( 'silverlessstudio-owl-js', get_template_directory_uri() . '/inc/js/owl.carousel.min.js', array('jquery'), true);
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
}

function silverlessstudio_custom_menu() {
	register_nav_menus(array(
		'main-menu' => __( 'Main Menu' ),
		'top-bar-menu' => __( 'Top Bar Menu'),
		'legal-menu' => __( 'Legal Menu'),
		'info-menu' => __( 'Information Menu'),
		'footer-menu' => __( 'Footer Menu')
	));
}

function silverlessstudio_dashboard_widget() {
	global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'silverlessstudio Support', 'silverlessstudio_dashboard_help');
}

function silverlessstudio_dashboard_help() {
	echo file_get_contents(__DIR__ . "/admin-settings/dashboard.html");
}

function silverlessstudio_custom_fonts() {
	echo '<style type="text/css">' . file_get_contents(__DIR__ . "/admin-settings/style-admin.css") . '</style>';


}

if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Testimonials',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Read Me',
		'menu_title'	=> 'Read Me',
		'menu_slug' 	=> 'Read Me',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

function silverlessstudio_remove_menus(){
	remove_menu_page( 'edit-comments.php' ); //Comments
}

function silverlessstudio_manage_columns($columns) {
	unset($columns["comments"]);
	return $columns;
}

function silverlessstudio_reorder_menu() {
    return array(
		'index.php',                        // Dashboard
		'separator1',                       // --Space--
		'edit.php',                         // Posts
		'work.php',                         // Posts
		'edit.php?post_type=page',          // Pages
		'upload.php',                       // Media
		'separator2',                       // --Space--
		'themes.php',                       // Appearance
		'plugins.php',                      // Plugins
		'users.php',                        // Users
		'tools.php',                        // Tools
		'options-general.php',              // Settings
		'wpcf7',                            // Contact Form 7
   );
}

function silverlessstudio_manage_admin_bar(){
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
}


if(function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'site-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/**= Add Custom Post Types and Taxonomies =**/
require_once ('custom-post-types.php');

function silverlessstudio_remove_admin_bar() {
	show_admin_bar(false);
}

add_filter( 'excerpt_length', function($length) {
    return 20;
} );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');