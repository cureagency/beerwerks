 <?php $text = get_sub_field('text'); 
			            $img = get_sub_field('image'); 
			            $anchor = get_sub_field('anchor_tag'); ?>
			             <div class="twocolumn-imagelink-wrap" id="<?php echo $anchor; ?>">
			             	<div class="twocolumn">
				             	<div class="twocolumn-thirds-1col">
				           		 	<img src="<?php echo $img; ?>">
				           		 </div>
				             	<div class="twocolumn-thirds-2col">
				             		<div class="twocolumn-col-padding">
				           		 		<?php echo $text; ?>
				           		 	</div>
				           		</div>
			           		</div>
			           	 </div>
			           	 <div class="fourcolumn-wrap">
			           	 	<div class="fourcolumn">
			           	 		<div class="fourcolumn-col">
			           	 			<?php
									$link_1 = get_sub_field('link_1');
									if( $link_1 ): ?>
									    <div class="imagebutton" style="background-image: url(<?php echo esc_url( $link_1['background_image'] ); ?>);">
											<div class="imagebutton-text">
												<p><?php echo ( $link_1['text'] ); ?></p>
											</div>
											<div class="imagebutton-button">
												<p><i class="far fa-chevron-right"></i></p>
											</div>
											<a class="imagebutton-link" href="<?php echo ( $link_1['url'] ); ?>"></a>
										</div>
									<?php endif; ?>
			           	 		</div>
			           	 		<div class="fourcolumn-col">
			           	 			<?php
									$link_2 = get_sub_field('link_2');
									if( $link_2 ): ?>
									    <div class="imagebutton" style="background-image: url(<?php echo esc_url( $link_2['background_image'] ); ?>);">
											<div class="imagebutton-text">
												<p><?php echo ( $link_2['text'] ); ?></p>
											</div>
											<div class="imagebutton-button">
												<p><i class="far fa-chevron-right"></i></p>
											</div>
											<a class="imagebutton-link" href="<?php echo ( $link_2['url'] ); ?>"></a>
										</div>
									<?php endif; ?>
			           	 		</div>
			           	 		<div class="fourcolumn-col">
			           	 			<?php
									$link_3 = get_sub_field('link_3');
									if( $link_3 ): ?>
									    <div class="imagebutton" style="background-image: url(<?php echo esc_url( $link_3['background_image'] ); ?>);">
											<div class="imagebutton-text">
												<p><?php echo ( $link_3['text'] ); ?></p>
											</div>
											<div class="imagebutton-button">
												<p><i class="far fa-chevron-right"></i></p>
											</div>
											<a class="imagebutton-link" href="<?php echo ( $link_3['url'] ); ?>"></a>
										</div>
									<?php endif; ?>
			           	 		</div>
			           	 		<div class="fourcolumn-col">
			           	 			<?php
									$link_4 = get_sub_field('link_4');
									if( $link_4 ): ?>
									    <div class="imagebutton" style="background-image: url(<?php echo esc_url( $link_4['background_image'] ); ?>);">
											<div class="imagebutton-text">
												<p><?php echo ( $link_4['text'] ); ?></p>
											</div>
											<div class="imagebutton-button">
												<p><i class="far fa-chevron-right"></i></p>
											</div>
											<a class="imagebutton-link" href="<?php echo ( $link_4['url'] ); ?>"></a>
										</div>
									<?php endif; ?>
			           	 		</div>
			           	 	</div>
			           	 </div>