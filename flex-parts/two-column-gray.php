 <?php $text = get_sub_field('text'); 
        $img = get_sub_field('image'); 
        $anchor = get_sub_field('anchor_tag'); ?>
         <div class="twocolumn-gray-wrap" id="<?php echo $anchor; ?>" style="background-image: url( <?php echo get_template_directory_uri(); ?>/images/graybg@2x.png ); background-size: cover; background-position: center center;">
         	<div class="twocolumn">
             	<div class="twocolumn-col">
           		 	<img src="<?php echo $img; ?>">
           		 </div>
             	<div class="twocolumn-col">
             		<div class="twocolumn-col-padding">
           		 		<?php echo $text; ?>
           		 	</div>
           		</div>
       		</div>
       	 </div>