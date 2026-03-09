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
    'photos-video-gallery'     => 'pages/photos-video-gallery.php',
    'news-updates'     => 'pages/news-updates.php',
    'contact'  => 'pages/contact.php',
    'events'   => 'pages/events.php',
    'core-mandate'   => 'pages/core-mandate.php',
    'stakeholders'   => 'pages/stakeholders.php',
    'event-details'   => 'pages/event-details.php',
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
