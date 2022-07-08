<?php 
	$images = get_field('gallery'); 
	 ?>
		<div class="singlecolumn" id="<?php echo $anchor; ?>">
		<h1><?php the_title();?>
		</h1>
					    <?php if( $images): ?>

							 <div class="row">

								<?php foreach( $images as $image): ?>
								<div class="col-lg-3">
									<img class="img-fluid" src="<?php echo $image ['sizes']['thumbnail']; ?>" >

								</div>
								<?php endforeach; ?>

							</div>

						<?php endif; ?>
		</div>