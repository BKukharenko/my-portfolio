<?php

//Register Portfolio Post Type
add_action('init', 'portfolio_post_type_register');

function portfolio_post_type_register()
{
	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Portfolio', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add New Portfolio Item', 'team member', 'understrap' ),
		'add_new_item'       => __( 'Add New Portfolio Item', 'understrap' ),
		'new_item'           => __( 'New Portfolio item', 'understrap' ),
		'edit_item'          => __( 'Edit Portfolio item', 'understrap' ),
		'view_item'          => __( 'View Portfolio item', 'understrap' ),
		'all_items'          => __( 'All Portfolio items', 'understrap' ),
		'search_items'       => __( 'Search Portfolio items', 'understrap' ),
		'parent_item_colon'  => __( 'Parent Portfolio item:', 'understrap' ),
		'not_found'          => __( 'No items found.', 'understrap' ),
		'not_found_in_trash' => __( 'No items found in Trash.', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is a list of portfolio items.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes')
	);
	register_post_type('portfolio',$args);
}