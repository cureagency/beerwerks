<?php
/**
 * Template Name: Blog Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beerwerks
 */

get_header();
?>

<div id="container">
	<div id="content" role="main">

		<div class="container-fluid simple-top">
			<div class="row">
				<div class="col">
					<?php the_post(); ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col pb-5">


					<?php 
					  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 0 ) ); 
					  ?>
					  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

							<div class="blog-cta-left-card" style="min-height: 500px;">
								
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="blog-cta-left-card-image" style="background-image:url('<?php the_post_thumbnail_url();?>');">
									</div>
								<?php else : ?>
									<?php 
									$images = get_field('placeholder_blog_images', 'option');
									$rand = array_rand($images, 1);
										
									if( $images ): ?>
										<div class="blog-cta-left-card-image" style="background-image:url('<?php echo $images[$rand]['url']; ?>');">
									    </div>
									<?php endif; ?>
								<?php endif; ?>

								<div class="blog-cta-left-card-text">
									<div>
										<p class="blog-date"><?php echo get_the_date(); ?></p>
										<p class="blog-title"><?php the_title(); ?></p>
										<p class="blog-paragraph">
											<?php
											$excerpt = get_the_excerpt();
											 
											$excerpt = substr($excerpt, 0, 260);
											$result = substr($excerpt, 0, strrpos($excerpt, ' '));
											echo $result;
											?>
										</p>
										<a href="<?php the_permalink() ?>" class="blog-link">Read More</a>
									</div>
								</div>
							</div>

					  <?php 
					  endwhile;
					  wp_reset_postdata();
					  ?>
					</div>
				</div>

				

				<div class="row">
				  <?php 
				  $the_query = new WP_Query( array( 'posts_per_page' => -1,'offset' => 2 ) ); 
				  ?>
				  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					
					<div class="col-lg-6 pb-5">
						<div class="blog-cta-left-card">
							<?php if ( has_post_thumbnail() ) : ?>
									<div class="blog-cta-left-card-image" style="background-image:url('<?php the_post_thumbnail_url();?>');">
									</div>
								<?php else : ?>
									<?php 
									$images = get_field('placeholder_blog_images', 'option');
									$rand = array_rand($images, 1);
										
									if( $images ): ?>
										<div class="blog-cta-left-card-image" style="background-image:url('<?php echo $images[$rand]['url']; ?>');">
									    </div>
									<?php endif; ?>
								<?php endif; ?>
							<div class="blog-cta-left-card-text">
								<div>
									<p class="blog-date"><?php echo get_the_date(); ?></p>
									<p class="blog-title"><?php the_title(); ?></p>
									<p class="blog-paragraph">
										<?php
										$excerpt = get_the_excerpt();
										 
										$excerpt = substr($excerpt, 0, 260);
										$result = substr($excerpt, 0, strrpos($excerpt, ' '));
										echo $result;
										?>
									</p>
									<a href="<?php the_permalink() ?>" class="blog-link">Read More</a>
								</div>
							</div>
						</div>
					</div>

				  <?php 
				  endwhile;
				  wp_reset_postdata();
				  ?>
				</div>

			</div>	

	</div><!-- #content -->
</div><!-- #container -->

<?php get_template_part( 'flex-parts/footer-newsletter-banner' ); ?>

<?php get_footer(); ?>