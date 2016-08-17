<?php 
/*
Template Name: Thank page template
*/
 ?>

<?php get_header(); ?>
		
	<!-- MAIN CONTENT START -->
	<div class="container">
	
		<div class="content">

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>	
		<main class="<?php echo (!empty($color)) ? ' page-col-'.$color : 'red'; ?>">	
		<?php 
		if (isset($_GET['return-page'])) {
		$return_id = $_GET['return-page'];
		} else {
		$return_id = $post->post_parent;	
		}
		?>
		
				
			<article <?php post_class(); ?>>
				
				<div class="row">
					
					<?php include (STYLESHEETPATH . '/_/inc/global/access-btns.php'); ?>
					
					<div class="col-xs-10">
					
					<h1>Thank you for contacting us.</h1>
					<p>A member of our team will contact you shortly.</p>
					<a href="<?php echo get_permalink($return_id) ; ?>" class="icon-btn" style="padding-left:10px; width: 300px;" id="reload-form">Continue <i class="fa fa-angle-right fa-lg"></i></a>
											
					</div>
					
				</div>
				
			</article>
				
		
		</main>		
		<?php endwhile; ?>
		<?php endif; ?>

		</div><!-- CONTENT END -->
		
	</div><!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
