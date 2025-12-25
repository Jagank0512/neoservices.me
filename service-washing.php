<?php
$pageTitle = "Washing Machine Service in Tirupur | Repair & Installation | Neo Services";
$metaDesc = "Reliable Washing Machine Service in Tirupur. Front load & Top load repair for all brands. Verified mechanics. Contact Neo Services today for washing machine repair in Tirupur.";
$metaKeywords = "washing machine service in tirupur, washing machine repair tirupur, laundry machine mechanic, neo services, neo service, top load repair, front load service";
include 'includes/header.php';
?>

<div class="pro-page-header" style="background: linear-gradient(135deg, #91c1f7ff 20%, #3499f2ff 100%); padding: 130px 0 100px;">
    <div class="container relative">
        <div class="premium-badge"><i class="fa-solid fa-sync"></i> Express Laundry Repair</div>
        <h1 class="pro-header-title reveal">Washing Machine <br>Service & Installation</h1>
        <p class="reveal" style=" color: black; font-size: 1.25rem; opacity: 100% ; max-width: 700px; margin: 0 auto;">Professional care for Top Load, Front Load, and Semi-Automatic machines in Tirupur.</p>
    </div>
</div>

<div class="container">
    <div class="pro-content-layout">
        <!-- Main Services -->
        <div class="pro-main-content">
            <h2 class="mb-40 font-800">Mechanical Solutions</h2>
            
            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #f5f3ff; color: #7c3aed;"><i class="fa-solid fa-circle-notch"></i></div>
                <div class="pro-card-info">
                    <h3>Drum & Logic Repair</h3>
                    <p>Solving loud noise, vibration, or spinning issues by replacing genuine bearings and retuning logic boards.</p>
                    <div class="pro-price-tag" style="background: #f5f3ff; color: #7c3aed;">Starts ₹599</div>
                </div>
            </div>

            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #fdf2f8; color: #db2777;"><i class="fa-solid fa-soap"></i></div>
                <div class="pro-card-info">
                    <h3>Internal Deep Clean</h3>
                    <p>Complete tub removal and sterilization to remove lint, scaling, and bad odors from your machine.</p>
                    <div class="pro-price-tag" style="background: #fdf2f8; color: #db2777;">Fixed ₹1,299</div>
                </div>
            </div>

            <div class="pro-service-card reveal">
                <div class="pro-card-icon" style="background: #ecfdf5; color: #10b981;"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                <div class="pro-card-info">
                    <h3>PCB & Wiring Repair</h3>
                    <p>Master diagnosis of digital error codes and PCB sensor recalibration for high-end washing units.</p>
                    <div class="pro-price-tag" style="background: #ecfdf5; color: #10b981;">Expert Quote</div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="pro-sidebar">
            <div class="pro-booking-sidebar reveal">
                <h3 class="mb-10">Instant Visit</h3>
                <p style="font-size: 0.9rem; color: #64748b;">Schedule your laundry repair today.</p>
                
                <ul class="pro-sidebar-list">
                    <li><i class="fa-solid fa-circle-check"></i> Spare Parts Warranty</li>
                    <li><i class="fa-solid fa-circle-check"></i> Multi-Brand Expertise</li>
                    <li><i class="fa-solid fa-circle-check"></i> Trained Local Pros</li>
                    <li><i class="fa-solid fa-circle-check"></i> Zero Hidden Costs</li>
                </ul>

                <button class="btn btn-primary full-width font-700" onclick="openBookingModal()" style="padding: 18px; border-radius: 12px; font-size: 1.1rem; background: #4338ca; border: none;">Book Service</button>
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
