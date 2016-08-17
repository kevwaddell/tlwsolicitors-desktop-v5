<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" prefix="og: http://ogp.me/ns#">
<head id="www-tlwsolicitors-co-uk" data-template-set="tlw-solicitors-theme">

	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<meta name="viewport" content ="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="format-detection" content="telephone=yes">
		   
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone.png" /> 
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad.png" /> 
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/_/img/touch-icon-ipad-retina.png" />
	<link rel="apple-touch-startup-image" href="<?php bloginfo('template_directory'); ?>/_/img/apple-start-up-img.png" />
	
	<title><?php bloginfo('name'); ?> &rsaquo; <?php echo $this->g_opt['mamo_pagetitle']; ?></title>
	<meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>" />

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/_/css/offline.css" type="text/css" media="all">

<?php 
 ?>
</head>

<body>
	
			
	<div class="col-strip">
		<div class="col-block col-purple"></div>
		<div class="col-block col-green"></div>
		<div class="col-block col-pink"></div>
		<div class="col-block col-orange"></div>	
		<div class="col-block col-blue"></div>
	</div>	

	<div id="wrapper">
		
		<div class="wrap-center">
			
			<div class="content-inner">
				<div id="header">
					<h1><?php bloginfo('name'); ?></h1>
				</div>
			
				<div id="content">
					<?php echo $this->mamo_template_tag_message(); ?>
				</div>
			</div>
			
		</div>

	</div>
	
	<div id="footer">
		<p>Freephone: 0800 169 5925<br> or Email <a href="mailto:info@tlwsolicitors.co.uk">info@tlwsolicitors.co.uk</a></p>
		<a href="/login/" class="login-link" title="Login">Login</a>
	</div>

</body>
</html>