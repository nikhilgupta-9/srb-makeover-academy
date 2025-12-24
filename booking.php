<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from beautyzone-html.vercel.app/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 16:45:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	
	<!-- PAGE TITLE HERE -->
	<title>BeautyZone : Beauty Spa Salon HTML Template </title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link class="skin" rel="stylesheet" type="text/css" href="plugins/smartwizard/css/smart_wizard.css">
	<link rel="stylesheet" href="plugins/datepicker/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleSwitcher.css">
	<link rel="stylesheet" type="text/css" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>

   <?php
	include_once "includes/header.php";
	?>
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
       <div class="dlab-bnr-inr dlab-bnr-inr-md overlay-black-dark" style="background-image:url(images/banner/breadcrumb-bg3.png);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Book Now</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.html">Home</a></li>
							<li>Bookings</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
		<div class="content-block">
            <!-- About Us -->
			<div class="section-full content-inner-2">
                <div class="container">
					<div id="smartwizard">
						<ul class="d-flex">
							<li class="flex-fill"><a href="#time"><span><strong>1</strong><i class="fa fa-check"></i></span> Time</a></li>
							<li class="flex-fill"><a href="#service"><span><strong>2</strong><i class="fa fa-check"></i></span> Service</a></li>
							<li class="flex-fill"><a href="#details"><span><strong>3</strong><i class="fa fa-check"></i></span> Details</a></li>
							<li class="flex-fill"><a href="#payment"><span><strong>4</strong><i class="fa fa-check"></i></span> Payment</a></li>
							<li class="flex-fill"><a href="#done"><span><strong>5</strong><i class="fa fa-check"></i></span> Done</a></li>
						</ul>

						<div>
							<div id="time" class="wizard-box">
								<h6 class="m-b30">Please select service:</h6>
								<form class="row">
									<div class="col-lg-4 col-md-3 col-sm-3 form-group">
										<label>Category</label>
										<select>
											<option>Select category</option>
											<option>Cosmetic Dentistry</option>
											<option>Invisalign</option>
											<option>Orthodontics</option>
											<option>Dentures</option>
										</select>
									</div>	
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>Service</label>
										<select>
											<option>Select service</option>
											<option>Crown and Bridge</option>
											<option>Teeth Whitening</option>
											<option>Veneers</option>
											<option>Invisalign (invisable braces)</option>
											<option>Orthodontics (braces)</option>
											<option>Wisdom tooth Removal</option>
											<option>Root Canal Treatment</option>
											<option>Dentures</option>
										</select>
									</div>	
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>Employee</label>
										<select>
											<option>Any</option>
											<option>Nick Knight</option>
											<option>Jane Howard</option>
											<option>Ashley Stamp</option>
											<option>Bradley Tannen</option>
											<option>Wayne Turner</option>
											<option>Emily Taylor</option>
											<option>Hugh Canberg</option>
											<option>Jim Gonzalez</option>
											<option>Nancy Stinson</option>
											<option>Marry Murphy</option>
										</select>
									</div>	
									<div class="col-lg-4 col-md-6 col-sm-6 form-group">
										<label>I'm available on or after</label>
										<input name="dzOther[date]" class="form-control" placeholder="Select Date" id="datetimepicker" type="text">
									</div>	
									<div class="col-lg-2 col-md-6 col-sm-6 form-group">
										<label>Start from</label>
										<select>
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>	
									<div class="col-lg-2 col-md-6 col-sm-6 form-group">
										<label>Finish by</label>
										<select>
											<option>8:00 am</option>
											<option>9:00 am</option>
											<option>10:00 am</option>
											<option>11:00 am</option>
											<option>12:00 pm</option>
											<option>1:00 pm</option>
											<option>2:00 pm</option>
											<option>3:00 pm</option>
											<option>4:00 pm</option>
											<option>5:00 pm</option>
											<option>6:00 pm</option>
										</select>
									</div>	
								</form>
							</div>
							<div id="service" class="">
								<h6 class="m-b5">Booking Time</h6>
								<p class="m-b30">Below you can find list of available time slots for Crown and Bridge by Nick Knight. Click on a time slot to proceed with booking.</p>
								<div class="book-time row">
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox"> 
										</label>
										<label class="btn active">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										
										<label class="btn"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 17
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										<label class="btn"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn active"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox"> 
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										
										<label class="btn"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										<label class="btn active"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn active"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
									</div>
									<div class="btn-group d-flex flex-column m-b10 col-lg-2 col-md-4 col-sm-6 col-6" data-toggle="buttons">
										
										<label class="btn"> 9:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn"> 10:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time">
											<input type="checkbox" checked=""> Fri Sep 14
										</label>
										<label class="btn">
											<input type="checkbox"> 11:00 am
										</label>
										<label class="btn"> 12:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn">
											<input type="checkbox"> 2:00 am
										</label>
										<label class="btn"> 3:00 am
											<input type="checkbox"> 
										</label>
										<label class="btn active active-time"> Fri Sep 16
											<input type="checkbox"> 
										</label>
										<label class="btn"> 4:00 am
											<input type="checkbox"> 
										</label>
									</div>
								</div>

							</div>
							<div id="details" class="">
								<h6 class="m-b5">Details</h6>
								<p class="m-b0">You selected to book Crown and Bridge by Nick Knight at <b class="text-black">3:00</b> pm on <b class="text-black">September 19, 2018.</b> Price for the service is <b class="text-black">$350.00</b>.</p> <p class="m-b30">Please provide your details in the form below to proceed with booking.</p>
								<form class="row">
									<div class="col-lg-4 col-md-4 form-group">
										<label>Name</label>
										<input class="form-control" placeholder="Your Name" type="text">
									</div>	
									<div class="col-lg-4 col-md-4 form-group">
										<label>Phone</label>
										<input class="form-control" placeholder="Phone No." type="text">
									</div>	
									<div class="col-lg-4 col-md-4 form-group">
										<label>Email</label>
										<input class="form-control" placeholder="support@email.com" type="email">
									</div>		
								</form>
							</div>
							<div id="payment" class="">
								<h6>Please tell us how you would like to pay:</h6>
								<form action="https://beautyzone-html.vercel.app/action_page.php">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="customRadio" name="example1">
										<label class="custom-control-label" for="customRadio">I will pay locally</label>
									</div>
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" id="customRadio1" name="example1">
										<label class="custom-control-label" for="customRadio1">I will pay now with PayPal </label>
									</div>
								</form>
							</div>
							<div id="done" class="">
								<div class="successful-box text-center">
									<div class="successful-check"><i class="ti-check"></i></div>
									<h2>Successful</h2>									
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
	<?php
include_once "includes/footer.php";
?>
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<?php
include_once "includes/footer-links.php";
?>
</body>

<!-- Mirrored from beautyzone-html.vercel.app/booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 16:45:46 GMT -->
</html>
