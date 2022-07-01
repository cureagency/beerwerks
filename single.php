<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Beerwerks
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div id="container">
			<div id="content" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

				endwhile; // End of the loop.
				?>

				<div class="container">
					<div class="row">
						<div class="col">
							<?php while ( have_posts() ) :
								the_post();

								the_post_navigation(
									array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'beerwerks' ) . '</span> <span class="nav-title">%title</span>',
										'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'beerwerks' ) . '</span> <span class="nav-title">%title</span>',
									)
								);

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>

			</div>
		</div>

	</main><!-- #main -->
	<?php get_template_part( 'flex-parts/footer-newsletter-banner' ); ?>
<?php
get_footer();