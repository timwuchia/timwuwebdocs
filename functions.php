<?php
/**
 * Enqueue scripts and styles.
 */

function hc_parent_theme_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/dist/css/main.css', array() );
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/dist/js/main.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hc_parent_theme_scripts' );

// add options page
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		array(
			'page_title' => 'General Options',
			'menu_title' => 'General Options',
			'menu_slug'  => 'general-options',
			'position'   => 10,
			'capability' => 'edit_posts',
			'icon_url'   => 'dashicons-megaphone',
		)
	);
}

/**
 * ACF Blocks
*/
if ( function_exists( 'acf_register_block' ) ) {
	add_action( 'acf/init', 'hc_custom_blocks' );
}

function hc_custom_blocks() {
	acf_register_block(
		array(
			'name'            => 'accordian',
			'title'           => __( 'Accordian' ),
			'description'     => __( 'Recent Posts Block' ),
			'category'        => 'tw-blocks-category',
			'keywords'        => array( 'accordian', 'dropdown' ),
			'render_template' => get_template_directory() . '/template-parts/blocks/accordian.php'
		)
	);
}