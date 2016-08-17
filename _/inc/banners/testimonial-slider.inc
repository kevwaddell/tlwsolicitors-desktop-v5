<?php 
$colors = array('purple','green','pink', 'orange', 'blue');
$slider_testimonials = get_field('slider_testimonials', 'options');	
$banner_title_active = get_field('banner_title_active');
if (!empty($slider_testimonials)) { ?>
		
<section id="testimonial-slider" class="carousel slide" data-ride="carousel">
	<?php if ($banner_title_active) { 
	$title_id = $post->post_parent;
	if ($title_id == 0) {
	$title_id = $post->ID;	
	}	
	?>
	<header class="banner-title text-center bold bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		<div class="container">
			<?php echo get_the_title($title_id); ?>
		</div>
	</header>			
	<?php } ?>
	

  	 <div class="carousel-inner" role="listbox">
	  	 
	  	 <?php foreach ($slider_testimonials as $k => $item) { 
		 $bg_img_src = wp_get_attachment_image_src($item['slide_img'], 'wide-banner-img' );	 
		 $quote = get_field('quote', $item['quote']);
		 $name = get_field('client_name', $item['quote']);	
		 $location = get_field('location', $item['quote']);	
		 $exclude_quotes[] = $item['quote'];
	  	 ?>
	  	 <div class="item quote-<?php echo $item['quote_position']; ?> col-<?php echo $colors[$k]; ?><?php echo ($k == 0) ? ' active':''; ?>" style="background-image: url(<?php echo $bg_img_src[0]; ?>)">
	  	 	<div class="quote-outer">
		  	 	<div class="quote-inner">
			  	 	
			  	 	<blockquote class="quote">
				  	 	<?php echo $quote; ?>
				  	 	<span class="client-info"><?php echo $name; ?>, <?php echo $location; ?></span>
			  	 	</blockquote>
			  	 	
		  	 	</div>
	  	 	</div>
  	 	 </div>
	  	 <?php } ?>
  	 	
  	</div>

</section>

<?php } ?>