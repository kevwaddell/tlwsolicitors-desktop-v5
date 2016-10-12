<?php get_header(); ?>

<?php
$news_page_id = get_option('page_for_posts');
$news_page = get_page($news_page_id);
$page_icon = get_field('page_icon', $news_page->ID);

if ( has_post_thumbnail($news_page_id) ) {
$img_post = $news_page;
}
?>

<!-- MAIN CONTENT START -->
<main class="page-col-red">
	
	<?php if ($img_post) { ?>
	<?php include (STYLESHEETPATH . '/_/inc/banners/blog/img-banner-index-pg.inc'); ?>		
	<?php } ?>
	
	<?php include (STYLESHEETPATH . '/_/inc/sections/global-telephone-number.inc'); ?>		
	
	<?php include (STYLESHEETPATH . '/_/inc/global/col-strip.inc'); ?>
		
	<!-- PAGE TOP BAR SECTION -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/index-top-bar.inc'); ?>	
	
	<!-- POSTS LIST -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/index-post-list.inc'); ?>	
	
	<!-- SOCIAL FEED -->
	<?php include (STYLESHEETPATH . '/_/inc/posts/social-feed-slider.inc'); ?>

</main>
<!-- MAIN CONTENT CONTAINER END -->

<?php get_footer(); ?>
