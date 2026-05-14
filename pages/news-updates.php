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
    // NEW ENTRY - April 30, 2026 (Conservation - Blue Carbon Ecosystems Validation Workshop)
    [
        'id' => 25,
        'title' => 'EAWLS and Fauna & Flora validate Blue Carbon Ecosystems governance framework in Mombasa',
        'excerpt' => 'EAWLS, in partnership with Fauna & Flora, convened a two-day Multi-Stakeholder Validation Workshop in Mombasa to strengthen governance of Kenya\'s blue carbon ecosystems. Stakeholders validated the Blue Carbon Ecosystems Working Group Manual and reviewed findings from a comprehensive Policy Analysis Report, identifying critical gaps and opportunities within existing policy frameworks. The initiative supports ongoing processes including the draft NDC Blue Carbon Ecosystem Investment Plan and the Seagrass and Coral Reef Action Plan (2026–2036), advancing a coordinated national approach to coastal conservation and climate resilience.',
        'date' => '30',
        'month' => 'Apr 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => 'assets/images/eawl2 (5).png',
        'category' => 'Conservation'
    ],
    // NEW ENTRY - April 22-24, 2026 (Conservation - Coral & Seagrass Action Plan)
    [
        'id' => 24,
        'title' => 'Coral and Seagrass Conservation Action Plan in Mombasa workshop',
        'excerpt' => 'As a member of the Task Force on the Coral and Seagrass Conservation Action Plan development, JKP participated in a workshop held on 22nd–24th April 2026 at City Blue Creekside Hotel & Suites, Mombasa. The purpose was to obtain structured feedback from the taskforce to strengthen the technical quality, policy alignment, feasibility, and ownership of the Action Plan prior to finalisation and adoption.',
        'date' => '24',
        'month' => 'Apr 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => 'assets/images/coralsea (4).png',
        'category' => 'Conservation'
    ],
    // NEW ENTRY 1 - March 6, 2026 (Tourism)
    [
        'id' => 20,
        'title' => 'JKP and TRA strengthen collaboration on sustainable tourism',
        'excerpt' => 'Jumuiya Economic Development Secretariat held a courtesy meeting with the Tourism Regulatory Authority (TRA) to strengthen collaboration on sustainable tourism along the Coastal region. TRA presented on the development of a Beach Management Standard aimed at improving beach governance, enhancing visitor experience, and promoting environmental conservation.',
        'date' => '6',
        'month' => 'Mar 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/TRA (2).png',
        'category' => 'Tourism'
    ],
    // NEW ENTRY 2 - February 26, 2026 (Education)
    [
        'id' => 21,
        'title' => 'EAWLS trains coastal stakeholders on Blue Carbon policy and advocacy',
        'excerpt' => 'The East African Wild Life Society (EAWLS) kicked off a two-day Policy and Advocacy Training on Blue Carbon Ecosystems in Mombasa, bringing together over 40 stakeholders from across Kenya\'s coastal region, including Beach Management Units, Community Forest Associations, and CBOs.',
        'date' => '26',
        'month' => 'Feb 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/EAWLS (4).png',
        'category' => 'Education'
    ],
    // NEW ENTRY 3 - February 24, 2026 (Investment)
    [
        'id' => 22,
        'title' => 'JKP Agricultural Revitalization Summit kicks off in Malindi',
        'excerpt' => 'The Jumuiya ya Kaunti za Pwani Agricultural Revitalization Summit commenced at Ocean Beach Hotel, Malindi, officiated by Hon. Mutahi Kagwe, Cabinet Secretary of Agriculture and Livestock. Discussions centered on Climate Smart Agriculture, Value Addition, and deepening collaboration between National and County Governments.',
        'date' => '24',
        'month' => 'Feb 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/revt-sumit (1).png',
        'category' => 'Investment'
    ],
    // NEW ENTRY 4 - February 26, 2026 (Blue Economy)
    [
        'id' => 23,
        'title' => 'Ocean Conservation and Sustainable Coastal Development Workshop',
        'excerpt' => 'A workshop on policy making and advocacy for ocean conservation and sustainable coastal development was held in Mombasa. Discussions focused on protection of marine ecosystems such as seagrass and mangroves, and opportunities for collaboration in global platforms like the Our Ocean Conference.',
        'date' => '26',
        'month' => 'Feb 26',
        'year' => '2026',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/fauna.jpeg',
        'category' => 'Blue Economy'
    ],
    // EXISTING POSTS START HERE
    [
        'id' => 1,
        'title' => 'Kisauni VTC Graduates 513 Students in Blue Economy Courses',
        'excerpt' => 'On Saturday, May 25, 2024, Kisauni VTC celebrated its 8th graduation ceremony. Out of the 813 graduates, 513 completed blue economy-related courses, namely Maritime Plumbing, Maritime Tourism & Hospitality, and Maritime Security. 60% secured job placements after their industrial attachments, and 25% transitioned to entrepreneurship.',
        'date' => '29',
        'month' => 'May 24',
        'year' => '2024',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/kisauni.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 2,
        'title' => 'Blue Economy vocational training program',
        'excerpt' => 'Exciting news from Jumuiya\'s Go Blue Project! With support from the EU Delegation to Kenya, GIZ Kenya, and CAP YEI, we\'ve launched vocational training programs in Hotel & Hospitality, Maritime Transport & Logistics, and Maritime Security in the JKP region.',
        'date' => '20',
        'month' => 'May 24',
        'year' => '2024',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/ecoblue.png',
        'category' => 'Blue Economy'
    ],
    [
        'id' => 3,
        'title' => 'JKP Governors Deliberations on the CRA\'s 4th Edition of the County Revenue Sharing Formula',
        'excerpt' => 'The Jumuiya Economic Development Secretariat, led by Governors Mombasa, Tana River, and Taita Taveta counties, today concluded the final joint technical presentation and consultations on the 4th basis county revenue allocations (CRA) recommendations in readiness for submission to the CRA commission.',
        'date' => '29',
        'month' => 'Apr 24',
        'year' => '2024',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/govs.png',
        'category' => 'Governance'
    ],
    [
        'id' => 4,
        'title' => 'Strengthening Bilateral Relations – Australian Deputy High Commissioner Visits JKP Offices',
        'excerpt' => 'The Australian Deputy High Commissioner for East Africa, Chris Ellinger, paid a courtesy visit to the offices of Jumuiya Ya Kaunti Za Pwani (JKP), marking a significant step towards enhancing ties between Australia and Kenya, particularly in the Kenyan coastal region.',
        'date' => '19',
        'month' => 'Apr 24',
        'year' => '2024',
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
        'year' => '2024',
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
        'year' => '2024',
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
        'year' => '2024',
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
        'year' => '2024',
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
        'year' => '2023',
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
        'year' => '2023',
        'author' => 'Editorial Staff',
        'comments' => 'No Comments',
        'image' => '/assets/images/q4-reports.jpg',
        'category' => 'Partnerships'
    ],
    [
        'id' => 11,
        'title' => 'JKP Tourism and Cultural Heritage Blueprint 2030 Validation',
        'excerpt' => 'JKP held a validation meeting for the JKP Tourism Culture and Heritage (TCH) Blueprint 2030...',
        'date' => '30',
        'month' => 'Sep 23',
        'year' => '2023',
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
        'year' => '2023',
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
        'year' => '2023',
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
        'year' => '2023',
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
        'year' => '2023',
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
        'year' => '2023',
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
        'year' => '2023',
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

// Define category mapping (subcategory -> main group)
$categoryMapping = [
    'Blue Economy' => 'Go Blue Component 1',
    'Infrastructure' => 'Go Blue Component 1',
    'Fisheries' => 'Go Blue Component 1',
    'Climate Change' => 'Go Blue Component 1',
    'Conservation' => 'Go Blue Component 1',
    'Fashion' => 'Go Blue Component 1',
    'Partnerships' => 'Go Blue News',
    'Governance' => 'JKP News Updates',
    'Tourism' => 'JKP News Updates',
    'Education' => 'JKP News Updates',
    'Investment' => 'JKP News Updates',
    'Trade' => 'JKP News Updates'
];

// Calculate dynamic category counts for sidebar
$categoryCounts = [
    'Go Blue Component 1' => 0,
    'Go Blue News' => 0,
    'JKP News Updates' => 0
];

foreach ($newsPosts as $post) {
    $mainGroup = $categoryMapping[$post['category']] ?? 'JKP News Updates';
    $categoryCounts[$mainGroup]++;
}

// Get filter parameters from URL
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : '';
$selectedSubcategory = isset($_GET['subcategory']) ? $_GET['subcategory'] : '';
$selectedYear = isset($_GET['year']) ? $_GET['year'] : '';

// Filter news posts based on parameters
$filteredPosts = $newsPosts;

if (!empty($selectedMonth)) {
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedMonth) {
        return $post['month'] === $selectedMonth;
    });
}

if (!empty($selectedCategory)) {
    // Filter by main group category
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedCategory, $categoryMapping) {
        $mainGroup = $categoryMapping[$post['category']] ?? 'JKP News Updates';
        return $mainGroup === $selectedCategory;
    });
}

if (!empty($selectedSubcategory)) {
    // Filter by specific subcategory (e.g., Tourism, Blue Economy, etc.)
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedSubcategory) {
        return $post['category'] === $selectedSubcategory;
    });
}

if (!empty($selectedYear)) {
    $filteredPosts = array_filter($filteredPosts, function($post) use ($selectedYear) {
        $postYear = '20' . substr($post['month'], -2);
        return $postYear === $selectedYear;
    });
}

// Generate dynamic archives from news posts (using filtered posts)
$archives = [];
foreach ($filteredPosts as $post) {
    $month = $post['month'];
    if (!isset($archives[$month])) {
        $archives[$month] = 0;
    }
    $archives[$month]++;
}

// Sort archives by date (newest first)
uksort($archives, function($a, $b) {
    $dateA = DateTime::createFromFormat('M y', str_replace('.', '', $a));
    $dateB = DateTime::createFromFormat('M y', str_replace('.', '', $b));
    return $dateB <=> $dateA;
});

// Generate dynamic years from news posts (using filtered posts)
$years = [];
foreach ($filteredPosts as $post) {
    $year = '20' . substr($post['month'], -2);
    if (!isset($years[$year])) {
        $years[$year] = 0;
    }
    $years[$year]++;
}

// Sort years descending
krsort($years);

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

// Function to get main category for a post
function getMainCategory($postCategory, $categoryMapping) {
    return $categoryMapping[$postCategory] ?? 'JKP News Updates';
}

// Build query string for pagination
function buildQueryString($exclude = []) {
    $params = [];
    if (isset($_GET['month']) && !in_array('month', $exclude)) {
        $params['month'] = $_GET['month'];
    }
    if (isset($_GET['category']) && !in_array('category', $exclude)) {
        $params['category'] = $_GET['category'];
    }
    if (isset($_GET['subcategory']) && !in_array('subcategory', $exclude)) {
        $params['subcategory'] = $_GET['subcategory'];
    }
    if (isset($_GET['year']) && !in_array('year', $exclude)) {
        $params['year'] = $_GET['year'];
    }
    if (isset($_GET['page']) && !in_array('page', $exclude)) {
        $params['page'] = $_GET['page'];
    }
    return http_build_query($params);
}

// Map news IDs to page filenames
$newsPages = [
    1 => 'kisauni-vtc-graduates',
    2 => 'blue-economy-training',
    3 => 'jkp-governors-deliberations',
    4 => 'australian-diplomat-visit',
    5 => 'advocating-4th-generation',
    6 => 'townhall-climate-change',
    7 => 'supply-contract-cold-rooms',
    8 => 'collaborative-framework-agreement',
    9 => 'iowa-state-scholarships',
    10 => 'partnerships-coastal-development',
    11 => 'jkp-tourism-blueprint',
    12 => 'eurometal-mic-collaboration',
    13 => 'trade-mission-usa',
    14 => 'ethiopia-oromia-visit',
    15 => 'blue-economy-mission-italy',
    16 => 'reface-forum-2023',
    17 => 'safaricom-mou',
    18 => 'eu-heads-mission',
    19 => 'support-fisher-communities',
    // NEW MAPPINGS FOR 2026 ENTRIES
    20 => 'jkp-tra-tourism-collaboration',
    21 => 'eawls-blue-carbon-training',
    22 => 'jkp-agricultural-summit',
    23 => 'ocean-governance-workshop',
    // MAPPING FOR CORAL & SEAGRASS ACTION PLAN
    24 => 'coral-seagrass-conservation-action-plan',
    // MAPPING FOR BLUE CARBON ECOSYSTEMS VALIDATION WORKSHOP
    25 => 'eawls-blue-carbon-validation-workshop'
];
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

/* Years Widget */
.years-list {
    list-style: none;
    padding: 0;
    margin: 0 0 1.5rem 0;
}

.year-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px dashed #e0e0e0;
}

.year-item:last-child {
    border-bottom: none;
}

.year-link {
    color: #6c757d;
    text-decoration: none;
    transition: color 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 500;
}

.year-link:hover {
    color: var(--primary-blue);
}

.year-link i {
    font-size: 0.8rem;
    color: var(--primary-blue);
}

.year-count {
    background: rgba(110, 193, 228, 0.1);
    color: var(--primary-blue);
    padding: 0.2rem 0.6rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
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

/* Previous Page Preview - IMPROVED */
.preview-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 0;
    border-bottom: 1px solid #f0f0f0;
}

.preview-item:last-child {
    border-bottom: none;
}

.preview-thumb {
    width: 40px;
    height: 40px;
    min-width: 40px;
    border-radius: 5px;
    overflow: hidden;
}

.preview-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.preview-info h6 {
    font-size: 0.8rem;
    margin-bottom: 0.2rem;
    color: var(--dark-blue);
    font-weight: 600;
    line-height: 1.3;
}

.preview-info small {
    color: #6c757d;
    font-size: 0.7rem;
}

/* Pagination - IMPROVED */
.pagination-wrapper {
    margin-top: 3rem;
    text-align: center;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 0.75rem;
    list-style: none;
    padding: 0;
    margin: 0;
}

.page-item {
    display: inline-block;
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 42px;
    height: 42px;
    padding: 0 0.75rem;
    background: white;
    color: var(--dark-blue);
    text-decoration: none;
    border-radius: 8px;
    border: 1px solid #e0e0e0;
    font-weight: 500;
    font-size: 0.95rem;
    transition: all 0.3s ease;
    box-shadow: 0 1px 2px rgba(0,0,0,0.05);
}

.page-link:hover {
    background: #6EC1E4;
    color: white;
    border-color: #6EC1E4;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(110, 193, 228, 0.2);
}

.page-item.active .page-link {
    background: #6EC1E4;
    color: white;
    border-color: #6EC1E4;
    box-shadow: 0 2px 6px rgba(110, 193, 228, 0.3);
}

.page-item.disabled .page-link {
    opacity: 0.5;
    cursor: not-allowed;
    pointer-events: none;
    transform: none;
    box-shadow: none;
}

/* Active filter highlight */
.category-item.active .category-link,
.archive-item.active .archive-link,
.year-item.active .year-link {
    color: var(--primary-blue);
    font-weight: 700;
}

.category-item.active .category-count,
.archive-item.active .archive-count,
.year-item.active .year-count {
    background: var(--primary-blue);
    color: white;
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
        <?php if (!empty($selectedMonth) || !empty($selectedCategory) || !empty($selectedSubcategory) || !empty($selectedYear)): ?>
        <div class="filter-alert" data-aos="fade-up">
            <div>
                <i class="bi bi-funnel" style="color: var(--primary-blue);"></i> 
                <strong>Showing filtered results</strong>
                <?php if ($selectedMonth): ?> for <strong><?php echo $selectedMonth; ?></strong><?php endif; ?>
                <?php if ($selectedCategory): ?> in category <strong><?php echo $selectedCategory; ?></strong><?php endif; ?>
                <?php if ($selectedSubcategory): ?> in <strong><?php echo $selectedSubcategory; ?></strong><?php endif; ?>
                <?php if ($selectedYear): ?> from year <strong><?php echo $selectedYear; ?></strong><?php endif; ?>
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
                    <?php 
                    // Get the page filename for this news item
                    $pageFile = isset($newsPages[$post['id']]) ? $newsPages[$post['id']] : 'news-updates';
                    ?>
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
                                <a href="/news-updates?subcategory=<?php echo urlencode($post['category']); ?>" class="news-category">
                                    <?php echo $post['category']; ?>
                                </a>
                                <a href="/<?php echo $pageFile; ?>" class="read-more">
                                    Read More <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php endforeach; ?>

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                    <div class="pagination-wrapper">
                        <ul class="pagination">
                            <!-- Previous Page -->
                            <li class="page-item <?php echo $page <= 1 ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?<?php 
                                    $params = $_GET;
                                    $params['page'] = $page - 1;
                                    echo http_build_query($params);
                                ?>" <?php echo $page <= 1 ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                    <i class="bi bi-chevron-left"></i>
                                </a>
                            </li>
                            
                            <!-- Page Numbers -->
                            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo $i === $page ? 'active' : ''; ?>">
                                <a class="page-link" href="?<?php 
                                    $params = $_GET;
                                    $params['page'] = $i;
                                    echo http_build_query($params);
                                ?>"><?php echo $i; ?></a>
                            </li>
                            <?php endfor; ?>
                            
                            <!-- Next Page -->
                            <li class="page-item <?php echo $page >= $totalPages ? 'disabled' : ''; ?>">
                                <a class="page-link" href="?<?php 
                                    $params = $_GET;
                                    $params['page'] = $page + 1;
                                    echo http_build_query($params);
                                ?>" <?php echo $page >= $totalPages ? 'tabindex="-1" aria-disabled="true"' : ''; ?>>
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>
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
                    <form class="search-form" action="/news-updates" method="GET">
                        <input type="text" class="search-input" placeholder="Search articles..." name="search">
                        <button type="submit" class="search-btn">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                </div>

                <!-- Years Widget -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="50">
                    <h4 class="widget-title">Years</h4>
                    <ul class="years-list">
                        <?php foreach ($years as $year => $count): ?>
                        <li class="year-item <?php echo $selectedYear == $year ? 'active' : ''; ?>">
                            <a href="/news-updates?year=<?php echo $year; ?><?php echo $selectedSubcategory ? '&subcategory=' . urlencode($selectedSubcategory) : ''; ?><?php echo $selectedCategory ? '&category=' . urlencode($selectedCategory) : ''; ?>" class="year-link">
                                <i class="bi bi-calendar-year"></i>
                                <?php echo $year; ?>
                            </a>
                            <span class="year-count"><?php echo $count; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Archives Widget (Months) -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="widget-title">Archives</h4>
                    <ul class="archive-list">
                        <?php foreach ($archives as $month => $count): ?>
                        <li class="archive-item <?php echo $selectedMonth == $month ? 'active' : ''; ?>">
                            <a href="/news-updates?month=<?php echo urlencode($month); ?><?php echo $selectedSubcategory ? '&subcategory=' . urlencode($selectedSubcategory) : ''; ?><?php echo $selectedCategory ? '&category=' . urlencode($selectedCategory) : ''; ?>" class="archive-link">
                                <i class="bi bi-calendar3"></i>
                                <?php echo $month; ?>
                            </a>
                            <span class="archive-count"><?php echo $count; ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Categories Widget (Grouped) -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="150">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="category-list">
                        <li class="category-item <?php echo $selectedCategory == 'Go Blue Component 1' ? 'active' : ''; ?>">
                            <a href="/news-updates?category=Go Blue Component 1<?php echo $selectedSubcategory ? '&subcategory=' . urlencode($selectedSubcategory) : ''; ?>" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue Component 1
                            </a>
                            <span class="category-count"><?php echo $categoryCounts['Go Blue Component 1']; ?></span>
                        </li>
                        <li class="category-item <?php echo $selectedCategory == 'Go Blue News' ? 'active' : ''; ?>">
                            <a href="/news-updates?category=Go Blue News<?php echo $selectedSubcategory ? '&subcategory=' . urlencode($selectedSubcategory) : ''; ?>" class="category-link">
                                <i class="bi bi-folder"></i>
                                Go Blue News
                            </a>
                            <span class="category-count"><?php echo $categoryCounts['Go Blue News']; ?></span>
                        </li>
                        <li class="category-item <?php echo $selectedCategory == 'JKP News Updates' ? 'active' : ''; ?>">
                            <a href="/news-updates?category=JKP News Updates<?php echo $selectedSubcategory ? '&subcategory=' . urlencode($selectedSubcategory) : ''; ?>" class="category-link">
                                <i class="bi bi-folder"></i>
                                JKP News Updates
                            </a>
                            <span class="category-count"><?php echo $categoryCounts['JKP News Updates']; ?></span>
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
                            <a href="?<?php 
                                $params = $_GET;
                                $params['page'] = $page - 1;
                                echo http_build_query($params);
                            ?>" class="read-more small">
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