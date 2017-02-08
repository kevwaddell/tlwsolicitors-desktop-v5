<?php get_header(); ?>	
	
	<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
	<?php 
		$hp_sections = get_field('hp_sections', 'option');
		$banner_active = get_field('hp_top_banner_active', 'option');	
		$pg_color = get_field('page_colour', get_option( 'page_on_front' ));
		$quick_links = array();
	?>	
	
	<!-- MAIN CONTENT START -->
	<main id="main-content">
		
		<!-- BANNER SECTION -->
		<?php if ($banner_active) { 
		$hp_banner_type = get_field('hp_banner_type', 'option');	
		?>
			<?php if ($hp_banner_type == "video") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/homepage/video-banner.inc'); ?>			
			<?php } ?>
			<?php if ($hp_banner_type == "img") { ?>
			<?php include (STYLESHEETPATH . '/_/inc/banners/homepage/img-banner.inc'); ?>		
			<?php } ?>		
		<?php } ?>
		
		<!-- MAIN TEXT SECTION -->
		
		<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/main-content-section.inc'); ?>
		
		<?php if (!empty($hp_sections)) { ?>		
			<?php foreach ($hp_sections as $section) { ?>
				
				<?php if ($section['acf_fc_layout'] == 'video-section') { ?>
				<!-- VIDEOS SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/video-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'feedback-section') { ?>
				<!-- FEEDBACK SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/feedback-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
				<!-- FORM SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/form-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
				<!-- BLOG SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/blog-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'downloads-section') { ?>
				<!-- DOWNLOADS SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/downloads-section.inc'); ?>		
				<?php } ?>
				
				<?php if ($section['acf_fc_layout'] == 'toolkit-section') { ?>
				<!-- TOOLKIT SECTION -->
					<?php include (STYLESHEETPATH . '/_/inc/sections/homepage/toolkit-section.inc'); ?>		
				<?php } ?>

			<?php } ?>
		<?php } ?>
		
	</main>	
	<?php endwhile; ?>
	<?php endif; ?>

<?php get_footer(); ?>
