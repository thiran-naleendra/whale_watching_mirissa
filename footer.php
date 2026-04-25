<footer class="mt-16 bg-gradient-to-r from-blue-600 to-teal-500 text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12
              grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">

    <!-- Brand -->
    <div>
      <div class="font-bold text-lg mb-2">Whale Watching Mirissa</div>
      <p class="text-blue-100">
        Daily tours from Mirissa Harbour. Shared & private boats. WhatsApp booking.
      </p>
    </div>

    <!-- Contact -->
    <div>
      <div class="font-semibold mb-2">Contact</div>
      <div class="text-blue-100">Phone: <?= h($PHONE) ?></div>
      <div class="text-blue-100">
        Email:
        <a
          class="underline hover:text-white"
          href="mailto:<?= h($EMAIL) ?>"
        >
          <?= h($EMAIL) ?>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <div class="font-semibold mb-2">Quick links</div>
      <ul class="space-y-1">
        <li><a class="hover:underline text-blue-100 hover:text-white" href="services.php">Services</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="tours.php">Tours</a></li>
        <li><a class="hover:underline text-blue-100 hover:text-white" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>

  <!-- Bottom bar -->
  <div class="border-t border-white/20 py-4 text-center text-xs text-blue-100">
    © <?= date("Y") ?> Whale Watching Mirissa · All rights reserved - 
    powerd by WebX Technologies
  </div>
</footer>
