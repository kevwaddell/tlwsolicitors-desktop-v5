<?php 
/*
Template Name: Toolkit page
*/
 ?>

<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$freephone_num = get_field('freephone_num', 'option');
		$color = get_field('page_colour');
		$page_icon = get_field('page_icon');
		$banner_active = get_field('banner_active');
		$slides_active = get_field('tk_slides_active');
		$sections_active = get_field('sections_active');
		$quick_links = array();

		if ( has_post_thumbnail() ) {
		$img_post = get_the_ID();
		}
	?>	
	
	<!-- MAIN CONTENT START -->
	<main>
		
		<!-- BANNER SECTION -->
		<?php if ($banner_active) { 
		$banner_type = get_field('banner_type');	
		?>
		
			<?php if ($banner_type == 'slider') { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/testimonial-slider.inc'); ?>			
			<?php } ?>
			
			<?php if ($banner_type == 'slim-img') { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/img-banner-slim.inc'); ?>			
			<?php } ?>	
			
			<?php if ($banner_type == "video") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/video-banner.inc'); ?>		
			<?php } ?>
			
			<?php if ($banner_type == "img") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/img-banner.inc'); ?>		
			<?php } ?>	
			
			<?php if ($banner_type == "toolkit") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/toolkit/toolkit-banner.inc'); ?>		
			<?php } ?>
			
		<?php } ?>		
		
		<!-- TOOLKIT SLIDES SECTION -->
		<?php if ($slides_active) { ?>
		<?php include (STYLESHEETPATH . '/_/inc/toolkit/toolkit-slides.inc'); ?>		
		<?php } ?>
		
		<?php if ($sections_active) { 
		$sections = get_field('sections'); 
		?>		
		
			<?php foreach ($sections as $section) { ?>
			
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/feedback-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/form-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/blog-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/downloads-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/toolkit-section.inc'); ?>		
				<?php } ?>
	
			<?php } ?>
		
		<?php } ?>
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
