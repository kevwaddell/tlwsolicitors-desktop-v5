<?php 
/*
*  Change the Options Page menu to 'Theme Options'
*/
 
if( function_exists('acf_set_options_page_title') )
{
    acf_set_options_page_title( __('Global') );
}


if( function_exists('acf_add_options_sub_page') ) {

	acf_add_options_sub_page(
   		array(
        'title' => __('Site options'),
		)
    );
    
}

 ?>