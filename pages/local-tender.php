<?php
/**
 * pages/local-tender.php — Local Tender Detail Page
 * Supply contract for ancillary services: supply, install, commission two cold rooms + ice
 */

$pageTitle    = 'Supply contract for ancillary services: cold rooms + ice';
$currentPage  = 'local-tender';
$heroTitle    = 'Local Tender Opportunity';
$heroSubtitle = 'Go Blue Component 1 - Supply, Install, Commission Cold Rooms + Ice Machines';

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

/* Breadcrumb */
.breadcrumb-section {
    margin-bottom: 2rem;
}

.breadcrumb-custom {
    background: var(--light-bg);
    padding: 1rem 1.5rem;
    border-radius: 8px;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 0.5rem;
}

.breadcrumb-custom a {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.breadcrumb-custom a:hover {
    color: var(--dark-blue);
    text-decoration: underline;
}

.breadcrumb-custom span.separator {
    color: #6c757d;
    margin: 0 0.25rem;
}

.breadcrumb-custom .current {
    color: #6c757d;
    font-weight: 500;
}

/* Tender Content */
.tender-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-bottom: 2rem;
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

.tender-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid #e0e0e0;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #495057;
}

.meta-item i {
    color: var(--primary-blue);
    font-size: 1.2rem;
    width: 24px;
}

.meta-item strong {
    color: var(--dark-blue);
    margin-right: 5px;
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

.tender-description .lead {
    font-size: 1.2rem;
    font-weight: 500;
    color: var(--dark-blue);
    border-left: 4px solid var(--primary-blue);
    padding-left: 1.5rem;
    margin: 2rem 0;
}

/* Location Cards */
.location-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 2rem 0;
}

.location-card {
    background: var(--light-bg);
    border-radius: 10px;
    padding: 1.5rem;
    border: 1px solid #e0e0e0;
}

.location-card h4 {
    color: var(--dark-blue);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.location-card p {
    color: #6c757d;
    margin-bottom: 0.5rem;
}

.location-card .county {
    display: inline-block;
    background: rgba(110, 193, 228, 0.1);
    color: var(--primary-blue);
    padding: 0.2rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
}

/* Specifications */
.specs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin: 2rem 0;
}

.spec-item {
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 1rem;
    text-align: center;
}

.spec-icon {
    color: var(--primary-blue);
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.spec-label {
    font-size: 0.9rem;
    color: #6c757d;
}

.spec-value {
    font-weight: 700;
    color: var(--dark-blue);
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
    margin-top: 1rem;
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

/* Sidebar */
.sidebar-widget {
    background: white;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    margin-bottom: 2rem;
    border: 1px solid #e0e0e0;
}

.widget-title {
    color: var(--dark-blue);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 1.2rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--primary-blue);
}

.contact-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.contact-list li {
    padding: 0.7rem 0;
    border-bottom: 1px dashed #e0e0e0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.contact-list li:last-child {
    border-bottom: none;
}

.contact-list i {
    color: var(--primary-blue);
    width: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .tender-content {
        padding: 1.5rem;
    }
    
    .tender-title {
        font-size: 1.5rem;
    }
    
    .location-grid,
    .specs-grid {
        grid-template-columns: 1fr;
    }
    
    .tender-meta {
        flex-direction: column;
        gap: 10px;
    }
}
</style>

<section class="tender-detail-wrapper">
    <div class="container">
        
        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb-section" data-aos="fade-up">
            <div class="breadcrumb-custom">
                <a href="/">Home</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="/news-updates">News & Updates</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <a href="/news-updates?category=go-blue-component-1">Go Blue Component 1</a>
                <span class="separator"><i class="bi bi-chevron-right"></i></span>
                <span class="current">Supply contract for ancillary services: cold rooms + ice</span>
            </div>
        </div>

        <div class="row">
            <!-- Main Content Column -->
            <div class="col-lg-8">
                <!-- Tender Card -->
                <div class="tender-card" data-aos="fade-up">
                    <!-- Image -->
                    <img src="/assets/images/supply contract.png" alt="Cold Rooms and Ice Machines Tender" class="tender-image" onerror="this.src='https://via.placeholder.com/1200x400?text=Cold+Rooms+%26+Ice+Machines+Tender'">
                    
                    <!-- Content -->
                    <div class="tender-content">
                        <h1 class="tender-title">Supply contract for ancillary services: supply, install, commission two cold rooms + ice</h1>
                        
                        <div class="tender-meta">
                            <div class="meta-item">
                                <i class="bi bi-building"></i>
                                <span><strong>AICS:</strong> Nairobi Office</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-tag"></i>
                                <span><strong>Tender Type:</strong> Supply Contract + Ancillary Services</span>
                            </div>
                            <div class="meta-item">
                                <i class="bi bi-calendar"></i>
                                <span><strong>Published:</strong> March 2025</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="tender-description">
                            <p class="lead">
                                AICS Nairobi Office intends to award a supply contract with ancillary services with the scope to supply, install and commission n. 2 containerized cold rooms + ice flakes production machines, solar powered.
                            </p>
                            
                            <p>
                                These facilities will serve the Beach Management Units (BMU) of Kibuyuni and Uyombo, supporting local fishing communities with improved cold storage capacity and ice production to reduce post-harvest losses and enhance the value of marine products.
                            </p>

                            <!-- Locations -->
                            <h4 style="color: var(--dark-blue); margin: 2rem 0 1rem;">📍 Project Locations</h4>
                            <div class="location-grid">
                                <div class="location-card">
                                    <h4>Kibuyuni BMU</h4>
                                    <p>Kwale County</p>
                                    <span class="county">Coast Region</span>
                                </div>
                                <div class="location-card">
                                    <h4>Uyombo BMU</h4>
                                    <p>Kilifi County</p>
                                    <span class="county">Coast Region</span>
                                </div>
                            </div>

                            <!-- Specifications -->
                            <h4 style="color: var(--dark-blue); margin: 2rem 0 1rem;">🔧 Key Specifications</h4>
                            <div class="specs-grid">
                                <div class="spec-item">
                                    <div class="spec-icon"><i class="bi bi-snow"></i></div>
                                    <div class="spec-label">Cold Rooms</div>
                                    <div class="spec-value">2 Containerized</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon"><i class="bi bi-droplet"></i></div>
                                    <div class="spec-label">Ice Flakes Machines</div>
                                    <div class="spec-value">Solar Powered</div>
                                </div>
                                <div class="spec-item">
                                    <div class="spec-icon"><i class="bi bi-solar-panel"></i></div>
                                    <div class="spec-label">Energy Source</div>
                                    <div class="spec-value">Solar</div>
                                </div>
                            </div>

                            <!-- External Link Button -->
                            <div class="text-center text-md-start">
                                <a href="https://trasparenzanairobi.aics.gov.it/archivio105_delibera-anac-n-6012023-procedure_0_3923_566_1.html?fbclid=IwAR1yy4TwsPuLey00p9ZXVKRjtFpIhwL17ni60EouqPAC-79KVNykqlqO_zI" 
                                   class="btn-details" 
                                   target="_blank" 
                                   rel="noopener noreferrer">
                                    <span>🔍 Find More Details on AICS Portal</span>
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                                <p class="text-muted mt-3 small">
                                    <i class="bi bi-info-circle"></i> You will be redirected to the official AICS Transparency Portal for complete tender documentation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Column -->
            <div class="col-lg-4">
                <!-- Contact Information -->
                <div class="sidebar-widget" data-aos="fade-up">
                    <h4 class="widget-title">📞 Contact Information</h4>
                    <ul class="contact-list">
                        <li><i class="bi bi-building"></i> <strong>AICS Nairobi Office</strong></li>
                        <li><i class="bi bi-geo-alt"></i> Nairobi, Kenya</li>
                        <li><i class="bi bi-envelope"></i> tenders.nairobi@aics.gov.it</li>
                        <li><i class="bi bi-globe"></i> <a href="https://nairobi.aics.gov.it" target="_blank" style="color: var(--primary-blue);">nairobi.aics.gov.it</a></li>
                    </ul>
                </div>

                <!-- Beneficiaries -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="50">
                    <h4 class="widget-title">👥 Beneficiaries</h4>
                    <ul class="contact-list">
                        <li><i class="bi bi-people"></i> Kibuyuni Beach Management Unit</li>
                        <li><i class="bi bi-people"></i> Uyombo Beach Management Unit</li>
                        <li><i class="bi bi-water"></i> Fishing Communities - Kwale County</li>
                        <li><i class="bi bi-water"></i> Fishing Communities - Kilifi County</li>
                    </ul>
                </div>

                <!-- Related Links -->
                <div class="sidebar-widget" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="widget-title">🔗 Related Links</h4>
                    <ul class="contact-list">
                        <li><i class="bi bi-arrow-right-circle"></i> <a href="/news-updates?category=go-blue-component-1" style="color: var(--primary-blue);">More Go Blue Component 1 Tenders</a></li>
                        <li><i class="bi bi-arrow-right-circle"></i> <a href="/blueprint" style="color: var(--primary-blue);">TCH Blueprint 2030</a></li>
                        <li><i class="bi bi-arrow-right-circle"></i> <a href="/news-updates" style="color: var(--primary-blue);">All News & Updates</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>