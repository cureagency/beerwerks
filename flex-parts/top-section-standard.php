<div class="top-section-standard <?php the_sub_field('orientation'); ?>"> 
	
	<div class="top-section-standard-left background-image" style="background-image:url(<?php the_sub_field('top_image'); ?>);">
	</div>

	<div class="top-section-standard-right">
		<div class="top-section-standard-right-text">
			<?php the_sub_field('top_text'); ?>
			<div class="down-arrow">
				<a href="<?php the_sub_field('arrow_anchor_link'); ?>"><i class="fal fa-arrow-circle-down"></i></a>
			</div>
		</div>
	</div>
	<img src="<?php echo get_template_directory_uri(); ?>/images/standard-badge.png" class="standard-badge">
</div>