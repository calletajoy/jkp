<?php
/**
 * pages/she-stands.php
 * She Stands Project Page - Women Empowerment Initiative
 */

$pageTitle    = 'She Stands Project';
$currentPage  = 'she-stands';
$heroTitle    = 'She Stands Project';
$heroSubtitle = 'Empowering Women, Transforming Communities';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
/* JKP Color Palette */
:root {
    --turquoise: #00CED1;
    --soft-blue: #5C7EC0;
    --deep-blue: #3B5B9A;
    --navy: #273C67;
}

/* Project Section */
.project-section {
    padding: 60px 0;
    background: white;
}

.project-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
}

.project-image {
    flex: 1;
    min-width: 300px;
}

.project-image img {
    width: 100%;
    max-width: 500px;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
    display: block;
    margin: 0 auto;
}

.project-image img:hover {
    transform: scale(1.02);
}

.project-content {
    flex: 1;
    min-width: 300px;
}

.project-content h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 25px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.project-content h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.project-description {
    background: linear-gradient(135deg, rgba(0,206,209,0.05) 0%, rgba(92,126,192,0.05) 100%);
    padding: 30px;
    border-radius: 20px;
    border-left: 4px solid var(--turquoise);
    margin-bottom: 30px;
}

.project-description p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #444;
    font-family: 'Montserrat', sans-serif;
    margin: 0;
    font-style: italic;
}

.project-details {
    margin-bottom: 30px;
}

.detail-item {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.detail-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, rgba(0,206,209,0.1), rgba(92,126,192,0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--turquoise);
    font-size: 1.2rem;
}

.detail-text {
    font-family: 'Montserrat', sans-serif;
    color: #666;
    font-size: 1rem;
}

.detail-text strong {
    color: var(--navy);
    font-weight: 600;
}

/* Download Section */
.download-section {
    padding: 60px 0;
    background: #f8f9fa;
}

.download-header {
    text-align: center;
    margin-bottom: 40px;
}

.download-header h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.download-header p {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.1rem;
}

.download-single {
    display: flex;
    justify-content: center;
    max-width: 400px;
    margin: 0 auto;
}

.download-item-large {
    width: 100%;
    background: white;
    border-radius: 16px;
    padding: 30px 25px;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.15);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    border: 1px solid rgba(0,0,0,0.05);
}

.download-item-large:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 45px -15px var(--turquoise);
    border-color: var(--turquoise);
}

.download-item-large .download-icons {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.download-item-large .download-icons img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.download-item-large h4 {
    color: var(--navy);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 8px;
    font-family: 'Playfair Display', serif;
}

.download-item-large p {
    color: #666;
    font-size: 0.95rem;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

/* Hidden downloads */
.download-links {
    display: none;
}

/* CTA Button */
.cityWall-btn a {
    display: inline-block;
    padding: 12px 30px;
    border-radius: 50px;
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    font-family: 'Montserrat', sans-serif;
}

.cityWall-btn a:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px rgba(0,0,0,0.2);
}

/* Animation */
[data-aos="fade-right"] {
    opacity: 0;
    transform: translateX(-30px);
    transition: all 0.6s ease;
}

[data-aos="fade-right"].aos-animate {
    opacity: 1;
    transform: translateX(0);
}

[data-aos="fade-left"] {
    opacity: 0;
    transform: translateX(30px);
    transition: all 0.6s ease;
}

[data-aos="fade-left"].aos-animate {
    opacity: 1;
    transform: translateX(0);
}

[data-aos="fade-up"] {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s ease;
}

[data-aos="fade-up"].aos-animate {
    opacity: 1;
    transform: translateY(0);
}

/* Responsive */
@media (max-width: 768px) {
    .project-wrapper {
        flex-direction: column;
    }
    
    .project-content h1 {
        font-size: 2rem;
    }
}
</style>

<!-- ===== Project Section ===== -->
<section class="project-section">
    <div class="container">
        <div class="project-wrapper">
            <!-- Left side - Image -->
            <div class="project-image" data-aos="fade-right">
                <img src="/assets/images/she stands.png" alt="She Stands Project">
            </div>
            
            <!-- Right side - Content -->
            <div class="project-content" data-aos="fade-left">
                <h1>She Stands Project</h1>
                
                <div class="project-description">
                    <p>A faith-based collaborative initiative equipping and inspiring Kenyan women with biblical principles for everyday living and community leadership.</p>
                </div>
                
                <div class="project-details">
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Target Audience:</strong> Kenyan women across the coastal region
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Focus Areas:</strong> Faith-based empowerment, leadership development, community building
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Region:</strong> All six coastal counties - Mombasa, Kwale, Kilifi, Tana River, Lamu, Taita Taveta
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Download Section ===== -->
<section class="download-section">
    <div class="container">
        <div class="download-header" data-aos="fade-up">
            <h2>Project Resources</h2>
            <p>Download the She Stands project brochure</p>
        </div>

        <div class="download-single">
            <!-- Single Brochure -->
            <div class="download-item-large" data-aos="fade-up" onclick="window.open('/assets/content-files/SHE STANDS KENYA - Concept sharable version-1.pdf', '_blank');">
                <div class="download-icons">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>She Stands Project Brochure</h4>
                <p>Complete Project Overview</p>
            </div>
        </div>

        <!-- Hidden Download Link (optional - can use the onclick above instead) -->
        <div class="download-links">
            <a id="download-brochure" href="/assets/content-files/SHE STANDS KENYA - Concept sharable version-1.pdf" download></a>
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up" style="margin-top: 60px;">
    <div class="images-and-overlay">
        <img class="img-fluid" src="/assets/images/01_home/best-city/image-footer.png" alt="Jumuiya Coast Region">
        <div class="overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.9) 0%, rgba(0,206,209,0.7) 100%);"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white" style="font-family: 'Playfair Display', serif;">
                    <span class="cssanimation lePopUp sequence">Support Women Empowerment</span><br>
                    <span class="cssanimation lePopUp sequence">in Coastal Communities</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Join us in empowering women through faith-based initiatives and leadership development.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="window.open('assets/content-files/SHE STANDS KENYA - Concept sharable version-1.pdf', '_blank'); return false;" style="background: var(--navy);">Download Brochure <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>