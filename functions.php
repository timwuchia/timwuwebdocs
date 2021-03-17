<?php
/**
 * Enqueue scripts and styles.
 */

add_theme_support( 'menus' );

function hc_parent_theme_scripts() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/dist/css/main.css', array() );
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/assets/dist/js/main.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hc_parent_theme_scripts' );

add_action( 'init', 'add_custom_post_type' );
function tww_rewrite_flush() {
	add_custom_post_type();
	flush_rewrite_rules();
}
  register_activation_hook( __FILE__, 'tww_rewrite_flush' );
function add_custom_post_type() {

	/*
	** Add API custom post type
	*/

	register_post_type(
		'api-doc',
		array(
			'labels'            => array(
				'name'               => __( 'APIs', 'timwuwebdocs' ),
				'singular_name'      => __( 'API', 'timwuwebdocs' ),
				'add_new_item'       => __( 'Add New API', 'timwuwebdocs' ),
				'edit_item'          => __( 'Edit API', 'timwuwebdocs' ),
				'new_item'           => __( 'New API', 'timwuwebdocs' ),
				'view_item'          => __( 'View API', 'timwuwebdocs' ),
				'search_items'       => __( 'Search API', 'timwuwebdocs' ),
				'not_found'          => __( 'No API Found', 'timwuwebdocs' ),
				'not_found_in_trash' => __( 'No APIs found in Trash', 'timwuwebdocs' ),
			),

			'description'       => 'Documentation for APIS',
			'hierarchical'      => true,
			'has_archive'       => true,
			'menu_icon'         => 'dashicons-rest-api',
			'menu_position'     => 5,
			'public'            => true,
			'rewrite'           => array(
				'slug'       => 'api-doc',
				'with_front' => false,
			),
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),
		)
	);

	/*
	** Add Test Cases custom post type
	*/

	register_post_type(
		'case',
		array(
			'labels'            => array(
				'name'               => __( 'Cases', 'timwuwebdocs' ),
				'singular_name'      => __( 'Case', 'timwuwebdocs' ),
				'add_new_item'       => __( 'Add New Case', 'timwuwebdocs' ),
				'edit_item'          => __( 'Edit Case', 'timwuwebdocs' ),
				'new_item'           => __( 'New Case', 'timwuwebdocs' ),
				'view_item'          => __( 'View Case', 'timwuwebdocs' ),
				'search_items'       => __( 'Search Case', 'timwuwebdocs' ),
				'not_found'          => __( 'No Cases Found', 'timwuwebdocs' ),
				'not_found_in_trash' => __( 'No Cases found in Trash', 'timwuwebdocs' ),
			),

			'description'       => 'Documentation for Cases',
			'hierarchical'      => false,
			'has_archive'       => true,
			'menu_icon'         => 'dashicons-media-document',
			'menu_position'     => 5,
			'public'            => true,
			'has_archive'            => true,
			'rewrite'           => array(
				'slug'       => 'case',
				'with_front' => false,
			),
			'show_in_admin_bar' => false,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'supports'          => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),
		)
	);

}
