<?php //get_header(); ?>

	<div id="primary" class="container">

		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">


				<style>
					#primary #main .error-404 img {
						max-height: 100px;
						max-width: 100px;
					}

					#primary {
						background: url("http://localhost/gimnastikos-centras/wp-content/themes/gymnasticstheme/pictures/woman4.jpg") no-repeat center center fixed; 
						-webkit-background-size: cover;
						-moz-background-size: cover;
						-o-background-size: cover;
						background-size: cover;
						height: 100%;
					}

					body {
						margin: 0;
					}
					
				</style>
				<header class="page-header">

					<h1 class="page-title">Atsiprašome, bet puslapis nerastas!</h1>
					<!-- <h1 class="page-title">Well, this is awkward.</h1> -->

				</header>

				<div class="page-content">
					<h2>Atrodo, kad šioje vietoje nieko nebuvo rasta. Galbūt pabandykite vieną iš apačioje esančių nuorodų?</h2>
					<!-- <h2>The site you are looking for is not here.</h2> -->

					<?php //get_search_form(); ?>

					<?php the_widget('WP_Widget_Recent_Posts'); ?>

					<!-- <div class="widget widget_categories">
						<h3>Naujausi straipsniai</h3>
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

					</div> -->

					<?php the_widget('WP_Widget_Archives', 'dropdown=1'); ?> <!-- dropdown=0 takes off the dropdown menu -->

				</div>

			</section>
		</main>
	</div>

<?php //get_footer(); ?>