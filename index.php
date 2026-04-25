<?php
require_once __DIR__ . "/config.php";

$page_title = "Best Whale Watching Mirissa Sri Lanka | Private & Shared Tours 2026";
$page_description = "Book the best whale watching in Mirissa, Sri Lanka. Daily tours from Mirissa Harbour with licensed boats, safety equipment, breakfast on shared tours, and instant WhatsApp booking.";
$page_canonical = canonical("");
$page_og_image = canonical("images/w6.jpg");

// FAQ data
$faqs = [
  [
    "q" => "What time does whale watching start in Mirissa?",
    "a" => "Most whale watching tours depart at 7:00 AM from Mirissa Harbour. Please arrive 30 minutes early for check-in and briefing."
  ],
  [
    "q" => "How long is the whale watching tour in Mirissa?",
    "a" => "The tour usually lasts 3 to 5 hours. Duration depends on sea conditions and how quickly whales are located on the day."
  ],
  [
    "q" => "What whales can you see in Mirissa, Sri Lanka?",
    "a" => "Sightings vary by season and day. Guests may spot blue whales, sperm whales, Bryde’s whales, dolphins, turtles, and flying fish. Wildlife sightings are never guaranteed."
  ],
  [
    "q" => "Where is the meeting point for whale watching in Mirissa?",
    "a" => "The meeting point is Mirissa Harbour. After booking, we share the exact location and timing on WhatsApp, along with any pickup details if applicable."
  ],
  [
    "q" => "Do you guarantee whale sightings or offer refunds?",
    "a" => "We do our best to find whales, but sightings depend on nature and sea conditions. Because this is a real wildlife experience, refunds are not provided after the tour if sightings do not occur."
  ],
];

// Combine multiple JSON-LD blocks
$json_ld = [
  [
    "@context" => "https://schema.org",
    "@type" => "WebPage",
    "name" => "Whale Watching Mirissa",
    "url" => $page_canonical,
    "description" => $page_description
  ],
  [
    "@context" => "https://schema.org",
    "@type" => "TouristTrip",
    "name" => "Whale Watching Mirissa",
    "description" => "Private and shared whale watching tours from Mirissa Harbour, Sri Lanka.",
    "touristType" => ["Couples", "Families", "Groups", "Wildlife Travelers"],
    "itinerary" => [
      [
        "@type" => "Place",
        "name" => "Mirissa Harbour"
      ]
    ],
    "image" => [$page_og_image],
    "url" => $page_canonical
  ],
  [
    "@context" => "https://schema.org",
    "@type" => "FAQPage",
    "mainEntity" => array_map(function ($f) {
      return [
        "@type" => "Question",
        "name" => $f["q"],
        "acceptedAnswer" => [
          "@type" => "Answer",
          "text" => $f["a"]
        ],
      ];
    }, $faqs),
  ],
];

require_once __DIR__ . "/header.php";
?>

<!-- HERO -->
<section
  class="relative min-h-[82vh] sm:min-h-[75vh] md:min-h-[600px] flex items-center justify-center overflow-hidden pt-20 sm:pt-24 md:pt-28"
  data-hero
  data-images="https://images.pexels.com/photos/4666753/pexels-photo-4666753.jpeg|https://images.pexels.com/photos/3635870/pexels-photo-3635870.jpeg|https://images.pexels.com/photos/14019368/pexels-photo-14019368.jpeg">
  <div class="absolute inset-0 w-full h-full">
    <img
      id="hero-img"
      src="images/w6.jpg"
      alt="Best whale watching in Mirissa Sri Lanka with blue whales and dolphins"
      class="w-full h-full object-cover"
      loading="eager" />
    <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/45 to-black/70"></div>
  </div>

  <div class="relative z-10 container-max mx-auto px-4 sm:px-6 lg:px-8 w-full pb-10 sm:pb-0">
    <div class="text-center">
      <h1 class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-4 md:mb-6 leading-tight">
        Best Whale Watching in Mirissa, Sri Lanka
        <span class="block text-teal-300 mt-2 text-xl sm:text-2xl md:text-4xl">
          Daily Tours from Mirissa Harbour (2026 Season)
        </span>
      </h1>

      <p class="max-w-3xl mx-auto text-blue-100 text-sm sm:text-base md:text-lg leading-relaxed">
        Join a <strong>licensed whale watching tour in Mirissa</strong> with an experienced local crew.
        See <strong>blue whales</strong>, <strong>sperm whales</strong>, and <strong>dolphins</strong> during the season.
        Choose a <strong>shared big boat</strong> or a <strong>private speed boat</strong> and book instantly via WhatsApp.
      </p>

      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center mt-7 sm:mt-8 mb-8 sm:mb-12">
        <a
          href="<?= h(whatsapp_link("I'm interested in booking Whale Watching Tour in Mirissa")) ?>"
          target="_blank" rel="noopener noreferrer"
          class="w-full sm:w-auto bg-white text-blue-900 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-teal-400 hover:text-white transition duration-300 inline-flex items-center justify-center shadow-2xl">
          Book via WhatsApp
        </a>

        <a
          href="services.php"
          class="w-full sm:w-auto bg-white/10 text-white border border-white/30 px-6 sm:px-8 py-3 sm:py-4 rounded-full font-semibold text-base sm:text-lg hover:bg-white/20 transition duration-300 inline-flex items-center justify-center">
          View Options
        </a>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-6 max-w-2xl mx-auto">
        <?php
        $highlights = [
          ["n" => "3–5", "l" => "Hours", "d" => "Typical Tour Duration"],
          ["n" => "Daily", "l" => "7:00 AM", "d" => "Departures (Seasonal)"],
          ["n" => "Licensed", "l" => "Local Crew", "d" => "Safe Guided Experience"],
        ];
        foreach ($highlights as $h):
        ?>
          <div class="bg-white/10 backdrop-blur-md rounded-2xl p-4 sm:p-6 border border-white/20">
            <div class="text-3xl sm:text-4xl font-bold text-white mb-1"><?= h($h["n"]) ?></div>
            <div class="text-white text-sm font-semibold"><?= h($h["l"]) ?></div>
            <div class="text-blue-100 text-xs sm:text-sm"><?= h($h["d"]) ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="absolute bottom-3 left-1/2 -translate-x-1/2 z-20 flex gap-2">
    <button data-hero-dot aria-label="Show hero image 1" class="transition-all rounded-full bg-white w-8 h-2"></button>
    <button data-hero-dot aria-label="Show hero image 2" class="transition-all rounded-full bg-white/50 w-2 h-2"></button>
    <button data-hero-dot aria-label="Show hero image 3" class="transition-all rounded-full bg-white/50 w-2 h-2"></button>
  </div>
</section>

<!-- INTRO / SEO CONTENT -->
<section class="py-10 md:py-16">
  <div class="container-max mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-10 items-start">
      <div class="lg:col-span-2">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">Why Choose Whale Watching in Mirissa, Sri Lanka?</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
          <strong>Whale watching in Mirissa</strong> is one of the top marine wildlife experiences in Sri Lanka.
          The waters off the south coast are known for sightings of blue whales, sperm whales, Bryde’s whales,
          dolphins, turtles, and other marine life during the season.
        </p>
        <p class="text-gray-700 leading-relaxed mb-4">
          Our tours leave from <strong>Mirissa Harbour</strong> in the early morning, when sea conditions are usually calmer.
          Whether you choose a shared boat or a private charter, the goal is to give you a safe, comfortable, and memorable
          whale watching trip with an experienced local crew.
        </p>
        <p class="text-gray-700 leading-relaxed">
          We are based in <strong>Mirissa, Southern Province, Sri Lanka</strong>, with easy access from Weligama,
          Matara, and Galle. If you are planning a south coast holiday, whale watching in Mirissa is one of the best
          day activities to include in your trip.
        </p>

        <div class="mt-6 flex flex-wrap gap-3">
          <a href="services.php" class="inline-flex items-center px-4 py-2 rounded-full border border-gray-200 text-gray-800 hover:bg-gray-50">View Whale Watching Options</a>
          <a href="gallery.php" class="inline-flex items-center px-4 py-2 rounded-full border border-gray-200 text-gray-800 hover:bg-gray-50">See Photos & Sightings</a>
          <a href="tours.php" class="inline-flex items-center px-4 py-2 rounded-full border border-gray-200 text-gray-800 hover:bg-gray-50">Explore Sri Lanka Tours</a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-lg p-6 border border-gray-100">
        <h3 class="text-lg font-bold text-gray-900 mb-3">Quick Details</h3>
        <ul class="text-gray-700 space-y-2 text-sm">
          <li><strong>Departure:</strong> Mirissa Harbour</li>
          <li><strong>Start time:</strong> Usually 7:00 AM (arrive 30 mins early)</li>
          <li><strong>Duration:</strong> 3–5 hours</li>
          <li><strong>Location:</strong> Mirissa, Sri Lanka</li>
          <li><strong>Booking:</strong> WhatsApp instant confirmation</li>
        </ul>
        <a
          href="<?= h(whatsapp_link("I'm interested in booking Whale Watching Tour in Mirissa")) ?>"
          target="_blank" rel="noopener noreferrer"
          class="mt-5 block text-center bg-blue-600 text-white py-3 rounded-full font-semibold hover:bg-blue-700 transition">
          Book Whale Watching
        </a>
      </div>
    </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="py-10 md:py-16 bg-slate-50">
  <div class="container-max mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">What Makes Mirissa One of the Best Places for Whale Watching?</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Mirissa has become one of the most popular places in Asia for whale watching because of its access to deep ocean waters.
        This gives travelers the chance to look for large marine mammals without traveling extremely far offshore.
      </p>
      <p class="text-gray-700 leading-relaxed">
        For visitors staying on Sri Lanka’s southern coast, whale watching tours from Mirissa are convenient, scenic,
        and suitable for couples, families, photographers, and wildlife lovers looking for a unique ocean experience.
      </p>
    </div>
  </div>
</section>

<!-- TOUR CARDS -->
<section class="container-max mx-auto px-4 sm:px-6 lg:px-8 pt-12 md:pt-16 pb-12 md:pb-24">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 mb-12 md:mb-16">
    <?php
    $tours = [
      [
        "title" => "Shared Big Boat",
        "img" => "images/islandbreezeboat.jpg",
        "alt" => "Shared big boat whale watching tour from Mirissa Harbour Sri Lanka",
        "desc" => "Join a shared whale watching tour from Mirissa Harbour with a comfortable double-deck boat. Ideal for budget-friendly trips and includes breakfast onboard."
      ],
      [
        "title" => "Private Speed Boat",
        "img" => "images/speedboatmirissa.jpg",
        "alt" => "Private speed boat whale watching tour in Mirissa Sri Lanka",
        "desc" => "Book a private speed boat for a faster and more flexible whale watching trip from Mirissa. Suitable for small groups and couples."
      ],
      [
        "title" => "Private Big Boat",
        "img" => "images/pvtboat.jpg",
        "alt" => "Private big boat whale watching tour for groups in Mirissa Sri Lanka",
        "desc" => "A great option for families and private groups. Enjoy extra space, comfort, and facilities during your whale watching experience."
      ],
      [
        "title" => "Snorkeling & Diving",
        "img" => "https://images.unsplash.com/photo-1658298208155-ab71765747a1?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.1.0",
        "alt" => "Snorkeling and diving tours in Sri Lanka",
        "desc" => "Discover snorkeling and diving experiences in Sri Lanka with certified instructors and beginner-friendly guidance."
      ],
    ];
    foreach ($tours as $t):
    ?>
      <div class="group bg-white rounded-2xl md:rounded-3xl shadow-lg hover:shadow-2xl transition duration-300 overflow-hidden flex flex-col">
        <div class="relative h-48 md:h-64 overflow-hidden">
          <img src="<?= h($t["img"]) ?>" alt="<?= h($t["alt"]) ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-500" loading="lazy" />
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <div class="absolute bottom-4 md:bottom-6 left-4 md:left-6">
            <h3 class="text-lg md:text-2xl font-bold text-white"><?= h($t["title"]) ?></h3>
          </div>
        </div>
        <div class="p-6 md:p-8 flex-1 flex flex-col">
          <p class="text-gray-600 mb-6 leading-relaxed text-sm md:text-base flex-1"><?= h($t["desc"]) ?></p>
        </div>
        <a
          href="<?= h(whatsapp_link("I'm interested in booking " . $t["title"])) ?>"
          target="_blank" rel="noopener noreferrer"
          class="w-full text-center bg-gradient-to-r from-blue-600 to-teal-500 text-white py-3 font-semibold hover:from-blue-700 hover:to-teal-600 transition duration-300">
          Book Now
        </a>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- AFTER TOUR -->
  <section class="py-10 md:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 items-center">
      <div>
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">After Your Whale Watching Tour in Mirissa</h2>
        <p class="text-gray-700 leading-relaxed mb-4">
          Most tours finish by late morning. After the trip, you can relax at Mirissa Beach, enjoy a nearby café,
          or continue exploring the south coast of Sri Lanka.
        </p>
        <ul class="text-gray-700 space-y-2 mb-6">
          <li>• Relax at Mirissa Beach after the tour</li>
          <li>• Enjoy breakfast or brunch nearby</li>
          <li>• Visit Weligama, Matara, or Galle later in the day</li>
        </ul>
      </div>

      <div class="relative w-full h-72 sm:h-80 md:h-96 rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl group">
        <img
          src="images/junglecatsmirissa.jpg"
          alt="Mirissa Sri Lanka nearby places to relax after whale watching"
          class="w-full h-full object-cover group-hover:scale-105 transition duration-500"
          loading="lazy" />
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-12 md:py-24 px-0 bg-white" id="faq">
    <div class="container-max mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8">
        Frequently Asked Questions About Whale Watching in Mirissa
      </h2>

      <div class="space-y-4">
        <?php foreach ($faqs as $i => $f):
          $panelId = "faq-panel-" . $i;
        ?>
          <div class="border border-gray-200 rounded-lg overflow-hidden">
            <button
              data-faq-btn="<?= h($panelId) ?>"
              class="w-full bg-gray-50 hover:bg-gray-100 transition p-4 sm:p-5 md:p-6 flex items-center justify-between text-left"
              aria-expanded="<?= $i === 0 ? 'true' : 'false' ?>">
              <h3 class="text-sm sm:text-base md:text-lg font-semibold text-gray-900 pr-4">
                <?= h($f["q"]) ?>
              </h3>
              <span data-chevron class="transition-transform flex-shrink-0 <?= $i === 0 ? 'rotate-180' : '' ?>">⌄</span>
            </button>

            <div
              id="<?= h($panelId) ?>"
              data-faq-panel
              class="<?= $i === 0 ? '' : 'hidden' ?> bg-white p-4 sm:p-5 md:p-6 border-t border-gray-200"
              aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>">
              <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                <?= h($f["a"]) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll("[data-faq-btn]");

  buttons.forEach((btn) => {
    const panelId = btn.getAttribute("data-faq-btn");
    const panel = document.getElementById(panelId);
    const chevron = btn.querySelector("[data-chevron]");

    if (!panel) return;

    btn.addEventListener("click", () => {
      const isOpen = !panel.classList.contains("hidden");

      document.querySelectorAll("[data-faq-panel]").forEach(p => {
        p.classList.add("hidden");
        p.setAttribute("aria-hidden", "true");
      });

      document.querySelectorAll("[data-faq-btn]").forEach(b => {
        b.setAttribute("aria-expanded", "false");
      });

      document.querySelectorAll("[data-chevron]").forEach(c => {
        c.classList.remove("rotate-180");
      });

      if (!isOpen) {
        panel.classList.remove("hidden");
        panel.setAttribute("aria-hidden", "false");
        btn.setAttribute("aria-expanded", "true");

        if (chevron) chevron.classList.add("rotate-180");

        if (window.innerWidth < 768) {
          setTimeout(() => {
            panel.scrollIntoView({ behavior: "smooth", block: "start" });
          }, 150);
        }
      }
    });

    btn.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        btn.click();
      }
    });
  });
});
</script>

<?php require_once __DIR__ . "/footer.php"; ?>