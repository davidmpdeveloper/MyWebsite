<?php
/**
 * Dynamic XML sitemap. Submit this URL in Google Search Console, e.g.
 * https://yourdomain.com/vk_cab/sitemap.php
 */
header('Content-Type: application/xml; charset=UTF-8');

$https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['SERVER_PORT']) && (string) $_SERVER['SERVER_PORT'] === '443');
$scheme = $https ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$sd = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/sitemap.php'));
if ($sd === '/' || $sd === '.') {
    $base = $scheme . '://' . $host;
} else {
    $base = $scheme . '://' . $host . rtrim($sd, '/');
}

$pages = [
    'index.php',
    'about.php',
    'services.php',
    'pricing.php',
    'booking.php',
    'contact.php',
    'virudhachalam-to-trichy.php',
    'virudhachalam-to-chennai.php',
    'virudhachalam-to-jayangkondam.php',
];

$today = gmdate('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $p) {
    $loc = htmlspecialchars($base . '/' . $p, ENT_XML1 | ENT_QUOTES, 'UTF-8');
    echo "  <url>\n    <loc>{$loc}</loc>\n    <lastmod>{$today}</lastmod>\n    <changefreq>weekly</changefreq>\n    <priority>"
        . ($p === 'index.php' ? '1.0' : '0.8') . "</priority>\n  </url>\n";
}

echo '</urlset>';
