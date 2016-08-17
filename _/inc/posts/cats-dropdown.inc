<?php 
$cats_args = array(
	'exclude'		=> 1,
	'hide_empty'    => 1,
	'hierarchical'  => 0
);
	
$cats = get_categories($cats_args);

//echo '<pre>';print_r($archives);echo '</pre>';
?>
<?php if ($cats) { ?>
<div class="cats-dropdown">
	
	<select id="cats" class="selectpicker" data-width="100%">
		<option value="0" data-hidden="true">Blog Categories</option>
		<?php foreach ($cats as $cat) { 
		$category_id = 	$cat->term_id;
		?>
		<option value="<?php echo get_category_link( $category_id ); ?>"><?php echo get_cat_name($category_id); ?></option>
		<?php } ?>
	</select>
	
</div>
<script type="text/javascript">
	<!--
	var dropdown = document.getElementById("cats");
	function onCatsChange() {
		if ( dropdown.options[dropdown.selectedIndex].value != 0 ) {
			location.href = dropdown.options[dropdown.selectedIndex].value;
		}
	}
	dropdown.onchange = onCatsChange;
	-->
</script>
<?php } ?>
