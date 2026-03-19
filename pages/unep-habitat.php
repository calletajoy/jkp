<?php
/**
 * pages/unep-habitat.php
 * UN Habitat and UNEP Page - Component 2 Details
 */

$pageTitle    = 'UN Habitat and UNEP';
$currentPage  = 'unep-habitat';
$heroTitle    = 'UN Habitat and UNEP';
$heroSubtitle = 'UN Habitat and UNEP';

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
.unep-page {
    padding: 60px 0;
    background: white;
}

/* Component Header */
.component-header {
    margin-bottom: 40px;
}

.component-header h1 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--turquoise);
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
    letter-spacing: 1px;
}

.component-header h2 {
    font-size: 2.8rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
    line-height: 1.2;
}

.component-header p {
    font-size: 1.2rem;
    line-height: 1.8;
    color: #444;
    font-family: 'Montserrat', sans-serif;
    max-width: 900px;
}

/* Two Column Layout */
.content-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    margin: 50px 0;
}

.left-column {
    flex: 1.2;
    min-width: 300px;
}

.right-column {
    flex: 0.8;
    min-width: 300px;
}

/* Left Column - Image and Partners Logo */
.main-image {
    width: 100%;
    margin-bottom: 30px;
}

.main-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.main-image img:hover {
    transform: scale(1.02);
}

.partners-logo {
    width: 100%;
    text-align: center;
}

.partners-logo img {
    max-width: 100%;
    border-radius: 15px;
    box-shadow: 0 15px 30px -10px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
}

.partners-logo img:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px -10px var(--turquoise);
}

/* Right Column - Text Content */
.right-column {
    background: linear-gradient(135deg, rgba(0,206,209,0.05) 0%, rgba(92,126,192,0.05) 100%);
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.15);
    border-left: 4px solid var(--turquoise);
    height: fit-content;
}

.implemented-by {
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--deep-blue);
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid rgba(0,206,209,0.3);
    font-family: 'Playfair Display', serif;
}

.project-details {
    margin-top: 20px;
}

.project-details h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 10px;
}

.project-details h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 2px;
    background: var(--turquoise);
}

.detail-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 20px;
}

.detail-icon {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, rgba(0,206,209,0.1), rgba(92,126,192,0.1));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: var(--turquoise);
    border: 1px solid rgba(0,206,209,0.3);
}

.detail-text {
    flex: 1;
}

.detail-text strong {
    display: block;
    color: var(--navy);
    font-size: 1rem;
    margin-bottom: 5px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
}

.detail-text span {
    color: #555;
    font-size: 0.95rem;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.5;
}

/* Achievements Section */
.achievements-section {
    margin: 60px 0;
}

.achievements-section h3 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 40px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.achievements-section h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.achievements-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 25px;
}

.achievement-card {
    background: white;
    border-radius: 15px;
    padding: 0;
    box-shadow: 0 10px 30px -10px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    overflow: hidden;
}

.achievement-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px -10px var(--turquoise);
    border-color: var(--turquoise);
}

.achievement-card.active {
    border-color: var(--navy);
    background: linear-gradient(135deg, rgba(39,60,103,0.02) 0%, rgba(0,206,209,0.02) 100%);
}

.achievement-header {
    padding: 20px 25px;
    background: white;
    border-bottom: 2px solid rgba(0,206,209,0.2);
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.achievement-header h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--navy);
    font-family: 'Playfair Display', serif;
    margin: 0;
}

.achievement-header span {
    color: var(--turquoise);
    font-family: 'Montserrat', sans-serif;
    font-size: 0.85rem;
    font-style: italic;
}

.achievement-detail {
    padding: 0;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease, padding 0.3s ease;
    background: linear-gradient(135deg, rgba(0,206,209,0.03) 0%, rgba(92,126,192,0.03) 100%);
}

.achievement-card.active .achievement-detail {
    padding: 20px 25px;
    max-height: 200px;
}

.achievement-detail p {
    font-size: 1rem;
    line-height: 1.6;
    color: #555;
    font-family: 'Montserrat', sans-serif;
    margin: 0;
}

/* Find More Section */
.find-more-section {
    margin: 50px 0;
    text-align: center;
    padding: 40px;
    background: linear-gradient(135deg, rgba(0,206,209,0.08) 0%, rgba(92,126,192,0.08) 100%);
    border-radius: 20px;
}

.find-more-section p {
    font-size: 1.3rem;
    color: var(--navy);
    margin-bottom: 20px;
    font-family: 'Montserrat', sans-serif;
}

.find-more-btn {
    display: inline-block;
    padding: 15px 40px;
    background: var(--turquoise);
    color: white;
    text-decoration: none;
    border-radius: 50px;
    font-weight: 600;
    font-size: 1.1rem;
    font-family: 'Montserrat', sans-serif;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.find-more-btn:hover {
    background: var(--navy);
    transform: translateY(-3px);
    box-shadow: 0 15px 30px -10px var(--turquoise);
}

/* Responsive */
@media (max-width: 768px) {
    .component-header h2 {
        font-size: 2rem;
    }
    
    .achievements-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<!-- ===== UNEP Page Content ===== -->
<section class="unep-page">
    <div class="container">
        <!-- Component Header -->
        <div class="component-header" data-aos="fade-up">
            <h1>COMPONENT 2 | GO BLUE ENVIRONMENT</h1>
            <h2>Connecting people, Cities, and the Oceans</h2>
            <p>The Go Blue | UN-Habitat and UNEP objective is to establish a connection between people, cities, and the ocean via creative land-sea planning and management for a sustainable and resilient Kenyan coast.</p>
        </div>
        
        <!-- Two Column Layout -->
        <div class="content-wrapper">
            <!-- Left Column - Image and Partners Logo -->
            <div class="left-column" data-aos="fade-right">
                <!-- Main UNEP Image -->
                <div class="main-image">
                    <img src="/assets/images/un-habitat.png" alt="UNEP Meeting - Go Blue Environment">
                </div>
                
                <!-- Partners Logo Below the Image -->
                <div class="partners-logo">
                    <img src="/assets/images/unep-logs.png" alt="UN-Habitat and UNEP Partners Logo">
                </div>
            </div>
            
            <!-- Right Column - Text Content -->
            <div class="right-column" data-aos="fade-left">
                <div class="implemented-by">Implemented by: UN-Habitat and UNEP, I.P</div>
                
                <div class="project-details">
                    <h3>Project Details</h3>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Location</strong>
                            <span>Mombasa, Kwale, Kilifi, Tana River & Lamu & Taita Taveta</span>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Budget</strong>
                            <span>€ 7 million</span>
                        </div>
                    </div>
                    
                    <div class="detail-item">
                        <div class="detail-icon">
                            <i class="bi bi-calendar-check"></i>
                        </div>
                        <div class="detail-text">
                            <strong>Period</strong>
                            <span>24/11/2017</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Achievements Section -->
        <div class="achievements-section" data-aos="fade-up">
            <h3>Achievements</h3>
            
            <div class="achievements-grid">
                <!-- Achievement 1: IS and data centers -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Development of IS and data centers</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>Consultancy awarded to Regional Centre for Mapping of Resources for Development (RCMRD) to work with the counties and JKP in the development of IS and data centers in the 6 coastal counties.</p>
                    </div>
                </div>
                
                <!-- Achievement 2: Onboarding IP -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Onboarding IP</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>Onboarding of UN Habitat and UNEP implementing partners took place.</p>
                    </div>
                </div>
                
                <!-- Achievement 3: Land-sea framework -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Land-sea framework development process</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>First expert meeting on the land-sea framework development process took place.</p>
                    </div>
                </div>
                
                <!-- Achievement 4: Ecosystem assessment -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Ecosystem assessment and valuation</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>Consultancy to deliver the ecosystem assessment and valuation awarded to University of Nairobi led by Professor Mulwa.</p>
                    </div>
                </div>
                
                <!-- Achievement 5: Solid waste audit -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Solid waste audit</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>Solid waste audit undertaken, and results used to develop the waste strategy for Taita Taveta county. Both the waste audit and the strategy were launched by HE the Governor of Taita Taveta county Hon Mwadime.</p>
                    </div>
                </div>
                
                <!-- Achievement 6: Mazingira park -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Mazingira park</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>The first draft of the design of Mazingira park of Kilifi County was subjected to public participation on 27/3/2023 and the occasion graced by Hon Jane Kamto, CECM, Lands and Physical Planning.</p>
                    </div>
                </div>
                
                <!-- Achievement 7: Wastewater treatment -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Wastewater treatment</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>The site at Mikindani for construction of the constructed wetland for wastewater treatment was approved by the county government of Mombasa.</p>
                    </div>
                </div>
                
                <!-- Achievement 8: Lamu blue carbon project -->
                <div class="achievement-card" onclick="toggleAchievement(this)">
                    <div class="achievement-header">
                        <h4>Lamu blue carbon project</h4>
                        <span>Click to view details →</span>
                    </div>
                    <div class="achievement-detail">
                        <p>Discussions are underway with KMFRI and Cordio East Africa for the rolling out of Lamu blue carbon project implementation and establishment of a Locally Marine Protected Area at Kisite Mpunguti.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Find More Details Section -->
        <div class="find-more-section" data-aos="fade-up">
            <p>Want to learn more about our progress and initiatives?</p>
            <a href="https://goblue.co.ke/" target="_blank" rel="noopener noreferrer" class="find-more-btn">
                Find more details here <i class="bi bi-box-arrow-up-right ms-2"></i>
            </a>
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
                    <span class="cssanimation lePopUp sequence">Partner With Us</span><br>
                    <span class="cssanimation lePopUp sequence">for Coastal Development</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Join UN-Habitat and UNEP in advancing the Blue Economy Agenda across Kenya's coastal region.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="https://goblue.co.ke/" target="_blank" rel="noopener noreferrer" style="background: var(--navy);">Visit GoBlue <i class="bi bi-box-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Toggle achievement details within the same card
function toggleAchievement(card) {
    // Close other open cards
    const allCards = document.querySelectorAll('.achievement-card');
    allCards.forEach(c => {
        if (c !== card && c.classList.contains('active')) {
            c.classList.remove('active');
        }
    });
    
    // Toggle current card
    card.classList.toggle('active');
}

// Initialize AOS if available
document.addEventListener('DOMContentLoaded', function() {
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