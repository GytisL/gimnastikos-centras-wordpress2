<?php get_header(); ?>

	<div class="container">
		<div class="col-lg-12">
			<div class="row">
			
			<?php 

			/*if(have_posts() ): 

				while(have_posts()): the_post(); ?>

				<?php get_template_part('content', 'search'); ?>

				<?php endwhile;

			endif;*/

			?>



			<?php
			    /*global $query_string;
			    $query_args = explode("&", $query_string);
			    $search_query = array();

			    foreach($query_args as $key => $string) {
			      $query_split = explode("=", $string);
			      $search_query[$query_split[0]] = urldecode($query_split[1]);
			    } // foreach

			    $the_query = new WP_Query($search_query);
			if ( $the_query->have_posts() ): ?>
			    <!-- the loop -->

			    <!-- <ul> -->    
			    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			        <!-- <li>
			            <a href="<?php echo esc_url( post_permalink() ); ?>"><?php the_title();?></a>
			        </li> -->

			        
			    <?php endwhile; ?>
			    <!-- </ul> -->
			    <!-- end of the loop -->

			    <?php wp_reset_postdata(); ?>

			<?php else : ?>
			    <p><?php _e( 'Atsiprašome, bet užklausa neatitinka jūsų kriterijų.' ); ?></p>
			<?php endif; */?>
			
			</div>
		</div>
	</div>

<?php get_footer(); ?>