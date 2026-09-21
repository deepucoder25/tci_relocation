<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ==========================================================================
     About Us Section - Matching Screenshot 1 with TCI Relocation Branding
     ========================================================================== -->
<section class="home-about-section position-relative overflow-hidden" id="about">
  <div class="about-bg-watermark">
    <i class="bi bi-truck"></i>
  </div>

  <div class="container position-relative z-1">
    <div class="row g-4 g-lg-5 align-items-center">
      
      <!-- Left Column: Image Mosaic Collage -->
      <div class="col-lg-6">
        <div class="about-mosaic-wrap">
          <div class="row g-3">
            
            <!-- Main Big Photo (Upper / On Top) -->
            <div class="col-12 position-relative mb-2">
              <div class="about-main-img-card">
                <img src="<?= base_url('assets/img/tci_about_truck.jpg') ?>" 
                     alt="TCI Relocation Moving Truck and Packing" 
                     class="img-fluid" 
                     loading="lazy">
              </div>

              <!-- Floating Bottom-Left Trust Seal -->
              <div class="about-floating-badge d-flex align-items-center gap-2">
                <div class="about-floating-badge-icon flex-shrink-0">
                  <i class="bi bi-patch-check-fill"></i>
                </div>
                <div>
                  <div class="about-floating-badge-title">Trusted Packers &amp; Movers</div>
                  <div class="about-floating-badge-desc">Safe. Secure. Hassle-Free.</div>
                </div>
              </div>
            </div>

            <!-- 3 Small Boxes in ONE ROW Down Below the Image -->
            <div class="col-12">
              <div class="row g-2 g-md-3">
                
                <!-- 1. Golden Quote Card -->
                <div class="col-4">
                  <div class="about-card-orange h-100 d-flex flex-column justify-content-center text-center">
                    <div class="about-card-orange-icon mb-1">
                      <i class="bi bi-box2-heart-fill"></i>
                    </div>
                    <div class="about-card-orange-title mb-1">Your Move, Our Responsibility</div>
                    <div class="about-card-orange-desc d-none d-lg-block">We treat your belongings like our own.</div>
                  </div>
                </div>

                <!-- 2. Middle Secondary Photo (Moving Crew) -->
                <div class="col-4">
                  <div class="about-sub-img-card h-100">
                    <img src="<?= base_url('assets/img/tci_about_crew.jpg') ?>" 
                         alt="TCI Relocation Moving Crew" 
                         class="img-fluid" 
                         loading="lazy">
                  </div>
                </div>

                <!-- 3. Bottom Dark Navy Card -->
                <div class="col-4">
                  <div class="about-card-navy h-100 d-flex flex-column justify-content-center text-center">
                    <div class="about-card-navy-icon mb-1">
                      <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="about-card-navy-title mb-1">Safe Moving</div>
                    <div class="about-card-navy-desc d-none d-lg-block">Advanced packing, secure delivery.</div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Right Column: Content & 4 Features -->
      <div class="col-lg-6">
        <div class="home-section-header text-start mb-4">
          <!-- Subtitle with Orange Diamond Dashes -->
          <div class="section-subtitle-wrap d-inline-flex align-items-center gap-2">
            <span class="heading-dash"></span>
            <span class="section-subtitle">ABOUT US</span>
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
            WE MOVE YOU <span class="section-title-highlight">WITH CARE</span>
          </h2>

          <!-- 3-Dot Divider Line with Left & Right Gradient Lines -->
          <div class="section-heading-divider d-inline-flex align-items-center gap-2 my-2">
            <span class="heading-divider-line line-left"></span>
            <span class="dot dot-navy"></span>
            <span class="dot dot-orange"></span>
            <span class="dot dot-orange"></span>
            <span class="heading-divider-line line-right"></span>
          </div>

          <p class="section-desc text-start mt-2 mb-0">
            At <strong><?= htmlspecialchars($company3 ?? 'TCI Relocation Packers Movers') ?></strong>, we believe moving is more than just transportation — it's about trust, care and new beginnings. With professional packing, careful handling and on-time delivery, we make your relocation smooth, stress-free and memorable.
          </p>
        </div>

        <!-- 4 Bullet Features -->
        <div class="d-flex flex-column gap-3 mb-4">
          
          <!-- 1. Experienced Professionals -->
          <div class="about-feature-item d-flex align-items-start gap-3">
            <div class="about-feature-icon-box d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-people-fill"></i>
            </div>
            <div>
              <h4 class="about-feature-title">Experienced Professionals</h4>
              <p class="about-feature-desc">Skilled team ensuring smooth &amp; efficient moves.</p>
            </div>
          </div>

          <!-- 2. Safe & Secure -->
          <div class="about-feature-item d-flex align-items-start gap-3">
            <div class="about-feature-icon-box d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-shield-check"></i>
            </div>
            <div>
              <h4 class="about-feature-title">Safe &amp; Secure</h4>
              <p class="about-feature-desc">Your belongings are packed and delivered with maximum care.</p>
            </div>
          </div>

          <!-- 3. On-Time Delivery -->
          <div class="about-feature-item d-flex align-items-start gap-3">
            <div class="about-feature-icon-box d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-clock-fill"></i>
            </div>
            <div>
              <h4 class="about-feature-title">On-Time Delivery</h4>
              <p class="about-feature-desc">We value your time and ensure timely delivery every time.</p>
            </div>
          </div>

          <!-- 4. 24/7 Customer Support -->
          <div class="about-feature-item d-flex align-items-start gap-3">
            <div class="about-feature-icon-box d-flex align-items-center justify-content-center flex-shrink-0">
              <i class="bi bi-headset"></i>
            </div>
            <div>
              <h4 class="about-feature-title">24/7 Customer Support</h4>
              <p class="about-feature-desc">We're always here to help you at every step of your journey.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>
