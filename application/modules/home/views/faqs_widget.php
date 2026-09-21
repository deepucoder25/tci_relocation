<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     FAQs Section - High-End Accordion with 24/7 Helpline Sidebar
     ========================================================================== -->
<section class="home-faqs-section" id="faqs">
  <div class="container">
    
    <!-- Unified Section Heading -->
    <!-- Unified Section Heading (Matches Screenshot Exactly) -->
    <div class="home-section-header text-center mb-5">
      <!-- Side Decorative Dot Grids (Screenshot Design) -->
      <div class="heading-dots-decor decor-left d-none d-lg-block" aria-hidden="true"></div>
      <div class="heading-dots-decor decor-right d-none d-lg-block" aria-hidden="true"></div>

      <!-- Subtitle with Orange Diamond Dashes -->
      <div class="section-subtitle-wrap d-inline-flex align-items-center gap-2">
        <span class="heading-dash"></span>
        <span class="section-subtitle">FAQS</span>
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
        FREQUENTLY ASKED <span class="section-title-highlight">QUESTIONS</span>
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
        Everything you need to know about shifting, transit insurance, packing quality, and booking with <?= htmlspecialchars($company3 ?? 'TCI Relocation') ?>.
      </p>
    </div>

    <div class="row g-4 g-lg-5 align-items-start">
      
      <!-- Left Column: Interactive Accordion -->
      <div class="col-lg-8">
        <div class="accordion faq-accordion" id="faqAccordion">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                How early should I book my relocation with TCI Relocation?
              </button>
            </h3>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We recommend booking at least <strong>2 to 4 days in advance</strong> for local household shifting, and <strong>5 to 7 days in advance</strong> for intercity or long-distance relocation. This allows us to arrange specialized packing crews, quality packing supplies, and dedicated vehicle slots for on-time delivery.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                Are there any hidden or surprise charges in your moving quote?
              </button>
            </h3>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                No, absolutely not. <?= htmlspecialchars($company3 ?? 'TCI Relocation') ?> adheres to 100% transparent pricing. Our written quotation includes labor, premium packing materials, transportation, loading, and unloading with zero unexpected costs on moving day.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                Is transit insurance provided for my household and vehicle goods?
              </button>
            </h3>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, we offer comprehensive <strong>100% transit insurance</strong> coverage through leading national insurers. In the rare event of unforeseen transit damage, claims are processed quickly with full documentation and support.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                What packing materials do you use for fragile items and electronics?
              </button>
            </h3>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                We use 4-layer specialized packing including heavy-duty corrugated cartons, air-bubble wraps, waterproof stretch film, foam corner protectors, and wooden crating for fragile glassware, luxury furniture, TVs, and sensitive electronics.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                Can I track the live location of my consignment during transit?
              </button>
            </h3>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes, our entire transport fleet is equipped with real-time GPS tracking. You can track your consignment online through our Track Order portal or receive direct milestone updates from your dedicated relocation manager.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="faqHeading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                Do your movers assist with unloading, unpacking, and arranging?
              </button>
            </h3>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Yes! Our full-service relocation packages include careful unloading, unwrapping of packing materials, placing heavy furniture in your designated rooms, and reassembling beds and tables so you can settle in comfortably.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column: 24/7 Helpline Support Card -->
      <div class="col-lg-4">
        <div class="faq-support-card text-start">
          <div class="faq-support-badge mb-3">
            <i class="bi bi-stars"></i> 24/7 Instant Support
          </div>
          <h3 class="faq-support-title mb-2 text-white">
            Need Immediate Assistance or a Custom Quote?
          </h3>
          <p class="faq-support-desc mb-4">
            Speak directly with our moving supervisors. We provide instant estimates, route options, and free moving advice.
          </p>

          <div class="d-flex flex-column gap-3">
            <a <?= @$phonehtml ?> class="faq-btn-call d-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-telephone-inbound-fill text-warning"></i>
              <span>Call: <?= @$phone ?></span>
            </a>
            <button type="button" class="faq-btn-quote d-flex align-items-center justify-content-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-lightning-charge-fill"></i>
              <span>Get Free Quote Online</span>
            </button>
          </div>

          <div class="mt-4 pt-3 border-top border-secondary border-opacity-25 d-flex align-items-center gap-2 text-white-50 small">
            <i class="bi bi-patch-check-fill text-warning fs-5"></i>
            <span>IBA Approved &bull; ISO 9001:2015 Certified</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>