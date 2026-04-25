<?php
$nav = [
  "index.php" => "Home",
  "services.php" => "Services",
  "tours.php" => "Tours",
  "activities.php" => "Activities",
  "gallery.php" => "Gallery",
  "about.php" => "About",
  "contact.php" => "Contact",
];

$path = basename(parse_url($_SERVER["REQUEST_URI"] ?? "", PHP_URL_PATH));
if ($path === "" || $path === "/") $path = "index.php";

if (!function_exists("active")) {
  function active($href, $path){
    return $href === $path;
  }
}
?>

<header id="site-header" class="fixed top-0 inset-x-0 z-50 bg-white/90 backdrop-blur border-b border-gray-200 transition-shadow">
  <div class="container-max mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">

    <!-- Logo -->
    <a href="index.php" class="flex items-center gap-2 font-bold text-blue-700">
      <img src="images/logo.png" alt="Whale Watching Mirissa" class="h-8 w-8 object-contain">
      <span class="hidden sm:inline">Whale Watching Mirissa</span>
    </a>

    <!-- Desktop nav -->
    <nav class="hidden md:flex items-center gap-6 text-sm">
      <?php foreach ($nav as $href => $label): ?>
        <a href="<?= h($href) ?>"
           class="<?= active($href,$path) ? "text-blue-700 font-semibold" : "text-gray-700 hover:text-blue-700" ?>">
          <?= h($label) ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <!-- Mobile button -->
    <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
      ☰
    </button>

    <!-- CTA -->
    <a href="<?= h(whatsapp_link("I'm interested in booking a whale watching tour")) ?>"
       target="_blank" rel="noopener noreferrer"
       class="hidden md:inline-flex rounded-full bg-blue-600 text-white px-4 py-2 text-sm font-semibold hover:bg-blue-700">
      WhatsApp
    </a>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200">
    <nav class="flex flex-col p-4 space-y-3">
      <?php foreach ($nav as $href => $label): ?>
        <a href="<?= h($href) ?>"
           class="block text-gray-800 font-medium hover:text-blue-600">
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
  document.getElementById("menu-btn").addEventListener("click", () => {
    document.getElementById("mobile-menu").classList.toggle("hidden");
  });

  // Sticky shadow on scroll
  const header = document.getElementById("site-header");
  window.addEventListener("scroll", () => {
    header.classList.toggle("shadow-lg", window.scrollY > 10);
  });
</script>
