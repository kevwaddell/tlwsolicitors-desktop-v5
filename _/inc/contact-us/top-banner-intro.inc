<?php 
$img = wp_get_attachment_image_src($post_thumbnail, 'full');
$freephone_num = get_field('freephone_num', 'options');
$office_tel = get_field('office_num', 'options');
$fax = get_field('main_fax', 'options');
$email = get_field('main_email', 'options');
$form_title = get_field('form_section_title');
//echo '<pre class="debug">';print_r($img);echo '</pre>';
?>
<section class="contact-links" style="background-image: url(<?php add_full_page_banner_img($img_post);?>)">
	<div class="container">
		<div class="intro">
			<p class="header text-center">We can help 24/7 365 days a year</p>
			<p class="text-center">You can contact us using any of the following methods.</p>
		</div>
		
		<div class="row contact-info">
			<div class="col-xs-6"><a href="tel:<?php echo str_replace(" ", "", $freephone_num); ?>" class="contact-info-link"><i class="fa fa-phone"></i>Freephone: <?php echo $freephone_num; ?></a></div>
			<div class="col-xs-6"><div class="contact-info-label"><i class="fa fa-fax"></i>Fax: <?php echo $fax; ?></div></div>
			<div class="col-xs-6"><a href="tel:<?php echo str_replace(" ", "", $office_tel); ?>" class="contact-info-link"><i class="fa fa-building-o"></i>Office: <?php echo $office_tel; ?></a></div>
			<div class="col-xs-6"><a href="mailto:<?php echo $email; ?>" class="contact-info-link"><i class="fa fa-envelope-o"></i><?php echo $email; ?></a></div>
			<div class="col-xs-12"><a href="#request-a-callback" class="contact-info-link jump-2-link"><i class="fa fa-paper-plane-o"></i><?php echo $form_title; ?></a></div>		
		</div>
	</div>		
	<div class="img-overlay"></div>
	<div class="top-drk-grad"></div>
</section>