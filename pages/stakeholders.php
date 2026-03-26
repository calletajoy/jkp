<?php
/**
 * pages/stakeholders.php — Stakeholders page for Jumuiya ya Kaunti za Pwani
 */

$pageTitle    = 'Our Stakeholders';
$currentPage  = 'stakeholders';
$heroTitle    = 'Stakeholders';
$heroSubtitle = 'Driving Sustainable Development Together';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
/* Introduction Section Styles */
.company-details p strong {
    font-weight: 700;
    color: #0d6efd;
}

/* Partners Section Styles - Rectangular Images, Horizontal Grid */
.partners-grid {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
}

.partner-card {
    flex: 1;
    min-width: 280px;
    max-width: 320px;
    background: white;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: all 0.3s ease;
    text-align: center;
    padding-bottom: 25px;
}

.partner-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* Rectangular Image Container - No Circle */
.partner-image {
    width: 100%;
    height: 200px;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 20px;
    border-bottom: 1px solid #eee;
}

/* Grayscale by default */
.partner-image img {
    max-width: 80%;
    max-height: 100%;
    object-fit: contain;
    filter: grayscale(100%);
    transition: filter 0.4s ease;
}

/* Full color on hover */
.partner-card:hover .partner-image img {
    filter: grayscale(0%);
}

.partner-name {
    font-size: 1.25rem;
    font-weight: 700;
    color: #333;
    margin: 20px 20px 10px;
}

.partner-description {
    font-size: 0.85rem;
    color: #666;
    line-height: 1.5;
    padding: 0 20px;
}

/* Projects Section Styles - Square Cards with Circular Logos */
.projects-grid {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
}

.project-square-card {
    width: 350px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    padding: 30px;
    text-align: center;
    transition: all 0.3s ease;
}

.project-square-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.project-logo-circle {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #666;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 20px;
    padding: 20px;
    background: white;
}

.project-logo-circle img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.project-square-card h4 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
}

.project-square-card p {
    color: #666;
    line-height: 1.6;
    font-size: 0.95rem;
}

/* Map Styles */
.county-map-container {
    position: relative;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
}

.map-svg {
    width: 100%;
    height: auto;
}

.county-marker {
    position: absolute;
    transform: translate(-50%, -50%);
    pointer-events: all;
    z-index: 10;
    cursor: pointer;
}

.pulsating-dot {
    width: 16px;
    height: 16px;
    background-color: #0d6efd;
    border-radius: 50%;
    position: relative;
    box-shadow: 0 0 0 rgba(13, 110, 253, 0.4);
    animation: pulse 2s infinite;
}

.pulsating-dot::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #0d6efd;
    transform: translate(-50%, -50%) scale(1);
    opacity: 0.6;
    animation: pulse-ring 2s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(13, 110, 253, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(13, 110, 253, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(13, 110, 253, 0);
    }
}

@keyframes pulse-ring {
    0% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0.6;
    }
    70% {
        transform: translate(-50%, -50%) scale(2);
        opacity: 0;
    }
    100% {
        transform: translate(-50%, -50%) scale(1);
        opacity: 0;
    }
}

.county-name-tag {
    position: absolute;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    background: white;
    color: #333;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    white-space: nowrap;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.county-marker:hover .county-name-tag {
    opacity: 1;
}

/* County colors - different for each */
.county-marker[data-county="mombasa"] .pulsating-dot { background-color: #0d6efd; }
.county-marker[data-county="kwale"] .pulsating-dot { background-color: #198754; }
.county-marker[data-county="kilifi"] .pulsating-dot { background-color: #ffc107; }
.county-marker[data-county="tana-river"] .pulsating-dot { background-color: #dc3545; }
.county-marker[data-county="lamu"] .pulsating-dot { background-color: #0dcaf0; }
.county-marker[data-county="taita-taveta"] .pulsating-dot { background-color: #6f42c1; }

/* Download Section Styles - Small Rectangles */
.download-rectangles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.download-rectangle {
    width: 180px;
    background: linear-gradient(135deg, #0d6efd, #0a58ca);
    border-radius: 12px;
    padding: 20px 15px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.download-rectangle:nth-child(2) { background: linear-gradient(135deg, #198754, #146c43); }
.download-rectangle:nth-child(3) { background: linear-gradient(135deg, #ffc107, #cc9a06); }
.download-rectangle:nth-child(4) { background: linear-gradient(135deg, #dc3545, #b02a37); }
.download-rectangle:nth-child(5) { background: linear-gradient(135deg, #0dcaf0, #0aa2c0); }
.download-rectangle:nth-child(6) { background: linear-gradient(135deg, #6f42c1, #5936a2); }
.download-rectangle:nth-child(7) { background: linear-gradient(135deg, #fd7e14, #cc6600); }

.download-rectangle:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.download-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.download-header img {
    width: 30px;
    height: 30px;
    object-fit: contain;
}

.download-rectangle h4 {
    color: white;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.download-rectangle p {
    color: rgba(255,255,255,0.8);
    font-size: 0.75rem;
    margin: 0;
}

/* Merry-Go-Round Styles */
.merry-go-round {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
    padding: 20px;
    animation: slide 15s infinite linear;
}

@keyframes slide {
    0% { transform: translateX(0); }
    25% { transform: translateX(-20px); }
    50% { transform: translateX(0); }
    75% { transform: translateX(20px); }
    100% { transform: translateX(0); }
}

.merry-image {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    filter: grayscale(100%);
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.merry-image:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
}

.merry-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Layout adjustments */
.intro-section {
    position: relative;
    overflow: hidden;
}

.map-right {
    position: relative;
    z-index: 2;
}

.collaborators-below {
    margin-top: 40px;
    z-index: 1;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .partner-card {
        min-width: 260px;
        max-width: 280px;
    }
    
    .partner-image {
        height: 180px;
    }
    
    .project-square-card {
        width: 100%;
        max-width: 350px;
    }
    
    .download-rectangle {
        width: 100%;
        max-width: 180px;
    }
}
</style>

<!-- ===== Introduction Section with Map on Right and Collaborators Below ===== -->
<section class="about-company py-5 intro-section">
    <div class="container">
        <div class="row align-items-start">
            <!-- Left side: Text Content -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="company-details">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">Our Stakeholders</span>
                        </div>
                    </div>
                    <h2 class="mb-4">
                        <span class="cssanimation lePopUp sequence">Building Strategic Partnerships</span><br>
                        <span class="cssanimation lePopUp sequence">for Coastal Development</span>
                    </h2>
                    
                    <div class="mt-4">
                        <p class="lead mb-4" style="font-size: 1.2rem; color: #555; text-align: left;">Jumuiya ya Kaunti za Pwani (JKP) Economic Bloc has fostered sustainable development in Kenya's coastal counties through partnerships with organizations like <strong>FAO</strong>, <strong>AHADI/USAID</strong>, <strong>EU</strong>, <strong>Trade Mark East Africa</strong>, <strong>Generation Kenya</strong>, and <strong>KPMG</strong>.</p>
                        
                        <p class="mb-5" style="font-size: 1.1rem; text-align: left;">These collaborations have driven economic growth and improved livelihoods by enhancing agricultural productivity, promoting governance, strengthening trade, boosting employability, and improving financial management. The JKP's alliances with global partners have paved the way for a brighter future for coastal Kenyan communities.</p>
                    </div>
                    
                    <!-- Collaborators Image Below Text -->
                    <div class="collaborators-below" data-aos="fade-up">
                        <img src="/assets/images/Screenshot 2026-03-08 214011.png" alt="Jumuiya and Collaborators" class="img-fluid rounded-4" style="box-shadow: 0 20px 40px rgba(0,0,0,0.15); width: 100%;">
                    </div>
                </div>
            </div>
            
            <!-- Right side: SVG Map -->
            <?php include __DIR__ . '/components/coastal_counties.php'; ?>
            
        </div>
    </div>
</section>

<!-- ===== Partners Section with Rectangular Images (No Circles) ===== -->
<section class="our-investigators py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Partners</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Our Partners in Focus</h2>
            <p class="text-muted mt-3">Key Collaborators — Hover over images to see them in full color</p>
        </div>

        <div class="partners-grid">
            <!-- FAO -->
            <div class="partner-card" data-aos="fade-up">
                <div class="partner-image">
                    <img src="/assets/images/FAO-Logo.png" alt="FAO">
                </div>
                <div class="partner-name">FAO</div>
                <div class="partner-description">
                    Leads international efforts to defeat hunger and improve nutrition and food security
                </div>
            </div>
            
            <!-- EU / Go Blue -->
            <div class="partner-card" data-aos="fade-up" data-aos-delay="50">
                <div class="partner-image">
                    <img src="/assets/images/eu-go blue.png" alt="European Union">
                </div>
                <div class="partner-name">Go Blue (EU)</div>
                <div class="partner-description">
                    Focus on creating growth, ensuring healthy waters and building sustainable communities
                </div>
            </div>
            
            <!-- Trade Mark East Africa -->
            <div class="partner-card" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-image">
                    <img src="/assets/images/trade mark EA.png" alt="Trade Mark East Africa">
                </div>
                <div class="partner-name">Trade Mark East Africa</div>
                <div class="partner-description">
                    Established with the aim of growing prosperity in Africa through increased trade
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Projects Section with Square Cards and Circular Logos ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Flagship Projects</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Driving Transformation</h2>
            <p class="text-muted mt-3">Key initiatives shaping the future of the coastal region</p>
        </div>

        <div class="projects-grid">
            <!-- Go Blue Project -->
            <div class="project-square-card" data-aos="fade-right">
                <div class="project-logo-circle">
                    <img src="/assets/images/eu-go blue.png" alt="Go Blue">
                </div>
                <h4>Go Blue</h4>
                <p>Go Blue is a four year project funded by the European Union focusing on sustainable blue economy initiatives across the coastal region.</p>
                <a href="#" class="btn btn-outline-primary mt-3">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
            
            <!-- Jumuiya 2030 -->
            <div class="project-square-card" data-aos="fade-left">
                <div class="project-logo-circle">
                    <img src="/assets/images/Jumuiya-Logo.svg" alt="Jumuiya 2030">
                </div>
                <h4>Jumuiya 2030</h4>
                <p>Jumuiya 2030 is the regional economic development strategy for the coastal counties, outlining a comprehensive blueprint for sustainable growth and prosperity.</p>
                <a href="#" class="btn btn-outline-success mt-3">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== Downloads Section - 7 Small Rectangles ===== -->
<section class="our-investigators py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Resources</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Download County Resources</h2>
            <p class="text-muted mt-3">Access comprehensive documentation for all six coastal counties</p>
        </div>

        <div class="download-rectangles">
            <!-- JKP Counties Resources (Complete Pack) -->
            <div class="download-rectangle" data-aos="fade-up">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>JKP Counties</h4>
                <p>Complete Resource Pack</p>
            </div>
            
            <!-- GoBlue Mombasa -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="50">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Mombasa</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Kwale -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="100">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Kwale</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Kilifi -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="150">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Kilifi</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Tana River -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="200">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Tana River</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Lamu -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="250">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Lamu</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Taita Taveta -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="300">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Taita Taveta</h4>
                <p>County Documentation</p>
            </div>
        </div>
        
        <!-- Download Links (hidden but functional) -->
        <div style="display: none;">
            <a id="download-jkp" href="/assets/resources/jkp-counties-complete-resources.pdf" download></a>
            <a id="download-mombasa" href="/assets/content-files/Brochure-Mombasa.pdf" download></a>
            <a id="download-kwale" href="/assets/content-files/Brochure-Kwale.pdf" download></a>
            <a id="download-kilifi" href="/assets/content-files/Brochure-Kilifi.pdf" download></a>
            <a id="download-tana" href="/assets/content-files/Brochure-Tana-River.pdf" download></a>
            <a id="download-lamu" href="/assets/content-files/Brochure-Lamu.pdf" download></a>
            <a id="download-taita" href="/assets/content-files/Brochure-Taita-Taveta.pdf" download></a>
        </div>
    </div>
</section>

<!-- ===== Merry-Go-Round Section (Just above CTA) ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-rectangle justify-content-center">
                    <div class="small-rectangle-start"></div>
                    <div class="small-rectangle-end"></div>
                </div>
            </div>
        </div>

        <div class="merry-go-round" data-aos="zoom-in">
            <!-- Go Blue EU -->
            <div class="merry-image">
                <img src="/assets/images/eu-go blue.png" alt="Go Blue EU">
            </div>
            
            <!-- Go Blue -->
            <div class="merry-image">
                <img src="/assets/images/assets/images/goo-blu.png" alt="Go Blue EU">
            </div> 
            
            <!-- Jumuiya -->
            <div class="merry-image">
                <img src="/assets/images/Jumuiya-Logo.svg" alt="Jumuiya">
            </div>
            
            <!-- Court of Arms -->
            <div class="merry-image">
                <img src="/assets/images/kenya-court-of-arms.png" alt="Court of Arms">
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA Strip ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up">
    <div class="images-and-overlay">
        <img class="img-fluid" src="/assets/images/01_home/best-city/image-footer.png" alt="Jumuiya Coast Region">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white">
                    <span class="cssanimation lePopUp sequence">Partner With Us</span><br>
                    <span class="cssanimation lePopUp sequence">for Coastal Development</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto;">
                    Join our network of partners working to transform Kenya's coastal region through sustainable development initiatives.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact">Become a Partner <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="document.getElementById('download-jkp').click(); return false;">Download Resources <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Add click handlers for download rectangles
document.addEventListener('DOMContentLoaded', function() {
    const rectangles = document.querySelectorAll('.download-rectangle');
    const downloads = [
        'download-jkp',
        'download-mombasa',
        'download-kwale',
        'download-kilifi',
        'download-tana',
        'download-lamu',
        'download-taita'
    ];
    
    rectangles.forEach((rect, index) => {
        rect.addEventListener('click', function() {
            document.getElementById(downloads[index]).click();
        });
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';