<?php

/**
 * pages/pages/townhall-climate-change.php
 * Townhall Page — Jumuiya ya Kaunti za Pwani
 * Climate Change Discussions - Coastal Edition
 */


$pageTitle    = 'Townhall discussions on climate change, Coastal Edition';
$currentPage  = 'news';
$heroTitle    = 'Townhall discussions on climate change, Coastal Edition';
$heroSubtitle = 'Home,Townhall Discussions';



// Add Open Graph and Twitter Card meta tags for social sharing
$ogImage = 'https://dev.jumuiya.org/assets/images/tourism.png';
$ogDescription = 'On Friday, 29th September 2023 at Muthu-Nyali Beach Hotel–Mombasa, Jumuiya ya Kaunti za Pwani (JKP) supported by Camões Institute – Portugal (Camões IP), held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030.';
$ogUrl = 'https://dev.jumuiya.org/jkp-tourism-blueprint';

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




<!-- ===== Page Styles ===== -->
<style>
    /* Hero Section */
    .townhall-hero {
        background: linear-gradient(135deg, var(--navy) 0%, var(--deep-blue) 100%);
        padding: 100px 0 80px;
        position: relative;
        overflow: hidden;
    }

    .townhall-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('/assets/images/pattern-wave.png') repeat;
        opacity: 0.1;
        pointer-events: none;
    }

    .townhall-hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: white;
        line-height: 1.2;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
    }

    .townhall-hero .breadcrumb {
        background: transparent;
        padding: 0;
        margin-bottom: 2rem;
    }

    .townhall-hero .breadcrumb-item,
    .townhall-hero .breadcrumb-item a {
        color: rgba(255,255,255,0.8);
        text-decoration: none;
        font-weight: 300;
    }

    .townhall-hero .breadcrumb-item.active {
        color: var(--turquoise);
    }

    .townhall-hero .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255,255,255,0.5);
    }

    .townhall-hero .lead {
        font-size: 1.25rem;
        color: rgba(255,255,255,0.9);
        max-width: 800px;
        margin: 2rem 0 0;
        line-height: 1.8;
    }

    /* Video Cards Section */
    .video-cards-section {
        padding: 80px 0;
        background: var(--light-bg);
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 1rem;
    }

    .section-title p {
        color: #6c757d;
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
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
        box-shadow: 0 30px 45px -15px var(--turquoise);
    }

    .video-thumbnail {
        position: relative;
        width: 100%;
        height: 220px;
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
        font-size: 4rem;
        color: white;
        background: rgba(0,206,209,0.8);
        border-radius: 50%;
        padding: 10px;
        width: 70px;
        height: 70px;
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
        padding: 1.8rem;
    }

    .video-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--navy);
        margin-bottom: 1rem;
        line-height: 1.5;
    }

    .video-meta {
        display: flex;
        align-items: center;
        gap: 1rem;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .video-meta i {
        color: var(--turquoise);
        margin-right: 0.3rem;
    }

    @media (max-width: 768px) {
        .townhall-hero h1 {
            font-size: 2.5rem;
        }

        .townhall-hero .lead {
            font-size: 1.1rem;
        }

        .video-thumbnail {
            height: 200px;
        }
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
    .grid-container-4col {
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
    
    .grid-container-4col {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .stakeholders-grid,
    .objectives-grid,
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
    
    .grid-container-4col {
        grid-template-columns: 1fr;
    }
    
    .subscribe-form {
        flex-direction: column;
    }
    
    .share-buttons {
        justify-content: center;
    }
    
    .timeline {
        padding-left: 1rem;
    }
    
    .objective-card {
        flex-direction: column;
        text-align: center;
    }
}

/* Minimize spacing */
.townhall-hero {
    padding: 10px  0 5px !important;
}

.video-cards-section {
    padding: 5px 0 !important;
}

.section-title {
    margin-bottom: 15px !important;
}

.section-title h2 {
    margin-bottom: 5px !important;
}

.section-title p {
    margin-bottom: 0 !important;
}
</style>


<!-- ===== Hero Section ===== -->
<section class="townhall-hero">
    <div class="container">
        
        
        
    </div>
</section>

<!-- ===== Video Cards Section ===== -->
<section class="video-cards-section">
    <div class="container">
        <div class="section-title">
            <h2>Townhall discussions on climate change, Coastal Edition</h2>
            <p>Watch the recordings from our expert panel discussions on climate change impacts and solutions for the coastal region</p>
        </div>

        <div class="row">
            <!-- Main Content Column (Left side - 8 columns) -->
            <div class="col-lg-8">
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

                <div class="row g-4">
                    <?php foreach ($videos as $index => $video): ?>
                        <div class="col-md-6 col-lg-6">
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
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Share Buttons -->
                <div class="share-section" data-aos="fade-up">
                    <div class="share-title">Share this article</div>
                    <div class="share-buttons">
                                              <?php 
// Dynamic URL for sharing - works on any domain (localhost, dev, production)
$articleUrl = urlencode($currentUrl);
$articleTitle = urlencode($pageTitle);
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

            <!-- Sidebar Column (Right side - 4 columns) -->
            <div class="col-lg-4">
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
                            <img src="/assets/images/partnerships.png" alt="Partnerships">
                        </div>
                        <div class="prev-news-info">
                            <h6>Partnerships for Coastal Development and Blue Economy Investment</h6>
                            <small><i class="bi bi-calendar3"></i> Oct 6, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/iowa state.png" alt="Iowa State">
                        </div>
                        <div class="prev-news-info">
                            <h6>Iowa State University announces $25,000 scholarships</h6>
                            <small><i class="bi bi-calendar3"></i> Nov 21, 2023</small>
                        </div>
                    </div>
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/signing collabo.png" alt="WCS Agreement">
                        </div>
                        <div class="prev-news-info">
                            <h6>Collaborative Framework Agreement for Marine Conservation</h6>
                            <small><i class="bi bi-calendar3"></i> Jan 26, 2024</small>
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
            <p>Subscribe to our newsletter to receive the latest news and updates on tourism and cultural heritage initiatives from Jumuiya ya Kaunti za Pwani.</p>
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
