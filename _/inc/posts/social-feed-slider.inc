<section class="social-feed">
	<div id="social-feed-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active twitter">
				<div class="container">
					<div class="row">
						<div class="col-xs-1">
							<i class="fa fa-twitter bg-col-twitter"></i>
						</div>
						<div class="col-xs-11">
						<?php echo do_shortcode('[wp_rss_multi_importer category="2" showgroup="1"]'); ?>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item google-plus">
				<div class="container">
					<div class="row">
						<div class="col-xs-1">
							<i class="fa fa-google-plus bg-col-google-plus"></i>
						</div>
						<div class="col-xs-11">
						<?php echo do_shortcode('[wp_rss_multi_importer category="1" showgroup="1"]'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="item facebook">
				<div class="container">
					<div class="row">
						<div class="col-xs-1">
							<i class="fa fa-facebook-f bg-col-facebook"></i>
						</div>
						<div class="col-xs-11">
						<?php echo do_shortcode('[wp_rss_multi_importer category="3" showgroup="1"]'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>