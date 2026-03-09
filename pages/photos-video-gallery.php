<?php
/**
 * pages/photos-video-gallery.php — Photos & Video Gallery page
 */

$pageTitle    = 'Photo & Video Gallery';
$currentPage  = 'gallery';
$heroTitle    = 'Photo & Video Gallery';
// Adding intro text to hero subtitle
$heroSubtitle = 'A visual journey through Jumuiya ya Kaunti za Pwani initiatives, events, and community transformations across the six coastal counties with an explore gallery and watch video part.';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

// Blue color scheme
$primaryBlue = '#6EC1E4';
$darkBlue = '#244080';

// Helper function to detect platform from image path
function detectPlatform($image, $type) {
    if ($type === 'video') return 'youtube';
    if (strpos($image, 'ig-') !== false) return 'instagram';
    return 'facebook';
}

// Gallery data
$galleryItems = [
    [
        'type' => 'photo',
        'title' => 'JABEIC Conference 2024',
        'description' => 'Jumuiya Agribusiness & Blue Economy Investment Conference bringing together investors, government leaders, and development partners for coastal region transformation.',
        'location' => 'Voi, Taita Taveta',
        'date' => 'November 2024',
        'category' => 'JABEIC Conference',
        'image' => '/assets/images/jab.jpg'
    ],
    [
        'type' => 'photo',
        'title' => 'Community Engagement',
        'description' => 'Showcasing JKP\'s community initiatives and partnerships that drive sustainable development across the coastal counties.',
        'location' => 'Coastal Region',
        'date' => '2024',
        'category' => 'Community Engagement',
        'image' => '/assets/images/ig-1.png'
    ],
    [
        'type' => 'photo',
        'title' => 'Project Highlights',
        'description' => 'Highlighting key projects and achievements of Jumuiya ya Kaunti za Pwani in regional development and economic transformation.',
        'location' => 'Coastal Counties',
        'date' => '2024',
        'category' => 'Project Highlights',
        'image' => '/assets/images/ig-2.png'
    ],
    [
        'type' => 'photo',
        'title' => 'Regional Activities',
        'description' => 'Documenting various activities and engagements by JKP across the six coastal counties for integrated regional development.',
        'location' => 'Multiple Counties',
        'date' => '2023-2024',
        'category' => 'Regional Activities',
        'image' => '/assets/images/jum1.jpg'
    ],
    [
        'type' => 'photo',
        'title' => 'Development Initiatives',
        'description' => 'Showcasing development initiatives and collaborative projects undertaken by JKP to transform the coastal region\'s socio-economic landscape.',
        'location' => 'Coastal Region',
        'date' => '2023-2024',
        'category' => 'Development Initiatives',
        'image' => '/assets/images/jum2.jpg'
    ],
    [
        'type' => 'video',
        'title' => 'JKP Documentary',
        'description' => 'Documentary video showcasing the impact and achievements of Jumuiya ya Kaunti za Pwani in driving regional development and economic growth across the coast.',
        'location' => 'Coastal Region',
        'date' => '2024',
        'category' => 'JKP Documentary',
        'image' => '/assets/images/jum3.jpg',
        'video' => true
    ]
];

$videoItems = [
    [
        'title' => 'Coastal Development Story',
        'description' => 'A comprehensive video documenting the journey of coastal development through JKP\'s collaborative efforts and strategic partnerships across the six coastal counties.',
        'location' => 'Six Coastal Counties',
        'date' => '2024',
        'image' => '/assets/images/jum3.jpg',
        'video_url' => 'https://www.youtube.com/watch?v=IpCFswR0pio'
    ],
    [
        'title' => 'Jumuiya Conference Taita Taveta',
        'description' => 'Jumuiya ya Kaunti za Pwani to hold conference in Taita Taveta. It is the first business and investment conference. Residents of the county are expected to benefit economically.',
        'location' => 'Taita Taveta',
        'date' => '2024',
        'image' => '/assets/images/jum3.jpg',
        'video_url' => 'https://www.youtube.com/watch?v=PaCOzld48J4'
    ],
    [
        'title' => 'Go Blue Project Launch',
        'description' => 'Six coastal counties have received funding to the tune of 3.5 billion shillings from the European Union. The "Go Blue" project is a grant under implementation, a partnership between the European Union and the Government of Kenya to advance the Blue Economy Agenda through coastal development.',
        'location' => 'Coastal Region',
        'date' => '2024',
        'image' => '/assets/images/jum3.jpg',
        'video_url' => 'https://www.youtube.com/watch?v=IpCFswR0pio'
    ]
];

$recentEvents = [
    [
        'title' => 'JABEIC Conference 2024',
        'description' => 'Jumuiya Agribusiness & Blue Economy Investment Conference bringing together investors, government leaders, and development partners for coastal region transformation.',
        'location' => 'Voi, Taita Taveta',
        'date' => 'November 2024',
        'image' => '/assets/images/jab.jpg'
    ],
    [
        'title' => 'Community Engagement Initiative',
        'description' => 'Showcasing JKP\'s community initiatives and partnerships that drive sustainable development across the coastal counties.',
        'location' => 'Coastal Region',
        'date' => '2024',
        'image' => '/assets/images/ig-1.png'
    ],
    [
        'title' => 'Project Highlights Launch',
        'description' => 'Highlighting key projects and achievements of Jumuiya ya Kaunti za Pwani in regional development and economic transformation.',
        'location' => 'Coastal Counties',
        'date' => '2024',
        'image' => '/assets/images/ig-2.png'
    ],
    [
        'title' => 'JKP Documentary Release',
        'description' => 'Documentary video showcasing the impact and achievements of Jumuiya ya Kaunti za Pwani in driving regional development and economic growth across the coast.',
        'location' => 'Coastal Region',
        'date' => '2024',
        'image' => '/assets/images/jum3.jpg',
        'type' => 'video'
    ]
];
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
}

/* Hero section customization */
.page-hero .subtitle {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 1rem auto 2rem;
    opacity: 0.95;
}

.hero-nav-links {
    display: flex;
    gap: 1.5rem;
    justify-content: center;
    flex-wrap: wrap;
    margin: 2rem 0 3rem;
}

.hero-nav-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: white;
    background: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    padding: 0.75rem 2rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    border: 2px solid var(--primary-blue);
}

.hero-nav-link:hover {
    background: var(--dark-blue);
    border-color: var(--dark-blue);
    color: white;
    transform: translateY(-2px);
}

/* Full width Connect Section */
.connect-wrapper {
    width: 100%;
    background: #f8f9fa;
    margin: 2rem 0 3rem;
    padding: 3rem 0;
}

.connect-section {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 0 1rem;
}

.connect-section h3 {
    color: var(--dark-blue);
    margin-bottom: 1rem;
    font-size: 2rem;
    font-weight: 700;
}

.connect-section p {
    color: #6c757d;
    margin-bottom: 1.5rem;
    font-size: 1.1rem;
    line-height: 1.6;
}

.social-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: var(--primary-blue);
    color: white;
    padding: 0.75rem 2rem;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    border: 2px solid var(--primary-blue);
}

.social-btn:hover {
    background: var(--dark-blue);
    border-color: var(--dark-blue);
    color: white;
    transform: translateY(-2px);
}

.section-tag {
    color: var(--primary-blue);
    font-size: 0.9rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 0.5rem;
}

.section-title-custom {
    color: var(--dark-blue);
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.gallery-card {
    border: none;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(36, 64, 128, 0.2);
}

.gallery-card .card-img-wrapper {
    position: relative;
    overflow: hidden;
    height: 250px;
}

.gallery-card .card-img-top {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.gallery-card:hover .card-img-top {
    transform: scale(1.1);
}

.card-badge {
    position: absolute;
    top: 1rem;
    right: 1rem;
    background: var(--primary-blue);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.9rem;
    font-weight: 600;
    z-index: 1;
    display: flex;
    align-items: center;
    gap: 0.3rem;
}

.card-badge.video {
    background: var(--dark-blue);
}

.card-category {
    color: var(--primary-blue);
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.card-location {
    color: #6c757d;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
    margin-bottom: 0.25rem;
}

.card-date {
    color: #6c757d;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
}

.platform-indicator {
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.85rem;
    color: var(--primary-blue);
    text-decoration: none;
    margin-top: 0.5rem;
    font-weight: 500;
}

.platform-indicator:hover {
    color: var(--dark-blue);
}

.video-thumbnail {
    position: relative;
    cursor: pointer;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: var(--primary-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1.5rem;
    transition: all 0.3s ease;
    opacity: 0.9;
}

.gallery-card:hover .play-button {
    background: var(--dark-blue);
    transform: translate(-50%, -50%) scale(1.1);
}

.watch-now-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.watch-now-btn:hover {
    color: var(--dark-blue);
}

.social-links {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 2rem;
}

.social-icon {
    width: 50px;
    height: 50px;
    background: var(--primary-blue);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    text-decoration: none;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: var(--dark-blue);
    transform: translateY(-3px);
}

/* Stay Updated Section with Vertical Line */
.stay-updated-section {
    position: relative;
    padding: 4rem 0;
}

.stay-updated-section .section-header {
    text-align: center;
    margin-bottom: 3rem;
}

.stay-updated-section .vertical-line-wrapper {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
    padding-left: 2rem;
}

.stay-updated-section .vertical-line {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background: linear-gradient(to bottom, var(--primary-blue), var(--dark-blue));
}

.stay-updated-section .vertical-line::before {
    content: '';
    position: absolute;
    left: -6px;
    top: 0;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: var(--primary-blue);
}

.stay-updated-section .vertical-line::after {
    content: '';
    position: absolute;
    left: -6px;
    bottom: 0;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: var(--dark-blue);
}

.event-card {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 1.5rem;
    transition: all 0.3s ease;
    position: relative;
}

.event-card:last-child {
    margin-bottom: 0;
}

.event-card:hover {
    box-shadow: 0 8px 20px rgba(36, 64, 128, 0.1);
    transform: translateX(5px);
}

.event-date {
    color: var(--primary-blue);
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.event-title {
    color: var(--dark-blue);
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 0.75rem;
}

.event-location {
    color: #6c757d;
    font-size: 0.9rem;
    display: flex;
    align-items: center;
    gap: 0.25rem;
    margin: 1rem 0;
}

.view-post-btn {
    color: var(--primary-blue);
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: color 0.3s ease;
    margin-top: 0.5rem;
}

.view-post-btn:hover {
    color: var(--dark-blue);
}
</style>

<!-- Navigation buttons -->
<div class="container">
    <div class="hero-nav-links" data-aos="fade-up">
        <a href="#photos-section" class="hero-nav-link" onclick="document.getElementById('photos-section').scrollIntoView({behavior: 'smooth'}); return false;">
            <i class="bi bi-images"></i> Explore Gallery
        </a>
        <a href="#videos-section" class="hero-nav-link" onclick="document.getElementById('videos-section').scrollIntoView({behavior: 'smooth'}); return false;">
            <i class="bi bi-play-circle"></i> Watch Video
        </a>
    </div>
</div>

<!-- Full Width Connect with Us Section -->
<div class="connect-wrapper">
    <div class="connect-section" data-aos="fade-up">
        <h3>Connect With Us</h3>
        <p>More Photos on Facebook<br>Explore our complete photo collection and stay updated with the latest events and activities from Jumuiya ya Kaunti za Pwani</p>
        <a href="https://web.facebook.com/JumuiyaKauntiZaPwani" class="social-btn" target="_blank" rel="noopener noreferrer">
            <i class="bi bi-facebook"></i> Visit JKP Facebook Gallery
        </a>
    </div>
</div>

<!-- Our Collection / Featured Photos -->
<section id="photos-section" class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-tag">Our Collection</div>
            <h2 class="section-title-custom">Featured Photos</h2>
            <p class="text-muted">Capturing moments that define our journey across the coastal region</p>
        </div>

        <div class="row g-4">
            <?php foreach ($galleryItems as $item): 
                $platform = detectPlatform($item['image'], $item['type']);
                $platformUrl = $platform === 'facebook' ? 'https://web.facebook.com/JumuiyaKauntiZaPwani' : 
                              ($platform === 'instagram' ? 'https://www.instagram.com/jumuiyapwani/' : 
                              'https://www.youtube.com/watch?v=ZaE74xQkQoE');
            ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="gallery-card card">
                    <div class="card-img-wrapper">
                        <img src="<?php echo $item['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['title']); ?>">
                        <div class="card-badge <?php echo $item['type']; ?>">
                            <?php echo $item['type'] === 'video' ? '🎥 Video' : '📸 Photo'; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-category"><?php echo htmlspecialchars($item['category']); ?></div>
                        <h4 class="card-title h5"><?php echo htmlspecialchars($item['title']); ?></h4>
                        <p class="card-text small"><?php echo htmlspecialchars($item['description']); ?></p>
                        <div class="d-flex gap-3 mb-2">
                            <div class="card-location">
                                <i class="bi bi-geo-alt" style="color: var(--primary-blue);"></i>
                                <?php echo htmlspecialchars($item['location']); ?>
                            </div>
                            <div class="card-date">
                                <i class="bi bi-calendar" style="color: var(--primary-blue);"></i>
                                <?php echo htmlspecialchars($item['date']); ?>
                            </div>
                        </div>
                        <a href="<?php echo $platformUrl; ?>" class="platform-indicator" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-<?php echo $platform; ?>"></i> 
                            View on <?php echo ucfirst($platform); ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Video Documentaries Section -->
<section id="videos-section" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <div class="section-tag">Watch</div>
            <h2 class="section-title-custom">Video Documentaries</h2>
            <p class="text-muted">Explore our video collection showcasing the journey of coastal development</p>
        </div>

        <div class="row g-4">
            <?php foreach ($videoItems as $video): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="gallery-card card">
                    <div class="card-img-wrapper video-thumbnail">
                        <img src="<?php echo $video['image']; ?>" class="card-img-top" alt="<?php echo htmlspecialchars($video['title']); ?>">
                        <div class="play-button">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div class="card-badge video">🎥 Video</div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title h5"><?php echo htmlspecialchars($video['title']); ?></h4>
                        <p class="card-text small"><?php echo htmlspecialchars($video['description']); ?></p>
                        <div class="d-flex gap-3 mb-2">
                            <div class="card-location">
                                <i class="bi bi-geo-alt" style="color: var(--primary-blue);"></i>
                                <?php echo htmlspecialchars($video['location']); ?>
                            </div>
                            <div class="card-date">
                                <i class="bi bi-calendar" style="color: var(--primary-blue);"></i>
                                <?php echo htmlspecialchars($video['date']); ?>
                            </div>
                        </div>
                        <a href="<?php echo $video['video_url']; ?>" class="watch-now-btn" target="_blank" rel="noopener noreferrer">
                            Watch on YouTube <i class="bi bi-box-arrow-up-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Stay Updated Section with Vertical Line -->
<section class="stay-updated-section py-5">
    <div class="container">
        <!-- Centered Section Header -->
        <div class="section-header" data-aos="fade-up">
            <div class="section-tag">Stay Updated</div>
            <h2 class="section-title-custom">Recent Events & Updates</h2>
            <p class="text-muted">Latest happenings from Jumuiya ya Kaunti za Pwani</p>
        </div>

        <!-- Vertical Line Content -->
        <div class="vertical-line-wrapper" data-aos="fade-up" data-aos-delay="100">
            <div class="vertical-line"></div>
            <div class="events-list">
                <?php foreach ($recentEvents as $event): 
                    $platform = detectPlatform($event['image'], $event['type'] ?? 'photo');
                    $platformUrl = $platform === 'facebook' ? 'https://web.facebook.com/JumuiyaKauntiZaPwani' : 
                                  ($platform === 'instagram' ? 'https://www.instagram.com/jumuiyapwani/' : 
                                  'https://www.youtube.com/watch?v=ZaE74xQkQoE');
                ?>
                <div class="event-card">
                    <div class="event-date"><?php echo htmlspecialchars($event['date']); ?></div>
                    <h5 class="event-title"><?php echo htmlspecialchars($event['title']); ?></h5>
                    <p class="small text-muted"><?php echo htmlspecialchars($event['description']); ?></p>
                    <div class="event-location">
                        <i class="bi bi-geo-alt" style="color: var(--primary-blue);"></i>
                        <?php echo htmlspecialchars($event['location']); ?>
                    </div>
                    <a href="<?php echo $platformUrl; ?>" class="view-post-btn" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-<?php echo $platform; ?>"></i> 
                        <?php echo isset($event['type']) && $event['type'] === 'video' ? 'Watch Video' : 'View Post'; ?> 
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Stay Connected Section -->
<section class="py-5" style="background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);">
    <div class="container text-center text-white">
        <h3 class="mb-3" data-aos="fade-up">Stay Connected with JKP</h3>
        <p class="mb-4" data-aos="fade-up" data-aos-delay="100">Follow us on social media for the latest updates, events, and stories from Jumuiya ya Kaunti za Pwani</p>
        
        <div class="social-links" data-aos="fade-up" data-aos-delay="200">
            <a href="https://web.facebook.com/JKPKE/?_rdc=1&_rdr#" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/jumuiyapwani/" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.youtube.com/watch?v=ZaE74xQkQoE" class="social-icon" target="_blank" rel="noopener noreferrer">
                <i class="bi bi-youtube"></i>
            </a>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';