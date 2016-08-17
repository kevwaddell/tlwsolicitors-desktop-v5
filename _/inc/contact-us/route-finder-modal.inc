<?php 
global $post;	
$contact_pg = get_page_by_title("Contact us");
?>

<?php if ($post->ID === $contact_pg->ID) { ?>

<div class="modal fade" id="route-finder-modal" tabindex="-1" role="dialog">
	
	<div class="modal-dialog">	
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title"><i class="fa fa-car"></i> Route Finder</h4>
				<button type="button" class="btn btn-block close-btn" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
      		</div>
      		
			<div class="modal-body">	
				<form action="http://maps.google.com/maps" method="get" target="_blank" class="route-finder">
					<div class="form-group">
						<label for="saddr">Enter Your Post code:</label>
						<input type="hidden" name="daddr" value="NE29 7ST">
						<input type="text" class="form-control input-lg" name="saddr" maxlength="9" id="start">
					</div>
	
					<button class="btn btn-block">Get directions <i class="fa fa-angle-right pull-right"></i></button>
				</form>
				
			</div>
		</div>
	
	</div>
	
</div>

<?php } ?>
