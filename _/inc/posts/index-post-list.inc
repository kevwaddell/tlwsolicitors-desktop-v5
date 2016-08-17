<section class="page-content post-grid">	
		
		<?php if ( have_posts() ): ?>
		<?php
		$cols = array("purple", "green", "pink", "orange", "blue");	
		$post_counter = 0;
		?>
		<div class="page-links">
			<div class="container">	
			<?php wp_pagenavi(); ?>
			</div>
		</div>	
		<?php while ( have_posts() ) : the_post();
		$date = get_the_date('l - jS F - Y');
		?>	
			<article <?php post_class("col-".$cols[$post_counter]); ?> style="background-image: url(<?php add_full_page_banner_img(get_the_id());?>)">
			<div class="overlay"></div>
			<div class="stripes-overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-xs-10 col-xs-offset-1">
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php echo $date; ?></time>
							<h4><a href="<?php esc_url( the_permalink() ); ?>" title="View: <?php the_title_attribute(); ?> article" rel="bookmark"><?php the_title(); ?></a></h4>
							<?php the_excerpt(); ?>
							<a href="<?php esc_url( the_permalink() ); ?>" class="btn btn-default" title="View: <?php the_title_attribute(); ?> article" rel="bookmark">View article</a>
						</div>
					</div>
				</div>
			</article>
		<?php $post_counter++; ?>
		<?php endwhile; ?>
		
		<div class="page-links">
			<div class="container">	
			<?php wp_pagenavi(); ?>
			</div>
		</div>					
					
		
		<?php else: ?>
		<h3 class="text-center">Sorry</h3>
		<p class="text-center">There is no news at the moment.</p>	
		<?php endif; ?>
			
</section>
