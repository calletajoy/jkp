<?php
/**
 * pages/news-updates.php — News & Updates Page
 */

$pageTitle    = 'News Updates';
$currentPage  = 'news';
$heroTitle    = 'News Updates';
$heroSubtitle = 'Latest stories and developments from Jumuiya ya Kaunti za Pwani';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

// Blue color scheme
$primaryBlue = '#6EC1E4';
$darkBlue = '#244080';

// News posts data
$newsPosts = [
    [
        'id' => 1,
        'title' => 'Kisauni VTC Graduates 513 Students in Blue Economy Courses',
        'excerpt' => 'On Saturday, May 25, 2024, Kisauni VTC celebrated its 8th graduation ceremony. Out of the 813 graduates, 513 completed blue economy-related courses, namely Maritime Plumbing, Maritime Tourism & Hospitality, and Maritime Security. 60% secured job placements after their industrial attachments, and 25% transitioned to entrepreneurship.',
        'date' => '20',
        'month' => 'May 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
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
        'comments' => 'No Comments',
        'image' => '/assets/images/ecoblue.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 3,
        'title' => 'JKP Governors Deliberations on the CRA\'s 4th Edition of the County Revenue Sharing Formula',
        'excerpt' => 'The Jumuiya Economic Development Secretariat, led by Governors Mombasa, Tana River, and Taita Taveta counties, today concluded the final joint technical presentation and consultations on the 4th basis county revenue allocations (CRA) recommendations in readiness for submission to the CRA commission.',
        'date' => '19',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/govs.png',
        'category' => 'Governance'
    ],
    [
        'id' => 4,
        'title' => 'Strengthening Bilateral Relations – Australian Deputy High Commissioner Visits JKP Offices',
        'excerpt' => 'The Australian Deputy High Commissioner for East Africa, Chris Ellinger, paid a courtesy visit to the offices of Jumuiya Ya Kaunti Za Pwani (JKP), marking a significant step towards enhancing ties between Australia and Kenya, particularly in the Kenyan coastal region.',
        'date' => '09',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/strength bi.png',
        'category' => 'Partnerships'
    ],
    [
        'id' => 5,
        'title' => 'Advocating for the 4th-Generation Basis for Enhanced Revenue Sharing Fairness',
        'excerpt' => 'The commitment of the JKP region to advocate for a more nuanced and inclusive Fourth-Generation Basis reflects a broader ambition for equitable development and prosperity. As discussions progress, it is hoped that these considerations will find resonance in the national dialogue, paving the way for a more just and balanced…',
        'date' => '09',
        'month' => 'Apr 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/advo 4th gen.png',
        'category' => 'Governance'
    ],
    [
        'id' => 6,
        'title' => 'Townhall discussions on climate change, Coastal Edition',
        'excerpt' => 'JKP\'s Sector Lead for Investment and Partnerships, Gladys Mjama, made a presentation during the Townhall...',
        'date' => '19',
        'month' => 'Mar 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/townhall.png',
        'category' => 'Climate Change'
    ],
    [
        'id' => 7,
        'title' => 'Supply contract for ancillary services: supply, install, commission two cold rooms + ice',
        'excerpt' => 'Press release on the signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP',
        'date' => '19',
        'month' => 'Mar 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/supply contract.png',
        'category' => 'Infrastructure'
    ],
    [
        'id' => 8,
        'title' => 'The signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP',
        'excerpt' => 'Press release on the signing of a Collaborative Framework Agreement for Marine Conservation between the WCS and JKP',
        'date' => '26',
        'month' => 'Jan 24',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/signing collabo.png',
        'category' => 'Conservation'
    ],
    [
        'id' => 9,
        'title' => 'Iowa State University announces $25,000 annual scholarships on food security courses for Sub-Saharan Africa students',
        'excerpt' => 'Iowa State University announces $25,000 annual scholarships on food security courses for Sub-Saharan Africa students',
        'date' => '21',
        'month' => 'Nov 23',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/iowa state.png',
        'category' => 'Education'
    ],
    [
        'id' => 10,
        'title' => 'Partnerships for Coastal Development and Blue Economy Investment',
        'excerpt' => 'JKP held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030...',
        'date' => '06',
        'month' => 'Oct 23',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/q4-reports.jpg',
        'category' => 'Partnerships'
    ],
    [
        'id' => 11,
        'title' => 'JKP Tourism and Cultural Heritage Blueprint 2030 Validation',
        'excerpt' => 'JKP held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030...',
        'date' => '06',
        'month' => 'Oct 23',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/tourism.png',
        'category' => 'Tourism'
    ],
    [
        'id' => 12,
        'title' => 'Eurometal and MIC to collaborate on development projects',
        'excerpt' => 'Jumuiya ya Kaunti za Pwani (JKP) introduced Eurometal to the Mombasa Investment Cooperation...',
        'date' => '25',
        'month' => 'Sep 23',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/eurometal.png',
        'category' => 'Investment'
    ],
    [
        'id' => 13,
        'title' => 'Jumuiya ya Kaunti Za Pwani conducts a Trade Mission to the USA – Press Release',
        'excerpt' => 'Press release: Jumuiya ya Kaunti Za Pwani conducts a Trade Mission to the USA',
        'date' => '18',
        'month' => 'Sep 23',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/trade mission.png',
        'category' => 'Trade'
    ],
    [
        'id' => 14,
        'title' => 'The Ethiopian Oromia Tourism Commission team courtesy visit',
        'excerpt' => 'The Oromia Tourism Commission team from Ethiopia paid a courtesy visit to the Jumuiya Ya Kaunti Za...',
        'date' => '08',
        'month' => 'Aug 23',
        'author' => 'Editorial Staff',
        'comments' => '3 Comments',
        'image' => '/assets/images/eth-oromia.png',
        'category' => 'Tourism'
    ],
    [
        'id' => 15,
        'title' => 'Jumuiya Blue Economy Mission to Italy',
        'excerpt' => 'The Jumuiya ya Kaunti za Pwani (JKP) www.jumuiya.org - Delegation of the Jumuiya Blue Economy Sector...',
        'date' => '24',
        'month' => 'Jul 23',
        'author' => 'Editorial Staff',
        'comments' => '3 Comments',
        'image' => '/assets/images/jum-eco.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 16,
        'title' => 'Regenerative Fashion Collective Exchange (ReFaCE) Forum 2023',
        'excerpt' => 'The ReFaCE Forum is a collaboration and network of textile "Crop-to-Closet-to-Compost" (C3) value chain',
        'date' => '23',
        'month' => 'Jun 23',
        'author' => 'Editorial Staff',
        'comments' => '2 Comments',
        'image' => '/assets/images/rege.png',
        'category' => 'Fashion'
    ],
    [
        'id' => 17,
        'title' => 'Jumuiya and Safaricom PLC signed a Memorandum of Understanding',
        'excerpt' => 'Jumuiya Ya Kaunti Za Pwani - JKP and Safaricom PLC signed a Memorandum of Understanding...',
        'date' => '16',
        'month' => 'Jun 23',
        'author' => 'Editorial Staff',
        'comments' => '3 Comments',
        'image' => '/assets/images/saf-plc.png',
        'category' => 'Partnerships'
    ],
    [
        'id' => 18,
        'title' => 'European Union Heads of Mission visit to the Coast Region on Blue Economy',
        'excerpt' => 'The European Union Heads of Missions undertook a tour of the Jumuiya ya Kaunti za Pwani region...',
        'date' => '07',
        'month' => 'Jun 23',
        'author' => 'Editorial Staff',
        'comments' => '2 Comments',
        'image' => '/assets/images/eu-heads.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 19,
        'title' => 'Support fisher communities along the Kenyan coast',
        'excerpt' => 'Fishing is one of the most dangerous job in the world with many accidents resulting in fatalities. But proper...',
        'date' => '28',
        'month' => 'Apr 23',
        'author' => 'Editorial Staff',
        'comments' => '2 Comments',
        'image' => '/assets/images/fishermen.png',
        'category' => 'Fisheries'
    ]
];

// Get filter parameters from URL
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';

// Filter news posts based on parameters
$filteredPosts = $newsPosts;

if (!empty($selectedMonth)) {
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedMonth) {
        return $post['month'] === $selectedMonth;
    });
}

if (!empty($selectedCategory)) {
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedCategory) {
        return $post['category'] === $selectedCategory;
    });
}

// Category counts for display
$categoryCounts = [
    'Go Blue Component 1' => 9,
    'Go Blue News' => 1,
    'JKP News Updates' => 18
];

// Archive data
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
    ['month' => 'April 2023', 'count' => null]
];

// Pagination using filtered posts
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 5;
$totalPosts = count($filteredPosts);
$totalPages = ceil($totalPosts / $perPage);
$offset = ($page - 1) * $perPage;
$currentPagePosts = array_slice(array_values($filteredPosts), $offset, $perPage);

// Previous page preview (for page 2 and beyond)
$prevPagePosts = [];
if ($page > 1) {
    $prevOffset = ($page - 2) * $perPage;
    $prevPagePosts = array_slice(array_values($filteredPosts), $prevOffset, 3);
}
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
}

.news-wrapper {
    padding: 3rem 0;
}

/* Main Layout */
.news-main {
    padding-right: 2rem;
}

.news-sidebar {
    padding-left: 1rem;
}

/* Filter Alert */
.filter-alert {
    background: rgba(110, 193, 228, 0.1);
    border-left: 4px solid var(--primary-blue);
    padding: 1rem 1.5rem;
    border-radius: 8px;
    margin-bottom: 2rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.filter-alert .clear-filter {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    padding: 0.3rem 1rem;
    border: 1px solid var(--primary-blue);
    border-radius: 50px;
    transition: all 0.3s ease;
}

.filter-alert .clear-filter:hover {
    background: var(--primary-blue);
    color: white;
}

/* News Card Styles */
.news-card {
    display: flex;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
    transition: all 0.3s ease;
}

.news-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(36, 64, 128, 0.1);
}

.news-card-image {
    width: 280px;
    min-width: 280px;
    height: 200px;
    overflow: hidden;
    position: relative;
}

.news-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-card-image img {
    transform: scale(1.05);
}

.news-card-content {
    padding: 1.5rem;
    flex: 1;
}

.news-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.news-date-box {
    text-align: center;
    background: var(--primary-blue);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 5px;
    min-width: 60px;
}

.news-date-box .day {
    font-size: 1.5rem;
    font-weight: 700;
    line-height: 1;
}

.news-date-box .month {
    font-size: 0.8rem;
    text-transform: uppercase;
}

.news-author-info {
    color: #6c757d;
    font-size: 0.9rem;
}

.news-author-info i {
    color: var(--primary-blue);
    margin-right: 0.3rem;
}

.news-author-info .separator {
    margin: 0 0.5rem;
    color: #ddd;
}

.news-title {
    color: var(--dark-blue);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
    line-height: 1.4;
}

.news-excerpt {
    color: #6c757d;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.news-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.news-category {
    background: rgba(110, 193, 228, 0.1);
    color: var(--primary-blue);
    padding: 0.3rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}

.news-category:hover {
    background: var(--primary-blue);
    color: white;
}

.read-more {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: color 0.3s ease;
}

.read-more:hover {
    color: var(--dark-blue);
}

/* Sidebar Styles */
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
    transition: all 0.3s ease;
}

.search-input:focus {
    border-color: var(--primary-blue);
    box-shadow: 0 0 0 3px rgba(110, 193, 228, 0.1);
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

/* Archives Widget */
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
    background: rgba(110, 193, 228, 0.1);
    color: var(--primary-blue);
    padding: 0.2rem 0.6rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Categories Widget */
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
    font-weight: 500;
}

.category-link:hover {
    color: var(--primary-blue);
}

.category-link i {
    font-size: 0.8rem;
    color: var(--primary-blue);
}

.category-count {
    background: rgba(110, 193, 228, 0.1);
    color: var(--primary-blue);
    padding: 0.2rem 0.6rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Previous Page Preview */
.prev-page-preview {
    margin-top: 1rem;
    padding-top: 1.5rem;
    border-top: 2px solid #e0e0e0;
}

.prev-page-title {
    color: var(--dark-blue);
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.prev-page-title i {
    color: var(--primary-blue);
}

.preview-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.5rem 0;
    border-bottom: 1px solid #f0f0f0;
}

.preview-item:last-child {
    border-bottom: none;
}

.preview-thumb {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 5px;
    overflow: hidden;
}

.preview-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.preview-info {
    flex: 1;
}

.preview-info h6 {
    font-size: 0.9rem;
    margin-bottom: 0.2rem;
    color: var(--dark-blue);
    font-weight: 600;
}

.preview-info small {
    color: #6c757d;
    font-size: 0.75rem;
}

/* Pagination */
.pagination-wrapper {
    margin-top: 3rem;
    text-align: center;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    list-style: none;
    padding: 0;
}

.page-item {
    display: inline-block;
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: white;
    color: var(--dark-blue);
    text-decoration: none;
    border-radius: 5px;
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
}

.page-link:hover,
.page-item.active .page-link {
    background: var(--primary-blue);
    color: white;
    border-color: var(--primary-blue);
}

.page-item.disabled .page-link {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
}

/* Responsive */
@media (max-width: 992px) {
    .news-main {
        padding-right: 0;
        margin-bottom: 2rem;
    }
    
    .news-sidebar {
        padding-left: 0;
    }
    
    .news-card {
        flex-direction: column;
    }
    
    .news-card-image {
        width: 100%;
        height: 200px;
    }
}
</style>

<section class="news-wrapper">
    <div class="container">
        
        <!-- Filter Alert -->
        <?php if (!empty($selectedMonth) || !empty($selectedCategory)): ?>
        <div class="filter-alert" data-aos="fade-up">
            <div>
                <i class="bi bi-funnel" style="color: var(--primary-blue);"></i> 
                <strong>Showing filtered results</strong>
                <?php if ($selectedMonth): ?> for <strong><?php echo $selectedMonth; ?></strong><?php endif; ?>
                <?php if ($selectedCategory): ?> in category <strong><?php echo $selectedCategory; ?></strong><?php endif; ?>
            </div>
            <a href="/news-updates" class="clear-filter">Clear Filter</a>
        </div>
        <?php endif; ?>

        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8 news-main">
                <!-- News Posts -->
                <?php if (count($currentPagePosts) > 0): ?>
                    <?php foreach ($currentPagePosts as $post): ?>
                    <article class="news-card" data-aos="fade-up">
                        <div class="news-card-image">
                            <img src="<?php echo $post['image']; ?>" alt="<?php echo htmlspecialchars($post['title']); ?>">
                        </div>
                        <div class="news-card-content">
                            <div class="news-meta">
                                <div class="news-date-box">
                                    <div class="day"><?php echo $post['date']; ?></div>
                                    <div class="month"><?php echo $post['month']; ?></div>
                                </div>
                                <div class="news-author-info">
                                    <i class="bi bi-person"></i> <?php echo $post['author']; ?>
                                    <span class="separator">|</span>
                                    <i class="bi bi-chat"></i> <?php echo $post['comments']; ?>
                                </div>
                            </div>
                            <h3 class="news-title"><?php echo htmlspecialchars($post['title']); ?></h3>
                            <p class="news-excerpt"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                            <div class="news-footer">
                                <a href="/news-updates?category=<?php echo urlencode($post['category']); ?>" class="news-category">
                                    <?php echo $post['category']; ?>
                                </a>
                                <a href="/news/<?php echo $post['id']; ?>" class="read-more">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <!-- Previous Page -->
                            <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $page - 1; ?><?php echo $selectedMonth ? '&month='.urlencode($selectedMonth) : ''; ?><?php echo $selectedCategory ? '&category='.urlencode($selectedCategory) : ''; ?>" <?php echo $page <= 1 ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                            
                            <!-- Page Numbers -->
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?><?php echo $selectedMonth ? '&month='.urlencode($selectedMonth) : ''; ?><?php echo $selectedCategory ? '&category='.urlencode($selectedCategory) : ''; ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            
                            <!-- Next Page -->
                            <li class="page-item <?php echo $page >= $totalPages ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $page + 1; ?><?php echo $selectedMonth ? '&month='.urlencode($selectedMonth) : ''; ?><?php echo $selectedCategory ? '&category='.urlencode($selectedCategory) : ''; ?>" <?php echo $page >= $totalPages ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="text-center py-5">
                        <i class="bi bi-newspaper" style="font-size: 3rem; color: #ccc;"></i>
                        <h3 class="mt-3">No posts found</h3>
                        <p class="text-muted">Try clearing your filters to see all news posts.</p>
                        <a href="/news-updates" class="read-more">View All News <i class="bi bi-arrow-right"></i></a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4 news-sidebar">
                <!-- Search Widget -->
                <div class="sidebar-widget" data-aos="fade-up">
                    <h4 class="widget-title">Search News</h4>
                    <form class="search-form" action="/news/search" method="GET">
                        <input type="text" class="search-input" placeholder="Search articles..." name="q">
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Archives Widget - FIXED LINKS -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="widget-title">Archives</h4>
                    <ul class="archive-list">
                        <?php foreach ($archives as $archive): ?>
                        <li class="archive-item">
                            <a href="/news-updates?month=<?php echo urlencode($archive['month']); ?>" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                <?php echo $archive['month']; ?>
                            </a>
                            <?php if ($archive['count']): ?>
                            <span class="archive-count"><?php echo $archive['count']; ?></span>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- NEW Categories Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="category-list">
                        <li class="category-item">
                            <a href="/news-updates?category=Go%20Blue%20Component%201" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue Component 1
                            </a>
                            <span class="category-count">9</span>
                        </li>
                        <li class="category-item">
                            <a href="/news-updates?category=Go%20Blue%20News" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue News
                            </a>
                            <span class="category-count">1</span>
                        </li>
                        <li class="category-item">
                            <a href="/news-updates?category=JKP%20News%20Updates" class="category-link">
                                <i class="bi bi-folder"></i>
                                JKP News Updates
                            </a>
                            <span class="category-count">18</span>
                        </li>
                    </ul>
                </div>

                <!-- Previous Page Preview -->
                <?php if (!empty($prevPagePosts)): ?>
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="200">
                    <div class="prev-page-preview">
                        <div class="prev-page-title">
                            <i class="bi bi-skip-backward-fill"></i> 
                            Previous Page Highlights
                        </div>
                        <?php foreach ($prevPagePosts as $preview): ?>
                        <div class="preview-item">
                            <div class="preview-thumb">
                                <img src="<?php echo $preview['image']; ?>" alt="">
                            </div>
                            <div class="preview-info">
                                <h6><?php echo htmlspecialchars(substr($preview['title'], 0, 40)) . '...'; ?></h6>
                                <small>
                                    <i class="bi bi-calendar3" style="color: var(--primary-blue);"></i>
                                    <?php echo $preview['month']; ?>
                                </small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="text-center mt-2">
                            <a href="?page=<?php echo $page - 1; ?><?php echo $selectedMonth ? '&month='.urlencode($selectedMonth) : ''; ?><?php echo $selectedCategory ? '&category='.urlencode($selectedCategory) : ''; ?>" class="read-more small">
                                View Full Page <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>