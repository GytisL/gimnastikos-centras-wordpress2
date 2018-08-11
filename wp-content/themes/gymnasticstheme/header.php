<!DOCTYPE html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset=" <?php bloginfo('charset'); ?> ">
		<title> <?php bloginfo('name'); ?><?php wp_title('|'); ?> </title>
		<meta name="description" content=" <?php bloginfo('description'); ?> ">
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

	<!-- padaryti, kad neisijungtu, o kad nuvestu i home page ir nuvestu prie ivykiu arba galerijos -->

<!-- Makes inside pages navbar titles disappear END -->
	

<!--  -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
			<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#gymnasticsNavbar" aria-controls="gymnasticsNavbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
				<a class="navbar-brand ml-5" href="<?php echo site_url();?>">LOGO</a>

			<div class="collapse navbar-collapse justify-content-end" id="gymnasticsNavbar">
				 <ul class="nav navbar-nav">
				    <li class="nav-item mr-3">
						<a class="nav-link" href="events">Įvykiai</a> <!-- vidiniai puslapiai -->
				    </li>
				    <li class="nav-item mr-3">
						<!-- <a class="nav-link" href="#feature-one">Apie mus</a> -->
						<a class="<?php

							if (is_page( 'events' ) ) {
							echo 'isjungtas nav-link';
							} else {
							echo 'ijungtas nav-link';
							}

						?>" href="<?php echo home_url(); ?>#feature-one">Apie mus</a>
				    </li>
				    <li class="nav-item mr-3">
						<!-- <a class="nav-link" href="#contacts">Kontaktai</a> -->
						<a class="nav-link" href="<?php echo home_url(); ?>#contacts">Kontaktai</a>
				    </li>
				    <li class="nav-item mr-5">
						<a class="nav-link" href="gallery">Galerija</a><!-- vidiniai puslapiai -->
				    </li>
				    
				</ul>
			</div>

		</nav>


<!-- <button onclick="myFunction()" ><a class="nav-link" href="<?php echo home_url(); ?>#feature-one">Apie mus</a></button> -->


