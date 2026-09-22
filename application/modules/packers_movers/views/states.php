<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Locations',
    'bc_desc' => 'Licensed & IBA-approved relocation hubs across India',
    'breadcrumbs' => [
        ['name' => 'Locations']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "rajasthan.jpg",
        "category" => "Rajasthan",
        "link" => "rajasthan"
    ],
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
];
?>

<!-- Branch Section -->
<section class="portfolio-area py-5 bg-light border-top border-bottom">
    <div class="container py-lg-3">

        <!-- Section Heading -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="pm-section-pill mb-2">
                <i class="bi bi-geo-alt-fill"></i> Pan-India Network
            </span>
            <h2 class="fw-bold text-dark mb-2">
                Our Presence Across <span class="pm-highlight">India</span>
            </h2>
            <div class="pm-title-line">
                <span class="pm-line-bar"></span>
                <span class="pm-line-dot"></span>
            </div>
            <p class="text-muted small mx-auto max-w-650 mb-0">
                Reliable packing and moving services available in major states. Select your region below to view available city hubs and specialized shifting routes.
            </p>
        </div>

        <!-- Branches Grid -->
        <div class="row g-3 g-md-4 mb-5">
            <?php foreach ($state as $item): ?>
                <!-- Responsive: 2 per row on mobile (col-6), 3 on tablet (col-md-4), 4 on desktop (col-lg-3) -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                    <div class="pm-branch-card h-100 bg-white rounded-4 overflow-hidden position-relative d-flex flex-column shadow-sm">
                        
                        <!-- Image Container -->
                        <div class="pm-branch-img-wrap position-relative overflow-hidden">
                            <img class="img-fluid w-100 pm-branch-img" 
                                 src="<?= base_url() ?>assets/img/state/<?= $item['image'] ?>"
                                 alt="<?= htmlspecialchars($item['category']) ?> Packers and Movers"
                                 loading="lazy">
                            <div class="pm-branch-overlay"></div>
                        </div>

                        <!-- Card Content -->
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <h3 class="pm-branch-title fw-bold text-dark mb-1 fs-6 text-truncate">
                                <?= htmlspecialchars($item['category']) ?>
                            </h3>
                            
                            <p class="pm-branch-coverage text-muted small mb-2 d-flex align-items-center gap-1">
                                <i class="bi bi-geo-alt-fill text-warning flex-shrink-0"></i>
                                <span class="text-truncate">Full State Network</span>
                            </p>

                            <!-- Bottom CTA Row -->
                            <div class="mt-auto pt-2 border-top d-flex align-items-center justify-content-between">
                                <span class="pm-branch-cta-text small fw-bold">View Cities</span>
                                <span class="pm-branch-arrow-circle">
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </div>

                            <a href="<?= site_url($item['link']) ?>" 
                               class="stretched-link" 
                               aria-label="View Packers and Movers in <?= htmlspecialchars($item['category']) ?>">
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- 3 Feature Highlight Cards -->
        <div class="row g-3 g-md-4">
            <div class="col-12 col-md-4">
                <div class="pm-feature-box h-100 d-flex align-items-start gap-3">
                    <div class="pm-feature-icon">
                        <i class="bi bi-truck-front-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-1 fs-6">Direct Company Fleet</h4>
                        <p class="text-muted small mb-0 lh-base">
                            GPS-tracked containerized vehicles operating on scheduled national highway permits with zero third-party transshipment.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="pm-feature-box h-100 d-flex align-items-start gap-3">
                    <div class="pm-feature-icon">
                        <i class="bi bi-building-check"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-1 fs-6">Local State Supervision</h4>
                        <p class="text-muted small mb-0 lh-base">
                            Full-time branch staff and regional managers managing packing crews, lift permissions, and local society clearances.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="pm-feature-box h-100 d-flex align-items-start gap-3">
                    <div class="pm-feature-icon">
                        <i class="bi bi-shield-lock-fill"></i>
                    </div>
                    <div>
                        <h4 class="fw-bold text-dark mb-1 fs-6">Secured Branch Storage</h4>
                        <p class="text-muted small mb-0 lh-base">
                            Safe transit warehousing at major state hubs with 24/7 CCTV surveillance, fire alarms, and palletized cargo stacking.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Central Dispatch Contact Banner -->
        <div class="pm-branch-cta-banner p-4 p-md-5 rounded-4 mt-5">
            <div class="row align-items-center g-4">
                <div class="col-12 col-lg-8">
                    <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle mb-2 px-3 py-1 rounded-pill fw-semibold">
                        <i class="bi bi-headset me-1"></i> Pan-India Dispatch Desk
                    </span>
                    <h4 class="fw-bold text-dark mb-2">Planning a Move To or From Any State?</h4>
                    <p class="text-muted small mb-0">
                        Our central branch logistics desk provides instant fixed estimates, free home video surveys, and complete door-to-door transit schedules.
                    </p>
                </div>
                <div class="col-12 col-lg-4 text-lg-end d-flex flex-wrap gap-2 justify-content-lg-end">
                    <a <?= $phonehtml ?> class="btn btn-warning fw-bold px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                    </a>
                    <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-dark fw-bold px-4 py-2 rounded-pill">
                        <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>