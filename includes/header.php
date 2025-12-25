<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Neo Services - Expert Home Appliance Repair in Tirupur'; ?></title>
    <meta name="description" content="<?php echo isset($metaDesc) ? $metaDesc : 'Best home appliance service in Tirupur. AC, Fridge, Washing Machine, RO Service.'; ?>">
    <meta name="keywords" content="<?php echo isset($metaKeywords) ? $metaKeywords : 'ac services in tirupur, fridge service in tirupur, ro service in tirupur, washing machine service in tirupur'; ?>">
    <meta name="author" content="Neo Services">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://neoservices.me/">
    <meta property="og:title" content="Neo Services - Tirupur">
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">Neo<span>.</span></a>
            </div>
            <nav class="nav-menu">
                <ul class="nav-list">
                    <li><a href="index.php" class="nav-link">Home</a></li>
                    <li><a href="about.php" class="nav-link">About</a></li>
                    
                    <!-- Dropdown for Services -->
                    <li class="dropdown-parent">
                        <a href="service-ac.php" class="nav-link">Services <i class="fa-solid fa-chevron-down" style="font-size: 0.8em;"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="service-ac.php">AC Service</a></li>
                            <li><a href="service-fridge.php">Fridge Repair</a></li>
                            <li><a href="service-washing.php">Washing Machine</a></li>
                            <li><a href="service-ro.php">RO System</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </nav>
            <div class="header-actions">
                <a href="tel:+918300172478" class="btn btn-primary"><i class="fa-solid fa-phone"></i> Call Now</a>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu">
        <div class="mobile-menu-header">
            <div class="logo">Neo<span></span></div>
            <div class="mobile-menu-close"><i class="fa-solid fa-xmark"></i></div>
        </div>
        <div class="mobile-menu-body">
            <ul class="mobile-nav-list">
                <li><a href="index.php">Home</a></li>
                <li class="mob-dropdown-parent">
                    <a href="javascript:void(0)" class="mob-toggle-btn">Services <i class="fa-solid fa-chevron-down" style="font-size: 0.8em; margin-left: 10px;"></i></a>
                    <ul class="mob-submenu-list" style="display: none; padding-left: 20px;">
                        <li><a href="service-ac.php" style="font-size: 1rem !important; margin-bottom: 10px !important;">AC Service</a></li>
                        <li><a href="service-fridge.php" style="font-size: 1rem !important; margin-bottom: 10px !important;">Fridge Repair</a></li>
                        <li><a href="service-washing.php" style="font-size: 1rem !important; margin-bottom: 10px !important;">Washing Machine</a></li>
                        <li><a href="service-ro.php" style="font-size: 1rem !important; margin-bottom: 10px !important;">RO System</a></li>
                    </ul>
                </li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li>
                    <a href="tel:+918300172478" class="mobile-call-btn" style="font-size: 1rem !important; color: white !important; margin-top: 20px;">
                        <i class="fa-solid fa-phone"></i> Call Expert Now
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobile-menu-footer">
            <div class="mobile-socials">
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="tel:+918300172478"><i class="fa-solid fa-phone"></i></a>
            </div>
        </div>
    </div>
