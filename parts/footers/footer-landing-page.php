		
		<?php include (STYLESHEETPATH . '/_/inc/global/no-script.inc'); ?>
		
		<script>
	      var loadDeferredStyles = function() {
	        var addStylesNode = document.getElementById("deferred-styles");
	        var replacement = document.createElement("div");
	        replacement.innerHTML = addStylesNode.textContent;
	        document.body.appendChild(replacement);
	        addStylesNode.parentElement.removeChild(addStylesNode);
	        document.body.classList.remove("atfc-desktop-css");
	      };
	      var raf = requestAnimationFrame || mozRequestAnimationFrame || webkitRequestAnimationFrame || msRequestAnimationFrame;
	      if (raf) { raf(function() { window.setTimeout(loadDeferredStyles, 0); });
	     } else { window.addEventListener('load', loadDeferredStyles); }
		 </script>
    
		<?php wp_footer(); ?>

	</body>
</html>