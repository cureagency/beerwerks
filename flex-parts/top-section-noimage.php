  <?php $text = get_sub_field('text'); 
    $anchor = get_sub_field('anchor_tag'); ?>
     <div class="topsection-wrap" id="<?php echo $anchor; ?>">
         <div class="topsection-noimage" style="background-image: url( <?php echo get_template_directory_uri(); ?>/images/topbg@2x.png ); background-size: cover; background-position: center center;">
         	<?php echo $text; ?>
         </div>
     </div>