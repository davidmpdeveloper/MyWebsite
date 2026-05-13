<?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header pricing-bg">
        <div class="header-overlay">
            <h1>Transparent Pricing</h1>
            <p><a href="index.php">Home</a> / Pricing</p>
        </div>
    </section>

    <!-- Detailed Pricing Section -->
    <section class="pricing-page-content">
        <div class="section-title">
            <h2>Our Affordable Rates</h2>
            <p>Premium service with no hidden surprises</p>
        </div>

        <div class="pricing-container">
            <!-- Tabs Toggle -->
            <div class="pricing-tabs">
                <div class="pricing-toggle">
                    <button class="toggle-btn active" data-type="oneway">One Way</button>
                    <button class="toggle-btn" data-type="roundtrip">Round Trip</button>
                </div>
            </div>

            <!-- Pricing Grid -->
            <div class="pricing-grid">
                <!-- Sedan Card -->
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
                        <div class="detail-row"><i class="fa-solid fa-car-side"></i> Well Maintained Cars</div>
                        <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="sedan-allowance">₹300 Driver Allowance</span></div>
                        <div class="detail-row"><i class="fa-solid fa-house-chimney-user"></i> Doorstep Pickup</div>
                    </div>
                    <a href="index.php#booking" class="btn btn-primary">Book Sedan</a>
                </div>

                <!-- SUV Card -->
                <div class="premium-price-card featured">
                    <div class="card-accent suv-accent"></div>
                    <div class="popular-badge">Most Flexible</div>
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
                        <img src="assets/img/suv_real.png" alt="SUV Taxi">
                    </div>
                    <div class="price-details">
                        <div class="detail-row"><i class="fa-solid fa-users-viewfinder"></i> Extra Legroom</div>
                        <div class="detail-row"><i class="fa-solid fa-users"></i> Ideal for 6+1 Persons</div>
                        <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="suv-allowance">₹300 Driver Allowance</span></div>
                        <div class="detail-row"><i class="fa-solid fa-suitcase-rolling"></i> Ample Luggage Space</div>
                    </div>
                    <a href="index.php#booking" class="btn btn-primary">Book SUV</a>
                </div>

                <!-- Innova Crysta Card -->
                <div class="premium-price-card featured">
                    <div class="card-accent sedan-accent"></div>
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
                        <div class="detail-row"><i class="fa-solid fa-id-card"></i> <span id="innova-allowance">₹500 Driver Allowance</span></div>
                        <div class="detail-row"><i class="fa-solid fa-couch"></i> Captain Seats Available</div>
                    </div>
                    <a href="index.php#booking" class="btn btn-primary">Book Crysta</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Terms -->
    <section class="pricing-terms">
        <div class="terms-container">
            <h3>Pricing <span>Terms & Conditions</span></h3>
            <div class="terms-grid">
                <div class="term-item">
                    <h4><i class="fa-solid fa-gas-pump"></i> Fuel & Tolls</h4>
                    <p>Fuel is included in the per km rate. Toll charges, state taxes, and parking fees are extra and should be paid by the customer.</p>
                </div>
                <div class="term-item">
                    <h4><i class="fa-solid fa-road"></i> Minimum KM</h4>
                    <p>For outstation round trips, a minimum of 250km per day will be charged even if the actual distance is less.</p>
                </div>
                <div class="term-item">
                    <h4><i class="fa-solid fa-moon"></i> Night Charges</h4>
                    <p>Driver night allowance is applicable if the trip continues between 10:00 PM and 6:00 AM.</p>
                </div>
                <div class="term-item">
                    <h4><i class="fa-solid fa-circle-info"></i> Day Calculation</h4>
                    <p>Calendar day is calculated from 12:00 AM to 11:59 PM for outstation packages.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="bottom-cta">
        <h2>Still Have Questions About Pricing?</h2>
        <p>Give us a call and we'll give you a precise quote instantly.</p>
        <a href="tel:+919486817350" class="btn btn-secondary"><i class="fa-solid fa-phone"></i> Contact Support</a>
    </section>

<?php include 'includes/footer.php'; ?>
