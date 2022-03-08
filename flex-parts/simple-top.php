<?php 
if( get_sub_field('content_alignment') == 'center' ) { ?>
	<div class="container-fluid simple-top background-image" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
		<div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6" style="text-align: center !important;">
				<?php the_sub_field('text'); ?>
				<?php 
				if( get_sub_field('arrow') == 'includearrow' ) { ?>
					<div class="down-arrow" style="margin-top: 100px;">
						<a href="<?php the_sub_field('arrow_anchor_link'); ?>"><i class="fal fa-arrow-circle-down"></i></a>
					</div>
				<?php } ?>
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>

<?php } ?>
<?php 
if( get_sub_field('content_alignment') == 'left' ) { ?>
	<div class="simple-top background-image" style="background-image:url(<?php the_sub_field('background_image'); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<?php the_sub_field('text'); ?>
					<?php 
					if( get_sub_field('arrow') == 'includearrow' ) { ?>
						<div class="down-arrow" style="margin-top: 100px;">
							<a href="<?php the_sub_field('arrow_anchor_link'); ?>"><i class="fal fa-arrow-circle-down"></i></a>
						</div>
					<?php } ?>
				</div>
				<div class="col-lg-6">
				</div>
			</div>
		</div>
	</div>

<?php } ?>

