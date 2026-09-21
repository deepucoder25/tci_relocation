<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose Us',
    'bc_desc' => "Discover Why Families &amp; Businesses Trust $company3 For Safe &amp; Reliable Shifting Across India",
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- ==========================================================================
     1. Why Choose Us Hero Overview Section (Full-Width Staged Feature Deck - Imageless)
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-4">
    
    <!-- Centered Editorial Brand Header -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-lg-9">
        <div class="about-page-tag">
          <i class="bi bi-patch-check-fill"></i> THE TCI ADVANTAGE
        </div>
        
        <h2 class="about-page-title">
          BUILT ON INTEGRITY, <span class="about-highlight">DELIVERED WITH CARE</span>
        </h2>
        
        <div class="about-title-line justify-content-center">
          <span class="about-line-bar"></span>
          <span class="about-line-dot"></span>
        </div>

        <p class="about-overview-lead text-dark">
          Choosing the right relocation partner is about choosing peace of mind. At <strong><?= $company3 ?></strong>, we combine <?= $yearsExperience ?> years of logistics excellence with multi-layer protective packaging, GPS-monitored fleet containers, and IBA-approved operational standards.
        </p>

        <p class="text-secondary small mb-0">
          We understand that every item we pack and move carries financial and emotional value. From fragile glassware and electronics to bulky modular furniture and family vehicles, our standardized moving protocols guarantee a zero-damage transition to your new doorstep.
        </p>
      </div>
    </div>

    <!-- 3 High-Impact Feature Cards (Full-Width Row) -->
    <div class="row g-4 mb-4">
      
      <!-- Feature Card 1: Transparent Pricing -->
      <div class="col-12 col-lg-4">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="choose-feature-icon">
              <i class="bi bi-cash-coin"></i>
            </div>
            <span class="choose-feature-pill">Zero Hidden Costs</span>
          </div>
          
          <h5 class="fw-bold mb-2 text-dark">100% Transparent Price Quotation</h5>
          <p class="text-muted small mb-4">
            Clear, itemized upfront estimation with zero hidden charges, surprises, or last-minute price escalation on moving day.
          </p>

          <div class="choose-feature-checklist mt-auto pt-3 border-top">
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Itemized inventory written quote</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>No moving-day surcharges</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>GST-compliant transparent billing</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature Card 2: Dedicated SPOC Coordinator -->
      <div class="col-12 col-lg-4">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="choose-feature-icon">
              <i class="bi bi-person-badge-fill"></i>
            </div>
            <span class="choose-feature-pill">Dedicated SPOC</span>
          </div>
          
          <h5 class="fw-bold mb-2 text-dark">Dedicated Move Coordinator</h5>
          <p class="text-muted small mb-4">
            A single designated personal supervisor coordinates scheduling, packing, fleet transit, and live milestone updates.
          </p>

          <div class="choose-feature-checklist mt-auto pt-3 border-top">
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Pre-move assessment &amp; planning</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Direct phone &amp; WhatsApp SPOC</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Doorstep supervisor oversight</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Feature Card 3: Weatherproof Closed Fleet -->
      <div class="col-12 col-lg-4">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="choose-feature-icon">
              <i class="bi bi-truck-front-fill"></i>
            </div>
            <span class="choose-feature-pill">GPS Monitored</span>
          </div>
          
          <h5 class="fw-bold mb-2 text-dark">Weatherproof Closed Containers</h5>
          <p class="text-muted small mb-4">
            Sealed container vehicles equipped with live satellite GPS tracking, tamper-proof locks, and road shock absorbers.
          </p>

          <div class="choose-feature-checklist mt-auto pt-3 border-top">
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>100% Weatherproof sealed body</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark mb-2">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Satellite GPS live route tracking</span>
            </div>
            <div class="d-flex align-items-center gap-2 small text-dark">
              <i class="bi bi-check-circle-fill text-warning"></i>
              <span>Shock-damped chassis protection</span>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- TCI Zero-Risk Relocation Commitment Ribbon -->
    <div class="p-3 p-lg-4 rounded-4 bg-light border d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3 text-center text-lg-start">
      <div class="d-flex align-items-center gap-3">
        <div class="choose-trust-badge-icon">
          <i class="bi bi-shield-fill-check text-warning fs-3"></i>
        </div>
        <div>
          <h6 class="fw-bold text-dark mb-1">The TCI Zero-Risk Relocation Commitment</h6>
          <p class="text-muted small mb-0">IBA Approved Logistics &bull; Background-Verified Crews &bull; Comprehensive Transit Insurance</p>
        </div>
      </div>
      <div class="d-flex flex-wrap justify-content-center gap-2">
        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs fw-semibold">
          <i class="bi bi-patch-check-fill text-warning me-1"></i> <?= $yearsExperience ?> Years Legacy
        </span>
        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs fw-semibold">
          <i class="bi bi-people-fill text-warning me-1"></i> <?= $happyClients ?> Moves
        </span>
        <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-xs fw-semibold">
          <i class="bi bi-geo-alt-fill text-warning me-1"></i> <?= $citiesCovered ?> Cities
        </span>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     2. 6 Core Pillars of Excellence (Bootstrap Cards Grid)
     ========================================================================== -->
<section class="py-5 bg-light border-top border-bottom">
  <div class="container py-lg-3">
    
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-stars"></i> OUR PILLARS
      </div>
      <h2 class="about-page-title">
        WHY WE STAND <span class="about-highlight">APART</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        We have engineered our moving infrastructure to replace shifting anxiety with professional certainty.
      </p>
    </div>

    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
      
      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-box-seam-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">5-Layer Protective Packing</h5>
          </div>
          <p class="text-muted small mb-0">
            Multi-tier packaging utilizing heavy-gauge bubble films, corrugated sheets, corner foam guards, edge taping, and wooden crates for maximum transit impact protection.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-shield-check"></i>
            </div>
            <h5 class="fw-bold mb-0">100% Verified Workforce</h5>
          </div>
          <p class="text-muted small mb-0">
            Every crew member undergoes police verification and comprehensive safety training in heavy lifting, delicate item handling, and respectful home conduct.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-file-earmark-lock2-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">100% Transit Insurance</h5>
          </div>
          <p class="text-muted small mb-0">
            All moves can be paired with institutional transit insurance policies through trusted national providers, ensuring full financial security with rapid claims settlement.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-stopwatch-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Guaranteed On-Time Delivery</h5>
          </div>
          <p class="text-muted small mb-0">
            Optimized route planning, reliable transport hubs, and dedicated driver shifts ensure scheduled pickups and punctual deliveries across state and national borders.
          </p>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Pan-India Branch Network</h5>
          </div>
          <p class="text-muted small mb-0">
            Active presence across <?= $citiesCovered ?> cities nationwide enables smooth intercity coordination, localized transit hubs, and immediate local assistance.
          </p>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-card bg-white">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="choose-icon-box">
              <i class="bi bi-house-check-fill"></i>
            </div>
            <h5 class="fw-bold mb-0">Unpack &amp; Settle In Assistance</h5>
          </div>
          <p class="text-muted small mb-0">
            Our crews do not just unload boxes at your doorstep; we help unpack delicate items, reassemble beds and wardrobes, and remove discarded packing debris.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ==========================================================================
     3. Direct Comparison: TCI Relocation vs Local Unorganized Movers
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-3">
    
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-check2-circle"></i> HONEST COMPARISON
      </div>
      <h2 class="about-page-title">
        SEE THE <span class="about-highlight">DIFFERENCE</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Compare our standardized corporate shifting model against common risks with unorganized local movers.
      </p>
    <!-- Mobile Horizontal Scroll Hint -->
    <div class="d-flex d-md-none justify-content-end align-items-center gap-1 text-muted small mb-2 px-1">
      <i class="bi bi-arrow-left-right text-warning"></i> <span>Scroll horizontally to view &rarr;</span>
    </div>

    <div class="card rounded-4 border overflow-hidden shadow-sm">
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0 choose-table">
          <thead>
            <tr>
              <th scope="col" class="py-3 px-4">Relocation Parameter</th>
              <th scope="col" class="py-3 px-4">Local Unorganized Movers</th>
              <th scope="col" class="py-3 px-4 col-tci"><?= $company3 ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold px-4">Pricing &amp; Estimates</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>Low initial phone quote with hidden moving-day surcharges
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>100% Fixed, itemized written quotation with zero surprises
              </td>
            </tr>
            <tr>
              <td class="fw-bold px-4">Packing Standards</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>Old reused cardboard cartons, newspapers, minimal tape
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>Standardized 5-layer materials, air bubbles &amp; wooden crates
              </td>
            </tr>
            <tr>
              <td class="fw-bold px-4">Vehicle Infrastructure</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>Open tarpaulin vehicles exposed to weather and road damage
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>All-weather sealed closed container trucks with live GPS
              </td>
            </tr>
            <tr>
              <td class="fw-bold px-4">Transit Insurance</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>No coverage or deceptive promises without valid insurance policy
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>100% Valid Transit Insurance with national partner tie-ups
              </td>
            </tr>
            <tr>
              <td class="fw-bold px-4">Crew Verification</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>Daily wage casual laborers with zero background screening
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>100% Background-checked, in-house trained shifting experts
              </td>
            </tr>
            <tr>
              <td class="fw-bold px-4">Customer Support</td>
              <td class="px-4 text-muted badge-bad">
                <i class="bi bi-x-circle-fill me-2"></i>Unanswered phone calls once goods are loaded onto the truck
              </td>
              <td class="px-4 col-tci badge-good">
                <i class="bi bi-check-circle-fill me-2"></i>Dedicated Move Coordinator &amp; 24/7 client helpline
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>
</section>

<!-- ==========================================================================
     4. Verified Trust Metrics
     ========================================================================== -->
<section class="py-5 bg-light border-top border-bottom">
  <div class="container py-lg-2">
    <div class="row g-3 row-cols-2 row-cols-lg-4 text-center">
      
      <div class="col">
        <div class="choose-metric-card h-100">
          <div class="display-6 fw-bold text-dark mb-1"><?= $happyClients ?></div>
          <div class="text-muted small fw-semibold text-uppercase">Successful Relocations</div>
        </div>
      </div>

      <div class="col">
        <div class="choose-metric-card h-100">
          <div class="display-6 fw-bold text-dark mb-1"><?= $yearsExperience ?></div>
          <div class="text-muted small fw-semibold text-uppercase">Years Industry Legacy</div>
        </div>
      </div>

      <div class="col">
        <div class="choose-metric-card h-100">
          <div class="display-6 fw-bold text-dark mb-1"><?= $citiesCovered ?></div>
          <div class="text-muted small fw-semibold text-uppercase">Cities Network</div>
        </div>
      </div>

      <div class="col">
        <div class="choose-metric-card h-100">
          <div class="display-6 fw-bold text-dark mb-1"><?= $secureShifting ?></div>
          <div class="text-muted small fw-semibold text-uppercase">Damage-Free Record</div>
        </div>
      </div>

    </div>
  </div>
</section>
