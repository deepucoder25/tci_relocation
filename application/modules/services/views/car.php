<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation',
    'bc_desc' => "Enclosed hydraulic car carrier trailers, wheel-chock tie-down locks, 360-degree digital inspection, and 100% comprehensive transit insurance across India.",
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
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
                            <i class="bi bi-shield-check"></i> Zero-Depreciation Car Carrier Logistics
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-lock-fill me-1"></i> 100% Transit Safe
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Secure Door-to-Door Car Transportation Across India
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        Driving your vehicle across hundreds or thousands of kilometres risks highway wear, tyre degradation, engine fatigue, and road hazards. At <strong><?= $company3 ?></strong>, we relocate private hatchbacks, luxury sedans, premium SUVs, and sports cars inside specialized covered car carrier trailers equipped with hydraulic ramps, 4-point wheel-chock straps, and satellite GPS monitoring.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Hydraulic Car Carriers</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Custom-engineered covered trailers with variable-angle hydraulic loading ramps to prevent underbody grounding.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">4-Point Wheel Locks</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Heavy-duty nylon over-wheel lasso straps locking every tyre into chassis anchors without metal-on-body contact.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-camera-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">360° Digital Audit</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Complete pre-move condition report cataloging scratches, dents, odometer reading, and fuel levels with customer sign-off.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">100% Comprehensive Cover</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Certified national underwriter marine transit insurance providing zero-depreciation coverage throughout the journey.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Odometer Run</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Live GPS Milestones</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Pan-India Doorstep Delivery</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Free Instant Valuation</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Get Instant Car Quote
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

<!-- 2. Categories of Vehicles Handled -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-car-front"></i> Vehicle Spectrum
            </span>
            <h2 class="fw-bold text-dark mb-3">All Categories of Four-Wheelers Handled</h2>
            <p class="text-muted small mb-0">
                Whether relocating an economical family hatchback, an all-terrain 4x4, an electric vehicle, or a low-slung performance sports car, our carrier decks adapt to fit precise dimensions.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Sedans & Hatchbacks -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Hatchbacks &amp; Sedans</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Daily Drivers</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Reliable nationwide relocation for Swift, i20, Honda City, Dzire, Verna, and Ciaz with sealed cabin wraps and tyre chocks.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Paint-Guard Protection
                    </div>
                </div>
            </div>

            <!-- Category 2: SUVs & MUVs -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-shield-shaded"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">SUVs, MUVs &amp; 4x4s</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">High Clearance Fleet</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Reinforced deck anchors for Toyota Fortuner, Innova Crysta, Mahindra Thar, Scorpio-N, Tata Safari, and Creta.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Heavy-Chassis Stabilizers
                    </div>
                </div>
            </div>

            <!-- Category 3: Luxury & Sports Vehicles -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Luxury &amp; Exotics</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Premium Tier</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        White-glove covered container transit for Mercedes-Benz, BMW, Audi, Jaguar, Porsche, and Range Rover with low-incline ramp boards.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Low-Clearance Ramps
                    </div>
                </div>
            </div>

            <!-- Category 4: Electric & Hybrid Vehicles -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-ev-front"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Electric Vehicles (EV)</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Battery Safety Protocol</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Certified battery temperature isolation protocols for Tata Nexon EV, MG ZS EV, Hyundai Ioniq 5, and BYD Atto 3.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> High-Voltage Safety Check
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Car Safety Process -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Engineering Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">How We Ensure Zero-Damage Car Transit</h2>
            <p class="text-muted small mb-0">
                A standardized 4-stage vehicle transit protocol adhering to ISO safety benchmarks and automotive logistics standards.
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
                        <h5 class="fw-bold text-dark mb-0 fs-6">360° Digital Audit</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our surveyor inspects vehicle bodywork, recording paint marks, windshield condition, tyre depth, odometer reading, and fuel level in a signed condition sheet.
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
                        <h5 class="fw-bold text-dark mb-0 fs-6">Interior Masking</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Steering wheel, driver seat, floor mats, and gear knob are covered with disposable protective film to keep luxury upholstery clean and dust-free.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-arrow-up-right-circle"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Low-Incline Loading</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Cars are driven smoothly onto hydraulic ramps at a low incline angle to prevent bumper scrapes, then secured with 4-wheel ratchet chocks on trailer bed.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-key-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Doorstep Handover</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        On reaching the destination city, our supervisor unloads your car, cross-verifies against the original inspection docket, and hands over your vehicle keys.
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
                <i class="bi bi-check2-square"></i> Preparation Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Car Transport Handover Checklist &amp; Documents</h2>
            <p class="text-muted small mb-0">
                Keep the following documents and vehicle preparations ready prior to the carrier truck arrival for smooth transit clearance.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Mandatory Documents -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-file-earmark-lock2 fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Mandatory Transit Documents</h5>
                            <span class="text-muted small">Required for highway RTO &amp; police transit clearance</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Registration Certificate (RC Book / Smart Card)</strong>
                                <span class="text-muted small">Photocopy verifying engine number, chassis number, and registered vehicle owner.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Active Comprehensive Vehicle Insurance</strong>
                                <span class="text-muted small">Valid policy copy required for statutory state border transit permits and dockets.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-text-fill text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Owner ID Proof (Aadhaar / Passport / Driving License)</strong>
                                <span class="text-muted small">Government identification matching registered vehicle ownership documents.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Vehicle Handover Readiness -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-gear-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Handover Readiness Steps</h5>
                            <span class="text-muted small">Vehicle preparation prior to carrier loading</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-fuel-pump-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Maintain 10–15 Litres of Fuel</strong>
                                <span class="text-muted small">Keeps vehicle lightweight for safety regulations while allowing loading and delivery drive.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-box2-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Remove Personal &amp; Loose Valuables</strong>
                                <span class="text-muted small">Clear all personal belongings, dash cams, loose items, and toll FASTag balances for security.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-key-fill text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Disable Alarms &amp; Retain Spare Key</strong>
                                <span class="text-muted small">Hand over primary key and keep spare key; disable anti-theft alarms to prevent battery drain.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Car Relocation FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Car Transport</h2>
            <p class="text-muted small mb-0">
                Transparent answers regarding carrier types, scratch protection, insurance claims, and interstate transit timelines.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="carFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar1" aria-expanded="true" aria-controls="collapseCar1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-truck"></i>
                                </span>
                                <span class="service-faq-title">How is my car transported—open trailer or enclosed carrier?</span>
                            </button>
                        </h3>
                        <div id="collapseCar1" class="accordion-collapse collapse show" aria-labelledby="headingCar1" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We utilize covered, enclosed multi-car carriers and specialized enclosed single-car containers. Enclosed carriers completely isolate your vehicle from highway gravel, monsoon rain, scorching sun, and road dust, preserving the showroom paint finish throughout the interstate journey.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Enclosed carriers protect paintwork from stone chips and harsh weather.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar2" aria-expanded="false" aria-controls="collapseCar2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-speedometer"></i>
                                </span>
                                <span class="service-faq-title">Will my car be driven during the transportation process?</span>
                            </button>
                        </h3>
                        <div id="collapseCar2" class="accordion-collapse collapse" aria-labelledby="headingCar2" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                No. Your car will only be driven onto the hydraulic trailer ramp at the origin terminal and off the trailer ramp at the destination hub (usually less than 1–2 km in total). We record and countersign the exact odometer reading before loading and upon doorstep delivery.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Exact odometer mileage is verified and signed on the pre-transit docket.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar3" aria-expanded="false" aria-controls="collapseCar3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box-seam"></i>
                                </span>
                                <span class="service-faq-title">Can I place personal items or luggage inside the car trunk?</span>
                            </button>
                        </h3>
                        <div id="collapseCar3" class="accordion-collapse collapse" aria-labelledby="headingCar3" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                As per Motor Vehicle Act safety guidelines and highway checkpost norms, commercial car carriers are licensed solely for vehicular transport. Placing heavy luggage or loose items in the passenger cabin is prohibited. However, modest trunk storage (up to 20–30 kg of packed personal baggage in boot) is permissible at the owner's risk, provided no inflammable or restricted goods are inside.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar4" aria-expanded="false" aria-controls="collapseCar4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </span>
                                <span class="service-faq-title">How does transit insurance coverage work for car transport?</span>
                            </button>
                        </h3>
                        <div id="collapseCar4" class="accordion-collapse collapse" aria-labelledby="headingCar4" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We arrange comprehensive marine transit insurance issued by national public underwriters. It covers damages resulting from road transit accidents, fire, structural overturn, and natural calamities. With our pre-move 360-degree digital condition photographic record, genuine claim settlements are processed quickly without disputes.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>Insurance policy certificate is issued prior to trailer departure.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar5" aria-expanded="false" aria-controls="collapseCar5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <span class="service-faq-title">How many days does interstate car transportation take?</span>
                            </button>
                        </h3>
                        <div id="collapseCar5" class="accordion-collapse collapse" aria-labelledby="headingCar5" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Transit duration depends on route corridors and distance:
                                <ul class="list-unstyled mt-2 mb-2 d-flex flex-column gap-1 small text-muted">
                                    <li>&bull; <strong>Intra-State / Neighboring Hubs (300 &ndash; 600 km):</strong> 2 to 4 business days</li>
                                    <li>&bull; <strong>Major Metro Routes (800 &ndash; 1,500 km):</strong> 4 to 6 business days</li>
                                    <li>&bull; <strong>Cross-Country Relocation (1,500+ km):</strong> 6 to 9 business days</li>
                                </ul>
                                Daily vehicle location tracking status is communicated to your mobile number.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingCar6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCar6" aria-expanded="false" aria-controls="collapseCar6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-arrow-up-right-circle"></i>
                                </span>
                                <span class="service-faq-title">How are low-ground-clearance luxury and sports cars safely loaded?</span>
                            </button>
                        </h3>
                        <div id="collapseCar6" class="accordion-collapse collapse" aria-labelledby="headingCar6" data-bs-parent="#carFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                For performance cars and sports sedans with low approach angles, our carrier trucks deploy extended race ramps and air-suspension bed lowering. This flattens the ramp angle to less than 8 degrees, preventing front splitters, diffusers, and rocker panels from grazing the ramp edge.
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
                            <h6 class="fw-bold text-dark mb-1">Have a specific question about your car relocation?</h6>
                            <p class="text-muted small mb-0">Our car carrier logistics managers are available 24/7 to advise you.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-2 flex-shrink-0">
                        <a <?= $phonehtml ?> class="btn btn-warning btn-sm fw-bold px-3 py-2 rounded-pill shadow-sm">
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
