<div class="dark-gray-bg <?php the_sub_field('bottom_padding'); ?> <?php the_sub_field('top_padding'); ?> background-image" style="background-image:url(<?php the_sub_field('background_image'); ?>);" id="<?php the_sub_field('anchor_tag'); ?>">
	<div class="container">
		<div class="row small-bottom-padding align-items-center">
			<div class="col-lg-5">
				<?php the_sub_field('text_col1'); ?>
			</div>
			<div class="col-lg-7">
				<?php the_sub_field('text_col2'); ?>
			</div>
		</div>
		<div class="row row-eq-height">
			<?php if( have_rows('image_links') ): ?>
			    <?php while( have_rows('image_links') ): the_row(); ?>
		        	<div class="col-lg-3">
		        		<a href="<?php the_sub_field('link'); ?>">
		        			<div class="img-page-card">
		        				<div class="img-page-card-img background-image" style="background-image:url(<?php the_sub_field('image'); ?>);">
		        				</div>
		        				<div class="img-page-card-text">		        				
		        					<p><?php the_sub_field('text'); ?></p>
									<i class="fa-solid fa-angle-right"></i>
		        				</div>
		        			</div>
		        		</a>
					</div>
			    <?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>