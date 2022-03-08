<div class="container">
	<div class="row">

	</div>
	<div class="row">
		<div class="col-lg-2">
		</div>
		<div class="col-lg-8">
			<?php get_search_form(); ?>

			<h2>Archives by Month:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>

			<h2>Archives by Subject:</h2>
			<ul>
				 <?php wp_list_categories(); ?>
			</ul>
		</div>
		<div class="col-lg-2">
		</div>
	</div>
</div>