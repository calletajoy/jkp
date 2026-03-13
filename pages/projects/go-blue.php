<?php
/**
 * pages/projects/go-blue.php
 * Go Blue Project Page - EU Funded Blue Economy Initiative
 */

$pageTitle    = 'Go Blue Project';
$currentPage  = 'go-blue';
$heroTitle    = 'Go Blue Project';
$heroSubtitle = 'EU-Funded Coastal Development Initiative';

ob_start();

include __DIR__ . '/../../partials/page-hero.php';
?>

<style>
/* Download Section Styles - Same as stakeholders page */
.download-rectangles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.download-rectangle {
    width: 180px;
    background: linear-gradient(135deg, #0d6efd, #0a58ca);
    border-radius: 12px;
    padding: 20px 15px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.download-rectangle:nth-child(2) { background: linear-gradient(135deg, #198754, #146c43); }
.download-rectangle:nth-child(3) { background: linear-gradient(135deg, #ffc107, #cc9a06); }
.download-rectangle:nth-child(4) { background: linear-gradient(135deg, #dc3545, #b02a37); }
.download-rectangle:nth-child(5) { background: linear-gradient(135deg, #0dcaf0, #0aa2c0); }
.download-rectangle:nth-child(6) { background: linear-gradient(135deg, #6f42c1, #5936a2); }
.download-rectangle:nth-child(7) { background: linear-gradient(135deg, #fd7e14, #cc6600); }

.download-rectangle:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.download-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

.download-header img {
    width: 30px;
    height: 30px;
    object-fit: contain;
}

.download-rectangle h4 {
    color: white;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
}

.download-rectangle p {
    color: rgba(255,255,255,0.8);
    font-size: 0.75rem;
    margin: 0;
}

/* Result Cards - Simple cards with read more */
.result-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 40px;
}

.result-card {
    width: 300px;
    background: white;
    border-radius: 15px;
    padding: 30px 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-align: center;
}

.result-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.result-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
}

.result-card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.result-card .read-more {
    color: #0d6efd;
    text-decoration: none;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s ease;
}

.result-card .read-more:hover {
    color: #0a58ca;
    gap: 10px;
}

/* Navigation breadcrumb */
.breadcrumb-nav {
    padding: 15px 0;
    background: #f8f9fa;
    margin-bottom: 30px;
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
    color: #0d6efd;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.breadcrumb .active {
    color: #666;
}

/* Intro section */
.go-blue-intro {
    padding: 40px 0;
    background: white;
}

.intro-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.intro-content h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 20px;
    color: #333;
}

.intro-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 20px;
}

.steering-committee {
    background: #f8f9fa;
    padding: 15px 20px;
    border-radius: 10px;
    margin-top: 30px;
    font-weight: 500;
}

/* Components section */
.components-section {
    padding: 60px 0;
    background: #f8f9fa;
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
}

/* Counties Resources section */
.counties-resources {
    padding: 60px 0;
    background: white;
}

/* Hidden downloads */
.download-links {
    display: none;
}
</style>

<!-- Breadcrumb Navigation -->
<div class="breadcrumb-nav">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/services">Services</a></li>
            <li class="active">Go Blue Project</li>
        </ul>
    </div>
</div>

<!-- ===== Go Blue Introduction ===== -->
<section class="go-blue-intro">
    <div class="container">
        <div class="intro-content" data-aos="fade-up">
            <h1>The Go Blue Project</h1>
            <p>Go Blue is a four-year project funded by the European Union (EU) to support Kenya's Coastal Economic Development agenda and Blue Economy strategy through coastal urban actions. Development and implementation of the Go Blue project is a deliberate bottom-up partnership and inclusive organizational formation of the Kenya Coastal communities, County Governments, the National Government of Kenya, and the European Union.</p>
            
            <div class="steering-committee" data-aos="fade-up" data-aos-delay="100">
                <p class="mb-0">A joint steering committee manages the Go Blue Implementation with a technical committee of experts from the following member states (Germany, France, Portugal, Italy) and the United Nations.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== Go Blue Components ===== -->
<section class="components-section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Go Blue Components</h2>
            <p>Enhancing sustained, inclusive and sustainable economic growth with job creation and employment impact. Indirect management with Italian Agency for Development Cooperation, German Cooperation, Portuguese Camões (AICS)</p>
        </div>

        <div class="result-cards">
            <!-- Component 1 -->
            <div class="result-card" data-aos="fade-right">
                <h3>GoBlue Component 1</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="#" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <!-- Component 2 -->
            <div class="result-card" data-aos="fade-up">
                <h3>GoBlue Component 2</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="#" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <!-- Component 3 -->
            <div class="result-card" data-aos="fade-left">
                <h3>GoBlue Component 3</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="#" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- ===== Counties Resources Section (Same as Stakeholders) ===== -->
<section class="counties-resources">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Counties Resources</h2>
            <p>View JKP Counties Resources below</p>
        </div>

        <div class="download-rectangles">
            <!-- JKP Counties Resources (Complete Pack) -->
            <div class="download-rectangle" data-aos="fade-up">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>JKP Counties</h4>
                <p>Complete Resource Pack</p>
            </div>
            
            <!-- GoBlue Mombasa -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="50">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Mombasa</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Kwale -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="100">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Kwale</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Kilifi -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="150">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Kilifi</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Tana River -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="200">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Tana River</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Lamu -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="250">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Lamu</h4>
                <p>County Documentation</p>
            </div>
            
            <!-- GoBlue Taita Taveta -->
            <div class="download-rectangle" data-aos="fade-up" data-aos-delay="300">
                <div class="download-header">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>GoBlue Taita Taveta</h4>
                <p>County Documentation</p>
            </div>
        </div>
        
        <!-- Hidden Download Links (Same paths as stakeholders) -->
        <div class="download-links">
            <a id="download-jkp" href="/assets/content-files/jkp-counties-complete-resources.pdf" download></a>
            <a id="download-mombasa" href="/assets/content-files/Brochure-Mombasa.pdf" download></a>
            <a id="download-kwale" href="/assets/content-files/Brochure-Kwale.pdf" download></a>
            <a id="download-kilifi" href="/assets/content-files/Brochure-Kilifi.pdf" download></a>
            <a id="download-tana" href="/assets/content-files/Brochure-Tana-River.pdf" download></a>
            <a id="download-lamu" href="/assets/content-files/Brochure-Lamu.pdf" download></a>
            <a id="download-taita" href="/assets/content-files/Brochure-Taita-Taveta.pdf" download></a>
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up" style="margin-top: 0;">
    <div class="images-and-overlay">
        <img class="img-fluid" src="/assets/images/01_home/best-city/image-footer.png" alt="Jumuiya Coast Region">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white">
                    <span class="cssanimation lePopUp sequence">Learn More About</span><br>
                    <span class="cssanimation lePopUp sequence">Go Blue Components</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto;">
                    Explore the three components of the Go Blue project and their impact across the six coastal counties.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="document.getElementById('download-jkp').click(); return false;">Download Resources <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Add click handlers for download rectangles (same as stakeholders)
document.addEventListener('DOMContentLoaded', function() {
    const rectangles = document.querySelectorAll('.download-rectangle');
    const downloads = [
        'download-jkp',
        'download-mombasa',
        'download-kwale',
        'download-kilifi',
        'download-tana',
        'download-lamu',
        'download-taita'
    ];
    
    rectangles.forEach((rect, index) => {
        rect.addEventListener('click', function() {
            document.getElementById(downloads[index]).click();
        });
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../../layout.php';