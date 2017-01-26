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
		
		<noscript id="deferred-styles">
			<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/_/css/merged-style.css"/>
		</noscript>
		
	    <script>
	      var loadDeferredStyles = function() {
	        var addStylesNode = document.getElementById("deferred-styles");
	        var replacement = document.createElement("div");
	        replacement.innerHTML = addStylesNode.textContent;
	        document.body.appendChild(replacement)
	        addStylesNode.parentElement.removeChild(addStylesNode);
	      };
	      var raf = requestAnimationFrame || mozRequestAnimationFrame ||
	          webkitRequestAnimationFrame || msRequestAnimationFrame;
	      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
	      else window.addEventListener('load', loadDeferredStyles);
	    </script>

	</body>
</html>