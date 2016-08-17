<?php 
$img_atts = array('class'	=> "img-responsive");
$img_post = get_the_ID();; 	
?>
<section id="post-top-banner" class="top-banner-multi-img">
		<div class="feat-img-part feat-img-left" style="background-image: url(<?php add_full_page_banner_img($img_post);?>)">
			<div class="bg-grad"></div>
			<div class="img-overlay"></div>
		</div>	
		<div class="feat-img-part feat-img-mid">
			<?php the_post_thumbnail( 'feat-img-wide', $img_atts ); ?>
			<div class="img-overlay"></div>
		</div>
		<div class="feat-img-part feat-img-right" style="background-image: url(<?php add_full_page_banner_img($img_post);?>)">
			<div class="bg-grad"></div>
			<div class="img-overlay"></div>
		</div>
</section>