<?php get_header(); ?>

<div id="section">

	<style>
		#section {
			background-color: #fff;
		}
		
	</style>

	<div class="container">

		<div class="row">

			<div class="col-lg-12 col-xs-12 col-sm-7">

				<div class="row text-center no-margin">
				
				<?php if(have_posts() ): ?>
					
					<header class="page-header">
						<?php 

							the_archive_title('<h1 class="page-title">', '</h1>');
							the_archive_description('<div class="taxonomy-description">', '</div>');
							
						?>
					</header>

					<?php while(have_posts()): the_post(); ?>

						<?php get_template_part('contents/content', 'archive'); ?>

					<?php endwhile; ?>

					<div class="col-lg-12 col-xs-12 text-center">
						<?php the_posts_navigation(); ?>
					</div>

				<?php endif; ?>
				
				</div>
			</div> 

		</div>
	</div>
</div>


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