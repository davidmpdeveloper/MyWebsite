<?php
/**
 * Defaults for page SEO. Set $page_title, $page_description (and optionally
 * $page_keywords, $page_robots, $og_type) before including header.php to override.
 */

$script = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');

if (!isset($page_title) || !is_string($page_title) || $page_title === '') {
    switch ($script) {
        case 'about.php':
            $page_title = 'About VK Call Taxi | Trusted Cab Service in Virudhachalam & Cuddalore';
            break;
        case 'services.php':
            $page_title = 'Taxi Services | One Way, Round Trip & Airport Transfer | VK Call Taxi';
            break;
        case 'pricing.php':
            $page_title = 'Taxi Fares & Pricing | Sedan, SUV & Innova | VK Call Taxi';
            break;
        case 'booking.php':
            $page_title = 'Book a Cab Online | VK Call Taxi — Virudhachalam & Cuddalore';
            break;
        case 'contact.php':
            $page_title = 'Contact VK Call Taxi | Phone, WhatsApp & Office Location';
            break;
        default:
            $page_title = 'VK Call Taxi | 24/7 Cab Booking — Virudhachalam, Cuddalore & Tamil Nadu';
    }
}

if (!isset($page_description) || !is_string($page_description) || $page_description === '') {
    switch ($script) {
        case 'about.php':
            $page_description = 'Learn about VK Call Taxi: safe drivers, well-maintained fleet, and reliable local and outstation cab service based in Karuveppilankurichi, Virudhachalam (TK).';
            break;
        case 'services.php':
            $page_description = 'One-way drops, round trips, local hourly rentals, and airport transfers. Book sedan, SUV or Innova cabs across Tamil Nadu with VK Call Taxi.';
            break;
        case 'pricing.php':
            $page_description = 'Transparent taxi rates for sedan, SUV and Innova. Compare one-way and round-trip pricing and allowances for your route from Cuddalore district.';
            break;
        case 'booking.php':
            $page_description = 'Request a cab pickup in minutes. Enter pickup and drop details for local or outstation travel with VK Call Taxi — available 24/7.';
            break;
        case 'contact.php':
            $page_description = 'Call +91 94868 17350 or WhatsApp VK Call Taxi. Visit us at Nivetha Complex (Ground Floor), Karuveppilankurichi (PO), Virudhachalam (TK), Cuddalore (DT) — 606 110.';
            break;
        default:
            $page_description = 'VK Call Taxi offers reliable 24/7 cab services from Nivetha Complex, Karuveppilankurichi (PO), Virudhachalam (TK), Cuddalore (DT) — 606 110. Local rides, outstation and airport transfers.';
    }
}

if (!isset($page_keywords) || !is_string($page_keywords) || $page_keywords === '') {
    $page_keywords = 'VK Call Taxi, taxi Virudhachalam, cab Cuddalore, Karuveppilankurichi taxi, outstation cab Tamil Nadu, airport transfer, call taxi 606110';
}

if (!isset($page_robots)) {
    $page_robots = 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
}

if (!isset($og_type)) {
    $og_type = 'website';
}

$https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443');
$scheme = $https ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = strtok($request_uri, '?') ?: '/';
$canonical_url = $scheme . '://' . $host . $path;

$script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$script_dir = ($script_dir === '/' || $script_dir === '.') ? '' : rtrim($script_dir, '/');
$assets_prefix = $script_dir === '' ? '' : $script_dir;
$og_image_path = ($assets_prefix === '' ? '' : $assets_prefix) . '/assets/img/logo.png';
$og_image_url = $scheme . '://' . $host . $og_image_path;

$site_name = 'VK Call Taxi';
$locale = 'en_IN';

$sd = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
if ($sd === '/' || $sd === '.') {
    $home_url = $scheme . '://' . $host . '/index.php';
} else {
    $home_url = $scheme . '://' . $host . rtrim($sd, '/') . '/index.php';
}
