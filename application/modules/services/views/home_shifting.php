<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Home Relocation',
    'bc_desc' => "Professional household shifting services across India with 5-layer protective packing, furniture dismantling, safe electronics boxing, and comprehensive transit insurance.",
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
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
                            <i class="bi bi-shield-check"></i> Zero-Damage Household Relocation
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-lock-fill me-1"></i> 100% Transit Safe
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Seamless Domestic &amp; Local Home Shifting Across India
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        Relocating your family and household treasures requires extreme care and methodical organization. At <strong><?= $company3 ?></strong>, we take the anxiety out of moving by deploying professionally trained packaging specialists who wrap every fragile plate, dismantle modular furniture, foam-pack high-end electronics, and carefully set up your new home without disruption.
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
                                <h5 class="fw-bold text-dark mb-0 fs-6">5-Layer Protective Wrap</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Heavy air-bubble wraps, edge protectors, corrugated sheets, and shrink film guarding furniture and polished wood.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-tv-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Electronics Foam Crates</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Custom wooden crates and high-density EPE foam buffering for curved LED TVs, soundbars, and delicate home appliances.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-truck-front-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Dedicated Shifting Vans</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Clean, fully enclosed, carpet-lined container trucks ensuring absolute safety from monsoons, dust, and transit vibrations.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-fill-check"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">All-Risk Transit Cover</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                100% comprehensive goods transit insurance providing financial security against accidental damages throughout relocation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Zero Breakage Track Record</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Furniture Assembly Included</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Pan-India Network</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Free In-Home / Video Survey</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Get Free Moving Estimate
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

<!-- 2. Home Relocation Service Sizes -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-houses"></i> Shifting Solutions
            </span>
            <h2 class="fw-bold text-dark mb-3">Tailored Relocation for Every Home Size</h2>
            <p class="text-muted small mb-0">
                Whether relocating an executive studio or an expansive multi-level villa, our crew sizes and packaging volumes match your specific layout.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: 1 BHK & Studio -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-door-closed"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">1 BHK &amp; Studio Shifts</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Compact &amp; Swift</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Express moves completed in a single shift for bachelors and couples, with systematic wardrobe and kitchenware cartons.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Same-Day Local Move
                    </div>
                </div>
            </div>

            <!-- Category 2: 2 & 3 BHK Homes -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-house-heart"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">2 &amp; 3 BHK Family Homes</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Complete Household</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Full-service packaging for dining sets, beds, modular wardrobes, crockery, refrigerators, washing machines, and rugs.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Bed &amp; Wardrobe Dismantling
                    </div>
                </div>
            </div>

            <!-- Category 3: Villas & Luxury Penthouses -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-building"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Villas &amp; Penthouses</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">White-Glove Tier</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Dedicated senior team handling crystal chandeliers, large pianos, artwork, vintage furniture, and extensive collections.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Custom Timber Crating
                    </div>
                </div>
            </div>

            <!-- Category 4: Single Item & Fragile Express -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-box-seam-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Partial &amp; Item Shifting</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Specialized Transit</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Economical part-load shared transit for individual bulky items—sofa sets, double-door fridges, and exercise equipment.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Part-Load Cost Savings
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Home Moving Process -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Moving Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Our 4-Stage Stress-Free Moving Process</h2>
            <p class="text-muted small mb-0">
                A methodical approach ensuring your possessions arrive safely, organized by room, and ready for immediate living.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Pre-Move Survey</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our surveyor assesses total volume, fragile items, and access elevators, creating an itemized inventory list with an exact fixed price quote.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-box2"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Room-Wise Packing</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our packers pack room by room using color-coded labels, bubble film, corrugated sheets, and heavy-duty cartons so unpacking is effortless.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Systematic Loading</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Heavier furniture is strapped to the truck base using soft belts; fragile crockery boxes and electronics rest securely on top.
                    </p>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">04</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-house-check-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Setup &amp; Assembly</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        At your new home, our crew reassembles beds and wardrobes, unboxes priority items, places furniture according to your plan, and clears debris.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Tips -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-card-checklist"></i> Shifting Checklist
            </span>
            <h2 class="fw-bold text-dark mb-3">Pre-Move Home Checklist &amp; Guidelines</h2>
            <p class="text-muted small mb-0">
                A few easy preparations before moving day will ensure a smooth, expedited packing experience.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Valuables & Separation -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-shield-lock-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Personal Valuables &amp; Papers</h5>
                            <span class="text-muted small">Essential items to personally safeguard</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-gem text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Segregate Cash, Jewellery &amp; Passports</strong>
                                <span class="text-muted small">Carry gold, luxury watches, legal title deeds, and confidential papers personally with you.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-medical text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Pack a First-Night Survival Kit</strong>
                                <span class="text-muted small">Keep basic toiletries, prescription medicines, chargers, and change of clothes in a personal bag.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-building-check text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Society Gate Pass &amp; Lift Permissions</strong>
                                <span class="text-muted small">Secure moving-day gate approvals and elevator reservations from your society maintenance office.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Appliance Preparation -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-plug-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Appliance &amp; Utility Protocol</h5>
                            <span class="text-muted small">Pre-move preparation for electronics &amp; utilities</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-snow text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Defrost Refrigerator 24 Hours Prior</strong>
                                <span class="text-muted small">Empty, clean, and completely dry the freezer to avoid mold growth and water leaks inside the truck.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-droplet-half text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Drain Washing Machine &amp; Water Filters</strong>
                                <span class="text-muted small">Disconnect inlet pipes, secure drum transit bolts if available, and drain remaining internal water.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-fire text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Gas Cylinder &amp; Inflammable Isolation</strong>
                                <span class="text-muted small">Surrender or consume LPG gas; inflammable liquids and matches cannot be loaded into transit vans.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Home Shifting FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Home Relocation</h2>
            <p class="text-muted small mb-0">
                Clear answers on household packing quality, fragile safety, hidden charges, and unpacking assistance.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="homeFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome1" aria-expanded="true" aria-controls="collapseHome1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box-seam"></i>
                                </span>
                                <span class="service-faq-title">What materials do you use to pack delicate kitchenware and crockery?</span>
                            </button>
                        </h3>
                        <div id="collapseHome1" class="accordion-collapse collapse show" aria-labelledby="headingHome1" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Every fragile glass, ceramic dish, and bowl is individually wrapped in clean butcher paper and anti-shock air bubble wrap. They are then nested into double-wall corrugated dish-packs with internal cellular dividers and clearly marked "FRAGILE - HANDLE WITH CARE".
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Zero direct contact between glass items prevents chipping and transit cracks.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome2" aria-expanded="false" aria-controls="collapseHome2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-tools"></i>
                                </span>
                                <span class="service-faq-title">Does your team dismantle and reassemble heavy furniture?</span>
                            </button>
                        </h3>
                        <div id="collapseHome2" class="accordion-collapse collapse" aria-labelledby="headingHome2" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Our relocation crew brings professional toolkits to dismantle double beds, modular wardrobes, dining tables, and sofa parts. All hardware screws and fittings are sealed into labeled pouches. Upon arrival at your new residence, our technicians carefully reassemble each piece in your designated rooms.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Hardware pouches are taped directly to furniture frames so nothing goes missing.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome3" aria-expanded="false" aria-controls="collapseHome3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-cash-stack"></i>
                                </span>
                                <span class="service-faq-title">Are there any hidden costs after the quotation is agreed upon?</span>
                            </button>
                        </h3>
                        <div id="collapseHome3" class="accordion-collapse collapse" aria-labelledby="headingHome3" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Absolutely not. We believe in 100% price transparency. Our written quotation covers packing materials, labor, loading, freight transportation, toll taxes, unloading, and basic unpacking. What is quoted on your signed moving agreement is the exact amount you pay.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome4" aria-expanded="false" aria-controls="collapseHome4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-calendar2-check"></i>
                                </span>
                                <span class="service-faq-title">Can I schedule my household shift on a weekend or public holiday?</span>
                            </button>
                        </h3>
                        <div id="collapseHome4" class="accordion-collapse collapse" aria-labelledby="headingHome4" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes, our crews operate 7 days a week, 365 days a year, including weekends and public holidays. Since weekends are popular for household moves, we advise reserving your moving slot 4 to 6 days in advance to secure your preferred departure time.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome5" aria-expanded="false" aria-controls="collapseHome5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-check"></i>
                                </span>
                                <span class="service-faq-title">How does household transit insurance protect my goods?</span>
                            </button>
                        </h3>
                        <div id="collapseHome5" class="accordion-collapse collapse" aria-labelledby="headingHome5" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                We offer all-risk transit insurance through leading national underwriters. It provides comprehensive financial compensation for household furniture, electronics, and goods against unexpected highway accidents, structural overturns, fire, or weather damage. An official policy certificate is handed to you before the truck departs.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>Insurance covers full declared value of furniture and home appliances.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingHome6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHome6" aria-expanded="false" aria-controls="collapseHome6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-arrow-repeat"></i>
                                </span>
                                <span class="service-faq-title">Do you assist with unpacking and debris removal at the new home?</span>
                            </button>
                        </h3>
                        <div id="collapseHome6" class="accordion-collapse collapse" aria-labelledby="headingHome6" data-bs-parent="#homeFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Upon arrival, our crew unpacks furniture and major appliances, arranges heavy items according to your instructions, and collects all used empty cartons, bubble sheets, and packaging debris, leaving your new residence tidy and ready to enjoy.
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
                            <h6 class="fw-bold text-dark mb-1">Planning a home shift in your city or across states?</h6>
                            <p class="text-muted small mb-0">Our household moving coordinators are available 24/7 to provide free advice.</p>
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
