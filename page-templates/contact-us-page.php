<?php 
/*
Template Name: Contact Us Page
*/
 ?>

<?php get_header(); ?>


<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
<?php 
$color = get_field('page_colour');
$sections_active = get_field('sections_active');

if ( has_post_thumbnail() ) {
$img_post = get_the_ID();
}

 ?>	

<main <?php post_class('page-col-red'); ?>>
		
	<?php include (STYLESHEETPATH . '/_/inc/contact-us/top-banner-intro.inc'); ?>		
	
	<!-- MAIN TEXT SECTION -->
	<?php include (STYLESHEETPATH . '/_/inc/contact-us/main-content-section.inc'); ?>
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
				<?php include (STYLESHEETPATH . '/_/inc/contact-us/form-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'location-map') { ?>
				<!-- LOCATION SECTION -->
				<?php include (STYLESHEETPATH . '/_/inc/sections/location-section.inc'); ?>		
				<?php } ?>
	
			<?php } ?>
		
		<?php } ?>
		
</main>
		
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
