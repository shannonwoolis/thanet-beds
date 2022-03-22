<?php
// Register Custom Post Type
function stores_post_type() {

	$labels = array(
		'name'                  => _x( 'Stores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Store', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Stores', 'text_domain' ),
		'name_admin_bar'        => __( 'Stores', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Items', 'text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'View Item', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'our-stores',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Store', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'stores', $args );

}
add_action( 'init', 'stores_post_type', 0 );


/* ========================================================================================================================

Register Reviews CPT

======================================================================================================================== */
function register_reviews() {

    $labels = array(
        'name'                  => _x( 'Reviews', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Review', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Reviews', 'text_domain' ),
        'name_admin_bar'        => __( 'Reviews', 'text_domain' ),
        'archives'              => __( 'Review Archives', 'text_domain' ),
        'attributes'            => __( 'Review Attributes', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Review:', 'text_domain' ),
        'all_items'             => __( 'All Reviews', 'text_domain' ),
        'add_new_item'          => __( 'Add New Review', 'text_domain' ),
        'add_new'               => __( 'Add Review', 'text_domain' ),
        'new_item'              => __( 'New Review', 'text_domain' ),
        'edit_item'             => __( 'Edit Review', 'text_domain' ),
        'update_item'           => __( 'Update Review', 'text_domain' ),
        'view_item'             => __( 'View Review', 'text_domain' ),
        'view_items'            => __( 'View Reviews', 'text_domain' ),
        'search_items'          => __( 'Search Review', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Review Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set Review image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove Review image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as Review image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into Review', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Review', 'text_domain' ),
        'items_list'            => __( 'Review list', 'text_domain' ),
        'items_list_navigation' => __( 'Review list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter Reviews list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Review', 'text_domain' ),
        'description'           => __( 'Reviews CPT', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-editor-quote',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'reviews', $args );

}
add_action( 'init', 'register_reviews', 0 );