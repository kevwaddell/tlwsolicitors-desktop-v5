<nav id="top-nav" class="nav-closed">
	<div class="nav-wrapper">
		<button id="close-nav" class="btn"><i class="fa fa-angle-up fa-2x"></i></button>
		<?php wp_nav_menu(array( 
		'container' => 'false', 
		'menu' => 'Hidden Navigation', 
		'menu_class'  => 'menu clearfix list-unstyled',
		'fallback_cb' => false ) ); 
		?>
	</div>
</nav>