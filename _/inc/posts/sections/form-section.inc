<?php
$form = get_field('form');	
$section_title = get_field('form_section_title');	
if (empty($section_title)) {
$section_title = $form->title;
}
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'request-a-callback'];	
?>
<section id="form-section" class="pg-section with-header with-icon-logo">
<a name="request-a-callback" id="request-a-callback" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>
	<div class="form-container container">
		<?php gravity_form($form->id, false, true, false, '', false); ?>
	</div>
</section>