<?php 
/*
Template Name: Newsletter sign up template
*/
?>
<?php get_header(); ?>
	<!-- MAIN CONTENT START -->

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
			<?php 
			$all_forms_active = get_field('all_forms_active', 'option');
			$sections_active = get_field('sections_active');
			$color = get_field('page_colour');
			 ?>	
			 <main class="page-col-red">
				 	
				
				<?php if (has_post_thumbnail()) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/banners/img-banner-slim.inc'); ?>			
				<?php } ?>	

				<!-- MAIN TEXT SECTION -->
				<?php include (STYLESHEETPATH . '/_/inc/sections/main-content-section.inc'); ?>
					
				
					<?php if ($sections_active) { 
					$sections = get_field('sections'); 
					?>		
		
					<?php foreach ($sections as $section) { ?>
						
						<?php if ($section['acf_fc_layout'] == 'form-section') { ?>
						<!-- FORM SECTION -->
							<?php include (STYLESHEETPATH . '/_/inc/sections/form-section.inc'); ?>		
						<?php } ?>
						
						<?php if ($section['acf_fc_layout'] == 'blog-posts') { ?>
						<!-- FORM SECTION -->
							<?php include (STYLESHEETPATH . '/_/inc/sections/blog-section.inc'); ?>		
						<?php } ?>
			
					<?php } ?>
				
				<?php } ?>

			 
			 </main>
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
