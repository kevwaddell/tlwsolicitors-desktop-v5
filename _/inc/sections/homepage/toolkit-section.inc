<?php
$toolkits_active = $section['toolkits_active'];
?>
<?php if ($toolkits_active) { ?>

<?php 
$section_title = $section['section_title'];
$section_intro = $section['section_intro'];
$links = $section['links'];

if ( empty($toolkit_title) ) {
$toolkit_title = "Toolkit";
}

//echo '<pre class="debug">';print_r($slides);echo '</pre>';
$quick_links[] = ['link_title' => "TLW ".$section_title, 'link_anchor' => 'toolkit-links'];	
?>
<section id="toolkit-section" class="pg-section links-2">
	<a name="toolkit-links" id="toolkit-links" class="section-target"></a>
	
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk">TLW <?php echo $section_title; ?></h2>
		<div class="tk-pg-intro font-slab-serif"><?php echo $section_intro; ?></div>
	</div>	
	
	<div class="links-wrapper">
	
		<?php foreach ($links as $link) { 
		$page = get_page($link['page']);
		$tk_page = get_page_by_path($page->post_name."/toolkit");
		
		$pg_col = get_field('page_colour', $tk_page->ID);
		$pg_icon = get_field('page_icon', $tk_page->ID);
		$post_thumbnail_id = get_post_thumbnail_id( $tk_page );
		$feat_img = wp_get_attachment_image_src($post_thumbnail_id, 'full' );
		?>
		<a href="<?php echo get_permalink($tk_page->ID); ?>" class="toolkit-link link-col-<?php echo $pg_col; ?>">
				
				<div class="bg-img" style="background-image: url(<?php echo $feat_img[0] ; ?>)">
					<div class="img-overlay"></div>
				</div>
				
				<i class="fa <?php echo $pg_icon; ?> link-icon"></i>
				<span class="bg-col-<?php echo $pg_col; ?>"><?php echo get_the_title($link['page']); ?> <?php echo get_the_title($tk_page->ID); ?></span>
		</a>
		<?php } ?>
		
		
	</div>
</section>
<?php } ?>