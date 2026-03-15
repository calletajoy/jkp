<?php
/**
 * pages/trade-mission-usa.php
 * Jumuiya ya Kaunti Za Pwani Trade Mission to the USA – Press Release Article Page
 */

$pageTitle    = 'Jumuiya ya Kaunti Za Pwani conducts a Trade Mission to the USA – Press Release';
$currentPage  = 'news';
$heroTitle    = 'Trade Mission to the USA';
$heroSubtitle = 'Press Release';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/trade mission.png';
$ogDescription = 'The Kenya coastal counties (Mombasa, Kilifi, Kwale, Lamu, Tana River and Taita Taveta) working through their umbrella coordinating body, Jumuiya Ya Kaunti Za Pwani have successfully completed a TRADE INVESTMENTS EDUCATION EXCHANGE MISSION to the USA.';
$ogUrl = 'http://localhost:8000/trade-mission-usa';

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
    --usa-red: #B22234;
    --usa-blue: #3C3B6E;
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

/* Press Release Badge */
.press-release-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.8rem;
    background: linear-gradient(135deg, var(--usa-red), var(--usa-blue));
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    font-weight: 600;
    margin-bottom: 2rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9rem;
}

.press-release-badge i {
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

/* Location Cards */
.location-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.location-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    text-align: center;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.location-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px -10px var(--primary-blue);
    border-color: var(--primary-blue);
}

.location-icon {
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

.location-card h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.location-card p {
    color: #666;
    font-size: 0.9rem;
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

/* Project Tags */
.project-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 1.5rem 0;
}

.project-tag {
    background: rgba(110,193,228,0.1);
    color: var(--dark-blue);
    padding: 0.5rem 1.2rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 500;
    border: 1px solid rgba(110,193,228,0.3);
    transition: all 0.3s ease;
}

.project-tag:hover {
    background: var(--primary-blue);
    color: white;
    transform: translateY(-2px);
}

/* SEZ Cards */
.sez-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.sez-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 12px;
    border-left: 4px solid var(--primary-blue);
    transition: all 0.3s ease;
}

.sez-card:hover {
    transform: translateX(5px);
    box-shadow: 0 10px 20px -10px var(--primary-blue);
}

.sez-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.sez-card h4 i {
    color: var(--primary-blue);
}

.sez-card p {
    color: #666;
    margin: 0;
    font-size: 0.95rem;
}

/* University Cards */
.university-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.university-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    text-align: center;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.university-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px -10px var(--primary-blue);
}

.university-icon {
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

.university-card h4 {
    font-size: 1rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.3rem;
}

.university-card p {
    color: #666;
    font-size: 0.85rem;
}

/* Initiative Cards */
.initiative-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.initiative-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.initiative-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
    border-color: var(--primary-blue);
}

.initiative-icon {
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

.initiative-card h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.initiative-card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.initiative-card .highlight {
    background: rgba(110,193,228,0.1);
    padding: 0.5rem 1rem;
    border-radius: 8px;
    font-size: 0.9rem;
    color: var(--dark-blue);
    font-weight: 500;
}

/* Regional Stats */
.region-stats {
    background: linear-gradient(135deg, var(--usa-blue), var(--dark-blue));
    color: white;
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
}

.region-stats h4 {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    font-family: 'Playfair Display', serif;
}

.stats-row {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.stat-block {
    text-align: center;
}

.stat-block .number {
    font-size: 2rem;
    font-weight: 800;
    color: var(--primary-blue);
    line-height: 1;
}

.stat-block .label {
    font-size: 0.9rem;
    opacity: 0.9;
    margin-top: 0.5rem;
}

/* Investment Grid */
.investment-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.investment-item {
    background: #f8f9fa;
    padding: 1.2rem;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: all 0.3s ease;
}

.investment-item:hover {
    background: white;
    box-shadow: 0 10px 20px -10px var(--primary-blue);
    transform: translateX(5px);
}

.investment-icon {
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

.investment-text {
    font-weight: 500;
    color: var(--dark-blue);
}

/* Manufacturing Grid */
.manufacturing-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
    margin: 2rem 0;
}

.manufacturing-item {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
    transition: all 0.3s ease;
}

.manufacturing-item:hover {
    background: var(--primary-blue);
    color: white;
    transform: translateY(-3px);
}

.manufacturing-item i {
    font-size: 1.5rem;
    color: var(--primary-blue);
    margin-bottom: 0.5rem;
    display: block;
}

.manufacturing-item:hover i {
    color: white;
}

.manufacturing-item span {
    font-size: 0.85rem;
    font-weight: 500;
}

/* Infrastructure List */
.infrastructure-list {
    list-style: none;
    padding: 0;
    margin: 1.5rem 0;
}

.infrastructure-list li {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.8rem;
    border-bottom: 1px solid #f0f0f0;
}

.infrastructure-list li:last-child {
    border-bottom: none;
}

.infrastructure-list i {
    color: var(--primary-blue);
    font-size: 1.2rem;
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
    .stats-row,
    .investment-grid,
    .manufacturing-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .university-grid,
    .location-cards {
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
    
    .sez-grid,
    .initiative-grid,
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .stats-row {
        grid-template-columns: repeat(2, 1fr);
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
    
    .location-cards,
    .university-grid,
    .investment-grid,
    .manufacturing-grid {
        grid-template-columns: 1fr;
    }
    
    .stats-row {
        grid-template-columns: 1fr;
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
                    <h1>Jumuiya ya Kaunti Za Pwani conducts a Trade Mission to the USA – Press Release</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> September 18, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Press Release Badge -->
                <div class="press-release-badge" data-aos="fade-up">
                    <i class="bi bi-file-earmark-text"></i>
                    Press Release
                    <i class="bi bi-arrow-right"></i>
                </div>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/trade mission.png" alt="Jumuiya Trade Mission to USA">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">Washington, DC, September 7, 2023. The Kenya coastal counties (Mombasa, Kilifi, Kwale, Lamu, Tana River and Taita Taveta) working through their umbrella coordinating body, Jumuiya Ya Kaunti Za Pwani have successfully completed a TRADE INVESTMENTS EDUCATION EXCHANGE MISSION to the USA. The mission offered the region an opportunity to position the Jumuiya counties, showcase the various investment opportunities and also seek investments partnerships in the USA.</p>
                    
                    <!-- Location Cards - USA Cities Visited -->
                    <h3 class="sub-heading">Mission Destinations</h3>
                    <div class="location-cards">
                        <div class="location-card">
                            <div class="location-icon"><i class="bi bi-building"></i></div>
                            <h4>Washington, DC</h4>
                            <p>Capital City</p>
                        </div>
                        <div class="location-card">
                            <div class="location-icon"><i class="bi bi-shop"></i></div>
                            <h4>Atlanta, Georgia</h4>
                            <p>123rd Annual National Black Business Conference</p>
                        </div>
                        <div class="location-card">
                            <div class="location-icon"><i class="bi bi-mortarboard"></i></div>
                            <h4>Charleston, South Carolina</h4>
                            <p>Citadel University & Tech Centre</p>
                        </div>
                    </div>
                    
                    <!-- Governor Quote -->
                    <div class="quote-card">
                        <div class="quote-text">
                            Led by His Excellency Hon Andrew Mwadime, the Governor of Taita Taveta County, the team from the Coast regional economic bloc team attended the 123rd Annual National Black Business Conference in Atlanta Georgia in which Governor Andrew Mwadime made remarks and, under the umbrella of Go Kenya Coast, made a presentation on the opportunities for investment in the Coast region and also showcased the various experiences in the region.
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-person-badge"></i>
                            H.E. Hon Andrew Mwadime, Governor of Taita Taveta County
                        </div>
                    </div>
                    
                    <!-- Investor Ready Projects -->
                    <h3 class="sub-heading">21 Investor Ready Projects</h3>
                    <div class="project-tags">
                        <span class="project-tag">Agriculture</span>
                        <span class="project-tag">Hospitality</span>
                        <span class="project-tag">Infrastructure</span>
                        <span class="project-tag">Transport</span>
                        <span class="project-tag">Logistics</span>
                    </div>
                    
                    <p>The region was able to showcase 21 investor ready projects across the 6 counties in agriculture, hospitality, Infrastructure, transport and Logistics. Under the infrastructure projects, the Governor made an impassioned plea for support to develop a water infrastructure for the region by investing in Taita Taveta which has multiple water sources.</p>
                    
                    <!-- SEZ Grid -->
                    <h3 class="sub-heading">Special Economic Zones</h3>
                    <div class="sez-grid">
                        <div class="sez-card">
                            <h4><i class="bi bi-building"></i> Miritini Industrial Park</h4>
                            <p>Mombasa County</p>
                        </div>
                        <div class="sez-card">
                            <h4><i class="bi bi-building"></i> Dongo Kundu</h4>
                            <p>Kwale County</p>
                        </div>
                    </div>
                    
                    <!-- Renewable Energy Projects -->
                    <h3 class="sub-heading">Renewable Energy Projects</h3>
                    <div class="sez-grid">
                        <div class="sez-card">
                            <h4><i class="bi bi-sun"></i> Solar Power Generation Project</h4>
                            <p>Tana River County</p>
                        </div>
                        <div class="sez-card">
                            <h4><i class="bi bi-droplet"></i> High Grand Falls Multi-Purpose Dam Project</h4>
                            <p>Tana River County</p>
                        </div>
                    </div>
                    
                    <!-- Governor Quote 2 -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "As you think about investment, I would like to invite you to Kenya, and specifically the Kenya Coast region. The United States and Kenya begun negotiating a Free Trade Agreement, the first in Sub-Saharan Africa, in July 2020. Since then, a Strategic Trade and Investment Partnership was established in 2022 and a roadmap between the US and Kenya is now underway. Strategic Trade and Investment areas that have been identified include Health, Agriculture, Environment and climate action initiatives, digital trade, and integration of MSMES into the international trade market."
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-chat-quote"></i>
                            Governor Andrew Mwadime
                        </div>
                    </div>
                    
                    <!-- University Collaborations -->
                    <h3 class="sub-heading">Educational Collaborations</h3>
                    <div class="university-grid">
                        <div class="university-card">
                            <div class="university-icon"><i class="bi bi-mortarboard"></i></div>
                            <h4>The Citadel University</h4>
                            <p>Charleston, South Carolina</p>
                        </div>
                        <div class="university-card">
                            <div class="university-icon"><i class="bi bi-cpu"></i></div>
                            <h4>Charleston Tech Centre</h4>
                            <p>South Carolina</p>
                        </div>
                        <div class="university-card">
                            <div class="university-icon"><i class="bi bi-mortarboard"></i></div>
                            <h4>Howard University</h4>
                            <p>Washington DC</p>
                        </div>
                    </div>
                    
                    <p>The team with the Citadel University in Charleston, South Carolina, Charleston Tech Centre, South Carolina and Howard University in Washington DC, during which the parties explored potential areas of collaboration through Student and Staff Exchange Programmes, upskilling MSMES though the Innovation labs, Health Camps, Research and Capacity building.</p>
                    
                    <!-- Key Initiatives -->
                    <h3 class="sub-heading">Key Initiatives Launched</h3>
                    <div class="initiative-grid">
                        <!-- NBCC MOU -->
                        <div class="initiative-card">
                            <div class="initiative-icon"><i class="bi bi-file-earmark-text"></i></div>
                            <h3>NBCC Partnership</h3>
                            <p>Signed a Memorandum of Understanding with the President of the National Black Chambers of Commerce onboarding them as Investment Advisory Partners to the region.</p>
                            <div class="highlight">Signed in presence of Kenya Ambassador to the USA</div>
                        </div>
                        
                        <!-- Blue Skies Initiative -->
                        <div class="initiative-card">
                            <div class="initiative-icon"><i class="bi bi-cloud-sun"></i></div>
                            <h3>Blue Skies Initiative</h3>
                            <p>A joint venture between Jumuiya Ya Kaunti Za Pwani and leading global Emissions Inspections & enforcement organizations including Opus Inspection and Crossroads International.</p>
                            <div class="highlight">Aim: Improve Kenya's air quality to attain WHO recommended standards</div>
                            <p style="margin-top: 0.5rem; font-size: 0.9rem;">Piloted in Mombasa County, then roll out to adjoining five coastal counties.</p>
                        </div>
                    </div>
                    
                    <!-- CEO Quote -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "As a region we are looking to spurring the growth of the region by translating County Investor Ready Projects into Green – Blue Bond Format. Our focus is on water, health, housing, food security, climate health and hospitality. We are keen to pull in investments through a structured way and are considering the creation of a Green Blue Bond and Special Purpose vehicle comprising USA & Kenya Coast region to achieve this."
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-person"></i>
                            Dr. Emmanuel Nzai, CEO, Jumuiya Economic Development Secretariat
                        </div>
                    </div>
                    
                    <!-- Regional Stats -->
                    <h3 class="sub-heading">The Coast Regional Economic Bloc</h3>
                    <div class="region-stats">
                        <h4>6 Coastal Counties</h4>
                        <div class="stats-row">
                            <div class="stat-block">
                                <div class="number">5.3M</div>
                                <div class="label">Population</div>
                            </div>
                            <div class="stat-block">
                                <div class="number">103,326</div>
                                <div class="label">Land Area (km²)</div>
                            </div>
                            <div class="stat-block">
                                <div class="number">333,320</div>
                                <div class="label">EEZ (km²)</div>
                            </div>
                            <div class="stat-block">
                                <div class="number">640</div>
                                <div class="label">Coastline (km)</div>
                            </div>
                        </div>
                        <p style="margin-top: 1.5rem; text-align: center;">Mombasa, Kwale, Kilifi, Lamu, Tana River, Taita Taveta</p>
                    </div>
                    
                    <!-- Investment Opportunities -->
                    <h3 class="sub-heading">Investment Opportunities</h3>
                    
                    <h4 style="color: var(--dark-blue); margin-top: 1.5rem;">Tourism Sector</h4>
                    <div class="investment-grid">
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-umbrella"></i></div>
                            <span class="investment-text">Leisure Tourism</span>
                        </div>
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-building"></i></div>
                            <span class="investment-text">MICE Tourism</span>
                        </div>
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-heart"></i></div>
                            <span class="investment-text">Medical Tourism</span>
                        </div>
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-tree"></i></div>
                            <span class="investment-text">Eco-tourism</span>
                        </div>
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-ship"></i></div>
                            <span class="investment-text">Cruise Tourism</span>
                        </div>
                        <div class="investment-item">
                            <div class="investment-icon"><i class="bi bi-palette"></i></div>
                            <span class="investment-text">Cultural Tourism</span>
                        </div>
                    </div>
                    
                    <h4 style="color: var(--dark-blue); margin-top: 1.5rem;">Agribusiness & Fisheries</h4>
                    <div class="investment-grid">
                        <div class="investment-item"><span class="investment-text">Fruit and vegetables</span></div>
                        <div class="investment-item"><span class="investment-text">Oils</span></div>
                        <div class="investment-item"><span class="investment-text">Herbs and spices</span></div>
                        <div class="investment-item"><span class="investment-text">Aquaculture</span></div>
                        <div class="investment-item"><span class="investment-text">Marine fisheries</span></div>
                        <div class="investment-item"><span class="investment-text">Staple crops</span></div>
                        <div class="investment-item"><span class="investment-text">Meat and poultry</span></div>
                        <div class="investment-item"><span class="investment-text">Livestock production</span></div>
                    </div>
                    
                    <h4 style="color: var(--dark-blue); margin-top: 1.5rem;">Apparel & Textiles</h4>
                    <div class="manufacturing-grid">
                        <div class="manufacturing-item">
                            <i class="bi bi-scissors"></i>
                            <span>Apparel manufacturing</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-house"></i>
                            <span>Household goods</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-droplet"></i>
                            <span>Bleaching & dyeing</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-printer"></i>
                            <span>Printing & finishing</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-flower1"></i>
                            <span>Ginning</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-flower2"></i>
                            <span>Cotton production</span>
                        </div>
                    </div>
                    
                    <h4 style="color: var(--dark-blue); margin-top: 1.5rem;">Manufacturing</h4>
                    <div class="manufacturing-grid">
                        <div class="manufacturing-item">
                            <i class="bi bi-truck"></i>
                            <span>Automotive assembly</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-fan"></i>
                            <span>Household appliances</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-phone"></i>
                            <span>Consumer electronics</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-capsule"></i>
                            <span>Pharmaceuticals</span>
                        </div>
                        <div class="manufacturing-item">
                            <i class="bi bi-recycle"></i>
                            <span>Sustainable packaging</span>
                        </div>
                    </div>
                    
                    <!-- Business Environment -->
                    <h3 class="sub-heading">Ease of Doing Business</h3>
                    <p>The counties in the region have implemented various measures to attract and promote investment across the region. The County Governments have implemented reforms to improve the ease of doing business in the county. This includes streamlining business registration processes, reducing bureaucracy, & enhancing investor protection. These efforts aim to create a favorable environment for local and foreign investors to establish and operate businesses.</p>
                    
                    <!-- Infrastructure Development -->
                    <h3 class="sub-heading">Infrastructure Development</h3>
                    <ul class="infrastructure-list">
                        <li><i class="bi bi-check-circle-fill"></i> Improved transportation infrastructure, such as upgraded roads, highways, and ports</li>
                        <li><i class="bi bi-check-circle-fill"></i> Reliable utilities and services through infrastructural development related to electricity, water supply, and sanitation systems</li>
                        <li><i class="bi bi-check-circle-fill"></i> Proposed Mombasa Special Economic Zone, the newly completed Dongo Kundu bypasses and the Kenya Shipyards</li>
                        <li><i class="bi bi-check-circle-fill"></i> Advancements in digital infrastructure, including broadband internet access and mobile network coverage</li>
                    </ul>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/trade-mission-usa');
                        $articleTitle = urlencode('Jumuiya ya Kaunti Za Pwani conducts a Trade Mission to the USA – Press Release');
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
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/partnerships.png" alt="Partnerships">
                        </div>
                        <div class="prev-news-info">
                            <h6>Partnerships for Coastal Development and Blue Economy Investment</h6>
                            <small><i class="bi bi-calendar3"></i> Oct 6, 2023</small>
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
            <p>Subscribe to our newsletter to receive the latest news on trade missions and investment opportunities from Jumuiya ya Kaunti za Pwani.</p>
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