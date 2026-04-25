<?php
require_once __DIR__ . "/config.php";

$page_title = "Contact Whale Watching Mirissa (2026) | WhatsApp Booking & Support";
$page_description = "Contact Whale Watching Mirissa for bookings and tour information. WhatsApp, phone, or email support. Daily departures around 7:00 AM from Mirissa Harbour (arrive 30 minutes early).";
$page_canonical = canonical("contact");
$page_og_image = canonical("images/logo.png");
$page_og_image_alt = "Contact Whale Watching Mirissa for tour bookings";
$breadcrumb_label = "Contact";

// Local SEO schema (LocalBusiness)
$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "ContactPage",
  "name" => "Contact Whale Watching Mirissa",
  "url" => $page_canonical,
  "description" => $page_description,
  "about" => [
    "@id" => rtrim($SITE_URL, "/") . "/#localbusiness"
  ],
];

$bring_items = [
  "Comfortable clothing",
  "Sun protection and sunglasses",
  "Camera or smartphone",
  "Water and any seasickness medicine you need",
];

$whatsapp_msg = "Hello! I'd like to inquire about whale watching tours in Mirissa.";

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-gradient-to-b from-gray-50 to-white pt-20 md:pt-24 pb-12 md:pb-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- H1 -->
    <div class="text-center mb-10 md:mb-16">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 md:mb-4">
        Contact Whale Watching Mirissa
      </h1>
      <p class="text-base sm:text-lg md:text-xl text-gray-600 max-w-3xl mx-auto">
        Book your whale watching tour in Mirissa or ask questions. Fast replies via WhatsApp,
        plus phone and email support.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-12 mb-16 md:mb-24">

      <!-- Booking box -->
      <div>
        <div class="bg-gradient-to-br from-blue-600 to-teal-500 rounded-2xl md:rounded-3xl p-8 md:p-12 text-white">
          <h2 class="text-2xl md:text-3xl font-bold mb-6 md:mb-8">
            Book Your Tour
          </h2>

          <div class="space-y-4 md:space-y-6">

            <!-- WhatsApp -->
            <a
              href="<?= h(whatsapp_link($whatsapp_msg)) ?>"
              target="_blank" rel="noopener noreferrer"
              class="w-full bg-white text-blue-600 rounded-xl md:rounded-2xl p-5 md:p-6 hover:bg-blue-50 transition duration-300 flex items-center space-x-4 group text-left"
            >
              <div class="bg-blue-100 rounded-lg md:rounded-xl p-3 group-hover:bg-blue-200 transition flex-shrink-0">
                <span class="text-blue-600 text-xl md:text-2xl">💬</span>
              </div>
              <div class="flex-1 min-w-0">
                <div class="font-semibold text-base md:text-lg">WhatsApp</div>
                <div class="text-blue-600 text-xs md:text-sm">
                  Instant booking & fast replies
                </div>
              </div>
            </a>

            <!-- Phone -->
            <a
              href="<?= h(phone_href()) ?>"
              class="w-full bg-white/10 backdrop-blur-sm border-2 border-white/30 rounded-xl md:rounded-2xl p-5 md:p-6 hover:bg-white/20 transition duration-300 flex items-center space-x-4 group text-left"
            >
              <div class="bg-white/20 rounded-lg md:rounded-xl p-3 group-hover:bg-white/30 transition flex-shrink-0">
                <span class="text-white text-xl md:text-2xl">📞</span>
              </div>
              <div class="flex-1 min-w-0">
                <div class="font-semibold text-base md:text-lg">Phone</div>
                <div class="text-blue-100 text-xs md:text-sm break-all">
                  <?= h($PHONE) ?>
                </div>
              </div>
            </a>

            <!-- Email -->
            <a
              href="mailto:<?= h($EMAIL) ?>"
              class="w-full bg-white/10 backdrop-blur-sm border-2 border-white/30 rounded-xl md:rounded-2xl p-5 md:p-6 hover:bg-white/20 transition duration-300 flex items-center space-x-4 group text-left"
            >
              <div class="bg-white/20 rounded-lg md:rounded-xl p-3 group-hover:bg-white/30 transition flex-shrink-0">
                <span class="text-white text-xl md:text-2xl">✉️</span>
              </div>
              <div class="flex-1 min-w-0">
                <div class="font-semibold text-base md:text-lg">Email</div>
                <div class="text-blue-100 text-xs md:text-sm break-all">
                  <?= h($EMAIL) ?>
                </div>
              </div>
            </a>

          </div>

          <!-- Location -->
          <div class="mt-8 md:mt-10 pt-8 md:pt-10 border-t border-white/20">
            <div class="flex items-start space-x-4">
              <span class="text-white text-xl mt-1 flex-shrink-0">📍</span>
              <div>
                <div class="font-semibold mb-1 md:mb-2 text-base md:text-lg">
                  Meeting Point
                </div>
                <div class="text-blue-100 text-sm md:text-base">
                  <?= h($ADDRESS_LINE_1) ?><br />
                  <?= h($ADDRESS_LINE_2) ?>
                </div>
                <p class="text-blue-100 text-xs md:text-sm mt-2">
                  Arrive 30 minutes before departure for check-in.
                </p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Info boxes -->
      <div class="space-y-6 md:space-y-8">

        <!-- Tour info -->
        <div class="bg-white rounded-2xl md:rounded-3xl shadow-lg p-6 md:p-8">
          <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-6">
            Tour Information
          </h2>

          <div class="space-y-5 md:space-y-6">

            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 rounded-lg md:rounded-xl p-3 flex-shrink-0">
                <span class="text-blue-600 text-lg">🕒</span>
              </div>
              <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">
                  Schedule
                </h3>
                <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                  Daily departures around <strong>7:00 AM</strong><br />
                  Duration: <strong>3–5 hours</strong><br />
                  Arrival: <strong>30 minutes early</strong>
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="bg-teal-100 rounded-lg md:rounded-xl p-3 flex-shrink-0">
                <span class="text-teal-600 text-lg">📅</span>
              </div>
              <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">
                  Best Season
                </h3>
                <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                  Main season: <strong>mid-July to April</strong><br />
                  Calm Ocean: <strong>October to April</strong><br />
                  
                </p>
              </div>
            </div>

            <div class="flex items-start space-x-4">
              <div class="bg-blue-100 rounded-lg md:rounded-xl p-3 flex-shrink-0">
                <span class="text-blue-600 text-lg">💬</span>
              </div>
              <div class="flex-1 min-w-0">
                <h3 class="font-semibold text-gray-900 mb-1 md:mb-2 text-sm md:text-base">
                  Booking Tip
                </h3>
                <p class="text-gray-600 text-xs md:text-sm leading-relaxed">
                  Advance booking recommended (especially peak months).<br />
                  Fast confirmation via WhatsApp.
                </p>
              </div>
            </div>

          </div>
        </div>

        <!-- What to bring -->
        <div class="bg-blue-50 rounded-2xl md:rounded-3xl p-6 md:p-8">
          <h2 class="text-lg md:text-2xl font-bold text-gray-900 mb-4 md:mb-6">
            What to Bring
          </h2>

          <ul class="space-y-3 md:space-y-4">
            <?php foreach ($bring_items as $item): ?>
              <li class="flex items-start">
                <svg
                  class="w-4 h-4 md:w-5 md:h-5 text-teal-500 mr-3 mt-0.5 flex-shrink-0"
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
                <span class="text-gray-700 text-sm md:text-base"><?= h($item) ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

      </div>
    </div>

    <!-- CTA -->
    <div class="bg-gradient-to-r from-blue-600 to-teal-500 rounded-2xl md:rounded-3xl p-8 md:p-12 text-center text-white">
      <h2 class="text-2xl md:text-3xl font-bold mb-4">
        Ready to Book Your Mirissa Whale Watching Tour?
      </h2>
      <p class="text-base md:text-lg text-blue-100 mb-8 max-w-2xl mx-auto leading-relaxed">
        Message us on WhatsApp for availability, pricing, and tour options. We’ll reply quickly.
      </p>

      <a
        href="<?= h(whatsapp_link($whatsapp_msg)) ?>"
        target="_blank" rel="noopener noreferrer"
        class="bg-white text-blue-600 px-8 md:px-10 py-3 md:py-4 rounded-full font-semibold hover:bg-blue-50 transition duration-300 inline-flex items-center space-x-2 text-base md:text-lg shadow-xl"
      >
        <span>💬</span>
        <span>Book via WhatsApp</span>
      </a>
    </div>

  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
