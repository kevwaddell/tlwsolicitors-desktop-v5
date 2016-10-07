<?php
$awards_active = get_field('awards_active', 'options');	
if ($awards_active) {
$award_title = get_field('award_title', 'options');
$award_year = get_field('award_year', 'options');
$award_category = get_field('award_category', 'options');
?>
<div id="awards-pop-up" class="open">
	<div id="awards-pop-up-inner">
		<div class="inner-left">
			<div id="nla-logo"></div>
		</div>
		<div class="inner-right">
			<div class="title sr-only"><?php echo $award_title; ?></div><div class="year sr-only"><?php echo $award_year; ?></div>
			<div class="description sr-only"><?php echo $award_category; ?></div>
		</div>
	</div>
	
	<button id="close-awards-btn" class="btn btn-default"><span class="sr-only">Close pop up</span><i class="fa fa-times"></i></button>
</div>
<?php } ?>