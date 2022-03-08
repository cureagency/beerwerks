<?php
/**
 * Template part for displaying Events Archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beerwerks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid simple-top">
		<div class="row">
			<div class="col">
				<header class="entry-header">
					<h1>Events</h1>
				</header><!-- .entry-header -->
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">

				<?php beerwerks_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'beerwerks' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'beerwerks' ),
							'after'  => '</div>',
						)
					);
					?>
				</div><!-- .entry-content -->



			</div>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
