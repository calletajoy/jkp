<?php
/**
 * pages/projects.php
 * Projects page listing all Jumuiya initiatives
 */

$pageTitle    = 'Our Projects';
$currentPage  = 'projects';
$heroTitle    = 'Our Projects';
$heroSubtitle = 'Driving Transformation Across the Coast';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
/* Project Cards Styling - Matching the fancy card style from home page */
.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    padding: 60px 0;
}

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

/* Breadcrumb */
.breadcrumb-nav {
    padding: 15px 0;
    background: #f8f9fa;
}

.breadcrumb {
    display: flex;
    list-style: none;
    padding: 0;
    margin: 0;
}

.breadcrumb li {
    font-size: 0.9rem;
}

.breadcrumb li:not(:last-child)::after {
    content: '/';
    margin: 0 10px;
    color: #999;
}

.breadcrumb a {
    color: var(--turquoise);
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.breadcrumb .active {
    color: #666;
}

/* Section Title */
.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 15px;
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.1rem;
}
</style>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb-nav">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">Projects</li>
        </ul>
    </div>
</div>

<!-- ===== Projects Introduction ===== -->
<section class="py-5">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Jumuiya Projects and Initiatives</h2>
            <p>Transforming Kenya's coastal region through strategic development projects</p>
        </div>
    </div>
</section>

<!-- ===== Projects Grid ===== -->
<section class="pb-5">
    <div class="container">
        <div class="projects-grid">
            <!-- Go Blue Project -->
            <div class="project-card-fancy" data-aos="fade-up">
                <div class="project-image">
                    <img src="/assets/images/goo-blu.png" alt="Go Blue Project">
                </div>
                <div class="project-content">
                    <h4 class="project-title">The Go Blue Project</h4>
                    <p class="project-desc">A four-year EU-funded project supporting Kenya's coastal economic development and blue economy strategy through sustainable marine resource utilization.</p>
                    <a href="/go-blue" class="read-more">
                        Read More <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- She Stands Project -->
            <div class="project-card-fancy" data-aos="fade-up" data-aos-delay="100">
                <div class="project-image">
                    <img src="/assets/images/she stands.png" alt="She Stands Project">
                </div>
                <div class="project-content">
                    <h4 class="project-title">She Stands Project</h4>
                    <p class="project-desc">A faith-based collaborative initiative equipping and inspiring Kenyan women with biblical principles for everyday living and community leadership.</p>
                    <a href="/she-stands" class="read-more">
                        Read More <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Jumuiya Innovation Lab -->
            <div class="project-card-fancy" data-aos="fade-up" data-aos-delay="200">
                <div class="project-image">
                    <img src="/assets/images/inno-lab.png" alt="Jumuiya Innovation Lab">
                </div>
                <div class="project-content">
                    <h4 class="project-title">Jumuiya Innovation Lab</h4>
                    <p class="project-desc">Six innovation labs established as flagship projects to transform the region's economic landscape under the Jumuiya 2030 framework.</p>
                    <a href="/innovation-lab" class="read-more">
                        Read More <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
            
            <!-- Jumuiya 2030 -->
            <div class="project-card-fancy" data-aos="fade-up" data-aos-delay="300">
                <div class="project-image">
                    <img src="/assets/images/jum 2030.png" alt="Jumuiya 2030">
                </div>
                <div class="project-content">
                    <h4 class="project-title">Jumuiya 2030</h4>
                    <p class="project-desc">The regional economic development strategy for 2020-2030, outlining the blueprint for sustainable growth and shared prosperity across coastal counties.</p>
                    <a href="/jum_2030" class="read-more">
                        Read More <i class="bi bi-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up">
    <div class="images-and-overlay">
        <img class="img-fluid" src="/assets/images/01_home/best-city/image-footer.png" alt="Jumuiya Coast Region">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white">
                    <span class="cssanimation lePopUp sequence">Partner With Us</span><br>
                    <span class="cssanimation lePopUp sequence">on These Initiatives</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto;">
                    Join us in transforming Kenya's coastal region through sustainable development projects.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="/services">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>