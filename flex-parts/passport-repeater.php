<div class="passport-repeater-wrap-bg" id="<?php the_sub_field('anchor_tag'); ?>"> 
	<div class="passport-red-bg">
	</div>	
	<div class="passport-yellow-line-bg">
	</div>	
	<div class="passport-repeater-wrap"> 	
		
			<?php

			// Check rows exists.
			if( have_rows('row') ):

			    // Loop through rows.
			    while( have_rows('row') ) : the_row(); ?>

			        <div class="passport-repeater"> 
				
						<div class="passport-repeater-image background-image" style="background-image:url(<?php the_sub_field('image'); ?>);">
						</div>

						<div class="passport-repeater-text">
							<div class="passport-repeater-text-wrap">
								<?php the_sub_field('text'); ?>
							</div>
						</div>

						<div class="passport-repeater-number-wrap"> 
							<div class="passport-repeater-number"> 
								<p><?php the_sub_field('number'); ?></p>
							</div>
						</div>

					</div>

			   <?php endwhile;

			else :
			    // Do something...
			endif; ?>

	</div>
</div>