<?php
require_once __DIR__ . "/config.php";

http_response_code(404);

$page_title = "Page Not Found | Whale Watching Mirissa";
$page_description = "The page you requested could not be found. Continue to Whale Watching Mirissa tour options, planning guide, gallery, or contact page.";
$page_canonical = canonical("404");
$page_robots = "noindex,follow";
$breadcrumb_label = "Page Not Found";

require_once __DIR__ . "/header.php";
?>

<section class="container-max mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 text-center">
  <p class="text-sm font-semibold text-blue-700 mb-3">404</p>
  <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-5">Page Not Found</h1>
  <p class="text-gray-700 max-w-2xl mx-auto leading-relaxed mb-8">
    The page may have moved, or the link may be outdated. You can continue with the main
    whale watching pages below.
  </p>

  <div class="flex flex-col sm:flex-row gap-3 justify-center">
    <a href="<?= h(site_href("")) ?>" class="rounded-full bg-blue-600 text-white px-6 py-3 font-semibold hover:bg-blue-700">
      Go Home
    </a>
    <a href="<?= h(site_href("services")) ?>" class="rounded-full border border-gray-200 text-gray-800 px-6 py-3 font-semibold hover:bg-gray-50">
      View Services
    </a>
    <a href="<?= h(site_href("whale-watching-mirissa-guide")) ?>" class="rounded-full border border-gray-200 text-gray-800 px-6 py-3 font-semibold hover:bg-gray-50">
      Read Guide
    </a>
  </div>
</section>

<?php require_once __DIR__ . "/footer.php"; ?>
