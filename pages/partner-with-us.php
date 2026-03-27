<?php

$pageTitle    = 'Partner With Us';
$currentPage  = 'contact';
$heroTitle    = 'Partner With Us';
$heroSubtitle = 'Partnership';

// Handle partner form submission
$partnerSuccess = '';
$partnerError   = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $orgName      = trim($_POST['org_name']        ?? '');
    $contactName  = trim($_POST['contact_name']    ?? '');
    $partnerEmail = trim($_POST['partner_email']   ?? '');
    $partnerPhone = trim($_POST['partner_phone']   ?? '');
    $partnerType  = trim($_POST['partner_type']    ?? '');
    $partnerMsg   = trim($_POST['partner_message'] ?? '');

    if ($orgName && $contactName && $partnerEmail && $partnerType && $partnerMsg && filter_var($partnerEmail, FILTER_VALIDATE_EMAIL)) {
        // TODO: mail($to, $subject, $body) or insert into DB
        $partnerSuccess = 'Thank you, ' . htmlspecialchars($contactName) . '! We\'ve received your partnership enquiry and will be in touch shortly.';
    } else {
        $partnerError = 'Please fill in all required fields with a valid email address.';
    }
}

$types = [
    ['icon' => 'bi-building',         'label' => 'Corporate Sponsor'],
    ['icon' => 'bi-mortarboard-fill',  'label' => 'Academic & Research'],
    ['icon' => 'bi-heart-fill',        'label' => 'Non-Profit & NGO'],
    ['icon' => 'bi-megaphone-fill',    'label' => 'Media & Press'],
    ['icon' => 'bi-gear-fill',         'label' => 'Technology Partner'],
    ['icon' => 'bi-globe',             'label' => 'Government & Public Sector'],
];

ob_start();

include __DIR__ . '/../partials/page-hero.php';
?>

<section class="contact-page py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Left Sidebar -->
            <div class="col-12 col-lg-4" data-aos="fade-right">

                <!-- Intro -->
                <h3 class="mb-3">Let's Work Together</h3>
                <p class="text-muted mb-4">Join our growing network of partners and help shape the future of our community. We welcome organisations of all sizes and sectors.</p>

                <!-- Partnership Contact Details -->
                <h5 class="mb-3">Partnership Enquiries</h5>
                <ul class="list-unstyled d-flex flex-column row-gap-3 mb-4">
                    <li class="d-flex gap-3">
                        <i class="bi bi-person-lines-fill fs-4"></i>
                        <div>
                            <strong>mail</strong><br>
                            <a href="mailto:secretariat@jumuiya.org">secretariat@jumuiya.org</a>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-telephone-fill fs-4"></i>
                        <div>
                            <strong>Direct Line</strong><br>
                            <a href="tel:+254777101115">+254 777 101 115</a>
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
                    <li class="d-flex gap-3">
                        <i class="bi bi-geo-alt-fill fs-4"></i>
                        <div>
                            <strong>Address</strong><br>
                            Jumuiya House, Bustani Close, Off Links Road, Nyali, Mombasa
                        </div>
                    </li>
                </ul>

                <hr class="mb-4">

                <!-- Why Partner -->
                <h5 class="mb-3">Why Partner With Us?</h5>
                <ul class="list-unstyled d-flex flex-column row-gap-3">
                    <li class="d-flex gap-3">
                        <i class="bi bi-graph-up-arrow fs-4 text-primary flex-shrink-0"></i>
                        <div>
                            <strong>Increased Visibility</strong>
                            <p class="text-muted small mb-0">Reach a broader audience through our established platform and community network.</p>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-people-fill fs-4 text-primary flex-shrink-0"></i>
                        <div>
                            <strong>Community Access</strong>
                            <p class="text-muted small mb-0">Connect with key stakeholders, local leaders, and engaged citizens.</p>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-award-fill fs-4 text-primary flex-shrink-0"></i>
                        <div>
                            <strong>Brand Recognition</strong>
                            <p class="text-muted small mb-0">Feature your brand across our events, publications, and digital channels.</p>
                        </div>
                    </li>
                    <li class="d-flex gap-3">
                        <i class="bi bi-lightbulb-fill fs-4 text-primary flex-shrink-0"></i>
                        <div>
                            <strong>Shared Resources</strong>
                            <p class="text-muted small mb-0">Gain access to our research, data, and collaborative initiatives.</p>
                        </div>
                    </li>
                </ul>

            </div>

            <!-- Right Column -->
            <div class="col-12 col-lg-8" data-aos="fade-left">

                <!-- Partnership Types -->
                <h5 class="mb-3">Types of Partnerships</h5>
                <div class="row g-2 mb-4">
                    <?php foreach ($types as $t): ?>
                        <div class="col-6 col-md-4">
                            <div class="border rounded p-2 d-flex align-items-center gap-2 h-100">
                                <i class="bi <?php echo $t['icon']; ?> text-primary"></i>
                                <span class="small"><?php echo $t['label']; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <hr class="mb-4">

                <!-- Partner Enquiry Form -->
                <h3 class="mb-4">Submit a Partnership Enquiry</h3>

                <?php if ($partnerSuccess): ?>
                    <div class="alert alert-success"><?php echo $partnerSuccess; ?></div>
                <?php endif; ?>
                <?php if ($partnerError): ?>
                    <div class="alert alert-danger"><?php echo $partnerError; ?></div>
                <?php endif; ?>

                <form action="/contact" method="POST">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <label for="org_name" class="form-label">Organisation Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="org_name" name="org_name"
                                   value="<?php echo htmlspecialchars($_POST['org_name'] ?? ''); ?>" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="contact_name" class="form-label">Contact Person <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="contact_name" name="contact_name"
                                   value="<?php echo htmlspecialchars($_POST['contact_name'] ?? ''); ?>" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="partner_email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="partner_email" name="partner_email"
                                   value="<?php echo htmlspecialchars($_POST['partner_email'] ?? ''); ?>" required>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="partner_phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="partner_phone" name="partner_phone"
                                   value="<?php echo htmlspecialchars($_POST['partner_phone'] ?? ''); ?>">
                        </div>
                        <div class="col-12">
                            <label for="partner_type" class="form-label">Partnership Type <span class="text-danger">*</span></label>
                            <select class="form-select" id="partner_type" name="partner_type" required>
                                <option value="" disabled <?php echo empty($_POST['partner_type']) ? 'selected' : ''; ?>>Select a partnership type</option>
                                <?php foreach ($types as $t):
                                    $selected = ($_POST['partner_type'] ?? '') === $t['label'] ? 'selected' : '';
                                ?>
                                    <option value="<?php echo htmlspecialchars($t['label']); ?>" <?php echo $selected; ?>>
                                        <?php echo htmlspecialchars($t['label']); ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="partner_message" class="form-label">Tell Us About Your Organisation <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="partner_message" name="partner_message" rows="6" required><?php echo htmlspecialchars($_POST['partner_message'] ?? ''); ?></textarea>
                        </div>
                        <div class="col-12">
                            <div class="cityWall-btn">
                                <button type="submit">Submit Enquiry <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

            </div><!-- /col -->

        </div>
    </div>
</section>

<?php
$pageContent = ob_get_clean();
require __DIR__ . '/../layout.php';