<?php 
global $page_icon;
global $img_post;
global $color;
?>
<section id="slim-top-banner" class="top-banner-img-slim wht-border-bottom" style="background-image: url(<?php add_banner_feat_img($img_post);?>)">
	<header class ="banner-title text-center bold">
		<?php if ($page_icon) { ?>
		<i class="fa <?php echo $page_icon; ?> <?php echo (!empty($color)) ? 'bg-col-'.$color.'-dk' : 'bg-col-red-dk'; ?>"></i>			
		<?php } ?>
		<?php if (is_home()) { ?>
		latest from <?php bloginfo('name'); ?>
		<?php } ?>
		<?php if (is_category()) { ?>
		<?php single_cat_title(); ?>
		<?php } ?>
		<?php if (is_day()) { ?>
		<small>Archives: <?php echo get_the_date('M - j - Y'); ?></small>
		<?php } ?>
		<?php if (is_month()) { ?>
		<small>Archives: <?php echo get_the_date('F - Y'); ?></small>
		<?php } ?>
		<?php if (is_year()) { ?>
		<small>Archives: <?php echo get_the_date('Y'); ?></small>
		<?php } ?>
	</header>
	
	<div class="img-overlay"></div>
	<div class="top-drk-grad<?php echo (!empty($color)) ? ' col-'.$color : ''; ?>"></div>
</section>