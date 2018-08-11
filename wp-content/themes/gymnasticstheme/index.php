<?php get_header(); ?>

	<div class="content">
		<div class="container">
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>

				<?php the_content(); ?>

				<?php endwhile; else : ?>
				<p>Atsiprašome, neradome jokių įrašų, atitinkančių jūsų kriterijus.</p>

			<?php endif; ?>

			</div>
		</div>
	</div>

<?php get_footer(); ?>