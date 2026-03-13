<?php
/**
 * pages/jum_2030.php
 * Jumuiya 2030 Page - Regional Economic Development Strategy
 */

$pageTitle    = 'Jumuiya 2030';
$currentPage  = 'jum_2030';
$heroTitle    = 'Jumuiya 2030';
$heroSubtitle = 'Regional Economic Development Strategy 2020-2030';

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

/* Intro Section - Title on Right */
.intro-section {
    padding: 60px 0;
    background: white;
}

.intro-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
}

.intro-left {
    flex: 1;
    min-width: 300px;
}

.intro-left h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 25px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.intro-left h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.intro-left p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    font-family: 'Montserrat', sans-serif;
}

.intro-right {
    flex: 0.8;
    min-width: 300px;
    text-align: right;
}

.intro-right h1 {
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
}

.intro-right .highlight-box {
    background: linear-gradient(135deg, rgba(0,206,209,0.08) 0%, rgba(92,126,192,0.08) 100%);
    padding: 30px;
    border-radius: 20px;
    border-right: 4px solid var(--turquoise);
    text-align: left;
}

.intro-right .highlight-box p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: var(--navy);
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    margin: 0;
}

/* Blueprint Section - Image on Right */
.blueprint-section {
    padding: 60px 0;
    background: #f8f9fa;
}

.blueprint-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
}

.blueprint-content {
    flex: 1;
    min-width: 300px;
}

.blueprint-content h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.blueprint-content h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.blueprint-content h3 {
    font-size: 1.8rem;
    font-weight: 600;
    color: var(--soft-blue);
    margin-bottom: 25px;
    font-family: 'Playfair Display', serif;
}

.blueprint-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    font-family: 'Montserrat', sans-serif;
    margin-bottom: 20px;
}

.blueprint-image {
    flex: 0.8;
    min-width: 300px;
}

.blueprint-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.blueprint-image img:hover {
    transform: scale(1.02);
}

/* Pillars Section */
.pillars-section {
    padding: 80px 0;
    background: white;
}

.section-header {
    text-align: center;
    margin-bottom: 60px;
}

.section-header .subtitle {
    color: var(--turquoise);
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 10px;
    font-family: 'Montserrat', sans-serif;
}

.section-header h2 {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
    position: relative;
    display: inline-block;
    padding-bottom: 15px;
}

.section-header h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.section-header p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
    font-size: 1.1rem;
}

/* Pillar Cards */
.pillars-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
    margin-top: 50px;
}

.pillar-card {
    background: white;
    border-radius: 15px;
    padding: 30px 25px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,0.05);
}

.pillar-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 45px -15px var(--turquoise);
}

.pillar-card::before {
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

.pillar-card:hover::before {
    transform: scaleX(1);
}

.pillar-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(0,206,209,0.1), rgba(92,126,192,0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 2rem;
    color: var(--turquoise);
    transition: all 0.3s ease;
}

.pillar-card:hover .pillar-icon {
    transform: scale(1.1) rotate(5deg);
    color: var(--deep-blue);
}

.pillar-card h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 12px;
    font-family: 'Playfair Display', serif;
    line-height: 1.4;
}

.pillar-card p {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    font-size: 0.95rem;
    margin: 0;
}

/* Empty pillars (those without description) get a subtle style */
.pillar-card p:empty {
    display: none;
}

/* Different icon colors for each pillar - using nth-child */
.pillar-card:nth-child(1) .pillar-icon { color: #00CED1; background: rgba(0,206,209,0.1); }
.pillar-card:nth-child(2) .pillar-icon { color: #5C7EC0; background: rgba(92,126,192,0.1); }
.pillar-card:nth-child(3) .pillar-icon { color: #3B5B9A; background: rgba(59,91,154,0.1); }
.pillar-card:nth-child(4) .pillar-icon { color: #273C67; background: rgba(39,60,103,0.1); }
.pillar-card:nth-child(5) .pillar-icon { color: #4A6FA5; background: rgba(74,111,165,0.1); }
.pillar-card:nth-child(6) .pillar-icon { color: #6B8CBE; background: rgba(107,140,190,0.1); }
.pillar-card:nth-child(7) .pillar-icon { color: #8AA9D9; background: rgba(138,169,217,0.1); }
.pillar-card:nth-child(8) .pillar-icon { color: #00CED1; background: rgba(0,206,209,0.1); }
.pillar-card:nth-child(9) .pillar-icon { color: #5C7EC0; background: rgba(92,126,192,0.1); }
.pillar-card:nth-child(10) .pillar-icon { color: #3B5B9A; background: rgba(59,91,154,0.1); }

/* Download Section - Rectangle Style */
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
    max-width: 600px;
    margin: 0 auto;
}

.download-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 1000px;
    margin: 0 auto;
}

.download-item {
    width: 200px;
    background: white;
    border-radius: 12px;
    padding: 20px 15px;
    transition: all 0.3s ease;
    cursor: pointer;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    border: 1px solid rgba(0,0,0,0.05);
}

.download-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px -10px var(--turquoise);
    border-color: var(--turquoise);
}

.download-item .download-icons {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.download-item .download-icons img {
    width: 30px;
    height: 30px;
    object-fit: contain;
}

.download-item h4 {
    color: var(--navy);
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 5px;
    font-family: 'Playfair Display', serif;
}

.download-item p {
    color: #666;
    font-size: 0.8rem;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
}

/* Partners Image */
.partners-container {
    padding: 40px 0 0;
    text-align: center;
}

.partners-image {
    max-width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
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

/* Responsive */
@media (max-width: 768px) {
    .intro-wrapper, .blueprint-wrapper {
        flex-direction: column;
    }
    
    .intro-right {
        text-align: left;
    }
    
    .pillars-grid {
        grid-template-columns: 1fr;
    }
    
    .download-items {
        flex-direction: column;
        align-items: center;
    }
    
    .download-item {
        width: 100%;
        max-width: 300px;
    }
}
</style>

<!-- ===== Intro Section - Title on Right ===== -->
<section class="intro-section">
    <div class="container">
        <div class="intro-wrapper">
            <!-- Left side - Additional content  -->
             <div class="blueprint-image" data-aos="fade-left">
                <img src="/assets/images/2030int (1).png" alt="JKP Economic Potential">
                <!-- Replace with your actual image path -->
            </div>
            
            <!-- Right side - Main intro content -->
            <div class="intro-right" data-aos="fade-left">
                <h1>Jumuiya 2030</h1>
                <div class="highlight-box">
                    <p>Jumuiya 2030 is the regional economic development strategy for the period 2020-2030. Its development and architecture are drawn from the Constitution, Devolution Act, and the Kenya Vision 2030 and harmonized with six county-integrated development plans. One of the 10 core pillars to realize the Jumuiya ambition is the blue economy value chains which is viewed as a lucrative and untapped area that can easily transform the coastal region into an economic powerhouse and drive the changing the story narrative.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Blueprint Section - Image on Right ===== -->
<section class="blueprint-section">
    <div class="container">
        <div class="blueprint-wrapper">
            <!-- Left side - Content -->
            <div class="blueprint-content" data-aos="fade-right">
                <h2>Blueprint</h2>
                <h3>JKP Economic Bloc's Potential</h3>
                <p>The Kenyan Coastal region is a blue economy melting pot with a unique blend of maritime and general trade, agriculture - fisheries, horticulture, livestock and large scale farming, heritage, tourism from the sea and the famous Tsavo Park. With the vast shared resources, a unique culture and a common historical foundation, there is a lot of untapped potential across all sectors from manufacturing, tourism, agriculture, extractives, real estate, among others.</p>
                <p>Under the Jumuiya 2030 the targeted economic sectors are: <strong>Agribusiness, Food and Nutrition; Trade & Industries; The Blue Economy and Natural Resources and Environment.</strong></p>
                
                <div class="cityWall-btn" style="margin-top: 30px;">
                    <a href="#" onclick="document.getElementById('download-brochure').click(); return false;" style="background: var(--turquoise);">Download Brochure <i class="bi bi-download ms-2"></i></a>
                </div>
            </div>
            
            <!-- Right side - Image -->
            <div class="blueprint-image" data-aos="fade-left">
                <img src="/assets/images/pillars.png" alt="JKP Economic Potential">
                <!-- Replace with your actual image path -->
            </div>
        </div>
    </div>
</section>

<!-- ===== Pillars Section ===== -->
<section class="pillars-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="subtitle">Services</div>
            <h2>Jumuiya 10 Pillars</h2>
            <p>The Jumuiya 10 Pillars for the Jumuiya Socio-Economic Transformation are sectors selected through a series of regional stakeholders' engagement.</p>
        </div>

        <div class="pillars-grid">
            <!-- Pillar 1 -->
            <div class="pillar-card" data-aos="fade-up">
                <div class="pillar-icon">
                    <i class="bi bi-tree"></i>
                </div>
                <h3>Agribusiness, Food & Nutrition Security</h3>
                <p>Focuses on the advancement of agricultural initiatives to promote food security and value added products in the region</p>
            </div>
            
            <!-- Pillar 2 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="50">
                <div class="pillar-icon">
                    <i class="bi bi-shop"></i>
                </div>
                <h3>Trade & Industries</h3>
                <p>Special economic zones in the region have been earmarked to promote trade, textiles, logistics and manufacturing</p>
            </div>
            
            <!-- Pillar 3 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="100">
                <div class="pillar-icon">
                    <i class="bi bi-water"></i>
                </div>
                <h3>Blue Economy Value Chains</h3>
                <p>With the 500km coastline, vast marine species, 2 major ports, and pristine beaches, JKP seeks to advance projects in the maritime sector.</p>
            </div>
            
            <!-- Pillar 4 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="150">
                <div class="pillar-icon">
                    <i class="bi bi-globe"></i>
                </div>
                <h3>Natural Resources & Environment</h3>
                <p>JKP seeks to promote climate action initiatives to provide for a better future for its communities.</p>
            </div>
            
            <!-- Pillar 5 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="200">
                <div class="pillar-icon">
                    <i class="bi bi-building"></i>
                </div>
                <h3>Coastal Urbanization</h3>
                <p></p>
            </div>
            
            <!-- Pillar 6 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="250">
                <div class="pillar-icon">
                    <i class="bi bi-heart-pulse"></i>
                </div>
                <h3>Health & Education</h3>
                <p></p>
            </div>
            
            <!-- Pillar 7 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="300">
                <div class="pillar-icon">
                    <i class="bi bi-bank"></i>
                </div>
                <h3>Governance</h3>
                <p></p>
            </div>
            
            <!-- Pillar 8 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="350">
                <div class="pillar-icon">
                    <i class="bi bi-pc-display"></i>
                </div>
                <h3>Infrastructure</h3>
                <p></p>
            </div>
            
            <!-- Pillar 9 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="400">
                <div class="pillar-icon">
                    <i class="bi bi-map"></i>
                </div>
                <h3>Land Resource Development</h3>
                <p></p>
            </div>
            
            <!-- Pillar 10 -->
            <div class="pillar-card" data-aos="fade-up" data-aos-delay="450">
                <div class="pillar-icon">
                    <i class="bi bi-piggy-bank"></i>
                </div>
                <h3>Jumuiya Investment Fund</h3>
                <p></p>
            </div>
        </div>
    </div>
</section>

<!-- ===== Download Section ===== -->
<section class="download-section">
    <div class="container">
        <div class="download-header" data-aos="fade-up">
            <h2>Want to know more about Jumuiya?</h2>
            <p>Just download brochure...</p>
        </div>

        <div class="download-items">
            <!-- Jumuiya 2030 Brochure -->
            <div class="download-item" data-aos="fade-up" onclick="document.getElementById('download-jumuiya-2030').click();">
                <div class="download-icons">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>Jumuiya 2030 Strategy</h4>
                <p>Complete Strategy Document</p>
            </div>
            
            <!-- Executive Summary -->
            <div class="download-item" data-aos="fade-up" data-aos-delay="50" onclick="document.getElementById('download-executive-summary').click();">
                <div class="download-icons">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>Executive Summary</h4>
                <p>Key Highlights</p>
            </div>
            
            <!-- Pillars Overview -->
            <div class="download-item" data-aos="fade-up" data-aos-delay="100" onclick="document.getElementById('download-pillars').click();">
                <div class="download-icons">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>10 Pillars Overview</h4>
                <p>Detailed Pillar Descriptions</p>
            </div>
            
            <!-- Investment Opportunities -->
            <div class="download-item" data-aos="fade-up" data-aos-delay="150" onclick="document.getElementById('download-investment').click();">
                <div class="download-icons">
                    <img src="/assets/images/icons8-eye.gif" alt="Preview">
                    <img src="/assets/images/icons8-downloads-folder.gif" alt="Download">
                </div>
                <h4>Investment Opportunities</h4>
                <p>Sector Investment Brief</p>
            </div>
        </div>

        <!-- Hidden Download Links - Add your PDF paths here -->
    
            <a id="download-brochure" href="/assets/content-files/JUMUIYA YA KAUNTI ZA PWANI 2030 DEVELOPMENT BLUEPRINT.pdf" download></a>
        </div>
    </div>
</section>

<!-- ===== Partners Image ===== -->
<section class="partners-container">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <img src="/assets/images/Screenshot 2026-03-08 214011.png" alt="Jumuiya 2030 Partners" class="partners-image">
            <!-- Replace with your actual partners image path -->
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
                    <span class="cssanimation lePopUp sequence">Partner With Us</span><br>
                    <span class="cssanimation lePopUp sequence">for Coastal Development</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Join us in implementing the Jumuiya 2030 strategy and transforming Kenya's coastal region.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="#" onclick="document.getElementById('download-jumuiya-2030').click(); return false;" style="background: var(--navy);">Download Strategy <i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>