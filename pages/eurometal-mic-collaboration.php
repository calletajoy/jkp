<?php
/**
 * pages/eurometal-mic-collaboration.php
 * Eurometal and MIC Collaboration for Development Projects Article Page
 */

$pageTitle    = 'Eurometal and MIC to collaborate on development projects';
$currentPage  = 'news';
$heroTitle    = 'Eurometal and MIC Collaboration';
$heroSubtitle = 'Investment Partnership for Development Projects';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/eurometal.png';
$ogDescription = 'On Thursday, September 14, 2023, Jumuiya ya Kaunti za Pwani (JKP) introduced Eurometal, a metal and steel construction company based in Kosovo, to the Mombasa Investment Cooperation (MIC).';
$ogUrl = 'http://localhost:8000/eurometal-mic-collaboration';

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
    --steel-gray: #4A5568;
    --metal-silver: #CBD5E0;
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

/* Featured Image - IMPROVED */
.featured-image {
    margin-bottom: 2.5rem;
    background: #f5f5f5;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    width: 100%;
    max-height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.featured-image img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: contain; /* Changed from 'cover' to 'contain' to show full image */
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    background-color: #f5f5f5; /* Background for any transparent areas */
}

/* Optional: Add a loading placeholder */
.featured-image.loading {
    background: linear-gradient(110deg, #ececec 8%, #f5f5f5 18%, #ececec 33%);
    background-size: 200% 100%;
    animation: 1.5s shine linear infinite;
}

@keyframes shine {
    to {
        background-position-x: -200%;
    }
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

/* Company Cards */
.company-cards {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.company-card {
    background: white;
    border-radius: 15px;
    padding: 2rem 1.5rem;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
}

.company-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
    border-color: var(--primary-blue);
}

.company-logo {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2.5rem;
}

.company-card h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.company-card .company-type {
    display: inline-block;
    background: rgba(110,193,228,0.1);
    color: var(--primary-blue);
    padding: 0.3rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.company-card .company-location {
    color: #666;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.3rem;
}

.company-card .company-location i {
    color: var(--primary-blue);
}

/* Quote Card */
.quote-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.05) 0%, rgba(36,64,128,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
    position: relative;
}

.quote-card::before {
    content: '"';
    position: absolute;
    top: -20px;
    left: 20px;
    font-size: 6rem;
    color: rgba(110,193,228,0.2);
    font-family: serif;
}

.quote-text {
    font-size: 1.2rem;
    font-style: italic;
    color: #555;
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.quote-author {
    font-weight: 700;
    color: var(--dark-blue);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.quote-author i {
    color: var(--primary-blue);
}

.quote-author span {
    font-weight: 400;
    color: #666;
    font-size: 0.9rem;
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

/* Investment Highlights */
.highlights-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.highlight-item {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
}

.highlight-item:hover {
    background: white;
    box-shadow: 0 10px 25px -10px var(--primary-blue);
    transform: translateY(-5px);
}

.highlight-icon {
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: var(--primary-blue);
    font-size: 1.8rem;
    box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
}

.highlight-item h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
}

.highlight-item p {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

/* Company Expertise */
.expertise-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 1.5rem 0;
}

.expertise-tag {
    background: rgba(110,193,228,0.1);
    color: var(--dark-blue);
    padding: 0.5rem 1.2rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    border: 1px solid rgba(110,193,228,0.3);
    transition: all 0.3s ease;
}

.expertise-tag:hover {
    background: var(--primary-blue);
    color: white;
    transform: translateY(-2px);
}

/* Meeting Details */
.meeting-details {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 15px;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.meeting-icon {
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

.meeting-info h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.meeting-info p {
    color: #666;
    margin: 0;
}

.meeting-info .date {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 0.5rem;
}

.meeting-info .date span {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    color: #555;
    font-size: 0.9rem;
}

.meeting-info .date i {
    color: var(--primary-blue);
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

/* Previous News - IMPROVED */
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
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
}

.prev-news-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This ensures thumbnails fill the space nicely */
    transition: transform 0.3s ease;
}

.prev-news-thumb img:hover {
    transform: scale(1.1);
}

/* Optional: Add a fallback for images that don't load */
.prev-news-thumb img.error {
    object-fit: contain;
    padding: 10px;
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

/* Image Error Handling */
img {
    display: block;
}

img[src=""], 
img:not([src]) {
    opacity: 0;
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
    
    .company-cards,
    .highlights-grid,
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
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .meeting-details {
        flex-direction: column;
        text-align: center;
    }
    
    .featured-image {
        max-height: 300px;
    }
    
    .featured-image img {
        max-height: 300px;
    }
}

/* Image Loading Animation */
.image-loading {
    position: relative;
    overflow: hidden;
}

.image-loading::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    animation: loading 1.5s infinite;
}

@keyframes loading {
    0% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
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
                    <h1>Eurometal and MIC to collaborate on development projects</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> September 25, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image - IMPROVED with error handling -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/eurometal.png" 
                         alt="Eurometal and MIC Meeting"
                         onerror="this.onerror=null; this.src='/assets/images/placeholder.png'; this.classList.add('error');"
                         loading="lazy">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <!-- Meeting Details -->
                    <div class="meeting-details">
                        <div class="meeting-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="meeting-info">
                            <h4>Introducing Eurometal to Mombasa Investment Cooperation</h4>
                            <p>Thursday, September 14, 2023</p>
                            <div class="date">
                                <span><i class="bi bi-geo-alt"></i> Mombasa, Kenya</span>
                                <span><i class="bi bi-flag"></i> JKP & MIC Collaboration</span>
                            </div>
                        </div>
                    </div>
                    
                    <p class="lead">On Thursday, September 14, 2023, Jumuiya ya Kaunti za Pwani (JKP) introduced Eurometal, a metal and steel construction company based in Kosovo, to the Mombasa Investment Cooperation (MIC). Eurometal is one of the largest manufacturers and suppliers of metal sheets, roofs, and façade panels across Europe. They are also involved in the execution of some of the most challenging and large-scale structural steel fabrication and erection jobs for almost all types of industrial projects.</p>
                    
                    <!-- Company Cards -->
                    <h3 class="sub-heading">The Partners</h3>
                    <div class="company-cards">
                        <!-- Eurometal Card -->
                        <div class="company-card">
                            <div class="company-logo">
                                <i class="bi bi-building"></i>
                            </div>
                            <h3>Eurometal</h3>
                            <div class="company-type">Metal & Steel Construction</div>
                            <div class="company-location">
                                <i class="bi bi-geo-alt"></i> Kosovo, Europe
                            </div>
                        </div>
                        
                        <!-- MIC Card -->
                        <div class="company-card">
                            <div class="company-logo">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <h3>Mombasa Investment Cooperation</h3>
                            <div class="company-type">Investment Promotion</div>
                            <div class="company-location">
                                <i class="bi bi-geo-alt"></i> Mombasa, Kenya
                            </div>
                        </div>
                    </div>
                    
                    <!-- Quote Card -->
                    <div class="quote-card">
                        <div class="quote-text">
                            Eurometal's CEO, Mr. Njazi Musliu, expressed his company's interest in investing in the Coast region.
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-chat-quote"></i>
                            Eurometal's CEO, Mr. Njazi Musliu
                        </div>
                    </div>
                    
                    <p>The meeting was aimed at advancing collaboration with Mombasa County to bring Eurometal's expertise to the Coast region. JKP believes that Eurometal's investment in the region will boost the local economy, create jobs, and contribute to the development of infrastructure.</p>
                    
                    <!-- Company Expertise -->
                    <h3 class="sub-heading">Eurometal's Expertise</h3>
                    <div class="expertise-tags">
                        <span class="expertise-tag">Metal Sheets</span>
                        <span class="expertise-tag">Roofing Systems</span>
                        <span class="expertise-tag">Façade Panels</span>
                        <span class="expertise-tag">Structural Steel</span>
                        <span class="expertise-tag">Industrial Projects</span>
                        <span class="expertise-tag">Large-Scale Fabrication</span>
                    </div>
                    
                    <!-- Quote Card 2 -->
                    <div class="quote-card">
                        <div class="quote-text">
                            Speaking at the meeting, Eurometal's CEO, Mr. Njazi Musliu, expressed his company's interest in investing in the Coast region. He said that Eurometal is impressed by the region's potential for growth and development. He also commended the Kenyan government for its efforts to create a conducive environment for foreign investment.
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-chat-quote"></i>
                            Mr. Njazi Musliu, CEO Eurometal
                            <span>| September 14, 2023</span>
                        </div>
                    </div>
                    
                    <p>The MICs CEO, Mrs. Sahale Bawariz, welcomed Eurometal's interest in investing in the region. She said that the county government is committed to supporting Eurometal's investment and ensuring that it is a success.</p>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Leading Manufacturer</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">Europe</div>
                            <div class="stat-label">Global Reach</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">Jobs</div>
                            <div class="stat-label">Local Employment</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">Infrastructure</div>
                            <div class="stat-label">Development</div>
                        </div>
                    </div>
                    
                    <!-- Investment Highlights -->
                    <h3 class="sub-heading">Expected Impact</h3>
                    <div class="highlights-grid">
                        <div class="highlight-item">
                            <div class="highlight-icon"><i class="bi bi-briefcase"></i></div>
                            <h4>Job Creation</h4>
                            <p>New employment opportunities for local residents</p>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon"><i class="bi bi-building"></i></div>
                            <h4>Boost Construction Industry</h4>
                            <p>Strengthening the local construction sector</p>
                        </div>
                        <div class="highlight-item">
                            <div class="highlight-icon"><i class="bi bi-road"></i></div>
                            <h4>Infrastructure Development</h4>
                            <p>Contributing to regional infrastructure projects</p>
                        </div>
                    </div>
                    
                    <p>Eurometal's investment in the Coast region is expected to have a positive impact on the local economy. The company is expected to create jobs, boost the construction industry, and contribute to the development of infrastructure. The investment is also expected to attract other foreign investors to the region.</p>
                    
                    <p>The meeting between JKP, MIC, and Eurometal was a positive step towards advancing collaboration and bringing Eurometal's expertise to the Coast region. The county government of Mombasa is committed to supporting Eurometal's investment and ensuring that it is a success.</p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/eurometal-mic-collaboration');
                        $articleTitle = urlencode('Eurometal and MIC to collaborate on development projects');
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

                <!-- Previous News Widget - IMPROVED with error handling -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Previous News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/tourism.png" 
                                 alt="Tourism Blueprint"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png'; this.classList.add('error');"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>JKP Tourism and Cultural Heritage Blueprint 2030 Validation</h6>
                            <small><i class="bi bi-calendar3"></i> Sep 30, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/partnerships.png" 
                                 alt="Partnerships"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png'; this.classList.add('error');"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>Partnerships for Coastal Development and Blue Economy Investment</h6>
                            <small><i class="bi bi-calendar3"></i> Oct 6, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/iowa state.png" 
                                 alt="Iowa State"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png'; this.classList.add('error');"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>Iowa State University announces $25,000 scholarships</h6>
                            <small><i class="bi bi-calendar3"></i> Nov 21, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on investment opportunities and partnerships from Jumuiya ya Kaunti za Pwani.</p>
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
    
    // Add loading animation to images
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        if (!img.complete) {
            img.parentElement?.classList.add('image-loading');
            img.addEventListener('load', function() {
                this.parentElement?.classList.remove('image-loading');
            });
            img.addEventListener('error', function() {
                this.parentElement?.classList.remove('image-loading');
            });
        }
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>