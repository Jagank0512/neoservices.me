<?php
/**
 * Booking Widgets & Enhancements
 * Includes: FAB, Modal, Mobile Bar
 */
?>

<!-- Floating Action Buttons -->
<div class="fab-container animate">
    <a href="https://wa.me/918300172478?text=Hi%20Neo%20Services,%20I%20want%20to%20book%20a%20service." class="fab-item fab-whatsapp" target="_blank">
        <i class="fa-brands fa-whatsapp"></i>
        <span class="fab-label">Chat on WhatsApp</span>
    </a>
    <button class="fab-item fab-booking" onclick="openBookingModal()">
        <i class="fa-solid fa-calendar-check"></i>
        <span class="fab-label">Quick Booking</span>
    </button>
</div>

<!-- Mobile Bottom Bar -->
<div class="mobile-book-bar">
    <a href="tel:+918300172478" class="btn btn-primary" style="background: var(--dark-bg);">
        <i class="fa-solid fa-phone"></i> Call
    </a>
    <button class="btn btn-primary" onclick="openBookingModal()">
        <i class="fa-solid fa-bolt"></i> Book Now
    </button>
</div>

<!-- Modern Booking Modal -->
<div class="modal-overlay" id="bookingModal">
    <div class="modal-content">
        <button class="modal-close" onclick="closeBookingModal()">&times;</button>
        <div class="quick-booking-form">
            <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 20px;">
                <div style="width: 50px; height: 50px; background: rgba(37, 99, 235, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; color: var(--primary-color); font-size: 1.5rem;">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                </div>
                <div>
                    <h3>Quick Booking</h3>
                    <p>Book in 30 seconds. We'll call back!</p>
                </div>
            </div>
            
            <form id="ajaxBookingForm" method="POST">
                <div class="form-group animate-input">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="John Doe" required>
                </div>
                
                <div class="form-group animate-input">
                    <label>Select Service</label>
                    <select name="service" required>
                        <option value="AC Service" <?php echo (strpos($_SERVER['PHP_SELF'], 'ac') !== false) ? 'selected' : ''; ?>>AC Service</option>
                        <option value="Fridge Repair" <?php echo (strpos($_SERVER['PHP_SELF'], 'fridge') !== false) ? 'selected' : ''; ?>>Fridge Repair</option>
                        <option value="Washing Machine" <?php echo (strpos($_SERVER['PHP_SELF'], 'washing') !== false) ? 'selected' : ''; ?>>Washing Machine</option>
                        <option value="RO System" <?php echo (strpos($_SERVER['PHP_SELF'], 'ro') !== false) ? 'selected' : ''; ?>>RO System</option>
                    </select>
                </div>
                
                <div class="form-group animate-input">
                    <label>Your Phone Number</label>
                    <input type="tel" name="phone" placeholder="Enter 10 digit number" required pattern="[0-9]{10}">
                </div>

                <input type="hidden" name="extra_details" id="modalExtraDetails" value="">

                <div class="form-group animate-input">
                    <label>Preferred Date</label>
                    <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                </div>

                <button type="submit" class="btn btn-primary full-width" id="bookBtn" style="margin-top: 10px; padding: 15px;">
                    Confirm Booking <i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i>
                </button>
                
                <p style="text-align: center; margin-top: 15px; margin-bottom: 0; font-size: 0.8rem;">
                    <i class="fa-solid fa-shield-halved"></i> Your data is safe with us.
                </p>
            </form>
            
            <!-- Success Message Container -->
            <div id="bookingSuccess" style="display: none; text-align: center; padding: 40px 20px;">
                <div style="width: 80px; height: 80px; background: var(--secondary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; margin: 0 auto 20px; box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h3 style="color: var(--text-main); font-size: 1.5rem; margin-bottom: 10px;">Booking Confirmed!</h3>
                <p style="color: var(--text-light);">We have received your details.<br>Our team will contact you shortly.</p>
            </div>
        </div>
    </div>
</div>

<script>
function openBookingModal() {
    document.getElementById('bookingModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeBookingModal() {
    document.getElementById('bookingModal').classList.remove('active');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('bookingModal');
    if (event.target == modal) {
        closeBookingModal();
    }
}
</script>

<script>
// AJAX Handling for Booking
document.getElementById('ajaxBookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // UI Feedback
    const btn = document.getElementById('bookBtn');
    const originalText = btn.innerHTML;
    btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Processing...';
    btn.disabled = true;

    // Data Preparation
    const formData = new FormData(this);

    // Fetch API
    fetch('process-booking.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.status === 'success') {
            // Hide Form and Show Success
            document.querySelector('#bookingModal .quick-booking-form h3').style.display = 'none';
            document.querySelector('#bookingModal .quick-booking-form p').style.display = 'none';
            document.getElementById('ajaxBookingForm').style.display = 'none';
            
            // Perform Redirection to WhatsApp with pre-filled details
            if(data.wa_link) {
                window.location.href = data.wa_link;
            } else {
                // Fallback success UI if link fails
                const successDiv = document.getElementById('bookingSuccess');
                successDiv.style.display = 'block';
                setTimeout(() => { closeBookingModal(); }, 4000);
            }
            
            // Auto-close after 5 seconds
            setTimeout(() => {
                closeBookingModal();
                // Reset form
                document.getElementById('ajaxBookingForm').reset();
                // Hide success, show form again for next time
                successDiv.style.display = 'none';
                document.getElementById('ajaxBookingForm').style.display = 'block';
                document.querySelector('#bookingModal .quick-booking-form h3').style.display = 'block';
                document.querySelector('#bookingModal .quick-booking-form p').style.display = 'block';
                btn.innerHTML = originalText;
                btn.disabled = false;
            }, 4000);
        } else {
            alert('Something went wrong. Please try again.');
            btn.innerHTML = originalText;
            btn.disabled = false;
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Connection error. Please check your internet.');
        btn.innerHTML = originalText;
        btn.disabled = false;
    });
});
</script>
