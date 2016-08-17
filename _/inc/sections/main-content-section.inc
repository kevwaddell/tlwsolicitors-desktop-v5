<?php  
global $hide_title;
global $post;
global $banner_type;
$section_title = "Main information";	
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'service-info-txt'];
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
?>
<article <?php post_class("content-section"); ?>>
	<a name="service-info-txt" id="service-info-txt" class="section-target"></a>
	
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>	
	
	<div class="container">
		<?php if ($post->post_parent != 0 ) { ?>
			<div class="service-label text-center font-slab-serif caps txt-col-wht <?php echo (!empty($color)) ? 'bg-col-'.$color.'-dk' : 'bg-col-red-dk'; ?>">
				<i class="fa fa-info-circle <?php echo (!empty($color)) ? 'bg-col-'.$color.' txt-col-'.$color.'-dk' : 'bg-col-red txt-col-red-dk'; ?>"></i><?php the_title(); ?>
			</div>		
		<?php } ?>
		<div class="row">
			
			<div class="col-xs-11">
			<div class="entry wide-entry">
				
				<div class="main-txt">
					<?php if (!empty($post_content['extended'])) { ?>
					<?php echo $content_main;  ?>
					<div id="content-extra" class="closed">
						<div id="content-extra-inner">
							<?php echo $content_extended;  ?>
							<button id="close-content-extra-btn" class="btn btn-default"><i class="fa fa-times-circle"></i><span class="sr-only">Close</span></button>
						</div>
					</div>
					
					<?php } else { ?>
					<?php the_content(); ?>
					<?php } ?>
				</div>
															
			</div>
			</div>
			
			<?php include (STYLESHEETPATH . '/_/inc/global/page-tools.inc'); ?>
		
		</div>
		<div class="row">
			<div class="col-xs-12">
			<?php if (!empty($post_content['extended'])) { ?>
			<button id="continue-read-btn" class="btn btn-default btn-block"><?php echo $more_btn_text; ?><i class="fa fa-plus-circle"></i></button>
			<?php } ?>
							
			<?php if (!empty($children)) { ?>
			<div class="rule"></div>
			<nav class="child-page-links text-center">
				<?php foreach ($children as $child) { ?>
					<a href="<?php echo get_permalink($child->ID); ?>" class="btn btn-default no-border no-rounded"><?php echo get_the_title($child->ID); ?></a>
				<?php } ?>
			</nav>		
			<?php } ?>
			</div>
		</div>
	</div>
	
</article>