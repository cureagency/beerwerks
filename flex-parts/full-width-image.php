   <?php $imgdt = get_sub_field('image_desktop');
    $imgm = get_sub_field('image_mobile');
    $anchor = get_sub_field('anchor_tag'); ?>
    
     <img class="fullwidth-img-desktop" src="<?php echo $imgdt; ?>" id="<?php get_sub_field('anchor_tag');?>">
     <img class="fullwidth-img-mobile" src="<?php echo $imgm; ?>" id="<?php get_sub_field('anchor_tag');?>">