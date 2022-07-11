<?php
/**
 * The template for displaying all single breweries
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Beerwerks
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?while (have_posts()) : the_post();
		$mapLocation = get_field ('map_location');
		?>

			<div class="single-brewery-top">
				<?php   
						$thumb_id = get_post_thumbnail_id();
						$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
						$thumb_url = $thumb_url_array[0]; 
				?>
				<div class="single-brewery-top-left">
					<div class="single-brewery-top-left-text">
						<div class="yellow-line"></div>
						<h2><?php the_title(); ?></h2>
						<p>
							<?php the_field('header_text'); ?>
						</p>
						<?php if( get_field('website') ): ?>
						    <a href="<?php the_field('website'); ?>" target="_blank" class="whitebutton smallbutton">Learn More</a>
						<?php endif; ?>
						<a href="<?php echo get_home_url(); ?>/breweries-and-trail" target="_blank" class="borderbutton-white smallbutton">Back to Trail Map</a>
					</div>
					<img src="<?php echo $thumb_url ?>" class="single-brewery-top-bg-image">
					<div class="single-brewery-top-bg"></div>
				</div>

				<div class="single-brewery-top-right">

					<?php 
					$image = get_field('logo');
					if( !empty( $image ) ): ?>
					    <img class="single-brewery-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>					

					<div class="single-brewery-address">
						<div class="single-brewery-address-icon">
							<i class="fal fa-compass"></i>
						</div>
						<div class="single-brewery-address-text">
							<h4>Location</h4>
							<p>
								<?php the_title();?><br/>
								<?php the_field("address");?><br/>
								<?if (get_field("address2")) {?>
									<?php the_field("address2");?><br/>
								<?}?>
								<?php the_field("city");?>, <?php the_field("state");?> <?php the_field("zip");?>
							</p>
						</div>
					</div>
					<div class="single-brewery-address">
						<div class="single-brewery-address-icon">
							<i class="fal fa-phone"></i>
						</div>
						<div class="single-brewery-address-text">
							<h4>Contact</h4>
							<p>
								<?if (get_field("phone")) {?>
									<a href="tel:<?php the_field("phone");?>"><?php the_field("phone");?></a><br>
								<?}?>
								<?if (get_field("email") && 1==2) {?>
									<a href="mailto:<?php the_field("email");?>"><?php the_field("email");?></a><br>
								<?}?>

								<?if (get_field("facebook_link")) {?>
									<a style="margin-right: 6px;" href="<?php the_field("facebook_link");?>" target=_blank><i class="fab fa-facebook-f"></i></a>
								<?}?>
								<?if (get_field("instagram_link")) {?>
									<a href="<?php the_field("instagram_link");?>" target=_blank><i class="fab fa-instagram"></i></a>
								<?}?>
							</p>
						</div>
					</div>

				</div>
			</div>
			
			<div class="container">
				<div class="row large-bottom-padding large-top-padding">
					<div class="col-lg-3">
						<h2>About <span class="gold-text"> Us.</h2>
					</div>
					<div class="col-lg-9">
						<?php the_field('about_us_text'); ?>
					</div>
				</div>
			</div>

			<div class="container acf-map">
				<div class="row large-bottom-padding large-top-padding">
						<div class ="marker" data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>">
						</div>
				</div>
			</div>



			<div class="single-brewery-events-block" id="right-block">
				<div class="single-brewery-events-block-left">
					<h2>Drink Up and Explore</h2>
					<p>There’s so much to do all along the Beerwerks Trail. Explore what events are happening now.</p>
					<a href="<?php echo get_home_url(); ?>/events" class="yellowbutton smallbutton">View Events</a>
					<img src="<?php echo get_template_directory_uri(); ?>/images/rip-right.png" class="single-brewery-events-block-right-rip">
					<img src="<?php echo get_template_directory_uri(); ?>/images/stamp.png" class="single-brewery-events-block-left-stamp">
				</div>
				<div class="single-brewery-events-block-right" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/brewed-image.png);">
				</div>
			</div>


			<?php if( have_rows('image_grid') ): ?>
			    <?php while( have_rows('image_grid') ): the_row(); ?>
						<div class="image-grid">
							<div class="image-grid-1" style="background-image:url(<?php the_sub_field('image_1'); ?>);">
							</div>
							<div class="image-grid-column">
								<div class="image-grid-2" style="background-image:url(<?php the_sub_field('image_2'); ?>);">
								</div>	
								<div class="image-grid-3" style="background-image:url(<?php the_sub_field('image_3'); ?>);">
								</div>	
							</div>	
							<div class="image-grid-column">
								<div class="image-grid-4" style="background-image:url(<?php the_sub_field('image_4'); ?>);">
								</div>	
								<div class="image-grid-5" style="background-image:url(<?php the_sub_field('image_5'); ?>);">
								</div>	
							</div>	
						</div>
			    <?php endwhile; ?>
			<?php endif; ?>


			<div class="visit-band">
				<div class="visit-band-left">
					<h2>We Can't Wait for You To Visit!</h2>
					<p>Find out more about us on our website.</p>
				</div>
				<div class="visit-band-right">
					<?php if( get_field('website') ): ?>
						    <a href="<?php the_field('website'); ?>" target="_blank" class="whitebutton smallbutton">Learn More</a>
						<?php endif; ?>
						<a href="<?php echo get_home_url(); ?>/breweries-and-trail" target="_blank" class="borderbutton-white smallbutton">Back to Trail Map</a>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/images/badges-left.png" class="badges-left">
				<img src="<?php echo get_template_directory_uri(); ?>/images/badges-right.png" class="badges-right">
			</div>

		<?endwhile;?>
	</main><!-- #main -->
<?php
get_footer();