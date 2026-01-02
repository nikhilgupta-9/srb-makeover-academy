<?php
include_once "config/connect.php";
include_once "util/function.php";

// Fetch services from products table
$services = get_product_sub_cat();
// $services_query = "SELECT * FROM products WHERE status = 'active' ORDER BY added_on DESC";
// $services_result = mysqli_query($conn, $services_query);

// if ($services_result && mysqli_num_rows($services_result) > 0) {
//     while ($service = mysqli_fetch_assoc($services_result)) {
//         $services[] = $service;
//     }
// }

// Fetch professional team members (assuming you have a 'team' table)
// If you don't have a team table, you can skip this section or create one
// $team_members = [];
// $team_query = "SELECT * FROM team WHERE status = 'active' ORDER BY display_order ASC";
// $team_result = mysqli_query($conn, $team_query);

// if ($team_result && mysqli_num_rows($team_result) > 0) {
//     while ($member = mysqli_fetch_assoc($team_result)) {
//         $team_members[] = $member;
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:title" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:description" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:image" content="http://beautyzone.dexignzone.com/xhtml/error-404.html">
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="<?= $site ?>image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="<?= $site ?>images/favicon.png">

	<!-- PAGE TITLE HERE -->
	<title><?= $services[0]['categories'] ?> | SRB Makeover & Academy</title>

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?= $site ?>css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?= $site ?>css/style.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $site ?>css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?= $site ?>css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="<?= $site ?>css/styleSwitcher.css">
	<link rel="stylesheet" type="text/css" href="<?= $site ?>plugins/perfect-scrollbar/css/perfect-scrollbar.css">

</head>
<style>
	@media (max-width: 767px) {
    .site-button,
    .site-button-secondry {
        padding: 5px 9px;
        font-size: 11px;
        line-height: 1.3;
        margin-bottom: 6px;
        /* width: 100%;     */
    }
}

</style>
<body id="bg">
	<div class="page-wraper">
		<div id="loading-area"></div>

		<!-- header -->
		<?php
		include_once "includes/header.php";
		?>
		<!-- header END -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="dlab-bnr-inr dlab-bnr-inr-md overlay-black-dark" style="background-image:url(<?= $site ?>images/banner/breadcrumb-bg3.png);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white"><?= $services[0]['categories'] ?></h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?= $site ?>">Home</a></li>
								<li><?= $services[0]['categories'] ?></li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<div class="content-block">
				<!-- Services Section -->
				<div class="section-full content-inner-2 bg-white hair-services">
					<div class="container">
						<div class="section-head text-black text-center">
							<h2 class="text-primary m-b10">Our Services</h2>
							<div class="dlab-separator-outer m-b0">
								<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
							</div>
							<p>Discover our wide range of beauty and spa services designed to pamper you and enhance your natural beauty.</p>
						</div>
						<div class="row">
							<?php if (!empty($services)): ?>
								<?php foreach ($services as $service): ?>
									<div class="col-lg-3 col-md-4 col-sm-6 col-6 p-lr0">
										<div class="icon-bx-wraper center p-a15">
											<div class="mb-3"> 
												<a href="services-details.php?slug=<?= $service['slug_url'] ?>" class="icon-cell">
													<?php 
													// You can set different icons based on category or use a default
													// $icon_class = get_service_icon($service['pro_cate']);
													// echo '<i class="' . $icon_class . '"></i>';
													?>
													<img src="<?= $site ?>admin/assets/img/uploads/<?= $service['pro_img'] ?>" alt="<?= $service['pro_name'] ?>">
												</a> 
											</div>
											<div class="icon-content">
												<h5 class="dez-tilte"><a href="services-details.php?slug=<?= $service['slug_url'] ?>"><?= htmlspecialchars($service['pro_name']) ?></a></h5>
												<?= substr($service['short_desc'],0,20) ?> ...
											</div>
											<div class="icon-content">
												<a href="<?= $site ?>booking.php" class="site-button-secondry">Get Quote</a>
												<a href="<?= $site ?>service-details/<?= $service['slug_url'] ?>" class="site-button-secondry">Learn More</a>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							<?php else: ?>
								<div class="col-12 text-center">
									<p>No services available at the moment. Please check back later.</p>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<!-- About Us -->
				<div class="section-full content-inner-3 services-box bg-pink-light" style="background-image:url(<?= $site ?>images/background/bg5.jpg); background-position: bottom; background-size: 100%; background-repeat: no-repeat;">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
									<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-woman"></i></span> </div>
									<div class="icon-content">
										<h6 class="dlab-tilte">We are Professional</h6>
										<p>Our team consists of certified professionals with years of experience in beauty and wellness.</p>
										<a href="about-us.php" class="site-button-secondry">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
									<div class="icon-lg m-b10"><span class="icon-cell text-primary"><i class="flaticon-mortar"></i></span> </div>
									<div class="icon-content">
										<h6 class="dlab-tilte">Premium Products</h6>
										<p>We use only high-quality, professional-grade products for all our services.</p>
										<a href="products.php" class="site-button-secondry">View Products</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
								<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
									<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-candle"></i></span> </div>
									<div class="icon-content">
										<h6 class="dlab-tilte">Relaxing Environment</h6>
										<p>Enjoy our serene and comfortable environment designed for ultimate relaxation.</p>
										<a href="gallery.php" class="site-button-secondry">View Gallery</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 m-b10">
								<div class="icon-bx-wraper p-lr15 p-b30 p-t20 bg-white center fly-box-ho">
									<div class="icon-lg m-b10"> <span class="icon-cell text-primary"><i class="flaticon-sauna-1"></i></span> </div>
									<div class="icon-content">
										<h6 class="dlab-tilte">Modern Equipment</h6>
										<p>We use the latest technology and equipment to ensure the best results.</p>
										<a href="about-us.php" class="site-button-secondry">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Our Professional Team -->
				<?php if (!empty($team_members)): ?>
				<div class="section-full content-inner-2 overlay-white-middle" style="background-image:url(<?= $site ?>images/background/bg1.png), url(<?= $site ?>images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
					<div class="container">
						<div class="section-head text-black text-center">
							<h2 class="text-primary m-b10">Our Professional Team</h2>
							<div class="dlab-separator-outer m-b0">
								<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
							</div>
							<p>Meet our team of skilled professionals dedicated to providing you with the best beauty experience.</p>
						</div>
						<div class="team-carousel owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full">
							<?php foreach ($team_members as $member): ?>
							<div class="item">
								<div class="dlab-box text-center team-box">
									<div class="dlab-media"> 
										<img width="300" height="300" src="<?= $site ?>uploads/team/<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>">
									</div>
									<div class="dlab-title-bx p-a10">
										<h5 class="text-black m-a0"><?= htmlspecialchars($member['name']) ?></h5>
										<span class="clearfix"><?= htmlspecialchars($member['designation']) ?></span>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<?php endif; ?>
				<!-- Our Professional Team End -->
				
				<!-- Video Presentation Section -->
				<div class="section-full video-presentation overlay-black-dark bg-img-fix" style="background-image:url(<?= $site ?>images/background/b1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 text-white text-center">
								<h2>Video Presentation</h2>
								<p class="max-w700 m-auto">In this video, our staff members tell about their work at BeautyZone, how they achieve the best results for their clients every day and more. Click the Play button below to watch this presentation.</p>
								<div class="video-play-icon m-t50">
									<a href="https://www.youtube.com/embed/your-video-id" class="popup-youtube video"><i class="ti-control-play"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Call to Action Section -->
				<div class="section-full content-inner overlay-white-middle" style="background-image:url(<?= $site ?>images/background/bg1.png), url(<?= $site ?>images/background/bg2.png); background-position: bottom, top; background-size: 100%; background-repeat: no-repeat;">
					<div class="container">
						<div class="section-head text-black text-center">
							<h2 class="text-primary m-b10">Book Your Appointment Today</h2>
							<div class="dlab-separator-outer m-b0">
								<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
							</div>
							<p>Ready to experience our premium services? Book your appointment now and let our professionals pamper you.</p>
						</div>
						<div class="row">
							<div class="col-lg-4 col-md-6 m-b30">
								<div class="icon-bx-wraper center p-a30 bg-gray">
									<div class="icon-lg radius m-b20"> 
										<span class="icon-cell"><i class="flaticon-phone-call text-primary"></i></span> 
									</div>
									<div class="icon-content">
										<h5 class="dez-tilte">Call Us</h5>
										<p>+1 (555) 123-4567</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 m-b30">
								<div class="icon-bx-wraper center p-a30 bg-gray">
									<div class="icon-lg radius m-b20"> 
										<span class="icon-cell"><i class="flaticon-email text-primary"></i></span> 
									</div>
									<div class="icon-content">
										<h5 class="dez-tilte">Email Us</h5>
										<p>info@beautyzone.com</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-6 m-b30">
								<div class="icon-bx-wraper center p-a30 bg-gray">
									<div class="icon-lg radius m-b20"> 
										<span class="icon-cell"><i class="flaticon-calendar text-primary"></i></span> 
									</div>
									<div class="icon-content">
										<h5 class="dez-tilte">Book Online</h5>
										<a href="book-appointment.php" class="site-button">Book Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- contact area END -->
			</div>
			<!-- contact area END -->
		</div>
		<!-- Content END-->
		<!-- Footer -->
		<?php
		include_once "includes/footer.php";
		?>
		<!-- Footer END -->
		<button class="scroltop fa fa-chevron-up"></button>
	</div>
	<?php
	include_once "includes/footer-links.php";
	?>
</body>

</html>