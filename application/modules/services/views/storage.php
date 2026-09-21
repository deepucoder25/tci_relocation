<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Storage Services',
    'bc_desc' => "Secure short-term and long-term warehousing and storage solutions across India with 24/7 CCTV monitoring, moisture & pest control, palletized vaults, and comprehensive insurance.",
    'breadcrumbs' => [
        ['name' => 'Storage Services']
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
                            <i class="bi bi-shield-check"></i> High-Security Warehousing
                        </span>
                        <span class="badge bg-light text-dark border px-3 py-2 rounded-pill font-monospace small">
                            <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved &bull; ISO Certified
                        </span>
                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill small">
                            <i class="bi bi-lock-fill me-1"></i> 24/7 Monitored Vaults
                        </span>
                    </div>

                    <h2 class="fw-bold text-dark display-6 mb-3">
                        Secure Short-Term &amp; Long-Term Warehousing &amp; Storage
                    </h2>
                    
                    <p class="text-secondary lead fs-6 lh-lg mb-0" style="max-width: 1050px;">
                        Whether you are renovating your residence, traveling overseas on a temporary corporate assignment, or requiring overflow space for commercial inventory, <strong><?= $company3 ?></strong> offers state-of-the-art secure storage facilities. Our clean, pest-controlled, CCTV-monitored warehouses feature elevated palletized racks, fire suppression systems, and customized monthly rental agreements.
                    </p>
                </div>

                <!-- 4 Core Technical Safeguards Grid across col-12 -->
                <div class="row g-3 g-lg-4 mb-4">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-camera-video-fill"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">24/7 CCTV &amp; Guards</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Continuous high-definition video surveillance, biometric warehouse access, and round-the-clock physical security guards.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-shield-shaded"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Pest &amp; Moisture Armor</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Periodic scheduled pest control fumigation, industrial dehumidifiers, and anti-termite treatment protecting woodwork.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-stack"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Palletized Raised Racks</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Goods rest on heavy-duty plastic pallets 6 inches above floor level, completely eliminating ground water risks.
                            </p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="service-overview-card h-100 p-3 p-xl-4 rounded-4 border bg-light d-flex flex-column">
                            <div class="d-flex align-items-center gap-3 mb-2">
                                <div class="service-overview-icon flex-shrink-0">
                                    <i class="bi bi-fire"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-0 fs-6">Fire-Safe Facilities</h5>
                            </div>
                            <p class="text-muted small mb-0 lh-base">
                                Industrial smoke sensors, automated sprinkler arrays, and comprehensive warehouse goods-in-storage insurance policies.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Highlight Trust & Reassurance Bar with CTAs -->
                <div class="service-hero-cta-box p-4 rounded-4 border d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Flexible Monthly Rental</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Barcoded Storage Receipt</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Doorstep Pickup &amp; Redelivery</span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-warning fs-5"></i>
                            <span class="small fw-bold text-dark">Free Volume Estimation</span>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" class="btn btn-warning py-2 px-4 fw-bold rounded-pill shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-calculator me-1"></i> Get Storage Quote
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

<!-- 2. Storage Categories Handled -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-box-seam"></i> Storage Options
            </span>
            <h2 class="fw-bold text-dark mb-3">Versatile Storage Solutions for Every Requirement</h2>
            <p class="text-muted small mb-0">
                Whether needing space for a single sofa set during home repainting or a 5,000 sq.ft. commercial stock distribution depot, we have dedicated vault spaces.
            </p>
        </div>

        <div class="row g-4">
            <!-- Category 1: Household Goods Storage -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-house-door"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Household Goods Storage</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Personal Storage</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Long-term and temporary storage for complete furniture sets, beds, kitchenware, and white goods with multi-layer shrink wrap.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Moisture-Proof Wrapping
                    </div>
                </div>
            </div>

            <!-- Category 2: Commercial & Retail Surplus -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-shop"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Commercial &amp; Retail Stock</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">B2B Inventory</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Secure overflow warehousing for consumer goods, trade expo booths, promotional marketing kits, and seasonal merchandise.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Pallet Storage Available
                    </div>
                </div>
            </div>

            <!-- Category 3: Vehicle & Car Storage -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-car-front-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Vehicle &amp; Bike Storage</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Covered Bays</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Covered indoor vehicle bays for sedans, SUVs, and luxury motorbikes with tyre-pressure checks and battery maintenance.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Battery Maintenance Checks
                    </div>
                </div>
            </div>

            <!-- Category 4: Corporate Archives & Records -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-type-card h-100 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <div class="service-type-icon flex-shrink-0">
                            <i class="bi bi-archive-fill"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Document Archives</h5>
                    </div>
                    <span class="badge bg-light text-secondary border mb-3 small align-self-start">Record Management</span>
                    <p class="text-muted small flex-grow-1 mb-3">
                        Climate-controlled, fire-resistant document vaults for corporate taxation audits, patient medical records, and legal files.
                    </p>
                    <div class="border-top pt-3 small text-success fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> Barcode Box Tracking
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 3. Step-by-Step Storage Process -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-diagram-3"></i> Warehousing Protocol
            </span>
            <h2 class="fw-bold text-dark mb-3">Our 4-Stage Secure Storage Protocol</h2>
            <p class="text-muted small mb-0">
                From doorstep pickup and vacuum packing to secure vaulted storage and on-demand delivery.
            </p>
        </div>

        <div class="row g-4">
            <!-- Step 01 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">01</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-truck"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Doorstep Collection</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Our crew arrives at your residence, wraps all furniture in heavy-duty shrink film and bubble layers, and loads everything into enclosed trucks.
                    </p>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">02</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-qr-code"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Barcode Receipt</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        At the facility, every item is photographed, assigned a unique barcode, and logged on an official Warehouse Receipt signed by both parties.
                    </p>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="service-step-card position-relative d-flex flex-column">
                    <span class="service-step-num position-absolute top-0 end-0 mt-3 me-3">03</span>
                    <div class="d-flex align-items-center gap-3 mb-3 pe-4">
                        <div class="service-step-icon flex-shrink-0">
                            <i class="bi bi-lock"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-0 fs-6">Vaulted Pallet Storage</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Your goods are stacked on heavy-duty elevated pallets inside clean, fumigated warehouse bays monitored by CCTV cameras 24 hours a day.
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
                        <h5 class="fw-bold text-dark mb-0 fs-6">On-Demand Redelivery</h5>
                    </div>
                    <p class="text-muted small mb-0 lh-base">
                        Whenever you are ready to receive your items, notify our desk 48 hours in advance and we dispatch everything directly to your doorstep.
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 4. Preparation Checklist & Storage Guidelines -->
<section class="py-5 bg-light border-top border-bottom">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-card-checklist"></i> Storage Guidelines
            </span>
            <h2 class="fw-bold text-dark mb-3">Pre-Storage Preparation &amp; Prohibited Items</h2>
            <p class="text-muted small mb-0">
                To preserve warehouse hygiene and absolute security, please adhere to these storage protocols.
            </p>
        </div>

        <div class="row g-4">
            <!-- Col 1: Customer Preparation Steps -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-warning-subtle text-warning-emphasis rounded-3">
                            <i class="bi bi-box-seam-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Pre-Storage Preparation Steps</h5>
                            <span class="text-muted small">Standard procedures before warehousing goods</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-snow text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Dry Appliances Completely</strong>
                                <span class="text-muted small">Washing machines, fridges, and water purifiers must be completely drained and dried to prevent mold.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-battery-half text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Remove Batteries from Gadgets</strong>
                                <span class="text-muted small">Extract alkaline and lithium batteries from remotes, toys, and clocks to prevent acidic battery corrosion.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-file-earmark-lock text-primary fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Maintain Storage Agreement &amp; Item Receipt</strong>
                                <span class="text-muted small">Retain your official stamped Warehouse Receipt copy required during item redelivery.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Col 2: Prohibited Goods -->
            <div class="col-12 col-md-6">
                <div class="service-checklist-card h-100 bg-white">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="p-3 bg-primary-subtle text-primary rounded-3">
                            <i class="bi bi-exclamation-octagon-fill fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Strictly Prohibited Items</h5>
                            <span class="text-muted small">Items not permissible for storage facilities</span>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-fire text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Combustibles &amp; Flammable Chemicals</strong>
                                <span class="text-muted small">LPG cylinders, petroleum, paints, kerosene, gunpowders, and thinner liquids are strictly banned.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-egg-fried text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Perishable Groceries &amp; Cooked Food</strong>
                                <span class="text-muted small">Food grains, opened edible packs, and perishables that decay or attract rodents are forbidden.</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <i class="bi bi-shield-x text-warning fs-5 flex-shrink-0 mt-1"></i>
                            <div>
                                <strong class="text-dark d-block small">Illegal Substances, Cash &amp; Contraband</strong>
                                <span class="text-muted small">Currency notes, unvaulted bullion, firearms, and illegal goods are never accepted under any conditions.</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- 5. Specialized Storage FAQs -->
<section class="py-5 bg-white">
    <div class="container py-lg-4">
        
        <div class="text-center max-w-800 mx-auto mb-5">
            <span class="service-pill-tag mb-2">
                <i class="bi bi-patch-question"></i> Clarifications &amp; Queries
            </span>
            <h2 class="fw-bold text-dark mb-3">Frequently Asked Questions on Warehousing</h2>
            <p class="text-muted small mb-0">
                Key questions on minimum storage tenure, rental pricing, humidity protection, and partial retrieval.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-lg-10">
                <div class="accordion service-faq-accordion" id="storageFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore1">
                            <button class="accordion-button service-faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore1" aria-expanded="true" aria-controls="collapseStore1">
                                <span class="service-faq-icon">
                                    <i class="bi bi-calendar-check"></i>
                                </span>
                                <span class="service-faq-title">What is the minimum period I can store my goods?</span>
                            </button>
                        </h3>
                        <div id="collapseStore1" class="accordion-collapse collapse show" aria-labelledby="headingStore1" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our minimum storage tenure is flexible, starting from just 15 to 30 days. You can renew your agreement on a month-to-month basis for as long as needed—whether for a few weeks during home renovation or multiple years while on an international deputation.
                                <div class="service-faq-tip">
                                    <i class="bi bi-info-circle-fill text-warning"></i> <span>Flexible month-to-month contracts with no long-term lock-in penalty.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore2">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore2" aria-expanded="false" aria-controls="collapseStore2">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-check"></i>
                                </span>
                                <span class="service-faq-title">How do you protect furniture and goods against humidity and termites?</span>
                            </button>
                        </h3>
                        <div id="collapseStore2" class="accordion-collapse collapse" aria-labelledby="headingStore2" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Our warehouses feature raised concrete flooring and continuous industrial airflow management. Goods are elevated onto plastic pallets (never touching raw ground) and wrapped in breathable moisture-barrier film. Furthermore, certified pest control teams conduct monthly anti-termite and rodent management fumigation.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore3">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore3" aria-expanded="false" aria-controls="collapseStore3">
                                <span class="service-faq-icon">
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </span>
                                <span class="service-faq-title">Can I access or retrieve part of my belongings during the storage period?</span>
                            </button>
                        </h3>
                        <div id="collapseStore3" class="accordion-collapse collapse" aria-labelledby="headingStore3" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. Because every carton is numbered and barcoded on your Warehouse Receipt, you can request access to specific boxes or request partial doorstep delivery with a simple 24-to-48-hour prior notice to our warehouse manager.
                                <div class="service-faq-tip">
                                    <i class="bi bi-patch-check-fill text-success"></i> <span>Partial retrieval supported with serialized barcode indexing.</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore4">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore4" aria-expanded="false" aria-controls="collapseStore4">
                                <span class="service-faq-icon">
                                    <i class="bi bi-credit-card"></i>
                                </span>
                                <span class="service-faq-title">How are storage fees calculated and billed?</span>
                            </button>
                        </h3>
                        <div id="collapseStore4" class="accordion-collapse collapse" aria-labelledby="headingStore4" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Storage rent is calculated based on the total cubic feet (volume) of space your goods occupy. We generate digital invoices monthly, which can be paid conveniently through UPI, net banking, or debit/credit cards. Long-term advance payments (6–12 months) receive attractive discounted rates.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore5">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore5" aria-expanded="false" aria-controls="collapseStore5">
                                <span class="service-faq-icon">
                                    <i class="bi bi-shield-fill-check"></i>
                                </span>
                                <span class="service-faq-title">Are my goods insured while stored inside your warehouse?</span>
                            </button>
                        </h3>
                        <div id="collapseStore5" class="accordion-collapse collapse" aria-labelledby="headingStore5" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Yes. We arrange comprehensive goods-in-storage insurance coverage underwritten by leading national insurance corporations. This protects your declared goods against fire, burglary, structural hazards, and natural calamities throughout their stay.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="service-faq-item">
                        <h3 class="accordion-header" id="headingStore6">
                            <button class="accordion-button service-faq-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStore6" aria-expanded="false" aria-controls="collapseStore6">
                                <span class="service-faq-icon">
                                    <i class="bi bi-building-lock"></i>
                                </span>
                                <span class="service-faq-title">Can I visit the warehouse before deciding to store my goods?</span>
                            </button>
                        </h3>
                        <div id="collapseStore6" class="accordion-collapse collapse" aria-labelledby="headingStore6" data-bs-parent="#storageFaqAccordion">
                            <div class="accordion-body service-faq-body">
                                Absolutely. We encourage clients to inspect our security infrastructure, pest control cleanliness, and raised pallet racks in person. You can schedule a guided visit during standard business hours Monday through Saturday.
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
                            <h6 class="fw-bold text-dark mb-1">Need secure short-term or long-term storage space?</h6>
                            <p class="text-muted small mb-0">Our warehouse managers are ready to assist you with tailored space plans 24/7.</p>
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
