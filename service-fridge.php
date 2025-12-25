<?php
$pageTitle = "Fridge Repair in Tirupur | Refrigerator Service Center | Neo Services";
$metaDesc = "Top-rated Fridge Repair in Tirupur. Expert technicians for Samsung, LG, Whirlpool refrigerators. Gas filling & compressor fix. Contact Neo Services for reliable fridge mechanic in tirupur.";
$metaKeywords = "fridge repair in tirupur, refrigerator service tirupur, fridge mechanic tirupur, neo services, neo service, double door fridge repair, fridge gas filling";
include 'includes/header.php';
?>

<div class="pro-page-header" style="background: linear-gradient(135deg, #91c1f7ff 20%, #3499f2ff 100%); padding: 130px 0 100px;">
    <div class="container relative">
        <div class="premium-badge"><i class="fa-solid fa-icicles"></i> Quick Fridge Restoration</div>
        <h1 class="pro-header-title reveal">Expert Refrigerator <br>Maintenance & Repair</h1>
        <p class="reveal" style="color: black;font-size: 1.25rem; opacity: 100%; max-width: 700px; margin: 0 auto;">Fast doorstep service for all single-door, double-door, and side-by-side refrigerators.</p>
    </div>
</div>

<div class="container">
    <div class="pro-content-layout">
        <!-- Main Services -->
        <div class="pro-main-content">
            <h2 class="mb-40 font-800">Refrigerator Solutions</h2>
            
            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #f0f9ff; color: #0284c7;"><i class="fa-solid fa-temperature-arrow-down"></i></div>
                <div class="pro-card-info">
                    <h3>Cooling Issue Service</h3>
                    <p>Diagnosis and repair of low cooling, thermostat failure, or defrosting issues in any model.</p>
                    <div class="pro-price-tag" style="background: #f0f9ff; color: #0284c7;">Starts ₹499</div>
                </div>
            </div>

            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #fef2f2; color: #dc2626;"><i class="fa-solid fa-droplet-slash"></i></div>
                <div class="pro-card-info">
                    <h3>Gas Leakage & Refilling</h3>
                    <p>Nitrogen testing for leaks, vacuum charging, and high-purity (R134a/R600a) gas refilling.</p>
                    <div class="pro-price-tag" style="background: #fef2f2; color: #dc2626;">Starts ₹1,500</div>
                </div>
            </div>

            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #f0fdfe; color: #0891b2;"><i class="fa-solid fa-bolt"></i></div>
                <div class="pro-card-info">
                    <h3>Compressor & PCB Repair</h3>
                    <p>Specialized repair for Inverter compressors and sensor-based modern refrigerator PCBs.</p>
                    <div class="pro-price-tag" style="background: #f0fdfe; color: #0891b2;">Expert Quote</div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="pro-sidebar">
            <div class="pro-booking-sidebar reveal">
                <h3 class="mb-10">Same Day Fix</h3>
                <p style="font-size: 0.9rem; color: #64748b;">Get your fridge running within 2 hours.</p>
                
                <ul class="pro-sidebar-list">
                    <li><i class="fa-solid fa-circle-check"></i> 100% Genuine Spare Parts</li>
                    <li><i class="fa-solid fa-circle-check"></i> Factory Trained Engineers</li>
                    <li><i class="fa-solid fa-circle-check"></i> Post-Repair Testing Lab</li>
                    <li><i class="fa-solid fa-circle-check"></i> Transparent Fixed Pricing</li>
                </ul>

                <button class="btn btn-primary full-width font-700" onclick="openBookingModal()" style="padding: 18px; border-radius: 12px; font-size: 1.1rem; background: #0369a1; border: none;">Book Service Now</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const reveals = document.querySelectorAll('.reveal');
        const trigger = window.innerHeight * 0.9;
        
        function checkReveal() {
            reveals.forEach(el => {
                if(el.getBoundingClientRect().top < trigger) {
                    el.classList.add('visible');
                }
            });
        }
        
        window.addEventListener('scroll', checkReveal);
        setTimeout(checkReveal, 100);
    });
</script>

<?php include 'includes/booking-widgets.php'; ?>
<?php include 'includes/footer.php'; ?>
