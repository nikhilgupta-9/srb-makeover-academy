<?php
include_once "config/connect.php";
include_once "util/function.php";

$contact = contact_us();
$logo = get_logo();

$meta_title = "SRB Makeovers & Academy | Best Makeup Academy & Bridal Makeup in Delhi NCR";
$meta_description = "SRB Makeovers & Academy - Premier Makeup Academy in Hari Nagar, Tilak Nagar, Janakpuri & West Delhi. Professional bridal makeup courses & certified makeup artist training. Best makeup academy in Delhi with placement assistance.";
$meta_keywords = "Makeup academy in Hari Nagar, Makeup academy in Tilak Nagar, Makeup academy in Janakpuri, Makeup academy in Rajouri Garden, Makeup academy in West Delhi, Best makeup academy in Delhi, Professional makeup course in Delhi, Bridal makeup course in Delhi, Certified makeup artist course Delhi, Makeup training institute in Delhi NCR, Bridal makeup artist in Delhi, Wedding makeup artist in Delhi, Affordable makeup academy in Delhi";
?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">

<head>
	<!-- Basic Meta Tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Primary SEO Meta Tags -->
	<title><?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
	<meta name="keywords" content="<?php echo $meta_keywords; ?>">

	<!-- Author & Copyright -->
	<meta name="author" content="SRB Makeovers & Academy">
	<meta name="copyright" content="SRB Makeovers & Academy">
	<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

	<!-- Geographic Meta Tags (Important for Local SEO) -->
	<meta name="geo.region" content="IN-DL">
	<meta name="geo.placename" content="Delhi">
	<meta name="geo.position" content="28.644800;77.216721">
	<meta name="ICBM" content="28.644800, 77.216721">

	<!-- Canonical URL -->
	<link rel="canonical" href="<?php echo $site; ?>">

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo $site; ?>">
	<meta property="og:title" content="<?php echo $meta_title; ?>">
	<meta property="og:description" content="<?php echo $meta_description; ?>">
	<meta property="og:image" content="<?php echo $site; ?>images/og-image.jpg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:alt" content="SRB Makeovers & Academy - Best Makeup Academy in Delhi">
	<meta property="og:site_name" content="SRB Makeovers & Academy">
	<meta property="og:locale" content="en_IN">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="<?php echo $site; ?>">
	<meta property="twitter:title" content="<?php echo $meta_title; ?>">
	<meta property="twitter:description" content="<?php echo $meta_description; ?>">
	<meta property="twitter:image" content="<?php echo $site; ?>images/twitter-image.jpg">

	<!-- Additional Local Business Schema -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "BeautySalon",
			"name": "SRB Makeovers & Academy",
			"description": "Premier Makeup Academy and Bridal Makeup Services in Delhi NCR",
			"url": "<?php echo $site; ?>",
			"telephone": "+91-<?= $contact['phone'] ?>",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "<?= $contact['address'] ?>",
				"addressLocality": "Hari Nagar",
				"addressRegion": "Delhi",
				"postalCode": "110064",
				"addressCountry": "IN"
			},
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": "28.644800",
				"longitude": "77.216721"
			},
			"openingHours": "Mo-Sa 09:00-20:00",
			"priceRange": "₹500 - ₹25,000",
			"image": "<?php echo $site . $logo; ?>",
			"sameAs": [
				"<?= $contact['facebook'] ?>",
				"<?= $contact['instagram'] ?>",
				"https://youtube.com/shorts/nnlseyKyXDA?si=flXGMdF5A2ePJktL"
			]
		}
	</script>

	<!-- Course Schema -->
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Course",
			"name": "Professional Makeup Artist Course",
			"description": "Certified makeup artist course in Delhi with placement assistance",
			"provider": {
				"@type": "Organization",
				"name": "SRB Makeovers & Academy",
				"sameAs": "<?php echo $site; ?>"
			},
			"offers": {
				"@type": "Offer",
				"priceCurrency": "INR",
				"price": "25000"
			}
		}
	</script>

	<!-- FAVICONS -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $site; ?>images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/x-icon" href="<?php echo $site; ?>images/favicon/favicon.ico">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $site; ?>images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $site; ?>images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $site; ?>images/favicon/site.webmanifest">

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

	<!-- Mobile Specific -->
	<meta name="theme-color" content="#fdb26f">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="SRB Makeovers">

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
		<!-- <div id="loading-area"></div> -->
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
										<img src="<?= $site ?>images/main-slider/slider-7-new3.png" alt="" data-ww="['965px','965px','500px','300px']" data-hh="['894px','894px','463px','278px']" width="407" height="200" data-no-retina>
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
									href="<?= $site ?>about-us/" target="_blank"
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
									href="<?= $site ?>booking.php" target="_blank"
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
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/57.jpg.jpeg" alt="Bridal Makeup Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Bridal Makeup</a></h6>
										<p>Complete bridal transformation for weddings, engagements & receptions with flawless, long-lasting makeup.</p>
										<div class="service-price-tag">₹7,000 - ₹25,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>01</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Bridal Makeup</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 2: Makeup & Styling -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>02</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Makeup & Styling</a></h6>
								</div>
								<div class="dlab-media">
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/m1.png" alt="Makeup and Styling Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Makeup & Styling</a></h6>
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
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/m2.png" alt="Facial Treatment Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Facial Treatments</a></h6>
										<p>Revitalizing facials customized for different skin types, leaving your skin glowing and rejuvenated.</p>
										<div class="service-price-tag">₹550 - ₹3,500</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>03</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Facial</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 4: Hair Styling -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>04</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Styling</a></h6>
								</div>
								<div class="dlab-media">
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/35.jpg.jpeg" alt="Hair Styling Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Styling</a></h6>
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
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/67.jpg" alt="Hair Coloring Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Coloring</a></h6>
										<p>Professional hair coloring services with premium products. Fashion streaks & root touch-up available.</p>
										<div class="service-price-tag">₹550 - ₹2,500</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>05</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Color</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 6: Waxing Services -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>06</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Waxing Services</a></h6>
								</div>
								<div class="dlab-media">
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/68.jpg" alt="Waxing Services">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Waxing Services</a></h6>
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
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/portfolio/69.jpg" alt="Hair Spa Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Spa</a></h6>
										<p>Deep conditioning treatment for damaged hair. Restores shine, strength and vitality to your hair.</p>
										<div class="service-price-tag">₹500 - ₹2,000</div>
									</div>
								</div>
								<div class="dlab-info text-center">
									<h2>07</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Hair Spa</a></h6>
								</div>
							</div>
						</div>

						<!-- Service 8: Pre-Bridal Package -->
						<div class="item">
							<div class="dlab-box bridal-serbx">
								<div class="dlab-info text-center">
									<h2>08</h2>
									<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Pre-Bridal Package</a></h6>
								</div>
								<div class="dlab-media">
									<a href="<?= $site ?>services/makeup-services">
										<img src="images/gallery/b14.jpeg" alt="Pre-Bridal Package Service">
									</a>
									<div class="dlab-media-info">
										<h6 class="dlab-title"><a href="<?= $site ?>services/makeup-services">Pre-Bridal Package</a></h6>
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
									<a href="<?= $site ?>services/makeup-services" class="icon-cell">
										<img src="images/our-services/s5.png" alt="Bridal Makeup Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>services/makeup-services">Bridal <br> Makeup</a>
									</h5>
									<p>
										Signature HD and Airbrush bridal makeup crafted to enhance natural
										beauty and create a flawless, long-lasting bridal look.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>services/makeup-services" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Engagement & Reception Makeup -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="<?= $site ?>services/makeup-services" class="icon-cell">
										<img src="images/our-services/s1.png" alt="Engagement & Reception Makeup Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>services/makeup-services">Engagement & Reception Makeup</a>
									</h5>
									<p>
										Elegant and glamorous makeup looks designed for engagements,
										receptions, and pre-wedding celebrations.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>services/makeup-services" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Bridal Hair & Draping -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="<?= $site ?>services/makeup-services" class="icon-cell">
										<img src="images/our-services/s2.png" alt="Bridal Hair Styling & Draping Service" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>services/makeup-services">Bridal Hair Styling <br> & Draping</a>
									</h5>
									<p>
										Complete bridal hair styling with saree and dupatta draping to
										perfectly complement the bridal makeup look.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>services/makeup-services" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Bridal Makeup Course -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="<?= $site ?>academy/" class="icon-cell">
										<img src="<?= $site ?>images/our-services/s3.png" alt="Professional Bridal Makeup Course" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>academy/">Professional Bridal Makeup Course</a>
									</h5>
									<p>
										Certified bridal makeup training with live demonstrations,
										advanced techniques, and practical hands-on experience.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>academy/" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Basic to Advanced Makeup Course -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="<?= $site ?>academy/" class="icon-cell">
										<img src="<?= $site ?>images/our-services/s4.png" alt="Basic to Advanced Makeup Course" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>academy/">Basic to Advanced Makeup Course</a>
									</h5>
									<p>
										Step-by-step professional makeup training designed for beginners
										and aspiring bridal makeup artists.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>academy/" class="btn site-button radius-xl btn-sm">View More Details</a>
									</div>
								</div>
							</div>
						</div>

						<!-- Self Makeup Workshop -->
						<div class="col-lg-4 col-md-6 col-sm-6 p-lr0">
							<div class="icon-bx-wraper center p-a30">
								<div class="icon-lg radius m-b20">
									<a href="<?= $site ?>academy/" class="icon-cell">
										<img src="<?= $site ?>images/our-services/s5.png" alt="Self Makeup Workshops" class="service-image radius-xl" height="100px" width="100px">
									</a>
								</div>
								<div class="icon-content">
									<h5 class="dez-tilte">
										<a href="<?= $site ?>academy/">Self Makeup Workshops</a>
									</h5>
									<p>
										Personalized self-makeup workshops focused on daily grooming
										and special occasion makeup techniques.
									</p>
									<div class="mt-3">
										<a href="<?= $site ?>academy/" class="btn site-button radius-xl btn-sm">View More Details</a>
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
						<?php
						$hair_services = get_hair_services();
						$counter = 1; // Counter for numbering

						foreach ($hair_services as $hs):
							$is_even = ($counter % 2 == 0); // Even numbered items have different layout

							// Get image URL - fallback if image doesn't exist
							$image_url = "images/hairs/" . strtolower(str_replace(' ', '-', $hs['pro_name'])) . ".jpg";
							$actual_image = file_exists($image_url) ? $image_url : "images/portfolio/73.jpg";

							// Create slug for service page
							$service_slug = "service-details/" . $hs['slug_url'];

							// Format price
							$price_display = "₹" . $hs['selling_price'];
							if ($hs['mrp'] > $hs['selling_price']) {
								$price_display = "₹" . $hs['selling_price'] . " - ₹" . $hs['mrp'];
							}
						?>

							<!-- Service <?= $counter ?>: <?= $hs['pro_name'] ?> -->
							<div class="item">
								<div class="dlab-box bridal-serbx">
									<?php if ($is_even): ?>
										<!-- Layout for even items (Image on right) -->
										<div class="dlab-info text-center">
											<h2><?= str_pad($counter, 2, '0', STR_PAD_LEFT) ?></h2>
											<h6 class="dlab-title">
												<a href="<?= $service_slug ?>"><?= htmlspecialchars($hs['pro_name']) ?></a>
											</h6>
										</div>
										<div class="dlab-media">
											<a href="<?= $service_slug ?>">
												<img src="<?= $site . "admin/assets/img/uploads/" . $hs['pro_img'] ?>"
													alt="<?= htmlspecialchars($hs['pro_name']) ?> Service at SRB Makeovers West Delhi"
													title="Professional <?= htmlspecialchars($hs['pro_name']) ?> in Delhi NCR">
											</a>
											<div class="dlab-media-info">
												<h6 class="dlab-title">
													<a href="<?= $service_slug ?>"><?= htmlspecialchars($hs['pro_name']) ?></a>
												</h6>
												<p><?= $hs['short_desc'] ?></p>
												<div class="service-price-tag"><?= $price_display ?></div>
											</div>
										</div>
									<?php else: ?>
										<!-- Layout for odd items (Image on left) -->
										<div class="dlab-media">
											<a href="<?= $service_slug ?>">
												<img src="<?= $site . "admin/assets/img/uploads/" . $hs['pro_img'] ?>"
													alt="<?= htmlspecialchars($hs['pro_name']) ?> Service at SRB Makeovers West Delhi"
													title="Professional <?= htmlspecialchars($hs['pro_name']) ?> in Delhi NCR">
											</a>
											<div class="dlab-media-info">
												<h6 class="dlab-title">
													<a href="<?= $service_slug ?>"><?= htmlspecialchars($hs['pro_name']) ?></a>
												</h6>
												<p><?= $hs['short_desc']?></p>
												<div class="service-price-tag"><?= $price_display ?></div>
											</div>
										</div>
										<div class="dlab-info text-center">
											<h2><?= str_pad($counter, 2, '0', STR_PAD_LEFT) ?></h2>
											<h6 class="dlab-title">
												<a href="<?= $service_slug ?>"><?= htmlspecialchars($hs['pro_name']) ?></a>
											</h6>
										</div>
									<?php endif; ?>
								</div>
							</div>

						<?php
							$counter++;
						endforeach;
						?>

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
					ORDER BY rand() LIMIT 20
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
								<li class="<?= $category_slug ?> card-container col-lg-3 col-md-6 col-sm-6 col-6 m-b15">

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