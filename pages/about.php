<?php
/**
 * pages/about.php — Hub version of About Us for Jumuiya ya Kaunti za Pwani
 */

$pageTitle    = 'About Us';
$currentPage  = 'about';
$heroTitle    = 'About Us';
$heroSubtitle = 'About Us';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<!-- ===== About Hub / Dashboard ===== -->
<section class="about-hub py-5">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Explore JKP</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">About Jumuiya ya Kaunti za Pwani</h2>
            <p class="text-muted mt-3" style="max-width:600px; margin:0 auto;">
                Learn more about the Economic Bloc, the JKP Core Mandate, and our Stakeholders. Click any section to get full details.
            </p>
        </div>

        <div class="row g-4">

            <!-- Economic Bloc Card -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/images/01_home/about-company/image-01.png" class="card-img-top img-fluid" alt="Economic Bloc">
                    <div class="card-body">
                        <h5 class="card-title">Economic Bloc</h5>
                        <p class="card-text">The JKP initiatives are overseen by a Secretariat, technical committees, and specialists from six counties, universities, and the private sector.</p>
                        <a href="/economic-bloc" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Core Mandate Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/images/01_home/about-company/image-02.png" class="card-img-top img-fluid" alt="JKP Core Mandate">
                    <div class="card-body">
                        <h5 class="card-title">JKP Core Mandate</h5>
                        <p class="card-text">The Secretariat coordinates mandates, harmonizes regional policy, promotes assets, drives investments, and manages a coastal data repository.</p>
                        <a href="/core-mandate" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Stakeholders Card -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm">
                    <img src="/assets/images/multiple-use/investigator/david.png" class="card-img-top img-fluid" alt="Stakeholders">
                    <div class="card-body">
                        <h5 class="card-title">Stakeholders</h5>
                        <p class="card-text">A Board of Governors representing each of the six member counties ensures guidance, oversight, and engagement across the coastal region.</p>
                        <a href="/stakeholders" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== Optional Preview Stats Section ===== -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Go Blue Project — Impact</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">Jumuiya Economic Bloc's Achievements</h2>
        </div>
        <div class="row row-cols-2 row-cols-md-4 g-4 text-center">
            <?php
            $stats = [
                ['value' => '16',    'label' => 'MSME Tourism Grants'],
                ['value' => '26+',   'label' => 'Boats Delivered'],
                ['value' => '2,000+','label' => 'Jobs Created (Youth &amp; Women)'],
                ['value' => '1,900+','label' => 'Skills Trainings Delivered'],
            ];
            foreach ($stats as $s):
            ?>
            <div class="col" data-aos="fade-up">
                <h2 class="fw-bold" style="font-size:2.5rem;"><?php echo $s['value']; ?></h2>
                <p class="text-muted"><?php echo $s['label']; ?></p>
            </div>
            <?php endforeach; ?>
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
                    <a href="/events">View JABEIC 2024 <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';