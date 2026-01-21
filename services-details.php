<?php
include_once "config/connect.php";
include_once "util/function.php";

// Get service slug from URL
$service_slug = isset($_GET['alias']) ? mysqli_real_escape_string($conn, $_GET['alias']) : '';
$contact = contact_us();

// Initialize variables
$service = [];
$related_services = [];
$all_services = [];
$category_name = '';
$subcategory_name = '';
$service_locations = ['West Delhi', 'Janakpuri', 'Rajouri Garden', 'Hari Nagar', 'Tilak Nagar', 'Delhi NCR'];

if (!empty($service_slug)) {
    // Fetch main service details with category and subcategory information
    $service_query = "
        SELECT p.*, 
               c.categories AS category_name,
               c.slug_url AS category_slug,
               sc.categories AS subcategory_name,
               sc.slug_url AS subcategory_slug
        FROM products p
        LEFT JOIN categories c ON c.cate_id = p.pro_cate
        LEFT JOIN sub_categories sc ON sc.cate_id = p.pro_sub_cate
        WHERE p.slug_url = '$service_slug' 
        AND p.status = 1
        LIMIT 1
    ";
    
    $service_result = mysqli_query($conn, $service_query);

    if ($service_result && mysqli_num_rows($service_result) > 0) {
        $service = mysqli_fetch_assoc($service_result);
        
        // Store category/subcategory names
        $category_name = $service['category_name'] ?? 'Hair Services';
        $subcategory_name = $service['subcategory_name'] ?? 'Professional Treatment';
        
        // Fetch related services (same sub-category) - UPDATED QUERY
        $subcategory_id = $service['pro_sub_cate'];
        $service_id = $service['id'];
        
        $related_query = "
            SELECT p.* 
            FROM products p
            WHERE p.pro_sub_cate = '$subcategory_id' 
            AND p.id != '$service_id'
            AND p.status = 1 
            ORDER BY RAND()
            LIMIT 6
        ";
        
        $related_result = mysqli_query($conn, $related_query);
        if ($related_result && mysqli_num_rows($related_result) > 0) {
            while ($related = mysqli_fetch_assoc($related_result)) {
                $related_services[] = $related;
            }
        }

        // Fetch popular services for sidebar
        $all_services_query = "
            SELECT id, pro_name, slug_url, short_desc, pro_img 
            FROM products 
            WHERE status = 1 
            AND pro_cate = '{$service['pro_cate']}'
            ORDER BY trending DESC, id DESC 
            LIMIT 10
        ";
        
        $all_services_result = mysqli_query($conn, $all_services_query);
        if ($all_services_result && mysqli_num_rows($all_services_result) > 0) {
            while ($serv = mysqli_fetch_assoc($all_services_result)) {
                $all_services[] = $serv;
            }
        }

        // Generate SEO-friendly page title and description
        $service_name = htmlspecialchars($service['pro_name']);
        $locations_string = implode(', ', array_slice($service_locations, 0, 3));
        
        // Dynamic meta title with keywords
        $page_title = "{$service_name} | Best {$service_name} Service {$locations_string} | SRB Makeovers & Academy";
        
        // Dynamic meta description
        $meta_description = strip_tags($service['short_desc']);
        $meta_description .= " Professional {$service_name} service at SRB Makeovers & Academy. ";
        $meta_description .= "Best {$service_name} in West Delhi, Janakpuri, Rajouri Garden, Delhi NCR. ";
        $meta_description .= "Book appointment for {$service_name} at competitive prices.";
        
        // Generate keywords
        $service_keywords = htmlspecialchars($service['meta_key']);
        $additional_keywords = "best {$service_name} West Delhi, {$service_name} Janakpuri, professional {$service_name} Delhi NCR, ";
        $additional_keywords .= "affordable {$service_name} Rajouri Garden, {$service_name} near me, SRB Makeovers {$service_name}";
        
        // Structured Data for Service
        $structured_data = [
            "@context" => "https://schema.org",
            "@type" => "Service",
            "name" => $service_name,
            "description" => $meta_description,
            "provider" => [
                "@type" => "BeautySalon",
                "name" => "SRB Makeovers & Academy",
                "image" => $site . "images/logo.png",
                "address" => [
                    "@type" => "PostalAddress",
                    "streetAddress" => $contact['address'],
                    "addressLocality" => "West Delhi",
                    "addressRegion" => "Delhi",
                    "postalCode" => "110058",
                    "addressCountry" => "IN"
                ],
                "telephone" => "+91" . preg_replace('/\D/', '', $contact['phone']),
                "openingHours" => "Mo-Sa 09:00-20:00, Su 10:00-18:00",
                "priceRange" => "₹" . $service['selling_price'] . " - ₹" . $service['mrp']
            ],
            "areaServed" => $service_locations,
            "offers" => [
                "@type" => "Offer",
                "price" => $service['selling_price'],
                "priceCurrency" => "INR",
                "availability" => "https://schema.org/InStock",
                "validFrom" => date('Y-m-d')
            ]
        ];
        
        $structured_data_json = json_encode($structured_data);
        
    } else {
        header("Location: {$site}services.php");
        exit();
    }
} else {
    header("Location: {$site}services.php");
    exit();
}

// Generate breadcrumb navigation
$breadcrumbs = [
    ["Home", $site],
    ["Hair Services", $site . "services.php"],
    [$service['category_name'] ?? 'Professional Services', $site . "category/" . ($service['category_slug'] ?? 'hair-services')]
];

if ($service['subcategory_name']) {
    $breadcrumbs[] = [$service['subcategory_name'], $site . "subcategory/" . ($service['subcategory_slug'] ?? 'hair-treatments')];
}

$breadcrumbs[] = [$service_name, ""];

// WhatsApp configuration
$whatsapp_number = "+91" . preg_replace('/\D/', '', $contact['wp_number'] ?? $contact['phone']);
$whatsapp_message = rawurlencode("Hello SRB Makeovers! I'm interested in {$service['pro_name']} service. Price: ₹{$service['selling_price']}. Can you provide details about duration and availability?");
$whatsapp_url = "https://wa.me/{$whatsapp_number}?text={$whatsapp_message}";

// Generate canonical URL
$canonical_url = $site . "service/" . $service_slug;

// Generate image URLs
$service_image = $site . "admin/assets/img/uploads/" . htmlspecialchars($service['pro_img']);
$fallback_image = $site . "images/service-placeholder.jpg";
?>
<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">

<head>
    <!-- Primary Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $page_title ?></title>
    <meta name="title" content="<?= $page_title ?>">
    <meta name="description" content="<?= $meta_description ?>">
    <meta name="keywords" content="<?= $service_keywords ?>, <?= $additional_keywords ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?= $canonical_url ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= $canonical_url ?>">
    <meta property="og:title" content="<?= $page_title ?>">
    <meta property="og:description" content="<?= $meta_description ?>">
    <meta property="og:image" content="<?= $service_image ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= $service_name ?> Service at SRB Makeovers & Academy">
    <meta property="og:site_name" content="SRB Makeovers & Academy">
    <meta property="og:locale" content="en_IN">
    <meta property="article:published_time" content="<?= date('c', strtotime($service['added_on'])) ?>">
    <meta property="article:modified_time" content="<?= date('c') ?>">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?= $canonical_url ?>">
    <meta name="twitter:title" content="<?= $page_title ?>">
    <meta name="twitter:description" content="<?= $meta_description ?>">
    <meta name="twitter:image" content="<?= $service_image ?>">
    
    <!-- Additional Meta Tags -->
    <meta name="author" content="SRB Makeovers & Academy">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="format-detection" content="telephone=no">
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="West Delhi">
    <meta name="geo.position" content="28.6304;77.0903">
    <meta name="ICBM" content="28.6304, 77.0903">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        <?= $structured_data_json ?>
    </script>

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?= $site ?>images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="<?= $site ?>images/favicon.png">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="<?= $site ?>">

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="theme-color" content="#e83e8c">
    
    <!--[if lt IE 9]>
    <script src="<?= $site ?>js/html5shiv.min.js"></script>
    <script src="<?= $site ?>js/respond.min.js"></script>
    <![endif]-->

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/plugins.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/templete.min.css">
    <link class="skin" rel="stylesheet" type="text/css" href="<?= $site ?>css/skin/skin-1.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>css/styleSwitcher.css">
    <link rel="stylesheet" type="text/css" href="<?= $site ?>plugins/perfect-scrollbar/css/perfect-scrollbar.css">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS for SEO enhancements -->
    <style>
        .service-highlights {
            background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%);
            border-left: 4px solid #FDB26F;
            padding: 25px;
            margin: 25px 0;
            border-radius: 0 10px 10px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        .location-badge {
            display: inline-block;
            background: linear-gradient(45deg, #FDB26F, #ff6b9d);
            color: white;
            padding: 8px 20px;
            border-radius: 25px;
            margin: 5px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .location-badge:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(232, 62, 140, 0.3);
        }
        .price-tag {
            background: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 24px;
            font-weight: bold;
            display: inline-block;
            margin: 15px 0;
        }
        .price-tag span.original-price {
            font-size: 18px;
            color: #ddd;
            text-decoration: line-through;
            margin-left: 10px;
        }
        .cta-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            padding: 15px;
            box-shadow: 0 -5px 20px rgba(0,0,0,0.1);
            z-index: 1000;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .cta-button {
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }
        .cta-button.whatsapp {
            background: #25D366;
            color: white;
        }
        .cta-button.call {
            background: #e83e8c;
            color: white;
        }
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        @media (min-width: 768px) {
            .cta-fixed {
                display: none;
            }
        }
        .service-benefits ul {
            columns: 2;
            -webkit-columns: 2;
            -moz-columns: 2;
        }
        @media (max-width: 768px) {
            .service-benefits ul {
                columns: 1;
                -webkit-columns: 1;
                -moz-columns: 1;
            }
        }
        .related-service-card {
            transition: all 0.3s ease;
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
        }
        .related-service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            border-color: #fdb26f;
        }
        .breadcrumb-item.active {
            color: #fdb26f;
            font-weight: 600;
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        
        <!-- HEADER START -->
        <?php include_once "includes/header.php"; ?>
        <!-- HEADER END -->

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
                                <?php foreach($breadcrumbs as $index => $crumb): ?>
                                    <li class="<?= ($index == count($breadcrumbs)-1) ? 'active' : '' ?>">
                                        <a href="<?= $crumb[1] ?>"><?= $crumb[0] ?></a>
                                        <?= ($index < count($breadcrumbs)-1) ? '' : '' ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->
            
            <!-- Service Location Badges -->
            <div class="container mt-3">
                <div class="text-center">
                    <?php foreach(array_slice($service_locations, 0, 4) as $location): ?>
                        <span class="location-badge">
                            <i class="fas fa-map-marker-alt mr-2"></i><?= $location ?>
                        </span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Service Details -->
            <div class="content-block">
                <div class="section-full content-inner-2">
                    <div class="container">
                        <div class="row">
                            <!-- Sidebar -->
                            <div class="col-lg-3 col-md-4">
                                <div class="sticky-top" style="top: 100px;">
                                    <!-- Services List -->
                                    <div class="widget border-1 p-3 m-b30 bg-white radius-sm">
                                        <h5 class="widget-title style-1">Our Services</h5>
                                        <ul class="list-unstyled">
                                            <?php foreach ($all_services as $serv): ?>
                                                <li class="<?= ($serv['slug_url'] == $service_slug) ? 'active bg-light' : '' ?> p-2 mb-2 rounded">
                                                    <a href="<?= $site ?>service-details/<?= htmlspecialchars($serv['slug_url']) ?>" 
                                                       class="d-flex align-items-center text-dark <?= ($serv['slug_url'] == $service_slug) ? 'text-theme-primary font-weight-bold' : '' ?>">
                                                        <i class="fas fa-spa mr-2 text-theme-primary"></i>
                                                        <?= htmlspecialchars($serv['pro_name']) ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    
                                    <!-- Price Box -->
                                    <div class="widget border-1 p-4 m-b30 bg-gradient-primary text-white radius-sm" style="background: linear-gradient(135deg, #FDB26F, #ff6b9d);">
                                        <h5 class="text-white mb-3">Service Price</h5>
                                        <div class="price-tag bg-white text-dark p-3 rounded text-center mb-3">
                                            <span class="d-block text-muted">Starting From</span>
                                            <span class="display-4 font-weight-bold">₹<?= $service['selling_price'] ?></span>
                                            <?php if($service['mrp'] > $service['selling_price']): ?>
                                                <span class="original-price">₹<?= $service['mrp'] ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?= $whatsapp_url ?>" target="_blank" class="btn btn-light btn-block btn-lg" style="font-size: 16px;">
                                            <i class="fab fa-whatsapp mr-2"></i> Book via WhatsApp
                                        </a>
                                    </div>
                                    
                                    <!-- Contact Box -->
                                    <div class="widget border-1 p-4 m-b30 bg-white radius-sm">
                                        <h5 class="mb-3">Quick Contact</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-3">
                                                <i class="fas fa-phone-alt text-theme-primary mr-2"></i>
                                                <strong>Call:</strong> <a href="tel:+91<?= preg_replace('/\D/', '', $contact['phone']) ?>">+91 <?= $contact['phone'] ?></a>
                                            </li>
                                            <li class="mb-3">
                                                <i class="fab fa-whatsapp text-success mr-2"></i>
                                                <strong>WhatsApp:</strong> <a href="<?= $whatsapp_url ?>" target="_blank">+91 <?= $contact['wp_number'] ?? $contact['phone'] ?></a>
                                            </li>
                                            <li>
                                                <i class="fas fa-clock text-theme-primary mr-2"></i>
                                                <strong>Timing:</strong> 9AM - 8PM
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Main Content -->
                            <div class="col-lg-9 col-md-8">
                                <!-- Service Header -->
                                <div class="mb-4">
                                    <h1 class="m-t0 m-b10 fw6 text-theme-primary"><?= htmlspecialchars($service['pro_name']) ?></h1>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="badge badge-success mr-3"><i class="fas fa-certificate mr-1"></i> Certified Service</span>
                                        <span class="badge badge-info"><i class="fas fa-clock mr-1"></i> Duration: 60-90 mins</span>
                                    </div>
                                    <p class="lead"><?= $service['short_desc'] ?></p>
                                </div>
                                
                                <!-- Service Image -->
                                <div class="mb-4">
                                    <img src="<?= $service_image ?>" 
                                         alt="<?= htmlspecialchars($service['pro_name']) ?> at SRB Makeovers & Academy West Delhi"
                                         title="Professional <?= htmlspecialchars($service['pro_name']) ?> Service in Delhi NCR"
                                         class="img-fluid rounded shadow" 
                                         style="width: 500px; height: 100%; object-fit: cover;">
                                    <p class="text-center text-muted mt-2"><small>Professional <?= htmlspecialchars($service['pro_name']) ?> Service at SRB Makeovers & Academy</small></p>
                                </div>
                                
                                <!-- Service Description -->
                                <div class="mb-5">
                                    <h3 class="mb-3">About This Service</h3>
                                    <div class="service-description">
                                        <?= $service['description'] ?>
                                    </div>
                                    
                                    <!-- Service Highlights -->
                                    <div class="service-highlights mt-4">
                                        <h4 class="text-theme-primary mb-3"><i class="fas fa-star mr-2"></i> Service Highlights</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-check" style="list-style: none; padding-left: 0;">
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Professional Certified Experts</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Premium Quality Products</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Hygienic & Safe Environment</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Personalized Consultation</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-check" style="list-style: none; padding-left: 0;">
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Latest Techniques & Equipment</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Flexible Appointment Timing</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Affordable Pricing</li>
                                                    <li class="mb-2"><i class="fas fa-check-circle text-success mr-2"></i> Satisfaction Guaranteed</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- FAQ Section -->
                                <div class="mb-5">
                                    <h3 class="mb-4">Frequently Asked Questions</h3>
                                    <div class="accordion" id="serviceFAQ">
                                        <!-- FAQ Items remain the same as your original code -->
                                        <!-- ... Your existing FAQ code here ... -->
                                    </div>
                                </div>
                                
                                <!-- RELATED SERVICES SECTION - UPDATED -->
                                <div class="mt-5 pt-4 border-top">
                                    <h3 class="mb-4 text-center">Related Services You Might Like</h3>
                                    <p class="text-center mb-4">Explore similar professional services at SRB Makeovers & Academy</p>
                                    
                                    <?php if(!empty($related_services)): ?>
                                        <div class="row">
                                            <?php foreach($related_services as $related): ?>
                                                <div class="col-lg-4 col-md-6 mb-4">
                                                    <div class="related-service-card h-100">
                                                        <div class="card border-0 shadow-sm h-100">
                                                            <img src="<?= $site ?>admin/assets/img/uploads/<?= htmlspecialchars($related['pro_img']) ?>" 
                                                                 class="card-img-top" 
                                                                 alt="<?= htmlspecialchars($related['pro_name']) ?>"
                                                                 style="height: 350px; object-fit: cover;">
                                                            <div class="card-body">
                                                                <h5 class="card-title text-theme-primary">
                                                                    <a href="<?= $site ?>service-details/<?= htmlspecialchars($related['slug_url']) ?>" 
                                                                       class="text-decoration-none text-dark">
                                                                        <?= htmlspecialchars($related['pro_name']) ?>
                                                                    </a>
                                                                </h5>
                                                                <p class="card-text text-muted mb-2">
                                                                    <?= substr(strip_tags($related['short_desc']), 0, 100) ?>...
                                                                </p>
                                                                <div class="d-flex justify-content-between align-items-center pb-0">
                                                                    <span class="price-tag-small bg-theme-primary text-white px-3 py-1 rounded">
                                                                        ₹<?= $related['selling_price'] ?>
                                                                    </span>
                                                                    <a href="<?= $site ?>service-details/<?= htmlspecialchars($related['slug_url']) ?>" 
                                                                       class="btn btn-sm btn-outline-theme-primary">
                                                                        View Details <i class="fas fa-arrow-right ml-1"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer bg-transparent border-top-0">
                                                                <small class="text-muted text-primary">
                                                                    <i class="fas fa-map-marker-alt mr-1"></i> Available in West Delhi
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="text-center py-5">
                                            <i class="fas fa-spa fa-3x text-muted mb-3"></i>
                                            <p class="text-muted">No related services found at the moment.</p>
                                            <a href="<?= $site ?>services.php" class="btn btn-theme-primary">
                                                View All Services <i class="fas fa-arrow-right ml-2"></i>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile CTA Fixed Bar -->
            <div class="cta-fixed d-md-none">
                <a href="<?= $whatsapp_url ?>" target="_blank" class="cta-button whatsapp">
                    <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                </a>
                <a href="tel:+91<?= preg_replace('/\D/', '', $contact['phone']) ?>" class="cta-button call">
                    <i class="fas fa-phone-alt mr-2"></i> Call Now
                </a>
            </div>
        </div>
        <!-- Content END-->
        
        <!-- Footer -->
        <?php include_once "includes/footer.php"; ?>
        <!-- Footer END -->
        
        <!-- Back to Top -->
        <button class="scroltop fa fa-chevron-up"></button>
    </div>
    
    <!-- Footer Links -->
    <?php include_once "includes/footer-links.php"; ?>
    
    <!-- Additional JavaScript for SEO -->
    <script>
        // Schema Markup for FAQ
        const faqSchema = {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "What makes SRB Makeover services unique?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "SRB Makeover offers premium beauty services with certified professionals, using only high-quality products and the latest techniques. Our personalized approach ensures each client receives customized treatments tailored to their specific needs."
                    }
                },
                {
                    "@type": "Question",
                    "name": "How do I book an appointment at SRB Makeover?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "You can book appointments through multiple channels: Online booking via our website, WhatsApp, Phone call, Visit our salon directly, or Instagram/Facebook direct messages."
                    }
                }
                // Add more FAQ items as needed
            ]
        };
        
        // Add FAQ schema to page
        document.addEventListener('DOMContentLoaded', function() {
            const script = document.createElement('script');
            script.type = 'application/ld+json';
            script.text = JSON.stringify(faqSchema);
            document.head.appendChild(script);
            
            // Track service view for analytics
            if(typeof gtag !== 'undefined') {
                gtag('event', 'view_service', {
                    'service_name': '<?= addslashes($service["pro_name"]) ?>',
                    'service_price': <?= $service["selling_price"] ?>,
                    'service_category': '<?= addslashes($category_name) ?>'
                });
            }
        });
    </script>
</body>
</html>