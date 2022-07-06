<?php if( have_rows('map_section') ): ?>
    <?php while( have_rows('map_section') ): the_row(); ?>
		<div class="map-brewery-top">
			<div class="map-brewery-top-wrap">
				<div class="map-brewery-top-text">
					<?php the_sub_field('text'); ?>
				</div>		
				<div class="map-brewery-top-map">
					<div id="map"></div>
					<script async defer
					    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzyOu7LZfkLOnYkCVO4gpln9kKO0TYpfs&callback=initMap">
					</script>
				</div>



			</div>
		</div>
    <?php endwhile; ?>
<?php endif; ?>	

<?php if( have_rows('brewery_list') ): ?>
    <?php while( have_rows('brewery_list') ): the_row(); ?>
			<div class="map-brewery-list-wrap">
				<div class="map-brewery-list-text">
					<?php the_sub_field('text'); ?>
				</div>	
				<div class="map-brewery-list-list">
				 <?php 
				 	$args = array( 'post_type' => 'brewery', 'posts_per_page'=>-1, 'meta_key' => 'city', 'orderby'=>'meta_value', 'order'=>'ASC');
					$loop = new WP_Query( $args);
				  ?>
				  <?php while ($loop -> have_posts()) : $loop -> the_post(); 
				  ?>
						<h2 class="brewery-city-header"><?php the_field('city');?></h2>				
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
				  <?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>
				</div>	
			</div>
    <?php endwhile; ?>
<?php endif; ?>	