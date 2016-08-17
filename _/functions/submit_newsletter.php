<?php
add_action('gform_after_submission_3', 'post_to_third_party', 10, 2);

function post_to_third_party($entry, $form) {

	
	//echo '<pre>';print_r($entry);echo '</pre>';

	$post_url = 'http://dmtrk.net/signup.ashx';
	
    $body = array(
    	'Email' => $entry['2'], 
		'addressbookid' => '1838090', 
        'userid' => '88348',
        'cd_FIRSTNAME' => $entry['1.3'],
        'cd_LASTNAME' => $entry['1.6'],
        'cd_FULLNAME' => $entry['1.3'].' '.$entry['1.6']
        );
        
    // echo '<pre>';print_r($body);echo '</pre>';
    
    $request = new WP_Http();
    $response = $request->post($post_url, array('body' => $body));   
     
}
?>