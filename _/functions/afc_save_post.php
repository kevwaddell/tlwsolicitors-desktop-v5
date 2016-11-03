<?php
 
function my_acf_save_post( $post_id )
{
	global $current_screen;
	// vars
	
	if ($current_screen->id == 'tlw_testimonial_cpt') {
		
		 $name = $_POST['acf']['field_52e8d46ec7946'];
		 $name_slug = sanitize_title($name);
		 
		 $location = $_POST['acf']['field_52e8d48ac7947'];
		 $location_slug = sanitize_title($location);
		 
		 if (!empty($_POST['acf']['field_55a39a35be16c'])) {
		 $company = $_POST['acf']['field_55a39a35be16c'];
		 $company_slug = sanitize_title($company);
			  $slug = $name_slug."-".$company_slug."-".$location_slug;
			  $title = wp_strip_all_tags($name." - ".$company. " - ".$location);
		 } else {
			 $slug = $name_slug."-".$location_slug;
			 $title = wp_strip_all_tags($name." - ".$location); 
		 };
		 
		//echo '<pre>';print_r($slug);echo '</pre>';
		//echo '<pre>';print_r($title);echo '</pre>';
		
		wp_update_post( array( 'ID' => $post_id, 'post_title' => $title, 'post_name' => $slug) );
		 
	}	
	
	if ($current_screen->id == 'tlw_faq_cpt') {
		//echo '<pre>';print_r($_POST);echo '</pre>';
		$page_id = $_POST['acf']['field_56015524e21ae'];
		$page = get_page($page_id);
		
		$slug = $page->post_name. "-questions";
		$title = $page->post_title. " FAQ's";
		
		wp_update_post( array( 'ID' => $post_id, 'post_title' => $title, 'post_name' => $slug) );

	}
	
	if ($current_screen->id == 'tlw_vacancies_cpt') {
		//echo '<pre>';print_r($_POST);echo '</pre>';
		$job_title = $_POST['acf']['field_5819c30322de9'];
		$ref = $_POST['acf']['field_5819c32122dea'];
		
		$slug = sanitize_title($job_title.'-'.$ref);
		$title = wp_strip_all_tags($job_title. " - [ref: ".$ref."]");
		
		wp_update_post( array( 'ID' => $post_id, 'post_title' => $title, 'post_name' => $slug) );

	}
	
}
 
// run before ACF saves the $_POST['fields'] data
add_action('acf/save_post', 'my_acf_save_post', 1);
 
?>