<div class="col-xs-6">
	<?php if ($services_for_biz) { ?>
	
	<h3><a href="<?php echo get_permalink($for_biz_pg); ?>"><?php echo ($for_biz_page_icon) ? '<i class="icon fa '.$for_biz_page_icon.' f-lg"></i>': ''; ?><?php echo get_the_title($for_biz_pg); ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	

	<?php foreach ($services_for_biz as $service) { ?>
	
	<?php 
	$icon = get_field('page_icon', $service->ID);
	
	if (!empty($icon)) {
	$icon_tag = '<i class="icon fa '.$icon.'"></i>';	
	}
	
	$service_args = array(
	'posts_per_page' => -1,
	'post_type'		=> 'page',
	'orderby'		=> 'menu_order',
	'post_parent'	=> $service->ID,
	'order'			=> 'ASC'
	);
	
	$service_children = get_posts($service_args);
	 ?>
	
		<div class="list-block">
			<h4><a href="<?php echo get_permalink($service->ID); ?>"><?php echo ($icon_tag) ? $icon_tag: ''; ?><?php echo $service->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h4>
			
		<?php if ($service_children) { ?>
			<ul class="list-unstyled">
			
			<?php foreach ($service_children as $service_child) { 
			$gc_args = array(
			'posts_per_page' => -1,
			'post_type'		=> 'page',
			'orderby'		=> 'menu_order',
			'post_parent'	=> $service_child->ID,
			'order'			=> 'ASC'
			);
			$service_gchildren = get_posts($gc_args);
			?>
			<li><a href="<?php echo get_permalink($service_child->ID); ?>"><?php echo $service_child->post_title; ?></a></li>
				<?php if ($service_gchildren) { ?>
					<?php foreach ($service_gchildren as $g_child) { ?>
					<li><a href="<?php echo get_permalink($g_child->ID); ?>"><?php echo get_the_title($g_child->ID); ?></a></li>
					<?php } ?>
				<?php } ?>

			<?php } ?>
			
		<?php } ?>
		
			</ul>
		
		</div>
	
	<?php } ?>
	
	<?php } ?>
	
	<h3><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo ($company_page_icon) ? '<i class="icon fa '.$company_page_icon.' f-lg"></i>': ''; ?><?php echo $company_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
	<?php if ($company_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
						
	<h3><i class="icon fa fa-check fa-lg"></i>General</h3>
	
	<?php if ($rescources_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($rescources_pages as $rescources_page) { ?>
				<li><a href="<?php echo get_permalink($rescources_page->ID); ?>"><?php echo $rescources_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<h3><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo ($legal_page_icon) ? '<i class="icon fa '.$legal_page_icon.' f-lg"></i>': ''; ?><?php echo $legal_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
	<?php if ($legal_pages) { ?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($legal_pages as $legal_page) { ?>
									 
				<li><a href="<?php echo get_permalink($legal_page->ID); ?>"><?php echo $legal_page->post_title; ?></a></li>
				<?php } ?>
			
			</ul>
			
		</div>
	<?php } ?>
	
	<?php if ($topics) { ?>
		<h3><a href="<?php echo get_permalink($news_page->ID); ?>"><?php echo ($news_page_icon) ? '<i class="icon fa '.$news_page_icon.' f-lg"></i>': ''; ?><?php echo $news_page->post_title; ?>: Categories<i class="fa fa-angle-right fa-lg"></i></a></h3>
		
		<div class="list-block">
			<ul class="list-unstyled">
		<?php foreach ($topics as $topic) { ?>

				<li><a href="<?php echo get_category_link($topic->term_id); ?>"><?php echo $topic->name; ?></a></li>
			
		<?php } ?>
			</ul>
		</div>
			
	<?php } ?>
	
	<?php if ($subjects) { ?>
		<h3><?php echo ($news_page_icon) ? '<i class="icon fa '.$news_page_icon.' f-lg"></i>': ''; ?><?php echo $news_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i>: Tags</h3>
		
		<div class="list-block" style="text-transform: capitalize;">
			<?php wp_tag_cloud('smallest=20&largest=20&unit=px&separator= | '); ?>
		</div>
			
	<?php } ?>
	
</div>