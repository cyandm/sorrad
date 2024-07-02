<?php get_header() ?>

<main class="container space-y-5">

	<div>
		<?php the_post_thumbnail() ?>
	</div>

	<div class="prose">
		<h1>
			<?php the_title() ?>
		</h1>
	</div>

	<div class="prose">
		<?php the_content() ?>
	</div>

</main>

<?php get_footer() ?>