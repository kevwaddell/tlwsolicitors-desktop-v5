<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head id="www-wordpress-test-dev" data-template-set="tlw-base-theme">
	<style>body{opacity: 0;}</style>
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?>
	
	<meta name="viewport" content ="width=device-width,user-scalable=yes" />
	<meta name="format-detection" content="telephone=yes">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<style><?php readfile(get_stylesheet_directory() . '/_/css/criticalCSS.css'); ?></style>
<!-- 	<script id="loadcss"><?php readfile(get_stylesheet_directory() . '/_/js/loadCSS-min.js');  ?></script> -->
	
	<?php wp_head(); ?>
	
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

</head>

<body id="login" <?php body_class('atfc-desktop-css'); ?>>
	
	<section id="user-wrap">