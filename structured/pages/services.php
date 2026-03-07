<?php
/**
 * pages/services.php
 */

$pageTitle    = 'Services';
$currentPage  = 'services';
$heroTitle    = 'Our Services';
$heroSubtitle = 'Services';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

$services = [
    ['gif' => 'skills.gif',        'title' => 'Jobs & Unemployment',    'desc' => 'Connecting residents with employment resources, job fairs, and unemployment assistance programs.'],
    ['gif' => 'police.gif',         'title' => 'Policing and Crime',     'desc' => 'Community-oriented policing strategies and crime prevention resources.'],
    ['gif' => 'elections.gif',      'title' => 'Government & Elections', 'desc' => 'Voter registration, election information, and civic participation resources.'],
    ['gif' => 'money-transfer.gif', 'title' => 'Finance & Legal',        'desc' => 'City budget transparency, legal aid services, and financial assistance programs.'],
    ['gif' => 'planning.gif',       'title' => 'National Planning',      'desc' => 'Urban development, zoning information, and city master planning initiatives.'],
    ['gif' => 'profit.gif',         'title' => 'Business & Industry',    'desc' => 'Business permits, economic development grants, and industry partnerships.'],
    ['gif' => 'parking.gif',        'title' => 'Sidewalks & Parking',    'desc' => 'Parking permits, street maintenance requests, and sidewalk accessibility.'],
    ['gif' => 'spinach.gif',        'title' => 'Agriculture and Food',   'desc' => 'Farmers markets, food safety regulations, and urban agriculture support.'],
];
?>

<section class="government-service py-5">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">What We Offer</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">City Government Services</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($services as $service): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0 rounded-0">
                    <img src="/assets/images/01_home/goverment-service/<?php echo $service['gif']; ?>" class="card-img-top img-fluid" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo htmlspecialchars($service['title']); ?></h4>
                        <p class="card-text"><?php echo htmlspecialchars($service['desc']); ?></p>
                    </div>
                    <div class="card-footer bg-white border-0 p-0">
                        <a href="/services" class="card-btn">Learn More <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
