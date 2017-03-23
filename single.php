<?php get_header(); ?>

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); 
			$download_active = get_field('download_active');
			$gallery_active = get_field('gallery_active');
			$date = get_the_date('l - jS F - Y');	
			$show_author = get_field('show_author');
			$all_forms_active = get_field('all_forms_active', 'option');
			$form_active = get_field('add_form');	
			$related_posts_active = get_field('related_posts_active');
			
			$quick_links = array();
			?>	
			<!-- MAIN CONTENT START -->
			
			<main class="page-col-red">
				<?php if (has_post_thumbnail()) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/banners/blog/img-banner-single-pg.inc'); ?>		
				<?php } ?>
				
				<?php include (STYLESHEETPATH . '/_/inc/posts/sections/main-content-section.inc'); ?>
				
				<?php if ($gallery_active) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/posts/sections/gallery-section.inc'); ?>
				<?php } ?>
				
				<?php if ($download_active) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/posts/sections/downloads-section.inc'); ?>
				<?php } ?>
				
				<?php if ($form_active && $all_forms_active) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/posts/sections/form-section.inc'); ?>
				<?php } ?>
				
				<?php if ($related_posts_active) { ?>
				<?php include (STYLESHEETPATH . '/_/inc/posts/sections/related-posts-section.inc'); ?>
				<?php } ?>
				
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

<?php get_footer(); ?>
