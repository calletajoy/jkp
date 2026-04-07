<?php

/**
 * pages/home.php
 * Homepage — Jumuiya ya Kaunti za Pwani
 * Fancy, professional, purpose-driven design
 */

$pageTitle   = 'Home';
$currentPage = 'home';
$bodyClass   = 'page-home';

ob_start();
?>

<!-- ===== Enhanced Styles for Fancy Look ===== -->
<style>
    /* Base fancy styles */
    :root {
        --turquoise: #00CED1;
        --soft-blue: #5C7EC0;
        --deep-blue: #3B5B9A;
        --navy: #273C67;
        --light-bg: #f8f9fa;
        --text-dark: #1e2b3c;
    }
    
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
    
    /* Fancy section spacing */
    section {
        position: relative;
        padding: 80px 0;
        overflow: hidden;
    }
    
    /* Subtle background pattern */
    section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 20% 50%, rgba(0,206,209,0.03) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Elegant typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        letter-spacing: -0.02em;
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 300;
        color: var(--text-dark);
    }
    
    /* Fancy card styles */
    .fancy-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: white;
        border: none;
        position: relative;
        overflow: hidden;
    }
    
    .fancy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    
    .fancy-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 40px -20px rgba(0,0,0,0.2);
    }
    
    .fancy-card:hover::before {
        transform: scaleX(1);
    }
    
    /* Fancy image overlays */
    .image-overlay {
        position: relative;
        overflow: hidden;
    }
    
    .image-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0,206,209,0.2) 0%, rgba(39,60,103,0.4) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .image-overlay:hover::after {
        opacity: 1;
    }
    
    .image-overlay img {
        transition: transform 0.6s ease;
    }
    
    .image-overlay:hover img {
        transform: scale(1.05);
    }
    
    /* Fancy button styles */
    .btn-fancy {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        z-index: 1;
    }
    
    .btn-fancy::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s ease;
        z-index: -1;
    }
    
    .btn-fancy:hover::before {
        left: 100%;
    }
    
    /* Fancy stat cards */
    .stat-card-fancy {
        position: relative;
        background: white;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px -15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .stat-card-fancy::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 80px;
        height: 80px;
        background: var(--turquoise);
        opacity: 0.1;
        border-radius: 50%;
        transform: translate(30px, 30px);
        transition: all 0.4s ease;
    }
    
    .stat-card-fancy:hover::after {
        transform: translate(20px, 20px) scale(1.2);
        opacity: 0.15;
    }
    
    .stat-card-fancy:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px -15px rgba(0,206,209,0.3);
    }
    
    .stat-icon-fancy {
        font-size: 2.5rem;
        color: var(--turquoise);
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }
    
    .stat-card-fancy:hover .stat-icon-fancy {
        transform: scale(1.1) rotate(5deg);
        color: var(--deep-blue);
    }
    
    /* Fancy milestone cards */
    .milestone-card {
        background: white;
        border-radius: 20px;
        padding: 1rem;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        border-left: 6px solid var(--turquoise);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    
    .milestone-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, var(--turquoise), transparent);
        opacity: 0.05;
        border-radius: 50%;
        transition: all 0.6s ease;
    }
    
    .milestone-card:hover::before {
        transform: scale(1.5);
    }
    
    .milestone-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 45px -15px var(--turquoise);
    }
    
    .milestone-year {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--navy), var(--deep-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    /* Fancy project cards */
    .project-card-fancy {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
        height: 100%;
    }
    
    .project-card-fancy:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 45px -15px var(--turquoise);
    }
    
    .project-card-fancy .project-image {
        height: 220px;
        overflow: hidden;
        position: relative;
    }
    
    .project-card-fancy .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .project-card-fancy:hover .project-image img {
        transform: scale(1.1);
    }
    
    .project-card-fancy .project-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 50%, rgba(39,60,103,0.8) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .project-card-fancy:hover .project-image::after {
        opacity: 1;
    }
    
    .project-card-fancy .project-content {
        padding: 1.8rem;
    }
    
    .project-card-fancy .project-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 1rem;
        transition: color 0.3s ease;
    }
    
    .project-card-fancy:hover .project-title {
        color: var(--turquoise);
    }
    
    .project-card-fancy .project-desc {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    
    .project-card-fancy .read-more {
        color: var(--turquoise);
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .project-card-fancy .read-more i {
        transition: transform 0.3s ease;
    }
    
    .project-card-fancy .read-more:hover {
        color: var(--navy);
    }
    
    .project-card-fancy .read-more:hover i {
        transform: translateX(5px);
    }
    
    /* Fancy section titles */
    .section-title-fancy {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title-fancy .subtitle {
        color: var(--turquoise);
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    
    .section-title-fancy h2 {
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--navy);
        position: relative;
        display: inline-block;
    }
    
    .section-title-fancy h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        border-radius: 3px;
    }
    
    /* Fancy hover effects for links */
    .fancy-link {
        position: relative;
        color: var(--navy);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .fancy-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        transition: width 0.3s ease;
    }
    
    .fancy-link:hover {
        color: var(--turquoise);
    }
    
    .fancy-link:hover::after {
        width: 100%;
    }
    
    /* Fancy animation for numbers */
    @keyframes countUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    .stat-value-fancy {
        animation: countUp 0.6s ease forwards;
    }
    
    /* Gentle zoom animation for left carousel - no horizontal movement */
    @keyframes gentleZoom {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.08);
        }
    }
    
    /* Split banner layout - REDUCED HEIGHT */
    .split-banner {
        display: flex;
        height: 550px;
        overflow: hidden;
    }
    
    .banner-left {
        width: 50%;
        position: relative;
        overflow: hidden;
    }
    
    .banner-left .carousel-item {
        overflow: hidden;
        height: 550px;
    }
    
    .banner-left .carousel-item img {
        animation: gentleZoom 20s infinite alternate ease-in-out;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center center;
    }
    
    .banner-right {
        width: 50%;
        position: relative;
        overflow: hidden;
    }
    
    .banner-right img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: zoomInOut 20s infinite alternate ease-in-out;
    }
    
    @keyframes zoomInOut {
        0% { transform: scale(1); }
        100% { transform: scale(1.1); }
    }
    
    .banner-right .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0,206,209,0.3) 0%, rgba(39,60,103,0.5) 100%);
        z-index: 1;
    }
    
    .banner-right .anniversary-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: 2;
        width: 100%;
        padding: 15px;
    }
    
    .banner-right .anniversary-text h2 {
        color: white;
        font-size: 3rem;
        font-weight: 800;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        margin-bottom: 0.5rem;
        font-family: 'Playfair Display', serif;
        animation: fadeInUp 1.5s ease;
    }
    
    .banner-right .anniversary-text p {
        color: white;
        font-size: 1.2rem;
        font-weight: 500;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        letter-spacing: 2px;
        animation: fadeInUp 1.5s ease 0.3s both;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Typing animation styles - now confined to left side */
    .typing-container {
        display: inline-block;
        max-width: 90%;
    }
    
    .typing-text {
        font-size: 0.95rem !important;
        line-height: 1.4;
        margin: 0.8rem 0;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        overflow: hidden;
        white-space: normal;
        border-right: 3px solid var(--turquoise);
        animation: blink-cursor 0.75s step-end infinite;
    }
    
    @keyframes blink-cursor {
        from, to { border-color: transparent; }
        50% { border-color: var(--turquoise); }
    }
    
    /* Ensure text stays within left side */
    .banner-content {
        position: relative;
        z-index: 10;
        max-width: 90%;
        padding: 1rem 0;
    }
    
    /* Adjust county name size to fit better - REDUCED FONT */
    .banner-content h1 {
        font-size: 2.2rem !important;
        margin-bottom: 0.5rem !important;
    }
    
    /* Make buttons smaller */
    .buttons .btn-fancy {
        padding: 8px 20px !important;
        font-size: 0.9rem !important;
    }
    
    /* Staircase timeline */
    .staircase-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
    }
    
    .staircase-row {
        display: flex;
        margin-bottom: 30px;
        position: relative;
    }
    
    .staircase-row:nth-child(odd) {
        justify-content: flex-start;
    }
    
    .staircase-row:nth-child(even) {
        justify-content: flex-end;
    }
    
    .staircase-card {
        width: 45%;
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        position: relative;
        border-left: 6px solid var(--turquoise);
        transition: all 0.3s ease;
    }
    
    .staircase-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 45px -15px var(--turquoise);
    }
    
    .staircase-card::before {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: var(--turquoise);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        box-shadow: 0 0 0 4px rgba(0,206,209,0.2);
    }
    
    .staircase-row:nth-child(odd) .staircase-card::before {
        right: -40px;
    }
    
    .staircase-row:nth-child(even) .staircase-card::before {
        left: -40px;
    }
    
    .staircase-year {
        font-size: 3rem;
        font-weight: 300;
        background: linear-gradient(135deg, var(--navy), var(--deep-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: 10px;
    }
    
    .staircase-title {
        font-size: 1.3rem;
        font-weight: 400;
        color: var(--navy);
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px dashed rgba(0,206,209,0.3);
    }
    
    .staircase-line {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: linear-gradient(to bottom, var(--turquoise), var(--soft-blue));
        transform: translateX(-50%);
        z-index: -1;
        border-radius: 4px;
    }
    
    /* Map container styles */
    .map-container {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 30px;
        padding: 2rem;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
        transition: all 0.3s ease;
    }
    
    .map-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 60px -12px var(--turquoise);
    }
    
    .county-legend {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        margin-top: 1.5rem;
    }
    
    .legend-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: var(--text-dark);
    }
    
    .legend-color {
        width: 15px;
        height: 15px;
        border-radius: 4px;
    }
    
    /* SVG map styles - adjust based on your SVG structure */
    .kenya-map svg path {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .kenya-map svg path:hover {
        filter: brightness(1.1);
        transform: scale(1.02);
        stroke: var(--turquoise);
        stroke-width: 2px;
    }
    
    /* Clickable location styles */
    .clickable-location {
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        color: inherit;
        display: inline-block;
    }
    
    .clickable-location:hover {
        color: var(--turquoise);
        transform: translateX(5px);
    }
    
    .clickable-location:hover i {
        color: var(--turquoise);
    }
    
    /* Search results styles */
    .search-results-container {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border-radius: 20px;
        box-shadow: 0 20px 40px -10px rgba(0,0,0,0.2);
        max-height: 400px;
        overflow-y: auto;
        z-index: 1000;
        display: none;
        margin-top: 10px;
    }
    
    .search-results-container.show {
        display: block;
    }
    
    .search-result-item {
        padding: 15px 20px;
        border-bottom: 1px solid #f0f0f0;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .search-result-item:hover {
        background: var(--light-bg);
        padding-left: 25px;
    }
    
    .search-result-item .result-title {
        font-weight: 600;
        color: var(--navy);
        margin-bottom: 5px;
    }
    
    .search-result-item .result-category {
        font-size: 0.8rem;
        color: var(--turquoise);
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .search-result-item .result-snippet {
        font-size: 0.9rem;
        color: #6c757d;
    }
    
    /* Adjust banner card negative margin to account for reduced height */
    .banner-card {
        margin-top: -50px !important;
    }
    
    /* ===== OVERRIDE MEGA MENU STYLES ===== */
    /* Make all navbar menus bold */
    .navbar-nav .nav-link,
    .navbar .nav-link,
    nav .nav-link,
    .dropdown-toggle {
        font-weight: 700 !important;
    }
    
    /* Remove white background from mega menu dropdowns */
    .mega-dropdown .dropdown-menu,
    .dropdown-menu,
    .navbar .dropdown-menu {
        background-color: white !important;
        border: none !important;
    }
    
    /* Style mega menu items */
    .mega-menu .dropdown-item {
        font-size: 17px !important;
        padding: 8px 0 !important;
        transition: 0.3s ease !important;
        color: #0b0b42 !important;
        font-weight: 550 !important;
        background: transparent !important;
    }
    
    .mega-menu .dropdown-item:hover {
        color: var(--turquoise) !important;
        background: transparent !important;
        padding-left: 10px !important;
    }
    
    /* Override Bootstrap's default dropdown item hover */
    .dropdown-item:hover,
    .dropdown-item:focus {
        background: transparent !important;
    }
    
    /* Ensure the dropdown containers are transparent */
    .mega-dropdown,
    .dropdown {
        background: transparent !important;
    }
    
    /* ===== COMPLETELY REMOVE DROPDOWN ARROWS ===== */
/* Remove all borders/lines from dropdown toggles */
.navbar .nav-link.dropdown-toggle,
.navbar .nav-link.dropdown-toggle:focus,
.navbar .nav-link.dropdown-toggle:hover,
.navbar .nav-item.show .nav-link.dropdown-toggle {
    border: none !important;
    box-shadow: none !important;
    outline: none !important;
    text-decoration: none !important;
}

/* Completely remove the dropdown arrow */
.navbar .nav-link.dropdown-toggle::after,
.dropdown-toggle::after {
    display: none !important;
    content: none !important;
}
    
    /* ===== REMOVE BLUR FROM HERO SECTION ===== */
    /* Remove all blur effects from hero section images */
    .banner-left .carousel-item img,
    .banner-right img,
    .banner-left img,
    .banner-right .overlay,
    .cover-images-overlay,
    .split-banner img {
        filter: none !important;
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }
    
    /* Remove the zoom animation from the anniversary image to maintain HD quality */
    .banner-right img {
        animation: none !important;
        transform: none !important;
    }
    
    /* Keep the left carousel zoom animation but without blur */
    .banner-left .carousel-item img {
        animation: gentleZoom 20s infinite alternate ease-in-out;
        filter: none !important;
    }
    
    /* Remove any backdrop filter from overlays */
    .cover-images-overlay,
    .banner-right .overlay {
        backdrop-filter: none !important;
        -webkit-backdrop-filter: none !important;
    }
    
    /* ===== REDUCED SPACING BETWEEN SECTIONS ===== */
    /* Search bar to About JKP */
    .about-company {
        padding-top: 20px !important;
        padding-bottom: 20px !important;
    }
    
    .banner-card .container > form {
        margin-bottom: 0 !important;
    }
    
    .banner-card {
        margin-bottom: -30px !important;
    }
    
    /* About JKP to Mission/Vision section */
    section[style*="background: var(--light-bg)"] {
        padding-top: 20px !important;
        padding-bottom: 80px !important;
    }
    
    /* Key Milestones to Projects */
    section:has(.staircase-container) {
        padding-bottom: 20px !important;
    }
    
    section:has(.project-card-fancy) {
        padding-top: 20px !important;
    }
    
    /* Latest Updates to Partners */
    .newsroom {
        padding-bottom: 20px !important;
    }
    
    /* Partners to Contact Strip */
    .upcoming-city {
        padding-top: 20px !important;
    }
    
    @media (max-width: 768px) {
        .section-title-fancy h2 {
            font-size: 2rem;
        }
        
        .staircase-card {
            width: 100%;
        }
        
        .staircase-row:nth-child(odd) .staircase-card::before,
        .staircase-row:nth-child(even) .staircase-card::before {
            display: none;
        }
        
        .staircase-line {
            display: none;
        }
        
        .split-banner {
            flex-direction: column;
            height: auto;
        }
        
        .banner-left,
        .banner-right {
            width: 100%;
            height: 400px;
        }
        
        .typing-text {
            font-size: 0.9rem !important;
        }
        
        .banner-right .anniversary-text h2 {
            font-size: 2.5rem;
        }
        
        .banner-right .anniversary-text p {
            font-size: 1rem;
        }
        
        .banner-content h1 {
            font-size: 1.8rem !important;
        }
    }

    /*equal height for stat cards */
.stats-section .row .col-md-6.col-lg-3 {
    display: flex;
}

.stat-card-fancy {
    min-height: 320px; /* Ensures consistent minimum height */
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
}

.stat-card-fancy p {
    margin-top: auto; /* Pushes description to bottom */
}
</style>

<!-- ===== Site Search Data ===== -->
<script>
// Comprehensive site content for search
const siteContent = [
    // Pages from navigation
    { title: "Home", category: "Page", url: "/", content: "Jumuiya ya Kaunti za Pwani - Coastal Economic Bloc" },
    { title: "About Us", category: "Page", url: "/about", content: "Learn about Jumuiya, our history, mission, and the six coastal counties" },
    { title: "Services", category: "Page", url: "/services", content: "Our services and initiatives for regional development" },
    { title: "Projects", category: "Page", url: "/projects", content: "Current and past projects across the coastal region" },
    { title: "News & Updates", category: "Page", url: "/news-updates", content: "Latest news, updates, and stories from Jumuiya" },
    { title: "Contact", category: "Page", url: "/contact", content: "Get in touch with our secretariat" },
    { title: "Partner With Us", category: "Page", url: "/partner", content: "Partner with Jumuiya for regional development" },
    { title: "Events", category: "Page", url: "/events", content: "Upcoming and past events from Jumuiya" },
    { title: "Core Mandate", category: "Page", url: "/core-mandate", content: "Our core mandate and strategic focus areas" },
    { title: "Stakeholders", category: "Page", url: "/stakeholders", content: "Our partners and stakeholders in coastal development" },
    { title: "Jumuiya Blueprint", category: "Resource", url: "/blueprint", content: "The Jumuiya 2030 Regional Economic Blueprint" },
    { title: "Photo & Video Gallery", category: "Resource", url: "/photos-video-gallery", content: "Photos and videos from Jumuiya events and activities" },
    { title: "Newsletter Archive", category: "Resource", url: "/newsletter-archive", content: "Past newsletters from Jumuiya" },
    
    // Core Mandate items
    { title: "Coordination", category: "Core Mandate", url: "/core-mandate", content: "Socio-political & regional policy harmonization across six coastal counties" },
    { title: "Policy Harmonization", category: "Core Mandate", url: "/core-mandate", content: "Jumuiya 2030 Regional Economic Blueprint driving sustainable development" },
    { title: "Promotion", category: "Core Mandate", url: "/core-mandate", content: "Showcasing Sea-Land of Opportunities to local and international investors" },
    { title: "Investments", category: "Core Mandate", url: "/core-mandate", content: "Unlocking value chains to boost agribusiness and blue economy" },
    
    // Individual Projects
    { title: "She Stands Project", category: "Project", url: "/she-stands", content: "A faith-based collaborative initiative equipping and inspiring Kenyan women with biblical principles for everyday living and community leadership." },
    { title: "The Go Blue Project", category: "Project", url: "/go-blue", content: "A four-year EU-funded project supporting Kenya's coastal economic development and blue economy strategy through sustainable marine resource utilization." },
    { title: "Jumuiya Innovation Hub", category: "Project", url: "/innovation-lab", content: "Six innovation labs established as flagship projects to transform the region's economic landscape under the Jumuiya 2030 framework." },
    { title: "Jumuiya 2030", category: "Project", url: "/jum_2030", content: "The regional economic development strategy for 2020-2030, outlining the blueprint for sustainable growth and shared prosperity across coastal counties." },
    
    // Impact stats
    { title: "MSME Tourism Grants", category: "Impact", url: "/projects", content: "16 MSME Tourism Grants supporting micro and small enterprises in the coastal tourism sector." },
    { title: "Boats Delivered", category: "Impact", url: "/projects", content: "26+ Boats Delivered to coastal fishing communities and cooperatives." },
    { title: "Jobs Created", category: "Impact", url: "/projects", content: "2000+ Jobs Created through the Go Blue Project initiatives." },
    { title: "Skills Trainings", category: "Impact", url: "/projects", content: "1900+ Skills Trainings completed across the region." },
    
    // Mission/Vision
    { title: "Our Mission", category: "Mission", url: "/about", content: "Catalyze economic growth of Kenya's coast regional counties." },
    { title: "Our Vision", category: "Vision", url: "/about", content: "A regional economy that creates wealth and shared prosperity for its communities." },
    { title: "Our Aspirations", category: "Aspirations", url: "/about", content: "A social innovation network focused on enabling Workforce and MSMEs." }
];

// Search function
function searchSite(query) {
    if (!query || query.length < 2) return [];
    
    query = query.toLowerCase();
    return siteContent.filter(item => {
        return item.title.toLowerCase().includes(query) || 
               item.content.toLowerCase().includes(query) ||
               item.category.toLowerCase().includes(query);
    }).slice(0, 8); // Limit to 8 results
}

// Display search results
function showSearchResults(results) {
    const container = document.getElementById('searchResults');
    if (!container) return;
    
    if (results.length === 0) {
        container.innerHTML = '<div class="search-result-item"><div class="result-title">No results found</div><div class="result-snippet">Try different keywords</div></div>';
    } else {
        container.innerHTML = results.map(result => `
            <div class="search-result-item" onclick="window.location.href='${result.url}'">
                <div class="result-category">${result.category}</div>
                <div class="result-title">${result.title}</div>
                <div class="result-snippet">${result.content.substring(0, 80)}${result.content.length > 80 ? '...' : ''}</div>
            </div>
        `).join('');
    }
    
    container.classList.add('show');
}

// Close search results when clicking outside
document.addEventListener('click', function(e) {
    const searchContainer = document.getElementById('searchResults');
    const searchInput = document.getElementById('siteSearch');
    if (searchContainer && searchInput) {
        if (!searchContainer.contains(e.target) && !searchInput.contains(e.target)) {
            searchContainer.classList.remove('show');
        }
    }
});
</script>

<!-- ===== Animated Counter Script ===== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated counter function with easing
    function animateCounter(element, start, end, duration, suffix = '') {
        let startTimestamp = null;
        const easeOutQuad = (t) => t * (2 - t); // Smooth easing
        
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const easedProgress = easeOutQuad(progress);
            const currentValue = Math.floor(easedProgress * (end - start) + start);
            
            if (suffix === '+') {
                element.innerText = currentValue + '+';
            } else {
                element.innerText = currentValue;
            }
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.innerText = end + suffix;
            }
        };
        
        window.requestAnimationFrame(step);
    }

    // Intersection Observer for counters
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statCards = entry.target.querySelectorAll('.stat-card-fancy');
                statCards.forEach(card => {
                    const valueElement = card.querySelector('.stat-value-fancy');
                    if (valueElement && !valueElement.classList.contains('counted')) {
                        valueElement.classList.add('counted');
                        const fullText = valueElement.getAttribute('data-value');
                        const hasPlus = fullText.includes('+');
                        const numericValue = parseInt(fullText.replace('+', ''));
                        
                        if (hasPlus) {
                            animateCounter(valueElement, 0, numericValue, 2000, '+');
                        } else {
                            animateCounter(valueElement, 0, numericValue, 2000);
                        }
                    }
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe stats section
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<!-- ===== Typing Animation Script ===== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Typing animation for banner description
    const typingElements = document.querySelectorAll('.typing-text');
    
    if (typingElements.length > 0) {
        typingElements.forEach(element => {
            const text = element.getAttribute('data-text');
            element.textContent = '';
            
            let i = 0;
            function typeWriter() {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                    setTimeout(typeWriter, 30); // Typing speed
                } else {
                    // Keep cursor blinking at the end
                    element.style.borderRight = '3px solid var(--turquoise)';
                }
            }
            
            // Start typing when slide becomes active
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setTimeout(typeWriter, 500); // Delay before starting
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(element);
        });
    }
});
</script>

<!-- ===== Split Banner with Carousel and Anniversary Image ===== -->
<div class="banner">
    <div class="split-banner">
        <!-- Left side: Carousel -->
        <div class="banner-left">
            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    <?php
                    $slides = [
                        [
                            'img' => '/assets/images/fort jesus mbs.jpg', 
                            'county' => 'Mombasa County'
                        ],
                        [
                            'img' => '/assets/images/kilifi creek.jpg', 
                            'county' => 'Kilifi County'
                        ],
                        [
                            'img' => '/assets/images/red el taita.jpeg', 
                            'county' => 'Taita Taveta County'
                        ],
                        [
                            'img' => '/assets/images/diani beach.jpg', 
                            'county' => 'Kwale County'
                        ],
                        [
                            'img' => '/assets/images/tana river delta.jpeg', 
                            'county' => 'Tana River County'
                        ],
                        [
                            'img' => '/assets/images/Lamu_Island.jpg', 
                            'county' => 'Lamu County'
                        ],
                    ];
                    
                    // Same description for all slides
                    $description = "A Kenya Coast economic bloc that creates wealth for its community. JKP is focused on championing the region's economic development initiatives through innovation and partnership with the public, industry and academia. With the vast shared resources, a unique common historic foundation in culture and heritage; the mission of Jumuiya ya Kaunti za Pwani is to catalyze economic growth of Kenya's coast regional counties.";
                    
                    foreach ($slides as $i => $slide):
                    ?>
                        <div class="carousel-item h-100 <?php echo $i === 0 ? 'active' : ''; ?>">
                            <div class="images-optimization position-relative h-100">
                                <img src="<?php echo htmlspecialchars($slide['img']); ?>" class="d-block img-fluid w-100 h-100" alt="Banner slide <?php echo $i + 1; ?>" style="object-fit: cover;">
                                <div class="cover-images-overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.8) 0%, rgba(0,206,209,0.4) 100%); position: absolute; top: 0; left: 0; right: 0; bottom: 0;">
                                    <div class="container h-100">
                                        <div class="banner-content text-center text-lg-start d-flex flex-column justify-content-center h-100">
                                            <!-- REMOVED: Jumuiya ya Kaunti za Pwani text -->
                                            
                                            <!-- Typing animation container -->
                                            <div class="typing-container">
                                                <div class="typing-text text-white" data-text="<?php echo htmlspecialchars($description); ?>" style="font-size: 0.95rem;"></div>
                                            </div>
                                            
                                            <!-- County name - REDUCED FONT SIZE -->
                                            <h1 class="text-white fw-bold" style="font-size: 2.2rem; margin-bottom: 0.5rem;">
                                                <span class="cssanimation lePopUp sequence" style="color: var(--turquoise);"><?php echo $slide['county']; ?></span>
                                            </h1>
                                            
                                            <div class="buttons mt-3"> <!-- Reduced margin-top -->
                                                <div class="cityWall-btn" role="search">
                                                    <a href="/about" class="btn-fancy" style="background: var(--turquoise); padding: 8px 20px; display: inline-block; color: white; text-decoration: none; border-radius: 50px; margin-right: 10px; font-size: 0.9rem;">Discover More <i class="bi bi-arrow-right"></i></a>
                                                    <a href="/contact" class="btn-fancy" style="background: var(--navy); padding: 8px 20px; display: inline-block; color: white; text-decoration: none; border-radius: 50px; font-size: 0.9rem;">Contact Us <i class="bi bi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        
        <!-- Right side: 10 Years Anniversary Image -->
        <div class="banner-right">
            <img src="assets/images/ev-jum10-1.png" alt="10 Years Anniversary" onerror="this.src='/assets/images/jummy-10.png'">
            <!-- Added overlay and text for anniversary if needed -->
           
    </div>
</div>

<!-- ===== Core Mandate Cards ===== -->
<div class="banner-card" style="margin-top: -50px; position: relative; z-index: 10;" data-aos="fade-up">
    <div class="container">
        <?php
        $mandateCards = [
            ['img' => 'coord.jpg', 'icon' => 'bi-diagram-3', 'title' => 'Coordination', 'text' => 'Socio-political & regional policy harmonization across six coastal counties'],
            ['img' => 'policy.jpg', 'icon' => 'bi-file-earmark-text', 'title' => 'Policy Harmonization', 'text' => 'Jumuiya 2030 Regional Economic Blueprint driving sustainable development'],
            ['img' => 'promotion.jpg', 'icon' => 'bi-megaphone', 'title' => 'Promotion', 'text' => 'Showcasing Sea-Land of Opportunities to local and international investors'],
            ['img' => 'investments.jpg', 'icon' => 'bi-graph-up-arrow', 'title' => 'Investments', 'text' => 'Unlocking value chains to boost agribusiness and blue economy'],
        ];
        ?>
        <div class="row g-4">
            <?php foreach ($mandateCards as $card): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="fancy-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <i class="bi <?php echo $card['icon']; ?>" style="font-size: 2.5rem; color: var(--turquoise);"></i>
                        </div>
                        <div class="card-body text-center p-0">
                            <a href="/services" class="fancy-link">
                                <h4 class="card-title h5 fw-bold mb-3" style="color: var(--navy);"><?php echo $card['title']; ?></h4>
                            </a>
                            <p class="card-text small text-muted"><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <form action="/search" method="GET" class="mt-5 mx-auto position-relative" style="max-width: 600px;" onsubmit="event.preventDefault(); const results = searchSite(document.getElementById('siteSearch').value); showSearchResults(results);">
            <div class="input-group">
                <input type="text" name="q" id="siteSearch" class="form-control form-control-lg border-0 shadow-sm" placeholder="Search everything - pages, projects, news, counties..." style="border-radius: 50px 0 0 50px; padding: 15px 25px;" onkeyup="const results = searchSite(this.value); showSearchResults(results);">
                <button type="submit" class="btn btn-fancy" style="background: var(--turquoise); color: white; border-radius: 0 50px 50px 0; padding: 15px 30px;">Search <i class="bi bi-search ms-2"></i></button>
            </div>
            <div id="searchResults" class="search-results-container"></div>
        </form>
    </div>
</div>

<!-- ===== About JKP ===== -->
<section class="about-company" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="image-overlay position-relative">
                    <img class="img-fluid rounded-4 shadow-lg" src="assets/images/jum house.webp" alt="Jumuiya ya Kaunti za Pwani">
                    <div class="position-absolute bottom-0 end-0 p-4">
                        <div class="bg-white p-3 rounded-3 shadow" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(10px);">
                            <span class="fw-bold" style="color: var(--turquoise);">Since 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="company-details ps-lg-4">
                    <div class="semi-title mb-3">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title" style="color: var(--turquoise); letter-spacing: 2px;">About JKP</span>
                        </div>
                    </div>
                    <h2 class="display-6 fw-bold mb-4" style="color: var(--navy);">
    <span class="cssanimation lePopUp sequence">Jumuiya ya Kaunti za Pwani</span><br>
    <span class="cssanimation lePopUp sequence" style="color: var(--turquoise);">— Kenya's Coastal Economic Bloc</span>
</h2>
                    <p class="lead mb-4" style="color: var(--text-dark); line-height: 1.8;">The Jumuiya ya Kaunti za Pwani (JKP) serves as the regional economic development body for Kenya's coastal counties. Our primary goal is to foster a unified economic environment by bringing together regional leaders, county and national governments, development partners, the private sector, and academic institutions to drive economic growth.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://web.mombasa.go.ke/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Mombasa County</a></li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://kwalecountygov.com/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Kwale County</a></li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://kilifi.go.ke/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Kilifi County</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://tanariver.go.ke/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Tana River County</a></li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://lamu.go.ke/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Lamu County</a></li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> <a href="https://taitataveta.go.ke/" target="_blank" rel="noopener noreferrer" style="color: var(--navy); text-decoration: none; transition: color 0.3s ease;" onmouseover="this.style.color='var(--turquoise)'" onmouseout="this.style.color='var(--navy)'">Taita Taveta County</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="company-videos">
                        <a href="/about" class="btn btn-fancy" style="background: var(--turquoise); color: white; padding: 15px 40px; border-radius: 50px;">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Mission, Vision, Aspiration & Core Mandate Section with Map ===== -->
<section style="background: var(--light-bg);" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-start g-5">
            <!-- Left side - Cards in grid layout (matching Impacts section style) -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Mission Card -->
                    <div class="col-md-6">
                        <div class="stat-card-fancy text-center h-100">
                            <div class="stat-icon-fancy">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <h3 class="fw-bold mb-2" style="color: var(--navy);">Our Mission</h3>
                            <p class="small text-muted mb-0">Catalyze economic growth of Kenya's coast regional counties.</p>
                        </div>
                    </div>
                    
                    <!-- Vision Card -->
                    <div class="col-md-6">
                        <div class="stat-card-fancy text-center h-100">
                            <div class="stat-icon-fancy">
                                <i class="bi bi-eye"></i>
                            </div>
                            <h3 class="fw-bold mb-2" style="color: var(--navy);">Our Vision</h3>
                            <p class="small text-muted mb-0">A regional economy that creates wealth and shared prosperity for its communities.</p>
                        </div>
                    </div>
                    
                    <!-- Aspirations Card -->
                    <div class="col-md-6">
                        <div class="stat-card-fancy text-center h-100">
                            <div class="stat-icon-fancy">
                                <i class="bi bi-stars"></i>
                            </div>
                            <h3 class="fw-bold mb-2" style="color: var(--navy);">Our Aspirations</h3>
                            <p class="small text-muted mb-0">A social innovation network focused on enabling Workforce and MSMEs.</p>
                        </div>
                    </div>

                    <!-- Core Mandate Card -->
                    <div class="col-md-6">
                        <div class="stat-card-fancy text-center h-100">
                            <div class="stat-icon-fancy">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3 class="fw-bold mb-2" style="color: var(--navy);">JKP Core Mandate</h3>
                            <p class="small text-muted mb-0">The Secretariat's role is to have a broad understanding of the region and create the enabling environment that will ensure a platform for the socio-economic development of the region, thereby changing the story of the region.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include __DIR__ . '/components/coastal_counties.php'; ?>
        </div>
    </div>
</section>

<!-- ===== Achievements with Animated Counters - EQUAL HEIGHT ===== -->
<section class="stats-section" style="background: var(--light-bg);" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Our Impacts</div>
        </div>

        <?php
        $stats = [
            [
                'icon' => 'bi-briefcase', 
                'value' => '16', 
                'label' => 'MSME Tourism Grants', 
                'desc' => 'Supporting micro and small enterprises in the coastal tourism sector.'
            ],
            [
                'icon' => 'bi-ship', 
                'value' => '26+', 
                'label' => 'Boats Delivered', 
                'desc' => 'Fishing vessels delivered to coastal fishing communities and cooperatives.'
            ],
            [
                'icon' => 'bi-people', 
                'value' => '2000+', 
                'label' => 'Jobs Created', 
                'desc' => 'Employment opportunities created through the Go Blue Project initiatives.'
            ],
            [
                'icon' => 'bi-mortarboard', 
                'value' => '1900+', 
                'label' => 'Skills Trainings', 
                'desc' => 'Vocational and technical training programs completed across the region.'
            ],
        ];
        ?>
        
        <div class="row g-4">
            <?php foreach ($stats as $stat): ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="stat-card-fancy text-center w-100 d-flex flex-column">
                        <div class="stat-icon-fancy">
                            <i class="bi <?php echo $stat['icon']; ?>"></i>
                        </div>
                        <div class="stat-value-fancy h1 fw-bold mb-2" data-value="<?php echo $stat['value']; ?>" style="color: var(--navy);">0</div>
                        <h5 class="fw-bold mb-2" style="color: var(--deep-blue);"><?php echo $stat['label']; ?></h5>
                        <p class="small text-muted mb-0 mt-auto"><?php echo $stat['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Milestone Section - Staircase Layout ===== -->
<section data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Our Journey</div>
            <h2>Key Milestones</h2>
        </div>
        
        <div class="staircase-container">
            <div class="staircase-line"></div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2015</div>
                    <div class="staircase-title">Foundation of Jumuiya</div>
                    <div class="staircase-desc">Six coastal counties united to form the economic bloc, establishing our vision for regional prosperity.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2015</div>
                    <div class="staircase-title">Blue Economy Framework</div>
                    <div class="staircase-desc">Introduced comprehensive strategy for sustainable marine resource development across member counties.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2020</div>
                    <div class="staircase-title">50,000 Jobs Created</div>
                    <div class="staircase-desc">Milestone achievement in youth and women employment through economic empowerment programs.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2025</div>
                    <div class="staircase-title">10th Anniversary</div>
                    <div class="staircase-desc">Celebrating 10 years of transformative impact with 200+ projects and 100,000+ beneficiaries.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== JKP Projects & Initiatives ===== -->
<section class="stats-section" style="background: var(--light-bg);" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">JKP</div>
            <h2>Jumuiya Projects and Initiatives</h2>
        </div>
        
        <?php
        $projects = [
            [
                'img' => '/assets/images/she stands.png', 
                'title' => 'She Stands Project', 
                'desc' => 'A faith-based collaborative initiative equipping and inspiring Kenyan women with biblical principles for everyday living and community leadership.',
                'link' => '/she-stands'
            ],
            [
                'img' => '/assets/images/goo-blu.png', 
                'title' => 'The Go Blue Project', 
                'desc' => 'A four-year EU-funded project supporting Kenya\'s coastal economic development and blue economy strategy through sustainable marine resource utilization.',
                'link' => '/go-blue'
            ],
            [
                'img' => '/assets/images/inno-lab.png', 
                'title' => 'Jumuiya Innovation Hub', 
                'desc' => 'Six innovation labs established as flagship projects to transform the region\'s economic landscape under the Jumuiya 2030 framework.',
                'link' => '/innovation-lab'
            ],
            [
                'img' => '/assets/images/jum 2030.png', 
                'title' => 'Jumuiya 2030', 
                'desc' => 'The regional economic development strategy for 2020-2030, outlining the blueprint for sustainable growth and shared prosperity across coastal counties.',
                'link' => '/jum_2030'
            ],
        ];
        ?>
        
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="project-card-fancy">
                        <div class="project-image">
                            <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>">
                        </div>
                        <div class="project-content">
                            <h4 class="project-title"><?php echo $project['title']; ?></h4>
                            <p class="project-desc"><?php echo $project['desc']; ?></p>
                            <a href="<?php echo $project['link']; ?>" class="read-more">
                                Read More <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Latest News ===== -->
<section class="newsroom" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Updates</div>
            <h2>Latest Updates</h2>
        </div>
        
        <?php
        $news = [
            [
                'img'   => '/assets/images/agri summit.jpeg',
                'date'  => '24',
                'month' => 'February',
                'year'  => '2026',
                'title' => 'Jumuiya Ya Pwani Agriculture Revitalization Summit',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '/assets/images/fauna.jpeg',
                'date'  => '26',
                'month' => 'February',
                'year'  => '2026',
                'title' => 'Ocean Conservation and Sustainable Coastal Development Workshop',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '/assets/images/strength bi.png',
                'date'  => '19',
                'month' => 'April',
                'year'  => '2024',
                'title' => 'Strengthening Bilateral Relations — Australian Deputy High Commissioner Visits JKP Offices',
                'author' => 'Editorial Staff',
            ],
        ];
        ?>
        
        <div class="row g-4">
            <?php foreach ($news as $item): ?>
                <div class="col-lg-4">
                    <div class="project-card-fancy">
                        <div class="project-image" style="height: 250px;">
                            <img src="<?php echo htmlspecialchars($item['img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-white text-dark p-3 rounded-3">
                                    <div class="fw-bold"><?php echo $item['date']; ?></div>
                                    <small><?php echo $item['month']; ?></small>
                                </span>
                            </div>
                        </div>
                        <div class="project-content">
                            <small class="text-muted mb-2 d-block">By <?php echo htmlspecialchars($item['author']); ?></small>
                            <h4 class="project-title h5"><?php echo htmlspecialchars($item['title']); ?></h4>
                            <a href="pages/news-updates.php" class="read-more mt-3">
                                Read Full Story <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/partners.php'; ?>


<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>