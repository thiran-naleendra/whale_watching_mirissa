<?php
require_once __DIR__ . "/config.php";

/*
Expected variables per page:
$page_title
$page_description
$page_canonical
$page_og_image (optional)
$json_ld (optional array)
*/

if (!isset($page_title)) {
  $page_title = $SITE_NAME . " | Sri Lanka Whale Tours";
}

if (!isset($page_description)) {
  $page_description = "Join Mirissa's top-rated whale watching tours. 15+ years experience, 95% sighting success rate for whales and dolphins.";
}

if (!isset($page_canonical)) {
  $page_canonical = canonical("");
}

// Default OG image (absolute URL)
if (!isset($page_og_image)) {
  $page_og_image = canonical("images/logo.png");
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />

  <!-- ===================== -->
  <!-- BASIC SEO -->
  <!-- ===================== -->
  <title><?= h($page_title) ?></title>
  <meta name="description" content="<?= h($page_description) ?>" />
  <link rel="canonical" href="<?= h($page_canonical) ?>" />
  <meta name="robots" content="index,follow,max-image-preview:large" />
  <meta name="theme-color" content="#0ea5e9" />
  <meta name="application-name" content="<?= h($SITE_NAME) ?>" />

  <!-- ===================== -->
  <!-- FAVICONS & APP ICONS -->
  <!-- ===================== -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="images/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="512x512" href="images/android-chrome-512x512.png" />

  <link rel="manifest" href="/manifest.json">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="<?= h($SITE_NAME) ?>">

  <!-- ===================== -->
  <!-- OPEN GRAPH -->
  <!-- ===================== -->
  <meta property="og:site_name" content="<?= h($SITE_NAME) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= h($page_canonical) ?>" />
  <meta property="og:title" content="<?= h($page_title) ?>" />
  <meta property="og:description" content="<?= h($page_description) ?>" />
  <meta property="og:image" content="<?= h($page_og_image) ?>" />

  <!-- ===================== -->
  <!-- TWITTER -->
  <!-- ===================== -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= h($page_title) ?>" />
  <meta name="twitter:description" content="<?= h($page_description) ?>" />
  <meta name="twitter:image" content="<?= h($page_og_image) ?>" />

  <!-- ===================== -->
  <!-- TAILWIND (CDN) -->
  <!-- ===================== -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    .container-max { max-width: 80rem; }

    #site-header.scrolled {
      background-color: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(229, 231, 235, 1);
    }
  </style>

  <!-- ===================== -->
  <!-- STRUCTURED DATA (SITE NAME FIX) -->
  <!-- ===================== -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "<?= h($SITE_NAME) ?>",
    "url": "<?= h(rtrim($SITE_URL, "/")) ?>/"
  }
  </script>

  <!-- Page-specific JSON-LD -->
  <?php if (!empty($json_ld)): ?>
    <script type="application/ld+json">
      <?= json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
  <?php endif; ?>

</head>

<body class="bg-white text-gray-900 antialiased">

  <!-- GTM noscript -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4QZGDC8"
      height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>

  <?php include __DIR__ . "/nav.php"; ?>

  <main id="main-content">