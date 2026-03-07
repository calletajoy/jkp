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
                    <img class="img-fluid img-one" src="/assets/images/01_home/about-company/image-01.png" alt="Jumuiya ya Kaunti za Pwani">
                    <img class="img-fluid img-tow left-slider" src="/assets/images/01_home/about-company/image-02.png" alt="Coastal Counties Kenya">
                </div>
            </div>
            <div class="col-12 col-lg-7" data-aos="fade-left">
                <div class="company-details">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">About the Economic Bloc</span>
                        </div>
                    </div>
                    <h2>
                        <span class="cssanimation lePopUp sequence">Led by an Exclusive &amp;</span><br>
                        <span class="cssanimation lePopUp sequence">Competent Team</span>
                    </h2>
                    <p>The JKP initiatives are overseen and orchestrated by a Secretariat, which consists of technical committees and specialists from the six-county governments, three universities, and the private sector. The Secretariat is based at <strong>Jumuiya House</strong>, situated in Bustani Close on Links Road in Nyali, Mombasa.</p>
                    <p>The extensive organizational framework of Jumuiya Ya Kaunti za Pwani includes a Board of Governors representing each member County — Mombasa, Kwale, Kilifi, Tana River, Lamu, and Taita Taveta.</p>

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

                    <div class="company-videos d-flex align-items-center cityWall-btn-two mt-4">
                        <a href="/contact">Get In Touch <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Stats ===== -->
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
                A Board of Governors representing each of the six member counties of the Jumuiya Economic Bloc.
            </p>
        </div>

        <?php
        $governors = [
            [
                'img'   => 'david.png',
                'name'  => 'H.E Gideon Mung\'aro, OGW',
                'role'  => 'Governor, Kilifi County &amp; Chairman JKP',
                'desc'  => 'H.E. Gideon Mung\'aro is the Chairman of the Jumuiya ya Kaunti za Pwani Economic Bloc and the Governor of Kilifi County since August 2022.',
            ],
            [
                'img'   => 'brawn.png',
                'name'  => 'H.E Abdulswamad S. Nassir',
                'role'  => 'Governor, Mombasa County',
                'desc'  => 'H.E. Abdullswamad Sheriff Nassir is the Governor of Mombasa County, representing Kenya\'s primary coastal and port city.',
            ],
            [
                'img'   => 'marla.png',
                'name'  => 'H.E Fatuma M. Achani',
                'role'  => 'Governor, Kwale County',
                'desc'  => 'H.E. Fatuma Achani is the first female county governor since the 2010 constitution reforms, serving Kwale County since the August 2022 general election.',
            ],
            [
                'img'   => 'mike.png',
                'name'  => 'H.E Dr. Dhadho Godhana',
                'role'  => 'Governor, Tana River County',
                'desc'  => 'H.E. Godhana Dhadho Gaddae is the Governor of Tana River County and Chairman of the Security and Foreign Affairs Council of Governors.',
            ],
            [
                'img'   => 'david.png',
                'name'  => 'H.E Issa Timamy',
                'role'  => 'Governor, Lamu County',
                'desc'  => 'H.E. Issa Abdallah Issa Timamy is the Governor of Lamu County and Chairman of the Blue Economy Council of Governors.',
            ],
            [
                'img'   => 'brawn.png',
                'name'  => 'H.E Andrew Mwadime',
                'role'  => 'Governor, Taita Taveta County',
                'desc'  => 'H.E. Andrew Mwadime is the Governor of Taita Taveta County and Chairman of the Water, Forestry and Natural Resource Management Council of Governors.',
            ],
        ];
        ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($governors as $gov): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0">
                    <img src="/assets/images/multiple-use/investigator/<?php echo $gov['img']; ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars(strip_tags($gov['name'])); ?>">
                    <div class="card-body">
                        <ul class="social-links hideLink">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                        <button class="share-btn border-0 share-button"><i class="fa-solid fa-share-nodes"></i></button>
                        <div class="info mt-1 px-2 py-3">
                            <h5 class="card-title tow text-white ps-3 m-0"><?php echo $gov['name']; ?></h5>
                            <p class="card-text text-white ps-3 mb-2"><?php echo $gov['role']; ?></p>
                            <p class="card-text text-white-50 ps-3" style="font-size:.8rem; line-height:1.5;"><?php echo $gov['desc']; ?></p>
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
            <h2 class="mt-2 cssanimation lePopUp sequence">Championed by a Driven CEO</h2>
        </div>

        <div class="row align-items-center g-5">
            <div class="col-12 col-lg-4 text-center" data-aos="fade-right">
                <img class="img-fluid rounded-3 shadow" src="/assets/images/multiple-use/investigator/david.png" alt="Dr. Emmanuel K. Nzai" style="max-width:280px;">
                <div class="mt-3">
                    <h4 class="fw-bold">Dr. Emmanuel K. Nzai</h4>
                    <p class="text-muted">CEO — JKP Economic Bloc</p>
                    <div class="d-flex justify-content-center gap-2 mt-2">
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8" data-aos="fade-left">
                <div class="company-details">
                    <p class="mb-3">To coordinate the mandates of Jumuiya there is a Structured Sector Consultative Platform run by a Secretariat led by <strong>Dr. Emmanuel Kombe Nzai</strong> as the Chief Executive Officer. Within the Secretariat are the Steering Committee, Technical and administrative teams and the Sector working groups.</p>
                    <p class="mb-3">The Secretariat mandate is coordination, policy harmonization, promotion of regional assets and driving investments into the region. The secretariat manages a repository of data that defines and describes the Coastal region, giving us a bird's-eye view of its opportunities, needs, and potential.</p>
                    <p>Our role is to understand the region and create an environment for its socioeconomic development — changing its story.</p>

                    <div class="row row-cols-1 row-cols-md-2 g-3 mt-3">
                        <?php
                        $mandates = [
                            ['icon' => 'bi-diagram-3',   'label' => 'Coordination',            'text' => 'Socio-political &amp; regional policy harmonization'],
                            ['icon' => 'bi-megaphone',   'label' => 'Promotion',               'text' => 'Marketing regional assets and investment opportunities'],
                            ['icon' => 'bi-graph-up',    'label' => 'Driving Investments',     'text' => 'Facilitating capital flow into high-growth coastal sectors'],
                            ['icon' => 'bi-file-earmark-text', 'label' => 'Data Repository',   'text' => 'Managing a bird\'s-eye view of the Coast region\'s potential'],
                        ];
                        foreach ($mandates as $m):
                        ?>
                        <div class="col">
                            <div class="d-flex gap-3 align-items-start p-3 bg-white rounded-3 shadow-sm h-100">
                                <div style="flex-shrink:0; width:40px; height:40px; background:rgba(13,110,253,.1); border-radius:8px; display:flex; align-items:center; justify-content:center;">
                                    <i class="bi <?php echo $m['icon']; ?>" style="font-size:1.1rem; color:#0d6efd;"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1"><?php echo $m['label']; ?></h6>
                                    <p class="text-muted mb-0" style="font-size:.85rem;"><?php echo $m['text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Secretariat Team ===== -->
<section class="our-investigators py-5">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">JKP Secretariat Team</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-2" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">We Always Work With a Great Team</h2>
            </div>
            <p class="text-center text-muted mb-5" data-aos="fade-up">
                Dedicated professionals driving the Jumuiya 2030 Economic Blueprint across the coastal region.
            </p>
        </div>

        <?php
        $team = [
            [
                'img'  => 'david.png',
                'name' => 'Dr. Emmanuel K. Nzai',
                'role' => 'CEO, JKP Economic Bloc',
                'bio'  => 'A Public Policy professional with a passion for social innovation and economic development. Founding CEO/Secretary of Jumuiya ya Kaunti za Pwani.',
            ],
            [
                'img'  => 'brawn.png',
                'name' => 'Dennis L. Muganga',
                'role' => 'Director &amp; Economic Advisor, JKP',
                'bio'  => 'Sector Lead Director providing strategic economic advisory to the JKP Secretariat and member counties.',
            ],
            [
                'img'  => 'mike.png',
                'name' => 'Allan Mzungu',
                'role' => 'Attorney, JKP Secretariat',
                'bio'  => 'Legal counsel to the JKP Secretariat, supporting governance, partnerships, and compliance across the Economic Bloc.',
            ],
            [
                'img'  => 'marla.png',
                'name' => 'Gladys Mnjama',
                'role' => 'Sector Lead — Investments &amp; Partnerships',
                'bio'  => 'Responsible for leading strategic investments and partnerships within the Jumuiya economic bloc.',
            ],
            [
                'img'  => 'david.png',
                'name' => 'Ali Mwanzei',
                'role' => 'Go Blue Advisor',
                'bio'  => 'With 18 years of experience in environment and natural resources management (E&amp;NRM) at NEMA, with expertise across the green, blue, and brown economy.',
            ],
        ];
        ?>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($team as $member): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0">
                    <img src="/assets/images/multiple-use/investigator/<?php echo $member['img']; ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars(strip_tags($member['name'])); ?>">
                    <div class="card-body">
                        <ul class="social-links hideLink">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        </ul>
                        <button class="share-btn border-0 share-button"><i class="fa-solid fa-share-nodes"></i></button>
                        <div class="info mt-1 px-2 py-3">
                            <h5 class="card-title tow text-white ps-3 m-0"><?php echo $member['name']; ?></h5>
                            <p class="card-text text-white ps-3 mb-2"><?php echo $member['role']; ?></p>
                            <p class="card-text text-white-50 ps-3" style="font-size:.8rem; line-height:1.5;"><?php echo $member['bio']; ?></p>
                        </div>
                    </div>
                </div>
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