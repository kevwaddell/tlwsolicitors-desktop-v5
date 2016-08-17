<?php 
global $quick_links;
global $color; 
?>
<!-- INTERNAL PAGE QUICK LINKS -->	
<?php if (!empty($quick_links)) { ?>
	<div id="quick-links" class="quick-links-outer closed col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
		
		<div class="quick-links-btns">
			<button id="quick-links-btn-up" class="dir-btn"><i class="fa fa-angle-left"></i><span class="sr-only">Previous section</span></button>
			<button id="quick-links-btn-show" class="open-nav-btn"><i class="fa fa-anchor"></i>Quick links</button>
			<button id="quick-links-btn-dwn" class="dir-btn"><i class="fa fa-angle-right"></i><span class="sr-only">Next section</span></button>
		</div>
		
		<nav class="quick-links-inner">
			<button id="quick-links-2-top" class="quick-links-inner-btn">Back to top</button>
			<div class="ql-section-links">
				<?php foreach ($quick_links as $ql) { ?>
				<a href="#<?php echo $ql['link_anchor']; ?>"><?php echo $ql['link_title']; ?></a>
				<?php } ?>
			</div>
			<button id="quick-links-close" class="quick-links-inner-btn">Close Menu</button>
		</nav>
		
	</div>		
<?php } ?>