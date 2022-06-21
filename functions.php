<?php
/*
Theme Name: Midiateca
Description: Midiateca Capixaba - a child theme of Blocksy
Author: wetah
Version: 0.1.3
Text Domain: midiateca
*/

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

/** Child Theme version */
const MIDIATECA_VERSION = '0.1.3';

/* Enqueues necessary JS and CSS files */
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'midiateca-style', get_stylesheet_directory_uri() . '/style.min.css', array('parent-style'), MIDIATECA_VERSION );
	wp_enqueue_style( 'dashicons' ); // Used in some parts of the theme, even if not logged.
	wp_enqueue_script( 'midiateca-search-scripts', get_stylesheet_directory_uri() . '/js/search-scripts.js', array(), MIDIATECA_VERSION );
});

/* Enqueues block side CSS files */
function midiateca_editor_side_enqueues() {
	wp_enqueue_style( 'midiateca-editor-styles', get_stylesheet_directory_uri() . '/editor.min.css', array(), MIDIATECA_VERSION );
}
add_action( 'enqueue_block_editor_assets', 'midiateca_editor_side_enqueues');

/* Theme special features */
function midiateca_theme_supported_features() {
	add_theme_support( 'custom-units', 'px', 'rem', 'em', '%', 'vh', 'vw' );
	add_theme_support( 'custom-spacing' );
	add_theme_support( 'custom-line-height' );
}
add_action( 'after_setup_theme', 'midiateca_theme_supported_features' );


// Updates to the search modal
require get_stylesheet_directory() . '/inc/search-modal.php';

// Registers Block styles
require get_stylesheet_directory() . '/inc/block-styles.php';

// Adds action to inser share and back buttons on headers
require get_stylesheet_directory() . '/inc/elements.php';

// Curadoria and instituicao post types
require get_stylesheet_directory() . '/inc/post-types.php';

// Filter submission
require get_stylesheet_directory() . '/inc/submission-filters.php';
