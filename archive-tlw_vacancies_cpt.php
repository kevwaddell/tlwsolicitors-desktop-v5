<?php get_header(); ?>

<?php
$jobs_pg = get_page_by_title( "Vacancies" );
$content = apply_filters( 'the_content', $jobs_pg->post_content );
$all_forms_active = get_field('all_forms_active', 'option');
$form_active = get_field('add_form', $jobs_pg->ID);	
$quick_links = array();
	
	if ( has_post_thumbnail($jobs_pg->ID) ) {
	$img_post = $jobs_pg;
	}
?>

<!-- MAIN CONTENT START -->
<main class="page-col-red">
	
	<?php if (has_post_thumbnail($jobs_pg->ID)) { ?>
		<?php include (STYLESHEETPATH . '/_/inc/vacancies/img-banner-slim.inc'); ?>			
	<?php } ?>	
		
	<article <?php post_class("content-section"); ?>>
	<a name="vacancy-txt" id="vacancy-txt" class="section-target"></a>
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>
		
		<div class="container">
			<div class="main-txt">
				<?php echo $content; ?>
			</div>
		</div>
	
	</article>
	
	<?php include (STYLESHEETPATH . '/_/inc/vacancies/vacancy-post-list.inc'); ?>	
	
	<?php if ($form_active && $all_forms_active) { ?>
		<?php include (STYLESHEETPATH . '/_/inc/vacancies/sections/form-section.inc'); ?>
	<?php } ?>

</main>
<!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
