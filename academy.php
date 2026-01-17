<?php
include_once "config/connect.php";
include_once "util/function.php";

$contact = contact_us();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Best Makeup Academy in West Delhi | SRB Makeover & Academy - Bridal Makeup Course & Certified Training</title>

    <meta name="description" content="SRB Makeover & Academy - #1 Best makeup academy in West Delhi offering certified bridal makeup courses in Janakpuri, Hari Nagar, Tilak Nagar, Rajouri Garden, Kirti Nagar, Moti Nagar & Delhi NCR. Professional makeup artist training with 24+ years experience.">

    <meta name="keywords" content="
        Best makeup academy in West Delhi,
        Makeup academy in Hari Nagar,
        Makeup academy in Tilak Nagar,
        Makeup academy in Janakpuri,
        Makeup academy in Rajouri Garden,
        Makeup academy in West Delhi,
        Best makeup academy in Delhi,
        Professional makeup course in Delhi,
        Bridal makeup course in Delhi,
        Certified makeup artist course Delhi,
        Makeup training institute in Delhi NCR,
        Makeup classes near me Delhi,
        Makeup artist course in West Delhi,
        Beginner makeup course in Delhi,
        Advanced makeup training Delhi,
        Short term makeup course Delhi,
        Personal makeup course in Delhi,
        Beautician course with makeup Delhi,
        Makeup artist certification Delhi,
        Bridal makeup training in Janakpuri,
        Affordable makeup academy in Delhi,
        Professional bridal makeup artist in Delhi NCR,
        Makeup academy and bridal studio in Janakpuri,
        Certified bridal makeup course in Delhi,
        Bridal makeup artist in Hari Nagar,
        Bridal makeup artist in Tilak Nagar,
        Bridal makeup artist in Rajouri Garden,
        Best bridal makeup artist in Delhi,
        Wedding makeup artist in Delhi,
        Bridal makeup artist in Delhi NCR,
        Makeup academy in Kirti Nagar,
        Makeup academy in Moti Nagar,
        SRB Makeover and Academy
        ">

    <meta name="author" content="SRB Makeover & Academy">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Best Makeup Academy in West Delhi | SRB Makeover & Academy">
    <meta property="og:description" content="Professional & certified bridal makeup courses in Janakpuri, Hari Nagar, Tilak Nagar & Rajouri Garden. Learn from industry experts with 24+ years experience.">
    <meta property="og:image" content="<?= $site ?>images/academy/academy-banner.jpg">
    <meta property="og:url" content="<?= $site ?>academy">
    <meta property="og:type" content="website">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Makeup Academy in West Delhi | SRB Makeover & Academy">
    <meta name="twitter:description" content="Professional makeup artist training with certification in Delhi NCR">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $site ?>academy">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "EducationalOrganization",
            "name": "SRB Makeover & Academy",
            "description": "Best makeup academy in West Delhi offering certified bridal makeup courses and professional makeup artist training",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Hari Nagar",
                "addressLocality": "New Delhi",
                "postalCode": "110064",
                "addressRegion": "Delhi",
                "addressCountry": "IN"
            },
            "areaServed": ["Hari Nagar", "Tilak Nagar", "Janakpuri", "Rajouri Garden", "Kirti Nagar", "Moti Nagar", "West Delhi", "Delhi NCR"],
            "courses": ["Bridal Makeup Course", "Professional Makeup Artist Course", "Beautician Course", "Advanced Makeup Training"],
            "image": "<?= $site ?>images/academy/academy-banner.jpg",
            "telephone": "+91-XXXXXXXXXX",
            "url": "<?= $site ?>academy"
        }
    </script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

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

    <style>
        .keyword-highlight {
            color: #ff6b6b;
            /* font-weight: 600; */
        }

        .location-badge {
            background: linear-gradient(45deg, #ff6b6b, #ff8e53);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            margin: 5px;
            display: inline-block;
            font-size: 14px;
        }

        .academy-feature-box {
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s;
            height: 100%;
        }

        .academy-feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .course-highlight {
            border-left: 4px solid #ff6b6b;
            padding-left: 20px;
            margin: 20px 0;
        }

        .cta-section {
            background: linear-gradient(135deg, #667eea94 0%, #764ba23b 100%);
            color: white;
            padding: 60px 0;
            border-radius: 10px;
        }

        .area-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .area-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stats-counter {
            font-size: 36px;
            font-weight: bold;
            color: #ff6b6b;
        }

        .seo-content-section {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
            margin: 40px 0;
        }

        .lead {
            font-size: 1.25rem;
            font-weight: 400;
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>

        <!-- header -->
        <?php include_once "includes/header.php"; ?>
        <!-- header END -->

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- Hero Banner Section -->
            <div class="dlab-bnr-inr dlab-bnr-inr-md overlay-black-dark" style="background-image:url(<?= $site ?>images/banner/breadcrumb-bg4.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry text-center">
                        <h1 class="text-white">
                            <span class="keyword-highlight">#1 Best Makeup Academy in West Delhi</span>
                        </h1>

                        <h3 class="text-white mt-3">
                            Professional <span class="keyword-highlight">Bridal Makeup Course</span> & Certified Makeup Artist Training
                        </h3>

                        <p class="text-white mt-3 lead">
                            SRB Makeover & Academy - Your Gateway to Becoming a <span class="keyword-highlight">Professional Makeup Artist</span> in Delhi NCR
                        </p>

                        

                        <!-- Breadcrumb -->
                        <div class="breadcrumb-row mt-4">
                            <ul class="list-inline">
                                <li><a href="<?= $site ?>">Home</a></li>
                                <li>Best Makeup Academy in Delhi</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Introduction Section -->
            <div class="content-block">
                <!-- <div class="container"> -->
                <div div class="section-full content-inner overlay-white-middle"
                    style="background-image:url(<?= $site ?>images/background/bg2.png);
							background-position: top;
							background-size: 100%;
							background-repeat: no-repeat;">
                    <!-- <div class="section-full content-inner bg-white"> -->
                    <div class="container">
                        <div class="text-center mb-5">
                            <h2 class="text-primary">
                                Welcome to SRB Makeover & Academy - <span class="keyword-highlight">Best Makeup Academy in West Delhi</span>
                            </h2>
                            <p class="lead">
                                Established with a vision to create skilled <span class="keyword-highlight">professional makeup artists in Delhi NCR</span>,
                                SRB Makeover & Academy has emerged as the <span class="keyword-highlight">#1 makeup training institute</span>
                                serving students from <span class="keyword-highlight">Hari Nagar, Tilak Nagar, Janakpuri, Rajouri Garden, Kirti Nagar, Moti Nagar</span> and entire Delhi NCR.
                            </p>
                        </div>

                        <!-- Stats Counter -->
                        <div class="row text-center mb-5">
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #fff5f5;">
                                    <div class="stats-counter">24+</div>
                                    <h5>Years Experience</h5>
                                    <p>In Bridal Makeup & Training</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f0f9ff;">
                                    <div class="stats-counter">5000+</div>
                                    <h5>Students Trained</h5>
                                    <p>Successful Makeup Artists</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f0fff4;">
                                    <div class="stats-counter">100%</div>
                                    <h5>Practical Training</h5>
                                    <p>Live Bridal Models</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f8f0ff;">
                                    <div class="stats-counter">Certified</div>
                                    <h5>International Curriculum</h5>
                                    <p>Industry Recognized</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- Why Choose Us Section -->
                <div class="section-full content-inner bg-blue-light" style="background-image:url(<?= $site ?>images/background/bg5.jpg); background-position: bottom; background-size: cover; background-repeat: no-repeat;">
                    <!-- <div class="section-full content-inner "> -->
                    <div class="container">
                        <h2 class="text-center text-primary mb-5">
                            Why Choose SRB Makeover & Academy for Your <span class="keyword-highlight">Makeup Artist Course in Delhi</span>?
                        </h2>

                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <div class="academy-feature-box" style="background: white;">
                                    <div class="text-center mb-4">
                                        <img src="<?= $site ?>images/about/owner.png" alt="Expert Trainers at SRB Makeover Academy" class="img-fluid rounded" style="height: 300px; object-fit: cover; width: 100%;">
                                    </div>
                                    <h4 class="text-primary">Expert Faculty from Industry</h4>
                                    <p>
                                        Learn from <span class="keyword-highlight">professional bridal makeup artists in Delhi</span> with 15+ years experience.
                                        Our trainers have worked on 1000+ real brides across <span class="keyword-highlight">Delhi NCR</span>.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="academy-feature-box" style="background: white;">
                                    <div class="text-center mb-4">
                                        <img src="<?= $site ?>images/our-services/s5.png" alt="Live Bridal Makeup Training at SRB Academy" class="img-fluid rounded" style="height: 300px; object-fit: cover; width: 100%;">
                                    </div>
                                    <h4 class="text-primary">100% Practical Live Training</h4>
                                    <p>
                                        Get hands-on experience with <span class="keyword-highlight">real bridal models</span>.
                                        Our <span class="keyword-highlight">bridal makeup training in Janakpuri</span> includes live practice sessions.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="academy-feature-box" style="background: white;">
                                    <div class="text-center mb-4">
                                        <img src="<?= $site ?>images/our-services/s2.png" alt="Certified Makeup Artist Course Delhi" class="img-fluid rounded" style="height: 300px; object-fit: cover; width: 100%;">
                                    </div>
                                    <h4 class="text-primary">Nationally Recognized Certification</h4>
                                    <p>
                                        Get <span class="keyword-highlight">certified makeup artist certification in Delhi</span> that is valid globally.
                                        Our <span class="keyword-highlight">makeup artist course in West Delhi</span> comes with industry-approved certification.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-4">
                                <div class="academy-feature-box" style="background: white;">
                                    <div class="text-center mb-4">
                                        <img src="<?= $site ?>images/our-services/s4.png" alt="Makeup Artist Placement Assistance Delhi" class="img-fluid rounded" style="height: 300px; object-fit: cover; width: 100%;">
                                    </div>
                                    <h4 class="text-primary">100% Training Assistance</h4>
                                    <p>
                                        We provide complete <span class="keyword-highlight">training support for makeup artists in Delhi NCR</span>.
                                        Connect with top salons, bridal studios, and freelance opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- Courses Section -->
                <div class="section-full bg-white content-inner">
                    <!-- <div class="section-full content-inner bg-white"> -->
                    <div class="container">
                        <h2 class="text-center text-primary mb-5">
                            Our <span class="keyword-highlight">Professional Makeup Courses in Delhi</span>
                        </h2>

                        <div class="row">
                            <!-- Course 1 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
                                    <h4>Beginner Makeup Course</h4>
                                    <div class="course-highlight" style="border-left-color: white;">
                                        <p>Perfect for freshers looking for <span class="keyword-highlight" style="color: #ffd700;">makeup classes near me in Delhi</span></p>
                                        <ul>
                                            <li>Basic Skin Preparation</li>
                                            <li>Party & Occasional Makeup</li>
                                            <li>Foundation & Contouring</li>
                                            <li>Eye Makeup Techniques</li>
                                        </ul>
                                    </div>
                                    <p>Duration: 1 Month | Fees: ₹15,000</p>
                                </div>
                            </div>

                            <!-- Course 2 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white;">
                                    <h4>Professional Bridal Makeup Course</h4>
                                    <div class="course-highlight" style="border-left-color: white;">
                                        <p>Advanced <span class="keyword-highlight" style="color: #ffd700;">bridal makeup course in Delhi</span> with certification</p>
                                        <ul>
                                            <li>Traditional & Contemporary Bridal</li>
                                            <li>HD & Airbrush Makeup</li>
                                            <li>Mehndi & Sangeet Makeup</li>
                                            <li>Bridal Hairstyling</li>
                                        </ul>
                                    </div>
                                    <p>Duration: 3 Months | Fees: ₹45,000</p>
                                </div>
                            </div>

                            <!-- Course 3 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white;">
                                    <h4>Master Makeup Artist Program</h4>
                                    <div class="course-highlight" style="border-left-color: white;">
                                        <p>Complete <span class="keyword-highlight" style="color: #ffd700;">makeup artist certification Delhi</span> program</p>
                                        <ul>
                                            <li>All Beginner + Advanced Modules</li>
                                            <li>Special Effects Makeup</li>
                                            <li>Portfolio Development</li>
                                            <li>Business & Marketing</li>
                                        </ul>
                                    </div>
                                    <p>Duration: 6 Months | Fees: ₹75,000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- Service Areas Section -->
                <div class="section-full content-inner" style="background-image:url(<?= $site ?>images/background/bg4.jpg); background-position: bottom; background-size:cover;">
                    <!-- <div class="section-full content-inner"> -->
                    <div class="container">

                        <h2 class="text-center text-primary mb-4">
                            We Serve All Areas of <span class="keyword-highlight">West Delhi & Delhi NCR</span>
                        </h2>

                        <p class="text-center lead mb-5">
                            Looking for a <span class="keyword-highlight">makeup academy near you</span>? We are easily accessible from these areas:
                        </p>

                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Hari Nagar</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">Makeup academy in Hari Nagar</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Tilak Nagar</h5>
                                    <p class="mb-0">
                                        Best <span class="keyword-highlight">makeup academy in Tilak Nagar</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Janakpuri</h5>
                                    <p class="mb-0">
                                        Top <span class="keyword-highlight">makeup academy in Janakpuri</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Rajouri Garden</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">Makeup academy in Rajouri Garden</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Kirti Nagar</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">Makeup academy in Kirti Nagar</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Moti Nagar</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">Makeup academy in Moti Nagar</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>West Delhi</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">#1 makeup academy in West Delhi</span>
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="dlab-box p-a20 bg-white shadow radius-md text-center h-100">
                                    <h5>Delhi NCR</h5>
                                    <p class="mb-0">
                                        <span class="keyword-highlight">Makeup training institute in Delhi NCR</span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- </div> -->
                </div>


                <!-- SEO Content Section -->
                <div class="section-full bg-white content-inner">
                    <!-- <div class="section-full content-inner"> -->
                    <div class="container ">
                        <h2 class="text-primary mb-4">
                            SRB Makeover & Academy - Your Search for the <span class="keyword-highlight">Best Makeup Academy in Delhi</span> Ends Here!
                        </h2>

                        <div class="mb-4">
                            <h4 class="keyword-highlight">Why SRB is the Top Choice for Makeup Training?</h4>
                            <p>
                                If you're searching for "<span class="keyword-highlight">makeup classes near me Delhi</span>" or "<span class="keyword-highlight">best makeup academy in West Delhi</span>",
                                look no further than SRB Makeover & Academy. As a leading <span class="keyword-highlight">makeup training institute in Delhi NCR</span>,
                                we specialize in <span class="keyword-highlight">bridal makeup course in Delhi</span> that transforms beginners into professional artists.
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4 class="keyword-highlight">Comprehensive Makeup Courses for Everyone</h4>
                            <p>
                                Our <span class="keyword-highlight">professional makeup course in Delhi</span> is designed for:
                                • Beginners looking for <span class="keyword-highlight">beginner makeup course in Delhi</span>
                                • Professionals seeking <span class="keyword-highlight">advanced makeup training Delhi</span>
                                • Aspiring bridal artists wanting <span class="keyword-highlight">bridal makeup training in Janakpuri</span>
                                • Individuals preferring <span class="keyword-highlight">personal makeup course in Delhi</span>
                            </p>
                        </div>

                        <div class="mb-4">
                            <h4 class="keyword-highlight">Location Advantage</h4>
                            <p>
                                Conveniently located to serve students from <span class="keyword-highlight">Hari Nagar, Tilak Nagar, Janakpuri, Rajouri Garden, Kirti Nagar, Moti Nagar</span>
                                and surrounding areas of <span class="keyword-highlight">West Delhi</span>. We are the most accessible <span class="keyword-highlight">makeup academy in West Delhi</span>
                                with excellent connectivity from all parts of <span class="keyword-highlight">Delhi NCR</span>.
                            </p>
                        </div>

                        <div>
                            <h4 class="keyword-highlight">Bridal Makeup Specialization</h4>
                            <p>
                                As a premier <span class="keyword-highlight">makeup academy and bridal studio in Janakpuri</span>, we offer the most comprehensive
                                <span class="keyword-highlight">bridal makeup course in Delhi</span>. Learn traditional, contemporary, HD, and airbrush bridal makeup
                                from industry experts. Our <span class="keyword-highlight">certified bridal makeup course in Delhi</span> includes live bridal model
                                practice sessions, making us the preferred choice for <span class="keyword-highlight">bridal makeup training in Janakpuri</span>.
                            </p>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>

                <!-- CTA Section -->
                <div class="section-full content-inner" style="background-image:url(<?= $site ?>images/background/bg4.jpg); background-position: bottom; background-size:cover;">
                    <div class="container p-4">
                        <div class="cta-section text-center">
                            <h2 class="mb-4">Ready to Start Your Journey as a Professional Makeup Artist?</h2>
                            <p class="mb-4 lead">
                                Join the <span class="keyword-highlight">#1 Best Makeup Academy in West Delhi</span> today!
                            </p>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <a href="tel:+91<?= $contact['phone'] ?>" class="btn btn-light btn-lg w-100">
                                        <i class="fa fa-phone"></i> Call Now: +91 <?= $contact['phone'] ?>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-3">
                                    <a href="<?= $site ?>contact" class="btn btn-outline-light btn-lg w-100">
                                        <i class="fa fa-calendar"></i> Book Free Demo Class
                                    </a>
                                </div>
                            </div>
                            <p class="mt-4">
                                <span class="keyword-highlight">Limited Seats Available</span> | <span class="keyword-highlight">Weekend Batches</span> |
                                <span class="keyword-highlight">Flexible Timings</span> | <span class="keyword-highlight">Easy EMI Options</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Blog/Testimonial Section -->
                <div class="section-full bg-white content-inner">
                    <!-- <div class="section-full content-inner bg-white"> -->
                    <div class="container">
                        <h2 class="text-center text-primary mb-5">
                            Success Stories from Our <span class="keyword-highlight">Makeup Academy in Delhi</span>
                        </h2>

                        <div class="row">
                            <!-- Testimonial 1 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f8f9fa;">
                                    <div class="text-center mb-3">
                                        <img src="<?= $site ?>images/testimonials/t1.png" alt="Student Success Story - SRB Makeover Academy"
                                            class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <h5 class="text-center">Riya Sharma</h5>
                                    <p class="text-muted text-center">Professional Bridal Makeup Artist</p>
                                    <p class="text-center">
                                        "After completing the <span class="keyword-highlight">bridal makeup course in Delhi</span> from SRB Academy,
                                        I started my own studio in <span class="keyword-highlight">Rajouri Garden</span>. Best decision ever!"
                                    </p>
                                </div>
                            </div>

                            <!-- Testimonial 2 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f8f9fa;">
                                    <div class="text-center mb-3">
                                        <img src="<?= $site ?>images/testimonials/t2.png" alt="Makeup Course Review - SRB Academy Delhi"
                                            class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <h5 class="text-center">Priya Singh</h5>
                                    <p class="text-muted text-center">Makeup Artist at Luxury Salon</p>
                                    <p class="text-center">
                                        "The <span class="keyword-highlight">professional makeup course in Delhi</span> at SRB gave me confidence
                                        and skills. Now working at a top salon in <span class="keyword-highlight">Hari Nagar</span>."
                                    </p>
                                </div>
                            </div>

                            <!-- Testimonial 3 -->
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="academy-feature-box" style="background: #f8f9fa;">
                                    <div class="text-center mb-3">
                                        <img src="<?= $site ?>images/testimonials/t3.png" alt="Certified Makeup Artist Testimonial"
                                            class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                                    </div>
                                    <h5 class="text-center">Neha Gupta</h5>
                                    <p class="text-muted text-center">Freelance Makeup Artist</p>
                                    <p class="text-center">
                                        "As a beginner, I found the perfect <span class="keyword-highlight">makeup academy in West Delhi</span>.
                                        The <span class="keyword-highlight">personal makeup course in Delhi</span> was tailored to my needs."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
                <!-- </div> -->
            </div>
        </div>
        <!-- Content END-->

        <!-- Footer -->
        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/footer-links.php"; ?>

    <!-- Schema Markup for FAQ -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                "@type": "Question",
                "name": "Which is the best makeup academy in West Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "SRB Makeover & Academy is the #1 best makeup academy in West Delhi, serving Hari Nagar, Tilak Nagar, Janakpuri, Rajouri Garden, Kirti Nagar, Moti Nagar and Delhi NCR with professional bridal makeup courses and certified training."
                }
            }, {
                "@type": "Question",
                "name": "What makeup courses are offered at SRB Makeover Academy?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer Beginner Makeup Course, Professional Bridal Makeup Course, Master Makeup Artist Program, Personal Makeup Course, Advanced Makeup Training, and Beautician Course with makeup in Delhi."
                }
            }, {
                "@type": "Question",
                "name": "Is there a certified makeup artist course in Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, SRB Makeover & Academy offers certified makeup artist courses in Delhi with international certification that is valid globally. Our makeup artist certification Delhi program includes 100% practical training."
                }
            }, {
                "@type": "Question",
                "name": "Do you provide placement assistance after course completion?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% placement assistance to all our students. We help connect them with top salons, bridal studios, and freelance opportunities in Delhi NCR."
                }
            }, {
                "@type": "Question",
                "name": "What areas of Delhi do you serve?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We serve all areas of West Delhi including Hari Nagar, Tilak Nagar, Janakpuri, Rajouri Garden, Kirti Nagar, Moti Nagar, and the entire Delhi NCR region."
                }
            }]
        }
    </script>
</body>

</html>