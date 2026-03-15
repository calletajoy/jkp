<?php
$heroSubtitle = $heroSubtitle ?? $pageTitle ?? '';
?>

<section class="page-hero position-relative">
    <div class="position-relative overflow-hidden" style="height: 280px;">

        <!-- Background Video -->
        <video autoplay muted loop playsinline
            class="w-100 h-100 position-absolute top-0 start-0"
            style="object-fit: cover; object-position: center;">
            <source src="/assets/videos/ocean wave.mp4" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="cover-images-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
            <div class="container">
                <div class="banner-content text-center">
                    <h1 class="text-white my-2">
                        <span class="cssanimation lePopUp sequence">
                            <?php echo htmlspecialchars($heroTitle ?? 'Page Title'); ?>
                        </span>
                    </h1>

                    <?php if ($heroSubtitle): ?>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item">
                                    <a href="/" class="text-white">Home</a>
                                </li>
                                <li class="breadcrumb-item text-white active" aria-current="page">
                                    <?php echo htmlspecialchars($heroSubtitle); ?>
                                </li>
                            </ol>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>