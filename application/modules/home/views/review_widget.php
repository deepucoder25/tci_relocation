<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Testimonials Section - Matching Screenshot 4 (Loved by 15,000+ Families)
     ========================================================================== -->
<section class="home-reviews-section" id="reviews">
  <div class="container">
    
    <!-- Unified Section Heading (Matches Screenshot 2 design pattern) -->
    <!-- Unified Section Heading (Matches Screenshot Exactly) -->
    <div class="home-section-header text-center mb-5">
      <!-- Side Decorative Dot Grids (Screenshot Design) -->
      <div class="heading-dots-decor decor-left d-none d-lg-block" aria-hidden="true"></div>
      <div class="heading-dots-decor decor-right d-none d-lg-block" aria-hidden="true"></div>

      <!-- Subtitle with Orange Diamond Dashes -->
      <div class="section-subtitle-wrap d-inline-flex align-items-center gap-2">
        <span class="heading-dash"></span>
        <span class="section-subtitle">TESTIMONIALS</span>
        <span class="heading-dash"></span>
      </div>

      <!-- Mini Speed Delivery Truck Icon -->
      <div class="heading-truck-icon">
        <svg width="46" height="20" viewBox="0 0 46 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 5.5H11" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M0 10H8" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M3 14.5H12" stroke="var(--secondary-color, #fec503)" stroke-width="2" stroke-linecap="round"/>
          <path d="M14 3H29V15H14V3Z" stroke="var(--primary-color, #141f27)" stroke-width="1.8" stroke-linejoin="round"/>
          <path d="M29 7H35L38.5 11V15H29V7Z" stroke="var(--primary-color, #141f27)" stroke-width="1.8" stroke-linejoin="round"/>
          <circle cx="19" cy="16" r="2.4" fill="#ffffff" stroke="var(--primary-color, #141f27)" stroke-width="1.8"/>
          <circle cx="34" cy="16" r="2.4" fill="#ffffff" stroke="var(--primary-color, #141f27)" stroke-width="1.8"/>
        </svg>
      </div>

      <!-- Main Section Title -->
      <h2 class="section-title">
        LOVED BY <span class="section-title-highlight"><?= $happyClients ?> HAPPY</span> FAMILIES
      </h2>

      <!-- 3-Dot Divider Line with Left & Right Gradient Lines -->
      <div class="section-heading-divider d-inline-flex align-items-center gap-2 my-2">
        <span class="heading-divider-line line-left"></span>
        <span class="dot dot-navy"></span>
        <span class="dot dot-orange"></span>
        <span class="dot dot-orange"></span>
        <span class="heading-divider-line line-right"></span>
      </div>

      <!-- Subtitle Description -->
      <p class="section-desc mx-auto">
        Real shifting stories and 5-star experiences from families and businesses who moved with <?= htmlspecialchars($company3 ?? 'TCI Relocation') ?>.
      </p>
    </div>

    <!-- Testimonial Draggable Auto-Scrolling Slider (Right-to-Left, Hover-to-Pause, Draggable) -->
    <?php
    $reviews = [
      [
        'stars' => 5,
        'quote' => 'Shifting our 3BHK home from Jaipur to Bangalore was seamless! The TCI team packed every fragile item with 4-layer bubble wrap. Not a single scratch on our furniture.',
        'name' => 'Pooja & Rajesh Sharma',
        'sub' => 'Household Shifting • Jaipur to Bangalore'
      ],
      [
        'stars' => 5,
        'quote' => 'We shifted our IT office over the weekend. TCI Relocation had all workstations and equipment safely set up by Monday morning with zero business downtime!',
        'name' => 'Daniel D\'Souza',
        'sub' => 'Office Relocation • Gurgaon to Pune'
      ],
      [
        'stars' => 5,
        'quote' => 'Transported my Honda City and Royal Enfield together with household goods. GPS updates were provided daily. Super professional movers with 100% transparent pricing.',
        'name' => 'Vikram Mehra',
        'sub' => 'Vehicle & Home Move • Delhi to Mumbai'
      ],
      [
        'stars' => 5,
        'quote' => 'Very courteous staff and on-time delivery. The team helped unload and assemble all beds and wardrobes at our new flat. Truly hassle-free packers and movers!',
        'name' => 'Priya & Arun Nair',
        'sub' => 'Family Relocation • Mumbai to Hyderabad'
      ],
      [
        'stars' => 5,
        'quote' => 'Outstanding packing quality and polite crew. Everything arrived on scheduled date in Kolkata without even a minor dent. Highly recommended!',
        'name' => 'Amit & Neha Verma',
        'sub' => 'Domestic Moving • Noida to Kolkata'
      ],
      [
        'stars' => 5,
        'quote' => 'Affordable and reliable moving service! Their supervisor stayed in touch throughout transit. Handled my delicate glassware and TV with exceptional care.',
        'name' => 'Suresh Kumar',
        'sub' => 'Flat Relocation • Chennai to Hyderabad'
      ]
    ];
    ?>

    <div class="testimonial-slider-container position-relative">
      <div class="testimonial-slider-fade-left pe-none"></div>
      <div class="testimonial-slider-fade-right pe-none"></div>

      <div class="testimonial-track-wrapper" id="testimonialTrackWrapper">
        <div class="testimonial-track" id="testimonialTrack">
          <?php for ($repeat = 0; $repeat < 2; $repeat++): ?>
            <?php foreach ($reviews as $rev): ?>
              <div class="testimonial-slide-item">
                <div class="review-item-card">
                  <div class="review-stars">
                    <?php for ($s = 0; $s < $rev['stars']; $s++): ?>
                      <i class="bi bi-star-fill"></i>
                    <?php endfor; ?>
                  </div>
                  <p class="review-quote-text">
                    &ldquo;<?= htmlspecialchars($rev['quote']) ?>&rdquo;
                  </p>
                  <div class="mt-auto">
                    <div class="review-author-name"><?= htmlspecialchars($rev['name']) ?></div>
                    <div class="review-author-sub"><?= htmlspecialchars($rev['sub']) ?></div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endfor; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Minimal Ultra-Fast Testimonial Slider (Auto Right-to-Left, Hover-to-Pause, Mouse/Touch Drag) -->
<script>
(() => {
  const el = document.getElementById('testimonialTrackWrapper');
  if (!el) return;
  let isDown = false, startX = 0, sLeft = 0;
  const half = () => el.scrollWidth / 2;

  // Auto-scroll loop (Right-to-Left, stops instantly when cursor is on any box via :hover)
  const tick = () => {
    if (!el.matches(':hover') && !isDown) {
      el.scrollLeft += 0.8;
      if (el.scrollLeft >= half()) el.scrollLeft = 0;
    }
    requestAnimationFrame(tick);
  };
  requestAnimationFrame(tick);

  // Drag Support (Mouse & Touch)
  const start = x => { isDown = true; startX = x; sLeft = el.scrollLeft; el.classList.add('is-dragging'); };
  const move = x => {
    if (!isDown) return;
    el.scrollLeft = sLeft - (x - startX);
    if (el.scrollLeft >= half()) { el.scrollLeft -= half(); sLeft -= half(); }
    else if (el.scrollLeft <= 0) { el.scrollLeft += half(); sLeft += half(); }
  };
  const end = () => { isDown = false; el.classList.remove('is-dragging'); };

  el.onmousedown = e => start(e.pageX);
  window.onmousemove = e => move(e.pageX);
  window.onmouseup = end;

  el.ontouchstart = e => start(e.touches[0].pageX);
  el.ontouchmove = e => move(e.touches[0].pageX);
  el.ontouchend = end;
})();
</script>