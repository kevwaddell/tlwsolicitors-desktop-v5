<?php 
global $sections_active;	
?>
<?php if ($sections_active) { 
global $sections;	
?>
<?php foreach ($sections as $section) { ?>

<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
<div id="video-viewer" class="viewer-closed">
	<button id="close-video"><i class="fa fa-times"></i><span class="sr-only">Close video</span></button>
	<div class="video-viewer-inner"></div>
</div>
<?php } ?>

<?php } ?>

<?php } ?>