<?php
require_once __DIR__ . "/config.php";

$page_title = "Whale Watching Services in Mirissa (2026) | Shared & Private Boat Tours";
$page_description = "Compare whale watching services in Mirissa: shared boat tours, private speed boat trips, and private charters. Licensed local crew, daily departures, and easy booking for 2026 season.";
$page_canonical = canonical("services");
$page_og_image = canonical("images/islandbreezeboat.jpg");
$page_og_image_alt = "Shared whale watching boat in Mirissa Harbour";
$breadcrumb_label = "Whale Watching Services";

$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "Service",
  "name" => "Whale Watching Services in Mirissa",
  "areaServed" => "Mirissa, Sri Lanka",
  "serviceType" => "Whale watching tours",
  "provider" => [
    "@id" => rtrim($SITE_URL, "/") . "/#localbusiness"
  ],
  "hasOfferCatalog" => [
    "@type" => "OfferCatalog",
    "name" => "Whale Watching Tour Options",
    "itemListElement" => [
      ["@type" => "Offer", "name" => "Shared Whale Watching Tour"],
      ["@type" => "Offer", "name" => "Private Speed Boat Experience"],
      ["@type" => "Offer", "name" => "Private Charter Tour"]
    ]
  ],
  "url" => $page_canonical
];

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-white">
  <section class="relative h-[60vh] md:h-[65vh] flex items-center justify-center text-center bg-cover bg-center pt-28 md:pt-32"
           style="background-image:url('images/islandbreezeboat.webp');">
    <div class="absolute inset-0 bg-black/55"></div>
    <div class="relative z-10 max-w-4xl px-4">
      <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-5">Whale Watching Services in Mirissa</h1>
      <p class="text-base sm:text-lg md:text-xl text-blue-50 mb-6 leading-relaxed">
        Updated for the <strong>2026 whale season</strong>. Compare shared tours, private speed boats, and private charters — all departing from <strong>Mirissa Harbour</strong>.
      </p>
      <a href="<?= h($BOOKING_URL) ?>" target="_blank" rel="noopener noreferrer"
         class="bg-blue-600 text-white px-6 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-lg">
        Book Now
      </a>
      <p class="text-blue-100 text-xs mt-3">Tip: For best availability in peak season, reserve early.</p>
    </div>
  </section>

  <div class="container-max mx-auto px-4 sm:px-6 lg:px-8 mt-10">
    <section class="max-w-3xl mx-auto text-center mb-10">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-3">Choose the Right Whale Watching Tour</h2>
      <p class="text-gray-700 leading-relaxed">
        Shared tours are the most affordable. Private speed boats are fast and flexible. Private charters are ideal for groups who want privacy and comfort.
      </p>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 mb-12 md:mb-16">

      <!-- Card 1 -->
      <div class="bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden flex flex-col">
        <div class="bg-gradient-to-br from-blue-600 to-teal-500 p-6 md:p-8">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-2">Shared Whale Watching Tour</h3>
          <div class="text-lg md:text-xl font-bold text-teal-100">Most Popular</div>
        </div>
        <div class="p-6 md:p-8 flex-1 flex flex-col">
          <p class="text-gray-700 mb-5 leading-relaxed text-sm md:text-base flex-1">
            Join fellow ocean lovers on our spacious double-decker boat — a great choice for families and budget-friendly travelers.
          </p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Daily departure at 7:00 AM (Mirissa Harbour)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Large boat capacity (up to ~70 guests)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Breakfast included (season/availability may vary)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Experienced captain & crew</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Safety equipment provided</span></li>
          </ul>
          <a href="<?= h($BOOKING_URL) ?>" target="_blank" rel="noopener noreferrer"
             class="w-full text-center bg-gradient-to-r from-blue-600 to-teal-500 text-white py-3 rounded-full font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300">
            Reserve Now
          </a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden flex flex-col">
        <div class="bg-gradient-to-br from-blue-600 to-teal-500 p-6 md:p-8">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-2">Private Speed Boat Experience</h3>
          <div class="text-lg md:text-xl font-bold text-teal-100">Private</div>
        </div>
        <div class="p-6 md:p-8 flex-1 flex flex-col">
          <p class="text-gray-700 mb-5 leading-relaxed text-sm md:text-base flex-1">
            A faster private option for couples and small groups. Save time traveling and spend more time whale watching.
          </p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Private boat (ideal for small groups)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Approx. 3-hour trip (depends on sightings)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Flexible start time (upon request)</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Faster repositioning during sightings</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Personal attention from crew</span></li>
          </ul>
          <a href="<?= h(whatsapp_link("I'm interested in booking Private Speed Boat Experience")) ?>" target="_blank" rel="noopener noreferrer"
             class="w-full text-center bg-gradient-to-r from-blue-600 to-teal-500 text-white py-3 rounded-full font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300">
            Check Availability
          </a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 transform hover:-translate-y-2 overflow-hidden flex flex-col">
        <div class="bg-gradient-to-br from-blue-600 to-teal-500 p-6 md:p-8">
          <h3 class="text-xl md:text-2xl font-bold text-white mb-2">Private Charter Tour</h3>
          <div class="text-lg md:text-xl font-bold text-teal-100">Premium</div>
        </div>
        <div class="p-6 md:p-8 flex-1 flex flex-col">
          <p class="text-gray-700 mb-5 leading-relaxed text-sm md:text-base flex-1">
            The most comfortable private option — your schedule, your space, your experience (ideal for groups and special occasions).
          </p>
          <ul class="space-y-3 mb-8">
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Exclusive charter</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Customizable timing & itinerary</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Extended tour options available</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>More privacy + comfort onboard</span></li>
            <li class="flex items-start text-sm md:text-base"><span class="text-teal-500 mr-3 mt-0.5">✔</span><span>Refreshments available on request</span></li>
          </ul>
          <a href="<?= h(whatsapp_link("I'm interested in booking Private Charter Tour")) ?>" target="_blank" rel="noopener noreferrer"
             class="w-full text-center bg-gradient-to-r from-blue-600 to-teal-500 text-white py-3 rounded-full font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300">
            Check Availability
          </a>
        </div>
      </div>

    </div>

    <div class="bg-blue-50 rounded-2xl md:rounded-3xl p-8 md:p-12">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <div>
          <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Whale Season Tips (Mirissa)</h3>
          <p class="text-base md:text-lg text-gray-700 mb-6 leading-relaxed">
            Peak season often offers the highest chance of sightings. Arrive early, bring sun protection, and keep your camera ready. Book ahead for best availability.
          </p>
          <a href="<?= h($BOOKING_URL) ?>" target="_blank" rel="noopener noreferrer"
             class="bg-blue-600 text-white px-6 md:px-8 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-700 transition duration-300 inline-flex items-center space-x-2 text-sm md:text-base">
            Check Availability
          </a>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="bg-white rounded-2xl p-6 text-center"><div class="text-3xl font-bold text-blue-600 mb-2">Daily</div><div class="text-gray-600 text-sm">Departures</div></div>
          <div class="bg-white rounded-2xl p-6 text-center"><div class="text-3xl font-bold text-blue-600 mb-2">3–5h</div><div class="text-gray-600 text-sm">Typical Duration</div></div>
          <div class="bg-white rounded-2xl p-6 text-center"><div class="text-3xl font-bold text-blue-600 mb-2">95%*</div><div class="text-gray-600 text-sm">Past Success</div></div>
          <div class="bg-white rounded-2xl p-6 text-center"><div class="text-3xl font-bold text-blue-600 mb-2">100%</div><div class="text-gray-600 text-sm">Safety Focus</div></div>
          <p class="col-span-2 text-xs text-gray-500 mt-1">*Success rate varies by day and season.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
