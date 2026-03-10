<?php
/**
 * pages/local-tender.php — Local Tender Detail Page
 * Supply contract for ancillary services: supply, install, commission two cold rooms + ice
 */

$pageTitle    = 'Supply contract for ancillary services: cold rooms + ice';
$currentPage  = 'local-tender';
$heroTitle    = 'Local Tender Opportunity';
$heroSubtitle = 'Go Blue Component 1 - Supply, Install, Commission Cold Rooms + Ice Machines';

// Add breadcrumb items for the hero section
$breadcrumbItems = [
    ['url' => '/', 'label' => 'Home'],
    ['url' => '/news-updates', 'label' => 'News & Updates'],
    ['url' => '/news-updates?category=Go%20Blue%20Component%201', 'label' => 'Go Blue Component 1'],
    ['label' => 'Supply contract for ancillary services: cold rooms + ice', 'active' => true]
];

ob_start();

include __DIR__ . '/../partials/page-hero.php';

// Blue color scheme
$primaryBlue = '#6EC1E4';
$darkBlue = '#244080';
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
    --light-bg: #f8f9fa;
}

.tender-detail-wrapper {
    padding: 3rem 0;
}

/* Tender Content */
.tender-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.tender-image {
    width: 100%;
    max-height: 400px;
    object-fit: cover;
}

.tender-content {
    padding: 2.5rem;
}

.tender-title {
    color: var(--dark-blue);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1.5rem;
    line-height: 1.3;
}

.tender-description {
    margin-bottom: 2rem;
}

.tender-description p {
    color: #495057;
    line-height: 1.8;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

/* Buttons */
.btn-details {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--primary-blue);
    color: white;
    padding: 1rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn-details:hover {
    background: var(--dark-blue);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(36, 64, 128, 0.2);
}

.btn-details i {
    transition: transform 0.3s ease;
}

.btn-details:hover i {
    transform: translateX(5px);
}

/* Responsive */
@media (max-width: 768px) {
    .tender-content {
        padding: 1.5rem;
    }
    
    .tender-title {
        font-size: 1.5rem;
    }
}
</style>

<section class="tender-detail-wrapper">
    <div class="container">
        <!-- Tender Card -->
        <div class="tender-card" data-aos="fade-up">
            <!-- Image -->
            <img src="/assets/images/supply contract.png" alt="Cold Rooms and Ice Machines Tender" class="tender-image">
            
            <!-- Content -->
            <div class="tender-content">
                <h1 class="tender-title">Supply contract for ancillary services: supply, install, commission two cold rooms + ice</h1>
                
                <div class="tender-description">
                    <p>AICS Nairobi Office intends to award a supply contract with ancillary services with the scope to supply, install and commission n. 2 containerized cold rooms + ice flakes production machines, solar powered, for the Beach Management Units (BMU) of Kibuyuni and Uyombo, located, respectively, in the county of Kwale and Kilifi (Kenya).</p>
                </div>

                <!-- External Link Button -->
                <a href="https://trasparenzanairobi.aics.gov.it/archivio105_delibera-anac-n-6012023-procedure_0_3923_566_1.html?fbclid=IwAR1yy4TwsPuLey00p9ZXVKRjtFpIhwL17ni60EouqPAC-79KVNykqlqO_zI" 
                   class="btn-details" 
                   target="_blank" 
                   rel="noopener noreferrer">
                    <span>🔍 Find More Details</span>
                    <i class="bi bi-box-arrow-up-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>