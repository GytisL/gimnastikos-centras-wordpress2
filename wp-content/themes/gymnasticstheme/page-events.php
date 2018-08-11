<?php 
/* Template Name: events */
get_header (); ?>

	<section id="cover">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/silhouette.jpg" class="image" />
			<h1>Įvykiai</h1>
		<div id="cover-caption">
			<div class="container">
				<div class="col-sm-12">
					<!-- <a href="#footer-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a> -->
				</div>
			</div>
		</div>
	</section>

	<?php wcr_share_buttons(); ?> <!-- Social media share buttons social-media-sidebar.php -->

	<section id="events">
		<div class="container"><!-- d-flex -->
			<div class="col-lg-8"><!-- d-inline-block -->
				<h2 class="display-3">Uzsiemimu tvarkarastis</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam modi ratione ut nisi tempora quibusdam autem est numquam qui culpa eos eum commodi recusandae nihil quisquam magnam, perferendis, voluptate neque.</p>

				<?php
                    $args = array('category_name' => 'events','posts_per_page' => "2");

                    $lastBlog = new WP_Query ($args);

                if ( $lastBlog->have_posts() ): ?>
                    <?php while ( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>

	                <ol>
	                	<img class="w-25 h-25 m-1 d-inline-block" src=<?php the_post_thumbnail(); ?>
	                    <h4><?php the_title(); ?></h4>
	                    <?php the_content(); ?>

	                    <p>
							<small>Paskelbta: <?php the_time('m-j, Y'); ?> | <?php the_time('g:i a'); ?> <!-- | <?php //the_category(' '); ?> --></small>

							<hr>
	                	</p>
	                </ol>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php 
					wp_reset_postdata();
            	?>

			</div>

			<div class="col-lg-4"><!-- d-inline-block -->
				<h2>Prisijunk šiandien</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<button type="button" class="btn btn-lg btn-primary disabled">Užsirašyk dabar!</button>
				
				<div class="search-form-container">
					<h4>Paieška</h4>
					<?php get_search_form(); ?>
				</div>

				<!-- <div id="sidebar" class="widgets-area">
					 <?php //dynamic_sidebar('sidebar-1'); ?>
				</div> -->
				<h2>Nesenai įvykę renginiai</h2>
				
				<?php
                    $args = array('category_name' => 'events','posts_per_page' => "5");

                    $lastBlog = new WP_Query ($args);

                if ( $lastBlog->have_posts() ) : ?>
                    <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post();
                    get_template_part('contents/content','eventsright'); //contents - papke, content - nurodo, kad yra content'as ir visada taip reikia zymeti, 'eventsright - kontento pavadinimas'.
                	?>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php 
                	wp_reset_postdata();
            	?>

			</div>

		</div>
	</section>


<?php get_footer (); ?>