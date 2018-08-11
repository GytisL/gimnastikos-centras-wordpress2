<?php get_header(); ?>

<div class="container">
	
		<div class="col-lg-12" >

			<div class="row">
			
			<?php 

			if(have_posts() ): 

				while(have_posts()): the_post(); ?>

				<?php get_template_part('content', 'search'); ?>

				<?php endwhile;

			endif;

			?>
			
			</div>
		</div>

		
		
	
</div>



<?php get_footer(); ?>