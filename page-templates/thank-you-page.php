<?php 
/*
Template Name: Thank page template
*/
 ?>

<?php get_header(); ?>
		

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<main>	
		<?php 
		if (isset($_GET['return-page'])) {
		$return_id = $_GET['return-page'];
		} else {
		$return_id = $post->post_parent;	
		}
		?>
		
				
			<article <?php post_class("content-section"); ?>>
				
				<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
				<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>
				
				<div class="container">
					
					<div class="entry wide-entry">
						
						<div class="main-txt">
							<div class="well well-lg text-center thank-you-message">
								<h1>Thank you for contacting us.</h1>
								<p>A member of our team will contact you shortly.</p>
								<a href="<?php echo get_permalink($return_id) ; ?>" class="btn btn-block icon-btn">Continue</a>
							</div>
							
						</div>
																	
					</div>
				</div>
				
			</article>
				
		
		</main>		
		<?php endwhile; ?>
		<?php endif; ?>
		
		
<?php get_footer(); ?>
