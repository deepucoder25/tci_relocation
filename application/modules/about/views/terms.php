<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms and Conditions',
    'bc_desc' => "Service Agreements, Relocation Policies, Transit Guidelines &amp; Operational Standards of $company3",
    'breadcrumbs' => [
        ['name' => 'Terms and Conditions']
    ]
]);
?>

<!-- ==========================================================================
     Terms and Conditions Document Section
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-4">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-file-earmark-text-fill"></i> LEGAL &amp; POLICIES
      </div>
      <h2 class="about-page-title">
        TERMS &amp; <span class="about-highlight">CONDITIONS</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Please read these terms and conditions carefully before booking your relocation with <?= $company3 ?>. By engaging our services, you agree to comply with the operational policies outlined below.
      </p>
    </div>

    <div class="row g-4 g-lg-5 align-items-start">
      
      <!-- Left Column: Sticky Table of Contents & Quick Support (col-12 col-lg-4) -->
      <div class="col-12 col-lg-4 order-2 order-lg-1">
        <div class="sticky-lg-top pt-lg-2">
          
          <!-- Navigation Card -->
          <div class="card rounded-4 p-4 border shadow-sm bg-white mb-4">
            <h6 class="fw-bold text-dark mb-3">
              <i class="bi bi-list-nested text-warning me-2"></i>Table of Contents
            </h6>
            <nav class="nav flex-column gap-2 small">
              <a class="nav-link p-0 text-secondary" href="#terms-agreement">1. Agreement &amp; Acceptance</a>
              <a class="nav-link p-0 text-secondary" href="#terms-pricing">2. Quotation &amp; Pricing Policy</a>
              <a class="nav-link p-0 text-secondary" href="#terms-packing">3. Packaging &amp; Dismantling</a>
              <a class="nav-link p-0 text-secondary" href="#terms-insurance">4. Transit Insurance &amp; Claims</a>
              <a class="nav-link p-0 text-secondary" href="#terms-prohibited">5. Prohibited &amp; Hazardous Goods</a>
              <a class="nav-link p-0 text-secondary" href="#terms-delivery">6. Transit Timelines &amp; Delivery</a>
              <a class="nav-link p-0 text-secondary" href="#terms-cancellation">7. Cancellation &amp; Rescheduling</a>
              <a class="nav-link p-0 text-secondary" href="#terms-liability">8. Limitation of Liability &amp; Law</a>
            </nav>
          </div>

          <!-- Legal Contact Card -->
          <div class="card rounded-4 p-4 bg-light border shadow-sm">
            <h6 class="fw-bold text-dark mb-2">
              <i class="bi bi-shield-check text-warning me-2"></i>Legal Inquiries
            </h6>
            <p class="text-muted small mb-3">
              For queries concerning contracts, corporate agreements, or insurance claims documentation:
            </p>
            <div class="small text-secondary mb-2">
              <i class="bi bi-envelope-fill text-warning me-2"></i><?= @$mail ?>
            </div>
            <div class="small text-secondary mb-3">
              <i class="bi bi-telephone-fill text-warning me-2"></i><?= @$phone ?>
            </div>
            <a <?= @$phonehtml ?> class="btn btn-outline-dark btn-sm w-100 rounded-pill fw-bold">
              Call Support Desk
            </a>
          </div>

        </div>
      </div>

      <!-- Right Column: Detailed Legal Terms (col-12 col-lg-8) -->
      <div class="col-12 col-lg-8 order-1 order-lg-2">
        <div class="card rounded-4 border p-4 p-lg-5 shadow-sm bg-white">
          
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 pb-3 mb-4 border-bottom">
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
              <i class="bi bi-clock-history me-1 text-warning"></i> Last Updated: January 2025
            </span>
            <span class="badge bg-warning-subtle text-dark border border-warning-subtle px-3 py-2 rounded-pill">
              Official Consignment Agreement
            </span>
          </div>

          <!-- Section 1 -->
          <div id="terms-agreement" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">1. Agreement &amp; Acceptance of Services</h4>
            <p class="text-secondary small leading-relaxed">
              By accepting a written quotation, paying a booking token, or allowing our packing crews to initiate handling of household or commercial items, the client explicitly agrees to these Terms and Conditions. These terms govern all packing, moving, handling, transportation, and warehousing services provided by <strong><?= $company3 ?></strong>.
            </p>
          </div>

          <!-- Section 2 -->
          <div id="terms-pricing" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">2. Quotation, Survey &amp; Pricing Policy</h4>
            <p class="text-secondary small leading-relaxed">
              Our initial estimation is based on the declared inventory list provided during the virtual or in-person pre-move survey.
            </p>
            <ul class="text-secondary small ps-3 mb-3">
              <li><strong>Binding Fixed Quotation:</strong> All agreed charges (packing, loading, transport, GST, and unloading) remain fixed provided no additional items are added to the moving manifest.</li>
              <li><strong>Inventory Variations:</strong> If additional goods, oversized appliances, or unforeseen multi-floor hand-carry scenarios without elevator access arise on moving day, supplementary charges will be billed on an itemized basis.</li>
              <li><strong>Payment Milestones:</strong> A formal advance confirms vehicle scheduling, with the remaining balance due upon doorstep arrival prior to complete consignment handover.</li>
            </ul>
          </div>

          <!-- Section 3 -->
          <div id="terms-packing" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">3. Packaging, Dismantling &amp; Handling Standards</h4>
            <p class="text-secondary small leading-relaxed">
              Our verified teams deploy standardized multi-layer packing materials (bubble wrap, corrugated sheets, edge foam, and stretch film).
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li>Our team undertakes dismantling and reassembly of standard modular furniture (beds, dining sets, wardrobes). Special customized carpentry or wall-drilling installations may require specialized local third-party technician assistance.</li>
              <li>Clients are advised to disconnect all electrical appliances (refrigerators defrosted 24 hours prior, washing machine drum transit bolts installed) before our team arrives.</li>
            </ul>
          </div>

          <!-- Section 4 -->
          <div id="terms-insurance" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">4. Transit Insurance &amp; Claims Settlement</h4>
            <p class="text-secondary small leading-relaxed">
              Transit insurance is an essential risk-mitigation layer issued in collaboration with recognized national general insurance companies.
            </p>
            <div class="p-3 rounded-3 bg-light border-start border-4 border-warning mb-3">
              <p class="text-dark small fw-semibold mb-0">
                Transit insurance covers total or partial physical loss resulting from road accidents, vehicle collision, overturning, fire, or severe transit impacts. It does not cover pre-existing cosmetic wear, internal electronic circuit failure without external casing impact, or self-packed uninspected cartons.
              </p>
            </div>
            <p class="text-secondary small leading-relaxed mb-0">
              In the event of accidental transit damage, the client must notify our Move Coordinator within <strong>48 hours of consignment delivery</strong> with clear photographic evidence and an endorsement on the consignment delivery note.
            </p>
          </div>

          <!-- Section 5 -->
          <div id="terms-prohibited" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">5. Strictly Prohibited &amp; Hazardous Goods</h4>
            <div class="alert alert-warning border-warning-subtle small mb-3">
              <i class="bi bi-exclamation-triangle-fill me-2"></i>
              <strong>Statutory Warning:</strong> Under the Indian Motor Vehicles and Carriage by Road Acts, transport of dangerous or hazardous contraband is punishable by law.
            </div>
            <p class="text-secondary small leading-relaxed">
              <?= $company3 ?> will under no circumstances load or transport:
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li>LPG cylinders, kerosene, petrol cans, paint thinners, fireworks, acids, or explosives.</li>
              <li>Perishable vegetables, raw meats, or unpackaged open food items.</li>
              <li>Cash, loose currency notes, bullion, gold and diamond jewelry, bearer bonds, and original property title deeds. Clients must transfer these assets personally.</li>
            </ul>
          </div>

          <!-- Section 6 -->
          <div id="terms-delivery" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">6. Transit Timelines, Delivery &amp; Demurrage</h4>
            <p class="text-secondary small leading-relaxed">
              While we maintain an industry-leading 98%+ on-time record, estimated delivery windows provided during booking are subject to highway checkpoints, state border clearances, seasonal monsoons, and statutory traffic restrictions in municipal zones.
            </p>
            <p class="text-secondary small leading-relaxed mb-0">
              If the client’s destination premises are locked or unavailable on the agreed delivery date, goods will be safely held in our secure local warehouse facility. Storage beyond the free courtesy grace period will incur nominal warehousing and re-transport demurrage.
            </p>
          </div>

          <!-- Section 7 -->
          <div id="terms-cancellation" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">7. Cancellation, Rescheduling &amp; Refund Policy</h4>
            <p class="text-secondary small leading-relaxed">
              We understand moving dates may change due to property handovers or transfer orders.
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li><strong>Free Rescheduling:</strong> Moves may be rescheduled without penalty up to 24 hours prior to the scheduled packing time.</li>
              <li><strong>Cancellations:</strong> If cancelled at least 48 hours prior to the scheduled date, booking deposits will be refunded in full after deducting nominal bank gateway fees.</li>
            </ul>
          </div>

          <!-- Section 8 -->
          <div id="terms-liability" class="mb-0">
            <h4 class="fw-bold text-dark mb-3">8. Limitation of Liability &amp; Governing Law</h4>
            <p class="text-secondary small leading-relaxed mb-3">
              <?= $company3 ?> is committed to professional care and zero transit damage. However, we are not liable for delays or damages arising from acts of God, extreme natural floods, strikes, civil disturbances, or state regulatory border closures beyond our commercial control.
            </p>
            <p class="text-secondary small leading-relaxed mb-0">
              Any dispute arising out of or in connection with these services shall be subject to the exclusive jurisdiction of the competent civil courts within India.
            </p>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>