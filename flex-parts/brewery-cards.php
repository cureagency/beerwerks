<?php $anchor = get_sub_field('anchor_tag'); ?>
			             <div class="brewerycards-wrapper" id="<?php echo $anchor; ?>">
			             	<div class="brewerycards-description-col">
				           		<?php if( have_rows('description_column') ): ?>
								    <?php while( have_rows('description_column') ): the_row();  ?>
								        <img class="standardimage" src="<?php the_sub_field('image'); ?>">
								        <?php the_sub_field('text'); ?>
								    <?php endwhile; ?>
								<?php endif; ?>
							</div>
							<div class="brewerycards-card-col">
								<?php $i = 1; if( have_rows('brewery_details') ): ?>
									<div class="brewerycard-row">
									    <?php while( have_rows('brewery_details') ): the_row(); ?>

									        <div class="brewerycard">
									        	<div class="brewerycard-inside">
										        	<img class="brewerylogo" src="<?php the_sub_field('logo'); ?>">
										        	 <h4><?php the_sub_field('name'); ?></h4>
										        	 <p style="margin-bottom: 5px; margin-top: 0;">
										        	 	<span style="text-transform: uppercase; color: #87878c; font-size: 14px; font-weight: 700;">Known For</span><br>
										        	 	<?php the_sub_field('known_for'); ?>
										        	 </p>
										        	  <p style="margin-bottom: 5px; margin-top: 0;">
										        	 	<span style="text-transform: uppercase; color: #87878c; font-size: 14px; font-weight: 700;">Location</span><br>
										        	 	<?php the_sub_field('location'); ?>
										        	 </p>
														<p>
															<?php if( get_sub_field('website') ): ?>
																<a target="_blank" href="<?php the_sub_field('website'); ?>"><span class="social-button"><i class="fas fa-link"></i></span></a> 
															<?php endif; ?>

															<?php if( get_sub_field('instagram') ): ?>
																<a target="_blank" href="<?php the_sub_field('instagram'); ?>"><span class="social-button"><i class="fab fa-instagram"></i></span></a>
															<?php endif; ?>

															<?php if( get_sub_field('facebook') ): ?>
																<a target="_blank" href="<?php the_sub_field('facebook'); ?>"><span class="social-button"><i class="fab fa-facebook-f"></i></span></a>
															<?php endif; ?>
														</p>

										        </div>
									        </div>
									        <?php if($i % 3 == 0) {echo '</div><div class="brewerycard-row">';}
               								$i++; endwhile; ?>
									</div>
								<?php endif; ?>
							</div>
			           	 </div>