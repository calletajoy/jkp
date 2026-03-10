<?php
/**
 * pages/blueprint.php— Tourism & Cultural Heritage Blueprint 2030
 */

$pageTitle    = 'TCH Blueprint 2030';
$currentPage  = 'tch-blueprint';
$heroTitle    = 'Go Blue Documents and Resources';
$heroSubtitle = 'A globally competitive & sustainable Kenya coastal Tourism and Cultural Heritage destination by 2030';

ob_start();

include __DIR__ . '/../partials/page-hero.php';

// Blue color scheme
$primaryBlue = '#6EC1E4';
$darkBlue = '#244080';
?>

<style>
:root {
    --primary-blue: #6EC1E4;
    --dark-blue: #244080;
    --light-bg: #f8f9fa;
}

.blueprint-wrapper {
    padding: 3rem 0;
}

/* Cover Image Section */
.cover-section {
    margin-bottom: 3rem;
    position: relative;
}

.cover-container {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    background: white;
}

.cover-image {
    width: 100%;
    height: auto;
    display: block;
}

.cover-gifs {
    position: absolute;
    bottom: 30px;
    right: 30px;
    display: flex;
    gap: 20px;
    background: rgba(255,255,255,0.9);
    padding: 15px 25px;
    border-radius: 60px;
    backdrop-filter: blur(5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    border: 1px solid rgba(255,255,255,0.3);
    z-index: 10;
}

.gif-item {
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.gif-item:hover {
    transform: scale(1.05);
}

.gif-item img {
    width: 40px;
    height: 40px;
    object-fit: contain;
}

.gif-item span {
    font-weight: 600;
    color: var(--dark-blue);
    font-size: 1.1rem;
}

/* Section Headers */
.section-header {
    text-align: center;
    margin-bottom: 3rem;
    position: relative;
}

.section-header h2 {
    color: var(--dark-blue);
    font-size: 2.2rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

.section-header .subtitle {
    color: #6c757d;
    font-size: 1.1rem;
    max-width: 800px;
    margin: 0 auto;
}

.section-header::after {
    content: '';
    display: block;
    width: 80px;
    height: 4px;
    background: var(--primary-blue);
    margin: 20px auto 0;
    border-radius: 2px;
}

/* Vision Card */
.vision-card {
    background: linear-gradient(135deg, var(--dark-blue) 0%, #1a2e5c 100%);
    border-radius: 15px;
    padding: 3rem;
    color: white;
    text-align: center;
    margin-bottom: 3rem;
    box-shadow: 0 15px 30px rgba(36, 64, 128, 0.2);
}

.vision-card h3 {
    font-size: 1.8rem;
    font-weight: 300;
    margin-bottom: 1rem;
    letter-spacing: 2px;
    text-transform: uppercase;
}

.vision-card .vision-text {
    font-size: 2.2rem;
    font-weight: 700;
    line-height: 1.4;
    max-width: 900px;
    margin: 0 auto;
}

/* Strategic Objectives Grid */
.strategic-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    margin-bottom: 3rem;
}

.strategic-card {
    background: white;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border: 1px solid #e0e0e0;
    position: relative;
    overflow: hidden;
}

.strategic-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(110, 193, 228, 0.15);
    border-color: var(--primary-blue);
}

.strategic-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: var(--primary-blue);
}

.strategic-number {
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--primary-blue);
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.strategic-card h4 {
    color: var(--dark-blue);
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    line-height: 1.4;
}

.strategic-card p {
    color: #6c757d;
    margin-bottom: 0;
    line-height: 1.6;
}

/* Principles Grid */
.principles-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 3rem;
}

.principle-item {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.03);
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
}

.principle-item:hover {
    border-color: var(--primary-blue);
    box-shadow: 0 10px 20px rgba(110, 193, 228, 0.1);
}

.principle-icon {
    width: 60px;
    height: 60px;
    background: rgba(110, 193, 228, 0.1);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    color: var(--primary-blue);
    font-size: 1.5rem;
    font-weight: 700;
}

.principle-item h5 {
    color: var(--dark-blue);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.principle-item p {
    color: #6c757d;
    font-size: 0.9rem;
    margin-bottom: 0;
}

/* County Quotes */
.county-quotes {
    background: var(--light-bg);
    border-radius: 15px;
    padding: 2.5rem;
    margin-bottom: 3rem;
}

.quotes-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 2rem;
}

.quote-card {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    border-left: 3px solid var(--primary-blue);
}

.quote-card p {
    font-style: italic;
    color: #495057;
    margin-bottom: 1rem;
    line-height: 1.6;
}

.quote-author {
    font-weight: 700;
    color: var(--dark-blue);
}

.quote-title {
    font-size: 0.85rem;
    color: #6c757d;
}

/* Executive Summary Highlights */
.highlights-list {
    list-style: none;
    padding: 0;
    margin: 2rem 0;
}

.highlights-list li {
    padding: 1rem 0;
    border-bottom: 1px dashed #e0e0e0;
    display: flex;
    gap: 1rem;
}

.highlights-list li:last-child {
    border-bottom: none;
}

.highlight-icon {
    color: var(--primary-blue);
    font-size: 1.2rem;
    min-width: 30px;
}

.highlight-text {
    color: #495057;
    line-height: 1.6;
}

/* Second PDF Section */
.second-pdf-section {
    margin-top: 4rem;
    padding: 2.5rem;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border-radius: 15px;
}

.second-pdf-header {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.second-pdf-icon {
    width: 70px;
    height: 70px;
    background: var(--primary-blue);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 2rem;
}

.second-pdf-header h3 {
    color: var(--dark-blue);
    font-size: 1.8rem;
    font-weight: 700;
    margin-bottom: 0.3rem;
}

.second-pdf-header p {
    color: #6c757d;
    margin-bottom: 0;
}

.second-pdf-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 2rem;
}

.second-pdf-description {
    flex: 1;
    min-width: 300px;
}

.second-pdf-description ul {
    list-style: none;
    padding: 0;
    margin: 1rem 0 0;
}

.second-pdf-description li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
    gap: 0.8rem;
    color: #495057;
}

.second-pdf-description li i {
    color: var(--primary-blue);
}

.second-pdf-gifs {
    display: flex;
    gap: 20px;
    background: white;
    padding: 15px 30px;
    border-radius: 60px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.05);
}

/* Responsive */
@media (max-width: 992px) {
    .strategic-grid {
        grid-template-columns: 1fr;
    }
    
    .principles-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .quotes-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .vision-card .vision-text {
        font-size: 1.8rem;
    }
}

@media (max-width: 768px) {
    .principles-grid {
        grid-template-columns: 1fr;
    }
    
    .quotes-grid {
        grid-template-columns: 1fr;
    }
    
    .cover-gifs {
        bottom: 15px;
        right: 15px;
        padding: 10px 15px;
    }
    
    .gif-item span {
        font-size: 0.9rem;
    }
    
    .gif-item img {
        width: 30px;
        height: 30px;
    }
    
    .second-pdf-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .section-header h2 {
        font-size: 1.8rem;
    }
}
</style>

<section class="blueprint-wrapper">
    <div class="container">
        <!-- Cover Image Section with GIFs -->
        <div class="cover-section" data-aos="fade-up">
            <div class="cover-container">
                <!-- Cover Image - REPLACE THIS PATH WITH YOUR ACTUAL COVER IMAGE -->
                <img src="/assets/images/blue-print-thc.png" alt="Jumuiya TCH Blueprint 2030 Cover" class="cover-image">
                
                <!-- Eye and Download GIFs -->
                <div class="cover-gifs">
                    <div class="gif-item" onclick="window.open('/assets/content-files/JKP-TCH-Blueprint-2030-1.pdf', '_blank')">
                        <!-- REPLACE THESE PATHS WITH YOUR ACTUAL GIF PATHS -->
                        <img src="/assets/images/icons8-eye.gif" alt="Preview" onerror="this.src='https://via.placeholder.com/40?text=👁'">
                        <span>Preview</span>
                    </div>
                    <div class="gif-item" onclick="window.location.href='/assets/content-files/JKP-TCH-Blueprint-2030-1.pdf'">
                        
                        <img src="/assets/images/icons8-downloads-folder.gif" alt="Download" onerror="this.src='https://via.placeholder.com/40?text=⬇'">
                        <span>Download Full Blueprint</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Key Content from the PDF -->
        
        <!-- Vision Section -->
        <div class="vision-card" data-aos="fade-up">
            <h3>Our Vision 2030</h3>
            <div class="vision-text">
                "A globally competitive and sustainable Kenya coastal Tourism and Cultural Heritage destination by 2030"
            </div>
        </div>

        <!-- Strategic Objectives -->
        <div class="section-header" data-aos="fade-up">
            <h2>Strategic Objectives</h2>
            <div class="subtitle">Four pillars guiding our transformation</div>
        </div>

        <div class="strategic-grid">
            <div class="strategic-card" data-aos="fade-up">
                <div class="strategic-number">SO1</div>
                <h4>Public Policies</h4>
                <p>To promote TCH public policies that enhance economic, social, digital and environmental sustainability of Jumuiya ya Kaunti za Pwani region.</p>
            </div>
            <div class="strategic-card" data-aos="fade-up" data-aos-delay="50">
                <div class="strategic-number">SO2</div>
                <h4>Public Infrastructures</h4>
                <p>To promote safe, viable and resilient public infrastructures to support development of TCH.</p>
            </div>
            <div class="strategic-card" data-aos="fade-up" data-aos-delay="100">
                <div class="strategic-number">SO3</div>
                <h4>Cultural Heritage & Natural Sites</h4>
                <p>To promote a collaborative and all-inclusive approach towards development of natural and cultural heritage sites and resources.</p>
            </div>
            <div class="strategic-card" data-aos="fade-up" data-aos-delay="150">
                <div class="strategic-number">SO4</div>
                <h4>TCH Industries</h4>
                <p>To increase the number and diversity of micro, small and medium TCH enterprises and community-based tourism businesses.</p>
            </div>
        </div>

        <!-- Seven Principles -->
        <div class="section-header" data-aos="fade-up">
            <h2>Guiding Principles</h2>
            <div class="subtitle">The values that shape our blueprint</div>
        </div>

        <div class="principles-grid">
            <div class="principle-item" data-aos="fade-up">
                <div class="principle-icon">D</div>
                <h5>Diversity</h5>
                <p>Embracing differences in ethnicity, beliefs, ages, and cultures</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="30">
                <div class="principle-icon">I</div>
                <h5>Inclusion</h5>
                <p>Ensuring all voices are heard and represented</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="60">
                <div class="principle-icon">E</div>
                <h5>Equity</h5>
                <p>Fair distribution of benefits across all genders</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="90">
                <div class="principle-icon">P</div>
                <h5>Plurality</h5>
                <p>Celebrating multiple perspectives and experiences</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="120">
                <div class="principle-icon">E</div>
                <h5>Ethics</h5>
                <p>Moral compass guiding responsible decision-making</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="150">
                <div class="principle-icon">S</div>
                <h5>Sustainability</h5>
                <p>Balancing environmental, social and economic needs</p>
            </div>
            <div class="principle-item" data-aos="fade-up" data-aos-delay="180">
                <div class="principle-icon">R</div>
                <h5>Responsible Tourism</h5>
                <p>Mindful approach to minimize negative impacts</p>
            </div>
        </div>

        <!-- County Leaders' Quotes -->
        <div class="county-quotes" data-aos="fade-up">
            <div class="section-header" style="margin-bottom: 1rem;">
                <h2>County Leaders Speak</h2>
                <div class="subtitle">Commitment from the six coastal counties</div>
            </div>
            
            <div class="quotes-grid">
                <div class="quote-card">
                    <p>"Implementation of this Tourism, Culture & Heritage Blueprint will definitely have positive impact on the economy and position Mombasa as a major tourist destination."</p>
                    <div class="quote-author">Mr. Mohamed Osman</div>
                    <div class="quote-title">CECM Tourism, Mombasa County</div>
                </div>
                <div class="quote-card">
                    <p>"This blueprint will go a long way in assisting with the creation of employment and reduction of poverty in Kwale County."</p>
                    <div class="quote-author">Mr. Michael Mutua</div>
                    <div class="quote-title">CECM Tourism, Kwale County</div>
                </div>
                <div class="quote-card">
                    <p>"The Kilifi County government looks forward to implementation to support growth of MSMEs in the tourism culture and heritage value chain."</p>
                    <div class="quote-author">Clara Chonga</div>
                    <div class="quote-title">CECM Tourism, Kilifi County</div>
                </div>
                <div class="quote-card">
                    <p>"This blueprint lays emphasis on using established attractions such as UNESCO heritage sites to develop new tourism routes in lesser visited areas."</p>
                    <div class="quote-author">Yahya Borrow</div>
                    <div class="quote-title">CECM Trade, Tana River County</div>
                </div>
                <div class="quote-card">
                    <p>"Sustainable tourism is especially critical in Lamu County whose tourism is centered around environmentally vulnerable islands."</p>
                    <div class="quote-author">Aisha Abdalla Miraj</div>
                    <div class="quote-title">CECM Trade, Lamu County</div>
                </div>
                <div class="quote-card">
                    <p>"Implementation will go a long way in exploring untapped natural, cultural and heritage assets in Taita-Taveta."</p>
                    <div class="quote-author">Gloria Monikombo</div>
                    <div class="quote-title">Ag. CECM Trade, Taita Taveta</div>
                </div>
            </div>
        </div>

        <!-- Executive Summary Highlights -->
        <div class="section-header" data-aos="fade-up">
            <h2>Executive Highlights</h2>
            <div class="subtitle">Key insights from the blueprint</div>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-12">
                <ul class="highlights-list">
                    <li>
                        <span class="highlight-icon"><i class="bi bi-check-circle-fill"></i></span>
                        <span class="highlight-text"><strong>Main Challenge:</strong> Limited direct benefit local communities receive from tourism despite high visitor numbers</span>
                    </li>
                    <li>
                        <span class="highlight-icon"><i class="bi bi-check-circle-fill"></i></span>
                        <span class="highlight-text"><strong>Tourism Impact:</strong> Tourism contributes 10.4% to Kenya's GDP and directly employs 990,000 individuals</span>
                    </li>
                    <li>
                        <span class="highlight-icon"><i class="bi bi-check-circle-fill"></i></span>
                        <span class="highlight-text"><strong>Coastal Heritage:</strong> 7 UNESCO World Heritage sites in Kenya, 3 found in the coast region - Lamu Old Town, Sacred Mijikenda Kaya Forests, Fort Jesus</span>
                    </li>
                    <li>
                        <span class="highlight-icon"><i class="bi bi-check-circle-fill"></i></span>
                        <span class="highlight-text"><strong>Declining Trend:</strong> Coast visitors dropped from 37% of all visitors in 2018 to 32% in 2022</span>
                    </li>
                    <li>
                        <span class="highlight-icon"><i class="bi bi-check-circle-fill"></i></span>
                        <span class="highlight-text"><strong>Methodology:</strong> Co-created through Change Lab workshop with 4 key areas: Public Policies, Public Infrastructures, Cultural Heritage, TCH Industries</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Second PDF Section -->
        <div class="second-pdf-section" data-aos="fade-up">
            <div class="second-pdf-header">
                <div class="second-pdf-icon">
                    <i class="bi bi-file-earmark-pdf"></i>
                </div>
                <div>
                    <h3>Executive Summary & Brochure</h3>
                    <p>A quick overview of the Kenya Coast Tourism & Cultural Heritage Blueprint 2030</p>
                </div>
            </div>
            
            <div class="second-pdf-content">
                <div class="second-pdf-description">
                    <p><strong>This concise document includes:</strong></p>
                    <ul>
                        <li><i class="bi bi-check-lg"></i> Vision and Strategic Objectives overview</li>
                        <li><i class="bi bi-check-lg"></i> Key challenges and opportunities</li>
                        <li><i class="bi bi-check-lg"></i> Summary of the 7 guiding principles</li>
                        <li><i class="bi bi-check-lg"></i> County commitments and quotes</li>
                        <li><i class="bi bi-check-lg"></i> Implementation framework highlights</li>
                    </ul>
                </div>
                
                <div class="second-pdf-gifs">
                    <div class="gif-item" onclick="window.open('/assets/content-files/JUMUIYA YA KAUNTI ZA PWANI 2030 DEVELOPMENT BLUEPRINT.pdf', '_blank')">
                        <!-- REPLACE THESE PATHS WITH YOUR ACTUAL GIF PATHS -->
                        <img src="/assets/images/icons8-eye.gif" alt="Preview" onerror="this.src='https://via.placeholder.com/40?text=👁'">
                        <span>Preview</span>
                    </div>
                    <div class="gif-item" onclick="window.location.href='/assets/content-files/JUMUIYA YA KAUNTI ZA PWANI 2030 DEVELOPMENT BLUEPRINT.pdf'">
                        <!-- REPLACE THESE PATHS WITH YOUR ACTUAL GIF PATHS -->
                        <img src="/assets/images/icons8-downloads-folder.gif" alt="Download" onerror="this.src='https://via.placeholder.com/40?text=⬇'">
                        <span>Download Summary</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information -->
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-md-6">
                <div class="sidebar-widget" style="background: white; padding: 2rem; border-radius: 12px; height: 100%;">
                    <h4 style="color: var(--dark-blue); margin-bottom: 1.5rem; font-weight: 700;">Document Details</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li style="padding: 0.7rem 0; border-bottom: 1px solid #f0f0f0;">
                            <strong>Full Title:</strong> Jumuiya ya Kaunti za Pwani Kenya Coast Tourism and Cultural Heritage Blueprint 2030
                        </li>
                        <li style="padding: 0.7rem 0; border-bottom: 1px solid #f0f0f0;">
                            <strong>Pages:</strong> 187 pages
                        </li>
                        <li style="padding: 0.7rem 0; border-bottom: 1px solid #f0f0f0;">
                            <strong>Published:</strong> October 2023
                        </li>
                        <li style="padding: 0.7rem 0; border-bottom: 1px solid #f0f0f0;">
                            <strong>Printed in:</strong> Kenya
                        </li>
                        <li style="padding: 0.7rem 0; border-bottom: 1px solid #f0f0f0;">
                            <strong>Funded by:</strong> European Union, Co-funded by Camões, I.P.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="sidebar-widget" style="background: white; padding: 2rem; border-radius: 12px; height: 100%;">
                    <h4 style="color: var(--dark-blue); margin-bottom: 1.5rem; font-weight: 700;">Contact Information</h4>
                    <p><strong>Jumuiya Economic Development Secretariat</strong></p>
                    <p><i class="bi bi-geo-alt" style="color: var(--primary-blue); margin-right: 10px;"></i> Bustani Close, Links Road, Nyali, Mombasa</p>
                    <p><i class="bi bi-telephone" style="color: var(--primary-blue); margin-right: 10px;"></i> +254 777 101115</p>
                    <p><i class="bi bi-envelope" style="color: var(--primary-blue); margin-right: 10px;"></i> secretariat@jumuiya.org</p>
                    <p><i class="bi bi-globe" style="color: var(--primary-blue); margin-right: 10px;"></i> www.jumuiya.org</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>