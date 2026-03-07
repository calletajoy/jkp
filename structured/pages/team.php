<?php
/**
 * pages/team.php
 */

$pageTitle    = 'Our Team';
$currentPage  = 'team';
$heroTitle    = 'Our Team';
$heroSubtitle = 'Team';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

$members = [
    ['img' => 'david.png',  'name' => 'David Malawn', 'role' => 'Chief Engineer'],
    ['img' => 'brawn.png',  'name' => 'Brawn Jack',   'role' => 'Head Officer'],
    ['img' => 'marla.png',  'name' => 'Marla Jashon', 'role' => 'Developer'],
    ['img' => 'mike.png',   'name' => 'Mike Mink',    'role' => 'Engineer'],
];
?>

<section class="our-investigators py-5">
    <div class="container">
        <div class="section-title">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Meet The People</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center mb-5" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">Our Dedicated Team</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <?php foreach ($members as $member): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0">
                    <img src="/assets/images/multiple-use/investigator/<?php echo $member['img']; ?>" class="card-img-top img-fluid" alt="<?php echo htmlspecialchars($member['name']); ?>">
                    <div class="card-body">
                        <ul class="social-links hideLink">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                        <button class="share-btn border-0 share-button"><i class="fa-solid fa-share-nodes"></i></button>
                        <div class="info mt-1 px-2 py-3">
                            <h5 class="card-title tow text-white ps-3 m-0"><?php echo htmlspecialchars($member['name']); ?></h5>
                            <p class="card-text text-white ps-3"><?php echo htmlspecialchars($member['role']); ?></p>
                        </div>
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
