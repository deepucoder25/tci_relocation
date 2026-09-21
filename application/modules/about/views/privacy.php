<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy',
    'bc_desc' => "How $company3 Protects, Manages, and Safeguards Your Personal and Relocation Information",
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- ==========================================================================
     Privacy Policy Document Section
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-4">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-shield-lock-fill"></i> PRIVACY &amp; DATA SECURITY
      </div>
      <h2 class="about-page-title">
        OUR PRIVACY <span class="about-highlight">POLICY</span>
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        At <?= $company3 ?>, we recognize the importance of your privacy. This policy explains how we collect, store, utilize, and protect your personal information during your relocation journey.
      </p>
    </div>

    <div class="row g-4 g-lg-5 align-items-start">
      
      <!-- Left Column: Sticky Table of Contents & Quick Support (col-12 col-lg-4) -->
      <div class="col-12 col-lg-4 order-2 order-lg-1">
        <div class="sticky-lg-top pt-lg-2">
          
          <!-- Navigation Card -->
          <div class="card rounded-4 p-4 border shadow-sm bg-white mb-4">
            <h6 class="fw-bold text-dark mb-3">
              <i class="bi bi-list-nested text-warning me-2"></i>Privacy Topics
            </h6>
            <nav class="nav flex-column gap-2 small">
              <a class="nav-link p-0 text-secondary" href="#privacy-collect">1. Information We Collect</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-use">2. How We Use Your Data</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-security">3. Data Security Standards</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-sharing">4. Third-Party Disclosures</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-cookies">5. Cookies &amp; Tracking</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-retention">6. Data Retention &amp; Rights</a>
              <a class="nav-link p-0 text-secondary" href="#privacy-contact">7. Privacy Officer Contact</a>
            </nav>
          </div>

          <!-- Privacy Assurance Card -->
          <div class="card rounded-4 p-4 bg-light border shadow-sm">
            <h6 class="fw-bold text-dark mb-2">
              <i class="bi bi-shield-check text-warning me-2"></i>Our Zero-Spam Promise
            </h6>
            <p class="text-muted small mb-3">
              We never sell, rent, or trade your personal contact details to external marketing databases. Your information is used exclusively to facilitate your relocation.
            </p>
            <div class="small text-secondary mb-2">
              <i class="bi bi-envelope-fill text-warning me-2"></i><?= @$mail ?>
            </div>
            <div class="small text-secondary mb-3">
              <i class="bi bi-telephone-fill text-warning me-2"></i><?= @$phone ?>
            </div>
            <a <?= @$phonehtml ?> class="btn btn-outline-dark btn-sm w-100 rounded-pill fw-bold">
              Speak with Support
            </a>
          </div>

        </div>
      </div>

      <!-- Right Column: Detailed Privacy Clauses (col-12 col-lg-8) -->
      <div class="col-12 col-lg-8 order-1 order-lg-2">
        <div class="card rounded-4 border p-4 p-lg-5 shadow-sm bg-white">
          
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 pb-3 mb-4 border-bottom">
            <span class="badge bg-light text-dark border px-3 py-2 rounded-pill">
              <i class="bi bi-clock-history me-1 text-warning"></i> Effective Date: January 2025
            </span>
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill">
              <i class="bi bi-patch-check-fill me-1"></i> DPDP &amp; IT Act Compliant
            </span>
          </div>

          <!-- Section 1 -->
          <div id="privacy-collect" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">1. Information We Collect</h4>
            <p class="text-secondary small leading-relaxed">
              To provide accurate shifting quotations and execute seamless relocation services, <strong><?= $company3 ?></strong> collects the following personal and logistics details:
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li><strong>Personal Identifiers:</strong> Name, phone number, alternate contact details, and email address.</li>
              <li><strong>Relocation Coordinates:</strong> Origin pickup address, destination delivery address, property floor levels, and elevator availability.</li>
              <li><strong>Inventory Particulars:</strong> Itemized household or office equipment lists, fragile items declarations, and declared consignment valuation for transit insurance.</li>
              <li><strong>Statutory Documentation:</strong> Vehicle RC copies, identity verification (Aadhaar / PAN), and GST details required exclusively for state highway border clearances and e-way bill generation.</li>
            </ul>
          </div>

          <!-- Section 2 -->
          <div id="privacy-use" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">2. How We Utilize Your Data</h4>
            <p class="text-secondary small leading-relaxed">
              We process your personal information strictly for legitimate operational purposes, including:
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li>Generating transparent, customized price estimates and dispatching written quotations.</li>
              <li>Scheduling trained packing crews, assigning personal Move Coordinators, and allocating container vehicles.</li>
              <li>Transmitting real-time GPS transit tracking notifications and estimated time of arrival (ETA) milestones via SMS, WhatsApp, or phone.</li>
              <li>Issuing GST-compliant invoices, consignment delivery receipts, and facilitating transit insurance policy enrollment.</li>
              <li>Addressing customer feedback, claims processing, and after-move settlement assistance.</li>
            </ul>
          </div>

          <!-- Section 3 -->
          <div id="privacy-security" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">3. Data Security &amp; Storage Standards</h4>
            <div class="p-3 rounded-3 bg-light border-start border-4 border-warning mb-3">
              <p class="text-dark small fw-semibold mb-0">
                All data transmission across our website is protected by industry-standard 256-bit SSL encryption. Customer records are stored on firewall-protected servers with multi-factor authentication and role-based access restrictions.
              </p>
            </div>
            <p class="text-secondary small leading-relaxed mb-0">
              Physical documents (such as physical inventory forms and delivery notes) are archived in secure administrative facilities and shredded securely once statutory auditing periods conclude.
            </p>
          </div>

          <!-- Section 4 -->
          <div id="privacy-sharing" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">4. Third-Party Disclosures &amp; Non-Sale Pledge</h4>
            <p class="text-secondary small leading-relaxed">
              <strong>We do not sell, rent, or monetize your personal information.</strong> We only share necessary data with trusted operational partners under strict confidentiality:
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li><strong>Insurance Providers:</strong> Legitimate national general insurance partners for issuing official transit damage coverage policies.</li>
              <li><strong>Government &amp; Transport Authorities:</strong> Statutory tax officers, RTO checkpoints, and GST authorities for interstate e-way bills and transit permits as mandated by Indian transport laws.</li>
              <li><strong>Secure Payment Gateways:</strong> RBI-licensed banking aggregators for processing credit/debit card, UPI, or net banking transactions.</li>
            </ul>
          </div>

          <!-- Section 5 -->
          <div id="privacy-cookies" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">5. Cookies &amp; Website Analytics</h4>
            <p class="text-secondary small leading-relaxed mb-0">
              Our website uses essential cookies to remember your session preferences, support quote request forms, and monitor aggregate visitor traffic. You can adjust your browser settings to reject cookies; however, some interactive form features may require cookies for proper functionality.
            </p>
          </div>

          <!-- Section 6 -->
          <div id="privacy-retention" class="mb-5">
            <h4 class="fw-bold text-dark mb-3">6. Data Retention &amp; Customer Rights</h4>
            <p class="text-secondary small leading-relaxed">
              Under applicable Indian privacy and data protection frameworks, you have the right to:
            </p>
            <ul class="text-secondary small ps-3 mb-0">
              <li>Request a review or copy of your personal data stored in our moving records.</li>
              <li>Request corrections to outdated phone numbers or delivery addresses.</li>
              <li>Request the deletion of your promotional contact preferences upon move completion. (Billing and consignment records are retained for statutory periods as required under Indian taxation laws).</li>
            </ul>
          </div>

          <!-- Section 7 -->
          <div id="privacy-contact" class="mb-0">
            <h4 class="fw-bold text-dark mb-3">7. Contact Our Data Privacy Officer</h4>
            <p class="text-secondary small leading-relaxed mb-3">
              If you have questions, concerns, or requests regarding this Privacy Policy or how your information is handled, please contact our administrative desk:
            </p>
            <div class="p-3 rounded-3 bg-light border small text-secondary">
              <div class="fw-bold text-dark mb-1"><?= $company3 ?> &ndash; Grievance Redressal Cell</div>
              <div><i class="bi bi-envelope-fill text-warning me-2"></i>Email: <?= @$mail ?></div>
              <div><i class="bi bi-telephone-fill text-warning me-2"></i>Phone: <?= @$phone ?></div>
              <div><i class="bi bi-clock-history text-warning me-2"></i>Operational Hours: 9:00 AM &ndash; 7:00 PM (Mon &ndash; Sat)</div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>