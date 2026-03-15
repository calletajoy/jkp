<?php
/**
 * pages/iowa-state-scholarships.php
 * Iowa State University Scholarships for Sub-Saharan Africa Students Article Page
 */

$pageTitle    = 'Iowa State University announces $25,000 annual scholarships on food security courses for Sub-Saharan Africa students';
$currentPage  = 'news';
$heroTitle    = 'Iowa State University Scholarships';
$heroSubtitle = '$25,000 Annual Scholarships for Food Security Courses';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/iowa state.png';
$ogDescription = 'Iowa State University has announced its scholarship program for students from Sub-Saharan Africa to pursue graduate studies within its College of Agriculture and Life Science through the Borel Global Fellows Program.';
$ogUrl = 'http://localhost:8000/iowa-state-scholarships';

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

/* Secondary Image */
.secondary-image {
    margin: 2.5rem 0;
}

.secondary-image img {
    width: 100%;
    max-height: 400px;
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
    font-size: 2.5rem;
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

/* Eligibility List */
.eligibility-list {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.eligibility-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    margin-bottom: 1.2rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.eligibility-item:hover {
    transform: translateX(5px);
    background: rgba(110,193,228,0.05);
}

.eligibility-icon {
    width: 40px;
    height: 40px;
    background: var(--primary-blue);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.eligibility-text {
    color: #555;
    line-height: 1.6;
}

/* Funding Details */
.funding-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin: 2rem 0;
}

.funding-card {
    background: white;
    padding: 1.8rem;
    border-radius: 15px;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
}

.funding-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px var(--primary-blue);
    border-color: var(--primary-blue);
}

.funding-icon {
    width: 70px;
    height: 70px;
    background: rgba(110,193,228,0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    color: var(--primary-blue);
    font-size: 2rem;
}

.funding-card h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.funding-amount {
    font-size: 1.8rem;
    font-weight: 800;
    color: var(--primary-blue);
    margin-bottom: 0.5rem;
}

.funding-detail {
    color: #666;
    font-size: 0.95rem;
}

/* Duration Info */
.duration-info {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin: 2rem 0;
}

.duration-badge {
    background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.duration-badge i {
    font-size: 1.2rem;
}

/* Application Process */
.application-steps {
    margin: 2rem 0;
}

.step-item {
    display: flex;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
    padding: 1.2rem;
    background: #f8f9fa;
    border-radius: 10px;
    border-left: 4px solid var(--primary-blue);
}

.step-number {
    width: 40px;
    height: 40px;
    background: var(--primary-blue);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    font-size: 1.2rem;
    flex-shrink: 0;
}

.step-content {
    flex: 1;
}

.step-content p {
    margin: 0;
    color: #555;
}

.step-content strong {
    color: var(--dark-blue);
}

.deadline-highlight {
    background: rgba(110,193,228,0.2);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    display: inline-block;
    font-weight: 700;
    color: var(--dark-blue);
    margin-top: 0.5rem;
}

/* Contact Button */
.apply-button {
    display: inline-flex;
    align-items: center;
    gap: 1rem;
    background: var(--primary-blue);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    margin: 1.5rem 0;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px -5px rgba(110,193,228,0.3);
}

.apply-button:hover {
    background: var(--dark-blue);
    transform: translateY(-3px);
    color: white;
    box-shadow: 0 15px 25px -5px rgba(36,64,128,0.4);
}

.apply-button i {
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
    
    .funding-grid {
        grid-template-columns: 1fr;
    }
    
    .duration-info {
        flex-direction: column;
        align-items: center;
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
    
    .eligibility-item {
        flex-direction: column;
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
                    <h1>Iowa State University announces $25,000 annual scholarships on food security courses for Sub-Saharan Africa students</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> November 21, 2023</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/iowa state.png" alt="Iowa State University">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">Iowa State University has announced its scholarship program for students from Sub-Saharan Africa to pursue graduate studies within its College of Agriculture and Life Science through the Borel Global Fellows Program.</p>
                    
                    <p>The scholarship will cover a maximum amount of <strong>$25,000 per year</strong> for each student to cover graduate student stipends. The initiative aims to address food and nutrition insecurity, enhance wealth, and improve health for subsistence farmers in Sub-Saharan Africa by educating scientists at Iowa State University who will serve as knowledge leaders within the region.</p>
                    
                    <p>The Borel Global Fellows Program was established in 2018, due to a scholarship fund initiated by ISU alumni Jim and Marcia Borel.</p>
                </div>

                <!-- Secondary Image -->
                <div class="secondary-image" data-aos="fade-up">
                    <img src="/assets/images/iowa-state-campus.jpg" alt="Iowa State University Campus">
                </div>

                <!-- Eligibility Section -->
                <div class="article-content">
                    <h3 class="sub-heading">Eligibility Requirements</h3>
                    
                    <div class="eligibility-list">
                        <div class="eligibility-item">
                            <div class="eligibility-icon"><i class="bi bi-check-lg"></i></div>
                            <div class="eligibility-text">Secure admission to a graduate program in the College of Agriculture and Life Sciences</div>
                        </div>
                        <div class="eligibility-item">
                            <div class="eligibility-icon"><i class="bi bi-check-lg"></i></div>
                            <div class="eligibility-text">Hold citizenship in a Sub-Saharan African country (e.g., Nigeria, Kenya, etc.)</div>
                        </div>
                        <div class="eligibility-item">
                            <div class="eligibility-icon"><i class="bi bi-check-lg"></i></div>
                            <div class="eligibility-text">Pledge to finish graduate studies, contributing to a career focused on food security in Sub-Saharan Africa</div>
                        </div>
                        <div class="eligibility-item">
                            <div class="eligibility-icon"><i class="bi bi-check-lg"></i></div>
                            <div class="eligibility-text">Conduct the majority of their graduate research in Sub-Saharan Africa</div>
                        </div>
                        <div class="eligibility-item">
                            <div class="eligibility-icon"><i class="bi bi-check-lg"></i></div>
                            <div class="eligibility-text">Express an intention to work and reside in Sub-Saharan Africa after completing their graduate studies</div>
                        </div>
                    </div>
                    
                    <p>The scholarship will cover a maximum amount of <strong>$25,000 per year</strong> for each student to cover graduate student stipends.</p>
                </div>

                <!-- Stats Highlight -->
                <div class="stats-highlight">
                    <div class="stat-item">
                        <div class="stat-number">$25K</div>
                        <div class="stat-label">Annual Scholarship</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">30</div>
                        <div class="stat-label">Months (MS)</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">42</div>
                        <div class="stat-label">Months (PhD)</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">Jan 15</div>
                        <div class="stat-label">Deadline</div>
                    </div>
                </div>

                <!-- Funding Details Section -->
                <div class="article-content">
                    <h3 class="sub-heading">Funding Details</h3>
                    
                    <div class="funding-grid">
                        <div class="funding-card">
                            <div class="funding-icon"><i class="bi bi-cash-stack"></i></div>
                            <h4>Annual Stipend</h4>
                            <div class="funding-amount">$25,000</div>
                            <div class="funding-detail">Maximum amount per year for graduate student stipends</div>
                        </div>
                        <div class="funding-card">
                            <div class="funding-icon"><i class="bi bi-airplane"></i></div>
                            <h4>Travel Funding</h4>
                            <div class="funding-amount">✓ Included</div>
                            <div class="funding-detail">Travel funding for both student and advisor to/from Africa for research purposes</div>
                        </div>
                    </div>
                    
                    <p>Nairametrics learns that the scholarship will provide a maximum amount of <strong>$25,000 per year</strong> per student to cover graduate student stipends. On the other hand, this could be a combination of a partial stipend and research funding.</p>
                    
                    <div class="duration-info">
                        <div class="duration-badge">
                            <i class="bi bi-mortarboard"></i>
                            MS Students: Up to 30 months
                        </div>
                        <div class="duration-badge">
                            <i class="bi bi-mortarboard"></i>
                            PhD Students: Up to 42 months
                        </div>
                    </div>
                    
                    <p>In addition, travel funding will be provided for both the student and advisor to and from Africa for research purposes.</p>
                </div>

                <!-- Application Process Section -->
                <div class="article-content">
                    <h3 class="sub-heading">Application Process</h3>
                    
                    <div class="application-steps">
                        <div class="step-item">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <p><strong>Cover Letter</strong> from the major professor who will be sponsoring the student, stating commitment to providing additional necessary funding (tuition, fees, research costs) and dedication to supporting research endeavors in Sub-Saharan Africa.</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <p><strong>Student's CV</strong> - Current curriculum vitae</p>
                            </div>
                        </div>
                        
                        <div class="step-item">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <p><strong>Statement of Purpose</strong> - Copy of the student's statement of purpose</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="deadline-highlight">
                        <i class="bi bi-calendar-event"></i> Annual Deadline: January 15
                    </div>
                    
                    <p>A comprehensive application will include a cover letter from the major professor, the student's CV, and a copy of the student's statement of purpose.</p>
                    
                    <p>The application is to be sent to <strong>Dr. David Acker</strong>, the Associate Dean for Global Engagement.</p>
                    
                    <!-- Apply Button -->
                    <a href="mailto:acker@iastate.edu?subject=Borel%20Global%20Fellows%20Program%20Application" class="apply-button">
                        <i class="bi bi-envelope-paper"></i>
                        Send Application to Dr. David Acker
                        <i class="bi bi-box-arrow-up-right"></i>
                    </a>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this opportunity</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/iowa-state-scholarships');
                        $articleTitle = urlencode('Iowa State University announces $25,000 annual scholarships on food security courses for Sub-Saharan Africa students');
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
                            <a href="/news-updates?month=Nov 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                November 2023
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Oct 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                October 2023
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Sep 23" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                September 2023
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
                            <img src="/assets/images/signing collabo.png" alt="WCS JKP Agreement">
                        </div>
                        <div class="prev-news-info">
                            <h6>Collaborative Framework Agreement for Marine Conservation</h6>
                            <small><i class="bi bi-calendar3"></i> Jan 26, 2024</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/supply contract.png" alt="Supply Contract">
                        </div>
                        <div class="prev-news-info">
                            <h6>Supply contract for cold rooms + ice machines</h6>
                            <small><i class="bi bi-calendar3"></i> Mar 19, 2024</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/ecoblue.png" alt="Blue Economy Training">
                        </div>
                        <div class="prev-news-info">
                            <h6>Blue Economy vocational training program</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 29, 2024</small>
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
            <p>Subscribe to our newsletter to receive the latest news and opportunities from Jumuiya ya Kaunti za Pwani.</p>
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