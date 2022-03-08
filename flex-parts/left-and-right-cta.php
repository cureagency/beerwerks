<?php if( have_rows('right') ): ?>
    <?php while( have_rows('right') ): the_row(); ?>
    	<?php if( get_sub_field('image') ): ?>
			<div class="single-brewery-events-block" style="padding-bottom: 0;" id="<?php get_sub_field('anchor_tag');?>">
				<div class="single-brewery-events-block-right" style="background-image:url(<?php the_sub_field('image'); ?>);">
				</div>
				<div class="single-brewery-events-block-left" >
					<img src="<?php echo get_template_directory_uri(); ?>/images/rip-left.png" class="single-brewery-events-block-left-rip">
					<?php the_sub_field('text'); ?>
				</div>
			</div>
		<?php endif; ?>			
    <?php endwhile; ?>
<?php endif; ?>	

<?php if( have_rows('left') ): ?>
    <?php while( have_rows('left') ): the_row(); ?>
     	<?php if( get_sub_field('image') ): ?>
			<div class="single-brewery-events-block" id="right-block">
				<div class="single-brewery-events-block-left" id="<?php get_sub_field('anchor_tag');?>">
					<?php the_sub_field('text'); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/rip-right.png" class="single-brewery-events-block-right-rip">
					<img src="<?php echo get_template_directory_uri(); ?>/images/stamp.png" class="single-brewery-events-block-left-stamp">
				</div>
				<div class="single-brewery-events-block-right" style="background-image:url(<?php the_sub_field('image'); ?>);">
				</div>
			</div>
		<?php endif; ?>	
	<?php endwhile; ?>
<?php endif; ?>		