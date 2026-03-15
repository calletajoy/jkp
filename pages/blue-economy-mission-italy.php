<?php
/**
 * pages/blue-economy-mission-italy.php
 * Jumuiya Blue Economy Mission to Italy Article Page
 */

$pageTitle    = 'Jumuiya Blue Economy Mission to Italy';
$currentPage  = 'news';
$heroTitle    = 'Blue Economy Mission to Italy';
$heroSubtitle = 'Go Blue Project Engagements';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/jum-eco.png';
$ogDescription = 'The Jumuiya ya Kaunti za Pwani (JKP) Delegation of the Blue Economy Sector Working Group closed their five day Go Blue Project engagements with a courtesy visit to the Kenyan Embassy in Rome Italy.';
$ogUrl = 'http://localhost:8000/blue-economy-mission-italy';

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
    --italy-green: #008C45;
    --italy-white: #F4F5F0;
    --italy-red: #CD212A;
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

/* Country Badge - UPDATED to match blue theme */
.country-badge {
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
}

.country-badge:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px -5px rgba(36, 64, 128, 0.5);
}

.country-badge i {
    font-size: 1.2rem;
    color: white;
    filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
}

/* Optional: Alternative blue theme variations */

/* Option 2: Solid blue with subtle gradient */
.country-badge.solid-blue {
    background: linear-gradient(to right, var(--primary-blue), var(--soft-blue));
}

/* Option 3: Darker blue for more contrast */
.country-badge.darker-blue {
    background: linear-gradient(135deg, var(--dark-blue), #1a2e5c);
}

/* Option 4: With turquoise accent */
.country-badge.turquoise-accent {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue), var(--turquoise));
    background-size: 200% 200%;
    animation: gradientShift 5s ease infinite;
}

@keyframes gradientShift {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
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

/* Partners Grid */
.partners-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.partner-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    text-align: center;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px -10px var(--primary-blue);
    border-color: var(--primary-blue);
}

.partner-icon {
    width: 60px;
    height: 60px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: var(--primary-blue);
    font-size: 1.8rem;
}

.partner-card h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.partner-card p {
    color: #666;
    font-size: 0.85rem;
    margin: 0;
}

/* Delegation Grid */
.delegation-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.delegation-card {
    background: #f8f9fa;
    padding: 1.2rem;
    border-radius: 10px;
    border-left: 4px solid var(--primary-blue);
    transition: all 0.3s ease;
}

.delegation-card:hover {
    transform: translateX(5px);
    background: white;
    box-shadow: 0 10px 20px -10px var(--primary-blue);
}

.delegation-card h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.delegation-card .title {
    color: var(--primary-blue);
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 0.3rem;
}

.delegation-card .county {
    color: #666;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.delegation-card .county i {
    color: var(--primary-blue);
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
    background: linear-gradient(to bottom, var(--primary-blue), var(--dark-blue));
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
    font-size: 0.95rem;
    font-weight: 700;
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

/* Award Card */
.award-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.08) 0%, rgba(36,64,128,0.08) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border: 1px solid rgba(110,193,228,0.2);
    position: relative;
    overflow: hidden;
}

.award-card::before {
    content: '🎓';
    position: absolute;
    bottom: -20px;
    right: -20px;
    font-size: 8rem;
    opacity: 0.1;
    transform: rotate(-15deg);
}

.award-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.award-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.8rem;
}

.award-header h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin: 0;
}

.award-recipients {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin: 1.5rem 0;
}

.recipient {
    background: white;
    padding: 1rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
}

.recipient-icon {
    width: 40px;
    height: 40px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.2rem;
}

.recipient-info h5 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.2rem;
}

.recipient-info p {
    color: #666;
    font-size: 0.8rem;
    margin: 0;
}

/* Visit Cards */
.visit-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.visit-item {
    background: white;
    padding: 1.8rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.visit-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
    border-color: var(--primary-blue);
}

.visit-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    color: white;
    font-size: 2rem;
}

.visit-item h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.8rem;
    font-family: 'Playfair Display', serif;
}

.visit-item p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.visit-location {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-blue);
    font-size: 0.9rem;
    font-weight: 500;
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

/* Quote Card */
.quote-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.05) 0%, rgba(36,64,128,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
    font-style: italic;
}

.quote-text {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.7;
}

.quote-author {
    margin-top: 1rem;
    font-weight: 600;
    color: var(--dark-blue);
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
    .partners-grid,
    .delegation-grid,
    .award-recipients,
    .visit-grid {
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
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .partners-grid,
    .delegation-grid,
    .award-recipients,
    .visit-grid {
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
    
    .country-badge {
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
                    <a href="/news-updates?category=Go Blue Component 1" class="category-badge">
                        <i class="bi bi-tag"></i> Go Blue Component 1
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>Jumuiya Blue Economy Mission to Italy</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> July 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Country Badge - Now in blue theme -->
                <div class="country-badge" data-aos="fade-up">
                    <i class="bi bi-flag"></i>
                    Italy | Blue Economy Mission
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/jum-eco.png" alt="Jumuiya Blue Economy Mission to Italy">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">The Jumuiya ya Kaunti za Pwani (JKP) www.jumuiya.org – Delegation of the Jumuiya Blue Economy Sector Working Group closed their five day Go Blue Project engagements with a courtesy visit to the Kenyan Embassy in Rome Italy.</p>
                    
                    <!-- Partners Grid -->
                    <h3 class="sub-heading">Implementing Partners</h3>
                    <div class="partners-grid">
                        <div class="partner-card">
                            <div class="partner-icon"><i class="bi bi-building"></i></div>
                            <h4>CIHEAM Bari</h4>
                            <p>Host & Implementing Partner</p>
                        </div>
                        <div class="partner-card">
                            <div class="partner-icon"><i class="bi bi-people"></i></div>
                            <h4>AICS</h4>
                            <p>Italian Agency for Development Cooperation</p>
                        </div>
                        <div class="partner-card">
                            <div class="partner-icon"><i class="bi bi-flag"></i></div>
                            <h4>Kenyan Embassy Rome</h4>
                            <p>Courtesy Visit</p>
                        </div>
                    </div>
                    
                    <p>Organized under the EU funded Go Blue Project, (www.goblue.co.ke), the mission was organized by the Jumuiya Economic Development Secretariat and hosted by the implementing partners, CIHEAM Bari and the Italian Agency for Development Corporation (AICS). The visit was a midterm project action following discussions held in Kenya between CIHEAM Bari, AICS and JKP. The organizations have jointly identified, among several issues, the need for strengthening the knowledge of the six Kenya Counties' decision makers (Governors and Counties Executives Committee of Agriculture and Blue Economy – Jumuiya Blue Economy Sector Working Group) concerning coastal areas' potential as well as key development strategies to be fostered towards project end in 2024.</p>
                    
                    <!-- Delegation Leaders -->
                    <h3 class="sub-heading">High-Level Delegation</h3>
                    <div class="delegation-grid">
                        <div class="delegation-card">
                            <h4>H.E Issa Timamy</h4>
                            <div class="title">Governor Lamu County</div>
                            <div class="county"><i class="bi bi-geo-alt"></i> Chairman Blue Economy Committee – Council of Governors</div>
                        </div>
                        <div class="delegation-card">
                            <h4>H.E Andrew Mwadime</h4>
                            <div class="title">Governor Taita Taveta County</div>
                            <div class="county"><i class="bi bi-geo-alt"></i> Chairman Natural Resources Committee – Council of Governors</div>
                        </div>
                        <div class="delegation-card">
                            <h4>H.E Josphat Kombo</h4>
                            <div class="title">Deputy Governor Kwale County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>H.E Flora Chibule</h4>
                            <div class="title">Deputy Governor Kilifi County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>H.E Loka Mahadhi</h4>
                            <div class="title">Deputy Governor Tana River County</div>
                        </div>
                    </div>
                    
                    <!-- Sector Working Group -->
                    <h3 class="sub-heading">Blue Economy Sector Working Group</h3>
                    <div class="delegation-grid">
                        <div class="delegation-card">
                            <h4>Hon. Faiz Fankupi</h4>
                            <div class="title">Chairman, Blue Economy Sector Working Group</div>
                            <div class="county"><i class="bi bi-geo-alt"></i> Lamu County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Hon. Kibibi Khamisi</h4>
                            <div class="county"><i class="bi bi-geo-alt"></i> Mombasa County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Hon. Erickson Mtevu</h4>
                            <div class="county"><i class="bi bi-geo-alt"></i> Taita Taveta County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Hon. Dr. Patterson Mwagona</h4>
                            <div class="county"><i class="bi bi-geo-alt"></i> Kilifi County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Hon. Roman Shera</h4>
                            <div class="county"><i class="bi bi-geo-alt"></i> Kwale County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Rahab Karisa</h4>
                            <div class="title">Chief Officer</div>
                            <div class="county"><i class="bi bi-geo-alt"></i> Kilifi County</div>
                        </div>
                        <div class="delegation-card">
                            <h4>Victor Gatie & Evans Nyarango</h4>
                            <div class="title">Directors</div>
                            <div class="county"><i class="bi bi-geo-alt"></i> Tana River County</div>
                        </div>
                    </div>
                    
                    <!-- Timeline of Events -->
                    <h3 class="sub-heading">Mission Timeline</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">July 14</div>
                            <div class="timeline-title">CIHEAM Tricase - Diploma Awarding Ceremony</div>
                            <div class="timeline-desc">Fourth edition of the Advanced Course on "Sustainable development of coastal communities"</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">July 14</div>
                            <div class="timeline-title">Twinning Program with Municipality of Tricase</div>
                            <div class="timeline-desc">Mayor Hon Antonio De Donno accepted invitation to visit Kenya</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">July 15</div>
                            <div class="timeline-title">Site Visits</div>
                            <div class="timeline-desc">Marevivo Fish Processing Plant and Food 4 Health Community Lab in Casto and Tricase</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">July 15</div>
                            <div class="timeline-title">Cultural Exchange</div>
                            <div class="timeline-desc">Donkey race event with Governor Issa Timamy and Deputy Ambassador Connie Maina</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">July 18</div>
                            <div class="timeline-title">Rome Meetings</div>
                            <div class="timeline-desc">Meetings with Assoittica Italia and Italian Agency for Development Rome</div>
                        </div>
                        
                        <div class="timeline-item">
                            <div class="timeline-date">July 18</div>
                            <div class="timeline-title">Courtesy Call to Kenyan Embassy</div>
                            <div class="timeline-desc">Closing of the five-day mission</div>
                        </div>
                    </div>
                    
                    <!-- Award Card -->
                    <div class="award-card">
                        <div class="award-header">
                            <div class="award-icon"><i class="bi bi-award"></i></div>
                            <h3>Diploma Awarding Ceremony</h3>
                        </div>
                        <p>On July 14th at CIHEAM Tricase, the delegation addressed and officiated a Diploma Awarding ceremony of the fourth edition of the Advanced Course on "Sustainable development of coastal communities". With an appreciation to the partnership between CIHEAM Bari and JKP, Governor Timamy thanked Institute's Directors, Maurizio Raeli and Biagio Di Terlizzi for the valuable capacity development program which has so far benefited 14 fisheries officers from the Coastal Counties since 2019.</p>
                        
                        <div class="award-recipients">
                            <div class="recipient">
                                <div class="recipient-icon"><i class="bi bi-person"></i></div>
                                <div class="recipient-info">
                                    <h5>Gladys Mnjama</h5>
                                    <p>Sector Lead – Financial Services & Investments, JKP Secretariat</p>
                                </div>
                            </div>
                            <div class="recipient">
                                <div class="recipient-icon"><i class="bi bi-person"></i></div>
                                <div class="recipient-info">
                                    <h5>Irine Heba</h5>
                                    <p>Fisheries Officer, Kilifi County</p>
                                </div>
                            </div>
                        </div>
                        
                        <p><small>Among the 15 African & Mediterranean region graduates who completed the ten (10) week program</small></p>
                    </div>
                    
                    <!-- Workshop -->
                    <h3 class="sub-heading">Go Blue Workshop</h3>
                    <p>Leading the Go Blue workshop developed within the framework of the project, Dr. Enrico Nerilli, Go Blue Technical Leader – Ciheam BARI and Dr. Emmanuel Nzai, CEO JKP Secretariat facilitated discussions and exchanges on the implementation status. The delegates and CIHEAM Bari experts exchanged experiences and discussed opportunities for knowledge and technology transfer on sustainable management of coastal territories and blue communities' development through the lessons learnt from the Go Blue Project.</p>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">5</div>
                            <div class="stat-label">Day Mission</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">14</div>
                            <div class="stat-label">Fisheries Officers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15</div>
                            <div class="stat-label">Graduates</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10</div>
                            <div class="stat-label">Week Program</div>
                        </div>
                    </div>
                    
                    <!-- Site Visits -->
                    <h3 class="sub-heading">Key Site Visits</h3>
                    <div class="visit-grid">
                        <div class="visit-item">
                            <div class="visit-icon"><i class="bi bi-fish"></i></div>
                            <h4>Marevivo Fish Processing Plant</h4>
                            <p>Large scale and small scale Fish Processing viewing with a view to use these key technologies to enhance the Agricultural and Fisheries value chain in the Coast region.</p>
                            <div class="visit-location"><i class="bi bi-geo-alt"></i> Casto, Italy</div>
                        </div>
                        
                        <div class="visit-item">
                            <div class="visit-icon"><i class="bi bi-heart"></i></div>
                            <h4>Food 4 Health Community Lab</h4>
                            <p>Agricultural product enhancement technologies for value addition in the Coast region.</p>
                            <div class="visit-location"><i class="bi bi-geo-alt"></i> Tricase, Italy</div>
                        </div>
                    </div>
                    
                    <!-- Rome Meetings -->
                    <h3 class="sub-heading">Rome Engagements</h3>
                    <div class="visit-grid">
                        <div class="visit-item">
                            <div class="visit-icon"><i class="bi bi-building"></i></div>
                            <h4>Assoittica Italia</h4>
                            <p>National association of seafood companies - Partnership discussions</p>
                        </div>
                        
                        <div class="visit-item">
                            <div class="visit-icon"><i class="bi bi-people"></i></div>
                            <h4>Italian Agency for Development Rome</h4>
                            <p>Strategic meetings for project sustainability</p>
                        </div>
                    </div>
                    
                    <!-- Quote Card -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "This mission was a key milestone in the advancement of the Go Blue Project sustainability and partnership enhancement."
                        </div>
                        <div class="quote-author">
                            - Jumuiya Blue Economy Mission Delegation
                        </div>
                    </div>
                    
                    <!-- Cultural Exchange -->
                    <h3 class="sub-heading">Cultural Exchange</h3>
                    <p>Governor Issa Timamy and Deputy Ambassador Connie Maina participated in a Donkey race event with the aim of advancing partnership between Italy and Kenya through culture and heritage exchange.</p>
                    
                    <!-- Final Note -->
                    <p>The mission was completed on July 18 with a Courtesy call to the Kenyan Embassy. This mission was a key milestone in the advancement of the Go Blue Project sustainability and partnership enhancement.</p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/blue-economy-mission-italy');
                        $articleTitle = urlencode('Jumuiya Blue Economy Mission to Italy');
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
                            <a href="/news-updates?month=Jul 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                July 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
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
                    </ul>
                </div>

                <!-- Previous News Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Previous News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/eth-oromia.png" alt="Ethiopia Visit">
                        </div>
                        <div class="prev-news-info">
                            <h6>Ethiopian Oromia Tourism Commission courtesy visit</h6>
                            <small><i class="bi bi-calendar3"></i> Aug 8, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/trade mission.png" alt="Trade Mission">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya conducts Trade Mission to the USA</h6>
                            <small><i class="bi bi-calendar3"></i> Sep 18, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/eurometal.png" alt="Eurometal">
                        </div>
                        <div class="prev-news-info">
                            <h6>Eurometal and MIC to collaborate on development projects</h6>
                            <small><i class="bi bi-calendar3"></i> Sep 25, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on Blue Economy missions and international partnerships from Jumuiya ya Kaunti za Pwani.</p>
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