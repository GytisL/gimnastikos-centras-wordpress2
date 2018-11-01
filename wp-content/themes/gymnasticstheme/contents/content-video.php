		<h3 class="title">Apie mus</h3>
			<div class="row feature-content">
			 	<div class="col-lg-5 video-text">
					<h2><?php the_title(); ?></h2>
					<p class="lead"><?php echo get_post_meta( get_the_ID(), 'sub-title', true); ?></p> <!-- sub-title  -  custom field'o name -->
					<p><?php the_content(); ?></p>
				</div>

				<div class="col-lg-6 video-content">
					<?php echo get_post_meta( get_the_ID(), 'video', true); ?> <!-- video  -  custom field'o name -->
				</div>
			</div>