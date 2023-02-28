<!-- Start Footer Area -->
<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li><?php the_field('address_1',6)?></li>
									<li><?php the_field('address_2',6)?></li>
									<li><?php the_field('email',6)?></li>
									<li><?php the_field('phone_number',6)?></li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="<?php echo get_template_directory_uri();?>/images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
	<!-- Jquery -->
    <script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/jquery-migrate-3.0.0.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/easing.js"></script>
	<!-- Active JS -->
	<script src="<?php echo get_template_directory_uri();?>/js/active.js"></script>
</body>
</html>
<?php wp_footer();?>