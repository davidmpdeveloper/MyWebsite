</main>

<!-- Footer -->
<footer>
    <div class="footer-grid">
        <div class="footer-brand">
            <a href="index.php" class="logo-link footer-logo-link">
                <img src="assets/img/logo-white.png" alt="VK Call Taxi Logo" class="footer-logo">
                <!-- <span class="logo-text">VK <span> Call Taxi</span></span> -->
            </a>
            <p>Ensuring your safety and comfort on every mile. The most trusted cab service in Cuddalore since 2024.</p>
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/vkcalltaxi12/" target="_blank"><i
                        class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>

        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="booking.php">Book Now</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>Services</h4>
            <ul>
                <li><a href="services.php#oneway">One Way Drop</a></li>
                <li><a href="services.php#roundtrip">Round Trip</a></li>
                <li><a href="services.php#local">Local Rentals</a></li>
                <li><a href="services.php#airport">Airport Transfer</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h4>Contact Us</h4>
            <p><i class="fa-solid fa-location-dot"></i> VK Call Taxi<br>Nivetha Complex (Ground
                Floor)<br>Karuveppilankurichi (PO)<br>Virudhachalam (TK)<br>Cuddalore (DT) – 606 110</p>
            <p><i class="fa-solid fa-phone"></i> +91 94868 17350</p>
            <p><i class="fa-solid fa-phone"></i> +91 81899 17350</p>
            <p><i class="fa-solid fa-envelope"></i> vkcalltaxi12@gmail.com</p>
            <p><i class="fa-solid fa-clock"></i> 24/7 Available</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2026 VK Call Taxi. Designed &amp; Developed by <a href="https://www.rivvottechnologies.com/"
                target="_blank" style="color: var(--accent-color); text-decoration: none; font-weight: 600;">Rivvot
                Technologies</a>.</p>
    </div>
</footer>

<!-- Custom Floating WhatsApp (Bottom Left) -->
<div class="whatsapp-float" onclick="toggleWAPopup()">
    <div class="whatsapp-pulse"></div>
    <i class="fab fa-whatsapp"></i>
</div>

<!-- WhatsApp Chat Popup -->
<div class="wa-chat-popup" id="wa-popup">
    <div class="wa-header">
        <div class="wa-brand">
            <div class="wa-avatar">
                <img src="assets/img/sedan_real.png" alt="VK Call Taxi Support">
                <span class="online-status"></span>
            </div>
            <div class="wa-info">
                <h4>VK Call Taxi</h4>
                <span>Official Support</span>
            </div>
        </div>
        <button class="wa-close" onclick="toggleWAPopup()"><i class="fas fa-times"></i></button>
    </div>
    <div class="wa-body">
        <div class="wa-message">
            <p>Hello! 👋 Need help with taxi booking or outstation trips? Ask us here.</p>
            <div class="wa-time-row">
                <span class="wa-time">11:42 AM</span>
                <i class="fas fa-check-double"></i>
            </div>
        </div>
    </div>
    <div class="wa-footer">
        <div class="wa-input-container">
            <input type="text" id="wa-input" value="Hi" onkeypress="handleWAInput(event)">
            <button onclick="sendToWA()"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>
</div>



<!-- Back to Top Button -->
<a href="#" class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
</a>

<script src="assets/js/script.js"></script>
</body>

</html>