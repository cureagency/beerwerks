<?php
/**
 * Template Name: Events Archive Template
 *
 */
get_header();
?>

	<main id="primary" class="site-main">

		<div id="container">
			<div id="content" role="main">

				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content-eventsarchive' );

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
		<?php get_template_part( 'flex-parts/footer-newsletter-banner' ); ?>

	</main><!-- #main -->

<?php
get_footer();
