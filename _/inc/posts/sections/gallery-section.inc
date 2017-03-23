<?php 
$gallery_imgs = get_field( "gallery_imgs");	

$quick_links[] = ['link_title' => 'Gallery', 'link_anchor' => 'gallery'];	
?>
<section id="gallery-section" class="pg-section with-icon-logo bg-col-red">
<a name="gallery" id="gallery" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk">Gallery</h2>
	</div>			
	<div class="container">
	<?php if ( !empty($gallery_imgs) ) { 
	$total = count($gallery_imgs);	
	?>
	<div class="gallery-items">
		<div class="gallery-items-inner">
			<?php foreach ($gallery_imgs as $k => $file) { ?>
			<div class="gallery-item <?php echo ($k == 0) ? ' active':''; ?>">
				<a href="<?php echo $file['sizes']['medium']; ?>" class="gallery-img-link block" style="background-image: url(<?php echo $file['sizes']['post-list-img']; ?>)"><i class="fa fa-plus"></i></a>
			</div>
			<?php } ?>
		</div>
		<div class="gallery-items-viewer text-center">
			<img src="<?php echo $gallery_imgs[0]['sizes']['medium']; ?>">
		</div>
	</div>
	
	<?php } else { ?>	
	<div class="row">
		<div class="col-xs-6 col-xs-offset-3">
			<div class="well well-lg text-center">
				<h3>Coming soon</h3>
				<p>Gallery images are not available at the moment.</p>
			</div>
		</div>
	</div>
	<?php } ?>
	</div>	
</section>