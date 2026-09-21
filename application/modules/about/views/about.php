<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About Us',
    'bc_desc' => 'Trusted Packers &amp; Movers Delivering Safe &amp; Hassle-Free Relocation Across India',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- ==========================================================================
     1. Brand Overview Stage (col-6 Content and col-6 Image Showcase)
     ========================================================================== -->
<section class="about-overview-section">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Content Column: col-12 col-lg-6 -->
      <div class="col-12 col-lg-6">
        <div class="about-overview-content">
          <div class="about-page-tag">
            <i class="bi bi-patch-check-fill"></i> WHO WE ARE
          </div>
          
          <h2 class="about-page-title">
            REDEFINING MOVING WITH <span class="about-highlight">PRECISION &amp; TRUST</span>
          </h2>
          
          <div class="about-title-line">
            <span class="about-line-bar"></span>
            <span class="about-line-dot"></span>
          </div>

          <p class="about-overview-lead">
            Established in <?= $startYear ?>, <strong><?= $company3 ?></strong> was born with a mission to replace the chaos and stress of shifting with structured reliability, absolute transparency, and meticulous care.
          </p>

          <p class="about-overview-desc">
            Over <?= $yearsExperience ?> years, we have transitioned from a focused regional transport partner into one of India’s foremost relocation enterprises. By harmonizing proprietary multi-layer packaging techniques, GPS-connected fleet containers, and IBA-approved operating protocols, we ensure every relocation milestone is completed without a scratch.
          </p>

          <p class="about-overview-extra">
            From precious household heirlooms and fragile electronics to complete corporate office infrastructure, our certified supervisors manage every shifting milestone with zero compromise on safety, transparency, and punctuality.
          </p>

        </div>
      </div>

      <!-- Image Column: col-12 col-lg-6 -->
      <div class="col-12 col-lg-6">
        <div class="about-showcase-visual">
          <div class="about-visual-card">
            <img src="<?= base_url('assets/img/tci_hero_banner.jpg') ?>" 
                 alt="<?= $company3 ?> Moving Logistics" 
                 class="img-fluid"
                 loading="lazy">
            
            <!-- Floating Top-Right Experience Badge -->
            <div class="about-visual-badge">
              <span class="about-visual-badge-num"><?= $yearsExperience ?></span>
              <span class="about-visual-badge-txt">Years of<br>Excellence</span>
            </div>

            <!-- Floating Bottom Trust Seal -->
            <div class="about-visual-rating-seal">
              <div class="about-rating-seal-stars">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <div class="about-rating-seal-text">
                <strong><?= $ratingValue ?> / 5.0</strong> &bull; IBA Approved Standard
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<!-- ==========================================================================
     3. Modern Bento Grid of Infrastructure & Capabilities
     ========================================================================== -->
<section class="about-bento-section">
  <div class="container">
    
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-grid-1x2-fill"></i> OUR CAPABILITIES
      </div>
      <h2 class="about-page-title">
        ENGINEERED FOR <span class="about-highlight">ZERO DAMAGE</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Every stage of our operational lifecycle is built with purpose-specific equipment, verified crews, and institutional protection.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Bento Card 1 (Dark Highlight - Core Philosophy & Promise) -->
      <div class="col-12 col-lg-5">
        <div class="about-bento-card about-bento-dark">
          <div class="about-bento-header">
            <div class="about-bento-icon-box">
              <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h3 class="about-bento-title">Uncompromising Security &amp; Full Accountability</h3>
          </div>
          <p class="about-bento-desc">
            We treat every carton with the same diligence as family heirlooms. From digital inventory tracking to dedicated moving supervisors, you are kept informed at each step.
          </p>
          <ul class="about-bento-feature-list">
            <li><i class="bi bi-check-circle-fill"></i> Dedicated Move Coordinator assigned to each move</li>
            <li><i class="bi bi-check-circle-fill"></i> Written, tamper-proof item inventory checklist</li>
            <li><i class="bi bi-check-circle-fill"></i> Zero hidden moving-day costs guaranteed</li>
          </ul>
        </div>
      </div>

      <!-- Bento Card 2: 5-Layer Packing Standard -->
      <div class="col-12 col-md-6 col-lg-7">
        <div class="about-bento-card">
          <div class="about-bento-header">
            <div class="about-bento-icon-box">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <h3 class="about-bento-title">5-Layer Protective Cushioning</h3>
          </div>
          <p class="about-bento-desc">
            Standard packing often fails on long transit routes. Our 5-tier system utilizes high-grade air bubble wraps, shock-absorbent corrugated sheets, corner foam protectors, edge tape sealing, and waterproof stretch wraps.
          </p>
          <ul class="about-bento-feature-list">
            <li><i class="bi bi-check2"></i> Specialized wooden crates for fragile glassware and electronics</li>
            <li><i class="bi bi-check2"></i> Heavy-duty wardrobe boxes for wrinkle-free clothing transport</li>
          </ul>
        </div>
      </div>

      <!-- Bento Card 3: Modern Fleet Infrastructure -->
      <div class="col-12 col-md-6 col-lg-6">
        <div class="about-bento-card">
          <div class="about-bento-header">
            <div class="about-bento-icon-box">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <h3 class="about-bento-title">All-Weather Closed Container Fleets</h3>
          </div>
          <p class="about-bento-desc">
            We do not rely on open-top tarpaulin vehicles. Our moves use weather-sealed steel container trucks equipped with pneumatic shock absorption and satellite GPS for continuous live telemetry.
          </p>
          <ul class="about-bento-feature-list">
            <li><i class="bi bi-check2"></i> Rain, dust, and vibration-proof transit chambers</li>
            <li><i class="bi bi-check2"></i> Regular vehicle mechanical audits before intercity departures</li>
          </ul>
        </div>
      </div>

      <!-- Bento Card 4: Transit Insurance & IBA Standard -->
      <div class="col-12 col-md-12 col-lg-6">
        <div class="about-bento-card">
          <div class="about-bento-header">
            <div class="about-bento-icon-box">
              <i class="bi bi-file-earmark-lock2-fill"></i>
            </div>
            <h3 class="about-bento-title">100% Transit Insurance &amp; IBA Alignment</h3>
          </div>
          <p class="about-bento-desc">
            Gain complete financial peace of mind. We maintain strategic tie-ups with leading national general insurance partners, providing seamless coverage and straightforward claims support.
          </p>
          <ul class="about-bento-feature-list">
            <li><i class="bi bi-check2"></i> Official moving bills compliant with corporate &amp; bank reimbursement</li>
            <li><i class="bi bi-check2"></i> Fast-track insurance settlement coordination</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     4. The People Behind Every Move (Workforce Pillars)
     ========================================================================= -->
<section class="about-team-section">
  <div class="container">
    
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-person-hearts"></i> OUR TEAM
      </div>
      <h2 class="about-page-title">
        THE EXPERTS <span class="about-highlight">BEHIND EVERY SHIFT</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Relocation is driven by people. Meet the specialized teams ensuring your transition is flawless from start to finish.
      </p>
    </div>

    <div class="row g-4">
      
      <!-- Team Card 1 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="about-team-card">
          <div class="about-team-header">
            <div class="about-team-icon-circle">
              <i class="bi bi-tools"></i>
            </div>
            <h3 class="about-team-role">Master Packers</h3>
          </div>
          <p class="about-team-desc">
            Trained rigorously in disassembling furniture, wrapping delicate chinaware, and packing heavy appliances safely using specialized rigging equipment.
          </p>
          <div class="about-team-chip">
            <i class="bi bi-patch-check-fill"></i> 100% Verified
          </div>
        </div>
      </div>

      <!-- Team Card 2 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="about-team-card">
          <div class="about-team-header">
            <div class="about-team-icon-circle">
              <i class="bi bi-truck"></i>
            </div>
            <h3 class="about-team-role">Certified Drivers</h3>
          </div>
          <p class="about-team-desc">
            Experienced highway transport pilots with clean records, specialized training in cargo driving dynamics, and route optimization.
          </p>
          <div class="about-team-chip">
            <i class="bi bi-patch-check-fill"></i> Long-Haul Experts
          </div>
        </div>
      </div>

      <!-- Team Card 3 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="about-team-card">
          <div class="about-team-header">
            <div class="about-team-icon-circle">
              <i class="bi bi-clipboard-check"></i>
            </div>
            <h3 class="about-team-role">Move Coordinators</h3>
          </div>
          <p class="about-team-desc">
            Your single point of contact who schedules vehicles, oversees packaging crews on-site, and tracks delivery time windows proactively.
          </p>
          <div class="about-team-chip">
            <i class="bi bi-patch-check-fill"></i> Dedicated SPOC
          </div>
        </div>
      </div>

      <!-- Team Card 4 -->
      <div class="col-12 col-sm-6 col-lg-3">
        <div class="about-team-card">
          <div class="about-team-header">
            <div class="about-team-icon-circle">
              <i class="bi bi-headset"></i>
            </div>
            <h3 class="about-team-role">24/7 Support Desk</h3>
          </div>
          <p class="about-team-desc">
            Always accessible for instant tracking updates, rescheduling requests, quotation modifications, or general relocation queries.
          </p>
          <div class="about-team-chip">
            <i class="bi bi-patch-check-fill"></i> Round The Clock
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
