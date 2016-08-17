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
			
if ($feedback_quotes) { ?>

<!-- TEAM PROFILES SECTION -->
<section id="quotes-list-section">
	
		<?php foreach ($feedback_quotes as $k => $fb) { 
		
		$name = get_field('client_name', $fb->ID);	
		$location = get_field('location', $fb->ID);	
		$quote = get_field('quote', $fb->ID);
		$gender = get_field('gender', $fb->ID);
		?>
		<div id="quote-<?php echo ($k + 1) ; ?>" class="quote-wrap bg-col-<?php echo $colors[$k]; ?>">
			<div class="container">
				<div class="gender"><i class="fa fa-<?php echo ($gender == 'm') ? 'male':'female'; ?> fa-3x"></i></div>
				<blockquote class="quote text-center"><?php echo $quote ; ?></blockquote>
				<p class="name-location text-center"><?php echo $name ; ?> - <?php echo $location ; ?></p>	
			</div>
		</div>
		<?php } ?>		

</section>
<!-- TEAM PROFILES SECTION -->

<?php } ?>
