<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Client Testimonials',
    'bc_desc' => "Real Stories &amp; Authentic Shifting Feedback from Families and Businesses Moved by $company3",
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- ==========================================================================
     Testimonials Section - High-End Verified Client Stories Grid
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container py-lg-4">
    
    <!-- Section Header -->
    <div class="text-center mb-5">
      <div class="about-page-tag">
        <i class="bi bi-chat-quote-fill"></i> CLIENT STORIES &amp; EXPERIENCES
      </div>
      <h2 class="about-page-title">
        LOVED BY <span class="about-highlight"><?= $happyClients ?>+ FAMILIES</span> &amp; BUSINESSES
      </h2>
      <div class="about-title-line justify-content-center">
        <span class="about-line-bar"></span>
        <span class="about-line-dot"></span>
      </div>
      <p class="about-page-subtitle">
        Authentic reviews and shifting feedback from homeowners, corporate executives, and defence personnel across India who trusted <?= $company3 ?>.
      </p>
    </div>

    <!-- Rating Summary Metric Strip -->
    <div class="p-3 p-lg-4 rounded-4 bg-light border mb-5">
      <div class="row g-3 row-cols-2 row-cols-lg-4 text-center align-items-center">
        <div class="col">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex align-items-center gap-1 text-warning fs-5 mb-1">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <div class="fw-bold text-dark fs-4"><?= $ratingValue ?> / 5.0</div>
            <span class="text-muted small">Average Client Rating</span>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="fw-bold text-dark fs-3 mb-1"><?= $happyClients ?></div>
            <span class="text-muted small">Successful Moves</span>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="fw-bold text-dark fs-3 mb-1"><?= $secureShifting ?></div>
            <span class="text-muted small">Punctual On-Time Deliveries</span>
          </div>
        </div>
        <div class="col">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <div class="fw-bold text-dark fs-3 mb-1"><?= $yearsExperience ?> Years</div>
            <span class="text-muted small">Proven Logistics Legacy</span>
          </div>
        </div>
      </div>
    </div>

    <!-- 9 Verified Testimonials Grid (Responsive 1/2/3 Columns) -->
    <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 mb-5">
      
      <!-- Review 1 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;Shifting our 3BHK home from Jaipur to Bangalore was seamless! The team packed every fragile item with 5-layer bubble wrap. Not a single scratch on our dining table or TV unit. Highly recommended!&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">PS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Pooja &amp; Rajesh Sharma</h6>
              <span class="text-muted small">Household Shifting &bull; Jaipur to Bangalore</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 2 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;We relocated our tech startup office over the weekend. <?= $company3 ?> dismantled, transported, and reassembled all 40 modular workstations with zero business downtime. Exceptional speed and precision.&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">DS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Daniel D'Souza</h6>
              <span class="text-muted small">Corporate Relocation &bull; Gurgaon to Pune</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 3 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;As a retired defence official with frequent transfers, I have tried multiple movers. <?= $company3 ?> is by far the most disciplined and respectful. Punctual truck arrival and completely transparent pricing.&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">VR</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Col. Vikramaditya Rathore</h6>
              <span class="text-muted small">Defence Official Move &bull; Delhi to Chandigarh</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 4 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;I was genuinely nervous about moving my grand piano and imported glassware collection. The custom wooden crating and bubble protection gave me total peace of mind. Everything arrived in mint condition.&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">MS</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Dr. Meenakshi Sundaram</h6>
              <span class="text-muted small">Villa Relocation &bull; Chennai to Hyderabad</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 5 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;Transported my Honda City and Royal Enfield from Kolkata to Bangalore. Both vehicles reached without a speck of scratch or odometer discrepancy. Live GPS updates were shared continuously.&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">VA</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Vikash Agarwal</h6>
              <span class="text-muted small">Car &amp; Bike Carrier &bull; Kolkata to Bangalore</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Review 6 -->
      <div class="col">
        <div class="card h-100 border rounded-4 p-4 shadow-sm choose-feature-card bg-white d-flex flex-column">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <div class="text-warning small">
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle">
              <i class="bi bi-patch-check-fill me-1"></i> Verified Shifting
            </span>
          </div>
          <p class="text-secondary small mb-4 flex-grow-1">
            &ldquo;Being a bank manager, I required IBA-approved consignment bills for official reimbursement. <?= $company3 ?> provided prompt documentation, GST invoices, and seamless transit insurance coverage.&rdquo;
          </p>
          <div class="d-flex align-items-center gap-3 pt-3 border-top">
            <div class="testimonial-avatar-circle">KN</div>
            <div>
              <h6 class="fw-bold text-dark mb-0">Karthik Narayanan</h6>
              <span class="text-muted small">IBA Approved Shifting &bull; Delhi to Mumbai</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>