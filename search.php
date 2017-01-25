<?php get_header(); ?>

	<?php 
	$allsearch = new WP_Query("s=$s&showposts=-1"); 
	wp_reset_query();
	$search_count = $allsearch->post_count;
	$search_query = get_search_query(); 
	//echo '<pre>';print_r($posts);echo '</pre>';
	?>
	<main class="page-col-red">
	 
			<article class="page search-results">
				<h1 class="text-center" style="margin-top: 20px;">Search Results</h1>
				<p class="intro text-center">You Searched for: "<?php the_search_query(); ?>"<br> Results: <?php echo $search_count; ?></p>
				
				<div class="search-form-wrap">
				<?php get_search_form(); ?>
				</div>
			</article>
			
			<section class="search-list">

				<?php if ( have_posts() ): ?>
				
				<div class="post-list">
								
					<div class="container">	
						<?php while ( have_posts() ) : the_post();
						$date = get_the_date('l - jS F - Y');
						 ?>	
					
						<article <?php post_class(); ?>>
							<h4><?php the_title(); ?></h4>
							
							<?php if ($post->post_type == 'post') { ?>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar"></i> <?php echo $date; ?></time>
							<?php } ?>
							
							<?php if ($post->post_type == 'tlw_vacancies_cpt') { 
							$job_closing_date = get_field( 'job_closing_date', $post->ID);	
							?>
							<time><i class="fa fa-calendar"></i> Closing date: <?php echo (empty($job_closing_date)) ? "TBA": date('l - jS F - Y', strtotime($job_closing_date) ); ?></time>
							<?php } ?>
									
							<?php the_excerpt(); ?>	
								
							<a href="<?php esc_url( the_permalink() ); ?>" title="View <?php the_title_attribute(); ?> article" class="btn btn-default btn-block" rel="bookmark">
								View <?php echo ($post->post_type == 'post') ? "Post":"Page"; ?> <i class="fa fa-arrow-circle-right fa-lg"></i>
							</a>
							
						</article>
		
						<?php endwhile; ?>
					</div>	

				</div><!-- End List -->
				
				<div class="page-links">
					<div class="container">
						<?php wp_pagenavi(); ?>
					</div>
				</div>		
				
				<?php else: ?>
				<div class="container">	
					<div class="row">
						<div class="col-xs-8 col-xs-offset-2">
						<div class="well well-lg posts-message">
							<h3 class="text-center">Sorry</h3>
							<p class="text-center">There are no search results for "<?php echo $search_query; ?>". Please try again.</p>
						</div>
						</div>
					</div>
				</div>
				<?php endif; ?>

			</section>
	
	</main>

<?php get_footer(); ?>
