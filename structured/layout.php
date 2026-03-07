<?php
/**
 * layout.php — Master layout template
 * Usage: include this file AFTER defining $pageTitle and $pageContent
 *
 * Variables expected from each page:
 *   $pageTitle   (string) — <title> tag content
 *   $bodyClass   (string, optional) — extra class on <body>
 *   $extraHead   (string, optional) — extra <head> HTML (page-specific CSS, meta, etc.)
 *   $extraScripts(string, optional) — extra scripts before </body>
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/partials/head.php'; ?>
    <?php if (!empty($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? htmlspecialchars($bodyClass) : ''; ?>">

    <?php include __DIR__ . '/partials/header.php'; ?>

    <main class="home-one">
        <?php
        // Page content is rendered by including the page file.
        // Each page echoes / outputs its own HTML sections.
        if (!empty($pageContent)) echo $pageContent;
        ?>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php include __DIR__ . '/partials/scripts.php'; ?>
    <?php if (!empty($extraScripts)) echo $extraScripts; ?>

</body>
</html>