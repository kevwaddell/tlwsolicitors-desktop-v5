<div class="col-xs-1">
<?php 
if ( isset($_COOKIE['font_size']) ) {
	$f_size = $_COOKIE['font_size'];	
} else {
	$f_size = "txt-sm";	
}
?>
	<div class="access-btns">
		<button id="access-btn-sml" data-role="txt-sm" class="access-btn<?php echo ($f_size == 'txt-sm') ? ' active' : '' ; ?>">A</button>
		<button id="access-btn-md" data-role="txt-md" class="access-btn<?php echo ($f_size == 'txt-md') ? ' active' : '' ; ?>">A</button>
		<button id="access-btn-lg" data-role="txt-lg" class="access-btn<?php echo ($f_size == 'txt-lg') ? ' active' : '' ; ?>">A</button>
	</div>
</div>