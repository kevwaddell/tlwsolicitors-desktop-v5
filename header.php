<?php include (STYLESHEETPATH . '/_/inc/global/head-html.inc'); 

$body_classes = array('desktop-css');	

array_push($body_classes, 'loading');
?>	

<body <?php body_class($body_classes); ?>>
<?php if ($_SERVER['SERVER_NAME']=='tlwsolicitors.staging.wpengine.com') { ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDNR9J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php } ?>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager -->
<?php } ?>
	
<?php //include (STYLESHEETPATH . '/_/inc/global/site-loader.inc'); ?>
	
<?php include (STYLESHEETPATH . '/_/inc/global/top-nav.inc'); ?>

<?php include (STYLESHEETPATH . '/_/inc/global/awards-pop-up.inc'); ?>	

<div class="tlw-wrapper">

	<!-- HEADER LOGO AND NAVIGATION -->
	<?php include (STYLESHEETPATH . '/_/inc/global/masthead.inc'); ?>	
		
	<?php if (!is_front_page() && !is_page('services-for-you') 
		&& !is_page_template('page-templates/service-landing-page.php') 
		&& !is_page_template('page-templates/toolkit-page.php')
		&& !is_page_template('page-templates/service-home-page.php')
		) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/global/breadcrumbs.inc'); ?>	
	<?php }  ?>