<?php
/*
Plugin Name: rindyportfolio.com
Plugin URI: http://rindyportfolio.com
Description: Custom post types etc
Version: 1
Author: Rindy Portfolio
Author URI: http://rindyportfolio.com
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


// Register Custom Post Types

function rp_cpt() {

	$labels = array(
		'name'                  => 'Instagram',
		'singular_name'         => 'Instagram',
		'menu_name'             => 'Instagram',
		'name_admin_bar'        => 'Instagram',
		'archives'              => 'Instagram Archives',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Instagram',
		'description'           => 'Repository of Instagram images',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'instagram', $args );

	$labels = array(
		'name'                  => 'Books',
		'singular_name'         => 'Book',
		'menu_name'             => 'Books',
		'name_admin_bar'        => 'Book',
		'archives'              => 'Library',
		'parent_item_colon'     => 'Parent Item:',
		'all_items'             => 'All Items',
		'add_new_item'          => 'Add New Item',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Book',
		'description'           => 'Books in my library',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array( 'read_status', 'genre', 'subjects', 'authors' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'book', $args );

}
add_action( 'init', 'rp_cpt', 0 );


// Register Custom Taxonomies

add_action( 'init', 'cptui_register_my_taxes' );
function cptui_register_my_taxes() {
	$labels = array(
		'name' => __( 'Read Status', '' ),
		'singular_name' => __( 'Read Status', '' ),
		);

	$args = array(
		'label' => __( 'Read Status', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'label' => 'Read Status',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'status', 'with_front' => false, ),
		'show_admin_column' => 1,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'read_status', array( 'book' ), $args );

	$labels = array(
		'name' => __( 'Genres', '' ),
		'singular_name' => __( 'Genre', '' ),
		);

	$args = array(
		'label' => __( 'Genres', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 1,
		'label' => 'Genres',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'genre', 'with_front' => false, ),
		'show_admin_column' => 1,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'genre', array( 'book' ), $args );

	$labels = array(
		'name' => __( 'Subjects', '' ),
		'singular_name' => __( 'Subject', '' ),
		);

	$args = array(
		'label' => __( 'Subjects', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 0,
		'label' => 'Subjects',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'subjects', 'with_front' => false, ),
		'show_admin_column' => 1,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'subjects', array( 'book' ), $args );

	$labels = array(
		'name' => __( 'Authors', '' ),
		'singular_name' => __( 'Author', '' ),
		);

	$args = array(
		'label' => __( 'Authors', '' ),
		'labels' => $labels,
		'public' => true,
		'hierarchical' => 0,
		'label' => 'Authors',
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'author', 'with_front' => false, ),
		'show_admin_column' => 1,
		'show_in_rest' => false,
		'rest_base' => '',
		'show_in_quick_edit' => true,
	);
	register_taxonomy( 'authors', array( 'book' ), $args );

}

// Add templates for CPTs

function rp_custom_single( $single ) {
    global $wp_query, $post;

    if ( $post->post_type == 'instagram' ){
        if ( file_exists( plugin_dir_path( __FILE__ ) . 'templates/single-instagram.php') )
            return plugin_dir_path( __FILE__ ) . 'templates/single-instagram.php';
    }
    return $single;
}
add_filter('single_template', 'rp_custom_single');

function rp_custom_archive( $archive_template ) {
	global $wp_query, $post;

	if ( is_post_type_archive( 'instagram' ) ) {
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'templates/archive-instagram.php') )
			return plugin_dir_path( __FILE__ ) . 'templates/archive-instagram.php';
	}
	return $archive_template;
}
add_filter( 'archive_template', 'rp_custom_archive' );

// Add instagram image size
add_image_size( 'insta-med', 680, 680, false );
add_image_size( 'insta-large', 1200, 1200, false );