<?php
/**
 * pages/reface-forum-2023.php
 * Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023 Article Page
 */

$pageTitle    = 'Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023';
$currentPage  = 'news';
$heroTitle    = 'Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023';
$heroSubtitle = 'Regenerative Fashion Collective Exchange';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/rege.png';
$ogDescription = 'The ReFaCE Forum is a collaboration and network of textile "Crop-to-Closet-to-Compost" (C3) value chain stakeholders working together to uncover opportunities in regenerative fashion.';
$ogUrl = 'http://localhost:8000/reface-forum-2023';

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
    --fashion-purple: #9b59b6;
    --fashion-pink: #e83e8c;
    --fashion-green: #2ecc71;
    --fashion-gold: #f1c40f;
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

/* Forum Badge */
.forum-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, var(--fashion-purple), var(--fashion-pink));
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
}

.forum-badge i {
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

/* C3 Model */
.c3-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 3rem 0;
    flex-wrap: wrap;
    gap: 20px;
}

.c3-step {
    flex: 1;
    min-width: 150px;
    text-align: center;
    padding: 1.5rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    position: relative;
}

.c3-step:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 30px -10px var(--fashion-purple);
    border-color: var(--fashion-purple);
}

.c3-step:not(:last-child)::after {
    content: '→';
    position: absolute;
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: var(--fashion-purple);
    font-weight: 300;
    z-index: 2;
}

.c3-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, var(--fashion-purple), var(--fashion-pink));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.2rem;
    color: white;
    font-size: 2rem;
}

.c3-step h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
}

.c3-step p {
    color: #666;
    font-size: 0.9rem;
    margin: 0;
}

/* Stakeholders Grid */
.stakeholders-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.stakeholder-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stakeholder-card:hover {
    background: white;
    transform: translateY(-5px);
    box-shadow: 0 15px 25px -10px var(--fashion-purple);
    border-color: var(--fashion-purple);
}

.stakeholder-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--fashion-purple), var(--fashion-pink));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: white;
    font-size: 1.5rem;
}

.stakeholder-card h4 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--dark-blue);
    margin: 0;
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
    box-shadow: 0 20px 30px -10px var(--fashion-purple);
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

/* Value Chain Tags */
.value-chain {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin: 2rem 0;
}

.chain-tag {
    background: linear-gradient(135deg, rgba(155,89,182,0.1), rgba(232,62,140,0.1));
    color: var(--dark-blue);
    padding: 0.6rem 1.5rem;
    border-radius: 50px;
    font-size: 0.95rem;
    font-weight: 500;
    border: 1px solid rgba(155,89,182,0.3);
    transition: all 0.3s ease;
}

.chain-tag:hover {
    background: linear-gradient(135deg, var(--fashion-purple), var(--fashion-pink));
    color: white;
    transform: translateY(-2px);
}

/* Stats Highlight */
.stats-highlight {
    background: linear-gradient(135deg, rgba(155,89,182,0.1) 0%, rgba(232,62,140,0.1) 100%);
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
    color: var(--fashion-purple);
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
    background: linear-gradient(135deg, rgba(155,89,182,0.05) 0%, rgba(232,62,140,0.05) 100%);
    padding: 2.5rem;
    border-radius: 20px;
    margin: 3rem 0;
    text-align: center;
    position: relative;
    border: 1px solid rgba(155,89,182,0.2);
}

.quote-card::before {
    content: '"';
    position: absolute;
    top: -20px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 6rem;
    color: rgba(155,89,182,0.2);
    font-family: serif;
    line-height: 1;
}

.quote-text {
    font-size: 1.3rem;
    font-style: italic;
    color: var(--dark-blue);
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
    line-height: 1.6;
}

.quote-author {
    font-weight: 600;
    color: var(--fashion-purple);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

/* Forum Objectives */
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
    background: linear-gradient(135deg, rgba(155,89,182,0.05), rgba(232,62,140,0.05));
    transform: translateX(5px);
}

.objective-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--fashion-purple), var(--fashion-pink));
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
    .stakeholders-grid {
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
    
    .grid-container-3col {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .stakeholders-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .c3-container {
        flex-direction: column;
    }
    
    .c3-step:not(:last-child)::after {
        content: '↓';
        right: auto;
        left: 50%;
        top: auto;
        bottom: -30px;
        transform: translateX(-50%);
    }
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.6rem;
    }
    
    .grid-container-3col {
        grid-template-columns: 1fr;
    }
    
    .stakeholders-grid {
        grid-template-columns: 1fr;
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
                    <h1>Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> June 23, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Forum Badge -->
                <div class="forum-badge" data-aos="fade-up">
                    <i class="bi bi-stars"></i>
                    ReFaCE Forum 2023
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/rege.png" alt="ReFaCE Forum 2023">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">The ReFaCE Forum is a collaboration and network of textile "Crop-to-Closet-to-Compost" (C3) value chain stakeholders—from small-holder farmers, spinners, and weavers, to textile manufacturers, buyers, and designers, to investors and fashion executives, working together to produce a one-of-a-kind collective to exchange ideas and create policies that uncover the untapped opportunities and possibilities in the regenerative fashion industry across our region and continent. The forum is a consciously curated collective of fashion industry stakeholders focused on the Regenerative Fashion value chain.</p>
                </div>

                <!-- C3 Model -->
                <h3 class="sub-heading" data-aos="fade-up">Crop-to-Closet-to-Compost (C3) Value Chain</h3>
                <div class="c3-container" data-aos="fade-up">
                    <div class="c3-step">
                        <div class="c3-icon"><i class="bi bi-flower1"></i></div>
                        <h4>Crop</h4>
                        <p>From small-holder farmers to fiber production</p>
                    </div>
                    <div class="c3-step">
                        <div class="c3-icon"><i class="bi bi-scissors"></i></div>
                        <h4>Closet</h4>
                        <p>Spinners, weavers, manufacturers, designers</p>
                    </div>
                    <div class="c3-step">
                        <div class="c3-icon"><i class="bi bi-recycle"></i></div>
                        <h4>Compost</h4>
                        <p>Sustainable end-of-life circularity</p>
                    </div>
                </div>

                <!-- Stakeholders Grid -->
                <h3 class="sub-heading" data-aos="fade-up">Forum Stakeholders</h3>
                <div class="stakeholders-grid" data-aos="fade-up">
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-flower1"></i></div>
                        <h4>Small-holder Farmers</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-fan"></i></div>
                        <h4>Spinners & Weavers</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-building"></i></div>
                        <h4>Textile Manufacturers</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-cart"></i></div>
                        <h4>Buyers</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-palette"></i></div>
                        <h4>Designers</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-cash-stack"></i></div>
                        <h4>Investors</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-briefcase"></i></div>
                        <h4>Fashion Executives</h4>
                    </div>
                    <div class="stakeholder-card">
                        <div class="stakeholder-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <h4>Policy Makers</h4>
                    </div>
                </div>

                <!-- Image Grid - 6 images (3x2) -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Forum Highlights</h3>
                    
                    <!-- Row 1 -->
                    <div class="grid-container-3col">
                        <div class="grid-item">
                            <img src="/assets/images/reface (1).png" alt="ReFaCE Forum Session 1">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/reface (2).png" alt="ReFaCE Forum Session 2">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/reface (3).png" alt="ReFaCE Forum Session 3">
                        </div>
                    </div>
                    
                    <!-- Row 2 -->
                    <div class="grid-container-3col">
                        <div class="grid-item">
                            <img src="/assets/images/reface (4).png" alt="ReFaCE Forum Session 4">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/reface (5).png" alt="ReFaCE Forum Session 5">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/reface (6).png" alt="ReFaCE Forum Session 6">
                        </div>
                    </div>
                </div>

                <!-- Value Chain Tags -->
                <h3 class="sub-heading" data-aos="fade-up">Value Chain Components</h3>
                <div class="value-chain" data-aos="fade-up">
                    <span class="chain-tag">Fiber Production</span>
                    <span class="chain-tag">Spinning</span>
                    <span class="chain-tag">Weaving</span>
                    <span class="chain-tag">Manufacturing</span>
                    <span class="chain-tag">Design</span>
                    <span class="chain-tag">Retail</span>
                    <span class="chain-tag">Composting</span>
                    <span class="chain-tag">Circular Economy</span>
                </div>

                <!-- Stats Highlight -->
                <div class="stats-highlight" data-aos="fade-up">
                    <div class="stat-item">
                        <div class="stat-number">2023</div>
                        <div class="stat-label">Inaugural Forum</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">C3</div>
                        <div class="stat-label">Value Chain Model</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">8+</div>
                        <div class="stat-label">Stakeholder Groups</div>
                    </div>
                </div>

                <!-- Forum Objectives -->
                <h3 class="sub-heading" data-aos="fade-up">Forum Objectives</h3>
                <div class="objectives-list" data-aos="fade-up">
                    <div class="objective-item">
                        <div class="objective-icon"><i class="bi bi-lightbulb"></i></div>
                        <div class="objective-text">Exchange ideas and create policies that uncover untapped opportunities in regenerative fashion</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-icon"><i class="bi bi-globe"></i></div>
                        <div class="objective-text">Build a collaborative network across the region and continent</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-icon"><i class="bi bi-arrow-repeat"></i></div>
                        <div class="objective-text">Promote circular economy principles in the fashion industry</div>
                    </div>
                    <div class="objective-item">
                        <div class="objective-icon"><i class="bi bi-flower2"></i></div>
                        <div class="objective-text">Advance regenerative practices from crop to compost</div>
                    </div>
                </div>

                <!-- Quote Card -->
                <div class="quote-card" data-aos="fade-up">
                    <div class="quote-text">
                        "The ReFaCE Forum is a consciously curated collective of fashion industry stakeholders focused on the Regenerative Fashion value chain, working together to uncover untapped opportunities across our region and continent."
                    </div>
                    <div class="quote-author">
                        <i class="bi bi-mic"></i> ReFaCE Forum Organizers
                    </div>
                </div>

                <!-- Duplicate content note - appears only once in the actual page -->
                <!-- The second instance of the content in your request appears to be a duplicate, so I've omitted it -->

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/reface-forum-2023');
                        $articleTitle = urlencode('Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023');
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
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/trade mission.png" alt="Trade Mission">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya conducts Trade Mission to the USA</h6>
                            <small><i class="bi bi-calendar3"></i> Sep 18, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on regenerative fashion and sustainable industry initiatives from Jumuiya ya Kaunti za Pwani.</p>
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