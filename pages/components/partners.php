<?php

$partnersTitle = $partnersTitle ?? 'Our Partners And Supporters';
$partnersLabel = $partnersLabel ?? 'Our Supporters';

$partners = $partners ?? [
    ['img' => '/assets/images/merry pats (1).png', 'href' => '#', 'alt' => 'Partner 1'],
    ['img' => '/assets/images/merry pats (2).png', 'href' => '#', 'alt' => 'Partner 2'],
    ['img' => '/assets/images/merry pats (3).png', 'href' => '#', 'alt' => 'Partner 3'],
    ['img' => '/assets/images/merry pats (4).png', 'href' => '#', 'alt' => 'Partner 4'],
];

// Split partners into two rows
$topRowPartners = array_slice($partners, 0, 2);
$bottomRowPartners = array_slice($partners, 2, 2);

// Duplicate for continuous scrolling
$topRowSlides = array_merge($topRowPartners, $topRowPartners);
$bottomRowSlides = array_merge($bottomRowPartners, $bottomRowPartners);
?>

<!-- ===== Partners & Sponsors ===== -->
<section class="company-brand-logo">
    <div class="divide-row" data-aos="fade-up"></div>
    <div class="container">
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

        <!-- Top Row - Moving Left to Right -->
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

        <!-- Bottom Row - Moving Right to Left -->
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
    </div>
</section>

<style>
.company-brand-logo {
    padding: 60px 0;
    background-color: #f8f9fa;
}

.section-title {
    margin-bottom: 40px;
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

.slider {
    overflow: hidden;
    width: 100%;
    position: relative;
}

.slider-top {
    margin-bottom: 30px;
}

.slide-track {
    display: flex;
    width: fit-content;
    gap: 0; /* No gap */
}

.slide-track-left-to-right {
    animation: scrollLeftToRight 40s linear infinite;
}

.slide-track-right-to-left {
    animation: scrollRightToLeft 40s linear infinite;
}

.slide {
    flex: 0 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slide a {
    display: block;
    line-height: 0; /* Removes any line height space */
}

.slide img {
    max-width: 650px;
    width: 100%;
    height: auto;
    filter: none;
    opacity: 1;
    display: block; /* Removes bottom space */
    margin: 0; /* No margin */
    padding: 0; /* No padding */
}

@keyframes scrollLeftToRight {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes scrollRightToLeft {
    0% { transform: translateX(-50%); }
    100% { transform: translateX(0); }
}

.slider::before,
.slider::after {
    content: "";
    position: absolute;
    top: 0;
    width: 150px;
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

@media (max-width: 1200px) {
    .slide img {
        max-width: 550px;
    }
}

@media (max-width: 992px) {
    .slide img {
        max-width: 450px;
    }
}

@media (max-width: 768px) {
    .slide img {
        max-width: 350px;
    }
    
    .title h2 {
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .slide img {
        max-width: 280px;
    }
}
</style>