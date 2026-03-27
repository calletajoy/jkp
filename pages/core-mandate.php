<?php
/**
 * pages/core-mandate.php — Core Mandate page with Jumuiya ya Kaunti za Pwani content.
 */

$pageTitle    = 'Our Core Mandate';
$currentPage  = 'core-mandate';
$heroTitle    = 'Our Core Mandate';
$heroSubtitle = 'Driving Regional Economic Growth';

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<!-- Add AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
/* Main Container Card */
.core-mandate-container {
    max-width: 1280px;
    margin: 0 auto;
    background: #edf1f7;
    border-radius: 32px;
    overflow: hidden;
    margin-bottom: 60px;
}

/* Intro Section */
.intro-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 40px;
    padding: 50px;
    background: #edf1f7;
    
}

.intro-left {
    flex: 1;
    min-width: 280px;
}

.intro-right {
    flex: 1;
    min-width: 280px;
}

/* Intro Text Styling */
.intro-left .semi-title {
    margin-bottom: 20px;
}

.intro-left h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #273C67;
    font-family: 'Playfair Display', serif;
    line-height: 1.3;
    margin-bottom: 20px;
}

.intro-left h4 {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2d93d6;
    margin-bottom: 15px;
    font-family: 'Playfair Display', serif;
}

.intro-left p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

/* Section Titles Inside Container */
.container-section-title {
    padding: 0 50px;
    margin-bottom: 30px;
}

.container-section-title h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #273C67;
    font-family: 'Playfair Display', serif;
    border-left: 4px solid #2d93d6;
    padding-left: 20px;
    margin-bottom: 10px;
    position: relative;
    overflow: hidden;
}

.container-section-title h3::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #2d93d6;
    transition: width 0.6s ease;
}

.container-section-title h3.animate-line::before {
    width: 100%;
}

.container-section-title p {
    color: #6c757d;
    font-size: 1rem;
    margin-left: 24px;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.5s ease;
}

.container-section-title p.animate-text {
    transform: translateY(0);
    opacity: 1;
}

/* Strategic Focus Cards */
.strategic-grid {
    padding: 0 50px 40px 50px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.strategic-card {
    background: white;
    border-radius: 20px;
    padding: 30px 20px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    cursor: pointer;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.strategic-card.animate-card {
    opacity: 1;
    transform: translateY(0);
}

.strategic-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 25px 40px rgba(0, 0, 0, 0.15);
}

.strategic-card i {
    font-size: 2.5rem;
    margin-bottom: 15px;
    display: inline-block;
    transition: transform 0.4s ease;
}

.strategic-card:hover i {
    transform: scale(1.1) rotate(5deg);
}

.strategic-card h5 {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: white;
}

.strategic-card p {
    font-size: 0.85rem;
    line-height: 1.5;
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
}

/* Individual Strategic Card Colors */
.strategic-card.education {
    background: linear-gradient(135deg, #a3bdf0 0%, #8aa9e8 100%);
}
.strategic-card.agriculture {
    background: linear-gradient(135deg, #ababf5 0%, #9595ed 100%);
}
.strategic-card.blue-economy {
    background: linear-gradient(135deg, #adeff0 0%, #8ee5e7 100%);
}
.strategic-card.tourism {
    background: linear-gradient(135deg, #7ca1eb 0%, #5f8be6 100%);
}

/* Core Mandates Grid */
.core-mandates-grid {
    padding: 0 50px 40px 50px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
}

.mandate-card {
    background: white;
    border-radius: 20px;
    padding: 25px 20px;
    text-align: center;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid rgba(0, 0, 0, 0.05);
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.mandate-card.animate-card {
    opacity: 1;
    transform: translateY(0);
}

.mandate-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 35px rgba(45, 147, 214, 0.15);
    border-color: #2d93d6;
}

.mandate-card .icon-circle {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
    transition: all 0.3s ease;
}

.mandate-card:hover .icon-circle {
    transform: scale(1.05);
}

.mandate-card .icon-circle i {
    font-size: 2rem;
    transition: transform 0.3s ease;
}

.mandate-card:hover .icon-circle i {
    transform: scale(1.1);
}

.mandate-card h5 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #273C67;
    margin-bottom: 10px;
}

.mandate-card p {
    font-size: 0.85rem;
    color: #6c757d;
    line-height: 1.5;
    margin: 0;
}

/* Icon Circle Colors */
.mandate-card.policy .icon-circle {
    background: rgba(13, 110, 253, 0.1);
}
.mandate-card.policy .icon-circle i {
    color: #0d6efd;
}
.mandate-card.coordination .icon-circle {
    background: rgba(25, 135, 84, 0.1);
}
.mandate-card.coordination .icon-circle i {
    color: #198754;
}
.mandate-card.investment .icon-circle {
    background: rgba(255, 193, 7, 0.1);
}
.mandate-card.investment .icon-circle i {
    color: #ffc107;
}
.mandate-card.promotion .icon-circle {
    background: rgba(13, 202, 240, 0.1);
}
.mandate-card.promotion .icon-circle i {
    color: #0dcaf0;
}

/* Mission Vision Cards - Expandable with Plus Sign */
.mission-vision-wrapper {
    padding: 0 50px 50px 50px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.expand-card {
    background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
    border-radius: 20px;
    border: 1px solid rgba(45, 147, 214, 0.2);
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.expand-card.animate-card {
    opacity: 1;
    transform: translateY(0);
}

.expand-card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px 30px;
    cursor: pointer;
    background: white;
    transition: background 0.3s ease;
}

.expand-card-header:hover {
    background: rgba(45, 147, 214, 0.02);
}

.expand-card-header h3 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #273C67;
    font-family: 'Playfair Display', serif;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 12px;
}

.expand-card-header h3 i {
    font-size: 1.8rem;
    color: #2d93d6;
    transition: transform 0.3s ease;
}

.expand-card-header:hover h3 i {
    transform: scale(1.1);
}

.expand-icon {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background: #2d93d6;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    font-weight: bold;
    transition: all 0.3s ease;
}

.expand-card.expanded .expand-icon {
    transform: rotate(45deg);
    background: #273C67;
}

.expand-card-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    padding: 0 30px;
}

.expand-card.expanded .expand-card-content {
    max-height: 300px;
    padding: 0 30px 25px 30px;
}

.expand-card-content p {
    font-size: 1.1rem;
    line-height: 1.6;
    color: #555;
    margin: 0;
    font-style: italic;
    animation: fadeInUp 0.4s ease;
}

.expand-card-content .quote-author {
    margin-top: 15px;
    font-size: 0.9rem;
    color: #2d93d6;
    font-weight: 500;
    animation: fadeInUp 0.5s ease;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Impact Stats Section */
.impact-stats {
    background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
    padding: 50px;
    border-top: 1px solid rgba(0, 0, 0, 0.05);
}

.impact-stats h3 {
    font-size: 1.8rem;
    font-weight: 700;
    color: #273C67;
    font-family: 'Playfair Display', serif;
    text-align: center;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.6s ease;
}

.impact-stats h3.animate-text {
    opacity: 1;
    transform: translateY(0);
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    text-align: center;
}

.stat-item {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
}

.stat-item.animate-stat {
    opacity: 1;
    transform: translateY(0);
}

.stat-item h2 {
    font-size: 2.8rem;
    font-weight: 800;
    color: #2d93d6;
    margin-bottom: 10px;
    font-family: 'Playfair Display', serif;
    transition: all 0.3s ease;
}

.stat-item:hover h2 {
    transform: scale(1.05);
    color: #273C67;
}

.stat-item p {
    font-size: 1rem;
    color: #6c757d;
    font-weight: 500;
}

/* CTA Section */
.cta-section {
    background: linear-gradient(135deg, #273C67 0%, #2d93d6 100%);
    padding: 60px;
    text-align: center;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
}

.cta-section.animate-cta {
    opacity: 1;
    transform: translateY(0);
}

.cta-section h2 {
    font-size: 2rem;
    font-weight: 700;
    color: white;
    font-family: 'Playfair Display', serif;
    margin-bottom: 15px;
}

.cta-section p {
    font-size: 1rem;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 30px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-btn {
    padding: 12px 32px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.cta-btn::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: translate(-50%, -50%);
    transition: width 0.6s, height 0.6s;
}

.cta-btn:hover::before {
    width: 300px;
    height: 300px;
}

.cta-btn-primary {
    background: white;
    color: #273C67;
}

.cta-btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

.cta-btn-outline {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.cta-btn-outline:hover {
    background: white;
    color: #273C67;
    transform: translateY(-3px);
}

/* Intro Section Animation */
.intro-left, .intro-right {
    opacity: 0;
    transform: translateX(-20px);
    transition: all 0.6s ease;
}

.intro-right {
    transform: translateX(20px);
}

.intro-left.animate-intro, .intro-right.animate-intro {
    opacity: 1;
    transform: translateX(0);
}

/* Responsive */
@media (max-width: 1024px) {
    .strategic-grid,
    .core-mandates-grid,
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    
    .mission-vision-wrapper {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .intro-wrapper {
        flex-direction: column;
        padding: 30px;
    }
    
    .container-section-title {
        padding: 0 30px;
    }
    
    .strategic-grid,
    .core-mandates-grid,
    .stats-grid {
        grid-template-columns: 1fr;
        padding: 0 30px 30px 30px;
    }
    
    .mission-vision-wrapper {
        padding: 0 30px 30px 30px;
    }
    
    .impact-stats {
        padding: 30px;
    }
    
    .cta-section {
        padding: 40px 20px;
    }
    
    .cta-section h2 {
        font-size: 1.5rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
    
    .cta-btn {
        width: 100%;
        max-width: 250px;
        text-align: center;
    }
}
</style>

<!-- Main Container Card -->
<div class="core-mandate-container">

    <!-- Intro Section - Left and Right -->
    <div class="intro-wrapper">
        <div class="intro-left" id="introLeft">
            <div class="semi-title">
                <div class="animated-circles">
                    <div class="small-circle-start"></div>
                    <span class="title">JKP Core Mandate</span>
                    <div class="small-circle-end"></div>
                </div>
            </div>
            <h2>Driving Socio-Economic<br>Development of the Coast</h2>
        </div>
        <div class="intro-right" id="introRight">
            <h4>Introduction</h4>
            <p>The <strong>JKP Secretariat</strong> plays a central role in advancing the shared development goals of the coastal counties. Its responsibility is to maintain a broad understanding of the region's opportunities and challenges while creating an enabling environment that supports collaboration, innovation, and investment.</p>
            <p>Through coordinated initiatives and strategic partnerships, the Secretariat provides a platform for the <strong>socio-economic development of the coastal region</strong>, working to transform the region and improve the livelihoods of its communities.</p>
        </div>
    </div>

    <!-- Strategic Focus Areas -->
    <div class="container-section-title" id="sectionTitle1">
        <h3>Strategic Focus Areas</h3>
        <p>Driving growth through key sectors of the coastal economy</p>
    </div>
    <div class="strategic-grid">
        <div class="strategic-card education" data-delay="0"> <i class="bi bi-book-half"></i>
            <h5>Education & Academia</h5>
            <p>Partnering with 3 universities to drive research and innovation in the coastal region</p>
        </div>
        <div class="strategic-card agriculture" data-delay="100"> <i class="bi bi-tree-fill"></i>
            <h5>Agriculture & Agribusiness</h5>
            <p>Value chain development and modern farming techniques for sustainable growth</p>
        </div>
        <div class="strategic-card blue-economy" data-delay="200"> <i class="bi bi-water"></i>
            <h5>Blue Economy</h5>
            <p>Sustainable marine resources and fisheries management for coastal communities</p>
        </div>
        <div class="strategic-card tourism" data-delay="300"> <i class="bi bi-umbrella"></i>
            <h5>Tourism</h5>
            <p>Coastal, cultural and eco-tourism development to showcase our region</p>
        </div>
    </div>

    <!-- Core Mandates Grid -->
    <div class="container-section-title" id="sectionTitle2">
        <h3>Our Core Mandates</h3>
        <p>The JKP Secretariat is mandated to drive regional development through these key pillars</p>
    </div>
    <div class="core-mandates-grid">
        <div class="mandate-card policy" data-delay="0">
            <div class="icon-circle"><i class="bi bi-file-earmark-text-fill"></i></div>
            <h5>Policy Harmonization</h5>
            <p>Aligning county policies to create a cohesive regional framework for development</p>
        </div>
        <div class="mandate-card coordination" data-delay="100">
            <div class="icon-circle"><i class="bi bi-diagram-3-fill"></i></div>
            <h5>Coordination</h5>
            <p>Harmonizing efforts across counties, universities, and the private sector</p>
        </div>
        <div class="mandate-card investment" data-delay="200">
            <div class="icon-circle"><i class="bi bi-graph-up-arrow"></i></div>
            <h5>Investment Promotion</h5>
            <p>Attracting and facilitating capital flow into the coastal region</p>
        </div>
        <div class="mandate-card promotion" data-delay="300">
            <div class="icon-circle"><i class="bi bi-megaphone-fill"></i></div>
            <h5>Regional Promotion</h5>
            <p>Marketing regional assets and opportunities to investors and partners</p>
        </div>
    </div>

    <!-- Mission & Vision Cards with Plus Sign -->
    <div class="container-section-title" id="sectionTitle3">
        <h3>Mission & Vision</h3>
        <p>Tap the + icon to reveal our guiding principles</p>
    </div>
    <div class="mission-vision-wrapper">
        <!-- Mission Card -->
        <div class="expand-card" id="missionCard" data-delay="0">
            <div class="expand-card-header" onclick="toggleExpand('missionCard')">
                <h3><i class="bi bi-bullseye"></i> Our Mission</h3>
                <div class="expand-icon">+</div>
            </div>
            <div class="expand-card-content">
                <p>"To catalyze economic growth of Kenya's coastal regional counties."</p>
                <div class="quote-author">— Jumuiya ya Kaunti za Pwani</div>
            </div>
        </div>

        <!-- Vision Card -->
        <div class="expand-card" id="visionCard" data-delay="150">
            <div class="expand-card-header" onclick="toggleExpand('visionCard')">
                <h3><i class="bi bi-eye"></i> Our Vision</h3>
                <div class="expand-icon">+</div>
            </div>
            <div class="expand-card-content">
                <p>"A regional economy that creates wealth and shared prosperity for its communities."</p>
                <div class="quote-author">— Jumuiya ya Kaunti za Pwani</div>
            </div>
        </div>
    </div>

    <!-- Impact Stats -->
    <div class="impact-stats" id="impactStats">
        <h3>Our Impact</h3>
        <div class="stats-grid">
            <div class="stat-item" data-delay="0">
                <h2>6</h2>
                <p>Member Counties</p>
            </div>
            <div class="stat-item" data-delay="100">
                <h2>3</h2>
                <p>Partner Universities</p>
            </div>
            <div class="stat-item" data-delay="200">
                <h2>4</h2>
                <p>Core Mandates</p>
            </div>
            <div class="stat-item" data-delay="300">
                <h2>4</h2>
                <p>Strategic Focus Areas</p>
            </div>
        </div>
    </div>

</div>

<script>
function toggleExpand(cardId) {
    const card = document.getElementById(cardId);
    card.classList.toggle('expanded');
}

// Intersection Observer for scroll animations
document.addEventListener('DOMContentLoaded', function() {
    // Animate intro section
    const introLeft = document.getElementById('introLeft');
    const introRight = document.getElementById('introRight');
    
    setTimeout(() => {
        introLeft.classList.add('animate-intro');
        introRight.classList.add('animate-intro');
    }, 200);
    
    // Animate section titles and cards
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate section titles
                if (entry.target.classList.contains('container-section-title')) {
                    const title = entry.target.querySelector('h3');
                    const subtitle = entry.target.querySelector('p');
                    if (title) title.classList.add('animate-line');
                    if (subtitle) subtitle.classList.add('animate-text');
                }
                
                // Animate cards within grids
                const cards = entry.target.querySelectorAll('.strategic-card, .mandate-card, .expand-card');
                if (cards.length) {
                    cards.forEach((card, index) => {
                        const delay = card.getAttribute('data-delay') || (index * 100);
                        setTimeout(() => {
                            card.classList.add('animate-card');
                        }, delay);
                    });
                }
                
                // Animate stats
                const stats = entry.target.querySelectorAll('.stat-item');
                if (stats.length) {
                    stats.forEach((stat, index) => {
                        const delay = stat.getAttribute('data-delay') || (index * 100);
                        setTimeout(() => {
                            stat.classList.add('animate-stat');
                        }, delay);
                    });
                }
                
                // Animate impact stats title
                if (entry.target.id === 'impactStats') {
                    const title = entry.target.querySelector('h3');
                    setTimeout(() => {
                        title.classList.add('animate-text');
                    }, 100);
                }
                
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });
    
    // Observe all sections
    document.querySelectorAll('.container-section-title, .strategic-grid, .core-mandates-grid, .mission-vision-wrapper, #impactStats').forEach(el => {
        observer.observe(el);
    });
    
    // Animate CTA section
    const ctaObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-cta');
                ctaObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    
    const ctaSection = document.getElementById('ctaSection');
    if (ctaSection) ctaObserver.observe(ctaSection);
    
    // Initial check for visible elements
    const visibleObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Trigger animations for elements that are already visible
                const cards = entry.target.querySelectorAll('.strategic-card, .mandate-card, .expand-card');
                cards.forEach((card, index) => {
                    const delay = card.getAttribute('data-delay') || (index * 100);
                    setTimeout(() => {
                        card.classList.add('animate-card');
                    }, delay);
                });
                visibleObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    
    document.querySelectorAll('.strategic-grid, .core-mandates-grid, .mission-vision-wrapper').forEach(el => {
        visibleObserver.observe(el);
    });
});
</script>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
?>