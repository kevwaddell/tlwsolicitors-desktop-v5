<?php foreach ($processes as $panel) { 	?>

<div id="<?php echo ($process_counter == 0) ? 'start': 'slide'.($process_counter); ?>" class="step<?php echo ($panel['hiw_col']) ? ' col-'.$panel['hiw_col'] : ''; ?>" data-y="<?php echo ($process_counter); ?>000">
	
	<?php if ($process_counter > 0) { ?>
	<a href="#<?php echo ($process_counter == 1) ? 'start': 'slide'.($process_counter - 1); ?>" class="nav-link back-link"><i class="fa fa-arrow-circle-up fa-lg"></i></a>
	<?php } ?>
	
	<?php if (($process_counter + 1) != $process_total) { ?>
	<div class="number"><?php echo ($process_counter + 1); ?></div>
	<?php } ?>
	
	
	<?php if ($panel['hiw_icon_1'] && $panel['hiw_icon_2'] && $panel['hiw_icon_3']) { 
	//echo '<pre>';print_r($panel['hiw_icon_1']['sizes']['post-list-img']);echo '</pre>';	
	$icon_1 = $panel['hiw_icon_1']['sizes']['post-list-img'];
	$icon_2 = $panel['hiw_icon_2']['sizes']['post-list-img'];
	$icon_3 = $panel['hiw_icon_3']['sizes']['post-list-img'];
	?>
	
	<div class="icons">
		<div class="icon" style="background-image: url(<?php echo $icon_1; ?>)"></div>
		<div class="icon" style="background-image: url(<?php echo $icon_2; ?>)"></div>
		<div class="icon" style="background-image: url(<?php echo $icon_3; ?>)"></div>
	</div>
	
	<?php } ?>
    <p class="header"><?php echo $panel['hiw_header']; ?></p>
    <p class="text"><?php echo $panel['hiw_text']; ?></p>
    
    <?php if ( ($process_counter + 1) != $process_total ) { ?>
    <a href="#slide<?php echo ($process_counter + 1); ?>" class="nav-link next-link"><i class="fa fa-arrow-circle-down fa-lg"></i></a>
    <?php } ?>
    
</div>

<?php 
$process_counter++;		
} ?>
