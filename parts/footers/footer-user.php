		</section>
		
		<noscript>
		
		<?php $no_script_notice = get_field('no_script_notice', 'option'); ?>
		
			<div class="no-script-wrap">
				<div class="no-script-inner">
					<?php echo $no_script_notice; ?>
					<a href="/" title="refresh" class="btn btn-default btn-lg btn-block btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
				</div>
			</div>
			
		</noscript>

				
		<?php wp_footer(); ?>

	</body>
</html>