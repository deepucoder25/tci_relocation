<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include 'city_content.php';
?>

<!-- City About & Local Expertise Section -->
<section class="py-5 bg-white border-bottom position-relative">
    <div class="container py-lg-3">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="city-section-badge mb-2">
                <span class="city-pulse-dot me-1"></span> Verified Branch &bull; <?= $city ?>
            </span>
            <h2 class="fw-bold text-dark display-6 mb-2">
                Premier Packers and Movers in <span class="city-title-highlight"><?= $city ?></span>
            </h2>
            <div class="pm-title-line">
                <span class="pm-line-bar"></span>
                <span class="pm-line-dot"></span>
            </div>
            <p class="text-muted small mx-auto max-w-650 mb-0">
                Professional doorstep packing, secure transport, and careful unloading across <?= $city ?><?= !empty($state) ? ', ' . $state : '' ?> and all major Indian routes.
            </p>
        </div>

        <!-- Main Narrative Card: Col-6 Image & Col-6 Content -->
        <div class="city-about-card mb-4 mb-lg-5">
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- COL-6: Asymmetric 3-Box Bento Media Showcase -->
                <div class="col-12 col-lg-6">
                    <div class="city-mosaic-showcase">
                        <div class="city-mosaic-grid">
                            
                            <!-- Box 1: Tall Hero Portrait (Moving Crew) -->
                            <div class="city-mosaic-box city-mosaic-hero">
                                <img src="<?= base_url('assets/img/tci_about_crew.jpg') ?>" alt="Verified Moving Crew <?= $city ?>" class="city-mosaic-img" loading="lazy">
                            </div>

                            <!-- Box 2: Top Right (Container Fleet) -->
                            <div class="city-mosaic-box city-mosaic-truck">
                                <img src="<?= base_url('assets/img/tci_about_truck.jpg') ?>" alt="Sealed Container Fleet <?= $city ?>" class="city-mosaic-img" loading="lazy">
                            </div>

                            <!-- Box 3: Bottom Right (Doorstep Safe Delivery) -->
                            <div class="city-mosaic-box city-mosaic-transit">
                                <img src="<?= base_url('assets/img/tci_hero_banner.jpg') ?>" alt="Doorstep Relocation <?= $city ?>" class="city-mosaic-img" loading="lazy">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- COL-6: Content Side -->
                <div class="col-12 col-lg-6">
                    <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1 rounded-pill fw-bold mb-2 small city-pill-badge-warning">
                        <i class="bi bi-award-fill text-warning me-1"></i> Dedicated <?= $city ?> Relocation Specialist
                    </span>

                    <?= $htmlcontent ?>


                    <!-- Quick Service Pills -->
                    <div class="d-flex flex-wrap gap-2 mb-0">
                        <span class="city-service-tag"><i class="bi bi-house-door"></i> Household Shifting</span>
                        <span class="city-service-tag"><i class="bi bi-building"></i> Office Relocation</span>
                        <span class="city-service-tag"><i class="bi bi-bicycle"></i> Bike Transport</span>
                        <span class="city-service-tag"><i class="bi bi-car-front"></i> Car Carrier</span>
                        <span class="city-service-tag"><i class="bi bi-boxes"></i> Warehousing</span>
                        <span class="city-service-tag"><i class="bi bi-box2-heart"></i> Fragile Crating</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- 4 Bento Safeguards Grid -->
        <div class="row g-3 g-md-4 mb-4 mb-lg-5">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="city-bento-box d-flex flex-column h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="city-bento-icon flex-shrink-0">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0 fs-6 lh-sm">Trained In-House Staff</h3>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Permanently employed, background-verified packers skilled in high-rise rigging and delicate household handling in <?= $city ?>.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="city-bento-box d-flex flex-column h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="city-bento-icon flex-shrink-0">
                            <i class="bi bi-layers-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0 fs-6 lh-sm">4-Layer Armored Packing</h3>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Thick air-bubble cushion, corrugated wraps, edge corner protectors, and waterproof cling film protecting every item from scuffs.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="city-bento-box d-flex flex-column h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="city-bento-icon flex-shrink-0">
                            <i class="bi bi-truck-front-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0 fs-6 lh-sm">All-Weather Fleet</h3>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Dedicated weatherproof containerized trucks running on national expressways with GPS tracking and zero intermediate transfer.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="city-bento-box d-flex flex-column h-100">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="city-bento-icon flex-shrink-0">
                            <i class="bi bi-shield-lock-fill"></i>
                        </div>
                        <h3 class="fw-bold text-dark mb-0 fs-6 lh-sm">Insurance &amp; Claims</h3>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Fast and clear transit risk coverage guaranteeing swift claim resolution in the rare event of accidental highway damage.
                    </p>
                </div>
            </div>
        </div>

        <!-- Local Coverage & City Map Card: Col-6 Content & Col-6 Map -->
        <div class="city-about-card mb-4 mb-lg-5">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- COL-6: Content Side -->
                <div class="col-12 col-lg-6">
                    <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1 rounded-pill fw-bold mb-2 small city-pill-badge-warning">
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> Local <?= $city ?> Route Network
                    </span>
                    <?= $htmlcontent ?>
                </div>

                <!-- COL-6: Map Side -->
                <div class="col-12 col-lg-6">
                    <div class="city-map-showcase-frame">
                        <!-- Top Floating Operational Badge -->
                        <div class="city-map-float-badge">
                            <span class="city-pulse-dot me-2"></span>
                            <span>Live Service Zone &bull; <?= $city ?></span>
                        </div>

                        <!-- Top Right GPS Badge -->
                        <div class="city-map-gps-badge">
                            <i class="bi bi-crosshair text-warning me-1"></i> GPS Mapped
                        </div>

                        <!-- Map Iframe Wrapper (city_map.php untouched) -->
                        <div class="city-map-inner-embed">
                            <?php include 'city_map.php'; ?>
                        </div>

                        <!-- Bottom Floating Hub Card -->
                        <div class="city-map-info-dock">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="city-map-dock-icon">
                                        <i class="bi bi-geo-alt-fill text-warning"></i>
                                    </div>
                                    <div class="lh-sm">
                                        <div class="city-map-dock-title"><?= $city ?> Relocation Hub</div>
                                        <div class="city-map-dock-sub">100% Doorstep Coverage &bull; Local &amp; Highway Routes</div>
                                    </div>
                                </div>
                                <span class="badge bg-success text-white fw-bold px-2 py-1 rounded-pill city-map-active-badge">
                                    <i class="bi bi-broadcast me-1"></i> ACTIVE
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trust Statistics Strip -->
        <div class="city-stat-strip">
            <div class="row text-center g-3">
                <div class="col-6 col-md-3">
                    <div class="city-stat-number mb-1">15+</div>
                    <div class="small text-white-50">Years of Experience</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="city-stat-number mb-1">50,000+</div>
                    <div class="small text-white-50">Relocations Completed</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="city-stat-number mb-1">100%</div>
                    <div class="small text-white-50">Insured Moving Options</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="city-stat-number mb-1">4.9 / 5.0</div>
                    <div class="small text-white-50">Customer Rating</div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'city_process.php'; ?>

<?php include 'city_reviews.php'; ?>

<?php include 'city_faq.php'; ?>

