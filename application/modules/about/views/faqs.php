<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => "Clear Answers About Relocation Pricing, Safety Standards, Transit Insurance &amp; Doorstep Delivery",
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<!-- ==========================================================================
     FAQs Content Section (Modern Card Accordion + 24/7 Support Sidebar)
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-4">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-patch-question-fill"></i> HELP CENTER &amp; FAQS
      </div>
      <h2 class="about-page-title">
        GOT QUESTIONS? <span class="about-highlight">WE'VE GOT ANSWERS</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Everything you need to know about domestic household shifting, corporate relocations, car/bike transport, and transit insurance with <?= $company3 ?>.
      </p>
    </div>

    <div class="row g-4 g-lg-5 align-items-start">
      
      <!-- Left Column: Card-Based Accordion (col-12 col-lg-8) -->
      <div class="col-12 col-lg-8">
        <div class="accordion faq-accordion" id="pageFaqAccordion">
          
          <!-- FAQ 1: Booking & Timeline -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead1">
              <button class="accordion-button d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                <span class="faq-num-badge">01</span>
                <span>How early should I book my relocation with <?= $company3 ?>?</span>
              </button>
            </h3>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHead1" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  For local intra-city moves, booking <strong>2 to 4 days in advance</strong> is recommended to allocate specialized crews and vehicle slots. For intercity domestic shifting, vehicle carrier services, or corporate office moves, booking <strong>5 to 7 days prior</strong> ensures seamless vehicle dispatch, pre-move survey, and optimal transit coordination.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-lightning-charge-fill text-warning me-1"></i>
                  <strong>Emergency Same-Day Moves:</strong> We also facilitate short-notice moves across major cities subject to truck slot availability.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 2: Pricing Calculation -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead2">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                <span class="faq-num-badge">02</span>
                <span>How are packing and shifting charges calculated?</span>
              </button>
            </h3>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHead2" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">Relocation charges are calculated transparently based on 4 verified parameters:</p>
                <div class="row g-2 mb-3">
                  <div class="col-12 col-sm-6">
                    <div class="p-2 rounded-3 bg-light border small">
                      <i class="bi bi-box-seam text-warning me-1"></i> <strong>Volume &amp; Weight:</strong> Total inventory determining carton count &amp; container size.
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="p-2 rounded-3 bg-light border small">
                      <i class="bi bi-geo-alt text-warning me-1"></i> <strong>Distance:</strong> Total highway kilometers between source and destination.
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="p-2 rounded-3 bg-light border small">
                      <i class="bi bi-layers text-warning me-1"></i> <strong>Packing Tier:</strong> Standard 3-layer vs heavy 5-layer bubble &amp; wooden crates.
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="p-2 rounded-3 bg-light border small">
                      <i class="bi bi-building text-warning me-1"></i> <strong>Floor &amp; Elevator:</strong> Accessibility conditions at both properties.
                    </div>
                  </div>
                </div>
                <div class="faq-answer-highlight">
                  <i class="bi bi-check-circle-fill text-success me-1"></i>
                  Every client receives a 100% written, itemized quotation with zero hidden charges.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 3: Hidden Surcharges -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead3">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                <span class="faq-num-badge">03</span>
                <span>Are there any hidden fees or extra surcharges on moving day?</span>
              </button>
            </h3>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHead3" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  <strong>Never.</strong> At <?= $company3 ?>, our quotation is legally binding and comprehensive. Our quotation incorporates labor charges, loading/unloading, premium packaging materials, container transport, toll road fees, and formal GST billing.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-shield-check text-warning me-1"></i>
                  <strong>Zero Price Escalation Policy:</strong> The price agreed on your signed quotation is the final amount you pay on delivery day.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 4: Packaging Standards -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead4">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                <span class="faq-num-badge">04</span>
                <span>What kind of packaging materials do you use for fragile goods?</span>
              </button>
            </h3>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHead4" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  We deploy an institutional <strong>5-layer protective packing protocol</strong> designed to safeguard goods against vibration, road shock, and monsoon weather:
                </p>
                <ul class="mb-2 ps-3 small text-secondary">
                  <li><strong>Layer 1:</strong> Direct soft foam wrap against fine wooden or polished finishes.</li>
                  <li><strong>Layer 2:</strong> Heavy-gauge air-bubble wrap for primary impact absorption.</li>
                  <li><strong>Layer 3:</strong> Rigid corrugated paper rolls &amp; corner edge protectors.</li>
                  <li><strong>Layer 4:</strong> High-tensile waterproof stretch film sealing.</li>
                  <li><strong>Layer 5:</strong> Heavy-duty export-grade carton boxes and custom wooden crating for crockery and LED TVs.</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- FAQ 5: Transit Insurance -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead5">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                <span class="faq-num-badge">05</span>
                <span>Is transit insurance mandatory, and how does claim settlement work?</span>
              </button>
            </h3>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHead5" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  While optional for local intra-city moves, transit insurance is strongly recommended for intercity domestic moves. We partner with leading national insurers to provide <strong>100% comprehensive transit insurance</strong> covering road accidents, vehicle collision, overturning, fire, and transit mishaps.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-file-earmark-check-fill text-warning me-1"></i>
                  <strong>Fast-Track Claims Desk:</strong> In the rare event of damage, notify our Move Coordinator within 48 hours of delivery with photos for prioritized settlement assistance.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 6: Live GPS Tracking -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead6">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                <span class="faq-num-badge">06</span>
                <span>How can I track my consignment during intercity transit?</span>
              </button>
            </h3>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHead6" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  Every container vehicle in our fleet is fitted with <strong>satellite GPS telematics</strong>. Once your consignment departs the source hub, your assigned personal Move Coordinator provides regular transit milestone updates, toll crossing notifications, and real-time ETAs via WhatsApp and phone.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-pin-map-fill text-warning me-1"></i>
                  You can also track your consignment online through our customer tracking portal anytime 24/7.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 7: Prohibited Items -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead7">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                <span class="faq-num-badge">07</span>
                <span>Which items are strictly prohibited from being loaded into the truck?</span>
              </button>
            </h3>
            <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHead7" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">Under Indian road transport safety regulations, the following contraband items cannot be transported:</p>
                <ul class="mb-2 ps-3 small text-secondary">
                  <li>Gas cylinders, fuels (petrol, kerosene), acids, solvents, and explosives.</li>
                  <li>Perishable foodstuffs prone to spoilage during multi-day highway transit.</li>
                  <li>Loose cash, bullion, gold/diamond jewelry, bearer shares, and original property title deeds.</li>
                </ul>
                <div class="faq-answer-highlight text-danger">
                  <i class="bi bi-exclamation-triangle-fill me-1"></i>
                  Clients are advised to carry personal valuables, jewelry, and critical legal documents personally.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 8: Furniture Assembly -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead8">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                <span class="faq-num-badge">08</span>
                <span>Do you dismantle and reassemble furniture at the destination?</span>
              </button>
            </h3>
            <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHead8" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  <strong>Yes, absolutely.</strong> Our trained team carries power tools to dismantle modular king/queen beds, dining tables, modular sofa sets, and wardrobe panels at the pickup point, and accurately reassembles them in your preferred rooms at the new residence.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-wrench-adjustable-circle-fill text-warning me-1"></i>
                  We also take care of carton debris removal, leaving your new home clean and ready to settle in.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 9: Car & Bike Transport -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead9">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                <span class="faq-num-badge">09</span>
                <span>How do you transport four-wheelers (cars) and two-wheelers (bikes)?</span>
              </button>
            </h3>
            <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHead9" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  Cars are shifted inside enclosed car-carrier trailers equipped with hydraulic ramps, wheel chocks, and high-tensile safety tie-down belts. Bikes are wrapped in multi-layer bubble cushioning, mirror/headlamp foam caps, and secured upright in custom steel frames.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-shield-shaded text-warning me-1"></i>
                  Pre-trip inspection sheets recording fuel level, odometer reading, and exterior condition are signed before dispatch.
                </div>
              </div>
            </div>
          </div>

          <!-- FAQ 10: Payment Modes -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHead10">
              <button class="accordion-button collapsed d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                <span class="faq-num-badge">10</span>
                <span>What payment options are accepted, and when is payment due?</span>
              </button>
            </h3>
            <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHead10" data-bs-parent="#pageFaqAccordion">
              <div class="accordion-body">
                <p class="mb-2">
                  We accept all verified digital channels including UPI (Google Pay, PhonePe, Paytm), NEFT/RTGS bank transfers, debit/credit cards, and formal corporate billing with GST invoices.
                </p>
                <div class="faq-answer-highlight">
                  <i class="bi bi-cash-stack text-warning me-1"></i>
                  <strong>Standard Milestone:</strong> A nominal token advance reserves your date and truck, with the remaining balance settled after safe delivery and unloading inspection.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: Luxury Support Hub & Guarantee Sidebar (col-12 col-lg-4) -->
      <div class="col-12 col-lg-4">
        
        <!-- Premium Navy Support Card -->
        <div class="faq-support-card mb-4">
          <span class="faq-support-badge mb-3">
            <i class="bi bi-headset"></i> 24/7 HELPLINE DESK
          </span>
          
          <h4 class="faq-support-title text-white mb-2">Have a Specific Moving Query?</h4>
          <p class="faq-support-desc mb-4">
            Speak directly with our senior relocation experts for custom quotes, corporate shifting, or vehicle carrier requirements.
          </p>

          <a <?= @$phonehtml ?> class="faq-btn-call w-100 d-flex align-items-center justify-content-center gap-2 mb-3">
            <i class="bi bi-telephone-outbound-fill text-warning"></i>
            <span>Call: <?= @$phone ?></span>
          </a>

          <button type="button" class="faq-btn-quote w-100 d-flex align-items-center justify-content-center gap-2 mb-4" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-lightning-charge-fill"></i>
            <span>Request Instant Quote</span>
          </button>

          <div class="pt-3 border-top border-secondary border-opacity-25 small text-white-50">
            <div class="d-flex align-items-center gap-2 mb-2 text-truncate">
              <i class="bi bi-envelope-fill text-warning"></i>
              <span class="text-truncate text-white"><?= @$mail ?></span>
            </div>
            <div class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-clock-history text-warning"></i>
              <span class="text-white">Mon &ndash; Sun: 24/7 Live Assistance</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <i class="bi bi-geo-alt-fill text-warning"></i>
              <span class="text-white">Pan-India Branch Network</span>
            </div>
          </div>
        </div>

        <!-- Trust Assurance Seal Card -->
        <div class="card rounded-4 p-4 bg-light border shadow-sm">
          <h6 class="fw-bold text-dark mb-3">
            <i class="bi bi-shield-fill-check text-warning me-2"></i><?= $company3 ?> Assurance
          </h6>
          <ul class="list-unstyled mb-0 small text-secondary">
            <li class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>Government IBA Approved Transport Standard</span>
            </li>
            <li class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>100% Background-Checked Shifting Crews</span>
            </li>
            <li class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>Zero Hidden Moving-Day Surcharges</span>
            </li>
            <li class="d-flex align-items-center gap-2">
              <i class="bi bi-patch-check-fill text-success"></i>
              <span>Live Satellite GPS Consignment Telematics</span>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</section>