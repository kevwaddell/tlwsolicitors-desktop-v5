<?php 
$section_title = get_field( "downloads_section_title");	
$download_files = get_field( "download_section_files");	

$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'downloads'];	
?>
<section id="downloads-section" class="pg-section with-icon-logo bg-col-red">
<a name="downloads" id="downloads" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>		
	<div class="container">		
	
	<?php if ( !empty($download_files) ) { ?>
	<div class="download-items">
	
	<?php foreach ($download_files as $k => $file) { 
	$img = wp_get_attachment_image_src($file['file_image'], 'medium' );	
	?>
	<div class="text-center download-item">
		<a href="<?php echo $file['file']; ?>" target="_blank">
			<span class="cover-img"><img src="<?php echo $img[0]; ?>" height="120" /></span>
			<span class="dwnload-title"><?php echo $file['file_name']; ?></span>
		</a>
	</div>
	<?php } ?>

	</div>
	
	<?php } else { ?>
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<div class="well well-lg text-center">
				<h3>Coming soon</h3>
				<p>Downloads are not available at the moment.</p>
			</div>
		</div>
	</div>
	<?php } ?>
	</div>
		
</section>