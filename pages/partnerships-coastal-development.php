<?php
/**
 * pages/partnerships-coastal-development.php
 * Partnerships for Coastal Development and Blue Economy Investment Article Page
 */

$pageTitle    = 'Partnerships for Coastal Development and Blue Economy Investment';
$currentPage  = 'news';
$heroTitle    = 'Partnerships for Coastal Development';
$heroSubtitle = 'Blue Economy Investment';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/partnerships.png';
$ogDescription = 'Community Action for Nature Conservation (CANCO) visited our office for a meeting focused on partnerships in coastal development projects to increase investments in the blue economy!';
$ogUrl = 'http://localhost:8000/partnerships-coastal-development';

$extraMeta = '
<meta property="og:title" content="' . $pageTitle . '" />
<meta property="og:description" content="' . $ogDescription . '" />
<meta property="og:image" content="' . $ogImage . '" />
<meta property="og:url" content="' . $ogUrl . '" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="Jumuiya ya Kaunti za Pwani" />
<meta property="og:locale" content="en_US" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="' . $pageTitle . '" />
<meta name="twitter:description" content="' . $ogDescription . '" />
<meta name="twitter:image" content="' . $ogImage . '" />
<meta name="twitter:site" content="@JumuiyaBloc" />
';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
    --turquoise: #00CED1;
    --soft-blue: #5C7EC0;
    --ocean-teal: #2e9cca;
    --marine-green: #2e8b57;
}

.article-wrapper {
    padding: 3rem 0;
}

/* Main Layout */
.article-main {
    padding-right: 2rem;
}

.article-sidebar {
    padding-left: 1rem;
}

/* Category Tag */
.category-tag {
    margin-bottom: 1.5rem;
}

.category-badge {
    display: inline-block;
    background: var(--primary-blue);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.category-badge:hover {
    background: var(--dark-blue);
    color: white;
}

/* Article Header */
.article-header {
    margin-bottom: 2rem;
}

.article-header h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin-bottom: 1rem;
    line-height: 1.3;
}

.article-meta {
    display: flex;
    align-items: center;
    gap: 2rem;
    color: #666;
    font-family: 'Montserrat', sans-serif;
    font-size: 0.95rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #e0e0e0;
}

.article-meta i {
    color: var(--primary-blue);
    margin-right: 0.5rem;
}

/* Featured Image */
.featured-image {
    margin-bottom: 2.5rem;
}

.featured-image img {
    width: 100%;
    max-height: 500px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
}

/* Secondary Image */
.secondary-image {
    margin: 2.5rem 0;
}

.secondary-image img {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
}

/* Article Content */
.article-content {
    font-family: 'Montserrat', sans-serif;
    line-height: 1.8;
    color: #444;
    margin-bottom: 3rem;
}

.article-content p {
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

.article-content .lead {
    font-size: 1.2rem;
    font-weight: 500;
    color: var(--dark-blue);
    border-left: 4px solid var(--primary-blue);
    padding-left: 1.5rem;
    margin: 2rem 0;
}

.article-content .sub-heading {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin: 2.5rem 0 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.article-content .sub-heading::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--primary-blue), var(--dark-blue));
    border-radius: 3px;
}

/* Partner Card */
.partner-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.1) 0%, rgba(36,64,128,0.1) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    border-left: 4px solid var(--primary-blue);
}

.partner-logo {
    width: 100px;
    height: 100px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 20px -5px rgba(0,0,0,0.1);
}

.partner-logo i {
    font-size: 3rem;
    color: var(--primary-blue);
}

.partner-info {
    flex: 1;
}

.partner-info h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.partner-info p {
    margin: 0;
    color: #555;
}

/* Agenda Items */
.agenda-list {
    margin: 2rem 0;
}

.agenda-item {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 2rem;
    padding: 1.5rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.agenda-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px var(--primary-blue);
    border-color: var(--primary-blue);
}

.agenda-icon {
    width: 60px;
    height: 60px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.8rem;
    flex-shrink: 0;
}

.agenda-content {
    flex: 1;
}

.agenda-content h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.8rem;
    font-family: 'Playfair Display', serif;
}

.agenda-content p {
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.agenda-date {
    display: inline-block;
    background: rgba(110,193,228,0.1);
    color: var(--primary-blue);
    padding: 0.3rem 1rem;
    border-radius: 50px;
    font-size: 0.85rem;
    margin-top: 1rem;
    font-weight: 500;
}

.agenda-date i {
    margin-right: 0.3rem;
}

.location-tag {
    background: rgba(46,139,87,0.1);
    color: var(--marine-green);
    padding: 0.3rem 1rem;
    border-radius: 50px;
    font-size: 0.85rem;
    margin-left: 0.5rem;
}

/* PSMA Section */
.psma-section {
    background: linear-gradient(135deg, rgba(46,156,202,0.05) 0%, rgba(46,139,87,0.05) 100%);
    padding: 2.5rem;
    border-radius: 20px;
    margin: 2.5rem 0;
    border: 1px solid rgba(46,156,202,0.2);
}

.psma-title {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.psma-title i {
    font-size: 2rem;
    color: var(--ocean-teal);
}

.psma-title h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin: 0;
}

.psma-description {
    color: #555;
    line-height: 1.7;
    margin-bottom: 1.5rem;
}

.psma-bullets {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.psma-bullet {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1rem;
    padding: 0.8rem;
    background: rgba(255,255,255,0.7);
    border-radius: 10px;
}

.psma-bullet i {
    color: var(--marine-green);
    font-size: 1.2rem;
    margin-top: 0.2rem;
}

.psma-bullet span {
    color: #555;
    line-height: 1.5;
}

.psma-highlight {
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 10px;
    margin-top: 1.5rem;
    border-left: 4px solid var(--ocean-teal);
    font-weight: 500;
}

.psma-highlight strong {
    color: var(--dark-blue);
}

/* Stats Highlight */
.stats-highlight {
    background: linear-gradient(135deg, rgba(110,193,228,0.1) 0%, rgba(36,64,128,0.1) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 20px;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--primary-blue);
    font-family: 'Playfair Display', serif;
    line-height: 1;
}

.stat-label {
    color: var(--dark-blue);
    font-weight: 600;
    margin-top: 0.5rem;
    font-size: 0.9rem;
}

/* Call to Action */
.cta-banner {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    padding: 2.5rem;
    border-radius: 20px;
    margin: 3rem 0;
    color: white;
    text-align: center;
}

.cta-banner h3 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.cta-banner p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.cta-button {
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    background: white;
    color: var(--dark-blue);
    padding: 1rem 2.5rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.cta-button:hover {
    background: var(--dark-blue);
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 15px 25px -5px rgba(0,0,0,0.2);
}

/* Share Buttons */
.share-section {
    margin: 3rem 0;
    padding: 2rem 0;
    border-top: 1px solid #e0e0e0;
    border-bottom: 1px solid #e0e0e0;
}

.share-title {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.share-buttons {
    display: flex;
    gap: 1rem;
}

.share-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-decoration: none;
    transition: all 0.3s ease;
}

.share-btn:hover {
    transform: translateY(-5px);
}

.share-btn.facebook {
    background: #3b5998;
}
.share-btn.twitter {
    background: #000;
}
.share-btn.linkedin {
    background: #0077b5;
}

/* Comments Section */
.comments-section {
    margin: 3rem 0;
}

.comments-section h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin-bottom: 2rem;
}

.comment-form {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 15px;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 1.5rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group.full-width {
    grid-column: span 2;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 1rem;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 3px rgba(110,193,228,0.1);
}

.form-group textarea {
    height: 150px;
    resize: vertical;
}

.save-details {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    margin-bottom: 1.5rem;
}

.save-details input[type="checkbox"] {
    width: 18px;
    height: 18px;
    cursor: pointer;
}

.save-details label {
    color: #666;
    font-size: 0.95rem;
    cursor: pointer;
}

.save-details label:hover {
    color: var(--primary-blue);
}

.submit-btn {
    background: var(--primary-blue);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.submit-btn:hover {
    background: var(--dark-blue);
    transform: translateY(-2px);
}

/* Sidebar Widgets */
.sidebar-widget {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
}

.widget-title {
    color: var(--dark-blue);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--primary-blue);
    position: relative;
}

.widget-title::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 50px;
    height: 2px;
    background: var(--dark-blue);
}

/* Search Widget */
.search-form {
    display: flex;
    gap: 0.5rem;
}

.search-input {
    flex: 1;
    padding: 0.75rem 1rem;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    outline: none;
}

.search-input:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 3px rgba(110,193,228,0.1);
}

.search-btn {
    background: var(--primary-blue);
    color: white;
    border: none;
    width: 45px;
    height: 45px;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.search-btn:hover {
    background: var(--dark-blue);
}

/* Category List */
.category-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.category-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px dashed #e0e0e0;
}

.category-item:last-child {
    border-bottom: none;
}

.category-link {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.category-link:hover {
    color: var(--primary-blue);
}

.category-link i {
    font-size: 0.8rem;
    color: var(--primary-blue);
}

.category-count {
    background: rgba(110,193,228,0.1);
    color: var(--primary-blue);
    padding: 0.2rem 0.6rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Archive List */
.archive-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.archive-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px dashed #e0e0e0;
}

.archive-item:last-child {
    border-bottom: none;
}

.archive-link {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.archive-link:hover {
    color: var(--primary-blue);
}

.archive-link i {
    font-size: 0.8rem;
    color: var(--primary-blue);
}

.archive-count {
    background: rgba(110,193,228,0.1);
    color: var(--primary-blue);
    padding: 0.2rem 0.6rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Previous News */
.prev-news-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #f0f0f0;
}

.prev-news-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.prev-news-thumb {
    width: 70px;
    height: 70px;
    min-width: 70px;
    border-radius: 8px;
    overflow: hidden;
}

.prev-news-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.prev-news-info h6 {
    font-size: 0.95rem;
    margin-bottom: 0.3rem;
    color: var(--dark-blue);
    font-weight: 600;
}

.prev-news-info small {
    color: #6c757d;
    font-size: 0.75rem;
}

/* Subscribe Section */
.subscribe-section {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    padding: 3rem 0;
    margin-top: 2rem;
    border-radius: 20px;
    color: white;
}

.subscribe-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.subscribe-content h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.subscribe-content p {
    margin-bottom: 2rem;
    opacity: 0.9;
}

.subscribe-form {
    display: flex;
    gap: 1rem;
    max-width: 500px;
    margin: 0 auto;
}

.subscribe-form input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: none;
    border-radius: 50px;
    font-family: 'Montserrat', sans-serif;
}

.subscribe-form button {
    background: var(--dark-blue);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.subscribe-form button:hover {
    background: #1a2e5c;
    transform: translateY(-2px);
}

/* Back to News */
.back-to-news {
    display: inline-block;
    margin-top: 2rem;
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.back-to-news:hover {
    color: var(--dark-blue);
    transform: translateX(-5px);
}

/* Responsive */
@media (max-width: 992px) {
    .article-main {
        padding-right: 0;
        margin-bottom: 2rem;
    }
    
    .article-sidebar {
        padding-left: 0;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .partner-card {
        flex-direction: column;
        text-align: center;
    }
    
    .agenda-item {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.8rem;
    }
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .psma-bullet {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<section class="article-wrapper">
    <div class="container">
        <div class="row">
            <!-- Main Article Column -->
            <div class="col-lg-8 article-main">
                <!-- Category Tag (clickable) -->
                <div class="category-tag" data-aos="fade-up">
                    <a href="/news-updates?category=Go Blue Component 1" class="category-badge">
                        <i class="bi bi-tag"></i> Go Blue Component 1
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>Partnerships for Coastal Development and Blue Economy Investment</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> October 6, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/partnerships.png" alt="Partnerships Meeting">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">Community Action for Nature Conservation (CANCO) visited our office for a meeting focused on partnerships in coastal development projects to increase investments in the blue economy!</p>
                    
                    <!-- Partner Card -->
                    <div class="partner-card">
                        <div class="partner-logo">
                            <i class="bi bi-tree"></i>
                        </div>
                        <div class="partner-info">
                            <h4>Community Action for Nature Conservation (CANCO)</h4>
                            <p>Partnering for sustainable coastal development and blue economy investments</p>
                        </div>
                    </div>
                    
                    <h3 class="sub-heading">Meeting Highlights</h3>
                    
                    <div class="agenda-list">
                        <!-- Agenda Item 1 -->
                        <div class="agenda-item">
                            <div class="agenda-icon">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div class="agenda-content">
                                <h4>2023 Jumuiya Agribusiness and Blue Economy Conference</h4>
                                <p>Attendance at the conference which will be hosted on the Mama Ngina beachfront in Mombasa from November 23rd to November 30th, 2023.</p>
                                <span class="agenda-date">
                                    <i class="bi bi-calendar3"></i> Nov 23-30, 2023
                                    <span class="location-tag"><i class="bi bi-geo-alt"></i> Mama Ngina Beachfront, Mombasa</span>
                                </span>
                            </div>
                        </div>
                        
                        <!-- Agenda Item 2 -->
                        <div class="agenda-item">
                            <div class="agenda-icon">
                                <i class="bi bi-fish"></i>
                            </div>
                            <div class="agenda-content">
                                <h4>World Fisheries Day Participation</h4>
                                <p>We are planning to celebrate World Fisheries Day in Taita Taveta County on November 21, 2023.</p>
                                <span class="agenda-date">
                                    <i class="bi bi-calendar3"></i> November 21, 2023
                                    <span class="location-tag"><i class="bi bi-geo-alt"></i> Taita Taveta County</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secondary Image -->
                <div class="secondary-image" data-aos="fade-up">
                    <img src="/assets/images/partnerships-meeting.jpg" alt="Partnerships Meeting Discussion">
                </div>

                <!-- Article Content Continued -->
                <div class="article-content">
                    <h3 class="sub-heading">Partnerships in coastal development projects to increase investments in the blue economy!</h3>
                    
                    <!-- PSMA Section -->
                    <div class="psma-section">
                        <div class="psma-title">
                            <i class="bi bi-shield-check"></i>
                            <h3>Advocating for the Implementation of the Port State Measures Agreement in Kenya</h3>
                        </div>
                        
                        <p class="psma-description">Our discussion focused on advocating for the implementation of the Port State Measures Agreement (PSMA) and the contribution of the Go Blue programme component 3 interventions on Maritime Security in building the capacities of the Kenya Fisheries Service (KeFS) in Monitoring, Control, and Surveillance (MCS) to root out Illegal, Unreported, and Unregulated (IUU) fishing in Kenya's Exclusive Economic Zone (EEZ).</p>
                        
                        <h4 style="color: var(--dark-blue); margin: 1.5rem 0 1rem;">The PSMA establishes a duty for port states to:</h4>
                        
                        <div class="psma-bullets">
                            <div class="psma-bullet">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Designate ports for use by foreign-flagged vessels</span>
                            </div>
                            <div class="psma-bullet">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Inspect foreign-flagged fishing vessels and other vessels supporting or servicing fishing vessels</span>
                            </div>
                            <div class="psma-bullet">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Deny port entry or port use to IUU vessels</span>
                            </div>
                        </div>
                        
                        <div class="psma-highlight">
                            <strong>Implementation and domestication of this agreement will ensure that Kenya benefits from the stock landing by Distant Water Fishing Nations (DWFN).</strong>
                        </div>
                    </div>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">8</div>
                            <div class="stat-label">Days Conference</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">21</div>
                            <div class="stat-label">Nov (Fisheries Day)</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">23-30</div>
                            <div class="stat-label">Nov Conference</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">IUU</div>
                            <div class="stat-label">Fighting Illegal Fishing</div>
                        </div>
                    </div>
                    
                    <!-- Call to Action Banner -->
                    <div class="cta-banner">
                        <h3>Let's work together</h3>
                        <p>Drive sustainable growth in the blue economy sector, protect our oceans, and secure our future.</p>
                        <a href="/contact" class="cta-button">
                            Partner With Us <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/partnerships-coastal-development');
                        $articleTitle = urlencode('Partnerships for Coastal Development and Blue Economy Investment');
                        ?>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $articleUrl; ?>" target="_blank" class="share-btn facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo $articleUrl; ?>&text=<?php echo $articleTitle; ?>" target="_blank" class="share-btn twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $articleUrl; ?>&title=<?php echo $articleTitle; ?>" target="_blank" class="share-btn linkedin">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Comments Section with Save Details -->
                <div class="comments-section" data-aos="fade-up">
                    <h3>Leave a Comment</h3>
                    <form class="comment-form" id="commentForm">
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Your Name *" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" placeholder="Your Email *" required>
                            </div>
                        </div>
                        <div class="form-group full-width">
                            <textarea id="comment" placeholder="Your Comment *" required></textarea>
                        </div>
                        <div class="save-details">
                            <input type="checkbox" id="saveInfo" checked>
                            <label for="saveInfo">Save my name and email in this browser for the next time I comment</label>
                        </div>
                        <button type="submit" class="submit-btn">Post Comment</button>
                    </form>
                </div>

                <!-- Back to News -->
                <a href="/news-updates" class="back-to-news">
                    <i class="bi bi-arrow-left"></i> Back to News
                </a>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4 article-sidebar">
                <!-- Search Widget -->
                <div class="sidebar-widget" data-aos="fade-up">
                    <h4 class="widget-title">Search News</h4>
                    <form class="search-form" action="/news-updates" method="GET">
                        <input type="text" class="search-input" placeholder="Search articles..." name="search">
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Categories Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="50">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="category-list">
                        <li class="category-item">
                            <a href="/news-updates?category=Go Blue Component 1" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue Component 1
                            </a>
                            <span class="category-count">8</span>
                        </li>
                        <li class="category-item">
                            <a href="/news-updates?category=Go Blue News" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue News
                            </a>
                            <span class="category-count">5</span>
                        </li>
                        <li class="category-item">
                            <a href="/news-updates?category=JKP News Updates" class="category-link">
                                <i class="bi bi-folder"></i>
                                JKP News Updates
                            </a>
                            <span class="category-count">7</span>
                        </li>
                    </ul>
                </div>

                <!-- Archives Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="widget-title">Archives</h4>
                    <ul class="archive-list">
                        <li class="archive-item">
                            <a href="/news-updates?month=Oct 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                October 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Sep 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                September 2023
                            </a>
                            <span class="archive-count">4</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Aug 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                August 2023
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                    </ul>
                </div>

                <!-- Previous News Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Previous News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/iowa state.png" alt="Iowa State University">
                        </div>
                        <div class="prev-news-info">
                            <h6>Iowa State University announces $25,000 scholarships</h6>
                            <small><i class="bi bi-calendar3"></i> Nov 21, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/signing collabo.png" alt="WCS JKP Agreement">
                        </div>
                        <div class="prev-news-info">
                            <h6>Collaborative Framework Agreement for Marine Conservation</h6>
                            <small><i class="bi bi-calendar3"></i> Jan 26, 2024</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/ecoblue.png" alt="Blue Economy Training">
                        </div>
                        <div class="prev-news-info">
                            <h6>Blue Economy vocational training program</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 29, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe Section -->
<section class="subscribe-section" data-aos="fade-up">
    <div class="container">
        <div class="subscribe-content">
            <h3>Stay Updated</h3>
            <p>Subscribe to our newsletter to receive the latest news and partnership opportunities from Jumuiya ya Kaunti za Pwani.</p>
            <form class="subscribe-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</section>

<script>
// Save user details in browser localStorage
document.addEventListener('DOMContentLoaded', function() {
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const saveCheckbox = document.getElementById('saveInfo');
    
    // Load saved data if available
    if (localStorage.getItem('savedName')) {
        nameInput.value = localStorage.getItem('savedName');
    }
    if (localStorage.getItem('savedEmail')) {
        emailInput.value = localStorage.getItem('savedEmail');
    }
    
    // Save data when form is submitted
    document.getElementById('commentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (saveCheckbox.checked) {
            localStorage.setItem('savedName', nameInput.value);
            localStorage.setItem('savedEmail', emailInput.value);
        } else {
            // Remove saved data if unchecked
            localStorage.removeItem('savedName');
            localStorage.removeItem('savedEmail');
        }
        
        // Here you would normally send the comment to your server
        alert('Thank you for your comment! (This is a demo - comment would be saved to database)');
        this.reset();
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>