<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!-- header -->
<header class="site-header header mo-left header-transparent">
	<div class="top-bar bg-primary text-white">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="dlab-topbar-left">
					<ul>
						<li><i class="fa fa-phone m-r5"></i><a href="tel:919711228980" class="text-light">+91 9711228980</a></li>
						<li><i class="fa fa-map-marker m-r5"></i> A-255/1, Hari Nagar, Clock Tower, New Delhi-110064</li>
					</ul>
				</div>
				<div class="dlab-topbar-right topbar-social">
					<ul>
						<li><a target="_blank" href="https://www.facebook.com/" class="site-button-link facebook hover"><i class="fa fa-facebook"></i></a></li>
						<li><a target="_blank" href="https://share.google/vbdWhg3X1A6FwZWFk" class="site-button-link google-plus hover"><i class="fa fa-google-plus"></i></a></li>
						<li><a target="_blank" href="https://twitter.com/" class="site-button-link twitter hover"><i class="fa fa-twitter"></i></a></li>
						<li><a target="_blank" href="https://www.instagram.com/" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
						<li><a target="_blank" href="https://www.linkedin.com/" class="site-button-link linkedin hover"><i class="fa fa-linkedin"></i></a></li>
						<li><a target="_blank" href="https://www.youtube.com/" class="site-button-link youtube hover"><i class="fa fa-youtube-play"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- main header -->
	<div class="sticky-header main-bar-wraper navbar-expand-lg">
		<div class="main-bar clearfix ">
			<div class="container clearfix">
				<!-- website logo -->
				<div class="logo-header mostion">
					<a href="index.php" class="dez-page"><img src="images/logo.png" alt=""></a>
				</div>
				<!-- nav toggle button -->
				<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
				<!-- main nav -->
				<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
					<ul class="nav navbar-nav">
						<li class="<?= ($currentPage == 'index.php') ? 'active' : ''; ?>">
							<a href="index.php">Home</a>
						</li>

						<li class="<?= ($currentPage == 'about-us.php') ? 'active' : ''; ?>">
							<a href="about-us.php">About Us</a>
						</li>

						<li><a href="javascript:void(0);">Our Service <i class="fa fa-chevron-down"></i></a>
							<ul class="sub-menu">
								<li><a href="makeup-services.php" class="dez-page">Makeup Services</a></li>
								<li><a href="service.php" class="dez-page">Hair Services</a></li>
								<li><a href="service.php" class="dez-page">Advance Services</a></li>
								<li><a href="service.php" class="dez-page">Services</a></li>
								<li><a href="services-details.php" class="dez-page">Services Details</a></li>
							</ul>
						</li>
						<li class="<?= ($currentPage == 'academy.php') ? 'active' : ''; ?>">
							<a href="academy.php">Academy</a>
						</li>

						<li class="<?= ($currentPage == 'price.php') ? 'active' : ''; ?>">
							<a href="price.php">Price</a>
						</li>

						<li class="<?= ($currentPage == 'portfolio.php') ? 'active' : ''; ?>">
							<a href="portfolio.php">Our Portfolio</a>
						</li>

						<li class="<?= ($currentPage == 'contact.php') ? 'active' : ''; ?>">
							<a href="contact.php">Contact</a>
						</li>

						<li>
							<a href="booking.html" class="site-button">Book Now</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- main header END -->
</header>
<!-- header END -->