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

<!-- ===== Banner 6 Coastal Sites (Zoom in/out Animation) ===== -->
<style>
    .carousel-item img {
        animation: zoomInOut 12s infinite alternate ease-in-out;
    }
    
    @keyframes zoomInOut {
        0% { transform: scale(1); }
        100% { transform: scale(1.2); }
    }
    
    /* Staircase milestone styles */
    .staircase-container {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
    }
    
    .staircase-row {
        display: flex;
        margin-bottom: 30px;
        position: relative;
    }
    
    .staircase-row:nth-child(odd) {
        justify-content: flex-start;
    }
    
    .staircase-row:nth-child(even) {
        justify-content: flex-end;
    }
    
    .staircase-card {
        width: 45%;
        background: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(11,42,79,0.1);
        position: relative;
        border-left: 6px solid #0b2a4f;
        transition: transform 0.3s;
    }
    
    .staircase-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(11,42,79,0.2);
    }
    
    .staircase-card::before {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: #0b2a4f;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .staircase-row:nth-child(odd) .staircase-card::before {
        right: -40px;
    }
    
    .staircase-row:nth-child(even) .staircase-card::before {
        left: -40px;
    }
    
    .staircase-year {
        font-size: 3rem;
        font-weight: 800;
        color: #0b2a4f;
        line-height: 1;
        margin-bottom: 10px;
    }
    
    .staircase-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1e2b3c;
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px dashed #dee2e6;
    }
    
    .staircase-desc {
        color: #6c757d;
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .staircase-line {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: linear-gradient(to bottom, #0b2a4f, #ffc857);
        transform: translateX(-50%);
        z-index: -1;
    }
    
    @media (max-width: 768px) {
        .staircase-card {
            width: 100%;
        }
        
        .staircase-row:nth-child(odd) .staircase-card::before,
        .staircase-row:nth-child(even) .staircase-card::before {
            display: none;
        }
        
        .staircase-line {
            display: none;
        }
    }
</style>

<div class="banner">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $slides = [
                ['img' => '/assets/images/fort jesus mbs.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Fort Jesus', 'title2' => 'Mombasa County'],
                ['img' => '/assets/images/kilifi creek.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Kilifi Creek', 'title2' => 'Kilifi County'],
                ['img' => '/assets/images/red el taita.jpeg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Red Elephants', 'title2' => 'Taita Taveta County'],
                ['img' => '/assets/images/diani beach.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Diani Beach', 'title2' => 'Kwale County'],
                ['img' => '/assets/images/tana river delta.jpeg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Tana River Delta', 'title2' => 'Tana River County'],
                ['img' => '/assets/images/Lamu_Island.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani — Economic Bloc', 'title1' => 'Lamu Island', 'title2' => 'Lamu County'],
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

<!-- ===== Core Mandate Cards (Images instead of GIFs) ===== -->
<div class="banner-card" data-aos="fade-up">
    <div class="container">
        <?php
        $mandateCards = [
            ['img' => 'coord.jpg',           'title' => 'Coordination',   'text' => 'Socio-political & regional '],
            ['img' => 'policy.jpg',         'title' => 'Policy Harmonization',   'text' => 'Jumuiya 2030..'],
            ['img' => 'promotion.jpg',          'title' => 'Promotion',      'text' => 'Sea-Land of Opportunities... '],
            ['img' => 'investments.jpg', 'title' => 'Investments',    'text' => 'Unlocking value chains...'],
        ];
        ?>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-3">
            <?php foreach ($mandateCards as $card): ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="/assets/images/multiple-use/banner-card/<?php echo $card['img']; ?>" class="card-img-top img-fluid" alt="">
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

<!-- ===== Mission, Vision, Aspiration & Core Mandate Section ===== -->
<section class="container my-5" data-aos="fade-up">
    <div class="row g-4">
        <!-- Mission -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="mb-3">
                    <i class="bi bi-bullseye" style="font-size: 3rem; color: #0b2a4f;"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Our Mission</h3>
                <p class="text-muted">Catalyze economic growth of Kenya's coast regional counties.</p>
            </div>
        </div>
        
        <!-- Vision -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="mb-3">
                    <i class="bi bi-eye" style="font-size: 3rem; color: #0b2a4f;"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Our Vision</h3>
                <p class="text-muted">A regional economy that creates wealth and shared prosperity for its communities.</p>
            </div>
        </div>
        
        <!-- Aspiration -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="mb-3">
                    <i class="bi bi-stars" style="font-size: 3rem; color: #0b2a4f;"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">Our Aspirations</h3>
                <p class="text-muted">JKP aspires to be a social Innovation partnership network focused on enabling the Workforce and the MSMEs.</p>
            </div>
        </div>
        
        <!-- Core Mandate -->
        <div class="col-md-6 col-lg-3">
            <div class="card h-100 border-0 shadow-sm p-4 text-center">
                <div class="mb-3">
                    <i class="bi bi-briefcase" style="font-size: 3rem; color: #0b2a4f;"></i>
                </div>
                <h3 class="h4 fw-bold mb-3">JKP Core Mandate</h3>
                <p class="text-muted">The Secretariat's role is to have a broad understanding of the region and create the enabling environment that will ensure a platform for the socio-economic development of the region, thereby changing the story of the region.</p>
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


<!-- ===== Milestone Section - Staircase Layout ===== -->
<section class="container my-5" data-aos="fade-up">
    <div class="section-title text-center mb-5">
        <div class="semi-title">
            <div class="animated-circles justify-content-center">
                <div class="small-circle-start"></div>
                <span class="title">Our Journey</span>
                <div class="small-circle-end"></div>
            </div>
        </div>
        <h2 class="cssanimation lePopUp sequence">Key Milestones in Staircase</h2>
    </div>
    
    <div class="staircase-container">
        <div class="staircase-line"></div>
        
        <!-- 2015 Foundation of Jumuiya -->
        <div class="staircase-row">
            <div class="staircase-card">
                <div class="staircase-year">2015</div>
                <div class="staircase-title">Foundation of Jumuiya</div>
                <div class="staircase-desc">Six coastal counties united to form the economic bloc, establishing our vision for regional prosperity and sustainable development.</div>
            </div>
        </div>
        
        <!-- 2015 Blue Economy Framework -->
        <div class="staircase-row">
            <div class="staircase-card">
                <div class="staircase-year">2015</div>
                <div class="staircase-title">Blue Economy Framework Launched</div>
                <div class="staircase-desc">Introduced comprehensive strategy for sustainable marine resource development across all member counties, unlocking the potential of our ocean resources.</div>
            </div>
        </div>
        
        <!-- 2020 50,000 Jobs Created -->
        <div class="staircase-row">
            <div class="staircase-card">
                <div class="staircase-year">2020</div>
                <div class="staircase-title">50,000 Jobs Created</div>
                <div class="staircase-desc">Milestone achievement in youth and women employment through our economic empowerment programs, skills development initiatives, and investment attraction.</div>
            </div>
        </div>
        
        <!-- 2025 10th Anniversary -->
        <div class="staircase-row">
            <div class="staircase-card">
                <div class="staircase-year">2025</div>
                <div class="staircase-title">10th Anniversary</div>
                <div class="staircase-desc">Celebrating 10 years of transformative impact, with over 200 completed projects, 100,000+ beneficiaries, and counting.</div>
            </div>
        </div>
    </div>
</section>

<!-- ===== JKP Projects & Initiatives (4 Cards) ===== -->
<section class="government-service">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">JKP</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">JKP Projects & Initiatives</h2>
            </div>
        </div>
        
        <?php
        <!-- ===== JKP Projects & Initiatives (4 Cards) ===== -->
<section class="government-service">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">JKP</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">JKP Projects & Initiatives</h2>
            </div>
        </div>
        
        <?php
        // Updated projects array with only 4 specific projects
        $projects = [
            [
                'img' => '/assets/images/she stands.png', 
                'title' => 'She Stands Project', 
                'desc' => 'She Stands Kenya is a faith based collaborative initiative between Grace Center Malindi and Jumuiya Economic Development Secretariat to equip and inspire the progressive kenya christian woman with biblical principles for everyday living and leading change for self, family and community.'
            ],
            [
                'img' => '/assets/images/goo-blu.png', 
                'title' => 'The Go Blue Project', 
                'desc' => 'The Go Blue Project is a four year project funded by the European union (EU) to support Kenya\'s Coastal economic development agenda and blue economy strategy.'
            ],
            [
                'img' => '/assets/images/inno-lab.png', 
                'title' => 'Jumuiya Innovation Lab', 
                'desc' => 'Established of six (6) Jumuiya innovation labs is an anchor flagship project to changing the story of the region under Jumuiya 2030 framework.'
            ],
            [
                'img' => '/assets/images/jum 2030.png', 
                'title' => 'Jumuiya 2030', 
                'desc' => 'Is the regional economic development strategy for the period 2020/30. Its development and architecture are drawn from...'
            ],
        ];
        ?>
        
        <style>
            .project-card {
                border: none !important;
                background: transparent !important;
                margin-bottom: 30px;
            }
            .project-card .card-img-top {
                width: 100%;
                height: auto;
                object-fit: contain;
                border-radius: 0;
            }
            .project-card .card-body {
                padding: 1rem 0;
            }
            .project-card .card-title {
                color: #0b2a4f;
                font-weight: 700;
                margin-bottom: 0.5rem;
            }
            .project-card .card-text {
                color: #4a5568;
                line-height: 1.6;
            }
            .project-card .card-footer {
                background: transparent !important;
                padding: 0;
            }
        </style>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col">
                    <div class="card project-card h-100">
                        <img src="<?php echo htmlspecialchars($project['img']); ?>" class="card-img-top img-fluid" alt="<?php echo $project['title']; ?>">
                        <div class="card-body">
                            <a href="/services" style="text-decoration: none;">
                                <h4 class="card-title"><?php echo $project['title']; ?></h4>
                            </a>
                            <p class="card-text"><?php echo $project['desc']; ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="/services" class="card-btn">More Details <i class="bi bi-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Jumuiya Hub Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up">
    <div class="images-and-overlay">
        <img class="img-fluid" src="assets/images/jum house.webp" alt="Jumuiya Hub">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="city-content">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white text-center">
                    <span class="cssanimation lePopUp sequence">Jumuiya Hub</span><br>
                </h2>
            </div>
            <div class="city-service-list">
                <div class="row city-footer-content">
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-right">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Agriculture & Agribusiness</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><span class="hub-description">Promoting sustainable farming, value addition, and market access for coastal farmers.</span></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-down">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Blue Economy</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><span class="hub-description">Sustainable use of ocean resources for economic growth, jobs, and healthy marine ecosystems.</span></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-left">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Tourism</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><span class="hub-description">Showcasing the beautiful beaches, culture, and heritage of Kenya's coast.</span></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up">
                        <ul>
                            <li class="hove"><a href="/about" target="_blank" rel="noopener noreferrer"><span>Education & Academia</span><i class="bi bi-chevron-right float-end me-2"></i></a>
                                <div class="divide-row"></div>
                            </li>
                            <li><span class="hub-description">Investing in quality education, research, and skills development for youth.</span></li>
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
                'img'   => '/assets/images/agri summit.jpeg',
                'date'  => '24',
                'month' => 'February',
                'year'  => '2026',
                'title' => 'Jumuiya Ya Pwani Agriculture Revitalization Summit',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '/assets/images/fauna.jpeg',
                'date'  => '26',
                'month' => 'February',
                'year'  => '2026',
                'title' => 'Ocean Conservation and Sustainable Coastal Development Workshop',
                'author' => 'Editorial Staff',
            ],
            [
                'img'   => '/assets/images/strength bi.png',
                'date'  => '19',
                'month' => 'April',
                'year'  => '2024',
                'title' => 'Strengthening Bilateral Relations — Australian Deputy High Commissioner Visits JKP Offices',
                'author' => 'Editorial Staff',
            ],
        ];
        ?>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <?php foreach ($news as $item): ?>
                <div class="col">
                    <div class="card h-100 border-0 rounded" data-aos="fade-right">
                        <img src="<?php echo htmlspecialchars($item['img']); ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($item['title']); ?>">
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
                                <img src="assets/images/jum house.webp" class="img-fluid rounded-start" alt="">
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
                                <img src="assets/images/jum house.webp" class="img-fluid rounded-start" alt="">
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
?>