		<h3 class="title"><?php the_title(); ?></h3>
			<!-- Grid row -->
			
				<!-- Grid column -->
				<!-- <div class="col-md-6"> --><!-- d-flex justify-content-center mb-5 -->
				    <!-- <button type="button" class="btn btn-outline-black waves-effect filter mr-1" data-rel="all">Visi</button>
				    <button type="button" class="btn btn-outline-black waves-effect filter mr-1" data-rel="1">Sportinė gimnastika</button>
				</div> --><!-- Grid column -->
			
			<!-- Grid row -->
			<div class="row col-lg-12 section">
				<div class="col-lg-6 picture-section">
					<!-- Grid row -->
					<div class="gallery" id="gallery">
					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 2">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/woman.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> --><!-- Grid column -->

					    <!-- Grid column -->
					    <!-- <div class="mb-3 pics animation all 1">
					        <a href="gallery"><img class="img-fluid" src="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/sport-gymnastics.jpg" alt="Nepavyko atvaizduoti nuotraukos" /></a>
					    </div> --><!-- Grid column -->
					    
						<div class="row column1">
							<div class="image pics all 2">
						    	<?php echo get_post_meta( get_the_ID(), 'image-1', true); ?>
							</div>
							<div class="image pics all 2">
						    	<?php echo get_post_meta( get_the_ID(), 'image-2', true); ?>
							</div>
							<div class="image pics all 2">
						    	<?php echo get_post_meta( get_the_ID(), 'image-3', true); ?>
							</div>
						</div>
						<div class="row column2">
							<div class="image pics all 1">
						    	<?php echo get_post_meta( get_the_ID(), 'image-4', true); ?>
							</div>
							<div class="image pics all 2">
						    	<?php echo get_post_meta( get_the_ID(), 'image-5', true); ?>
							</div>
							<div class="image pics all 1">
						    	<?php echo get_post_meta( get_the_ID(), 'image-6', true); ?>
							</div>
							<!-- <div class="image pics all 1">
								<a  class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Gimnastika7" data-image="<?php //echo get_stylesheet_directory_uri(); ?>/pictures/girl-2.jpg" data-target="#image-gallery">
						    	<?php //echo get_post_meta( get_the_ID(), 'image-6', true); ?>
								</a>
							</div> -->
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
										    <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i></button>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
										    <span class="sr-only">Next</span> -->
										    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i></button>
										</a>
				                    </div>
				                </div>
				            </div>
		        		</div>

					</div>
					<!-- Grid row -->
					
					<!-- <a href="gallery"><button class="to-gallery">Į galeriją &rarr;</button></a> -->
					<a href="<?php echo get_permalink(220); ?>"><button class="to-gallery"><?php _e( 'Į galeriją &rarr;' ); ?></button></a>
				</div>

				<div class="col-lg-6 video-gallery">
					<!--Carousel Wrapper-->
					<div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">
					    <!--Indicators
					    <ol class="carousel-indicators">
					        <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
					        <li data-target="#video-carousel-example" data-slide-to="1"></li>
					        <li data-target="#video-carousel-example" data-slide-to="2"></li>
					    </ol>-->
					    <!--/.Indicators-->
					    <!--Slides-->
					    <div class="carousel-inner pics-list" role="listbox">
					        <div class="carousel-item active pics-gallery"> <!--susikurti nauja klase ir ideti i css-->
					            <!-- <video loop="" muted="" autoplay="" playsinline=""> -->
					            	<?php echo get_post_meta( get_the_ID(), 'video-1', true); ?> <!-- video  -  custom field'o name-->
						        <!-- </video>  -->
					        </div>
					        <div class="carousel-item pics-gallery">
					            <!-- <video loop="" muted="" autoplay="" playsinline=""> -->
					                <?php echo get_post_meta( get_the_ID(), 'video-2', true); ?>
					            <!-- </video> -->
					        </div>
					        <div class="carousel-item pics-gallery">
					            <video loop="" muted="" autoplay="" playsinline="">
					                <?php echo get_post_meta( get_the_ID(), 'video-3', true); ?>
					            </video>
					            <!-- <iframe width="100%" height="360" src="https://player.vimeo.com/video/253404002"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								<iframe width="100%" height="320" src="https://www.youtube.com/embed/4h02IJMTvFA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
					        </div>
					        <div class="carousel-item pics-gallery">
					                <?php echo get_post_meta( get_the_ID(), 'video-4', true); ?>
					        </div>
					    </div>
					    <!--/.Slides-->
					    <!--Controls-->
					    <div class="modal-body">
						    <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
						        <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						        <span class="sr-only">Ankstesnis</span> -->
						        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i></button>
						    </a>
						    <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
						        <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
						        <span class="sr-only">Kitas</span> -->
						        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i></button>
						    </a>
						</div><!--/.Controls-->
					</div><!--Carousel Wrapper-->
				</div> <!-- video-gallery -->
			</div><!-- section -->