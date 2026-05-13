<?php
require_once __DIR__ . '/seo.php';

$h = static function ($s) {
    return htmlspecialchars((string) $s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
};

$json_ld = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Organization',
            '@id' => $home_url . '#organization',
            'name' => $site_name,
            'url' => $home_url,
            'logo' => $og_image_url,
            'telephone' => '+919486817350',
            'email' => 'vkcalltaxi12@gmail.com',
            'sameAs' => [
                'https://www.instagram.com/vkcalltaxi12/',
            ],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical_url . '#webpage',
            'url' => $canonical_url,
            'name' => $page_title,
            'description' => $page_description,
            'isPartOf' => ['@id' => $home_url . '#organization'],
        ],
        [
            '@type' => 'TaxiService',
            '@id' => $home_url . '#taxi',
            'name' => $site_name,
            'url' => $home_url,
            'image' => $og_image_url,
            'telephone' => '+919486817350',
            'provider' => ['@id' => $home_url . '#organization'],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Nivetha Complex (Ground Floor)',
                'addressLocality' => 'Karuveppilankurichi',
                'addressRegion' => 'Tamil Nadu',
                'postalCode' => '606110',
                'addressCountry' => 'IN',
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Virudhachalam'],
                ['@type' => 'AdministrativeArea', 'name' => 'Cuddalore district'],
                ['@type' => 'AdministrativeArea', 'name' => 'Tamil Nadu'],
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                'opens' => '00:00',
                'closes' => '23:59',
            ],
        ],
    ],
];
$json_ld_script = json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
if ($json_ld_script === false) {
    $json_ld_script = '{}';
}
?>
<!DOCTYPE html>
<html lang="en-IN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?php echo $h($page_title); ?></title>
    <meta name="description" content="<?php echo $h($page_description); ?>">
    <meta name="keywords" content="<?php echo $h($page_keywords); ?>">
    <meta name="robots" content="<?php echo $h($page_robots); ?>">
    <meta name="author" content="<?php echo $h($site_name); ?>">
    <meta name="theme-color" content="#130f40">
    <meta name="format-detection" content="telephone=yes">
    <link rel="canonical" href="<?php echo $h($canonical_url); ?>">
    <link rel="alternate" hreflang="en-IN" href="<?php echo $h($canonical_url); ?>">
    <link rel="alternate" hreflang="x-default" href="<?php echo $h($canonical_url); ?>">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <link rel="shortcut icon" type="image/png" href="assets/img/logo.png">
    <link rel="apple-touch-icon" href="assets/img/logo.png">

    <meta property="og:locale" content="<?php echo $h($locale); ?>">
    <meta property="og:type" content="<?php echo $h($og_type); ?>">
    <meta property="og:title" content="<?php echo $h($page_title); ?>">
    <meta property="og:description" content="<?php echo $h($page_description); ?>">
    <meta property="og:url" content="<?php echo $h($canonical_url); ?>">
    <meta property="og:site_name" content="<?php echo $h($site_name); ?>">
    <meta property="og:image" content="<?php echo $h($og_image_url); ?>">
    <meta property="og:image:alt" content="<?php echo $h($site_name); ?> logo">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $h($page_title); ?>">
    <meta name="twitter:description" content="<?php echo $h($page_description); ?>">
    <meta name="twitter:image" content="<?php echo $h($og_image_url); ?>">

    <script type="application/ld+json"><?php echo $json_ld_script; ?></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php $active_page = basename($_SERVER['PHP_SELF']); ?>
    <!-- Navbar -->
    <nav aria-label="Primary">
        <a href="index.php" class="logo-link">
            <img src="assets/img/logo.png" alt="VK Call Taxi — cab service logo" class="brand-logo" width="180"
                decoding="async">
        </a>
        <ul class="nav-links" id="primary-navigation">
            <li><a href="index.php" class="<?php echo ($active_page == 'index.php') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="about.php" class="<?php echo ($active_page == 'about.php') ? 'active' : ''; ?>">About Us</a>
            </li>
            <li><a href="services.php" class="<?php echo ($active_page == 'services.php') ? 'active' : ''; ?>">Our
                    Services</a></li>
            <li><a href="pricing.php" class="<?php echo ($active_page == 'pricing.php') ? 'active' : ''; ?>">Pricing</a>
            </li>
            <li><a href="booking.php" class="<?php echo ($active_page == 'booking.php') ? 'active' : ''; ?>">Book
                    Now</a></li>
            <li><a href="contact.php" class="<?php echo ($active_page == 'contact.php') ? 'active' : ''; ?>">Contact
                    Us</a></li>
        </ul>
        <div class="nav-right">
            <a href="tel:+919486817350" class="btn btn-primary call-nav-btn">Call Now</a>
            <div class="menu-toggle" id="mobile-menu" role="button" tabindex="0" aria-label="Open menu"
                aria-expanded="false" aria-controls="primary-navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
    <!-- Dims page + closes menu on tap (mobile); z-index below .nav-links, above content -->
    <div class="mobile-nav-overlay" id="mobile-nav-overlay" aria-hidden="true"></div>

    <!-- Mobile bottom tab bar: lives near top of <body> so position:fixed anchors to the viewport -->
    <nav class="mobile-bottom-nav" aria-label="Mobile navigation">
        <a href="index.php"
            class="mnav-item<?php echo (isset($active_page) && $active_page === 'index.php') ? ' active' : ''; ?>">
            <i class="fa-solid fa-house" aria-hidden="true"></i>
            <span>Home</span>
        </a>
        <a href="pricing.php"
            class="mnav-item<?php echo (isset($active_page) && $active_page === 'pricing.php') ? ' active' : ''; ?>">
            <i class="fa-solid fa-tags" aria-hidden="true"></i>
            <span>Pricing</span>
        </a>
        <a href="booking.php"
            class="mnav-item<?php echo (isset($active_page) && $active_page === 'booking.php') ? ' active' : ''; ?>">
            <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
            <span>Book Now</span>
        </a>
        <a href="tel:+919486817350" class="mnav-item">
            <i class="fa-solid fa-phone" aria-hidden="true"></i>
            <span>Call Now</span>
        </a>
    </nav>

    <main id="main-content">