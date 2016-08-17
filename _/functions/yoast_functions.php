<?php 
if ( is_admin() ) { // check to make sure we aren't on the front end
		
	add_filter('wpseo_pre_analysis_post_content', 'add_custom_to_yoast');
	
	function add_custom_to_yoast( $content ) {
		global $post;
		$pid = $post->ID;
		$pg = get_page($pid);
		$faqs_active = get_field('faqs_active', $pid);
		$custom_content = '';
		
		if ($faqs_active) {
		$faqs_id = 	get_field('faqs', $pid);
		$faqs = get_field('faq_qestions', $faqs_id);
		
			foreach ($faqs as $faq) {
				$q = $faq['faq_question'];
				$a = $faq['faq_answer'];
				
				$custom_content .= $q;
				$custom_content .= $a;
			}
		
			//echo '<pre>';print_r($content.' '.$custom_content);echo '</pre>';
		}
		
		
		return $content.' '.$custom_content;
		
		remove_filter('wpseo_pre_analysis_post_content', 'add_custom_to_yoast'); // don't let WP execute this twice
	}
} 
?>