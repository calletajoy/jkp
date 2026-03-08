<?php
/**
 * pages/core-mandate.php — Core Mandate page with Jumuiya ya Kaunti za Pwani content.
 */

$pageTitle    = 'Our Core Mandate';
$currentPage  = 'core-mandate';
$heroTitle    = 'Our Core Mandate';
$heroSubtitle = 'Driving Regional Economic Growth';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
/* Folded Card Styles */
.folded-card {
    perspective: 1500px;
    height: 300px;
    cursor: pointer;
    margin-bottom: 20px;
}

.folded-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    transition: transform 0.8s ease-in-out;
    transform-style: preserve-3d;
}

.folded-card.active .folded-card-inner {
    transform: rotateX(0deg);
}

.folded-card:not(.active) .folded-card-inner {
    transform: rotateX(20deg);
}

.folded-card-front, .folded-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 15px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.folded-card-front {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transform: rotateX(0deg);
}

.folded-card-front.mission {
    background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
}

.folded-card-front.vision {
    background: linear-gradient(135deg, #198754 0%, #146c43 100%);
}

.folded-card-front i {
    font-size: 4rem;
    margin-bottom: 20px;
}

.folded-card-front h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 15px;
}

.folded-card-front p {
    font-size: 1rem;
    opacity: 0.9;
    text-align: center;
}

.folded-card-back {
    background: white;
    color: #333;
    transform: rotateX(180deg);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    border: 1px solid rgba(0,0,0,0.1);
}

.folded-card-back h4 {
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

.folded-card-back p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
    max-width: 80%;
    margin: 0 auto;
    font-style: italic;
}

.folded-card-back.mission h4 { color: #0d6efd; }
.folded-card-back.vision h4 { color: #198754; }

.tap-indicator {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    background: rgba(255,255,255,0.2);
    padding: 5px 15px;
    border-radius: 20px;
    font-size: 0.8rem;
    color: white;
    display: flex;
    align-items: center;
    gap: 5px;
}

.folded-card.active .tap-indicator {
    opacity: 0;
    transition: opacity 0.3s ease;
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
                            <span class="title">JKP Core Mandate</span>
                            <div class="small-circle-end"></div>
                        </div>
                    </div>
                    <h2 class="mb-4">
                        <span class="cssanimation lePopUp sequence">Driving Socio-Economic</span><br>
                        <span class="cssanimation lePopUp sequence">Development of the Coast</span>
                    </h2>
                    
                    <div class="mt-4">
                        <h4 class="mb-3" style="color: #333; font-weight: 600; text-align: left;">Introduction</h4>
                        <p class="lead mb-4" style="font-size: 1.2rem; color: #555; text-align: left;">The <strong>JKP Secretariat</strong> plays a central role in advancing the shared development goals of the coastal counties. Its responsibility is to maintain a broad understanding of the region's opportunities and challenges while creating an enabling environment that supports collaboration, innovation, and investment.</p>
                        
                        <p class="mb-5" style="font-size: 1.1rem; text-align: left;">Through coordinated initiatives and strategic partnerships, the Secretariat provides a platform for the <strong>socio-economic development of the coastal region</strong>, working to transform the region and improve the livelihoods of its communities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Strategic Focus Areas ===== -->
<section class="about-company py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Where We Focus</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Strategic Focus Areas</h2>
            <p class="text-muted mt-3">Driving growth through key sectors of the coastal economy</p>
        </div>

        <div class="row g-4">
            <!-- Education & Academia -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="mb-3">
                        <i class="bi bi-book-half" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-3">Education & Academia</h5>
                    <p class="text-white-50 small mb-0">Partnering with 3 universities to drive research and innovation in the coastal region</p>
                </div>
            </div>
            
            <!-- Agriculture & Agribusiness -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="mb-3">
                        <i class="bi bi-tree-fill" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-3">Agriculture & Agribusiness</h5>
                    <p class="text-white-50 small mb-0">Value chain development and modern farming techniques for sustainable growth</p>
                </div>
            </div>
            
            <!-- Blue Economy -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; background: linear-gradient(135deg, #fa709a 0%, #fee140 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="mb-3">
                        <i class="bi bi-water" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-3">Blue Economy</h5>
                    <p class="text-white-50 small mb-0">Sustainable marine resources and fisheries management for coastal communities</p>
                </div>
            </div>
            
            <!-- Tourism -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <div class="mb-3">
                        <i class="bi bi-umbrella" style="font-size: 3rem; color: white;"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-3">Tourism</h5>
                    <p class="text-white-50 small mb-0">Coastal, cultural and eco-tourism development to showcase our region</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Core Mandates Section ===== -->
<section class="our-investigators py-5 bg-light">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">What We Do</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-2" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">Our Core Mandates</h2>
            </div>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                The JKP Secretariat is mandated to drive regional development through these key pillars
            </p>
        </div>

        <div class="row g-4">
            <!-- Policy Harmonization -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="rounded-circle bg-primary bg-opacity-10 p-3 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-file-earmark-text-fill" style="font-size: 2rem; color: #0d6efd;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Policy Harmonization</h5>
                    <p class="text-muted small">Aligning county policies to create a cohesive regional framework for development</p>
                </div>
            </div>
            
            <!-- Coordination -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="rounded-circle bg-success bg-opacity-10 p-3 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-diagram-3-fill" style="font-size: 2rem; color: #198754;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Coordination</h5>
                    <p class="text-muted small">Harmonizing efforts across counties, universities, and the private sector</p>
                </div>
            </div>
            
            <!-- Investment Promotion -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="rounded-circle bg-warning bg-opacity-10 p-3 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-graph-up-arrow" style="font-size: 2rem; color: #ffc107;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Investment Promotion</h5>
                    <p class="text-muted small">Attracting and facilitating capital flow into the coastal region</p>
                </div>
            </div>
            
            <!-- Regional Promotion -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 text-center p-4" style="border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); transition: all 0.3s ease;">
                    <div class="rounded-circle bg-info bg-opacity-10 p-3 mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                        <i class="bi bi-megaphone-fill" style="font-size: 2rem; color: #0dcaf0;"></i>
                    </div>
                    <h5 class="fw-bold mb-2">Regional Promotion</h5>
                    <p class="text-muted small">Marketing regional assets and opportunities to investors and partners</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Mission & Vision Folded Cards ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Purpose</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Mission & Vision</h2>
            <p class="text-muted mt-3">Tap on each card to unfold and reveal our guiding principles</p>
        </div>

        <div class="row justify-content-center g-4">
            <!-- Mission Folded Card -->
            <div class="col-md-6" data-aos="fade-right">
                <div class="folded-card" id="missionCard" onclick="toggleCard('missionCard')">
                    <div class="folded-card-inner">
                        <!-- Front of card (folded state) -->
                        <div class="folded-card-front mission">
                            <i class="bi bi-bullseye"></i>
                            <h3>Our Mission</h3>
                            <p>Tap to unfold →</p>
                            <div class="tap-indicator">
                                <i class="bi bi-hand-index-thumb"></i> Tap to reveal
                            </div>
                        </div>
                        <!-- Back of card (unfolded state) -->
                        <div class="folded-card-back mission">
                            <h4>Our Mission</h4>
                            <p>"To catalyze economic growth of Kenya's coastal regional counties."</p>
                            <div class="tap-indicator" style="background: rgba(0,0,0,0.1); color: #333;">
                                <i class="bi bi-hand-index-thumb"></i> Tap to fold
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision Folded Card -->
            <div class="col-md-6" data-aos="fade-left">
                <div class="folded-card" id="visionCard" onclick="toggleCard('visionCard')">
                    <div class="folded-card-inner">
                        <!-- Front of card (folded state) -->
                        <div class="folded-card-front vision">
                            <i class="bi bi-eye"></i>
                            <h3>Our Vision</h3>
                            <p>Tap to unfold →</p>
                            <div class="tap-indicator">
                                <i class="bi bi-hand-index-thumb"></i> Tap to reveal
                            </div>
                        </div>
                        <!-- Back of card (unfolded state) -->
                        <div class="folded-card-back vision">
                            <h4>Our Vision</h4>
                            <p>"A regional economy that creates wealth and shared prosperity for its communities."</p>
                            <div class="tap-indicator" style="background: rgba(0,0,0,0.1); color: #333;">
                                <i class="bi bi-hand-index-thumb"></i> Tap to fold
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ===== Stats / Impact Section ===== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Our Impact</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Delivering Results Across the Coast</h2>
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
                    <h2 class="fw-bold" style="font-size:3rem; color: #198754;">3</h2>
                    <p class="text-muted fs-5">Partner Universities</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #ffc107;">4</h2>
                    <p class="text-muted fs-5">Core Mandates</p>
                </div>
            </div>
            <div class="col" data-aos="fade-up">
                <div class="p-4">
                    <h2 class="fw-bold" style="font-size:3rem; color: #0dcaf0;">4</h2>
                    <p class="text-muted fs-5">Strategic Focus Areas</p>
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
                    <span class="cssanimation lePopUp sequence">Partner With the Jumuiya</span><br>
                    <span class="cssanimation lePopUp sequence">Economic Development Secretariat</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto;">
                    Explore investment opportunities, flagship projects, and partnerships across Kenya's six coastal counties under the Jumuiya 2030 Blueprint.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact">Get In Touch <i class="bi bi-arrow-right"></i></a>
                    <a href="/events">View Opportunities <i class="bi bi-arrow-right"></i></a>
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