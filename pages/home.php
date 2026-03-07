<?php

/**
 * pages/home.php
 * Homepage — updated with Jumuiya ya Kaunti za Pwani content.
 */

$pageTitle   = 'Home';
$currentPage = 'home';
$bodyClass   = 'page-home';

ob_start();
?>

<!-- ===== Banner Carousel ===== -->
<div class="banner">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $slides = [
                ['img' => '/assets/images/diani beach.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Catalyzing Economic Growth', 'title2' => 'Along Kenya\'s Coastline'],
                ['img' => '/assets/images/fort jesus mbs.jpg',       'subtitle' => 'Sea-Land of Opportunities',                  'title1' => 'Unlocking Green &amp; Blue',    'title2' => 'Economy Investments'],
            ];
            foreach ($slides as $i => $slide):
            ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="images-optimization position-relative">
                        <img src="<?php echo htmlspecialchars($slide['img']); ?>" class="d-block img-fluid" alt="Banner slide <?php echo $i + 1; ?>">
                        <div class="cover-images-overlay">
                            <div class="container">
                                <div class="banner-content">
                                    <div class="sentence-underline">
                                        <div class="text-white banner-semi-title"><?php echo $slide['subtitle']; ?></div>
                                    </div>
                                    <h1 class="text-white my-3">
                                        <span class="cssanimation lePopUp sequence"><?php echo $slide['title1']; ?></span><br>
                                        <span class="cssanimation lePopUp sequence"><?php echo $slide['title2']; ?></span>
                                    </h1>
                                    <div class="buttons">
                                        <div class="cityWall-btn" role="search">
                                            <a href="/about">Discover More <i class="bi bi-arrow-right"></i></a>
                                            <a href="/contact">Contact Us <i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- ===== Core Mandate Cards ===== -->
<div class="banner-card" data-aos="fade-up">
    <div class="container">
        <?php
        $mandateCards = [
            ['gif' => 'church-animation.gif',           'title' => 'Coordination',   'text' => 'Socio-political & regional '],
            ['gif' => 'planning-animation.gif',         'title' => 'Policy Harmonization',   'text' => 'Jumuiya 2030..'],
            ['gif' => 'recycle-animation.gif',          'title' => 'Promotion',      'text' => 'Sea-Land of Opportunities... '],
            ['gif' => 'travel-insurance-animation.gif', 'title' => 'Investments',    'text' => 'Unlocking value chains...'],
        ];
        ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            <?php foreach ($mandateCards as $card): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/images/multiple-use/banner-card/<?php echo $card['gif']; ?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <a href="/services">
                                <h4 class="card-title"><?php echo $card['title']; ?></h4>
                            </a>
                            <p class="card-text"><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <form action="/search" method="GET" class="mt-5 m-auto">
            <div class="d-flex banner-input-field input-field">
                <input type="text" name="q" placeholder="Explore investment opportunities, projects, and services across Kenya's coast region">
                <button type="submit">Explore Now</button>
            </div>
        </form>
    </div>
</div>

<!-- ===== About JKP ===== -->
<section class="about-company">
    <div class="container">
        <div class="row align-items-center py-4">
            <div class="col-12 col-lg-5" data-aos="fade-up">
                <div class="images">
                    <img class="img-fluid img-one" src="/assets/images/placeholders/oluwatobi-akindunjoye-bISd7DpFJWw-unsplash.jpg" alt="Jumuiya ya Kaunti za Pwani">
                    <img class="img-fluid img-tow left-slider" src="/assets/images/placeholders/image.png" alt="Coastal Counties">
                </div>
            </div>
            <div class="col-12 col-lg-7" data-aos="fade-up">
                <div class="company-details">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">About Jumuiya</span>
                        </div>
                    </div>
                    <h2>
                        <span class="cssanimation lePopUp sequence">Jumuiya ya Kaunti za Pwani</span><br>
                        <span class="cssanimation lePopUp sequence">— Kenya's Coastal Economic Bloc</span>
                    </h2>
                    <p>The Jumuiya ya Kaunti za Pwani (JKP) serves as the regional economic development body for Kenya's coastal counties. Our primary goal is to foster a unified economic environment by bringing together regional leaders, county and national governments, development partners, the private sector, and academic institutions to drive economic growth.</p>

                    <div class="company-list row row-cols-1 row-cols-md-2">
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

                    <div class="company-videos d-flex align-items-center cityWall-btn-two">
                        <a href="/about">Learn More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Achievements / Fun Facts ===== -->
<section class="government-service" style="background: #f8f9fa;">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Go Blue Project — Our Impact</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">Jumuiya Economic Bloc's Achievements</h2>
            </div>
        </div>

        <?php
        $stats = [
            ['gif' => 'skills.gif',         'value' => '16',    'unit' => '',  'label' => 'MSME Tourism Grants',          'desc' => 'Supporting micro and small enterprises in the coastal tourism sector.'],
            ['gif' => 'planning.gif',        'value' => '26+',   'unit' => '',  'label' => 'Boats Delivered',              'desc' => 'Fishing vessels delivered to coastal fishing communities and cooperatives.'],
            ['gif' => 'profit.gif',          'value' => '2,000+', 'unit' => '',  'label' => 'Jobs Created (Youth &amp; Women)', 'desc' => 'Employment opportunities created through the Go Blue Project initiatives.'],
            ['gif' => 'spinach.gif',         'value' => '1,900+', 'unit' => '',  'label' => 'Skills Trainings Delivered',   'desc' => 'Vocational and technical training programs completed across the region.'],
        ];
        ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($stats as $stat): ?>
                <div class="col" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-0 text-center p-3">
                        <img src="/assets/images/01_home/goverment-service/<?php echo $stat['gif']; ?>" class="card-img-top img-fluid mx-auto" style="max-width:80px;" alt="">
                        <div class="card-body">
                            <h2 class="fw-bold" style="font-size:2.4rem; color: var(--bs-primary, #0d6efd);"><?php echo $stat['value']; ?></h2>
                            <h5 class="card-title fw-bold mb-2"><?php echo $stat['label']; ?></h5>
                            <p class="card-text text-muted small"><?php echo $stat['desc']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== JKP Projects & Initiatives ===== -->
<section class="government-service">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Jumuiya 2030 Blueprint</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">JKP Projects &amp; Initiatives</h2>
            </div>
        </div>
        <?php
        $projects = [
            ['gif' => 'skills.gif',         'title' => 'Workforce &amp; MSME Incubator',        'desc' => 'Empowering youth and women with business skills and entrepreneurship support across the Coast region.'],
            ['gif' => 'police.gif',          'title' => 'Go Blue Project',                       'desc' => 'Advancing blue economy growth by addressing gender exclusion, poverty, and marginalisation through targeted interventions.'],
            ['gif' => 'elections.gif',       'title' => 'County Aggregation &amp; Industrial Parks', 'desc' => 'Establishing CAIPs to foster industrialization, value addition, and job creation across the six counties.'],
            ['gif' => 'money-transfer.gif',  'title' => 'Regional Flagship Projects',            'desc' => 'High-impact projects identified and implemented under the Jumuiya 2030 Economic Blueprint for the region.'],
            ['gif' => 'planning.gif',        'title' => 'Go Kenya Coast Tourism',                'desc' => 'Marketing JKP counties as a prime destination, highlighting cultural heritage and world-class coastal attractions.'],
            ['gif' => 'profit.gif',          'title' => 'Agribusiness Value Chains',             'desc' => 'Facilitating partnerships between farming communities, government, and the private sector to unlock agricultural investment.'],
            ['gif' => 'parking.gif',         'title' => 'Public-Private Partnerships',           'desc' => 'Supporting collaborative investments and aligning CIDPs with the Jumuiya 2030 blueprint and Vision 2030 MTPs.'],
            ['gif' => 'spinach.gif',         'title' => 'Blue Economy Vocational Training',      'desc' => 'Vocational programs in Hotel &amp; Hospitality, Maritime, and fisheries — supported by the EU, GIZ, and CAP YEI.'],
        ];
        ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col" data-aos="fade-up">
                    <div class="card h-100 border-0 rounded-0">
                        <img src="/assets/images/01_home/goverment-service/<?php echo $project['gif']; ?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <a href="/services">
                                <h4 class="card-title"><?php echo $project['title']; ?></h4>
                            </a>
                            <p class="card-text"><?php echo $project['desc']; ?></p>
                        </div>
                        <div class="card-footer bg-white border-0 p-0">
                            <a href="/services" class="card-btn">More Details <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Mission & Vision Strip ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up">
    <div class="images-and-overlay">
        <img class="img-fluid" src="/assets/images/01_home/best-city/image-footer.png" alt="JKP Mission">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="city-content">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white text-center">
                    <span class="cssanimation lePopUp sequence">JKP Guiding Principles &amp; Core Mandate</span><br>
                    <span class="cssanimation lePopUp sequence">Jumuiya 2030 — Regional Economic Blueprint</span>
                </h2>
            </div>
            <div class="city-service-list">
                <div class="row city-footer-content">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-right">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Mission: Catalyze economic growth of Kenya's coast regional counties</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Social Innovation Network for Workforce &amp; MSMEs</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Youth &amp; Women Empowerment in the Coast Region</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>High Middle-Income Population Transformation Goal</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>County Integrated Development Plans (CIDPs) Alignment</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Vision 2030 Medium Term Plans (MTP) Integration</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-down">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Socio-Political &amp; Regional Policy Harmonization</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Promoting Regional Tourism, Culture &amp; Heritage</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Facilitating Investor &amp; Development Partner Engagement</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Supporting Public-Private Partnerships for Investments</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>JABEIC Annual Conference — Flagship Investment Event</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Reducing Poverty &amp; Stimulating Socio-Economic Transformation</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-left">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Jumuiya 10 Pillars Program Implementation</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Regional Flagship Projects — High-Impact Execution</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Showcasing Investment Opportunities at JABEIC</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Knowledge Exchange for High-Growth Coastal Sectors</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Coordinating Six County Governments via the Secretariat</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><a href="/about" target="_blank" rel="noopener noreferrer"><span>Bilateral Relations &amp; International Development Partnerships</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Latest News ===== -->
<section class="newsroom m-0" data-aos="fade-up">
    <div class="container">
        <div class="section-title">
            <div class="Newsroom-header mb-4">
                <div class="semi-title" data-aos="fade-up">
                    <div class="animated-circles justify-content-center">
                        <div class="small-circle-start"></div>
                        <div class="title">Impact Stories &amp; Updates</div>
                        <div class="small-circle-end"></div>
                    </div>
                </div>
                <div class="title">
                    <h2 class="text-center cssanimation lePopUp sequence">Latest From Our Newsroom</h2>
                </div>
            </div>
        </div>
        <?php
        $news = [
            [
                'img'   => '01.png',
                'date'  => '29',
                'month' => 'May',
                'title' => 'Kisauni VTC Graduates 513 Students in Blue Economy Courses',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '02.png',
                'date'  => '29',
                'month' => 'April',
                'title' => 'JKP Governors Deliberations on the CRA\'s 4th Edition of the County Revenue Sharing Formula',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '03.png',
                'date'  => '19',
                'month' => 'April',
                'title' => 'Strengthening Bilateral Relations — Australian Deputy High Commissioner Visits JKP Offices',
                'author' => 'Editorial Staff',
            ],
        ];
        ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <?php foreach ($news as $item): ?>
                <div class="col">
                    <div class="card h-100 border-0 rounded" data-aos="fade-right">
                        <img src="/assets/images/multiple-use/newsroom/<?php echo $item['img']; ?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body p-3">
                            <div class="date-comment d-flex justify-content-between gap-3">
                                <div class="date">
                                    <div class="text-white fw-bold"><?php echo $item['date']; ?></div>
                                    <div class="text-white month"><?php echo $item['month']; ?></div>
                                </div>
                                <div class="align-items-center d-flex gap-1">
                                    <span><?php echo htmlspecialchars($item['author']); ?></span>
                                </div>
                            </div>
                            <a href="/blog">
                                <h3 class="card-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                            </a>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between mb-3">
                            <div class="divide-row-tow"></div>
                            <a href="/blog" class="more-link ms-2">Read More <i class="bi bi-arrow-up-right ps-2"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php

include __DIR__ . '/components/partners.php';

?>


<!-- ===== Contact Strip ===== -->
<section class="upcoming-city" data-aos="fade-up">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-12 col-lg-7" data-aos="fade-right">
                <div class="section-title">
                    <div class="semi-title">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title">Get In Touch</span>
                        </div>
                    </div>
                    <h2 class="title">
                        <span class="cssanimation lePopUp sequence">Contact the Jumuiya</span><br>
                        <span class="cssanimation lePopUp sequence">Economic Development Secretariat</span>
                    </h2>
                </div>
                <div class="upcoming-events-card mt-4">
                    <div class="card mb-3 border-end-0 border-start-0 border-top-0 bg-transparent rounded-0">
                        <div class="details-information">
                            <div class="upcoming-photo">
                                <img src="/assets/images/multiple-use/upcoming-city/1.png" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="upcoming-info">
                                <div class="info">
                                    <h4 class="card-title fw-bold">Head Office</h4>
                                    <ul>
                                        <li><i class="bi bi-geo-alt-fill"></i> Bustani Close, Links Road – Nyali, Mombasa, Kenya</li>
                                        <li><i class="bi bi-clock-fill"></i> Mon – Fri: 8:30am – 5:00pm</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 border-end-0 border-start-0 border-top-0 bg-transparent rounded-0">
                        <div class="details-information">
                            <div class="upcoming-photo">
                                <img src="/assets/images/multiple-use/upcoming-city/2.png" class="img-fluid rounded-start" alt="">
                            </div>
                            <div class="upcoming-info">
                                <div class="info">
                                    <h4 class="card-title fw-bold">Call &amp; Email Us</h4>
                                    <ul>
                                        <li><i class="bi bi-telephone-fill"></i> +254 777 101 115</li>
                                        <li><i class="bi bi-envelope-fill"></i> info@jumuiya.org &nbsp;|&nbsp; secretariat@jumuiya.org</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 ps-2" data-aos="fade-left">
                <div class="download-city bg-white p-4 p-xl-5">
                    <h2 class="cssanimation lePopUp sequence">Send Us a Message</h2>
                    <form action="/contact" method="POST" class="mt-3">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone (optional)">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="cityWall-btn">
                            <button type="submit">Send Message <i class="bi bi-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
