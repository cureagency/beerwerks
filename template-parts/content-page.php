<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Beerwerks
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container-fluid simple-top">
		<div class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6" style="text-align: center !important;">
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
			</div>
			<div class="col-lg-3">
			</div>
		</div>
	</div>

	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php
					the_content();

					?>
				</div>
			</div>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
