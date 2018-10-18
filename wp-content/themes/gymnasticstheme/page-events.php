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
				<h2 class="display-4 text-center">Įvykiai</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam modi ratione ut nisi tempora quibusdam autem est numquam qui culpa eos eum commodi recusandae nihil quisquam magnam, perferendis, voluptate neque.</p>
				
					<!-- <div id="gymnastics-posts">

						<?php
		                 	// patikrina kokiame puslapyje esi
		                 	// $paged = get_query_var( 'paged', 1 ); 
		                 	// echo $paged;
							// $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						
		                    //$args = array(
		                    //	'category_name' => 'events',
		                    //	'posts_per_page' => '2',
		                    	//'category_in' => array('15, 17, 30'),category by category name (post id)
		                    	//'paged' => $paged 
		                    	//'category__not_in' => array('')parameter in which category our post doesnt have to be (post id)
		                    //);

							//$lastBlog = new WP_Query ($args);

						//if ( $lastBlog->have_posts() ): ?>
							<?php //while ( $lastBlog->have_posts() ): $lastBlog->the_post(); 

							//get_template_part('contents/content','eventsmain'); //content is in content-eventsmain.php?>

							<?php //endwhile; ?>
						<?php //endif; ?>

						<?php 
							//wp_reset_postdata();
						?>
						append here (prints this content with ajax)

					</div>
 
					<div class="container sunset-posts-container">-->
					<div id="gymnastics-posts">
						<?php 

						$args = array(
		                    	'category_name' => 'renginiai',
		                    	'posts_per_page' => '3',
		                    	//'category_in' => array('15, 17, 30'),category by category name (post id)
		                    	'paged' => $paged
		                    	// 'category__not_in' => array('')parameter in which category our post doesnt have to be (post id)
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
		                
					</div>
					<!--</div> .container -->

				<!-- ajax .container START -->
	
					
					<div class="container text-center load-more-block">
						<a class="btn btn-lg btn-default gymnastics-load-more" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
							<span class="fa fa-spinner loader gymnastics-loading"></span><span class="button-text">Daugiau<span>
						</a>
					</div><!-- .container -->
					<!-- uzdeti button'us 
					<div class="container text-center load-more-block">
						<a class="btn btn-lg btn-default gymnastics-load-more" data-page="1" data-url="<?php// echo admin_url('admin-ajax.php'); ?>">
							<span class="loader gymnastics-loading"></span><span class="button-text">Daugiau<span>
						</a>
					</div>-->

				<!-- ajax .container END-->

			</div>

			<div class="col-lg-4"><!-- d-inline-block -->
				<h2 class="join">Prisijunk šiandien</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<button type="button" class="btn btn-lg btn-default">Užsirašyk dabar!</button>
				
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

               
				<!-- STARTS TO PRINT FROM THIRD POST-->
				
                <?php 
                	$args = array(
					'type' => 'post',
					'category_name' => 'renginiai',
					'posts_per_page' => 2,
					'offset' => 3,
					'orderby' => 'date'
					/*'tax_query' => array(
				        array(
				            'taxonomy' => 'post_format',
				            'field' => 'slug',
				            'terms' => array( 'post-format-aside' ),
				            'operator' => 'NOT IN'
				        )
				    )*/ //tax_query excludes the post from the same category with post format aside
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


	<section id="contact-bar">
		<!-- kontaktine forma su MODAL START -->
		<!-- <div class="container"> -->

		<div class="body">
		 	<!-- <h2>Modal Example</h2> -->
			<!-- Trigger the modal with a button -->
			<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contact">Susisiekite</button> -->
			
				<!-- <a href="#" data-toggle="modal" data-target="#contact" class="button1"><i class="fa fa-envelope"></i>Susisiekite</a> -->
				<!-- <button type="button" class="btn btn-lg btn-block btn-primary"><a href="#" data-toggle="modal" data-target="#contact" class="button1"><i class="fa fa-envelope"></i>Susisiekite</a></button> -->
				<button type="button" class="btn btn-lg btn-block contact-btn"><a href="#" data-toggle="modal" data-target="#contact" class="button1"><i class="fa fa-envelope"></i>Susisiekite</a></button>
			<!-- Modal -->
			<div class="modal fade" id="contact" role="dialog">
			    <div class="modal-dialog">
					<!-- Modal content-->
			    	<div class="modal-content">
			    		<div class="modal-header">
			    			<button type="button" class="close" data-dismiss="modal">&times;</button>
			    			<!-- <h4 class="modal-title">Modal Header</h4> -->
			    		</div>

				    	<div class="modal-body"> <!-- 1. install plug-in to wordpress admin. 2. create new form  3. insert php code. 4. copy key and insert to ''  . -->
				          <?php echo do_shortcode('[contact-form-7 id="38" title="contact"]') ?>
				          
				    	</div>
						<!-- <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        </div> -->
			    	</div>
			      
				</div>
			</div>

		</div>
		<!-- </div> --> <!-- container end -->
		<!-- kontaktine forma su MODAL END -->
	</section>


<?php get_footer (); ?>