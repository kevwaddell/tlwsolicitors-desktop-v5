<?php include (STYLESHEETPATH . '/_/inc/global/head-html.inc'); 

$body_classes = array();	

if ( !isset($_GET['gsdm']) ) {
array_push($body_classes, 'loading');
}
?>	

<body <?php body_class($body_classes); ?>>
<?php if ($_SERVER['SERVER_NAME']=='www.tlwsolicitors.co.uk') { ?>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PLBR4F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PLBR4F');</script>
<!-- End Google Tag Manager -->
<?php } ?>

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