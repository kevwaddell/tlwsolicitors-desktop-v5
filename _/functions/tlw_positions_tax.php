<?php 
add_action( 'init', 'register_taxonomy_tlw_positions_tax' );

function register_taxonomy_tlw_positions_tax() {

    $labels = array( 
        'name' => _x( 'Positions', 'tlw_positions_tax' ),
        'singular_name' => _x( 'Position', 'tlw_positions_tax' ),
        'search_items' => _x( 'Search Positions', 'tlw_positions_tax' ),
        'popular_items' => _x( 'Popular Positions', 'tlw_positions_tax' ),
        'all_items' => _x( 'All Positions', 'tlw_positions_tax' ),
        'parent_item' => _x( 'Parent Position', 'tlw_positions_tax' ),
        'parent_item_colon' => _x( 'Parent Position:', 'tlw_positions_tax' ),
        'edit_item' => _x( 'Edit Position', 'tlw_positions_tax' ),
        'update_item' => _x( 'Update Position', 'tlw_positions_tax' ),
        'add_new_item' => _x( 'Add New Position', 'tlw_positions_tax' ),
        'new_item_name' => _x( 'New Position', 'tlw_positions_tax' ),
        'separate_items_with_commas' => _x( 'Separate positions with commas', 'tlw_positions_tax' ),
        'add_or_remove_items' => _x( 'Add or remove positions', 'tlw_positions_tax' ),
        'choose_from_most_used' => _x( 'Choose from the most used positions', 'tlw_positions_tax' ),
        'menu_name' => _x( 'Positions', 'tlw_positions_tax' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => false,
        'show_ui' => true,
        'show_tagcloud' => false,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => false,
        'query_var' => true
    );

    register_taxonomy( 'tlw_positions_tax', array('tlw_team_cpt'), $args );
}
 ?>