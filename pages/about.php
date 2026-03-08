<?php
/**
 * pages/about.php — Updated with Jumuiya ya Kaunti za Pwani content.
 */

$pageTitle    = 'About Us';
$currentPage  = 'about';
$heroTitle    = 'About Us';
$heroSubtitle = 'About Us';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<!-- ===== Intro ===== -->
<section class="about-company py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-5" data-aos="fade-right">
                <div class="images">
                    <img class="img-fluid img-one" src="/assets/images/01_home/about-company/image-01.png" alt="Jumuiya ya Kaunti za Pwani
                </div>
            </div>
            <div class="col-12 col-lg-7 data-aos="fade-left">
                <div class="company-details">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">About Us</span>
                        </div>
                    </div>
                    <h2>
                        <span class="cssanimation lePopUp sequence">The Jumuiya Economic Bloc is led by an</span><br>
                        <span class="cssanimation lePopUp sequence">Exclusive and Competent Team</span>
                    </h2>
                    <p>The JKP initiatives are overseen and orchestrated by a Secretariat, which consists of technical committees and specialists from the six-county governments, three universities, and the private sector. The Secretariat is based at <strong>Jumuiya House</strong>, situated in Bustani Close on Links Road in Nyali, Mombasa.</p>
                    <p>The extensive organizational framework of Jumuiya Ya Kaunti za Pwani includes a Board of Governors representing each member County (Mombasa, Kwale, Kilifi, Tana River, Lamu, and Taita Taveta).</p>

                    <div class="company-list row row-cols-1 row-cols-md-2 mt-3">
                        <div class="col">
                            <ul class="gap-3">
                                <li><span class="square"></span><span>Mombasa County</span></li>
                                <li><span class="square"></span><span>Kwale County</span></li>
                                <li><span class="square"></span><span>Kilifi County</span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="gap-3">
                                <li><span class="square"></span><span>Tana River County</span></li>
                                <li><span class="square"></span><span>Lamu County</span></li>
                                <li><span class="square"></span><span>Taita Taveta County</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="company-videos d-flex align-items-center cityWall-btn-two mt-4 gap-3">
                        <a href="/contact">Get In Touch <i class="bi bi-arrow-right"></i></a>
                        <a href="/assets/brochures/jumuiya-economic-bloc-brochure.pdf" download class="btn btn-outline-primary" style="padding: 12px 30px; border-radius: 30px; font-weight: 500;">
                            <i class="bi bi-download me-2"></i>Download Brochure
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ===== Board of Governors ===== -->
<section class="our-investigators py-5">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">The Apex</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-2" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">Board of Governors</h2>
            </div>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                A Board of Governors representing each member County — Mombasa, Kwale, Kilifi, Tana River, Lamu, and Taita Taveta with the governors of the 6 counties.
            </p>
        </div>

        <?php
        $governors = [
            [
                'img'   => '/assets/images/gov kilifi.png',
                'name'  => 'H.E Gideon Mung\'aro, OGW',
                'county' => 'Kilifi County',
                'role'  => 'Governor, Kilifi County & Chairman JKP',
                'desc'  => 'H.E Gideon Mung\'aro, OGW is the chairman of the Jumuiya ya Kaunti za Pwani economic bloc and the governor of Kilifi County since August 2022.',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
            [
                'img'   => '/assets/images/gov mombasa.png',
                'name'  => 'H.E. Abdullswamad Sheriff Nassir',
                'county' => 'Mombasa County',
                'role'  => 'Governor, Mombasa County',
                'desc'  => 'H.E. Abdullswamad Sheriff Nassir is the governor of Mombasa County.',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
            [
                'img'   => '/assets/images/gov kwale.png',
                'name'  => 'H.E. Fatuma Achani',
                'county' => 'Kwale County',
                'role'  => 'Governor, Kwale County',
                'desc'  => 'H.E. Fatuma Achani is a Kenyan advocate and politician currently serving as the governor of Kwale County following the August 9, 2022, general election. She amazed the hearts of many Kenyans after she was announced as the first female county boss since the 2010 constitution reforms.',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
            [
                'img'   => '/assets/images/gov tana river.png',
                'name'  => 'H.E Dr. Dhadho Godhana',
                'county' => 'Tana River County',
                'role'  => 'Governor, Tana River County',
                'desc'  => 'H.E Dr. Dhadho Godhana is the governor of Tana River County and the chairman security and foreign affairs council of governors (C.O.G).',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
            [
                'img'   => '/assets/images/gov lamu.png',
                'name'  => 'H.E. Issa Abdallah Issa Timamy',
                'county' => 'Lamu County',
                'role'  => 'Governor, Lamu County',
                'desc'  => 'H.E. Issa Abdallah Issa Timamy is the governor of Lamu County and Chairman of Blue Economy Council of Governors (C.O.G).',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
            [
                'img'   => '/assets/images/gov taita taveta.png',
                'name'  => 'H.E. Andrew Mwadime',
                'county' => 'Taita Taveta County',
                'role'  => 'Governor, Taita Taveta County',
                'desc'  => 'H.E. Andrew Mwadime is the Governor of Taita Taveta County and the Chairman of Water, Forestry and Natural Resource Management Council of Governors (C.O.G).',
                'social' => ['fb' => '#', 'ig' => '#', 'twitter' => '#']
            ],
        ];
        ?>

        <style>
        /* Hover effect for governor cards */
        .governor-card {
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        .governor-card .card-img-top {
            transition: all 0.3s ease;
        }
        .governor-card .hover-description {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.85);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 2;
            pointer-events: none;
            font-size: 0.9rem;
            line-height: 1.6;
            border-radius: 8px;
        }
        .governor-card:hover .hover-description {
            opacity: 1;
        }
        .governor-card .card-body {
            position: relative;
            z-index: 3;
            background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
            margin-top: -80px;
            border-radius: 0 0 8px 8px;
        }
        .governor-card .social-links {
            position: absolute;
            top: 15px;
            right: 15px;
            z-index: 4;
            display: flex;
            gap: 8px;
        }
        .governor-card .social-links li a {
            background: white;
            color: #333;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        .governor-card .social-links li a:hover {
            background: #0d6efd;
            color: white;
            transform: translateY(-3px);
        }
        </style>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($governors as $gov): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0 governor-card">
                    <img src="/assets/images/multiple-use/investigator/<?php echo $gov['img']; ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars(strip_tags($gov['name'])); ?>">
                    
                    <!-- Hover Description -->
                    <div class="hover-description">
                        <?php echo $gov['desc']; ?>
                    </div>
                    
                    <div class="card-body">
                        <!-- Social Links -->
                        <ul class="social-links hideLink">
                            <li><a href="<?php echo $gov['social']['fb']; ?>"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo $gov['social']['ig']; ?>"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="<?php echo $gov['social']['twitter']; ?>"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                        <button class="share-btn border-0 share-button"><i class="fa-solid fa-share-nodes"></i></button>
                        
                        <!-- Name and County at bottom -->
                        <div class="info mt-1 px-2 py-3">
                            <h5 class="card-title tow text-white ps-3 m-0"><?php echo $gov['name']; ?></h5>
                            <p class="card-text text-white ps-3 mb-0"><?php echo $gov['role']; ?></p>
                            <p class="card-text text-white-50 ps-3 mb-0" style="font-size:0.85rem;"><?php echo $gov['county']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== CEO / Secretariat ===== -->
<section class="about-company py-5 bg-light">
    <div class="container">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <div class="semi-title">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">About the JKP Secretariat</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2 class="mt-2 cssanimation lePopUp sequence">The Secretariat initiatives are championed by a driven CEO</h2>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-4 text-center" data-aos="fade-right">
                <img class="img-fluid rounded-3 shadow" src="/assets/images/ceo jkp.png" alt="Dr. Emmanuel Kombe Nzai" style="max-width:280px;">
                <div class="mt-3">
                    <h4 class="fw-bold">Dr. Emmanuel Nzai</h4>
                    <p class="text-muted">CEO - JKP Secretariat</p>
                    <div class="d-flex justify-content-center gap-2 mt-2">
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8" data-aos="fade-left">
                <div class="company-details">
                    <p class="mb-3">To coordinate the mandates of Jumuiya there is a Structured Sector Consultative Platform run by a Secretariat led by <strong>Dr. Emmanuel Kombe Nzai</strong> as the Chief Executive Officer. Within the Secretariat are the Steering Committee, Technical and administrative teams and the Sector working groups.</p>
                    <p class="mb-3">The Secretariat mandate is coordination, policy harmonization, promotion of regional assets and driving investments into the region. The secretariat manages a repository of data that defines and describes the Coastal region, giving us a bird's-eye view of its opportunities, needs, and potential. Our role is to understand the region and create an environment for its socioeconomic development, changing its story.</p>

                   
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
                    <a href="/events">View JABEIC 2024 <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';