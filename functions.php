<?php

/* Basic Theme Support */

function wacoolhackonthenet_theme_functions()
{
	add_theme_support('custom-logo'); // Logo Custom
	add_theme_support('custom-background'); // Fond d'écran
	add_theme_support('editor-color-palette'); // Palette Header + background
	add_theme_support('post-thumbnails'); // Miniatures
	add_theme_support('title-tag'); // Title of Website
	add_theme_support('automatic-feed-links'); // RSS
	add_theme_support('custom-header'); // Header (hack on the net)

}

add_action('after_setup_theme', 'wacoolhackonthenet_theme_functions');



/* Styles */

function wacoolhackonthenet_register_styles(){

	$wacoolhackonthenet_version = wp_get_theme()->get('Version');
	wp_enqueue_style('wacoolhackonthenet-bootstrap', get_template_directory_uri() . "/assets/css/bootstrap.min.css", '4.6.0', 'all');
	wp_enqueue_style('wacoolhackonthenet-fontawesome', get_template_directory_uri() . "/assets/font-awesome/all.css" , '5.15.3', 'all');
	wp_enqueue_style('wacoolhackonthenet-style', get_template_directory_uri() . "/style.css", array('wacoolhackonthenet-bootstrap'), $wacoolhackonthenet_version, 'all');
	
}

add_action('wp_enqueue_scripts', 'wacoolhackonthenet_register_styles');


/**
 * Registers an editor stylesheet for the theme.
 */
function wacoolhackonthenet_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wacoolhackonthenet_editor_styles' );

/* Scripts */



function wacoolhackonthenet_register_scripts(){
  // jQuery first, then Popper.js, then Bootstrap JS
	wp_enqueue_script('wacoolhackonthenet-popper', get_template_directory_uri() . "/assets/js/popper.js", array(), '1.16.1', true);
	wp_enqueue_script('wacoolhackonthenet-bootstrap', get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), '4.4.1', true);
	
	// Custom JS
	// wp_enqueue_script('wacoolhackonthenet-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);

}

add_action('wp_enqueue_scripts', 'wacoolhackonthenet_register_scripts');



/* CONTAINER */

if (!isset($content_width)) $content_width = 1000;


// --- MENU
register_nav_menu('primary', __('Primary Menu', 'wacoolhackonthenet'));

// --- MENU SOCIAL
register_nav_menu('socialmenu', __('Social Menu', 'wacoolhackonthenet'));





// --- WIDGETS

function wacoolhackonthenet_widget_area()
{

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);


	// Sidebar #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __('Sidebar #1', 'wacoolhackonthenet'),
				'id'          => 'sidebar-',
				'description' => __('Widgets in this area will be displayed in the first column in the sidebar.', 'wacoolhackonthenet'),
			)
		)
	);


	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __('Footer #1', 'wacoolhackonthenet'),
				'id'          => 'footer-1',
				'description' => __('Widgets in this area will be displayed in the first column in the footer.', 'wacoolhackonthenet'),
			)
		)
	);

	// Footer #2.

	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __('Footer #2', 'wacoolhackonthenet'),
				'id'          => 'footer-2',
				'description' => __('Widgets in this area will be displayed in the second column in the footer.', 'wacoolhackonthenet'),
			)
		)
	);
}



add_action('widgets_init', 'wacoolhackonthenet_widget_area');