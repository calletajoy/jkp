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

<!-- ===== Introduction Section ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <!-- Text on the left side -->
            <div class="col-12 col-lg-7 order-2 order-lg-1" data-aos="fade-right">
                <div class="company-details">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">JKP Core Mandate</span>
                        </div>
                    </div>
                    <h2>
                        <span class="cssanimation lePopUp sequence">Driving Socio-Economic</span><br>
                        <span class="cssanimation lePopUp sequence">Development of the Coast</span>
                    </h2>
                    
                    <h4 class="mt-4 mb-3" style="color: #333; font-weight: 600;">Introduction</h4>
                    <p>The <strong>JKP Secretariat</strong> plays a central role in advancing the shared development goals of the coastal counties. Its responsibility is to maintain a broad understanding of the region's opportunities and challenges while creating an enabling environment that supports collaboration, innovation, and investment.</p>
                    <p>Through coordinated initiatives and strategic partnerships, the Secretariat provides a platform for the <strong>socio-economic development of the coastal region</strong>, working to transform the region and improve the livelihoods of its communities.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 mb-3" style="border-left: 5px solid #0d6efd;">
                                <h5 style="font-weight: 700; color: #0d6efd;">Our Mission</h5>
                                <p class="mb-0 fst-italic" style="font-size: 1.1rem;">"To catalyze economic growth of Kenya's coastal regional counties."</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 bg-light rounded-4 mb-3" style="border-left: 5px solid #198754;">
                                <h5 style="font-weight: 700; color: #198754;">Our Vision</h5>
                                <p class="mb-0 fst-italic" style="font-size: 1.1rem;">"A regional economy that creates wealth and shared prosperity for its communities."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Image on the right side, slightly below -->
            <div class="col-12 col-lg-5 order-1 order-lg-2" data-aos="fade-left" style="margin-top: 50px;">
                <div class="images text-center text-lg-end">
                    <img class="img-fluid img-one" src="/assets/images/about jkp bloc.png" alt="Jumuiya ya Kaunti za Pwani" style="max-width: 100%; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
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

<!-- ===== Strategic Focus Areas ===== -->
<section class="about-company py-5">
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
                <div class="position-relative overflow-hidden rounded-4" style="height: 250px;">
                    <img src="/assets/images/education.jpg" class="img-fluid w-100 h-100" alt="Education & Academia" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <h5 class="text-white mb-0 fw-bold">Education & Academia</h5>
                        <p class="text-white-50 small mb-0">Partnering with 3 universities</p>
                    </div>
                </div>
            </div>
            
            <!-- Agriculture & Agribusiness -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="position-relative overflow-hidden rounded-4" style="height: 250px;">
                    <img src="/assets/images/agriculture.jpg" class="img-fluid w-100 h-100" alt="Agriculture & Agribusiness" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <h5 class="text-white mb-0 fw-bold">Agriculture & Agribusiness</h5>
                        <p class="text-white-50 small mb-0">Value chain development</p>
                    </div>
                </div>
            </div>
            
            <!-- Blue Economy -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <div class="position-relative overflow-hidden rounded-4" style="height: 250px;">
                    <img src="/assets/images/blue-economy.jpg" class="img-fluid w-100 h-100" alt="Blue Economy" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <h5 class="text-white mb-0 fw-bold">Blue Economy</h5>
                        <p class="text-white-50 small mb-0">Marine resources & fisheries</p>
                    </div>
                </div>
            </div>
            
            <!-- Tourism -->
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <div class="position-relative overflow-hidden rounded-4" style="height: 250px;">
                    <img src="/assets/images/tourism.jpg" class="img-fluid w-100 h-100" alt="Tourism" style="object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                        <h5 class="text-white mb-0 fw-bold">Tourism</h5>
                        <p class="text-white-50 small mb-0">Coastal & cultural tourism</p>
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
                <h2 class="fw-bold" style="font-size:2.5rem; color: #0d6efd;">6</h2>
                <p class="text-muted">Member Counties</p>
            </div>
            <div class="col" data-aos="fade-up">
                <h2 class="fw-bold" style="font-size:2.5rem; color: #198754;">3</h2>
                <p class="text-muted">Partner Universities</p>
            </div>
            <div class="col" data-aos="fade-up">
                <h2 class="fw-bold" style="font-size:2.5rem; color: #ffc107;">4</h2>
                <p class="text-muted">Core Mandates</p>
            </div>
            <div class="col" data-aos="fade-up">
                <h2 class="fw-bold" style="font-size:2.5rem; color: #0dcaf0;">4</h2>
                <p class="text-muted">Strategic Focus Areas</p>
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

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';