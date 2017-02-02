<?php  
$banner_parts = get_field('banner_parts');
$banner_title_active = get_field('banner_title_active');
$post_thumbnail_id = get_post_thumbnail_id($img_post);
$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
//echo '<pre class="debug">';print_r($banner_feat_thumb_src);echo '</pre>';
?>
<section id="top-banner" class="top-banner-img full-bg-img fixed-bg<?php echo ($banner_title_active) ? '' : ' no-title'; ?>" data-src="<?php echo $banner_feat_full_src[0]; ?>" style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
	<?php if ($banner_title_active) { ?>
	<header class="banner-title text-center bold mid-gradient-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		<div class="container">
			<?php the_title(); ?>
		</div>
	</header>
	<?php } ?>
	
	<?php foreach ($banner_parts as $bp) { ?>
	
	<?php if ($bp['acf_fc_layout'] == "banner-tags") { 
	$banner_tags = $bp['tags'];	
	?>
	<div id="<?php echo $bp['acf_fc_layout']; ?>" class="tag-scroller<?php echo ($banner_title_active) ? " with-banner-title":""; ?>">
		
		<?php foreach ($banner_tags as $k => $tag) { ?>
		<div class="tag-scroller-txt<?php echo ($k == 0) ? ' active':'' ; ?>"><?php echo $tag['tag']; ?></div>
		<?php } ?>
		
	</div>		
	<?php } ?>
	
	<?php if ( $bp['acf_fc_layout'] == "banner-links" ) { 
	$banner_service_links = $bp['banner_service_links'];	
	$banner_sub_service_links = $bp['banner_sub_service_links'];	
	?>
	<div class="container">	
		<div id="services-banner-links" class="banner-links col-<?php echo (!empty($color)) ? $color : 'red'; ?>">	
			<div class="banner-links-header">Our Specialist Areas</div>	
			<div class="main-services">
				<?php foreach ($banner_service_links as $bl) { ?>
				<a href="<?php echo get_the_permalink($bl['link_page']); ?>"><?php echo get_the_title($bl['link_page']); ?></a>
				<?php } ?>
			</div>
			<?php if (!empty($banner_sub_service_links)) { ?>
			<div class="sub-services">
				<?php foreach ($banner_sub_service_links as $sbl_pgs) { ?>
				<a href="<?php echo get_the_permalink($sbl_pgs['link_page']); ?>"><?php echo get_the_title($sbl_pgs['link_page']); ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php } ?>

	<?php } ?>
	
	<div class="img-overlay"></div>
	<div class="top-drk-grad"></div>
</section>