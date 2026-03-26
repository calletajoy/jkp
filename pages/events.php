<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events — JKP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/events.css">
    <style>
        /* OVERRIDE COLORS - matching shades of blue theme */
        /* #00CED1 , #5C7EC0 , #3B5B9A , #273C67 , #0b0b42 */

        /* Hero section - radial gradient (#00ced1 and #0b0b42) */
        .page-hero {
            background: radial-gradient(circle at center, #0b0b42 0%, #00ced1 100%);
            padding: 80px 20px 60px;
            text-align: center;
            color: white;
        }

        .page-hero .hero-label {
            color: #fdfeffff;
            letter-spacing: 2px;
            font-size: 0.85rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .page-hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: #fafafaff;
            font-family: 'Playfair Display', serif;
        }

        .page-hero p {
            font-size: 1.2rem;
            color: rgba(255,255,255,0.9);
        }

        /* Filter Bar - background and buttons */
        .filter-bar {
            background: #0b0b42;
            padding: 16px 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin: 0;
            /* no spacing from hero */
        }

        .filter-btn {
            background: transparent;
            border: 1.5px solid white;
            color: white;
            padding: 8px 20px;
            border-radius: 40px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: #00ced1;
            border-color: #aff4f5ff;
            color: #0b0b42;
        }

        /* Main container */
        .main {
            max-width: 1280px;
            margin: 0 auto;
            padding: 40px 24px;
        }

        /* Featured section */
        .featured-label {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #5C7EC0;
            margin-bottom: 1rem;
        }

        .featured-card {
            background: radial-gradient(circle at center, #0b0b42 0%, #00ced1 100%);
            border-radius: 24px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 60px;
            box-shadow: 0 20px 35px -10px rgba(0,0,0,0.2);
            position: relative;
        }

        /* Greyish circle at top right corner - more faded */
        .featured-card::before {
            content: "";
            position: absolute;
            top: -80px;
            right: -80px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(165, 173, 189, 0.15);
            z-index: 0;
            pointer-events: none;
        }

        /* Greyish circle at bottom left corner - more faded */
        .featured-card::after {
            content: "";
            position: absolute;
            bottom: -80px;
            left: -80px;
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: rgba(165, 173, 189, 0.15);
            z-index: 0;
            pointer-events: none;
        }

        /* Small dots forming a rectangle pattern - more faded */
        .featured-card .dots-pattern {
            position: absolute;
            top: 40px;
            right: 40px;
            width: 140px;
            height: 120px;
            z-index: 0;
            pointer-events: none;
            opacity: 0.4;
        }

        .featured-card .dots-pattern::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle, rgba(165, 173, 189, 0.4) 2px, transparent 2px);
            background-size: 15px 15px;
            background-repeat: repeat;
        }

        /* Additional dots pattern at bottom left - more faded */
        .featured-card .dots-pattern-bottom {
            position: absolute;
            bottom: 40px;
            left: 40px;
            width: 120px;
            height: 100px;
            z-index: 0;
            pointer-events: none;
            opacity: 0.4;
        }

        .featured-card .dots-pattern-bottom::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(circle, rgba(165, 173, 189, 0.4) 2px, transparent 2px);
            background-size: 12px 12px;
            background-repeat: repeat;
        }

        .featured-image {
            flex: 1.2;
            min-width: 280px;
            position: relative;
            z-index: 1;
        }

        .featured-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: high-quality;
        }

        .feat-date-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(11, 11, 66, 0.9);
            border-radius: 16px;
            padding: 8px 14px;
            text-align: center;
            color: white;
            font-weight: bold;
            box-shadow: 0 5px 12px rgba(0,0,0,0.2);
            border: 1px solid #00ced1;
            z-index: 2;
            backdrop-filter: blur(4px);
        }

        .feat-date-badge .day {
            font-size: 1.6rem;
            line-height: 1;
            font-weight: 800;
            display: block;
        }

        .feat-date-badge .month {
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .featured-body {
            flex: 1;
            padding: 32px 36px;
            background: transparent;
            color: white;
            position: relative;
            z-index: 1;
        }

        .featured-body .event-tag {
            display: inline-block;
            background: rgba(0, 206, 209, 0.2);
            backdrop-filter: blur(4px);
            color: #00ced1;
            padding: 5px 14px;
            border-radius: 40px;
            font-size: 0.75rem;
            font-weight: 600;
            margin-bottom: 1rem;
            border: 1px solid #00ced1;
        }

        .featured-body h2 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            color: #fafafaff;
            font-family: 'Playfair Display', serif;
        }

        .featured-body p {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            color: #fafafaff;
            opacity: 0.9;
        }

        .meta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 28px;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            color: #e0e0e0;
            font-weight: 500;
        }

        .meta-item svg {
            stroke: #00ced1;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #00ced1;
            color: #0b0b42;
            padding: 12px 28px;
            border-radius: 40px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.2s;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            background: #5C7EC0;
            color: white;
            gap: 16px;
        }

        /* Section Title */
        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 40px 0 24px 0;
            color: #0b0b42;
            border-left: 5px solid #00ced1;
            padding-left: 20px;
        }

        /* Events Grid - GRID LAYOUT (3 on top, 1 below) */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            margin-bottom: 70px;
        }

        /* Make the 4th card span across or position it below */
        .event-card:last-child {
            grid-column: 2 / 3;
            max-width: 100%;
        }

        .event-card {
            background: radial-gradient(circle at center, #0b0b42 0%, #00ced1 100%);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .event-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -10px rgba(0,0,0,0.2);
        }

        .card-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
            image-rendering: auto;
            image-rendering: crisp-edges;
            image-rendering: high-quality;
        }

        .event-card:hover .card-image img {
            transform: scale(1.05);
        }

        .card-date-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(11, 11, 66, 0.9);
            border-radius: 14px;
            padding: 5px 12px;
            text-align: center;
            color: white;
            font-weight: bold;
            box-shadow: 0 3px 8px rgba(0,0,0,0.2);
            border: 1px solid #00ced1;
            backdrop-filter: blur(4px);
        }

        .card-date-badge .day {
            font-size: 1.2rem;
            line-height: 1;
            font-weight: 800;
        }

        .card-date-badge .month {
            font-size: 0.7rem;
            text-transform: uppercase;
        }

        .card-body {
            padding: 20px;
            color: white;
            background: transparent;
        }

        .event-tag {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            padding: 4px 12px;
            border-radius: 30px;
            font-size: 0.7rem;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
            color: white;
            border: 1px solid white;
        }

        .card-body h3 {
            font-size: 1.25rem;
            margin-bottom: 8px;
            line-height: 1.3;
            color: white;
        }

        .card-body p {
            font-size: 0.85rem;
            color: rgba(255,255,255,0.8);
            margin-bottom: 16px;
            line-height: 1.4;
        }

        .card-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            font-size: 0.7rem;
            color: rgba(255,255,255,0.7);
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 12px;
            margin-top: 6px;
        }

        .card-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .card-meta svg {
            stroke: white;
            width: 12px;
            height: 12px;
        }

        /* Newsletter Section */
        .newsletter {
            background: radial-gradient(circle at center, #0b0b42 0%, #00ced1 100%);
            border-radius: 32px;
            padding: 48px 40px;
            text-align: center;
            color: white;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
        }

        .newsletter h3 {
            font-size: 2rem;
            margin-bottom: 12px;
            color: #00ced1;
        }

        .newsletter p {
            margin-bottom: 28px;
            opacity: 0.85;
        }

        .nl-form {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            max-width: 550px;
            margin: 0 auto;
        }

        .nl-form input {
            flex: 2;
            min-width: 220px;
            padding: 14px 20px;
            border-radius: 60px;
            border: none;
            font-size: 1rem;
            background: white;
            color: #0b0b42;
        }

        .nl-form input:focus {
            outline: none;
            box-shadow: 0 0 0 2px #00ced1;
        }

        .nl-form button {
            background: #00ced1;
            border: none;
            padding: 14px 32px;
            border-radius: 60px;
            font-weight: 600;
            color: #0b0b42;
            cursor: pointer;
            transition: 0.2s;
            font-size: 1rem;
        }

        .nl-form button:hover {
            background: #5C7EC0;
            color: white;
        }

        /* small circles in stay in the loop */
        .newsletter::before,
        .newsletter::after {
            content: "";
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: #a4adbd;
            opacity: 0.15;
            z-index: 0;
        }

        .newsletter::before {
            top: -60px;
            left: -60px;
        }

        .newsletter::after {
            bottom: -60px;
            right: -60px;
            width: 220px;
            height: 220px;
        }

        .newsletter h3,
        .newsletter p,
        .nl-form {
            position: relative;
            z-index: 1;
        }

        /* Responsive tweaks */
        @media (max-width: 1024px) {
            .events-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .event-card:last-child {
                grid-column: auto;
            }
        }

        @media (max-width: 768px) {
            .page-hero h1 {
                font-size: 2.2rem;
            }
            .featured-body {
                padding: 24px;
            }
            .featured-body h2 {
                font-size: 1.6rem;
            }
            .filter-bar {
                gap: 8px;
            }
            .filter-btn {
                padding: 6px 14px;
                font-size: 0.8rem;
            }
            .section-title {
                font-size: 1.5rem;
            }
            .newsletter {
                padding: 36px 24px;
            }
            .events-grid {
                grid-template-columns: 1fr;
            }
            .event-card:last-child {
                grid-column: auto;
            }
            .featured-card .dots-pattern,
            .featured-card .dots-pattern-bottom {
                display: none;
            }
        }

        /* Additional polish for strokes and hover states */
        .filter-btn {
            border: 1.5px solid white;
        }
        .filter-btn:hover,
        .filter-btn.active {
            border-color: #00ced1;
            background: #00ced1;
            color: #0b0b42;
        }

        /* Card contents white stroke and hover to #00ced1 */
        .event-card .event-tag {
            border: 1px solid white;
            transition: all 0.2s;
        }
        .event-card:hover .event-tag {
            background: #00ced1;
            border-color: #00ced1;
            color: #0b0b42;
        }

        /* Hover effect for card titles */
        .event-card:hover .card-body h3 {
            color: #00ced1;
        }

        /* Date badges */
        .feat-date-badge {
            background: rgba(11, 11, 66, 0.9);
            border: 1px solid #00ced1;
        }
        .card-date-badge {
            background: rgba(11, 11, 66, 0.9);
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

    <div class="page-hero">
        <div class="hero-label">Upcoming &amp; Past Events</div>
        <h1> Jumuiya Events & Anniversaries </h1>
        <p>A Decade of Coastal Collaboration</p>
    </div>

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

        <!-- FEATURED -->
        <div class="featured-label">Featured Event</div>
        <div class="featured-card">
            <div class="dots-pattern"></div>
            <div class="dots-pattern-bottom"></div>
            <div class="featured-image">
                <img src="assets/images/at10.png" alt="JABEIC 2024">
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

        <!-- GRID - 3 cards on top row, 1 card centered below -->
        <div class="section-title">More Events</div>
        <div class="events-grid">

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/agri summit.jpeg" alt="">
                    <div class="card-date-badge"><span class="day">24</span><span class="month">Feb</span></div>
                </div>

                <div class="card-body">
                    <div class="event-tag">Summit</div>
                    <h3>Agriculture Revitalization Summit</h3>
                    <p>a gathering poised to redifine the future of agriculture at the coast</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Feb 24, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Kilifi</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/fauna.jpeg" alt="">
                    <div class="card-date-badge"><span class="day">26</span><span class="month">Feb</span></div>
                </div>

                <div class="card-body">
                    <div class="event-tag">Workshop</div>
                    <h3>Ocean Conservation and Sustainable Coastal Development Workshop</h3>
                    <p>Focused on Policy making and Advocacy paticularly in relation to ocean consevation and sustainable coastal development.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Feb 26, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Mombasa</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/JUMGALA.png" alt="">
                    <div class="card-date-badge"><span class="day">02</span><span class="month">Apr</span></div>
                </div>
                
                <div class="card-body">
                    <div class="event-tag">Exhibitions</div>
                    <h3>gala dinner</h3>
                    
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Apr 2, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Pwani University, Kilifi</span>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="assets/images/jumy10.png" alt="">
                    <div class="card-date-badge"><span class="day">01</span><span class="month">Apr</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Forum</div>
                    <h3> Sports, Networking & Awards </h3>
                   
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Apr 1, 2026</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Vipingo Ridge, Kilifi</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- NEWSLETTER -->
        <div class="newsletter">
            <h3>Stay in the Loop</h3>
            <p>Get notified about upcoming regional conferences, forums, and investment events.</p>
            <div class="nl-form">
                <input type="email" placeholder="Enter your email address">
                <button>Notify Me</button>
            </div>
        </div>

    </div>

    <script>
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>

</html>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>