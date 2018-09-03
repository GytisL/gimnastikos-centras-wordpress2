<?php 
/* Template Name: events */
get_header (); ?>

	<!--<section id="cover">
			 <img src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/silhouette.jpg" class="image" />
			<h1>Įvykiai</h1> 
		<div id="cover-caption">
			<div class="container">
				<div class="col-sm-12">
					 <a href="#footer-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a>
				</div>
			</div>
		</div>
	</section>-->


	<section id="events">
		<div class="container"><!-- d-flex -->
			<div class="col-lg-8"><!-- d-inline-block -->
				<h2 class="display-3">Įvykiai</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam modi ratione ut nisi tempora quibusdam autem est numquam qui culpa eos eum commodi recusandae nihil quisquam magnam, perferendis, voluptate neque.</p>
				
					<div id="gymnastics-posts">
						<?php
		                    $args = array(
		                    	'category_name' => 'events',
		                    	'posts_per_page' => '2',
		                    	'category_in' => array('15, 17, 30'),//category by category name (post id) NEPRINTINA KAI DU PABRAUKIMAI
		                    	//'category__not_in' => array('')parameter in which category our post doesnt have to be (post id)
		                    );

							$lastBlog = new WP_Query ($args);

						if ( $lastBlog->have_posts() ): ?>
							<?php while ( $lastBlog->have_posts() ): $lastBlog->the_post(); 

							get_template_part('contents/content','eventsmain'); //content is in content-eventsmain.php?>

							<?php endwhile; ?>
						<?php endif; ?>

						<?php 
							wp_reset_postdata();
						?>
						<!-- append here (prints this content with ajax)-->

					</div>

				<!-- ajax .container START-->
					<div class="container text-center">
						<a class="btn btn-lg btn-default gymnastics-load-more" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
							<span class="sunset-icon gymnastics-loading"></span> Daugiau
						</a>
					</div><!-- .container -->
				<!-- ajax .container END-->

			</div>

			<div class="col-lg-4"><!-- d-inline-block -->
				<h2 class="join">Prisijunk šiandien</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<button type="button" class="btn btn-lg btn-success">Užsirašyk dabar!</button>
				
				<div class="search-form-container">
					<h4>Paieška</h4>
					<?php get_search_form(); ?>
				</div>

				<!-- <div id="sidebar" class="widgets-area">
					 <?php //dynamic_sidebar('sidebar-1'); ?>
				</div> -->
				<h2>Nesenai įvykę renginiai</h2>
				
				<!-- <?php
                    //$args = array('category_name' => 'events','posts_per_page' => "5");

                    //$lastBlog = new WP_Query ($args);

                //if ( $lastBlog->have_posts() ) : ?>
                    <?php //while ( $lastBlog->have_posts() ) : $lastBlog->the_post();
                    //get_template_part('contents/content','eventsright'); //contents - papke, content - nurodo, kad yra content'as ir visada taip reikia zymeti, 'eventsright - kontento pavadinimas'.
                	?>

                    <?php //endwhile; ?>
                <?php //endif; ?>

                <?php //wp_reset_postdata(); ?> -->

               
				<!-- STARTS TO PRINT FROM SECOND POST-->
				
                <?php 
                	$args = array(
					'type' => 'post',
					'category_name' => 'events',
					'posts_per_page' => 2,
					'offset' => 0
				);

                    $lastBlog = new WP_Query ($args);

                if ( $lastBlog->have_posts() ) : ?>
                    <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post();
                    get_template_part('contents/content','eventsright'); //contents - papke, content - nurodo, kad yra content'as ir visada taip reikia zymeti, 'eventsright - kontento pavadinimas'.
                	?>

                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_postdata(); ?>


			</div>

		</div>
	</section>


<?php get_footer (); ?>