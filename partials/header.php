<?php

/**
 * partials/header.php
 * Top bar + main navbar — updated with Jumuiya ya Kaunti za Pwani content.
 *
 * Uses $currentPage (string) set in each page file to highlight the active nav link.
 * Example: $currentPage = 'home';
 */

function navActive(string $key): string
{
    global $currentPage;
    return (isset($currentPage) && $currentPage === $key) ? 'active' : '';
}

$navLinks = [
    'home'     => ['label' => 'Home',         'href' => '/'],
    'about'    => ['label' => 'About Us',      'href' => '/'],
    'services' => ['label' => 'Resources',     'href' => '/services'],
    'blog'     => ['label' => 'Media Center',  'href' => '/'],
    'events'   => ['label' => 'Events',        'href' => '/events'],
    'milestone'     => ['label' => 'milestone',          'href' => '/'],
    'contact'  => ['label' => 'Contact',       'href' => '/contact'],
];
?>

<header>
    <div class="home-one">

        <!-- ===== Top Bar ===== -->
        <div class="top-header">
            <div class="top-header-content">
                <div class="container">
                    <div class="contact-top-information d-flex">
                        <div class="mobile-number-email d-flex">
                            <a href="tel:+254777101115">
                                <i class="bi bi-telephone phone"></i> +254 777 101 115
                            </a>
                            <a href="mailto:info@jumuiya.org">
                                <i class="bi bi-envelope email"></i> info@jumuiya.org
                            </a>
                            <span class="text-white d-none d-xl-flex align-items-center gap-1">
                                <i class="bi bi-clock"></i> Mon – Fri: 8:30am – 5:00pm
                            </span>
                        </div>
                        <div class="language-socialLink d-flex ms-auto">
                            <div class="socialLink d-flex">
                                <p class="d-inline-block text-white">Follow on:</p>
                                <ul class="d-flex">
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== Main Navbar ===== -->
        <nav class="navbar-details navbar navbar-expand-lg">
            <div class="container">

                <!-- Logo -->
                <div class="brand-logo">
                    <a class="navbar-brand" href="/">
                        <img src="/assets/images/logo/Jumuiya-Logo.svg" class="img-fluid" alt="Jumuiya ya Kaunti za Pwani">
                    </a>
                </div>

                <!-- Mobile toggle -->
                <button class="navbar-toggler ms-auto" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav links -->
                <div class="navigation-link collapse navbar-collapse gap-4" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <?php foreach ($navLinks as $key => $link): ?>
                            <li class="nav-item">
                                <a class="nav-link fw-normal <?php echo navActive($key); ?>"
                                    href="<?php echo htmlspecialchars($link['href']); ?>">
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <!-- CTA + Sidebar toggle -->
                    <div class="getStart-sideMenu d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center cityWall-btn" role="search">
                            <a href="/contact">Contact Us <i class="bi bi-arrow-right"></i></a>
                        </div>
                        <div class="said-navbar ms-2">
                            <a href="#" class="navSidebar-button" onclick="openNav()">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </a>

                            <!-- Side drawer -->
                            <div id="mySidenav" class="sidenav">
                                <div class="side-logo-button">
                                    <a href="/">
                                        <img src="/assets/images/logo/Jumuiya-Logo.svg" class="img-fluid" alt="Jumuiya ya Kaunti za Pwani">
                                    </a>
                                    <a href="#" class="closebtn" onclick="closeNav()">&times;</a>
                                </div>

                                <div class="our-mission">
                                    <h4 class="text-white">Our Mission</h4>
                                    <p>Catalyze economic growth of Kenya's coast regional counties through coordination, promotion, and investment facilitation — guided by the Jumuiya 2030 Economic Blueprint.</p>
                                </div>

                                <div class="contact">
                                    <div class="con-info">
                                        <h4 class="text-white">Contact Info</h4>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="bi bi-geo-alt"></i>
                                                    Bustani Close, Links Road – Nyali, Mombasa, Kenya
                                                </a>
                                            </li>
                                            <li>
                                                <a href="tel:+254777101115">
                                                    <i class="bi bi-telephone phone"></i> +254 777 101 115
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:info@jumuiya.org">
                                                    <i class="bi bi-envelope email"></i> info@jumuiya.org
                                                </a>
                                            </li>
                                            <li>
                                                <a href="mailto:secretariat@jumuiya.org">
                                                    <i class="bi bi-envelope email"></i> secretariat@jumuiya.org
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                            <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="#"><i class="bi bi-twitter-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </nav>

    </div>
</header>