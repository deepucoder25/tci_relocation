<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- City Customer Reviews Section (Single-Row Swipable Track) -->
<section class="py-5 city-reviews-section border-bottom position-relative">
    <div class="container py-lg-3">

        <!-- Section Header with Side-Swipe Controls -->
        <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4 mb-lg-5">
            <div>
                <span class="city-section-badge mb-2">
                    <i class="bi bi-star-fill"></i> Verified Feedback
                </span>
                <h2 class="fw-bold text-dark display-6 mb-1">
                    What Customers Say in <span class="city-title-highlight"><?= $city ?></span>
                </h2>
                <div class="pm-title-line">
                    <span class="pm-line-bar"></span>
                    <span class="pm-line-dot"></span>
                </div>
                <p class="text-muted small mb-0">
                    Read authentic relocation stories from families and businesses shifted by our certified <?= $city ?> team.
                </p>
            </div>
            <div class="d-none d-md-flex align-items-center gap-2 flex-shrink-0">
                <span class="small text-muted me-1">
                    <i class="bi bi-arrow-left-right text-warning me-1"></i> Swipe
                </span>
                <button type="button" class="city-carousel-btn" id="cityRevPrev" aria-label="Previous review">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button type="button" class="city-carousel-btn" id="cityRevNext" aria-label="Next review">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <div class="row g-4 align-items-stretch mb-4">
            
            <!-- Overall Rating Summary Card (Compact & High-Impact) -->
            <div class="col-12 col-lg-4">
                <div class="city-review-summary-box shadow-sm">
                    
                    <!-- Top Badge & Counter -->
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge bg-warning text-dark px-3 py-1 rounded-pill fw-bold city-review-header-badge">
                                <i class="bi bi-patch-check-fill me-1"></i> Verified Score
                            </span>
                            <span class="small text-white-50">1,480+ Moves</span>
                        </div>
                        
                        <!-- Score & Stars in One Clean Row -->
                        <div class="d-flex align-items-baseline justify-content-between mb-2">
                            <div class="d-flex align-items-baseline gap-2">
                                <span class="display-5 fw-bold text-warning lh-1">4.9</span>
                                <span class="text-white-50 fs-6">/ 5.0</span>
                            </div>
                            <div class="d-flex gap-1 text-warning small">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>

                        <p class="text-white-50 small mb-3 lh-sm city-summary-subtext">
                            Direct customer satisfaction index for <?= $city ?> household and vehicle shifting.
                        </p>
                    </div>

                    <!-- Metrics with Visual Micro-Progress Bars -->
                    <div class="d-flex flex-column gap-2 pt-3 border-top border-white border-opacity-10">
                        <div>
                            <div class="d-flex justify-content-between small text-white-50 city-summary-bar-label">
                                <span>Packing Safety</span>
                                <strong class="text-warning">99.4%</strong>
                            </div>
                            <div class="city-summary-progress-bar">
                                <div class="city-summary-progress-fill w-99-4"></div>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex justify-content-between small text-white-50 city-summary-bar-label">
                                <span>On-Time Arrival</span>
                                <strong class="text-warning">98.8%</strong>
                            </div>
                            <div class="city-summary-progress-bar">
                                <div class="city-summary-progress-fill w-98-8"></div>
                            </div>
                        </div>

                        <div>
                            <div class="d-flex justify-content-between small text-white-50 city-summary-bar-label">
                                <span>Zero Hidden Charges</span>
                                <strong class="text-warning">100%</strong>
                            </div>
                            <div class="city-summary-progress-bar">
                                <div class="city-summary-progress-fill w-100"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Single-Row Swipable Review Cards Track (Aligned Height) -->
            <div class="col-12 col-lg-8">
                <div class="city-reviews-wrapper h-100">
                    <div class="city-reviews-track h-100" id="cityReviewsTrack">
                        
                        <!-- Review 1 -->
                        <div class="city-review-card-item">
                            <div class="city-review-card shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="city-avatar-circle">VS</div>
                                        <div>
                                            <h4 class="fw-bold text-dark mb-0 fs-6">Vikram R. Sharma</h4>
                                            <span class="city-verified-tag"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 text-warning small">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <span class="city-route-badge align-self-start mb-2">
                                    <i class="bi bi-geo-alt me-1"></i><?= $city ?> to Bangalore &bull; 3 BHK Shift
                                </span>
                                <p class="text-muted small mb-0 lh-base flex-grow-1">
                                    &ldquo;I had heavy solid-wood dining furniture and delicate chinaware. The <?= $city ?> crew arrived exactly on time, cushioned every fragile piece with dual-layer bubble wrap, and loaded systematically. Everything arrived without a single scratch. Exactly the price agreed during the survey.&rdquo;
                                </p>
                            </div>
                        </div>

                        <!-- Review 2 -->
                        <div class="city-review-card-item">
                            <div class="city-review-card shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="city-avatar-circle">PM</div>
                                        <div>
                                            <h4 class="fw-bold text-dark mb-0 fs-6">Pooja &amp; Ankit Mehta</h4>
                                            <span class="city-verified-tag"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 text-warning small">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <span class="city-route-badge align-self-start mb-2">
                                    <i class="bi bi-geo-alt me-1"></i>Local Relocation within <?= $city ?>
                                </span>
                                <p class="text-muted small mb-0 lh-base flex-grow-1">
                                    &ldquo;Our gated society in <?= $city ?> has strict lift permissions (10 AM to 4 PM only). The team planned elevator trips smoothly and finished loading by 1 PM. Polite, professional crew who handled our double-door fridge and smart TV with great care.&rdquo;
                                </p>
                            </div>
                        </div>

                        <!-- Review 3 -->
                        <div class="city-review-card-item">
                            <div class="city-review-card shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="city-avatar-circle">RD</div>
                                        <div>
                                            <h4 class="fw-bold text-dark mb-0 fs-6">Col. Rajesh Deshmukh</h4>
                                            <span class="city-verified-tag"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 text-warning small">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <span class="city-route-badge align-self-start mb-2">
                                    <i class="bi bi-geo-alt me-1"></i><?= $city ?> to Pune &bull; Bike &amp; Household
                                </span>
                                <p class="text-muted small mb-0 lh-base flex-grow-1">
                                    &ldquo;The IBA documentation was clean and prompt for bank reimbursement. My Royal Enfield motorcycle was packed inside a customized wooden frame and delivered with zero battery drain or mirror misalignment. Truly dependable team.&rdquo;
                                </p>
                            </div>
                        </div>

                        <!-- Review 4 -->
                        <div class="city-review-card-item">
                            <div class="city-review-card shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="city-avatar-circle">SK</div>
                                        <div>
                                            <h4 class="fw-bold text-dark mb-0 fs-6">Siddharth K. Kulkarni</h4>
                                            <span class="city-verified-tag"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 text-warning small">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <span class="city-route-badge align-self-start mb-2">
                                    <i class="bi bi-geo-alt me-1"></i><?= $city ?> to Delhi NCR &bull; 2 BHK Move
                                </span>
                                <p class="text-muted small mb-0 lh-base flex-grow-1">
                                    &ldquo;The real-time GPS link kept us informed about the truck location on the highway. Delivered right on the promised morning. Unloading and bed reassembly was completed within 2 hours. Very satisfied with the service.&rdquo;
                                </p>
                            </div>
                        </div>

                        <!-- Review 5 -->
                        <div class="city-review-card-item">
                            <div class="city-review-card shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="city-avatar-circle">MS</div>
                                        <div>
                                            <h4 class="fw-bold text-dark mb-0 fs-6">Dr. M. Sundaram</h4>
                                            <span class="city-verified-tag"><i class="bi bi-patch-check-fill"></i> Verified Move</span>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-1 text-warning small">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <span class="city-route-badge align-self-start mb-2">
                                    <i class="bi bi-geo-alt me-1"></i><?= $city ?> to Chennai &bull; Clinic &amp; Home
                                </span>
                                <p class="text-muted small mb-0 lh-base flex-grow-1">
                                    &ldquo;Relocating sensitive medical clinic equipment alongside household furniture was tricky. TCI Relocation used specialized foam crating for glassware and ultrasound devices. Flawless zero-damage execution.&rdquo;
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Mobile Bottom Controls: Displayed below reviews only on mobile -->
                <div class="d-flex d-md-none align-items-center justify-content-center gap-3 mt-3">
                    <button type="button" class="city-carousel-btn city-rev-btn-prev" aria-label="Previous review">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <span class="small text-muted d-flex align-items-center gap-1">
                        <i class="bi bi-arrow-left-right text-warning"></i>
                        <span>Swipe reviews</span>
                    </span>
                    <button type="button" class="city-carousel-btn city-rev-btn-next" aria-label="Next review">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Smooth Swiper & Side Swap Script -->
<script>
(function() {
    function initReviewsSwipe() {
        var track = document.getElementById('cityReviewsTrack');
        if (!track) return;

        function getScrollAmount() {
            var item = track.querySelector('.city-review-card-item');
            return item ? item.offsetWidth + 16 : 320;
        }

        document.querySelectorAll('#cityRevPrev, .city-rev-btn-prev').forEach(function(btn) {
            btn.addEventListener('click', function() {
                track.scrollBy({ left: -getScrollAmount(), behavior: 'smooth' });
            });
        });

        document.querySelectorAll('#cityRevNext, .city-rev-btn-next').forEach(function(btn) {
            btn.addEventListener('click', function() {
                track.scrollBy({ left: getScrollAmount(), behavior: 'smooth' });
            });
        });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initReviewsSwipe);
    } else {
        initReviewsSwipe();
    }
})();
</script>
