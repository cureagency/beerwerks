<?php 
	$images = get_field('gallery'); 
	$anchor = get_sub_field('anchor_tag'); ?>
		<div class="twocolumn-wrap" id="<?php echo $anchor; ?>">
			<div class="twocolumn">
				<div class="twocolumn-col" style="overflow: hidden;">
				    <div class="beerwerksslider-container" >
					    <?php
							// Check if there are images.
									if( $images): ?>

										   <div class="row">

											   <?php foreach( $images as $image): ?>

											        <div class="col-lg-3">
														<img src=<?php echo $image ['sizes']['thumbnail']; ?> class ="img-fluid"/>
													</div>
											    
											    <?php endforeach; ?>
											</div>

							<?php endif; ?>
				        </div>
				           		 
				             	<div class="twocolumn-col">
				             		<div class="twocolumn-col-padding">
				           		 		<?php echo $text; ?>
				           		 	</div>
				           		</div>
			    </div>
			</div>
		</div>