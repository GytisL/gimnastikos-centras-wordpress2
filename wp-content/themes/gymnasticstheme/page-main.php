<?php 
/* Template Name: main */
get_header(); ?>
	

	<section id="feature-one">
		
		<div class="container">
			<div class="feature-row">

				<!-- 1 variantas -->  <?php 
					//$args = array ( 
					// Post or Page ID
					 // 'p' => 39,  //irasomas posto numeris kuri rodo uzvedus ant posto apacioj. siuo atveju post=39
					//);
					 
					// The Query
					///$the_query = new WP_Query( $args );
					 
					// The Loop
					//if ( $the_query->have_posts() ) {
					 
					    //while ( $the_query->have_posts() ) {
					        //$the_query->the_post();
					        //echo get_post_meta( get_the_ID(), 'Gimnastikos_pasirodymai', true);
					        //}
					 
					     
					    /* Restore original Post Data */
					    //wp_reset_postdata();
					 
					//} //else {
					 
					//echo 'Nieko nerasta';
					     
					//} ?>


				<!-- 2 trumpesnis variantas php POST content START -->
				<!-- per wordpress postuose susikurti nauja posta, isijungti custom field. Tada add new category ir pasirinkt video -->
				<?php
                    $args  = array('category_name' => 'video','posts_per_page' => "1");

                    $lastBlog = new WP_Query ($args);

                 if ( $lastBlog->have_posts() ) : ?>
                    <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

						<?php get_template_part('contents/content','video'); ?> <!-- nurodoma vieta i contents/content papke (content - yra visa laika kaip formatas)  susikuriama content-video.php failas-->

                    <?php endwhile; ?>
                <?php endif; ?>

	                <?php wp_reset_postdata(); ?>
				<!-- php POST content END -->		
				
				
			</div>
		</div>
	</section>


	<section id="multi-gallery">
		<div class="container">

			<?php
                $args  = array('category_name' => 'galerija','posts_per_page' => "1");

                $lastBlog = new WP_Query ($args);

            if ( $lastBlog->have_posts() ) : ?>
                <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

					<?php get_template_part('contents/content','mini-gallery'); ?> <!-- nurodoma vieta i contents/content papke (content - yra visa laika kaip formatas)  susikuriama content-video.php failas-->

                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

			
		</div>
	</section><!-- multi-gallery -->

	<section id="contacts">
		<div class="container">
			<!-- <div class="row"> -->
				
			<?php
                $args  = array('category_name' => 'kontaktai','posts_per_page' => "1");

                $lastBlog = new WP_Query ($args);

            if ( $lastBlog->have_posts() ) : ?>
                <?php while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

					<?php get_template_part('contents/content','contacts'); ?> <!-- nurodoma vieta i contents/content papke (content - yra visa laika kaip formatas)  susikuriama content-video.php failas-->

                <?php endwhile; ?>
            <?php endif; ?>

            	<?php wp_reset_postdata(); ?>
			

				<!-- <h2>Adresas</h2>
				<ul>
				 	<li>Sporto g. 7</li>
				</ul>
				<h2>El. paštas</h2>
				<ul>
				 	<li>info@email.com</li>
				</ul>
				<h2>Telefono Nr.</h2>
				<ul>
				 	<li>Tel.: +370 6 00 00000</li>
				</ul>
				<h2>Darbo laikas</h2>
				<ul>
				 	<li>I-V 8:00 - 17:00</li>
				 	<li>VI-VII Nedirbame</li>
				</ul> -->
				
		</div>

		<!-- <div class="arrow-up">
			<a href="#gymnasticsNavbar" class="btn btn-secondary-outline btn-sm" role="button">&uarr;</a>
		</div> -->
		
	</section>

	

	<?php get_footer(); ?>