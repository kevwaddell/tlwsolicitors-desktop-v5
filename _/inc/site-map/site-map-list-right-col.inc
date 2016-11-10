<div class="col-xs-6">
	
	<h3><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo ($company_page_icon) ? '<i class="icon fa '.$company_page_icon.' f-lg"></i>': ''; ?><?php echo $company_page->post_title; ?><i class="fa fa-angle-right fa-lg"></i></a></h3>
	
	<?php if ($company_pages) { 
	$vacancies_pg = get_page_by_title( "Vacancies" );	
	?>
		<div class="list-block">
	
			<ul class="list-unstyled">
			
				<?php foreach ($company_pages as $company_page) { ?>
				<li><a href="<?php echo get_permalink($company_page->ID); ?>"><?php echo $company_page->post_title; ?></a></li>
				<?php } ?>
				<?php if ($vacancies_pg) { ?>
				<li><a href="<?php echo get_permalink($vacancies_pg->ID); ?>"><?php echo $vacancies_pg->post_title; ?></a></li>			
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