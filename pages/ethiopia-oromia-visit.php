<?php
/**
 * pages/ethiopia-oromia-visit.php
 * Ethiopian Oromia Tourism Commission Courtesy Visit Article Page
 */

$pageTitle    = 'The Ethiopian Oromia Tourism Commission team courtesy visit';
$currentPage  = 'news';
$heroTitle    = 'Ethiopian Oromia Tourism Commission';
$heroSubtitle = 'Courtesy Visit to JKP';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/eth-oromia.png';
$ogDescription = 'On 8th August 2023, the Oromia Tourism Commission team from Ethiopia paid a courtesy visit to the Jumuiya Ya Kaunti Za Pwani – JKP office to benchmark and explore the potential for collaboration.';
$ogUrl = 'http://localhost:8000/ethiopia-oromia-visit';

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
    --ethiopia-green: #078930;
    --ethiopia-yellow: #FCDD09;
    --ethiopia-red: #DA121A;
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
    filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
}

/* Optional: Alternative blue theme variations - choose one */

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

/* Visit Card */
.visit-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.05) 0%, rgba(36,64,128,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 2rem;
    flex-wrap: wrap;
    border-left: 4px solid var(--primary-blue);
}

.visit-icon {
    width: 80px;
    height: 80px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 2.5rem;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
}

.visit-details {
    flex: 1;
}

.visit-details h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.visit-details p {
    color: #555;
    margin: 0;
}

.visit-date {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-top: 1rem;
}

.visit-date span {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
    font-size: 0.95rem;
}

.visit-date i {
    color: var(--primary-blue);
}

/* Image Grid - 6 images (3x2) */
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

.grid-container-3col {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.grid-item {
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    aspect-ratio: 4/3;
}

.grid-item:hover {
    transform: translateY(-8px) scale(1.02);
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

/* Quote Card */
.quote-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.08) 0%, rgba(36,64,128,0.08) 100%);
    padding: 2.5rem;
    border-radius: 20px;
    margin: 3rem 0;
    text-align: center;
    position: relative;
    border: 1px solid rgba(110,193,228,0.2);
}

.quote-card::before {
    content: '"';
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 6rem;
    color: rgba(110,193,228,0.2);
    font-family: serif;
    line-height: 1;
}

.quote-text {
    font-size: 1.4rem;
    font-style: italic;
    color: var(--dark-blue);
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
    line-height: 1.6;
}

.quote-author {
    font-weight: 600;
    color: var(--primary-blue);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.quote-author i {
    font-size: 1.2rem;
}

.quote-author span {
    color: #666;
    font-weight: 400;
}

/* Collaboration Highlights */
.highlights-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2.5rem 0;
}

.highlight-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
}

.highlight-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
    border-color: var(--primary-blue);
}

.highlight-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2rem;
}

.highlight-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.highlight-card p {
    color: #666;
    line-height: 1.6;
    margin: 0;
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

/* Region Tags - UPDATED to keep Ethiopian flag colors for the Ethiopia tag */
.region-tags {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin: 2rem 0;
}

.region-tag {
    background: rgba(110,193,228,0.1);
    color: var(--dark-blue);
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    border: 1px solid rgba(110,193,228,0.3);
    transition: all 0.3s ease;
}

.region-tag:hover {
    background: var(--primary-blue);
    color: white;
    transform: translateY(-2px);
}

.region-tag.ethiopia {
    background: linear-gradient(135deg, var(--ethiopia-green), var(--ethiopia-yellow), var(--ethiopia-red));
    color: white;
    text-shadow: 0 1px 2px rgba(0,0,0,0.2);
    border: none;
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
    
    .grid-container-3col {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .highlights-grid {
        grid-template-columns: 1fr;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.6rem;
    }
    
    .grid-container-3col {
        grid-template-columns: 1fr;
    }
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .visit-card {
        flex-direction: column;
        text-align: center;
    }
    
    .quote-text {
        font-size: 1.2rem;
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
                    <a href="/news-updates?category=JKP News Updates" class="category-badge">
                        <i class="bi bi-tag"></i> JKP News Updates
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>The Ethiopian Oromia Tourism Commission team courtesy visit</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> August 8, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Country Badge - Now in blue theme -->
                <div class="country-badge" data-aos="fade-up">
                    <i class="bi bi-flag"></i>
                    Ethiopia | Oromia Tourism Commission
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/jum2.jpg" alt="Ethiopian Oromia Tourism Commission visit to JKP">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <!-- Visit Card -->
                    <div class="visit-card">
                        <div class="visit-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <div class="visit-details">
                            <h3>Courtesy Visit to Jumuiya Ya Kaunti Za Pwani</h3>
                            <p>Oromia Tourism Commission team from Ethiopia</p>
                            <div class="visit-date">
                                <span><i class="bi bi-calendar3"></i> August 8, 2023</span>
                                <span><i class="bi bi-geo-alt"></i> JKP Offices, Mombasa</span>
                            </div>
                        </div>
                    </div>
                    
                    <p class="lead">On 8th August 2023, the Oromia Tourism Commission team from Ethiopia paid a courtesy visit to the Jumuiya Ya Kaunti Za Pwani – JKP office. Their mission was to benchmark and explore the potential for collaboration within the Kenyan Coastal region through the Jumuiya Ya Kaunti Za Pwani Economic Bloc.</p>
                </div>

                <!-- Image Grid - 6 images (3x2) -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Visit Highlights</h3>
                    
                    <!-- Row 1 -->
                    <div class="grid-container-3col">
                        <div class="grid-item">
                            <img src="/assets/images/eth-oromia (1).png" alt="Ethiopian delegation at JKP">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/eth-oromia (2).png" alt="Meeting discussions">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/eth-oromia (3).png" alt="Tourism collaboration talks">
                        </div>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="grid-container-3col">
                        <div class="grid-item">
                            <img src="/assets/images/eth-oromia (4).png" alt="Group photo">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/eth-oromia (5).png" alt="Exchange of ideas">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/jum2.jpg" alt="Delegation合影">
                        </div>
                    </div>
                </div>

                <!-- Quote Card -->
                <div class="quote-card" data-aos="fade-up">
                    <div class="quote-text">
                        "The discussions were promising, aiming to create a remarkable partnership to pave the way for increased tourism exchange. This collaboration is set to unlock exciting opportunities for growth and cultural exchange."
                    </div>
                    <div class="quote-author">
                        <i class="bi bi-chat-quote"></i>
                        Oromia Tourism Commission & JKP Delegation
                    </div>
                </div>

                <!-- Collaboration Highlights -->
                <div class="article-content">
                    <h3 class="sub-heading">Partnership Opportunities</h3>
                    
                    <div class="highlights-grid">
                        <div class="highlight-card">
                            <div class="highlight-icon"><i class="bi bi-arrow-repeat"></i></div>
                            <h4>Tourism Exchange</h4>
                            <p>Increased tourism flow between Oromia region and Kenya's Coastal counties</p>
                        </div>
                        
                        <div class="highlight-card">
                            <div class="highlight-icon"><i class="bi bi-globe"></i></div>
                            <h4>Cultural Exchange</h4>
                            <p>Sharing and celebrating the rich cultural heritage of both regions</p>
                        </div>
                        
                        <div class="highlight-card">
                            <div class="highlight-icon"><i class="bi bi-graph-up"></i></div>
                            <h4>Growth Opportunities</h4>
                            <p>Unlocking new markets and investment possibilities in tourism sector</p>
                        </div>
                        
                        <div class="highlight-card">
                            <div class="highlight-icon"><i class="bi bi-people"></i></div>
                            <h4>Knowledge Sharing</h4>
                            <p>Benchmarking best practices in tourism development and management</p>
                        </div>
                    </div>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">1</div>
                            <div class="stat-label">Historic Visit</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2</div>
                            <div class="stat-label">Regions</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">∞</div>
                            <div class="stat-label">Opportunities</div>
                        </div>
                    </div>
                    
                    <!-- Region Tags -->
                    <h3 class="sub-heading">Collaborating Regions</h3>
                    <div class="region-tags">
                        <span class="region-tag ethiopia"><i class="bi bi-flag"></i> Oromia, Ethiopia</span>
                        <span class="region-tag"><i class="bi bi-water"></i> Mombasa</span>
                        <span class="region-tag"><i class="bi bi-tree"></i> Kwale</span>
                        <span class="region-tag"><i class="bi bi-sun"></i> Kilifi</span>
                        <span class="region-tag"><i class="bi bi-droplet"></i> Tana River</span>
                        <span class="region-tag"><i class="bi bi-building"></i> Lamu</span>
                        <span class="region-tag"><i class="bi bi-mountain"></i> Taita Taveta</span>
                    </div>
                    
                    <p>The discussions were promising, aiming to create a remarkable partnership to pave the way for increased tourism exchange. This collaboration is set to unlock exciting opportunities for growth and cultural exchange.</p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/ethiopia-oromia-visit');
                        $articleTitle = urlencode('The Ethiopian Oromia Tourism Commission team courtesy visit');
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
                        <li class="archive-item">
                            <a href="/news-updates?month=Jun 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                June 2023
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
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/tourism.png" alt="Tourism Blueprint">
                        </div>
                        <div class="prev-news-info">
                            <h6>JKP Tourism and Cultural Heritage Blueprint 2030 Validation</h6>
                            <small><i class="bi bi-calendar3"></i> Sep 30, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on regional partnerships and tourism collaborations from Jumuiya ya Kaunti za Pwani.</p>
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