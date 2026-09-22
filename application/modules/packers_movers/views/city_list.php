<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . $state,
    'bc_desc' => 'Licensed & IBA-approved domestic and local relocation hubs across ' . $state,
    'breadcrumbs' => [
        ['name' => 'Locations', 'url' => site_url('locations')],
        ['name' => $state]
    ]
]);
?>

<!-- City Directory Section -->
<section class="portfolio-area py-5 bg-light border-top border-bottom">
    <div class="container py-lg-3">

        <!-- Section Heading -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="pm-section-pill mb-2">
                <i class="bi bi-geo-alt-fill"></i> Branch Network
            </span>
            <h2 class="fw-bold text-dark mb-2">
                City Hubs in <span class="pm-highlight"><?= $state ?></span>
            </h2>
            <div class="pm-title-line">
                <span class="pm-line-bar"></span>
                <span class="pm-line-dot"></span>
            </div>
            <p class="text-muted small mx-auto max-w-650 mb-0">
                Explore our verified city branches and service areas in <?= $state ?>. We provide dedicated household shifting, vehicle relocation, and door-to-door transit logistics.
            </p>
        </div>

        <?php if (!empty($cities)): ?>
            <!-- City Cards Grid (Compact, Low-Height Cards) -->
            <div class="row g-2 g-md-3 mb-4 mb-lg-5">
                <?php
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                foreach ($cities as $ct):
                    $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                    $cityUrl = site_url("$link-packers-movers-$statename");
                ?>
                    <div class="col-6 col-sm-6 col-md-4 col-lg-3">
                        <div class="pm-city-card shadow-sm">
                            
                            <!-- Icon -->
                            <div class="pm-city-icon-wrap">
                                <i class="bi bi-truck"></i>
                            </div>

                            <!-- City Title & Service Label -->
                            <div class="min-w-0 flex-grow-1">
                                <h3 class="pm-city-title mb-0 text-truncate" title="<?= htmlspecialchars($ct['nm']) ?>">
                                    <?= htmlspecialchars($ct['nm']) ?>
                                </h3>
                                <span class="pm-city-sub text-truncate d-block">Packers &amp; Movers</span>
                            </div>

                            <!-- Compact Arrow -->
                            <div class="pm-city-arrow ms-auto">
                                <i class="bi bi-arrow-right"></i>
                            </div>

                            <a href="<?= $cityUrl ?>" 
                               class="stretched-link" 
                               aria-label="Packers and Movers in <?= htmlspecialchars($ct['nm']) ?>, <?= $state ?>">
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <!-- Empty State -->
            <div class="card border-0 bg-white shadow-sm rounded-4 p-4 p-md-5 text-center my-4 mb-5">
                <div class="pm-feature-icon mx-auto mb-3 pm-feature-icon-lg">
                    <i class="bi bi-geo-alt"></i>
                </div>
                <h4 class="fw-bold text-dark mb-2">Branch Network Expanding in <?= $state ?></h4>
                <p class="text-muted small mx-auto max-w-650 mb-4">
                    Our direct interstate container fleet covers all relocations to and from <?= $state ?>. Contact our central dispatch desk for instant quotes, verified booking schedules, and doorstep surveys.
                </p>
                <div class="d-flex flex-wrap gap-2 justify-content-center">
                    <a <?= $phonehtml ?> class="btn btn-warning fw-bold px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-telephone-fill me-1"></i> Call Dispatch Desk
                    </a>
                    <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-dark fw-bold px-4 py-2 rounded-pill">
                        <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp Inquiry
                    </a>
                </div>
            </div>
        <?php endif; ?>

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
                        <h4 class="fw-bold text-dark mb-1 fs-6">Local Hub Supervision</h4>
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
                        <i class="bi bi-headset me-1"></i> Central Dispatch Desk
                    </span>
                    <h4 class="fw-bold text-dark mb-2">Planning a Move To or From <?= $state ?>?</h4>
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