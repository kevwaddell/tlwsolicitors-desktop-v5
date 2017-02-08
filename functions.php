<?php 

/*
update_option('siteurl','http://tlwsolicitors.dev');
update_option('home','http://tlwsolicitors.dev');
*/

add_action( 'after_setup_theme', 'editor_styles' );

function editor_styles() {
add_editor_style(get_stylesheet_directory_uri().'/_/css/custom-editor-style.css?v='.filemtime( get_stylesheet_directory().'/_/css/custom-editor-style.css' ) );	
}

if (!is_admin()) {

	function tlw_scripts() {
	
		global $post;
		// Load stylesheets.
		wp_enqueue_style( 'print-styles', get_stylesheet_directory_uri().'/_/css/print-styles.css', null, filemtime( get_stylesheet_directory().'/_/css/print-styles.css' ), 'print' );
		//wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', array('twitter-bootstrap'), filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'screen' );
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', null, filemtime( get_stylesheet_directory().'/_/css/styles.css' ), 'screen' );
		
		if (is_page() || is_single()) {
		wp_dequeue_style('wprssmi_template_styles');	
		}
		
		if( !has_shortcode( $post->post_content, 'theme-my-login') ) {
		wp_dequeue_style('theme-my-login');
		}
		
		if ( isset($_COOKIE['catAccCookies']) ) {
		wp_dequeue_style('cookie-consent-style');
		}
		
		// Load JS
		$functions_dep = array(
		'jquery',
		'bootstrap-min',
		'bootstrap-select', 
		'jquery-cookie', 
		'slim-scroll'
		);
		//wp_enqueue_script( 'jquery' );
		//wp_deregister_script('gform_json');
		//wp_deregister_script('gform_gravityforms');
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');
		wp_deregister_script('autoptimize-toolbar');
		//wp_enqueue_script( 'jquery-ui-core' );
	    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js', array(), '3.0.0', true);
		wp_enqueue_script( 'modernizr-min', get_stylesheet_directory_uri() . '/_/js/modernizr-min.js', array(), '2.8.3', true );
		wp_enqueue_script( 'bootstrap-min', get_stylesheet_directory_uri() . '/_/js/bootstrap-min.js', array('jquery'), '2.8.3', true );
		wp_enqueue_script( 'jquery-cookie', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js', array('jquery'), '1.4.1', true );
		wp_enqueue_script( 'slim-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.6/jquery.slimscroll.min.js', array('jquery'), '1.3.6', true );
		wp_enqueue_script( 'bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js', array('jquery'), '1.11.2', true );
		wp_enqueue_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions-min.js', $functions_dep, filemtime( get_stylesheet_directory().'/_/js/functions.js' ), true );
		
	}
	add_action( 'wp_enqueue_scripts', 'tlw_scripts' );
}

if(!is_admin()) {
	
	add_action('wp_print_styles', 'show_all_styles');
	function show_all_styles() {
		// use global to call variable outside function
		
		global $wp_styles;
		
		// arrange the queue based on its dependency
		$wp_styles->all_deps($wp_styles->queue);	
		
		// The result
		$handles = $wp_styles->to_do;
		
		$css_code = '';
	
		// New file location: E:xampp\htdocs\wordpress\wp-content\theme\wdc\merged-style.css
		$merged_file_location = get_stylesheet_directory() .'/_/css/merged-style.css';
		$merged_file = file_get_contents($merged_file_location);
		//echo '<pre>';print_r($wp_styles->queue);echo '</pre>';
		// loop all styles
		foreach ($handles as $handle)
		{
			/*
				Clean up the url, for example: wp-content/themes/wdc/style.min.css?v=4.6
				become wp-content/themes/wdc/style.min.css
			*/
			$src = strtok($wp_styles->registered[$handle]->src, '?');
			
			// #1. Combine CSS File.
			// If the src is url		
			if (strpos($src, 'http') !== false  || strpos($src, 'https') !== false) {
				// Get thr site url, e.g. http://webdevzoom.com/wordpress
				$site_url = site_url();
			
				/*
					If the css file come from local server, change the full url into relative path
					For example: http://webdevzoom.com/wordpress/wp-content/plugins/wpnewsman/css/menuicon.css
					Become: /wp-content/plugins/wpnewsman/css/menuicon.css
					
					Otherwise, leave it as is, e.g: https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css
				*/
				if (strpos($src, $site_url) !== false)
					$css_file_path = str_replace($site_url, '', $src);
				else
					$css_file_path = $src;
				
				/*
					In order to be able to use file_get_contents function, we need to remove preceding slash,
					For example: /wp-content/plugins/wpnewsman/css/menuicon.css
					Become: wp-content/plugins/wpnewsman/css/menuicon.css
				*/
				$css_file_path = ltrim($css_file_path, '/');
			} else {			
				$css_file_path = ltrim($src, '/');
			}
			
			// Check wether file exists then merge
			if  (file_exists($css_file_path)) {
				$css_code .=  file_get_contents($css_file_path);
			}
		}
	
		// write the merged styles into current theme directory
		if ($merged_file != $css_code) {
		file_put_contents ($merged_file_location , $css_code);
		}
		
		// #2. Load the URL of merged file
		wp_enqueue_style('merged-style',  get_stylesheet_directory_uri() . '/_/css/merged-style.css', array(), filemtime( get_stylesheet_directory().'/_/css/print-styles.css', 'all');
		
		// #3. Deregister all handles
		foreach ($handles as $handle)
		{
			wp_deregister_style($handle);
		}
	}
}
// Custom deque to force remove unwanted css
if (!is_admin()) {
	
	function custom_dequeue() {
		
		if (!is_admin()) {
	    wp_dequeue_style('autoptimize-toolbar');
	    wp_deregister_style('autoptimize-toolbar');
	    wp_dequeue_script('autoptimize-toolbar');
	    wp_deregister_script('autoptimize-toolbar');
	    }
	}
	
	add_action( 'wp_enqueue_scripts', 'custom_dequeue', 9999 );
	add_action( 'wp_head', 'custom_dequeue', 9999 );

	add_filter( 'gform_init_scripts_footer', '__return_true' );
	
	function add_async_attribute($tag, $handle) {
		
	
		//echo '<pre>';print_r($handle);echo '</pre>';
	   // add script handles to the array below
	   
	   //return $tag;
	   return str_replace(' src', ' defer src', $tag);
	  
	}
	
	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);
}
 
if(!is_admin()) {
	add_filter('style_loader_tag', 'link_to_loadCSS_script',10,3);
	function link_to_loadCSS_script($html, $handle, $href ) {
		
	
			if ($handle == 'merged-style') {
			$dom = new DOMDocument();
		    $dom->loadHTML($html);
		    $a = $dom->getElementById($handle.'-css');	
			return "<noscript id=\"deferred-styles\"><link rel=\"". $a->getAttribute('rel') ."\" type=\"text/css\" href=\"".$a->getAttribute('href')."\" media=\"none\" onload=\"if(media!='all')media='all'\"/></noscript>";
			}
	
	   
	}
}

if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') {
	function ewp_remove_script_version( $src ){
		return remove_query_arg( 'ver', $src );
	}
	add_filter( 'script_loader_src', 'ewp_remove_script_version', 15, 1 );
	add_filter( 'style_loader_src', 'ewp_remove_script_version', 15, 1 );
}

add_theme_support('html5', array('search-form'));

if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'legal_links_menu' => 'Legal Menu',
			  'social_links_menu' => 'Footer Social Links',
			  'footer_menu_middle' => 'Footer Menu Middle',
			  'footer_menu_general' => 'Footer Menu General',
			  'top_bar_menu' => 'Top Bar Navigation'
			)
		);
}

if ( function_exists( 'register_sidebar' ) ) {
	
	$login_sb_args = array(
	'name'          => "User actions",
	'id'            => "user-actions",
	'description'   => 'Area for logged in user widget',
	'class'         => 'user-links',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '' 
	);
		
	$newsletter_sb_args = array(
	'name'          => "Newsletter Sign-up Form",
	'id'            => "newsletter-signup-form",
	'description'   => 'Newsletter signup widget',
	'class'         => 'contact-form',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' 
	);
	
	
	register_sidebar( $login_sb_args );
	register_sidebar( $newsletter_sb_args );
}


add_theme_support( 'post-thumbnails', array( 'page', 'post', 'tlw_landing_page' ) );
add_post_type_support( 'page', 'excerpt' );
add_theme_support( 'custom-background' );

// change size of admin featured image size in edit screen 
function change_featured_image_size_in_admin_28512( $downsize, $id, $size ) {
if ( ! is_admin() || ! get_current_screen() || 'edit' !==   get_current_screen()->parent_base ) {
return $downsize;
}

remove_filter( 'image_downsize', __FUNCTION__, 10, 3 );

// settings can be thumbnail, medium, large, full 
$image = image_downsize( $id, 'medium' ); 
add_filter( 'image_downsize', __FUNCTION__, 10, 3 );

return $image;
}
add_filter( 'image_downsize', 'change_featured_image_size_in_admin_28512', 10, 3 );

/* POST THUMBNAIL FUNCTIONS */

/*
function add_toolkit_banner_img( $post ) {	
		
	$post_thumbnail_id = get_post_thumbnail_id( $post );
	$banner_feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
	
	echo $banner_feat_img[0];
	
	//echo '<pre>';print_r( $wide_banner_img[0] );echo '</pre>';
	
}
*/

/*
function add_full_page_banner_img( $post ) {	
		
	$post_thumbnail_id = get_post_thumbnail_id( $post );
	$banner_feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
	
	echo $banner_feat_img[0];
	
	//echo '<pre>';print_r( $wide_banner_img[0] );echo '</pre>';
	
}
*/

function add_banner_feat_img( $post ) {	
		
	$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
	$wide_banner_img = wp_get_attachment_image_src($post_thumbnail_id, 'wide-banner-img' );
	
	echo $wide_banner_img[0];
	
	//echo '<pre>';print_r( $wide_banner_img[0] );echo '</pre>';
	
}

/* ---------------------------------- */

// Get the id of a page by its name
function get_page_id($page_name){
	global $wpdb;
	$page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
	return $page_name;
}

function add_gravityforms_style() {
	global $post;
	$form = get_field('form', $post->ID);
	
	if (!empty($form)) {
		wp_enqueue_style("gforms_css", GFCommon::get_base_url() . "/css/forms.css", null, GFCommon::$version);
	}
	
}
add_action('wp_print_styles', 'add_gravityforms_style');

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


/* REGISTER FEEDBACK CPT */
include (STYLESHEETPATH . '/_/functions/tlw_feedback_cpt.php');

/* REGISTER TEAMS CPT */
include (STYLESHEETPATH . '/_/functions/tlw_team_cpt.php');

/* REGISTER LANDING PAGE CPT */
include (STYLESHEETPATH . '/_/functions/tlw_landing_pages_cpt.php');

/* REGISTER HOW IT WORKS CPT */
include (STYLESHEETPATH . '/_/functions/tlw_how_it_works_cpt.php');

/* REGISTER FAQ's CPT */
include (STYLESHEETPATH . '/_/functions/tlw_faqs_cpt.php');

/* REGISTER Vacancies CPT */
include (STYLESHEETPATH . '/_/functions/tlw_jobs_cpt.php');

/* REGISTER POSITIONS TAX */
include (STYLESHEETPATH . '/_/functions/tlw_positions_tax.php');

/* AFC OPTIONS FUNCTIONS */
include (STYLESHEETPATH . '/_/functions/afc_options_functions.php');

/* FORM ACTIONS */
include (STYLESHEETPATH . '/_/functions/gform_functions.php');

/* AFC SAVE FUNCTIONS */
include (STYLESHEETPATH . '/_/functions/afc_save_post.php');

/* SEND NEWSLETTER TO DOTMAILER */
include (STYLESHEETPATH . '/_/functions/submit_newsletter.php');

function add_gf_cap() {	
   $id = 2;
   $role = new WP_User( $id );
   $role->add_cap( 'gravityforms_edit_forms' );
   $role->add_cap( 'gravityforms_view_entries' );
   $role->add_cap( 'gravityforms_edit_entries' );
   $role->add_cap( 'gravityforms_export_entries' );
   $role->add_cap( 'gravityforms_view_entry_notes' );
   $role->add_cap( 'gravityforms_edit_entry_notes' );
}
add_action( 'admin_init', 'add_gf_cap' );

function truncate($string,$length=100,$append="&hellip;") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n", $string, 2);
    $string = $string[0] . $append;
  }

  return $string;
}

function adjust_my_breadcrumbs( $linksarray ) {
	if( is_array( $linksarray ) && count( $linksarray ) > 0 && is_single() ) {
		array_pop( $linksarray );
	}
	return $linksarray;
}
add_filter( 'wpseo_breadcrumb_links', 'adjust_my_breadcrumbs' );

add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
function my_mce_buttons_2( $buttons ) {
	//echo '<pre>';print_r($buttons);echo '</pre>';
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );
function my_mce_before_init( $settings ) {

    $style_formats = array(
    	array(
    		'title' => 'Intro',
    		'selector' => 'p',
    		'classes' => 'intro bold'
    	),
    	
    	array(
    		'title' => 'Lead',
    		'selector' => 'p',
    		'classes' => 'lead'
    	),
    	
    	array(
    		'title' => 'Large Intro',
    		'selector' => 'p',
    		'classes' => 'intro lrg'
    	),
    	
    	array(
    		'title' => 'H2 Caps',
    		'selector' => 'h2',
    		'classes' => 'caps'
    	),
        array(
        	'title' => 'Red Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-red'
        ),
        array(
        	'title' => 'Purple Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-purple'
        ),
        array(
        	'title' => 'Orange Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-orange'
        ),
        array(
        	'title' => 'Pink Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-pink'
        ),
        array(
        	'title' => 'Blue Text',
        	'inline' => 'span',
        	'classes' => 'txt-col-blue'
        )

    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
    
    add_editor_style();

}

function tlw_theme_get_archives_link ( $link_html ) {
    global $wp;
    static $current_url;
    if ( empty( $current_url ) ) {
        $current_url = add_query_arg( $_SERVER['QUERY_STRING'], '', home_url( $wp->request ) );
    }
    if ( stristr( $link_html, $current_url ) !== false ) {
        $link_html = preg_replace( '/(<[^\s>]+)/', '\1 class="active"', $link_html, 1 );
    }
    return $link_html;
}
add_filter('get_archives_link', 'tlw_theme_get_archives_link');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_filter('ysacf_exclude_fields', function(){
    return array(
        'page_colour',
        'page_icon',
        'sections_active',
    );
});

show_admin_bar(false);

 ?>