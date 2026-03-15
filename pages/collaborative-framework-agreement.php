<?php
/**
 * pages/collaborative-framework-agreement.php
 * WCS and JKP Collaborative Framework Agreement for Marine Conservation Article Page
 */

$pageTitle    = 'The signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP';
$currentPage  = 'news';
$heroTitle    = 'Collaborative Framework Agreement';
$heroSubtitle = 'Marine Conservation Partnership';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/signing collabo.png';
$ogDescription = 'The Wildlife Conservation Society (WCS) and the Jumuiya Economic Development Secretariat (JKP) signed a Collaborative Framework Agreement on Thursday, January 25, 2024, for marine conservation initiatives within the six coastal counties.';
$ogUrl = 'http://localhost:8000/collaborative-framework-agreement';

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
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin: 2rem 0 1rem;
}

/* Location Info */
.location-info {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
    display: flex;
    align-items: center;
    gap: 1rem;
}

.location-icon {
    width: 50px;
    height: 50px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-blue);
    font-size: 1.5rem;
}

.location-text p {
    margin: 0;
    font-size: 1rem;
}

.location-text strong {
    color: var(--dark-blue);
}

/* Partnership Focus Areas */
.focus-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin: 2rem 0;
}

.focus-card {
    background: white;
    padding: 1.2rem;
    border-radius: 12px;
    box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 1rem;
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.focus-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px -5px var(--primary-blue);
    border-color: var(--primary-blue);
}

.focus-icon {
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

.focus-text {
    font-weight: 500;
    color: var(--dark-blue);
}

/* Commitments Grid */
.commitments-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.commitment-card {
    background: #f8f9fa;
    padding: 1.8rem;
    border-radius: 15px;
    border-top: 4px solid var(--primary-blue);
    transition: all 0.3s ease;
}

.commitment-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px -10px var(--primary-blue);
}

.commitment-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.commitment-card h4 i {
    color: var(--primary-blue);
}

.commitment-card ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.commitment-card ul li {
    position: relative;
    padding-left: 1.5rem;
    margin-bottom: 0.8rem;
    color: #666;
    font-size: 0.95rem;
}

.commitment-card ul li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--primary-blue);
    font-weight: bold;
    font-size: 1.2rem;
}

/* Image Grid */
.image-grid {
    margin: 3rem 0;
}

.image-grid h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-blue);
    font-family: 'Playfair Display', serif;
    margin-bottom: 1.5rem;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.grid-item {
    position: relative;
    overflow: hidden;
    border-radius: 15px;
    box-shadow: 0 15px 30px -15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.grid-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 40px -15px var(--primary-blue);
}

.grid-item img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.grid-item:hover img {
    transform: scale(1.05);
}

/* Contact Card */
.contact-card {
    background: linear-gradient(135deg, rgba(110,193,228,0.1) 0%, rgba(36,64,128,0.1) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border: 1px solid rgba(110,193,228,0.3);
}

.contact-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
}

.contact-details {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    flex-wrap: wrap;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #555;
}

.contact-item i {
    color: var(--primary-blue);
    font-size: 1.2rem;
}

.contact-item a {
    color: var(--dark-blue);
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-item a:hover {
    color: var(--primary-blue);
}

/* Download Section */
.download-section {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    text-align: center;
    border: 2px dashed var(--primary-blue);
}

.download-section h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
}

.download-button {
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    background: var(--primary-blue);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.download-button:hover {
    background: var(--dark-blue);
    transform: translateY(-3px);
    color: white;
}

/* About Section */
.about-section {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
}

.about-section h4 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.about-section p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 1rem;
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
    
    .focus-grid,
    .commitments-grid,
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .form-group.full-width {
        grid-column: span 1;
    }
    
    .grid-container {
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
    
    .contact-details {
        flex-direction: column;
        align-items: flex-start;
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
                    <h1>The signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> January 26, 2024</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/signing collabo.png" alt="WCS and JKP Signing Ceremony">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">The Wildlife Conservation Society (WCS) and the Jumuiya Economic Development Secretariat (JKP) signed a Collaborative Framework Agreement on Thursday, January 25, 2024. The ceremony took place at the Jumuiya offices, Bustani Close, off Links Road, Nyali, Mombasa, Kenya.</p>
                    
                    <!-- Location Info -->
                    <div class="location-info">
                        <div class="location-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="location-text">
                            <p><strong>Jumuiya Offices</strong><br>Bustani Close, off Links Road, Nyali, Mombasa, Kenya</p>
                        </div>
                    </div>
                    
                    <p>This agreement is geared towards fostering a strategic partnership between WCS and JKP in marine conservation initiatives within the Jumuiya 2030 regional economic development agenda. The focus is on the six coastal counties, addressing critical areas such as fisheries management, ecotourism, marine protection, waste management, blue carbon, and coastal developments.</p>
                    
                    <!-- Focus Areas Grid -->
                    <h3 class="sub-heading">Focus Areas</h3>
                    <div class="focus-grid">
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-fish"></i></span><span class="focus-text">Fisheries Management</span></div>
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-tree"></i></span><span class="focus-text">Ecotourism</span></div>
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-shield"></i></span><span class="focus-text">Marine Protection</span></div>
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-trash"></i></span><span class="focus-text">Waste Management</span></div>
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-droplet"></i></span><span class="focus-text">Blue Carbon</span></div>
                        <div class="focus-card"><span class="focus-icon"><i class="bi bi-building"></i></span><span class="focus-text">Coastal Developments</span></div>
                    </div>
                    
                    <p>The primary objectives of this agreement are to collaborate on and synergize efforts in the Blue Economy and marine conservation space, specifically through initiatives like Go Blue and Miamba Yetu. Furthermore, the collaboration aims to prioritize marine conservation initiatives that promote sustainable livelihoods for coastal communities, while also ensuring the protection and conservation of coral reefs and linked ecosystems, including mangroves and seagrasses.</p>
                </div>

                <!-- Image Grid - 2 images -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Signing Ceremony Highlights</h3>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="/assets/images/collabo-1.png" alt="Signing Ceremony">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/collabo-2.png" alt="Group Photo">
                        </div>
                    </div>
                </div>

                <!-- Commitments Section -->
                <div class="article-content">
                    <h3 class="sub-heading">Commitments and Responsibilities</h3>
                    
                    <div class="commitments-grid">
                        <!-- WCS Commitments -->
                        <div class="commitment-card">
                            <h4><i class="bi bi-shield-check"></i> WCS Commitments</h4>
                            <ul>
                                <li>Supporting the identification, co-implementation, and co-funding of projects through the Miamba Yetu program</li>
                                <li>Developing interventions to transition coastal communities away from practices that degrade reefs and linked coastal habitats</li>
                                <li>Engaging in joint activities with JKP on protection of reefs, sustainable ocean production, sustainable tourism, and circular economy and pollution</li>
                            </ul>
                        </div>
                        
                        <!-- JKP Commitments -->
                        <div class="commitment-card">
                            <h4><i class="bi bi-building"></i> JKP Commitments</h4>
                            <ul>
                                <li>Establishing linkages with key activities under Go Blue, including Mikindani Waste Management initiative</li>
                                <li>Implementation of a Blue Carbon REDD+ project</li>
                                <li>Cooperating in the design and joint support of projects under Go Blue 2.0 (Go Blue Growth and Go Blue Environment)</li>
                                <li>Supporting WCS in coordinating training to build capacity of Beach Management Units and county officials</li>
                            </ul>
                        </div>
                    </div>
                    
                    <p>The signing of this Collaborative Framework Agreement represents a significant commitment from both WCS and JKP towards the shared vision of conserving marine resources and promoting sustainable development in the Jumuiya region.</p>
                    
                    <!-- Contact Information -->
                    <div class="contact-card">
                        <h4>For further information, please contact:</h4>
                        <div class="contact-details">
                            <div class="contact-item">
                                <i class="bi bi-person"></i>
                                <span>Gladys Mnjama: Sector Lead: Financial Services and Investments (JKP)</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:gladys.m@jumuiya.org">gladys.m@jumuiya.org</a>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-telephone"></i>
                                <a href="tel:+254729394414">+254 729 394 414</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Download Section -->
                    <div class="download-section">
                        <h4>Press Release</h4>
                        <p>Download the PDF version here: Press release on the signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP</p>
                        <a href="/assets/content-files/wcs-jkp-collaborative-framework-agreement.pdf" download class="download-button">
                            <i class="bi bi-file-pdf"></i>
                            Download PDF
                            <i class="bi bi-download"></i>
                        </a>
                    </div>
                    
                    <!-- About WCS -->
                    <div class="about-section">
                        <h4>About WCS</h4>
                        <p>The Wildlife Conservation Society (WCS) is a New York not-for-profit corporation dedicated to preserving the world's largest wild places in 14 priority regions, making significant strides in global conservation efforts. WCS is the convening agent for the Global Fund for Coral Reefs (GFCR) funded programme – Miamba Yetu: Sustainable Reef Investments. The GFCR was launched in 2021 as the first ever blended finance instrument dedicated to mobilising action and financial resources to protect and restore coral reef ecosystems. In 2022, the programme began implementation in Kenya and Tanzania – including the Zanzibar archipelago by supporting businesses that directly or indirectly benefit coral reefs and communities that depend on them. A proportion of grant funding is also provided to further de-risk investments and improve returns for businesses.</p>
                    </div>
                    
                    <!-- Duplicate Download Link -->
                    <p><a href="/assets/content-files/wcs-jkp-collaborative-framework-agreement.pdf" download>Download the PDF version here: Press release on the signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP</a></p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/collaborative-framework-agreement');
                        $articleTitle = urlencode('The signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP');
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
                            <a href="/news-updates?month=Jan 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                January 2024
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Dec 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                December 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Nov 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                November 2023
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
                            <img src="/assets/images/supply contract.png" alt="Supply Contract">
                        </div>
                        <div class="prev-news-info">
                            <h6>Supply contract for ancillary services: cold rooms + ice</h6>
                            <small><i class="bi bi-calendar3"></i> Mar 19, 2024</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/advo 4th gen.png" alt="Advocating for 4th-Generation Basis">
                        </div>
                        <div class="prev-news-info">
                            <h6>Advocating for 4th-Generation Basis for Revenue Sharing</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 09, 2024</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/strength bi.png" alt="Australian Diplomat">
                        </div>
                        <div class="prev-news-info">
                            <h6>Australian Deputy High Commissioner Visits JKP</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 09, 2024</small>
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
            <p>Subscribe to our newsletter to receive the latest news and updates from Jumuiya ya Kaunti za Pwani.</p>
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