<?php  
global $hide_title;
global $post;
$about_pg = get_page_by_title('About TLW Solicitors');
$about_pg_icon = get_field('page_icon', $about_pg->ID);
$team_pg = get_page_by_title('Our Team');
$team_pg_icon = get_field('page_icon', $team_pg->ID);
$feedback_pg = get_page_by_title('Why Choose TLW');
$feedback_pg_icon = get_field('page_icon', $feedback_pg->ID);

$section_title = "Service information";	
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'service-info-txt'];
?>
<article <?php post_class("content-section"); ?>>
	<a name="service-info-txt" id="service-info-txt" class="section-target"></a>
					
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>	
	
	<div class="container">
		<div class="entry wide-entry">
			<div class="main-txt home">
			<?php the_content(); ?>
			</div>	
			<div class="info-links">
			<div class="row">		
				<div class="col-xs-4">
					<a href="<?php echo get_permalink($about_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $about_pg_icon; ?> fa-lg"></i> About us</a>	
				</div>
				<div class="col-xs-4">
					<a href="<?php echo get_permalink($team_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $team_pg_icon; ?> fa-lg"></i> Our Team</a>	
				</div>
				<div class="col-xs-4">
					<a href="<?php echo get_permalink($feedback_pg->ID); ?>" class="btn btn-default btn-block"><i class="fa <?php echo $feedback_pg_icon; ?> fa-lg"></i> Client Feedback</a>	
				</div>
			</div>
			
			<button id="intro-scroll-down-btn"><i class="fa fa-angle-down"></i><span class="sr-only">Go down to next section</span></button>
												
		</div>
	</div>
	
</article>