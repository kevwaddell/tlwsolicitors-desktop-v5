<?php  
global $post;
$post_content = get_extended( $post->post_content );
$content_main = apply_filters('the_content', $post_content['main'] );
$content_extended = apply_filters('the_content', $post_content['extended'] );
$show_post_title = get_field('show_post_title');

if (!empty($post_content['more_text'])) {
$more_btn_text = $post_content['more_text'];	
} else {
$more_btn_text = "Continue Reading";	
}
$section_title = "Article text";
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'article-txt'];	
$post_thumbnail_id = get_post_thumbnail_id( $post );
$banner_feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
//echo '<pre class="debug">';print_r($banner_feat_img);echo '</pre>';
?>
<article <?php post_class("content-section"); ?>>
	<?php //echo '<pre class="debug">';print_r($post);echo '</pre>'; ?>
	<script type="application/ld+json">
	{ "@context": "http://schema.org", 
	 "@type": "BlogPosting",
	 "headline": "<?php echo the_title(); ?>",
	 "description": "<?php echo get_the_excerpt(); ?>",
	 "image": {
		"@type" : "ImageObject",
	 	"url": "<?php echo $banner_feat_img[0];?>",
	 	"width": "<?php echo $banner_feat_img[1];?>",
	 	"height": "<?php echo $banner_feat_img[2];?>"
	 	},
	 "author": {
        "@type" : "Organization",
        "name" : "<?php bloginfo('name'); ?>"
        },
	 "publisher": {
        "@type" : "Organization",
        "name" : "<?php bloginfo('name'); ?>"
        },
	 "url": "<?php the_permalink(); ?>",
	 "datePublished": "<?php echo $post->post_date; ?>",
	 "dateModified": "<?php echo $post->post_modified; ?>",
	 "mainEntityOfPage": "<?php the_permalink(); ?>"
	 }
	</script>

	<a name="article-txt" id="article-txt" class="section-target"></a>
	
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>	
	
	<div class="container">
		
		<time class="date" datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><i class="fa fa-calendar fa-lg"></i> <?php echo $date; ?></time>	
			
		<div class="row">
			
			<div class="col-xs-11">
			<div class="entry wide-entry">
				
				<div class="main-txt">
					
					<?php if ($show_post_title) { ?>
						<?php the_title( '<h1>', '</h1>' ) ?>
					<?php } ?>
					
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
			</div>
		</div>
	</div>
	
</article>