<?php
/**
 * pages/blog.php
 */

$pageTitle    = 'Blog & News';
$currentPage  = 'blog';
$heroTitle    = 'Blog & News';
$heroSubtitle = 'Blog';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

$posts = [
    ['img' => '01.png', 'date' => '28', 'month' => 'January',  'title' => 'Best Municipal City Government 2024 Year',         'excerpt' => 'An in-depth look at the performance metrics and resident satisfaction scores across leading US municipalities.'],
    ['img' => '02.png', 'date' => '15', 'month' => 'February', 'title' => 'Leverage Agile Frameworks to Provide City Value',   'excerpt' => 'How modern management methodologies are transforming the delivery of public services at the local level.'],
    ['img' => '03.png', 'date' => '03', 'month' => 'March',    'title' => 'Supporting Businesses as They Bounce Back',         'excerpt' => 'Initiatives and grants available to local businesses looking to recover and expand post-pandemic.'],
    ['img' => '01.png', 'date' => '20', 'month' => 'March',    'title' => 'New Parks Initiative Breaks Ground Downtown',       'excerpt' => 'The city announces a $4M investment in green spaces, community gardens, and recreational facilities.'],
    ['img' => '02.png', 'date' => '08', 'month' => 'April',    'title' => 'City Council Passes Digital Governance Bill',       'excerpt' => 'Landmark legislation modernises how residents interact with city hall, from permits to public records.'],
    ['img' => '03.png', 'date' => '22', 'month' => 'April',    'title' => 'Volunteer Drive Sets Record Participation Numbers', 'excerpt' => 'Over 3,000 residents signed up to contribute to city clean-up days, mentorship, and food-bank programs.'],
];
?>

<section class="newsroom py-5">
    <div class="container">
        <div class="section-title mb-5">
            <div class="semi-title" data-aos="fade-up">
                <div class="animated-circles justify-content-center">
                    <div class="small-circle-start"></div>
                    <div class="title">Latest Updates</div>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <div class="title text-center" data-aos="fade-up">
                <h2 class="cssanimation lePopUp sequence">News &amp; Blog</h2>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php foreach ($posts as $post): ?>
            <div class="col" data-aos="fade-up">
                <div class="card h-100 border-0 rounded">
                    <img src="/assets/images/multiple-use/newsroom/<?php echo $post['img']; ?>" class="card-img-top img-fluid" alt="">
                    <div class="card-body p-3">
                        <div class="date-comment d-flex gap-3 mb-2">
                            <div class="date">
                                <div class="fw-bold"><?php echo $post['date']; ?></div>
                                <div class="month"><?php echo $post['month']; ?></div>
                            </div>
                            <div class="d-flex align-items-center"><small>Admin</small></div>
                        </div>
                        <h4 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h4>
                        <p class="card-text"><?php echo htmlspecialchars($post['excerpt']); ?></p>
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
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
