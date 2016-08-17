<?php
add_action( 'init', 'register_cpt_tlw_faq_cpt' );

function register_cpt_tlw_faq_cpt() {

    $labels = array( 
        'name' => _x( 'FAQ\'s', 'tlw_faq_cpt' ),
        'singular_name' => _x( 'Questions', 'tlw_faq_cpt' ),
        'add_new' => _x( 'Add New', 'tlw_faq_cpt' ),
        'add_new_item' => _x( 'Add New Questions', 'tlw_faq_cpt' ),
        'edit_item' => _x( 'Edit Questions', 'tlw_faq_cpt' ),
        'new_item' => _x( 'New Questions', 'tlw_faq_cpt' ),
        'view_item' => _x( 'View Questions', 'tlw_faq_cpt' ),
        'search_items' => _x( 'Search FAQ\'s', 'tlw_faq_cpt' ),
        'not_found' => _x( 'No faq\'s found', 'tlw_faq_cpt' ),
        'not_found_in_trash' => _x( 'No faq\'s found in Trash', 'tlw_faq_cpt' ),
        'parent_item_colon' => _x( 'Parent Questions:', 'tlw_faq_cpt' ),
        'menu_name' => _x( 'FAQ\'s', 'tlw_faq_cpt' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Frequently asked questions CPT.',
        'supports' => array( 'title', 'editor' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-editor-help',
        'show_in_nav_menus' => false,
        'publicly_queryable' => false,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'capability_type' => 'post'
    );

    register_post_type( 'tlw_faq_cpt', $args );
    
    remove_post_type_support('tlw_faq_cpt', 'title');
    
    add_action( 'edit_form_after_title', 'faq_title' );
	
	function faq_title() {
		global $current_screen;
		global $post;
		
		//echo '<pre>';print_r($current_screen->id);echo '</pre>';
		
		if ($current_screen->id == 'tlw_faq_cpt') {
			
			if ($post->post_title && $post->post_title != "Auto Draft") {
			echo '<h2 style="background-color: #278ab7; color: white; padding-left: 10px; text-shadow: none; margin-top: 0px;">Title: '.$post->post_title.'</h2>';
			} 
		
		}
		
	}
}

?>