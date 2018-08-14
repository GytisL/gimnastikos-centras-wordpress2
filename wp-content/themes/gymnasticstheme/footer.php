

	
	<section id="contact-bar">
		<!-- kontaktine forma su MODAL START -->
		<!-- <div class="container"> -->

		<div class="body">
		 	<!-- <h2>Modal Example</h2> -->
			<!-- Trigger the modal with a button -->
			<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#contact">Susisiekite</button> -->
			
				<a href="#" data-toggle="modal" data-target="#contact" class="button1"><i class="fa fa-envelope"></i>Susisiekite</a>
				
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

		</div></a>
		<!-- </div> --> <!-- container end -->
		<!-- kontaktine forma su MODAL END -->
	</section>





	<footer id="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h4 class="title">LOREM</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col-sm-4">
					<h4 class="title">VIRŠUTINĖ JUOSTA</h4>
					<ul class="list-unstyled">
						<li><a href="">Įvykiai</a></li>
						<li><a href="">Kontaktai</a></li>
						<li><a href="">Apie mus</a></li>
						<li><a href=""></i>Galerija</a></li>
					</ul>
				</div>
				<!-- <div class="col-sm-3">
					<ul class="list-unstyled">
						<li><a href="">Facebook</a></li>
						<li><a href="">LinkedIn</a></li>
						<li><a href="">Twitter</a></li>
					</ul>
				</div> -->
				<div class="col-sm-3">
					<h4 class="title">LOREM</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
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