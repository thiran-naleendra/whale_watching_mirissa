</main>

<footer class="mt-16 bg-gradient-to-r from-blue-600 to-teal-500 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12
              grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">

    <!-- Brand -->
    <div>
      <div class="font-bold text-lg mb-2">Whale Watching Mirissa</div>
      <p class="text-blue-100">
        Daily tours from Mirissa Harbour. Shared & private boats. WhatsApp booking.
      </p>
      <a
        href="<?= h(whatsapp_link("I'm interested in booking a whale watching tour in Mirissa")) ?>"
        target="_blank" rel="noopener noreferrer"
        class="mt-4 inline-flex rounded-full bg-white text-blue-700 px-4 py-2 font-semibold hover:bg-blue-50"
      >
        Book via WhatsApp
      </a>
    </div>

    <!-- Contact -->
    <div>
      <div class="font-semibold mb-2">Contact</div>
      <div class="text-blue-100">
        Phone:
        <a class="underline hover:text-white" href="<?= h(phone_href()) ?>"><?= h($PHONE) ?></a>
      </div>
      <div class="text-blue-100">
        Email:
        <a
          class="underline hover:text-white"
          href="mailto:<?= h($EMAIL) ?>"
        >
          <?= h($EMAIL) ?>
        </a>
      </div>
      <div class="text-blue-100 mt-2">
        <?= h($ADDRESS_LINE_1) ?><br>
        <?= h($ADDRESS_LINE_2) ?>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <div class="font-semibold mb-2">Quick links</div>
      <ul class="space-y-1">
        <li><a class="hover:underline text-blue-100 hover:text-white" href="<?= h(site_href("services")) ?>">Services</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="<?= h(site_href("whale-watching-mirissa-guide")) ?>">Planning guide</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="<?= h(site_href("tours")) ?>">Tours</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="<?= h(site_href("gallery")) ?>">Gallery</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="<?= h(site_href("contact")) ?>">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- Bottom bar -->
  <div class="border-t border-white/20 py-4 text-center text-xs text-blue-100">
    © <?= date("Y") ?> Whale Watching Mirissa · All rights reserved - 
    powered by WebX Technologies
  </div>
</footer>
</body>
</html>
