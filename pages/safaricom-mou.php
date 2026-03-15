<?php
/**
 * pages/safaricom-mou.php
 * Jumuiya and Safaricom PLC signed a Memorandum of Understanding Article Page
 */

$pageTitle    = 'Jumuiya and Safaricom PLC signed a Memorandum of Understanding';
$currentPage  = 'news';
$heroTitle    = 'Jumuiya & Safaricom MOU';
$heroSubtitle = 'Digital Transformation Partnership';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/saf-plc.png';
$ogDescription = 'On June 15, 2023, Jumuiya Ya Kaunti Za Pwani – JKP and Safaricom PLC signed a Memorandum of Understanding for the purpose of facilitating a collaborative framework in the provision of sustainable and transformative digital solutions to JKP counties.';
$ogUrl = 'http://localhost:8000/safaricom-mou';

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
    --safaricom-green: #00A94F;
    --safaricom-teal: #1B7C7C;
    --digital-purple: #6C3483;
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
    font-size: 2rem;
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

/* MOU Badge */
.mou-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, var(--safaricom-green), var(--safaricom-teal));
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
}

.mou-badge i {
    font-size: 1.1rem;
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

/* Partner Cards */
.partner-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin: 2rem 0;
}

.partner-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
}

.partner-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--safaricom-green);
    border-color: var(--safaricom-green);
}

.partner-logo {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, var(--safaricom-green), var(--safaricom-teal));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2.5rem;
}

.partner-card h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.partner-card .partner-type {
    display: inline-block;
    background: rgba(0,169,79,0.1);
    color: var(--safaricom-green);
    padding: 0.3rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

/* Image Grid - 2 images */
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

.grid-container-2col {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.grid-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    aspect-ratio: 16/9;
}

.grid-item:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 20px 30px -10px var(--safaricom-green);
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

/* Digital Solutions Grid */
.solutions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.solution-card {
    background: linear-gradient(135deg, rgba(0,169,79,0.05) 0%, rgba(27,124,124,0.05) 100%);
    padding: 1.8rem;
    border-radius: 15px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,169,79,0.1);
}

.solution-card:hover {
    transform: translateY(-8px);
    background: white;
    box-shadow: 0 20px 30px -10px var(--safaricom-green);
    border-color: var(--safaricom-green);
}

.solution-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--safaricom-green), var(--safaricom-teal));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.solution-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.8rem;
    font-family: 'Playfair Display', serif;
}

.solution-card p {
    color: #666;
    line-height: 1.6;
    margin: 0;
    font-size: 0.95rem;
}

/* Objectives List */
.objectives-list {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.objective-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.2rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.objective-item:hover {
    background: linear-gradient(135deg, rgba(0,169,79,0.05), rgba(27,124,124,0.05));
    transform: translateX(5px);
}

.objective-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--safaricom-green), var(--safaricom-teal));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.objective-text {
    color: #555;
    line-height: 1.6;
    flex: 1;
    font-weight: 500;
}

/* Stats Highlight */
.stats-highlight {
    background: linear-gradient(135deg, rgba(0,169,79,0.1) 0%, rgba(27,124,124,0.1) 100%);
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
    color: var(--safaricom-green);
    font-family: 'Playfair Display', serif;
    line-height: 1;
}

.stat-label {
    color: var(--dark-blue);
    font-weight: 600;
    margin-top: 0.5rem;
    font-size: 0.9rem;
}

/* County Tags */
.county-tags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin: 2rem 0;
}

.county-tag {
    background: rgba(0,169,79,0.1);
    color: var(--dark-blue);
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    border: 1px solid rgba(0,169,79,0.3);
    transition: all 0.3s ease;
}

.county-tag:hover {
    background: var(--safaricom-green);
    color: white;
    transform: translateY(-2px);
}

/* Partners Grid */
.partners-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.partner-item {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 10px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.partner-item:hover {
    background: white;
    transform: translateY(-5px);
    box-shadow: 0 10px 20px -10px var(--safaricom-green);
    border-color: var(--safaricom-green);
}

.partner-item h5 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--dark-blue);
    margin: 0;
}

/* Quote Card */
.quote-card {
    background: linear-gradient(135deg, rgba(0,169,79,0.05) 0%, rgba(27,124,124,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--safaricom-green);
    font-style: italic;
}

.quote-text {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 0.5rem;
}

.quote-author {
    font-weight: 600;
    color: var(--safaricom-green);
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
    .solutions-grid,
    .partners-grid {
        grid-template-columns: repeat(2, 1fr);
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
    
    .partner-cards,
    .grid-container-2col,
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .solutions-grid,
    .partners-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.6rem;
    }
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
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
                    <a href="/news-updates?category=JKP News Updates" class="category-badge">
                        <i class="bi bi-tag"></i> JKP News Updates
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>Jumuiya and Safaricom PLC signed a Memorandum of Understanding</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> June 16, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- MOU Badge -->
                <div class="mou-badge" data-aos="fade-up">
                    <i class="bi bi-file-earmark-text"></i>
                    Memorandum of Understanding
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/saf-plc.png" alt="Jumuiya and Safaricom PLC Signing Ceremony">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">On June 15, 2023, Jumuiya Ya Kaunti Za Pwani – JKP and Safaricom PLC signed a Memorandum of Understanding for the purpose of facilitating a collaborative framework in the provision of sustainable and transformative digital solutions to JKP counties.</p>
                    
                    <!-- Partner Cards -->
                    <div class="partner-cards">
                        <div class="partner-card">
                            <div class="partner-logo"><i class="bi bi-building"></i></div>
                            <h3>Jumuiya ya Kaunti za Pwani</h3>
                            <div class="partner-type">Regional Economic Bloc</div>
                            <p>6 Coastal Counties</p>
                        </div>
                        
                        <div class="partner-card">
                            <div class="partner-logo"><i class="bi bi-wifi"></i></div>
                            <h3>Safaricom PLC</h3>
                            <div class="partner-type">Telecommunications Leader</div>
                            <p>Digital Solutions Provider</p>
                        </div>
                    </div>
                </div>

                <!-- Image Grid - 2 images -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Signing Ceremony</h3>
                    <div class="grid-container-2col">
                        <div class="grid-item">
                            <img src="/assets/images/safaricom-1.jpg" alt="Signing Ceremony 1">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/safaricom-2.jpg" alt="Signing Ceremony 2">
                        </div>
                    </div>
                </div>

                <!-- Key Initiatives -->
                <div class="article-content">
                    <h3 class="sub-heading">Key Initiatives</h3>
                    
                    <div class="solutions-grid">
                        <div class="solution-card">
                            <div class="solution-icon"><i class="bi bi-database"></i></div>
                            <h4>World-Class Data Center</h4>
                            <p>Establishment of a Kenya coast data center in Mombasa</p>
                        </div>
                        
                        <div class="solution-card">
                            <div class="solution-icon"><i class="bi bi-wifi"></i></div>
                            <h4>Free Internet Access</h4>
                            <p>Free internet at select urban centers, vocational training centers, and hospitals</p>
                        </div>
                        
                        <div class="solution-card">
                            <div class="solution-icon"><i class="bi bi-building"></i></div>
                            <h4>MSME Innovation Hubs</h4>
                            <p>Jumuiya MSME hub with innovation labs across the six counties</p>
                        </div>
                    </div>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Counties</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Data Center</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Innovation Labs</div>
                        </div>
                    </div>
                    
                    <!-- Objectives -->
                    <h3 class="sub-heading">Memorandum Objectives</h3>
                    
                    <div class="objectives-list">
                        <div class="objective-item">
                            <div class="objective-icon"><i class="bi bi-diagram-3"></i></div>
                            <div class="objective-text">Facilitate collaborative framework to provide sustainable and transformative digital solutions to JKP counties</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-icon"><i class="bi bi-building"></i></div>
                            <div class="objective-text">Jumuiya MSME hub with innovation labs across the six counties</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-icon"><i class="bi bi-cpu"></i></div>
                            <div class="objective-text">Tech solutions for JKP's Jumuiya 2030 vision in key sectors</div>
                        </div>
                        <div class="objective-item">
                            <div class="objective-icon"><i class="bi bi-people"></i></div>
                            <div class="objective-text">Quarterly Sector Working Groups exchange for education and innovation stakeholders</div>
                        </div>
                    </div>
                    
                    <!-- Quote Card -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "The purpose of the memorandum is to facilitate a collaborative framework to provide sustainable and transformative digital solutions to JKP counties."
                        </div>
                        <div class="quote-author">
                            - Jumuiya & Safaricom Joint Statement
                        </div>
                    </div>
                    
                    <!-- Present Counties -->
                    <h3 class="sub-heading">Present County Representatives</h3>
                    
                    <div class="county-tags">
                        <span class="county-tag">Kilifi County</span>
                        <span class="county-tag">Mombasa County</span>
                        <span class="county-tag">Taita Taveta County</span>
                        <span class="county-tag">Tana River County</span>
                    </div>
                    
                    <!-- Partners Present -->
                    <h3 class="sub-heading">Partners in Attendance</h3>
                    
                    <div class="partners-grid">
                        <div class="partner-item">
                            <h5>PMAESA</h5>
                        </div>
                        <div class="partner-item">
                            <h5>MDF Training</h5>
                        </div>
                        <div class="partner-item">
                            <h5>Safaricom Partners</h5>
                        </div>
                    </div>
                    
                    <p>Present during the signing were JKP counties' representatives from Kilifi, Mombasa, Taita Taveta, and Tana River counties, as well as JKP partners; PMAESA, MDF Training, and Safaricom Partners.</p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/safaricom-mou');
                        $articleTitle = urlencode('Jumuiya and Safaricom PLC signed a Memorandum of Understanding');
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
                            <a href="/news-updates?month=Jun 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                June 2023
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=May 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                May 2023
                            </a>
                            <span class="archive-count">4</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Apr 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                April 2023
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
                            <img src="/assets/images/rege.png" alt="ReFaCE Forum">
                        </div>
                        <div class="prev-news-info">
                            <h6>Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 23, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/jum-eco.png" alt="Italy Mission">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya Blue Economy Mission to Italy</h6>
                            <small><i class="bi bi-calendar3"></i> Jul 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/eth-oromia.png" alt="Ethiopia Visit">
                        </div>
                        <div class="prev-news-info">
                            <h6>Ethiopian Oromia Tourism Commission courtesy visit</h6>
                            <small><i class="bi bi-calendar3"></i> Aug 8, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on digital transformation partnerships and technology initiatives from Jumuiya ya Kaunti za Pwani.</p>
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