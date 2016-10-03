<?php 
/*
Template Name: Sitemap page
*/
 ?>

<?php get_header(); ?>
			 
 <main>

<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		
		<article <?php post_class("content-section"); ?>>
		
			<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
			<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>
	
			<div class="container">
			
			<div class="entry wide-entry">
				<div class="main-txt">	
					<h1 class="text-center"><?php the_title(); ?></h1>
				
					<?php the_content(); ?>	
				</div>
			</div>
			
			<div class="search-form-wrap text-center">
			<?php get_search_form(); ?>
			</div>
			
			<?php include (STYLESHEETPATH . '/_/inc/site-map/vars.inc'); ?> 
	
			<section id="site-map-lists">
	
				<div class="row">
				<!-- Left -->
				<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-left-col.inc'); ?> 
				
				<!-- Right -->
				<?php include (STYLESHEETPATH . '/_/inc/site-map/site-map-list-right-col.inc'); ?>
				
				</div>
	
			</section>

			</div>
			</div>
		</article>
	
	<?php endwhile; ?>
	<?php endif; ?>

 </main>
	
<?php get_footer(); ?>
