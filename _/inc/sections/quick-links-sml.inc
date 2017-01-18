<?php 
global $quick_links;
$quick_links_total = count($quick_links);
?>
<!-- INTERNAL PAGE QUICK LINKS -->	
<?php if (!empty($quick_links) && count($quick_links) > 1) { ?>
	<div id="quick-links-sml" class="open nav-closed" style="margin-top: -<?php echo ($quick_links_total * 50 + 100) / 2; ?>px">
		
		<button id="quick-links-btn-show"><span class="sr-only">Internal page links</span></button>
		
		<nav class="quick-links-inner">
			<button id="quick-links-btn-up" class="dir-btn"><i class="fa fa-angle-up"></i><span class="sr-only">Previous section</span></button>
			<div class="ql-section-links">
				<?php foreach ($quick_links as $ql) { ?>
				<a id="ql-<?php echo $ql['link_anchor']; ?>" href="#<?php echo $ql['link_anchor']; ?>"><i></i><span class="sr-only"><?php echo $ql['link_title']; ?></span></a>
				<?php } ?>
			</div>
			<button id="quick-links-btn-dwn" class="dir-btn"><i class="fa fa-angle-down"></i><span class="sr-only">Next section</span></button>
		</nav>
		
	</div>		
<?php } ?>