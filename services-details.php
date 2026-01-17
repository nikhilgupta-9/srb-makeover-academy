<?php
include_once "config/connect.php";
include_once "util/function.php";

// Get service slug from URL
$service_slug = isset($_GET['alias']) ? mysqli_real_escape_string($conn, $_GET['alias']) : '';
$contact = contact_us();

// Fetch service details
$service = [];
$related_services = [];

if (!empty($service_slug)) {
	// Fetch main service details
	$service_query = "SELECT * FROM products WHERE slug_url = '$service_slug' AND status = 1";
	$service_result = mysqli_query($conn, $service_query);

	if ($service_result && mysqli_num_rows($service_result) > 0) {
		$service = mysqli_fetch_assoc($service_result);

		// Fetch related services (same category)
		$category = $service['pro_cate'];
		$related_query = "SELECT * FROM products WHERE pro_cate = '$category' AND slug_url != '$service_slug' AND status = 1 LIMIT 6";
		$related_result = mysqli_query($conn, $related_query);

		if ($related_result && mysqli_num_rows($related_result) > 0) {
			while ($related = mysqli_fetch_assoc($related_result)) {
				$related_services[] = $related;
			}
		}

		// Fetch all services for sidebar
		$all_services_query = "SELECT id, pro_name, slug_url FROM products WHERE status = 1 ORDER BY pro_name ASC limit 5";
		$all_services_result = mysqli_query($conn, $all_services_query);
		$all_services = [];

		if ($all_services_result && mysqli_num_rows($all_services_result) > 0) {
			while ($serv = mysqli_fetch_assoc($all_services_result)) {
				$all_services[] = $serv;
			}
		}

		// Update page title with service name
		$page_title = htmlspecialchars($service['pro_name']) . " - BeautyZone";
	} else {
		header("Location: '.$site.'services.php");
		exit();
	}
} else {
	header("Location: '.$site.'services.php");
	exit();
}

// WhatsApp number - configure this in your settings
$whatsapp_number = "+91" . $contact['phone']; // Change this to your actual WhatsApp number
$whatsapp_message = rawurlencode("Hello! I'm interested in " . $service['pro_name'] . " service. Can you provide more details?");
$whatsapp_url = "https://wa.me/" . $whatsapp_number . "?text=" . $whatsapp_message;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- PAGE TITLE HERE -->
	<title>BeautyZone : Beauty Spa Salon HTML Template </title>

	<meta name="keywords" content="<?= htmlspecialchars($service['meta_key']) ?>">
	<meta name="author" content="SRB Makeover & Academy">
	<meta name="robots" content="index, follow">
	<meta name="description" content="<?= htmlspecialchars($service['meta_desc']) ?>">
	<meta property="og:title" content="" <?= htmlspecialchars($service['meta_title']) ?>">
	<meta property="og:description" content="" <?= htmlspecialchars($service['meta_desc']) ?>">
	<meta property="og:image" content="<?= $site ?>admin/assets/img/uploads/<?= htmlspecialchars($service['pro_img']) ?>">
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON -->
	<link rel="icon" href="<?= $site ?>images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="<?= $site ?>images/favicon.png">


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
	/* FAQ Styling */
	.accordion .panel {
		margin-bottom: 10px;
		border-radius: 5px;
		overflow: hidden;
	}

	.accordion .acod-head {
		background: #f9f9f9;
	}

	.accordion .acod-head .acod-title a {
		padding: 15px 20px;
		display: block;
		color: #333;
		text-decoration: none;
		font-weight: 500;
		position: relative;
	}

	.accordion .acod-head .acod-title a:after {
		content: '\f107';
		font-family: 'Font Awesome 5 Free';
		font-weight: 900;
		position: absolute;
		right: 20px;
		top: 50%;
		transform: translateY(-50%);
		transition: all 0.3s;
	}

	.accordion .acod-head .acod-title a[aria-expanded="true"]:after {
		content: '\f106';
		color: var(--primary-color);
	}

	.accordion .acod-head .acod-title a:hover,
	.accordion .acod-head .acod-title a[aria-expanded="true"] {
		background-color: var(--secondary-color);
		color: #000;
	}

	.accordion .acod-content {
		border-top: 1px solid #eee;
	}

	/* List Check Styling */
	.list-check {
		list-style: none;
		padding-left: 0;
	}

	.list-check li {
		padding: 5px 0 5px 25px;
		position: relative;
	}

	.list-check li:before {
		content: '\f00c';
		font-family: 'Font Awesome 5 Free';
		font-weight: 900;
		position: absolute;
		left: 0;
		color: var(--primary-color);
	}

	.list-check.primary li:before {
		color: var(--primary-color);
	}

	/* Alert Box */
	.alert {
		padding: 15px;
		border-radius: 5px;
		margin: 10px 0;
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
						<h1 class="text-white"><?= htmlspecialchars($service['pro_name']) ?></h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?= $site ?>">Home</a></li>
								<li><?= htmlspecialchars($service['pro_name']) ?></li>
							</ul>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
			<!-- inner page banner END -->
			<!-- contact area -->
			<div class="content-block">
				<div class="section-full content-inner-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4">
								<div class="sticky-top">
									<ul class="service-list m-b30">
										<?php foreach ($all_services as $serv): ?>
											<li class="<?= ($serv['slug_url'] == $service_slug) ? 'active' : '' ?>">
												<a href="<?= $site ?>service-details/<?= htmlspecialchars($serv['slug_url']) ?>">
													<?= htmlspecialchars($serv['pro_name']) ?>
												</a>
											</li>
										<?php endforeach; ?>
									</ul>
									<div class="download-brochure m-b30 ">
										<h5 class="m-b15">Book This Service Now!</h5>
										<p class="m-b20">Get 15% off on your first visit when you book online.</p>
										<!-- <a href="book-appointment.php?service=<?= urlencode($service['pro_name']) ?>"
											class="site-button">
											<i class="fa fa-calendar-check"></i> Book Appointment
										</a> -->
										<a href="javascript:void(0);" class="site-button">Download PDF</a>
									</div>
								</div>
							</div>
							<div class="col-lg-9 col-md-8">
								<h2 class="m-t0 m-b10 fw6"><?= htmlspecialchars($service['pro_name']) ?></h2>
								<?= $service['short_desc'] ?>
								<img src="<?= $site ?>admin/assets/img/uploads/<?= htmlspecialchars($service['pro_img']) ?>" alt="<?= htmlspecialchars($service['pro_name']) ?>" class="m-b20">

								<p class="m-b20"><?= $service['description'] ?></p>

								<!-- faq section  -->
								<div class="m-tb20">
									<div class="section-head style-1">
										<h3 class="title">Frequently Asked Questions</h3>
										<p class="m-b30">Have questions about our services? Find answers to common queries below.</p>
									</div>

									<div class="accordion no-gap" id="accordion1">
										<!-- SRB Makeover Services FAQ -->
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq1" class="" aria-expanded="true">
														<i class="fa fa-spa text-theme-primary mr-2"></i> 1. What makes SRB Makeover services unique?
													</a>
												</h6>
											</div>
											<div id="faq1" class="acod-body collapse show" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>SRB Makeover offers premium beauty services with certified professionals, using only high-quality products and the latest techniques. Our personalized approach ensures each client receives customized treatments tailored to their specific needs.</p>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq2" class="collapsed" aria-expanded="false">
														<i class="fa fa-calendar-check text-theme-primary mr-2"></i> 2. How do I book an appointment at SRB Makeover?
													</a>
												</h6>
											</div>
											<div id="faq2" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>You can book appointments through multiple channels:</p>
													<ul class="list-check primary">
														<li>Online booking via our website</li>
														<li>WhatsApp: +91-<?= $contact['phone'] ?></li>
														<li>Phone call: +91-<?= $contact['wp_number'] ?></li>
														<li>Visit our salon directly</li>
														<li>Instagram/Facebook direct messages</li>
													</ul>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq3" class="collapsed" aria-expanded="false">
														<i class="fa fa-users text-theme-primary mr-2"></i> 3. Are your beauty professionals certified?
													</a>
												</h6>
											</div>
											<div id="faq3" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Yes, all our beauty professionals are certified and regularly trained in the latest beauty techniques. Many of our staff are graduates from our own SRB Academy, ensuring they maintain our high standards of service quality.</p>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq4" class="collapsed" aria-expanded="false">
														<i class="fa fa-clock text-theme-primary mr-2"></i> 4. What are your operating hours?
													</a>
												</h6>
											</div>
											<div id="faq4" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Our standard operating hours are:</p>
													<ul>
														<li><strong>Monday - Saturday:</strong> 9:00 AM - 8:00 PM</li>
														<li><strong>Sunday:</strong> 10:00 AM - 6:00 PM</li>
														<li><strong>Festive Days:</strong> Special hours (please call to confirm)</li>
													</ul>
													<p class="m-t10">We recommend booking in advance, especially for weekends and festive seasons.</p>
												</div>
											</div>
										</div>

										<!-- SRB Academy FAQ -->
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq5" class="collapsed" aria-expanded="false">
														<i class="fa fa-graduation-cap text-theme-primary mr-2"></i> 5. What courses does SRB Academy offer?
													</a>
												</h6>
											</div>
											<div id="faq5" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>SRB Academy offers comprehensive beauty and wellness courses including:</p>
													<div class="row">
														<div class="col-md-6">
															<ul class="list-check primary">
																<li>Professional Makeup Artistry</li>
																<li>Hair Styling & Cutting</li>
																<li>Skin Care & Facials</li>
																<li>Nail Art & Extension</li>
															</ul>
														</div>
														<div class="col-md-6">
															<ul class="list-check primary">
																<li>Bridal Makeup Specialization</li>
																<li>Beauty Therapy</li>
																<li>Spa & Massage Therapy</li>
																<li>Beauty Salon Management</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq6" class="collapsed" aria-expanded="false">
														<i class="fa fa-certificate text-theme-primary mr-2"></i> 6. Are SRB Academy courses certified?
													</a>
												</h6>
											</div>
											<div id="faq6" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Yes, SRB Academy provides government-recognized certification upon course completion. Our certificates are widely accepted in the beauty industry and help students establish their careers in salons, spas, or start their own beauty businesses.</p>
													<div class="alert bg-theme-secondary border-theme-primary m-t10 p-3">
														<strong><i class="fa fa-info-circle text-theme-primary"></i> Note:</strong> We also provide placement assistance to our top-performing students.
													</div>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq7" class="collapsed" aria-expanded="false">
														<i class="fa fa-inr text-theme-primary mr-2"></i> 7. What is the fee structure for SRB Academy courses?
													</a>
												</h6>
											</div>
											<div id="faq7" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Course fees vary based on the duration and specialization. We offer:</p>
													<ul class="list-check primary">
														<li><strong>Short-term courses:</strong> 1-3 months duration</li>
														<li><strong>Diploma courses:</strong> 6-12 months duration</li>
														<li><strong>Advanced specialization:</strong> 3-6 months duration</li>
													</ul>
													<p class="m-t10">We also offer flexible payment options, scholarships for meritorious students, and installment plans. Please contact our academy office for detailed fee structure.</p>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq8" class="collapsed" aria-expanded="false">
														<i class="fa fa-chalkboard-teacher text-theme-primary mr-2"></i> 8. What is the admission process for SRB Academy?
													</a>
												</h6>
											</div>
											<div id="faq8" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Admission process is simple and straightforward:</p>
													<ol>
														<li>Visit our academy or website for course details</li>
														<li>Fill out the admission form</li>
														<li>Submit required documents (10th/12th marksheet, ID proof, photos)</li>
														<li>Pay the registration fee</li>
														<li>Attend orientation session</li>
													</ol>
													<p class="m-t10">We accept admissions throughout the year with batch starting every month.</p>
												</div>
											</div>
										</div>

										<!-- General FAQ -->
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq9" class="collapsed" aria-expanded="false">
														<i class="fa fa-percent text-theme-primary mr-2"></i> 9. Do you offer discounts or packages?
													</a>
												</h6>
											</div>
											<div id="faq9" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<p>Yes, we regularly offer special packages and discounts:</p>
													<ul class="list-check primary">
														<li><strong>Student Discount:</strong> 15% off for college students</li>
														<li><strong>Bridal Packages:</strong> Complete wedding packages</li>
														<li><strong>Family Packages:</strong> Special rates for family bookings</li>
														<li><strong>Festive Offers:</strong> Seasonal discounts</li>
														<li><strong>Loyalty Program:</strong> Rewards for regular customers</li>
													</ul>
													<div class="special-offer-badge m-t10 p-2">
														<i class="fa fa-gift"></i> Current Offer: 20% off on first service!
													</div>
												</div>
											</div>
										</div>

										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a href="#" data-toggle="collapse" data-target="#faq10" class="collapsed" aria-expanded="false">
														<i class="fa fa-headset text-theme-primary mr-2"></i> 10. How can I contact SRB Makeover & Academy?
													</a>
												</h6>
											</div>
											<div id="faq10" class="acod-body collapse" data-parent="#accordion1">
												<div class="acod-content p-3 bg-light radius-sm">
													<div class="row">
														<div class="col-md-6">
															<h6 class="text-theme-primary">SRB Makeover Salon:</h6>
															<p><i class="fa fa-map-marker-alt text-theme-primary mr-2"></i> <?=$contact['address']?></p>
															<p><i class="fa fa-phone text-theme-primary mr-2"></i> +91-<?=$contact['phone']?></p>
															<p><i class="fab fa-whatsapp text-theme-primary mr-2"></i> +91-<?=$contact['wp_number']?></p>
														</div>
														<div class="col-md-6">
															<h6 class="text-theme-primary">SRB Academy:</h6>
															<p><i class="fa fa-map-marker-alt text-theme-primary mr-2"></i> <?=$contact['address']?></p>
															<p><i class="fa fa-phone text-theme-primary mr-2"></i> +91-<?=$contact['phone']?></p>
															<p><i class="fa fa-envelope text-theme-primary mr-2"></i> <?=$contact['email']?></p>
														</div>
													</div>
													<div class="m-t10">
														<a href="contact.php" class="site-button btn-theme-primary">
															<i class="fa fa-map-marked-alt"></i> View Location & Contact Details
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>

									
								</div>
								



								<div class="row m-lr0 my-4">
									<div class="section-head style-1">
										<h3 class="title">Related Services</h3>
										<p class="m-b30">Have questions about our services? Find answers to common queries below.</p>
									</div>
									<div class="blog-carousel mfp-gallery owl-loaded owl-theme owl-carousel gallery owl-btn-center-lr owl-btn-1 primary m-b30">
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="<?= $site ?>images/blog/grid/pic1.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">We are Professional</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">Lux Cosmetic</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">Medical Education</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="images/blog/grid/pic1.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-woman"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">We are Professional</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="images/blog/grid/pic2.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-mortar"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">Lux Cosmetic</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
										<div class="item">
											<div class="dlab-box service-iconbox">
												<div class="dlab-media dlab-img-overlay5"> <a href="services-details.html"><img src="images/blog/grid/pic3.jpg" alt=""></a> </div>
												<div class="dlab-info p-a30 p-t60 border-1 bg-white text-center">
													<div class="icon-bx-sm radius bg-white m-b20"> <a href="services-details.html" class="icon-cell"><i class="flaticon-candle"></i></a> </div>
													<h6 class="dlab-title m-t0"><a href="services-details.html">Medical Education</a></h6>
													<p class="m-b15">Lorem ipsum dolor Fusce varius euismod lacus eget feugiat rorem.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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