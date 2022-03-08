 <?php $text = get_sub_field('text'); 
$image = get_sub_field('bg_image');
$anchor = get_sub_field('anchor_tag'); ?>
<div class="single_column_image_cta" style="background-image: url( '<?php echo $image; ?>' ); background-size: cover; background-position: center center;" id="<?php echo $anchor; ?>">
     <div class="singlecolumn">
   		 <?php echo $text; ?>
   	 </div>
</div>