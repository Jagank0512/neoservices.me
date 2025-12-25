<?php
$pageTitle = "AC Service in Tirupur | Expert AC Mechanic | Neo Services";
$metaDesc = "Best AC Service in Tirupur. Professional AC Mechanic for Split & Window AC repair, gas filling & installation. 90-day warranty. Book Neo Services now.";
$metaKeywords = "ac service in tirupur, ac mechanic in tirupur, ac repair tirupur, split ac service, window ac service, ac gas filling tirupur, neo services, neo service";
include 'includes/header.php';
?>

<div class="page-ac">
    <!-- Radiant Header -->
    <section class="hero-glass-section" style="background: linear-gradient(135deg, #91c1f7ff 20%, #3499f2ff 100%); padding: 130px 0 100px;">
        <div class="container fade-up">
            <div class="premium-badge"><i class="fa-solid fa-snowflake"></i> Tirupur's Largest Service Network</div>
            <h1 class="hero-title-v3">AC Service & <br>Maintenance Expertise</h1>
            <p class="hero-subtitle-v3" style="color: black;" >Get your cooling restored in 90 minutes. Professional split and window AC services with 100% genuine parts guarantee.</p>
        </div>
    </section>

    <div class="container">
        <div class="content-grid-v3">
            <!-- Services -->
            <div class="main-services-v3">
                <h2 style="font-weight: 900; margin-bottom: 40px; font-size: 2.5rem; letter-spacing: -1.5px;">Premium Care Plans</h2>
                
                <div class="card-v3 fade-up" style="animation-delay: 0.1s;">
                    <div class="card-v3-icon"><i class="fa-solid fa-wind"></i></div>
                    <div class="card-v3-info">
                        <h3>Hydro-Deep Cleaning</h3>
                        <p>Our signature high-pressure jet wash removes 99% of bacteria and dust from every corner of your AC coils and drainage pipes.</p>
                        <div class="price-pill-v3">Fixed ₹499</div>
                    </div>
                </div>

                <div class="card-v3 fade-up" style="animation-delay: 0.2s;">
                    <div class="card-v3-icon"><i class="fa-solid fa-gas-pump"></i></div>
                    <div class="card-v3-info">
                        <h3>Safe Gas Charging</h3>
                        <p>Complete nitrogen pressure testing for leaks followed by accurate (R32 / R410A) gas refilling by certified engineers.</p>
                        <div class="price-pill-v3">Starts ₹1,500</div>
                    </div>
                </div>

                <div class="card-v3 fade-up" style="animation-delay: 0.3s;">
                    <div class="card-v3-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <div class="card-v3-info">
                        <h3>Standard Installation</h3>
                        <p>Vibration-free mounting and vacuuming of the outdoor unit to ensure your compressor lasts for decades.</p>
                        <div class="price-pill-v3">Starts ₹1,499</div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="sidebar-v3-area">
                <div class="sidebar-v3 fade-up" style="animation-delay: 0.4s;">
                    <h3 style="color: var(--p-blue);">Instant Booking</h3>
                    <p style="color: var(--t-light);">Schedule a visit in seconds.</p>
                    
                    <ul class="benefit-list-v3">
                        <li><i class="fa-solid fa-circle-check"></i> 90-Day Work Warranty</li>
                        <li><i class="fa-solid fa-circle-check"></i> Verified Local Pros</li>
                        <li><i class="fa-solid fa-circle-check"></i> Transparent Pricing</li>
                        <li><i class="fa-solid fa-circle-check"></i> Post-Service Support</li>
                    </ul>

                    <button class="btn btn-primary full-width" onclick="openBookingModal()" style="background: var(--p-blue); padding: 20px; border-radius: 20px; font-weight: 800; font-size: 1.25rem;">Schedule Service</button>
                    <div style="text-align: center; margin-top: 20px; font-size: 0.85rem; color: var(--t-light);">*Visit charge ₹199 only</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/booking-widgets.php'; ?>
<?php include 'includes/footer.php'; ?>
