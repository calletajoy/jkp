<?php
/**
 * pages/jkp-tourism-blueprint.php
 * JKP Tourism and Cultural Heritage Blueprint 2030 Validation Article Page
 */

$pageTitle    = 'JKP Tourism and Cultural Heritage Blueprint 2030 Validation';
$currentPage  = 'news';
$heroTitle    = 'JKP Tourism Blueprint 2030';
$heroSubtitle = 'Validation Meeting';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/tourism.png';
$ogDescription = 'On Friday, 29th September 2023 at Muthu-Nyali Beach Hotel–Mombasa, Jumuiya ya Kaunti za Pwani (JKP) supported by Camões Institute – Portugal (Camões IP), held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030.';
$ogUrl = 'http://localhost:8000/jkp-tourism-blueprint';

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
    --sunset-orange: #FF7F50;
    --heritage-gold: #D4AF37;
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

/* Location Card */
.location-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.1) 0%, rgba(36,64,128,0.1) 100%);
    padding: 1.5rem;
    border-radius: 15px;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
    border-left: 4px solid var(--primary-blue);
}

.location-icon {
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.8rem;
}

.location-details h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
    font-family: 'Playfair Display', serif;
}

.location-details p {
    color: #555;
    margin: 0;
}

/* Partner Badge */
.partner-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: rgba(212, 175, 55, 0.1);
    color: var(--heritage-gold);
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin: 1rem 0;
}

.partner-badge i {
    font-size: 1.1rem;
}

/* Timeline */
.timeline {
    position: relative;
    margin: 3rem 0;
    padding-left: 2rem;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, var(--primary-blue), var(--heritage-gold));
    border-radius: 2px;
}

.timeline-item {
    position: relative;
    padding-left: 2rem;
    margin-bottom: 2rem;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -0.5rem;
    top: 0.5rem;
    width: 1rem;
    height: 1rem;
    background: var(--primary-blue);
    border-radius: 50%;
    border: 3px solid white;
    box-shadow: 0 0 0 2px var(--primary-blue);
}

.timeline-date {
    font-size: 0.9rem;
    font-weight: 600;
    color: var(--primary-blue);
    margin-bottom: 0.3rem;
}

.timeline-title {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
}

.timeline-desc {
    color: #666;
    line-height: 1.6;
}

/* Stakeholders Grid */
.stakeholders-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin: 2rem 0;
}

.stakeholder-item {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.stakeholder-item:hover {
    background: rgba(110,193,228,0.1);
    transform: translateX(5px);
}

.stakeholder-icon {
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.2rem;
}

.stakeholder-name {
    color: #555;
    font-weight: 500;
}

/* Image Grid - 12 images (4x3) */
.image-grid {
    margin: 3rem 0;
}

.image-grid h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin-bottom: 1.5rem;
    text-align: center;
}

.grid-container-4col {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin-bottom: 15px;
}

.grid-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    aspect-ratio: 1/1;
}

.grid-item:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 20px 30px -10px var(--primary-blue);
    z-index: 2;
}

.grid-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.grid-item:hover img {
    transform: scale(1.1);
}

/* Blueprint Objectives */
.objectives-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.objective-card {
    background: white;
    padding: 1.5rem;
    border-radius: 15px;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    display: flex;
    gap: 1rem;
}

.objective-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px var(--primary-blue);
    border-color: var(--primary-blue);
}

.objective-icon {
    width: 50px;
    height: 50px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.3rem;
    flex-shrink: 0;
}

.objective-content h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.objective-content p {
    color: #666;
    font-size: 0.95rem;
    line-height: 1.5;
    margin: 0;
}

/* Principles List */
.principles-list {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin: 2rem 0;
}

.principle-tag {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    color: white;
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.principle-tag:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px -5px var(--primary-blue);
}

/* Launch Announcement */
.launch-announcement {
    background: linear-gradient(135deg, var(--sunset-orange), var(--heritage-gold));
    color: white;
    padding: 2.5rem;
    border-radius: 20px;
    margin: 3rem 0;
    text-align: center;
    box-shadow: 0 20px 40px -10px rgba(0,0,0,0.2);
}

.launch-announcement h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.launch-announcement p {
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
    opacity: 0.95;
}

.launch-date {
    display: inline-block;
    background: white;
    color: var(--dark-blue);
    padding: 0.8rem 2rem;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    margin-top: 1rem;
}

.launch-date i {
    margin-right: 0.5rem;
    color: var(--sunset-orange);
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
@media (max-width: 1200px) {
    .grid-container-4col {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 992px) {
    .article-main {
        padding-right: 0;
        margin-bottom: 2rem;
    }
    
    .article-sidebar {
        padding-left: 0;
    }
    
    .grid-container-4col {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .stakeholders-grid,
    .objectives-grid,
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.8rem;
    }
    
    .grid-container-4col {
        grid-template-columns: 1fr;
    }
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .timeline {
        padding-left: 1rem;
    }
    
    .objective-card {
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
                    <h1>JKP Tourism and Cultural Heritage Blueprint 2030 Validation</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> September 30, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/tourism.png" alt="JKP Tourism Blueprint Validation Meeting">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <!-- Partner Badge -->
                    <div class="partner-badge">
                        <i class="bi bi-award"></i>
                        Supported by Camões Institute – Portugal (Camões IP)
                    </div>
                    
                    <!-- Location Card -->
                    <div class="location-card">
                        <div class="location-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="location-details">
                            <h4>Muthu-Nyali Beach Hotel – Mombasa</h4>
                            <p>Friday, 29th September 2023</p>
                        </div>
                    </div>
                    
                    <p class="lead">On Friday, 29th September 2023 at Muthu-Nyali Beach Hotel–Mombasa, Jumuiya ya Kaunti za Pwani (JKP) supported by Camões Institute – Portugal (Camões IP), an implementing partner of the Go Blue project on Tourism & Cultural heritage, held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030.</p>
                    
                    <p>The objective of the validation meeting was to go through the first draft of the JKP Tourism and Cultural Heritage Blueprint 2030 and discuss its findings and recommendations guided by a team from JKP TCH Technical team and Camões IP. This meeting was an integrated governance opportunity for confirming the blueprint on Tourism and Cultural Heritage with relevant JKP stakeholders led by the JKP Secretariat.</p>
                    
                    <!-- Stakeholders Grid -->
                    <h3 class="sub-heading">Stakeholders Present</h3>
                    <div class="stakeholders-grid">
                        <div class="stakeholder-item">
                            <div class="stakeholder-icon"><i class="bi bi-building"></i></div>
                            <span class="stakeholder-name">National Government</span>
                        </div>
                        <div class="stakeholder-item">
                            <div class="stakeholder-icon"><i class="bi bi-map"></i></div>
                            <span class="stakeholder-name">County Governments</span>
                        </div>
                        <div class="stakeholder-item">
                            <div class="stakeholder-icon"><i class="bi bi-briefcase"></i></div>
                            <span class="stakeholder-name">Private Sector</span>
                        </div>
                        <div class="stakeholder-item">
                            <div class="stakeholder-icon"><i class="bi bi-people"></i></div>
                            <span class="stakeholder-name">Civil Society</span>
                        </div>
                    </div>
                    
                    <p>The meeting brought together TCH stakeholders from the national government, County governments of the JKP region, private sector players and civil society organisations.</p>
                    
                    <!-- Development Timeline -->
                    <h3 class="sub-heading">Blueprint Development Journey</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">January 2023</div>
                            <div class="timeline-title">Project Commencement</div>
                            <div class="timeline-desc">Development of the Tourism and Cultural Heritage Blueprint commenced with a participatory, inclusive and holistic approach.</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">Early 2023</div>
                            <div class="timeline-title">Change Lab Workshop</div>
                            <div class="timeline-desc">Critical workshop to establish foundational principles and vision.</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">Mid 2023</div>
                            <div class="timeline-title">Writing Team Formation</div>
                            <div class="timeline-desc">Creation of a writing team with Kenya and Portuguese representatives from public, private sectors and academia.</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">2023</div>
                            <div class="timeline-title">Bilateral Immersive Experience</div>
                            <div class="timeline-desc">Writing team immersive experience in Kenya and Portugal.</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">2023</div>
                            <div class="timeline-title">Quality Assurance</div>
                            <div class="timeline-desc">Internal quality assurance committee review and bilateral meetings with key stakeholders.</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">September 2023</div>
                            <div class="timeline-title">Validation Meeting</div>
                            <div class="timeline-desc">Counties Stakeholders meetings and validation process.</div>
                        </div>
                    </div>
                </div>

                <!-- Image Grid - 12 images (4x3) -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Validation Meeting Highlights</h3>
                    
                    <!-- Row 1 -->
                    <div class="grid-container-4col">
                        <div class="grid-item">
                            <img src="/assets/images/tourism-1.jpg" alt="Tourism Blueprint Meeting">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-2.jpg" alt="Stakeholders Discussion">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-3.jpg" alt="Technical Session">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-4.jpg" alt="Group Photo">
                        </div>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="grid-container-4col">
                        <div class="grid-item">
                            <img src="/assets/images/tourism-5.jpg" alt="Presentation">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-6.jpg" alt="Breakout Session">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-7.jpg" alt="Networking">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-8.jpg" alt="Workshop">
                        </div>
                    </div>
                    
                    <!-- Row 3 -->
                    <div class="grid-container-4col">
                        <div class="grid-item">
                            <img src="/assets/images/tourism-9.jpg" alt="Panel Discussion">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-10.jpg" alt="Q&A Session">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-11.jpg" alt="Closing Remarks">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/tourism-12.jpg" alt="Group Photo">
                        </div>
                    </div>
                </div>

                <!-- Article Content Continued -->
                <div class="article-content">
                    <h3 class="sub-heading">Blueprint Objectives</h3>
                    
                    <div class="objectives-grid">
                        <div class="objective-card">
                            <div class="objective-icon"><i class="bi bi-cash-stack"></i></div>
                            <div class="objective-content">
                                <h4>Economic Gains</h4>
                                <p>Economic gains from tourism are felt by the community among others</p>
                            </div>
                        </div>
                        
                        <div class="objective-card">
                            <div class="objective-icon"><i class="bi bi-briefcase"></i></div>
                            <div class="objective-content">
                                <h4>Employment Opportunities</h4>
                                <p>Employment opportunities are available to the local residents</p>
                            </div>
                        </div>
                        
                        <div class="objective-card">
                            <div class="objective-icon"><i class="bi bi-shop"></i></div>
                            <div class="objective-content">
                                <h4>MSME Inclusion</h4>
                                <p>Micro, Small and Medium Enterprises owned by vulnerable individuals become part of the tourism value chain</p>
                            </div>
                        </div>
                        
                        <div class="objective-card">
                            <div class="objective-icon"><i class="bi bi-building"></i></div>
                            <div class="objective-content">
                                <h4>Infrastructure Benefits</h4>
                                <p>The community enjoys the benefits of infrastructure including health, education services, roads, water and communications</p>
                            </div>
                        </div>
                        
                        <div class="objective-card">
                            <div class="objective-icon"><i class="bi bi-tree"></i></div>
                            <div class="objective-content">
                                <h4>Sustainable Use</h4>
                                <p>Sustainable use of natural and cultural assets</p>
                            </div>
                        </div>
                    </div>
                    
                    <p>This mission was a key milestone in the advancement of the Go Blue Project sustainability and partnership enhancement.</p>
                    
                    <h3 class="sub-heading">Seven Guiding Principles</h3>
                    
                    <div class="principles-list">
                        <span class="principle-tag">Diversity</span>
                        <span class="principle-tag">Inclusion</span>
                        <span class="principle-tag">Equity</span>
                        <span class="principle-tag">Plurality</span>
                        <span class="principle-tag">Ethics</span>
                        <span class="principle-tag">Sustainability</span>
                        <span class="principle-tag">Responsible Tourism</span>
                    </div>
                    
                    <p>To attain the above, the Blueprint proposes the strict adherence to seven main principles: Diversity, Inclusion, Equity, Plurality, Ethics, Sustainability and Responsible Tourism.</p>
                    
                    <p>The Jumuiya ya Kaunti za Pwani Tourism and Cultural Heritage Blueprint 2030 was validated with inclusions.</p>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">2030</div>
                            <div class="stat-label">Blueprint Horizon</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">7</div>
                            <div class="stat-label">Guiding Principles</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5+</div>
                            <div class="stat-label">Stakeholder Groups</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">27</div>
                            <div class="stat-label">Oct Launch</div>
                        </div>
                    </div>
                    
                    <!-- Launch Announcement -->
                    <div class="launch-announcement">
                        <h3>Save the Date</h3>
                        <p>The JKP Tourism and Cultural Heritage Blueprint 2030 will be launched on</p>
                        <div class="launch-date">
                            <i class="bi bi-calendar-event"></i>
                            October 27, 2023
                        </div>
                        <p style="margin-top: 1rem; font-size: 1rem;">Venue to be communicated in due course</p>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/jkp-tourism-blueprint');
                        $articleTitle = urlencode('JKP Tourism and Cultural Heritage Blueprint 2030 Validation');
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
                        <li class="archive-item">
                            <a href="/news-updates?month=Jul 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                July 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                    </ul>
                </div>

                <!-- Previous News Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Previous News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/partnerships.png" alt="Partnerships">
                        </div>
                        <div class="prev-news-info">
                            <h6>Partnerships for Coastal Development and Blue Economy Investment</h6>
                            <small><i class="bi bi-calendar3"></i> Oct 6, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/iowa state.png" alt="Iowa State">
                        </div>
                        <div class="prev-news-info">
                            <h6>Iowa State University announces $25,000 scholarships</h6>
                            <small><i class="bi bi-calendar3"></i> Nov 21, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/signing collabo.png" alt="WCS Agreement">
                        </div>
                        <div class="prev-news-info">
                            <h6>Collaborative Framework Agreement for Marine Conservation</h6>
                            <small><i class="bi bi-calendar3"></i> Jan 26, 2024</small>
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
            <p>Subscribe to our newsletter to receive the latest news and updates on tourism and cultural heritage initiatives from Jumuiya ya Kaunti za Pwani.</p>
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