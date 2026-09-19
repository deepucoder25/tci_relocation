<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     Footer Section - Matching Design with TCI Relocation Branding
     ========================================================================== -->

<!-- Main Footer Body (High-End Modern Layout) -->
<footer class="main-site-footer pt-5 position-relative overflow-hidden">
  <div class="container position-relative z-1">
    
    <!-- Top Action / Quick Quote & Call Banner -->
    <div class="footer-cta-banner p-3 p-sm-4 p-md-5 mb-4 mb-lg-5 rounded-4 position-relative overflow-hidden">
      <div class="footer-cta-pattern position-absolute top-0 start-0 w-100 h-100 pe-none"></div>
      <div class="row align-items-center justify-content-between g-3 g-md-4 position-relative z-1">
        <div class="col-lg-7">
          <div class="d-flex align-items-start align-items-sm-center gap-3">
            <div class="footer-cta-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-box2-heart-fill"></i>
            </div>
            <div class="footer-cta-text-wrap flex-grow-1">
              <div class="footer-cta-pill d-inline-flex align-items-center gap-1 rounded-pill mb-2">
                <i class="bi bi-stars"></i> <span class="d-none d-sm-inline">Guaranteed </span>Safe &amp; On-Time Relocation
              </div>
              <h3 class="footer-cta-title mb-1 text-white fw-bold">
                Planning to Move Soon? Get Flat 20% Off!
              </h3>
              <p class="footer-cta-desc mb-0 text-white-50">
                Transparent pricing, verified movers, free transit insurance &amp; 24/7 real-time tracking.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-5 text-lg-end">
          <div class="d-flex flex-nowrap align-items-center justify-content-between justify-content-lg-end gap-2 gap-sm-3 pt-2 pt-lg-0 w-100">
            <a <?= @$phonehtml ?> class="footer-cta-btn-call d-inline-flex align-items-center justify-content-center gap-1 gap-sm-2 rounded-pill text-decoration-none flex-fill flex-lg-grow-0 text-nowrap">
              <i class="bi bi-telephone-outbound-fill"></i>
              <span>Call: <?= @$phone ?></span>
            </a>
            <button type="button" class="footer-cta-btn-quote d-inline-flex align-items-center justify-content-center gap-1 gap-sm-2 rounded-pill border-0 flex-fill flex-lg-grow-0 text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
              <i class="bi bi-lightning-charge-fill"></i>
              <span>Get Free Quote</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- 4-Column Navigation & Contact Grid -->
    <div class="row g-4 justify-content-between mb-4 mb-lg-5">
      
      <!-- Col 1: Brand Info, Trust Badges, Tagline & Social Links -->
      <div class="col-12 col-md-6 col-lg-3">
        <a href="<?= site_url() ?>" class="footer-brand-text-mark text-decoration-none d-inline-block mb-3">
          <div class="d-flex align-items-center gap-2">
            <div class="footer-brand-symbol flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <div class="d-flex flex-column justify-content-center">
              <div class="footer-brand-name lh-1 text-nowrap">
                <span class="brand-part-tci">TCI</span> <span class="brand-part-reloc">Relocation</span>
              </div>
              <div class="footer-brand-badge-sub d-flex align-items-center gap-1 mt-1">
                <span class="sub-line flex-grow-1"></span>
                <span class="sub-text fw-bold text-uppercase text-nowrap">PACKERS &amp; MOVERS</span>
                <span class="sub-line flex-grow-1"></span>
              </div>
            </div>
          </div>
        </a>
        <div class="footer-tagline mb-2">
          Safe Move. Happy You.
        </div>
        <p class="footer-desc mb-3">
          <?= htmlspecialchars($company3 ?? 'TCI Relocation Packers Movers') ?> makes shifting simple, safe and stress-free. We handle your belongings with care, like our own.
        </p>

        <!-- Government / Association Trust Badges -->
        <div class="d-flex flex-wrap gap-2 mb-3">
          <span class="footer-mini-badge d-inline-flex align-items-center gap-1 rounded"><i class="bi bi-shield-fill-check text-warning"></i> IBA Approved</span>
          <span class="footer-mini-badge d-inline-flex align-items-center gap-1 rounded"><i class="bi bi-patch-check-fill text-info"></i> ISO 9001:2015</span>
          <span class="footer-mini-badge d-inline-flex align-items-center gap-1 rounded"><i class="bi bi-star-fill text-warning"></i> 4.9/5 Rating</span>
        </div>

        <!-- Social Media Buttons with Glow -->
        <div class="d-flex align-items-center gap-2">
          <a href="<?= @$facebookhtml ?: '#' ?>" class="footer-social-btn rounded-circle d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="Facebook" target="_blank" rel="noopener"><i class="bi bi-facebook"></i></a>
          <a href="<?= @$twitterhtml ?: '#' ?>" class="footer-social-btn rounded-circle d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="Twitter" target="_blank" rel="noopener"><i class="bi bi-twitter-x"></i></a>
          <a href="<?= @$instagramhtml ?: '#' ?>" class="footer-social-btn rounded-circle d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="Instagram" target="_blank" rel="noopener"><i class="bi bi-instagram"></i></a>
          <a href="<?= @$linkedinhtml ?: '#' ?>" class="footer-social-btn rounded-circle d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="LinkedIn" target="_blank" rel="noopener"><i class="bi bi-linkedin"></i></a>
          <a href="<?= @$youtubehtml ?: '#' ?>" class="footer-social-btn rounded-circle d-inline-flex align-items-center justify-content-center text-decoration-none" aria-label="YouTube" target="_blank" rel="noopener"><i class="bi bi-youtube"></i></a>
        </div>
      </div>

      <!-- Col 2: Quick Links with Capsule Header -->
      <div class="col-6 col-md-3 col-lg-2">
        <div class="footer-capsule-header d-inline-flex align-items-center gap-2 rounded-pill text-nowrap mb-3">
          <i class="bi bi-link-45deg"></i>
          <span>Quick Links</span>
        </div>
        <ul class="list-unstyled footer-nav-list m-0 p-0 d-flex flex-column gap-2">
          <li><a href="<?= site_url() ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Home</a></li>
          <li><a href="<?= site_url('about-us') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> About Us</a></li>
          <li><a href="<?= site_url('why-choose-us') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Why Choose Us</a></li>
          <li><a href="<?= site_url('our-branches') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Locations</a></li>
          <li><a href="<?= site_url('tracking') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Track Order</a></li>
          <li><a href="<?= site_url('blog') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Blog</a></li>
          <li><a href="<?= site_url('faqs') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> FAQs</a></li>
          <li><a href="<?= site_url('contact-us') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none"><i class="bi bi-chevron-right footer-chevron"></i> Contact Us</a></li>
        </ul>
      </div>

      <!-- Col 3: Our Services with App-Style Icon Badges -->
      <div class="col-6 col-md-3 col-lg-3">
        <div class="footer-capsule-header d-inline-flex align-items-center gap-2 rounded-pill text-nowrap mb-3">
          <i class="bi bi-truck"></i>
          <span>Our Services</span>
        </div>
        <ul class="list-unstyled footer-nav-list m-0 p-0 d-flex flex-column gap-2">
          <li>
            <a href="<?= site_url('home-relocation') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-house-door-fill"></i></span>
              <span>Household Shifting</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('office-relocation') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-briefcase-fill"></i></span>
              <span>Office Relocation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('car-transportation') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-car-front-fill"></i></span>
              <span>Car Transportation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('bike-transportation') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-bicycle"></i></span>
              <span>Bike Transportation</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('packing-and-moving') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-box-seam-fill"></i></span>
              <span>Packing &amp; Moving</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('loading-unloading') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-arrow-down-up"></i></span>
              <span>Loading &amp; Unloading</span>
            </a>
          </li>
          <li>
            <a href="<?= site_url('storage-services') ?>" class="footer-link d-inline-flex align-items-center gap-2 text-decoration-none">
              <span class="footer-svc-icon d-inline-flex align-items-center justify-content-center flex-shrink-0"><i class="bi bi-shop"></i></span>
              <span>Warehousing &amp; Storage</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Col 4: Contact Us with Interactive Glass Cards -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="footer-capsule-header d-inline-flex align-items-center gap-2 rounded-pill text-nowrap mb-3">
          <i class="bi bi-telephone-fill"></i>
          <span>Contact Us</span>
        </div>
        <div class="footer-contact-cards d-flex flex-column gap-2">
          
          <!-- Address Card -->
          <div class="footer-contact-box d-flex align-items-start gap-3 p-2 rounded-3">
            <div class="footer-contact-icon-box flex-shrink-0 mt-1 d-flex align-items-center justify-content-center">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <div class="footer-contact-lbl text-uppercase fw-bold">Corporate Office</div>
              <div class="footer-contact-val">Plot No. 81, Prem Sagar Colony, Narayan Vihar, Mansarovar, Jaipur, Rajasthan – 302026</div>
            </div>
          </div>

          <!-- Phone Helpline Card with Live Pulse -->
          <a <?= @$phonehtml?> class="footer-contact-box footer-phone-card d-flex align-items-center gap-3 p-2 rounded-3 text-decoration-none">
            <div class="footer-contact-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
              <i class="bi bi-telephone-fill"></i>
            </div>
            <div class="flex-grow-1">
              <div class="footer-contact-lbl text-uppercase fw-bold d-flex align-items-center gap-2">
                <span>24/7 Helpline Support</span>
                <span class="badge-live-pulse d-inline-block rounded-circle" title="Available 24/7"></span>
              </div>
              <div class="footer-contact-val fw-bold text-highlight"><?= @$phone ?></div>
            </div>
            <i class="bi bi-arrow-right-short text-warning fs-4"></i>
          </a>

          <!-- Email & Website Grid Cards -->
          <div class="row g-2">
            <div class="col-12 col-sm-6">
              <a href="<?= @$mailhtml ?>" class="footer-contact-box d-flex align-items-center gap-2 p-2 rounded-3 text-decoration-none h-100">
                <div class="footer-contact-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
                  <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="text-truncate">
                  <div class="footer-contact-lbl text-uppercase fw-bold">Email Us</div>
                  <div class="footer-contact-val text-truncate"><?= @$mail ?></div>
                </div>
              </a>
            </div>
            <div class="col-12 col-sm-6">
              <a href="<?= site_url() ?>" class="footer-contact-box d-flex align-items-center gap-2 p-2 rounded-3 text-decoration-none h-100">
                <div class="footer-contact-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
                  <i class="bi bi-globe"></i>
                </div>
                <div class="text-truncate">
                  <div class="footer-contact-lbl text-uppercase fw-bold">Website</div>
                  <div class="footer-contact-val text-truncate"><?= @$companydomain ?></div>
                </div>
              </a>
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- VIP Trust & Assurance Strip -->
    <div class="footer-trust-card p-3 p-md-4 mb-4">
      <div class="row g-3 g-lg-0 align-items-center">
        
        <!-- Safe & Secure -->
        <div class="col-6 col-lg-3 d-flex align-items-center gap-3 px-lg-4 footer-trust-col">
          <div class="footer-trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <div class="trust-title">Safe &amp; Secure</div>
            <div class="trust-subtitle">100% Transit Insured Move</div>
          </div>
        </div>

        <!-- On-Time Delivery -->
        <div class="col-6 col-lg-3 d-flex align-items-center gap-3 px-lg-4 footer-trust-col">
          <div class="footer-trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
            <i class="bi bi-truck"></i>
          </div>
          <div>
            <div class="trust-title">On-Time Delivery</div>
            <div class="trust-subtitle">GPS Live Tracking &amp; Timely</div>
          </div>
        </div>

        <!-- Trusted by -->
        <div class="col-6 col-lg-3 d-flex align-items-center gap-3 px-lg-4 footer-trust-col">
          <div class="footer-trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
            <i class="bi bi-people-fill"></i>
          </div>
          <div>
            <div class="trust-title">Trusted by 15,000+</div>
            <div class="trust-subtitle">Happy Families Shifted</div>
          </div>
        </div>

        <!-- 24x7 Support -->
        <div class="col-6 col-lg-3 d-flex align-items-center gap-3 px-lg-4 footer-trust-col border-0">
          <div class="footer-trust-icon-box flex-shrink-0 d-flex align-items-center justify-content-center">
            <i class="bi bi-headset"></i>
          </div>
          <div>
            <div class="trust-title">24x7 Support</div>
            <div class="trust-subtitle">Personal Move Manager</div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Bottom Dark Copyright & Verification Bar -->
  <div class="footer-bottom-bar">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
      <div class="footer-copy-text">
        &copy; <?= date('Y') ?> <?= htmlspecialchars($company3 ?? 'TCI Relocation Packers Movers') ?>. All Rights Reserved.
      </div>
      <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
        <span class="footer-security-tag"><i class="bi bi-shield-lock-fill text-warning"></i> 100% Verified Packers</span>
        <span class="footer-divider-pipe">|</span>
        <a href="<?= site_url('privacy-policy') ?>" class="footer-sublink text-decoration-none">Privacy Policy</a>
        <span class="footer-divider-pipe">|</span>
        <a href="<?= site_url('terms-and-conditions') ?>" class="footer-sublink text-decoration-none">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>

<!-- Floating Action Buttons (WhatsApp & Call) -->
<?php $this->load->view('template/floating_btn_widget'); ?>

<!-- Modals & Scripts -->
<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('reviews/reviewmodal'); ?>
<script src="<?= base_url('assets/js/form.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
