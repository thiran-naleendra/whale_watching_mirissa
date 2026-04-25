<?php
require_once __DIR__ . "/config.php";

/*
Expected variables per page:
$page_title
$page_description
$page_canonical
$page_og_image (optional)
$page_og_image_alt (optional)
$page_robots (optional)
$breadcrumb_label (optional)
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

if (!isset($page_og_image_alt)) {
  $page_og_image_alt = $SITE_NAME . " logo and whale watching tours in Mirissa";
}

if (!isset($page_robots)) {
  $page_robots = "index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1";
}

$site_json_ld = [
  [
    "@context" => "https://schema.org",
    "@type" => "WebSite",
    "@id" => rtrim($SITE_URL, "/") . "/#website",
    "name" => $SITE_NAME,
    "url" => rtrim($SITE_URL, "/") . "/",
    "inLanguage" => "en",
  ],
  [
    "@context" => "https://schema.org",
    "@type" => ["LocalBusiness", "TravelAgency"],
    "@id" => rtrim($SITE_URL, "/") . "/#localbusiness",
    "name" => $SITE_NAME,
    "url" => rtrim($SITE_URL, "/") . "/",
    "image" => canonical("images/logo.png"),
    "telephone" => $PHONE,
    "email" => $EMAIL,
    "address" => [
      "@type" => "PostalAddress",
      "streetAddress" => $ADDRESS_LINE_1,
      "addressLocality" => "Mirissa",
      "addressCountry" => "LK",
    ],
    "geo" => [
      "@type" => "GeoCoordinates",
      "latitude" => $LATITUDE,
      "longitude" => $LONGITUDE,
    ],
    "areaServed" => "Mirissa, Sri Lanka",
    "priceRange" => "$$",
    "openingHoursSpecification" => [
      [
        "@type" => "OpeningHoursSpecification",
        "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens" => "06:00",
        "closes" => "20:00",
      ],
    ],
  ],
];

$breadcrumb_json_ld = null;
if (!empty($breadcrumb_label) && $page_canonical !== canonical("")) {
  $breadcrumb_json_ld = [
    "@context" => "https://schema.org",
    "@type" => "BreadcrumbList",
    "itemListElement" => [
      [
        "@type" => "ListItem",
        "position" => 1,
        "name" => "Home",
        "item" => canonical(""),
      ],
      [
        "@type" => "ListItem",
        "position" => 2,
        "name" => $breadcrumb_label,
        "item" => $page_canonical,
      ],
    ],
  ];
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
  <link rel="alternate" hreflang="en" href="<?= h($page_canonical) ?>" />
  <link rel="alternate" hreflang="x-default" href="<?= h($page_canonical) ?>" />
  <meta name="robots" content="<?= h($page_robots) ?>" />
  <meta name="theme-color" content="#0ea5e9" />
  <meta name="application-name" content="<?= h($SITE_NAME) ?>" />
  <meta name="author" content="<?= h($SITE_NAME) ?>" />
  <meta name="format-detection" content="telephone=yes" />
  <meta name="geo.region" content="LK-3" />
  <meta name="geo.placename" content="Mirissa, Sri Lanka" />

  <link rel="preconnect" href="https://cdn.tailwindcss.com" />
  <link rel="preconnect" href="https://images.unsplash.com" />
  <link rel="preconnect" href="https://images.pexels.com" />

  <!-- ===================== -->
  <!-- FAVICONS & APP ICONS -->
  <!-- ===================== -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="192x192" href="images/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="512x512" href="images/android-chrome-512x512.png" />

  <link rel="manifest" href="<?= h(site_href("manifest.json")) ?>">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="<?= h($SITE_NAME) ?>">

  <!-- ===================== -->
  <!-- OPEN GRAPH -->
  <!-- ===================== -->
  <meta property="og:site_name" content="<?= h($SITE_NAME) ?>" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= h($page_canonical) ?>" />
  <meta property="og:title" content="<?= h($page_title) ?>" />
  <meta property="og:description" content="<?= h($page_description) ?>" />
  <meta property="og:image" content="<?= h($page_og_image) ?>" />
  <meta property="og:image:alt" content="<?= h($page_og_image_alt) ?>" />

  <!-- ===================== -->
  <!-- TWITTER -->
  <!-- ===================== -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= h($page_title) ?>" />
  <meta name="twitter:description" content="<?= h($page_description) ?>" />
  <meta name="twitter:image" content="<?= h($page_og_image) ?>" />
  <meta name="twitter:image:alt" content="<?= h($page_og_image_alt) ?>" />

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
  <!-- STRUCTURED DATA -->
  <!-- ===================== -->
  <script type="application/ld+json">
    <?= json_encode($site_json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
  </script>

  <?php if (!empty($breadcrumb_json_ld)): ?>
    <script type="application/ld+json">
      <?= json_encode($breadcrumb_json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
  <?php endif; ?>

  <!-- Page-specific JSON-LD -->
  <?php if (!empty($json_ld)): ?>
    <script type="application/ld+json">
      <?= json_encode($json_ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
  <?php endif; ?>

</head>

<body class="bg-white text-gray-900 antialiased scroll-smooth">

  <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:left-3 focus:z-[60] focus:bg-white focus:text-blue-700 focus:px-4 focus:py-2 focus:rounded-full focus:shadow-lg">
    Skip to content
  </a>

  <!-- GTM noscript -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4QZGDC8"
      height="0" width="0"
      style="display:none;visibility:hidden"></iframe>
  </noscript>

  <?php include __DIR__ . "/nav.php"; ?>

  <main id="main-content">
