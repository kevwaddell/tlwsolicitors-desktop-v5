<?php 
add_action( 'init', 'register_cpt_tlw_team_cpt' );

function register_cpt_tlw_team_cpt() {

    $labels = array( 
        'name' => _x( 'Team', 'tlw_team_cpt' ),
        'singular_name' => _x( 'Profile', 'tlw_team_cpt' ),
        'add_new' => _x( 'Add New', 'tlw_team_cpt' ),
        'add_new_item' => _x( 'Add New Profile', 'tlw_team_cpt' ),
        'edit_item' => _x( 'Edit Profile', 'tlw_team_cpt' ),
        'new_item' => _x( 'New Profile', 'tlw_team_cpt' ),
        'view_item' => _x( 'View Profile', 'tlw_team_cpt' ),
        'search_items' => _x( 'Search Team', 'tlw_team_cpt' ),
        'not_found' => _x( 'No team found', 'tlw_team_cpt' ),
        'not_found_in_trash' => _x( 'No team found in Trash', 'tlw_team_cpt' ),
        'parent_item_colon' => _x( 'Parent Profile:', 'tlw_team_cpt' ),
        'menu_name' => _x( 'Team', 'tlw_team_cpt' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'TLW Solicitors Team Members CPT.',
        'supports' => array( 'title', 'editor' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-groups',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'capability_type' => 'page'
    );

    register_post_type( 'tlw_team_cpt', $args );
}
 ?>