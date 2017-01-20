<?php
$all_forms_active = get_field('all_forms_active', 'option');
$form_active = $section['form_activated'];	
$form = $section['form'];	
$section_title = $section['section_title'];	
$col_bg = $section['section_bg_col_active'];
if (!empty($section_title)) {
$section_title = $form->title;
}
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'request-a-callback'];	
?>
<?php if ($form_active && $all_forms_active) { ?>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section with-header<?php echo ($col_bg && !empty($color)) ? ' with-icon-logo bg-col-'.$color : ' with-icon-logo bg-col-gray'; ?>">
	
	<a name="request-a-callback" id="request-a-callback" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
		
		<?php gravity_form($form->id, false, true, false, '', false); ?>
	</div>

</section>
<?php } ?>