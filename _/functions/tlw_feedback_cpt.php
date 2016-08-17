<?php 
add_action( 'init', 'register_cpt_tlw_testimonial_cpt' );

	function register_cpt_tlw_testimonial_cpt() {

	$temp_directory = get_stylesheet_directory_uri();

    $labels = array( 
        'name' => _x( 'Testimonials', 'tlw_testimonial_cpt' ),
        'singular_name' => _x( 'Testimonial', 'tlw_testimonial_cpt' ),
        'add_new' => _x( 'Add New', 'tlw_testimonial_cpt' ),
        'add_new_item' => _x( 'Add New Testimonial', 'tlw_testimonial_cpt' ),
        'edit_item' => _x( 'Edit Testimonial', 'tlw_testimonial_cpt' ),
        'new_item' => _x( 'New Testimonial', 'tlw_testimonial_cpt' ),
        'view_item' => _x( 'View Testimonial', 'tlw_testimonial_cpt' ),
        'search_items' => _x( 'Search Testimonials', 'tlw_testimonial_cpt' ),
        'not_found' => _x( 'No testimonials found', 'tlw_testimonial_cpt' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'tlw_testimonial_cpt' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'tlw_testimonial_cpt' ),
        'menu_name' => _x( 'Testimonials', 'tlw_testimonial_cpt' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'TLW Solicitors Testimonials CPT.',
        'supports' => array( 'title'),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-id',
        'show_in_nav_menus' => false,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'capability_type' => 'post'
    );

    register_post_type( 'tlw_testimonial_cpt', $args );
    
    remove_post_type_support('tlw_testimonial_cpt', 'title');
    
	add_action( 'edit_form_after_title', 'testimonial_title' );
	
	function testimonial_title() {
		global $current_screen;
		global $post;
		
		//echo '<pre>';print_r($current_screen->id);echo '</pre>';
		
		if ($current_screen->id == 'tlw_testimonial_cpt') {
			
			if ($post->post_title && $post->post_title != "Auto Draft") {
			echo '<h2 style="background-color: #278ab7; color: white; padding-left: 10px; text-shadow: none; margin-top: 0px;">Title: '.$post->post_title.'</h2>';
			} 
		
		}
		
	}
		    
}

 ?>