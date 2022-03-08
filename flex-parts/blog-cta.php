<div class="blog-cta" id="<?php get_sub_field('anchor_tag');?>">
	<div class="blog-cta-title" >
		<?php the_sub_field('title'); ?>
	</div>
	<div class="blog-cta-button" >
		<p><a class="yellowbutton" href="<?php the_sub_field('url'); ?>">Check Out The Blog</a></p>
	</div>
</div>
<div class="blog-cta-pull" >
	<div class="blog-cta-left" >
		<?php 
		  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 0 ) ); 
		  ?>
		  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="blog-cta-left-card">
					<div class="blog-cta-left-card-image" style="background-image:url('<?php the_post_thumbnail_url();?>');">
					</div>
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
	<div class="blog-cta-right" >
		<?php 
		  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 1 ) ); 
		  ?>
		  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
				
				<div class="blog-cta-right-card" style="margin-bottom: 15px;">
					<div class="blog-cta-right-card-image" style="background-image:url('<?php the_post_thumbnail_url();?>');">
					</div>
					<div class="blog-cta-right-card-text">
						<div>
							<p class="blog-date">
								<a href="<?php the_permalink() ?>">
									<?php echo get_the_date(); ?>
								</a>
							</p>
							<p class="blog-title">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</p>
						</div>
					</div>
				</div>

		  <?php 
		  endwhile;
		  wp_reset_postdata();
		  ?>
		
		<?php 
		  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 2 ) ); 
		  ?>
		  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

				<div class="blog-cta-right-card" style="margin-bottom: 15px;">
					<div class="blog-cta-right-card-image" style="background-image:url('<?php the_post_thumbnail_url();?>');">
					</div>
					<div class="blog-cta-right-card-text">
						<div>
							<p class="blog-date">
								<a href="<?php the_permalink() ?>">
									<?php echo get_the_date(); ?>
								</a>
							</p>
							<p class="blog-title">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
							</p>
						</div>
					</div>
				</div>

		  <?php 
		  endwhile;
		  wp_reset_postdata();
		  ?>
	</div>
</div>