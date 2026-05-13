<?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header booking-bg">
        <div class="header-overlay">
            <h1>Book Your Taxi</h1>
            <p><a href="index.php">Home</a> / Booking</p>
        </div>
    </section>

    <!-- Main Booking Section -->
    <section class="booking-page">
        <div class="booking-wrapper">
            
            <!-- Booking Form Area -->
            <div class="booking-main">
                <div class="booking-card">
                    <h2>Fill in your <span>Journey Details</span></h2>
                    <p>Enter your details below and our dispatch team will contact you within 5 minutes.</p>
                    
                    <form id="bookingForm" action="#" class="booking-form-advanced">
                        <div class="form-row">
                            <div class="form-group">
                                <label><i class="fa-solid fa-user"></i> Full Name</label>
                                <input id="bk-name" type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-phone"></i> Phone Number</label>
                                <input id="bk-phone" type="tel" placeholder="+91 XXXXX XXXXX" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label><i class="fa-solid fa-location-dot"></i> Pickup Point</label>
                                <input id="bk-pickup" type="text" placeholder="Area, Landmark or Street" required>
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-location-arrow"></i> Drop Point</label>
                                <input id="bk-drop" type="text" placeholder="Destination Address" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label><i class="fa-solid fa-calendar-days"></i> Travel Date</label>
                                <input id="bk-date" type="date" required>
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-clock"></i> Pickup Time</label>
                                <input id="bk-time" type="time" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label><i class="fa-solid fa-car"></i> Vehicle Type</label>
                                <select id="bk-vehicle">
                                    <option value="Sedan (Comfort - 4+1)">Sedan (Comfort - 4+1)</option>
                                    <option value="SUV (Luxury - 6+1)">SUV (Luxury - 6+1)</option>
                                    <option value="Innova Crysta (Executive - 6+1)" selected>Innova Crysta (Executive - 6+1)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label><i class="fa-solid fa-route"></i> Trip Type</label>
                                <select id="bk-trip">
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

            <!-- Sidebar Info -->
            <div class="booking-sidebar">
                <div class="info-card">
                    <h3>Why Choose VK?</h3>
                    <div class="info-item">
                        <i class="fa-solid fa-bolt"></i>
                        <div>
                            <h4>Instant Confirmation</h4>
                            <p>We'll call you back as soon as you submit the form.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-headset"></i>
                        <div>
                            <h4>24/7 Dispatch</h4>
                            <p>Our team is always awake to help your travel.</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-solid fa-wallet"></i>
                        <div>
                            <h4>Zero Booking Fees</h4>
                            <p>You pay only for the trip. No hidden booking charges.</p>
                        </div>
                    </div>
                </div>

                <div class="help-card">
                    <h3>Need Immediate Help?</h3>
                    <p>Call our 24/7 hotline for emergency bookings:</p>
                    <a href="tel:+919486817350" class="hotline-btn">
                        <i class="fa-solid fa-phone-volume"></i>
                        +91 94868 17350
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php include 'includes/footer.php'; ?>
