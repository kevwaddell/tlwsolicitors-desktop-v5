<?php
$quick_links[] = ['link_title' => "Client feedback", 'link_anchor' => 'feedback'];	 
$feedback_args = array(
	'posts_per_page'   => 5,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand'
	); 
$testimonials = get_posts($feedback_args); 	
$colors = ['purple','green','pink','orange','blue'];
?>
<section id="feedback-section" class="pg-section feedback-slider">
<a name="feedback" id="feedback" class="section-target"></a>
	<div class="feedback-section-wrapper">
			
		<div class="feedback-section-inner">
		
		<?php foreach ($testimonials as $k => $quote) { 
		$quote_id = $quote->ID;
		$quote_txt = get_field('quote', $quote_id);	
		$client_name = get_field('client_name', $quote_id);		
		$location = get_field('location', $quote_id);	
		$gender = get_field('gender', $quote_id);
		?>
			<div class="item bg-col-<?php echo $colors[$k]; ?><?php echo ($k == 0) ? " active":""; ?>">
				<div class="container feedback-quote">
					<div class="row">
						<div class="col-xs-2 text-left">
							<i class="fa fa-quote-left quote-icon"></i>
						</div>
						<div class="col-xs-8">
							<span class="gender-icon fa fa-<?php echo ($gender == 'm') ? 'male':'female'; ?>"></span>
							<blockquote class="no-border text-center"><?php echo $quote_txt; ?></blockquote>
							<span class="quote-name"><?php echo $client_name; ?>, <?php echo $location; ?></span>
						</div>
						<div class="col-xs-2 text-right">
							<i class="fa fa-quote-right quote-icon"></i>
						</div>
					</div>
				</div>
				
				<div class="overlay"></div>
				
			</div>
		<?php } ?>
	
		</div>
		
	</div>

</section>