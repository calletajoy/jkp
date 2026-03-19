<?php

/**
 * pages/townhall-climate-change.php
 * Townhall Page — Jumuiya ya Kaunti za Pwani
 * Climate Change Discussions - Coastal Edition
 */

$pageTitle    = 'Townhall discussions on climate change, Coastal Edition';
$currentPage  = 'news';
$heroTitle    = 'Townhall discussions on climate change, Coastal Edition';
$heroSubtitle = 'Climate Change Dialogue';

// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'http://localhost:8000/assets/images/townhall-hero.jpg';
$ogDescription = 'JKP hosted a series of townhall discussions bringing together coastal leaders, experts, and community members to address the urgent challenges of climate change and its impact on our region. Watch the recordings from our distinguished speakers below.';
$ogUrl = 'http://localhost:8000/townhall-climate-change';

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
    --light-bg: #f8f9fa;
    --text-dark: #1e2b3c;
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

/* Video Cards - Three across */
.video-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.video-card {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.15);
    transition: all 0.4s ease;
    height: 100%;
    cursor: pointer;
}

.video-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 45px -15px var(--primary-blue);
}

.video-thumbnail {
    position: relative;
    width: 100%;
    height: 180px;
    overflow: hidden;
}

.video-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.video-card:hover .video-thumbnail img {
    transform: scale(1.1);
}

.play-button-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    cursor: pointer;
}

.play-button-overlay i {
    font-size: 3rem;
    color: white;
    background: rgba(0,206,209,0.8);
    border-radius: 50%;
    padding: 10px;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.video-card:hover .play-button-overlay i {
    transform: scale(1.15);
    background: var(--turquoise);
    box-shadow: 0 0 30px rgba(0,206,209,0.5);
}

.video-content {
    padding: 1.5rem;
}

.video-title {
    font-size: 1rem;
    font-weight: 600;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    line-height: 1.5;
}

.video-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    color: #6c757d;
    font-size: 0.85rem;
}

.video-meta i {
    color: var(--primary-blue);
    margin-right: 0.3rem;
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
    .video-grid {
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
}

@media (max-width: 768px) {
    .article-header h1 {
        font-size: 1.6rem;
    }
    
    .video-grid {
        grid-template-columns: 1fr;
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
                    <a href="/news-updates?category=Go Blue Component 1" class="category-badge">
                        <i class="bi bi-tag"></i> Go Blue Component 1
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>Townhall discussions on climate change, Coastal Edition</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> March 15, 2024</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/townhall-hero.jpg" alt="Townhall discussions on climate change, Coastal Edition" onerror="this.src='/assets/images/placeholders/climate-hero.jpg'">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">JKP hosted a series of townhall discussions bringing together coastal leaders, experts, and community members to address the urgent challenges of climate change and its impact on our region. Watch the recordings from our distinguished speakers below.</p>
                    
                    <!-- Video Recordings -->
                    <h3 class="sub-heading">Watch the Recordings</h3>
                    <p>Click on any video below to watch the full townhall discussion on our YouTube channel.</p>
                    
                    <?php
                    $videos = [
                        [
                            'title' => "JKP's Chairman, H.E. Gideon Mung'aro, presented during KTN's Townhall discussions on climate change.",
                            'youtube' => 'https://www.youtube.com/watch?v=d3tyYlEWvcc&t=7s',
                            'thumbnail' => '/assets/images/townhall dis (3).png',
                            'speaker' => 'H.E. Gideon Mung\'aro',
                            'role' => 'JKP Chairman',
                            'duration' => 'Full Recording'
                        ],
                        [
                            'title' => "JKP's Gladys Mjama presents on climate change during Townhall discussions, Coast Edition.",
                            'youtube' => 'https://www.youtube.com/watch?v=a3LI0x553C4&t=6s',
                            'thumbnail' => '/assets/images/townhall dis (1).png',
                            'speaker' => 'Gladys Mjama',
                            'role' => 'JKP Climate Change Lead',
                            'duration' => 'Full Recording'
                        ],
                        [
                            'title' => "GoBlue Advisor Ali Mwanzei presents on climate change during Townhall discussions, Coast Edition.",
                            'youtube' => 'https://www.youtube.com/watch?v=opwxAPKr_Pg&t=1s',
                            'thumbnail' => '/assets/images/townhall dis (2).png',
                            'speaker' => 'Ali Mwanzei',
                            'role' => 'GoBlue Advisor',
                            'duration' => 'Full Recording'
                        ],
                    ];

                    // Fallback images if specific ones don't exist
                    $fallbackImages = [
                        '/assets/images/placeholders/event-1.jpg',
                        '/assets/images/placeholders/event-2.jpg',
                        '/assets/images/placeholders/event-3.jpg',
                    ];
                    ?>
                    
                    <div class="video-grid">
                        <?php foreach ($videos as $index => $video): ?>
                            <div class="video-card" onclick="window.open('<?php echo $video['youtube']; ?>', '_blank')">
                                <div class="video-thumbnail">
                                    <img 
                                        src="<?php echo $video['thumbnail']; ?>" 
                                        alt="<?php echo htmlspecialchars($video['title']); ?>"
                                        onerror="this.src='<?php echo $fallbackImages[$index]; ?>'"
                                    >
                                    <div class="play-button-overlay">
                                        <i class="bi bi-play-circle-fill"></i>
                                    </div>
                                </div>
                                <div class="video-content">
                                    <h3 class="video-title"><?php echo htmlspecialchars($video['title']); ?></h3>
                                    <div class="video-meta">
                                        <span><i class="bi bi-person-circle"></i> <?php echo $video['speaker']; ?></span>
                                        <span><i class="bi bi-clock"></i> <?php echo $video['duration']; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Quote from Chairman -->
                    <div class="quote-card">
                        <div class="quote-text">
                            "The coastal region is on the frontlines of climate change. These townhall discussions are crucial for bringing together our communities, experts, and leaders to develop practical solutions that protect our people, our economy, and our unique environment."
                        </div>
                        <div class="quote-author">
                            <i class="bi bi-chat-quote"></i>
                            H.E. Gideon Mung'aro, JKP Chairman
                        </div>
                    </div>
                    
                    <!-- Discussion Highlights -->
                    <h3 class="sub-heading">Discussion Highlights</h3>
                    <p>The townhall discussions covered a wide range of topics including the impact of rising sea levels on coastal communities, sustainable fishing practices, mangrove restoration efforts, and community-based adaptation strategies. Speakers emphasized the need for collaborative approaches involving county governments, national agencies, development partners, and local communities.</p>
                    
                    <p>Key outcomes from the discussions include commitments to enhance coastal protection infrastructure, expand mangrove restoration programs, support alternative livelihoods for fishing communities, and strengthen early warning systems for extreme weather events.</p>
                    
                    <!-- Climate Impact Stats -->
                    <h3 class="sub-heading">Climate Impact on Coastal Region</h3>
                    <div class="quote-card" style="background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue)); color: white;">
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; text-align: center;">
                            <div>
                                <div style="font-size: 2rem; font-weight: 800;">65%</div>
                                <div style="font-size: 0.9rem;">of coastal communities affected by erosion</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: 800;">40%</div>
                                <div style="font-size: 0.9rem;">decline in fish stocks</div>
                            </div>
                            <div>
                                <div style="font-size: 2rem; font-weight: 800;">15+</div>
                                <div style="font-size: 0.9rem;">mangrove restoration sites</div>
                            </div>
                        </div>
                    </div>
                    
                    <p>The discussions also highlighted the importance of integrating traditional knowledge with scientific research, and the need for youth and women to be actively involved in climate action initiatives across the six coastal counties.</p>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                        <?php 
                        $articleUrl = urlencode('http://localhost:8000/townhall-climate-change');
                        $articleTitle = urlencode('Townhall discussions on climate change, Coastal Edition');
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
                        <li class="category-item">
                            <a href="/news-updates?category=Climate Change" class="category-link">
                                <i class="bi bi-folder"></i>
                                Climate Change
                            </a>
                            <span class="category-count">4</span>
                        </li>
                    </ul>
                </div>

                <!-- Archives Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="widget-title">Archives</h4>
                    <ul class="archive-list">
                        <li class="archive-item">
                            <a href="/news-updates?month=Mar 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                March 2024
                            </a>
                            <span class="archive-count">3</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Feb 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                February 2024
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Jan 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                January 2024
                            </a>
                            <span class="archive-count">4</span>
                        </li>
                    </ul>
                </div>

                <!-- Previous News Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Related News</h4>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/agri summit.jpeg" alt="Agriculture Summit">
                        </div>
                        <div class="prev-news-info">
                            <h6>Jumuiya Ya Pwani Agriculture Revitalization Summit</h6>
                            <small><i class="bi bi-calendar3"></i> Feb 24, 2026</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/fauna.jpeg" alt="Ocean Conservation">
                        </div>
                        <div class="prev-news-info">
                            <h6>Ocean Conservation and Sustainable Coastal Development Workshop</h6>
                            <small><i class="bi bi-calendar3"></i> Feb 26, 2026</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/strength bi.png" alt="Australian Visit">
                        </div>
                        <div class="prev-news-info">
                            <h6>Strengthening Bilateral Relations — Australian Deputy High Commissioner Visits JKP Offices</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 19, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subscribe Section -->
<section class="subscribe-section" style="background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue)); padding: 3rem 0; margin-top: 2rem; border-radius: 20px; color: white;">
    <div class="container">
        <div class="subscribe-content" style="text-align: center; max-width: 600px; margin: 0 auto;">
            <h3 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem; font-family: 'Playfair Display', serif;">Stay Updated</h3>
            <p style="margin-bottom: 2rem; opacity: 0.9;">Subscribe to our newsletter to receive the latest news on climate action and coastal resilience initiatives from Jumuiya ya Kaunti za Pwani.</p>
            <form class="subscribe-form" style="display: flex; gap: 1rem; max-width: 500px; margin: 0 auto;">
                <input type="email" placeholder="Enter your email address" required style="flex: 1; padding: 1rem 1.5rem; border: none; border-radius: 50px; font-family: 'Montserrat', sans-serif;">
                <button type="submit" style="background: var(--dark-blue); color: white; border: none; padding: 1rem 2rem; border-radius: 50px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">Subscribe</button>
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