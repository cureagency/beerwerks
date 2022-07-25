<div class="map-brewery-top">
<div class="map-brewery-top-wrap">
		<?php if( have_rows('map_section') ): ?>
   		<?php while( have_rows('map_section') ): the_row(); ?>
				<div class="map-brewery-top-text">
					<?php the_sub_field('text'); ?>
				</div>	
		<?php endwhile; ?>
		<?php endif; ?>					
</div>
</div>

<div class="map-brewery-middle">
<div class="map acf-map" id="map">
					<?php if( have_rows('brewery_list') ): ?>
					<?php while( have_rows('brewery_list') ): the_row(); ?>
				 	<?php 
				 		$args = array( 'post_type' => 'brewery', 'posts_per_page'=>-1);
						$query = new WP_Query( $args);
				  	?>
				 	<?php while ($query -> have_posts()) : $query -> the_post(); ?>
				  	<?php	
				  		$mapLocation = get_field('map_location');
						$region = get_field('region');
				  		if (!empty($mapLocation)): ?>
					<?php $mapLocation = get_field('map_location');?>
						<?php if (get_field('region') == 'Zone A'): ?> 
				  			<div class ="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
						  <p class = "region-a-marker"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						  <br/>
						  <span class ="region-label"><a href="#zoneAanchor"><?php the_field('region'); ?></a></span></p>
						  <?php echo $mapLocation['address'] ?><br/>
						  <p class ="region-a-marker region-label"><a href="<?php the_permalink() ?>">Learn More</a> &nbsp; <a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $mapLocation['address']; ?>" target="_blank"><?php _e('Get Directions','yourtheme'); ?></a></p>
						</div>	
						<?php endif; ?>	
						<?php if (get_field('region') == 'Zone B'): ?> 
				  			<div class ="markerb" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
						  <p class = "region-b-marker"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						  <br/>
						  <span class ="region-label"><a href="#zoneBanchor"><?php the_field('region'); ?></a></span></p>
						  <?php echo $mapLocation['address'] ?><br/>
						  <p class ="region-b-marker region-label"><a href="<?php the_permalink() ?>">Learn More</a> &nbsp; <a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $mapLocation['address']; ?>" target="_blank"><?php _e('Get Directions','yourtheme'); ?></a></p>
						</div>	
						<?php endif; ?>	
						<?php if (get_field('region') == 'Zone C'): ?> 
				  			<div class ="markerc" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
						  <p class = "region-c-marker"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
						  <br/>
						  <span class ="region-label"><a href="#zoneCanchor"><?php the_field('region'); ?></a></span></p>
						  <?php echo $mapLocation['address'] ?><br/>
						  <p class ="region-c-marker region-label"><a href="<?php the_permalink() ?>">Learn More</a> &nbsp; <a href="https://www.google.com/maps?saddr=My+Location&daddr=<?php echo $mapLocation['address']; ?>" target="_blank"><?php _e('Get Directions','yourtheme'); ?></a></p>
						</div>	
						<?php endif; ?>		
					<?php endif; ?>			  
					<?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>
					<?php endwhile; ?>
					<?php endif; ?>	
					
				</div>
</div>

<div class="map-brewery-list-wrap">
<?php if( have_rows('brewery_list') ): ?>
    <?php while( have_rows('brewery_list') ): the_row(); 
	?>
				<div class="map-brewery-list-text">
					<?php the_sub_field('text'); ?>
				</div>	

				<div class= "brewery-headinga">
						<h2>ZONE A</h2>
						<p>Includes Harrisonburg, Elkton, and Rockingham County</p>
</div>
				<div class="map-brewery-list-list">
				 <?php 
				 	$args = array( 'post_type' => 'brewery', 'posts_per_page'=>-1, 'orderby'=>'title', 'order'=>'ASC');
					$loop = new WP_Query( $args);
				  ?>
				  <?php while ($loop -> have_posts()) : $loop -> the_post(); ?>
				  <?php if (get_field('region') == 'Rockingham County'): ?>
				  		<div class="brewery-list-card">
				  			<div class="brewery-list-card-top" id="brewerieslist">
						  		<?php   
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0]; 

								?>
								<?php 
								$image = get_field('logo');
								if( !empty( $image ) ): ?>
									<div class="single-brewery-logo-wrap">
								    	<img class="single-brewery-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								    </div>
								<?php endif; ?>	
								<p class="brewery-list-card-location"><i class="fas fa-map-marker-alt"></i> <?php the_field('city');?></p>				
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							</div>
							<div class="brewery-list-card-link">
								<a href="<?php the_permalink() ?>">Learn More <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
						<?php endif; ?>
				  <?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>
				</div>

				<div class= "brewery-headingb">
						<h2>ZONE B</h2>
						<p>Includes Waynesboro, Staunton, and Augusta County</p>
</div>
				<div class="map-brewery-list-list">
				 <?php 
				 	$args = array( 'post_type' => 'brewery', 'posts_per_page'=>-1, 'orderby'=>'title', 'order'=>'ASC');
					$loop = new WP_Query( $args);
				  ?>
				  <?php while ($loop -> have_posts()) : $loop -> the_post(); ?>
				  <?php if (get_field('region') == 'Augusta County'): ?>
				  		<div class="brewery-list-card">
				  			<div class="brewery-list-card-top" id="brewerieslist">
						  		<?php   
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0]; 
								?>
								<?php 
								$image = get_field('logo');
								if( !empty( $image ) ): ?>
									<div class="single-brewery-logo-wrap">
								    	<img class="single-brewery-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								    </div>
								<?php endif; ?>	
								<p class="brewery-list-card-location"><i class="fas fa-map-marker-alt"></i> <?php the_field('city');?></p>				
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							</div>
							<div class="brewery-list-card-link">
								<a href="<?php the_permalink() ?>">Learn More <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
						<?php endif; ?>
				  <?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>
				</div>

	
				<div class= "brewery-headingc">
						<h2>ZONE C</h2>
						<p>Includes Lexington, Natural Bridge, and Rockbridge County</p>
</div>
				<div class="map-brewery-list-list">
				 <?php 
				 	$args = array( 'post_type' => 'brewery', 'posts_per_page'=>-1, 'orderby'=>'title', 'order'=>'ASC');
					$loop = new WP_Query( $args);
				  ?>
				  <?php while ($loop -> have_posts()) : $loop -> the_post(); ?>
				  <?php if (get_field('region') == 'Rockbridge County'): ?>
				  		<div class="brewery-list-card">
				  			<div class="brewery-list-card-top" id="brewerieslist">
						  		<?php   
								$thumb_id = get_post_thumbnail_id();
								$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
								$thumb_url = $thumb_url_array[0]; 
								?>
								<?php 
								$image = get_field('logo');
								if( !empty( $image ) ): ?>
									<div class="single-brewery-logo-wrap">
								    	<img class="single-brewery-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								    </div>
								<?php endif; ?>	
								<p class="brewery-list-card-location"><i class="fas fa-map-marker-alt"></i> <?php the_field('city');?></p>				
								<a href="<?php the_permalink() ?>"><p><?php the_title(); ?></p></a>
							</div>
							<div class="brewery-list-card-link">
								<a href="<?php the_permalink() ?>">Learn More <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
						<?php endif; ?>
				  <?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>			
				</div>
    <?php endwhile; ?>
<?php endif; ?>	
</div>
