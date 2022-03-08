  <?php $text = get_sub_field('text');
        $imgdt = get_sub_field('image');
        $imgm = get_sub_field('image_mobile');
        $anchor = get_sub_field('anchor_tag'); ?>
        
         <div class="topsection-wrap" id="<?php echo $anchor; ?>">
             <div class="topsection" style="background-image: url( <?php echo get_template_directory_uri(); ?>/images/topbg@2x.png ); background-size: cover; background-position: center center;">
             	<?php echo $text; ?>
             	<p style="text-align: center;"><a href="#quiz"><span class="arrow-down"><i class="fal fa-angle-down"></i></span></a></p>
             </div>
         </div>
         <img class="topsection-img-desktop" src="<?php echo $imgdt; ?>">
         <img class="topsection-img-mobile" src="<?php echo $imgm; ?>">