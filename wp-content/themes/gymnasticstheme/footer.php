
<?php wcr_share_buttons(); ?> <!-- Social media share buttons social-media-sidebar.php -->

	<a id="ButtonToTop"></a>

	<footer id="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 footer-content-1">
					<h3 class="title">ĮMONĖ</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<div id="logo"><!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/itmalogo.jpg" alt=""> --></div>
				</div>
				<div class="col-sm-4 footer-content-2">
					<h3 class="title">VIRŠUTINĖ JUOSTA</h4>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'secondary',
		                    'container' => false,
		                    'menu_class' => 'list-unstyled'
		                ));
	            	?>
					<!-- <ul class="list-unstyled">
						<li><a href="">Įvykiai</a></li>
						<li><a href="">Kontaktai</a></li>
						<li><a href="">Apie mus</a></li>
						<li><a href=""></i>Galerija</a></li>
					</ul> -->
				</div>
				
				<div class="col-sm-3 footer-content-3">
					<!-- <h4 class="title">IPSUM</h4> -->
					<!-- <?php
                    //$args  = array('category_name' => 'Poraste','posts_per_page' => "1");
                    //$lastBlog = new WP_Query ($args);

                //if ( $lastBlog->have_posts() ) : ?>
                    <?php// while ( $lastBlog->have_posts() ) : $lastBlog->the_post(); ?>

						<?php //get_template_part('footer/content','Poraste'); ?> 

                    <?//php //endwhile; ?>
                <?php //endif; ?>

	                <?php //wp_reset_postdata(); ?> -->

					<?php
					//code to print posts by category
                        $the_query = new WP_Query( $args = array(
                            'category_name' => 'Poraste',
                            'posts_per_page' => 1,
                            'orderby' => 'date'
                            ));

                            if ( $the_query->have_posts() ) :

                            while ( $the_query->have_posts() ): $the_query->the_post();?>
            				<!-- <?php// the_permalink(); ?> -->
                            <?php the_post_thumbnail( 'thumbnail img-responsive' ); ?>
                            <h3><?php the_title();?></h3>
							<p><?php the_content(); ?></p>
                           <!--  <?php    //the_excerpt();?> -->
            				<!-- <div class="hvr-underline-from-left"><?php //the_category();?></div> -->

                    	<?php

                			endwhile;

                            endif;

                            wp_reset_postdata();
                        ?>

					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident.</p> -->

					<!-- <?php
                        //$the_query = new WP_Query( $args = array(
                            //'category_name' => 'Poraste',
                            //'posts_per_page' => 1,
                            //'orderby' => 'date',

                           // ));

                           // if ( $the_query->have_posts() ) :

                            //while ( $the_query->have_posts() ) : $the_query->the_post();?>
				            <a class="linkas" href="<?php //the_permalink(); ?>">
	                            <?php //the_post_thumbnail( 'thumbnail img-responsive' ); ?>
	                            <h3><?php //the_title();?></h3>
	                            <?php //the_excerpt();?>
				            <div class="hvr-underline-from-left"><?php //the_category();?></div>

				            </a> 
				                <?php //endwhile; ?>

                            <?php //endif; ?>

                            <?php //wp_reset_postdata(); ?> -->
				</div>
				
				<!-- <div class="col-sm-2">
                    <div class="arrow-up">
						<a href="#gymnasticsNavbar" class="btn btn-secondary-outline btn-sm" role="button">&uarr;</a>
					</div>
                </div> -->

                <div class="col-sm-2 solution row">
                    <div class="logo">
						<p>Sprendimas: <img src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/itma-logo-part.png"></p>
					</div>
                </div>
			</div>

			<div id="line-pulse"></div>

			<div class="col-lg-12">
				<p class="rights">Visos teisės saugomos &copy; Gimnastikos centras 2018</p>
			</div>

		</div>
	</footer>
	
	<?php wp_footer(); ?>

	</body>
</html>