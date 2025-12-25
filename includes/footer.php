    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <div class="footer-logo">
                        <a href="index.php">Neo<span>.</span></a>
                    </div>
                    <p class="footer-about">Your trusted partner for home appliance repair and maintenance in Tirupur. Fast, reliable, and affordable.</p>
                </div>
                
                <div class="footer-col">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="index.php" class="hover-link">Home</a></li>
                        <li><a href="about.php" class="hover-link">About Us</a></li>
                        <li><a href="contact.php" class="hover-link">Contact Us</a></li>
                        <li><a href="#" class="hover-link">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 class="footer-title">Our Services</h4>
                    <ul class="footer-links">
                        <li><a href="service-ac.php" class="hover-link">AC Repair</a></li>
                        <li><a href="service-fridge.php" class="hover-link">Fridge Repair</a></li>
                        <li><a href="service-washing.php" class="hover-link">Washing Machine</a></li>
                        <li><a href="service-ro.php" class="hover-link">RO Water Purifier</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4 class="footer-title">Contact</h4>
                    <div class="footer-info">
                        <p><i class="fa-solid fa-location-dot"></i> Tirupur, Tamil Nadu</p>
                        <p><i class="fa-solid fa-phone"></i> +91 83001 72478</p>
                        <p><i class="fa-solid fa-envelope"></i> help@neoservices.com</p>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> Neo Services Tirupur. All rights reserved.</p>
                <div class="social-links-footer">
                   <!-- Social icons if needed -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="js/script.js"></script>
</body>
</html>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile Dropdown Toggle
    const mobToggle = document.querySelector('.mob-toggle-btn');
    if(mobToggle) {
        mobToggle.addEventListener('click', function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === 'none' ? 'block' : 'none';
            // Toggle chevron rotation if exists
            const icon = this.querySelector('i');
            if(icon) {
                icon.style.transform = submenu.style.display === 'block' ? 'rotate(180deg)' : 'rotate(0deg)';
                icon.style.transition = 'transform 0.3s ease';
            }
        });
    }
});
</script>
