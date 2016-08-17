<?php 
add_action( 'init', 'register_cpt_tlw_landing_page' );

function register_cpt_tlw_landing_page() {

    $labels = array( 
        'name' => _x( 'Landing pages', 'tlw_landing_page' ),
        'singular_name' => _x( 'Landing page', 'tlw_landing_page' ),
        'add_new' => _x( 'Add New', 'tlw_landing_page' ),
        'add_new_item' => _x( 'Add New Landing page', 'tlw_landing_page' ),
        'edit_item' => _x( 'Edit Landing page', 'tlw_landing_page' ),
        'new_item' => _x( 'New Landing page', 'tlw_landing_page' ),
        'view_item' => _x( 'View Landing page', 'tlw_landing_page' ),
        'search_items' => _x( 'Search Landing pages', 'tlw_landing_page' ),
        'not_found' => _x( 'No landing pages found', 'tlw_landing_page' ),
        'not_found_in_trash' => _x( 'No landing pages found in Trash', 'tlw_landing_page' ),
        'parent_item_colon' => _x( 'Parent Landing page:', 'tlw_landing_page' ),
        'menu_name' => _x( 'Landing pages', 'tlw_landing_page' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for TLW Landing pages',
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-feedback',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 
            'slug' => 'go', 
            'with_front' => false,
            'feeds' => false,
            'pages' => false
        ),
        'capability_type' => 'page'
    );

    register_post_type( 'tlw_landing_page', $args );
}	
?>