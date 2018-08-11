<?php
/* 
Template Name: archive
*/
?>

<?php get_header(); ?>

	<section id="cover">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/silhouette.jpg" class="image" />
			<h1>Archyvas</h1>
		<div id="cover-caption">
			<div class="container">
				<div class="col-sm-12">
					<!-- <a href="#footer-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a> -->
				</div>
			</div>
		</div>
	</section>

	<section id="events">
		
		<div class="container d-flex">

			<div class="col-lg-8 d-inline-block">
				
				<h2 class="display-3">Archyvas</h2>

				<?php if ( have_posts() ): ?>

					<header class="page-header">
						<?php 
							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="taxonomy-description">', '</div>');
						?>

						

					</header>
					<?php while ( have_posts() ): the_post(); ?>
						<?php get_template_part('contents/content-eventsright', 'archive'); ?>


                    <?php endwhile; ?>

                    <div class="col-lg-12 text-center">
                    	<?php the_posts_navigation(); ?>

                    </div>

                    
                <?php endif; ?>

                

			</div>

			<div class="col-lg-4 d-inline-block">
				
				<div class="search-form-container">
					<h4>Paieška</h4>
					<?php get_search_form(); ?>

					<div id="sidebar" class="widgets-area">
							<?php dynamic_sidebar('sidebar-1'); ?>
						</div>
				</div>

				
				

			</div>

		</div>
	</section>

<?php get_footer(); ?>