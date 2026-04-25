<?php
require_once __DIR__ . "/config.php";

$page_title = "About Whale Watching Mirissa (2026) | Licensed & Ethical Boat Tours";
$page_description = "Learn about Whale Watching Mirissa — a local, safety-focused and ethical whale watching operator in Mirissa, Sri Lanka. Experienced crew, responsible wildlife viewing, and easy booking.";
$page_canonical = canonical("about.php");
$page_og_image = "https://whalewatchingmirissa.com/assets/about-team-image.jpg";

// Values (converted from React)
$values = [
  [
    "icon" => "🛡️",
    "title" => "Safety First",
    "description" => "Safety is our top priority. Our vessels carry essential safety equipment and our crew follows professional operating procedures.",
  ],
  [
    "icon" => "❤️",
    "title" => "Eco-Conscious",
    "description" => "We practice responsible whale watching by respecting marine life, keeping safe distances, and reducing our impact on the ocean.",
  ],
  [
    "icon" => "🏆",
    "title" => "Experienced Crew",
    "description" => "Our local team has deep knowledge of Mirissa waters and whale behavior, helping you enjoy a better and safer tour.",
  ],
  [
    "icon" => "👥",
    "title" => "Guest Focused",
    "description" => "We care about comfort and communication — from booking support to onboard guidance and clear trip instructions.",
  ],
];

// JSON-LD (LocalBusiness)
$json_ld = [
  "@context" => "https://schema.org",
  "@type" => "LocalBusiness",
  "name" => "Whale Watching Mirissa",
  "url" => $SITE_URL,
  "image" => $page_og_image,
  "areaServed" => "Mirissa, Sri Lanka",
  "description" => "Licensed whale watching tours in Mirissa, Sri Lanka. Ethical wildlife viewing, experienced local crew, and safety-focused boat tours.",
  "sameAs" => [],
];

require_once __DIR__ . "/header.php";
?>

<div class="min-h-screen bg-white pt-20 md:pt-24 pb-12 md:pb-24">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- H1 -->
    <div class="text-center mb-12 md:mb-16">
      <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-3 md:mb-4">
        About Our Whale Watching Company in Mirissa
      </h1>
      <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed">
        We are a Mirissa-based team offering whale watching experiences with a focus on
        safety, clear communication, and responsible wildlife viewing.
        Updated for the 2026 season.
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16 md:mb-24">
      <div>
        <div class="space-y-4 md:space-y-6 text-base md:text-lg text-gray-700 leading-relaxed">
          <p>
            We have been operating whale watching tours in Mirissa for many years, welcoming
            guests from around the world to see blue whales, sperm whales, dolphins, and more
            during the season.
          </p>
          <p>
            Our crew combines local sea knowledge with a respectful approach to marine life.
            We aim to provide a smooth tour experience — from booking support to onboard guidance.
          </p>
          <p>
            Responsible whale watching matters. We follow safe viewing distances, prioritize
            guest safety, and aim to minimize disturbance to wildlife in the Indian Ocean.
          </p>
        </div>

        <!-- Trust stats -->
        <div class="mt-8 md:mt-12 grid grid-cols-2 gap-4 md:gap-6">
          <div class="bg-blue-50 rounded-2xl p-6">
            <div class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">15+</div>
            <div class="text-gray-700 text-sm md:text-base">Years Operating</div>
          </div>
          <div class="bg-teal-50 rounded-2xl p-6">
            <div class="text-3xl md:text-4xl font-bold text-teal-600 mb-2">50K+</div>
            <div class="text-gray-700 text-sm md:text-base">Happy Guests</div>
          </div>
        </div>
      </div>

      <!-- Image -->
      <div class="relative order-first lg:order-last">
        <div class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl">
          <img
            src="https://images.unsplash.com/photo-1569670380685-4582bf29a24a?q=80&w=1200&auto=format&fit=crop&ixlib=rb-4.1.0"
            alt="Whale watching boat in Mirissa Sri Lanka"
            class="w-full h-full object-cover"
            loading="lazy"
          />
        </div>

        <div class="absolute -bottom-8 -left-8 bg-blue-600 text-white rounded-2xl md:rounded-3xl p-6 md:p-8 shadow-2xl max-w-xs">
          <div class="text-4xl md:text-5xl font-bold mb-2">95%</div>
          <div class="text-blue-100 text-xs md:text-sm leading-relaxed">
            Sightings vary by day and season (peak season has the best chances).
          </div>
        </div>
      </div>
    </div>

    <!-- Values -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
      <?php foreach ($values as $v): ?>
        <div class="text-center">
          <div class="inline-flex items-center justify-center w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-blue-600 to-teal-500 rounded-xl md:rounded-2xl mb-4 md:mb-6">
            <span class="text-white text-2xl md:text-3xl"><?= h($v["icon"]) ?></span>
          </div>

          <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-3">
            <?= h($v["title"]) ?>
          </h3>
          <p class="text-gray-600 text-sm md:text-base leading-relaxed">
            <?= h($v["description"]) ?>
          </p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Map -->
    <div class="mt-16 md:mt-24">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-8">
        Find Us in Mirissa
      </h2>

      <div class="rounded-2xl overflow-hidden shadow-2xl h-80 md:h-96">
        <iframe
          title="Whale Watching Mirissa location map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d352.17177714299646!2d80.45188434633727!3d5.947744846058508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f49f8c43a3d%3A0x4a1f5cfc9defc101!2sWhale%20watching%20Mirissa!5e1!3m2!1sen!2slk!4v1764729926525!5m2!1sen!2slk"
          width="100%"
          height="100%"
          style="border:0;"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </div>

  </div>
</div>

<?php require_once __DIR__ . "/footer.php"; ?>
