<?php
/**
 * Template Name: Flexible Template
 *
 *
 * 
 */
?>


<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&family=Bebas+Neue&family=Raleway:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,300;1,600&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/f8cd734668.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site" style="overflow: hidden;">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'beerwerks-2021' ); ?></a>

	<?php
	while ( have_posts() ) :
		the_post(); ?>


		<header id="masthead" class="site-header">
			<div class="site-branding">
			</div><!-- .site-branding -->


			<?php if( get_field('navigation_type') == 'standard'): ?>
				<nav id="site-navigation" class="main-navigation">
					<div class="menu-float">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2021',
							)
						);
						?>
					</div>
				</nav><!-- #site-navigation -->
			<?php elseif	( get_field('navigation_type') == 'quizcampaign' ): ?>
				<nav id="site-navigation" class="main-navigation">
					<div class="menu-float">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'quizmenu-2021',
							)
						);
						?>
					</div>
				</nav><!-- #site-navigation -->
			<?php endif; ?>

		</header><!-- #masthead -->

		<main id="primary" class="site-main">


			<?php if( have_rows('content') ):

			    // Loop through rows.
			    while ( have_rows('content') ) : the_row();

			        
			        if( get_row_layout() == 'top_section' ): ?>

			          <?php get_template_part( 'flex-parts/top-section' ); ?>

   					<?php elseif( get_row_layout() == 'simple_top' ): ?>

			          <?php get_template_part( 'flex-parts/simple-top' ); ?>

			        <?php elseif( get_row_layout() == 'top_section_standard' ): ?>

			          <?php get_template_part( 'flex-parts/top-section-standard' ); ?>

   					<?php elseif( get_row_layout() == 'top_section_noimage' ): ?>

			          <?php get_template_part( 'flex-parts/top-section-noimage' ); ?>

   					<?php elseif( get_row_layout() == 'top_section_home' ): ?>

			          <?php get_template_part( 'flex-parts/top-section-home' ); ?>

   					<?php elseif( get_row_layout() == '2_column_layout_text_button_list_and_image_collage' ): ?>

			          <?php get_template_part( 'flex-parts/2-col-text-button-list-and-image' ); ?>	

   					<?php elseif( get_row_layout() == '2_column_simple' ): ?>

			          <?php get_template_part( 'flex-parts/2-col-simple' ); ?>

			    	<?php elseif( get_row_layout() == '2_col_left_image_right_text' ): ?>

			          <?php get_template_part( 'flex-parts/2-col-left-image-right-text' ); ?>	

	    			<?php elseif( get_row_layout() == '2_col_large_left_image_right_text' ): ?>

			          <?php get_template_part( 'flex-parts/2-col-large-left-image-right-text' ); ?>	

   					<?php elseif( get_row_layout() == '2_col_with_image_links_graybg' ): ?>

			          <?php get_template_part( 'flex-parts/2-col-with-image-links-graybg' ); ?>	

   					<?php elseif( get_row_layout() == 'passport_repeater' ): ?>

			          <?php get_template_part( 'flex-parts/passport-repeater' ); ?>	

   					<?php elseif( get_row_layout() == 'top_section_mapbrewery' ): ?>

			          <?php get_template_part( 'flex-parts/top-section-mapbrewery' ); ?>	

			        <?php elseif( get_row_layout() == 'left_and_right_cta' ): ?>

			          <?php get_template_part( 'flex-parts/left-and-right-cta' ); ?>

			        <?php elseif( get_row_layout() == 'full_width_cta_with_bg_img' ): ?>

			          <?php get_template_part( 'flex-parts/full-width-cta-with-bg-img' ); ?>

					<?php elseif( get_row_layout() == 'single_column_video_embed' ): ?>
			         
			          <?php get_template_part( 'flex-parts/video-embed' ); ?>	

			        <?php elseif( get_row_layout() == 'single_column' ): ?>
			           
			          <?php get_template_part( 'flex-parts/single-column' ); ?>	

			     	<?php elseif( get_row_layout() == 'single_column_image_cta' ): ?>
			          
			          <?php get_template_part( 'flex-parts/single-column-imagecta' ); ?>	

			     	<?php elseif( get_row_layout() == 'image_row_cta' ): ?>
			          
			          <?php get_template_part( 'flex-parts/image-row-cta' ); ?>	

			     	<?php elseif( get_row_layout() == 'blog_cta' ): ?>
			          
			          <?php get_template_part( 'flex-parts/blog-cta' ); ?>				          

 					<?php elseif( get_row_layout() == 'fullwidth_image' ): ?>

			          <?php get_template_part( 'flex-parts/full-width-image' ); ?>		

					<?php elseif( get_row_layout() == 'two_column_gray' ): ?>
			          
			          <?php get_template_part( 'flex-parts/two-column-gray' ); ?>				           

			        <?php elseif( get_row_layout() == 'two_column_repeater_img_left' ): ?>

			          <?php get_template_part( 'flex-parts/two-column-repeater-image-left' ); ?>	       

			        <?php elseif( get_row_layout() == 'brewery_cards' ): ?>
			          
			          <?php get_template_part( 'flex-parts/brewery-cards' ); ?>			            

					<?php elseif( get_row_layout() == 'two_column_gallery' ): ?>
			      
			          <?php get_template_part( 'flex-parts/brewery-cards' ); ?>	

					<?php elseif( get_row_layout() == 'two_column_image_links' ): ?>
			          
			          <?php get_template_part( 'flex-parts/two-column-image-links' ); ?>				           
					<?php elseif( get_row_layout() == 'footer_newsletter_banner' ): ?>
						
			          <?php get_template_part( 'flex-parts/footer-newsletter-banner' ); ?>							
			        <?php elseif( get_row_layout() == 'footer_banner' ): ?>

			          <?php get_template_part( 'flex-parts/footer-banner' ); ?>	

					<?php elseif( get_row_layout() == 'single-column-carousel' ): ?>

						<?php get_template_part( 'flex-parts/single-column-carousel' ); ?>	
			          
			        <?php endif;

			    
			    endwhile; ?>

			</main><!-- #main -->

		<?php	else :
			    // Do something...
			endif; 

		endwhile; // End of the loop.
		?>

<?php
get_footer();