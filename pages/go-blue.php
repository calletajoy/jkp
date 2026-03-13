<?php
/**
 * pages/go-blue.php
 * Go Blue Project Page - EU Funded Blue Economy Initiative
 */

$pageTitle    = 'Go Blue Project';
$currentPage  = 'go-blue';
$heroTitle    = 'Go Blue Project';
$heroSubtitle = 'EU-Funded Coastal Development Initiative';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<style>
/* Download Section Styles - Using JKP Color Palette */
:root {
    --turquoise: #00CED1;
    --soft-blue: #5C7EC0;
    --deep-blue: #3B5B9A;
    --navy: #273C67;
}

.download-rectangles {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
}

.download-rectangle {
    width: 180px;
    background: var(--turquoise);
    border-radius: 12px;
    padding: 20px 15px;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.2);
}

/* Different shades from your palette */
.download-rectangle:nth-child(2) { background: var(--soft-blue); }
.download-rectangle:nth-child(3) { background: var(--deep-blue); }
.download-rectangle:nth-child(4) { background: var(--navy); }
.download-rectangle:nth-child(5) { background: #4A6FA5; }
.download-rectangle:nth-child(6) { background: #6B8CBE; }
.download-rectangle:nth-child(7) { background: #8AA9D9; }

.download-rectangle:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px -10px rgba(0,206,209,0.4);
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
    /* Removed the white filter - GIFs now visible in original colors */
}

.download-rectangle h4 {
    color: white;
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}

.download-rectangle p {
    color: rgba(255,255,255,0.9);
    font-size: 0.75rem;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
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
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    text-align: center;
    position: relative;
    overflow: hidden;
    animation: float 3s ease-in-out infinite;
}

.result-card:nth-child(2) {
    animation-delay: 0.5s;
}

.result-card:nth-child(3) {
    animation-delay: 1s;
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-10px);
        box-shadow: 0 25px 45px -15px var(--turquoise);
    }
    100% {
        transform: translateY(0px);
    }
}

.result-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    transform: scaleX(0);
    transition: transform 0.4s ease;
}

.result-card:hover {
    animation: none;
    transform: translateY(-10px);
    box-shadow: 0 25px 45px -15px var(--turquoise);
}

.result-card:hover::before {
    transform: scaleX(1);
}

.result-card h3 {
    font-size: 1.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: var(--navy);
    font-family: 'Playfair Display', serif;
}

.result-card p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
    font-family: 'Montserrat', sans-serif;
}

.result-card .read-more {
    color: var(--turquoise);
    text-decoration: none;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: all 0.3s ease;
    font-family: 'Montserrat', sans-serif;
}

.result-card .read-more:hover {
    color: var(--navy);
    gap: 10px;
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
    color: var(--navy);
    font-family: 'Playfair Display', serif;
}

.intro-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #666;
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
}

.steering-committee {
    background: linear-gradient(135deg, rgba(0,206,209,0.1) 0%, rgba(92,126,192,0.1) 100%);
    padding: 20px 30px;
    border-radius: 10px;
    margin-top: 30px;
    font-weight: 500;
    border-left: 4px solid var(--turquoise);
    font-family: 'Montserrat', sans-serif;
    color: var(--navy);
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
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.section-title p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-family: 'Montserrat', sans-serif;
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

/* Section title fancy */
.section-title-fancy {
    text-align: center;
    margin-bottom: 3rem;
}

.section-title-fancy .subtitle {
    color: var(--turquoise);
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 0.5rem;
    font-family: 'Montserrat', sans-serif;
}
</style>

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
            <div class="result-card">
                <h3>GoBlue Component 1</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="#" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <!-- Component 2 -->
            <div class="result-card">
                <h3>GoBlue Component 2</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="#" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <!-- Component 3 -->
            <div class="result-card">
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
        <div class="section-title-fancy" data-aos="fade-up">
            <div class="subtitle">Resources</div>
            <h2 style="font-family: 'Playfair Display', serif; color: var(--navy);">Counties Resources</h2>
            <p style="font-family: 'Montserrat', sans-serif; color: #666;">View JKP Counties Resources below</p>
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
        <div class="overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.9) 0%, rgba(0,206,209,0.7) 100%);"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white" style="font-family: 'Playfair Display', serif;">
                    <span class="cssanimation lePopUp sequence">Learn More About</span><br>
                    <span class="cssanimation lePopUp sequence">Go Blue Components</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Explore the three components of the Go Blue project and their impact across the six coastal counties.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="document.getElementById('download-jkp').click(); return false;" style="background: var(--navy);">Download Resources <i class="bi bi-download"></i></a>
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
require __DIR__ . '/../layout.php';
?>