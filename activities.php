<?php
require_once __DIR__ . "/config.php";

$page_title = "Mirissa Activities & Water Sports (2026) | Surfing, Diving, Jet Ski & More";
$page_description = "Discover the best things to do in Mirissa: surfing lessons, snorkeling & diving, jet skiing, sailing, deep sea fishing, and rafting day trips. Easy WhatsApp booking.";
$page_canonical = canonical("activities.php");
$page_og_image = "https://whalewatchingmirissa.com/assets/activities-hero.jpg";

// Activities data (converted from React)
$activities = [
  [
    "title" => "Surfing Lessons (Mirissa / Weligama)",
    "icon"  => "🌊",
    "image" => "https://images.pexels.com/photos/390051/surfer-wave-sunset-the-indian-ocean-390051.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "Learn to surf with friendly instructors. Suitable for beginners and experienced surfers.",
    "features" => [
      "Beginner-friendly lessons",
      "Board & equipment included",
      "Safety briefing on the beach",
      "Different levels available",
    ],
  ],
  [
    "title" => "Snorkeling & Diving (South Coast)",
    "icon"  => "🤿",
    "image" => "https://images.pexels.com/photos/1618606/pexels-photo-1618606.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "Explore coral reefs and marine life with local guides. Great as an add-on after whale watching.",
    "features" => [
      "Guides and equipment available",
      "Beginner-friendly options",
      "Certification courses (on request)",
      "Marine life encounters",
    ],
  ],
  [
    "title" => "Jet Skiing Adventures (Mirissa Bay)",
    "icon"  => "💨",
    "image" => "https://images.pexels.com/photos/1430676/pexels-photo-1430676.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "Enjoy a fast and fun ride on modern jet skis with a short safety briefing before you start.",
    "features" => [
      "Modern jet skis",
      "Safety briefing included",
      "Guided coastal riding options",
      "Photo opportunities",
    ],
  ],
  [
    "title" => "Sailing Experiences (Sunset & Morning)",
    "icon"  => "⛵",
    "image" => "https://images.pexels.com/photos/2562096/pexels-photo-2562096.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "Relax on a peaceful sail with scenic ocean views. Perfect for couples and small groups.",
    "features" => [
      "Professional crew",
      "Morning & sunset options",
      "Refreshments may be available",
      "Beautiful coastal scenery",
    ],
  ],
  [
    "title" => "Deep Sea Fishing",
    "icon"  => "🐟",
    "image" => "https://images.pexels.com/photos/209810/pexels-photo-209810.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "Try deep sea fishing with local experts. Learn techniques and enjoy the open ocean experience.",
    "features" => [
      "Local fishing guidance",
      "Equipment options available",
      "Great for groups",
      "Catch handling (on request)",
    ],
  ],
  [
    "title" => "White Water Rafting (Day Trip)",
    "icon"  => "💦",
    "image" => "https://images.pexels.com/photos/1732278/pexels-photo-1732278.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "description" => "A thrilling rafting day trip through jungle landscapes. A great inland adventure option.",
    "features" => [
      "Grade 2–4 rapids (seasonal)",
      "Safety gear provided",
      "Professional rafting guides",
      "Scenic river journey",
    ],
  ],
];

// JSON-LD schema (CollectionPage)
$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "CollectionPage",
  "name" => "Mirissa Activities & Water Sports",
  "url"  => canonical("activities.php"),
  "isPartOf" => [
    "@type" => "WebSite",
    "name" => "Whale Watching Mirissa",
    "url"  => $SITE_URL,
  ],
  "about" => [
    ["@type" => "Thing", "name" => "Water sports"],
    ["@type" => "Place", "name" => "Mirissa"],
    ["@type" => "Thing", "name" => "Things to do in Mirissa"],
  ],
];

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-white">

  <!-- Hero -->
  <section
    class="relative h-[70vh] md:h-[80vh] flex items-center justify-center text-center bg-cover bg-center"
    style="background-image:url('https://images.unsplash.com/photo-1752498226651-ca666568d9a2?q=80&w=1600&auto=format&fit=crop&ixlib=rb-4.1.0');"
  >
    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative z-10 max-w-4xl px-4">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6">
        Mirissa Activities & Water Sports
      </h1>

      <p class="text-base sm:text-lg md:text-2xl text-blue-50 mb-8 leading-relaxed">
        Surfing, snorkeling, diving, jet skiing, sailing, and more. Updated for 2026 —
        perfect add-ons to your Mirissa whale watching trip.
      </p>

      <a
        href="<?= h(whatsapp_link("I'm interested in booking: Mirissa activities package")) ?>"
        target="_blank" rel="noopener noreferrer"
        class="bg-blue-600 text-white px-6 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-lg"
      >
        <span>💬</span>
        <span>Book Your Adventure</span>
      </a>
    </div>
  </section>

  <!-- SEO Text Block -->
  <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
      Best Things To Do in Mirissa
    </h2>
    <p class="text-gray-700 leading-relaxed">
      Mirissa is famous for whale watching, but it also offers amazing water sports and day trips.
      Choose from surfing lessons, snorkeling and diving, jet ski rides, sailing experiences,
      deep sea fishing, or rafting adventures. Message us to check availability and timing.
    </p>
  </section>

  <!-- Activities Grid -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-16 pb-12 md:pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12 md:mb-16">

      <?php foreach ($activities as $a): ?>
        <div class="group bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-1 overflow-hidden flex flex-col">

          <div class="relative h-40 md:h-48 overflow-hidden">
            <img
              src="<?= h($a["image"]) ?>"
              alt="<?= h($a["title"]) ?> in Mirissa Sri Lanka"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
              loading="lazy"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

            <div class="absolute bottom-3 md:bottom-4 left-3 md:left-4 right-3 md:right-4">
              <div class="flex items-center space-x-2 md:space-x-3 mb-2">
                <div class="text-white text-xl md:text-2xl"><?= h($a["icon"]) ?></div>
                <h3 class="text-base md:text-xl font-bold text-white">
                  <?= h($a["title"]) ?>
                </h3>
              </div>
            </div>
          </div>

          <div class="p-5 md:p-6 flex-1 flex flex-col">
            <p class="text-gray-700 mb-4 leading-relaxed text-xs md:text-sm flex-1">
              <?= h($a["description"]) ?>
            </p>

            <ul class="space-y-2 mb-6">
              <?php foreach ($a["features"] as $f): ?>
                <li class="flex items-start text-xs md:text-sm">
                  <svg
                    class="w-4 h-4 text-teal-500 mr-2 mt-0.5 flex-shrink-0"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    aria-hidden="true"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                      clip-rule="evenodd"
                    />
                  </svg>
                  <span class="text-gray-800"><?= h($f) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>

            <a
              href="<?= h(whatsapp_link("I'm interested in booking: ".$a["title"])) ?>"
              target="_blank" rel="noopener noreferrer"
              class="w-full bg-gradient-to-r from-blue-600 to-teal-500 text-white py-2 md:py-3 rounded-full font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300 flex items-center justify-center space-x-2 text-xs md:text-base"
            >
              <span>💬</span>
              <span>Book Now</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- Packages CTA -->
    <div class="bg-blue-600 rounded-2xl md:rounded-3xl p-8 md:p-12 text-center text-white">
      <h3 class="text-2xl md:text-3xl font-bold mb-4">
        Activity Packages Available
      </h3>
      <p class="text-sm md:text-lg text-blue-100 mb-8 max-w-2xl mx-auto leading-relaxed">
        Combine multiple activities and save with package deals. Great for groups and
        travelers who want a full Mirissa adventure.
      </p>

      <a
        href="<?= h(whatsapp_link("I'm interested in booking: Mirissa activity package")) ?>"
        target="_blank" rel="noopener noreferrer"
        class="bg-white text-blue-600 px-6 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-50 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-lg"
      >
        <span>💬</span>
        <span>Ask About Packages</span>
      </a>
    </div>

  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
