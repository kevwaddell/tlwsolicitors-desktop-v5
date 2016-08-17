<?php 
$service_section_bg_img = get_field('service_section_bg_img');
$section_title = get_field('service_section_title');
$section_pgs = get_field('service_section_pgs');
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'our-specialist-services'];	
?>
<?php if ($section_pgs) { ?>
<section id="services-section" class="pg-section with-header col-<?php echo (!empty($color)) ? $color : 'red'; ?> with-bg-img" style="background-image: url(<?php echo $service_section_bg_img;?>);">
<a name="our-specialist-services" id="our-specialist-services" class="section-target"></a>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
		<nav class="services-nav<?php echo (count($section_pgs) > 4) ? ' hide-all-links':''; ?>">
			<?php foreach ($section_pgs as $k => $pg) { ?>
			<a href="<?php echo get_permalink($pg['service_pg']); ?>" class="services-nav-link<?php echo ($k > 3) ? ' link-hidden':''; ?>"><?php echo get_the_title($pg['service_pg']); ?></a>
			<?php } ?>
			<?php if (count($section_pgs) > 4) { ?>
				<button id="show-more-links-btn" class="btn btn-default btn-block no-rounded"><span>View More</span></button>	
			<?php } ?>
		</nav>
	</div>
	<div class="col-overlay"></div>
	<div class="overlay"></div>
</section>
<?php } ?>