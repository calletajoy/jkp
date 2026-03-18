<?php
/**
 * pages/contact.php
 */

$pageTitle    = 'Contact Us';
$currentPage  = 'contact';
$heroTitle    = 'Contact Us';
$heroSubtitle = 'Contact';

// Handle form submission
$successMsg = '';
$errorMsg   = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && $email && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // TODO: mail($to, $subject, $body) or insert into DB
        $successMsg = 'Thank you, ' . htmlspecialchars($name) . '! Your message has been sent.';
    } else {
        $errorMsg = 'Please fill in all required fields with a valid email address.';
    }
}

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<section class="contact-page py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Contact Info -->
            <div class="col-12 col-lg-4" data-aos="fade-right">
                <h3 class="mb-4">Get In Touch</h3>
                <ul class="list-unstyled row-gap-3 d-flex flex-column">
                    <li class="d-flex gap-3">
                        <i class="bi bi-geo-alt-fill fs-4"></i>
                        <div>
                            <strong>Address</strong><br>
                            Bustani Close, Links Road Nyali, <br> Mombasa, Kenya,
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-telephone-fill fs-4"></i>
                        <div>
                            <strong>Phone</strong><br>
                            <a href="tel:+254 777 101 115">+254 777 101 115</a>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-envelope-fill fs-4"></i>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:secretariat@jumuiya.org">secretariat@jumuiya.org</a>
                        </div>
                    </li>
                     <li class="d-flex gap-3">
                        <i class="bi bi-envelope-fill fs-4"></i>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto: info@jumuiya.org"> info@jumuiya.org</a>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-clock-fill fs-4"></i>
                        <div>
                            <strong>Office Hours</strong><br>
                            Mon–Fri: 8:30am – 5:00pm<br>
                            Sat–Sun: Closed
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="col-12 col-lg-8" data-aos="fade-left">
                <h3 class="mb-4">Send Us a Message</h3>

                <?php if ($successMsg): ?>
                    <div class="alert alert-success"><?php echo $successMsg; ?></div>
                <?php endif; ?>
                <?php if ($errorMsg): ?>
                    <div class="alert alert-danger"><?php echo $errorMsg; ?></div>
                <?php endif; ?>

                <form action="/contact" method="POST">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name"
                                   value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email"
                                   value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="message" name="message" rows="6" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                        </div>
                        <div class="col-12">
                            <div class="cityWall-btn">
                                <button type="submit">Send Message <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';
