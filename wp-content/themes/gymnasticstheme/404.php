<?php get_headers(); ?>

	<div id="primary" class="container">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<header class="page-header">

					<h1 class="page-title">Atsiprasome, bet puslapis nerastas!</h1>

				</header>

				<div class="page-content">
					<h3>Atrodo, kad sioje vietoje nieko nebuvo rasata. Galbūt pabandykite vieną is apačioje esančių nuorodų.</h3>
					
					<?php get_search_form(); ?>

					<?php the_widget('WP_Widget_Recent_Posts'); ?>

					<div class="widget widget_categories">
						<h3>Skaitykite naujienas</h3>
						<ul>
							<?php wp_list_categories(array(
									'orderby' => 'count',
									'order' => 'DESC',
									'show_count' => 1,
									'title_li' => '',
									'number' => 5
									) 
								); 
							?>
						</ul>

					</div>
					
					<?php the_widget('WP_Widget_Archives', 'dropdown=1', 'after_title=</h2>$archive_content'); ?>


				</div>

			</section>
		</main>
	</div>

<?php get_footer(); ?>