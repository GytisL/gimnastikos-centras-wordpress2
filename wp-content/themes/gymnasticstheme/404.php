<?php //get_header(); ?>

	<div id="primary">

		<main id="main" class="site-main" role="main">
			
			<div class="container">

				<section class="error-404 not-found">


					<style>
						body {
						  margin: 0;
						}

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

						#primary #main .container .error-404 .page-header .page-title {
						  text-align: center;
						  /*color: #ffffff;*/
						  padding-top: 1em;
						}

						#primary #main .container .error-404 .page-content .page-title2 {
						  text-align: center;
						  /*color: #ffffff;*/
						}

						#primary #main .container .error-404 .page-content .widget {
						  margin: 0 5em;
						}

						#primary #main .container .error-404 .page-content .widget ul {
						  list-style-type: none;
						  margin: 0;
						  padding: 0;
						}

						#primary #main .container .error-404 .page-content .widget ul li a {
						  color: #000000;
						  text-decoration: none;
						  opacity: .5;
						}

						#primary #main .container .error-404 .page-content .widget ul li a:hover {
						  opacity: 1;
						}

						#archives-dropdown-3 {
						  border-radius: 7px;
						  height: 25px;
						  background-color: #fff;
						}
						
					</style>

					<header class="page-header">

						<h1 class="page-title">Atsiprašome, bet puslapis nerastas!</h1>
						<!-- <h1 class="page-title">Well, this is awkward.</h1> -->

					</header>

					<div class="page-content">
						<h2 class="page-title2" >Atrodo, kad šioje vietoje nieko nebuvo rasta. Galbūt pabandykite vieną iš apačioje esančių nuorodų?</h2>
						<!-- <h2>The site you are looking for is not here.</h2> -->

						<?php //get_search_form(); ?>

						<?php //the_widget('WP_Widget_Recent_Posts'); ?>

						<!-- <div class="widget widget_categories">
							<h3>Naujausi straipsniai</h3>
							<ul>
								<?php /*wp_list_categories(
										array(
											'orderby' => 'count',
											'order' => 'DESC',
											'show_count' => 1,
											'title_li' => '',
											'number' => 5
										) 
									); 
									*/
								?>
							</ul>

						</div> -->

						<?php //the_widget('WP_Widget_Archives', 'dropdown=1'); ?> <!-- dropdown=0 takes off the dropdown menu -->

						<div id="sidebar" class="widgets-area">
							<?php dynamic_sidebar('sidebar-1'); //function.php Sidebar function?>
						</div>

					</div>

				</section>
			</div>
		</main>
	</div>

<?php //get_footer(); ?>