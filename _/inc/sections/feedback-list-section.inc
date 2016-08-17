<?php 
$feedback_args = array(
	'posts_per_page'   => 5,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand',
); 

if (!empty($exclude_quotes)) {
$feedback_args['exclude'] = $exclude_quotes;
}
$feedback_quotes = get_posts($feedback_args); 

$quick_links[] = ['link_title' => "Client feedback", 'link_anchor' => 'feedback'];
			
if ($feedback_quotes) { ?>

<!-- TEAM PROFILES SECTION -->
<section id="feedback-section" class="pg-section feedback-list">
<a name="feedback" id="feedback" class="section-target"></a>
	
		<?php foreach ($feedback_quotes as $k => $fb) { 
		
		$name = get_field('client_name', $fb->ID);	
		$location = get_field('location', $fb->ID);	
		$quote = get_field('quote', $fb->ID);
		$gender = get_field('gender', $fb->ID);
		?>
		
		<div class="item bg-col-<?php echo $colors[$k]; ?>">
		
			<div class="container feedback-quote">
				<div class="row">
					<div class="col-xs-2 text-left">
						<i class="fa fa-quote-left quote-icon"></i>
					</div>
					<div class="col-xs-8">
						<span class="gender-icon fa fa-<?php echo ($gender == 'm') ? 'male':'female'; ?>"></span>
						<blockquote class="no-border text-center"><?php echo $quote ; ?></blockquote>
						<span class="quote-name"><?php echo $name ; ?>, <?php echo $location ; ?></span>
					</div>
					<div class="col-xs-2 text-right">
						<i class="fa fa-quote-right quote-icon"></i>
					</div>
				</div>
			</div>
			
			<div class="overlay"></div>
		
		</div>

		<?php } ?>		

</section>
<!-- TEAM PROFILES SECTION -->

<?php } ?>
