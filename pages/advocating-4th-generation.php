<?php
/**
 * pages/advocating-4th-generation.php
 * Advocating for 4th-Generation Basis for Enhanced Revenue Sharing Fairness Article Page
 */

$pageTitle    = 'Advocating for the 4th-Generation Basis for Enhanced Revenue Sharing Fairness';
$currentPage  = 'news';
$heroTitle    = 'Advocating for 4th-Generation Basis';
$heroSubtitle = 'Enhanced Revenue Sharing Fairness';

// Add Open Graph and Twitter Card meta tags for social sharing (localhost version for testing)
$ogImage = 'https://dev.jumuiya.org/assets/images/advo 4th gen.png';
$ogDescription = 'In a proactive move towards equitable revenue allocation, the JKP secretariat led by the Chairman H.E. Governor Gideon Mungaro, alongside all six coastal governors and senators, convened to analyze the Third Generation Basis for revenue sharing.';
$ogUrl = 'https://dev.jumuiya.org/advocating-4th-generation';

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

/* Leaders List */
.leaders-list {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
}

.leaders-title {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-family: 'Playfair Display', serif;
}

.leaders-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
}

.leader-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 0.95rem;
    color: #555;
}

.leader-item i {
    color: var(--primary-blue);
    font-size: 1rem;
}

/* Key Considerations */
.key-considerations {
    margin: 2.5rem 0;
}

.consideration-item {
    display: flex;
    gap: 15px;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: rgba(110,193,228,0.03);
    border-radius: 10px;
    transition: all 0.3s ease;
}

.consideration-item:hover {
    background: rgba(110,193,228,0.08);
    transform: translateX(5px);
}

.consideration-number {
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

.consideration-content h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--dark-blue);
    margin-bottom: 0.5rem;
    font-family: 'Playfair Display', serif;
}

.consideration-content p {
    color: #666;
    line-height: 1.6;
    margin: 0;
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

/* Quote Box */
.quote-box {
    background: linear-gradient(135deg, rgba(110,193,228,0.05) 0%, rgba(36,64,128,0.05) 100%);
    padding: 2rem;
    border-radius: 15px;
    margin: 2rem 0;
    border-left: 4px solid var(--primary-blue);
    font-style: italic;
    font-size: 1.1rem;
    color: #555;
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
    
    .leaders-grid {
        grid-template-columns: 1fr;
    }
    
    .grid-container {
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
    
    .consideration-item {
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
                    <a href="/news-updates?category=JKP News Updates" class="category-badge">
                        <i class="bi bi-tag"></i> JKP News Updates
                    </a>
                </div>

                <!-- Article Header -->
                <header class="article-header" data-aos="fade-up">
                    <h1>Advocating for the 4th-Generation Basis for Enhanced Revenue Sharing Fairness</h1>
                    <div class="article-meta">
                        <span><i class="bi bi-calendar3"></i> April 9, 2024</span>
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                    </div>
                </header>

                <!-- Featured Image -->
                <div class="featured-image" data-aos="fade-up" data-aos-delay="50">
                    <img src="/assets/images/advo 4th gen.png" alt="JKP Governors and Senators Meeting">
                </div>

                <!-- Article Content -->
                <div class="article-content" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead">In a proactive move towards equitable revenue allocation, the JKP secretariat led by the Chairman H.E. Governor Gideon Mungaro (Governor Kilifi County), in the presence of all six coastal governors and senators, convened to analyze the Third Generation Basis for revenue sharing between the national government and counties. The objective was clear: to shape a regional stance to present to the Commission on Revenue Allocation (CRA) for the forthcoming Fourth-Generation Basis.</p>
                    
                    <!-- Leaders List -->
                    <div class="leaders-list">
                        <div class="leaders-title">Present Governors & Senators</div>
                        <div class="leaders-grid">
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Gideon Mungaro - Kilifi (Chair)</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Fatuma Achani - Kwale</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Abdulswamad Shariff - Mombasa</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Dr. Dhadho Godhana - Tana River</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Issa Timamy - Lamu</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> H.E. Andrew Mwadime - Taita Taveta</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Boy Juma Boy - Senator Kwale</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Mohamed Faki - Senator Mombasa</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Stewart Madzayo - Senator Kilifi</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Danson Mungatana - Senator Tana River</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Kamau Joseph Githuku - Senator Lamu</div>
                            <div class="leader-item"><i class="bi bi-person-badge"></i> Hon. Johnes Mwaruma - Senator Taita Taveta</div>
                        </div>
                    </div>
                    
                    <h3 class="sub-heading">Key Considerations for Revenue Allocation</h3>
                    
                    <!-- Key Considerations List -->
                    <div class="key-considerations">
                        <div class="consideration-item">
                            <div class="consideration-number">1</div>
                            <div class="consideration-content">
                                <h4>Strategic Regional Positioning</h4>
                                <p>Recognizing the JKP region's significance as a gateway to the hinterland, boasting ports, unique tourism, and rich wildlife.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">2</div>
                            <div class="consideration-content">
                                <h4>Inclusion of Water Mass from the Land Area Index</h4>
                                <p>Acknowledging the importance of water bodies in the region's land area, advocating for their inclusion in revenue-sharing indices.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">3</div>
                            <div class="consideration-content">
                                <h4>Impact of Climate Change and Environmental Performance</h4>
                                <p>Highlighting the region's vulnerability to climate change and advocating for factors such as environmental performance to be integral in revenue allocation.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">4</div>
                            <div class="consideration-content">
                                <h4>Unique Disasters and Challenges</h4>
                                <p>Addressing the specific challenges faced by coastal regions due to climate change and sea-based activities, urging tailored considerations in revenue distribution.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">5</div>
                            <div class="consideration-content">
                                <h4>Blue Economy Integration</h4>
                                <p>Advocating for the incorporation of the blue economy sector, citing unique interventions and the need for capacity strengthening, such as Vocational Training Centers offering blue economy-related courses.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">6</div>
                            <div class="consideration-content">
                                <h4>Economic Contribution</h4>
                                <p>Emphasizing the significant contribution of JKP counties to the national GDP, warrants proportional representation in revenue-sharing formulas.</p>
                            </div>
                        </div>
                        
                        <div class="consideration-item">
                            <div class="consideration-number">7</div>
                            <div class="consideration-content">
                                <h4>Tourism Campaign Impact</h4>
                                <p>Highlighting the impact of initiatives like the "Go Kenya Coast" tourism campaign on the region's economic landscape, advocating for its recognition in revenue allocation metrics.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Grid - 10 images -->
                <div class="image-grid" data-aos="fade-up">
                    <h3>Meeting Highlights</h3>
                    <div class="grid-container">
                        <div class="grid-item">
                            <img src="/assets/images/advocate-1.png" alt="Governors Meeting">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-2.png" alt="Discussion Session">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-3.png" alt="Technical Presentation">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-4.png" alt="Group Photo">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-5.png" alt="Deliberations">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-6.png" alt="County Officials">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-7.png" alt="Senators Session">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-8.png" alt="Planning Meeting">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-9.png" alt="Strategy Discussion">
                        </div>
                        <div class="grid-item">
                            <img src="/assets/images/advocate-10.png" alt="Closing Remarks">
                        </div>
                    </div>
                </div>

                <!-- Article Content Continued -->
                <div class="article-content">
                    <p>Others in attendance included county secretaries, county executive committee members, chief officers, and directors for economic planning and budget from the JKP Region counties.</p>
                    
                    <div class="quote-box">
                        <i class="bi bi-quote"></i> The objective was clear: to shape a regional stance to present to the Commission on Revenue Allocation (CRA) for the forthcoming Fourth-Generation Basis.
                    </div>
                    
                    <p>The commitment of the JKP region to advocate for a more nuanced and inclusive Fourth-Generation Basis reflects a broader ambition for equitable development and prosperity. As discussions progress, it is hoped that these considerations will find resonance in the national dialogue, paving the way for a more just and balanced revenue-sharing framework.</p>
                    
                    <!-- Stats Highlight -->
                    <div class="stats-highlight">
                        <div class="stat-item">
                            <div class="stat-number">7</div>
                            <div class="stat-label">Key Considerations</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12</div>
                            <div class="stat-label">Governors & Senators</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Coastal Counties</div>
                        </div>
                    </div>
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
                            <a href="/news-updates?month=Apr 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                April 2024
                            </a>
                            <span class="archive-count">4</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Mar 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                March 2024
                            </a>
                            <span class="archive-count">2</span>
                        </li>
                        <li class="archive-item">
                            <a href="/news-updates?month=Feb 24" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                February 2024
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
                            <img src="/assets/images/kisauni.png" alt="Kisauni VTC Graduates">
                        </div>
                        <div class="prev-news-info">
                            <h6>Kisauni VTC Graduates 513 Students in Blue Economy Courses</h6>
                            <small><i class="bi bi-calendar3"></i> May 20, 2024</small>
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
                    <div class="prev-news-item">
                        <div class="prev-news-thumb">
                            <img src="/assets/images/govs.png" alt="JKP Governors">
                        </div>
                        <div class="prev-news-info">
                            <h6>JKP Governors Deliberations on CRA Formula</h6>
                            <small><i class="bi bi-calendar3"></i> Apr 19, 2024</small>
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

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>