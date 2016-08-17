<?php
$feedback_active = $section['feedback_active'];
$colors = array('purple','green','pink', 'orange', 'blue');
?>

<?php if ($feedback_active) { 
$feedback_option = $section['feedback_option'];		
?>
			
	<?php if ($feedback_option == 'single') { ?>
	<?php include (STYLESHEETPATH . '/_/inc/sections/feedback-single-section.inc'); ?>		
	<?php } ?>
	
	<?php if ($feedback_option == 'slider') { ?>
	<?php include (STYLESHEETPATH . '/_/inc/sections/feedback-slider-section.inc'); ?>	
	<?php } ?>
	
	<?php if ($feedback_option == 'list') { ?>
	<?php include (STYLESHEETPATH . '/_/inc/sections/feedback-list-section.inc'); ?>	
	<?php } ?>

<?php } ?>