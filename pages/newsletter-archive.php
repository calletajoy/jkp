<?php
/**
 * pages/newsletter-archive.php — Newsletter Archive Page
 */

$pageTitle    = 'Newsletter Archive';
$currentPage  = 'newsletter';
$heroTitle    = 'Newsletter Archive';
$heroSubtitle = 'Stay updated with Jumuiya ya Kaunti za Pwani';

// Add breadcrumb items for the hero section
$breadcrumbItems = [
    ['url' => '/', 'label' => 'Home'],
    ['url' => '/media-center', 'label' => 'Media Center'],
    ['label' => 'Newsletter Archive', 'active' => true]
];

ob_start();

include __DIR__ . '/../partials/page-hero.php';

// Blue color scheme (matching news-updates.php)
$primaryBlue = '#6EC1E4';
$darkBlue = '#244080';

// Get news posts for newsletter content (using same data structure)
$newsPosts = [
    [
        'id' => 1,
        'title' => 'Kisauni VTC Graduates 513 Students in Blue Economy Courses',
        'excerpt' => 'On Saturday, May 25, 2024, Kisauni VTC celebrated its 8th graduation ceremony. Out of the 813 graduates, 513 completed blue economy-related courses, namely Maritime Plumbing, Maritime Tourism & Hospitality, and Maritime Security. 60% secured job placements after their industrial attachments, and 25% transitioned to entrepreneurship.',
        'date' => '20',
        'month' => 'May 24',
        'author' => 'Editorial Staff',
        'image' => '/assets/images/kisauni.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 2,
        'title' => 'Blue Economy vocational training program',
        'excerpt' => 'Exciting news from Jumuiya\'s Go Blue Project! With support from the EU Delegation to Kenya, GIZ Kenya, and CAP YEI, we\'ve launched vocational training programs in Hotel & Hospitality, Maritime Transport & Logistics, and Maritime Security in the JKP region.',
        'date' => '29',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'image' => '/assets/images/ecoblue.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 3,
        'title' => 'JKP Governors Deliberations on the CRA\'s 4th Edition of the County Revenue Sharing Formula',
        'excerpt' => 'The Jumuiya Economic Development Secretariat, led by Governors Mombasa, Tana River, and Taita Taveta counties, concluded the final joint technical presentation and consultations on the 4th basis county revenue allocations.',
        'date' => '19',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'image' => '/assets/images/govs.png',
        'category' => 'Governance'
    ],
    [
        'id' => 4,
        'title' => 'Strengthening Bilateral Relations – Australian Deputy High Commissioner Visits JKP Offices',
        'excerpt' => 'The Australian Deputy High Commissioner for East Africa, Chris Ellinger, paid a courtesy visit to the offices of Jumuiya Ya Kaunti Za Pwani, marking a significant step towards enhancing ties between Australia and Kenya.',
        'date' => '09',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'image' => '/assets/images/strength bi.png',
        'category' => 'Partnerships'
    ],
    [
        'id' => 5,
        'title' => 'Advocating for the 4th-Generation Basis for Enhanced Revenue Sharing Fairness',
        'excerpt' => 'The commitment of the JKP region to advocate for a more nuanced and inclusive Fourth-Generation Basis reflects a broader ambition for equitable development and prosperity.',
        'date' => '09',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'image' => '/assets/images/advo 4th gen.png',
        'category' => 'Governance'
    ]
];

// Archive data (from news-updates.php)
$archives = [
    ['month' => 'May 2024', 'count' => 2],
    ['month' => 'April 2024', 'count' => 3],
    ['month' => 'March 2024', 'count' => 2],
    ['month' => 'January 2024', 'count' => 1],
    ['month' => 'November 2023', 'count' => 1],
    ['month' => 'October 2023', 'count' => 3],
    ['month' => 'September 2023', 'count' => 3],
    ['month' => 'August 2023', 'count' => 1],
    ['month' => 'July 2023', 'count' => 1],
    ['month' => 'June 2023', 'count' => 3],
];
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
    --light-bg: #f8f9fa;
    --grey-bg: #f0f0f0;
}

.newsletter-wrapper {
    padding: 3rem 0;
}

/* ===== Hero Section ===== */
.newsletter-hero {
    position: relative;
    background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('/assets/images/newsletter-bg.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    padding: 5rem 3rem;
    margin-bottom: 3rem;
    color: white;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.newsletter-hero .pre-title {
    font-size: 1.2rem;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 0.5rem;
    opacity: 0.9;
}

.newsletter-hero h1 {
    font-size: 5rem;
    font-weight: 800;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 5px;
    line-height: 1.2;
}

.newsletter-hero .date {
    font-size: 1.3rem;
    border-top: 2px solid var(--primary-blue);
    border-bottom: 2px solid var(--primary-blue);
    display: inline-block;
    padding: 0.5rem 2rem;
    margin-top: 1rem;
}

@media (max-width: 768px) {
    .newsletter-hero h1 {
        font-size: 3rem;
    }
    .newsletter-hero {
        padding: 3rem 1.5rem;
    }
}

/* ===== Main Grid Layout ===== */
.main-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
    margin-bottom: 3rem;
}

@media (max-width: 768px) {
    .main-grid {
        grid-template-columns: 1fr;
    }
}

/* Featured Article (Left Column - Blue background) */
.featured-article {
    background: var(--primary-blue);
    color: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.featured-article h2 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    border-bottom: 2px solid rgba(255,255,255,0.3);
    padding-bottom: 1rem;
}

.featured-article p {
    line-height: 1.8;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
}

/* Right Column Articles */
.right-articles {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.article-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
}

.article-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(36, 64, 128, 0.1);
    border-color: var(--primary-blue);
}

.article-card h3 {
    color: var(--dark-blue);
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.article-meta {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 1rem;
    color: #6c757d;
    font-size: 0.9rem;
}

.article-meta i {
    color: var(--primary-blue);
    margin-right: 5px;
}

.article-excerpt {
    color: #495057;
    line-height: 1.6;
    margin-bottom: 1rem;
}

.read-more-link {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s ease;
}

.read-more-link:hover {
    color: var(--dark-blue);
}

/* ===== Bottom Grid ===== */
.bottom-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
    margin-bottom: 3rem;
}

@media (max-width: 768px) {
    .bottom-grid {
        grid-template-columns: 1fr;
    }
}

/* Tips Box */
.tips-box {
    background: var(--grey-bg);
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.tips-box h3 {
    color: var(--dark-blue);
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--primary-blue);
    padding-bottom: 1rem;
}

.tips-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.tips-list li {
    padding: 0.8rem 0;
    border-bottom: 1px dashed #ccc;
    display: flex;
    align-items: center;
    gap: 15px;
    font-size: 1.1rem;
}

.tips-list li:last-child {
    border-bottom: none;
}

.tips-list .number {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    background: var(--primary-blue);
    color: white;
    border-radius: 50%;
    font-weight: 700;
    font-size: 0.9rem;
}

/* Image Box */
.newsletter-image {
    width: 100%;
    height: 100%;
    min-height: 300px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}

.newsletter-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ===== Subscribe Box ===== */
.subscribe-box {
    background: linear-gradient(135deg, var(--dark-blue) 0%, #1a2e5c 100%);
    border-radius: 12px;
    padding: 3rem;
    color: white;
    margin-bottom: 3rem;
    text-align: center;
}

.subscribe-box h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.subscribe-box p {
    font-size: 1.1rem;
    margin-bottom: 2rem;
    opacity: 0.9;
}

.subscribe-form {
    display: flex;
    max-width: 500px;
    margin: 0 auto;
    gap: 10px;
}

.subscribe-form input {
    flex: 1;
    padding: 1rem 1.5rem;
    border: none;
    border-radius: 50px;
    outline: none;
    font-size: 1rem;
}

.subscribe-form button {
    background: var(--primary-blue);
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.subscribe-form button:hover {
    background: white;
    color: var(--dark-blue);
}

@media (max-width: 576px) {
    .subscribe-form {
        flex-direction: column;
    }
    .subscribe-box {
        padding: 2rem;
    }
}

/* ===== Newsletter Archive List ===== */
.archive-section {
    background: white;
    border-radius: 12px;
    padding: 2.5rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    margin-bottom: 3rem;
}

.archive-section h3 {
    color: var(--dark-blue);
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--primary-blue);
    padding-bottom: 1rem;
}

.archive-years {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.archive-year h4 {
    color: var(--primary-blue);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.archive-year ul {
    list-style: none;
    padding: 0;
}

.archive-year li {
    padding: 0.5rem 0;
}

.archive-year a {
    color: #495057;
    text-decoration: none;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
}

.archive-year a:hover {
    color: var(--primary-blue);
}

.archive-year a i {
    font-size: 0.8rem;
    color: var(--primary-blue);
}

/* ===== More Articles Grid ===== */
.more-articles {
    margin-top: 3rem;
}

.more-articles h3 {
    color: var(--dark-blue);
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 2rem;
    border-bottom: 2px solid var(--primary-blue);
    padding-bottom: 1rem;
}

.articles-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

@media (max-width: 768px) {
    .articles-grid {
        grid-template-columns: 1fr;
    }
}

.mini-article {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
}

.mini-article:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(36, 64, 128, 0.1);
    border-color: var(--primary-blue);
}

.mini-article h4 {
    color: var(--dark-blue);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.8rem;
}

.mini-article .date {
    color: #6c757d;
    font-size: 0.85rem;
    margin-bottom: 0.8rem;
}

.mini-article .date i {
    color: var(--primary-blue);
    margin-right: 5px;
}
</style>

<section class="newsletter-wrapper">
    <div class="container">
        
        <!-- 1. Newsletter Hero Section -->
        <div class="newsletter-hero" data-aos="fade-up">
            <div class="pre-title">Jumuiya ya Kaunti za Pwani</div>
            <h1>NEWSLETTER</h1>
            <div class="date">March 2026 Edition</div>
        </div>

        <!-- 2. Main Grid (Two Column) -->
        <div class="main-grid" data-aos="fade-up">
            <!-- Left Column - Featured Article (Blue background) -->
            <div class="featured-article">
                <h2>Newsfeed</h2>
                <p>Hello & welcome! Let us tell you our impact stories!</p>
                <p>The JKP economic bloc has thus far created an impact through the projects introduced by its partners and sponsors, leading to a transformation of the entire Kenyan Coast Region.</p>
            </div>

            <!-- Right Column - Two Articles -->
            <div class="right-articles">
                <!-- Article 1 -->
                <div class="article-card">
                    <h3>Kisauni VTC Graduates 513 Students in Blue Economy Courses</h3>
                    <div class="article-meta">
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                        <span><i class="bi bi-calendar"></i> May 29, 2024</span>
                    </div>
                    <p class="article-excerpt">On Saturday, May 25, 2024, Kisauni VTC celebrated its 8th graduation ceremony. Out of the 813 graduates, 513 completed blue economy-related courses...</p>
                    <a href="/news/1" class="read-more-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Article 2 -->
                <div class="article-card">
                    <h3>Blue Economy vocational training program</h3>
                    <div class="article-meta">
                        <span><i class="bi bi-person"></i> Editorial Staff</span>
                        <span><i class="bi bi-calendar"></i> May 20, 2024</span>
                    </div>
                    <p class="article-excerpt">Exciting news from Jumuiya's Go Blue Project! With support from the EU Delegation to Kenya, GIZ Kenya, and CAP YEI, we've launched vocational training programs in Hotel & Hospitality, Maritime Transport & Logistics...</p>
                    <a href="/news/2" class="read-more-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <!-- 3. Bottom Grid -->
        <div class="bottom-grid" data-aos="fade-up">
            <!-- Tips Box -->
            <div class="tips-box">
                <h3>5 Key Impacts from JKP</h3>
                <ul class="tips-list">
                    <li><span class="number">1</span> 513 students graduated in Blue Economy courses from Kisauni VTC</li>
                    <li><span class="number">2</span> 60% job placement rate for graduates after industrial attachments</li>
                    <li><span class="number">3</span> 25% transitioned to entrepreneurship from Blue Economy training</li>
                    <li><span class="number">4</span> Vocational training launched in Hotel & Hospitality, Maritime Transport & Logistics with EU, GIZ support</li>
                    <li><span class="number">5</span> Partnerships strengthened with Australian Deputy High Commissioner, Ethiopia, and Safaricom PLC</li>
                </ul>
            </div>

            <!-- Image -->
            <div class="newsletter-image">
                <img src="/assets/images/eu-heads.png" alt="JKP Partners and Stakeholders" onerror="this.src='https://via.placeholder.com/600x400?text=JKP+Partners'">
            </div>
        </div>

        <!-- 4. Subscribe Box -->
        <div class="subscribe-box" data-aos="fade-up">
            <h3>Stay Updated</h3>
            <p>Subscribe to receive our latest newsletter updates</p>
            <form class="subscribe-form">
                <input type="email" placeholder="Your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>

        <!-- 5. Newsletter Archive List -->
        <div class="archive-section" data-aos="fade-up">
            <h3>Newsletter Archive</h3>
            <div class="archive-years">
                <div class="archive-year">
                    <h4>2026</h4>
                    <ul>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> March Edition</a></li>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> February Edition</a></li>
                    </ul>
                </div>
                <div class="archive-year">
                    <h4>2025</h4>
                    <ul>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> December Edition</a></li>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> October Edition</a></li>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> August Edition</a></li>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> June Edition</a></li>
                    </ul>
                </div>
                <div class="archive-year">
                    <h4>2024</h4>
                    <ul>
                        <?php foreach(array_slice($archives, 0, 5) as $archive): ?>
                        <li><a href="#"><i class="bi bi-file-pdf"></i> <?php echo $archive['month']; ?> (<?php echo $archive['count']; ?>)</a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 6. More Articles Section -->
        <div class="more-articles" data-aos="fade-up">
            <h3>More from Our News</h3>
            <div class="articles-grid">
                <?php 
                $moreArticles = array_slice($newsPosts, 2, 3);
                foreach($moreArticles as $article): 
                ?>
                <div class="mini-article">
                    <h4><?php echo $article['title']; ?></h4>
                    <div class="date"><i class="bi bi-calendar"></i> <?php echo $article['month']; ?></div>
                    <a href="/news/<?php echo $article['id']; ?>" class="read-more-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>