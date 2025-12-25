<?php
include_once(__DIR__ . "/config/connect.php");
include_once(__DIR__ . "/util/function.php");

$contact = contact_us();

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO KEYWORDS -->
    <meta name="keywords" content="
SRB Makeover,
SRB Makeover and Academy,
Bridal Makeup Artist in West Delhi,
Professional Bridal Makeup Artist in Delhi NCR,
Best Bridal Makeup in Janakpuri,
Bridal Makeup in Rajouri Garden,
Bridal Makeup in Hari Nagar,
Bridal Makeup in Tilak Nagar,
Makeup Academy in West Delhi,
Makeup Academy in Janakpuri,
Makeup Academy in Rajouri Garden,
Makeup Academy in Hari Nagar,
Makeup Academy in Tilak Nagar,
Best Makeup Academy in Delhi,
Certified Bridal Makeup Course in Delhi,
Professional Makeup Artist Portfolio Delhi,
Wedding Makeup Artist Delhi NCR,
Bridal Makeover Studio in West Delhi
">

    <meta name="author" content="SRB Makeover & Academy">
    <meta name="robots" content="index, follow">

    <!-- META DESCRIPTION -->
    <meta name="description" content="Explore the professional bridal makeup portfolio of SRB Makeover & Academy. Trusted bridal makeup artist and makeup academy in West Delhi, Janakpuri, Rajouri Garden, Hari Nagar & Tilak Nagar. 24+ years of expertise in bridal makeovers and certified makeup courses in Delhi NCR.">

    <!-- OPEN GRAPH (SOCIAL SHARE) -->
    <meta property="og:title" content="Portfolio | SRB Makeover & Academy – Bridal Makeup Artist & Makeup Academy in West Delhi">
    <meta property="og:description" content="View real bridal makeover work by SRB Makeover & Academy. Leading bridal makeup artist and makeup training institute in West Delhi, Janakpuri, Rajouri Garden & Delhi NCR.">
    <meta property="og:image" content="images/portfolio/bridal-makeup-cover.jpg">
    <meta property="og:type" content="website">

    <meta name="format-detection" content="telephone=no">

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- PAGE TITLE -->
    <title>Bridal Makeup Portfolio | SRB Makeover & Academy | West Delhi</title>

    <!-- MOBILE -->
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
        .portfolio-filter li.active {
            background-color: var(--primary);
        }

        .portfolio-filter li.active a {
            color: white !important;
        }
    </style>
</head>

<body id="bg">
    <div class="page-wraper">
        <div id="loading-area"></div>
        <?php include_once "includes/header.php"; ?>

        <!-- Content -->
        <div class="page-content bg-white">
            <!-- inner page banner -->
            <div class="dlab-bnr-inr dlab-bnr-inr-md overlay-black-dark" style="background-image:url(<?= $site ?>images/banner/breadcrumb-bg4.jpg);">
                <div class="container">
                    <div class="dlab-bnr-inr-entry">
                        <h1 class="text-white">Our Portfolio</h1>
                        <!-- Breadcrumb row -->
                        <div class="breadcrumb-row">
                            <ul class="list-inline">
                                <li><a href="index.php">Home</a></li>
                                <li>Our Portfolio</li>
                            </ul>
                        </div>
                        <!-- Breadcrumb row END -->
                    </div>
                </div>
            </div>
            <!-- inner page banner END -->

            <!-- Portfolio Section -->
            <div class="content-block">
                <div class="section-full content-inner-2 portfolio-box">
                    <div class="container">
                        <div class="section-head text-black text-center m-b20">
                            <h2 class="text-primary m-b10">Our Portfolio</h2>
                            <div class="dlab-separator-outer m-b0">
                                <div class="dlab-separator text-primary style-icon"><i class="flaticon-spa text-primary"></i></div>
                            </div>
                            <p>Explore our amazing work and transformations. We take pride in delivering exceptional beauty services.</p>
                        </div>

                        <!-- Portfolio Filter -->
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

                        <!-- Portfolio Grid -->
                        <div class="clearfix">
                            <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery sp10">
                                <?php foreach ($portfolio_items as $item): ?>
                                    <?php
                                    $category_slug = isset($item['category_slug']) ? $item['category_slug'] : '';
                                    $image_path = $site . "admin/uploads/portfolio/" . $item['image_path'];
                                    ?>
                                    <li class="card-container col-lg-3 col-md-4 col-sm-6 col-6 <?= $category_slug ?>">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect">
                                                <a href="javascript:void(0);">
                                                    <img src="<?= $image_path ?>" alt="<?= htmlspecialchars($item['title']) ?>">
                                                </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon">
                                                        <a class="mfp-link" title="<?= htmlspecialchars($item['title']) ?>" href="<?= $image_path ?>">
                                                            <i class="ti-fullscreen"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="portfolio-info ">
                                                <!-- <h5 class="mb-1"><?= htmlspecialchars($item['title']) ?></h5> -->
                                                <?php if ($item['description']): ?>
                                                    <p class="text-muted mb-2"><?= substr(htmlspecialchars($item['description']), 0, 80) ?>...</p>
                                                <?php endif; ?>
                                                <!-- <span class="badge bg-primary"><?= $item['category_name'] ?? 'Uncategorized' ?></span> -->
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Section END -->
        </div>
        <!-- Content END-->

        <?php include_once "includes/footer.php"; ?>
    </div>

    <?php include_once "includes/footer-links.php"; ?>

    <script>
        // Portfolio Filtering
        document.addEventListener('DOMContentLoaded', function() {
            const filters = document.querySelectorAll('.filters li');
            const portfolioItems = document.querySelectorAll('.card-container');

            filters.forEach(filter => {
                filter.addEventListener('click', function() {
                    // Remove active class from all filters
                    filters.forEach(f => f.classList.remove('active'));

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
        });
    </script>
</body>

</html>