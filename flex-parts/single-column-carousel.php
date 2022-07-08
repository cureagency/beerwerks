<?php 
	$images = get_field('gallery'); 
	$anchor = get_sub_field('anchor_tag'); ?>
		<div class="singlecolumn" id="<?php echo $anchor; ?>">
		<h1><?php the_title();?>
		</h1>
					    <?php if( $images): ?>

							 <div class="row">

								<?php foreach( $images as $image): ?>
								<div class="col-lg-3">
									<img src = <?php echo $image ['sizes']['thumbnail']; ?> class ="img-fluid">
								</div>
								<?php endforeach; ?>

							</div>

						<?php endif; ?>
		</div>