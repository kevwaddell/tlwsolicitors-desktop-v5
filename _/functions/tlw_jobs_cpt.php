<?php
	
add_action( 'init', 'register_cpt_tlw_vacancies_cpt' );

function register_cpt_tlw_vacancies_cpt() {

	$labels = array(
		'name' => __( 'Vacancies', 'tlw_vacancies_cpt' ),
		'singular_name' => __( 'Vacancy', 'tlw_vacancies_cpt' ),
		'add_new' => __( 'Add New', 'tlw_vacancies_cpt' ),
		'add_new_item' => __( 'Add New Vacancy', 'tlw_vacancies_cpt' ),
		'edit_item' => __( 'Edit Vacancy', 'tlw_vacancies_cpt' ),
		'new_item' => __( 'New Vacancy', 'tlw_vacancies_cpt' ),
		'view_item' => __( 'View Vacancy', 'tlw_vacancies_cpt' ),
		'search_items' => __( 'Search Vacancies', 'tlw_vacancies_cpt' ),
		'not_found' => __( 'No vacancies found', 'tlw_vacancies_cpt' ),
		'not_found_in_trash' => __( 'No vacancies found in Trash', 'tlw_vacancies_cpt' ),
		'parent_item_colon' => __( 'Parent Vacancy:', 'tlw_vacancies_cpt' ),
		'menu_name' => __( 'Vacancies', 'tlw_vacancies_cpt' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'description' => 'Post type for TLW Job vacancies',
		'supports' => array( 'editor' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-nametag',
		'show_in_nav_menus' => false,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => array(
			'slug' => 'vacancies',
			'with_front' => false,
			'feeds' => true,
			'pages' => true
		),
		'capability_type' => 'post'
	);

	register_post_type( 'tlw_vacancies_cpt', $args );
	
	remove_post_type_support('tlw_vacancies_cpt', 'title');
	
	add_action( 'edit_form_after_title', 'vacancy_title' );
	
	function vacancy_title() {
		global $current_screen;
		global $post;
		
		//echo '<pre>';print_r($current_screen->id);echo '</pre>';
		
		if ($current_screen->id == 'tlw_vacancies_cpt') {
			
			if ($post->post_title && $post->post_title != "Auto Draft") {
			echo '<h2 style="background-color: #278ab7; color: white; padding-left: 10px; text-shadow: none; margin-top: 0px;">Job Reference: '.$post->post_title.'</h2>';
			} 
		
		}
		
	}
} 

?>