<?php
/**
 * pages/eu-heads-mission.php
 * European Union Heads of Mission visit to the Coast Region on Blue Economy Article Page
 */

$pageTitle    = 'European Union Heads of Mission visit to the Coast Region on Blue Economy';
$currentPage  = 'news';
$heroTitle    = 'European Union Heads of Mission visit to the Coast Region on Blue Economy';
$heroSubtitle = 'Blue Economy Tour of Coast Region';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/eu-heads.png';
$ogDescription = 'The European Union Heads of Missions undertook a tour of the Jumuiya ya Kaunti za Pwani region from 15th to 19th May 2023 to highlight achievements and potential interests on Blue Economy.';
$ogUrl = 'http://localhost:8000/eu-heads-mission';

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
    --eu-yellow: #FFD700;
    --eu-blue: #003399;
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

/* EU Badge - UPDATED to match blue theme but preserve EU recognition */
.eu-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    color: white;
    padding: 0.7rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
    box-shadow: 0 5px 15px -5px rgba(36, 64, 128, 0.3);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
    border-left: 4px solid var(--eu-yellow); /* Keeping yellow accent for EU recognition */
}

.eu-badge:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px -5px rgba(36, 64, 128, 0.5);
}

.eu-badge i {
    font-size: 1.2rem;
    color: var(--eu-yellow); /* Keeping stars yellow for EU theme */
    filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
}

/* Featured Image - IMPROVED for better image display */
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
    background-color: #f5f5f5;
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

/* Component Cards - UPDATED to use blue theme */
.component-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.component-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.component-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
    border-color: var(--primary-blue);
}

.component-header {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    color: white;
    padding: 1.2rem;
    text-align: center;
}

.component-header h3 {
    font-size: 1.2rem;
    font-weight: 700;
    margin: 0;
    font-family: 'Playfair Display', serif;
}

.component-body {
    padding: 1.5rem;
}

.component-body p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.partner-list {
    list-style: none;
    padding: 0;
    margin: 1rem 0;
}

.partner-list li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.5rem;
    font-size: 0.9rem;
    color: #555;
}

.partner-list li i {
    color: var(--primary-blue);
    font-size: 0.8rem;
}

/* Achievement Cards - UPDATED to use blue theme */
.achievement-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.achievement-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    border-left: 4px solid var(--primary-blue);
    transition: all 0.3s ease;
}

.achievement-card:hover {
    background: white;
    transform: translateX(5px);
    box-shadow: 0 10px 20px -10px var(--primary-blue);
}

.achievement-number {
    font-size: 2.2rem;
    font-weight: 800;
    color: var(--primary-blue);
    font-family: 'Playfair Display', serif;
    line-height: 1;
    margin-bottom: 0.5rem;
}

.achievement-label {
    color: var(--dark-blue);
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.achievement-desc {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.5;
}

/* Stats Highlight - UPDATED to use blue theme */
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

/* Quote Card - UPDATED to use blue theme but preserve EU yellow accent */
.quote-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.05) 0%, rgba(36,64,128,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--eu-yellow); /* Keeping yellow for EU connection */
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
    color: var(--primary-blue);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.quote-author i {
    color: var(--eu-yellow); /* Keeping yellow for EU connection */
}

/* BMU List - UPDATED to use blue theme */
.bmu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin: 1.5rem 0;
}

.bmu-item {
    background: #f8f9fa;
    padding: 0.8rem;
    border-radius: 8px;
    text-align: center;
    font-size: 0.9rem;
    color: var(--dark-blue);
    font-weight: 500;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.bmu-item:hover {
    background: var(--primary-blue);
    color: white;
    transform: translateY(-3px);
}

/* Partner Logos - UPDATED to use blue theme */
.partner-logos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin: 2rem 0;
}

.partner-logo {
    width: 100px;
    height: 100px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    border: 2px solid var(--primary-blue);
    transition: all 0.3s ease;
}

.partner-logo:hover {
    transform: scale(1.1);
    border-color: var(--dark-blue);
    box-shadow: 0 15px 25px -10px var(--primary-blue);
}

.partner-logo i {
    font-size: 2.5rem;
    color: var(--primary-blue);
}

.partner-logo span {
    font-weight: 700;
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

/* Previous News - IMPROVED image display */
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
    object-fit: cover;
    transition: transform 0.3s ease;
}

.prev-news-thumb img:hover {
    transform: scale(1.1);
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

/* Image error handling */
img[src=""], 
img:not([src]) {
    opacity: 0;
}

/* Image loading animation */
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

/* Responsive */
@media (max-width: 1200px) {
    .component-grid,
    .bmu-grid {
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
    
    .achievement-grid,
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .component-grid,
    .bmu-grid {
        grid-template-columns: 1fr;
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
    
    .featured-image {
        max-height: 300px;
    }
    
    .featured-image img {
        max-height: 300px;
    }
    
    .eu-badge {
        padding: 0.5rem 1.5rem;
        font-size: 0.9rem;
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
                    <a href="/news-updates?category=Go Blue News" class="category-badge">
                        <i class="bi bi-tag"></i> Go Blue News
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>European Union Heads of Mission visit to the Coast Region on Blue Economy</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> June 7, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- EU Badge - Now in blue theme with yellow accent -->
                <div class="eu-badge" data-aos="fade-up">
                    <i class="bi bi-star"></i>
                    EU Heads of Mission | 15th - 19th May 2023
                </div>

                <!-- Featured Image - IMPROVED with error handling -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/eu-heads.png" 
                         alt="EU Heads of Mission Visit"
                         onerror="this.onerror=null; this.src='/assets/images/placeholder.png'; this.classList.add('error');"
                         loading="lazy">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">The European Union Heads of Missions undertook a tour of the Jumuiya ya Kaunti za Pwani region from 15th to 19th May 2023. This mission was undertaken with National Government Led by the Deputy President and Heads of Mission from EU led by the EU Ambassador, H.E. Henriette Geiger to highlight achievements and potential interests on Blue Economy including showcasing achievements so far in this sector achieved by Go Blue, identifying areas of potential future investments in Kenya and interacting with the Civil Society Organizations at the Coast.</p>
                    
                    <p>So far, through the respective Implementing Partners, the Go Blue project, funded by the European Union, has achieved tremendous achievements in the three components; Go blue Growth, Go Blue environment, and Go Blue Marine Security.</p>
                </div>

                <!-- Component Cards -->
                <h3 class="sub-heading" data-aos="fade-up">Go Blue Project Components</h3>
                <div class="component-grid" data-aos="fade-up">
                    <!-- Component 1 -->
                    <div class="component-card">
                        <div class="component-header">
                            <h3>Go Blue Growth</h3>
                        </div>
                        <div class="component-body">
                            <p><strong>Implementing Partners:</strong></p>
                            <ul class="partner-list">
                                <li><i class="bi bi-star-fill"></i> AICS (Italy)</li>
                                <li><i class="bi bi-star-fill"></i> GIZ (Germany)</li>
                                <li><i class="bi bi-star-fill"></i> CAMOES IP (Portugal)</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Component 2 -->
                    <div class="component-card">
                        <div class="component-header">
                            <h3>Go Blue Environment</h3>
                        </div>
                        <div class="component-body">
                            <p><strong>Implementing Partners:</strong></p>
                            <ul class="partner-list">
                                <li><i class="bi bi-star-fill"></i> UN Environment</li>
                                <li><i class="bi bi-star-fill"></i> UN-Habitat</li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- Component 3 -->
                    <div class="component-card">
                        <div class="component-header">
                            <h3>Go Blue Marine Security</h3>
                        </div>
                        <div class="component-body">
                            <p><strong>Implementing Partner:</strong></p>
                            <ul class="partner-list">
                                <li><i class="bi bi-star-fill"></i> Expertise France</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- AICS Section -->
                <div class="article-content">
                    <h3 class="sub-heading" data-aos="fade-up">Go Blue Growth – AICS, GIZ, CAMOES IP</h3>
                    
                    <h4 style="color: var(--dark-blue); margin-top: 1.5rem;">Italian Agency for Development Cooperation (AICS)</h4>
                    
                    <div class="bmu-grid">
                        <div class="bmu-item">Shimoni BMU</div>
                        <div class="bmu-item">Kibuyuni BMU</div>
                        <div class="bmu-item">Mkwiro BMU</div>
                        <div class="bmu-item">Mtwapa BMU</div>
                        <div class="bmu-item">Uyombo BMU</div>
                        <div class="bmu-item">Amu BMU</div>
                        <div class="bmu-item">Mbwajumwali BMU</div>
                        <div class="bmu-item">Kipini BMU</div>
                        <div class="bmu-item">Takaungu BMU</div>
                    </div>
                    
                    <div class="achievement-grid">
                        <div class="achievement-card">
                            <div class="achievement-number">3,200+</div>
                            <div class="achievement-label">BMU Members</div>
                            <div class="achievement-desc">Fishermen, fish traders, women fish processors</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">26</div>
                            <div class="achievement-label">Boats</div>
                            <div class="achievement-desc">With fishing gears delivered to target BMUs</div>
                        </div>
                    </div>
                    
                    <div class="quote-card">
                        <div class="quote-text">
                            "The delivery of the boats represents a milestone for the Italian component of the EU-funded Go Blue. We believe that this can increase the activities and income of the partner cooperatives. We are also working together with our technical partner CIHEAM Bari on the design of a revolving fund-like boat management scheme, which will make sure that the supplied vessels will keep on generating capital, enabling fishermen to acquire additional boats. It is our shared responsibility to ensure that the resources of the blue economy are used in the most sustainable way."
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-person"></i> Giovanni Grandi, Head of Aics Office in Nairobi
                        </div>
                    </div>
                    
                    <p><strong>Cassava Value Chain Enhancement:</strong> The building and equipping of the cassava processing plant at Magodi in Kwale County will support over 50 farmers to bulk their cassava produce, process it, add value, and sell it either as chips or flour. This will go a long way to address the issue of food insecurity and enhance money in the pockets of cassava farmers. The planned construction of cassava processing facility at Matsangoni, Kilifi County is also underway.</p>
                    
                    <!-- GIZ Section -->
                    <h4 style="color: var(--dark-blue); margin-top: 2rem;">GIZ (Germany)</h4>
                    
                    <div class="achievement-grid">
                        <div class="achievement-card">
                            <div class="achievement-number">9</div>
                            <div class="achievement-label">VTCs</div>
                            <div class="achievement-desc">Partnership with Vocational Training Centres</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">6</div>
                            <div class="achievement-label">Centres of Excellence</div>
                            <div class="achievement-desc">BE TVET Centres offering CBET courses</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">2,600+</div>
                            <div class="achievement-label">Graduates</div>
                            <div class="achievement-desc">Youth and women completed BE CBET courses</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">2,000+</div>
                            <div class="achievement-label">Job Placements</div>
                            <div class="achievement-desc">76% job placement rate</div>
                        </div>
                    </div>
                    
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">550+</div>
                            <div class="stat-label">MSMEs Supported</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2,000+</div>
                            <div class="stat-label">Aquaculture Enterprises</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">226</div>
                            <div class="stat-label">Master Trainers</div>
                        </div>
                    </div>
                    
                    <p>Recently, the first Kenyan Level 6 Aquaculture TVET curriculum that includes mariculture has been developed and accredited and rolled out in collaboration with Pwani University. Out of this, 4 short courses are being provided in 6 partner VTCs. Additional investment has been made in setting up the first milkfish hatchery in Mtwapa (Kilifi), being undertaken to increase production and productivity.</p>
                    
                    <!-- CAMOES Section -->
                    <h4 style="color: var(--dark-blue); margin-top: 2rem;">Camoes IP (Portugal) - Tourism & Cultural Heritage</h4>
                    
                    <div class="achievement-grid">
                        <div class="achievement-card">
                            <div class="achievement-number">17</div>
                            <div class="achievement-label">Projects Selected</div>
                            <div class="achievement-desc">520,000 EUR worth of grants</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">16</div>
                            <div class="achievement-label">Grant Agreements</div>
                            <div class="achievement-desc">Signed and benefiting from mentorship</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">196</div>
                            <div class="achievement-label">Youth Trained</div>
                            <div class="achievement-desc">95 women, transformative social entrepreneurs</div>
                        </div>
                    </div>
                    
                    <p>The delegation visited the Kaya Kinondo Sacred Forest Managed by the Kaya Kinondo Forest Conservation Organisation, one the 16 Go Blue | Tourism and Cultural Heritage grantees, a self-help group in Kinondo village, Kinondo ward, Msambweni Sub County of Kwale County Kenya. This project aims to enhance tourist experiences in and around the Kaya Kinondo sacred forest in ways that not only promotes and preserves the local heritage, but also creating sustainable livelihood opportunities for the locals, especially women and youth. Camões IP was represented by the Portuguese Ambassador in Nairobi, Ana Filomena Rocha, during the HoM's visits to the coastal region.</p>
                    
                    <p>The process of developing the Jumuiya TCH Blueprint is at an advanced stage, with the Draft committee responsible for leading the regional action plan compiling the Blueprint. A multi-sectoral workshop and consultation with key stakeholders have already been done and the Jumuiya TCH Blueprint is expected to be completed and launched by September 2023.</p>
                    
                    <!-- Go Blue Environment -->
                    <h3 class="sub-heading" data-aos="fade-up">Go Blue Environment - UN Environment & UN-Habitat</h3>
                    
                    <p>During the recent visit of EU Heads of Mission, an important milestone was achieved in tackling the solid waste management challenges faced by Taita Taveta County. The dignitaries had the opportunity to witness the innovative Go Blue intervention by the United Nations Environment Programme (UNEP) and UN-Habitat during their visit to the Chakaleri disposal site in Voi. The joint project aims to establish an operational Material Recovery Facility (MRF) through the Civil Society Urban Development Platform (CSUDP), an implementing partner of UN-Habitat.</p>
                    
                    <div class="achievement-grid">
                        <div class="achievement-card">
                            <div class="achievement-number">195</div>
                            <div class="achievement-label">Tons/Day</div>
                            <div class="achievement-desc">Solid waste generated in Taita Taveta County</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">30%</div>
                            <div class="achievement-label">Collected</div>
                            <div class="achievement-desc">Through conventional systems</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">1%</div>
                            <div class="achievement-label">Recovered</div>
                            <div class="achievement-desc">Currently being recycled</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">200+</div>
                            <div class="achievement-label">Jobs Expected</div>
                            <div class="achievement-desc">Active employment for waste actors</div>
                        </div>
                    </div>
                    
                    <p>The MRF, designed to boost and reactivate material recovery, will operate on a business model that focuses on engaging waste actors, particularly women and youth involved in the recycling industry. This initiative seeks to enhance their business environment and create employment opportunities. Upon completion, the project is expected to provide active employment to over 200 waste actors, contributing to the material recycling enterprise anchored on the MRF Business Model. Furthermore, it is anticipated that the material recovery rates from the County's waste stream will increase from the current 1% to over 5%.</p>
                    
                    <!-- Go Blue Maritime Security -->
                    <h3 class="sub-heading" data-aos="fade-up">Go Blue Maritime Security - Expertise France</h3>
                    
                    <div class="achievement-grid">
                        <div class="achievement-card">
                            <div class="achievement-number">848</div>
                            <div class="achievement-label">Fishers Trained</div>
                            <div class="achievement-desc">Maritime safety trainings</div>
                        </div>
                        <div class="achievement-card">
                            <div class="achievement-number">26</div>
                            <div class="achievement-label">BMUs Trained</div>
                            <div class="achievement-desc">Community Watch Programme with KCGS</div>
                        </div>
                    </div>
                    
                    <p>The maritime security component, implemented by Expertise France, has recorded over the past months huge strides. In order to improve maritime security and safety in Kenya, about 848 fishers have participated in maritime safety trainings and got equipped with lifejackets and watertight phone bags to increase their safety at sea. In close collaboration with the Kenya Coast Guard Service (KCGS), a Community Watch Programme has been established whereby 26 Beach Management Units (BMUs) got trained on maritime law enforcement using a community-government partnership model. This has included the development of a first-of-its-kind coastal application Usalama Baharini to facilitate communication between coastal communities and maritime law enforcement actors as well as making it easy for the fisher communities to report any suspicious activity at sea or maritime safety incidents.</p>
                    
                    <p>Expertise France is supporting the Bandari Maritime Academy with the development of various interagency curricula on different topics related to maritime governance, including Maritime Domain Awareness; Monitoring, Control and Surveillance; Illegal, Unreported and Undocumented fishing; Search and Rescue; and Maritime Pollution prevention and fighting. These activities are part of the actions to improve the interagency cooperation and collaboration between maritime security agencies in Kenya.</p>
                    
                    <p>Lastly, the Kenya Maritime Authority (KMA) and Expertise France have signed a capacity-building agreement to support Search and Rescue activities, which will include various trainings and delivery of equipment along the Kenyan coast to save people in distress at sea.</p>
                    
                    <!-- Stats Highlight Summary -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">3</div>
                            <div class="stat-label">Components</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6+</div>
                            <div class="stat-label">Partners</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5</div>
                            <div class="stat-label">Days Mission</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">9</div>
                            <div class="stat-label">Target BMUs</div>
                        </div>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/eu-heads-mission');
                        $articleTitle = urlencode('European Union Heads of Mission visit to the Coast Region on Blue Economy');
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

                <!-- Previous News Widget - IMPROVED image display -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Previous News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/saf-plc.png" 
                                 alt="Safaricom MOU"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png';"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya and Safaricom PLC signed an MOU</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 16, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/rege.png" 
                                 alt="ReFaCE Forum"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png';"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 23, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/jum-eco.png" 
                                 alt="Italy Mission"
                                 onerror="this.onerror=null; this.src='/assets/images/placeholder.png';"
                                 loading="lazy">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya Blue Economy Mission to Italy</h6>
                            <small><i class="bi bi-calendar3"></i> Jul 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on Blue Economy initiatives and international partnerships from Jumuiya ya Kaunti za Pwani.</p>
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