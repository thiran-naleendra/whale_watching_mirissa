<?php
require_once __DIR__ . "/config.php";

$page_title = "Whale Watching Mirissa Photos (2026) | Real Whale & Dolphin Sightings";
$page_description = "Explore real photos from whale watching tours in Mirissa, Sri Lanka. See blue whales, dolphins, and unforgettable ocean moments captured on our daily tours.";
$page_canonical = canonical("gallery.php");
$page_og_image = "https://whalewatchingmirissa.com/assets/gallery-featured-image.jpg";

// Images (converted from React)
$images = [
  [
    "url" => "images/w2.jpg",
    "title" => "Blue Whale Nostril",
    "category" => "Whales",
  ],
  [
    "url" => "images/w3.jpg",
    "title" => "Blue Whale Spout Mirissa Sri Lanka",
    "category" => "Whales",
  ],
  [
    "url" => "images/w4.jpg",
    "title" => "Spinner Dolphins in Mirissa",
    "category" => "Dolphins",
  ],
  [
    "url" => "images/w5.jpg",
    "title" => "Blue Whale Mottled Grey Skin",
    "category" => "Whales",
  ],
  [
    "url" => "images/w6.jpg",
    "title" => "Pilot Whales Swimming Together",
    "category" => "Whales",
  ],
  [
    "url" => "images/w7.jpg",
    "title" => "Blue Whale Head Close View",
    "category" => "Whales",
  ],
  [
    "url" => "images/w8.jpg",
    "title" => "Killer Whale (Orca) at Sea",
    "category" => "Whales",
  ],
  [
    "url" => "images/w9.jpg",
    "title" => "Blue Whale Surfacing in Indian Ocean",
    "category" => "Whales",
  ],
];

// JSON-LD schema (ImageGallery)
$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "ImageGallery",
  "name" => "Whale Watching Mirissa Photo Gallery",
  "url"  => canonical("gallery.php"),
  "image" => array_map(function($img){ return $img["url"]; }, $images),
  "about" => [
    "@type" => "TouristAttraction",
    "name" => "Whale Watching Mirissa",
    "address" => [
      "@type" => "PostalAddress",
      "addressCountry" => "Sri Lanka",
    ],
  ],
];

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-gray-50 pt-20 md:pt-24 pb-12 md:pb-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- H1 -->
    <div class="text-center mb-10 md:mb-16">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-4">
        Whale Watching Mirissa Photo Gallery
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Real photos captured during our whale watching tours in Mirissa.
        Witness blue whales, dolphins, and breathtaking moments in the Indian Ocean.
      </p>
    </div>

    <!-- SEO text block -->
    <section class="max-w-3xl mx-auto text-center mb-12">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
        Real Whale & Dolphins Sightings in Mirissa
      </h2>
      <p class="text-gray-700 leading-relaxed">
        These images are from real whale watching experiences in Mirissa, Sri Lanka.
        The southern coast is one of the best places in the world to see blue whales,
        sperm whales, dolphins, and other marine life during the season.
      </p>
    </section>

    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
      <?php foreach ($images as $image): ?>
        <div class="group relative h-56 md:h-64 rounded-2xl md:rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2">
          <img
            src="<?= h($image["url"]) ?>"
            alt="<?= h($image["title"]) ?> – Whale Watching Mirissa Sri Lanka"
            loading="lazy"
            class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
          />

          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-300">
            <div class="absolute bottom-4 md:bottom-6 left-4 md:left-6 right-4 md:right-6">
              <div class="text-xs md:text-sm text-teal-300 font-semibold mb-1">
                <?= h($image["category"]) ?>
              </div>
              <h3 class="text-base md:text-lg font-bold text-white">
                <?= h($image["title"]) ?>
              </h3>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="mt-12 md:mt-16 text-center">
      <p class="text-gray-600 text-base md:text-lg leading-relaxed">
        Share your whale watching moments with us using
        <span class="font-semibold text-blue-600">#WhaleWatchingMirissa</span>
      </p>
    </div>

  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
