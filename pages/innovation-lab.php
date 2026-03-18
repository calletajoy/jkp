<?php
/**
 * pages/innovation-lab.php
 * Jumuiya Innovation Lab Page - Workforce and MSME Incubator
 */

$pageTitle    = 'Jumuiya Innovation Hub';
$currentPage  = 'innovation-lab';
$heroTitle    = 'Jumuiya Innovation Hub';
$heroSubtitle = 'Empowering Youth, Driving Innovation';

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

/* Background Section */
.background-section {
    padding: 60px 0;
    background: white;
}

.background-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
}

.background-content {
    flex: 1;
    min-width: 300px;
}

.background-content h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 25px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.background-content h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

.background-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
    font-family: 'Montserrat', sans-serif;
}

.background-image {
    flex: 0.8;
    min-width: 300px;
}

.background-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.background-image img:hover {
    transform: scale(1.02);
}

/* Goal Section - Folded Corner Cards */
.goal-section {
    padding: 80px 0;
    background: #f8f9fa;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
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
}

.section-header p {
    color: #666;
    max-width: 700px;
    margin: 0 auto;
    font-family: 'Montserrat', sans-serif;
    font-size: 1.1rem;
}

.goal-cards-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
}

@media (max-width: 768px) {
    .goal-cards-grid {
        grid-template-columns: 1fr;
    }
}

.folded-card {
    background: white;
    border-radius: 15px;
    padding: 25px;
    box-shadow: 0 15px 35px -15px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.4s ease;
    min-height: 150px;
    display: flex;
    flex-direction: column;
    border: 1px solid rgba(0,0,0,0.05);
}

/* Folded corner effect */
.folded-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 40px 40px 0;
    border-color: transparent var(--turquoise) transparent transparent;
    opacity: 0.7;
    transition: all 0.4s ease;
    z-index: 5;
}

.folded-card:hover::before {
    border-width: 0 50px 50px 0;
    border-color: transparent var(--soft-blue) transparent transparent;
}

.folded-card-header {
    margin-bottom: 15px;
    padding-right: 30px;
}

.folded-card-header h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--navy);
    font-family: 'Playfair Display', serif;
    margin: 0;
}

.folded-card-content {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: all 0.5s ease;
    color: #666;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    font-size: 0.95rem;
}

.folded-card.active {
    min-height: 250px;
    box-shadow: 0 25px 45px -15px var(--turquoise);
}

.folded-card.active .folded-card-content {
    max-height: 500px;
    opacity: 1;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid rgba(0,206,209,0.2);
}

.folded-card.active::before {
    border-color: transparent var(--deep-blue) transparent transparent;
}

/* Structure Section */
.structure-section {
    padding: 80px 0;
    background: white;
}

.structure-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 50px;
    margin-bottom: 60px;
}

.structure-content {
    flex: 1;
    min-width: 300px;
}

.structure-content h2 {
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 30px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-bottom: 15px;
}

.structure-content h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(90deg, var(--turquoise), var(--soft-blue));
    border-radius: 3px;
}

/* New styles for Structure Points 1 & 2 */
.structure-points {
    margin-top: 20px;
}

.structure-point {
    margin-bottom: 35px;
}

.structure-point h3 {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 12px;
    font-family: 'Playfair Display', serif;
    position: relative;
    padding-left: 20px;
}

.structure-point h3::before {
    content: '';
    position: absolute;
    left: 0;
    top: 8px;
    width: 8px;
    height: 8px;
    background: var(--turquoise);
    border-radius: 50%;
}

.structure-point p {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.7;
    font-size: 1rem;
}

/* New grid for Structure Cards 3-7 */
.structure-cards-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 60px;
}

@media (max-width: 768px) {
    .structure-cards-grid {
        grid-template-columns: 1fr;
    }
}

/* Card List Styling for folded cards */
.card-list {
    list-style: none;
    padding: 0;
    margin: 10px 0 0 0;
}

.card-list li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 10px;
    font-size: 0.95rem;
    line-height: 1.6;
    color: #555;
}

.card-list li::before {
    content: '•';
    position: absolute;
    left: 0;
    color: var(--turquoise);
    font-weight: bold;
    font-size: 1.2rem;
}

/* Original structure list styles (keep if needed elsewhere) */
.structure-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.structure-list li {
    margin-bottom: 25px;
    padding-left: 30px;
    position: relative;
}

.structure-list li strong {
    display: block;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--navy);
    margin-bottom: 8px;
    font-family: 'Playfair Display', serif;
}

.structure-list li p {
    color: #666;
    font-family: 'Montserrat', sans-serif;
    line-height: 1.6;
    margin: 0;
}

.structure-list li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 8px;
    width: 12px;
    height: 12px;
    background: var(--turquoise);
    border-radius: 50%;
    box-shadow: 0 0 0 3px rgba(0,206,209,0.2);
}

.structure-list li:nth-child(2)::before { background: var(--soft-blue); }
.structure-list li:nth-child(3)::before { background: var(--deep-blue); }
.structure-list li:nth-child(4)::before { background: var(--navy); }
.structure-list li:nth-child(5)::before { background: #4A6FA5; }
.structure-list li:nth-child(6)::before { background: #6B8CBE; }
.structure-list li:nth-child(7)::before { background: #8AA9D9; }

.structure-image {
    flex: 0.8;
    min-width: 300px;
    transform: translateY(30px);
}

.structure-image img {
    width: 100%;
    border-radius: 20px;
    box-shadow: 0 25px 45px -15px rgba(0,0,0,0.25);
    transition: transform 0.3s ease;
}

.structure-image img:hover {
    transform: scale(1.02);
}

/* Counties Section */
.counties-section {
    padding: 40px 0 60px;
    background: #f8f9fa;
}

.counties-title {
    text-align: center;
    margin-bottom: 30px;
}

.counties-title h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--navy);
    font-family: 'Playfair Display', serif;
}

.counties-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    max-width: 800px;
    margin: 0 auto;
}

.county-tag {
    background: white;
    padding: 12px 25px;
    border-radius: 50px;
    box-shadow: 0 10px 20px -10px rgba(0,0,0,0.1);
    font-family: 'Montserrat', sans-serif;
    font-weight: 500;
    color: var(--navy);
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.county-tag:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 25px -10px var(--turquoise);
    color: var(--turquoise);
    border-color: var(--turquoise);
}

.county-tag:nth-child(1):hover { color: var(--turquoise); }
.county-tag:nth-child(2):hover { color: var(--soft-blue); }
.county-tag:nth-child(3):hover { color: var(--deep-blue); }
.county-tag:nth-child(4):hover { color: var(--navy); }
.county-tag:nth-child(5):hover { color: #4A6FA5; }
.county-tag:nth-child(6):hover { color: #6B8CBE; }

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
</style>

<!-- ===== Background Section ===== -->
<section class="background-section">
    <div class="container">
        <div class="background-wrapper">
            <!-- Left side - Content -->
            <div class="background-content" data-aos="fade-right">
                <h2>Background</h2>
                <p>The Establishment of six (6) Jumuiya Innovation Labs is an anchor flagship project to changing the story of the region under Jumuiya 2030 framework. It Combines intervening strategies and regionally aligned policies in the JKP (6) counties to increase high school – TVETS/VTCs – University transition rate, facilitate entrepreneurial leadership with incubation of Micro- Small Medium Enterprises (MSMEs) and workforce development for employability with continuous professional growth (University System), high income and high productivity for equitable regional economic development.</p>
            </div>
            
            <!-- Right side - Image -->
            <div class="background-image" data-aos="fade-left">
                <img src="/assets/images/inno lab 2.png" alt="Jumuiya Innovation Lab">
                <!-- Replace with your actual image path -->
            </div>
        </div>
    </div>
</section>

<!-- ===== Goal Section with Folded Corner Cards ===== -->
<section class="goal-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <div class="subtitle">Goal</div>
            <h2>Objective of the Project</h2>
            <p>The Jumuiya innovation lab is a work force and MSME incubator that seeks to create employment opportunities and harness the latent talent existent among the youth in the region</p>
        </div>

        <div class="goal-cards-grid">
            <!-- Card 1: Youth Empowerment -->
            <div class="folded-card" data-aos="fade-up" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Youth Empowerment</h3>
                </div>
                <div class="folded-card-content">
                    Structuring the youth empowerment space through business development and vocational education
                </div>
            </div>
            
            <!-- Card 2: Job Creation -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="50" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Job Creation</h3>
                </div>
                <div class="folded-card-content">
                    Strengthening the private sector engagement in Job creation for the coastal people
                </div>
            </div>
            
            <!-- Card 3: Employment & Wealth -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="100" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Employment & Wealth</h3>
                </div>
                <div class="folded-card-content">
                    Create an able skilled workforce to achieve the Jumuiya 2030 - Middle income with shared prosperity by 2030
                </div>
            </div>
            
            <!-- Card 4: International Innovation Bridges -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="150" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>International Innovation Bridges</h3>
                </div>
                <div class="folded-card-content">
                    The Lab seeks to create international innovation bridges and market linkages/access to resources across international markets
                </div>
            </div>
            
            <!-- Card 5: Economic Productivity & Prosperity -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="200" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Economic Productivity & Prosperity</h3>
                </div>
                <div class="folded-card-content">
                    Ultimately the Jumuiya Innovation Lab seeks to be the last mile in the transition to economic productivity & prosperity
                </div>
            </div>
            
            <!-- Card 6: Achieving Middle Income by 2030 -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="250" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Achieving Middle Income by 2030</h3>
                </div>
                <div class="folded-card-content">
                    Combine intervening strategies and policies in the JKP (6) counties to align in achieving middle income with shared prosperity by 2030
                </div>
            </div>
            
            <!-- Card 7: Employability & Economic Productivity -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="300" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Employability & Economic Productivity</h3>
                </div>
                <div class="folded-card-content">
                    Facilitate self-employment with incubation and skilling of micro small medium enterprises (MSME) for employability & economic productivity
                </div>
            </div>
            
            <!-- Card 8: Innovation Hub for East African Region -->
            <div class="folded-card" data-aos="fade-up" data-aos-delay="350" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>Innovation Hub for East African Region</h3>
                </div>
                <div class="folded-card-content">
                    Jumuiya Innovation Lab envisions to become the innovation hub for the East African Region. Exchange programs including knowledge exchange & stakeholder exchange will promote cross learning and regional cooperation.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== Counties Tags ===== -->
<section class="counties-section">
    <div class="container">
        <div class="counties-title" data-aos="fade-up">
            <h3>The Six Coastal Counties</h3>
        </div>
        <div class="counties-grid" data-aos="fade-up">
            <span class="county-tag">Mombasa</span>
            <span class="county-tag">Kwale</span>
            <span class="county-tag">Kilifi</span>
            <span class="county-tag">Tana River</span>
            <span class="county-tag">Lamu</span>
            <span class="county-tag">Taita Taveta</span>
        </div>
    </div>
</section>

<!-- ===== Structure Section ===== -->
<section class="structure-section">
    <div class="container">
        <!-- Top part - Points 1 & 2 with image -->
        <div class="structure-wrapper">
            <!-- Left side - Points 1 & 2 -->
            <div class="structure-content" data-aos="fade-right">
                <h2>Structure of the Project</h2>
                
                <div class="structure-points">
                    <!-- Point 1 -->
                    <div class="structure-point">
                        <h3>1. The Hub and Spoke Model</h3>
                        <p>The Establishment of six (6) Jumuiya Innovation Labs will be under a hub and spoke model. With 6 spokes in each of the 6 coastal counties and the Jumuiya innovation hub located in Mombasa.</p>
                    </div>
                    
                    <!-- Point 2 -->
                    <div class="structure-point">
                        <h3>2. Centre for Workforce Skilling</h3>
                        <p>The 6 Innovation labs will be a centre for work force skilling providing: Guidance to youth in helping them find a potential career path; Vocational training to be tailor made for entering into specific/niche career paths; Connecting youth empowerment organizations for relevant job placements.</p>
                    </div>
                </div>
            </div>
            
            <!-- Right side - Image (positioned slightly lower) -->
            <div class="structure-image" data-aos="fade-left">
                <img src="/assets/images/inno lab.png" alt="Innovation Lab Structure">
                <!-- Replace with your actual image path -->
            </div>
        </div>
        
        <!-- Bottom part - Points 3-7 as folded corner cards -->
        <div class="structure-cards-grid" data-aos="fade-up" data-aos-delay="100">
            <!-- Point 3 -->
            <div class="folded-card" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>3. Business Enablement</h3>
                </div>
                <div class="folded-card-content">
                    <ul class="card-list">
                        <li>Administrative support towards seeking required approvals</li>
                        <li>Market linkage solutions</li>
                        <li>Innovation centres/hubs for industry specific sectors</li>
                    </ul>
                </div>
            </div>
            
            <!-- Point 4 -->
            <div class="folded-card" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>4. Landing Pad for International Entrepreneurs</h3>
                </div>
                <div class="folded-card-content">
                    <ul class="card-list">
                        <li>Dedicated Help Desk - providing expert information on Jumuiya Market, industries, regulations, legal systems by dedicated experts</li>
                        <li>Incubation (Seats on reservation basis) in Jumuiya innovation labs offering temporary office space</li>
                        <li>Invest Jumuiya – One stop centre for foreign business establishment to help complete procedures for starting a company</li>
                        <li>Networking – Introducing local government, business partners, experts, investors interested in partnership with foreign affiliated companies</li>
                        <li>Mentoring services – providing business counselling and mentoring to MSMES for business management in Jumuiya</li>
                    </ul>
                </div>
            </div>
            
            <!-- Point 5 -->
            <div class="folded-card" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>5. Access to Finance</h3>
                </div>
                <div class="folded-card-content">
                    <ul class="card-list">
                        <li>Assistance towards linkages with financial institutions for credit</li>
                        <li>Linkages with prospective investors/agencies</li>
                    </ul>
                </div>
            </div>
            
            <!-- Point 6 -->
            <div class="folded-card" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>6. Centre for MSME Incubation and Skilling</h3>
                </div>
                <div class="folded-card-content">
                    <ul class="card-list">
                        <li>Skill and incubate 1000 MSMES across various sectors such as agriculture, blue economy, trade and logistics</li>
                        <li>Providing assistance to entrepreneurs on filling applications through the required approaches</li>
                        <li>Capacity building training on starting and maintaining a business</li>
                        <li>Training programs for youth entrepreneurs</li>
                    </ul>
                </div>
            </div>
            
            <!-- Point 7 -->
            <div class="folded-card" onclick="this.classList.toggle('active')">
                <div class="folded-card-header">
                    <h3>7. Knowledge Management</h3>
                </div>
                <div class="folded-card-content">
                    <ul class="card-list">
                        <li>Information on Government schemes and incentives</li>
                        <li>MSME specific knowledge and project shelves</li>
                        <li>Assistance in the preparation of project reports/business plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== CTA Section ===== -->
<section class="best-city-government remove-div one-second" data-aos="fade-up" style="margin-top: 60px;">
    <div class="images-and-overlay">
    
        <div class="overlay" style="background: linear-gradient(135deg, rgba(39,60,103,0.9) 0%, rgba(0,206,209,0.7) 100%);"></div>
    </div>
    <div class="container">
        <div class="city-content text-center">
            <div class="city-title" data-aos="fade-up">
                <h2 class="text-white" style="font-family: 'Playfair Display', serif;">
                    <span class="cssanimation lePopUp sequence">Join the Innovation</span><br>
                    <span class="cssanimation lePopUp sequence">Ecosystem</span>
                </h2>
                <p class="text-white-50 mt-3 mb-4" style="max-width:600px; margin:0 auto; font-family: 'Montserrat', sans-serif;">
                    Be part of transforming the coastal region through innovation, skills development, and entrepreneurship.
                </p>
                <div class="cityWall-btn d-inline-flex gap-3 justify-content-center flex-wrap">
                    <a href="/contact" style="background: var(--turquoise);">Contact Us <i class="bi bi-arrow-right"></i></a>
                    <a href="/services" style="background: var(--navy);">Learn More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Optional: Close other cards when one is opened
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.folded-card');
    
    cards.forEach(card => {
        card.addEventListener('click', function(e) {
            // If you want only one card open at a time, uncomment below
            /*
            cards.forEach(c => {
                if (c !== this) {
                    c.classList.remove('active');
                }
            });
            */
        });
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>