<?php 
/*
Template Name: Sitemap page
*/
 ?>

<?php get_header(); ?>

	<!-- MAIN CONTENT START -->
	<div class="container">
	
		<div class="content">
			 
			 <main class="page-col-red">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
					
					<article <?php post_class(); ?>>
						
						<h1 class="text-center"><?php the_title(); ?></h1>
					
						<?php the_content(); ?>	
						
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

					</article>
				
				<?php endwhile; ?>
				<?php endif; ?>

			 </main>
			 
		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->
	
<?php get_footer(); ?>
