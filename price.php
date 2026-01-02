<?php
include_once(__DIR__ . "/config/connect.php");
include_once(__DIR__ . "/util/function.php");

$contact = contact_us();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Price List | SRB Makeover & Academy</title>
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?= $site ?>images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $site ?>images/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/templete.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= $site ?>css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/styleSwitcher.css">
    
    <style>
        :root {
            --primary-orange: #fdb26f;
            --light-cream: #FFF5BA;
            --dark-text: #333;
            --light-text: #666;
        }
        
        .price-hero-banner {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('images/banner/bnr1.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0 60px;
            color: white;
            text-align: center;
        }
        
        .price-container {
            padding: 60px 0;
            background: #f9f9f9;
        }
        
        .price-category-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 5px 20px rgba(253, 178, 111, 0.1);
            border-top: 5px solid var(--primary-orange);
        }
        
        .price-category-title {
            color: var(--dark-text);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--light-cream);
            font-weight: 600;
            display: flex;
            align-items: center;
        }
        
        .price-category-title i {
            color: var(--primary-orange);
            margin-right: 10px;
            font-size: 1.2em;
        }
        
        .price-table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .price-table tr {
            border-bottom: 1px solid #eee;
        }
        
        .price-table tr:hover {
            background-color: var(--light-cream);
        }
        
        .price-table td {
            padding: 15px 10px;
            color: var(--dark-text);
        }
        
        .service-name {
            font-weight: 500;
            width: 65%;
        }
        
        .service-price {
            color: #d35400;
            font-weight: 600;
            text-align: right;
            width: 35%;
        }
        
        .special-offer-box {
            background: linear-gradient(135deg, var(--primary-orange) 0%, #ff9b4a 100%);
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
            color: white;
        }
        
        .special-offer-box h4 {
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .combo-offer {
            background: var(--light-cream);
            color: var(--dark-text);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary-orange);
        }
        
        .freelance-package {
            background: white;
            border: 2px dashed var(--primary-orange);
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            margin: 30px 0;
        }
        
        .freelance-price-tag {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d35400;
            margin: 15px 0;
        }
        
        .freelance-price-tag small {
            font-size: 1rem;
            color: var(--light-text);
            display: block;
            margin-top: 5px;
        }
        
        .price-range {
            color: #d35400;
            font-weight: 600;
        }
        
        .price-note-box {
            background: var(--light-cream);
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
            border-left: 4px solid var(--primary-orange);
        }
        
        .price-note-box ul {
            margin-bottom: 0;
            padding-left: 20px;
        }
        
        .price-note-box li {
            margin-bottom: 8px;
            color: var(--light-text);
        }
        
        @media (max-width: 768px) {
            .price-table td {
                padding: 12px 8px;
                font-size: 0.9rem;
            }
            
            .price-category-card {
                padding: 20px;
            }
            
            .freelance-price-tag {
                font-size: 2rem;
            }
        }
        
        /* Alternating row colors for better readability */
        .price-table tr:nth-child(even) {
            background-color: #f8f8f8;
        }
        
        .price-table tr:nth-child(even):hover {
            background-color: var(--light-cream);
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        
        <?php include_once "includes/header.php"; ?>
        
        <!-- Content -->
        <div class="page-content bg-white">
            
            <div class="dlab-bnr-inr dlab-bnr-inr-md overlay-black-dark" style="background-image:url(<?= $site ?>images/banner/breadcrumb-bg.png);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white">Complete Price List</h1>
						<!-- Breadcrumb row -->
						<div class="breadcrumb-row">
							<ul class="list-inline">
								<li><a href="<?= $site ?>">Home</a></li>
								<li>Price List</li>
							</ul>
                            <p class="m-t20">Transparent pricing for all our beauty and makeup services</p>
						</div>
						<!-- Breadcrumb row END -->
					</div>
				</div>
			</div>
            
            <!-- Main Pricing Content -->
            <div class="price-container">
                <div class="container">
                    <!-- Freelance Professional Makeup Package -->
                    <div class="freelance-package">
                        <h3>🎁 Special Freelance Professional Makeup Package</h3>
                        <p class="m-b20"><em>Only for Ladies</em></p>
                        <div class="freelance-price-tag">
                            ₹599/-
                            <small>for 10 Services</small>
                        </div>
                        <div class="freelance-price-tag">
                            ₹899/-
                            <small>for 15 Services</small>
                        </div>
                        <p class="m-t20">Unbeatable value package for all your beauty needs!</p>
                    </div>
                    
                    <!-- 1. Skin Care Services -->
                    <div class="price-category-card">
                        <h3 class="price-category-title">
                            <i class="flaticon-spa"></i> Skin Care Services
                        </h3>
                        <table class="price-table">
                            <tbody>
                                <tr><td class="service-name">Simple Pedicure</td><td class="service-price">₹350/-</td></tr>
                                <tr><td class="service-name">Simple Manicure</td><td class="service-price">₹300/-</td></tr>
                                <tr><td class="service-name">Deluxe Pedicure</td><td class="service-price">₹550/-</td></tr>
                                <tr><td class="service-name">Deluxe Manicure</td><td class="service-price">₹450/-</td></tr>
                                <tr><td class="service-name">Super Deluxe Pedicure</td><td class="service-price">₹650/-</td></tr>
                                <tr><td class="service-name">French Pedicure</td><td class="service-price">₹650/-</td></tr>
                                <tr><td class="service-name">French Manicure</td><td class="service-price">₹550/-</td></tr>
                                <tr><td class="service-name">Foot Spa</td><td class="service-price">₹750/-</td></tr>
                                <tr><td class="service-name">Hand Spa</td><td class="service-price">₹650/-</td></tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- 2. Buy One Get One Offers -->
                    <div class="special-offer-box">
                        <h4>🎉 Buy One Get One Free Offers</h4>
                        <div class="combo-offer">
                            <strong>Gold Facial (₹750/-)</strong> + Free Chocolate/Gold Bleach (₹250/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Diamond Facial (₹850/-)</strong> + Free Diamond Bleach (₹550/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Glycolic Facial (₹750/-)</strong> + Free Ginger Bleach (₹250/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Anti Pollution Facial (₹650/-)</strong> + Free Oxy Bleach (₹150/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Neem Tulsi Facial (₹650/-)</strong> + Free Herbal Bleach (₹200/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Lotus Hydra Nourishing Facial (₹750/-)</strong> + Free Milk & Rose Bleach (₹300/-)
                        </div>
                        <div class="combo-offer">
                            <strong>Mixed Fruit Facial (₹650/-)</strong> + Free Papaya Bleach (₹300/-)
                        </div>
                    </div>
                    
                    <!-- 3. Complete Rate List -->
                    <div class="price-category-card">
                        <h3 class="price-category-title">
                            <i class="flaticon-make-up"></i> Complete Beauty Rate List
                        </h3>
                        <table class="price-table">
                            <tbody>
                                <tr><td class="service-name">Eye Brows Threading</td><td class="service-price"><span class="price-range">₹20/-</span></td></tr>
                                <tr><td class="service-name">Face Threading</td><td class="service-price"><span class="price-range">₹20/- to ₹150/-</span></td></tr>
                                <tr><td class="service-name">Cream Bleach</td><td class="service-price"><span class="price-range">₹150/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Face D-tan</td><td class="service-price"><span class="price-range">₹450/- to ₹850/-</span></td></tr>
                                <tr><td class="service-name">Front Neck D-tan</td><td class="service-price"><span class="price-range">₹550/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Back Neck D-tan</td><td class="service-price"><span class="price-range">₹550/- to ₹1,500/-</span></td></tr>
                                <tr><td class="service-name">Full Body D-tan</td><td class="service-price"><span class="price-range">₹1,500/- to ₹2,500/-</span></td></tr>
                                <tr><td class="service-name">Waxing (Various Types)</td><td class="service-price"><span class="price-range">₹130/- to ₹1,850/-</span></td></tr>
                                <tr><td class="service-name">Under Arms Waxing</td><td class="service-price"><span class="price-range">₹40/- to ₹150/-</span></td></tr>
                                <tr><td class="service-name">Normal Face Waxing</td><td class="service-price"><span class="price-range">₹20/- to ₹300/-</span></td></tr>
                                <tr><td class="service-name">Full Body Waxing</td><td class="service-price"><span class="price-range">₹600/- to ₹2,000/-</span></td></tr>
                                <tr><td class="service-name">Bridal Wax</td><td class="service-price"><span class="price-range">₹1,000/- to ₹3,000/-</span></td></tr>
                                <tr><td class="service-name">Facial</td><td class="service-price"><span class="price-range">₹350/- to ₹3,500/-</span></td></tr>
                                <tr><td class="service-name">Body Massage with Oil</td><td class="service-price"><span class="price-range">₹500/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Back Massage</td><td class="service-price"><span class="price-range">₹99/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Body Polishing</td><td class="service-price"><span class="price-range">₹999/- to ₹2,500/-</span></td></tr>
                                <tr><td class="service-name">B-wax</td><td class="service-price"><span class="price-range">₹400/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Manicure</td><td class="service-price"><span class="price-range">₹200/- to ₹800/-</span></td></tr>
                                <tr><td class="service-name">Head Massage with Cream</td><td class="service-price"><span class="price-range">₹100/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Nail Polishing</td><td class="service-price"><span class="price-range">₹30/- to ₹100/-</span></td></tr>
                                <tr><td class="service-name">Pedicure</td><td class="service-price"><span class="price-range">₹200/- to ₹850/-</span></td></tr>
                                <tr><td class="service-name">Foot Massage with Cream</td><td class="service-price"><span class="price-range">₹99/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Clean UP</td><td class="service-price"><span class="price-range">₹99/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Hair Oiling</td><td class="service-price"><span class="price-range">₹50/- to ₹150/-</span></td></tr>
                                <tr><td class="service-name">Head Massage</td><td class="service-price"><span class="price-range">₹100/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Hair Colouring</td><td class="service-price"><span class="price-range">₹550/- to ₹2,500/-</span></td></tr>
                                <tr><td class="service-name">Hair Oil Massage with Steam</td><td class="service-price"><span class="price-range">₹99/- to ₹350/-</span></td></tr>
                                <tr><td class="service-name">Shampoo with Conditioning</td><td class="service-price"><span class="price-range">₹150/- to ₹250/-</span></td></tr>
                                <tr><td class="service-name">Trimming</td><td class="service-price"><span class="price-range">₹75/- to ₹200/-</span></td></tr>
                                <tr><td class="service-name">Root Touch Up Application</td><td class="service-price"><span class="price-range">₹100/- to ₹200/-</span></td></tr>
                                <tr><td class="service-name">Hair Spa</td><td class="service-price"><span class="price-range">₹400/- to ₹1,200/-</span></td></tr>
                                <tr><td class="service-name">Hair Cut</td><td class="service-price"><span class="price-range">₹75/- to ₹550/-</span></td></tr>
                                <tr><td class="service-name">Hair Henna</td><td class="service-price"><span class="price-range">₹200/- to ₹550/-</span></td></tr>
                                <tr><td class="service-name">Ironing</td><td class="service-price"><span class="price-range">₹150/- to ₹550/-</span></td></tr>
                                <tr><td class="service-name">Straightening</td><td class="service-price"><span class="price-range">₹1,999/- to ₹8,000/-</span></td></tr>
                                <tr><td class="service-name">Straight & Shine</td><td class="service-price"><span class="price-range">₹2,500/- to ₹9,000/-</span></td></tr>
                                <tr><td class="service-name">Fashion Streaks (Per Streak)</td><td class="service-price"><span class="price-range">₹150/- to ₹300/-</span></td></tr>
                                <tr><td class="service-name">Perming</td><td class="service-price"><span class="price-range">₹2,000/- to ₹5,000/-</span></td></tr>
                                <tr><td class="service-name">Skin Treatments (Per Sitting)</td><td class="service-price"><span class="price-range">₹650/- to ₹3,500/-</span></td></tr>
                                <tr><td class="service-name">Crimping</td><td class="service-price"><span class="price-range">₹150/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Tongs</td><td class="service-price"><span class="price-range">₹200/- to ₹750/-</span></td></tr>
                                <tr><td class="service-name">Blow Dryer</td><td class="service-price"><span class="price-range">₹150/- to ₹500/-</span></td></tr>
                                <tr><td class="service-name">Makeup & Styling</td><td class="service-price"><span class="price-range">₹750/- to ₹5,500/-</span></td></tr>
                                <tr><td class="service-name">Hair Styling</td><td class="service-price"><span class="price-range">₹100/- to ₹1,000/-</span></td></tr>
                                <tr><td class="service-name">Saree Draping</td><td class="service-price"><span class="price-range">₹100/- to ₹350/-</span></td></tr>
                                <tr><td class="service-name">Pre-Bridal Package</td><td class="service-price"><span class="price-range">₹7,000/- to ₹20,000/-</span></td></tr>
                                <tr><td class="service-name">Bridal Makeup</td><td class="service-price"><span class="price-range">₹7,000/- to ₹15,000/-</span></td></tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Important Notes -->
                    <div class="price-note-box">
                        <h5>📝 Important Information:</h5>
                        <ul>
                            <li>All prices are inclusive of professional products and services</li>
                            <li>Prices may vary based on specific requirements and product choices</li>
                            <li>Special packages and discounts available for multiple services</li>
                            <li>Advance booking recommended for bridal and special occasion makeup</li>
                            <li>Consultation available to customize services as per your needs</li>
                            <li>All services performed by certified professionals</li>
                        </ul>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="text-center m-t40">
                        <h3 class="m-b20">Ready to Book Your Appointment?</h3>
                        <p class="m-b30">Contact us for personalized consultation and special package deals</p>
                        <a href="<?= $site ?>contact/" class="btn btn-primary btn-lg m-r20" style="background: var(--primary-orange); border-color: var(--primary-orange);">
                            <i class="fa fa-phone"></i> Contact Us
                        </a>
                        <a href="<?= $site ?>booking.php" class="btn btn-secondary btn-lg" style="background: var(--light-cream); color: var(--dark-text); border-color: var(--primary-orange);">
                            <i class="fa fa-calendar"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include_once "includes/footer.php"; ?>
    </div>
    
    <?php include_once "includes/footer-links.php"; ?>
    
    <script>
    // Simple animation for price rows
    document.addEventListener('DOMContentLoaded', function() {
        const priceRows = document.querySelectorAll('.price-table tr');
        priceRows.forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
                this.style.transition = 'transform 0.2s ease';
            });
            row.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });
    </script>
</body>
</html>