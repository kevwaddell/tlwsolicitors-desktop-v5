<header class="header<?php echo (is_page_template('page-templates/toolkit-page.php') || is_page_template('page-templates/service-home-page.php') || is_front_page()) ? ' abs-header':''; ?>" role="banner">

	<?php 
	$freephone_num = get_field('freephone_num', 'option');
	$main_email = get_field('main_email', 'option');
	$tag_line = get_field('tag_line', 'options');	
	?>
	<div class="contact-links">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-xs-3 contact-link">
					<i class="fa fa-phone fa-lg"></i> 
					<a href="tel:<?php echo str_replace(' ', '', $freephone_num); ?>" onclick="ga('send', 'event', 'mobile', 'click to call', 'site header');" title="Call us now"><?php echo $freephone_num; ?></a>
				</div>
		
				<div class="col-xs-6 info-links">
					<?php wp_nav_menu(array( 
					'container' => 'false', 
					'menu' => 'Top Bar Navigation', 
					'menu_class'  => 'menu clearfix list-unstyled',
					'fallback_cb' => false ) ); 
					?>
				</div>
		
				<div class="col-xs-3 social-links">
					<?php include (STYLESHEETPATH . '/_/inc/global/header-links.inc'); ?>
				</div>
			</div>
		
		</div>
		
	</div>

	<div class="header-inner">
	
		<div class="container">
			
			<div class="row">
			
				<div class="col-xs-4">
					<span class="tag-line"><?php echo $tag_line; ?></span>
				</div>
				
				<div class="col-xs-4">
					<div class="text-hide logo"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></div>
				</div>
				
				<div class="col-xs-4">
<!-- 					<a href="#search-pop-up" id="search-btn" class="btn btn-default"><span>Search</span><i class="fa fa-search fa-lg"></i></a> -->
					<div class="header-action-btns">
						<button id="search-btn" class="btn btn-default"><span>Search</span><i class="fa fa-search fa-lg"></i></button>
						<button id="nav-btn" class="btn btn-default in-active"><span>Menu</span><i class="fa fa-bars fa-lg"></i></button>
					</div>
				</div>
			
			</div>
		
		</div>
	
	</div>
			
</header>
