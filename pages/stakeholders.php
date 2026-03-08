<?php
/**
 * pages/stakeholders.php — Stakeholders page for Jumuiya ya Kaunti za Pwani
 */

$pageTitle    = 'Our Stakeholders';
$currentPage  = 'stakeholders';
$heroTitle    = 'stakeholders';
$heroSubtitle = 'Driving Sustainable Development Together';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

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

<!-- ===== Partners Section ===== -->
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
            <!-- Partner logos will go here - you'll need to add actual images -->
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/fao.png" class="img-fluid" alt="FAO" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="50">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/usaid.png" class="img-fluid" alt="USAID" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/eu.png" class="img-fluid" alt="European Union" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="150">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/tmea.png" class="img-fluid" alt="Trade Mark East Africa" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/generation-kenya.png" class="img-fluid" alt="Generation Kenya" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="250">
                <div class="card h-100 border-0 p-3 text-center" style="border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                    <img src="/assets/images/partners/kpmg.png" class="img-fluid" alt="KPMG" style="max-height: 60px; width: auto; margin: 0 auto;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Projects Section ===== -->
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

<!-- ===== Counties Map Section ===== -->
<section class="our-investigators py-5 bg-light">
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
            <p class="text-muted mt-3">Working together for regional prosperity</p>
        </div>

        <div class="row align-items-center g-5">
            <!-- Map Image -->
            <div class="col-lg-6" data-aos="fade-right">
                <div class="text-center">
                    <img src="/assets/images/jkp-counties-map.png" alt="JKP Coastal Counties Map" class="img-fluid rounded-4" style="box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
            
            <!-- Counties List and Resources -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="row g-3">
                    <?php
                    $counties = [
                        'Mombasa', 'Kwale', 'Kilifi', 'Tana River', 'Lamu', 'Taita Taveta'
                    ];
                    ?>
                    <?php foreach ($counties as $index => $county): ?>
                    <div class="col-6" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                        <div class="p-3 bg-white rounded-3" style="box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                            <h6 class="fw-bold mb-0"><i class="bi bi-geo-alt-fill text-primary me-2"></i><?php echo $county; ?></h6>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Resources Download Card -->
                <div class="mt-5 p-4 bg-white rounded-4" style="box-shadow: 0 10px 30px rgba(0,0,0,0.1);" data-aos="fade-up">
                    <h4 class="fw-bold mb-3">JKP Counties Resources</h4>
                    <p class="text-muted mb-4">Access comprehensive resources and documentation for all six coastal counties in one convenient file.</p>
                    
                    <!-- GoBlue County List -->
                    <div class="mb-4">
                        <h6 class="fw-bold text-primary mb-3"><i class="bi bi-water me-2"></i>GoBlue Initiatives by County:</h6>
                        <div class="row g-2">
                            <?php foreach ($counties as $county): ?>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2" style="font-size: 0.8rem;"></i>
                                    <span class="small">GoBlue in <?php echo $county; ?></span>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <a href="/assets/resources/jkp-counties-resources.pdf" download class="btn btn-primary w-100 py-3" style="border-radius: 50px;">
                        <i class="bi bi-download me-2"></i>Download JKP Counties Resources
                    </a>
                    <p class="text-muted small text-center mt-3 mb-0">One comprehensive file with all county resources</p>
                </div>
            </div>
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
                    <h2 class="fw-bold" style="font-size:3rem; color: #198754;">6+</h2>
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
                    <a href="/assets/resources/jkp-counties-resources.pdf" download>Download Resources <i class="bi bi-download"></i></a>
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