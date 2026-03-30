<?php

/**
 * partials/header.php
 * Top bar + main navbar — updated with mega menus.
 *
 * Uses $currentPage (string) set in each page file to highlight the active nav link.
 */

function navActive(string $key): string
{
    global $currentPage;
    return (isset($currentPage) && $currentPage === $key) ? 'active' : '';
}

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
                                    <li><a href="https://www.facebook.com/JKPKE/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="https://x.com/JumuiyaBloc" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/jumuiya-ya-kaunti-za-pwani-economic-development-bloc/?originalSubdomain=ke" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                    <li><a href="https://www.instagram.com/jumuiyapwani/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
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

                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link fw-normal <?php echo navActive('home'); ?>" href="/">Home</a>
                        </li>

                        <!-- About Us Mega Menu - RESTRUCTURED for vertical layout -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle <?php echo navActive('about'); ?>"
                               href="/about"
                               id="aboutMega"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu mega-menu p-4" aria-labelledby="aboutMega">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item px-0" href="/about">📊 About JKP Economic Bloc</a></li>
                                                <li><a class="dropdown-item px-0" href="/core-mandate">🎯 Core Mandate</a></li>
                                                <li><a class="dropdown-item px-0" href="/stakeholders">🤝 Stakeholders</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Empty column for future use or remove if not needed -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Empty column for future use or remove if not needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Resources Mega Menu - RESTRUCTURED for vertical layout -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle <?php echo navActive('resources'); ?>"
                               href="/resources"
                               id="resourcesMega"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Resources
                            </a>
                            <div class="dropdown-menu mega-menu p-4" aria-labelledby="resourcesMega">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item px-0" href="/blueprint">📘Jumuiya-TCH Blueprint 2030</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Empty column for future use -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- Media Center Mega Menu - RESTRUCTURED for vertical layout -->
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle <?php echo navActive('media'); ?>"
                               href="/media-center"
                               id="mediaMega"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Media Center
                            </a>
                            <div class="dropdown-menu mega-menu p-4" aria-labelledby="mediaMega">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                <li><a class="dropdown-item px-0" href="/news-updates">News & updates</a></li>
                                                <li><a class="dropdown-item px-0" href="/photos-video-gallery"> Photo & Video Gallery</a></li>
                                                <li><a class="dropdown-item px-0" href="/newsletter-archive">📧 Newsletter Archive</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Empty column for future use -->
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Empty column for future use -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle <?php echo navActive('media'); ?>"
                               href="/media-center"
                               id="mediaMega"
                               role="button"
                               data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Events 
                            </a>
                            <div class="dropdown-menu mega-menu p-4" aria-labelledby="mediaMega">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-unstyled">
                                                 <li><a class="dropdown-item px-0" href="/events"> Events</a></li>
                                                <li><a class="dropdown-item px-0" href="https://jabeic.jumuiya.org/" target="_blank" rel="noopener noreferrer">Jabeic</a></li>
                                                 <li><a class="dropdown-item px-0" href="#">Other events</a></li>
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
    
                       

                        <!-- Contact -->
                        <li class="nav-item">
                            <a class="nav-link fw-normal <?php echo navActive('contact'); ?>" href="/contact">Contact</a>
                        </li>
                    </ul>

                    <!-- CTA + Sidebar toggle -->
                    <div class="getStart-sideMenu d-flex align-items-center gap-2">
                        <div class="d-flex align-items-center cityWall-btn" role="search">
                            <a href="/partner">Partner With Us<i class="bi bi-arrow-right"></i></a>
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
                                    <p>Catalyze economic growth of Kenya's coastal counties through coordination, promotion, and investment facilitation — guided by the Jumuiya 2030 Economic Blueprint.</p>
                                </div>

                                <div class="contact">
                                    <div class="con-info">
                                        <h4 class="text-white">Contact Info</h4>
                                        <ul>
                                            <li><a href="https://maps.google.com/?q=Jumuiya+House+Bustani+Close+Off+Links+Road+Nyali+Mombasa+Kenya" target="_blank"><i class="bi bi-geo-alt"></i> Jumuiya House, Bustani Close, Off Links Road, Nyali, Mombasa</a></li>
                                            <li><a href="tel:+254777101115"><i class="bi bi-telephone phone"></i> +254 777 101 115</a></li>
                                            <li><a href="mailto:info@jumuiya.org"><i class="bi bi-envelope email"></i> info@jumuiya.org</a></li>
                                            <li><a href="mailto:secretariat@jumuiya.org"><i class="bi bi-envelope email"></i> secretariat@jumuiya.org</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-link">
                                        <ul>
                                            <li><a href="https://www.linkedin.com/company/jumuiya-ya-kaunti-za-pwani-economic-development-bloc/?originalSubdomain=ke" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                                            <li><a href="https://www.facebook.com/JKPKE/" target="_blank"><i class="bi bi-facebook"></i></a></li>
                                            <li><a href="https://www.instagram.com/jumuiyapwani/" target="_blank"><i class="bi bi-instagram"></i></a></li>
                                            <li><a href="https://x.com/JumuiyaBloc" target="_blank"><i class="bi bi-twitter-x"></i></a></li>
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