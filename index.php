<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from beautyzone-html.vercel.app/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Dec 2025 16:42:14 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:title" content="BeautyZone : Beauty Spa Salon HTML Template">
	<meta property="og:description" content="BeautyZone : Beauty Spa Salon HTML Template">
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
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
	<link rel="stylesheet" type="text/css" href="css/styleSwitcher.css">
	<link rel="stylesheet" type="text/css" href="plugins/perfect-scrollbar/css/perfect-scrollbar.css">
	<!-- Revolution Slider Css -->
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
	<!-- Revolution Navigation Style -->

	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>
<style>
	.video-card {
		border-radius: 10px;
		overflow: hidden;
		box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
		transition: transform 0.3s ease;
		height: 100%;
	}

	.video-card:hover {
		transform: translateY(-10px);
	}

	.video-thumbnail {
		height: 450px;
		overflow: hidden;
	}

	.video-thumbnail img {
		height: 100%;
		object-fit: cover;
		transition: transform 0.5s ease;
	}

	.video-card:hover .video-thumbnail img {
		transform: scale(1.05);
	}

	.video-play-btn {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 60px;
		height: 60px;
		background: rgba(255, 107, 107, 0.9);
		border-radius: 50%;
		display: flex;
		align-items: center;
		justify-content: center;
		color: white;
		font-size: 24px;
		cursor: pointer;
		transition: all 0.3s ease;
	}

	.video-play-btn:hover {
		background: rgba(255, 107, 107, 1);
		transform: translate(-50%, -50%) scale(1.1);
	}

	.video-info {
		border-top: 3px solid #ff6b6b;
	}

	.video-info h5 {
		font-size: 16px;
		line-height: 1.4;
	}

	.modal-content {
		border-radius: 15px;
		overflow: hidden;
	}

	.modal-header {
		background: #ff6b6b;
		color: white;
		border-bottom: none;
	}

	.modal-header .btn-close {
		filter: invert(1);
	}

	@media (max-width: 754px) {
		.video-thumbnail {
			height: 280px;
		}
	}
</style>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-area"></div>
		<?php
		include_once "includes/header.php";
		?>
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Main Slider -->
			<div class="rev-slider">
				<div id="rev_slider_1164_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="exploration-header" data-source="gallery" style="background-color:transparent;padding:0px;">
					<!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
					<div id="rev_slider_1164_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
						<ul> <!-- SLIDE  -->
							<li data-index="rs-3204" data-transition="slideoververtical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/main-slider/slide8.jpg" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="2000" data-fsslotamount="7" data-saveperformance="off" data-title="" data-param1="What our team has found in the wild" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="images/main-slider/slide8.jpg" alt="" data-lazyload="images/main-slider/slide8.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<div class="tp-caption tp-shape tp-shapewrapper"
									id="slide-101-layer-14"
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
									data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
									data-width="full"
									data-height="full"
									data-whitespace="nowrap"
									data-type="shape"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":1500,"frame":"999","to":"opacity:0;","ease":"Power4.easeIn"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5;font-family:Open Sans; background-color:rgba(0,0,0,0.15); background-size:100%; background-repeat:no-repeat; background-position:bottom;"> </div>

								<!-- LAYER NR. 1 -->
								<div class="tp-caption  "
									id="slide-3204-layer-1"
									data-x="['center','left','middle','middle']"
									data-hoffset="['-320px','-310px','0','0']"
									data-y="['middle','middle','top','top']"
									data-voffset="['-35','-35','200','100']"
									data-fontsize="['200','150','100','60']"
									data-lineheight="['200','45','35','30']"
									data-width="['1000','1000','600','360']"
									data-height="none"
									data-whitespace="normal"
									data-type="text"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 5;  white-space: normal; color:#fff2bf; font-family: 'Great Vibes', cursive; border-width:0px;">
									Bridal
								</div>

								<!-- LAYER NR. 2 -->
								<div class="tp-caption"
									id="slide-3204-layer-2"
									data-x="['center','center','middle','middle']"
									data-hoffset="['-210px','-200px','0','0']"
									data-y="['middle','middle','top','top']"
									data-voffset="['90','70','280','150']"
									data-width="['700','600','600','260']"
									data-fontsize="['72','60','40','30']"
									data-lineheight="['65','45','35','30']"
									data-height="none"
									data-whitespace="normal"
									data-type="text"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-textAlign="['left','left','center','center']"
									data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 7; white-space: normal; color:#fff; font-family:'Abhaya Libre', serif; border-width:0px; text-transform:uppercase; font-weight:600;">
									Bridal Makeup
								</div>
								<!-- LAYER NR. 4 -->
								<div class="tp-caption tp-resizeme rs-parallaxlevel-1"
									id="slide-100-layer-5"
									data-x="['right','right','middle','middle']" data-hoffset="['-330','-400','0','0']"
									data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-40','-40','-20','-20']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-type="image"
									data-responsive_offset="on"
									data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:50px;rZ:5deg;opacity:0;fb:50px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 11;">
									<div class="rs-looped rs-wave" data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%">
										<img src="images/main-slider/slider-7-new3.png" alt="" data-ww="['965px','965px','500px','300px']" data-hh="['894px','894px','463px','278px']" width="407" height="200" data-no-retina>
									</div>
								</div>
								<!-- LAYER NR. 2 -->
								<div class="tp-caption"
									id="slide-3204-layer-20"
									data-x="['left','left','left','left']"
									data-hoffset="['0','0','0','0']"
									data-y="['bottom','bottom','bottom','bottom']"
									data-voffset="['30','0','70','40']"
									data-width="['700','600','600','260']"
									data-fontsize="['300','300','40','30']"
									data-lineheight="['65','45','35','30']"
									data-height="none"
									data-whitespace="normal"
									data-type="text"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-textAlign="['left','left','right','center']"
									data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:50px;rZ:5deg;opacity:0;fb:50px;","to":"o:0.05;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 7; white-space: normal; color:#fff; font-family:'Abhaya Libre', serif; border-width:0px; text-transform:uppercase; font-weight:600;">
									<div class="rs-looped rs-wave" data-speed="5" data-angle="0" data-radius="5px" data-origin="50% 50%">
										Makeup
									</div>
								</div>
								<!-- LAYER NR. 3 -->
								<div class="tp-caption  mb-2"
									id="slide-3204-layer-3"
									data-x="['center','center','middle','middle']"
									data-hoffset="['-255','-245','0','0']"
									data-y="['middle','middle','middle','middle']"
									data-voffset="['175','120','-140','-80']"
									data-width="['600','500','500','350']"
									data-fontsize="['18','16','18','16']"
									data-lineheight="['26','26','26','24']"
									data-height="none"
									data-whitespace="normal"
									data-type="text"
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"from":"y:50px;opacity:0;","speed":2000,"to":"o:1;","delay":750,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
									data-textAlign="['left','left','center','center']"
									data-paddingtop="[0,100,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]"
									style="z-index: 7; white-space: normal; color:#fff; font-family:'Montserrat', sans-serif; border-width:0px; font-weight:400;">
									Saumya Batra, a makeup artist by profession, is an expert in providing services for all occasion’s namely engagement, weddings, receptions, events, fashion shows, video shoots, television commercials, workshops, and advertising campaigns.
								</div>
								<!-- LAYER NR. 5 -->
								<a class="tp-caption rev-btn tp-resizeme"
									href="about-us.html" target="_blank"
									id="slide-411-layer-13"
									data-x="['center','center','center','center']"
									data-hoffset="['-470','-410','-90','-90']"
									data-y="['center','center','middle','middle']"
									data-voffset="['270','270','-50','20']"
									data-width="none"
									data-height="none"
									data-whitespace="['nowrap','nowrap','nowrap','nowrap']"
									data-type="button"
									data-actions=''
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
									data-margintop="[0,0,0,0]"
									data-marginright="[0,0,0,0]"
									data-marginbottom="[0,0,0,0]"
									data-marginleft="[0,0,0,0]"
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[35,35,35,35]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[35,35,35,35]"
									style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:1px 1px 1px 1px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Read More
								</a>
								<a class="tp-caption rev-btn tp-resizeme"
									href="booking.html" target="_blank"
									id="slide-411-layer-12"
									data-x="['center','center','center','center']"
									data-hoffset="['-290','-230','90','90']"
									data-y="['center','center','middle','middle']"
									data-voffset="['270','270','-50','20']"
									data-width="none"
									data-height="none"
									data-whitespace="['nowrap','nowrap','nowrap','nowrap']"
									data-type="button"
									data-actions=''
									data-basealign="slide"
									data-responsive_offset="off"
									data-responsive="off"
									data-frames='[{"delay":"+690","speed":2000,"frame":"0","from":"y:50px;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"}]'
									data-margintop="[0,0,0,0]"
									data-marginright="[0,0,0,0]"
									data-marginbottom="[0,0,0,0]"
									data-marginleft="[0,0,0,0]"
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[35,35,35,35]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[35,35,35,35]"
									style="z-index: 13; white-space: normal; font-size: 17px; line-height: 50px; font-weight: 600; color: rgba(255, 255, 255, 1.00); display: inline-block;font-family:Poppins;background-color:rgba(255, 255, 255, 0);border-color:rgba(255, 255, 255, 1.00);border-style:solid;border-width:1px 1px 1px 1px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-decoration: none;">Book Now
								</a>
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div>
			<!-- Main Slider -->
			<!-- About Us -->
			<div class="section-full bg-white content-inner-2 bridal-about" style="background-image:url(images/background/bg10.jpg);">
				<div class="container">
					<div class="section-head text-black text-center bridal-head">
						<h5 class="text-primary">Welcome To SRB Makeovers & Academy</h5>
						<h2 class="m-b10">Our Premium Beauty Services</h2>
						<p>Experience professional makeup, hair styling, and beauty services with an advanced approach. Recognized as the best in Delhi, we provide unmatched quality at competitive prices.</p>
					</div>
					<div class="img-carousel owl-carousel owl-theme owl-btn-3 owl-dots-primary-big owl-btn-center-lr owl-loade owl-loaded owl-drag">
						<!-- Service 1: Bridal Makeup -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/57.jpg.jpeg" alt="Bridal Makeup Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Bridal Makeup</a></h6>
										<p>Complete bridal transformation for weddings, engagements & receptions with flawless, long-lasting makeup.</p>
										<div class="service-price-tag">₹7,000 - ₹25,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>01</h2>
									<h6 class="dlab-title"><a href="service.php">Bridal Makeup</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 2: Makeup & Styling -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>02</h2>
									<h6 class="dlab-title"><a href="service.php">Makeup & Styling</a></h6>
								</div>
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/m1.png" alt="Makeup and Styling Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Makeup & Styling</a></h6>
										<p>Professional makeup for events, fashion shows, video shoots, commercials, workshops & advertising campaigns.</p>
										<div class="service-price-tag">₹2000 - ₹7,500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 3: Facial Treatments -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/m2.png" alt="Facial Treatment Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Facial Treatments</a></h6>
										<p>Revitalizing facials customized for different skin types, leaving your skin glowing and rejuvenated.</p>
										<div class="service-price-tag">₹550 - ₹3,500</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>03</h2>
									<h6 class="dlab-title"><a href="service.php">Facial</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 4: Hair Styling -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>04</h2>
									<h6 class="dlab-title"><a href="service.php">Hair Styling</a></h6>
								</div>
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/35.jpg.jpeg" alt="Hair Styling Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Hair Styling</a></h6>
										<p>Professional hair styling for all occasions. From simple looks to elaborate bridal hairstyles.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 5: Hair Coloring -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/67.jpg" alt="Hair Coloring Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Hair Coloring</a></h6>
										<p>Professional hair coloring services with premium products. Fashion streaks & root touch-up available.</p>
										<div class="service-price-tag">₹550 - ₹2,500</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>05</h2>
									<h6 class="dlab-title"><a href="service.php">Hair Color</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 6: Waxing Services -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>06</h2>
									<h6 class="dlab-title"><a href="service.php">Waxing Services</a></h6>
								</div>
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/68.jpg" alt="Waxing Services">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Waxing Services</a></h6>
										<p>Professional waxing for face and body with minimal discomfort. From eyebrows to full body waxing.</p>
										<div class="service-price-tag">₹130 - ₹3,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 7: Hair Spa -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/portfolio/69.jpg" alt="Hair Spa Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Hair Spa</a></h6>
										<p>Deep conditioning treatment for damaged hair. Restores shine, strength and vitality to your hair.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>07</h2>
									<h6 class="dlab-title"><a href="service.php">Hair Spa</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 8: Pre-Bridal Package -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>08</h2>
									<h6 class="dlab-title"><a href="service.php">Pre-Bridal Package</a></h6>
								</div>
								<div class="dlab-media">
									<a href="service.php">
										<img src="images/gallery/b14.jpeg" alt="Pre-Bridal Package Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="service.php">Pre-Bridal Package</a></h6>
										<p>Complete pre-wedding beauty regimen including facials, waxing, hair treatments and skin preparation.</p>
										<div class="service-price-tag">₹7,000 - ₹20,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Us End -->

			<!-- Our Services -->
			<div class="section-full content-inner-2 bg-white hair-services">
				<div class="container">
					<div class="section-head text-black text-center">
						<h2 class="text-primary m-b10">Our Services</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon">
								<i class="flaticon-spa text-primary"></i>
							</div>
						</div>
						<p>
							SRB Makeover & Academy specializes exclusively in professional bridal makeover
							services and certified makeup education, delivering elegance, expertise, and
							career-focused training across West Delhi and Delhi NCR.
						</p>
					</div>

					<div class="row">
						<!-- Bridal Makeup -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/collage/pic1.jpg" alt="Bridal Makeup Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Bridal <br> Makeup</a>
									</h5>
									<p>
										Signature HD and Airbrush bridal makeup crafted to enhance natural
										beauty and create a flawless, long-lasting bridal look.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Engagement & Reception Makeup -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/our-services/s1.png" alt="Engagement & Reception Makeup Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Engagement & Reception Makeup</a>
									</h5>
									<p>
										Elegant and glamorous makeup looks designed for engagements,
										receptions, and pre-wedding celebrations.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Bridal Hair & Draping -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/our-services/s2.png" alt="Bridal Hair Styling & Draping Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Bridal Hair Styling <br> & Draping</a>
									</h5>
									<p>
										Complete bridal hair styling with saree and dupatta draping to
										perfectly complement the bridal makeup look.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Bridal Makeup Course -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/our-services/s3.png" alt="Professional Bridal Makeup Course" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Professional Bridal Makeup Course</a>
									</h5>
									<p>
										Certified bridal makeup training with live demonstrations,
										advanced techniques, and practical hands-on experience.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Basic to Advanced Makeup Course -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/our-services/s4.png" alt="Basic to Advanced Makeup Course" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Basic to Advanced Makeup Course</a>
									</h5>
									<p>
										Step-by-step professional makeup training designed for beginners
										and aspiring bridal makeup artists.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Self Makeup Workshop -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="service.php" class="icon-cell">
										<img src="images/our-services/s5.png" alt="Self Makeup Workshops" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="service.php">Self Makeup Workshops</a>
									</h5>
									<p>
										Personalized self-makeup workshops focused on daily grooming
										and special occasion makeup techniques.
									</p>
									<div class="mt-3">
										<a href="service.php" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Our Services -->

			<!-- Video Portfolio Section -->
			<div class="section-full content-inner bg-gray">
				<div class="container">
					<div class="section-head text-center m-b40">
						<h2 class="text-primary m-b10">Our Work in Action</h2>
						<div class="dlab-separator-outer m-b0">
							<div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
						</div>
						<p>Watch our professional makeup artists transform brides with expert techniques and precision</p>
					</div>

					<div class="row g-4">
						<!-- Video 1 -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-6 my-3">
							<div class="video-card">
								<div class="video-thumbnail position-relative">
									<video
										class="w-100 rounded"
										autoplay
										muted
										loop
										playsinline
										preload="metadata">
										<source src="<?= $site ?>images/videos/v4.mp4" type="video/mp4">
									</video>
								</div>
								<div class="video-info p-3 bg-white rounded-bottom">
									<h5 class="mb-2">Traditional Bridal Makeup</h5>
									<p class="text-muted mb-0"><small>Hari Nagar, Delhi</small></p>
								</div>
							</div>
						</div>

						<!-- Video 2 -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-6 my-3">
							<div class="video-card">
								<div class="video-thumbnail position-relative">
									<video
										class="w-100 rounded"
										autoplay
										muted
										loop
										playsinline
										preload="metadata">
										<source src="<?= $site ?>images/videos/v1.mp4" type="video/mp4">
									</video>
								</div>
								<div class="video-info p-3 bg-white rounded-bottom">
									<h5 class="mb-2">HD Makeup Tutorial</h5>
									<p class="text-muted mb-0"><small>Janakpuri Studio</small></p>
								</div>
							</div>
						</div>

						<!-- Video 3 -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="video-card">
								<div class="video-thumbnail position-relative">
									<video
										class="w-100 rounded"
										autoplay
										muted
										loop
										playsinline
										preload="metadata">
										<source src="<?= $site ?>images/videos/v3.mp4" type="video/mp4">
									</video>
								</div>
								<div class="video-info p-3 bg-white rounded-bottom">
									<h5 class="mb-2">Airbrush Makeup Demo</h5>
									<p class="text-muted mb-0"><small>Tilak Nagar Client</small></p>
								</div>
							</div>
						</div>

						<!-- Video 4 -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-6">
							<div class="video-card">
								<div class="video-thumbnail position-relative">
									<video
										class="w-100 rounded"
										autoplay
										muted
										loop
										playsinline
										preload="metadata">
										<source src="<?= $site ?>images/videos/v2.mp4" type="video/mp4">
									</video>
								</div>
								<div class="video-info p-3 bg-white rounded-bottom">
									<h5 class="mb-2">Party Makeup Transformation</h5>
									<p class="text-muted mb-0"><small>Rajouri Garden</small></p>
								</div>
							</div>
						</div>
					</div>

					<!-- View More Button -->
					<div class="text-center mt-5">
						<a href="https://www.youtube.com/@s.r.bmakeover/shorts" target="_blank" class="btn btn-outline-primary radius-xl">
							<i class="fa fa-youtube-play text-danger fw-2 mx-3"></i> View More Videos on YouTube
						</a>
					</div>
				</div>
			</div>

			<!-- Video Modals -->
			<!-- Modal 1 -->
			<div class="modal fade" id="videoModal1" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Traditional Bridal Makeup Transformation</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID_1"
									title="Traditional Bridal Makeup by SRB Makeover Delhi"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen>
								</iframe>
							</div>
							<div class="mt-3">
								<h6>About This Video:</h6>
								<p>Watch our expert makeup artist create a stunning traditional bridal look for a wedding in Hari Nagar, Delhi.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 2 -->
			<div class="modal fade" id="videoModal2" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">HD Makeup Tutorial</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID_2"
									title="HD Makeup Tutorial by SRB Makeover Academy"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen>
								</iframe>
							</div>
							<div class="mt-3">
								<h6>About This Video:</h6>
								<p>Learn HD makeup techniques from our professional makeup academy in Janakpuri.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 3 -->
			<div class="modal fade" id="videoModal3" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Airbrush Makeup Demonstration</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID_3"
									title="Airbrush Makeup Demo - SRB Academy West Delhi"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen>
								</iframe>
							</div>
							<div class="mt-3">
								<h6>About This Video:</h6>
								<p>Professional airbrush makeup demonstration at our Tilak Nagar branch.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Modal 4 -->
			<div class="modal fade" id="videoModal4" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Party Makeup Transformation</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="ratio ratio-16x9">
								<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID_4"
									title="Party Makeup Transformation - SRB Makeover Rajouri Garden"
									frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen>
								</iframe>
							</div>
							<div class="mt-3">
								<h6>About This Video:</h6>
								<p>Evening party makeup transformation session at our Rajouri Garden studio.</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Hair Services Section -->
			<div class="section-full bg-white content-inner-2 bridal-about" style="background-image:url(images/background/bg10.jpg);">
				<div class="container">
					<div class="section-head text-black text-center bridal-head">
						<h5 class="text-primary">Welcome To SRB Makeovers & Academy</h5>
						<h2 class="m-b10">Complete Hair Services</h2>
						<p>Experience professional hair care with our comprehensive range of services. From traditional treatments to modern styling techniques, we provide everything for perfect hair.</p>
					</div>
					<div class="img-carousel owl-carousel owl-theme owl-btn-3 owl-dots-primary-big owl-btn-center-lr owl-loade owl-loaded owl-drag">
						<!-- Service 1: Hair Henna -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/portfolio/73.jpg" alt="Hair Henna Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Henna</a></h6>
										<p>Natural henna treatment for conditioning, color, and shine. Chemical-free alternative for beautiful hair.</p>
										<div class="service-price-tag">₹200 - ₹550</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>01</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Henna</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 2: Hair Conditioning -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>02</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Conditioning</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/hair-coniditioning.jpg" alt="Hair Conditioning Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Conditioning</a></h6>
										<p>Deep conditioning treatments to restore moisture, shine, and manageability to dry or damaged hair.</p>
										<div class="service-price-tag">₹150 - ₹500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 3: Hair Dressing -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/hair-dressing.jpg" alt="Hair Dressing Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Dressing</a></h6>
										<p>Complete hair dressing services including styling, setting, and finishing for any occasion.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>03</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Dressing</a></h6>
								</div>
							</div>
						</div>



						<!-- Service 4: Hair Curling -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>04</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Curling</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/hair-curling.jpg" alt="Hair Curling Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Curling</a></h6>
										<p>Professional curling services using various techniques to create beautiful, lasting curls.</p>
										<div class="service-price-tag">₹200 - ₹1,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 5: Dandruff Hair Falling Treatment -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/dandraf-care.jpg" alt="Dandruff Hair Falling Treatment">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Dandruff Treatment</a></h6>
										<p>Specialized treatments for dandruff control and hair fall reduction using medicated products.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>05</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Dandruff Care</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 6: Roller Setting -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>06</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Roller Setting</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/roller-setting.png" alt="Roller Setting Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Roller Setting</a></h6>
										<p>Classic roller setting for volume and waves. Perfect for traditional looks and special occasions.</p>
										<div class="service-price-tag">₹500 - ₹1000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 7: Tong Setting -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/tong-setting.jpg" alt="Tong Setting Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Tong Setting</a></h6>
										<p>Professional tong setting for perfect curls or waves. Quick and efficient styling solution.</p>
										<div class="service-price-tag">₹200 - ₹1,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>07</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Tong Setting</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 8: Blow Dryer -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>08</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Blow Dryer</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/blow-dryer.jpg" alt="Blow Dryer Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Blow Dryer</a></h6>
										<p>Professional blow drying for smooth, voluminous, or styled hair with perfect finish.</p>
										<div class="service-price-tag">₹150 - ₹500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 9: Hair Massage with Pack -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/portfolio/69.jpg" alt="Hair Massage with Pack">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Massage with Pack</a></h6>
										<p>Relaxing scalp massage with nourishing hair packs to promote hair growth and health.</p>
										<div class="service-price-tag">₹350 - ₹1000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>09</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Massage</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 10: Pressing -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>10</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Pressing</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/hair-pressing.jpg" alt="Pressing Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Pressing</a></h6>
										<p>Traditional hair pressing for straight, smooth hair without chemicals. Temporary straightening method.</p>
										<div class="service-price-tag">₹250 - ₹1,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 11: Creaming -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/creaming.png" alt="Creaming Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Creaming</a></h6>
										<p>Hair creaming treatment for softness, shine, and manageability using premium creams.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>11</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Creaming</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 12: Hair Spa -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>12</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Spa</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/hair-spa.png" alt="Hair Spa Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Spa</a></h6>
										<p>Complete hair spa treatment for deep relaxation, nourishment, and hair rejuvenation.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 13: Perming -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/perming.png" alt="Perming Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Perming</a></h6>
										<p>Professional perming services to add permanent curls or waves to straight hair.</p>
										<div class="service-price-tag">₹2,000 - ₹5,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>13</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Perming</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 14: Rebonding -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>14</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Rebonding</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/rebonding.png" alt="Rebonding Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Rebonding</a></h6>
										<p>Permanent hair straightening treatment for ultra-smooth, straight, and manageable hair.</p>
										<div class="service-price-tag">₹2,500 - ₹6,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 15: Smoothing -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/smoothing.png" alt="Smoothing Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Smoothing</a></h6>
										<p>Hair smoothing treatment for frizz control, shine, and manageable hair without permanent straightening.</p>
										<div class="service-price-tag">₹1,500 - ₹5,500</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>15</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Smoothing</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 16: Keratin -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>16</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Keratin</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/keratin.png" alt="Keratin Treatment">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Keratin</a></h6>
										<p>Keratin treatment for smooth, shiny, frizz-free hair that lasts for months with proper care.</p>
										<div class="service-price-tag">₹1,500 - ₹5,500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 17: Shine Bond -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/shine-bond.png" alt="Shine Bond Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Shine Bond</a></h6>
										<p>Special treatment for extreme shine, smoothness, and bond repair for damaged hair.</p>
										<div class="service-price-tag">₹3,000 - ₹8,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>17</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Shine Bond</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 18: Global Hair Color -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>18</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Global Hair Color</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Global Hair Color.png" alt="Global Hair Color">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Global Hair Color</a></h6>
										<p>Complete hair coloring from roots to ends using premium, ammonia-free color products.</p>
										<div class="service-price-tag">₹1,500 - ₹5,500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 19: Highlights -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Highlights.png" alt="Highlights Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Highlights</a></h6>
										<p>Professional highlighting to add dimension, brightness, and style to your hair.</p>
										<div class="service-price-tag">₹1,000 - ₹4,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>19</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Highlights</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 20: Streaking -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>20</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Streaking</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Streaking.png" alt="Streaking Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Streaking</a></h6>
										<p>Bold color streaks for a dramatic, fashion-forward look. Perfect for making a style statement.</p>
										<div class="service-price-tag">₹1,500 - ₹3,500</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 21: Ombre -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Ombre.png" alt="Ombre Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Ombre</a></h6>
										<p>Gradient color effect from dark roots to lighter ends. Modern and stylish coloring technique.</p>
										<div class="service-price-tag">₹2,000 - ₹5,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>21</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Ombre</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 22: Chunks -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>22</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Chunks</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Chunks.png" alt="Chunks Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Chunks</a></h6>
										<p>Bold color chunks for an edgy, contemporary look. Great for adding personality to your style.</p>
										<div class="service-price-tag">₹1,200 - ₹3,000</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Service 23: Balayage -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/hairs/Balayage.png" alt="Balayage Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Balayage</a></h6>
										<p>Hand-painted highlights for a natural, sun-kissed look. Soft and subtle color transition.</p>
										<div class="service-price-tag">₹2,500 - ₹6,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>23</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Balayage</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 24: Hair Cuts -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>24</h2>
									<h6 class="dlab-title"><a href="hair-services.php">Hair Cuts</a></h6>
								</div>
								<div class="dlab-media">
									<a href="hair-services.php">
										<img src="images/portfolio/73.jpg" alt="Hair Cuts Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="hair-services.php">Hair Cuts</a></h6>
										<p>Professional haircuts for all hair types and styles. Consultation included for perfect results.</p>
										<div class="service-price-tag">₹200 - ₹1,000</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hair Services Section End -->

			<!-- Why Chose Us -->
			<!-- Dynamic Bridal Portfolio Section -->
			<div class="section-full content-inner-1 bridal-portfolio" style="background-image:url(images/background/bg10.jpg); background-size: 100%; background-repeat:no-repeat;">
				<div class="container-fluid p-0">
					<div class="section-head text-black text-center bridal-head">
						<h5 class="text-primary">Bridal Portfolio</h5>
						<h2 class="m-b10">Our Portfolio</h2>
						<p class="m-b0">Explore our stunning bridal makeup transformations. We specialize in creating timeless beauty for your special day.</p>
					</div>
					<?php
					// Fetch all active categories
					$categories = mysqli_query($conn, "
						SELECT pc.*, COUNT(pi.id) as item_count 
						FROM portfolio_categories pc 
						LEFT JOIN portfolio_items pi ON pc.id = pi.category_id AND pi.status = 'active'
						WHERE pc.status = 'active'
						GROUP BY pc.id
						ORDER BY pc.name
					");

					// Fetch all active portfolio items
					$portfolio_query = "
					SELECT p.*, c.name as category_name, c.slug as category_slug 
					FROM portfolio_items p 
					LEFT JOIN portfolio_categories c ON p.category_id = c.id 
					WHERE p.status = 'active' 
					ORDER BY rand()
				";
					$portfolio_result = mysqli_query($conn, $portfolio_query);
					$portfolio_items = mysqli_fetch_all($portfolio_result, MYSQLI_ASSOC);
					?>

					<div class="site-filters style1 clearfix center">
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active">
                                    <input type="radio">
                                    <a href="#"><span>All</span></a>
                                </li>
                                <?php while ($category = mysqli_fetch_assoc($categories)): ?>
                                    <li data-filter="<?= $category['slug'] ?>" class="btn">
                                        <input type="radio">
                                        <a href="#"><span><?= $category['name'] ?></span></a>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>

					<div class="clearfix">
						
							<ul id="masonry" class="row sp15 portfolio-box dlab-gallery-listing gallery-grid-4 gallery lightgallery">
								<?php foreach ($portfolio_items as $item): ?>
                                    <?php
                                    $category_slug = isset($item['category_slug']) ? $item['category_slug'] : '';
                                    $image_path = $site . "admin/uploads/portfolio/" . $item['image_path'];
                                    ?>
									<li class="<?= $category_slug ?> card-container col-lg-3 col-md-6 col-sm-6 m-b15">
										<div class="dlab-box">
											<div class="dlab-media">
												<img src="<?= $image_path ?>" alt="<?= htmlspecialchars($item['title']) ?>">
												<div class="overlay-bx">
													<div class="spa-port-bx">
														<div>
															<h4><a href="portfolio.php"><?= htmlspecialchars($item['title']) ?></a></h4>
															<?php if ($item['description']): ?>
																<p><?= substr(htmlspecialchars($item['description']), 0, 60) ?>...</p>
															<?php endif; ?>
															<span data-exthumbimage="<?= $image_path ?>"
																data-src="<?= $image_path ?>"
																class="check-km"
																title="<?= htmlspecialchars($item['title']) ?>">
																<i class="ti-fullscreen"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
								 <?php endforeach; ?>
							</ul>

							<!-- View All Button -->
							<div class="text-center mt-4">
								<a href="<?= $site ?>portfolio.php" class="btn btn-primary radius-xl">
									<i class="fas fa-images me-2"></i> View Complete Portfolio
								</a>
							</div>
						
					</div>
				</div>
			</div>

			<!-- Add this CSS for filtering -->
			<style>
				.bridal-portfolio .filters li.active {
					background-color: #ff6b6b;
					color: white;
				}

				.bridal-portfolio .filters li {
					margin: 0 5px;
					cursor: pointer;
				}

				.bridal-portfolio .check-km {
					cursor: pointer;
					color: white;
					font-size: 20px;
				}

				.bridal-portfolio .check-km:hover {
					color: #ff6b6b;
				}
			</style>

			<!-- Add this JavaScript for filtering -->
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					// Portfolio filtering for homepage
					const portfolioFilters = document.querySelectorAll('.bridal-portfolio .filters li');
					const portfolioItems = document.querySelectorAll('.bridal-portfolio .card-container');

					portfolioFilters.forEach(filter => {
						filter.addEventListener('click', function() {
							// Remove active class from all filters
							portfolioFilters.forEach(f => f.classList.remove('active'));

							// Add active class to clicked filter
							this.classList.add('active');

							// Get filter value
							const filterValue = this.getAttribute('data-filter');

							// Show/hide items
							portfolioItems.forEach(item => {
								if (filterValue === '' || item.classList.contains(filterValue)) {
									item.style.display = 'block';
								} else {
									item.style.display = 'none';
								}
							});
						});
					});

					// Initialize lightgallery if available
					if (typeof lightGallery !== 'undefined') {
						lightGallery(document.getElementById('masonry'), {
							selector: '.check-km',
							download: false,
							counter: false
						});
					}
				});
			</script>
			<!-- Why Chose Us End -->
			<!-- Our Professional Team -->
			<div class="section-full content-inner-2 bridal-testimonial" style="background-image:url(images/background/bg10.jpg); background-size: 100%; background-repeat:no-repeat;">
				<div class="container">
					<div class="section-head text-black text-center bridal-head">
						<h5 class="text-primary">Our Client</h5>
						<h2 class="m-b0">Our Testimonial</h2>
					</div>
					<div class="">
						<div class="testimonial-one owl-carousel owl-btn-center-lr owl-btn-3 owl-theme owl-dots-primary-full owl-loaded owl-drag">
							<div class="item">
								<div class="testimonial-1">
									<div class="testimonial-pic radius shadow"><img src="images/stories/client1.jpg.jpeg" width="100" height="100" alt=""></div>
									<div class="testimonial-text">
										<p>I've had my makeup done a few times so there was no doubt in my mind she would be my makeup artist on my wedding day! She made me feel like a princess, my makeup lasted all day and she has such a kind, friendly and bubbly personality that makes the whole experience so enjoyable!</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Suman Shukla</strong> <span class="testimonial-position"></span> </div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-1">
									<div class="testimonial-pic radius shadow"><img src="images/stories/client2.jpg.jpeg" width="100" height="100" alt=""></div>
									<div class="testimonial-text">
										<p>Saumya Batra is such a fantastic person to have your makeup done from.. so much in sync with her brushes that the end results are so outstanding.. love her makeup.. she made us look gorgeous..so charming and so lovable.. I’d definitely recommend her..!!</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Rajni Gupta</strong> <span class="testimonial-position"></span> </div>
								</div>
							</div>
							<div class="item">
								<div class="testimonial-1">
									<div class="testimonial-pic radius shadow"><img src="images/stories/client3.jpg.jpeg" width="100" height="100" alt=""></div>
									<div class="testimonial-text">
										<p>She is exceptionally good with her brushes. She knows how to enhance a woman’s beauty with minimal makeup. Saumya Batra is clearly a virtuoso of makeup and you can see that in her own looks too. I love her makeup</p>
									</div>
									<div class="testimonial-detail"> <strong class="testimonial-name">Poonam Yadav</strong> <span class="testimonial-position">Housewife</span> </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- Content END-->
		<?php
		include_once "includes/footer.php";
		?>
	</div>
	<?php
	include_once "includes/footer-links.php";
	?>
</body>

</html>