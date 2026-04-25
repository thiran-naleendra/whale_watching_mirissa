<?php
require_once __DIR__ . "/config.php";

$page_title = "Sri Lanka Tours from Mirissa (2026) | Safari, Sigiriya, Kandy & Beaches";
$page_description = "Explore Sri Lanka with day tours and custom itineraries from Mirissa: Yala safari, Sigiriya, Kandy cultural tours, and beach escapes. Message us on WhatsApp to plan your trip.";
$page_canonical = canonical("tours.php");
$page_og_image = "https://whalewatchingmirissa.com/assets/sri-lanka-tours-hero.jpg";

// Tours data (converted from React)
$tours = [
  [
    "title" => "Wildlife Safari Experience (Yala)",
    "image" => "https://images.pexels.com/photos/46254/leopard-wildcat-big-cat-botswana-46254.jpeg",
    "icon"  => "📷",
    "description" => "Discover Sri Lanka’s iconic wildlife with a safari experience. Great for travelers who want the best chance to see leopards and elephants.",
    "highlights" => [
      "Leopard spotting opportunities",
      "Elephants & other wildlife",
      "Great for photography",
      "Guided safari experience",
    ],
  ],
  [
    "title" => "Sigiriya & Cultural Heritage Day Tour",
    "image" => "https://images.pexels.com/photos/13391116/pexels-photo-13391116.jpeg",
    "icon"  => "⛰️",
    "description" => "Explore Sigiriya Rock Fortress and key cultural sites. Ideal for history lovers and first-time visitors to Sri Lanka.",
    "highlights" => [
      "Sigiriya Rock Fortress climb",
      "UNESCO heritage sites",
      "Ancient ruins & history",
      "Local cultural experiences",
    ],
  ],
  [
    "title" => "South Coast Beach Escapes",
    "image" => "https://images.pexels.com/photos/1450360/pexels-photo-1450360.jpeg?auto=compress&cs=tinysrgb&w=1200",
    "icon"  => "🌴",
    "description" => "Relax on beautiful beaches along Sri Lanka’s coast. Perfect to combine with Mirissa whale watching and coastal sightseeing.",
    "highlights" => [
      "Beach time & swimming",
      "Snorkeling locations (seasonal)",
      "Sunset spots",
      "Beachside dining options",
    ],
  ],
  [
    "title" => "Kandy Day Tour (Temple & Culture)",
    "image" => "https://images.pexels.com/photos/322437/pexels-photo-322437.jpeg",
    "icon"  => "📍",
    "description" => "Visit Kandy and explore cultural highlights including the Temple of the Tooth. A great choice for culture and scenic views.",
    "highlights" => [
      "Temple of the Tooth",
      "Botanical gardens",
      "Cultural show options",
      "Hill country scenery",
    ],
  ],
];

// JSON-LD schema (CollectionPage)
$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "CollectionPage",
  "name" => "Sri Lanka Tours from Mirissa",
  "url"  => canonical("tours.php"),
  "isPartOf" => [
    "@type" => "WebSite",
    "name" => "Whale Watching Mirissa",
    "url"  => $SITE_URL,
  ],
  "about" => [
    ["@type" => "Thing", "name" => "Sri Lanka tours"],
    ["@type" => "Place", "name" => "Mirissa"],
  ],
];

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-white">

  <!-- Hero -->
  <section
    class="relative h-[75vh] md:h-[85vh] flex items-center justify-center text-center bg-cover bg-center"
    style="background-image:url('https://images.unsplash.com/photo-1753442361369-e2079446a2b7?q=80&w=1600&auto=format&fit=crop&ixlib=rb-4.1.0');"
  >
    <div class="absolute inset-0 bg-black/55"></div>

    <div class="relative z-10 max-w-4xl px-4">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-6">
        Sri Lanka Tours from Mirissa
      </h1>

      <p class="text-base sm:text-lg md:text-2xl text-blue-50 mb-8 leading-relaxed">
        Combine whale watching with unforgettable island experiences — safari, cultural heritage,
        and scenic beach escapes. Updated for 2026.
      </p>

      <a
        href="<?= h(whatsapp_link("I'm interested in booking: Sri Lanka tour package")) ?>"
        target="_blank" rel="noopener noreferrer"
        class="bg-blue-600 text-white px-6 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-lg"
      >
        <span>💬</span>
        <span>Plan Your Tour via WhatsApp</span>
      </a>
    </div>
  </section>

  <!-- SEO Intro Text -->
  <section class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 text-center">
    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">
      Custom Day Trips & Multi-Day Itineraries
    </h2>
    <p class="text-gray-700 leading-relaxed">
      Staying in Mirissa? We can help you plan Sri Lanka travel beyond the coast.
      Choose a safari day trip, visit Sigiriya, explore Kandy, or build a custom
      itinerary based on your time and interests.
    </p>
  </section>

  <!-- Tours grid -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-16 pb-12 md:pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mb-12 md:mb-16">

      <?php foreach ($tours as $tour): ?>
        <div class="group bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden flex flex-col">
          <div class="relative h-56 md:h-72 overflow-hidden">
            <img
              src="<?= h($tour["image"]) ?>"
              alt="<?= h($tour["title"]) ?> - Sri Lanka tour from Mirissa"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
              loading="lazy"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>

            <div class="absolute bottom-4 md:bottom-6 left-4 md:left-6 flex items-center space-x-3">
              <div class="text-white text-2xl md:text-3xl"><?= h($tour["icon"]) ?></div>
              <h3 class="text-lg md:text-2xl font-bold text-white"><?= h($tour["title"]) ?></h3>
            </div>
          </div>

          <div class="p-6 md:p-8 flex-1 flex flex-col">
            <p class="text-gray-700 mb-6 leading-relaxed text-sm md:text-base flex-1">
              <?= h($tour["description"]) ?>
            </p>

            <div class="mb-6">
              <h4 class="font-semibold text-gray-900 mb-3 text-sm md:text-base">Highlights</h4>

              <ul class="space-y-2">
                <?php foreach ($tour["highlights"] as $highlight): ?>
                  <li class="flex items-start text-xs md:text-sm">
                    <svg
                      class="w-4 h-4 md:w-5 md:h-5 text-teal-500 mr-2 md:mr-3 mt-0.5 flex-shrink-0"
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
                    <span class="text-gray-700"><?= h($highlight) ?></span>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>

            <a
              href="<?= h(whatsapp_link("I'm interested in booking: ".$tour["title"])) ?>"
              target="_blank" rel="noopener noreferrer"
              class="w-full bg-gradient-to-r from-blue-600 to-teal-500 text-white py-3 rounded-full font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300 flex items-center justify-center space-x-2 text-sm md:text-base"
            >
              <span>💬</span>
              <span>Request Details</span>
            </a>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

    <!-- CTA -->
    <div class="text-center bg-gradient-to-r from-blue-200 to-teal-200 rounded-2xl md:rounded-3xl p-8 md:p-12">
      <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
        Need a Custom Itinerary?
      </h3>
      <p class="text-base md:text-lg text-gray-700 mb-8 max-w-2xl mx-auto leading-relaxed">
        Tell us how many days you have and what you love (safari, culture, beaches),
        and we’ll help you plan the best route.
      </p>
      <a
        href="<?= h(whatsapp_link("I'm interested in booking: Custom itinerary from Mirissa")) ?>"
        target="_blank" rel="noopener noreferrer"
        class="bg-blue-600 text-white px-6 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-lg"
      >
        <span>💬</span>
        <span>Plan My Tour</span>
      </a>
    </div>
  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
