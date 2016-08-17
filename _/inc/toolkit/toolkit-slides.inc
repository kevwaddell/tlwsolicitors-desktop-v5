<?php 
$slides_choice = get_field('tk_slides').'_tk_slides';
$slides = get_field($slides_choice, 'option');
$slides_total = count($slides);
$slides_counter = 0;
$section_title = "Toolkit";	
//echo '<pre class="debug">';print_r($slides);echo '</pre>';
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'toolkit-slides'];	
?>

<section class="toolkit-slider">
	<a name="toolkit-slides" id="toolkit-slides" class="section-target"></a>
	<ul class="list-unstyled tk-slider-nav">
		<?php foreach ($slides as $k => $link) { ?>
		<li class="link-<?php echo $link['slide_color']; ?><?php echo ($k == 0) ? ' active':''; ?>"><a href="#tk-slide-<?php echo $k + 1; ?>" title="<?php echo $link['slide_title']; ?>"><i class="tk-sn-nav-icon" style="background-image: url(<?php echo $link['slide_icon']; ?>)"></i><span><?php echo $link['slide_title']; ?></span></a></li>
		<?php } ?>
	</ul>
	<div class="tk-slides-outer">
		<div class="tk-slides-inner tk-slide-1-active">
			<?php foreach ($slides as $k => $slide) { ?>
			
			<article id="tk-slide-<?php echo $k + 1; ?>" class="tk-slide slide-<?php echo $slide['slide_color']; ?><?php echo ($k == 0) ? ' tk-slide-active':''; ?>">
				<h2 class="slide-banner-header text-center bg-col-<?php echo $slide['slide_color']; ?>-dk caps font-slab-serif"><?php echo $slide['slide_title']; ?></h2>
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<div class="scrollable-txt">
								<?php echo $slide['slide_text']; ?>
							</div>
						</div>
						<div class="col-xs-4">
							<figure class="tk-slide-img" style="background-image: url(<?php echo $slide['slide_img']; ?>)"></figure>
							<div class="overlay"></div>
						</div>
					</div>
				</div>
			</article>

			<?php } ?>
		</div>
		
	</div>
</section>

