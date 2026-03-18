<?php
/**
 * pages/component-2.php
 * Component 2 Results Page - GoBlue Environment
 */

$pageTitle    = 'Result for component 2';
$currentPage  = 'component-2';
$heroTitle    = 'Result for component 2';
$heroSubtitle = 'Result for component 2';

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

/* Main Layout */
.component-result {
    padding: 60px 0;
    background: white;
}

.result-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 50px;
    margin-bottom: 40px;
}

/* Left Side Styles */
.result-left {
    flex: 1.2;
    min-width: 300px;
}

.result-left h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.result-left h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.result-left h2 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--soft-blue);
    margin: 25px 0 20px;
    font-family: 'Playfair Display', serif;
}

.result-left p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 25px;
    font-family: 'Montserrat', sans-serif;
}

.result-image {
    width: 100%;
    margin: 20px 0;
    cursor: pointer;
    transition: transform 0.3s ease;
    display: inline-block;
}

.result-image:hover {
    transform: scale(1.02);
}

.result-image img {
    width: 100%;
    max-width: 600px;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    display: block;
}

.result-image:hover img {
    box-shadow: 0 25px 45px -15px var(--turquoise);
}

/* Optional: Add a subtle overlay effect on hover */
.result-image {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
}

.result-image::after {
    content: 'Visit UN-Habitat & UNEP →';
    position: absolute;
    bottom: -50px;
    left: 0;
    right: 0;
    background: linear-gradient(135deg, var(--navy), var(--deep-blue));
    color: white;
    text-align: center;
    padding: 10px;
    font-family: 'Montserrat', sans-serif;
    font-size: 0.9rem;
    transition: bottom 0.3s ease;
    z-index: 2;
}

.result-image:hover::after {
    bottom: 0;
}

/* Right Side Styles */
.result-right {
    flex: 0.8;
    min-width: 300px;
    background: linear-gradient(135deg, rgba(0,206,209,0.05) 0%, rgba(92,126,192,0.05) 100%);
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.15);
    border-left: 4px solid var(--turquoise);
    margin-top: 100px;
    height: fit-content;
}

.result-right h3 {
    font-size: 2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 25px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 10px;
}

.result-right h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: var(--turquoise);
}

.partner-info {
    margin-bottom: 30px;
}

.partner-name {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--deep-blue);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.contact-details {
    margin-bottom: 30px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 12px;
    font-family: 'Montserrat', sans-serif;
    color: #555;
}

.contact-item i {
    color: var(--turquoise);
    width: 20px;
    font-size: 1.1rem;
}

/* Brochure Section */
.brochure-section {
    margin-top: 30px;
    padding-top: 25px;
    border-top: 1px solid rgba(0,0,0,0.1);
}

.brochure-section h4 {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.brochure-section p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
}

.download-btn {
    display: inline-block;
    padding: 12px 30px;
    background: var(--turquoise);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.download-btn:hover {
    background: var(--navy);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px -5px rgba(0,206,209,0.4);
}

/* Characteristics Section */
.characteristics-section {
    margin-top: 40px;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 20px;
}

.characteristics-section h3 {
    font-size: 1.8rem;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 10px;
}

.characteristics-section h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
}

.characteristics-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 25px;
}

.characteristic-item {
    background: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 5px 15px -5px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.characteristic-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px -5px var(--turquoise);
}

.characteristic-item h4 {
    color: var(--navy);
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
}

.characteristic-item p {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.6;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

/* Hidden download links */
.download-links {
    display: none;
}

/* Responsive */
@media (max-width: 768px) {
    .result-right {
        margin-top: 30px;
    }
}
</style>

<!-- ===== Component 2 Results Section ===== -->
<section class="component-result">
    <div class="container">
        <div class="result-wrapper">
            <!-- Left Side - Main Content -->
            <div class="result-left" data-aos="fade-right">
                <h1>Results for Component 2</h1>
                
                <h2>COMPONENT 2: GoBlue Environment</h2>
                
                <p>The Go Blue Project component 2, a joint effort of UN-Habitat and UNEP, is a result of a partnership between the European Union and the Kenyan government. Its mission is to advance the Blue Economy Agenda by conserving and responsibly utilizing the coastal and marine environment, as well as supporting effective and integrated maritime governance.</p>
                
                <p>The Go Blue | UN-Habitat and UNEP objective is to establish a connection between people, cities, and the ocean via creative land-sea planning and management for a sustainable and resilient Kenyan coast.</p>
                
                <!-- Clickable Image Below Text - Links to UN-Habitat & UNEP -->
                <a href="pages/unep-habitat.php" target="_blank" rel="noopener noreferrer" class="result-image" data-aos="fade-up">
                    <img src="/assets/images/un-habitat.png" alt="GoBlue Environment - UN-Habitat and UNEP">
                </a>
                <!-- Note: Update the image path above with your actual image -->
            </div>
            
            <!-- Right Side - Component Summary (Positioned Slightly Lower) -->
            <div class="result-right" data-aos="fade-left">
                <h3>Component Summary</h3>
                
                <div class="partner-info">
                    <div class="partner-name">AICS, GIZ & Camoes</div>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>1-982-782-5297</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-telephone"></i>
                            <span>1-982-125-6378</span>
                        </div>
                        <div class="contact-item">
                            <i class="bi bi-envelope"></i>
                            <span>support@jumuiya.org</span>
                        </div>
                    </div>
                </div>
                
                <div class="brochure-section">
                    <h4>Brochures</h4>
                    <p>View our 2020 Medical prospectus of brochure for an easy to read guide on all of the services offer.</p>
                    
                    <!-- Download Button - Stays on same page -->
                    <button class="download-btn" onclick="document.getElementById('brochure-link').click(); return false;">
                        Download Brochure <i class="bi bi-download ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Characteristics Section (Below Both Columns) -->
        <div class="characteristics-section" data-aos="fade-up">
            <h3>Characteristics</h3>
            
            <div class="characteristics-grid">
                <div class="characteristic-item">
                    <h4>Land-Sea Planning</h4>
                    <p>Integrated approach to coastal zone management connecting urban development with marine conservation</p>
                </div>
                
                <div class="characteristic-item">
                    <h4>Ecosystem Conservation</h4>
                    <p>Protection and restoration of critical coastal and marine ecosystems including mangroves and coral reefs</p>
                </div>
                
                <div class="characteristic-item">
                    <h4>Community Engagement</h4>
                    <p>Participatory approaches involving local communities in sustainable resource management</p>
                </div>
                
                <div class="characteristic-item">
                    <h4>Climate Resilience</h4>
                    <p>Building adaptive capacity of coastal communities to climate change impacts</p>
                </div>
                
                <div class="characteristic-item">
                    <h4>Blue Economy</h4>
                    <p>Sustainable economic activities including sustainable fisheries and eco-tourism</p>
                </div>
                
                <div class="characteristic-item">
                    <h4>Governance Framework</h4>
                    <p>Strengthening institutional capacity for integrated maritime governance</p>
                </div>
            </div>
        </div>
        
        <!-- Hidden Download Link -->
        <div class="download-links">
            <a id="brochure-link" href="/assets/brochures/component-2-brochure.pdf" download></a>
            <!-- Update with actual brochure path -->
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up" style="margin-top: 0;">
    <div class="images-and-overlay">
        <div class="overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.9) 0%, rgba(0,206,209,0.7) 100%);"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white" style="font-family: 'Playfair Display', serif;">
                    <span class="cssanimation lePopUp sequence">Learn More About</span><br>
                    <span class="cssanimation lePopUp sequence">Component 2</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Discover how UN-Habitat and UNEP are working together to advance the Blue Economy Agenda.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="document.getElementById('brochure-link').click(); return false;" style="background: var(--navy);">Download Brochure <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animation Script (if AOS is not already initialized) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS if available
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            once: true
        });
    }
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>