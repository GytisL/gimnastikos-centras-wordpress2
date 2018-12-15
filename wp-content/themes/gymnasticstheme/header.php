<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset=" <?php bloginfo('charset'); ?> ">
		<title> <?php bloginfo('Gimnastikos centras'); ?><?php wp_title('|'); ?> </title>
		<meta name="Gimnastikos centras" content=" <?php bloginfo('Gimnastikos centras'); ?> ">
		<?php wp_head(); ?>
	</head>
	
	<body>


<!-- Makes inside pages navbar titles disappear START -->
	<!-- OPTIMIZUOTI! -->
	<!-- <?php //if (is_page( 'events' ) ): ?>
		<style>
			.nav-item:nth-child(2),
			.nav-item:nth-child(3) { 
				display: none;
			}
		</style>
	<?php //endif; ?>

	<?php //if (is_page( 'gallery' ) ): ?>
		<style>
			.nav-item:nth-child(2),
			.nav-item:nth-child(3) { 
				display: none;
			}
		</style>
	<?php //endif; ?> -->


<!-- Makes inside pages navbar titles disappear END -->



		<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top">
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#gymnasticsnavbarDiv" aria-controls="gymnasticsNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button><!-- NEVEIKE NES #gymnasticsNavbarDiv id buvo toks pats kaip aria-controls-->
				<a class="navbar-brand" href="<?php echo site_url();?>"><!-- LOGO --><img src=http://localhost/gimnastikos-centras/wp-content/themes/gymnasticstheme/pictures/logo13-cropped.png></a>

			<div class="collapse navbar-collapse justify-content-end gymnasticsNavbar" id="gymnasticsnavbarDiv">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
		                    'container' => false,
		                    'menu_class' => 'nav navbar-nav'
	                	)
					);
	            ?>

				 <!-- <ul class="nav navbar-nav">
				    <li class="nav-item mr-3">
						<a class="nav-link" href="events">Įvykiai</a> --> <!-- vidiniai puslapiai -->
				    <!-- </li>
				    <li class="nav-item mr-3"> -->
						<!-- <a class="nav-link" href="#feature-one">Apie mus</a> -->

						<!-- //<a class="<?php

							//if (is_page( 'events' ) ) {
							//echo 'isjungtas nav-link';
							//} else {
							//echo 'ijungtas nav-link';
							//}

						//?>" href="<?php //echo home_url(); ?>#feature-one">Apie mus</a> -->

						<!-- <a class="nav-link" href="http://localhost/gimnastikos-centras/#feature-one">Apie mus</a>
						
				    </li>
				    <li class="nav-item mr-3"> -->
						<!-- <a class="nav-link" href="#contacts">Kontaktai</a> -->
						<!-- <a class="nav-link" href="#contacts">Kontaktai</a>
				    </li>
				    <li class="nav-item mr-5">
						<a class="nav-link" href="gallery">Galerija</a>--><!-- vidiniai puslapiai -->
				    <!-- </li>
				    
				</ul>-->
			</div>
		</nav>

		<!-- <button onclick="myFunction()" ><a class="nav-link" href="<?php //echo home_url(); ?>#feature-one">Apie mus</a></button> -->

		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner carousel-block">
				<div class="carousel-item active carousel-img">
					<h1 class="in-left">Sveiki prisijungę prie svetainės</h1>
					<img src="http://localhost/gimnastikos-centras/wp-content/themes/gymnasticstheme/pictures/silhouette2.jpg" alt="Pirmas paveiksliukas">
		 		</div>
				<div class="carousel-item carousel-img">
					<!-- <h1 class="in-left">Sveiki prisijungę prie svetainės</h1> -->
					<img src="http://localhost/gimnastikos-centras/wp-content/themes/gymnasticstheme/pictures/rhythm.jpg" alt="Antras paveiksliukas">
				</div>
				<div class="carousel-item carousel-img">
					<!-- <h1 class="in-left">Sveiki prisijungę prie svetainės</h1> -->
					<img src="http://localhost/gimnastikos-centras/wp-content/themes/gymnasticstheme/pictures/silhouette2.jpg" alt="Trečias paveiksliukas">
				</div>
			</div>

			<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Atgal</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Pirmyn</span>
			</a>
		</div>