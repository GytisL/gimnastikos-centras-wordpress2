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

<?php get_footer(); ?>