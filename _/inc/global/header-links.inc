<?php 
$twitter_url = get_field('twitter_page', 'options');	
$facebook_url = get_field('facebook_page', 'options');	
$google_url = get_field('google_page', 'options');	
$linkedin_url = get_field('linkedin_page', 'options');
$rss_url = get_field('rss_page', 'options');
?>
<?php if ($twitter_url) { ?>
<a href="<?php echo $twitter_url; ?>" class="btn btn-default" target="_blank"><span class="sr-only">Twitter</span><i class="fa fa-twitter"></i></a>
<?php } ?>
<?php if ($facebook_url) { ?>
<a href="<?php echo $facebook_url; ?>" class="btn btn-default" target="_blank"><span class="sr-only">Facebook</span><i class="fa fa-facebook"></i></a>
<?php } ?>
<?php if ($google_url) { ?>
<a href="<?php echo $google_url; ?>" class="btn btn-default" target="_blank"><span class="sr-only">Google+</span><i class="fa fa-google-plus"></i></a>
<?php } ?>
<?php if ($linkedin_url) { ?>
<a href="<?php echo $linkedin_url; ?>" class="btn btn-default" target="_blank"><span class="sr-only">LinkedIn</span><i class="fa fa-linkedin"></i></a>
<?php } ?>
<?php if ($rss_url) { ?>
<a href="<?php echo $rss_url; ?>" class="btn btn-default" target="_blank"><span class="sr-only"><?php bloginfo('name'); ?> RSS feed</span><i class="fa fa-rss"></i></a>
<?php } ?>
	