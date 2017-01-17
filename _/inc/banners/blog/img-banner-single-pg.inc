<?php 
$img_atts = array('class'	=> "img-responsive");
$img_post = get_the_ID();
$post_thumbnail_id = get_post_thumbnail_id($img_post);
$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
?>
<section id="post-top-banner" class="top-banner-multi-img">
		<div class="feat-img-part feat-img-left full-bg-img" data-src="<?php echo $banner_feat_full_src[0]; ?>" style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
			<div class="bg-grad"></div>
			<div class="img-overlay"></div>
		</div>	
		<div class="feat-img-part feat-img-mid">
			<?php the_post_thumbnail( 'feat-img-wide', $img_atts ); ?>
			<div class="img-overlay"></div>
		</div>
		<div class="feat-img-part feat-img-right full-bg-img" style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
			<div class="bg-grad"></div>
			<div class="img-overlay"></div>
		</div>
</section>