<?php
$pageTitle = "Contact Neo Services | AC, Fridge, RO & Washing Machine Service in Tirupur";
$metaDesc = "Contact Neo Services Tirupur for AC Service, Fridge Repair, Washing Machine & RO Service. Call 8300172478 for expert mechanics in Tirupur.";
include 'includes/header.php';

$success = false;
if (isset($_GET['phone'])) {
    $success = true;
}

// Map parameters
$selectedService = isset($_GET['service']) ? $_GET['service'] : '';
?>

<section class="page-header" style="background: linear-gradient(135deg, #91c1f7ff 20%, #3499f2ff 100%); padding: 130px 0 50px; text-align: center;">
    <div class="container">
        <p style="color: #000000ff; font-size: 66px; font-weight: bold; padding-top: 5px;">Contact Us</p>
        <p style="color: #000001ff;">We are here to help you 24/7</p>
    </div>
</section>

<!-- Reuse the contact section layout -->
<section id="contact" class="contact section-padding">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <div class="info-item">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <h4>Our Head Office</h4>
                        <p>123, Avinashi Road, Near New Bus Stand,<br>Tirupur, Tamil Nadu - 641604</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <h4>Call Us</h4>
                        <p>+91 83001 72478</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="fa-solid fa-envelope"></i>
                    <div>
                        <h4>Email Us</h4>
                        <p>support@neoservices.com</p>
                    </div>
                </div>
                
                <hr style="border-color: rgba(255,255,255,0.1); margin: 30px 0;">
                
                <h4 style="margin-bottom: 20px;">Working Hours</h4>
                <p style="margin-bottom: 10px; display: flex; justify-content: space-between;"><span>Monday - Saturday:</span> <span>9:00 AM - 8:00 PM</span></p>
                <p style="margin-bottom: 10px; display: flex; justify-content: space-between;"><span>Sunday:</span> <span>10:00 AM - 4:00 PM</span></p>

                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                </div>
            </div>

            <?php if ($success): ?>
            <div class="contact-form text-center" style="display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 400px;">
                <div style="width: 80px; height: 80px; background: var(--secondary-color); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.5rem; margin-bottom: 25px; box-shadow: 0 10px 20px rgba(16, 185, 129, 0.3);">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h2 style="margin-bottom: 10px;">Booking Successful!</h2>
                <p style="color: var(--text-light); max-width: 300px; margin-bottom: 30px;">Thank you for choosing Neo Services. Our technician will call you within 15 minutes to confirm the visit.</p>
                <a href="index.php" class="btn btn-primary">Back to Home</a>
            </div>
            <?php else: ?>
            <form class="contact-form" id="whatsappForm">
                <h3 style="margin-bottom: 20px;">Send us a message</h3>
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="tel" name="phone" id="phone" value="<?php echo isset($_GET['phone']) ? $_GET['phone'] : ''; ?>" placeholder="+91 83001 72478" required>
                </div>
                <div class="form-group">
                    <label for="service">Service Needed</label>
                    <select name="service" id="service">
                        <option value="General Enquiry">Select Service</option>
                        <option value="AC Service" <?php echo (strpos($selectedService, 'AC') !== false) ? 'selected' : ''; ?>>AC Service</option>
                        <option value="Washing Machine" <?php echo (strpos($selectedService, 'Washing') !== false) ? 'selected' : ''; ?>>Washing Machine</option>
                        <option value="Fridge Repair" <?php echo (strpos($selectedService, 'Fridge') !== false) ? 'selected' : ''; ?>>Fridge Repair</option>
                        <option value="RO Service" <?php echo (strpos($selectedService, 'RO') !== false) ? 'selected' : ''; ?>>RO Service/AMC</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="4" placeholder="Describe your issue..."><?php echo isset($_GET['date']) ? "Preferred Date: " . $_GET['date'] . ". Time: " . $_GET['time'] : ''; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary full-width"><i class="fa-brands fa-whatsapp"></i> Send on WhatsApp</button>
            </form>

            <script>
            document.getElementById('whatsappForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                var name = document.getElementById('name').value;
                var phone = document.getElementById('phone').value;
                var service = document.getElementById('service').value;
                var message = document.getElementById('message').value;
                
                // Construct WhatsApp Message
                var waMessage = "Hello Neo Services, I would like to make an enquiry.\n\n";
                waMessage += "*Name:* " + name + "\n";
                waMessage += "*Phone:* " + phone + "\n";
                waMessage += "*Service:* " + service + "\n";
                if(message) waMessage += "*Details:* " + message;
                
                // WhatsApp URL (Use the verified number)
                var waUrl = "https://wa.me/918300172478?text=" + encodeURIComponent(waMessage);
                
                // Redirect
                window.open(waUrl, '_blank');
            });
            </script>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Map (Optional) -->
<section style="height: 400px; background: #eee;">
    <!-- Embed Google Map here -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125218.42817886472!2d77.26605051640624!3d11.109009900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba907b00cd5c317%3A0x644c3510c4366e!2sTiruppur%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1683827654321!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include 'includes/footer.php'; ?>
