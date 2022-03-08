<div class="top-section-home"> 
	<div class="top-section-home-left background-image" style="background-image:url(<?php the_sub_field('top_image'); ?>);">
	</div>
	<div class="top-section-home-right">
		<div class="top-section-home-right-text">
			<?php the_sub_field('top_text'); ?>
		</div>
	</div>
	<img src="<?php the_sub_field('top_stamp'); ?>" class="top-stamps">
	<img src="<?php echo get_template_directory_uri(); ?>/images/text-band.png" class="top-text-band">
</div>

<div class="top-section-home-second"> 
	<div class="top-section-home-second-text">
		<?php the_sub_field('centered_text'); ?>
	</div>
	<img src="<?php the_sub_field('side_image_left'); ?>" class="stamps-left">
	<img src="<?php the_sub_field('side_image_right'); ?>" class="stamps-right">
</div>