<?php 
$section_title = "Our Team";	
$quick_links[] = ['link_title' => $section_title, 'link_anchor' => 'our-team'];	
$profiles_total = count($profiles);
//echo '<pre class="debug">';print_r($profiles);echo '</pre>';
?>
<section id="our-team-section" class="pg-section bg-col-<?php echo (!empty($color)) ? $color : 'red'; ?>">
	<a name="our-team" id="our-team" class="section-target"></a>
	<div class="overlay"></div>
	<div class="container">
		<h2 class="text-center section-header bg-col-grayDk"><?php echo $section_title; ?></h2>
	</div>
	
	<div class="our-team-wrapper">
		<div id="our-team-wrapper-inner" class="wrapper-inner" style="left: 0px; width: <?php echo (300 * $profiles_total) + 160; ?>px">
			<?php foreach ($profiles as $post) : ?>
			<?php
			setup_postdata($post);	 
			$position = get_field('position');
			$email = get_field('email');
			$departments = get_field('departments');
			$profile_img = get_field('profile_img'); 
			?>
			<article class="team-profile txt-closed">
				<div class="profile-inner">
					<div class="profile-img" style="background-image: url(<?php echo $profile_img['sizes']['profile-thumb']; ?>);"></div>
					<header class="profile-info">
						<h3><?php the_title(); ?></h3>
						<div class="email"><a href="mailto: <?php echo $email; ?>"><?php echo $email; ?></a></div>
					</header>
					<div class="profile-txt txt-hide">
						<div class="position caps font-slab-serif">
							<?php if ($position != "Senior Partner") { ?>
							<span>Department</span>
							<?php } ?>

							<?php echo $position; ?>
						</div>
						<?php the_content(); ?>
						<button class="btn profile-info-btn"><span class="sr-only">View bio</span></button>
					</div>
				</div>
			</article>
			<?php endforeach; ?>	
			<?php wp_reset_postdata(); ?>	
		</div>
	</div>
	
	<div class="scroll-btns text-center">
		<button id="scroll-start-btn" class="btn disabled"><i class="fa fa-angle-double-left"></i><span class="sr-only">Scroll to start</span></button>
		<button id="scroll-left-btn" class="btn disabled"><i class="fa fa-angle-left"></i><span class="sr-only">Scroll left</span></button>
		<button id="scroll-right-btn" class="btn"><i class="fa fa-angle-right"></i><span class="sr-only">Scroll right</span></button>
		<button id="scroll-end-btn" class="btn"><i class="fa fa-angle-double-right"></i><span class="sr-only">Scroll to end</span></button>
	</div>
	
</section>