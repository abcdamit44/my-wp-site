<?php 

// Add title dynamically
function kstheme_theme_support()
{
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','kstheme_theme_support');

function kstheme_menus(){
	$locations = array(
		'primary'=> 'Main Menu',
		'footer'=> 'Footer Menu Items'
	);
	register_nav_menus($locations);
}
add_action('init','kstheme_menus');

function kstheme_register_style(){
	$version = wp_get_theme()->get('version');
	wp_enqueue_style('kstheme-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css',array(),$version,'all');
	wp_enqueue_style('kstheme-fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),$version,'all');
	wp_enqueue_style('kstheme-custom-style', get_template_directory_uri().'/assets/css/style.css',array(),$version,'all');
	wp_enqueue_style('kstheme-responsive', get_template_directory_uri().'/assets/css/responsive.css',array(),$version,'all');
	wp_enqueue_style('kstheme-style', get_template_directory_uri().'/style.css',array('kstheme-bootstrap'),$version,'all');
}
add_action('wp_enqueue_scripts','kstheme_register_style');


function kstheme_register_scripts(){
	$version = wp_get_theme()->get('version');
	wp_enqueue_script('kstheme-jQuery', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js',array(),$version,true);
	wp_enqueue_script('kstheme-popper', get_template_directory_uri().'/assets/js/popper.min.js',array(),$version,true);
	wp_enqueue_script('kstheme-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.js',array(),$version,true);
	wp_enqueue_script('kstheme-custom-script', get_template_directory_uri().'/assets/js/custom.js',array(),$version,true);
	
}
add_action('wp_enqueue_scripts','kstheme_register_scripts');


require_once get_template_directory() . '/inc/kstheme-plugin-activation.php';
?>

