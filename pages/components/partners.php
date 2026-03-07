<?php


$partnersTitle = $partnersTitle ?? 'Our Partners And Supporters';
$partnersLabel = $partnersLabel ?? 'Our Supporters';

$partners = $partners ?? [
    ['img' => '/assets/images/partners/image.png',                          'href' => '#', 'alt' => 'Partner 1'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/2.png',    'href' => '#', 'alt' => 'Partner 2'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/3.png',    'href' => '#', 'alt' => 'Partner 3'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/4.png',    'href' => '#', 'alt' => 'Partner 4'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/5.png',    'href' => '#', 'alt' => 'Partner 5'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/6.png',    'href' => '#', 'alt' => 'Partner 6'],
    ['img' => '/assets/images/multiple-use/sponsors-company-logo/7.png',    'href' => '#', 'alt' => 'Partner 7'],
];

$slides = array_merge($partners, $partners);
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

        <div class="slider">
            <div class="slide-track">
                <?php foreach ($slides as $slide): ?>
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