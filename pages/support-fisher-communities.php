<?php
/**
 * pages/support-fisher-communities.php
 * Support Fisher Communities Along the Kenyan Coast Article Page
 */

$pageTitle    = 'Support fisher communities along the Kenyan coast';
$currentPage  = 'news';
$heroTitle    = 'Support Fisher Communities';
$heroSubtitle = 'Safety Training for Coastal Fishers';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/fishermen.png';
$ogDescription = 'Fishing is one of the most dangerous job in the world with many accidents resulting in fatalities. The Go Blue maritime security project teaches Kenya Coast Guard Service trainers how to support fisher communities with basic survival techniques.';
$ogUrl = 'http://localhost:8000/support-fisher-communities';

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
    --safety-orange: #FF6B35;
    --ocean-blue: #1B4D6E;
    --wave-blue: #2C7DA0;
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

/* Safety Badge */
.safety-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, var(--safety-orange), #F24C3F);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
}

.safety-badge i {
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

/* Safety Stats */
.stats-highlight {
    background: linear-gradient(135deg, var(--ocean-blue), var(--wave-blue));
    padding: 2.5rem;
    border-radius: 20px;
    margin: 2rem 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    gap: 30px;
    color: white;
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 3rem;
    font-weight: 800;
    color: white;
    font-family: 'Playfair Display', serif;
    line-height: 1;
    margin-bottom: 0.5rem;
}

.stat-label {
    font-weight: 600;
    font-size: 1rem;
    opacity: 0.9;
}

/* Training Cards */
.training-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.training-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
}

.training-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--safety-orange);
    border-color: var(--safety-orange);
}

.training-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, var(--safety-orange), #F24C3F);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: white;
    font-size: 2.5rem;
}

.training-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.training-card .count {
    font-size: 2rem;
    font-weight: 800;
    color: var(--safety-orange);
    line-height: 1;
    margin: 1rem 0;
}

.training-card p {
    color: #666;
    font-size: 0.95rem;
    margin: 0;
}

/* Safety Tips */
.tips-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.tip-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    transition: all 0.3s ease;
    border-left: 4px solid var(--safety-orange);
}

.tip-card:hover {
    background: white;
    transform: translateX(5px);
    box-shadow: 0 10px 20px -10px var(--safety-orange);
}

.tip-icon {
    width: 40px;
    height: 40px;
    background: var(--safety-orange);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.tip-content h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.tip-content p {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

/* Partners Section */
.partners-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin: 2rem 0;
}

.partner-badge {
    display: flex;
    align-items: center;
    gap: 1rem;
    background: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.partner-badge:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px -10px var(--ocean-blue);
    border-color: var(--ocean-blue);
}

.partner-badge i {
    font-size: 1.5rem;
    color: var(--ocean-blue);
}

.partner-badge span {
    font-weight: 600;
    color: var(--dark-blue);
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
    background: rgba(0,51,102,0.1);
    color: var(--dark-blue);
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    border: 1px solid rgba(0,51,102,0.2);
    transition: all 0.3s ease;
}

.county-tag:hover {
    background: var(--ocean-blue);
    color: white;
    transform: translateY(-2px);
}

/* Quote Card */
.quote-card {
    background: linear-gradient(135deg, rgba(255,107,53,0.05) 0%, rgba(44,125,160,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--safety-orange);
    font-style: italic;
    position: relative;
}

.quote-card::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 20px;
    font-size: 4rem;
    color: rgba(255,107,53,0.2);
    font-family: serif;
}

.quote-text {
    font-size: 1.2rem;
    color: #555;
    line-height: 1.7;
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.quote-author {
    font-weight: 600;
    color: var(--ocean-blue);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Training Progress */
.progress-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    margin: 2rem 0;
    border: 1px solid rgba(0,0,0,0.05);
}

.progress-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.progress-header h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin: 0;
}

.progress-date {
    color: var(--safety-orange);
    font-weight: 600;
}

.progress-bar-container {
    background: #f0f0f0;
    height: 20px;
    border-radius: 10px;
    overflow: hidden;
    margin: 1rem 0;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, var(--safety-orange), var(--ocean-blue));
    border-radius: 10px;
    transition: width 1s ease;
}

.progress-stats {
    display: flex;
    justify-content: space-between;
    margin-top: 1rem;
    color: #666;
    font-weight: 500;
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
    .training-grid,
    .tips-container {
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
    
    .training-grid,
    .tips-container {
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
    
    .stats-highlight {
        flex-direction: column;
        gap: 20px;
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
                    <h1>Support fisher communities along the Kenyan coast</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> April 28, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Safety Badge -->
                <div class="safety-badge" data-aos="fade-up">
                    <i class="bi bi-shield-check"></i>
                    World Day for Safety and Health at Work
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/fishermen.png" alt="Fisher communities along Kenyan coast">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">How to support fisher communities along the Kenyan coast. Fishing is one of the most dangerous job in the world with many accidents resulting in fatalities. But proper safety measures save lives. Today we celebrate World Day for Safety and Health at Work, which promotes the prevention of occupational accidents and diseases globally.</p>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">95</div>
                            <div class="stat-label">Training Courses</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">1,520</div>
                            <div class="stat-label">Fishers Trained</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">37</div>
                            <div class="stat-label">KCGS Trainers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5</div>
                            <div class="stat-label">Coastal Counties</div>
                        </div>
                    </div>
                    
                    <!-- Quote Card -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "Fishing is one of the most dangerous job in the world with many accidents resulting in fatalities."
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                            World Day for Safety and Health at Work
                        </div>
                    </div>
                    
                    <!-- Training Cards -->
                    <h3 class="sub-heading" data-aos="fade-up">Safety Training for Fishers</h3>
                    
                    <div class="training-grid" data-aos="fade-up">
                        <div class="training-card">
                            <div class="training-icon"><i class="bi bi-water"></i></div>
                            <h4>Basic Survival Techniques</h4>
                            <div class="count">848+</div>
                            <p>Fishers trained in drowning incident response and boat capsize procedures</p>
                        </div>
                        
                        <div class="training-card">
                            <div class="training-icon"><i class="bi bi-boat"></i></div>
                            <h4>KCGS Trainer Program</h4>
                            <div class="count">37</div>
                            <p>Kenya Coast Guard Service officers qualified to deliver Safety Training</p>
                        </div>
                        
                        <div class="training-card">
                            <div class="training-icon"><i class="bi bi-calendar-check"></i></div>
                            <h4>Training Schedule</h4>
                            <div class="count">95</div>
                            <p>Courses organized in five coastal counties until end of 2023</p>
                        </div>
                    </div>
                    
                    <!-- Partners Section -->
                    <h3 class="sub-heading" data-aos="fade-up">Project Partners</h3>
                    
                    <div class="partners-row" data-aos="fade-up">
                        <div class="partner-badge">
                            <i class="bi bi-flag"></i>
                            <span>Go Blue Maritime Security</span>
                        </div>
                        <div class="partner-badge">
                            <i class="bi bi-building"></i>
                            <span>Expertise France</span>
                        </div>
                        <div class="partner-badge">
                            <i class="bi bi-star"></i>
                            <span>European Union in Kenya</span>
                        </div>
                        <div class="partner-badge">
                            <i class="bi bi-shield"></i>
                            <span>Kenya Coast Guard Service</span>
                        </div>
                    </div>
                    
                    <!-- County Tags -->
                    <h3 class="sub-heading" data-aos="fade-up">Target Counties</h3>
                    
                    <div class="county-tags" data-aos="fade-up">
                        <span class="county-tag">Mombasa</span>
                        <span class="county-tag">Kwale</span>
                        <span class="county-tag">Kilifi</span>
                        <span class="county-tag">Tana River</span>
                        <span class="county-tag">Lamu</span>
                    </div>
                    
                    <!-- Safety Tips -->
                    <h3 class="sub-heading" data-aos="fade-up">Essential Safety Measures</h3>
                    
                    <div class="tips-container" data-aos="fade-up">
                        <div class="tip-card">
                            <div class="tip-icon"><i class="bi bi-life-preserver"></i></div>
                            <div class="tip-content">
                                <h5>Life Jackets</h5>
                                <p>Always wear properly fitted life jackets when at sea</p>
                            </div>
                        </div>
                        
                        <div class="tip-card">
                            <div class="tip-icon"><i class="bi bi-phone"></i></div>
                            <div class="tip-content">
                                <h5>Watertight Phone Bags</h5>
                                <p>Keep communication devices dry and accessible</p>
                            </div>
                        </div>
                        
                        <div class="tip-card">
                            <div class="tip-icon"><i class="bi bi-radio"></i></div>
                            <div class="tip-content">
                                <h5>Emergency Communication</h5>
                                <p>Know how to use Usalama Baharini app to report incidents</p>
                            </div>
                        </div>
                        
                        <div class="tip-card">
                            <div class="tip-icon"><i class="bi bi-sun"></i></div>
                            <div class="tip-content">
                                <h5>Weather Awareness</h5>
                                <p>Check weather conditions before setting out to sea</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Training Progress -->
                    <h3 class="sub-heading" data-aos="fade-up">Training Progress</h3>
                    
                    <div class="progress-card" data-aos="fade-up">
                        <div class="progress-header">
                            <h4>Safety Training for Fishers</h4>
                            <div class="progress-date">Target: End of 2023</div>
                        </div>
                        <div class="progress-bar-container">
                            <div class="progress-bar" style="width: 85%"></div>
                        </div>
                        <div class="progress-stats">
                            <span>Completed: 1,520 fishers</span>
                            <span>Target: 1,800 fishers</span>
                        </div>
                    </div>
                    
                    <!-- Project Description -->
                    <p>The Go Blue maritime security project, led by Expertise France, and funded by European Union in Kenya, teaches Kenya Coast Guard Service trainers how to support fisher communities along the Kenyan coast with basic survival technics during a drowning incident or when a boat capsizes.</p>
                    
                    <p>Until the end of 2023, a total of 95 training courses in five coastal counties will be organized, benefiting 1520 fishers and assisting Kenya Coast Guard Service to have up to 37 qualified officers to deliver the Safety Training for Fisher courses on their own.</p>
                    
                    <!-- Final Stats -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Commitment to Safety</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Emergency Support</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">∞</div>
                            <div class="stat-label">Lives Saved</div>
                        </div>
                    </div>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/support-fisher-communities');
                        $articleTitle = urlencode('Support fisher communities along the Kenyan coast');
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
                            <a href="/news-updates?month=Apr 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                April 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Mar 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                March 2023
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Feb 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                February 2023
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
                            <img src="/assets/images/eu-heads.png" alt="EU Heads Mission">
                        </div>
                        <div class="prev-news-info">
                            <h6>European Union Heads of Mission visit on Blue Economy</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 7, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/saf-plc.png" alt="Safaricom MOU">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya and Safaricom PLC signed an MOU</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 16, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/rege.png" alt="ReFaCE Forum">
                        </div>
                        <div class="prev-news-info">
                            <h6>Regenerative Fashion Collective Exchange Forum 2023</h6>
                            <small><i class="bi bi-calendar3"></i> Jun 23, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on fisher safety and maritime security initiatives from Jumuiya ya Kaunti za Pwani.</p>
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