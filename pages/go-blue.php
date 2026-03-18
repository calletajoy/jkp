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
/* JKP Color Palette */
:root {
    --turquoise: #00CED1;
    --soft-blue: #5C7EC0;
    --deep-blue: #3B5B9A;
    --navy: #273C67;
}

/* Download Section Styles */
.download-rectangles {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-top: 20px;
}

.download-rectangle {
    width: 160px;
    background: var(--turquoise);
    border-radius: 12px;
    padding: 15px 12px;
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
    margin-bottom: 8px;
}

.download-header img {
    width: 25px;
    height: 25px;
    object-fit: contain;
}

.download-rectangle h4 {
    color: white;
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 3px;
    font-family: 'Playfair Display', serif;
}

.download-rectangle p {
    color: rgba(255,255,255,0.9);
    font-size: 0.7rem;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

/* Result Cards */
.result-cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin-top: 50px;
}

.result-card {
    width: 300px;
    background: white;
    border-radius: 15px;
    padding: 30px 25px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
    text-align: center;
    position: relative;
    overflow: hidden;
    opacity: 0;
    animation: fadeInUp 1s ease forwards;
}

/* Different animations for each card */
.result-card:nth-child(1) {
    animation-name: fadeInLeft;
}

.result-card:nth-child(2) {
    animation-name: fadeInUp;
}

.result-card:nth-child(3) {
    animation-name: fadeInRight;
}

/* Continuous floating after initial fade-in */
.result-card {
    animation-iteration-count: 1;
}

.result-card::after {
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
    transform: translateY(-10px);
    box-shadow: 0 25px 45px -15px var(--turquoise);
}

.result-card:hover::after {
    transform: scaleX(1);
}

/* Continuous gentle movement while in view */
.result-card {
    animation: gentleFloat 4s ease-in-out infinite;
    animation-delay: 1s;
}

.result-card:nth-child(1) {
    animation-delay: 1.2s;
}

.result-card:nth-child(2) {
    animation-delay: 1.4s;
}

.result-card:nth-child(3) {
    animation-delay: 1.6s;
}

@keyframes gentleFloat {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px -15px var(--turquoise);
    }
    100% {
        transform: translateY(0px);
    }
}

@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
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

/* NEW STYLES FOR INTERACTIVE COMPONENTS SECTION */
.interactive-components {
    padding: 60px 0;
    background: #f0f7fa;
}

.component-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    margin: 40px 0 30px;
}

.component-item {
    width: 280px;
    background: white;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.component-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 35px -10px var(--turquoise);
    border-color: var(--turquoise);
}

.component-item.active {
    border-color: var(--navy);
    background: linear-gradient(135deg, rgba(39,60,103,0.02) 0%, rgba(0,206,209,0.02) 100%);
}

.component-item h3 {
    color: var(--navy);
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    margin-bottom: 10px;
}

.component-item p {
    color: var(--soft-blue);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.9rem;
    margin: 0;
}

.component-description {
    max-width: 900px;
    margin: 30px auto 0;
    padding: 30px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px -10px rgba(0,0,0,0.1);
    border-left: 4px solid var(--turquoise);
    display: none;
}

.component-description.active {
    display: block;
    animation: fadeIn 0.5s ease;
}

.component-description p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--navy);
    font-family: 'Montserrat', sans-serif;
    margin: 0;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
/* END NEW STYLES */

/* Intro section */
.go-blue-intro {
    padding: 60px 0 40px;
    background: white;
}

.intro-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    margin-bottom: 40px;
}

.intro-left {
    flex: 1;
    min-width: 300px;
}

.intro-left h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 25px;
    color: var(--navy);
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.intro-left h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.intro-left p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
}

.steering-committee {
    background: linear-gradient(135deg, rgba(0,206,209,0.08) 0%, rgba(92,126,192,0.08) 100%);
    padding: 25px 30px;
    border-radius: 10px;
    margin-top: 20px;
    border-left: 4px solid var(--turquoise);
    font-family: 'Montserrat', sans-serif;
    color: var(--navy);
    font-weight: 500;
    box-shadow: 0 10px 25px -10px rgba(0,0,0,0.1);
}

.steering-committee p {
    margin-bottom: 0;
    font-size: 1rem;
}

/* Partners Image - Below Intro */
.partners-image-container {
    width: 100%;
    margin: 30px 0 50px;
    text-align: center;
}

.partners-image {
    max-width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.partners-image:hover {
    transform: scale(1.02);
}

/* Right side - Resources */
.intro-right {
    flex: 0.8;
    min-width: 350px;
    background: #f8f9fa;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.15);
}

.intro-right h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
}

.intro-right .subtitle {
    color: var(--turquoise);
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 0.85rem;
    font-weight: 500;
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
}

/* Project Description Section */
.project-description {
    padding: 60px 0;
    background: #f8f9fa;
}

.description-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
}

.description-content {
    flex: 1;
    min-width: 300px;
}

.description-content h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 30px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.description-content h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.description-stats {
    display: flex;
    flex-direction: column;
    gap: 25px;
    margin-top: 30px;
}

.stat-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, rgba(0,206,209,0.1), rgba(92,126,192,0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: var(--turquoise);
    border: 1px solid rgba(0,206,209,0.3);
}

.stat-text h4 {
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--navy);
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}

.stat-text p {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
}

.description-image {
    flex: 0.8;
    min-width: 300px;
}

.description-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
}

/* Components section */
.components-section {
    padding: 80px 0;
    background: white;
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
    position: relative;
    display: inline-block;
}

.section-title h2::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.section-title p {
    color: #666;
    max-width: 800px;
    margin: 20px auto 0;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
}

/* Hidden downloads */
.download-links {
    display: none;
}
</style>

<!-- ===== Go Blue Introduction with Resources on Right ===== -->
<section class="go-blue-intro">
    <div class="container">
        <div class="intro-wrapper">
            <!-- Left side - Text Content -->
            <div class="intro-left" data-aos="fade-right">
                <h1>The Go Blue Project</h1>
                <p>Go Blue is a four-year project funded by the European Union (EU) to support Kenya's Coastal Economic Development agenda and Blue Economy strategy through coastal urban actions. Development and implementation of the Go Blue project is a deliberate bottom-up partnership and inclusive organizational formation of the Kenya Coastal communities, County Governments, the National Government of Kenya, and the European Union.</p>
                
                <div class="steering-committee">
                    <p>A joint steering committee manages the Go Blue Implementation with a technical committee of experts from the following member states (Germany, France, Portugal, Italy) and the United Nations.</p>
                </div>
            </div>
            
            <!-- Right side - Resources -->
            <div class="intro-right" data-aos="fade-left">
                <div class="subtitle">Resources</div>
                <h3>Counties Resources</h3>
                <p style="font-family: 'Montserrat', sans-serif; color: #666; margin-bottom: 25px;">View JKP Counties Resources below</p>

                <div class="download-rectangles">
                    <!-- JKP Counties Resources (Complete Pack) -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>JKP Counties</h4>
                        <p>Complete Resource Pack</p>
                    </div>
                    
                    <!-- GoBlue Mombasa -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Mombasa</h4>
                        <p>County Documentation</p>
                    </div>
                    
                    <!-- GoBlue Kwale -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Kwale</h4>
                        <p>County Documentation</p>
                    </div>
                    
                    <!-- GoBlue Kilifi -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Kilifi</h4>
                        <p>County Documentation</p>
                    </div>
                    
                    <!-- GoBlue Tana River -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Tana River</h4>
                        <p>County Documentation</p>
                    </div>
                    
                    <!-- GoBlue Lamu -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Lamu</h4>
                        <p>County Documentation</p>
                    </div>
                    
                    <!-- GoBlue Taita Taveta -->
                    <div class="download-rectangle">
                        <div class="download-header">
                            <img src="/assets/images/icons8-eye.gif" alt="Preview">
                            <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                        </div>
                        <h4>GoBlue Taita Taveta</h4>
                        <p>County Documentation</p>
                    </div>
                </div>
                
                <!-- Hidden Download Links -->
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
        </div>
        
        <!-- Partners Image - Placed below the intro text and resources -->
        <div class="partners-image-container" data-aos="fade-up">
            <img src="/assets/images/go blue pic.png" alt="Go Blue Project Partners" class="partners-image">
            <!-- Replace with your actual partners image path -->
        </div>
    </div>
</section>

<!-- ===== Project Description Section ===== -->
<section class="project-description">
    <div class="container">
        <div class="description-wrapper">
            <div class="description-content" data-aos="fade-right">
                <h2>Project Description</h2>
                <p style="font-family: 'Montserrat', sans-serif; color: #666; line-height: 1.8; margin-bottom: 30px;">Go Blue is a four-year (2021–2024) project funded by the European Union (EU) to support sustainable coastal urban development across Kenya's six coastal counties.</p>
                
                <div class="description-stats">
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="stat-text">
                            <h4>Project Duration</h4>
                            <p>2021 – 2024 | Four-year implementation phase</p>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-flag"></i>
                        </div>
                        <div class="stat-text">
                            <h4>Funded By</h4>
                            <p>European Union (EU) through the Go Blue Action</p>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="stat-text">
                            <h4>JKP Counties</h4>
                            <p>Mombasa, Kwale, Kilifi, Tana River, Lamu, Taita Taveta</p>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <div class="stat-text">
                            <h4>Overall Objective</h4>
                            <p>To contribute to coastal urban development through sustainable blue economy initiatives</p>
                        </div>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
</section>

<!-- ===== Go Blue Components ===== -->

<!-- ===== NEW INTERACTIVE GO BLUE COMPONENTS SECTION ===== -->
<section class="interactive-components">
    <div class="container">
        <div class="section-title">
            <h2>Go Blue Components</h2>
             <p>Enhancing sustained, inclusive and sustainable economic growth with job creation and employment impact. Indirect management with Italian Agency for Development Cooperation, German Cooperation, Portuguese Camões (AICS)</p>
            
        </div>

        <div class="component-grid">
            <!-- Component 1 -->
            <div class="component-item" onclick="showComponent(1)">
                <h3>Component 1</h3>
                <p>Economic Growth & Employment</p>
            </div>
            
            <!-- Component 2 -->
            <div class="component-item" onclick="showComponent(2)">
                <h3>Component 2</h3>
                <p>Sea-Land Planning & Management</p>
            </div>
            
            <!-- Component 3 -->
            <div class="component-item" onclick="showComponent(3)">
                <h3>Component 3</h3>
                <p>Maritime Governance</p>
            </div>
        </div>

        <!-- Component Descriptions -->
        <div id="comp1-description" class="component-description">
            <p>Enhancing sustained, inclusive and sustainable economic growth with job creation and employment impact. Indirect management with Italian Agency for Development Cooperation, German Cooperation, Portuguese Camões (AICS)</p>
        </div>

        <div id="comp2-description" class="component-description">
            <p>Promoting the development and mainstreaming of a participatory, inclusive and integrated approach to sea-land planning and management. Indirect management with United Nations</p>
        </div>

        <div id="comp3-description" class="component-description">
            <p>Strengthening maritime governance through effective and integrated maritime law enforcement. Indirect management with FRANCE</p>
        </div>
    </div>
</section>

<section class="components-section">
    <div class="container">
        <div class="section-title">
            <h2>Results-</h2>
           
        </div>

        <div class="result-cards">
            <!-- Component 1 -->
            <div class="result-card">
                <h3>GoBlue Component 1</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="pages/component-1.php" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
            </div>
            
            <!-- Component 2 -->
            <div class="result-card">
                <h3>GoBlue Component 2</h3>
                <p>Kenya Coastal Counties - Mombasa, Kilifi, Kwale, Tana River, Lamu & Taita Taveta</p>
                <a href="pages/component-2.php" class="read-more">Read more <i class="bi bi-arrow-right"></i></a>
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
// Add click handlers for download rectangles
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

// Function to show component descriptions
function showComponent(compNumber) {
    // Hide all descriptions
    for (let i = 1; i <= 3; i++) {
        const desc = document.getElementById('comp' + i + '-description');
        const item = document.querySelectorAll('.component-item')[i-1];
        if (desc) desc.classList.remove('active');
        if (item) item.classList.remove('active');
    }
    
    // Show selected description
    const selectedDesc = document.getElementById('comp' + compNumber + '-description');
    const selectedItem = document.querySelectorAll('.component-item')[compNumber-1];
    if (selectedDesc) selectedDesc.classList.add('active');
    if (selectedItem) selectedItem.classList.add('active');
}
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>