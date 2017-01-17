<?php  
$banner_bg_img = get_field('hp_banner_bg_img', 'option');
//echo '<pre class="debug">';print_r($banner_bg_img);echo '</pre>';
$banner_tags = get_field('hp_banner_tags', 'option');
$hp_banner_quick_links = get_field('hp_banner_quick_links', 'option');	
$hp_other_service_links = get_field('hp_other_service_links', 'option');
$extra_links_cols = 4;
?>
<section id="top-banner" class="top-banner-img full-bg-img no-title" style="background-image: url(<?php echo $banner_bg_img['sizes']['thumbnail'];?>)" data-src="<?php echo $banner_bg_img['url'];?>">
	
	<div class="tag-scroller">
		<?php if (!empty($banner_tags)) { ?>
		<?php foreach ($banner_tags as $k => $tag) { ?>
		<div class="tag-scroller-txt<?php echo ($k == 0) ? ' active':'' ; ?>"><?php echo $tag['banner_tag']; ?></div>
		<?php } ?>
		<?php } ?>
	</div>	
	
	<?php if ($hp_banner_quick_links) { ?>
	<nav class ="hp-banner-links text-center">
		<div class="container">
			<div class="row main-links">
			<?php foreach ($hp_banner_quick_links as $bl) { 
			$icon = get_field( 'page_icon', $bl['link_page']);	
			$color = get_field( 'page_colour', $bl['link_page']);
			?>
				<div class="col-xs-6">
					<a href="<?php echo get_permalink($bl['link_page']); ?>" class="services-nav-link col-<?php echo $color; ?>"><i class="fa <?php echo $icon; ?> fa-lg"></i> <?php echo get_the_title($bl['link_page']); ?></a>
				</div>
			<?php } ?>
			</div>
			<?php if (!empty($hp_other_service_links)) { ?>
			<div class="row extra-links">
				
				<?php foreach ($hp_other_service_links as $sl) { 
				$page = get_page($sl['page']);
				$icon = get_field( 'page_icon', $sl['page']);	
				$color = get_field( 'page_colour', $sl['page']);	
				$title = $page->post_title;
				$count_sp = substr_count($page->post_title, ' ');
				
				if ($count_sp === 1) {
				$title = str_replace(' ', '<br />', $page->post_title);
				}
				
				?>
				<div class="col-xs-<?php echo $extra_links_cols; ?>">
				<a href="<?php echo get_permalink($sl['page']); ?>" class="services-extra-nav-link col-<?php echo $color; ?>"><i class="fa <?php echo $icon; ?> fa-lg"></i><?php echo $title; ?></a>
				</div>
				<?php } ?>
				
			</div>		
			<?php } ?>
		</div>
	</nav>
	<?php } ?>
	
	<button id="scroll-down-btn"><i class="fa fa-angle-down"></i><span class="sr-only">Go down to next section</span></button>
	
	<div class="img-overlay"></div>
	<div class="top-drk-grad"></div>
</section>