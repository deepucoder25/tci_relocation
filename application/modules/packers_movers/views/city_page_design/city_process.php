<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
?>

<!-- City Moving Process Section - Rich Colored Background & Glass Skin Boxes -->
<section class="city-process-section border-bottom position-relative" id="cityProcessConsole">
    <!-- Ambient Background Lighting Orbs -->
    <div class="city-process-glow-1" aria-hidden="true"></div>
    <div class="city-process-glow-2" aria-hidden="true"></div>

    <div class="container position-relative city-process-content-container">

        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="city-process-badge mb-2">
                <i class="bi bi-diagram-3-fill"></i> Streamlined 4-Step Process
            </span>
            <h2 class="fw-bold text-white display-6 mb-2">
                How We Relocate You in <span class="city-title-highlight-gold"><?= $city ?></span>
            </h2>
            <div class="city-process-divider">
                <span class="city-process-divider-bar"></span>
                <span class="city-process-divider-dot"></span>
                <span class="city-process-divider-bar right"></span>
            </div>
            <p class="small mx-auto max-w-650 mb-0 city-process-subheading">
                Our certified moving protocol guarantees zero damage, accurate scheduling, and transparent pricing across <?= $city ?><?= !empty($state) ? ', ' . $state : '' ?> and all connecting pan-India routes.
            </p>
        </div>

        <!-- 4-Step Side-by-Side Glass Skin Cards Grid -->
        <div class="city-process-grid-wrap position-relative">
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-xl-4 align-items-stretch">

                <!-- STEP 1: Doorstep Survey & Quote -->
                <div class="col">
                    <div class="city-glass-card" onclick="openCityStageModal(1)" title="Click to view Phase 01 SLA details">
                        <!-- Card Header -->
                        <div class="city-glass-card-header">
                            <span class="city-phase-pill">
                                <i class="bi bi-clipboard2-check-fill"></i> Phase 01
                            </span>
                            <span class="city-phase-timing">
                                <i class="bi bi-clock-history"></i> Day 0 &bull; Survey
                            </span>
                        </div>

                        <!-- Icon & Title in One Row -->
                        <div class="city-glass-title-row">
                            <div class="city-glass-icon-box">
                                <i class="bi bi-clipboard2-data"></i>
                            </div>
                            <h3 class="city-glass-card-title">Doorstep Survey &amp; Quote</h3>
                        </div>

                        <!-- Description -->
                        <p class="city-glass-card-desc">
                            Free in-person inspection or digital video survey in <?= $city ?>. We calculate total volume and provide a guaranteed, binding quote with zero hidden surcharges.
                        </p>

                        <!-- Feature Checklist -->
                        <ul class="city-glass-checklist">
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Free Item Volume Assessment</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Itemized Binding Written Quote</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Dedicated Relocation Manager</span>
                            </li>
                        </ul>

                        <!-- Big Faded Watermark Number -->
                        <span class="city-glass-watermark" aria-hidden="true">01</span>

                        <!-- Card Footer -->
                        <div class="city-glass-footer">
                            <span class="city-glass-footer-pill">
                                <i class="bi bi-shield-lock-fill text-warning me-1"></i> Fixed Price Lock
                            </span>
                            <span class="city-glass-footer-action">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- STEP 2: 4-Layer Armor Packing -->
                <div class="col">
                    <div class="city-glass-card" onclick="openCityStageModal(2)" title="Click to view Phase 02 SLA details">
                        <!-- Card Header -->
                        <div class="city-glass-card-header">
                            <span class="city-phase-pill">
                                <i class="bi bi-layers-fill"></i> Phase 02
                            </span>
                            <span class="city-phase-timing">
                                <i class="bi bi-sun-fill text-warning"></i> Move Day &bull; Morning
                            </span>
                        </div>

                        <!-- Icon & Title in One Row -->
                        <div class="city-glass-title-row">
                            <div class="city-glass-icon-box">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="city-glass-card-title">4-Layer Armor Packing</h3>
                        </div>

                        <!-- Description -->
                        <p class="city-glass-card-desc">
                            Our verified <?= $city ?> crew arrives equipped with bubble wrap, corrugated sheets, stretch film, and custom crates to safeguard electronics, crockery, and furniture.
                        </p>

                        <!-- Feature Checklist -->
                        <ul class="city-glass-checklist">
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>4-Layer Multi-Material Cushioning</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Room-by-Room Coded Labelling</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Safe Bed &amp; Wardrobe Dismantling</span>
                            </li>
                        </ul>

                        <!-- Big Faded Watermark Number -->
                        <span class="city-glass-watermark" aria-hidden="true">02</span>

                        <!-- Card Footer -->
                        <div class="city-glass-footer">
                            <span class="city-glass-footer-pill">
                                <i class="bi bi-patch-check-fill text-warning me-1"></i> Zero-Scratch Policy
                            </span>
                            <span class="city-glass-footer-action">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- STEP 3: GPS Transit & Sealed Cargo -->
                <div class="col">
                    <div class="city-glass-card" onclick="openCityStageModal(3)" title="Click to view Phase 03 SLA details">
                        <!-- Card Header -->
                        <div class="city-glass-card-header">
                            <span class="city-phase-pill">
                                <i class="bi bi-truck-front-fill"></i> Phase 03
                            </span>
                            <span class="city-phase-timing">
                                <i class="bi bi-geo-alt-fill text-danger"></i> Highway Transit
                            </span>
                        </div>

                        <!-- Icon & Title in One Row -->
                        <div class="city-glass-title-row">
                            <div class="city-glass-icon-box">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h3 class="city-glass-card-title">GPS Transit &amp; Sealed Cargo</h3>
                        </div>

                        <!-- Description -->
                        <p class="city-glass-card-desc">
                            Items are strapped with ratchet belts into sealed, weather-proof container vehicles. Direct point-to-point transit from <?= $city ?> with live GPS tracking updates.
                        </p>

                        <!-- Feature Checklist -->
                        <ul class="city-glass-checklist">
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Dedicated All-Weather Container</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Live Highway Satellite Tracking</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>100% Comprehensive Transit Cover</span>
                            </li>
                        </ul>

                        <!-- Big Faded Watermark Number -->
                        <span class="city-glass-watermark" aria-hidden="true">03</span>

                        <!-- Card Footer -->
                        <div class="city-glass-footer">
                            <span class="city-glass-footer-pill">
                                <i class="bi bi-broadcast text-warning me-1"></i> Real-Time GPS
                            </span>
                            <span class="city-glass-footer-action">
                                <i class="bi bi-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- STEP 4: Unloading & Room Setup -->
                <div class="col">
                    <div class="city-glass-card" onclick="openCityStageModal(4)" title="Click to view Phase 04 SLA details">
                        <!-- Card Header -->
                        <div class="city-glass-card-header">
                            <span class="city-phase-pill">
                                <i class="bi bi-house-check-fill"></i> Phase 04
                            </span>
                            <span class="city-phase-timing">
                                <i class="bi bi-check-circle-fill text-success"></i> At Destination
                            </span>
                        </div>

                        <!-- Icon & Title in One Row -->
                        <div class="city-glass-title-row">
                            <div class="city-glass-icon-box">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <h3 class="city-glass-card-title">Unloading &amp; Room Setup</h3>
                        </div>
                        <p class="city-glass-card-desc">
                            Prompt doorstep unloading, systematic room-wise placement, full reassembly of beds and dining tables, followed by complete removal and recycling of packing debris.
                        </p>

                        <!-- Feature Checklist -->
                        <ul class="city-glass-checklist">
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Room-Wise Heavy Item Placement</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Modular Furniture Reassembly</span>
                            </li>
                            <li class="city-glass-check-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Zero-Debris Clean Handover</span>
                            </li>
                        </ul>

                        <!-- Big Faded Watermark Number -->
                        <span class="city-glass-watermark" aria-hidden="true">04</span>

                        <!-- Card Footer -->
                        <div class="city-glass-footer">
                            <span class="city-glass-footer-pill">
                                <i class="bi bi-check2-circle text-success me-1"></i> Ready-to-Live Setup
                            </span>
                            <span class="city-glass-footer-action text-success">
                                <i class="bi bi-check-circle-fill"></i>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Glass Dispatch Strip -->
        <div class="city-glass-dispatch-strip">
            <div class="row align-items-center g-3">
                <div class="col-12 col-lg-8">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="city-glass-beacon">
                            <span class="city-pulse-dot"></span> Live Operations Desk
                        </span>
                        <span class="small text-white-50">&bull; <?= $city ?> Dispatch Hub</span>
                    </div>
                    <h4 class="fw-bold text-white fs-5 mb-1">
                        Need an Urgent Moving Slot or Custom Estimate in <?= $city ?>?
                    </h4>
                    <p class="small mb-0 city-glass-strip-desc">
                        Our local dispatch desk can arrange packing crews and dedicated container vehicles on same-day or planned notice with guaranteed on-time pickup.
                    </p>
                </div>
                <div class="col-12 col-lg-4 text-lg-end">
                    <div class="d-inline-flex flex-wrap gap-2">
                        <a <?= $phonehtml ?> class="btn btn-warning fw-bold px-3 py-2 rounded-pill small shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Call Dispatch
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-light fw-semibold px-3 py-2 rounded-pill small">
                            <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Interactive Frosted Glass SLA Modal -->
<div class="modal fade city-glass-modal" id="cityStageModal" tabindex="-1" aria-labelledby="cityStageModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center gap-2">
                    <span class="city-phase-pill" id="modalStagePill">Phase 01</span>
                    <h5 class="modal-title fw-bold text-white mb-0" id="cityStageModalTitle">Stage Specification</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="small mb-3 city-modal-stage-desc" id="modalStageDesc"></p>
                
                <!-- Metric Highlights -->
                <div class="city-modal-spec-grid" id="modalStageMetrics"></div>

                <!-- Standards Checklist -->
                <h6 class="fw-bold text-warning small mb-2 text-uppercase city-modal-protocol-heading">Verified Operational SLA</h6>
                <ul class="city-glass-checklist mb-4" id="modalStageChecklist"></ul>

                <!-- Modal Actions -->
                <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pt-3 border-top border-secondary border-opacity-25">
                    <span class="small text-white-50"><i class="bi bi-shield-check text-warning me-1"></i> 100% <?= $company3 ?> Assurance</span>
                    <div class="d-flex gap-2">
                        <a <?= $phonehtml ?> class="btn btn-warning fw-bold px-3 py-2 rounded-pill small">
                            <i class="bi bi-telephone-fill me-1"></i> Book for <?= $city ?>
                        </a>
                        <button type="button" class="btn btn-outline-light px-3 py-2 rounded-pill small" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Data & Interaction Script -->
<script>
var cityStagesData = {
    1: {
        pill: "Phase 01 &bull; Survey & Quote",
        title: "Doorstep Survey & Binding Fixed Quote SLA",
        desc: "Our senior relocation specialist inspects every room in <?= $city ?>, catalogs furniture dimensions, evaluates lift capacities, and issues a guaranteed zero-hidden-fee price lock.",
        metrics: [
            { val: "100%", lbl: "Price Lock Guarantee" },
            { val: "₹0", lbl: "Free Doorstep Survey" },
            { val: "30 Mins", lbl: "Avg. Survey Duration" }
        ],
        checklist: [
            "High-rise society lift timing & society gate-pass clearance support",
            "Item-by-item volume audit eliminating move-day price changes",
            "Flexible date rescheduling with zero cancellation penalties"
        ]
    },
    2: {
        pill: "Phase 02 &bull; Armor Packing",
        title: "4-Layer Armor Packing Materials SLA",
        desc: "Equipped with fresh virgin packaging materials in <?= $city ?>, our verified crew protects modular furniture, TVs, fine chinaware, and fragile heirlooms against transit damage.",
        metrics: [
            { val: "5-Ply", lbl: "Heavy Duty Cartons" },
            { val: "Zero", lbl: "Scratch Guarantee" },
            { val: "100%", lbl: "Virgin Fresh Cartons" }
        ],
        checklist: [
            "Custom wooden crating for crystal chandeliers and fragile artworks",
            "Hygienic sealed stretch plastic wraps for mattresses and sofa upholstery",
            "Floor and door-frame foam protectors used during heavy cargo movement"
        ]
    },
    3: {
        pill: "Phase 03 &bull; Highway Transit",
        title: "Point-to-Point Transit & GPS Tracking SLA",
        desc: "Dedicated container fleet transit directly from <?= $city ?> to your destination with high-tensile ratchet strapping, weatherproof lock seals, and real-time highway satellite tracking.",
        metrics: [
            { val: "100%", lbl: "Direct Express Transit" },
            { val: "15 Mins", lbl: "GPS Location Refresh" },
            { val: "100%", lbl: "All-Risk Transit Cover" }
        ],
        checklist: [
            "High-tensile ratchet lashing belts preventing cargo movement inside container",
            "Tamper-evident container seal applied in front of customer before departure",
            "IBA approved consignment note and bill of lading for pan-India passage"
        ]
    },
    4: {
        pill: "Phase 04 &bull; Room Setup",
        title: "Unloading, Furniture Reassembly & Cleanup SLA",
        desc: "At your new residence in <?= $city ?> or destination city, our unloading crew carries each box to its designated room, reassembles modular furniture, and disposes of all packaging debris.",
        metrics: [
            { val: "Zero", lbl: "Debris Left Behind" },
            { val: "100%", lbl: "Inventory Verification" },
            { val: "4.9/5", lbl: "Satisfaction Rating" }
        ],
        checklist: [
            "Item-by-item verification against original inventory survey packing list",
            "Careful reassembly of king-size beds, modular wardrobes, and dining tables",
            "Eco-friendly collection, clean haul-away, and recycling of all cartons"
        ]
    }
};

function openCityStageModal(stageNum) {
    var data = cityStagesData[stageNum];
    if (!data) return;

    document.getElementById('modalStagePill').innerHTML = data.pill;
    document.getElementById('cityStageModalTitle').innerHTML = data.title;
    document.getElementById('modalStageDesc').innerHTML = data.desc;

    // Build Metrics
    var metricsHtml = '';
    data.metrics.forEach(function(m) {
        metricsHtml += '<div class="city-modal-spec-box">' +
            '<div class="city-modal-spec-val">' + m.val + '</div>' +
            '<div class="city-modal-spec-lbl">' + m.lbl + '</div>' +
        '</div>';
    });
    document.getElementById('modalStageMetrics').innerHTML = metricsHtml;

    // Build Checklist
    var checkHtml = '';
    data.checklist.forEach(function(c) {
        checkHtml += '<li class="city-glass-check-item">' +
            '<i class="bi bi-check-circle-fill"></i>' +
            '<span>' + c + '</span>' +
        '</li>';
    });
    document.getElementById('modalStageChecklist').innerHTML = checkHtml;

    // Show modal
    var modalEl = document.getElementById('cityStageModal');
    if (window.bootstrap && bootstrap.Modal) {
        var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
        modal.show();
    }
}
</script>