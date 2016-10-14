<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">
	
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<meta name="viewport" content ="width=device-width,user-scalable=yes" />
	<meta name="format-detection" content="telephone=yes">
	
	<meta name="geo.region" content="GB">
	<meta name="geo.placename" content="North Shields">
	<meta name="geo.position" content="55.009452;-1.490004">
	<meta name="ICBM" content="55.009452, -1.490004">
	
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/_/img/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
	<?php 
	if ( isset($_GET['src']) && $_GET['src'] == "mis-sold-solar-co-uk" ) {
	setcookie("src",$_GET['src'] , strtotime( '+6 months' ), "/financial-mis-selling/solar-panel-mis-selling" );
	}
	
	if ( isset($_GET['gclid']) ) {
		setcookie("gclid",$_GET['gclid'] ,0, '/' );	
	}
	
			
	if ($_SERVER['REMOTE_ADDR'] === "194.73.123.212" || $_SERVER['REMOTE_ADDR'] === "127.0.0.1" ) {
	//echo '<pre class="debug">';print_r($_COOKIE);echo '</pre>';	
	}
	?>
</head>