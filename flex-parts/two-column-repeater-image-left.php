 <?php $title = get_sub_field('title'); ?>
 <div class="twocolumn-wrap" id="<?php get_sub_field('anchor_tag');?>" style="margin-top: 0; padding-top: 0;">
 	<div class="yellow-onecolumn">
 		<h2 style="text-align: center; margin-bottom: 50px;"><?php echo $title; ?></h2>
 	</div>
		<?php if( have_rows('section') ): ?>
	    <?php while( have_rows('section') ): the_row();  
	    	$text = get_sub_field('text');
	    	$img = get_sub_field('image'); ?>
         	<div class="twocolumn" style="margin-bottom: 25px;">
             	<div class="twocolumn-repeater-col">
           		 	<img src="<?php echo $img; ?>">
           		 </div>
             	<div class="twocolumn-col">
             		<div class="twocolumn-col-padding">
           		 		<?php echo $text; ?>
           		 	</div>
           		</div>
       		</div>
	    <?php endwhile; ?>
	<?php endif; ?>
	 </div>