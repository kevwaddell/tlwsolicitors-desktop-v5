<?php 
global $post;
if ($post->post_parent == 0) {
$page_icon = get_field('page_icon', $post->ID);	
} else {
$page_icon = get_field('page_icon', $post->post_parent);	
}
?>
<section id="slim-top-banner" class="top-banner-img-slim" style="background-image: url(<?php add_banner_feat_img($img_post);?>)">
	<header class ="banner-title text-center bold">
		<?php if (!empty($page_icon)) { ?>
		<i class="fa <?php echo $page_icon; ?> <?php echo (!empty($color)) ? 'bg-col-'.$color.'-dk' : 'bg-col-red-dk'; ?>"></i>			
		<?php } ?>
		<?php echo get_the_title($post->post_parent); ?>
	</header>
	
	<div class="img-overlay"></div>
	<div class="top-drk-grad<?php echo (!empty($color)) ? ' col-'.$color : ''; ?>"></div>
</section>