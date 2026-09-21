<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading & Unloading',
    'bc_desc' => "Ergonomic heavy-lifting equipment, furniture dollies, hydraulic tailgates, and trained loading crews ensuring zero injury and scratch-free cargo handling.",
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
    ]
]); ?>

<!-- 1. Hero Overview Section (Full Width Content on col-12) -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        <div class="row">
            <div class="col-12">
                
                <!-- Header Badge & Title Block -->
                <div class="mb-4">
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <span class="service-pill-tag">
                            <i class="bi bi-shield-check"></i> Precision Handling Logistics
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-lock-fill me-1"></i> 100% Zero-Drop Safety
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Safe &amp; Professional Loading and Unloading Services
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        The physical transfer of bulky furniture, heavy appliances, fragile electronics, and commercial equipment carries the highest risk of personal injury and property damage. At <strong><?= $company3 ?></strong>, our verified loading crews use ergonomic lifting harnesses, rubberized furniture dollies, hydraulic tailgates, and non-slip ramp runners to maneuver heavy cargo through narrow corridors, staircases, and truck beds without a single scuff.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-truck-flatbed"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Hydraulic Tailgate Lifts</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Truck-mounted hydraulic platforms enabling smooth horizontal lift for heavy safes, gym units, and appliances.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-arrows-move"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Multi-Wheel Dollies</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Polyurethane non-marking wheel dollies allowing silent, scratch-free movement across marble and polished tile floors.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Doorframe Armor</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Neoprene door jamb guards and padded elevator wall covers shielding tight entryways from accidental scrapes.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Certified Lifting Crews</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Full-time background-verified handlers equipped with anti-slip grip gloves and shoulder-mount leverage straps.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Floor Scuffs</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Ergonomic Strapping</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">High-Floor Walkup Specialists</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Labor-Only or Full Fleet</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Book Loading Crew
                        </button>
                        <a <?= $phonehtml ?> class="btn btn-outline-dark py-2 px-4 fw-bold rounded-pill">
                            <i class="bi bi-telephone-fill text-warning me-1"></i> <?= $phone ?>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- 2. Cargo Categories Handled -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-boxes"></i> Cargo Spectrum
            </span>
            <h2 class="fw-bold text-dark mb-3">Specialized Handling for Every Cargo Category</h2>
            <p class="text-muted small mb-0">
                From delicate high-end televisions and glass showcases to heavy industrial machinery and home gym weights, our crews apply appropriate leverage techniques.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Heavy Appliances -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-refrigerator"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Home Appliances</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Upright Transport</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Double-door refrigerators, front-load washers, dishwashers, and ovens moved vertically with appliance hand trucks.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Upright Compressor Safety
                    </div>
                </div>
            </div>

            <!-- Category 2: Solid Wood & Stone Furniture -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-lamp"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Solid Wood &amp; Marble</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Heavyweight Leverage</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Teakwood beds, marble-top dining tables, carved wooden almirahs, and sectional sofas balanced with padded shoulder straps.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Corner Cushion Clamps
                    </div>
                </div>
            </div>

            <!-- Category 3: Commercial & IT Equipment -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-printer"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Commercial &amp; IT Assets</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Sensitive Electronics</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Multi-function heavy office photocopiers, rack-mount server enclosures, desktop towers, and executive boardroom furniture.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Anti-Vibration Base Skids
                    </div>
                </div>
            </div>

            <!-- Category 4: Industrial & Machinery Freight -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-gear-wide"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Industrial Machinery</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Heavy Equipment</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Palletized factory parts, CNC machine components, electric motors, and wooden machinery crates loaded with hydraulic jacks.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Pallet Jack Deployment
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Safe Handling Protocol -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Handling Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Our 4-Stage Ergonomic Loading Protocol</h2>
            <p class="text-muted small mb-0">
                A scientific approach to balance, weight distribution, and cavity locking that protects goods and properties.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-rulers"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Pathway &amp; Dimension Survey</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our lead supervisor measures doorframes, stairwell turning points, and lift heights to plot the safest path of egress without bottleneck friction.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Surface Shielding</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Hardwood floor runners, rubber doorway edge guards, and padded lift panels are set up to eliminate any chance of cosmetic property damage.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-layers-half"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Gravity-Balanced Stacking</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Inside the vehicle, weight is distributed uniformly: heavy furniture rests against bottom ribs; medium cartons stack centrally; delicate goods rest on top.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-house-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Placement &amp; Position</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Upon unloading at destination, our crew deposits every box and heavy item precisely where you designate, eliminating secondary room rearrangement.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Site Tips -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-check2-circle"></i> Site Readiness
            </span>
            <h2 class="fw-bold text-dark mb-3">Loading Day Site Preparation Checklist</h2>
            <p class="text-muted small mb-0">
                Simple coordination steps to ensure rapid and seamless execution by our loading crew.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Site & Pathway Readiness -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-door-open-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Access &amp; Pathway Clearances</h5>
                            <span class="text-muted small">Site preparation for unhindered mover transit</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-arrow-down-up text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Service Elevator Booking &amp; Key Reservation</strong>
                                <span class="text-muted small">Reserve exclusive service elevator use to minimize turnaround intervals and transit stairs.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-signpost-2 text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Clear Hallways &amp; Main Corridors</strong>
                                <span class="text-muted small">Remove floor mats, footwear racks, and wall paintings along passages to prevent snagging.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-truck text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Truck Parking Clearance Near Entry Gate</strong>
                                <span class="text-muted small">Ensure building management allocates vehicle parking within 15–20 meters of the main lift/stairwell.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Cargo Readiness -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-box-seam-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Cargo Item Readiness</h5>
                            <span class="text-muted small">Simple item preparations for rapid handling</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-tag-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Label Fragile &amp; Heavyweight Items</strong>
                                <span class="text-muted small">Mark delicate boxes prominently with red tags to ensure priority top-tier truck positioning.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-lock-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Tape Drawer Slides &amp; Wardrobe Doors</strong>
                                <span class="text-muted small">Lock or tape dresser drawers shut to prevent sudden opening during stairwell maneuvers.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-exclamation-triangle-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Disconnect Cable Wires &amp; Water Pipes</strong>
                                <span class="text-muted small">Ensure appliances, televisions, and PC power cords are untangled, coiled, and taped securely.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Loading/Unloading FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Loading Services</h2>
            <p class="text-muted small mb-0">
                Transparent answers regarding labor-only booking, high-floor maneuvers, floor protection, and heavy equipment handling.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="loadingFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad1" aria-expanded="true" aria-controls="collapseLoad1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-people"></i>
                                </span>
                                <span class="service-faq-title">Can I hire only a loading or unloading crew without booking a truck?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad1" class="accordion-collapse collapse show" aria-labelledby="headingLoad1" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. We offer flexible labor-only loading and unloading services. Whether you need an experienced crew to unload a self-driven truck, shift heavy furniture between rooms, or load commercial containers, you can book our trained manpower on an hourly or per-project basis.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Labor-only booking includes all necessary lifting dollies and shoulder straps.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad2" aria-expanded="false" aria-controls="collapseLoad2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-building-up"></i>
                                </span>
                                <span class="service-faq-title">How do you manage heavy furniture in buildings without service elevators?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad2" class="accordion-collapse collapse" aria-labelledby="headingLoad2" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our handlers are specifically trained in multi-person stairwell leverage techniques. By using heavy-duty forearm and shoulder lifting harnesses, we distribute weight across the body's strongest muscle groups, allowing safe, controlled ascent and descent even up 3rd or 4th-floor walk-ups without elevator assistance.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad3" aria-expanded="false" aria-controls="collapseLoad3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-check"></i>
                                </span>
                                <span class="service-faq-title">How do you prevent marble, granite, or wooden floors from getting scratched?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad3" class="accordion-collapse collapse" aria-labelledby="headingLoad3" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We lay down protective neoprene runners along high-traffic corridors and entryways. Furthermore, our furniture dollies feature non-marking polyurethane rubber wheels that roll smoothly over delicate Italian marble, vitrified tiles, and wooden laminate without leaving black tread marks or scratches.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad4" aria-expanded="false" aria-controls="collapseLoad4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-tools"></i>
                                </span>
                                <span class="service-faq-title">What equipment does your crew bring for heavy cargo handling?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad4" class="accordion-collapse collapse" aria-labelledby="headingLoad4" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our crews arrive fully equipped with:
                                <ul class="list-unstyled mt-2 mb-0 d-flex flex-column gap-1 small text-muted">
                                    <li>&bull; <strong>Multi-Wheel Furniture Dollies</strong> with non-marking rubber wheels.</li>
                                    <li>&bull; <strong>Adjustable Shoulder Lifting Straps</strong> for heavy wardrobes and sofas.</li>
                                    <li>&bull; <strong>Hydraulic Hand Pallet Trucks</strong> for palletized commercial freight.</li>
                                    <li>&bull; <strong>Neoprene Doorframe Protectors</strong> and staircase corner buffers.</li>
                                    <li>&bull; <strong>High-Tension Nylon Ratchets</strong> for securing loads inside container trucks.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad5" aria-expanded="false" aria-controls="collapseLoad5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </span>
                                <span class="service-faq-title">Are your handlers background verified and experienced?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad5" class="accordion-collapse collapse" aria-labelledby="headingLoad5" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Every member of our loading crew is a full-time, Aadhaar-verified employee trained in ergonomic manual handling and respectful customer service. We do not use untrained daily wage laborers from open street markets.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>100% in-house, background-checked professional loading staff.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingLoad6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLoad6" aria-expanded="false" aria-controls="collapseLoad6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How quickly can you dispatch a loading/unloading team?</span>
                            </button>
                        </h3>
                        <div id="collapseLoad6" class="accordion-collapse collapse" aria-labelledby="headingLoad6" data-bs-parent="#loadingFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Across all major metropolitan cities, we offer same-day emergency dispatch with crew arrival in as little as 2 to 4 hours from confirmation, subject to slot availability.
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Still Have Questions CTA Banner -->
                <div class="service-faq-cta-banner mt-4 d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
                    <div class="d-flex align-items-center gap-3">
                        <div class="service-faq-icon bg-warning text-dark flex-shrink-0">
                            <i class="bi bi-headset fs-5"></i>
                        </div>
                        <div>
                            <h6 class="fw-bold text-dark mb-1">Need heavy-lifting assistance or an experienced loading crew?</h6>
                            <p class="text-muted small mb-0">Our operations supervisors are ready to assist you round the clock.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-shrink-0">
                        <a <?=  $phonehtml ?> class="btn btn-warning btn-sm fw-bold px-3 py-2 rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" class="btn btn-outline-dark btn-sm fw-semibold px-3 py-2 rounded-pill">
                            <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>