<?php 
/*
Template Name: MotoPro page template
*/
 ?>

<?php get_header(); ?>

	
	<?php include (STYLESHEETPATH . '/_/inc/motopro/img-strip.php'); ?>

	<!-- MAIN CONTENT START -->
	<div class="container">
	
		<div class="content">

			<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
			<?php 
			$page_icon = get_field('page_icon');
			$color = get_field('page_colour');
			$hide_title = get_field('hide_title');
			//echo '<pre>';print_r($parent);echo '</pre>';
			?>	
			<main class="<?php echo (!empty($color)) ? 'page-col-'.$color : 'red'; ?>">
				
					<article <?php post_class(); ?>>
					
						<div class="row">
							
							<?php include (STYLESHEETPATH . '/_/inc/global/access-btns.php'); ?>
							
							<div class="col-xs-7">
								<div class="entry wide-entry">
								
									<header class="pg-header">	
										<?php if ($hide_title != 1) { ?>
										<h1><?php the_title(); ?></h1>
										<?php } ?>
									</header>
								
									<div class="main-txt">
										<?php the_content(); ?>
									</div>
								
								</div>
							</div>
							
							<?php get_template_part( 'parts/sidebars/sidebar', 'motopro' ); ?>
							
						</div>
						
					</article>
					
			</main>
			
			<?php endwhile; ?>
			<?php endif; ?>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->

	<?php include (STYLESHEETPATH . '/_/inc/motopro/icon-strip.php'); ?>
	
<?php get_footer(); ?>
