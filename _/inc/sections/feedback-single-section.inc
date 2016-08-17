<?php
global $color;
$feedback_id = $section['client_feedback'];
$feedback_color = $section['feedback_color'];

if (empty($feedback_id)) {
	$feedback_args = array(
	'posts_per_page'   => 1,
	'post_type' => 'tlw_testimonial_cpt',
	'orderby'          => 'rand'
	); 
	$feedback_quote = get_posts($feedback_args); 	
	
	$feedback_id = $feedback_quote[0]->ID;
} 

if (empty($feedback_color)) {
$feedback_color = $color;	
}
$quote_txt = get_field('quote', $feedback_id);	
$client_name = get_field('client_name', $feedback_id);		
$location = get_field('location', $feedback_id);	
$gender = get_field('gender', $feedback_id);

//echo '<pre class="debug">';print_r($gender);echo '</pre>';

$quick_links[] = ['link_title' => "Client feedback", 'link_anchor' => 'feedback'];	 
?>
<section id="feedback-section" class="pg-section feedback-single">
<a name="feedback" id="feedback" class="section-target"></a>
	<div class="item bg-col-<?php echo (!empty($feedback_color)) ? $feedback_color : 'red'; ?>">
		
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
</section>