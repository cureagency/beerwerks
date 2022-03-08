	<div class="container <?php the_sub_field('bottom_padding'); ?> <?php the_sub_field('top_padding'); ?>" id="<?php the_sub_field('anchor_tag'); ?>">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<?php if( have_rows('column_1') ): ?>
    				<?php while( have_rows('column_1') ): the_row(); ?>
						<?php the_sub_field('description'); ?>

						<?php if( have_rows('buttons') ): ?>
		    				<?php while( have_rows('buttons') ): the_row(); ?>
								<div class="button-row">
									<a href="<?php the_sub_field('url'); ?>">
										<?php the_sub_field('link_text'); ?>
									</a>
									<div class="button-row-arrow">
										<i class="fa-solid fa-angle-right"></i>
									</div>
								</div>
						    <?php endwhile; ?>
						<?php endif; ?>

				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="col-lg">
			</div>
			<div class="col-lg-6">
				<?php if( have_rows('column_2') ): ?>
    				<?php while( have_rows('column_2') ): the_row(); ?>

    					<div class="row align-items-center">
    						<div class="col-lg-6">
								<div class="image-1 background-image" style="background-image:url(<?php the_sub_field('image_1'); ?>);">
								</div>
								<div class="image-2 background-image" style="background-image:url(<?php the_sub_field('image_2'); ?>);">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="image-3 background-image" style="background-image:url(<?php the_sub_field('image_3'); ?>);">
								</div>
							</div>
						</div>

				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>