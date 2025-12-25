<?php
$pageTitle = "Neo Services | Professional Appliance Care in Tirupur";
$metaDesc = "Tirupur's #1 Doorstep Appliance Service. Expert repair for AC, Washing Machines, Fridges & RO Systems. Verified Technicians & 90-Day Warranty.";
include 'includes/header.php';
?>

<!-- Premium Visual Background -->
<div class="page-background">
    <div class="blob-wrapper">
        <div class="blob-item blob-1"></div>
        <div class="blob-item blob-2"></div>
        <div class="blob-item blob-3"></div>
    </div>
</div>

<main class="main-wrapper">
    <!-- Hero Section -->
    <section id="hero" class="mobile-hero">
        <div class="container">
            <div class="mobile-hero-grid">
                <!-- Text Content -->
                <div class="mobile-hero-content">
                    <div class="hero-badge">
                        <span class="dot pulse"></span>
                        <span class="text">Serving Tirupur Since 2018</span>
                    </div>
                    <h1 class="hero-h1">Premium <span class="text-gradient">Home Care</span> <br>Expertly Delivered</h1>
                    <p class="hero-subtext">Experience Tirupur's most reliable doorstep repair service for AC, Washing Machines, and more. 90-minute response guaranteed.</p>
                    
                    <div class="hero-cta-group">
                        <a href="tel:+918300172478" class="btn-glow-primary">
                            <span class="btn-icon"><i class="fa-solid fa-phone-volume"></i></span>
                            <span class="btn-text">Call Now</span>
                        </a>
                        <a href="contact.php" class="btn-glass">
                            <span>Book Visit</span>
                        </a>
                    </div>

                    <div class="hero-ratings mt-20">
                        <div class="rating-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span class="rating-text"><strong>4.9/5</strong> from 2,500+ locals</span>
                    </div>
                </div>
                
                <!-- Visual Content (Hidden on very small mobile if needed, or stacked) -->
                <div class="mobile-hero-visual">
                    <div class="hero-card-stack">
                        <div class="hero-card top-card">
                            <i class="fa-solid fa-shield-halved"></i>
                            <div>
                                <strong>Verified</strong>
                                <span>Experts</span>
                            </div>
                        </div>
                        <div class="hero-card bottom-card">
                            <i class="fa-solid fa-clock"></i>
                            <div>
                                <strong>2 Hour</strong>
                                <span>Response</span>
                            </div>
                        </div>
                        <img src="assets/images/technician.png" alt="Neo Technician" class="hero-main-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid (Mobile First) -->
    <section id="services" class="mobile-section">
        <div class="container">
            <div class="section-header text-center mb-30">
                <span class="section-tag">Our Expertise</span>
                <h2 class="section-h2">Home Services</h2>
                <p class="section-p">Transparent pricing. 90-day warranty.</p>
            </div>

            <div class="mobile-services-grid">
                <!-- AC -->
                <a href="service-ac.php" class="mobile-service-card">
                    <div class="service-icon-box ac-theme">
                        <i class="fa-solid fa-snowflake"></i>
                    </div>
                    <div class="service-content">
                        <h3>AC Service</h3>
                        <p>Repair & Cleaning</p>
                        <span class="price">Starts ₹299</span>
                    </div>
                    <div class="service-arrow">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>

                <!-- Washing Machine -->
                <a href="service-washing.php" class="mobile-service-card">
                    <div class="service-icon-box washing-theme">
                        <i class="fa-solid fa-shirt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Washing Machine</h3>
                        <p>Front & Top Load</p>
                        <span class="price">Starts ₹349</span>
                    </div>
                    <div class="service-arrow">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>

                <!-- Fridge -->
                <a href="service-fridge.php" class="mobile-service-card">
                    <div class="service-icon-box fridge-theme">
                        <i class="fa-solid fa-temperature-low"></i>
                    </div>
                    <div class="service-content">
                        <h3>Refrigerator</h3>
                        <p>Repair & Gas Fill</p>
                        <span class="price">Starts ₹399</span>
                    </div>
                    <div class="service-arrow">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>

                <!-- RO -->
                <a href="service-ro.php" class="mobile-service-card">
                    <div class="service-icon-box ro-theme">
                        <i class="fa-solid fa-glass-water"></i>
                    </div>
                    <div class="service-content">
                        <h3>RO Purifier</h3>
                        <p>Filter & Service</p>
                        <span class="price">Starts ₹199</span>
                    </div>
                    <div class="service-arrow">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- How It Works (Simple Steps) -->
    <section class="mobile-section bg-light">
        <div class="container">
            <h2 class="section-h2 text-center mb-30">How it Works</h2>
            <div class="mobile-steps-row">
                <div class="step-mini">
                    <div class="step-circle">1</div>
                    <span>Book</span>
                </div>
                <div class="step-line"></div>
                <div class="step-mini">
                    <div class="step-circle">2</div>
                    <span>Confirm</span>
                </div>
                <div class="step-line"></div>
                <div class="step-mini">
                    <div class="step-circle">3</div>
                    <span>Relax</span>
                </div>
            </div>
            
            <div class="cta-box mt-30 text-center">
                <p class="mb-15">Need urgent help? We are available 24/7.</p>
                <a href="tel:+918300172478" class="btn-primary full-width">
                    <i class="fa-solid fa-phone"></i> Call Now
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Grid -->
    <section class="mobile-section">
        <div class="container">
            <div class="mobile-stats-grid">
                <div class="stat-card">
                    <strong class="stat-num">5k+</strong>
                    <span class="stat-label">Happy Clients</span>
                </div>
                <div class="stat-card">
                    <strong class="stat-num">4.9</strong>
                    <span class="stat-label">Google Rating</span>
                </div>
                <div class="stat-card">
                    <strong class="stat-num">90</strong>
                    <span class="stat-label">Day Warranty</span>
                </div>
                <div class="stat-card">
                    <strong class="stat-num">2hr</strong>
                    <span class="stat-label">Response</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
