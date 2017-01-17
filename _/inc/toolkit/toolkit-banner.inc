<?php  
$post_thumbnail_id = get_post_thumbnail_id($img_post);
$banner_feat_full_src = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
$banner_feat_thumb_src = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail' );
//echo '<pre class="debug">';print_r($banner_feat_thumb_src);echo '</pre>';
?>

<section class="toolkit-banner full-bg-img fixed-bg" data-src="<?php echo $banner_feat_full_src[0]; ?>" data-src="<?php echo $banner_feat_full_src[0]; ?>"style="background-image: url(<?php echo $banner_feat_thumb_src[0]; ?>)">
				
	<div class="tk-title-strip col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		<div class="container text-center">
			<?php echo get_the_title($post->post_parent); ?>
		</div>
	</div>
	
	<div class="tk-banner-txt">
		<div class="container">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
	</div>

	<div class="bg-lines col-<?php echo (!empty($color)) ? $color : 'red'; ?>"></div>
	<div class="top-drk-grad"></div>
	
</section>