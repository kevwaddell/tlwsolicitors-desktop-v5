<?php 
global $quick_links;
$quick_links_total = count($quick_links);
?>
<!-- INTERNAL PAGE QUICK LINKS -->	
<?php if (!empty($quick_links)) { ?>
	<div id="quick-links-sml" style="margin-top: -<?php echo ($quick_links_total * 35 + 100) / 2; ?>px">
		
		<nav class="quick-links-inner">
			<button id="quick-links-btn-up" class="dir-btn"><i class="fa fa-angle-up"></i><span class="sr-only">Previous section</span></button>
			<div class="ql-section-links">
				<?php foreach ($quick_links as $ql) { ?>
				<a href="#<?php echo $ql['link_anchor']; ?>"><i></i><span class="sr-only"><?php echo $ql['link_title']; ?></span></a>
				<?php } ?>
			</div>
			<button id="quick-links-btn-dwn" class="dir-btn"><i class="fa fa-angle-down"></i><span class="sr-only">Next section</span></button>
		</nav>
		
	</div>		
<?php } ?>