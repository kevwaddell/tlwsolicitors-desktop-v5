<?php
add_filter( 'gform_ajax_spinner_url', 'tgm_io_custom_gforms_spinner' );

function tgm_io_custom_gforms_spinner( $src ) {

    return get_stylesheet_directory_uri() . '/_/img/ajax-loader.gif';
    
}

add_filter("gform_field_value_src", "populate_affiliate");

function populate_affiliate($value){
	if ( isset($_COOKIE['src']) ) {
	return $_COOKIE["src"];	
	}
}

add_filter("gform_field_value_gclid", "populate_google_click");

function populate_google_click($value){
	
	if ( isset($_SESSION['gclid']) ) {
				
		return $_SESSION['gclid'];
	}
}

function gform_column_splits($content, $field, $value, $lead_id, $form_id) {
if(IS_ADMIN) return $content; // only modify HTML on the front end

$form = RGFormsModel::get_form_meta($form_id, true);
$form_class = array_key_exists('cssClass', $form) ? $form['cssClass'] : '';
$form_classes = preg_split('/[\n\r\t ]+/', $form_class, -1, PREG_SPLIT_NO_EMPTY);
$fields_class = array_key_exists('cssClass', $field) ? $field['cssClass'] : '';
$field_classes = preg_split('/[\n\r\t ]+/', $fields_class, -1, PREG_SPLIT_NO_EMPTY);
if(!is_admin()) {
// multi-column form functionality

if($field['type'] == 'section') {
    $form = RGFormsModel::get_form_meta($form_id, true);

    // check for the presence of multi-column form classes
    $form_class = explode(' ', $form['cssClass']);
    $form_class_matches = array_intersect($form_class, array('two-column', 'three-column'));

    // check for the presence of section break column classes
    $field_class = explode(' ', $field['cssClass']);
    $field_class_matches = array_intersect($field_class, array('gform_column'));

    // if field is a column break in a multi-column form, perform the list split
    if(!empty($form_class_matches) && !empty($field_class_matches)) { // make sure to target only multi-column forms

        // retrieve the form's field list classes for consistency
        $form = RGFormsModel::add_default_properties($form);
        $description_class = rgar($form, 'descriptionPlacement') == 'above' ? 'description_above' : 'description_below';

        // close current field's li and ul and begin a new list with the same form field list classes
        return '</li></ul><ul class="gform_fields '.$form['labelPlacement'].' '.$description_class.' '.$field['cssClass'].'"><li class="gfield gsection empty">';

    }
}

}

return $content;
}
add_filter('gform_field_content', 'gform_column_splits', 10, 5); 


function custom_gf_class($classes, $field, $form) {

	 if($field["type"] == "select"){
        $classes .= " selectpicker";
       // echo '<pre>';print_r($classes);echo '</pre>';
    }
    return $classes;
}	
add_filter("gform_field_css_class", "custom_gf_class", 10, 3);

?>