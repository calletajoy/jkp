<?php

$partnersTitle = $partnersTitle ?? 'Our Partners And Supporters';
$partnersLabel = $partnersLabel ?? 'Our Supporters';

// Static image at the bottom of the partners section
$staticImage = $staticImage ?? 'assets/images/static pats (2).png';

// Add your individual partner logos here — they will automatically split into two rows
$partners = $partners ?? [
    ['img' => 'assets/images/logo 1.png', 'href' => '#', 'alt' => 'Partner 1'],
    ['img' => 'assets/images/logo 2.webp', 'href' => '#', 'alt' => 'Partner 2'],
    ['img' => 'assets/images/logo 3.webp', 'href' => '#', 'alt' => 'Partner 3'],
    ['img' => 'assets/images/logo 4.png', 'href' => '#', 'alt' => 'Partner 4'],
    ['img' => 'assets/images/FAO-Logo.png', 'href' => '#', 'alt' => 'Partner 5'],
    ['img' => 'assets/images/trade mark EA.png', 'href' => '#', 'alt' => 'Partner 6'],
    ['img' => 'assets/images/logo 5.jpg', 'href' => '#', 'alt' => 'Partner 7'],
    ['img' => 'assets/images/logo 6.jpg', 'href' => '#', 'alt' => 'Partner 8'],
    ['img' => 'assets/images/logo 7.png', 'href' => '#', 'alt' => 'Partner 9'],
    ['img' => 'assets/images/logo 8.jpeg', 'href' => '#', 'alt' => 'Partner 10'],
    ['img' => 'assets/images/tum.png', 'href' => '#', 'alt' => 'Partner 11'],
    ['img' => 'assets/images/taita uni.jpeg', 'href' => '#', 'alt' => 'Partner 12'],
    ['img' => 'assets/images/pwani uni.webp', 'href' => '#', 'alt' => 'Partner 13'],
    ['img' => 'assets/images/aghak.png', 'href' => '#', 'alt' => 'Partner 14'],
];

// Split partners into two rows
$totalPartners = count($partners);
$halfCount = ceil($totalPartners / 2);

$topRowPartners = array_slice($partners, 0, $halfCount);
$bottomRowPartners = array_slice($partners, $halfCount);

// Duplicate for continuous scrolling
$topRowSlides = array_merge($topRowPartners, $topRowPartners);
$bottomRowSlides = array_merge($bottomRowPartners, $bottomRowPartners);
?>

<!-- ===== Partners & Sponsors ===== -->
<section class="company-brand-logo">
    <div class="divide-row" data-aos="fade-up"></div>
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title"><?php echo htmlspecialchars($partnersLabel); ?></div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence"><?php echo htmlspecialchars($partnersTitle); ?></h2>
            </div>
        </div>

        <!-- Top Row -->
        <div class="slider slider-top">
            <div class="slide-track slide-track-left-to-right">
                <?php foreach ($topRowSlides as $slide): ?>
                <div class="slide">
                    <a href="<?php echo htmlspecialchars($slide['href']); ?>">
                        <img src="<?php echo htmlspecialchars($slide['img']); ?>"
                             alt="<?php echo htmlspecialchars($slide['alt']); ?>"
                             class="img-fluid">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Ka line separator -->
        <div class="row-separator"></div>

        <!-- Bottom Row -->
        <div class="slider slider-bottom">
            <div class="slide-track slide-track-right-to-left">
                <?php foreach ($bottomRowSlides as $slide): ?>
                <div class="slide">
                    <a href="<?php echo htmlspecialchars($slide['href']); ?>">
                        <img src="<?php echo htmlspecialchars($slide['img']); ?>"
                             alt="<?php echo htmlspecialchars($slide['alt']); ?>"
                             class="img-fluid">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Static Image at the Bottom -->
        <div class="static-partner-image text-center mt-5" data-aos="fade-up">
            <img src="<?php echo htmlspecialchars($staticImage); ?>" alt="Our Partners" class="img-fluid">
        </div>
    </div>
</section>

<!-- ===== Partners CSS ===== -->
<style>
.company-brand-logo {
    padding: 60px 0;
    background-color: #f8f9fa;
}

.section-title {
    margin-bottom: 40px;
}

.static-partner-image {
    margin-top: 50px;
}

.static-partner-image img {
    width: 100%;
    height: auto;
}

.title {
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 2px;
    color: #00CED1;
    text-transform: uppercase;
}

.title h2 {
    font-size: 36px;
    font-weight: 700;
    color: #273C67;
    margin-top: 15px;
}

.small-circle-start,
.small-circle-end {
    width: 8px;
    height: 8px;
    background-color: #00CED1;
    border-radius: 50%;
    display: inline-block;
}

.animated-circles {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Slider rows */
.slider {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.slider-top,
.slider-bottom {
    height: 120px; /* Row height */
}

.slide-track {
    display: flex;
    width: fit-content;
    gap: 20px; /* Space between logos */
}

.slide-track-left-to-right {
    animation: scrollLeftToRight 40s linear infinite;
}

.slide-track-right-to-left {
    animation: scrollRightToLeft 40s linear infinite;
}

.slide {
    flex: 0 0 auto; /* Prevent shrinking */
    display: flex;
    align-items: center;
    justify-content: center;
}

.slide a {
    display: block;
    line-height: 1;
}

.slide img {
    max-height: 100px; /* Fit inside row */
    width: auto;
    transition: transform 0.3s ease;
}

.slide img:hover {
    transform: scale(1.05);
}

/* Ka line separator */
.row-separator {
    height: 2px;
    background-color: #00CED1; /* Ka line color */
    width: 80%;
    margin: 20px auto;
    border-radius: 2px;
}

/* Scroll animations */
@keyframes scrollLeftToRight {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes scrollRightToLeft {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

/* Fade edges to indicate scrolling */
.slider::before,
.slider::after {
    content: "";
    position: absolute;
    top: 0;
    width: 100px;
    height: 100%;
    z-index: 2;
    pointer-events: none;
}

.slider::before {
    left: 0;
    background: linear-gradient(to right, #f8f9fa 0%, transparent 100%);
}

.slider::after {
    right: 0;
    background: linear-gradient(to left, #f8f9fa 0%, transparent 100%);
}

.container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Responsive logo sizes */
@media (max-width: 1200px) {
    .slide img { max-height: 90px; }
}

@media (max-width: 992px) {
    .slide img { max-height: 80px; }
}

@media (max-width: 768px) {
    .slide img { max-height: 60px; }
    .title h2 { font-size: 28px; }
}

@media (max-width: 480px) {
    .slide img { max-height: 50px; }
    .slide-track { gap: 15px; }
}
</style>