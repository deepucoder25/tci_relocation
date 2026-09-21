<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Our Services Section - Matching Screenshot 2 (8 Service Boxes in 2 Rows)
     ========================================================================== -->
<section class="home-services-section" id="services">
  <div class="container">
    
    <!-- Unified Section Heading (Matches Screenshot 2) -->
    <!-- Unified Section Heading (Matches Screenshot Exactly) -->
    <div class="home-section-header text-center mb-5">
      <!-- Side Decorative Dot Grids (Screenshot Design) -->
      <div class="heading-dots-decor decor-left d-none d-lg-block" aria-hidden="true"></div>
      <div class="heading-dots-decor decor-right d-none d-lg-block" aria-hidden="true"></div>

      <!-- Subtitle with Orange Diamond Dashes -->
      <div class="section-subtitle-wrap d-inline-flex align-items-center gap-2">
        <span class="heading-dash"></span>
        <span class="section-subtitle">OUR SERVICES</span>
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
        COMPLETE <span class="section-title-highlight">MOVING</span> SOLUTIONS
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
        We provide end-to-end moving services tailored to your needs, ensuring a smooth, safe and stress-free relocation experience.
      </p>
    </div>

    <!-- 7 Service Cards Grid (Matching User Screenshot Services) -->
    <div class="row g-4 justify-content-center">
      
      <!-- 01: Household Shifting -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('home-relocation') ?>" class="service-card-link">
          <div class="service-item-card service-card-navy">
            <div class="service-num-tab service-tab-navy">01</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-house-door"></i>
              </div>
            </div>
            <h3 class="service-card-title">HOUSEHOLD SHIFTING</h3>
            <p class="service-card-desc">Safe, scratch-proof packing and hassle-free relocation of household goods with utmost care.</p>
            <div class="service-card-accent accent-navy"></div>
          </div>
        </a>
      </div>

      <!-- 02: Office Relocation -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('office-relocation') ?>" class="service-card-link">
          <div class="service-item-card service-card-gold">
            <div class="service-num-tab service-tab-gold">02</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-briefcase"></i>
              </div>
            </div>
            <h3 class="service-card-title">OFFICE RELOCATION</h3>
            <p class="service-card-desc">Specialized commercial and office shifting to minimize business downtime and ensure smooth moving.</p>
            <div class="service-card-accent accent-gold"></div>
          </div>
        </a>
      </div>

      <!-- 03: Car Transportation -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('car-transportation') ?>" class="service-card-link">
          <div class="service-item-card service-card-navy">
            <div class="service-num-tab service-tab-navy">03</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-car-front"></i>
              </div>
            </div>
            <h3 class="service-card-title">CAR TRANSPORTATION</h3>
            <p class="service-card-desc">Dedicated enclosed car carrier trailers for safe, scratch-free transit to any city across India.</p>
            <div class="service-card-accent accent-navy"></div>
          </div>
        </a>
      </div>

      <!-- 04: Bike Transportation -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('bike-transportation') ?>" class="service-card-link">
          <div class="service-item-card service-card-gold">
            <div class="service-num-tab service-tab-gold">04</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-bicycle"></i>
              </div>
            </div>
            <h3 class="service-card-title">BIKE TRANSPORTATION</h3>
            <p class="service-card-desc">Specialized two-wheeler carriers and multi-layer protective packing for zero-damage bike moves.</p>
            <div class="service-card-accent accent-gold"></div>
          </div>
        </a>
      </div>

      <!-- 05: Packing & Moving -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('packing-and-moving') ?>" class="service-card-link">
          <div class="service-item-card service-card-navy">
            <div class="service-num-tab service-tab-navy">05</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-box-seam"></i>
              </div>
            </div>
            <h3 class="service-card-title">PACKING &amp; MOVING</h3>
            <p class="service-card-desc">High-quality packing materials and expert multi-layer packing for maximum protection during transit.</p>
            <div class="service-card-accent accent-navy"></div>
          </div>
        </a>
      </div>

      <!-- 06: Loading & Unloading -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('loading-unloading') ?>" class="service-card-link">
          <div class="service-item-card service-card-gold">
            <div class="service-num-tab service-tab-gold">06</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-arrow-down-up"></i>
              </div>
            </div>
            <h3 class="service-card-title">LOADING &amp; UNLOADING</h3>
            <p class="service-card-desc">Trained professional crew using modern equipment for safe loading and unloading of heavy items.</p>
            <div class="service-card-accent accent-gold"></div>
          </div>
        </a>
      </div>

      <!-- 07: Warehousing & Storage -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('storage-services') ?>" class="service-card-link">
          <div class="service-item-card service-card-navy">
            <div class="service-num-tab service-tab-navy">07</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-shop"></i>
              </div>
            </div>
            <h3 class="service-card-title">WAREHOUSING &amp; STORAGE</h3>
            <p class="service-card-desc">Short-term and long-term storage in secure, climate-controlled, 24/7 monitored warehouse facilities.</p>
            <div class="service-card-accent accent-navy"></div>
          </div>
        </a>
      </div>

      <!-- 08: IBA Approved Movers -->
      <div class="col-12 col-sm-6 col-lg-3">
        <a href="<?= site_url('iba-approved-movers') ?>" class="service-card-link">
          <div class="service-item-card service-card-gold">
            <div class="service-num-tab service-tab-gold">08</div>
            <div class="service-icon-ring">
              <div class="service-icon-inner">
                <i class="bi bi-patch-check"></i>
              </div>
            </div>
            <h3 class="service-card-title">IBA APPROVED MOVERS</h3>
            <p class="service-card-desc">Government bank recognized &amp; approved movers with verified transit insurance and official bills.</p>
            <div class="service-card-accent accent-gold"></div>
          </div>
        </a>
      </div>

    </div>

    <!-- Bottom Pill CTA Bar (Matches Screenshot 2) -->
    <div class="services-bottom-cta d-flex align-items-center justify-content-between">
      <a <?= @$phonehtml ?> class="services-cta-call d-flex align-items-center gap-2 flex-grow-1 justify-content-center">
        <i class="bi bi-telephone-inbound-fill"></i>
        <span>Need Help? Call Us &nbsp;|&nbsp; <?= @$phone ?></span>
      </a>
      <button type="button" class="services-cta-quote d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-lightning-charge-fill"></i>
        <span>Get A Free Quote</span>
        <i class="bi bi-arrow-right"></i>
      </button>
    </div>

  </div>
</section>