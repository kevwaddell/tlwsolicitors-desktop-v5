<?php  
$map_active = $section['map_active'];		
?>
<?php if ($map_active) { ?>

<?php
	$location = get_field('global_location', 'options');	
	$address = get_field('global_address', 'options');
	$section_title = get_field('map_section_title');
	$options = get_field('map_section_options');
	if (empty($section_title)) {
	$section_title = "Location map";
	}
//echo '<pre>';print_r($address);echo '</pre>';
	$map_marker = get_stylesheet_directory_uri()."/_/img/map-marker.png";
	$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'find-us'];	
?>
<style>
	li.office-location-link {
	display: none !important;	
	}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/_/js/map.js"></script>
<section id="wide-map" class="pg-section">
	<a id="find-us" name="find-us"></a>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>
	<div id="wide-map-canvas"></div>

	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<div class="location-box">
					<address>
						<span class="company bold caps col-red font-size-25"><?php bloginfo('name'); ?></span><br>
						<?php echo $address; ?>
					</address>
					
					<button class="btn btn-block" data-toggle="modal" data-target="#route-finder-modal"><i class="fa fa-car"></i> Route finder</button>
						
				</div>
			</div>
		</div>
		
	</div>

</section>

<?php } ?>