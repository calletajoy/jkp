<!-- Custom Footer for Events Page -->
<footer class="events-footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="assets/images/jumi10.png" alt="Jumuiya at 10 Logo">
        </div>
        
        <div class="footer-tagline">
            <p>Celebrating 10 Years of Regional Unity & Growth</p>
        </div>
        
        <div class="footer-links">
            <a href="#anniversary-section" class="footer-link">The Anniversary</a>
            <a href="pdfs/programme-overview.pdf" class="footer-link" target="_blank">Programme Overview</a>
            <a href="#sponsor-section" class="footer-link">Partners & Sponsors</a>
        </div>
        
        <div class="footer-copyright">
            <p>Copyright © 2026 Jumuiya ya Kaunti za Pwani. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
/* Events Page Footer Styles */
.events-footer {
    background: radial-gradient(circle at center, #5c7ec0 0%, #3B5B9A 100%);
    margin-top: 60px;
    padding: 60px 20px 40px;
    position: relative;
    overflow: hidden;
}

/* Decorative elements for footer */
.events-footer::before {
    content: "";
    position: absolute;
    top: -80px;
    left: -80px;
    width: 220px;
    height: 220px;
    border-radius: 50%;
    background: rgba(165, 173, 189, 0.1);
    z-index: 0;
    pointer-events: none;
}

.events-footer::after {
    content: "";
    position: absolute;
    bottom: -60px;
    right: -60px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: rgba(165, 173, 189, 0.1);
    z-index: 0;
    pointer-events: none;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 1;
}

.footer-logo {
    margin-bottom: 20px;
}

.footer-logo img {
    max-width: 180px;
    height: auto;
    filter: brightness(0) invert(1);
}

.footer-tagline p {
    font-size: 1.2rem;
    color: white;
    margin-bottom: 30px;
    font-family: 'Playfair Display', serif;
    font-style: italic;
}

.footer-links {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    margin-bottom: 40px;
}

.footer-link {
    color: white;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 500;
    transition: 0.3s;
    position: relative;
    padding-bottom: 5px;
}

.footer-link::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background: #00ced1;
    transition: width 0.3s ease;
}

.footer-link:hover {
    color: #00ced1;
}

.footer-link:hover::after {
    width: 100%;
}

.footer-copyright p {
    color: rgba(255, 255, 255, 0.7);
    font-size: 0.85rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 30px;
    margin-top: 10px;
}

/* Responsive */
@media (max-width: 768px) {
    .events-footer {
        padding: 40px 20px 30px;
    }
    
    .footer-links {
        gap: 25px;
        flex-direction: column;
        align-items: center;
    }
    
    .footer-tagline p {
        font-size: 1rem;
    }
    
    .footer-logo img {
        max-width: 140px;
    }
}
</style>