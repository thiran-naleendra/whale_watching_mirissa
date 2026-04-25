<?php
$nav = [
  "" => "Home",
  "services" => "Services",
  "whale-watching-mirissa-guide" => "Guide",
  "tours" => "Tours",
  "activities" => "Activities",
  "gallery" => "Gallery",
  "about" => "About",
  "contact" => "Contact",
];

$path = basename($_SERVER["SCRIPT_NAME"] ?? "");
$path = preg_replace('/\.php$/', '', $path);
if ($path === "" || $path === "index") $path = "";

if (!function_exists("active")) {
  function active($href, $path){
    return $href === $path;
  }
}
?>

<header id="site-header" class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur border-b border-gray-200 transition-shadow">
  <div class="container-max mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

    <!-- Logo -->
    <a href="<?= h(site_href("")) ?>" class="flex items-center gap-2 font-bold text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded">
      <img src="images/logo.png" alt="Whale Watching Mirissa" class="h-8 w-8 object-contain" width="32" height="32">
      <span class="hidden sm:inline">Whale Watching Mirissa</span>
    </a>

    <!-- Desktop nav -->
    <nav class="hidden lg:flex items-center gap-4 xl:gap-6 text-sm" aria-label="Main navigation">
      <?php foreach ($nav as $href => $label):
        $isActive = active($href, $path);
      ?>
        <a href="<?= h(site_href($href)) ?>"
           class="<?= $isActive ? "text-blue-700 font-semibold" : "text-gray-700 hover:text-blue-700" ?> focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded"
           <?= $isActive ? 'aria-current="page"' : '' ?>>
          <?= h($label) ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Mobile button -->
    <button id="menu-btn" class="lg:hidden text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 rounded px-2 py-1"
            type="button" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open navigation menu">
      ☰
    </button>

    <!-- CTA -->
    <a href="<?= h(whatsapp_link("I'm interested in booking a whale watching tour")) ?>"
       target="_blank" rel="noopener noreferrer"
       class="hidden lg:inline-flex rounded-full bg-blue-600 text-white px-4 py-2 text-sm font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
      WhatsApp
    </a>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200">
    <nav class="flex flex-col p-4 space-y-3" aria-label="Mobile navigation">
      <?php foreach ($nav as $href => $label):
        $isActive = active($href, $path);
      ?>
        <a href="<?= h(site_href($href)) ?>"
           class="block <?= $isActive ? "text-blue-700 font-semibold" : "text-gray-800 font-medium hover:text-blue-600" ?> py-1"
           <?= $isActive ? 'aria-current="page"' : '' ?>>
          <?= h($label) ?>
        </a>
      <?php endforeach; ?>
      <a href="<?= h(whatsapp_link("I'm interested in booking a whale watching tour")) ?>"
         class="block text-center bg-blue-600 text-white py-2 rounded-full font-semibold">
        Book via WhatsApp
      </a>
    </nav>
  </div>
</header>

<div class="h-16"></div>

<script>
  // Mobile menu toggle
  const menuButton = document.getElementById("menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  menuButton.addEventListener("click", () => {
    const isOpen = !mobileMenu.classList.contains("hidden");
    mobileMenu.classList.toggle("hidden");
    menuButton.setAttribute("aria-expanded", String(!isOpen));
  });

  // Sticky shadow on scroll
  const header = document.getElementById("site-header");
  window.addEventListener("scroll", () => {
    header.classList.toggle("shadow-lg", window.scrollY > 10);
  });
</script>
