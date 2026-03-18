<?php
/**
 * partials/footer.php
 * Shared footer — updated with Jumuiya ya Kaunti za Pwani content.
 */
?>

<footer>
    <div class="container">

        <!-- Subscribe Row -->
        <div class="row row-cols-1 row-cols-lg-2 subscribe-field g-4">
            <div class="col">
                <div class="subscribe-content position-relative">
                    <div class="divide-column position-absolute"></div>
                    <h3 class="tow ms-3 mb-1 text-white">Subscribe To Newsletter</h3>
                    <p class="ms-3 text-white-50">Get updates on JKP projects, events, and investment opportunities across the Coast region.</p>
                </div>
            </div>
            <div class="col">
                <form action="/newsletter-subscribe" method="POST" class="d-flex">
                    <!-- <input type="hidden" name="csrf_token" value="<?php /* echo csrf_token(); */ ?>"> -->
                    <input type="email" name="email" id="footerEmail"
                           placeholder="Enter Your Email Address" required>
                    <button class="subscript" type="submit">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Footer Columns -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 our-details">

            <!-- About / Social -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <a href="/"><img src="/assets/images/logo/Jumuiya-Logo.svg" class="card-img-top img-fluid" alt="Jumuiya ya Kaunti za Pwani" style="filter: brightness(0) invert(1); max-width: 200px;"></a>
                    <div class="card-body px-0 py-3">
                        <p class="card-text text-white">The Jumuiya ya Kaunti za Pwani (JKP) is the regional economic development body for Kenya's six coastal counties, driving shared prosperity and sustainable growth.</p>
                    </div>
                    <div class="social-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute"></div>
                            <h4 class="ms-3 text-white">Follow Us</h4>
                        </div>
                        <ul class="d-flex mt-2 gap-3 ms-3">
                            <li><a class="text-white" href="https://www.facebook.com/JKPKE/" target="_blank"><i class="link-icons fa-brands fa-facebook-f"></i></a></li>
                            <li><a class="text-white" href="https://x.com/JumuiyaBloc" target="_blank"><i class="link-icons fa-brands fa-twitter"></i></a></li>
                            <li><a class="text-white" href="https://www.linkedin.com/company/jumuiya-ya-kaunti-za-pwani-economic-development-bloc/?originalSubdomain=ke" target="_blank"><i class="link-icons fa-brands fa-linkedin-in"></i></a></li>
                            <li><a class="text-white" href="https://www.instagram.com/jumuiyapwani/" target="_blank"><i class="link-icons fa-brands fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="industry-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute"></div>
                            <h4 class="ms-3 text-white">Quick Links</h4>
                        </div>
                        <ul class="d-flex flex-column mt-3 row-gap-2 ms-3">
                            <li><a class="text-white" href="/">Home</a></li>
                            <li><a class="text-white" href="/about">About Us</a></li>
                            <li><a class="text-white" href="/services">Resources</a></li>
                            <li><a class="text-white" href="/blog">Media Center</a></li>
                            <li><a class="text-white" href="/events">Events &amp; JABEIC</a></li>
                            <li><a class="text-white" href="/contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="touch-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute"></div>
                            <h4 class="ms-3 text-white">Get In Touch</h4>
                        </div>
                        <ul class="d-flex flex-column mt-3 row-gap-2 ms-3">
                            <li>
                                <a class="text-white" href="https://maps.google.com/?q=Bustani+Close,+Links+Road+–+Nyali,+Mombasa,+Kenya" target="_blank">
                                    <i class="bi bi-geo-alt me-1"></i>
                                    Bustani Close, Links Road – Nyali, Mombasa, Kenya
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="tel:+254777101115">
                                    <i class="bi bi-telephone phone"></i> +254 777 101 115
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="mailto:info@jumuiya.org">
                                    <i class="bi bi-envelope email"></i> info@jumuiya.org
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="mailto:secretariat@jumuiya.org">
                                    <i class="bi bi-envelope email"></i> secretariat@jumuiya.org
                                </a>
                            </li>
                            <li>
                                <a class="text-white" href="https://www.jumuiya.org" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-globe"></i> www.jumuiya.org
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Working Hours -->
            <div class="col">
                <div class="card h-100 bg-transparent border-0">
                    <div class="working-info">
                        <div class="position-relative">
                            <div class="divide-column position-absolute"></div>
                            <h4 class="ms-3 text-white">Working Hours</h4>
                        </div>
                        <?php
                        $hours = [
                            'Monday - Friday' => '8:30am – 5:00pm',
                            'Saturday'        => 'Closed',
                            'Sunday'          => 'Closed',
                        ];
                        ?>
                        <ul class="mt-3 ms-3 text-white">
                            <?php foreach ($hours as $day => $time): ?>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div><?php echo $day; ?></div>
                                    <div><?php echo $time; ?></div>
                                </div>
                                <hr>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright Bar -->
    <div class="term-and-condition">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center copy-right-content">
                <div class="text-white copy-right">
                    &copy; <?php echo date('Y'); ?> Jumuiya ya Kaunti za Pwani Economic Bloc. All rights reserved.
                </div>
                <div class="button-div">
                    <a href="#" class="up-to-down-btn to-top"><i class="bi bi-chevron-double-up"></i></a>
                </div>
                <ul class="d-flex gap-3">
                    <li><a class="text-white" href="/terms">Terms</a></li>
                    <li><a class="text-white" href="/privacy">Privacy</a></li>
                    <li><a class="text-white" href="/license">License</a></li>
                    <li><a class="text-white" href="/policy">Policy</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>