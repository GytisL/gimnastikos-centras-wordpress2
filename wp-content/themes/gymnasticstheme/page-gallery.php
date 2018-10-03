<?php 
/* Template Name: gallery */
get_header(); ?>


	<!-- <section id="cover">
			<img src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/silhouette.jpg" class="image" />
			<h1>Galerija</h1> 
		<div id="cover-caption">
			<div class="container">
				<div class="col-sm-12">
					 <a href="#footer-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a> 
				</div>
			</div>
		</div>
	</section> -->


	<section id="picture-gallery">
		<div class="container">
			<h2 class="display-3 text-center">Galerija</h2>
			<?php
                $args  = array('category_name' => 'pagrindinegalerija','posts_per_page' => "1");

                $lastBlog = new WP_Query ($args);

            if ( $lastBlog->have_posts() ) : ?>
                <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

					<?php get_template_part('contents/content','gallery'); ?> <!-- nurodoma vieta i contents/content papke (content - yra visa laika kaip formatas)  susikuriama content-video.php failas-->

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

		</div>

	</section>

<?php get_footer(); ?>