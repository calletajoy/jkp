<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events — CityWall</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/events.css">
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
        <h1>Regional Events &amp; Conferences</h1>
        <p>Discover investment forums, agribusiness conferences, and public engagement events happening across the Kenyan coast.</p>
    </div>

    <div class="filter-bar">
        <button class="filter-btn active">All Events</button>
        <button class="filter-btn">Conferences</button>
        <button class="filter-btn">Forums</button>
        <button class="filter-btn">Exhibitions</button>
        <button class="filter-btn">Workshops</button>
        <button class="filter-btn">2024</button>
        <button class="filter-btn">2025</button>
    </div>

    <div class="main">

        <!-- FEATURED -->
        <div class="featured-label">Featured Event</div>
        <div class="featured-card">
            <div class="featured-image">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&q=80" alt="JABEIC 2024">
                <div class="feat-date-badge">
                    <span class="day">27</span>
                    <span class="month">Nov</span>
                </div>
            </div>
            <div class="featured-body">
                <div class="event-tag">Agribusiness · Blue Economy</div>
                <h2>6th JABEIC 2024 — Voi, Taita Taveta</h2>
                <p>The 6th Jumuiya Agribusiness &amp; Blue Economy Investment Conference. Three days of high-level plenary sessions, investor forums, gala dinner, and exhibitions unlocking Green &amp; Blue Economy investments.</p>
                <div class="meta-row">
                    <div class="meta-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" />
                            <line x1="16" y1="2" x2="16" y2="6" />
                            <line x1="8" y1="2" x2="8" y2="6" />
                            <line x1="3" y1="10" x2="21" y2="10" />
                        </svg>
                        Nov 27 – 29, 2024
                    </div>
                    <div class="meta-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        Voi, Taita Taveta County
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

        <!-- GRID -->
        <div class="section-title">More Events</div>
        <div class="events-grid">

            <div class="event-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1587825140708-dfaf72ae4b04?w=600&q=80" alt="">
                    <div class="card-date-badge"><span class="day">15</span><span class="month">Jan</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Forum</div>
                    <h3>Coastal Investment Pre-Forum 2025</h3>
                    <p>A pre-conference investor dialogue series connecting capital with bankable coastal projects across Mombasa, Kilifi, and Kwale.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Jan 15–16, 2025</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Mombasa</span>
                    </div>
                    <div class="card-footer-row">
                        <div class="price-tag">KES 10,000</div>
                        <a href="event-detail.html" class="btn-outline">Details →</a>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1591115765373-5207764f72e7?w=600&q=80" alt="">
                    <div class="card-date-badge"><span class="day">08</span><span class="month">Mar</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Exhibition</div>
                    <h3>Go Kenya Coast Tourism Expo 2025</h3>
                    <p>Showcasing the cultural heritage of Lamu, pristine beaches, and unique coastal tourism destinations to national and international travel operators.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Mar 8–10, 2025</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Lamu</span>
                    </div>
                    <div class="card-footer-row">
                        <div class="price-tag">Free Entry</div>
                        <a href="event-detail.html" class="btn-outline">Details →</a>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=600&q=80" alt="">
                    <div class="card-date-badge"><span class="day">22</span><span class="month">Apr</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Workshop</div>
                    <h3>Youth Agribusiness Bootcamp — Kilifi</h3>
                    <p>A three-day intensive workshop empowering young agripreneurs with skills in value-chain management, access to finance, and digital market tools.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Apr 22–24, 2025</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Kilifi</span>
                    </div>
                    <div class="card-footer-row">
                        <div class="price-tag">KES 5,000</div>
                        <a href="event-detail.html" class="btn-outline">Details →</a>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1530099486328-e021101a494a?w=600&q=80" alt="">
                    <div class="card-date-badge"><span class="day">14</span><span class="month">Jun</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Conference</div>
                    <h3>JKP Blue Economy Summit — Kwale</h3>
                    <p>Dedicated conference on sustainable fisheries, marine conservation, and ocean-based industries for the six coastal counties of Kenya.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Jun 14–15, 2025</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Diani, Kwale</span>
                    </div>
                    <div class="card-footer-row">
                        <div class="price-tag">KES 10,000</div>
                        <a href="event-detail.html" class="btn-outline">Details →</a>
                    </div>
                </div>
            </div>

            <div class="event-card">
                <div class="card-image">
                    <img src="https://images.unsplash.com/photo-1560523159-6b681a1e1852?w=600&q=80" alt="">
                    <div class="card-date-badge"><span class="day">03</span><span class="month">Aug</span></div>
                </div>
                <div class="card-body">
                    <div class="event-tag">Forum</div>
                    <h3>CAIP Investors Roundtable — Tana River</h3>
                    <p>Exploring immediate-term opportunities for County Aggregation and Industrial Parks to foster industrialization and job creation.</p>
                    <div class="card-meta">
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                <line x1="16" y1="2" x2="16" y2="6" />
                                <line x1="8" y1="2" x2="8" y2="6" />
                                <line x1="3" y1="10" x2="21" y2="10" />
                            </svg>Aug 3, 2025</span>
                        <span><svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>Hola, Tana River</span>
                    </div>
                    <div class="card-footer-row">
                        <div class="price-tag">KES 10,000</div>
                        <a href="event-detail.html" class="btn-outline">Details →</a>
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

    <footer>
        <p>&copy; 2024 <span>CityWall</span> &amp; <span>Jumuiya ya Kaunti za Pwani</span>. All rights reserved.</p>
    </footer>

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
