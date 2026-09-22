<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- Hero Slider Section with Background & Quote Form for <?= $city ?> -->
<section class="hero-slider-section position-relative overflow-hidden">
  
  <!-- Single Hero Background -->
  <div class="hero-bg-single hero-slide-1">
    <div class="hero-slide-overlay"></div>
  </div>

  <!-- Hero Content Layer -->
  <div class="hero-content-wrapper py-4 py-md-5">
    <div class="container position-relative">
      <div class="row align-items-center g-4 g-lg-5">
        
        <!-- Left Column: Compelling Copy, Value Props & Direct Action -->
        <div class="col-lg-6 col-xl-7 text-white hero-text-col">
          
          <!-- Attractive Breadcrumb: Home > Locations > State > City (No a tag on state & city) -->
          <nav aria-label="breadcrumb" class="mb-3">
            <div class="hero-breadcrumb-pill">
              <a href="<?= site_url() ?>" class="hero-bc-link">
                <i class="bi bi-house-door-fill hero-bc-home-icon"></i>
                <span>Home</span>
              </a>
              <i class="bi bi-chevron-right hero-bc-sep"></i>
              <a href="<?= site_url('locations') ?>" class="hero-bc-link">
                <span>Locations</span>
              </a>
              <i class="bi bi-chevron-right hero-bc-sep"></i>
              <span class="hero-bc-state"><?= $state ?></span>
              <i class="bi bi-chevron-right hero-bc-sep"></i>
              <span class="hero-bc-city">
                <i class="bi bi-geo-alt-fill"></i>
                <span><?= $city ?></span>
              </span>
            </div>
          </nav>

          <!-- Trust Badge -->
          <div class="hero-badge-pill mb-3">
            <i class="bi bi-shield-fill-check"></i>
            <span>IBA Approved &amp; Verified Movers in <?= $city ?></span>
          </div>

          <!-- Hero Headline -->
          <h1 class="hero-main-title fw-bold mb-3">
            Best Packers and Movers in <br class="d-none d-sm-inline">
            <span class="hero-highlight-gold"><?= $city ?><?= !empty($state) ? ', ' . $state : '' ?></span>
          </h1>

          <!-- Subheading -->
          <p class="hero-main-subtitle mb-4">
            Reliable household shifting, commercial office relocation, and vehicle transportation in <?= $city ?>. Enjoy 100% safe handling, multi-layer packing, and on-time doorstep delivery.
          </p>

          <!-- Key Feature Bullets -->
          <div class="hero-features-list mb-4">
            <div class="hero-feature-item">
              <i class="bi bi-check-circle-fill hero-feat-icon"></i>
              <span>Zero Damage Guarantee &amp; Comprehensive Transit Insurance</span>
            </div>
            <div class="hero-feature-item">
              <i class="bi bi-check-circle-fill hero-feat-icon"></i>
              <span>Live GPS Tracking &amp; Dedicated Move Coordinator in <?= $city ?></span>
            </div>
            <div class="hero-feature-item">
              <i class="bi bi-check-circle-fill hero-feat-icon"></i>
              <span>4-Layer Heavy-Duty Multi-Packing Protection</span>
            </div>
          </div>

          <!-- Quick Action Buttons -->
          <div class="hero-action-buttons d-flex align-items-center justify-content-center justify-content-lg-start flex-nowrap gap-2 gap-sm-3 mb-4">
            <a <?= @$phonehtml ?> class="btn btn-hero-call">
              <i class="bi bi-telephone-fill me-1 me-sm-2"></i>
              <span>Call <?= @$phone ?></span>
            </a>
            <a href="<?= @$whatsapphtml ?>" target="_blank" rel="noopener" class="btn btn-hero-whatsapp">
              <i class="bi bi-whatsapp me-1 me-sm-2"></i>
              <span>WhatsApp Us</span>
            </a>
          </div>

          <!-- Rating & Social Proof Strip -->
          <div class="hero-social-proof d-flex align-items-center justify-content-center justify-content-lg-start flex-wrap gap-2 gap-sm-3 pt-2">
            <div class="hero-stars d-flex gap-1 text-warning fs-6">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <div class="hero-rating-text small">
              <strong>4.9/5 Rating</strong> &bull; <span>Verified Hub in <?= $city ?></span>
            </div>
          </div>

        </div>

        <!-- Right Column: Loaded Quote Form -->
        <div class="col-lg-6 col-xl-5">
          <?php $this->load->view('contacts/quoteform'); ?>
        </div>

      </div>
    </div>
  </div>

</section>