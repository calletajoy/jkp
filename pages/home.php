<?php

/**
 * pages/home.php
 * Homepage — Jumuiya ya Kaunti za Pwani
 * Fancy, professional, purpose-driven design
 */

$pageTitle   = 'Home';
$currentPage = 'home';
$bodyClass   = 'page-home';

ob_start();
?>

<!-- ===== Enhanced Styles for Fancy Look ===== -->
<style>
    /* Base fancy styles */
    :root {
        --turquoise: #00CED1;
        --soft-blue: #5C7EC0;
        --deep-blue: #3B5B9A;
        --navy: #273C67;
        --light-bg: #f8f9fa;
        --text-dark: #1e2b3c;
    }
    
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }
    
    /* Fancy section spacing */
    section {
        position: relative;
        padding: 80px 0;
        overflow: hidden;
    }
    
    /* Subtle background pattern */
    section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(circle at 20% 50%, rgba(0,206,209,0.03) 0%, transparent 50%);
        pointer-events: none;
    }
    
    /* Elegant typography */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Playfair Display', serif;
        letter-spacing: -0.02em;
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        font-weight: 300;
        color: var(--text-dark);
    }
    
    /* Fancy card styles */
    .fancy-card {
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        background: white;
        border: none;
        position: relative;
        overflow: hidden;
    }
    
    .fancy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        transform: scaleX(0);
        transition: transform 0.4s ease;
    }
    
    .fancy-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 40px -20px rgba(0,0,0,0.2);
    }
    
    .fancy-card:hover::before {
        transform: scaleX(1);
    }
    
    /* Fancy image overlays */
    .image-overlay {
        position: relative;
        overflow: hidden;
    }
    
    .image-overlay::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0,206,209,0.2) 0%, rgba(39,60,103,0.4) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .image-overlay:hover::after {
        opacity: 1;
    }
    
    .image-overlay img {
        transition: transform 0.6s ease;
    }
    
    .image-overlay:hover img {
        transform: scale(1.05);
    }
    
    /* Fancy button styles */
    .btn-fancy {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        z-index: 1;
    }
    
    .btn-fancy::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s ease;
        z-index: -1;
    }
    
    .btn-fancy:hover::before {
        left: 100%;
    }
    
    /* Fancy stat cards */
    .stat-card-fancy {
        position: relative;
        background: white;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 10px 30px -15px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    
    .stat-card-fancy::after {
        content: '';
        position: absolute;
        bottom: 0;
        right: 0;
        width: 80px;
        height: 80px;
        background: var(--turquoise);
        opacity: 0.1;
        border-radius: 50%;
        transform: translate(30px, 30px);
        transition: all 0.4s ease;
    }
    
    .stat-card-fancy:hover::after {
        transform: translate(20px, 20px) scale(1.2);
        opacity: 0.15;
    }
    
    .stat-card-fancy:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px -15px rgba(0,206,209,0.3);
    }
    
    .stat-icon-fancy {
        font-size: 2.5rem;
        color: var(--turquoise);
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }
    
    .stat-card-fancy:hover .stat-icon-fancy {
        transform: scale(1.1) rotate(5deg);
        color: var(--deep-blue);
    }
    
    /* Fancy milestone cards */
    .milestone-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        border-left: 6px solid var(--turquoise);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }
    
    .milestone-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, var(--turquoise), transparent);
        opacity: 0.05;
        border-radius: 50%;
        transition: all 0.6s ease;
    }
    
    .milestone-card:hover::before {
        transform: scale(1.5);
    }
    
    .milestone-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 45px -15px var(--turquoise);
    }
    
    .milestone-year {
        font-size: 3.5rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--navy), var(--deep-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: 0.5rem;
    }
    
    /* Fancy project cards */
    .project-card-fancy {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        transition: all 0.4s ease;
        height: 100%;
    }
    
    .project-card-fancy:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 45px -15px var(--turquoise);
    }
    
    .project-card-fancy .project-image {
        height: 220px;
        overflow: hidden;
        position: relative;
    }
    
    .project-card-fancy .project-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }
    
    .project-card-fancy:hover .project-image img {
        transform: scale(1.1);
    }
    
    .project-card-fancy .project-image::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(180deg, transparent 50%, rgba(39,60,103,0.8) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
    }
    
    .project-card-fancy:hover .project-image::after {
        opacity: 1;
    }
    
    .project-card-fancy .project-content {
        padding: 1.8rem;
    }
    
    .project-card-fancy .project-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 1rem;
        transition: color 0.3s ease;
    }
    
    .project-card-fancy:hover .project-title {
        color: var(--turquoise);
    }
    
    .project-card-fancy .project-desc {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }
    
    .project-card-fancy .read-more {
        color: var(--turquoise);
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.3s ease;
    }
    
    .project-card-fancy .read-more i {
        transition: transform 0.3s ease;
    }
    
    .project-card-fancy .read-more:hover {
        color: var(--navy);
    }
    
    .project-card-fancy .read-more:hover i {
        transform: translateX(5px);
    }
    
    /* Fancy section titles */
    .section-title-fancy {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-title-fancy .subtitle {
        color: var(--turquoise);
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 0.9rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
    }
    
    .section-title-fancy h2 {
        font-size: 2.8rem;
        font-weight: 700;
        color: var(--navy);
        position: relative;
        display: inline-block;
    }
    
    .section-title-fancy h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        border-radius: 3px;
    }
    
    /* Fancy hover effects for links */
    .fancy-link {
        position: relative;
        color: var(--navy);
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .fancy-link::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;
        background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
        transition: width 0.3s ease;
    }
    
    .fancy-link:hover {
        color: var(--turquoise);
    }
    
    .fancy-link:hover::after {
        width: 100%;
    }
    
    /* Fancy animation for numbers */
    @keyframes countUp {
        from {
            transform: translateY(20px);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
    
    .stat-value-fancy {
        animation: countUp 0.6s ease forwards;
    }
    
    /* Carousel zoom animation */
    .carousel-item img {
        animation: zoomInOut 12s infinite alternate ease-in-out;
    }
    
    @keyframes zoomInOut {
        0% { transform: scale(1); }
        100% { transform: scale(1.15); }
    }
    
    /* Staircase timeline */
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
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
        position: relative;
        border-left: 6px solid var(--turquoise);
        transition: all 0.3s ease;
    }
    
    .staircase-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 25px 45px -15px var(--turquoise);
    }
    
    .staircase-card::before {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: var(--turquoise);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        box-shadow: 0 0 0 4px rgba(0,206,209,0.2);
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
        background: linear-gradient(135deg, var(--navy), var(--deep-blue));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        line-height: 1;
        margin-bottom: 10px;
    }
    
    .staircase-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--navy);
        margin-bottom: 15px;
        padding-bottom: 10px;
        border-bottom: 2px dashed rgba(0,206,209,0.3);
    }
    
    .staircase-line {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        width: 4px;
        background: linear-gradient(to bottom, var(--turquoise), var(--soft-blue));
        transform: translateX(-50%);
        z-index: -1;
        border-radius: 4px;
    }
    
    /* Map container styles */
    .map-container {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        border-radius: 30px;
        padding: 2rem;
        box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
        transition: all 0.3s ease;
    }
    
    .map-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 60px -12px var(--turquoise);
    }
    
    .county-legend {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        margin-top: 1.5rem;
    }
    
    .legend-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: var(--text-dark);
    }
    
    .legend-color {
        width: 15px;
        height: 15px;
        border-radius: 4px;
    }
    
    /* SVG map styles - adjust based on your SVG structure */
    .kenya-map svg path {
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .kenya-map svg path:hover {
        filter: brightness(1.1);
        transform: scale(1.02);
        stroke: var(--turquoise);
        stroke-width: 2px;
    }
    
    @media (max-width: 768px) {
        .section-title-fancy h2 {
            font-size: 2rem;
        }
        
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

<!-- ===== Animated Counter Script ===== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animated counter function with easing
    function animateCounter(element, start, end, duration, suffix = '') {
        let startTimestamp = null;
        const easeOutQuad = (t) => t * (2 - t); // Smooth easing
        
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const easedProgress = easeOutQuad(progress);
            const currentValue = Math.floor(easedProgress * (end - start) + start);
            
            if (suffix === '+') {
                element.innerText = currentValue + '+';
            } else {
                element.innerText = currentValue;
            }
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                element.innerText = end + suffix;
            }
        };
        
        window.requestAnimationFrame(step);
    }

    // Intersection Observer for counters
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const statCards = entry.target.querySelectorAll('.stat-card-fancy');
                statCards.forEach(card => {
                    const valueElement = card.querySelector('.stat-value-fancy');
                    if (valueElement && !valueElement.classList.contains('counted')) {
                        valueElement.classList.add('counted');
                        const fullText = valueElement.getAttribute('data-value');
                        const hasPlus = fullText.includes('+');
                        const numericValue = parseInt(fullText.replace('+', ''));
                        
                        if (hasPlus) {
                            animateCounter(valueElement, 0, numericValue, 2000, '+');
                        } else {
                            animateCounter(valueElement, 0, numericValue, 2000);
                        }
                    }
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe stats section
    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }
    
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<!-- ===== Banner Carousel ===== -->
<div class="banner">
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $slides = [
                ['img' => '/assets/images/fort jesus mbs.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Fort Jesus', 'title2' => 'Mombasa County'],
                ['img' => '/assets/images/kilifi creek.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Kilifi Creek', 'title2' => 'Kilifi County'],
                ['img' => '/assets/images/red el taita.jpeg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Red Elephants', 'title2' => 'Taita Taveta County'],
                ['img' => '/assets/images/diani beach.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Diani Beach', 'title2' => 'Kwale County'],
                ['img' => '/assets/images/tana river delta.jpeg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Tana River Delta', 'title2' => 'Tana River County'],
                ['img' => '/assets/images/Lamu_Island.jpg', 'subtitle' => 'Jumuiya ya Kaunti za Pwani', 'title1' => 'Lamu Island', 'title2' => 'Lamu County'],
            ];
            foreach ($slides as $i => $slide):
            ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="images-optimization position-relative">
                        <img src="<?php echo htmlspecialchars($slide['img']); ?>" class="d-block img-fluid" alt="Banner slide <?php echo $i + 1; ?>">
                        <div class="cover-images-overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.7) 0%, rgba(0,206,209,0.3) 100%);">
                            <div class="container">
                                <div class="banner-content text-center text-lg-start">
                                    <div class="sentence-underline">
                                        <div class="text-white banner-semi-title" style="letter-spacing: 3px; font-weight: 300;"><?php echo $slide['subtitle']; ?></div>
                                    </div>
                                    <h1 class="text-white my-4 display-3 fw-bold">
                                        <span class="cssanimation lePopUp sequence"><?php echo $slide['title1']; ?></span><br>
                                        <span class="cssanimation lePopUp sequence" style="color: var(--turquoise);"><?php echo $slide['title2']; ?></span>
                                    </h1>
                                    <div class="buttons">
                                        <div class="cityWall-btn" role="search">
                                            <a href="/about" class="btn-fancy" style="background: var(--turquoise);">Discover More <i class="bi bi-arrow-right"></i></a>
                                            <a href="/contact" class="btn-fancy" style="background: var(--navy);">Contact Us <i class="bi bi-arrow-right"></i></a>
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
<div class="banner-card" style="margin-top: -80px; position: relative; z-index: 10;" data-aos="fade-up">
    <div class="container">
        <?php
        $mandateCards = [
            ['img' => 'coord.jpg', 'icon' => 'bi-diagram-3', 'title' => 'Coordination', 'text' => 'Socio-political & regional policy harmonization across six coastal counties'],
            ['img' => 'policy.jpg', 'icon' => 'bi-file-earmark-text', 'title' => 'Policy Harmonization', 'text' => 'Jumuiya 2030 Regional Economic Blueprint driving sustainable development'],
            ['img' => 'promotion.jpg', 'icon' => 'bi-megaphone', 'title' => 'Promotion', 'text' => 'Showcasing Sea-Land of Opportunities to local and international investors'],
            ['img' => 'investments.jpg', 'icon' => 'bi-graph-up-arrow', 'title' => 'Investments', 'text' => 'Unlocking value chains to boost agribusiness and blue economy'],
        ];
        ?>
        <div class="row g-4">
            <?php foreach ($mandateCards as $card): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="fancy-card card h-100 p-4">
                        <div class="text-center mb-3">
                            <i class="bi <?php echo $card['icon']; ?>" style="font-size: 2.5rem; color: var(--turquoise);"></i>
                        </div>
                        <div class="card-body text-center p-0">
                            <a href="/services" class="fancy-link">
                                <h4 class="card-title h5 fw-bold mb-3" style="color: var(--navy);"><?php echo $card['title']; ?></h4>
                            </a>
                            <p class="card-text small text-muted"><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <form action="/search" method="GET" class="mt-5 mx-auto" style="max-width: 600px;">
            <div class="input-group">
                <input type="text" name="q" class="form-control form-control-lg border-0 shadow-sm" placeholder="Explore investment opportunities..." style="border-radius: 50px 0 0 50px; padding: 15px 25px;">
                <button type="submit" class="btn btn-fancy" style="background: var(--turquoise); color: white; border-radius: 0 50px 50px 0; padding: 15px 30px;">Explore Now <i class="bi bi-arrow-right ms-2"></i></button>
            </div>
        </form>
    </div>
</div>

<!-- ===== About JKP ===== -->
<section class="about-company" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="image-overlay position-relative">
                    <img class="img-fluid rounded-4 shadow-lg" src="/assets/images/placeholders/oluwatobi-akindunjoye-bISd7DpFJWw-unsplash.jpg" alt="Jumuiya ya Kaunti za Pwani">
                    <div class="position-absolute bottom-0 end-0 p-4">
                        <div class="bg-white p-3 rounded-3 shadow" style="background: rgba(255,255,255,0.9); backdrop-filter: blur(10px);">
                            <span class="fw-bold" style="color: var(--turquoise);">Since 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="company-details ps-lg-4">
                    <div class="semi-title mb-3">
                        <div class="animated-circles">
                            <div class="small-circle-start"></div>
                            <span class="title" style="color: var(--turquoise); letter-spacing: 2px;">About Jumuiya</span>
                        </div>
                    </div>
                    <h2 class="display-4 fw-bold mb-4" style="color: var(--navy);">
                        <span class="cssanimation lePopUp sequence">Jumuiya ya Kaunti za Pwani</span><br>
                        <span class="cssanimation lePopUp sequence" style="color: var(--turquoise);">— Kenya's Coastal Economic Bloc</span>
                    </h2>
                    <p class="lead mb-4" style="color: var(--text-dark); line-height: 1.8;">The Jumuiya ya Kaunti za Pwani (JKP) serves as the regional economic development body for Kenya's coastal counties. Our primary goal is to foster a unified economic environment by bringing together regional leaders, county and national governments, development partners, the private sector, and academic institutions to drive economic growth.</p>

                    <div class="row g-3 mb-4">
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Mombasa County</li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Kwale County</li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Kilifi County</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Tana River County</li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Lamu County</li>
                                <li class="mb-2"><span class="me-2" style="color: var(--turquoise);">●</span> Taita Taveta County</li>
                            </ul>
                        </div>
                    </div>

                    <div class="company-videos">
                        <a href="/about" class="btn btn-fancy" style="background: var(--turquoise); color: white; padding: 15px 40px; border-radius: 50px;">Learn More <i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Mission, Vision, Aspiration & Core Mandate Section with Map ===== -->
<section style="background: linear-gradient(135deg, var(--navy) 0%, var(--deep-blue) 100%); padding: 60px 0;" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-start g-5">
            <!-- Left side - Cards stacked vertically -->
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Mission Card - Slightly higher -->
                    <div class="col-12" style="transform: translateY(-20px);">
                        <div class="fancy-card card h-100 border-0 p-4 text-center bg-white">
                            <div class="mb-3">
                                <i class="bi bi-bullseye" style="font-size: 3rem; color: var(--turquoise);"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: var(--navy);">Our Mission</h3>
                            <p class="small text-muted">Catalyze economic growth of Kenya's coast regional counties.</p>
                        </div>
                    </div>
                    
                    <!-- Vision Card -->
                    <div class="col-12">
                        <div class="fancy-card card h-100 border-0 p-4 text-center bg-white">
                            <div class="mb-3">
                                <i class="bi bi-eye" style="font-size: 3rem; color: var(--soft-blue);"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: var(--navy);">Our Vision</h3>
                            <p class="small text-muted">A regional economy that creates wealth and shared prosperity for its communities.</p>
                        </div>
                    </div>
                    
                    <!-- Aspirations Card -->
                    <div class="col-12">
                        <div class="fancy-card card h-100 border-0 p-4 text-center bg-white">
                            <div class="mb-3">
                                <i class="bi bi-stars" style="font-size: 3rem; color: var(--deep-blue);"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: var(--navy);">Our Aspirations</h3>
                            <p class="small text-muted">A social innovation network focused on enabling Workforce and MSMEs.</p>
                        </div>
                    </div>
                    
                    <!-- Core Mandate Card -->
                    <div class="col-12">
                        <div class="fancy-card card h-100 border-0 p-4 text-center bg-white">
                            <div class="mb-3">
                                <i class="bi bi-briefcase" style="font-size: 3rem; color: var(--navy);"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3" style="color: var(--navy);">Core Mandate</h3>
                            <p class="small text-muted">Creating an enabling platform for socio-economic development.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Map positioned slightly lower -->
            <div class="col-lg-6" style="transform: translateY(40px);">
                <div class="map-container">
                    <h4 class="text-center fw-bold mb-4" style="color: var(--navy);">Our Six Coastal Counties</h4>
                    
                    <!-- SVG Map - Using your existing path -->
                    <div class="kenya-map text-center">
                        <img src="/assets/images/ke.svg" alt="Kenya Map with Coastal Counties" class="img-fluid" style="max-height: 400px; width: auto;">
                    </div>
                    
                    <!-- County Legend -->
                    <div class="county-legend">
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--turquoise);"></span>
                            <span>Mombasa</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--soft-blue);"></span>
                            <span>Kwale</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--deep-blue);"></span>
                            <span>Kilifi</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: var(--navy);"></span>
                            <span>Tana River</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: #4A6FA5;"></span>
                            <span>Lamu</span>
                        </div>
                        <div class="legend-item">
                            <span class="legend-color" style="background: #6B8CBE;"></span>
                            <span>Taita Taveta</span>
                        </div>
                    </div>
                    
                    <p class="text-muted small text-center mt-4 mb-0">
                        <i class="bi bi-info-circle me-1" style="color: var(--turquoise);"></i>
                        Hover over counties to highlight
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Achievements with Animated Counters ===== -->
<section class="stats-section" style="background: var(--light-bg);" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Go Blue Project</div>
            <h2>Our Impact by Numbers</h2>
        </div>

        <?php
        $stats = [
            [
                'icon' => 'bi-briefcase', 
                'value' => '16', 
                'label' => 'MSME Tourism Grants', 
                'desc' => 'Supporting micro and small enterprises in the coastal tourism sector.'
            ],
            [
                'icon' => 'bi-ship', 
                'value' => '26+', 
                'label' => 'Boats Delivered', 
                'desc' => 'Fishing vessels delivered to coastal fishing communities and cooperatives.'
            ],
            [
                'icon' => 'bi-people', 
                'value' => '2000+', 
                'label' => 'Jobs Created', 
                'desc' => 'Employment opportunities created through the Go Blue Project initiatives.'
            ],
            [
                'icon' => 'bi-mortarboard', 
                'value' => '1900+', 
                'label' => 'Skills Trainings', 
                'desc' => 'Vocational and technical training programs completed across the region.'
            ],
        ];
        ?>
        
        <div class="row g-4">
            <?php foreach ($stats as $stat): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="stat-card-fancy text-center">
                        <div class="stat-icon-fancy">
                            <i class="bi <?php echo $stat['icon']; ?>"></i>
                        </div>
                        <div class="stat-value-fancy h1 fw-bold mb-2" data-value="<?php echo $stat['value']; ?>" style="color: var(--navy);">0</div>
                        <h5 class="fw-bold mb-2" style="color: var(--deep-blue);"><?php echo $stat['label']; ?></h5>
                        <p class="small text-muted mb-0"><?php echo $stat['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Milestone Section - Staircase Layout ===== -->
<section data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Our Journey</div>
            <h2>Key Milestones</h2>
        </div>
        
        <div class="staircase-container">
            <div class="staircase-line"></div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2015</div>
                    <div class="staircase-title">Foundation of Jumuiya</div>
                    <div class="staircase-desc">Six coastal counties united to form the economic bloc, establishing our vision for regional prosperity.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2015</div>
                    <div class="staircase-title">Blue Economy Framework</div>
                    <div class="staircase-desc">Introduced comprehensive strategy for sustainable marine resource development across member counties.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2020</div>
                    <div class="staircase-title">50,000 Jobs Created</div>
                    <div class="staircase-desc">Milestone achievement in youth and women employment through economic empowerment programs.</div>
                </div>
            </div>
            
            <div class="staircase-row">
                <div class="staircase-card">
                    <div class="staircase-year">2025</div>
                    <div class="staircase-title">10th Anniversary</div>
                    <div class="staircase-desc">Celebrating 10 years of transformative impact with 200+ projects and 100,000+ beneficiaries.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== JKP Projects & Initiatives ===== -->
<section class="stats-section" style="background: var(--light-bg);" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">JKP</div>
            <h2>Flagship Projects & Initiatives</h2>
        </div>
        
        <?php
        $projects = [
            [
                'img' => '/assets/images/she stands.png', 
                'title' => 'She Stands Project', 
                'desc' => 'A faith-based collaborative initiative equipping and inspiring Kenyan women with biblical principles for everyday living and community leadership.'
            ],
            [
                'img' => '/assets/images/goo-blu.png', 
                'title' => 'The Go Blue Project', 
                'desc' => 'A four-year EU-funded project supporting Kenya\'s coastal economic development and blue economy strategy through sustainable marine resource utilization.'
            ],
            [
                'img' => '/assets/images/inno-lab.png', 
                'title' => 'Jumuiya Innovation Lab', 
                'desc' => 'Six innovation labs established as flagship projects to transform the region\'s economic landscape under the Jumuiya 2030 framework.'
            ],
            [
                'img' => '/assets/images/jum 2030.png', 
                'title' => 'Jumuiya 2030', 
                'desc' => 'The regional economic development strategy for 2020-2030, outlining the blueprint for sustainable growth and shared prosperity across coastal counties.'
            ],
        ];
        ?>
        
        <div class="row g-4">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-6 col-lg-3">
                    <div class="project-card-fancy">
                        <div class="project-image">
                            <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>">
                        </div>
                        <div class="project-content">
                            <h4 class="project-title"><?php echo $project['title']; ?></h4>
                            <p class="project-desc"><?php echo $project['desc']; ?></p>
                            <a href="/services" class="read-more">
                                Read More <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===== Jumuiya Hub Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up" style="padding: 0;">
    <div class="position-relative">
        <img class="img-fluid w-100" src="/assets/images/jum house.webp" alt="Jumuiya Hub" style="height: 600px; object-fit: cover;">
        <div class="overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.9) 0%, rgba(0,206,209,0.7) 100%);"></div>
        <div class="container position-relative" style="margin-top: -400px;">
            <div class="city-content text-center text-white">
                <h2 class="display-3 fw-bold mb-5" data-aos="fade-up">
                    <span class="cssanimation lePopUp sequence">Jumuiya Hub</span>
                </h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur" style="backdrop-filter: blur(10px);">
                            <h5 class="fw-bold mb-3">Agriculture & Agribusiness</h5>
                            <p class="small opacity-75">Promoting sustainable farming, value addition, and market access for coastal farmers.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur" style="backdrop-filter: blur(10px);">
                            <h5 class="fw-bold mb-3">Blue Economy</h5>
                            <p class="small opacity-75">Sustainable use of ocean resources for economic growth, jobs, and healthy marine ecosystems.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur" style="backdrop-filter: blur(10px);">
                            <h5 class="fw-bold mb-3">Tourism</h5>
                            <p class="small opacity-75">Showcasing the beautiful beaches, culture, and heritage of Kenya's coast.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur" style="backdrop-filter: blur(10px);">
                            <h5 class="fw-bold mb-3">Education & Academia</h5>
                            <p class="small opacity-75">Investing in quality education, research, and skills development for youth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Latest News ===== -->
<section class="newsroom" data-aos="fade-up">
    <div class="container">
        <div class="section-title-fancy text-center mb-5">
            <div class="subtitle">Impact Stories & Updates</div>
            <h2>Latest From Our Newsroom</h2>
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
        
        <div class="row g-4">
            <?php foreach ($news as $item): ?>
                <div class="col-lg-4">
                    <div class="project-card-fancy">
                        <div class="project-image" style="height: 250px;">
                            <img src="<?php echo htmlspecialchars($item['img']); ?>" alt="<?php echo htmlspecialchars($item['title']); ?>">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge bg-white text-dark p-3 rounded-3">
                                    <div class="fw-bold"><?php echo $item['date']; ?></div>
                                    <small><?php echo $item['month']; ?></small>
                                </span>
                            </div>
                        </div>
                        <div class="project-content">
                            <small class="text-muted mb-2 d-block">By <?php echo htmlspecialchars($item['author']); ?></small>
                            <h4 class="project-title h5"><?php echo htmlspecialchars($item['title']); ?></h4>
                            <a href="/blog" class="read-more mt-3">
                                Read Full Story <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include __DIR__ . '/components/partners.php'; ?>

<!-- ===== Contact Strip ===== -->
<section class="upcoming-city" data-aos="fade-up" style="background: var(--navy); color: white;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <div class="section-title-fancy text-start mb-4">
                    <div class="subtitle" style="color: var(--turquoise);">Get In Touch</div>
                    <h2 class="text-white">Contact the Jumuiya<br>Economic Development Secretariat</h2>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-geo-alt-fill" style="color: var(--turquoise); font-size: 1.5rem;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Head Office</h5>
                                <p class="small opacity-75 mb-0">Bustani Close, Links Road – Nyali, Mombasa, Kenya</p>
                                <p class="small opacity-75">Mon – Fri: 8:30am – 5:00pm</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-white bg-opacity-10 p-3 rounded-3">
                                <i class="bi bi-telephone-fill" style="color: var(--turquoise); font-size: 1.5rem;"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-2">Call & Email Us</h5>
                                <p class="small opacity-75 mb-0">+254 777 101 115</p>
                                <p class="small opacity-75">info@jumuiya.org | secretariat@jumuiya.org</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="bg-white p-5 rounded-4 shadow-lg">
                    <h3 class="h4 fw-bold mb-4" style="color: var(--navy);">Send Us a Message</h3>
                    <form action="/contact" method="POST">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg border-0 bg-light" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg border-0 bg-light" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control form-control-lg border-0 bg-light" name="phone" placeholder="Phone (optional)">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control form-control-lg border-0 bg-light" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-fancy w-100" style="background: var(--turquoise); color: white; padding: 15px; border: none;">Send Message <i class="bi bi-arrow-right ms-2"></i></button>
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