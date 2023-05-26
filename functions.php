<?php
/*Fixing up Block Editor*/

add_action( 'after_setup_theme', 'nwfund_setup');
function nwfund_setup() {
	//Remove core and theme patterns that aren't appropriate for theme
	remove_theme_support( 'core-block-patterns' );
	unregister_block_pattern( 'twentytwenty/event-details' );
	unregister_block_pattern( 'twentytwenty/featured-content' );

	//Create theme pattern category
	register_block_pattern_category('nwfund',
		  array( 'label' => __( 'NW Fund', 'nwfund' ) ) );
}

//No pattern library please, that'll confuse things
add_filter( 'should_load_remote_block_patterns', '__return_false' );

// Load stylesheets
add_action( 'wp_enqueue_scripts', 'nwfund_register_styles' );
function nwfund_register_styles() {
	
	// Add parent CSS
	wp_register_style(
		'twentytwenty-style',
		get_template_directory_uri() . '/style.css',
		array(),
		null
	);
	wp_enqueue_style( 'twentytwenty-style' );
	
	// Add child CSS
	wp_register_style(
			'nwfund-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			null
		);
	wp_enqueue_style( 'nwfund-style' );
   
}

//Enqueue supplemental block editor styles

function nwfund_block_editor_styles() {

	wp_enqueue_style( 'nwfund-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

}

add_action( 'enqueue_block_editor_assets', 'nwfund_block_editor_styles', 1, 1 );

//Increase security by turning off theme and plugin editors
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

//Uncomment this in order to allow SVG uploads. 
//We don't want to leave this on permanently due to security concerns, but the client logo is SVG; left in case of future updates.
/*
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
   }
   add_filter('upload_mimes', 'cc_mime_types');
*/

?>