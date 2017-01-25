<noscript>
		
<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>

	<div class="no-script-wrap">
		<div class="no-script-inner-wrap">
	
			<div class="no-script-inner">
				<?php echo $no_script_notice; ?>
				<a href="<?php echo get_option('home'); ?>" title="refresh" class="btn btn-default btn-lg btn-block">Refresh</a>
			</div>
		
		</div>
	</div>
	
</noscript>
