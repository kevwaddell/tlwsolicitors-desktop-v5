<?php
/**
 * Calls the class on the post edit screen
 */
function Call_Next_Previous_Post_Edit_Class() {
	return new Next_Previous_Post_Edit_Class();
}

if ( is_admin() )
	add_action( 'load-post.php', 'Call_Next_Previous_Post_Edit_Class' );

/** 
 * The Class
 */
class Next_Previous_Post_Edit_Class {
	
	const LANG = 'post-edit-navigation';
	public $post_types = array('post', 'page');
	
	public function __construct() {
		add_action( 'add_meta_boxes', array( &$this, 'add_some_meta_box' ) );
	}
	
	/**
	 * Adds the meta box container
	 */
	public function add_some_meta_box() {
		$args=array(
		    'public' => true,
		  '_builtin' => false
		);
		$output = 'names'; // names or objects, note names is the default
		$operator = 'and'; // 'and' or 'or'
		$this->post_types = array_merge($this->post_types , (array) get_post_types($args, 'names', 'and')); 
		foreach($this->post_types as $post_type) {
			add_meta_box( 
			  'some_meta_box_name'
			  ,__( 'Edit Previous and Next '.$post_type, self::LANG )
			  ,array( &$this, 'render_meta_box_content' )
			  , $post_type
			  ,'advanced'
			  ,'high'
			);
		}
	}
	
	
	/**
	 * Render Meta Box content
	 */
	public function render_meta_box_content($post) {
		
		global $wpdb;
		$query = "
		  SELECT DISTINCT * FROM $wpdb->posts
		  WHERE $wpdb->posts.post_type = '$post->post_type'
		  AND ($wpdb->posts.post_status = 'publish' OR $wpdb->posts.post_status = 'future' OR $wpdb->posts.post_status = 'draft' OR $wpdb->posts.post_status = 'pending')
		  AND $wpdb->posts.post_date 
		";
		
		$previous = $wpdb->get_results($query."<= '$post->post_date' ORDER BY post_date DESC LIMIT 1,5");
		$next = $wpdb->get_results($query.">= '$post->post_date' ORDER BY $wpdb->posts.post_date ASC LIMIT 1,5");
		
		if($previous || $next){
			
			echo '<p>';
			if($previous) {
				$previous = array_reverse($previous);
				foreach ($previous as $prev_post) {
					$title = (isset($prev_post->post_title) && $prev_post->post_title) ? $prev_post->post_title : 'No Title';
					echo 'Edit Previous: <a href="' . get_edit_post_link($prev_post->ID) . '">' . $title . '</a><br/>';
				}
			}
			
			// current post
			echo '<span style="color: red;">Current Post: ' . $post->post_title . '</span><br/>';
			
			if($next) {
				foreach ($next as $next_post) {
					$title = (isset($next_post->post_title) && $next_post->post_title) ? $next_post->post_title : 'No Title';
					echo 'Edit Next: <a href="' . get_edit_post_link($next_post->ID) . '">' . $title . '</a><br/>';
				}
			}
			echo '</p>';
		}
	}
	
} // end class	
?>