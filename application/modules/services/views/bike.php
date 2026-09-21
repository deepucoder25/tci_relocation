<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bike Transportation',
    'bc_desc' => "Specialized two-wheeler relocation across India with multi-layer armor packing, custom crating, wheel-chock locking, and comprehensive transit insurance.",
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
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
                            <i class="bi bi-shield-check"></i> Zero-Scratch Two-Wheeler Logistics
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-lock-fill me-1"></i> 100% Transit Safe
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Doorstep-to-Doorstep Bike Relocation with Precision Care
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        Transporting a motorcycle requires specialized handling that standard household moving cannot provide. At <strong><?= $company3 ?></strong>, we utilize custom-built enclosed container trucks equipped with pneumatic wheel-chocks and high-tensile nylon tie-down ratchets to ensure your prized machine reaches its destination without a single scratch or mechanical misalignment.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">3-Layer Armor Wrap</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Anti-static bubble wrap, 5-ply corrugated sheets &amp; shrink stretch film guarding tank, fairing, and exhaust from friction.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Wheel Chock Anchors</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Pneumatic front wheel chocks with 4-point nylon ratchet straps stabilizing suspension against severe highway shocks.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Covered Fleet</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Heavy-duty enclosed container trucks offering 100% weather sealing from monsoon rain, road dust, and highway debris.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">100% Transit Cover</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Comprehensive national underwriter policy with pre-move 24-point condition digital photography for complete peace of mind.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Metal Friction</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Live GPS Milestones</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Pan-India Delivery</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Free Instant Quote</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Get Instant Bike Quote
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

<!-- 2. Categories of Two-Wheelers Handled -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-speedometer2"></i> Fleet Versatility
            </span>
            <h2 class="fw-bold text-dark mb-3">Two-Wheelers We Transport Across India</h2>
            <p class="text-muted small mb-0">
                From daily commuters to luxury high-torque superbikes and electric scooters, our crating techniques are customized to match each vehicle's center of gravity and chassis structure.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Commuter Motorcycles -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-bicycle"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Commuter Bikes</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">100cc &ndash; 160cc</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Economical and high-security relocation for Hero Splendor, Honda Shine, Bajaj Pulsar, and TVS Apache with high-density foam wrapping.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Scratch-Proof Tank Cover
                    </div>
                </div>
            </div>

            <!-- Category 2: Royal Enfield & Cruisers -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-compass"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Cruisers &amp; Tourers</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">350cc &ndash; 650cc</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Specialized heavy-chassis anchoring for Royal Enfield Classic, Bullet, Meteor, Himalayan, and Harley-Davidson models.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Heavyweight Dual Strapping
                    </div>
                </div>
            </div>

            <!-- Category 3: Sports & Superbikes -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Sports &amp; Superbikes</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Performance Fleet</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Enclosed bespoke wooden crate packaging for Kawasaki Ninja, BMW GS, Ducati, Yamaha R15/R1, and KTM Duke.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Suspension-Lock Crating
                    </div>
                </div>
            </div>

            <!-- Category 4: Electric Vehicles & Scooters -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-battery-charging"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Scooters &amp; EVs</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Gearless &amp; Electric</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Non-abrasive side-body protective wraps for Honda Activa, Jupiter, Ather 450, Ola S1, and Chetak with battery safety protocol.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> EV Battery Compliance
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Two-Wheeler Safety Process -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Engineering Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">How We Ensure Zero-Damage Bike Transit</h2>
            <p class="text-muted small mb-0">
                Our standardized 4-stage packaging and loading method eliminates the common risks of scratches, brake lever bending, and mirror breakages.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Inspection &amp; Logging</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Prior to packing, our crew conducts a 24-point pre-move condition check, logging odometer readings, fuel levels, and existing marks with customer countersign.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">3-Layer Padding</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Mirrors, headlamps, and indicators are secured with air-bubble film, followed by corrugated cardboard armor on the tank and heavy-duty stretch wrapping.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Hydraulic Loading</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Vehicles are moved inside container trucks via mechanical hydraulic tailgates, locked into custom wheel chocks, and secured with soft nylon ratchets.
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
                        <h5 class="fw-bold text-dark mb-0 fs-6">Doorstep Uncrating</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Upon arrival at your destination city, our local supervisor uncrates your bike, inspects it against the pre-move sheet, and hands over your keys.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Required Documents -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-journal-text"></i> Client Checklist
            </span>
            <h2 class="fw-bold text-dark mb-3">Pre-Shipping Guidelines &amp; Paperwork</h2>
            <p class="text-muted small mb-0">
                Smooth interstate transit requires standard legal documentation and simple vehicle preparation. Here is what you need to keep ready:
            </p>
        </div>

        <div class="row g-4">
            <!-- Left Card: Pre-Move Bike Preparation Checklist -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-tools fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Pre-Shipping Bike Preparation</h5>
                            <span class="text-muted small">Simple steps before our crew arrives</span>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Empty Fuel Tank to &le; 1-2 Litres</strong>
                                <span class="text-muted small">Required by safety transport regulations to prevent flammable vapor buildup in containers.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Remove Detachable Accessories</strong>
                                <span class="text-muted small">Detach phone holders, aftermarket mirrors, toolkits, and loose crash guards for safe packing.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Check Tire Pressure &amp; Clean Body</strong>
                                <span class="text-muted small">Clean surfaces help in precise pre-move scratch identification; optimal tire pressure protects wheel rims.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Right Card: Mandatory Legal Documents -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-file-earmark-lock2 fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Documents Required for Transit</h5>
                            <span class="text-muted small">Mandatory for highway RTO clearance</span>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Registration Certificate (RC Book / Smart Card)</strong>
                                <span class="text-muted small">Self-attested clear photocopy showing engine number and chassis number.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Active Vehicle Insurance Policy</strong>
                                <span class="text-muted small">Valid third-party and comprehensive insurance copy for transit permit issuance.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Owner ID Proof (Aadhaar / Driving License / PAN)</strong>
                                <span class="text-muted small">Government-issued identification copy verifying vehicle ownership.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Bike Relocation FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Bike Moving</h2>
            <p class="text-muted small mb-0">
                Key answers regarding vehicle safety, packaging techniques, fuel regulations, transit timeframes, and insurance.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="bikeFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike1" aria-expanded="true" aria-controls="collapseBike1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-check"></i>
                                </span>
                                <span class="service-faq-title">How is my bike protected against scratches and road vibrations during transit?</span>
                            </button>
                        </h3>
                        <div id="collapseBike1" class="accordion-collapse collapse show" aria-labelledby="headingBike1" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We wrap all painted and fragile parts—including the fuel tank, side cowls, mirrors, headlights, and exhaust—in 3 specialized protective layers: anti-static air bubble film, high-density corrugated sheets, and heavy-duty moisture-proof stretch wrap. Inside our enclosed carriers, each motorcycle is clamped using pneumatic wheel chocks and soft nylon ratchet tie-downs to ensure zero metal-to-metal friction or road bounce.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Zero metal-on-metal contact eliminates scratches, dents, and handlebar misalignments.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike2" aria-expanded="false" aria-controls="collapseBike2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-fuel-pump"></i>
                                </span>
                                <span class="service-faq-title">Why is it mandatory to keep fuel under 1-2 litres before hand-over?</span>
                            </button>
                        </h3>
                        <div id="collapseBike2" class="accordion-collapse collapse" aria-labelledby="headingBike2" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Indian interstate transportation standards and fire safety norms strictly prohibit carrying full or half-full petrol tanks in enclosed commercial vehicles. Maintaining minimal fuel (under 1–2 litres) prevents combustible vapor buildup, hydrostatic pressure leaks, and fire risks during highway journeys while retaining sufficient reserve to start the vehicle upon delivery.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Our team inspects fuel levels during collection and guides you to the nearest fuel station on arrival.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike3" aria-expanded="false" aria-controls="collapseBike3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-umbrella"></i>
                                </span>
                                <span class="service-faq-title">Is 100% transit insurance included with bike transportation?</span>
                            </button>
                        </h3>
                        <div id="collapseBike3" class="accordion-collapse collapse" aria-labelledby="headingBike3" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. We facilitate comprehensive transit insurance through leading national underwriters covering accidental road transit risks, fire, structural impacts, and unexpected transit perils. Every motorcycle undergoes a rigorous 24-point pre-move condition cataloging with time-stamped digital photographs to make any claims seamless, transparent, and prompt.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>An official insurance policy receipt and docket copy are handed to you prior to truck dispatch.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike4" aria-expanded="false" aria-controls="collapseBike4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box-seam"></i>
                                </span>
                                <span class="service-faq-title">Do you provide customized wooden crating for sports bikes and cruisers?</span>
                            </button>
                        </h3>
                        <div id="collapseBike4" class="accordion-collapse collapse" aria-labelledby="headingBike4" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Absolutely. For high-value sports motorcycles, adventure tourers, and heavy cruisers (such as Harley-Davidson, BMW GS, Ducati, Kawasaki, Royal Enfield 650cc), we fabricate tailored ISPM-compliant timber crates with internal suspension anchor brackets and shock-absorbing foam cushions for 360-degree impact isolation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike5" aria-expanded="false" aria-controls="collapseBike5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How many days does interstate bike delivery take across India?</span>
                            </button>
                        </h3>
                        <div id="collapseBike5" class="accordion-collapse collapse" aria-labelledby="headingBike5" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Transit time depends primarily on route distance and highway conditions:
                                <ul class="list-unstyled mt-2 mb-2 d-flex flex-column gap-1 small text-muted">
                                    <li>&bull; <strong>Intra-State / Neighboring Cities (300 &ndash; 700 km):</strong> 2 to 4 business days</li>
                                    <li>&bull; <strong>Major Metro Corridors (800 &ndash; 1,500 km):</strong> 4 to 6 business days</li>
                                    <li>&bull; <strong>Long-Haul Cross Country (1,500+ km):</strong> 6 to 9 business days</li>
                                </ul>
                                Real-time GPS transit milestone notifications are sent to your registered contact number.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingBike6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBike6" aria-expanded="false" aria-controls="collapseBike6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-backpack"></i>
                                </span>
                                <span class="service-faq-title">Can I pack riding gear, helmets, and accessories alongside the bike?</span>
                            </button>
                        </h3>
                        <div id="collapseBike6" class="accordion-collapse collapse" aria-labelledby="headingBike6" data-bs-parent="#bikeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Personal riding gear including helmets, riding jackets, knee guards, and touring saddlebags can be packed in a sealed, labeled heavy-duty corrugated box and placed securely beside your bike in the carrier truck. Loose items should not be tied onto the handlebars or rear rack to prevent scuffing.
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
                            <h6 class="fw-bold text-dark mb-1">Have a specific question about your bike move?</h6>
                            <p class="text-muted small mb-0">Our two-wheeler logistics experts are ready to assist you 24/7.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-shrink-0">
                        <a <?= $phonehtml ?> class="btn btn-warning btn-sm fw-bold px-3 py-2 rounded-pill shadow-sm">
                            <i class="bi bi-telephone-fill me-1"></i> Call Specialist
                        </a>
                        <a href="<?= $whatsapphtml ?>" class="btn btn-outline-dark btn-sm fw-semibold px-3 py-2 rounded-pill">
                            <i class="bi bi-whatsapp text-success me-1"></i> WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>