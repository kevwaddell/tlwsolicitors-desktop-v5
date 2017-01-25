<?php
global $form_active;
global $all_forms_active;
global $how_it_works_active;
global $color;
$sb_plug_text_active = get_field('sb_plug_text_active');
$sb_plug_txt = get_field('sb_plug_txt');
?>
<div class="col-xs-4">
	<aside class="scroll-sidebar sidebar lp-sidebar">
		
		<?php if ($sb_plug_text_active) { 
		$sb_plug_txt = get_field('sb_plug_txt');	
		?>
		<div class="sb-plug text-center font-slab-serif bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>-dk">
			<div class="sb-plug-inner">
			<?php echo $sb_plug_txt; ?>
			</div>
		</div>
		<?php } ?>
		
		<?php if ($form_active && $all_forms_active) { ?>
		<div class="sb-plug-btn">
			<div class="plug-label">Fill in our simple form</div>
			<button type="button" class="btn btn-default btn-block btn-lg" data-toggle="modal" data-target="#contact-form-modal"><i class="fa fa-check-square fa-lg"></i> Claim Today</button>
		</div>
		<?php } ?>
		
		<?php if ($how_it_works_active) { ?>	
		<div class="how-it-works-link">
			<a href="#how-it-works" class="hiw-link">
				<span class="txt-mid">The Claims Process</span>
				<span class="txt-lg">How it Works</span>
				<span class="txt-sml">Click here for more information</span>
			</a>
		</div>
		<?php } ?>
		
	</aside>
</div>
