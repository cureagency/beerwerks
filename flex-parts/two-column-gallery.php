 <?php $text = get_sub_field('text'); 
			            $anchor = get_sub_field('anchor_tag'); ?>
			             <div class="twocolumn-wrap" id="<?php echo $anchor; ?>">
			             	<div class="twocolumn">
				             	<div class="twocolumn-col" style="overflow: hidden;">
				             		<div class="beerwerksslider-container" >
					           		 	<?php

										// Check rows exists.
										if( have_rows('slides') ): ?>

										   <div class="beerwerksslider">

											   <?php while( have_rows('slides') ) : the_row();

											        // Load sub field value.
											        $img = get_sub_field('image'); 
											        $link = get_sub_field('link');
											        $slidetext = get_sub_field('slide_text'); ?>
											         
											         <div class="beerwerks-slide">
												         <div class="beerwerks-slide-imagebutton" style="background-image: url(<?php echo $img; ?>);">
															<div class="beerwerks-slide-imagebutton-text">
																<p><a class="beerwerks-slide-imagebutton-link" href="<?php echo $link; ?>"><?php echo $slidetext; ?></a></p>
															</div>
														</div>
													</div>
											    
											    <?php endwhile; ?>
											</div>
										</div>

									<script>
										jQuery(document).ready(function ($) {
										  $('.beerwerksslider').slick({
										    dots: true,
										    arrows: true,
										  });
										});
									</script>

									<?php else :
									    // Do something...
									endif; ?>
				           		 </div>
				           		 
				             	<div class="twocolumn-col">
				             		<div class="twocolumn-col-padding">
				           		 		<?php echo $text; ?>
				           		 	</div>
				           		</div>
			           		</div>
			           	 </div>