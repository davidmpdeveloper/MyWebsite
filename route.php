<?php
// Get route parameters
$from = isset($_GET['from']) ? ucwords(str_replace('-', ' ', $_GET['from'])) : '';
$to = isset($_GET['to']) ? ucwords(str_replace('-', ' ', $_GET['to'])) : '';

// If from or to is missing, redirect to home
if (!$from || !$to) {
    header("Location: index.php");
    exit();
}

// Set dynamic SEO values before including header
$page_title = "Taxi from $from to $to | One Way & Round Trip | VK Call Taxi";
$page_description = "Book a reliable cab from $from to $to with VK Call Taxi. Enjoy affordable one-way drops and round-trip taxi services. Professional drivers, 24/7 service.";
$page_keywords = "taxi $from to $to, cab $from to $to, $from to $to taxi fare, VK Call Taxi routes, outstation taxi $from";

include 'includes/header.php'; 
?>

<!-- Route Specific Hero Section -->
<section class="hero route-hero" id="home">
    <div class="hero-content">
        <h1 class="route-title">Taxi Service from <span><?php echo $from; ?></span> to <span><?php echo $to; ?></span></h1>
        <p>Premium & Affordable Outstation Cabs for your journey.</p>
        <div class="cta-btns">
            <a href="#booking-card-anchor" class="btn btn-primary">Book This Route</a>
            <a href="tel:+919486817350" class="btn btn-secondary">Call Now</a>
        </div>
    </div>
</section>

<!-- Route Content Section -->
<section id="route-details" class="route-details-section">
    <div class="section-title">
        <h2>Reliable <?php echo $from; ?> to <?php echo $to; ?> Cab</h2>
        <p>Your search for the best taxi service ends here</p>
    </div>
    
    <div class="route-grid-container">
        <div class="route-info">
            <h3>Why choose VK Call Taxi for your <?php echo $from; ?> to <?php echo $to; ?> journey?</h3>
            <p class="route-text">
                Traveling from <strong><?php echo $from; ?> to <?php echo $to; ?></strong> is now easier and more comfortable with VK Call Taxi. 
                Whether you need a one-way drop or a round-trip, our professional drivers ensure a safe and punctual journey. 
                We offer a wide range of well-maintained vehicles including Sedans, SUVs, and Innova Crysta to suit your needs and budget.
            </p>
            
            <div class="excellence-features">
                <div class="ex-item">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>Transparent & Affordable Pricing</span>
                </div>
                <div class="ex-item">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>24/7 Availability & Instant Confirmation</span>
                </div>
                <div class="ex-item">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>Professional & Verified Chauffeurs</span>
                </div>
                <div class="ex-item">
                    <i class="fa-solid fa-check-circle"></i>
                    <span>Clean & Sanitized Premium Fleet</span>
                </div>
            </div>

            <div class="route-tip-box">
                <h4>Travel Tip for <?php echo $to; ?></h4>
                <p>
                    The distance between <?php echo $from; ?> and <?php echo $to; ?> is covered smoothly by our experienced drivers who are well-versed with the routes and traffic conditions, ensuring you reach your destination on time.
                </p>
            </div>
        </div>

        <div class="route-booking-sidebar" id="booking-card-anchor">
            <div class="booking-card">
                <h3>Quick <span>Booking</span></h3>
                <form id="routeBookingForm" action="#" class="booking-form-advanced">
                    <div class="form-group">
                        <label><i class="fa-solid fa-user"></i> Name</label>
                        <input type="text" id="rt-name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label><i class="fa-solid fa-phone"></i> Phone</label>
                        <input type="tel" id="rt-phone" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label><i class="fa-solid fa-location-dot"></i> Pickup</label>
                        <input type="text" id="rt-pickup" value="<?php echo $from; ?>" required>
                    </div>
                    <div class="form-group">
                        <label><i class="fa-solid fa-location-arrow"></i> Drop</label>
                        <input type="text" id="rt-drop" value="<?php echo $to; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full">Request Fare</button>
                </form>
                <p class="form-hint">Driver will contact you in 5 mins</p>
            </div>
        </div>
    </div>
</section>

<!-- Re-use Pricing Section -->
<section id="pricing" class="pricing-section">
    <div class="section-title">
        <h2>Transparent Pricing</h2>
        <p>Standard rates for your <?php echo $from; ?> to <?php echo $to; ?> trip</p>
    </div>
    
    <div class="pricing-grid">
        <!-- Sedan Card -->
        <div class="premium-price-card">
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Comfort Class</p>
                    <h3>Sedan</h3>
                </div>
                <div class="price-tag">
                    <div class="amount">₹14</div>
                    <span class="unit">per km</span>
                </div>
            </div>
            <div class="price-car-image">
                <img src="assets/img/sedan_real.png" alt="Sedan Taxi">
            </div>
            <a href="#booking-card-anchor" class="btn btn-primary">Book Sedan</a>
        </div>

        <!-- SUV Card -->
        <div class="premium-price-card">
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Luxury Group</p>
                    <h3>SUV</h3>
                </div>
                <div class="price-tag">
                    <div class="amount">₹19</div>
                    <span class="unit">per km</span>
                </div>
            </div>
            <div class="price-car-image">
                <img src="assets/img/suv.png" alt="SUV Taxi">
            </div>
            <a href="#booking-card-anchor" class="btn btn-primary">Book SUV</a>
        </div>
        
        <!-- Crysta Card -->
        <div class="premium-price-card featured">
            <div class="popular-badge">Elite Choice</div>
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Executive Travel</p>
                    <h3>Innova Crysta</h3>
                </div>
                <div class="price-tag">
                    <div class="amount">₹22</div>
                    <span class="unit">per km</span>
                </div>
            </div>
            <div class="price-car-image">
                <img src="assets/img/suv_real.png" alt="Innova Crysta Taxi">
            </div>
            <a href="#booking-card-anchor" class="btn btn-primary">Book Crysta</a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="route-cta-section">
    <div class="cta-content">
        <h2>Ready to Start Your Journey?</h2>
        <p>Book your <?php echo $from; ?> to <?php echo $to; ?> taxi now and enjoy a premium travel experience.</p>
        <a href="tel:+919486817350" class="btn btn-primary">
            <i class="fa-solid fa-phone"></i> Call +91 94868 17350
        </a>
    </div>
</section>

<script>
document.getElementById('routeBookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('rt-name').value;
    const phone = document.getElementById('rt-phone').value;
    const pickup = document.getElementById('rt-pickup').value;
    const drop = document.getElementById('rt-drop').value;
    
    const message = `*VK Call Taxi - New Route Booking Request*%0A%0A` +
                    `*Route:* ${pickup} to ${drop}%0A` +
                    `*Customer:* ${name}%0A` +
                    `*Phone:* ${phone}%0A` +
                    `*Sent from:* Route Landing Page`;
    
    const whatsappUrl = `https://wa.me/919486817350?text=${message}`;
    window.open(whatsappUrl, '_blank');
});
</script>

<?php include 'includes/footer.php'; ?>
