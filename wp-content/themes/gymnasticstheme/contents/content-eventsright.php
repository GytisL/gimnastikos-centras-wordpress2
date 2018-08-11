	<div class="event-pic d-flex">
		<img class="w-25 h-25 m-1 d-inline-block" src=<?php the_post_thumbnail(); ?>
		<div class="event-list d-inline-block">
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</div>
	</div>
	