	<div class="event-pic">
		<img class="event-img" src=<?php the_post_thumbnail(); ?>
		<div class="event-list">
			<h4><?php the_title(); ?></h4>
			<?php the_excerpt(); ?>
			<?php the_content(); ?>
		</div>
	</div>