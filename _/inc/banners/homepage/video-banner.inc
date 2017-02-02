<?php 
$banner_video_mp4 = get_field('hp_banner_video_mp4', 'option');	
$banner_video_webm = get_field('hp_banner_video_webm', 'option');	
$banner_video_poster = get_field('hp_banner_video_poster', 'option');
$banner_tags = get_field('hp_banner_tags', 'option');
$hp_banner_quick_links = get_field('hp_banner_quick_links', 'option');
$hp_other_service_links = get_field('hp_other_service_links', 'option');
$extra_links_cols = 4;
?>
<?php //echo '<pre>';print_r($banner_quick_links);echo '</pre>'; ?>
<section id="top-banner" class="top-banner-video no-title">

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
	
	<video autoplay loop muted id="bgvid" poster="<?php echo $banner_video_poster;?>">
		<source src="<?php echo $banner_video_webm ?>" type="video/webm" />
		<source src="<?php echo $banner_video_mp4; ?>" type="video/mp4" />
	</video>
	<div class="video-overlay"></div>
	<div class="top-drk-grad"></div>
	
</section>