<?php 
global $post;
$contact_pg = get_page_by_title("Contact us");
$office_location = get_field('global_location', 'options');
$office_map_marker = get_stylesheet_directory_uri()."/_/img/map-marker.png"; 
?>
<?php if ($post->ID != $contact_pg->ID) { ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>		

<script>
	var TLW_MAP_ID = 'TLW_style';
	
    var location_map;
    var TLW_MAPTYPE_ID = 'location_map';
    var myLatLang = new google.maps.LatLng( <?php echo $office_location['lat']; ?>, <?php echo $office_location['lng']; ?>);
	var img_url = "<?php echo $office_map_marker; ?>";
	var marker;
	
	 var image = {
		 url: img_url,
		 // This marker is 20 pixels wide by 32 pixels tall.
		 size: new google.maps.Size(60, 70),
		 // The origin for this image is 0,0.
		 origin: new google.maps.Point(0,0),
		 // The anchor for this image is the base of the flagpole at 0,32.
		 anchor: new google.maps.Point(30, 60)
		 };
		
   
   function location_map_init() {
    
	var mapOptions = {
			zoom: 12, 
			center: myLatLang, 
			mapTypeControlOptions: {
			 mapTypeIds: [google.maps.MapTypeId.ROADMAP, TLW_MAPTYPE_ID]
			}
		};
		
    location_map = new google.maps.Map(document.getElementById('pop-up-location-map'), mapOptions);
    	
    marker = new google.maps.Marker({position: myLatLang, map: location_map ,icon: image,title: "TLW Solicitors"});
		
	};
	
</script>

<div id="office-location-pop-up" class="off">
	<div class="office-location-pop-up-inner-wrap">
		<div class="office-location-pop-up-inner">
			<button id="close-office-location"><span class="sr-only">Close</span><i class="fa fa-times fa-lg"></i></button>
			<div id="pop-up-location-map">
				
			</div>
		</div>
	</div>
</div>
<?php } ?>