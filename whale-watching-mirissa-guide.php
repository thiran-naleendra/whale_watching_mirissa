<?php
require_once __DIR__ . "/config.php";

$page_title = "Whale Watching Mirissa Guide 2026 | Season, Boats, Tips & Booking";
$page_description = "Plan whale watching in Mirissa with this 2026 guide: best season, departure time, shared vs private boats, safety tips, what to bring, and booking advice.";
$page_canonical = canonical("whale-watching-mirissa-guide");
$page_og_image = canonical("images/w6.jpg");
$page_og_image_alt = "Whale surfacing during a Mirissa whale watching tour";
$breadcrumb_label = "Whale Watching Guide";

$guide_faqs = [
  [
    "q" => "What is the best time for whale watching in Mirissa?",
    "a" => "The main whale watching season in Mirissa is usually from around November to April, when sea conditions are often calmer. Sightings can vary by weather, ocean conditions, and wildlife movement.",
  ],
  [
    "q" => "Is a shared boat or private boat better in Mirissa?",
    "a" => "Shared boats are usually the best value for most travelers. Private speed boats are better for couples or small groups who want flexibility, privacy, and a faster trip.",
  ],
  [
    "q" => "What time do whale watching boats leave Mirissa Harbour?",
    "a" => "Most tours leave around 7:00 AM. Guests should normally arrive about 30 minutes early for check-in, safety briefing, and boarding.",
  ],
  [
    "q" => "Are whale sightings guaranteed?",
    "a" => "No. Whale watching is a real wildlife experience, so sightings depend on nature, sea conditions, and the season. A responsible operator should not promise guaranteed sightings every day.",
  ],
];

$json_ld = [
  [
    "@context" => "https://schema.org",
    "@type" => "Article",
    "headline" => "Whale Watching Mirissa Guide 2026",
    "description" => $page_description,
    "image" => $page_og_image,
    "author" => [
      "@id" => rtrim($SITE_URL, "/") . "/#localbusiness",
    ],
    "publisher" => [
      "@id" => rtrim($SITE_URL, "/") . "/#localbusiness",
    ],
    "mainEntityOfPage" => $page_canonical,
    "dateModified" => date("Y-m-d"),
  ],
  [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(function ($faq) {
      return [
        "@type" => "Question",
        "name" => $faq["q"],
        "acceptedAnswer" => [
          "@type" => "Answer",
          "text" => $faq["a"],
        ],
      ];
    }, $guide_faqs),
  ],
];

require_once __DIR__ . "/header.php";
?>

<div class="bg-white">
  <section class="container-max mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-16 pb-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12 items-start">
      <div class="lg:col-span-2">
        <p class="text-sm font-semibold text-blue-700 mb-3">2026 Planning Guide</p>
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-5">
          Whale Watching in Mirissa: Season, Boats, Safety & Booking Tips
        </h1>
        <p class="text-lg text-gray-700 leading-relaxed">
          Mirissa is one of Sri Lanka's best-known whale watching bases, with early-morning
          boat trips from Mirissa Harbour into the Indian Ocean. This guide helps you choose
          the right tour, prepare for the sea, and book with clearer expectations.
        </p>
      </div>

      <aside class="bg-blue-50 border border-blue-100 rounded-2xl p-6">
        <h2 class="text-lg font-bold text-gray-900 mb-4">Quick Tour Facts</h2>
        <ul class="space-y-3 text-sm text-gray-700">
          <li><strong>Departure point:</strong> Mirissa Harbour</li>
          <li><strong>Common start:</strong> Around 7:00 AM</li>
          <li><strong>Check-in:</strong> About 30 minutes early</li>
          <li><strong>Typical duration:</strong> 3-5 hours</li>
          <li><strong>Booking:</strong> WhatsApp confirmation</li>
        </ul>
        <a
          href="<?= h(whatsapp_link("I'm planning whale watching in Mirissa and need advice")) ?>"
          target="_blank" rel="noopener noreferrer"
          class="mt-5 inline-flex w-full justify-center rounded-full bg-blue-600 text-white px-5 py-3 font-semibold hover:bg-blue-700"
        >
          Ask on WhatsApp
        </a>
      </aside>
    </div>
  </section>

  <section class="bg-slate-50 py-10 md:py-14">
    <div class="container-max mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="#season" class="bg-white rounded-xl border border-gray-100 p-5 hover:shadow-md transition">
          <h2 class="font-bold text-gray-900 mb-2">Best Season</h2>
          <p class="text-sm text-gray-600">Understand the calmer months and why sightings still depend on nature.</p>
        </a>
        <a href="#boats" class="bg-white rounded-xl border border-gray-100 p-5 hover:shadow-md transition">
          <h2 class="font-bold text-gray-900 mb-2">Boat Options</h2>
          <p class="text-sm text-gray-600">Compare shared big boats, private speed boats, and private charters.</p>
        </a>
        <a href="#prepare" class="bg-white rounded-xl border border-gray-100 p-5 hover:shadow-md transition">
          <h2 class="font-bold text-gray-900 mb-2">What to Bring</h2>
          <p class="text-sm text-gray-600">Prepare for sun, sea movement, early check-in, and ocean conditions.</p>
        </a>
      </div>
    </div>
  </section>

  <section class="container-max mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
      <article class="lg:col-span-2 space-y-10">
        <div id="season">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Best Time for Whale Watching in Mirissa</h2>
          <p class="text-gray-700 leading-relaxed mb-4">
            The main whale watching season in Mirissa is commonly considered to be from November to April.
            During these months, the south coast often has calmer sea conditions, which can make the trip
            more comfortable and improve the chance of a successful wildlife search.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Wildlife is never fully predictable. Blue whales, sperm whales, Bryde's whales, dolphins,
            turtles, and flying fish may be seen depending on the day, but responsible operators should
            always explain that sightings are not guaranteed.
          </p>
        </div>

        <div id="boats">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Shared Boat vs Private Boat</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
            <div class="border border-gray-200 rounded-xl p-5">
              <h3 class="font-bold text-gray-900 mb-2">Shared Big Boat</h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                Best for travelers who want the most affordable option. Shared boats are suitable for
                families, solo travelers, and groups who are comfortable joining other guests.
              </p>
            </div>
            <div class="border border-gray-200 rounded-xl p-5">
              <h3 class="font-bold text-gray-900 mb-2">Private Speed Boat</h3>
              <p class="text-gray-700 text-sm leading-relaxed">
                Better for couples and small groups who want privacy, faster movement, and more flexible
                timing. It can also be a good option for travelers with limited time.
              </p>
            </div>
          </div>
          <a href="<?= h(site_href("services")) ?>" class="mt-5 inline-flex rounded-full border border-blue-200 text-blue-700 px-5 py-2 font-semibold hover:bg-blue-50">
            Compare tour options
          </a>
        </div>

        <div id="prepare">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">What to Bring on the Boat</h2>
          <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-gray-700">
            <li class="bg-gray-50 rounded-lg p-4">Sun protection and sunglasses</li>
            <li class="bg-gray-50 rounded-lg p-4">Comfortable light clothing</li>
            <li class="bg-gray-50 rounded-lg p-4">Camera or smartphone</li>
            <li class="bg-gray-50 rounded-lg p-4">Seasickness medicine if needed</li>
            <li class="bg-gray-50 rounded-lg p-4">A light jacket for early morning wind</li>
            <li class="bg-gray-50 rounded-lg p-4">Water and personal essentials</li>
          </ul>
        </div>

        <div id="safety">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Safety and Responsible Whale Watching</h2>
          <p class="text-gray-700 leading-relaxed mb-4">
            A good Mirissa whale watching tour should include a safety briefing, life jackets or safety
            equipment, an experienced crew, and clear communication before departure. Sea conditions can
            change, so the captain's decision should always come first.
          </p>
          <p class="text-gray-700 leading-relaxed">
            Responsible whale watching also means keeping respectful distance from wildlife and avoiding
            behavior that pressures whales or dolphins. The best experience is one where guests enjoy the
            ocean without disturbing the animals.
          </p>
        </div>

        <div id="faq" class="space-y-4">
          <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Mirissa Whale Watching FAQs</h2>
          <?php foreach ($guide_faqs as $faq): ?>
            <div class="border border-gray-200 rounded-xl p-5">
              <h3 class="font-bold text-gray-900 mb-2"><?= h($faq["q"]) ?></h3>
              <p class="text-gray-700 leading-relaxed"><?= h($faq["a"]) ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      </article>

      <aside class="lg:sticky lg:top-24 h-fit space-y-5">
        <div class="rounded-2xl overflow-hidden shadow-lg">
          <img
            src="images/w6.webp"
            alt="Whale watching sighting in Mirissa Sri Lanka"
            class="w-full h-64 object-cover"
            loading="lazy"
            width="640"
            height="420"
          />
        </div>
        <div class="bg-gradient-to-br from-blue-600 to-teal-500 rounded-2xl p-6 text-white">
          <h2 class="text-xl font-bold mb-3">Need Help Choosing?</h2>
          <p class="text-blue-100 text-sm leading-relaxed mb-5">
            Tell us your date, group size, and preferred boat type. We will suggest the most suitable option.
          </p>
          <a
            href="<?= h(whatsapp_link("I need help choosing a Mirissa whale watching tour")) ?>"
            target="_blank" rel="noopener noreferrer"
            class="inline-flex w-full justify-center rounded-full bg-white text-blue-700 px-5 py-3 font-semibold hover:bg-blue-50"
          >
            Message Us
          </a>
        </div>
      </aside>
    </div>
  </section>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
