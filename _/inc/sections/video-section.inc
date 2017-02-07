<?php
$videos_active = $section['videos_active'];
?>

<?php if ($videos_active) { ?>

<?php 
$section_title = $section['section_title'];	
$download_section_files = $section['download_section_files'];
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'videos'];	
$videos = $section['videos'];
//echo '<pre>';print_r($videos);echo '</pre>';
if (empty($color)) {
$color = "red";	
}
?>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section with-icon-logo bg-col-<?php echo $color; ?>">
<a name="videos" id="videos" class="section-target"></a>
	<div class="overlay"></div>
	
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>		
	
	<div class="container">		
		<div class="row">
			<?php foreach ($videos as $k => $poster) { 
			$poster_full_src = wp_get_attachment_image_src($poster['poster_img'], 'full' );
			$poster_thumb_src = wp_get_attachment_image_src($poster['poster_img'], 'thumbnail' );	
			$video = $video['video'];
			?>
			<div class="col-xs-<?php echo (count($videos) > 1) ? '6':'6 col-xs-offset-3'; ?>">
				<a href="#video-<?php echo ($k+1); ?>" class="video-link full-bg-img poster-img" style="background-image: url(<?php echo $poster_thumb_src[0]; ?>)" data-src="<?php echo $poster_full_src[0]; ?>"></a>
			</div>
			<?php } ?>
		</div>
	</div>
	
	<div class="hidden hidden-videos">
		<?php foreach ($videos as $k => $video) { 
			$video = $video['video'];
			?>
			<div id="video-<?php echo ($k+1); ?>">
				<?php echo $video; ?>
			</div>
		<?php } ?>
	</div>
	
</section>

<?php } ?>