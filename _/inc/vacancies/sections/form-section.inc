<?php
if (is_post_type_archive()) {
$form = get_field('form', $jobs_pg->ID);	
$section_title = get_field('form_section_title', $jobs_pg->ID);
} else {
$form = get_field('form');	
$section_title = get_field('form_section_title');	
}
	
if (empty($section_title)) {
$section_title = $form->title;
}
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'request-a-callback'];	
?>
<section id="form-section" class="pg-section with-header with-icon-logo">
<a name="request-a-callback" id="request-a-callback" class="section-target"></a>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
		
		<?php gravity_form($form->id, false, true, false, null, true); ?>
	</div>
	<div class="overlay"></div>
</section>