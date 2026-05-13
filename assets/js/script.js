// Mobile Menu Toggle + overlay (stacking order: bottom bar < overlay < drawer < top nav)
const menuToggle = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');
const navOverlay = document.getElementById('mobile-nav-overlay');

function syncMobileMenuState() {
    const open = !!(navLinks && navLinks.classList.contains('active'));
    if (navOverlay) {
        navOverlay.classList.toggle('is-open', open);
        navOverlay.setAttribute('aria-hidden', open ? 'false' : 'true');
    }
    if (menuToggle) {
        menuToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        menuToggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }
    document.body.classList.toggle('menu-open', open);
}

if (menuToggle && navLinks) {
    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        menuToggle.classList.toggle('active');
        syncMobileMenuState();
    });
}

if (navOverlay && navLinks && menuToggle) {
    navOverlay.addEventListener('click', () => {
        navLinks.classList.remove('active');
        menuToggle.classList.remove('active');
        syncMobileMenuState();
    });
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && document.body.classList.contains('menu-open')) {
        if (navLinks) navLinks.classList.remove('active');
        if (menuToggle) menuToggle.classList.remove('active');
        syncMobileMenuState();
    }
});

// Close mobile menu when a link is clicked
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        if (navLinks) navLinks.classList.remove('active');
        if (menuToggle) menuToggle.classList.remove('active');
        syncMobileMenuState();
    });
});

// Smooth Scroll for Navigation Links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Scroll Reveal Animation using Intersection Observer
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Pricing Toggle Logic
const toggleBtns = document.querySelectorAll('.toggle-btn');
const sedanPrice = document.getElementById('sedan-price');
const suvPrice = document.getElementById('suv-price');
const sedanAllowance = document.getElementById('sedan-allowance');
const suvAllowance = document.getElementById('suv-allowance');

const pricingData = {
    oneway: {
        sedan: '₹14',
        suv: '₹19',
        innova: '₹22',
        sedanAllow: '₹300 Driver Allowance',
        suvAllow: '₹300 Driver Allowance',
        innovaAllow: '₹500 Driver Allowance'
    },
    roundtrip: {
        sedan: '₹13',
        suv: '₹18',
        innova: '₹20',
        sedanAllow: '₹400 Driver Allowance',
        suvAllow: '₹400 Driver Allowance',
        innovaAllow: '₹500 Driver Allowance'
    }
};

toggleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Update active class
        toggleBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const type = btn.dataset.type; // ← was missing: caused undefined reference
        const innovaPrice = document.getElementById('innova-price');
        const innovaAllowance = document.getElementById('innova-allowance');

        // Add fade out animation
        [sedanPrice, suvPrice, innovaPrice].forEach(el => el ? el.style.opacity = '0' : null);

        setTimeout(() => {
            if (sedanPrice) sedanPrice.textContent = pricingData[type].sedan;
            if (suvPrice) suvPrice.textContent = pricingData[type].suv;
            if (innovaPrice) innovaPrice.textContent = pricingData[type].innova;

            if (sedanAllowance) sedanAllowance.textContent = pricingData[type].sedanAllow;
            if (suvAllowance) suvAllowance.textContent = pricingData[type].suvAllow;
            if (innovaAllowance) innovaAllowance.textContent = pricingData[type].innovaAllow;

            // Fade in
            [sedanPrice, suvPrice, innovaPrice].forEach(el => el ? el.style.opacity = '1' : null);
        }, 200);
    });
});

// Target elements for reveal
document.querySelectorAll('.service-card, .premium-price-card, .feature-box, .section-title').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease-out';
    observer.observe(el);
});

// Booking Form → WhatsApp Redirect
const bookingForm = document.getElementById('bookingForm');
if (bookingForm) {
    bookingForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const name = document.getElementById('bk-name').value.trim();
        const phone = document.getElementById('bk-phone').value.trim();
        const pickup = document.getElementById('bk-pickup').value.trim();
        const drop = document.getElementById('bk-drop').value.trim();
        const date = document.getElementById('bk-date').value;
        const time = document.getElementById('bk-time').value;
        const vehicle = document.getElementById('bk-vehicle').value;
        const trip = document.getElementById('bk-trip').value;

        // Format date nicely (dd/mm/yyyy)
        let formattedDate = date;
        if (date) {
            const [y, m, d] = date.split('-');
            formattedDate = `${d}/${m}/${y}`;
        }

        // Format time nicely (12-hour)
        let formattedTime = time;
        if (time) {
            const [h, min] = time.split(':');
            const hr = parseInt(h);
            const suffix = hr >= 12 ? 'PM' : 'AM';
            formattedTime = `${hr % 12 || 12}:${min} ${suffix}`;
        }


        const message = '*[ VK Call Taxi - New Booking ]*'
            + '\n\n*Name:* ' + name
            + '\n*Phone:* ' + phone
            + '\n\n*Pickup:* ' + pickup
            + '\n*Drop:* ' + drop
            + '\n\n*Date:* ' + formattedDate
            + '\n*Time:* ' + formattedTime
            + '\n\n*Vehicle:* ' + vehicle
            + '\n*Trip Type:* ' + trip
            + '\n\n_Sent via VK Call Taxi Booking Form_';

        const waNumber = '919486817350';
        const waURL = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
        window.open(waURL, '_blank');
    });
}


// --- Modern Booking Confirmation & Simulation Flow (Instant Share) ---

const indexBookingForm = document.getElementById('indexBookingForm');
if (indexBookingForm) {
    indexBookingForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // 1. Capture Form Data
        const name = document.getElementById('idx-name').value.trim();
        const phone = document.getElementById('idx-phone').value.trim();
        const pickup = document.getElementById('idx-pickup').value.trim();
        const drop = document.getElementById('idx-drop').value.trim();
        const vehicle = document.getElementById('idx-vehicle').value;

        // 2. CAPTURE REAL DATA (With dynamic fallback logic)
        let finalDist = "0 km";
        let finalTime = "0 mins";
        let finalFare = "₹0";

        const allText = document.body.innerText;
        const distMatch = allText.match(/(\d+\.?\d*)\s*km/i);
        if (distMatch) finalDist = distMatch[0];
        const timeMatch = allText.match(/(\d+)\s*mins?/i);
        if (timeMatch) finalTime = timeMatch[0];
        const fareMatch = allText.match(/₹\s*(\d+)/i);
        if (fareMatch) finalFare = fareMatch[0];

        if (finalFare === "₹0" || finalDist === "0 km") {
            let km = 105;
            if (pickup.toLowerCase().includes('virudhachalam') && drop.toLowerCase().includes('trichy')) km = 108;
            let rate = 14;
            if (vehicle.includes('SUV')) rate = 19;
            if (vehicle.includes('Innova')) rate = 22;
            finalDist = km + " km";
            finalTime = Math.floor(km * 1.5) + " mins";
            finalFare = "₹" + (km * rate + 50);
        }

        const bookingId = "VK" + Math.floor(10000 + Math.random() * 90000);

        // 3. Simple Validation
        if (!name || !phone || !pickup || !drop) {
            alert("Please fill in all the details to continue.");
            return;
        }

        // 4. ACTION: INSTANT WHATSAPP SEND
        const waNumber = '919486817350';
        const waMessage = `*[ VK Call Taxi - New Booking ]*`
            + `\n\n*ID:* ${bookingId}`
            + `\n*Customer:* ${name}`
            + `\n*Phone:* ${phone}`
            + `\n\n*Pickup:* ${pickup}`
            + `\n*Drop:* ${drop}`
            + `\n\n*Distance:* ${finalDist}`
            + `\n*Vehicle:* ${vehicle}`
            + `\n*Fare:* ${finalFare}`
            + `\n\n_Sent via VK Smart Engine_`;

        const waURL = `https://wa.me/${waNumber}?text=${encodeURIComponent(waMessage)}`;
        window.open(waURL, '_blank');

        // 5. Trigger Simulation UI
        const modal = document.getElementById('booking-modal');
        if (modal) {
            modal.style.display = 'flex';
            document.getElementById('modal-searching').style.display = 'block';
            document.getElementById('modal-success').style.display = 'none';

            // Populate Success Card UI early so it's ready
            document.getElementById('res-id').innerText = "#" + bookingId;
            document.getElementById('res-pickup').innerText = pickup.split(',')[0];
            document.getElementById('res-drop').innerText = drop.split(',')[0];
            document.getElementById('res-dist').innerText = finalDist;
            document.getElementById('res-time').innerText = finalTime;
            document.getElementById('res-fare').innerText = finalFare;

            // 6. Run Simulation Delay
            setTimeout(() => {
                document.getElementById('modal-searching').style.display = 'none';
                document.getElementById('modal-success').style.display = 'block';
            }, 2500);
        }
    });
}




function resetBooking() {
    const form = document.getElementById('indexBookingForm');
    if (form) form.reset();
    closeModal();
}

function closeModal() {
    const modal = document.getElementById('booking-modal');
    if (modal) modal.style.display = 'none';
}


// WhatsApp Chat Popup Toggle
function toggleWAPopup() {
    const popup = document.getElementById('wa-popup');
    popup.classList.toggle('active');
}

// Send to WhatsApp
function sendToWA() {
    const input = document.getElementById('wa-input');
    const message = input.value.trim();

    if (message !== "") {
        const phone = "919486817350";
        const url = `https://wa.me/${phone}?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank');
        input.value = "";
        toggleWAPopup();
    }
}

// Handle Enter Key in WA input
function handleWAInput(event) {
    if (event.key === 'Enter') {
        sendToWA();
    }
}

// Back to Top Button Logic
const backToTopBtn = document.getElementById('backToTop');
if (backToTopBtn) {
    window.addEventListener('scroll', () => {
        // Show button after scrolling down 300px
        if (window.scrollY > 300) {
            backToTopBtn.classList.add('active');
        } else {
            backToTopBtn.classList.remove('active');
        }
    });

    backToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// City Autocomplete Logic - Comprehensive India-wide City List
const indianCities = [
    // Tamil Nadu (Core region)
    "Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem", "Tirunelveli", "Tiruppur", "Erode", "Vellore", "Thoothukudi",
    "Dindigul", "Thanjavur", "Ranipet", "Sivakasi", "Karur", "Udhagamandalam", "Hosur", "Nagercoil", "Kancheepuram", "Karaikudi",
    "Neyveli", "Cuddalore", "Kumbakonam", "Tiruvannamalai", "Pollachi", "Rajapalayam", "Gudiyatham", "Pudukkottai", "Vaniyambadi",
    "Ambur", "Nagapattinam", "Virudhunagar", "Mayiladuthurai", "Sivaganga", "Tenkasi", "Kovilpatti", "Chidambaram", "Attur",
    "Kanyakumari", "Ariyalur", "Perambalur", "Thiruvallur", "Dharmapuri", "Krishnagiri", "Ramanathapuram", "Theni", "Tirupathur",
    "Tiruvarur", "Viluppuram", "Virudhachalam", "Panruti", "Sankarankovil", "Srivilliputhur", "Tindivanam", "Tiruchengode", "Trichy",

    // Karnataka
    "Bangalore", "Bengaluru", "Mysore", "Hubli", "Dharwad", "Mangalore", "Belgaum", "Gulbarga", "Davangere", "Bellary", "Bijapur",
    "Shimoga", "Tumkur", "Raichur", "Bidar", "Hospet", "Hassan", "Gadag", "Udupi", "Chikmagalur", "Hampi",

    // Kerala
    "Kochi", "Thiruvananthapuram", "Trivandrum", "Kozhikode", "Calicut", "Thrissur", "Kollam", "Alappuzha", "Palakkad", "Kottayam",
    "Malappuram", "Kannur", "Munnar", "Wayanad", "Varkala",

    // Andhra Pradesh & Telangana
    "Hyderabad", "Visakhapatnam", "Vizag", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Rajahmundry", "Tirupati", "Kakinada",
    "Kadapa", "Anantapur", "Vizianagaram", "Eluru", "Warangal", "Nizamabad", "Karimnagar", "Ramagundam", "Khammam",

    // Maharashtra
    "Mumbai", "Pune", "Nagpur", "Thane", "Pimpri-Chinchwad", "Nashik", "Kalyan-Dombivli", "Vasai-Virar", "Aurangabad", "Navi Mumbai",
    "Solapur", "Mira-Bhayandar", "Bhiwandi", "Amravati", "Nanded", "Kolhapur", "Akola", "Ulhasnagar", "Sangli", "Jalgaon",
    "Satara", "Shirdi", "Mahabaleshwar", "Lonavala",

    // Delhi & North India
    "Delhi", "New Delhi", "Noida", "Gurugram", "Gurgaon", "Faridabad", "Ghaziabad", "Chandigarh", "Ludhiana", "Amritsar",
    "Jalandhar", "Patiala", "Bathinda", "Shimla", "Dehradun", "Haridwar", "Rishikesh", "Jammu", "Srinagar",

    // Gujarat & Rajasthan
    "Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Jaipur", "Jodhpur",
    "Kota", "Bikaner", "Ajmer", "Udaipur", "Bhilwara", "Alwar", "Bharatpur", "Jaisalmer", "Pushkar",

    // Uttar Pradesh & Bihar
    "Lucknow", "Kanpur", "Ghaziabad", "Agra", "Meerut", "Varanasi", "Prayagraj", "Allahabad", "Bareilly", "Aligarh", "Moradabad",
    "Saharanpur", "Gorakhpur", "Jhansi", "Firozabad", "Loni", "Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia", "Darbhanga",

    // West Bengal & East India
    "Kolkata", "Howrah", "Siliguri", "Durgapur", "Asansol", "Maheshtala", "Rajpur Sonarpur", "Bhubaneswar", "Cuttack", "Rourkela",
    "Berhampur", "Puri", "Guwahati", "Agartala", "Shillong", "Imphal", "Aizawl", "Kohima", "Gangtok", "Itanagar",

    // Central India
    "Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain", "Sagar", "Dewas", "Satna", "Raipur", "Bhilai", "Bilaspur", "Korba", "Ranchi",
    "Jamshedpur", "Dhanbad", "Bokaro"
];

function initCityAutocomplete(inputId) {
    const input = document.getElementById(inputId);
    if (!input) return;

    // Prevent browser autocomplete
    input.setAttribute('autocomplete', 'off');

    let currentFocus;

    input.addEventListener("input", function (e) {
        let val = this.value;
        closeAllLists();
        if (!val) return false;
        currentFocus = -1;

        let listContainer = document.createElement("DIV");
        listContainer.setAttribute("id", this.id + "autocomplete-list");
        listContainer.setAttribute("class", "autocomplete-suggestions");
        this.parentNode.appendChild(listContainer);

        let count = 0;
        for (let i = 0; i < indianCities.length; i++) {
            if (indianCities[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                let suggestionItem = document.createElement("DIV");
                suggestionItem.setAttribute("class", "autocomplete-suggestion");
                suggestionItem.innerHTML = "<strong>" + indianCities[i].substr(0, val.length) + "</strong>";
                suggestionItem.innerHTML += indianCities[i].substr(val.length);
                suggestionItem.innerHTML += "<input type='hidden' value='" + indianCities[i] + "'>";

                suggestionItem.addEventListener("click", function (e) {
                    input.value = this.getElementsByTagName("input")[0].value;
                    closeAllLists();
                });
                listContainer.appendChild(suggestionItem);
                count++;
            }
        }

        // If no prefix match, try including match anywhere in the string
        if (count === 0) {
            for (let i = 0; i < indianCities.length; i++) {
                if (indianCities[i].toUpperCase().includes(val.toUpperCase())) {
                    let suggestionItem = document.createElement("DIV");
                    suggestionItem.setAttribute("class", "autocomplete-suggestion");
                    let regex = new RegExp("(" + val + ")", "gi");
                    suggestionItem.innerHTML = indianCities[i].replace(regex, "<strong>$1</strong>");
                    suggestionItem.innerHTML += "<input type='hidden' value='" + indianCities[i] + "'>";

                    suggestionItem.addEventListener("click", function (e) {
                        input.value = this.getElementsByTagName("input")[0].value;
                        closeAllLists();
                    });
                    listContainer.appendChild(suggestionItem);
                }
            }
        }

    });

    input.addEventListener("keydown", function (e) {
        let x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) { // DOWN
            currentFocus++;
            addActive(x);
        } else if (e.keyCode == 38) { // UP
            currentFocus--;
            addActive(x);
        } else if (e.keyCode == 13) { // ENTER
            e.preventDefault();
            if (currentFocus > -1) {
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        for (let i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }


    function closeAllLists(elmnt) {
        let x = document.getElementsByClassName("autocomplete-suggestions");
        for (let i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != input) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }

    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
}

// Initialize for all relevant fields
document.addEventListener("DOMContentLoaded", () => {
    // Index Page
    initCityAutocomplete('idx-pickup');
    initCityAutocomplete('idx-drop');
    // Booking Page
    initCityAutocomplete('bk-pickup');
    initCityAutocomplete('bk-drop');
    // Route Page
    initCityAutocomplete('rt-pickup');
    initCityAutocomplete('rt-drop');
});

// --- Live Location (Geolocation) Logic ---
const locateBtn = document.getElementById('locate-me-btn');
if (locateBtn) {
    locateBtn.addEventListener('click', function(e) {
        e.stopPropagation(); // Stop click from affecting the input field

        if (!navigator.geolocation) {
            alert("Geolocation is not supported by your browser.");
            return;
        }

        const icon = this.querySelector('i');
        const originalClass = "fa-solid fa-location-crosshairs";
        icon.className = "fa-solid fa-circle-notch fa-spin";
        this.disabled = true;

        navigator.geolocation.getCurrentPosition(
            (position) => {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                const geocoder = new google.maps.Geocoder();
                const latlng = { lat: parseFloat(lat), lng: parseFloat(lng) };

                geocoder.geocode({ location: latlng }, (results, status) => {
                    icon.className = originalClass;
                    this.disabled = false;

                    if (status === "OK" && results[0]) {
                        const pickupInput = document.getElementById('idx-pickup');
                        pickupInput.value = results[0].formatted_address;
                        pickupInput.dispatchEvent(new Event('change'));
                    } else {
                        alert("Address not found.");
                    }
                });
            },
            (error) => {
                icon.className = originalClass;
                this.disabled = false;
                // Silent fail or minimal alert to not disturb user typing
            },
            { enableHighAccuracy: true, timeout: 8000, maximumAge: 0 }
        );
    });
}



