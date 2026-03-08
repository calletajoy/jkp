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
/* Partner Card Hover Styles */
.partner-card {
    transition: all 0.3s ease;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.partner-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
}

.partner-card .partner-description {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(13, 110, 253, 0.95);
    color: white;
    padding: 15px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
    font-size: 0.85rem;
    text-align: center;
    border-radius: 0 0 10px 10px;
}

.partner-card:hover .partner-description {
    transform: translateY(0);
}

.partner-card img {
    transition: all 0.3s ease;
    max-height: 60px;
    width: auto;
}

/* Map Styles */
.county-map-container {
    position: relative;
    width: 100%;
    max-width: 600px;
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
    width: 20px;
    height: 20px;
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
        box-shadow: 0 0 0 15px rgba(13, 110, 253, 0);
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
.county-marker[data-county="mombasa"] .pulsating-dot,
.county-marker[data-county="mombasa"] .pulsating-dot::after { background-color: #0d6efd; }

.county-marker[data-county="kwale"] .pulsating-dot,
.county-marker[data-county="kwale"] .pulsating-dot::after { background-color: #198754; }

.county-marker[data-county="kilifi"] .pulsating-dot,
.county-marker[data-county="kilifi"] .pulsating-dot::after { background-color: #ffc107; }

.county-marker[data-county="tana-river"] .pulsating-dot,
.county-marker[data-county="tana-river"] .pulsating-dot::after { background-color: #dc3545; }

.county-marker[data-county="lamu"] .pulsating-dot,
.county-marker[data-county="lamu"] .pulsating-dot::after { background-color: #0dcaf0; }

.county-marker[data-county="taita-taveta"] .pulsating-dot,
.county-marker[data-county="taita-taveta"] .pulsating-dot::after { background-color: #6f42c1; }

/* Download Section Styles - Eyes Opening/Closing */
.download-city {
    border-radius: 15px;
    transition: all 0.3s ease;
}

.download-city .card {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
}

.eyes-download-icons {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.eyes-download-icons img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}
</style>

<!-- ===== Introduction Section ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10" data-aos="fade-up">
                <div class="company-details text-center">
                    <div class="semi-title">
                        <div class="animated-circles justify-content-center">
                            <div class="small-circle-start"></div>
                            <span class="title">Our Stakeholders</span>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                    <h2 class="mb-4">
                        <span class="cssanimation lePopUp sequence">Building Strategic Partnerships</span><br>
                        <span class="cssanimation lePopUp sequence">for Coastal Development</span>
                    </h2>
                    
                    <div class="mt-4">
                        <p class="lead mb-4" style="font-size: 1.2rem; color: #555; text-align: left;">Jumuiya ya Kaunti za Pwani (JKP) Economic Bloc has fostered sustainable development in Kenya's coastal counties through partnerships with organizations like FAO, AHADI/USAID, EU, Trade Mark East Africa, Generation Kenya, and KPMG.</p>
                        
                        <p class="mb-5" style="font-size: 1.1rem; text-align: left;">These collaborations have driven economic growth and improved livelihoods by enhancing agricultural productivity, promoting governance, strengthening trade, boosting employability, and improving financial management. The JKP's alliances with global partners have paved the way for a brighter future for coastal Kenyan communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Partners Section with Hover Descriptions ===== -->
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
            <h2 class="mt-2 cssanimation lePopUp sequence">Trusted Collaborators</h2>
            <p class="text-muted mt-3">Working together for sustainable development across the coast</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- FAO -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up">
                <div class="card partner-card h-100 border-0 p-4 text-center">
                    <img src="/assets/images/FAO-Logo.png" class="img-fluid" alt="FAO" style="max-height: 70px; width: auto; margin: 0 auto;">
                    <div class="partner-description">
                        Leads international efforts to defeat hunger and improve nutrition and food security
                    </div>
                </div>
            </div>
            
            <!-- EU -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="50">
                <div class="card partner-card h-100 border-0 p-4 text-center">
                    <img src="/assets/images/eu-go blue.png" class="img-fluid" alt="European Union" style="max-height: 70px; width: auto; margin: 0 auto;">
                    <div class="partner-description">
                        Focus on creating growth, ensuring healthy waters and building sustainable communities
                    </div>
                </div>
            </div>
            
            <!-- Trade Mark East Africa -->
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card partner-card h-100 border-0 p-4 text-center">
                    <img src="/assets/images/trade mark EA.png" class="img-fluid" alt="Trade Mark East Africa" style="max-height: 70px; width: auto; margin: 0 auto;">
                    <div class="partner-description">
                        Established with the aim of growing prosperity in Africa through increased trade
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Collaborators Image Section ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Collaborators</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Working Together for the Coast</h2>
            <p class="text-muted mt-3">Jumuiya and its global partners</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="zoom-in">
                <div class="text-center">
                    <img src="/assets/images/Screenshot 2026-03-08 214011.png" alt="Jumuiya and Collaborators" class="img-fluid rounded-4" style="box-shadow: 0 20px 40px rgba(0,0,0,0.15);">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Projects Section ===== -->
<section class="our-investigators py-5 bg-light">
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

        <div class="row g-4">
            <!-- Go Blue Project -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="card h-100 border-0 overflow-hidden" style="border-radius: 20px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <div class="position-relative" style="height: 200px; background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
                        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                            <i class="bi bi-water" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3">Go Blue Project</h4>
                        <p class="text-muted mb-4">Enhancing blue economy initiatives across the coastal region, focusing on sustainable marine resources, fisheries management, and coastal community development.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Jumuiya 2030 -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="card h-100 border-0 overflow-hidden" style="border-radius: 20px; box-shadow: 0 15px 30px rgba(0,0,0,0.1);">
                    <div class="position-relative" style="height: 200px; background: linear-gradient(135deg, #198754 0%, #146c43 100%);">
                        <div class="position-absolute top-50 start-50 translate-middle text-center text-white">
                            <i class="bi bi-calendar-check" style="font-size: 4rem;"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3">Jumuiya 2030</h4>
                        <p class="text-muted mb-4">A comprehensive economic blueprint for the coastal region, outlining strategic initiatives for sustainable growth, investment attraction, and community prosperity by 2030.</p>
                        <a href="#" class="btn btn-outline-success">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Counties Map Section with Interactive SVG ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Member Counties</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Six Coastal Counties, One Vision</h2>
            <p class="text-muted mt-3">Hover over the markers to see county names</p>
        </div>

        <div class="row align-items-center g-5">
            <!-- Interactive SVG Map -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="county-map-container">
                    <!-- SVG Map - You'll need to replace with your actual SVG -->
                    <img src="/assets/images/ke.svg" alt="JKP Coastal Counties Map" class="map-svg img-fluid" style="filter: drop-shadow(0 10px 20px rgba(0,0,0,0.1));">
                    
                    <!-- Pulsating Markers with County Name Tags -->
                    <!-- Mombasa -->
                    <div class="county-marker" data-county="mombasa" style="top: 65%; left: 55%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Mombasa</div>
                    </div>
                    
                    <!-- Kwale -->
                    <div class="county-marker" data-county="kwale" style="top: 75%; left: 50%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Kwale</div>
                    </div>
                    
                    <!-- Kilifi -->
                    <div class="county-marker" data-county="kilifi" style="top: 45%; left: 58%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Kilifi</div>
                    </div>
                    
                    <!-- Tana River -->
                    <div class="county-marker" data-county="tana-river" style="top: 30%; left: 62%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Tana River</div>
                    </div>
                    
                    <!-- Lamu -->
                    <div class="county-marker" data-county="lamu" style="top: 15%; left: 70%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Lamu</div>
                    </div>
                    
                    <!-- Taita Taveta -->
                    <div class="county-marker" data-county="taita-taveta" style="top: 55%; left: 45%;">
                        <div class="pulsating-dot"></div>
                        <div class="county-name-tag">Taita Taveta</div>
                    </div>
                </div>
            </div>
            
            <!-- Counties List -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-3">
                    <?php
                    $counties = [
                        'Mombasa', 'Kwale', 'Kilifi', 'Tana River', 'Lamu', 'Taita Taveta'
                    ];
                    $colors = ['#0d6efd', '#198754', '#ffc107', '#dc3545', '#0dcaf0', '#6f42c1'];
                    ?>
                    <?php foreach ($counties as $index => $county): ?>
                    <div class="col-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                        <div class="p-3 bg-white rounded-3" style="box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid <?php echo $colors[$index]; ?>;">
                            <h6 class="fw-bold mb-0"><i class="bi bi-geo-alt-fill me-2" style="color: <?php echo $colors[$index]; ?>;"></i><?php echo $county; ?></h6>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Resources Download Section (Eyes Opening/Closing Style) ===== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">JKP Counties Resources</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Download County Resources</h2>
            <p class="text-muted mt-3">Access comprehensive documentation for all six coastal counties</p>
        </div>

        <div class="row g-4">
            <!-- Complete Resources Pack Card -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="download-city p-4 p-xl-5" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
                    <h3 class="text-white mb-4">Complete Counties Pack</h3>
                    <div class="card mb-3 p-4 rounded-0">
                        <div class="eyes-download-icons">
                            <div>
                                <img class="img-fluid" src="/assets/images/eye.gif" alt="Preview">
                            </div>
                            <div class="uploadFile-icon">
                                <a href="/assets/resources/jkp-counties-complete-resources.pdf" download>
                                    <img class="img-fluid down" src="/assets/images/download.gif" alt="Download">
                                </a>
                            </div>
                        </div>
                        <h6 class="text-white mt-3">Updated: March 2024</h6>
                        <h4 class="text-white mt-2">All County Resources</h4>
                        <p class="text-white-50 small">One comprehensive file with all JKP county documentation</p>
                    </div>
                </div>
            </div>

            <!-- GoBlue Resources Pack Card -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="download-city p-4 p-xl-5" style="background: linear-gradient(135deg, #198754 0%, #146c43 100%);">
                    <h3 class="text-white mb-4">GoBlue County Files</h3>
                    <div class="card mb-3 p-4 rounded-0">
                        <div class="eyes-download-icons">
                            <div>
                                <img class="img-fluid" src="/assets/images/eye.gif" alt="Preview">
                            </div>
                            <div class="uploadFile-icon">
                                <a href="/assets/resources/goblue-complete.pdf" download>
                                    <img class="img-fluid down" src="/assets/images/download.gif" alt="Download">
                                </a>
                            </div>
                        </div>
                        <h6 class="text-white mt-3">Updated: March 2024</h6>
                        <h4 class="text-white mt-2">All GoBlue Resources</h4>
                        <p class="text-white-50 small">Complete GoBlue project documentation for all counties</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Individual County Files Section -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="text-center mb-4">Individual County Resources</h3>
                <p class="text-center text-muted mb-5">Click the download icon for each county's specific GoBlue file</p>
            </div>
            
            <?php
            $countyFiles = [
                ['name' => 'Mombasa', 'color' => '#0d6efd', 'file' => 'goblue-mombasa.pdf'],
                ['name' => 'Kwale', 'color' => '#198754', 'file' => 'goblue-kwale.pdf'],
                ['name' => 'Kilifi', 'color' => '#ffc107', 'file' => 'goblue-kilifi.pdf'],
                ['name' => 'Tana River', 'color' => '#dc3545', 'file' => 'goblue-tana-river.pdf'],
                ['name' => 'Lamu', 'color' => '#0dcaf0', 'file' => 'goblue-lamu.pdf'],
                ['name' => 'Taita Taveta', 'color' => '#6f42c1', 'file' => 'goblue-taita-taveta.pdf'],
            ];
            ?>
            
            <?php foreach ($countyFiles as $index => $county): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                <div class="download-city p-3" style="background: <?php echo $county['color']; ?>; margin-bottom: 20px;">
                    <div class="card p-3 rounded-0">
                        <div class="eyes-download-icons d-flex justify-content-between align-items-center">
                            <div>
                                <img class="img-fluid" src="/assets/images/eye.gif" alt="Preview" style="width: 30px; height: 30px;">
                            </div>
                            <h5 class="text-white mb-0"><?php echo $county['name']; ?></h5>
                            <div class="uploadFile-icon">
                                <a href="/assets/resources/<?php echo $county['file']; ?>" download>
                                    <img class="img-fluid down" src="/assets/images/download.gif" alt="Download" style="width: 30px; height: 30px;">
                                </a>
                            </div>
                        </div>
                        <p class="text-white-50 small mt-2 mb-0">GoBlue <?php echo $county['name']; ?> Documentation</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Stats / Impact Section ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Impact</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Delivering Results Together</h2>
        </div>
        <div class="row row-cols-2 row-cols-md-4 g-4 text-center">
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #0d6efd;">6</h2>
                    <p class="text-muted fs-5">Member Counties</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #198754;">3+</h2>
                    <p class="text-muted fs-5">Global Partners</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #ffc107;">2</h2>
                    <p class="text-muted fs-5">Flagship Projects</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #0dcaf0;">2030</h2>
                    <p class="text-muted fs-5">Blueprint Vision</p>
                </div>
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
                    <a href="/assets/resources/jkp-counties-complete-resources.pdf" download>Download Resources <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleCard(cardId) {
    const card = document.getElementById(cardId);
    card.classList.toggle('active');
}
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';