<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero" id="home">
    <h1>Reliable & Affordable Cab Service</h1>
    <p>Your trusted partner for city drops and outstation round trips.</p>
    <div class="cta-btns">
        <a href="#booking" class="btn btn-primary">Book Now</a>
        <a href="tel:+919486817350" class="btn btn-secondary">Call Now</a>
    </div>
</section>


<!-- Booking Section -->
<section id="booking" class="booking-page" style="padding-top: 100px;">
    <div class="booking-wrapper" style="justify-content: center;">
        <div class="booking-main" style="max-width: 800px; flex: none; width: 100%;">
            <div class="booking-card">
                <h2 style="text-align: center;">Fill in your <span>Journey Details</span></h2>
                <p style="text-align: center; margin-bottom: 30px;">Enter your details below and our dispatch team will
                    contact you within 5 minutes.</p>

                <form id="indexBookingForm" action="#" class="booking-form-advanced">
                    <div class="form-row">
                        <div class="form-group">
                            <label><i class="fa-solid fa-user"></i> Full Name</label>
                            <input id="idx-name" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa-solid fa-phone"></i> Phone Number</label>
                            <input id="idx-phone" type="tel" placeholder="+91 XXXXX XXXXX" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label><i class="fa-solid fa-location-dot"></i> Pickup Point</label>
                            <div class="input-with-icon">
                                <input id="idx-pickup" type="text" placeholder="Area, Landmark or Street" required>
                                <button type="button" id="locate-me-btn" class="locate-btn" title="Use Current Location">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><i class="fa-solid fa-location-arrow"></i> Drop Point</label>
                            <input id="idx-drop" type="text" placeholder="Destination Address" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label><i class="fa-solid fa-calendar-days"></i> Travel Date</label>
                            <input id="idx-date" type="date" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa-solid fa-clock"></i> Pickup Time</label>
                            <input id="idx-time" type="time" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label><i class="fa-solid fa-car"></i> Vehicle Type</label>
                            <select id="idx-vehicle">
                                <option value="Sedan (Comfort - 4+1)">Sedan (Comfort - 4+1)</option>
                                <option value="SUV (Luxury - 6+1)">SUV (Luxury - 6+1)</option>
                                <option value="Innova Crysta (Executive - 6+1)" selected>Innova Crysta (Executive - 6+1)
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label><i class="fa-solid fa-route"></i> Trip Type</label>
                            <select id="idx-trip">
                                <option value="One Way Drop">One Way Drop</option>
                                <option value="Round Trip">Round Trip</option>
                                <option value="Local Rental">Local Rental</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full">Confirm Booking Request</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modern Booking Confirmation Modal -->
<div id="booking-modal" class="custom-modal">
    <div class="modal-content">
        <!-- STEP 1: SEARCHING STATE -->
        <div id="modal-searching" style="display: none;">
            <div class="radar-container">
                <div class="radar-ring"></div>
                <div class="radar-ring"></div>
                <div class="radar-ring"></div>
                <div class="radar-scanner"></div>
                <div class="radar-car">
                    <i class="fa-solid fa-car-side"></i>
                </div>
            </div>
            <div class="status-content">
                <h3 class="status-title">Searching for Driver</h3>
                <p class="status-desc">Connecting you with the nearest VK Call Taxi...</p>
            </div>
        </div>

        <!-- STEP 2: SUCCESS STATE -->
        <div id="modal-success" style="display: none;">
            <div class="success-top">
                <div class="success-check">
                    <i class="fa-solid fa-check"></i>
                </div>
                <h2>Booking Confirmed!</h2>
                <p>Your ride is on the way</p>
            </div>

            <div class="trip-info-card">
                <div class="card-header">
                    <span>Booking ID</span>
                    <strong id="res-id">#VK12345</strong>
                </div>

                <div class="route-display">
                    <div class="route-point">
                        <i class="fa-solid fa-location-dot pickup"></i>
                        <span id="res-pickup">Pickup Point</span>
                    </div>
                    <div class="route-divider"></div>
                    <div class="route-point">
                        <i class="fa-solid fa-map-pin drop"></i>
                        <span id="res-drop">Drop Point</span>
                    </div>
                </div>

                <div class="trip-grid">
                    <div class="grid-item">
                        <i class="fa-solid fa-route"></i>
                        <span id="res-dist">12.5 km</span>
                    </div>
                    <div class="grid-item">
                        <i class="fa-solid fa-clock"></i>
                        <span id="res-time">25 mins</span>
                    </div>
                    <div class="grid-item highlight">
                        <i class="fa-solid fa-wallet"></i>
                        <span id="res-fare">₹0</span>
                    </div>
                </div>
                
                <div class="driver-hint">
                    <i class="fa-solid fa-car-side"></i> Driver will arrive shortly
                </div>
            </div>

            <div class="modal-actions">
                <a href="tel:+919486817350" class="btn btn-primary btn-full"><i class="fa-solid fa-phone"></i> Call Driver Now</a>
                <div class="action-row">
                    <button onclick="resetBooking()" class="btn btn-outline"><i class="fa-solid fa-rotate"></i> Book Another</button>
                    <button onclick="closeModal()" class="btn btn-text">Dismiss</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Services Section -->
<section id="services">
    <div class="section-title">
        <h2>Our Premium Fleet</h2>
        <p>Choose the ultimate comfort for your journey</p>
    </div>
    <div class="services-container">
        <!-- Sedan Card -->
        <div class="service-card">
            <div class="service-img-wrapper">
                <img src="assets/img/sedan_real.png" alt="Premium Sedan Taxi">
            </div>
            <div class="service-content">
                <h3>Executive Sedan</h3>
                <p>Ideal for business trips and small families. Enjoy a smooth, quiet ride with ample space for your
                    commute.</p>
                <div class="fleet-features">
                    <span><i class="fa-solid fa-snowflake"></i> AC</span>
                    <span><i class="fa-solid fa-suitcase"></i> 3 Bags</span>
                    <span><i class="fa-solid fa-users"></i> 4+1 Seats</span>
                    <span><i class="fa-solid fa-gas-pump"></i> Fuel Inc.</span>
                </div>
                <div class="service-footer">
                    <div class="price-hint">Starts from <strong>₹14/km</strong></div>
                    <a href="#booking" class="btn btn-primary" style="padding: 8px 20px; font-size: 0.9rem;">Book</a>
                </div>
            </div>
        </div>

        <!-- SUV Card -->
        <div class="service-card">
            <div class="service-img-wrapper">
                <img src="assets/img/suv.png" alt="Premium SUV Taxi">
            </div>
            <div class="service-content">
                <h3>Luxury SUV</h3>
                <p>Travel in style with extra legroom and superior comfort. Perfect for group outings and long distance
                    tours.</p>
                <div class="fleet-features">
                    <span><i class="fa-solid fa-snowflake"></i> AC</span>
                    <span><i class="fa-solid fa-suitcase"></i> 5 Bags</span>
                    <span><i class="fa-solid fa-users"></i> 6+1 Seats</span>
                    <span><i class="fa-solid fa-wifi"></i> On Request</span>
                </div>
                <div class="service-footer">
                    <div class="price-hint">Starts from <strong>₹19/km</strong></div>
                    <a href="#booking" class="btn btn-primary" style="padding: 8px 20px; font-size: 0.9rem;">Book</a>
                </div>
            </div>
        </div>

        <!-- Innova Crysta Card -->
        <div class="service-card">
            <div class="service-img-wrapper">
                <img src="assets/img/suv_real.png" alt="Elite Innova Crysta Taxi">
            </div>
            <div class="service-content">
                <h3>Elite Innova Crysta</h3>
                <p>The gold standard in luxury travel. Perfect for high-profile business trips, premium family outings,
                    and elite outstation drops.</p>
                <div class="fleet-features">
                    <span><i class="fa-solid fa-crown"></i> Elite Comfort</span>
                    <span><i class="fa-solid fa-snowflake"></i> Dual AC</span>
                    <span><i class="fa-solid fa-couch"></i> Captain Seats</span>
                    <span><i class="fa-solid fa-suitcase"></i> 7 Bags</span>
                </div>
                <div class="service-footer">
                    <div class="price-hint">Starts from <strong>₹22/km</strong></div>
                    <a href="#booking" class="btn btn-primary" style="padding: 8px 20px; font-size: 0.9rem;">Book</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing-section">
    <div class="section-title">
        <h2>Transparent Pricing</h2>
        <p>Premium service with honest, upfront rates</p>
    </div>

    <div class="pricing-tabs">
        <div class="pricing-toggle">
            <button class="toggle-btn active" data-type="oneway">One Way</button>
            <button class="toggle-btn" data-type="roundtrip">Round Trip</button>
        </div>
    </div>

    <div class="pricing-grid">
        <!-- Sedan Pricing -->
        <div class="premium-price-card">
            <div class="card-accent sedan-accent"></div>
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Comfort Class</p>
                    <h3>Sedan</h3>
                </div>
                <div class="price-tag">
                    <div class="amount" id="sedan-price">₹14</div>
                    <span class="unit">per km</span>
                </div>
            </div>

            <div class="price-car-image">
                <img src="assets/img/sedan_real.png" alt="Sedan Taxi">
            </div>

            <div class="price-details">
                <div class="detail-row"><i class="fa-solid fa-user-check"></i> Professional Driver</div>
                <div class="detail-row"><i class="fa-solid fa-wallet"></i> No Booking Fees</div>
                <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="sedan-allowance">₹300 Driver
                        Allowance</span></div>
            </div>

            <a href="#booking" class="btn btn-primary">Book Sedan</a>
        </div>

        <!-- SUV Pricing -->
        <div class="premium-price-card">
            <div class="card-accent suv-accent"></div>
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Luxury Group</p>
                    <h3>SUV</h3>
                </div>
                <div class="price-tag">
                    <div class="amount" id="suv-price">₹19</div>
                    <span class="unit">per km</span>
                </div>
            </div>

            <div class="price-car-image">
                <img src="assets/img/suv.png" alt="SUV Taxi">
            </div>

            <div class="price-details">
                <div class="detail-row"><i class="fa-solid fa-user-check"></i> Verified Chauffeur</div>
                <div class="detail-row"><i class="fa-solid fa-wallet"></i> Instant Confirmation</div>
                <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="suv-allowance">₹300 Driver
                        Allowance</span></div>
            </div>

            <a href="#booking" class="btn btn-primary">Book SUV</a>
        </div>

        <!-- Innova Crysta Pricing -->
        <div class="premium-price-card featured">
            <div class="card-accent suv-accent"></div>
            <div class="popular-badge">Elite Choice</div>
            <div class="price-card-header">
                <div class="car-meta">
                    <p>Executive Travel</p>
                    <h3>Innova Crysta</h3>
                </div>
                <div class="price-tag">
                    <div class="amount" id="innova-price">₹22</div>
                    <span class="unit">per km</span>
                </div>
            </div>

            <div class="price-car-image" style="background: #fdfdfd;">
                <img src="assets/img/suv_real.png" alt="Innova Crysta Taxi">
            </div>

            <div class="price-details">
                <div class="detail-row"><i class="fa-solid fa-crown"></i> Super Premium Comfort</div>
                <div class="detail-row"><i class="fa-solid fa-snowflake"></i> Multi-Zone Climate</div>
                <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="innova-allowance">₹500 Driver
                        Allowance</span></div>
            </div>

            <a href="#booking" class="btn btn-primary">Book Crysta</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features">
    <div class="features-container">
        <div class="feature-box">
            <i class="fa-solid fa-clock"></i>
            <h3>24/7 Service</h3>
            <p>Always available for your needs.</p>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-user-tie"></i>
            <h3>Professional Drivers</h3>
            <p>Safe and experienced chauffeurs.</p>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-tags"></i>
            <h3>Affordable Pricing</h3>
            <p>Best rates in the market.</p>
        </div>
        <div class="feature-box">
            <i class="fa-solid fa-shield-halved"></i>
            <h3>Safe & Comfortable</h3>
            <p>Well-maintained clean cars.</p>
        </div>
    </div>
</section>



<!-- Popular Routes Section -->
<section id="popular-routes" class="popular-routes" style="background: #f8f9fa;">
    <div class="section-title">
        <h2>Popular <span>Taxi Routes</span></h2>
        <p>Book outstation cabs for our most traveled routes in Tamil Nadu</p>
    </div>

    <div class="routes-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; max-width: 1200px; margin: 0 auto;">
        <a href="virudhachalam-to-trichy.php" class="route-link-card" style="text-decoration: none; color: inherit;">
            <div style="background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; text-align: center; border: 1px solid #eee;">
                <h4 style="color: var(--secondary-color);">Virudhachalam to Trichy</h4>
                <p style="font-size: 0.9rem; color: var(--primary-color); font-weight: 600; margin-top: 10px;">Book Now <i class="fa-solid fa-arrow-right"></i></p>
            </div>
        </a>
        <a href="virudhachalam-to-chennai.php" class="route-link-card" style="text-decoration: none; color: inherit;">
            <div style="background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; text-align: center; border: 1px solid #eee;">
                <h4 style="color: var(--secondary-color);">Virudhachalam to Chennai</h4>
                <p style="font-size: 0.9rem; color: var(--primary-color); font-weight: 600; margin-top: 10px;">Book Now <i class="fa-solid fa-arrow-right"></i></p>
            </div>
        </a>
        <a href="virudhachalam-to-jayangkondam.php" class="route-link-card" style="text-decoration: none; color: inherit;">
            <div style="background: #fff; padding: 20px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s ease; text-align: center; border: 1px solid #eee;">
                <h4 style="color: var(--secondary-color);">Virudhachalam to Jayangkondam</h4>
                <p style="font-size: 0.9rem; color: var(--primary-color); font-weight: 600; margin-top: 10px;">Book Now <i class="fa-solid fa-arrow-right"></i></p>
            </div>
        </a>
    </div>
</section>

<!-- Contact & Map -->
<!-- How It Works Section -->
<section id="how-it-works" class="how-it-works">
    <div class="section-title">
        <h2>Book Your Ride <span>in 3 Easy Steps</span></h2>
        <p>Experience the most seamless booking process in Cuddalore</p>
    </div>

    <div class="steps-grid">
        <div class="step-card">
            <div class="step-icon"><i class="fa-solid fa-map-location-dot"></i></div>
            <h3>Choose Route</h3>
            <p>Select your pickup location and destination. We cover all of Tamil Nadu.</p>
            <div class="step-num">01</div>
        </div>
        <div class="step-card">
            <div class="step-icon"><i class="fa-solid fa-car-rear"></i></div>
            <h3>Select Vehicle</h3>
            <p>Pick from our premium Sedan or spacious SUV fleets based on your group size.</p>
            <div class="step-num">02</div>
        </div>
        <div class="step-card">
            <div class="step-icon"><i class="fa-solid fa-calendar-check"></i></div>
            <h3>Confirm & Relax</h3>
            <p>Get instant confirmation. Our professional driver arrives on time at your doorstep.</p>
            <div class="step-num">03</div>
        </div>
    </div>
</section>

<!-- Professional Excellence Section -->
<section class="pro-excellence">
    <div class="excellence-content">
        <div class="excel-text">
            <h2>Our Drivers are <span>Our Pride</span></h2>
            <p>At VK Call Taxi, we don't just provide cars; we provide professional travel experts who ensure your
                safety and comfort throughout the journey.</p>
            <div class="excellence-features">
                <div class="ex-item">
                    <i class="fa-solid fa-shield-halved"></i>
                    <span>Verified & Licensed Professional Drivers</span>
                </div>
                <div class="ex-item">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span>Punctual - Guaranteed 15 min Early Arrival</span>
                </div>
                <div class="ex-item">
                    <i class="fa-solid fa-hand-holding-heart"></i>
                    <span>Polite & Customer-Centric Behavior</span>
                </div>
            </div>
            <a href="booking.php" class="btn btn-primary">Book with the Best</a>
        </div>
        <div class="excel-image">
            <img src="assets/img/suv_real.png" alt="VK Call Taxi Driver Professionalism">
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>