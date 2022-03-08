  <?php $text = get_sub_field('text');
    $img = get_sub_field('image'); 
    $anchor = get_sub_field('anchor_tag'); ?>
    
     <div class="footerbanner-wrap" id="<?php echo $anchor; ?>">
         <div class="footerbanner">
         	<div class="bannercolumn-text">
         		<div class="bannercolumn-text-center">
         			<?php echo $text; ?>
         		</div>
         	</div>
         	<div class="bannercolumn-img">
         		<img src="<?php echo $img; ?>">
         	</div>
         </div>
     </div>