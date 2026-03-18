<?php
/**
 * index.php — Front Controller / Router
 *
 * All requests are routed here via .htaccess.
 * Maps URL slugs → page files in /pages/.
 */

// Grab URI path, strip query string
$requestUri  = strtok($_SERVER['REQUEST_URI'], '?');
$requestPath = trim(parse_url($requestUri, PHP_URL_PATH), '/');

// Route map: slug => page file (relative to this file)
$routes = [
    ''         => 'pages/home.php',
    'home'     => 'pages/home.php',
    'about'    => 'pages/about.php',
    'services' => 'pages/services.php',
    'projects' => 'pages/projects.php',
    'photos-video-gallery'     => 'pages/photos-video-gallery.php',
    'news-updates'     => 'pages/news-updates.php',
    'newsletter-archive'     => 'pages/newsletter-archive.php',
    'contact'  => 'pages/contact.php',
    'partner' => 'pages/partner-with-us.php',
    'events'   => 'pages/events.php',
    'core-mandate'   => 'pages/core-mandate.php',
    'stakeholders'   => 'pages/stakeholders.php',
    'blueprint'   => 'pages/blueprint.php',
    
    'event-details'   => 'pages/event-details.php',
    'go-blue'   => 'pages/go-blue.php',
    'innovation-lab'   => 'pages/innovation-lab.php',
    'jum_2030'   => 'pages/jum_2030.php',
    'she-stands'   => 'pages/she-stands.php',
    'kisauni-vtc-graduates'   => 'pages/kisauni-vtc-graduates.php',
    'blue-economy-training'   => 'pages/blue-economy-training.php',
    'townhall-climate-change'   => 'pages/townhall-climate-change.php',
    'supply-contract-cold-rooms'   => 'pages/supply-contract-cold-rooms.php',
    'partnerships-coastal-development'   => 'pages/partnerships-coastal-development.php',
    'jkp-governors-deliberations'   => 'pages/jkp-governors-deliberations.php',
    'iowa-state-scholarships'   => 'pages/iowa-state-scholarships.php',
    'collaborative-framework-agreement'   => 'pages/collaborative-framework-agreement.php',
    'blue-economy-training'   => 'pages/blue-economy-training.php',
    'australian-diplomat-visit'   => 'pages/australian-diplomat-visit.php',
    'advocating-4th-generation'   => 'pages/advocating-4th-generation.php',
    'jkp-tourism-blueprint'   => 'pages/jkp-tourism-blueprint.php',
    'ethiopia-oromia-visit'   => 'pages/ethiopia-oromia-visit.php',
    'support-fisher-communities'   => 'pages/support-fisher-communities.php',
    'safaricom-mou'   => 'pages/safaricom-mou.php',
    'reface-forum-2023'   => 'pages/reface-forum-2023.php',
    'eu-heads-mission'   => 'pages/eu-heads-mission.php',
    'ethiopia-oromia-visit'   => 'pages/ethiopia-oromia-visit.php',
    'blue-economy-mission-italy'   => 'pages/blue-economy-mission-italy.php',
    'trade-mission-usa'   => 'pages/trade-mission-usa.php',
    'eurometal-mic-collaboration'   => 'pages/eurometal-mic-collaboration.php',
    
];

$pageFile = $routes[$requestPath] ?? null;

if ($pageFile && file_exists(__DIR__ . '/' . $pageFile)) {
    require __DIR__ . '/' . $pageFile;
} else {
    // 404
    http_response_code(404);
    $pageTitle   = '404 — Page Not Found';
    $currentPage = '';
    $heroTitle   = 'Page Not Found';
    ob_start();
    ?>
    <section class="py-5 text-center">
        <div class="container">
            <h1 class="display-1 fw-bold">404</h1>
            <p class="lead">The page you are looking for does not exist.</p>
            <a href="/" class="cityWall-btn d-inline-block mt-3">Go Home <i class="bi bi-arrow-right"></i></a>
        </div>
    </section>
    <?php
    $pageContent = ob_get_clean();
    require __DIR__ . '/layout.php';
}
