<?php 
/* Template Name: main */
get_header(); ?>


	<section id="cover">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/silhouette.jpg" class="image" />
		
			<h1>Sveiki prisijunge prie gimnastikos svetaines</h1>
		<div id="cover-caption">
			<div class="container">
				<div class="col-sm-12">
					<a href="#footer-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a>
				</div>
			</div>
		</div>
	</section>

	<?php wcr_share_buttons(); ?> <!-- Social media share buttons social-media-sidebar.php -->
	

	<section id="feature-one">
		
		<div class="container">
			<div class="feature-row">

				 <!-- 1 variantas --> <?php 
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

	                <?php 
	                    wp_reset_postdata();
	            ?>
				<!-- php POST content END -->		
				
				
			</div>
		</div>
	</section>


	<section id="multi-gallery">
		<div class="container">
			<h3 class="display-3">Mažoji Galerija</h3>
			<!-- Grid row -->
			<!-- <div class="row col-md-12">
 -->				<!-- Grid column -->
				<!-- <div class="col-md-6"> --><!-- d-flex justify-content-center mb-5 -->
				    <!-- <button type="button" class="btn btn-outline-black waves-effect filter mr-1" data-rel="all">Visi</button>
				    <button type="button" class="btn btn-outline-black waves-effect filter mr-1" data-rel="1">Sportinė gimnastika</button>
				    <button type="button" class="btn btn-outline-black waves-effect filter mr-1" data-rel="2">Meninė gimnastika</button>
				</div> -->
				<!-- Grid column -->
			<!-- </div> -->
			<!-- Grid row -->

			<div class="row col-lg-12 section">
				<div class="col-lg-6">
					<!-- Grid row -->
					<div class="gallery" id="gallery">

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 2">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/woman.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 2">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/gymnastics.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 2">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/girl.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 1">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics2.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 2">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/woman3.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 1">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> -->
					    <!-- Grid column -->
						
						<div class="row">
						  <div class="image pics all 2">
						    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika1" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman3.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman3.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						  <div class="image pics all 2">
						    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika2" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/dance-1.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/dance-1.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						  <div class="image pics all 2">
						    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika3" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman5.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman5.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						</div>
						<div class="row">
						  <div class="image pics all 1">
						    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika4" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						  <div class="image pics all 2">
						    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika5" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics2.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics2.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						  <div class="image pics all 1">
						    <a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika7" data-image="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman.jpg" data-target="#image-gallery">
						    	<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/woman.jpg" alt="Nepavyko atvaizduoti nuotraukos" />
						    </a>
						  </div>
						</div>

						<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
				                <div class="modal-content">
				                    
				                    <div class="modal-body">
				                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
				                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
				                        </button>
				                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
										    <span class="sr-only">Previous</span> -->
										    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
				                        </button>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
										    <span class="sr-only">Next</span> -->
										     <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
				                        </button>
										</a>
				                    </div>
				                    
				                </div>
				            </div>

		        </div>

					</div>
					<!-- Grid row -->
					
					<a href="gallery"><button  class="to-gallery">Į galeriją &rarr;</button></a>
					
					
				</div>
					
				<div class="col-lg-6">
					<!--Carousel Wrapper-->
					<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
					    <!--Indicators-->
					    <ol class="carousel-indicators">
					        <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
					        <li data-target="#video-carousel-example" data-slide-to="1"></li>
					        <li data-target="#video-carousel-example" data-slide-to="2"></li>
					    </ol>
					    <!--/.Indicators-->
					    <!--Slides-->
					    <div class="carousel-inner" role="listbox">
					        <div class="carousel-item active pics-gallery"> <!--susikurti nauja klase ir ideti i css-->
					            <video class="video-fluid" autoplay loop>
					                <!-- <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />  -->
					                <!--<iframe width="100%" height="320" src="https://www.youtube.com/embed/4h02IJMTvFA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
					                <iframe width="560" height="315" src="https://www.youtube.com/embed/9z6wT-KB5jM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					            </video>
					        </div>
					        <div class="carousel-item pics-gallery">
					            <video class="video-fluid" autoplay loop>
					                <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
					            </video>
					        </div>
					        <div class="carousel-item pics-gallery">
					            <video class="video-fluid" autoplay loop>
					                <source src="https://mdbootstrap.com/img/video/Agua-natural.mp4" type="video/mp4" />
					            </video>
					        </div>
					    </div>
					    <!--/.Slides-->
					    <!--Controls-->
					    <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
					        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					        <span class="sr-only">Ankstesnis</span>
					    </a>
					    <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
					        <span class="carousel-control-next-icon" aria-hidden="true"></span>
					        <span class="sr-only">Kitas</span>
					    </a>
					    <!--/.Controls-->
					</div>
					<!--Carousel Wrapper-->
				</div> <!-- col-lg-6 -->
			</div><!-- row -->
		</div>
	</section><!-- multi-gallery -->

	<section id="contacts">
		<div class="container">
			<!-- <div class="row"> -->
				<h3 class="display-3">Kontaktai</h3>
			<!-- </div> -->
			<div class="row">
				<div class="col-lg-5">
					<ul>
						<h2>Adresas</h2>
						<li><p>Sporto g. 7</p></li>
					</ul>
					
					<ul>
						<h2>El. paštas</h2>
						<li><p>info@email.com</p></li>
					</ul>

					<ul>
						<h2>Telefono Nr.</h2>
						<li><p>Tel.: +370 6 00 00000</p></li>
					</ul>

					<ul>	
						<h2>Darbo laikas</h2>
						<li><p>I-V 8:00 - 17:00</p></li>
						<li><p>VI-VII Nedirbame</p></li>
					</ul>
				</div>
				<div class="col-lg-7">
					<ul class="list-unstyled">
						<div class="block">
							<!-- <div id="map"></div> -->
							<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/pictures/map.jpg" /></a>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<div class="arrow-up">
		<a href="#gymnasticsNavbar" class="btn btn-secondary-outline btn-sm" role="button">&uarr;</a>
	</div>



	<?php get_footer(); ?>