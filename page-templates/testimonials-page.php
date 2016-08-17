<?php 
/*
Template Name: Why Choose TLW page template
*/
 ?>
 
  
<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$color = get_field('page_colour');
		$page_icon = get_field('page_icon');
		$sections_active = get_field('sections_active');
		$banner_active = get_field('banner_active');	
		$quick_links = array();
		$exclude_quotes = array();
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
			
		<?php } ?>		

		<!-- MAIN TEXT SECTION -->
		<?php include (STYLESHEETPATH . '/_/inc/sections/main-content-section.inc'); ?>
		
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
