<?php  
$faqs_active = $section['faqs_active'];		
?>
<?php if ($faqs_active) { ?>

<?php 
$section_title = $section['section_title'];	
$questions_ID = $section['questions'];
$faq_qestions = get_field( 'faq_qestions', $questions_ID);

$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'faqs'];	

if (empty($color)) {
$color = "red";	
}
?>
<section id="<?php echo $section['acf_fc_layout']; ?>" class="pg-section with-icon-logo col-<?php echo $color; ?>">
<a name="faqs" id="faqs" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>		
	
	<div class="container">		
		
		<?php if ( !empty($faq_qestions) ) { ?>
		<div class="faq-items">
		
			<?php foreach ($faq_qestions as $q) { ?>
			<div class="faq-item closed">
				<div class="question text-center"><?php echo $q['faq_question']; ?></div>
				<button class="btn view-faq-btn"><span>Answer</span></button>
				<div class="answer">
					<?php echo $q['faq_answer']; ?>
				</div>
			</div>
			<?php } ?>
	
		</div>
		
		<?php } else { ?>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="well well-lg text-center">
					<h3>Coming soon</h3>
					<p>FAQ's are not available at the moment.</p>
				</div>
			</div>
		</div>
		<?php } ?>
		</div>	
</section>
<?php } ?>