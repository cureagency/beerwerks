<?php if( have_rows('top_row') ): ?>
    <?php while( have_rows('top_row') ): the_row(); ?>

		<div class="image-row-cta-top-block" style="padding-bottom: 0;" id="<?php get_sub_field('anchor_tag');?>">
			<div class="image-row-cta-block-1" style="background-image:url(<?php the_sub_field('image_1'); ?>);">
			</div>
			<div class="image-row-cta-block-2" >
				<?php the_sub_field('cta_text'); ?>
			</div>
			<div class="image-row-cta-block-3" style="background-image:url(<?php the_sub_field('image_2'); ?>);">
			</div>
			<div class="image-row-cta-block-4" style="background-image:url(<?php the_sub_field('image_3'); ?>);">
			</div>
		</div>

    <?php endwhile; ?>
<?php endif; ?>	
<?php if( have_rows('bottom_row') ): ?>
    <?php while( have_rows('bottom_row') ): the_row(); ?>

		<div class="image-row-cta-bottom-block" style="padding-bottom: 0;">
			<div class="image-row-cta-block-5" style="background-image:url(<?php the_sub_field('image_1'); ?>);">
			</div>
			<div class="image-row-cta-block-6" style="background-image:url(<?php the_sub_field('image_2'); ?>);">
			</div>
			<div class="image-row-cta-block-7" style="background-image:url(<?php the_sub_field('image_3'); ?>);">
			</div>
			<div class="image-row-cta-block-8" style="background-image:url(<?php the_sub_field('image_4'); ?>);">
			</div>
		</div>

    <?php endwhile; ?>
<?php endif; ?>	
