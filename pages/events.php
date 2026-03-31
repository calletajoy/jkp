<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events — JKP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/events.css">
    <style>
        /* New Color Palette */
        /* Primary: #2d93d6 (rich blue accent)
           Secondary: #6db7e8 (medium blue)
           Card background: #c4f4f5 (soft cyan)
           Deep navy: #273C67 (hero, footer) */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Hide global header and footer */
        body > header,
        body > footer:not(.events-footer) {
            display: none;
        }

        body {
            background: #f5f9ff;
        }

        /* Custom Navigation Bar - Full Width with subtle shadow */
        .events-nav {
            background: white;
            padding: 15px 40px;
            position: sticky;
            top: 0;
            z-index: 1000;
            
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .nav-logo img {
            height: 55px;
            width: auto;
            display: block;
        }

        .nav-menu {
            display: flex;
            gap: 48px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav-menu li a {
            color: #273C67;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: 0.3s;
            padding: 8px 0;
            position: relative;
        }

        .nav-menu li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #2d93d6;
            transition: width 0.3s ease;
        }

        .nav-menu li a:hover {
            color: #2d93d6;
        }

        .nav-menu li a:hover::after {
            width: 100%;
        }

        /* Hero Section - Gradient with new colors */
        .page-hero {
            background: linear-gradient(135deg, #273C67 0%, #2d93d6 100%);
            padding: 50px 20px 50px;
            margin-top: 25px;
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: "";
            position: absolute;
            top: -100px;
            right: -100px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: rgba(196, 244, 245, 0.05);
            z-index: 0;
        }

        .hero-content {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            padding-left: 40px;
        }

        .page-hero .hero-label {
            color: #c4f4f5;
            letter-spacing: 4px;
            font-size: 0.75rem;
            text-transform: uppercase;
            margin-bottom: 0.75rem;
            display: inline-block;
        }

        .page-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 0.75rem;
            color: white;
            font-family: 'Playfair Display', serif;
            line-height: 1.2;
            max-width: 700px;
        }

        .page-hero p {
            font-size: 1.1rem;
            color: rgba(255,255,255,0.85);
            margin-bottom: 1.5rem;
            max-width: 500px;
        }

        .hero-buttons {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .register-btn,
        .sponsor-btn {
            padding: 12px 30px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .register-btn {
            background: #2d93d6;
            color: white;
            border: none;
        }

        .register-btn:hover {
            background: #6db7e8;
            color: #273C67;
            transform: translateY(-2px);
        }

        .sponsor-btn {
            background: transparent;
            color: white;
            border: 2px solid #c4f4f5;
        }

        .sponsor-btn:hover {
            background: #c4f4f5;
            color: #273C67;
            transform: translateY(-2px);
        }

        /* Filter Bar */
        .filter-bar {
            background: #273C67;
            padding: 18px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 0;
        }

        .filter-btn {
            background: transparent;
            border: 1px solid rgba(255,255,255,0.3);
            color: white;
            padding: 8px 24px;
            border-radius: 40px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.85rem;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #c4f4f5;
            border-color: #c4f4f5;
            color: #273C67;
        }

        /* Main Container */
        .main {
            max-width: 1280px;
            margin: 0 auto;
            padding: 70px 24px;
        }

        /* Section Titles */
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 48px;
            color: #273C67;
            font-family: 'Playfair Display', serif;
            border-left: 4px solid #2d93d6;
            padding-left: 24px;
        }

        /* Featured Section */
        .featured-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #2d93d6;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .featured-card {
            background: linear-gradient(135deg, #273C67 0%, #2d93d6 100%);
            border-radius: 28px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 80px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .featured-card:hover {
            transform: translateY(-5px);
        }

        .featured-image {
            flex: 1.2;
            min-width: 250px;
            position: relative;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: high-quality;
            filter: none;
        }

        .feat-date-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #2d93d6;
            border-radius: 16px;
            padding: 8px 14px;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .feat-date-badge .day {
            font-size: 1.6rem;
            line-height: 1;
            font-weight: 800;
            display: block;
        }

        .feat-date-badge .month {
            font-size: 0.75rem;
            text-transform: uppercase;
        }

        .featured-body {
            flex: 1;
            padding: 44px;
            background: linear-gradient(135deg, #273C67 0%, #2d93d6 100%);
            color: #f1f4faff;
        }

        .featured-body .event-tag {
            display: inline-block;
            background: #2d93d6;
            color: white;
            padding: 5px 14px;
            border-radius: 40px;
            font-size: 0.7rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .featured-body h2 {
            font-size: 2rem;
            margin-bottom: 0.75rem;
            color: #f2f4f8ff;
            font-family: 'Playfair Display', serif;
        }

        .featured-body p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #f1f4faff;
            line-height: 1.5;
        }

        .meta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 24px;
            margin-bottom: 28px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: #e5e7ebff;
        }

        .meta-item svg {
            stroke: #2d93d6;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #2d93d6;
            color: white;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #6db7e8;
            color: #273C67;
            gap: 16px;
        }

        /* Events Grid - Clean 2x2 */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-bottom: 80px;
        }

        .event-card {
            background: #6db7e8;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(83, 81, 81, 0.03);
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 40px rgba(0, 0, 0, 0.08);
        }

        .card-image {
    position: relative;
    aspect-ratio: 16/9;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f5f9ff; /* optional: fills empty space nicely */
}

.card-image img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

        .event-card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-date-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: #2d93d6;
            border-radius: 14px;
            padding: 5px 12px;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .card-date-badge .day {
            font-size: 1.2rem;
            line-height: 1;
            font-weight: 800;
        }

        .card-date-badge .month {
            font-size: 0.65rem;
            text-transform: uppercase;
        }

        .card-body {
            padding: 28px;
            color: #f0f5ffff;
        }

        .event-tag {
            display: inline-block;
            background: rgba(45, 147, 214, 0.1);
            padding: 4px 12px;
            border-radius: 30px;
            font-size: 0.7rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: white;
            border: 1px solid #2d93d6;
        }

        .card-body h3 {
            font-size: 1.35rem;
            margin-bottom: 10px;
            line-height: 1.3;
            color: #0b0b42;
            font-family: 'Playfair Display', serif;
        }

        .card-body p {
            font-size: 0.9rem;
            color: #0b0b42;
            margin-bottom: 16px;
            line-height: 1.5;
        }

        .card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 0.75rem;
            color: #6db7e8;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            padding-top: 14px;
            margin-top: 8px;
        }

        .card-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-meta svg {
            stroke: #2d93d6;
            width: 12px;
            height: 12px;
        }

        /* Sponsor Section - Unified Card */
        .sponsor-section {
            background: #f0fafa;
            border-radius: 28px;
            padding: 50px;
            margin-bottom: 80px;
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            align-items: center;
        }

        .sponsor-image {
            flex: 1;
            min-width: 280px;
            border-radius: 20px;
        }

        .sponsor-image img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: high-quality;
        }

        .sponsor-description {
            flex: 1;
            text-align: left;
        }

        .sponsor-description h3 {
            font-size: 2rem;
            color: #273C67;
            font-family: 'Playfair Display', serif;
            margin-bottom: 20px;
        }

        .sponsor-description p {
            color: #273C67;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .sponsor-tiers {
            display: flex;
            justify-content: flex-start;
            gap: 30px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .tier-card {
            background: white;
            padding: 24px 32px;
            border-radius: 20px;
            min-width: 140px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: transform 0.3s ease;
        }

        .tier-card:hover {
            transform: translateY(-5px);
        }

        .tier-card h4 {
            color: #2d93d6;
            font-size: 1.3rem;
            margin-bottom: 12px;
        }

        .tier-card p {
            color: #6db7e8;
            font-size: 0.85rem;
            margin: 6px 0;
        }

        /* Contact Section - Left Aligned */
        .contact-section {
            background: #f0fafa;
            border-radius: 28px;
            padding: 50px;
            margin-bottom: 80px;
            text-align: left;
        }

        .contact-form-wrapper {
            max-width: 550px;
            margin: 0;
        }

        .contact-form-wrapper h3 {
            font-size: 2rem;
            color: #273C67;
            font-family: 'Playfair Display', serif;
            margin-bottom: 30px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            font-size: 0.95rem;
            background: white;
            color: #273C67;
            font-family: inherit;
            transition: 0.3s;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            outline: none;
            border-color: #2d93d6;
            box-shadow: 0 0 0 3px rgba(45, 147, 214, 0.1);
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: #a0aec0;
        }

        .contact-submit-btn {
            background: #2d93d6;
            color: white;
            border: none;
            padding: 14px 32px;
            border-radius: 50px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            width: 100%;
        }

        .contact-submit-btn:hover {
            background: #6db7e8;
            color: #273C67;
            transform: translateY(-2px);
        }

        .contact-success {
            text-align: center;
            padding: 20px;
            margin-top: 20px;
            background: rgba(45, 147, 214, 0.1);
            border-radius: 16px;
        }

        .contact-success p {
            color: #2d93d6;
            margin: 0;
            font-weight: 500;
        }

        /* Newsletter Section */
        .newsletter {
            background: #273C67;
            border-radius: 28px;
            padding: 50px;
            text-align: center;
            margin-bottom: 0;
        }

        .newsletter h3 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: white;
            font-family: 'Playfair Display', serif;
        }

        .newsletter p {
            margin-bottom: 25px;
            color: rgba(255,255,255,0.8);
        }

        .nl-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            max-width: 500px;
            margin: 0 auto;
        }

        .nl-form input {
            flex: 2;
            min-width: 220px;
            padding: 14px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.2);
            font-size: 0.95rem;
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .nl-form input:focus {
            outline: none;
            border-color: #2d93d6;
        }

        .nl-form input::placeholder {
            color: rgba(255,255,255,0.5);
        }

        .nl-form button {
            background: #2d93d6;
            border: none;
            padding: 14px 32px;
            border-radius: 50px;
            font-weight: 600;
            color: white;
            cursor: pointer;
            transition: 0.2s;
        }

        .nl-form button:hover {
            background: #6db7e8;
            color: #273C67;
            transform: translateY(-2px);
        }

        /* Footer */
        .events-footer {
            background: #273C67;
            padding: 60px 40px 40px;
        }

        .footer-container {
            max-width: 1280px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            text-align: left;
        }

        .footer-col-1 img {
            max-width: 150px;
            height: auto;
            filter: brightness(0) invert(1);
            opacity: 0.9;
            display: block;
        }

        .footer-col-2 p {
            font-size: 1rem;
            color: rgba(255,255,255,0.7);
            font-family: 'Playfair Display', serif;
            font-style: italic;
            line-height: 1.5;
        }

        .footer-col-3 {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .footer-link {
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: #2d93d6;
            transform: translateX(5px);
        }

        .footer-copyright {
            max-width: 1280px;
            margin: 40px auto 0;
            text-align: center;
        }

        .footer-copyright p {
            color: rgba(255,255,255,0.4);
            font-size: 0.8rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 30px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .events-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .footer-container {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 30px;
            }
            .footer-col-1,
            .footer-col-2,
            .footer-col-3 {
                text-align: center;
                align-items: center;
            }
        }

        @media (max-width: 768px) {
            .events-nav {
                padding: 15px 20px;
            }
            .nav-container {
                flex-direction: column;
                align-items: center;
            }
            .nav-logo {
                display: flex;
                align-items: center;
                gap: 12px;
                margin-bottom: 10px;
            }
            .nav-logo img {
                height: 55px;
                width: auto;
                display: block;
            }
            .nav-menu {
                gap: 30px;
            }
            .hero-content {
                padding-left: 20px;
                padding-right: 20px;
            }
            .page-hero {
                margin-top: 15px;
            }
            .page-hero h1 {
                font-size: 2.5rem;
            }
            .hero-buttons {
                flex-direction: column;
                align-items: flex-start;
            }
            .section-title {
                font-size: 1.8rem;
            }
            .featured-card {
                flex-direction: column;
            }
            .featured-body {
                padding: 28px;
            }
            .sponsor-section {
                flex-direction: column;
                text-align: center;
                padding: 30px 20px;
            }
            .sponsor-description {
                text-align: center;
            }
            .sponsor-tiers {
                justify-content: center;
            }
            .contact-section {
                padding: 30px 20px;
                text-align: center;
            }
            .contact-form-wrapper {
                margin: 0 auto;
                text-align: center;
            }
            .newsletter {
                padding: 30px 20px;
            }
            .footer-events {
                padding: 40px 20px 30px;
            }
        }
    </style>
</head>

<body>
    <?php
    $pageTitle    = 'Events';
    $currentPage  = 'events';
    $heroTitle    = 'Events';
    $heroSubtitle = 'Events';

    ob_start();
    ?>

    <!-- Custom Navigation Bar - Clean & Full Width -->
    <nav class="events-nav">
        <div class="nav-container">
            <div class="nav-logo">
                <img src="assets/images/jumi10.png" alt="Jumuiya at 10 Logo">
            </div>
            <ul class="nav-menu">
                <li><a href="assets/content-files/JUMUIYA AT 10 - CONCEPT NOTE - 12-02-2026.pdf" target="_blank">Programs</a></li>
                <li><a href="assets/content-files/Jumuiya @10 Prospectus.pdf" target="_blank">Sponsor</a></li>
                <li><a href="#contact-section">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="page-hero">
        <div class="hero-content">
            <span class="hero-label">UPCOMING & PAST EVENTS</span>
            <h1>Jumuiya Events & Anniversaries</h1>
            <p>A Decade of Coastal Collaboration</p>
            <div class="hero-buttons">
                <button onclick="openRegistrationModal()" class="register-btn">Register Now</button>
                <a href="#sponsor-section" class="sponsor-btn">Become a Sponsor</a>
            </div>
        </div>
    </div>

    <!-- Filter Bar -->
    <div class="filter-bar">
        <button class="filter-btn active">All Events</button>
        <button class="filter-btn">Conferences</button>
        <button class="filter-btn">Forums</button>
        <button class="filter-btn">Summits</button>
        <button class="filter-btn">Exhibitions</button>
        <button class="filter-btn">Workshops</button>
        <button class="filter-btn">2024</button>
        <button class="filter-btn">2025</button>
    </div>

    <div class="main">

        <!-- Featured Event -->
        <div class="featured-label">FEATURED EVENT</div>
        <div class="featured-card">
            <div class="featured-image">
                <img src="assets/images/at10-2.png" alt="10th Anniversary Celebration">
                <div class="feat-date-badge">
                    <span class="day">01</span>
                    <span class="month">Apr</span>
                </div>
            </div>
            <div class="featured-body">
                <div class="event-tag">A Decade of Jumuiya</div>
                <h2>10th Anniversary Celebration</h2>
                <p>10 years of Regional Unity & Growth</p>
                <div class="meta-row">
                    <div class="meta-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        APR 1 – 2, 2026
                    </div>
                    <div class="meta-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Vipingo Ridge & Pwani University, Kilifi County
                    </div>
                    <div class="meta-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        </svg>
                        Regional Delegates
                    </div>
                </div>
                <a href="event-detail.html" class="btn-primary">
                    View Event Details
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- More Events - Clean 2x2 Grid -->
        <div class="section-title">More Events</div>
        <div class="events-grid">
            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/agri summit.jpeg" alt="Agriculture Summit">
                    <div class="card-date-badge"><span class="day">24</span><span class="month">Feb</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Summit</div>
                    <h3>Agriculture Revitalization Summit</h3>
                    <p>A gathering poised to redefine the future of agriculture at the coast</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" /><line x1="16" y1="2" x2="16" y2="6" /><line x1="8" y1="2" x2="8" y2="6" /><line x1="3" y1="10" x2="21" y2="10" /></svg>Feb 24, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" /></svg>Kilifi</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/fauna.jpeg" alt="Ocean Conservation">
                    <div class="card-date-badge"><span class="day">26</span><span class="month">Feb</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Workshop</div>
                    <h3>Ocean Conservation & Sustainable Coastal Development</h3>
                    <p>Focused on policy making and advocacy for ocean conservation</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" /><line x1="16" y1="2" x2="16" y2="6" /><line x1="8" y1="2" x2="8" y2="6" /><line x1="3" y1="10" x2="21" y2="10" /></svg>Feb 26, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" /></svg>Mombasa</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/galajum1.png" alt="Gala Dinner">
                    <div class="card-date-badge"><span class="day">02</span><span class="month">Apr</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Exhibitions</div>
                    <h3>Gala Dinner</h3>
                    <p>An evening of celebration, networking, and recognition</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" /><line x1="16" y1="2" x2="16" y2="6" /><line x1="8" y1="2" x2="8" y2="6" /><line x1="3" y1="10" x2="21" y2="10" /></svg>Apr 2, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" /></svg>Pwani University, Kilifi</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/JUM10-1.png" alt="Sports & Networking">
                    <div class="card-date-badge"><span class="day">01</span><span class="month">Apr</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Forum</div>
                    <h3>Sports, Networking & Awards</h3>
                    <p>Celebrating achievements and building connections</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" /><line x1="16" y1="2" x2="16" y2="6" /><line x1="8" y1="2" x2="8" y2="6" /><line x1="3" y1="10" x2="21" y2="10" /></svg>Apr 1, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" /><circle cx="12" cy="10" r="3" /></svg>Vipingo Ridge, Kilifi</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sponsor Section - Unified Card -->
        <div id="sponsor-section" class="sponsor-section">
            <div class="sponsor-image">
                <img src="assets/images/sponspack.png" alt="Sponsor Packages">
            </div>
            <div class="sponsor-description">
                <h3>Become a Partner</h3>
                <p>Join us in celebrating a decade of regional unity and growth. Your partnership helps us continue building a stronger coastal community.</p>
                <div class="sponsor-tiers">
                    <div class="tier-card">
                        <h4>Platinum</h4>
                       
                    </div>
                    <div class="tier-card">
                        <h4>Gold</h4>
                        
                    </div>
                    <div class="tier-card">
                        <h4>Silver</h4>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section - Left Aligned -->
        <div id="contact-section" class="contact-section">
            <div class="contact-form-wrapper">
                <h3>Contact Us</h3>
                <form id="contactForm" class="contact-form">
                    <input type="text" id="contactName" name="name" placeholder="Your Name" required>
                    <input type="email" id="contactEmail" name="email" placeholder="Email Address" required>
                    <textarea id="contactMessage" name="message" rows="4" placeholder="Your Message" required></textarea>
                    <button type="submit" class="contact-submit-btn">SEND</button>
                </form>
                <div id="contactSuccessMessage" style="display: none;" class="contact-success">
                    <p>✓ Message sent successfully! We will get back to you soon.</p>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="newsletter">
            <h3>Stay in the Loop</h3>
            <p>Get notified about upcoming regional conferences, forums, and investment events.</p>
            <div class="nl-form">
                <input type="email" placeholder="Enter your email address">
                <button>Notify Me</button>
            </div>
        </div>

    </div>

   <!-- Footer -->
<footer class="events-footer" style="background-color: #273C67; padding: 60px 20px; color: #fff; font-family: 'Arial', sans-serif;">
    <div class="footer-container" style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px;">

        

        <!-- Text Column -->
        <div class="footer-col-2" style="flex: 2 1 300px; text-align: center;">
            <p style="font-size: 18px; margin: 0;">Celebrating 10 Years of Regional Unity & Growth</p>
        </div>

        <!-- Links Column -->
        <div class="footer-col-3" style="flex: 2 1 300px; text-align: center; display: flex; flex-direction: column; gap: 10px;">
            <a href="#anniversary-section" class="footer-link" style="color: #c4f4f5; text-decoration: none;">The Anniversary</a>
            <a href="assets/content%20files/programme-overview.pdf" class="footer-link" target="_blank" style="color: #c4f4f5; text-decoration: none;">Programme Overview</a>
            <a href="#sponsor-section" class="footer-link" style="color: #c4f4f5; text-decoration: none;">Partners & Sponsors</a>
        </div>

    </div>

    <!-- Copyright -->
    <div class="footer-copyright" style="text-align: center; margin-top: 30px; font-size: 14px; color: #b0b0b0;">
        <p>Copyright © 2026 Jumuiya ya Kaunti za Pwani. All rights reserved.</p>
    </div>
</footer>

    <script>
        // Filter buttons functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Contact Form Submission
        const contactForm = document.getElementById('contactForm');
        const contactSuccessMessage = document.getElementById('contactSuccessMessage');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                formData.append('form_type', 'contact');
                
                fetch('process-contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        contactForm.style.display = 'none';
                        contactSuccessMessage.style.display = 'block';
                        contactForm.reset();
                        
                        setTimeout(() => {
                            contactForm.style.display = 'block';
                            contactSuccessMessage.style.display = 'none';
                        }, 3000);
                    } else {
                        alert('Error sending message. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Error sending message. Please try again.');
                });
            });
        }

        // Newsletter submission
        const newsletterBtn = document.querySelector('.nl-form button');
        const newsletterInput = document.querySelector('.nl-form input');
        
        if (newsletterBtn) {
            newsletterBtn.addEventListener('click', function() {
                const email = newsletterInput.value;
                if (email && email.includes('@')) {
                    alert('Thank you for subscribing! You will receive updates soon.');
                    newsletterInput.value = '';
                } else {
                    alert('Please enter a valid email address.');
                }
            });
        }
    </script>
    <?php include 'components/registration-modal.php'; ?>
    
</body>

</html>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>