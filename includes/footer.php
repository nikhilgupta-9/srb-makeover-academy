<?php
include_once(__DIR__ . "/../config/connect.php");
include_once(__DIR__ . "/../util/function.php");

$contact = contact_us();
$gallery = get_gallery();
?>

<!-- Footer -->
<footer class="site-footer text-uppercase footer-white">
	<!-- Our Portfolio END -->
	<div class="portfolio-gallery overflow-hidden">
		<div class="container-fluid p-0">
			<div class="row">
				<div class="carousel-gallery dots-none owl-none owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-btn-center-lr owl-btn-1 mfp-gallery">
					<?php
					foreach($gallery as $g){
					?>
					<div class="item dlab-box">
						<a href="<?= $site . $g ?>" data-source="" class="mfp-link dlab-media dlab-img-overlay3" title="Bridal Makeup">
							<img width="205" height="184" src="<?= $site . $g ?>" alt="Bridal Makeup">
						</a>
					</div>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Top -->
	<div class="footer-top">
		<div class="container wow fadeIn" data-wow-delay="0.5s">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-5">
					<div class="widget widget_services border-0">
						<h6 class="m-b20">Company</h6>
						<ul>
							<li><a href="<?= $site ?>">Home </a></li>
							<li><a href="<?= $site ?>about-us/">About Us </a></li>
							<li><a href="portfolio.php">Our Portfolio</a></li>
							<li><a href="price.php">Our Pricing</a></li>
							<li><a href="https://wa.me/919711228980?text=Hello%20I%20am%20interested%20in%20your%20makeup%20services.%20Please%20share%20details.">Booking Now</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-7">
					<div class="widget widget_services border-0">
						<h6 class="m-b20">Makeup Services</h6>
						<ul>
							<li><a href="shop-columns-sidebar.html">Shop </a></li>
							<li><a href="shop-checkout.html">Checkout</a></li>
							<li><a href="shop-cart.html">Cart</a></li>
							<li><a href="shop-login.html">Login</a></li>
							<li><a href="shop-register.html">Register</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
					<div class="widget widget_getintuch">
						<h6 class="m-b30">Contact us</h6>
						<ul>
							<li><i class="ti-location-pin"></i><strong>address</strong> <?= $contact['address'] ?> </li>
							<li><i class="ti-mobile"></i><strong>phone</strong><a href="tel:91<?= $contact['phone'] ?>" class="text-dark">+91 <?= $contact['phone'] ?></a> , <a href="tel:91<?= $contact['wp_number'] ?>" class="text-dark">+91 <?= $contact['wp_number'] ?></a></li>

							<li><i class="ti-email"></i><strong>email</strong><a href="mail:<?= $contact['email'] ?>" class="text-dark"><?= $contact['email'] ?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
					<div class="widget">
						<h6 class="m-b30">Subscribe To Our Newsletter</h6>
						<p class="text-capitalize m-b20">If you have any questions, you can contact with us so that we can give you a satisfying answer. Subscribe to our newsletter to get our latest products.</p>
						<div class="subscribe-form m-b20">
							<form class="dzSubscribe" action="https://beautyzone-html.vercel.app/script/mailchamp.php" method="post">
								<div class="dzSubscribeMsg"></div>
								<div class="input-group">
									<input name="dzEmail" required="required" class="form-control" placeholder="Your Email Address" type="email">
									<span class="input-group-btn">
										<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
									</span>
								</div>
							</form>
						</div>
						<ul class="list-inline m-a0">
							<li><a target="_blank" href="https://www.facebook.com/" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
							<li><a target="_blank" href="https://share.google/vbdWhg3X1A6FwZWFk" class="site-button google-plus circle "><i class="fa fa-google-plus"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer Bottom  -->
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-left"> <span>Copyright © 2021-<span class="current-year">2025</span> SRB Makeovers & Academy <a href="https://codewithnikhil.in" class="dzlink" target="_blank">| Design By Code With Nikhil</a></span> </div>
				<div class="col-lg-6 col-md-6 col-sm-6 text-center text-md-right ">
					<div class="widget-link ">
						<ul>
							<li><a href="contact.html"> Help Desk</a></li>
							<li><a href="contact.html"> Privacy Policy</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END-->
<button class="scroltop fa fa-chevron-up"></button>